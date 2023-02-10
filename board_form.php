<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>게시글 작성</title>
<script>
  function check_input() {
      if (!document.board_form.subject.value)
      {
          alert("제목을 입력하세요!");
          document.board_form.subject.focus();
          return;
      }
      if (!document.board_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.board_form.content.focus();
          return;
      }
      document.board_form.submit();
   }
</script>
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
    <section>
        <div id="board_box">
            <h3 id="board_title"></br>
                게시글 작성
            </h3> 
            <form name="board_form" action="board_insert.php" method="POST" enctype="multipart/form-data">
                <ul id="board_form">
                    <div class="input-box">
                        <input id="subject" type="text" name="subject">
                        <label for="subject">제목</label>
                    </div>

                    <div class="input-box">
                        <input id="content" type="text" name="content">
                        <label for="content">내용</label>
                    </div>
                </ul>
                
                <ul class="buttons">
                    <button type="button" onclick="check_input()">완료</button>
                </ul>
            </form>
        </div>
    </section>
</body>
<style>
    #board_box h3 {
    margin-top: 30px;
    padding: 30px; 
    font-size: 20px;
    margin-left: 100px; 
    }

    #board_form input { 
        width: 330px; height: 25px; margin-left: -36px; 
    }

    button{
        background-color: #FFB432;
        border:none;
        color:white;
        border-radius: 15px;
        width:330px;
        height:35px;
        font-size: 14pt;
        margin-top:20px;
        margin-left: -36px;
    }

    #title { 
        margin-top: 70px; margin-left: 130px; font-family: 'Dongle', sans-serif; font-size: 50px;
    }

    form{
        padding:10px;
    }

    .input-box{
        position:relative;
        margin:10px 0;
    }

    .input-box > input{
        background:transparent;
        border:none;
        border-bottom: solid 1px #ccc;
        padding:20px 0px 5px 0px;
        font-size:14pt;
        width:350px;
    }

    input::placeholder{
        color:transparent;
    }

    input:placeholder-shown + label{
        color:#aaa;
        font-size:14pt;
        top:15px;

    }

    input:focus + label, label{
        color:#aaa;
        font-size:10pt;
        pointer-events: none;
        position: absolute;
        left:-30px;
        top:0px;
        transition: all 0.2s ease ;
        -webkit-transition: all 0.2s ease;
        -moz-transition: all 0.2s ease;
        -o-transition: all 0.2s ease;
    }

    input:focus, input:not(:placeholder-shown){
        border-bottom: solid 1px #aaa;
        outline:none;
    }

    #forgot{
        text-align: right;
        font-size:12pt;
        color:rgb(164, 164, 164);
        margin:10px 0px;
    }

</style>
</html>
