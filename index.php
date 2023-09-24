<!--connect to db-->
<?php
include('includes/connect.php');
include('functions/common-functions.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Зоомагазин "Хвостик"</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css\swiper-bundle.min.css">
    <link rel="stylesheet" href="css\homestyle.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <div class="double-navbars">
    <!-- first nav bar starts -->
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
    <!-- first nav bar ends -->
    <!-- second nav bar starts -->
    <div class="second-navbar flex">
        <div class="logo">
            <a href="http://localhost/Online-PetStore/index.php#"><img class="logo" src="img\logo.png" alt="logo"></a>
        </div>
        <nav class="second-nav p-0">
            <ul class="flex">
                <li><a href="#">Товары</a></li>
                <li><a href="#">Собаки</a></li>
                <li><a href="#">Кошки</a></li>
                <li><a href="#">Грызуны</a></li>
                <li><a href="#">Птицы</a></li>
                <li><a href="#">Рыбы</a></li>
                <li><a href="#">Акции%</a></li>
            </ul>
        </nav>
    </div>
    </div>
    <!-- second nav bar ends -->
    <!-- home section starts -->
    <section id="home-section">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="img\1.png" class="d-block w-100" alt="Rodents food">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>СКИДКА 20%</h5>
                        <p>На PREMIUM корма для грызунов, кроликов и шиншилл</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="img\2.png" class="d-block w-100" alt="Pet clothes">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>РАСПРОДАЖА ЛЕТНЕЙ КОЛЛЕКЦИИ</h5>
                        <p>Только с 16 июня по 23 июля 2023</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="img\3.png" class="d-block w-100" alt="Cat toys">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>НОВИНКА</h5>
                        <p>Гамак для кошек настенный</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img\4.png" class="d-block w-100" alt="Dog snacks">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ВКУСНЯШКИ ДЛЯ ЛЮБИМЫХ ХВОСТИКОВ</h5>
                        <p>Наши друзья достойны самого лучшего!</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- home section ends -->
    <!-- Categories section starts -->
    <section class="products-section">
        <div class="container py-5">
            <?php
            showCategories()
            ?>
        </div>
    </section>
    <!-- Categories section ends -->
    <!-- Brands section starts -->
    <section id="brands flex-center">
        <h1>ПОПУЛЯРНЫЕ ПРОИЗВОДИТЕЛИ</h1>
        <?php
        showBrands()
        ?>
    <!-- Brands section ends -->
    <!-- contact section starts -->
    <section id="contact-section flex-center">
        <div class="contact-wrapper">
            <h1>КОНТАКТЫ</h1>
            <div class="contact-info">
                <div class="operator-hours">
                    <h3>Оператор работает с 09:00 до 21:00</h3>
                </div>
                <div class="phone-number">
                    <p>+7(910)901 27 66</p>
                    <p>+7(900)601 31 21</p>
                </div>
                <div class="mail">
                    <p>Email: ghalyadahech@gmail.com</p>
                </div>
                <div class="work-hours">
                    <p>График работы Пн-Вс: с 10:00 до 22:00</p>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section ends -->
    <!-- footer starts -->
    <footer>
        <div class="copyrights">
            <p>Ghalia Dahech © 2023</p>
        </div>
        <div class="github flex-center">
            <a href="https://github.com/Elrioviel">My Github</a>
            <img src="img\github.png" alt="github">
        </div>
    </footer>
    <!-- footer ends -->
</body>
</html>