<?php

    header("Content-Type:text/html; charset=utf-8");

    $db=mysqli_connect('localhost','hello2026','a1s2d3f4!','hello2026');
    mysqli_query($db, 'set names utf8');
    $sql="SELECT * FROM book167 ORDER BY date DESC";
    $result_table= mysqli_query($db, $sql);
    $num=mysqli_num_rows($result_table);
    if($result_table){
        
        
        for($i=0; $i<$num; $i++){
            $row=mysqli_fetch_array($result_table, MYSQLI_ASSOC);
            $name=$row['name'];
            $phone=$row['phone'];
            $지원분야=$row['지원분야'];
            $tta=$row['tta'];
            $date=$row['date'];
            $tta=nl2br($tta);

            echo "<h2>". ($i+1) . "번</h2>";
            echo "<h3>$name</h5>";
            echo "<h5>$phone</h5>";
            echo "<h5>$지원분야</h5>";
            echo "<h5>$tta</h5>";
            echo "<h5>$date</h5>";
        }

    }









?>