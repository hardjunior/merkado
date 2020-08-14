 <?php
  // header("Content-Type:   text/html; charset=utf-8");
  $row = 1;
  $exibir = 0;
  if (($handle = fopen("../images/lagoa/carousel.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
      $num = count($data);
      $row++;
      if (($num == 14) and (!empty($data[0])) and (!empty($data[1])) and (!empty($data[2])) and (!empty($data[3])) and (!empty($data[4])) and (!empty($data[5])) and (!empty($data[6])) and (!empty($data[7])) and (!empty($data[8])) and (!empty($data[9])) and (!empty($data[10])) and (!empty($data[11])) and (!empty($data[12])) and (!empty($data[13])) ){
        if ($exibir == 0){
          echo " <section class='home-slider owl-carousel'>";
          ++$exibir;
        }
        echo "<div class='slider-item' style='background-image: url(../images/lagoa/$data[13]);'>
                  <div class='overlay'></div>
                  <div class='container'>
                    <div class='row slider-text justify-content-center align-items-center' data-scrollax-parent='true'>

                  <div class='col-md-10 col-sm-12 mt-4 text-center ftco-animate' style='padding-top:350px !important;'>
                    <p>&nbsp;</p>
                    <span class='subheading ' style='font-size:$data[1]px !important; font-family:".utf8_encode($data['2'])." !important; color: $data[3]> !important; line-height:10px !important;'>". utf8_encode($data[4])."</span>

                    <h1 class='mb-4' style='font-size:$data[5]px !important; font-family:".utf8_encode($data['6'])." !important; color: $data[7]> !important;padding-left:130px !important;'>". utf8_encode($data[8])."</h1>

                    <p class='mb-4 mb-md-5' style='font-size:$data[9]px !important; font-family:".utf8_encode($data[10])." !important; color: $data[11]> !important;''>". utf8_encode($data[12])."</p>

                  </div>

                    </div>
                  </div>
                </div>";
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
    if ($exibir > 0)
      echo "</section>";
    fclose($handle);
  }
  ?>

