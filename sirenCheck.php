<!DOCTYPE html>
<html>
<head>
<body>
    <h3>신고 1차 확인</h3>
		<hr>
		<form action="sirenCheck.html" method="post">
            <tr>
			    <td><input type="text" value="112에 신고가 갑니다."></td>
            </tr>
            <tr>
                <td> <input type="button" value="예" onclick="siren()"></td>
            </tr>
            <tr>
                <td> <input type="button" value="아니요" onclick="window.close()"></td>
            </tr>
		</form>
		
		</hr>

<script>
function siren(){
    if(confirm("정말 112에 신고 하시겠습니까?")){
        alert("112에 위치를 전송하였습니다.")
        window.close();
    }else{
        window.close();
    }
}
</script>
</body>
</head>
</html>