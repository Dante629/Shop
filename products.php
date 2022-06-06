<?php
include "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!--

-->
<html>
    <head>
               
        <meta charset="UTF-8">
        <title>Магазин Flowers | Товары</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
        <br><br><br><br><br>
        <div class="container">
            
            <div class="jumbotron">
                <h1>Добро пожаловать в Flowers!</h1>
                <p>У нас есть лучшие цветы для вас. Не нужно искать, у нас есть все в одном месте.</p>
                
            </div>
             
        </div>
        
                
                 <div class="container">
              <div class="row text-center">
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/55.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Анемона </h3>
                              <p>Цена: 479 </p>
                              <?php 
					
					if (check_if_added_to_cart(1)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Добавлена в корзину</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Добавить в корзину</a>
					<?php
					}
                                ?>
                            
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/56.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Армерия</h3>
                              <p>Цена: 609</p>
                              <?php 
					
					if (check_if_added_to_cart(2)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Добавлена в корзину</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Добавить в корзину</a>
					<?php
					}
                                ?>
                              
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/57.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Астранция</h3>
                              <p>Цена: 680</p>
                              <?php 
					
					if (check_if_added_to_cart(3)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Добавлена в корзину</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Добавить в корзину</a>
					<?php
					}
                                ?>
                              
                          </div>
                      </div>
                  </div>
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/58.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Безвременник</h3>
                              <p>Цена: 329</p>
                              <?php 
					
					if (check_if_added_to_cart(4)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Добавлена в корзину</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Добавить в корзину</a>
					<?php
					}
                                ?>
                              
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/59.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Брахикома</h3>
                              <p>Цена: 422</p>
                              <?php 
					
					if (check_if_added_to_cart(5)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Добавлена в корзину</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Добавить в корзину</a>
					<?php
					}
                                ?>
                              
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/60.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Ванда</h3>
                              <p>Цена: 907</p>
                              <?php 
					
					if (check_if_added_to_cart(6)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Добавлена в корзину</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Добавить в корзину</a>
					<?php
					}
                                ?>
                              
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/61.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Ваточник</h3>
                              <p>Цена: 337</p>
                              <?php 
					
					if (check_if_added_to_cart(7)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Добавлена в корзину</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Добавить в корзину</a>
					<?php
					}
                                ?>
                             
                          </div>
                      </div>
                  </div>
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/62.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Вриезия</h3>
                              <p>Цена: 548</p>
                              <?php 
					
					if (check_if_added_to_cart(8)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Добавлена в корзину</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Добавить в корзину</a>
					<?php
					}
                                ?>
                              
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/63.jpg" alt="Responsive image" id="imgs">
                          <div class="caption">
                              <h3>Гвоздика</h3>
                              <p>Цена: 439</p>
                              <?php 
					
					if (check_if_added_to_cart(9)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Добавлена в корзину</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Добавить в корзину</a>
					<?php
					}
                                ?>
                             
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/64.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Гузмания</h3>
                              <p>Цена: 876</p>
                              <?php 
					
					if (check_if_added_to_cart(10)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Добавлена в корзину</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Добавить в корзину</a>
					<?php
					}
                                ?>
                              
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/65.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Дипладения</h3>
                              <p>Цена: 325</p>
                              <?php 
					
					if (check_if_added_to_cart(11)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Добавлена в корзину</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Добавить в корзину</a>
					<?php
					}
                                ?>
                              
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/66.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Ипомея</h3>
                              <p>Цена: 240</p>
                              <?php 
					
					if (check_if_added_to_cart(12)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Добавлена в корзину</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Добавить в корзину</a>
					<?php
					}
                                ?>
                              
                          </div>
                      </div>
                      
                      
                      
                  </div>
                  
              </div>
             
          </div><br>
       <footer class="fo">
           <div class="container">
               <center>
                   <p>Авторские права <small>&copy;</small> Магазин Flowers | Все права защищены</p>
               </center>
           </div>
           
           
       </footer>
        
        
    </body>
</html>
