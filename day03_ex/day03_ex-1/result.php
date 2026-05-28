<?php
    header('Content-Type:text/html; charset=utf-8');

    $db=mysqli_connect('localhost','hello2026','a1s2d3f4!','hello2026');
    mysqli_query($db, 'set names utf8');
    $sql="SELECT * FROM book166";
    $result_table=mysqli_query($db, $sql);;
    
    if($result_table){

        $result_num=mysqli_num_rows($result_table);
        for($i=0; $i<$result_num; $i++){
            $row=mysqli_fetch_array($result_table, MYSQLI_ASSOC);
            $name=$row['name'];
            $phone=$row['phone'];
            $email=$row['email'];
            $date=$row['date'];

            echo "<h1>".($i+1)."번</h1>";
            echo "<h2>$name</h2>";
            echo "<h4>$phone</h4>";
            echo "<h4>$email</h4>";
            echo "<h5>$date</h5>";

            
        }
    }else{
        echo "문제 확인하세요.";
    }


    mysqli_close($db);


?>