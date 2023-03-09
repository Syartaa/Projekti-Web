<?php
 require_once 'productsController.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/dashbord.css">
    <title>Dashboard</title>
    <style>
      .create{
        text-decoration: none;
        color: #f8d272;
      }
      .create:hover{
        color:orange;
      }
    </style>
</head>
<body>
   
    <?php include '../include/navbar.php' ?>
  
<main>
<table class="content-table">
        <thead>
            <tr>
              <th>Produkt image</th>
              <th>Produkt title</th>
              <th>Produkt name</th>
              <th>Produkt description</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $p=new productsController;
          $allProdukte = $p->getAll();
          foreach($allProdukte as $produkte): ?>
          <tr>
            <td><?php echo $produkte['image']; ?></td>
            <td ><?php echo $produkte['title']; ?></td>
            <td> <?php echo $produkte['name']; ?></td>
            <td> <?php echo $produkte['description']; ?></td>
            <td><a href="edit-produkte.php?id=<?php echo $produkte['id'];?>">Edit</a></td>
            <td><a href="delete-produkte.php?id=<?php echo $produkte['id'];?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
          <a href="produkte-create.php" class="create" >Create a product</a>
        </tbody>
    </table>
</main>

    <?php include '../include/footer.php' ?>

</body>
</html>