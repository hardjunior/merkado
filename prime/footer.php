<?php
include_once "funcoes.php";
  $row = 1;
  if (($handle = fopen("../images/prime/horarios.csv", "r")) !== FALSE) {
        mb_convert_encoding($handle, 'UCS-2LE', 'UTF-8');
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        $num = count($data);
        if ((!empty($data[2])) or (!empty($data[3])))
        {
            // $t[og($data[0])]       = $data[0];

            $h[og($data[0])][og($data[1])][$row]['titulo'] = utf8_encode($data[1]);
            $h[og($data[0])][og($data[1])][$row]['hora1'] = $data[2];
            $h[og($data[0])][og($data[1])][$row]['hora2'] = $data[3];
        }
        $row++;
    }
}

?>
<footer class="ftco-footer ftco-section img">
    <div class="container footer-top">
        <div class="row mb-5">

            <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 beyond_the_mountains text-center" style='font-size:30px; color:#c49b63; background-color:#00000099; border-radius:35px; padding:5px;'>
                    <span class="icon-restaurant_menu " style=' color:#c49b63;'></span>
                    &nbsp;
                    Merkado
                </h2>
                    <p>Numa tranquila atmosfera familiar encontra uma equipa empenhada para lhe proporcionar um reconfortante momento gastronômico...</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">

                        <li class="ftco-animate"><a href="https://pt-pt.facebook.com/merkadorestaurante"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/merkadorestaurante/"><span class="icon-instagram"></span></a></li>
                        <li class="ftco-animate"><a href='https://wa.me/351933563228'><span class="icon-whatsapp"></span></a></li>

                        <li class="ftco-animate">
                            <a href='https://www.tripadvisor.pt/Restaurant_Review-g14132091-d14099379-Reviews-Merkado_Restaurante-Venda_do_Valador_Mafra_Lisbon_District_Central_Portugal.html'>
                            <span class="icon-tripadvisor"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="offset-md-1 col-lg-3 col-md-6 mb-5 mb-md-5">

                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 beyond_the_mountains text-center" style='font-size:30px; color:#c49b63; background-color:#00000099; border-radius:35px; padding:5px;'>
                        <span class="icon-clock-o"  style='color:#c49b63;'></span>
                        &nbsp;
                        Restaurante
                    </h2>
                    <ul class="list-unstyled open-hours">
                       <?php
                        $row = '';
                        foreach ($h['restaurante'] as $key => $value) {
                            foreach ($value as $ke => $v) {
                                echo " <li class='d-flex'> <span>";
                                if ($row != $v['titulo'] ){
                                    $row = $v['titulo'];
                                    echo $row;
                                }
                                echo "</span><span>$v[hora1] ";
                                echo (!empty($v['hora2']))? " - ".$v['hora2']:'';
                                echo "</span></li>";
                            }
                        }
                       ?>
                    </ul>
                </div>
            </div>
            <div class="offset-md-1 col-lg-3 col-md-5 mb-5 mb-md-5">

                        <?php if (!empty($h['take-away'])){?>
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 beyond_the_mountains text-center" style='font-size:30px; color:#c49b63; background-color:#00000099; border-radius:35px; padding:5px;'>
                        <span class="icon-clock-o"  style='color:#c49b63;'></span>
                        &nbsp;
                        Take - Away
                    </h2>
                    <ul class="list-unstyled open-hours">                        
                       <?php
                        $row = '';
                        foreach ($h['take-away'] as $key => $value) {
                            foreach ($value as $ke => $v) {
                                echo " <li class='d-flex'> <span>";
                                if ($row != $v['titulo'] ){
                                    $row = $v['titulo'];
                                    echo $row;
                                }
                                echo "</span><span>$v[hora1] ";
                                echo (!empty($v['hora2']))? " - ".$v['hora2']:'';
                                echo "</span></li>";
                            }
                        }
                       ?>
                    </ul>
                </div>
                    <?php } ?>

            </div>

        </div>

    </div>

