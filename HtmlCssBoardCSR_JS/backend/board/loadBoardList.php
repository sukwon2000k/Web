<?php
    //응답을 json 형식으로 받겠다..
    header('Content-Type:application/json; charset=utf-8');

    //db에서 데이터를 가져오기
    $db= mysqli_connect('localhost','hello2026', 'a1s2d3f4!', 'hello2026'); //db주소, 접속아이디, 접속비번, db명
    mysqli_query($db, 'set names utf8');

    //web_board 테이블의 모든 데이터들을 번호기준 내림처 순으로 불러오는 SQL쿼리문 작성
    $sql="SELECT * FROM web_board ORDER BY no DESC";
    $result= mysqli_query($db,$sql);
    // 요청한 결과표($result)로 부터 게시글 데이터들을 한줄씩 가져와서 $board_list라는 이름의 배열추가
    $board_list=[]; //빈배열
    //게시글의 수 만큼 반복하여 한줄씩 데이터를 가져오기
    $row_num=mysqli_num_rows($result);
    for($i=0; $i<$row_num; $i++){
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC); //연관배열로 한줄 뽑기
        $board_list[$i]=$row;

    }
    // mysqlq과 연결 종료
    mysqli_close($db);

    // $board_list의 요소 개수
    $board_size= count($board_list);

    //사용자에게 응답한 데이터들을 연관배열로 준비..
    $response=[];
    $response['status']=200; //응답 성공코드
    $response['total']=$board_size; // 총 게시글 수
    $response['data']=$board_list;// 실제대이터를 배열

    //위 연관배열을 json형식으로 변환하여 사용자에게 응답
    echo json_encode($response);

?>