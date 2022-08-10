<?php ob_start(); ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/db.php' ?>
<?php
if (isset($_POST['issue_book'])) {
 $book_id=$_GET["book_id"];
 $book_code=$_POST['book_code'];
 $book_title=$_POST['book_title'];
  $person_name=$_POST['person_name'];
  $person_mobile=$_POST['person_mobile'];
  $person_email=$_POST['person_email'];
  $person_address=$_POST['person_address'];
  $book_issue_date=$_POST['book_issue_date'];
  $book_return_date=$_POST['book_return_date'];



$query ="UPDATE books SET book_status='Issued' WHERE book_id=$book_id ";
$result= mysqli_query($connection,$query);
if(!$result){
  die('query failed'.mysqli_error($result));
 }

 $query_issue = "INSERT INTO issues (book_id,book_status,book_code,book_title,person_name,person_mobile,person_email,person_address,issue_date,return_date) ";
 $query_issue .= "VALUES ($book_id,'Issued','$book_code','$book_title','$person_name','$person_mobile','$person_email','$person_address','$book_issue_date','$book_return_date') ";
 $result_issues= mysqli_query($connection,$query_issue);
 if(!$result_issues){
   die('query failed'.mysqli_error($result_issues));
 }header('Location: issue_books_table.php');

  // $query = "INSERT INTO books (book_code,book_title,book_author,book_category,book_status) ";
  //   $query .= "VALUES ('$book_code','$book_title','$book_author','$book_category','$book_status') ";
  // $result= mysqli_query($connection,$query);
  // if(!$result){
  //   die('query failed'.mysqli_error($result));
  // }header('Location: '.$_SERVER['PHP_SELF']);


}

 ?>
        <div class="container-fluid px-4">
          <h1 class="mt-4">Issue book</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Issue a new book</li>
          </ol>
          <div class="row">
            <!-- form start -->
            <form class='row' action='' method="post">
              <div class="row g-3">
                <div class="row">
                  <h5>Book details:</h5>
                </div>
                <div class="col col-md-6">
                  <label for="inputEmail4" class="form-label">Book code</label>
                  <?php// $book_code_get=string urlencode( $_GET["book_code"] ); ?>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Enter book code" name="book_code" value="<?php echo $_GET["book_code"]; ?>" >
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4" class="form-label">Book Title</label>
                    <?php// $book_title_get=string urlencode( $_GET["book_title"] ); ?>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="Book Title" name="book_title" value="<?php echo $_GET["book_title"] ?>" >
                </div>
              </div>

              <div class="row g-3 mt-5">
                <div class="row">
                  <h5>Personal details:</h5>
                </div>
                <div class="col col-md-6">
                  <label for="inputEmail4" class="form-label">Name</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Enter your name" name="person_name">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4" class="form-label">Mobile No.</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Enter your mobile no." name="person_mobile">
                </div>
              </div>
              <div class="row g-3">
                <div class="col col-md-6">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Enter your email" name="person_email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4" class="form-label">Home Address</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Enter your address" name="person_address">
                </div>
              </div>
              <div class="row g-3">
                <div class="col col-md-6">
                  <label for="inputEmail4" class="form-label">Date of issue</label>
                  <input type="date" class="form-control" id="inputEmail4" placeholder="Date of issue" name="book_issue_date">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4" class="form-label">Return date:</label>
                  <input type="date" class="form-control" id="inputEmail4" placeholder="Date of return" name="book_return_date">
                </div>
              </div>



<div class="row btn-margin-top">
  <div class="col-12">
<button type="submit" class="btn btn-primary" name="issue_book">Issue book</button>
</div>
</div>

            </form>
            <!-- /form ends -->
          </div>
        </div>
      <?php include 'includes/footer.php' ?>
