	<script type="text/javascript">
	window.onbeforeunload = function () {
		<?php 
			$server = "localhost";
			$username = "root";
			$pwd = "";
			$db = "sbt_db";

			$conn = mysqli_connect($server, $username, $pwd, $db);
			if (!$conn) 
			{
				die("Connection failed: " . mysqli_connect_error());
			}
			 $sql = "DELETE FROM `buyer_cart` WHERE `username`='$u'";
         if(mysqli_query($conn, $sql))
        {
            session_destroy();
            
     
        }
    ?>
}
	</script>
      