<?php
    header("Content-Type:text/html; charset=utf-8");

    $name= $_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $now=date("Y-m-d H:i:s");

    $db=mysqli_connect('localhost','hello2026','a1s2d3f4!','hello2026');
    mysqli_query($db, 'set names utf8');
    $sql= "INSERT INTO book166(name, phone, email, date) VALUES('$name', '$phone', '$email', '$now')";
    $result=mysqli_query($db, $sql);

    if($result){
        echo "작성 성공!";
    }else{
        echo "한번더봐봐";
    }
        echo "<p>성함: $name</p>";
        echo "<p>연락처: $phone</p>";
        echo "<p>이메일: $email</p>";
        echo "<p>작성시간: $now</p>";

    mysqli_close($db);

?>