<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>
<div class="admin-feature-container w-full h-screen overflow-auto px-3">

      <?php include PAGES_PATH . '/partials/body-header.php'?>

      <div class="contents-container w-[95%] mt-[-60px] bg-slate-100 mx-auto rounded-lg p-5">
         <h4 class="text-xl font-bold text-blue-700 mb-6">Dashboard</h4>
         <div class="dashboard-container flex flex-wrap justify-around">

            <div class="content fish-data bg-slate-300 w-[48%] flex justify-center items-center gap-5 mb-5 p-10 rounded-lg">
               <i class="fa-solid fa-fish mr-3 text-9xl ml-[-30px] text-white"></i>
               <div class="data-fetched">
                  <p class="text-5xl font-bold text-white">8521</p>
                  <p class="text-2xl font-bold text-white">Fish</p>
               </div>
            </div>

            <div class="content user-data bg-slate-700 w-[48%] flex justify-center items-center gap-5 mb-5 p-10 rounded-lg">
               <i class="fa-solid fa-users mr-3 text-9xl ml-[-30px] text-white"></i>
               <div class="data-fetched">
                  <p class="text-5xl font-bold text-white">4</p>
                  <p class="text-2xl font-bold text-white">User</p>
               </div>
            </div>

            <div class="content fish-data bg-slate-500 w-[48%] flex justify-center items-center gap-5 mb-5 p-10 rounded-lg">
               <i class="fa-solid fa-lightbulb mr-3 text-9xl ml-[-30px] text-white"></i>
               <div class="data-fetched">
                  <p class="text-5xl font-bold text-white">42</p>
                  <p class="text-2xl font-bold text-white">Fun Facts</p>
               </div>
            </div>

            <div class="content fish-data bg-blue-500 w-[48%] flex justify-center items-center gap-5 mb-5 p-10 rounded-lg">
               <i class="fa-solid fa-pen-square mr-3 text-9xl ml-[-30px] text-white"></i>
               <div class="data-fetched">
                  <p class="text-5xl font-bold text-white">20</p>
                  <p class="text-2xl font-bold text-white">Quizzes</p>
               </div>
            </div>

            <div class="content fish-data bg-slate-700 w-[48%] flex justify-center items-center gap-5 mb-5 p-10 rounded-lg">
               <i class="fa-solid fa-book mr-3 text-9xl ml-[-30px] text-white"></i>
               <div class="data-fetched">
                  <p class="text-5xl font-bold text-white">181</p>
                  <p class="text-2xl font-bold text-white">Terms</p>
               </div>
            </div>

         </div>
      </div>
   </div>
   
<?php include PAGES_PATH . '/partials/footer.php' ?>