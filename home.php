<html lang="en" hola_ext_inject="disabled"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/font-awesome.min.css">
    <link  rel ="stylesheet" href="CSS/style.css"/>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/bootstrap-social.css">
    <script src="JS/jquery.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>

</head>
    <body  >
      <table>
      <div id="first">
        <a class="">
            <i class="fa fa-home" style="font-size:25px; color: white "></i>
        </a>
      </div>
     <div style="text-align:center">
      <img src ="images/logo.jpg" id="logo"> </img>
    </div>
      <div class="row" >
        <div class="col-lg-2" style="margin-top:70px; ">
      <ul class="nav nav-pills nav-stacked ">
        <li class="active "><a data-toggle="tab"  href="#home">Accueil</a></li>
        <li><a data-toggle="tab"  href="#menu1">Présentation de l'association</a></li>
        <li><a data-toggle="tab" href="#menu2">Agenda</a></li>
        <li><a data-toggle="tab" href="#menu2">Projets</a></li>
        <li><a data-toggle="tab" href="#menu2">Publications</a></li>
        <li><a data-toggle="tab" href="#menu2">Partenaires</a></li>
        <li><a data-toggle="tab" href="#menu2">Liens utiles</a></li>
        <li><a data-toggle="tab" href="#menu2">Structure d'accueil</a></li>
      </ul>
    </div>
<div class="col-lg-9">
      <div class="tab-content ">
        <div id="home" class="tab-pane fade in active "  >
          <h4 class="pan">Accueil</h4>
          <div style="padding:0px 60px">

        </div>
          <div class="pan-heigth">
            <ul class="nav nav-tabs">
              <li><a href="#menu3">ACTIONS APARR</a></li>
              <li><a href="#menu4">AGENDA</a></li>
              <li><a href="#menu5">NOUS CONTACTER</a></li>
            </ul>
            <div id="boxe_defil">
            <h3 id="defile">Site en développement</h3>
            </div>
            <div style="text-align:center">
            <h3>Nous contacter</h3>
            <h4>APARR</h4>
            <h5>5, allée des Mimosas 031 Bat.01</h5>
            <h5>Tel.: +33(0) 620 26 62 70 / +33(0) 556 16 39 05</h5>
            <a href="">www.aparr.fr</a>
          </div>
          </div>
        </div>
        <div id="menu1" class="tab-pane fade ">
          <h4 class="pan">Menu 1</h4>
          <div class="pan-heigth">
            <ul class="nav nav-tabs">
              <li><a href="#menu3">Menu 3</a></li>
              <li><a href="#menu4">Menu 4</a></li>
              <li><a href="#menu5">Menu 5</a></li>
            </ul>
          </div>
        </div>
        <div id="menu2" class="tab-pane  fade ">
          <h4 class="pan">Menu 2</h4>
          <div class="pan-heigth">
            <ul class="nav nav-tabs">
              <li><a href="#menu3">Menu 3</a></li>
              <li><a href="#menu4">Menu 4</a></li>
              <li><a href="#menu5">Menu 5</a></li>
            </ul>
          </div>
        </div>
      </div>
</div>
<div class="col-lg-1">
  <ul id="menufixe">
    <div>
      <a class="btn btn-social-icon btn-facebook">
          <i class="fa fa-facebook"></i>
        </a>
    </div>
    <div>
      <a class="btn btn-social-icon btn-twitter">
          <i class="fa fa-twitter"></i>
        </a>
      </div>
  </ul>
</div>
</div>




    </body>
      <script type="text/javascript">
      var defile;// l'element a deplacer
      var psinit = 580; // position horizontale de depart
      var pscrnt = psinit;
      function texteDefile() {
         if (!defile) defile = document.getElementById('defile');
         if (defile) {
            if(pscrnt < ( - defile.offsetWidth) ){
               pscrnt = psinit;
                      } else {
               pscrnt+= -1; // pixel par deplacement
            }
            defile.style.left = pscrnt+"px";
         }
      }
      setInterval("texteDefile()",20); // delai de deplacement
      </script>
      </html>
