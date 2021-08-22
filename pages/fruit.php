<div class="p-3 container mt-3">
    <form  action="" method="post" >
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search by title" name="search">
        <div class="input-group-append">
        <button class="btn btn-success" type="submit">Search</button>
        </div>
    </div>
    </form>
    <div class="d-flex justify-content-end p-4 mb-3">
        <a href="create_fruit_html.php" class="btn btn-primary">ADD FRUIT +</a>
    </div>
    <?php 
        require_once('database/database.php');
        $fruits="";
        if($_SERVER['REQUEST_METHOD']=='POST'){
            //SEARCH
            $fruits=seachByTitle($_POST);
        }else{
            //select
            $fruits=getAll();
        }
        foreach($fruits as $fruit):
            $descripion= readmore($fruit['description'],50);
    ?>
    <div class="card mb-3 ">
        <div class="card-body">
            <div class="d-flex justify-content-end mb-2 mr-2">
                <a href="./edit_fruit_html.php?editid=<?=$fruit['fruit_id']?>" class="btn btn-primary mr-1"><i class="fa fa-pencil"></i></a>
                <a href="./delete_fruit.php?fruitid=<?=$fruit['fruit_id']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </div>
            <div class="d-flex ">
                <div class="image">
                    <img class="w-50 h-auto" src="images/<?=$fruit['fruit_image']?>" alt="" >
                </div>
                <div class="descrip">
                    <h3 class="display-6 ml-5">Name : <?=$fruit['fruitname']?></h3>
                    <h3 class="display-6 ml-5">Price : <?=$fruit['price']?>$</h3>
                    <h3 class="display-6 ml-5"><?=$descripion?>...<a href="?page=detail&id=<?=$fruit['fruit_id']?>"> readmore</a></h3>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach;  ?>
</div>