<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel = 'stylesheet' href ="css/style.css">
    <title>ONLINE VOTING SYSTEM</title>
    <style>
      body
      {
        background-image: url('./images/4th\ page.jpeg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
      
      
    </style>
    
</head>
<body class="mobiles">
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
          <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
           
          </div>
          <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            <h1><button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg sims"><a href = "secondpage.php"> BACK</a></button>
            </h1>
            <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign Up form</h2>
            <div class="relative mb-4">
            <form action ="" method = "post" >
                <!-- <label for="full-name" class="leading-7 text-sm text-gray-600"><span style="color: black;"  >Full Name</span></label>
                <input type="text" id="full-name" name="full-name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div> -->
            <div class="relative mb-4">
                <label for="Mobile no" class="leading-7 text-sm text-gray-600"><span style="color: black;"  >Mobile no</span></label>
                <input type="tel" id="Mobile no" name="Mobile" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <div class="relative mb-4">
                <label for="password" class="leading-7 text-sm text-gray-600"><span style="color: black;"  >Password</span></label>
                <input type="password" id="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <input type="submit" value="LOGIN" name="login" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">

           
            <!-- <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">LOGIN</button>
             -->
          </div>
        </div>
      </section>

    </from>
</body>
</html>


<!-- php code for login page -->


<?php
    // session_start();
    // include("./api/connection.php");
    if(isset($_POST['login'])){
          $mobile = $_POST['Mobile'];
    $password = $_POST['password'];
    // $role = $_POST['role'];
      $check = mysqli_query($connect, "SELECT * FROM user WHERE mobile='$mobile' AND password='$password' ");
          if(mysqli_num_rows($check)>0)
    {
      session_start();
      $_SESSION['mobile']=$moblie;
      header("location:dashboard.php");
      // $userdata = mysqli_fetch_array($check);
      // $groups = mysqli_query($connection, "SELECT * FROM user WHERE role=2");
      // $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

      // $_SESSION['userdata']=$userdata;
      // $_SESSION['groupsdata']= $groupsdata;
      
      //   echo "<script> window.open('voting.php','_self')</script>";
        // echo '<script>
        //         window.location = "voting.php";
        //     </script>';
    }
    else
    {
      echo "invalid credentials";
    }
    // else{
    //     echo  "Invalid credentials!";
                
            
    }

        
      

    // $mobile = $_POST['mobile'];
    // $password = $_POST['password'];
    // $role = $_POST['role'];

    // $check = mysqli_query($connect, "SELECT * FROM user WHERE mobile='$mobile' AND password='$password' AND role='$role' ");

    // if(mysqli_num_rows($check)>0)
    // {
    //   $userdata = mysqli_fetch_array($check);
    //   $groups = mysqli_query($connection, "SELECT * FROM user WHERE role=2");
    //   $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

    //   $_SESSION['userdata']=$userdata;
    //   $_SESSION['groupsdata']= $groupsdata;
      
    //     echo "<script> window.open('voting.php','_self')</script>";
    //     // echo '<script>
    //     //         window.location = "voting.php";
    //     //     </script>';
    // }
    // else{
    //     echo  "Invalid credentials!";
                
            
    // }
    
?>