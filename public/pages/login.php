<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../assets/style/output.css">
   <title>Log in - Fishdroid</title>
</head>
<body class="w-screen h-screen">
   <div class="flex relative">
      <div class="login-container w-3/5 flex flex-col">
         <div class="logo m-3 ml-5 text-blue-700 text-2xl font-bold">FishDroid</div>
         <div class="form-container self-center mt-16 w-1/2 p-10 border border-gray-400 rounded-md drop-shadow">
            <h1 class="text-3xl font-bold">Welcome to FishDroid</h1>
            <h2 class="text-sm text-gray-400 mb-3">Welcome! Please enter your credentials.</h2>
            
            <form class="flex flex-col" action="#" method="post">
               <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
               <input type="text" name="username" id="username" placeholder="Enter your email" 
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3"
               />
               <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
               <input type="password" name="password" id="password" placeholder="Enter your password"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2"
               />
               <div class="forgot text-sm font-bold text-blue-700 mb-5">Forgot password?</div>
               <button type="button" 
                  class="bg-blue-700 rounded-md p-2 border border-blue-700 text-white text-sm hover:bg-white hover:text-blue-700 hover:border-blue-700 hover:border transition-all cursor-pointer mb-2">Log in</button>
               
               <div class="rounded-md border-gray-400 text-sm p-2 text-gray-900 hover:bg-white hover:text-blue-700 hover:border-blue-700hover: border transition-all cursor-pointer flex justify-center" >
                  
                  <div 
                     class=" icon-google w-5 h-5 rounded-full mr-3">
                        <img src="../assets/images/icons8-google.svg" alt="google">
                  </div>
                  <p>Continue to google</p>
               </div>
            </form>
         </div>
      </div>
      <div class="img-container h-screen w-2/5 relative">
         <img class="absolute h-full w-full inset-0" src="../assets/images/loginimg.webp" alt="fishbg">
      </div>
   </div>
</body>
</html>