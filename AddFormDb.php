<html>
<head>
</head>
<body>
    <?php
$link=mysqli_connect("localhost",'root',"","menon") or die("connection error try later");
    session_start();
        $token_no=$_POST['input_39'];
        $first_name=$_POST['first_44'];
        $last_name=$_POST['last_44'];
        $dept=$_POST['input_21'];
        $date=$_POST['input_18_pick'];
        $total=$_POST['totalAmount'];
        $first_part=$_POST['input_29_0_0'];
        $first_quant=$_POST['input_29_0_1'];
        $first_price=$_POST['input_29_0_2'];
        /* $sec_part=$_POST['input_29_1_0'];
        $sec_quant=$_POST['input_29_1_1'];
        $sec_price=$_POST['input_29_1_2'];
         $third_part=$_POST['input_29_2_0'];
        $third_quant=$_POST['input_29_2_1'];
        $third_price=$_POST['input_29_2_2'];
         $fourth_part=$_POST['input_29_3_0'];
        $fourth_quant=$_POST['input_29_3_1'];
        $fourth_price=$_POST['input_29_3_2'];
         $fifth_part=$_POST['input_29_4_0'];
        $fifth_quant=$_POST['input_29_4_1'];
        $fifth_price=$_POST['input_29_4_2'];
         $six_part=$_POST['input_29_5_0'];
        $six_quant=$_POST['input_29_5_1'];
        $six_price=$_POST['input_29_5_2'];
         $seven_part=$_POST['input_29_6_0'];
        $seven_quant=$_POST['input_29_6_1'];
        $seven_price=$_POST['input_29_6_2'];
         $eight_part=$_POST['input_29_7_0'];
        $eight_quant=$_POST['input_29_7_1'];
        $eight_price=$_POST['input_29_7_2'];
         $nine_part=$_POST['input_29_8_0'];
        $nine_quant=$_POST['input_29_8_1'];
        $nine_price=$_POST['input_29_8_2'];
         $ten_part=$_POST['input_29_9_0'];
        $ten_quant=$_POST['input_29_9_1'];
        $ten_price=$_POST['input_29_9_2'];*/
    $total=$_POST['totalAmount'];
    if(isset($_POST["submit"])=="submit")
	{
           $q1="select ifnull(max(id),0)from expense_form";
     $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
        $id=$row[0]+1;
        echo"".$first_name;
        $q="insert into expense_form values($id,'$token_no','$first_name','$last_name','$dept','$date','$first_part','$first_quant','$first_price','$total')";
        mysqli_query($link,$q)or die("failed to insert record");
        echo"<script>alert('record insert successfully')</script>";
          
    }
    ?>
</body>
</html>