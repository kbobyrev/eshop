<?php
include_once "../models/goods.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Админка</title>
    <link rel="stylesheet" href="../public/css/styles.css" type="text/css" media="all">
</head>
<body>
<div id="container">
    <div class="leftblock">
        <nav>
            <div class="menu">
                <ul>
                    <li><a href="index.php" class="active">Главная</a></li>
                    <li><a href="add_item.php">Добавить товар</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="content">
    <h1>Админка</h1>
       <form method="POST" action="../models/load_new_item.php" enctype="multipart/form-data">
            <p>Add new item</p>
            <p>Item name: <input type="text" name="name" required></p>
            <p>Item descip: <textarea name="desc" rows ="10" required></textarea></p>
            <p>Item price: <input type="number" name="cost" required></p>
            <p>Load photo(png,jpeg,gif)</p>
            <input type="file" name="img" required><br>
            <input type="submit" name="load">

       </form> 
    </div>
</div>
</body>
</html>