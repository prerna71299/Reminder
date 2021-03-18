<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <style>
        .center-div{
           
            height:auto;
            margin-left: 400px;
            margin-top: 100px;
            margin-right: 40px;
        }
        .my-custom-scrollbar {
position: relative;
height: 400px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
    </style>
    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
      integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <link rel="icon" href="img/logo.png" type="image/png" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
        body{
           
            height: auto;
            width: auto;
           
            background-repeat: no-repeat;
             background-attachment: fixed;
  background-size: cover;
            
        }
.sidebar {
    margin-top: 150px;
  height: 500px;
  width: 350px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: white;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
    margin-top: 10px;
text-align:center;
  
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
.box{
width: 320px;
padding: 10px;
height: 80px;
border-radius: 10px;       
margin: 0;
background-color: cadetblue;
margin-left: 10px;
    box-shadow: 2px 2px 4px #000000
}
            .container {
  display: inline-block;
  cursor: pointer;
                margin-left: 1250px;
}

.bar1, .bar2, .bar3 {
  width: 35px;
  height: 5px;
  background-color: white;
  margin: 6px 0;
  transition: 0.4s;
}

.change .bar1 {
  -webkit-transform: rotate(-45deg) translate(-9px, 6px);
  transform: rotate(-45deg) translate(-9px, 6px);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
  -webkit-transform: rotate(45deg) translate(-8px, -8px);
  transform: rotate(45deg) translate(-8px, -8px);
}.sidepanel {
  height: 750px; /* Specify a height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  right: 0;
  background-color:cadetblue; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidepanel */
}

/* The sidepanel links */
.sidepanel a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: black;
    font-weight: bold;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidepanel a:hover {
  color: white;
}

/* Position and style the close button (top right corner) */
.sidepanel .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 30px;
  margin-left: 50px;
}

/* Style the button that is used to open the sidepanel */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color:#14202E;
  color: white;
  padding: 10px 15px;
  border: none;
    margin-left: 1200px;
}
            .btn-default{
                width: 150px;
                height: 40px;
            }
            
            .btn-default:hover{
                background-color: cadetblue;
                color: white;
                text-decoration-style: solid;
            }
.openbtn:hover {
  background-color: #444;
}
            .btn zbtn-default:hover{
                background-color: cadetblue;
            }
            .FormDiv{
                float: right;
                margin-right: 250px;
                margin-top: 80px;
                width: 850px;
                height: auto;
                font-size: 20px;
                display: inline-block;
                box-shadow: 2px 2px 3px 3px #ccc; 
  
            }
            .form-group{
                margin-left: 30px;
                margin-right: 50px;
            }
            
    </style>
    <script type="text/javascript">
    $(function () {
        $("#frequency").change(function () {
            if ($(this).val() == "A") {
                $("#dvAnnual").show();
            } else {
                $("#dvAnnual").hide();
            }
            if ($(this).val() == "S") {
                $("#dvSixMonth").show();
            } else {
                $("#dvSixMonth").hide();
            }
            if ($(this).val() == "Q") {
                $("#dvQuat").show();
            } else {
                $("#dvQuat").hide();
            }
            if ($(this).val() == "M") {
                $("#dvMonth").show();
            } else {
                $("#dvMonth").hide();
            }
        });
    });
</script>
<script>
function myFunction(x) {
  x.classList.toggle("change");
}
    function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>
    
    </head>
    <body>
         <nav class="navbar bg-dark navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="">menon and menon Ltd</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
       
</div><div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
  <a href="#">Profile</a><br>
  <a href="Pass_change.html">Change Password</a><br>
  <a href="login.html">Log Out</a>
</div>
<button class="openbtn" onclick="openNav()">&#9776;</button>
             </nav>
        <div class="sidebar">
            <div class="box">
            <a href="Return_submission.html"><i class="fa fa-book"></i>RETURN SUBMISSION</a>
            </div><br>
            <div class="box">
                  <a href="LoginPage.html"><i class="fa fa-calendar"></i>&nbsp;&nbsp;CALENDER</a>
            </div><br>
            <div class="box">
                  <a href="registration.html"><i class="fa fa-bell"></i>&nbsp;&nbsp;REMINDER</a>
            </div><br>
            <div class="box">
                  <a href="courses.html"><i class="fa fa-history"></i>&nbsp;&nbsp;HISTORY</a>
            </div><br>
             <div class="box">
                  <a href="http://mblaze.menon.in/dashboard.php"><i class="fa fa-external-link"></i>&nbsp;&nbsp;MBLAZE PORTAL</a>
            </div>
            
</div>

    <div class="main-div">
        
        </div>
        <div class="center-div">
        <div class="able-wrapper-scroll-y my-custom-scrollbar">
          
            <table class="table">
        
            <thread>
                <tr class="table-dark">
                    <th>ID</th>
                    <th>RETURN NAME</th>
                    <th>RETURN TYPE</th>
                    <th>DUE DATE</th>
                    <th>SUBMITTED BY</th>
                    <th>UPLOAD DOCUMENT</th>
                    <th>Submit</th>
                </tr>
                </thread>
                <tbody>
               
                    
                    <?php
                    $today_date=date('y-m-d');
                    $link=mysqli_connect("localhost",'root',"","menon") or die("connection error try later");
                    $select_query="select * from legal_compliance where DATE(due_date) ='2021/01/31'";
                    $query=mysqli_query($link,$select_query);
                    while($res=mysqli_fetch_array($query)){
                    ?>
                   <form method="post" name="form1">
                     <tr class="table-light">
                    <td><?php $id1=$res['id'];
                        echo $res['id']?></td>
                    <td><?php echo $res['return_name']?></td>
                    <td><?php echo $res['return_type']?></td>
                    <td><?php echo $res['due_date']?></td>
                    <td><?php echo $res['SubmittedBy']?></td>
                    <td><input type="file" name="upload" id="upload" class="btn btn-outline-primary"></td>
                         <td><input type="submit" name="submit" id="submit" class="btn btn-success"></td>
                    </tr></form>
                    <?php 
                    
                    if(isset($_POST["submit"])=="submit")
                    {
                     $add_q1="select ifnull(max(id),0)from legal_compliance";
                    $res1=mysqli_query($link,$add_q1);
                         $upload=$_POST['upload'];
                            $query1="UPDATE legal_compliance SET file_doc='$upload' WHERE id=$id1";
                            mysqli_query($link,$query1)or die("failed");
                        }
                    }?>
                   
                </tbody>
            </table>
               
            </div>
        </div>
    </body>
</html>