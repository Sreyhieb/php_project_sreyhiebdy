<?php require_once('partial/hearder.php'); ?>
    <div class="container p-4">
        <?php
            require_once('database/database.php');
            $fruitid = $_GET['editid'];
            $fruits = getOneFruit($fruitid);
            foreach ($fruits as $fruit):
        ?>
        <form action="edit_fruit_model.php" method="post">
        <input type="hidden" value="<?=$fruit['fruit_id']?>" name="fruit_id">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Fruit Name" name="fruitname" value="<?=$fruit['fruitname']?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price" name="price" value="<?=$fruit['price']?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Image" name="fruit_image" value="<?=$fruit['fruit_image']?>">
            </div>
            <div class="form-group" >
                <input type="text" class="form-control" placeholder="Description" name="description" value="<?=$fruit['description']?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update Fruit</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>