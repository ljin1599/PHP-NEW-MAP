<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>게시글</title>
</head>
<body>

	<header>
		<?php include "header.php";?>
	</header>  
	
	<section>
   		<div id="board_box">
	    	<h3 class="title">
				게시글
			</h3>

			<table class="board">
				<thead>
					<?php
						$num  = $_GET["num"];
						$con = mysqli_connect( 'localhost', 'user1', '12345', 'map' );
						$sql = "select * from board where num=$num";
						$result = mysqli_query( $con, $sql);

						$row = mysqli_fetch_array( $result ) ;
			
						$id = $row['id'];
						$subject = $row['subject'];
						$content = $row['content'];

						$content = str_replace(" ", "&nbsp;", $content);
						$content = str_replace("\n", "<br>", $content);
					?>  

					<tr>
						<td>
							<span class="col1">제목 : <?=$subject?></span>
						</td>
					</tr>
				</thead>
				
				<tbody>
   					<tr>
						<td>
							<span class="col2">내용 : <?=$content?></span>
						</td>
					</tr>
				</tbody>
			</table>
			
			<button onclick="location.href='boardtest.php'">목록</button>
		</div>
	</section> 
</body>
<style>
	#title { 
		margin-top: 70px; margin-left: 130px; font-family: 'Dongle', sans-serif; font-size: 50px;
	}
						
	#board_box h3 {
		margin-top: 20px;
		margin-bottom: -15px;
		padding: 30px; 
		font-size: 20px;
		margin-left: 120px; 
	}

	table.board {
		border-collapse: collapse;
		text-align: left;
		margin-left: 10px;
		background-size:200px;
	}

	table.board thead td {
		width: 305px;
		line-height: 1.5;
		padding: 10px;
		vertical-align: top;
		border-bottom: 1px solid #ccc;
		margin-left: 10px;
	}

	table.board tbody td{
		width: 305px;
		height: 200px;
		padding: 10px;
		vertical-align: top;
		border-bottom: 1px solid #ccc;
		margin-left: 10px;
	}

	button{
		background-color: #FFB432;
		border:none;
		color:white;
		border-radius: 15px;
		width:330px;
		height:35px;
		margin-top:30px;
		margin-left: 10px;
		}

</style>
</html>
