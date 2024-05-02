<?php 
    include("connect.php");

    if (!isset($_COOKIE['id'])) {
        header("Location: authorization.html");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Русичи</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="header_wrapper">
                <div class="header_logo">
                    <a href="index.html">
                        <img src="images/logo_1-01.svg" class="logo">
                    </a>
                    <div class="dropdown">
                        <button onclick="dropdown()" class="dropbtn">Команды</button>
                        <div id="myDropdown" class="dropdown-content">
                          <a href="bears.php">Медведи</a>
                          <a href="ryisi.php">Рыси</a>
                          <a href="barsi.php">Барсы</a>
                          <a href="eagles.php">Орлы</a>
                        </div>
                      </div>
                </div>
                <div class="header_menu">
                    <a href="admin.php">
                        <img src="images/profile_test.png" class="profile_photo">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <img src="images/gerb_left.png" class="left_gerb">
    <img src="images/gerb_right.png" class="right_gerb">

    <div class="container">
        <form action="send_fill.php" class="fill_cont">
            <h1>Имя</h1>
            <input name="name" type="text" class="log" placeholder="Иван">
            <h1>Фамилия</h1>
            <input name="surname" type="text" class="log" placeholder="Антонов">
            <h1>Достижения</h1>
            <input name="achiev"type="text" class="log" placeholder="Первое место в турнире по каратэ">
            <h1>Увлечения</h1>
            <input name="uvlech" type="text" class="log" placeholder="Люблю разбирать оружие">
            <h1>Возраст</h1>
            <input name="age" type="text" class="log" placeholder="15 лет">
            <input type="submit" value="Войти" class="reg_but">
        </form>
    </div>
    

    <script src="script.js"></script>
</body>
</html>