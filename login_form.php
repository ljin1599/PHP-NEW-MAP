<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인화면</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle&display=swap" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Dongle&display=swap');
</style>

<script type="text/javascript" src="./js/login.js"></script>

<body> 
	<header>
		<h2 id ="title"> 안심하길 </h2>
    </header>

	<form name="login_form" action="login.php" method="POST">
        <div class="input-box">
            <input id="id" type="text" name="id" placeholder="아이디">
            <label for="id">아이디</label>
        </div>
        <div class="input-box">
            <input id="pass" type="password" name="pass" placeholder="비밀번호">
            <label for="pass">비밀번호</label>
        </div>
        <a href="#"><input type="button" onclick="check_input()" value="로그인"></a>
        <a href="member_form.php"><input type="button" value="회원가입"></a>
    </form>
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
            color:#aaa;
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

