<?php include 'includes/header.php' ?>
<?php include 'includes/db.php' ?>

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Issue new book</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Issue book</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                              Select a book to issue
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Available books to issue
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                                <th>Book Code</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Category</th>
                                            <th>Date Added</th>
                                            <th>Status</th>
                                            <th>Issue</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Issue</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php
                                      $sql = "SELECT * FROM books WHERE book_status='Available' ";
  $result = mysqli_query($connection,$sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $book_id=$row['book_id'];
      $book_code=$row['book_code'];
      $book_title=$row['book_title'];
      $book_author=$row['book_author'];
      $book_category=$row['book_category'];
      $book_status=$row['book_status'];
      $book_date=$row['book_date_added'];
      ?>
      <tr>
          <td><?php echo $book_code; ?></td>
          <td><?php echo $book_title; ?></td>
          <td><?php echo $book_author; ?></td>
          <td><?php echo $book_category; ?></td>
          <td><?php if($book_date){echo $book_date;} ?></td>
          <td><?php echo $book_status; ?></td>
          <?php echo "<td><a href='issue_book_form.php?book_id=$book_id&book_code=" . urlencode($book_code) . "&book_title=". urlencode($book_title) ." '>Issue book</a></td>"; ?>

      </tr>
    <?php }
  } else {
    echo "0 results";
  }
  ?>




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php include 'includes/footer.php' ?>
