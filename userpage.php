<!DOCTYPE html>
<html lang="ru">
<head> 
<link href="https://fonts.google.com/specimen/Oleo+Script" rel="stylesheet">
<meta charset="UTF-8">
<meta name = "viewport" content ="witdh=device-width">
<title>Мой сайт</title>
<link rel="stylesheet" href="styles/styles.css">
<script type="text/javascript" src="scripts/jquery-3.6.0.js"></script>
<script type="text/javascript" src="scripts/scripts1.js"></script>
</head>
<div class="op">
<body bgcolor="white">
<tr>
<div>
    <a href="index.php" class="closing-button"><span>Главная</span></a></td>
    <a href="info.php" class="closing-button"><span>О себе</span></a></td>
    <a href="labs.php" class="closing-button"><span>Лабы по ДМ</span></a></td>
    <a href="galery.php" class="closing-button"><span>Галерея</span></a></td>
    <a href="contacts.php" class="closing-button"><span>Ссылки</span></a></td>
    <div class="avtorisator">
            <?php
                if($_COOKIE['user']==''):
            ?>


            <a href="registr.php" class="closing-button"><span>Регистрация/вход</span></a></td>

            </a>
            <?php else:?>
                <div>
                    <a href="exit.php" class="closing-button"><span>Выход</span></a>
                    <a href="userpage.php" class="closing-button"><span><?=$_COOKIE['user']?></span></a>
                </div>
            <?php endif;?>

        </div>
</div>

<div class="userImage">
    <?php
    ?>
    <img src="<?php echo $_COOKIE['image']?>" alt="">

</div>
<div class="userinfo">
    Имя: <?=$_COOKIE['user']?><br>
    Логин: <?=$_COOKIE['login']?><br>
    Админ:
    <?php if ($_COOKIE['admin']==0):?>
        Нет
    <?php else:?>
        Да
        <br>
        <a href="admin.php"> Админ панель </a>
    <?php endif;?>

</div>
</tr>
</div>
</body> 
</html>