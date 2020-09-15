<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" data-auto-replace-svg="nest"></script>

    <title>Merkado Restaurante</title>
  </head>
  <body>

    <div class="container-fluid text-center bg-dark inicial ">
        <div class="row bg-succ1ess header">
            <div class="col beyond_the_mou1ntains">
                Dois espaços a mesma Qualidade
            </div>
        </div>
        <div class="row bg-pr1imary body">
            <div class="col">
                <img src="images/logo_prime.png" class='logo_prime logo' alt='Logo merkado Prime' >
                <a href='prime/'>
                    <img src="images/bk_merkado.jpg" class='prime imagem' alt='Imagem merkado' >
                </a>
                <div class="centro">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="endereco">
                        Av. dos engenheiros n. 13A<br>
                        2665-452 - Venda do Valador<br>
                        Venda do Pinheiro - Mafra
                    </div>
                </div>
                <div class="endereco">
                   
                </div>
            </div>
            <div class="col">
                <img src="images/logo_lagoa.png" class='logo_lagoa logo' alt='Logo merkado Lagoa' >
                <a href='lagoa/'>
                 <img src="images/bk_lagoa.jpg" class='lagoa imagem' alt='Imagem merkado'>
                </a>
                <div class="centro">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="endereco">
                        Aldeia dos Pescadores<br>
                        2510-661 - Bom Sucesso<br>
                        Lagoa de Óbidos
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-secon1dary footer">
            <div class="col">
            A sua cozinha está a crescer
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="header bg-success">
            Dois espaços a mesma Qualidade
        </div>
        <div class="body bg-primary">
            <img src="images/bk_merkado.jpg" class='prime' alt='Imagem merkado'>
            <img src="images/bk_lagoa.jpg" class='lagoa' alt='Imagem merkado'>
        </div>
        <div class="footer bg-secondary">
            Dois espaços a mesma Qualidade
        </div>
    </div> -->
<style>
    @font-face {
	  font-family: 'beyond_the_mountains';
	  src: url('../../fonts/beyond_the_mountains/Beyond The Mountains.woff2') format('woff2'),
		   url('../../fonts/beyond_the_mountains/Beyond The Mountains.woff') format('woff'),
		   url('../../fonts/beyond_the_mountains/beyond_the_mountains.ttf') format('truetype');
	}
	
	.beyond_the_mountains{
	  font-family: beyond_the_mountains, Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
	  /* color:#c49b63; */
	}
body, .row, .col{
    /* margin: 0 auto; */
    padding: 0px;
    background-color: #000;
}
.div.col{
    margin: 0 auto;
    padding: 0px;
}
img.imagem{
    width:100%;
    height:85vh;
    object-fit:cover;
    opacity: 0.5;
	color:#c49b63;
}

/* 
img.prime{
    width:100%;
    height:90vh;
    object-fit:cover;
    opacity: 0.5;
}img.lagoa{
    width:100%;
    height:90vh;
    object-fit:cover;
    opacity: 0.5;
} 
img.logo_prime{
    max-width:40%;
    max-height:25%;
    position:fixed;
    
  margin: 0;
  position: absolute;
  left: 50%;
  transform: translate(-50%, -50%);
    z-index:1;
}



img.logo_lagoa{
    max-width:40%;
    max-height:25%;
    position:fixed;
     
  margin: 0;
  position: absolute;
  left: 50%;
  transform: translate(-50%, -50%);
    z-index:1;
} 
img.logo_prime{
    max-width:40%;
    max-height:25%;
    position:fixed;
    
  margin: 0;
  position: absolute;
  left: 50%;
  transform: translate(-50%, -50%);
    z-index:1;
} */

img.logo{
    
    /* width:100%;
    height:90vh; */
    object-fit:cover;

    max-width:50%;
    max-height:25%;
     top:50px;
  margin: 0;
  position: absolute;
  left: 50%;
  transform: translate(-50%, -50%);
    z-index:1;
} 
.header{
    position: fixed;
    height: 20vh;
    font-size:4vw;
    color:#fff;
    font-weight: 700;
    display:flex;
    width:100%;
    margin-top:-15vh;
}
.footer{
    position: fixed;
    height: 10vh;
    font-size:4vw;
    color:#fff;
    font-weight: 700;
    display:flex;
    width:100%;
    margin-top:-10vh;
}
.body img:hover{
    /* background-color: #000; */
    opacity:1;
}
.body{
    margin-top: 15vh;
    display:flex;
    align-items: center;
}
.centro{
    display:flex;
    height:9vh;
    text-align: center;
    flex-direction: line;
    justify-content: center;
    position: relative;
    z-index:2;
    padding: 4px;
    top:-49vh;
}
.endereco{
    background-color:#7f6228;
    /* height:140%; */
    margin-left: 15px;
    color:#000;
    font-weight: 700;
}

.fa-map-marker-alt{
    font-size: 70px;
    color:#0d6efd;
}

@media(max-width: 800px) {
    img.logo{
    margin-top:-30px;
    min-width:90%;
    max-height:25%;
    }
    .header{
        margin-left:0px;
        font-size:5.8vw;

    }
    .footer{
        padding:0px;
        font-size:3.7vh;
    }
    img.imagem{
        height:60vh;
    }
    .inicial {
        margin-top:160px;
    }
    
    .centro{
        padding:10px;
        top:-35vh;
        display:block;
    }
    .endereco{
        padding:4px;
        font-size:10px;
    }

    .fa-map-marker-alt{
        font-size: 50px;
    }
}

</style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>