 <?php
 include_once "cabecalho.php";
 include_once "funcoes.php";
    // header("Content-Type:   text/html; charset=utf-8");
    $row = 1;
    // function retiraAcentos($string)
    // {
    //     $acentos  =  'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
    //     $sem_acentos  =  'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
    //     $string = strtr($string, utf8_decode($acentos), $sem_acentos);
    //     $string = str_replace(" ", "-", $string);
    //     return utf8_decode($string);
    // }

    // function og($variavel)
    // { //organize para virar variavel
    //     return retiraAcentos(str_replace(" ", "", mb_strtolower(utf8_encode($variavel))));
    // }
    $con = 0;
    if (($handle = fopen("images/bd_menu.csv", "r")) !== FALSE) {
        mb_convert_encoding($handle, 'UCS-2LE', 'UTF-8');
        // mb_convert_encoding($handle, 'UTF-16LE', 'UTF-8');
        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
            $num = count($data);
            if (count($data) > 2) {
                if ($row == 1) {

                    $pri = (!empty($data[0])) ? utf8_encode($data[0]) : '';
                    $seg = (!empty($data[1])) ? utf8_encode($data[1]) : '';
                    $ter = (!empty($data[2])) ? utf8_encode($data[2]) : '';
                    $fim = (!empty($data[3])) ? utf8_encode($data[3]) : '';

                } 
                else if ($row > 2) 
                {

                    if (($data[0] == 1) and ($data[9] == 1)) 
                    {

                        if ((!empty($data[10])) and (!empty($data[2])))
                            $familia[$data[10]] = utf8_encode($data[2]);

                        if ((!empty($data[11])) and (!empty($data[3])))
                        {
                            $subFamilia[$data[11]]['nome'] = utf8_encode($data[3]);
                            $subFamilia[$data[11]]['link'] = og($data[2]);
                        }

                        if ((!empty($data[12])) and (!empty($data[4])))
                        {
                            $regiao[$data[12]]['nome'] = utf8_encode($data[4]);
                            $regiao[$data[12]]['link'] = og($data[3]);
                        }

                        

                        if ((!empty($data[9])) and (!empty($data[1])) and ($data[9]== 1 ))
                        {
                            $all[$row]['codigo']     = (!empty($data[1])) ? $data[1] :'';
                            $all[$row]['familia']    = (!empty($data[2])) ? $data[2] :'';
                            $all[$row]['subFamilia'] = (!empty($data[3])) ? $data[3] :'';
                            $all[$row]['regiao']     = (!empty($data[4])) ? $data[4] :'';
                            $all[$row]['descricao']  = (!empty($data[5])) ? $data[5] :'';
                            $all[$row]['composicao'] = (!empty($data[6])) ? $data[6] :'';
                            $all[$row]['pvp1']       = (!empty($data[7])) ? $data[7] :'';
                            $all[$row]['foto']       = (!empty($data[8])) ? $data[8] :'';
                            ++$con;
                        }
                   }
                }
            }
            $row++;
        }
    }
    // echo "<pre>";
    // var_dump($regiao);
    // exit;
    ?>
 <section class="ftco-menu mb-5 pb-5">
     <div class="container">
         <div class="row justify-content-center mb-5">
             <div class="col-md-7 heading-section text-center ftco-animate">
                 <span class="subheading"><?= $pri ?></span>
                 <h2 class="mb-4"><?= $seg ?></h2>
                 <p><?= $ter ?></p>
                 <!-- <span class="subheading">Confortante</span>
                <h2 class="mb-4">O Nosso Menu</h2>
                <p>Elaborado com maior cuidado e dedicação, para proporcionar-lhe um momento deliciosamente confortante.</p> -->
             </div>
         </div>
         <div class="row d-md-flex">
             <div class="col-lg-12 ftco-animate p-md-5">
                 <div class="row">
                     <div class="col-md-12 nav-link-wrap mb-5">
                         <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab-<?= rand(0 , 1000)?>" role="tablist" aria-orientation="vertical">
                             <?php
                             $act = "active";
                                foreach ($familia as $k => $v) {
                                    // var_dump($familia);exit;
                                    if (!empty($v))
                                    {
                                        $valAlter = og($v);
                                        echo "<a class='nav-link $act' id='$valAlter-tab' data-toggle='pill' href='#$valAlter' role='tab' aria-controls='$valAlter' aria-selected='false'>$v</a>";
                                        $act = '';
                                    }
                                }

                                ?>
                         </div>
                     </div>
                     <div class="col-md-12 d-fl1ex align-items-center">
                            <!-- Fim primeiro capitulo -->
                         <div class="tab-content ftco-animate" id="v-pills-tabContent-<?= rand(0 , 1000)?>">
                             
                            <!-- <section class='ftco-section'> -->
                                 
                                <?php
                                $row = 0;
                                $col = 0;
                                $act = "show active";
                                $cardapio = '';
                                $famDupl = '';
                                foreach ($familia as $c => $v) {
                                    $abrevFamilia = og($v);
                                    // if ($row > 0){
                                    //     $cardapio .= "</div></div>";
                                    //     $row = 0;
                                    // }
                                    $cardapio .= "<div class='tab-pane fade  $act' id='$abrevFamilia' role='tabpanel' aria-labelledby='$abrevFamilia-tab'>";
                                    $act = '';
                                    //inicio de linha

                                        
                                    
                                    // $cardapio .= "<div class='col-md-12 mb-5 pb-3 bg-danger'>";
                                    foreach ($subFamilia as $csf => $vaSubFam) {
                                        $abrevSubFamilia = og($vaSubFam['nome']);
                                        // $cardapio .= $subfamilia['subfamilia'];
                                        if ($vaSubFam['link'] == $abrevFamilia){//para juntar um foreach com outro
                                            $cardapio .= "<h3 class='mb-5 heading-pricing ftco-animate'>$vaSubFam[nome]</h3>";
                                            // Inicio Regiao
                                        // //    if ((key($va) == $bus) )
                                        // //    {
                                                foreach ($all as $cAll => &$vaAll) {
                                                    if ((og($vaAll['familia'])== $abrevFamilia) and (og($vaAll['subFamilia']) == $abrevSubFamilia))
                                                    {
                                                        $foto = ((!empty($vaAll['foto'])) and (file_exists("images/".$vaAll['foto']))) ? 
                                                            "<div class='img' style='background-image: url(images/" . $vaAll['foto'] . ");'></div>" : 
                                                            "<div style='min-width:60px;'></div>";

                                                        $descricao = (!empty($vaAll['descricao'])) ?
                                                            "<h3>
                                                                <span>
                                                                    " . utf8_encode($vaAll['descricao']) . "
                                                                </span>
                                                            </h3>" : '';

                                                        $pvp1 = (!empty($vaAll['pvp1'])) ?
                                                            "<span class='price'>
                                                                " . number_format(str_replace(",",".",$vaAll['pvp1']), 2, ',', ' ') . " €
                                                            </span>" : '';

                                                        $composicao = (!empty($vaAll['composicao'])) ?
                                                            "<div class='d-block'>
                                                                <p>
                                                                    " . utf8_encode($vaAll['composicao']) . "
                                                                </p>
                                                             </div>" : '';

                                                        $cardapio .= "<div class='pricing-entry d-flex ftco-animate'>";
                                                        // $cardapio .=     $foto;
                                                        $cardapio .= "   <div class='desc pl-3'>";
                                                        $cardapio .= "      <div class='d-flex text align-items-center'>";
                                                        $cardapio .=            $descricao;
                                                        $cardapio .=            $pvp1;
                                                        $cardapio .= "      </div>";
                                                        $cardapio .=            $composicao;
                                                        $cardapio .= "   </div>";
                                                        $cardapio .= "</div>";
                                                        unset($vaAll);
                                                    }
                                                }
                                            // //}
                                            // foreach ($regiao as $cRegiao => $vaRegiao) {
                                            //     // $bus = og($vaSubFam['subfamilia']);
                                            //     if ($vaRegiao['link'] == $abrevSubFamilia){
                                            //         $cardapio .= "<h1 class='mb-5 text-warning text-center'>$vaRegiao[nome]</h1>";
                                            //     }
                                            // }
                                            // Fim Regiao
                                        }
                                        // if ($row > 0)
                                        //     $cardapio .= "</div>";
                                    }
                                    //fim de linha
                                    $cardapio .= "</div>";
                                    ++$row;
                                }
                                echo $cardapio;

                                ?>

                            <!-- </section> -->


                        </div>
                                <!-- Início segundo capitulo -->
                    </div>

                </div>

        </div>
        <div class='mx-auto text-center'>
           <?= $fim;?>
        </div>
    </div>
 </section>
