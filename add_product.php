<?php
require_once "model/Category.php";
require_once "model/StatusProduct.php";
require_once "model/Unit.php";



$category=new Category();

var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
</head>
<body>
    <form action="" method='POST'>
    <input type="text" name='name' placeholder='name'><br>
    <input type="number" name='year' placeholder='year'><br>
    <textarea name="description" placeholder='description'></textarea><br>
    <input type="image" name='image'  src="">
    <p>Вибір категорії</p>
    <input type="checkbox" name='category' value='1'>1<br>
    <input type="checkbox" name='category' value='2'>2<br>
    <input type="checkbox" name='category' value='3'>3<br>
    <p>Оберіть статус</p>
    <select name="status">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    </select>
    <!-- необхідно зациклити диний сектор, для повторного вибору -->
    <p>Одниція виміру</p>
    <select name="units">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    </select>
    <p>Ціна</p>
    <input type="number" name='price' placeholder='price'><br>
    <p>Кількість</p>
    <input type="number" name='quantity' placeholder='quantity'><br>
    <a href="">Продовжити</a><br>
    <!-- при натисканні продовжити, повторити форму -->
    <br>
    <input type="submit" name='send'><br>
    
    </form>
</body>
</html>