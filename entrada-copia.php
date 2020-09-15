<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" data-auto-replace-svg="nest"></script>

    <title>Hello, world!</title>
</head>

<body>
        <div class="container-fluid" style='margin-left:35%'>
            <div class="row line-titulo">
                <center style='margin-top:0px;'>
                    Dois espaços a mesma Qualidade
                </center>
            </div>
            <div class="row img-titulo pl-0">
                <div class="col pl-0 body">
                    <img class='img-title' src='images/logo_merkado.png' >
                    <img class='img-back' src='images/bk_merkado.jpg'>
                    <div class="col d-flex line-address">
                        <i class="fas fa-map-marker-alt text-primary"></i>
                        <div class="address-malveira address"
                            style="background-color:#7f6228; max-heig1ht:100px;opacity:0.7;">
                            Av. dos engenheiros n. 13A<br>
                            2665-452 - Venda Do Valador<br>
                            Venda do Pinheiro - Mafra
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img class='img-title' src='images/logo_lagoa.png'>
                    <img class='img-back' src='images/bk_lagoa.jpg'>
                    <div class="col d-flex line-address">
                        <i class="fas fa-map-marker-alt text-primary"></i>
                        <div class="address-obidos address"
                            style="background-color:#7f6228; max-heig1ht:100px;opacity:0.7;">
                        Aldeia dos Pescadores<br>
                        2510-661 - Bom Sucesso<br>
                        Lagoa de Óbidos
                        </div>
                    </div>
                </div>
            <div class='row footer pb-0 align-items-center'>
                <div class="col line-crescer h1">
                    A sua cozinha está a crescer
                </div>
            </div>
            </div>
        </div>
    <!-- </section> -->
    <style>

        @media(min-width: 1000px) {
            *, div, .row{
                margin: 0;
                padding: 0;
                border: 0;
            }
            body, html{
                max-width: 1000px;
                /* background-color:#000; */
                background-image: url("images/bg_4.jpg");
            }
            .line-titulo{
                width: 1000px;
                min-width: 1000px;
                min-height: 160px;
                /* background-color:#000; */
                color: #fff;
                font-size: 2.5em;
                font-weight: 700;
            }
            .img-titulo{
                max-width: 1000px;
            }
            .img-title{
                z-index: 1;
                top:110px;
                margin-left: 70px;
                position: fixed;
                width:400px;
                align-items: center;
            }
            .img-back{
                position:fixed;
                max-width: 491px;
                /* min-height: 100%; */
                opacity: 0.5;
                background-size:contain;
                height:500px;
                /* max-height: 10% !important; */
                /* line-height: 10px !important; */
            }
            .img-back:hover{
                opacity: 1;
            }
            .line-address{
                position: relative;
                z-index: 2;
                margin-top:200px;
                margin-left: 25px;
                color: #fff;
                justify-content: center;
                text-align: center;
            }
            .address{
                padding: 10px;
                font-weight: 700;
                font-size: 90%;
                margin-left: 20px;
                color: #e2e1df;
            }
            .fa-map-marker-alt{
                font-size: 70px;
            }
            .footer {
                position: fixed;
                left: 0;
                bottom: 235px;
                width: 1000px;
                color: white;
                text-align: center;
            }
            .line-crescer{
                background-color: #7f6228;
                max-width:600px;
                margin: auto;
                top: 0px;
            }
        }
       
        /* @media(max-width: 1000px) { */
        @media screen and (min-width: 500px) and (max-width: 1000px) {
            body{
                background-color: #000;
            }
            *, div, .row{
                margin: 0;
                padding: 0;
                border: 0;
            }
            body, html{
                max-width: 1000px;
            }
            .container-fluid{
                padding:0;
                min-width: 500px;
                margin-left: 0 auto;
            }
            .line-titulo{
                width: 500px;
                min-width: 500px;
                min-height: 160px;
                color: #fff;
                font-size: 1.7em;
                font-weight: 700;
            }
            .img-titulo{
                max-width: 500px;
            }
            .img-title{
                z-index: 1;
                top:130px;
                margin-left: 20px;
                position: fixed;
                width:200px;
                align-items: center;
            }
            .img-back{
                position:fixed;
                max-width: 260px;
                opacity: 0.5;
                background-size:contain;
                height:400px;
            }
            .img-back:hover{
                opacity: 1;
            }
            .line-address{
                position: relative;
                z-index: 2;
                margin-top:130px;
                margin-left: 5px;
                color: #fff;
                justify-content: center;
                text-align: center;
            }
            .address{
                padding: 4px;
                font-weight: 700;
                font-size: 12.3px;
                margin-left: 5px;
                color: #e2e1df;
            }
            .fa-map-marker-alt{
                font-size: 70px;
            }
            .footer {
                position: fixed;
                left: 0;
                bottom: 325px;
                width: 500px;
                color: white;
                text-align: center;
            }
            .line-crescer{
                background-color: #7f6228;
                max-width:400px;
                margin: auto;
                font-size: 20px;
                top: 0px;
            }
        }
       
        @media(max-width: 500px) {
            body{
                background-color: #000;;
            }
            *, div, .row{
                margin: 0;
                padding: 0;
                border: 0;
            }
            body, html{
                max-width: 300px !important;
                /* background-color:#000; */
            }
            .container-fluid{
                padding:0;
                min-width: 360px;
                /* min-width: 100%; */
                margin-left: 0 auto;
            }
            .line-titulo{
                width: 360px;
                min-width: 360px;
                min-height: 160px;
                /* background-color:#000; */
                color: #fff;
                font-size: 1.7em;
                font-weight: 700;
            }
            .img-titulo{
                max-width: 360x;
            }
            .img-title{
                z-index: 1;
                top:130px;
                margin-left: 7px;
                position: fixed;
                width:170px;
                align-items: center;
            }
            .img-back{
                position:fixed;
                max-width: 186px;
                /* min-height: 100%; */
                opacity: 0.5;
                background-size:contain;
                height:250px;
                /* max-height: 10% !important; */
                /* line-height: 10px !important; */
            }
            .img-back:hover{
                opacity: 1;
            }
            .line-address{
                position: relative;
                z-index: 2;
                margin-top:90px;
                margin-left: 0px;
                color: #fff;
                justify-content: center;
                text-align: center;
            }
            .address{
                padding: 2px;
                font-weight: 700;
                font-size: 9px;
                margin-left: 5px;
                color: #e2e1df;
                width:130px;
            }
            .fa-map-marker-alt{
                padding:0 !important;
                margin-top:5px;
                font-size: 30px;
            }
            .footer {
                position: fixed;
                left: 0;
                bottom: 207px;
                width: 360px;
                color: white;
                text-align: center;
            }
            .line-crescer{
                background-color: #7f6228;
                max-width:400px;
                margin: auto;
                font-size: 20px;
                top: 0px;
            }
        }
    </style>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</body>

</html>