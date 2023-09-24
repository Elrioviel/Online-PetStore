<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css\products-style.css">
    <?php
    include('includes/connect.php'); 
    include('functions/common-functions.php');
    ?>
    <title>Зоомагазин "Хвостик"</title>
</head>
<body>
    <!--Navbar-->
    <nav class="first-navbar flex">
        <div class="left flex">
            <div class="contacts flex">
                <i class="fa fa-envelope"></i>
                <a href="#contact-section flex-center">Контакты</a>
            </div>
            <div class="cart flex">
                <a href="#">Корзина</a>
                <a class="flex" href="#"><img class="cart-icon" src="img\cart.png" alt="cart"><sup>1</sup></a>
            </div>
        </div>
        <div class="right flex">
            <div class="sign-in">
                <a href="#">Зарегистрироваться</a>
            </div>
            <div class="log-in">
                <a href="#">Мой кабинет</a>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!--Categories section-->
        <nav class="categories">
            <ul>
                <?php
                showCategoriesInProducts()
                ?>
            </ul>
        </nav>
        <!--Products section-->
        <main class="products">
            <?php
            showProductsInProducts()
            ?>
        </main>
    </div>
</body>
</html>