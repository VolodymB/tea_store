<?php

// $sql='SELECT * FROM `unit`';
// $select=$db->pdo->query($sql);
// var_dump($select->fetchAll());
// use model\Unit;
require_once 'model/Unit.php';
require_once 'model/Category.php';
require_once 'model/StatusProduct.php';
require_once 'model/Product.php';
require_once 'model/Status_order.php';
require_once 'model/User.php';
require_once 'model/Worker.php';
require_once 'model/Comment.php';

session_start();
var_dump($_SESSION['user_id']);
// $unit=new Unit();
// $unit->find(3);
// var_dump($unit->getProducts());

// $unit->name="0,357 кг";
// // $unit->save();
// echo '<pre>';
// var_dump($unit);
// // var_dump($unit2);
// echo '</pre>';
// // $unit->save();

// $user=new User();
// $user->find(7);
// $user->name='Alex';
// $user->surname='Boy';
// $user->email='goll@gu.hi';
// $user->login='golli';
// $user->password='12345root';
// $user->save();

// $worker=new Worker();
// $worker->find(15);
// $worker->role_id=1;
// $worker->name="Kurtymi";
// $worker->surname='Kurmimo';
// $worker->email='jaklii@dj.com';
// $worker->login="kurdello";
// $worker->password='123456789';
// $worker->save();
// var_dump($worker);

// $comment=new Comment();
// $comment->find(1);
// echo '<pre>';
// var_dump($comment);
// echo '</pre>';

// $comment=new Comment();
// $comment->find(3);
// $comment->user_id='6';
// $comment->comment='High cost';
// $comment->raiting=5;
// $comment->product_id=7;
// $comment->save();


$category=new Category();
$category->find(1);
$category->name='Хіт продажу';
$category->parent_id=11;
$category->sort_order=7;
// $category->save();
// var_dump($category->getProducts());


// $unit2=new Unit();
// $unit2->name='пачка';

// $unit2->save();

// $product=new Product();
// $product->find(2);
// echo '<pre>';
// var_dump($product->getComments());
// echo '</pre>';
// var_dump($product->getUnits());

// var_dump($product->categories);

// $status_product=new StatusProduct();
// $status_product->find(3);
// $status_product->name='лише на замовлення';
// var_dump($status_product);
// die;
// $status_product->save();
// $status_product->find(3);



// $product=new Product();
// $product->find(1);
// $product->name='Дянь Хун';
// $product->year=2020;
// $product->description='fhgfkhg';
// $product->status_id=2;
// // $product->save();
// foreach($product->categories as $category){
//     echo $category->name;
// }


// $status_order=new StatusOrder();
// $status_order->find(5);
// $status_order->name='в роботі';
// $status_order->save();
// var_dump($status_order);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
    <?php foreach($category->getProducts() as $product){ ?>
    <td></td>
    <td><?=$product->name.','.$product->year ?></td>
    <td><?=$product->description  ?></td>
    <td><ul>
    <?php foreach($product->categories as $category) {
        echo "<li>$category->name</li>";
    }?>
    
    </ul></td>
    <td><ul>
    <?php foreach($product->getUnits() as $unit) {
        echo "<li>за $unit->name - $unit->price грн. </li>";
    }?>
    
    </ul></td>
    <td><?=$product->status->name ?></td>    
    </tr>
    <?php } ?>
    </table>
</body>
</html>