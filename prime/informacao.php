 <?php
	// header("Content-Type:   text/html; charset=utf-8");
	$row = 1;
	if (($handle = fopen("../images/prime/informacao.csv", "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
			$num = count($data);
			// echo $num;exit;
			$row++;
			if (($num == 5) and (!empty($data[0])) and (!empty($data[1])) and (!empty($data[2])) and (!empty($data[3])) and (!empty($data[4])) ) {
				echo "<section class='ftco-intro mt-0'>
							<div class='container-wrap'>
								<div class='wrap d-md-flex align-items-xl-end'>
									<div class='info col-md-6' style='height:250px;'>
										
										<div class='row ' >
											<div class='icon'>
												<span class='icon-instagram'></span>
											</div>
											<a href='https://www.instagram.com/merkadorestaurante/'>
												@merkadorestaurante
											</a>
										</div>
										<br>
										<div class='row '>
											<div class='icon'>
												<span class='icon-whatsapp'></span>
											</div>
											<a href='https://wa.me/351933563228'>
													+351 933563228
											</a>
										</div>
										<br>
										<div class='row '>
											<div class='icon'>
												<span class='icon-envelope'></span>
											</div>
											<a href='mailto:merkado@outlook.pt'>
													merkado@outlook.pt
												</a>
										</div>
										<br>
										<div class='row '>
											<div class='icon'>
												<span class='icon-calendar'></span>
											</div>
											<a href='tel:+351 219660211'>
												+351 219660211
											</a>
										</div>
											
									</div>


									<!-- Inicio parte formulário-->
									<div class='makereservati1on p-4 '  style='margin-top:-40px !important;'>
									<div class='row justify-content-center mb-0'>
										<div class='col-md-7 heading-section text-center ftco-animate' style='min-width:100%';>
											<span class='subheading' style='font-size:60px;'>Livro de Reservas</span>
											<h3 class='m1b-4' style='font-size:30px;'>Faça sua marcação</h3>
										</div>
									</div>
										<form action='prime/email.php' class='appointment-form' method='POST'  autocomplete='off'  enctype='multipart/form-data'>
                   							<input type='hidden' name='razao' value='Reserva de Mesa' required>
											<div class='d-md-flex'>
												<div class='form-group'>
													<input type='text' name='nome' class='form-control' placeholder='Primeiro Nome' style='color:#c49b63 !important;' required>
												</div>
												<div class='form-group ml-md-4'>
													<input type='text' name='sobrenome' class='form-control' placeholder='Sobrenome' style='color:#c49b63 !important;' required>
												</div>
											</div>
											<div class='d-md-flex'>
												<div class='form-group'>
													<div class='input-wrap'>
														<div class='icon'><span class='ion-md-calendar'></span></div>
														<input type='date' name='data' class='form-control appointment_date1' placeholder='Data' style='color:#c49b63 !important;' required>
													</div>
												</div>
												<div class='form-group ml-md-4'>
													<div class='input-wrap'>
														<div class='icon '><span class='ion-ios-clock'></span></div>
														<input type='time' name='hora' class='form-control appointment_time1' placeholder='Hora' style='color:#c49b63 !important;' required>
													</div>
												</div>
												<div class='form-group ml-md-4'>
													<input type='text' name='telefone' class='form-control' placeholder='Telefone' required style='color:#c49b63 !important;' required>
												</div>
											</div>
											<div class='d-md-flex'>
												<div class='form-group'>
													<textarea name='msg' id='msg' cols='30' rows='2' class='form-control' placeholder='Mensagem' style='color:#c49b63 !important;' required></textarea>
												</div>
												<!--<div class='form-group'>
													<select name='qtd' class='form-control' >
														<option value=''>Pessoas</option>
														<option value='1'>1</option>
														<option value='2'>2</option>
														<option value='3'>3</option>
														<option value='4'>4+</option>
													</select>
												</div>-->
												
												<div class='form-group ml-md-4'>
													<input type='number' name='qtd' class='form-control' placeholder='Qtd Pessoas' style='color:#c49b63 !important;' min='1' max='70' required>
												</div>
											</div>
											<div class='d-md-flex'>
												<div class='form-group'>
													<input type='email' name='email' class='form-control' placeholder='Email' style='color:#c49b63 !important;' required>
												</div>
												<div class='form-group ml-md-4'>
													<input type='submit' value='Reservar' class='btn btn-white py-3 px-4'>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</section>";
			}
			// else {
			//   var_dump($data);
			// }
			// if ($data[1] != 'font=>') {

			//   echo "<pre><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
			//   var_dump($data);
			//   // exit;
			// }
		}
		fclose($handle);
	}
	?>

