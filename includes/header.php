
    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand"><b>Магазин Flowers</b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(isset($_SESSION['email'])) {
                            ?>
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><b> Корзина</b></a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span><b> Настройки</b></a></li>
                        <li><a href="logout_script.php"><span class="glyphicon glyphicon-log-in"></span><b> Выйти</b></a></li>                       
                        
                        <?php
                        }else {
                            ?>
                        <li><a href="signup.php" target="_blank"><span class="glyphicon glyphicon-user"></span><b> Регистрация</b></a></li>
                        <li><a href="login.php" target="_blank"><span class="glyphicon glyphicon-log-in"></span><b> Логин</b></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
       
        </nav>

    