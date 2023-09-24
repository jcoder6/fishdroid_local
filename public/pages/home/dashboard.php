<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>
<div class="admin-feature-container w-full h-screen overflow-auto px-3">

      <?php include PAGES_PATH . '/partials/body-header.php'?>

      <div class="contents-container w-[75%] mt-[-60px] bg-slate-100 shadow-2xl mx-auto rounded-lg p-5 min-h-[40rem]">
         <h4 class="font-bold text-center text-3xl text-gray-700 mb-10 mt-4">Dashboard</h4>
         <div class="dashboard-container flex flex-wrap justify-around">

            <div class="content fish-data bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 w-[48%] flex justify-center items-center gap-5 mb-5 p-10 rounded-lg">
               <i class="fa-solid fa-fish mr-3 text-9xl ml-[-30px] text-white"></i>
               <div class="data-fetched">
                  <p class="text-5xl font-bold text-white"><?= $countData['fishCount']?></p>
                  <p class="text-2xl font-bold text-white">Fish</p>
               </div>
            </div>

            <div class="content user-data bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 w-[48%] flex justify-center items-center gap-5 mb-5 p-10 rounded-lg">
               <i class="fa-solid fa-users mr-3 text-9xl ml-[-30px] text-white"></i>
               <div class="data-fetched">
                  <p class="text-5xl font-bold text-white"><?= $countData['userCount'] ?></p>
                  <p class="text-2xl font-bold text-white">User</p>
               </div>
            </div>

            <div class="content fish-data bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 w-[48%] flex justify-center items-center gap-5 mb-5 p-10 rounded-lg">
               <i class="fa-solid fa-lightbulb mr-3 text-9xl ml-[-30px] text-white"></i>
               <div class="data-fetched">
                  <p class="text-5xl font-bold text-white"><?= $countData['userCount'] ?></p>
                  <p class="text-2xl font-bold text-white">Trivias</p>
               </div>
            </div>

            <div class="content fish-data bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 w-[48%] flex justify-center items-center gap-5 mb-5 p-10 rounded-lg">
               <i class="fa-solid fa-book mr-3 text-9xl ml-[-30px] text-white"></i>
               <div class="data-fetched">
                  <p class="text-5xl font-bold text-white"><?= $countData['termCount'] ?></p>
                  <p class="text-2xl font-bold text-white">Terms</p>
               </div>
            </div>

         </div>
      </div>
   </div>
   
<?php include PAGES_PATH . '/partials/footer.php' ?>