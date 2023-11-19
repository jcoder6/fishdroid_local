<div class="sidebar bg-slate-100 shadow-2xl w-60 h-screen">

   <div class="logo flex bg-gradient-to-l from-teal-400 via-teal-500 to-teal-600 ml-[-2rem] justify-center items-center pt-2">
      <div class="logo-container w-12 relative h-12 overflow-hidden"> 
         <img class="absoulute inset-0 h-[100%] w-[100%]" src="<?= ROOT_URL ?>/public/assets/images/logo-fishdroid.webp" alt="Fishdroid Logo">
      </div>
      <span class="text-white text-xl font-bold mb-2 tracking-[1px]">FishDroid</span>
   </div>
   <!-- <div class="divider h-1 w-full bg-green-600 shadow-md"></div> -->
   <div class="featurebtns-container">
      <ul>
         <a href="/dashboard"><li class="dashboard py-2 pl-2 text-gray-700 border-b border-gray-400 cursor-pointer hover:bg-gradient-to-l to-green-600 via-green-500 from-green-400  hover:text-white transition-all"><i class="fa-solid fa-table-columns w-8 mr-1 text-center"></i>Dashboard</li></a>
         <a href="/fishes"><li class="fishes py-2 pl-2 text-gray-700 border-b border-gray-400 cursor-pointer hover:bg-gradient-to-l to-green-600 via-green-500 from-green-400  hover:text-white transition-all"><i class="fa-solid fa-fish w-8 mr-1 text-center"></i>Manage Fish</li></a>
         <a href="/hatcheries"><li class="hatcheries py-2 pl-2 text-gray-700 border-b border-gray-400 cursor-pointer hover:bg-gradient-to-l to-green-600 via-green-500 from-green-400  hover:text-white transition-all"><i class="fa-solid fa-egg w-8 mr-1 text-center"></i>Hatchery</li></a>
         <a href="/familynames"><li class="familynames py-2 pl-2 text-gray-700 border-b border-gray-400 cursor-pointer hover:bg-gradient-to-l to-green-600 via-green-500 from-green-400  hover:text-white transition-all"><i class="fa-solid fa-people-roof w-8 mr-1 text-center"></i>Family Name</li></a>
         <a href="/fishnutritions"><li class="fishnutritions py-2 pl-2 text-gray-700 border-b border-gray-400 cursor-pointer hover:bg-gradient-to-l to-green-600 via-green-500 from-green-400  hover:text-white transition-all"><i class="fa-solid fa-heart-pulse w-8 mr-1 text-center"></i>Nutritions</li></a>
         <?php if($_SESSION['role_id'] == 2): ?>
            <a href="/users"><li class="users py-2 pl-2 text-gray-700 border-b border-gray-400 cursor-pointer hover:bg-gradient-to-l to-green-600 via-green-500 from-green-400  hover:text-white transition-all"><i class="fa-solid fa-users w-8 mr-1 text-center"></i>Manage User</li></a>
         <?php endif ?>
         <a href="/terms"><li class="terms py-2 pl-2 text-gray-700 border-b border-gray-400 cursor-pointer hover:bg-gradient-to-l to-green-600 via-green-500 from-green-400  hover:text-white transition-all"><i class="fa-solid fa-book w-8 mr-1 text-center"></i>Terms</li></a>
         <a href="/jokes"><li class="jokes py-2 pl-2 text-gray-700 border-b border-gray-400 cursor-pointer hover:bg-gradient-to-l to-green-600 via-green-500 from-green-400  hover:text-white transition-all"><i class="fa-solid fa-lightbulb w-8 mr-1 text-center"></i>Trivia</li></a>
         <a href="/quizzes"><li class="quizzes py-2 pl-2 text-gray-700 border-b border-gray-400 cursor-pointer hover:bg-gradient-to-l to-green-600 via-green-500 from-green-400  hover:text-white transition-all"><i class="fa-sharp fa-solid fa-pen-to-square w-8 mr-1 text-center"></i>Quizzes</li></a>
         <!-- <a href="/fishrecognitions"><li class="py-2 pl-2 text-gray-700 border-b border-gray-400 cursor-pointer hover:bg-gradient-to-l to-green-600 via-green-500 from-green-400  hover:text-white transition-all"><i class="fa-solid fa-camera w-8 mr-1 text-center"></i>Recognition</li></a> -->
      </ul>
   </div>

</div>