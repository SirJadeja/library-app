<?php ob_start(); ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/db.php' ?>
<?php
if (isset($_POST['add_book'])) {
  $book_code=$_POST['book_code'];
  $book_title=$_POST['book_title'];
  $book_author=$_POST['book_author'];
  $book_category=$_POST['book_category'];
  $book_status=$_POST['book_status'];

  $query = "INSERT INTO books (book_code,book_title,book_author,book_category,book_status) ";
    $query .= "VALUES ('$book_code','$book_title','$book_author','$book_category','$book_status') ";
  $result= mysqli_query($connection,$query);
  if(!$result){
    die('query failed'.mysqli_error($result));
  }header('Location: '.$_SERVER['PHP_SELF']);


}

 ?>
        <div class="container-fluid px-4">
          <h1 class="mt-4">Add books</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Add new books</li>
          </ol>
          <div class="row">
            <!-- form start -->
            <form class='row' action='' method="post">
              <div class="row">
                <div class="col col-md-6">
                  <label for="inputEmail4" class="form-label">Book code</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Enter book code" name="book_code">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4" class="form-label">Book Title</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="Book Title" name="book_title">
                </div>
              </div>
              <div class="row g-3">
                <div class="col col-md-6">
                  <label for="inputEmail4" class="form-label">Book author</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Book author" name="book_author">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4" class="form-label">Book Category</label>
                  <select id="inputState" class="form-control" name="book_category">
                    <option selected>Choose...</option>
                    <?php
                    $query="SELECT * FROM categories";
                    $result= mysqli_query($connection,$query);
                    while ($row=mysqli_fetch_assoc($result)) {
                      $category=$row['category_name']?>
                        <option><?php echo $category; ?></option>
                      <?php
                    }
                     ?>
                  </select>
                </div>
              </div>
              <div class="row g-3">
                <div class="col col-md-6">
                  <label for="inputEmail4" class="form-label">Select Status</label>
                  <select id="inputState" class="form-control" name="book_status">
                    <option selected>Choose...</option>
                    <option>Available</option>
                    <option>Issued</option>
                    <option>Not Available</option>
                  </select>
                </div>
              </div>



<div class="row btn-margin-top">
  <div class="col-12">
<button type="submit" class="btn btn-primary" name="add_book">Add book</button>
</div>
</div>

            </form>
            <!-- /form ends -->
          </div>
        </div>
      <?php include 'includes/footer.php' ?>