</footer>
<div class="container-fluid p-4">
        <div class="row">

            <div class="col-md-3 text-center">
                <a class="title btn-home" href="https://www.livroreclamacoes.pt/inicio?p_p_auth=UVPk59lu&amp;p_p_id=49&amp;p_p_lifecycle=1&amp;p_p_state=normal&amp;p_p_mode=view&amp;_49_struts_action=%2Fmy_sites%2Fview&amp;_49_groupId=20495&amp;_49_privateLayout=false" title="Ir para livroreclamacoes.pt"> <img alt="livroreclamacoes.pt" src="../images/prime/logo_livro_reclamacoes.png"> </a>
            </div>

            <div class="offset-md-7 col-md-2" style='float:right;'>
                <link href="https://awards.infcdn.net/circ_n.css" rel="stylesheet" />
                <div id="rest_circ" onclick="if(event.target.nodeName.toLowerCase() != 'a') {window.open(this.querySelector('.circ_top_title').href);return 0;}">
                    <div class="circ_cont">
                        <div class="circ_img" style="background: url('https://awards.infcdn.net/img/star_red.svg') no-repeat center">&nbsp;</div>
                        <a href="https://restaurantguru.com.br/Restaurante-Charme-Venda-do-Pinheiro" target="_blank" class="circ_top_title">Restaurant Guru 2019</a><span>Recomendado</span>
                        <a href="https://restaurantguru.com.br/Restaurante-Charme-Venda-do-Pinheiro" class="circ_bot_title" target="_blank">Merkado</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> Restaurante Merkado | Todos os direitos reservados. <a href='#conteudo' class='btn-privacidade' style='font-size:12px;'>Política de Privacidade</a>
                    <br>
                    <a href="https://merkadorestaurante.pt" target="_blank" class='beyond_the_mountains' style='font-size:25px; color:#c49b63;'>Merkado</a>
                </p>
            </div>
        </div>

    </div>

<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
            
        <span class="icon-angle-double-up" style=' color:#c49b63;'></span>

        <!-- <i class="fa fa-angle-double-up" aria-hidden="true"></i> -->
		</span>
	</div>
	




<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

<script src="prime/js/jquery.min.js?version=<?= filectime("js/jquery.min.js"); ?>"></script>
<script src="prime/js/jquery-migrate-3.0.1.min.js?version=<?= filectime("js/jquery-migrate-3.0.1.min.js"); ?>"></script>
<script src="prime/js/popper.min.js?version=<?= filectime("js/popper.min.js"); ?>"></script>
<script src="prime/js/bootstrap.min.js?version=<?= filectime("js/bootstrap.min.js"); ?>"></script>
<script src="prime/js/jquery.easing.1.3.js?version=<?= filectime("js/jquery.easing.1.3.js"); ?>"></script>
<script src="prime/js/jquery.waypoints.min.js?version=<?= filectime("js/jquery.waypoints.min.js"); ?>"></script>
<script src="prime/js/jquery.stellar.min.js?version=<?= filectime("js/jquery.stellar.min.js"); ?>"></script>
<script src="prime/js/owl.carousel.min.js?version=<?= filectime("js/owl.carousel.min.js"); ?>"></script>
<script src="prime/js/jquery.magnific-popup.min.js?version=<?= filectime("js/jquery.magnific-popup.min.js"); ?>"></script>
<script src="prime/js/aos.js?version=<?= filectime("js/aos.js"); ?>"></script>
<script src="prime/js/jquery.animateNumber.min.js?version=<?= filectime("js/jquery.animateNumber.min.js"); ?>"></script>
<script src="prime/js/bootstrap-datepicker.js?version=<?= filectime("js/bootstrap-datepicker.js"); ?>"></script>
<script src="prime/js/jquery.timepicker.min.js?version=<?= filectime("js/jquery.timepicker.min.js"); ?>"></script>
<script src="prime/js/scrollax.min.js?version=<?= filectime("js/scrollax.min.js"); ?>"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
<!-- <script src="js/google-map.js"></script> -->
<script src="prime/js/main.js?version=<?= filectime("js/main.js"); ?>"></script>