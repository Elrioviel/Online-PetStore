<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Зоомагазин "Хвостик"</title>
    <link rel="stylesheet" href="css\indexstyle.css">
    
</head>
<body>
    <!-- Navbar starts -->
    <div class="navbar">
        <div class="row flex">
            <div class="column">
                <button><a href="#">Категории</a></button>
            </div>
            <div class="column">
                <button><a href="#">Товары</a></button>
            </div>
            <div class="column">
                <button><a href="#">Животные</a></button>
            </div>
            <div class="column">
                <button><a href="#">Производители</a></button>
            </div>
        </div>
        <div class="row flex">
            <div class="column">
                <button><a href="#">Заказы</a></button>
            </div>
            <div class="column">
                <button><a href="#">Оплаты</a></button>
            </div>
            <div class="column">
                <button><a href="#">Пользователи</a></button>
            </div>
            <div class="column">
                <button><a href="index.php?insert-categories">Добавить категорию</a></button>
            </div>
        </div>
        <div class="row flex">
            <div class="column">
                <button><a href="index.php?insert-animals">Добавить животное</a></button>
            </div>
            <div class="column">
                <button><a href="index.php?insert-products">Добавить товар</a></button>
            </div>
            <div class="column">
                <button><a href="index.php?insert-brands">Добавить Производителя</a></button>
            </div>
            <div class="column">
                <button><a href="#">Выйти из системы</a></button>
            </div>
        </div>
    </div>
    <!-- Navbar ends -->
    <!-- form container starts -->
    <section class="container">
        <div class="dashboard">
            <h1>Панель администратора</h1></div>
        <div class="form-container">
            <?php 
            if(isset($_GET['insert-categories']))
            {
                include('insert-categories.php');
            }
            if(isset($_GET['insert-brands']))
            {
                include('insert-brands.php');
            }
            if(isset($_GET['insert-animals']))
            {
                include('insert-animals.php');
            }
            if(isset($_GET['insert-products']))
            {
                include('insert-products.php');
            }
            ?>
        </div>
    </section>
    <!-- form container ends -->
</body>