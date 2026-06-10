<?php
$routesArray = explode("/", $_SERVER["REQUEST_URI"]);
$routesArray = array_filter($routesArray);
//print_r($routesArray);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SysAcademico</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
 <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/assets/plugins/adminlte/css/adminlte.min.css">
    <!-- fondo personalizado -->
   <link rel="stylesheet" href="views/assets/custom/plantilla/plantilla.css">
</head>
<body class="hold-transition sidebar-mini">

<?php
/*include "views/pages/login/login.php";
          echo '</body></html>';
          return;*/
?>

<!-- Site wrapper -->
<div class="wrapper">


  <?php
      include ("views/modulos/navbar.php");
      include ("views/modulos/menu.php");

  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php
    //cuando no esta vacio
   if(!empty($routesArray[2]))
          {
            if(
              $routesArray[2] == "inicio" ||
              $routesArray[2] == "clientes" ||
              $routesArray[2] == "vehiculos" ||
              $routesArray[2] == "ordenes" ||
              $routesArray[2] == "control-de-ordenes" 
              )

              {
            
               include "views/pages/". $routesArray[2] . "/" . $routesArray[2]. ".php";
            }else{
                include "views/pages/404/404.php";
                 
            }
          }else{
            include "views/pages/inicio/inicio.php";
            
          }

      ?>  
   </div>
     
    
    
  </div>
  <!-- /.content-wrapper -->

<!-- /.ANCLAR PAGINAS -->
 <?php
 include ("views/modulos/footer.php");
 ?>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="views/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="views/assets/plugins/adminlte/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="views/assets/plugins/adminlte/js/demo.js"></script>
</body>
</html>
