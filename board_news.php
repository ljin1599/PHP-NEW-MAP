<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>뉴스</title>
</head>
<body> 
  <header>
    <?php include "header.php";?>
  </header>  
  
  <section>
    <div id="board_box">
      <h3 class="title">
        뉴스
      </h3>

      <table class="board">
        <tbody>
          <th scope="row">
            <img  src="./img/news1.jpg">
          </th>  
          <td>
            <a href="https://m.news.nate.com/view/20220426n22436">'여성안심귀갓길' 만들면 뭐하나…여성들 "그게 뭔가요?"</a>
          </td>
          <tr></tr>

          <th scope="row">
            <img  src="./img/news2.jpg">
          </th>
          <td>
            <a href="http://www.ohmynews.com/NWS_Web/View/at_pg.aspx?CNTN_CD=A0002220525">'여기가 왜 여성안심 안심귀갓길인가요?"</a>
          </td>
          <tr></tr>
          
          <th scope="row">
            <img  src="./img/news3.png">
          </th>
          <td>
            <a href="https://www.news1.kr/articles/?4679607">여성 머리채 잡고 골목 끌고가 강간 시도한 30대 '집행유예'</a>
          </td>
          <tr></tr>
          
          <th scope="row">
            <img  src="./img/news4.png">
          </th>
          <td>
            <a href="https://cm.asiae.co.kr/article/2021121912284442975">혼자 귀가하던 여성 기절시켜 성폭행…항소심서 징역 10년</a>
          </td>
          <tr></tr>
              
          <th scope="row">
            <img  src="./img/news5.png">
          </th>
          <td>
            <a href="https://www.donga.com/news/Society/article/all/20211107/110118980/1">법원, 새벽 귀갓길 20대 女 끌고간 ‘거구 괴한’에 징역 1년 6월 선고</a>
          </td>
          <tr></tr>
              
          <th scope="row">
            <img  src="./img/news6.png">
          </th>
          <td>
            <a href="https://newsis.com/view/?id=NISX20211012_0001610609">골목에서 여성 앞지른 뒤 돌아서 소변, 400만원 벌금형</a>
          </td>
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

  table.board td {
    width: 255px;
    line-height: 1.5;
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