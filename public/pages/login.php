<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./public/assets/style/output.css">
   <link rel="shortcut icon" href="./public/assets/images/logo-fishdroid.webp" type="image/x-icon">
   <title>Log in - Fishdroid</title>
</head>
<body class="w-screen h-screen flex flex-col justify-center items-center bg-slate-200">

   
   <div class="login-container bg-slate-100 border mt-[-2rem] border-gray-700 relative w-[28%] h-[60%] flex flex-col justify-center items-center rounded-xl drop-shadow-gray-600 drop-shadow-2xl">
      <div class="logo w-36 h-36 inset-0 mx-auto mt-[-4.2rem] absolute justify-center rounded-full flex flex-col items-center">
         <div class="logo-container mt-[-3px] w-[11.3rem] h-48 relative overflow-hidden">
            <img class="absoulute inset-0 h-[110%] w-[100%]" src="./public/assets/images/logo-fishdroid.webp" alt="Fishdroid Logo">
         </div>
         <!-- <span class="text-gray-700 text-lg mt-[-2rem] font-bold">FishDroid</span> -->
      </div>
      <div class="form-container max-w-[20rem] w-[100%] mt-10">
         <h1 class="text-2xl text-gray-700 font-bold">Welcome to FishDroid</h1>
         <h2 class="text-sm text-gray-500 mb-3">Welcome! Let's Log in</h2>
         <?php login() ?> 
         <form class="flex flex-col mb-8" action="" method="post">
            <label for="username" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your email" 
               class="bg-slate-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3"
            />
            <label for="password" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password"
               class="bg-slate-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2"
            />
            <div class="forgot text-sm font-bold text-gray-700 mb-5">Forgot password?</div>
            <input type="submit" name="login" class="rounded-md p-2 bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-bold text-slate-100 hover:text-white text-sm transition-all cursor-pointer" value="Log in" />
            
            <!-- <div class="rounded-md border-gray-400 text-sm p-2 text-gray-900 hover:bg-white hover:text-blue-700 hover:border-blue-700hover: border transition-all cursor-pointer flex justify-center" >
               <div 
                  class=" icon-google w-5 h-5 rounded-full mr-3">
                     <img src="./public/assets/images/icons8-google.svg" alt="google">
               </div>
               <p>Continue to google</p>
            </div> -->
         </form>
      </div>
      <!-- <div class="img-container h-screen w-2/5 relative">
         <img class="absolute h-full w-full inset-0" src="./public/assets/images/bglogin2.jpg" alt="fishbg">
      </div> -->
   </div>
   <div class="wave-container absolute z-[-1] bottom-0 w-[100%] h-[40vh] overflow-hidden">
      <img src="./public/assets/images/wave.svg" class="mt-[-9rem]" alt="Svg Wave">
   </div>
</body>
</html>

<?php
function login() {
   if(isset($_POST['login'])){
      $conn = mysqli_connect(SERVER, USERNAME, PASSWORD, DB_NAME);
      if(isset($_POST['username']) && isset($_POST['password'])){
         $username = mysqli_real_escape_string($conn, $_POST['username']);
         $password = mysqli_real_escape_string($conn, $_POST['password']);
         $query = "SELECT * FROM users WHERE username = '$username' && password = '$password'";
         $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
         if($result){
            if(mysqli_num_rows($result)){
               $user = mysqli_fetch_array($result);
               $_SESSION['user-logged'] = $user['id'];
               $_SESSION['fullname'] = $user['fullname'];
               $_SESSION['img'] = $user['img'];
               header('location: /dashboard');
               echo 'success';
            } else {
               echo '<p class="text-red-500 text-sm">Incorrect username or password</p>';
            }
         }
      }
   }
}
?>

