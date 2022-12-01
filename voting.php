<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: index.php");
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel = 'stylesheet' href ="css/style.css">
    <title>ONLINE VOTING SYSTEM</title>
</head>
<body> 
    <style>
         #backbtn{
            padding: 5px;
            font-size: 15px;
            background-color:#3498db;
            color: white;
            border-radius: 5px;
            float: left;
        }
        #logoutbtn{
            padding: 5px;
            font-size: 15px;
            background-color:#3498db;
            color: white;
            border-radius: 5px;
            float: right;
        }

        #Profile
        {
            background-color:white;
            width: 40%;
            padding: 20px;
            float: left;
        }
        #Group {
            background-color:white;
            width: 70%;
            padding: 20px;
            float: right;
        }

    </style>
    
      
    <div id = "mainsection">
        <center>
        <div id = "headerSection">
            <button id = "backbtn">BACK</button>
            <button id = "logoutbtn">LOGOUT</button>
            <h1> ONLINE VOITING SYSTEM</h1>
        </div>
    </center>
        <hr>
        <div id = "Profile">
            <img src="./upload/<?php echo $userdata['photo'] ?>"height="100" width="100"><br><br>
            <b>Name:</b><?php echo $userdata['name'] ?><br><br>
            <b>Mobile:</b><?php echo $userdata['mobile'] ?><br><br>
            <b>Address:</b><?php echo $userdata['address'] ?><br><br>
            <b>Status:</b><?php echo $userdata['status'] ?><br><br>
        </div>
        <div id = "Group">

        </div>
    



    </div>




       




        
</body>
</html>


<!-- php for voting -->

