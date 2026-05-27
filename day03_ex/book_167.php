<?php
    header("Content-Type:text/html; charset=utf-8");
    $user_id=$_GET['name'];
    $user_phone=$_GET['phone'];
    $web=$_GET['지원분야'];
    $tta=$_GET['tta'];
    $tta= nl2br ($tta);

    echo "<p>이름: $user_id</p>";
    echo "<p>연락처: $user_phone</p>";
    echo "<p>지원 분야: $web</p>";
    echo "<p>지원 동기 <div style='border:1px solid black; width:500px;'>$tta</div></p>";







?>