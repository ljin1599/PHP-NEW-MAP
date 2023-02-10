<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>안심하길</title>
<!-- <link rel="stylesheet" type="text/css" href="./css/common.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="./css/member.css"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dongle&display=swap" rel="stylesheet">

<style>
@import url('https://fonts.googleapis.com/css2?family=Dongle&display=swap');
</style>
<script type="text/javascript" src="./js/login.js"></script>
<header>
	<h2 id="title"> 회원가입 </h2>
</header>
<script>
   function check_input() {
      if (!document.member_form.id.value) {
          alert("아이디를 입력하세요!");    
          document.member_form.id.focus();
          return; }
      if (!document.member_form.pass.value) {
          alert("비밀번호를 입력하세요!");    
          document.member_form.pass.focus();
          return; }
      if (!document.member_form.name.value) {
          alert("이름을 입력하세요!");    
          document.member_form.name.focus();
          return; }
      if (!document.member_form.age.value) {
          alert("나이를 입력하세요!");    
          document.member_form.age.focus();
          return; }
      if (!document.member_form.phonenum.value) {
          alert("전화번호를 입력하세요!");    
          document.member_form.phonenum.focus();
          return; }
        document.member_form.submit();
   }
   function reset_form() {
      document.member_form.id.value = "";  
      document.member_form.pass.value = "";
      document.member_form.name.value = "";
      document.member_form.age.value = "";
      document.member_form.phonenum.value = "";
      document.member_form.id.focus();
      return;
   }
   function check_id() {
     window.open("member_check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
   }
</script>

</head>
<body> 
	<section>
        <div id="main_content">
      		<div id="join_box">
          	<form  name="member_form" method="post" action="member_insert.php">
    		    	<div class="input-box">
				        <input id="id" type="text" name="id" placeholder="아이디">
						<label for="id">아이디</label>				                         
			       	</div>
			       	<div class="clear"></div>
			       	<div class="input-box">
					   <input id="pass" type="password" name="pass" placeholder="비밀번호">
					   <label for="id">비밀번호</label>                 
			       	</div>
			       	<div class="clear"></div>
   					<div class="input-box">
					   <input id="name" type="text" name="name" placeholder="이름">
					   <label for="id">이름</label>                 
			       	</div>
			       	<div class="clear"></div>
					<div class="input-box">
					   <input id="age" type="text" name="age" placeholder="나이">
					   <label for="id">나이</label>                 
			       	</div>
			       	<div class="clear"></div>
   					<div class="input-box">
					   <input id="phonenum" type="text" name="phonenum" placeholder="전화번호">
					   <label for="id">전화번호</label>                 
			       	</div>
			       	<div class="clear"></div>
   					<a href="#"><input type="button" onclick="check_input()" value="가입하기"></a>
					<a href="login_form.php"><input type="button" value="취소하기"></a>
           	</form>
        	</div> 
        </div>
	</section> 
	<style>
			#title { margin-top: 30px; font-family: 'Dongle', sans-serif; font-size: 50px;}
		    header{
                display:flex;
                justify-content: center;
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
                width:100%;
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
                color:#8aa1a1;
                font-size:10pt;
                pointer-events: none;
                position: absolute;
                left:0px;
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

            input[type=button]{
                background-color: #FFB432;
                border : none;
                color:white;
                border-radius: 5px;
                width:100%;
                height:35px;
                font-size: 14pt;
                margin-top:10px;
            }
			
            #forgot{
                text-align: right;
                font-size:12pt;
                color:rgb(164, 164, 164);
                margin:10px 0px;
            }
	</style>
</body>
</html>

