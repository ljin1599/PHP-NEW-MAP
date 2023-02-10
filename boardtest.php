<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="7">
    
    <title>안심하길 커뮤니티</title>
</head>
<body>
  <header>
    <?php include "header.php";?>
  </header>

  <!-- news -->
  <table class="news">
    <thead>
      <tr>
        <th scope="cols">NEWS</th>
        <th scope="cols"><a href="board_news.php"><img id="addimg" src="./img/add.png"></a></th>
      </tr>
    </thead>
    
    <tbody>
      <tr>
        <th scope="row">
          <img  src="./img/news1.jpg">
        </th>
        <td>
          <a id="simple" href="https://m.news.nate.com/view/20220426n22436">'여성안심귀갓길' 만들면 뭐하나…여성들 "그게 뭔가요?"</a>
        </td>
      </tr>

      <tr>
        <th scope="row">
          <img  src="./img/news2.jpg">
        </th>
        <td>
          <a id="simple" href="http://www.ohmynews.com/NWS_Web/View/at_pg.aspx?CNTN_CD=A0002220525">'여기가 왜 여성안심 안심귀갓길인가요?"</a>
        </td>
      </tr>
    </tbody>
  </table>

  <!-- 안심톡 -->
  <table class="talk">
    <thead>
      <tr>
        <th scope="cols">안심톡</th>
      </tr>
    </thead>
    
    <tbody>
      <tr>
        <th scope="row">
          <?php
            $con = mysqli_connect( 'localhost', 'user1', '12345', 'map' );
            $sql = "select * from talk order by num ASC limit 10";
            $result = mysqli_query( $con, $sql);

            while( $row = mysqli_fetch_array( $result) ) {
            $subject = $row['subject'];
          ?>  
            <span class="col1"><?=$subject?></span><br>
          <?php
            }
          ?>
        </th>
      </tr>
    </tbody>
  </table>

  <!-- 안심톡 입력 기능 -->
  <form class="input-box" name="talk_form" method="post" action="talk_insert.php" enctype="multipart/form-data">
    <div class="input-box">
      <input class="col2" id="id" type="text" name="subject" placeholder="채팅 입력하세요"></input>
    </div>
	</form>

  <!-- 게시물 -->
  <table class="board">
    <thead>
      <tr>
        <th scope="cols">게시물</th>
        <th scope="cols"><a href="board_form.php">
          <img id="addimg" src="./img/add.png"></a>
        </th>
      </tr>
    </thead>

    <tbody>
      <tr id="boardtitle">
        <td>작성자</td>
        <td>제목</td>
      </tr>
      
      <?php
        if (isset($_GET["page"])) {
          $page = $_GET["page"];
        } else {
          $page = 1;
        }

          $con = mysqli_connect( 'localhost', 'user1', '12345', 'map' );
          $sql = "select * from board order by num DESC limit 5 ";
    	    $result = mysqli_query($con, $sql);
	        $total_record = mysqli_num_rows($result);
          $scale = 10;

	      if ($total_record % $scale == 0) {
          $total_page = floor($total_record/$scale);      
        } else {
          $total_page = floor($total_record/$scale) + 1;
        }

          $start = ($page - 1) * $scale;      
          $number = $total_record - $start;

        for ($i=$start; $i<$start+$scale && $i < $total_record; $i++) {
          mysqli_data_seek($result, $i);

          $row = mysqli_fetch_array($result);

          $num = $row['num'];
          $id = $row['id'];
          $subject = $row['subject'];
          $content = $row['content'];
      ?>  
          <tr>
            <td>
              <span class="col1"><?=$id?></span>
            </td>
            <td>
              <span class="col2"><a id="simple" href="board_view.php?num=<?=$num?>"><?=$subject?></a></span>
            </td>
          </tr>
      <?php
          $number--;
        }
      
          mysqli_close($con);
      ?>  
    </tbody>    
  </table>
</body>

  <style>
    #boardtitle {
    background: #FFC846;
    }

    .input-box{
        position:relative;
        margin:10px 0;
    }

    .input-box > input{
        background:transparent;
        border:none;
        border-bottom: solid 1px #ccc;
        padding:5px 0px 5px 0px;
        font-size:10pt;
        width:350px;
    }

    input::placeholder{
        color: #aaa;
    }
/*    
    input:focus, input:not(:placeholder-shown){
        border-bottom: solid 1px #FFC846;
        outline:none;
    }
*/
    #forgot{
        text-align: right;
        font-size:12pt;
        color:rgb(164, 164, 164);
        margin:10px 0px;
        
    }

    table.news {
      border-collapse: collapse;
      text-align: left;
      line-height: 1.5;

    }

    table.news thead th {
      padding: 10px;
      font-weight: bold;
      vertical-align: top;
      color: #FF8200;
      border-bottom: 3px solid #FF8200;
    }

    #addimg {
      position: relative;
      float: right;
      padding-left: 10px; padding-top: 2.5px;
    }

    table.news tbody th {
      width: 50px;
      padding: 10px;
      font-weight: bold;
      vertical-align: top;
      border-bottom: 1px solid #ccc;
      background: #f3f6f7;
      
    }

    table.news td {
      width: 250px;
      padding: 10px;
      vertical-align: top;
      border-bottom: 1px solid #ccc;
      
    }

    table.talk {
      
      border-collapse: collapse;
      text-align: left;
      line-height: 1.5;

    }

    table.talk thead th {
      padding: 10px;
      font-weight: bold;
      vertical-align: top;
      color: #FF8200;
      border-bottom: 3px solid #FF8200;
    }

    table.talk tbody th {
      height: 150px;
      width: 330px;
      padding: 10px;
      font-weight: bold;
      vertical-align: top;
      border-bottom: 1px solid #ccc;
      background: #FAFAD2;
    }

    table.board {
      border-collapse: collapse;
      text-align: left;
      line-height: 1.5;

    }

    table.board thead th {
      padding: 10px;
      font-weight: bold;
      vertical-align: top;
      color: #FF8200;
      border-bottom: 3px solid #FFC846;
    }

    table.board tbody th {
      width: 155px;
      padding: 10px;
      font-weight: bold;
      vertical-align: top;
      border-bottom: 1px solid #ccc;
      background: #f3f6f7;
    }

    table.board td {
      width: 155px;
      padding: 10px;
      vertical-align: top;
      border-bottom: 1px solid #ccc;
    }

    #simple {
      text-decoration: none; 
      color: inherit; 
    }
  </style>
</html>