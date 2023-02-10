<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $phonenum = $_POST["phonenum"];
              
    $con = mysqli_connect("localhost", "user1", "12345", "map");

	$sql = "insert into mem(id, pass, name, age, phonenum) 
                   values('$id', '$pass', '$name', '$age', '$phonenum')";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'index.php';
	      </script>
	  ";
?>

   
