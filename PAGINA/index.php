<html lang="en">
     <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="estilos.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
      	<title>Ejemplos de HTML</title>
     </head>
     <body>
    <div id="principal" style="margin:0px auto ;width:80%;">
          
          <div id="portada" style="border:1px solid; margin:0px auto ; margin-bottom: 5px;"></div>
          <div id="menu" style="border:0px solid; margin:0px auto ;width:20%; float:left;">




<a href="index.php" class="list-group-item active">Inicio</a>

<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    
     <!-- <a class="navbar-brand" href="index.php" ><h5 color="red">-Inicio-</h5></a>  -->
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li ><a href="index.php?var=1">Modelos</a></li>
      <li><a href="index.php?var=6">Pedidos</a></li>
      <li><a href="index.php?var=7">Sobre Nosotros</a></li>
      <li><a href="index.php?var=8">Video</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
</div>
<div id="info" style="border:1px solid; margin:0px auto ;width:78%; float:right;">
            <?php 
            if(isset($_GET["var"])){
              switch ($_GET["var"]) {
                case '1':
                echo "<h3>Elige la que mas te guste</h3>
                 <div id='img1'>
                <div style='border:1px solid; margin: 1%; width:30%;float:left'><a href='index.php?var=a'><img src='bicis/bici1.jpg'></a></div>
                <div style='border:1px solid; margin: 1%; width:32%;float:left'><a href='index.php?var=b'><img src='bicis/bici2.jpg'></a></div>
                <div style='border:1px solid; margin: 1%; width:30%;float:left'><a href='index.php?var=c'><img src='bicis/bici3.jpg'></a></div>
                </div>
                <ul class='pagination pagination-sm'>
                <li class='disabled'><a>«</a></li>
                <li class='active'><a>1</a></li>
                <li><a href='index.php?var=2'>2</a></li>
                <li><a href='index.php?var=3'>3</a></li>
                <li><a href='index.php?var=4'>4</a></li>
                <li><a href='index.php?var=5'>5</a></li>
                <li><a href='index.php?var=2'>»</a></li>
                </ul>
                ";
                  break;
                  case '2':
                echo "<h3>Elige la que mas te guste</h3>
                 <div id='img1'>
                <div style='border:1px solid; margin: 1%; width:30%;float:left'><a href='index.php?var=d'><img src='bicis/bici4.jpg'></a></div>
                <div style='border:1px solid; margin: 1%; width:32%;float:left'><a href='index.php?var=e'><img src='bicis/bici5.jpg'></a></div>
                <div style='border:1px solid; margin: 1%; width:30%;float:left'><a href='index.php?var=f'><img src='bicis/bici6.jpg'></a></div>
                </div>
                <ul class='pagination pagination-sm'>
                <li><a href='index.php?var=1'>«</a></li>
                <li><a href='index.php?var=1'>1</a></li>
                <li class='active'><a>2</a></li>
                <li><a href='index.php?var=3'>3</a></li>
                <li><a href='index.php?var=4'>4</a></li>
                <li><a href='index.php?var=5'>5</a></li>
                <li><a href='index.php?var=3'>»</a></li>
                </ul>
                ";
                  break;
                  case '3':
                echo "<h3>Elige la que mas te guste</h3>
                 <div id='img1'>
                <div style='border:1px solid; margin: 1%; width:30%;float:left'><a href='index.php?var=3'><img src='bicis/bici7.jpg'></a></div>
                <div style='border:1px solid; margin: 1%; width:32%;float:left'><a href='index.php?var=3'><img src='bicis/bici8.jpg'></a></div>
                <div style='border:1px solid; margin: 1%; width:30%;float:left'><a href='index.php?var=3'><img src='bicis/bici9.jpg'></a></div>
                </div>
                <ul class='pagination pagination-sm'>
                <li><a href='index.php?var=2'>«</a></li>
                <li><a href='index.php?var=1'>1</a></li>
                <li><a href='index.php?var=2'>2</a></li>
                <li class='active'><a>3</a></li>
                <li><a href='index.php?var=4'>4</a></li>
                <li><a href='index.php?var=5'>5</a></li>
                <li><a href='index.php?var=4'>»</a></li>
                </ul>
                ";
                  break;
                  case '4':
                echo "<h3>Elige la que mas te guste</h3>
                 <div id='img1'>
                <div style='border:1px solid; margin: 1%; width:30%;float:left'><a href='index.php?var=3'><img src='bicis/bici10.jpg'></a></div>
                <div style='border:1px solid; margin: 1%; width:32%;float:left'><a href='index.php?var=3'><img src='bicis/bici11.png'></a></div>
                <div style='border:1px solid; margin: 1%; width:30%;float:left'><a href='index.php?var=3'><img src='bicis/bici12.png'></a></div>
                </div>
                <ul class='pagination pagination-sm'>
                <li><a href='index.php?var=3'>«</a></li>
                <li><a href='index.php?var=1'>1</a></li>
                <li><a href='index.php?var=2'>2</a></li>
                <li><a href='index.php?var=3'>3</a></li>
                <li class='active'><a>4</a></li>
                <li><a href='index.php?var=5'>5</a></li>
                <li><a href='index.php?var=5'>»</a></li>
                </ul>
                ";
                  break;
                  case '5':
                echo "<h3>Elige la que mas te guste</h3>
                 <div id='img1'>
                <div style='border:1px solid; margin: 1%; width:30%;float:left'><a href='index.php?var=3'><img src='bicis/bici13.png'></a></div>
                <div style='border:1px solid; margin: 1%; width:32%;float:left'><a href='index.php?var=3'><img src='bicis/bici14.jpg'></a></div>
                <div style='border:1px solid; margin: 1%; width:30%;float:left'><a href='index.php?var=3'><img src='bicis/bici15.jpg'></a></div>
                </div>
                <ul class='pagination pagination-sm'>
                <li><a href='index.php?var=4'>«</a></li>
                <li><a href='index.php?var=1'>1</a></li>
                <li><a href='index.php?var=2'>2</a></li>
                <li><a href='index.php?var=3'>3</a></li>
                <li><a href='index.php?var=4'>4</a></li>
                <li class='active'><a>5</a></li>
                <li class='disabled'><a>»</a></li>
                </ul>
                ";
                  break;
                  case 'a':
                  echo "<h3>MCR-T700G</h3>
                <div id='img1' style='border:0px solid; width:100%;float:left'><img src='bicis/bici1.jpg'></div>
                <p>
                Bicicleta MCR-T700G 3x10 R26 30V Fibra de Carbono Sram X-9 X-0 Reba 18
                </p>
                 <p>
                $45,264.00 
                </p>
                 <p>
                CLAVE: MSHCAR2630
                </p>
                <a href='index.php?var=1' class='list-group-item active'>Atras</a>
                "
                ;
                break;
                case 'b':
                  echo "<h3>Titantec M9 Big Curve FS R29 </h3>
                <div id='img1' style='border:0px solid; width:100%;float:left'><img src='bicis/bici2.jpg'></div>
                <p>
                Bicicleta Titantec M9 Big Curve FS R29 24V.Aluminio Shimano Dob.Fno.Disco
                </p>
                 <p>
               $11,264.00
                </p>
                 <p>
                CLAVE:MSTM9X2924
                </p>
                <a href='index.php?var=1' class='list-group-item active'>Atras</a>"
                ;
                break;
                case 'c':
                  echo "<h3>Bigfoot FS R29 </h3>
                <div id='img1' style='border:0px solid; width:100%;float:left'><img src='bicis/bici3.jpg'></div>
                <p>
                Bicicleta Bigfoot FS R29 24V.Shimano Aluminio Doble Freno de Disco
                </p>
                 <p>
               $9,370.00
                </p>
                 <p>
                CLAVE MSHBID2924
                </p>
                <a href='index.php?var=1' class='list-group-item active'>Atras</a>"
                ;
                    break;

                     case 'd':
                  echo "<h3>Z-500 FS R26 </h3>
                <div id='img1' style='border:0px solid; width:100%;float:left'><img src='bicis/bici4.jpg'></div>
                <p>
                Bicicleta Z-500 FS R26 24V.Al.Dob.Fno Disc.Rin 24R XC28 Lockout
                </p>
                 <p>
                $9,050.00 
                </p>
                 <p>
                CLAVE: MSHZ5X2624
                </p>
                <a href='index.php?var=2' class='list-group-item active'>Atras</a>
                "
                ;
                break;
                case 'e':
                  echo "<h3>Bigfoot FS R29 24V.Shimano </h3>
                <div id='img1' style='border:0px solid; width:100%;float:left'><img src='bicis/bici5.jpg'></div>
                <p>
                Bicicleta Bigfoot FS R29 24V.Shimano Aluminio Freno Delantero de Disco
                </p>
                 <p>
               $8,400.00
                </p>
                 <p>
                CLAVE:MSHBIG2924
                </p>
                <a href='index.php?var=2' class='list-group-item active'>Atras</a>"
                ;
                break;
                case 'f':
                  echo "<h3>Z-500 FS R26  </h3>
                <div id='img1' style='border:0px solid; width:100%;float:left'><img src='bicis/bici6.jpg'></div>
                <p>
               Bicicleta Z-500 FS R26 24V.Al.Dob.Fno Disc.Rin 24R Dart 1
                </p>
                 <p>
               $7,700.00
                </p>
                 <p>
                CLAVE MSHZ502624
                </p>
                <a href='index.php?var=2' class='list-group-item active'>Atras</a>"
                ;
                    break;
                case '6':
                echo  "<form class='form-horizontal'>
  <fieldset>
    <legend>DATOS</legend>
    <div class='form-group'>
      <label for='inputEmail' class='col-lg-2 control-label'>Email</label>
      <div class='col-lg-10'>
        <input type='text' class='form-control' id='inputEmail' placeholder='Email'>
      </div>
    </div>
      <div class='form-group'>
      <label for='inputNombre' class='col-lg-2 control-label'>Nombre</label>
      <div class='col-lg-10'>
        <input type='text' class='form-control' id='inputNombre' placeholder='Nombre'>
      </div>
    </div>
      <div class='form-group'>
      <label for='inputClave' class='col-lg-2 control-label'>Clave de Modelo</label>
      <div class='col-lg-10'>
        <input type='text' class='form-control' id='inputClave' placeholder='Clave de Modelo'>
      </div>
    </div>
    <div class='form-group'>
      <label for='inputColor' class='col-lg-2 control-label'>Color</label>
      <div class='col-lg-10'>
        <input type='text' class='form-control' id='inputColor' placeholder='Color'>
      </div>
    </div>
    <div class='form-group'>
      <label for='inputClaveTargeta' class='col-lg-2 control-label'>Clave de Tarjeta</label>
      <div class='col-lg-10'>
        <input type='text' class='form-control' id='inputClaveTargeta' placeholder='Clave de Tarjeta'>
      </div>
    </div>




   
    <div class='form-group'>
      <label for='textArea' class='col-lg-2 control-label'>Otras Caracteristicas</label>
      <div class='col-lg-10'>
        <textarea class='form-control' rows='3' id='textArea'></textarea>
        <span class='help-block'>A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    
    <div class='form-group'>
      <div class='col-lg-10 col-lg-offset-2'>
      <a href='index.php' class='list-group-item active'>Aceptar</a>
      </div>
    </div>
  </fieldset>
</form>";
                  break;
                  case '7':
                echo "<img src='bicis/NOSOTROS2.jpg' width=100%;><P>En Distribuidora de Bicicletas Bicimax estamos para atender todas tus
inquietudes, comentarios y sugerencias que son muy importantes para
nosotros; por eso, nos ponemos a tus órdenes a través de nuestros teléfonos,
correos destinados a sus respectivos departamentos y/o tu visita a nuestra
planta, te atenderemos con gusto.</P>


Visita nuestro Sitio, tendrás una buena experiencia con Bicimax, donde encontrarás productos, servicios, enlaces de información y de atención, entre muchas cosas más. 
¡Visítanos! Bicimax siempre tiene algo bueno para ti.";
                  break;
                  case '8':
                  echo "<video widht='200' height='300' controls autoplay'>
                <source src='video.mp4' type='video/mp4'>NAVEGADOR NO SOPORTA EL VIDEO</source></video>";;
                  break;
              }
            }
              else{
                echo "<div class='container'style='margin:0px auto ;width:100%;'>
                <h3>Novedades</h3>
                <div id='slider' style='width:100%';>
                <div><a href='index.php?var=2'><img src='bicis/bici6.jpg'></a></div> 
                <div><img src='bicis/bici8.jpg'></div>
                <div><img src='bicis/bici9.jpg'></div>
                <div><a href='index.php?var=f'><img src='bicis/bici4.jpg'></a></div>
                <div><img src='bicis/bici14.jpg'></div>
              </div>
            </div>
            <script type='text/javascript'>
  $(function(){
    $('#slider div:gt(0)').hide();
      setInterval(function(){
        $('#slider div:first-child').fadeOut(1000)
          .next('div').fadeIn(1000)
          .end().appendTo('#slider');
      },4000);
  })
  </script>";
              }
              

              ?>

            </div> <div style="border:1px solid; margin:0px auto ;width:100%;height:50px;float:right;  margin-top:10px;"><img src="bicis/pie.jpg"style="width:100%;height:100%;"></div>
          </div>
          
        </div>
     </body>

</html>
