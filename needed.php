   <!-- //////////////////////////////////////////////////// -->
     <?php
   $server = "localhost";
   $username = "root";
   $pwd = "";
   $db = "sbt_db";

   $conn = mysqli_connect($server, $username, $pwd, $db);

   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  if(isset($_POST['Login']))
  {
   $username = $_POST['username'];
 
   $sql ="SELECT `id_number` FROM `register_buyer` WHERE `username` = '$username'";
   $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $i=0;
      while($row = mysqli_fetch_assoc($result)) {
       ?>
        <form action="clearbuycart.php" method="POST">
          <input type="hidden" name="id_number" value="<?= $row["id_number"];?>">
       <h2> <a href="buyer_cart.php">  <input type="submit" name="submit" value="Sajha Book Thela" style="border:1px solid white;">
       </a>
     </h2>
        </form>
<?php
    }  
  } 
  
 mysqli_close($conn);
}
?>
    <!-- ////////////////////////////////////////////////////// -->