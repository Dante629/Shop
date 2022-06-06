<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
      
        
        <meta charset="UTF-8">
        <title>Магазин Flowers</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>

    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div id="banner-image">
           <div class="container">
               <center>
               <div id="banner_content">
                   <h1><b>Цветочный рай.</b></h1>
                   <p><b>Скидка 33% на всю продукцию.</b></p>
                   <a href="products.php" target="_blank"> <button class="btn btn-danger btn-lg active"><b>Делайте покупки прямо сейчас</b> </button></a>
                   
               </div>
                </center>
           </div>
       
       </div><br><br>
        
        
        
         <div class="container">
             <div class="row text-center">               
                 <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
                <image src="img/101.jpg"/>
             <div class="caption">
                 <h2>Букеты</h2>
                 <p>Букеты на любой вкус.</p>
             </div>
            </a>
                         </div>
        </div>

        <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
             <image src="img/102.jpg"/>
             <div class="caption">
                 <h2>Живые цветы</h2>
                 <p>Широкий ассортимент живых цветов.</p>
             </div>
            </a>
                     </div>
        </div>

        <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
             <image src="img/103.jpg"/>
             <div class="caption">
                 <h2>Цветочные Композиции</h2>
                 <p>Разных размеров и форм.</p>
             </div>
            </a>
                     </div>
        </div>
 
             </div>
         </div><br><br><br><br>
         
      
                
        
       <footer class="fo">
           <div class="container">
               <center>
                   <p>Авторские права <small>&copy;</small> Магазин Flowers | Все права защищены</p>
               </center>
           </div>
           
           
       </footer>
        
        
    </body>
</html>
