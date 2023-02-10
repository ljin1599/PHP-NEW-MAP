<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>안심하길 메인화면</title>
	<link rel="stylesheet" type="text/css" href="./css/map.css">
</head>
<style>
#mapwrap{position:relative;overflow:hidden;}
   .category, .category *{margin:0;padding:0;color:#000;}   
   .category {position:absolute;overflow:hidden;top:15px;left:5px;width:150px;height:50px;z-index:10;border:1px solid black;font-family:'Malgun Gothic','맑은 고딕',sans-serif;font-size:12px;text-align:center;background-color:#fff;}
   .category .menu_selected {background:#FF5F4A;color:#fff;border-left:1px solid #915B2F;border-right:1px solid #915B2F;margin:0 -1px;} 
   .category li{list-style:none;float:left;width:50px;height:45px;padding-top:5px;cursor:pointer;} 
   .category .ico_comm {display:block;margin:0 auto 2px;width:30px;height:28px;background:url('./img/mapsp.png') no-repeat;} 
   .category .ico_coffee {background-position: -8px -9px;}  
   .category .ico_store {background-position: -10px -63px;}
   .category .ico_carpark {background-position: -10px -112px;}
</style>


<script>
getLocation() {
        let lat, long;
        if (navigator.geolocation) { // GPS를 지원하면
            navigator.geolocation.getCurrentPosition(function(position) {
                lat = position.coords.latitude;
                long = position.coords.longitude;
                alert('위도 : ' + lat + ' 경도 : ' + long);
            }, function(error) {
                console.error(error);
            }, {
                enableHighAccuracy: false,
                maximumAge: 0,
                timeout: Infinity
            });
        } else {
            alert('GPS를 지원하지 않습니다');
            return;
        }
    }

</script>
<body>
	<header>
    	<?php include "header.php";?>
    </header>

	<div id="mapwrap"> 
    <!-- 지도가 표시될 div -->
    <div id="map" style="width:360px;height:450px;"></div>
    <!-- 지도 위에 표시될 마커 카테고리 -->
    <div class="category">
        <ul>
            <li id="coffeeMenu" onclick="changeMarker('coffee')">
                <span class="ico_comm ico_coffee"></span>
                cctv
            </li>
            <li id="storeMenu" onclick="changeMarker('store')">
                <span class="ico_comm ico_store"></span>
                경찰서
            </li>
            <li id="carparkMenu" onclick="changeMarker('carpark')">
                <span class="ico_comm ico_carpark"></span>
                아동안전
            </li>
        </ul>
    </div>
</div>


<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=c233c82a89277baac2a4594a6151eefc"></script>
	<script>
		var container = document.getElementById('map');
		var options = {
			center: new kakao.maps.LatLng(35.84818067594021, 128.58212615619715),
			level: 5
			
		};

		var map = new kakao.maps.Map(container, options);

// 1   

// 선을 구성하는 좌표 배열입니다. 이 좌표들을 이어서 선을 표시합니다
var linePath = [
    new kakao.maps.LatLng(35.8463817798648, 128.59074018978217),
    new kakao.maps.LatLng(35.846374526136096, 128.5912879186968),
    new kakao.maps.LatLng(35.84592370555185, 128.59130658092218),
    new kakao.maps.LatLng(35.84572876387984, 128.59479466003913),
    new kakao.maps.LatLng(35.84663336729935, 128.59487365030913),
    new kakao.maps.LatLng(35.84686515472245, 128.59132539291767)
];

// 지도에 표시할 선을 생성합니다
var polyline = new kakao.maps.Polyline({
    path: linePath, // 선을 구성하는 좌표배열 입니다
    strokeWeight: 5,
    strokeColor: '#FFAE00',
    strokeOpacity: 0.7, 
    strokeStyle: 'solid'
});

// 지도에 선을 표시합니다 
polyline.setMap(map)


var linePath1 = [
    new kakao.maps.LatLng(35.84308221243757, 128.59797343155728),
    new kakao.maps.LatLng(35.843317270202995, 128.5945250178252),
    new kakao.maps.LatLng(35.84384386040896, 128.59456876369742),
    new kakao.maps.LatLng(35.8436998696613, 128.59692885140592),
    new kakao.maps.LatLng(35.843164198101476, 128.5968904418234)
];
var linePath2 = [
    new kakao.maps.LatLng(35.85632627074374, 128.58423626565116),
    new kakao.maps.LatLng(35.855554314273796, 128.58434820241175),
    new kakao.maps.LatLng(35.855707355795865, 128.58606701533935),
    new kakao.maps.LatLng(35.85535076606408, 128.5861152581916),
    new kakao.maps.LatLng(35.855197870991816, 128.58438538643307),
    new kakao.maps.LatLng(35.854791147809216, 128.58447691623425),
    new kakao.maps.LatLng(35.85494469935553, 128.58615698023817),
    new kakao.maps.LatLng(35.85455178094022, 128.58622663715897),
    new kakao.maps.LatLng(35.85439844910943, 128.5845299818112),
    new kakao.maps.LatLng(35.853527830082555, 128.58460674251606)
];
var linePath3 = [
    new kakao.maps.LatLng(35.85639280851864, 128.59045314640818),
    new kakao.maps.LatLng(35.85620627145019, 128.58786468475927),
    new kakao.maps.LatLng(35.85538230596176, 128.5878205768934),
    new kakao.maps.LatLng(35.855361158226714, 128.5894196851374),
    new kakao.maps.LatLng(35.85414936392296, 128.58940102733447),
    new kakao.maps.LatLng(35.854165640569946, 128.5878295193977),
    new kakao.maps.LatLng(35.85333215373205, 128.58782396591937)
];
    
var linePath4 = [
    new kakao.maps.LatLng(35.83899688972056, 128.57397538513288),
    new kakao.maps.LatLng(35.83857360367444, 128.57395595453275),
    new kakao.maps.LatLng(35.83855202504254, 128.57216265793872),
    new kakao.maps.LatLng(35.83763744861355, 128.5721556755903),
    new kakao.maps.LatLng(35.837654523285934, 128.5739488625849)
];
    
var linePath5 = [
    new kakao.maps.LatLng(35.844051795108655, 128.57985269811567),
    new kakao.maps.LatLng(35.84407869594068, 128.57780567780875),
    new kakao.maps.LatLng(35.843563279795, 128.57656694256903),
    new kakao.maps.LatLng(35.84292733597986, 128.57661522688335),
    new kakao.maps.LatLng(35.84290748915548, 128.5798410677421)
];
var linePath6 = [
    new kakao.maps.LatLng(35.85109792153301, 128.57373859717197),
    new kakao.maps.LatLng(35.850533119714605, 128.57420339116527),
    new kakao.maps.LatLng(35.85060856032993, 128.57532282881317),
    new kakao.maps.LatLng(35.850560330941555, 128.5762516509566),
    new kakao.maps.LatLng(35.84982899781998, 128.57704518630214),
    new kakao.maps.LatLng(35.8495956266599, 128.57628789753153),
    new kakao.maps.LatLng(35.8487083743366, 128.5766023895314),
    new kakao.maps.LatLng(35.848599241050536, 128.57599146176838),
    new kakao.maps.LatLng(35.84994101280437, 128.57537603428366),
    new kakao.maps.LatLng(35.85001220155008, 128.57475759602858),
    new kakao.maps.LatLng(35.849678265263094, 128.57410901054493)
];
var linePath7 = [
    new kakao.maps.LatLng(35.84182079214667, 128.56094379116496),
    new kakao.maps.LatLng(35.84149938341808, 128.56105923537592),
    new kakao.maps.LatLng(35.84135600227024, 128.56134418061905),
    new kakao.maps.LatLng(35.84088135668199, 128.56250249204695),
    new kakao.maps.LatLng(35.841454041125026, 128.56385289592623),
    new kakao.maps.LatLng(35.84052281865395, 128.5644322523456),
    new kakao.maps.LatLng(35.84059164896848, 128.56606604521903),
    new kakao.maps.LatLng(35.84007282663755, 128.56611671530823),
    new kakao.maps.LatLng(35.83998154575527, 128.56447695847928),
    new kakao.maps.LatLng(35.83969201018993, 128.56318193455851),
    new kakao.maps.LatLng(35.84027742279559, 128.5628614019483)
];
var linePath8 = [
    new kakao.maps.LatLng(35.837668663955355, 128.5586932980021),
    new kakao.maps.LatLng(35.83715691473657, 128.55889355701268),
    new kakao.maps.LatLng(35.837569731501034, 128.56076088869594),
    new kakao.maps.LatLng(35.83706720400375, 128.5609447144459),
    new kakao.maps.LatLng(35.8366139200073, 128.55907106838131),
    new kakao.maps.LatLng(35.83606584608427, 128.55929274516672),
    new kakao.maps.LatLng(35.83651083649973, 128.5611108827098),
    new kakao.maps.LatLng(35.837049041806765, 128.56095542549383),
    new kakao.maps.LatLng(35.83722467329562, 128.56165608372274),
    new kakao.maps.LatLng(35.83821216652399, 128.56090628017694)
];

    
// 지도에 표시할 선을 생성합니다
    var polyline1 = new kakao.maps.Polyline({
    path: linePath1, // 선을 구성하는 좌표배열 입니다
    strokeWeight: 5, // 선의 두께 입니다
    strokeColor: '#FFAE00', // 선의 색깔입니다
    strokeOpacity: 0.7, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
    strokeStyle: 'solid' // 선의 스타일입니다
});
    var polyline2 = new kakao.maps.Polyline({
    path: linePath2, // 선을 구성하는 좌표배열 입니다
    strokeWeight: 5, // 선의 두께 입니다
    strokeColor: '#FFAE00', // 선의 색깔입니다
    strokeOpacity: 0.7, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
    strokeStyle: 'solid' // 선의 스타일입니다
});
    var polyline3 = new kakao.maps.Polyline({
    path: linePath3, // 선을 구성하는 좌표배열 입니다
    strokeWeight: 5, // 선의 두께 입니다
    strokeColor: '#FFAE00', // 선의 색깔입니다
    strokeOpacity: 0.7, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
    strokeStyle: 'solid' // 선의 스타일입니다
});
    var polyline4 = new kakao.maps.Polyline({
    path: linePath4, // 선을 구성하는 좌표배열 입니다
    strokeWeight: 5, // 선의 두께 입니다
    strokeColor: '#FFAE00', // 선의 색깔입니다
    strokeOpacity: 0.7, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
    strokeStyle: 'solid' // 선의 스타일입니다
});
    var polyline5 = new kakao.maps.Polyline({
    path: linePath5, // 선을 구성하는 좌표배열 입니다
    strokeWeight: 5, // 선의 두께 입니다
    strokeColor: '#FFAE00', // 선의 색깔입니다
    strokeOpacity: 0.7, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
    strokeStyle: 'solid' // 선의 스타일입니다
});
    var polyline6 = new kakao.maps.Polyline({
    path: linePath6, // 선을 구성하는 좌표배열 입니다
    strokeWeight: 5, // 선의 두께 입니다
    strokeColor: '#FFAE00', // 선의 색깔입니다
    strokeOpacity: 0.7, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
    strokeStyle: 'solid' // 선의 스타일입니다
});
    var polyline7 = new kakao.maps.Polyline({
    path: linePath7, // 선을 구성하는 좌표배열 입니다
    strokeWeight: 5, // 선의 두께 입니다
    strokeColor: '#FFAE00', // 선의 색깔입니다
    strokeOpacity: 0.7, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
    strokeStyle: 'solid' // 선의 스타일입니다
});
    var polyline8 = new kakao.maps.Polyline({
    path: linePath8, // 선을 구성하는 좌표배열 입니다
    strokeWeight: 5, // 선의 두께 입니다
    strokeColor: '#FFAE00', // 선의 색깔입니다
    strokeOpacity: 0.7, // 선의 불투명도 입니다 1에서 0 사이의 값이며 0에 가까울수록 투명합니다
    strokeStyle: 'solid' // 선의 스타일입니다
});

// 지도에 선을 표시합니다 
    polyline1.setMap(map);  
    polyline2.setMap(map);  
    polyline3.setMap(map);  
    polyline4.setMap(map);  
    polyline5.setMap(map);  
    polyline6.setMap(map);  
    polyline7.setMap(map);  
    polyline8.setMap(map);  



		
	 // 씨씨티비 마커가 표시될 좌표 배열입니다
var coffeePositions = [
    
    new kakao.maps.LatLng(35.83748797, 128.5580408),
    new kakao.maps.LatLng(35.83618304, 128.5614741),
    new kakao.maps.LatLng(35.84072583, 128.5803798),
    new kakao.maps.LatLng(35.856197, 128.582639),
    new kakao.maps.LatLng(35.8347, 128.59703),
    new kakao.maps.LatLng(35.857159, 128.579867),

    new kakao.maps.LatLng(35.84505, 128.590851),
    new kakao.maps.LatLng(35.8537414, 128.5931849),
    new kakao.maps.LatLng(35.85209843, 128.5900505),
    new kakao.maps.LatLng(35.8485787, 128.5909765),
    new kakao.maps.LatLng(35.84974774, 128.5896899),
    new kakao.maps.LatLng(35.849553, 128.5889688),

    new kakao.maps.LatLng(35.85150714, 128.5911532),
    new kakao.maps.LatLng(35.83557533, 128.5661187),
    new kakao.maps.LatLng(35.8479882, 128.5955553),
    new kakao.maps.LatLng(35.84135687, 128.5784915),
    new kakao.maps.LatLng(35.84394597, 128.584809),
    new kakao.maps.LatLng(35.84757728, 128.5966261),  
   
    new kakao.maps.LatLng(35.85142599, 128.5838014),
    new kakao.maps.LatLng(35.85141554, 128.5766495),
    new kakao.maps.LatLng(35.853403, 128.5761142),
    new kakao.maps.LatLng(35.84145325, 128.5809276),
    new kakao.maps.LatLng(35.83476338, 128.5605232),
    new kakao.maps.LatLng(35.84519704, 128.5876524), 

    new kakao.maps.LatLng(35.85405892, 128.5872751),
    new kakao.maps.LatLng(35.8388701, 128.5688874),
    new kakao.maps.LatLng(35.84456865, 128.5908027),
    new kakao.maps.LatLng(35.84370336, 128.5908074),
    new kakao.maps.LatLng(35.84992649, 128.5918279),
    new kakao.maps.LatLng(35.842278, 128.584594), 

    new kakao.maps.LatLng(35.84221365, 128.5844563),
    new kakao.maps.LatLng(35.842598, 128.583129),
    new kakao.maps.LatLng(35.83078021, 128.5603734),
    new kakao.maps.LatLng(35.83184101, 128.5626406),
    new kakao.maps.LatLng(35.85036325, 128.6036549),
    new kakao.maps.LatLng(35.84889837, 128.6028024),
    
    new kakao.maps.LatLng(35.85537752, 128.5873307),
    new kakao.maps.LatLng(35.85519197, 128.5748116),
    new kakao.maps.LatLng(35.84536605, 128.5807126),
    new kakao.maps.LatLng(35.85404773, 128.5895557),
    new kakao.maps.LatLng(35.85273992, 128.5933877),
    new kakao.maps.LatLng(35.85118239, 128.5875417),

    new kakao.maps.LatLng(35.85255707, 128.5760269),
    new kakao.maps.LatLng(35.8420053, 128.5833427),
    new kakao.maps.LatLng(35.83681768, 128.5645226),
    new kakao.maps.LatLng(35.83853989, 128.5643798),
    new kakao.maps.LatLng(35.84276827, 128.582974),
    new kakao.maps.LatLng(35.85512088, 128.5864635),

    new kakao.maps.LatLng(35.84899439, 128.5913043),
    new kakao.maps.LatLng(35.84856007, 128.5910981),
    new kakao.maps.LatLng(35.84718928, 128.5930806),
    new kakao.maps.LatLng(35.85639511, 128.5887538),
    new kakao.maps.LatLng(35.85434818, 128.5852622),
    new kakao.maps.LatLng(35.85544573, 128.5911936),

    new kakao.maps.LatLng(35.85216214, 128.5844047),
    new kakao.maps.LatLng(35.845916, 128.593549),
    new kakao.maps.LatLng(35.85492248, 128.5931162),
    new kakao.maps.LatLng(35.84328394, 128.5899519),
    new kakao.maps.LatLng(35.8508517, 128.5929326),
    new kakao.maps.LatLng(35.84910615, 128.591855),

    new kakao.maps.LatLng(35.849851, 128.591454),
    new kakao.maps.LatLng(35.85601922, 128.5861646),
    new kakao.maps.LatLng(35.84250768, 128.5896557),
    new kakao.maps.LatLng(35.83702053, 128.5679035),
    new kakao.maps.LatLng(35.85008727, 128.591286),
    new kakao.maps.LatLng(35.84666814, 128.588715),

    new kakao.maps.LatLng(35.84656325, 128.589114),
    new kakao.maps.LatLng(35.84956225, 128.592578),
    new kakao.maps.LatLng(35.8484462, 128.5916157),
    new kakao.maps.LatLng(35.84912907, 128.590831),
    new kakao.maps.LatLng(35.85035347, 128.5929714),
    new kakao.maps.LatLng(35.85424305, 128.5846414),

    new kakao.maps.LatLng(35.85237203, 128.5838748),
    new kakao.maps.LatLng(35.84226496, 128.5994567),
    new kakao.maps.LatLng(35.84777939, 128.5922215),
    new kakao.maps.LatLng(35.84899506, 128.5869498),
    new kakao.maps.LatLng(35.84890879, 128.5916653),
    new kakao.maps.LatLng(35.84724513, 128.5913828),
];

// 경찰서 마커가 표시될 좌표 배열입니다
var storePositions = [ 
    new kakao.maps.LatLng(35.8351461, 128.5642811),
    new kakao.maps.LatLng(35.8429118, 128.5836463),
    new kakao.maps.LatLng(35.8461457, 128.5672789),
    new kakao.maps.LatLng(35.8512737, 128.5791),
    new kakao.maps.LatLng(35.8449469, 128.6002002),
    new kakao.maps.LatLng(35.8357758, 128.5775216),             
];
// 아동안전보호구역 마커가 표시될 좌표 배열입니다
var carparkPositions = [ 
    new kakao.maps.LatLng(35.85355805,   128.5864853),
    new kakao.maps.LatLng(35.8304316,   128.561677),
    new kakao.maps.LatLng(35.83464799,   128.6010893),
    new kakao.maps.LatLng(35.85645873,   128.5793986),
    new kakao.maps.LatLng(35.84992534,   128.5912659),
    new kakao.maps.LatLng(35.84023286,   128.5760702),   

    new kakao.maps.LatLng(35.83858034,   128.5948414),
    new kakao.maps.LatLng(35.83497147,   128.5737033),
    new kakao.maps.LatLng(35.83248149,   128.5760583),
    new kakao.maps.LatLng(35.84257212,   128.569401),
    new kakao.maps.LatLng(35.84884861,   128.600145),
    new kakao.maps.LatLng(35.85011603,   128.5769832),

    new kakao.maps.LatLng(35.83199279,   128.5626801),
    new kakao.maps.LatLng(35.85359762,   128.6000087),
    new kakao.maps.LatLng(35.84228388,   128.5824945),
    new kakao.maps.LatLng(35.83750833,   128.5840424),
    new kakao.maps.LatLng(35.84234083,   128.5781777),
    new kakao.maps.LatLng(35.83768718,   128.600747), 
    new kakao.maps.LatLng(35.85594776,   128.575077),
    new kakao.maps.LatLng(35.85321709,   128.5854639),
    new kakao.maps.LatLng(35.85170781,   128.6051265),
    new kakao.maps.LatLng(35.85214855,   128.605307),
    new kakao.maps.LatLng(35.83962775,   128.5996262),
    new kakao.maps.LatLng(35.84435136,   128.5910004), 
];

var markerImageSrc = './img/mapsp.png';  // 마커이미지의 주소입니다. 스프라이트 이미지 입니다
    coffeeMarkers = [], // 커피숍 마커 객체를 가지고 있을 배열입니다
    storeMarkers = [], // 편의점 마커 객체를 가지고 있을 배열입니다
    carparkMarkers = []; // 주차장 마커 객체를 가지고 있을 배열입니다

    
createCoffeeMarkers(); // 커피숍 마커를 생성하고 커피숍 마커 배열에 추가합니다
createStoreMarkers(); // 편의점 마커를 생성하고 편의점 마커 배열에 추가합니다
createCarparkMarkers(); // 주차장 마커를 생성하고 주차장 마커 배열에 추가합니다

changeMarker('coffee'); // 지도에 커피숍 마커가 보이도록 설정합니다    


// 마커이미지의 주소와, 크기, 옵션으로 마커 이미지를 생성하여 리턴하는 함수입니다
function createMarkerImage(src, size, options) {
    var markerImage = new kakao.maps.MarkerImage(src, size, options);
    return markerImage;            
}

// 좌표와 마커이미지를 받아 마커를 생성하여 리턴하는 함수입니다
function createMarker(position, image) {
    var marker = new kakao.maps.Marker({
        position: position,
        image: image
    });
    
    return marker;  
}   
   
// 마커를 생성하고 커피숍 마커 배열에 추가하는 함수입니다
function createCoffeeMarkers() {
    
    for (var i = 0; i < coffeePositions.length; i++) {  
        
        var imageSize = new kakao.maps.Size(22, 26),
            imageOptions = {  
                spriteOrigin: new kakao.maps.Point(7, 0),    
                spriteSize: new kakao.maps.Size(36, 98)  
            };     
        
        // 마커이미지와 마커를 생성합니다
        var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),    
            marker = createMarker(coffeePositions[i], markerImage);  
        
        // 생성된 마커를 마커 배열에 추가합니다
        coffeeMarkers.push(marker);
    }     
}

// 마커들의 지도 표시 여부를 설정하는 함수입니다
function setCoffeeMarkers(map) {        
    for (var i = 0; i < coffeeMarkers.length; i++) {  
        coffeeMarkers[i].setMap(map);
    }        
}

// 편의점 마커를 생성하고 편의점 마커 배열에 추가하는 함수입니다
function createStoreMarkers() {
    for (var i = 0; i < storePositions.length; i++) {
        
        var imageSize = new kakao.maps.Size(22, 26),
            imageOptions = {   
                spriteOrigin: new kakao.maps.Point(10, 36),    
                spriteSize: new kakao.maps.Size(36, 98)  
            };       
     
        // 마커이미지와 마커를 생성합니다
        var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),    
            marker = createMarker(storePositions[i], markerImage);  

        // 생성된 마커를 편의점 마커 배열에 추가합니다
        storeMarkers.push(marker);    
    }        
}

// 편의점 마커들의 지도 표시 여부를 설정하는 함수입니다
function setStoreMarkers(map) {        
    for (var i = 0; i < storeMarkers.length; i++) {  
        storeMarkers[i].setMap(map);
    }        
}

// 주차장 마커를 생성하고 주차장 마커 배열에 추가하는 함수입니다
function createCarparkMarkers() {
    for (var i = 0; i < carparkPositions.length; i++) {
        
        var imageSize = new kakao.maps.Size(22, 26),
            imageOptions = {   
                spriteOrigin: new kakao.maps.Point(10, 72),    
                spriteSize: new kakao.maps.Size(36, 98)  
            };       
     
        // 마커이미지와 마커를 생성합니다
        var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),    
            marker = createMarker(carparkPositions[i], markerImage);  

        // 생성된 마커를 주차장 마커 배열에 추가합니다
        carparkMarkers.push(marker);        
    }                
}

