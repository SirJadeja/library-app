<?php include 'includes/header.php' ?>
<?php include 'includes/db.php' ?>

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Return book</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Return book</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                              Select a book to return
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Books awaiting to be returned.
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                          <th>Issue date</th>
                                          <th>Book code</th>
                                          <th>Book title</th>
                                          <th>Reader Name</th>
                                          <th>Reader Contact no.</th>
                                          <th>Reader Email</th>
                                          <th>Reader Address</th>
                                          <th>Return</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>Issue date</th>
                                          <th>Book code</th>
                                          <th>Book title</th>
                                          <th>Reader Name</th>
                                          <th>Reader Contact no.</th>
                                          <th>Reader Email</th>
                                          <th>Reader Address</th>
                                          <th>Return</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php
                                      $sql = "SELECT * FROM issues WHERE book_status='Issued' ";
  $result = mysqli_query($connection,$sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $book_id=$row['book_id'];
      $book_status=$row['book_status'];
      $book_code=$row['book_code'];
      $book_title=$row['book_title'];
      $person_name=$row['person_name'];
      $person_mobile=$row['person_mobile'];
      $person_email=$row['person_email'];
      $person_address=$row['person_address'];
      $issue_date=$row['issue_date'];
      $return_date=$row['return_date'];

      ?>
      <tr>
          <td><?php echo $issue_date; ?></td>
          <td><?php echo $book_code; ?></td>
          <td><?php echo $book_title; ?></td>
          <td><?php echo $person_name ?></td>
          <td><?php echo $person_mobile?></td>
          <td><?php echo $person_email?></td>
          <td><?php echo $person_address?></td>
            <?php echo "<td><a href='return_book_form.php?book_id=$book_id&book_title=". urlencode($book_title) ." '>Return book</a></td>"; ?>
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
