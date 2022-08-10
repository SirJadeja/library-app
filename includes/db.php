

<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'library';


$connection = mysqli_connect($server,$username,$password,$dbname);

if(!$connection){
  die('Connection failed'. mysqli_connect_error());
}else{
  echo "we are connected";
}



// $query = "SELECT * FROM books";
// $select_all_posts_query = mysqli_query($connection, $query);
// $row = mysqli_fetch_assoc($select_all_posts_query);
// print_r($row);
// while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
//   echo $book_title=$row['book_title'];
// }


 ?>
