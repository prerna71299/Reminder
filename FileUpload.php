<html>
<head>
    <title>return Add</title>
 </head>
    <body>
       
<?php
$link=mysqli_connect("localhost",'root',"","menon") or die("connection error try later");
$q1="select ifnull(max(id),0)from legal_compliance";
$res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
        if()
        ?>
    </body>
</html>