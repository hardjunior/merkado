 <?php
    $con = 0;
    if (($handle = fopen("../images/prime/prato.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
            $num = count($data);
            // if (count($data) > 2) {
            //     if ($row == 1) {
            //         $pri = (!empty($data[0])) ? utf8_encode($data[0]) : '';
            //         $seg = (!empty($data[1])) ? utf8_encode($data[1]) : '';
            //         $ter = (!empty($data[2])) ? utf8_encode($data[2]) : '';
            //         $fim = (!empty($data[3])) ? utf8_encode($data[3]) : '';
            //     } else
                 if ($row > 2) {
                    if (($data[0] == 1) and ($data[5] == 1)) {
                        if (!empty($data[2]))
                            $pOrdem[$data[10]] = $data[2];
                        if (!empty($data[3])) {
                            $val = og($data[3]);

                            $sOrdem[$data[11]]['familia'] = utf8_encode($data[2]);
                            $sOrdem[$data[11]]['subfamilia'] = utf8_encode($data[3]);

                            // $tOrdem[$val]['subfamilia']  = utf8_encode($data[3]);

                            $ementa[$con][$val]['regiao']     = $data[4];
                            $ementa[$con][$val]['descricao']  = $data[5];
                            $ementa[$con][$val]['composicao'] = $data[6];
                            $ementa[$con][$val]['pvp1']       = $data[7];
                            $ementa[$con][$val]['foto']       = $data[8];
                            ++$con;
                        }
                        // var_dump($sOrdem);exit;

                    }
                }
            // }
            $row++;
        }
        ksort($sOrdem);
        // var_dump($sOrdem);
        // // echo $num;
        // exit;
    }
    ksort($sOrdem);
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
                         <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                             <?php
                             $act = "active";
                                foreach ($pOrdem as $k => $v) {
                                    $n = og($v);
                                    echo "<a class='nav-link $act' id='$n-tab' data-toggle='pill' href='#$n' role='tab' aria-controls='$n' aria-selected='false'>$v</a>";
                                    $act = '';
                                }

                                ?>
                         </div>
                     </div>
                     <div class="col-md-12 d-flex align-items-center">

                         <div class="tab-content ftco-animate" id="v-pills-tabContent">
                             <!-- <section class='ftco-section'> -->
                                 
                                <?php
                                $row = 0;
                                $col = 0;
                                $act = "show active";
                                $cardapio = '';
                                $famDupl = '';
                                foreach ($pOrdem as $key1 => $familia) {
                                    $n = og($familia);
                                    if ($row > 0){
                                        $cardapio .= "</div></div>";
                                        $row = 0;
                                    }
                                    $cardapio .= "<div class='tab-pane fade  $act' id='$n' role='tabpanel' aria-labelledby='$n-tab'>
                                            <div class='row'>";
                                    $act = '';
                                    // ksort($sOrdem);
                                    foreach ($sOrdem as $key2 => $subfamilia) {
                                        // $cardapio .= $subfamilia['subfamilia'];
                                        if ($subfamilia['familia'] == $familia){//para juntar um foreach com outro
                                            if ($famDupl != $subfamilia['subfamilia']){// para pegar somente uma vez cada subfamilia
                                                $famDupl = $subfamilia['subfamilia'];

                                                if ($row > 0){
                                                    $cardapio .= "</div>";
                                                    // exit;
                                                }
                                                $cardapio .= "<div class='col-md-12 mb-5 pb-3'>
                                                <h3 class='mb-5 heading-pricing ftco-animate'>$famDupl</h3>";
                                                foreach ($ementa as $key4 => $va) {
                                                    $bus = og($subfamilia['subfamilia']);
                                                    if ((key($va) == $bus) ) {
                                                        $foto = (!empty($va[$bus]['foto'])) ? "<div class='img' style='background-image: url(images/" . $va[$bus]['foto'] . ");'></div>" : "<div style='min-width:60px;'></div>";
                                                        $descricao = (!empty($va[$bus]['descricao'])) ? "<h3><span>" . utf8_encode($va[$bus]['descricao']) . "</span></h3>" : '';
                                                        $pvp1 = (!empty($va[$bus]['pvp1'])) ? "<span class='price'>" . number_format(str_replace(",",".",$va[$bus]['pvp1']), 2, ',', ' ') . " €</span>" : '';
                                                        $composicao = (!empty($va[$bus]['composicao'])) ? " <div class='d-block'> <p>" . utf8_encode($va[$bus]['composicao']) . "</p> </div>" : '';

                                                        $cardapio .= "<div class='pricing-entry d-flex ftco-animate'>
                                                                $foto
                                                                <div class='desc pl-3'>
                                                                    <div class='d-flex text align-items-center'>
                                                                        $descricao
                                                                        $pvp1
                                                                    </div>
                                                                    $composicao
                                                                </div>
                                                            </div>";
                                                        unset($va);
                                                    }
                                                }
                                            }
                                            
                                            ++$row;
                                        }
                                    }
                                    if ($row > 0)
                                        $cardapio .= "</div>";
                                    
                                    // $cardapio .= "</div> </div>";
                                }
                                $cardapio .= "</div>";
                                echo $cardapio;

                                ?>

                            <!-- </section> -->


                        </div>

                    </div>

                </div>

        </div>
        <div class='text-center'>
           <?= $fim;?>
        </div>
    </div>
 </section>
