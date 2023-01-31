<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php">

<h1> Товары </h1>
    <input type="text" name="title" placeholder="наименование">
    <input type="text" name="price" placeholder="цена">
    <input type="submit" >
<table class="table table-striped">
    <tr>
        <td>id</td>
        <td>наименование</td>
        <td>цена</td>
    </tr>
    <?php foreach($this->products as $column => $product) : ?>
    <tr>

        <td><?= $product->id?></td>
        <td><a href="/Templates/product.php"> <?= $product->title?></a></td>
        <td><?= $product->price?></td>
        <td>
            <a href="?delete[id]=<?= $product->id?>">delete</a>
        </td>


    </tr>
    <?php endforeach; ?>
</table>

<!--<h1> Юзер </h1>-->
<!--<table class="table table-striped">-->
<!--    <tr>-->
<!--        <td>id</td>-->
<!--        <td>наименование</td>-->
<!--        <td>цена</td>-->
<!--    </tr>-->
<!--    --><?php //foreach($this->user as $column => $row) : ?>
<!--        <tr>-->
<!--            <td>--><?php //= $row->id?><!--</td>-->
<!--            <td>--><?php //= $row->email?><!--</td>-->
<!--            <td>--><?php //= $row->name?><!--</td>-->
<!--            <td><a href="?delete[id]=--><?php //= $row->id?><!--">delete</a></td>-->
<!---->
<!--        </tr>-->
<!--    --><?php //endforeach; ?>
<!--</table>-->
</form>

</body>
</html>
<?php
