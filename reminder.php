<html>
<head>
<title>REminder</title>
</head>
<body>
<?php
    $link=mysqli_connect("localhost",'root',"","menon") or die("connection error try later");
	session_start();
    $q1="select ifnull(max(id),0)from legal_compliance";
    $res=mysqli_query($link,$q1);
    $records = mysqli_query($link,"select due_date from legal_compliance where id = 30"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
    
    $exp_date=$data['due_date'];
}
    $today_date=date('y-m-d');
    $exp=strtotime($exp_date);
    $today=strtotime($today_date);
    if($today>$exp){
        $diff1=$today-$exp;
        $diff=abs(floor($diff1/(60*60*24)));
        $to_email = "pennu71299@gmail.com";
        $subject = "Reminder";
        $body = "Hello Sanjeev Koli, you have a reminder for the Return submission on $exp_date. only $diff are remaining. Please submit that form";
        $headers = "From: internship669@gmail.com";
        if (mail($to_email, $subject, $body, $headers)) {
                echo "Email successfully sent to $to_email...";
        } else {
                echo "Email sending failed...$to_email...";
        }   
    }
    else{
         $diff1=$today-$exp;
        $diff=abs(floor($diff1/(60*60*24)));
        $to_email = "pennu71299@gmail.com";
        $subject = "Reminder";
        $body = "Hello Sanjeev Koli, you have a reminder for the Return submission on $exp_date. only $diff are remaining. Please submit that form";
        $headers = "From: internship669@gmail.com";
        if (mail($to_email, $subject, $body, $headers)) {
                echo "Email successfully sent to $to_email...";
        } else {
                echo "Email sending failed...$to_email...";
    }
    }
?>
</body>
</html>
