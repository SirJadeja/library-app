<?php ob_start(); ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/db.php' ?>
<?php
if (isset($_POST['return_book'])) {
 $book_id=$_GET["book_id"];
  $book_title=$_POST['book_title'];
echo $returned_date=urlencode($_POST['book_returned_date']);




$query ="UPDATE books SET book_status='Available' WHERE book_id=$book_id ";
$result= mysqli_query($connection,$query);
if(!$result){
  die('query failed'.mysqli_error($result));
}
 $query_issue ="UPDATE issues SET book_status='Returned' WHERE book_id=$book_id ";
 $result= mysqli_query($connection,$query_issue);
 if(!$result){
   die('query failed'.mysqli_error($result));
  }
  $query_date ="UPDATE issues SET return_date='$returned_date' WHERE book_id=$book_id ";
  $result= mysqli_query($connection,$query_date);
  if(!$result){
    die('query failed'.mysqli_error($result));
   }header('Location: return_books_table.php');










 // $query_issue = "INSERT INTO issues (book_code,book_title,person_name,person_mobile,person_email,person_address,book_issue_date,book_return_date) ";
 // $query_issue .= "VALUES ('$book_code','$book_title','$person_name', '$person_mobile','$person_email','$person_address','$book_issue_date','$ book_return_date') ";
 // $result_issues= mysqli_query($connection,$query_issue);
 // if(!$result_issues){
 //   die('query failed'.mysqli_error($result_issues));
 // }

  // $query = "INSERT INTO books (book_code,book_title,book_author,book_category,book_status) ";
  //   $query .= "VALUES ('$book_code','$book_title','$book_author','$book_category','$book_status') ";
  // $result= mysqli_query($connection,$query);
  // if(!$result){
  //   die('query failed'.mysqli_error($result));
  // }header('Location: '.$_SERVER['PHP_SELF']);


}

 ?>
        <div class="container-fluid px-4">
          <h1 class="mt-4">Return book</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Return book</li>
          </ol>
          <div class="row">
            <!-- form start -->
            <form class='row' action='' method="post">
              <div class="row g-3">
                <div class="row">
                  <h5>Book details:</h5>
                </div>
                <div class="col col-md-6">
                  <label for="inputEmail4" class="form-label">Book Title</label>
                  <?php// $book_code_get=string urlencode( $_GET["book_code"] ); ?>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Enter book code" name="book_title" value="<?php echo $_GET["book_title"]; ?>" >
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4" class="form-label">Return date</label>
                    <?php// $book_title_get=string urlencode( $_GET["book_title"] ); ?>
                    <input type="date" class="form-control" id="inputEmail4" placeholder="Date of issue" name="book_returned_date">
                </div>
              </div>

<div class="row btn-margin-top">
  <div class="col-12">
<button type="submit" class="btn btn-primary" name="return_book">Return book</button>
</div>
</div>

            </form>
            <!-- /form ends -->
          </div>
        </div>
      <?php include 'includes/footer.php' ?>
