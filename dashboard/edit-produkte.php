<?php


require_once 'productsController.php';
if(isset($_GET['id'])){
    $produktId=$_GET['id'];
}

$p=new productsController;
 $currentProdukte = $p->edit($produktId);

if(isset($_POST['submit'])){
    $p->update($_POST,$produktId);
}

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background-color: antiquewhite;
   margin: 0;
}
    form{
        width: 400px;
    margin: 8vh auto 5vh auto;
    padding: 20px;
    background-color: rgba(242, 205, 161, 0.6);
    border-radius: 4px;
    font-size: 12px;
    box-shadow: 10px -5px 5px rgb(243, 207, 162);
    }
    form input{
     margin:5px;
     padding:5px;
    }
   form label{
        font-size:15px;

    } 
    .update{
        background-color: rgba(231, 133, 22, 0.6);
        border-radius:5px;
        border:none;
        width:100%;
        padding:5px;
    } 
    .update:hover{
        background-color: rgba(231, 133, 22, 0.9);
    }

</style>
    </head>
    <body>
    
    <?php include '../include/navbar.php' ?>
  <main>
<form action="" method="POST">
        <label>Image:</label>
        <input type="file" name="image" value="<?php echo $currentProdukte['image']; ?>">
        <br>
        <label>Title:</label>
        <input type="text" name="title" value="<?php echo $currentProdukte['title']; ?>">
        <br>
       <label> name:</label>
        <input type="text" name="name" value="<?php echo $currentProdukte['name']; ?>">
        <br> 
        <label>description:</label>
        <input type="text" name="description" value="<?php echo $currentProdukte['description'];?>">
        <br>
    <input type="submit" name="submit" class="update" value="Update" >
</form>
</main>
     <?php include '../include/footer.php' ?>  
    
    </html>