<?php
// echo "Nepal";exit();
require_once("DBConnect.php");

$sql = "SELECT * FROM `catalog`";
$result = mysqli_query($conn, $sql);
// $data = mysqli_num_rows($result);
// echo "<pre>"; print_r($result); exit();
?>

        <p id="breadcrumb"><a href="index.php" style="padding-left: 10px;">Home</a> &raquo; <a href="inventory.php">Inventory</a> &raquo; List</p>
        <div class="content table-responsive">
<h1>Inventories</h1>
<a href="insertcatalog.php"><img src="images/b1.png" height="30px"></a>
<table border="1" cellspacing="0" cellpadding="10" align="center" class="table table-bordered">
    <tr>
        <th style="font-size: 20px;">S.N.</th>
        <th style="font-size: 20px;">Book Name</th>
        <th style="font-size: 20px;">Price</th>
        <th style="font-size: 20px;">Image</th>
        <th style="font-size: 20px;">Isbn No.</th>
        <th style="font-size: 20px;">Writer Name</th>
        <th style="font-size: 20px;">Edition</th>
        <th style="font-size: 20px;">Stock</th>
        <th style="font-size: 20px;">Action</th>
    </tr>
<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    //$user_list = mysqli_fetch_assoc($result);
    // echo "<pre>"; print_r($user_list);exit;
    $i=0;
    while($row = mysqli_fetch_assoc($result)) {
        // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";

?>
    <tr style="font-size: 20px;">
                            <td><?= ++$i;?></td>
                         <!--   <td><?= $row["id"];?></td> -->
                            <td><?= $row["product_name"];?></td>
                            <td><?= $row["product_price"];?></td>
                            <td>
                                <img src=" <?= $row["product_image"];?>" class="card-img-top" height="100">
                            </td>
                            <td><?= $row["isbn"];?></td>
                            <td><?= $row["writer_name"];?></td>
                            <td><?= $row["edition"];?></td>
                             <td><?= $row["stock"];?></td>
        <td><a href="edit_inventory.php?id=<?= $row['id'];?>">Edit</a> | <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_inventory.php?id=<?= $row['id'];?>">Delete</a></td>
    </tr>
<?php
    }   
} else {
    ?>
    <tr>
        <td colspan="3">No Record(s) found.</td>
    </tr>
    <?php
}
?>
<?php 
mysqli_close($conn);
?>
</table>
            
        </div>
 