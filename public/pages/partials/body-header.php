<header class="w-full bg-blue-700 p-3 h-28 rounded-b-3xl mt flex justify-end items-start">
   <div class="user-container flex items-center">
      <div class="user-img-container w-7 h-7 relative bg-black rounded-full overflow-hidden">
         <img class="absolute h-full w-full inset-0" src="./public/assets/images/userprofile.PNG" alt="User profile">
      </div>
      <a href="#" class="userfullname text-white font-semibold text-sm ml-2"><?= $_SESSION['fullname'] ?></a>
      <a href="/app/out" class="userfullname text-white font-semibold text-xl ml-2"><i class="fa-solid fa-right-from-bracket"></i></a>
   </div>
</header>