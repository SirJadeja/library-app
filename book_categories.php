<?php ob_start(); ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/db.php' ?>

<?php
if (isset($_POST['add_category'])) {
  $category_name=$_POST['category_name'];

  $query="INSERT INTO categories (category_name) ";
  $query.="VALUES ('$category_name') ";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die('query failed'.mysqli_error($result));
  }
  header('Location: '.$_SERVER['PHP_SELF']);
}

 ?>

<div class="container-fluid px-4">
<h1 class="mt-4">Categories</h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item active">Add book categories</li>
</ol>
<div class="row">
  <div class="col-xl-6 px-4">
    <form method="post">
      <div class="mb-3 ">
        <label for="exampleInputEmail1" class="form-label">Enter category name</label>
        <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary" name="add_category">Add new category</button>
    </form>
  </div>
  <div class="col-xl-6 px-4">

    <table id="datatablesSimple">
        <thead>
            <tr>
                <th>Sr. no</th>
                <th>Category Name</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
            </tr>
        </tfoot>
        <tbody>
          <?php
          $query="SELECT * FROM categories";
          $result= mysqli_query($connection,$query);



          $i=1;
          while($row=mysqli_fetch_assoc($result)){
            $category_name=$row['category_name'];

            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $category_name; ?></td>
            </tr>
          <?php
          $i++;
        }

           ?>

    </tbody>
</table>


  </div>

</div>

</div>
<?php include 'includes/footer.php' ?>
