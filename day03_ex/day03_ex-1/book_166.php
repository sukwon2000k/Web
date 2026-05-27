<?php
    header("Content-Type:text/html; charset=utf-8");

    $name= $_GET['name'];
    $phone=$_GET['phone'];
    $email=$_GET['email'];

    echo "<p>성함: $name</p>";
    echo "<p>연락처: $phone</p>";
    echo "<p>이메일: $email</p>";






?>