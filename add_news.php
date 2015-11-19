<?php require 'database.php';
        if(isset($_GET['heading'])&&isset($_GET['content'])&&isset($_GET['ack'])){
            date_default_timezone_set('Asia/Calcutta');
            $date = date("Y-m-d");
            $time = date('H:i:s');
            $qry="insert into news(category_id,nat_int,news_heading,news_content,date,time,ack) values"
                    . "(".$_GET['sub_cat'].",".$_GET['main_cat'].",'".$_GET['heading']."','".$_GET['content']."','".$date."','".$time."','".$_GET['ack']."')";
         $qry_res=mysql_query($qry);
            if($qry_res){
             echo 'News Added Scucessfully.!';
         }else{
          echo "error ".mysql_errno($qry_res)." ".mysql_error($qry_res)."!";
            }
         
         }
         ?>