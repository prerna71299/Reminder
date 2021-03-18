<html>
<head>
    <title>return Add</title>
 </head>
    <body>
       
<?php
$link=mysqli_connect("localhost",'root',"","menon") or die("connection error try later");
	session_start();
	$rnm=$_POST['returnName'];
    $rtype=$_POST['returnType'];
    $SubmittedBy=$_POST['SubmittedBy'];
	$frequency=$_POST['frequency'];
    $ddate1=$_POST['dateAnnual'];
    $ddate2=$_POST['dateSixMonth1'];
    $ddate3=$_POST['dateSixMonth2'];
    $ddate4=$_POST['dateQuat1'];
    $ddate5=$_POST['dateQuat2'];
    $ddate6=$_POST['dateQuat3'];
    $ddate7=$_POST['dateQuat4'];
    $ddate8=$_POST['dateMonth1'];
    $ddate9=$_POST['dateMonth2'];
    $ddate10=$_POST['dateMonth3'];
    $ddate11=$_POST['dateMonth4'];
    $ddate12=$_POST['dateMonth5'];
    $ddate13=$_POST['dateMonth6'];
    $ddate14=$_POST['dateMonth7'];
    $ddate15=$_POST['dateMonth8'];
    $ddate16=$_POST['dateMonth9'];
    $ddate17=$_POST['dateMonth10'];   
    $ddate18=$_POST['dateMonth11'];
    $ddate19=$_POST['dateMonth12'];
        $file=0;
        
	if(isset($_POST["submit"])=="submit")
	{
        
        //anuual
        if($frequency=="A")
        {
	   $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
        $id=$row[0]+1;

        $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q="insert into legal_compliance values($id,'$rnm','$rtype','$ddate1','$SubmittedBy','')";//insert return in return database
        mysqli_query($link,$q)or die("failed to insert record");
        echo"<script>alert('record insert successfully')</script>";
            $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
            
            header("location:Return_Submission.html");
        }
         //six month
        else if($frequency=="S")
        {
           //first time
	   $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
        $id=$row[0]+1;
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;   
        $q="insert into legal_compliance values($id,'$rnm','$rtype','$ddate2','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q)or die("failed to insert record");
            $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
            //second time
            $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
            $id=$row[0]+1;
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
        $q2="insert into legal_compliance values($id,'$rnm','$rtype','$ddate3','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q2)or die("failed to insert record");
        $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
      echo"<script>alert('record insert successfully')</script>";
         header("location:Return_Submission.html");
        }
        //quaterly
        else if($frequency=="Q"){
            //first
             $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
        $id=$row[0]+1;    
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q="insert into legal_compliance values($id,'$rnm','$rtype','$ddate4','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q)or die("failed to insert record");
             $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
            //second
            $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
            $id=$row[0]+1;
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q2="insert into legal_compliance values($id,'$rnm','$rtype','$ddate5','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q2)or die("failed to insert record");
         $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
            //third
        $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
        $id=$row[0]+1;
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q="insert into legal_compliance values($id,'$rnm','$rtype','$ddate6','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q)or die("failed to insert record");
             $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
            //fourth
            $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
            $id=$row[0]+1;
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q2="insert into legal_compliance values($id,'$rnm','$rtype','$ddate7','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q2)or die("failed to insert record");
             $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
     
         header("location:Return_Submission.html");
        }
        else if($frequency=="M"){
            //first
             $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
        $id=$row[0]+1; 
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q="insert into legal_compliance values($id,'$rnm','$rtype','$ddate8','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q)or die("failed to insert record");
             $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
            //second
            $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
            $id=$row[0]+1;
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q2="insert into legal_compliance values($id,'$rnm','$rtype','$ddate9','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q2)or die("failed to insert record");
             $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
       
            //third
        $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
        $id=$row[0]+1;
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q="insert into legal_compliance values($id,'$rnm','$rtype','$ddate10','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q)or die("failed to insert record");
             $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
            //fourth
            $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
            $id=$row[0]+1;
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q2="insert into legal_compliance values($id,'$rnm','$rtype','$ddate11','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q2)or die("failed to insert record");
             $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
      
            //fifth
             $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
        $id=$row[0]+1;   
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q="insert into legal_compliance values($id,'$rnm','$rtype','$ddate12','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q)or die("failed to insert record");
             $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
            //sixth
            $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
            $id=$row[0]+1;
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q2="insert into legal_compliance values($id,'$rnm','$rtype','$ddate13','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q2)or die("failed to insert record");
         $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
            //seven
        $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
        $id=$row[0]+1;
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q="insert into legal_compliance values($id,'$rnm','$rtype','$ddate14','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q)or die("failed to insert record");
             $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
            //eight
            $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
            $id=$row[0]+1;
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q2="insert into legal_compliance values($id,'$rnm','$rtype','$ddate15','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q2)or die("failed to insert record");
             $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
       
         //nine
             $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
        $id=$row[0]+1;   
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q="insert into legal_compliance values($id,'$rnm','$rtype','$ddate16','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q)or die("failed to insert record");
             $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
            //ten
            $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
            $id=$row[0]+1;
          $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q2="insert into legal_compliance values($id,'$rnm','$rtype','$ddate17','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q2)or die("failed to insert record");
         $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
            //eleven
        $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
        $id=$row[0]+1;
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q="insert into legal_compliance values($id,'$rnm','$rtype','$ddate18','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q)or die("failed to insert record");
            //twelve
            $q1="select ifnull(max(id),0)from legal_compliance";
        $res=mysqli_query($link,$q1);
        $row=mysqli_fetch_row($res);
            $id=$row[0]+1;
             $cal1="select ifnull(max(id),0) form Calendar";//calendar
        $cal2=mysqli_query($link,cal1);
            $cal_row=mysqli_fetch_row($cal2);
            $cal_id=$row[0]+1;
       
        $q2="insert into legal_compliance values($id,'$rnm','$rtype','$ddate19','$SubmittedBy')";//insert return in return database
        mysqli_query($link,$q2)or die("failed to insert record");
        $cal_q="insert into Calendar values($cal_id,'$rnm','$ddate1','$ddate1')";//insert return to calendar
            mysqli_query($link,$cal_q)or die("failed to insert record");
         header("location:Return_Submission.html");
        }
        else
        {
            echo"<script>alert('password incorrect')";
        }
	}
?>
      
    </body>
</html>