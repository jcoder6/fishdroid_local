<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>
<div class="admin-feature-container w-full h-screen overflow-auto px-3">

      <?php include PAGES_PATH . '/partials/body-header.php'?>

      <div class="contents-container w-[100%] mt-[-56px] bg-slate-100 shadow-teal-500 shadow-xl mx-auto p-5 min-h-[40rem]">
         <h4 class="font-bold text-2xl text-green-600 mb-2">Dashboard</h4>
         <div class="dashboard-container flex justify-around gap-2 border-b border-green-500">

            <a href="/fishes" class="content fish-data bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 w-[25%] flex justify-center items-center gap-5 mb-5 p-10 rounded-lg">
               <i class="fa-solid fa-fish mr-3 text-5xl ml-[-30px] text-white"></i>
               <div class="data-fetched">
                  <p class="text-3xl font-bold text-white"><?= $countData['fishCount']?></p>
                  <p class="text-xl font-bold text-white">Fish</p>
               </div>
            </a>

            <a href="/users" class="content user-data bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 w-[25%] flex justify-center items-center gap-5 mb-5 p-10 rounded-lg">
               <i class="fa-solid fa-users mr-3 text-5xl ml-[-30px] text-white"></i>
               <div class="data-fetched">
                  <p class="text-3xl font-bold text-white"><?= $countData['userCount'] ?></p>
                  <p class="text-xl font-bold text-white">User</p>
               </div>
            </a>

            <a href="/jokes" class="content fish-data bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 w-[25%] flex justify-center items-center gap-5 mb-5 p-10 rounded-lg">
               <i class="fa-solid fa-lightbulb mr-3 text-5xl ml-[-30px] text-white"></i>
               <div class="data-fetched">
                  <p class="text-3xl font-bold text-white"><?= $countData['triviaCount'] ?></p>
                  <p class="text-xl font-bold text-white">Trivias</p>
               </div>
            </a>

            <a href="/terms" class="content fish-data bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 w-[25%] flex justify-center items-center gap-5 mb-5 p-10 rounded-lg">
               <i class="fa-solid fa-book mr-3 text-5xl ml-[-30px] text-white"></i>
               <div class="data-fetched">
                  <p class="text-3xl font-bold text-white"><?= $countData['termCount'] ?></p>
                  <p class="text-xl font-bold text-white">Terms</p>
               </div>
            </a>

         </div>
         <h4 class="font-bold text-2xl text-green-600 mb-2 mt-5">Latest Added Fish</h4>

         <div class="contents-container w-full bg-slate-100 mx-auto px-10 py-5 rounded-lg min-h-screen">
            <div class="flex w-[100%] m-auto gap-5 border border-gray-400 rounded-md p-5">
                  <div class="w-[40%]">
                     <div class="relative w-full h-52 bg-white rounded-md overflow-hidden shadow-md">
                        <img class="absolute inset-0 w-full h-full" src="<?=ROOT_URL?>/public/assets/images/fish_images/<?= $fish->getFish_image() ?>" alt="<?= $fish->getFish_image() ?>">
                     </div>
                     <div class="p-2 rounded-md border border-gray-400 mt-3">
                        <h5 class="font-bold">
                              <?php if($fish->getIs_pettable()) : ?>
                                 <i class="fa-solid fa-square-check pr-2 text-green-400"></i>
                              <?php else : ?>
                                 <i class="fa-solid fa-square-xmark pr-2 text-red-400"></i>
                              <?php endif; ?>
                              Can be a Pet
                        </h5>
                        <h5 class="font-bold mb-3">
                              <?php if($fish->getIs_edible()) : ?>
                                 <i class="fa-solid fa-square-check pr-2 text-green-400"></i>
                              <?php else : ?>
                                 <i class="fa-solid fa-square-xmark pr-2 text-red-400"></i>
                              <?php endif; ?>
                              Edible
                        </h5>
                        <div class="btn-links flex gap-2">
                              <?php $disableBtn = 'opacity-50 pointer-events-none cursor-not-allowed'?>
                              <a href="/recipes/viewRecipe/<?= $fish->getId() ?>" class="<?= $fish->getIs_edible() ? '' : $disableBtn ?> bg-green-400 py-2 px-5 text-xs rounded-sm w-[50%] hover:bg-green-500 transition-all text-center"><i class="ml-[-10px] pr-3 fa-solid fa-utensils"></i>Manage Recipes</a>
                              <a href="/nutritions/viewNutrition/<?= $fish->getId() ?>" class="<?= $fish->getIs_edible() ? '' : $disableBtn ?> bg-green-400 py-2 px-5 text-xs rounded-sm w-[50%] hover:bg-green-500 transition-all text-center"><i class="ml-[-10px] pr-3 fa-solid fa-heart-pulse"></i>Manage Nutritions</a>
                        </div>
                     </div>
                  </div>

                  <div class="bg-slate-200 p-6 rounded-md w-[60%] relative">
                     <h3 class="text-center font-bold text-gray-900 text-lg mb-3"><?= $fish->getFish_name() ?></h3>
                     <h2 class="text-sm mb-2 text-gray-700"><span class="font-semibold text-gray-900">Scientific name: </span><?= $fish->getScientific_name() ?></h2>
                     <h2 class="text-sm mb-2 text-gray-700"><span class="font-semibold text-gray-900">Family name: </span><?= $familyName ?></h2>
                     <h2 class="text-sm mb-2 text-gray-700"><span class="font-semibold text-gray-900">Local Name(Pangasinan): </span><?= $fish->getLocal_name() ?></h2>
                     <h2 class="text-sm mb-2 mt-5 text-gray-700 text-center"><span class="font-semibold text-gray-900">Fish Description</span></h2>
                     <p class="text-sm leading-[1rem] text-gray-700"><?= $fish->getFish_info() ?></p>
                     <a href="/fishes/edit/<?= $fish->getId() ?>" class="absolute bottom-3 right-3 bg-green-400 py-2 px-8 text-xs rounded-sm hover:bg-green-500 transition-all text-center"><i class="ml-[-10px] pr-3 fa-solid fa-pencil"></i>Edit Fish</a>
                  </div>
            </div>

            <div class="flex w-full mt-5 gap-5">
                  <div class="recipe-container border border-gray-400 min-h-[10rem] w-[50%] rounded-md p-3">
                     <h5 class="mb-3">List of Recipe:</h5>
                     <ul class="ml-5 text-sm pr-8">
                        <?php if(!count($recipes)) echo 'No recipe added yet'; ?>
                        <?php foreach($recipes as $recipe): ?>
                              <li class="flex justify-between p-1 text-gray-900 border-b border-green-900">
                                 <span><i class="fa-solid fa-utensils mr-3 text-green-600"></i><?= $recipe->getRecipe_name() ?></span>
                                 <a href="/recipes/viewOne/<?= $recipe->getId() ?>" data-tooltip-target="view-recipe" data-tooltip-placement="top" type="button" class="text-green-400 hover:text-green-600 transition-all"><i class="fa-solid fa-eye"></i></a>

                                 <div id="view-recipe" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs text-gray-700 bg-green-400 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    View Recipe
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                 </div>
                              </li>
                        <?php endforeach; ?>
                     </ul>
                  </div>
                  <div class="nutri-container border border-gray-400 min-h-[10rem] w-[50%] rounded-md p-3">
                     <h5 class="mb-3">List of Nutrition:</h5>
                     <ul class="ml-5 text-sm pr-8">
                        <?php if(!count($nutritions)) echo 'No nutrition added yet'; ?>
                        <?php foreach($nutritions as $nutrition): ?>
                              <li class="p-1 text-gray-900 border-b border-green-900">
                                 <span><i class="fa-solid fa-heart-pulse mr-3 text-green-600"></i><?= $nutrition['nutrition_name'] ?></span>
                              </li>
                        <?php endforeach; ?>
                     </ul>
                  </div>
            </div>
            
         </div>

      </div>
   </div>
   
<?php include PAGES_PATH . '/partials/footer.php' ?>