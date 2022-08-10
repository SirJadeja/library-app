<?php include 'includes/db.php' ?>
<?php
$query = "SELECT * FROM books";
$select_all_query = mysqli_query($connection, $query);

// while ($row = mysqli_fetch_assoc($select_all_query)) {
//  $book_title=$row['book_title'];
// }

$sql = "SELECT * FROM books  ";
$result = mysqli_query($connection,$sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    ?>
  <?php }
} else {
  echo "0 results";
}
?>
