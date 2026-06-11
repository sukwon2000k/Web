//지도를 보여줄 div 요소 찾기
var container=document.getElementById('map');

var lat;
var lng;
var map;

navigator.geolocation.getCurrentPosition(function(position){

    lat = position.coords.latitude;
    lng = position.coords.longitude;

    var options = {
        center: new kakao.maps.LatLng(lat, lng),
        level: 3
    };

    map = new kakao.maps.Map(container, options);
    // 지도를 클릭했을때 클릭한 위치에 마커를 추가하도록 지도에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(map, 'click', function(mouseEvent) {        
    // 클릭한 위치에 마커를 표시합니다 
    addMarker(mouseEvent.latLng);             
});
// 마커 하나를 지도위에 표시합니다 
addMarker(new kakao.maps.LatLng(lat , lng));
});
//-----------------------------------------
var imageSrc = 'https://hello2026.dothome.co.kr/image/bono.jpg', // 마커이미지의 주소입니다    
    imageSize = new kakao.maps.Size(32, 35), // 마커이미지의 크기입니다
    imageOption = {offset: new kakao.maps.Point(16, 35)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.
      
// 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption)
    



// 지도에 표시된 마커 객체를 가지고 있을 배열입니다
var markers = [];



// 마커를 생성하고 지도위에 표시하는 함수입니다
function addMarker(markerPosition) {
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        position: markerPosition,
        image: markerImage // 마커이미지 설정 
    });

    // 마커가 지도 위에 표시되도록 설정합니다
    marker.setMap(map);
    
    // 생성된 마커를 배열에 추가합니다
    markers.push(marker);
}

// 배열에 추가된 마커들을 지도에 표시하거나 삭제하는 함수입니다
function setMarkers(map) {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }            
}

// "마커 보이기" 버튼을 클릭하면 호출되어 배열에 추가된 마커를 지도에 표시하는 함수입니다
function showMarkers() {
    setMarkers(map)    
}

// "마커 감추기" 버튼을 클릭하면 호출되어 배열에 추가된 마커를 지도에서 삭제하는 함수입니다
function hideMarkers() {
    setMarkers(null);    
}

//"마커 초기화" 버튼을 클릭하면 호출되어 배열을 초기화함.
function removeMarkers() {
    for(let i=0; i<markers.length; i++){
        markers[i].setMap(null);
    }

    markers = [];
}










// // 마커를 생성합니다
// var marker = new kakao.maps.Marker({
//     position: markerPosition, 
//     image: markerImage // 마커이미지 설정 
// });
// // 마커가 지도 위에 표시되도록 설정합니다
// marker.setMap(map);  











// //내 위치에 마커 표시하기
// // 마커가 표시될 위치입니다 
// var markerPosition  = new kakao.maps.LatLng(37.48659493110084 , 126.92926104080061); 

// // 마커를 생성합니다
// var marker = new kakao.maps.Marker({
//     position: markerPosition
// });

// // 마커가 지도 위에 표시되도록 설정합니다
// marker.setMap(map);

// // 아래 코드는 지도 위의 마커를 제거하는 코드입니다
// // marker.setMap(null);    