<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";

    $subject = $_POST["subject"];
    

	$subject = htmlspecialchars($subject, ENT_QUOTES);
	
	$con = mysqli_connect("localhost", "user1", "12345", "map");

	$sql = "insert into talk (subject) ";
	$sql .= "values('$subject')";
	mysqli_query($con, $sql);

	mysqli_close($con);

    echo "<script>location.href='boardtest.php'</script>";

    ?>

  