// 주차장 마커들의 지도 표시 여부를 설정하는 함수입니다
function setCarparkMarkers(map) {        
    for (var i = 0; i < carparkMarkers.length; i++) {  
        carparkMarkers[i].setMap(map);
    }        
}

// 카테고리를 클릭했을 때 type에 따라 카테고리의 스타일과 지도에 표시되는 마커를 변경합니다
function changeMarker(type){
    
    var coffeeMenu = document.getElementById('coffeeMenu');
    var storeMenu = document.getElementById('storeMenu');
    var carparkMenu = document.getElementById('carparkMenu');
    
    // 커피숍 카테고리가 클릭됐을 때
    if (type === 'coffee') {
    
        // 커피숍 카테고리를 선택된 스타일로 변경하고
        coffeeMenu.className = 'menu_selected';
        
        // 편의점과 주차장 카테고리는 선택되지 않은 스타일로 바꿉니다
        storeMenu.className = '';
        carparkMenu.className = '';
        
        // 커피숍 마커들만 지도에 표시하도록 설정합니다
        setCoffeeMarkers(map);
        setStoreMarkers(null);
        setCarparkMarkers(null);
        
    } else if (type === 'store') { // 편의점 카테고리가 클릭됐을 때
    
        // 편의점 카테고리를 선택된 스타일로 변경하고
        coffeeMenu.className = '';
        storeMenu.className = 'menu_selected';
        carparkMenu.className = '';
        
        // 편의점 마커들만 지도에 표시하도록 설정합니다
        setCoffeeMarkers(null);
        setStoreMarkers(map);
        setCarparkMarkers(null);
        
    } else if (type === 'carpark') { // 주차장 카테고리가 클릭됐을 때
     
        // 주차장 카테고리를 선택된 스타일로 변경하고
        coffeeMenu.className = '';
        storeMenu.className = '';
        carparkMenu.className = 'menu_selected';
        
        // 주차장 마커들만 지도에 표시하도록 설정합니다
        setCoffeeMarkers(null);
        setStoreMarkers(null);
        setCarparkMarkers(map);  
    }    
} 
   </script>
   
   <div id="search" style="width:50px;height:50px;">
        <a href="#"><img src="./img/a.png" onclick="getCurrentPosBtn()"></a>
    </div>

   <div id="alarm" style="width:40px;height:40px;">
        <a href="#"><img src="./img/b.png" onclick="siren()"></a>
    </div>
   
   <div id="message" style="width:40px;height:40px;">
        <a href="boardtest.php"><img src="./img/c.png"></a>
    </div>
   <script>

   function siren(){
       if(confirm("정말 경찰서에 신고 하시겠습니까?")){
        alert("경찰서에 위치를 전송하였습니다.")
        
         }
   }

   
   </script>
   <script>
function locationLoadSuccess(pos){
    // 현재 위치 받아오기
    var currentPos = new kakao.maps.LatLng(pos.coords.latitude,pos.coords.longitude);

    // 지도 이동(기존 위치와 가깝다면 부드럽게 이동)
    map.panTo(currentPos);

    // 마커 생성
    var marker = new kakao.maps.Marker({
        position: currentPos
    });

    // 기존에 마커가 있다면 제거
    marker.setMap(null);
    marker.setMap(map);
	
};

function locationLoadError(pos){
    alert('위치 정보를 가져오는데 실패했습니다.');
};

// 위치 가져오기 버튼 클릭시
function getCurrentPosBtn(){
    navigator.geolocation.getCurrentPosition(locationLoadSuccess,locationLoadError);
    alert('위치 정보를 가져오는데 성공했습니다.');
};
</script>
</body>
</html>	