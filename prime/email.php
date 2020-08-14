<?php
	$row = 1;
	if (file_exists("../images/prime/emails.csv"))
	echo 1;
	else {
		echo 2;
	}
	exit;
if (($handle = fopen("../images/prime/emails.csv", "r")) !== FALSE) {
	while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
		$num = count($data);
		if ((count($data) > 2) and ($row > 1)) {
			$emails[$row]['nome'] = (!empty($data[1])) ? utf8_encode($data[1]) : '';
			$emails[$row]['email'] = (!empty($data[2])) ? utf8_encode($data[2]) : '';
		}	
		$row++;
	}
}

header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'utf-8');

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	// Import PHPMailer classes into the global namespace
	// These must be at the top of your script, not inside a function

	// Load Composer's autoloader
	require '../vendor/autoload.php';

	include_once 'senha.php';// separei as senha para tentar proteger a senha no git

	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$emailCliente = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$telefone = filter_input(INPUT_POST, 'telefone', FILTER_DEFAULT);
	$msg = filter_input(INPUT_POST, 'msg', FILTER_DEFAULT);
	$razao = filter_input(INPUT_POST, 'razao', FILTER_DEFAULT);
	$assunto = filter_input(INPUT_POST, 'assunto', FILTER_DEFAULT);

	$qtd = filter_input(INPUT_POST, 'qtd', FILTER_DEFAULT);
	
	$nome = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
	$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_DEFAULT);

	$dtEvento = filter_input(INPUT_POST, 'data', FILTER_DEFAULT);
	$hrEvento = filter_input(INPUT_POST, 'hora', FILTER_DEFAULT);

	$nomeCliente = ((empty($nome)) and (empty($sobrenome)))?  "Sem nome": ucwords($nome) . " " .ucwords($sobrenome);
	$evento = ((empty($dtEvento)) and (empty($hrEvento)))?  "Sem data": $dtEvento . " " . $hrEvento;
	$assunto = (empty($assunto))?  ($razao): (ucfirst($assunto));
	
	$assunto .= " Lagoa";
	
	$msghtml = file_get_contents("formulario.html");
	$msghtml = (!empty($assunto)) ? str_replace("§assunto§",$assunto, $msghtml):'';
	$msghtml = (!empty($nomeCliente)) ? str_replace("§nome§",$nomeCliente, $msghtml):'';
	$msghtml = (!empty($evento)) ? str_replace("§data§","Data: ".$evento, $msghtml):'';
	$msghtml = (!empty($telefone)) ? str_replace("§telefone§", "Telefone: ".$telefone, $msghtml):'';
	$msghtml = (!empty($qtd)) ? str_replace("§qtd§","Quantidade: ".$qtd, $msghtml):'';
	$msghtml = (!empty($emailCliente)) ? str_replace("§email§","E-mail: ".$emailCliente, $msghtml):'';
	$msghtml = (!empty($msg)) ? str_replace("§msg§","Mensagem: <br>".$msg, $msghtml):'';
	// echo $msghtml;
	// exit;
		$msgtxt = "Eu $nomeCliente gostaria que entrar em contacto para meu email: $emailCliente, para tratarmos de: $assunto especificamente com a seguinte mensagem: $msg para a data $evento e com $qtd pessoas.";
		// $msghtml = "Eu $nomeCliente gostaria que entrar em contacto para meu email: $emailCliente, para tratarmos de: $assunto especificamente com a seguinte mensagem: $msg para a data $evento e com $qtd pessoas.";

	try {
		//Server settings
		$mail->SMTPDebug = 0; // enables SMTP debug information (for testing)// 1 = errors and messages// 2 = messages only
		// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		$mail->isSMTP();                                            // Send using SMTP
		$mail->Password   = $Password;                               // SMTP password
		$mail->Username   = $usuario;                     // SMTP username
		$mail->Host = substr(strstr($usuario, "@"), 1); 	       // SMTP server
		// $mail->Host       = 'smtp1.example.com';                    // Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		//Recipients
		$mail->setFrom('merkado@outlook.pt', 'Merkado'); //Remetente
		$mail->addReplyTo('merkado@outlook.pt', 'Merkado'); //Remetente
		if (gettype($emails)=='array')
		foreach ($emails as $k=> $v) {
			$mail->addAddress("$v[email]", "$v[nome]"); //Remetente
		}
		// $mail->setFrom('automatico@merkadorestaurante.pt', 'Merkado on-line'); //
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addAddress("hardjunior1@gmail.com", "Merkado");     // Add a recipient
		// $mail->addAddress('ellen@example.com');               // Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addCC('cc@example.com');
		$mail->addBCC('hardjunior1@gmail.com','Teste do merkado');
		// $mail->addBCC('hardjunior1@gmail.com');
		
		// Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		
		// Content
		$mail->isHTML(true);                                // Set email format to HTML
		$mail->CharSet = "UTF-8";
		// $mail->addAddress($emailCliente, $nomeCliente);     // Add a recipient
		$mail->Subject = $assunto;
		$mail->Body    = $msghtml;
		$mail->AltBody = $msgtxt;

		$msg_retorno = "<!-- Modal -->
						<div class='modal fade' id='resposta_modal' tabindex='-1' role='dialog' aria-labelledby='Modal-resposta' aria-hidden='true'>
						<div class='modal-dialog'>
							<div class='modal-content border-success border'>
							<div class='modal-body'> 
								<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
									<span aria-hidden='true'>&times;</span>
								</button>
								<span class='icon-check' style='font-size:40px; color:#28a745; margin-left:50%;'></span>
							<div class='row'>
								<div class='col' style='font-size:12px;'>
								<p>&nbsp;</p>
										Recebemos a sua $assunto, a qual merece a nossa maior atenção. <br>
										Em breve entraremos em contacto para confirmar. <br>
										Agradecemos desde já a preferência. <p>
										<center>
											<span class='h4 beyond_the_mountains'>
												Merkado
											</span> 
											- A Sua Cozinha
										</center>
								</div>
							</div>
							</div>
							<div class='modal-footer'>
								<button type='button' class='btn btn-primary' data-dismiss='modal'>Fechar</button>
							</div>
							</div>
						</div>
						</div>";
						$r['resp']='ok';
						$r['msg_retorno']=$msg_retorno;
		if ($mail->send())
			echo json_encode($r);
			// return json_encode("resp"=> "ok","msg_retorno",$msg_retorno);
			// $_COOKIE[$nomeCookie]=base64_encode('ok');
		} catch (Exception $e) {
			$r['resp']='nok';
			$r['msg_retorno']=$mail->ErrorInfo;
			echo json_encode($r);
			// return json_encode("resp"=> "nok","msg_retorno",);
			// $_COOKIE[$nomeCookie]=base64_encode($mail->ErrorInfo);
	}
}
// $fallback = 'index.php';

// $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;

// header("location: {$anterior}");
exit;
