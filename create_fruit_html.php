
<?php require_once('partial/hearder.php'); ?>
    <div class="container p-4 ">
        <form action="create_fruit_model.php" method="post" style="height:60vh" enctype="multipart/form-data" >
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name Fruit" name="fruitname" >
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="form-group">
                <input type="file" name="file" id="file">
            </div>
            <div class="form-group" >
                <input type="text" class="form-control" placeholder="Description" name="description">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form>
    </div>
<?php require_once('partial/footer.php'); ?>