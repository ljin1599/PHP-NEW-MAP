function check_siren(){
    window.open("sirenCheck.html", "사이렌 신고 1차 확인",
    "width=500,height=150,left=100,top=100")
}
function check_siren2(){
    window.location.href="sirenCheck2.html"
}
function siren(){
    if(confirm("정말 112에 신고 하시겠습니까?")){
        alert("112에 위치를 전송하였습니다.")
        window.close();
    }else{
        window.close();
    }
}