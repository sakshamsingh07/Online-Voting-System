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
        background-image: url('./images/3rd\ page.jpeg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
      
      
    </style>
    
</head>
<body class="pizza">
  <header class="tea" >
    <div>
        <h1>
            <span class="ml-16 text-4xl burger"  >ONLINE VOTING SYSTEM</span>
        </h1>     
    </div>
</header>

   <h6>
      <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg momos"><a href = "secondpage.php"> BACK</a></button>
  </h6>

 
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-12 mx-auto flex flex-wrap items-center">

         
          <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
           

          </div>
        
          
          <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
           
              <h2 class="text-gray-900 text-lg font-medium title-font mb-5">REGISTRATION</h2>
           <!-- <form action ="../api/registeration.php" method = "POST" enctype="multipart/from-data"> -->

            <div class="relative mb-4">
            <form action ="" method = "POST" enctype="multipart/form-data">
              <label for="full-name" class="leading-7 text-sm text-gray-600"><span style="color: black;"  >Full Name</span></label>
              <input type="text" id="full-name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="Address" class="leading-7 text-sm text-gray-600"><span style="color: black;"  >Address</span></label>
              <input type="text , number " id="Address" name="address" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="Mobile no" class="leading-7 text-sm text-gray-600"><span style="color: black;"  >Mobile no</span></label>
              <input type="tel" id="Mobile no" name="mobile" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="email" class="leading-7 text-sm text-gray-600"><span style="color: black;"  >Email</span></label>
              <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="password" class="leading-7 text-sm text-gray-600"><span style="color: black;"  >Password</span></label>
              <input type="password" id="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="password" class="leading-7 text-sm text-gray-600"><span style="color: black;"  >Confirm Password</span></label>
             <input type="password" id="password" name="cpassword" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
             <div>
              <div class="relative mb-4">
                <label for="img" class="leading-7 text-sm text-gray-600"><span style="color: black;"  >Photo</span></label>
               <input type="file" id="profile" name="img" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
               <div>

              <select name="role">
                  <option value="1"><span style="color: black;"  >Voter</span></option>
                  <option value="2"><span style="color: black;"  >Group</span></option>
              </select><br>                   
          </div>
            </div>
            <input type="submit" value="REGISTER" name="register" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
          </div>
        </div>
    
      </section>
    
    

      </form> 
</body>
</html>

<!-- code for insertion of data through php  -->

<?php
include "./api/connection.php";

if(isset($_POST['register'])){
$name = $_POST['name'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$role = $_POST['role'];
$status = 0;
$vote = 0;
$doc = date('Y-m-d H:i:s');
$image = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name,"./upload/$image");
$query = "INSERT INTO `user`( `name`, `address`, `mobile`, `email`, `password`,`photo`, `role`, `status`, `vote`, `doc`) VALUES ('$name','$address','$mobile','$email','$password','$image','$role','$status','$vote','$doc')";
// $sql = "INSERT INTO user(name,address,mobile,email,password,role,status,vote,doc)VALUES('$name','$address','$mobile','$email','$password','$role','$status','$vote',$doc)";
$insert = mysqli_query($connection, $query);
if($insert == true)
{
   echo "<script> window.open('secondpage.php','_self')</script>";
}
else
{
    echo "data not inserted";
}
}

?>