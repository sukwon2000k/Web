<?php
    header("Content-Type:text/html; charset=utf-8");
    $db=mysqli_connect('localhost','hello2026','a1s2d3f4!','hello2026');
    mysqli_query($db, 'set names utf8');
    $user_id=$_POST['name'];
    $user_phone=$_POST['phone'];
    $web=$_POST['지원분야'];
    $tta=$_POST['tta'];
    $now=date("Y-m-d H:i:s");
    $tta= nl2br ($tta);

    $sql="INSERT INTO book167(name, phone, 지원분야, tta, date) VALUES('$user_id','$user_phone','$web','$tta','$now')";
    $result=mysqli_query($db, $sql);
    if($result){
        echo "입력이 완료되었습니다.";
        echo "<p>이름: $user_id</p>";
        echo "<p>연락처: $user_phone</p>";
        echo "<p>지원 분야: $web</p>";
        echo "<p>지원 동기 <div style='border:1px solid black; width:500px;'>$tta</div></p>";
    }else{
        echo "수정해!!!";
    }

    mysqli_close($db);




?>