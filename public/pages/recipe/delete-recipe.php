<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
  <?php include PAGES_PATH . '/partials/body-header.php' ?>
  <div class="contents-container w-full mt-[-56px] bg-slate-100 mx-auto"> 
        <h4 class="text-2xl text-center font-bold text-gray-700 p-3"><?= $fish->getFish_name() ?> Recipes</h4>
        
        <div class="fish-info-container w-[60%] mt-5 mb-10 mx-auto bg-slate-100 shadow-md rounded-lg overflow-hidden flex">
            <div class="fish-img-container relative w-[50%] bg-cyan-300 h-56">
                <img src="<?= ROOT_URL ?>/public/assets/images/fish_images/<?= $fish->getFish_image() ?>" class="absolute w-full h-full inset-0" alt="Fish Img">
            </div>
            <div class="fish-info-container p-5 pl-10 w-[50%]">
                <p class="text-gray-700 font-semibold">Fish Name: </p>
                <p class="text-gray-500 text-sm"><?= $fish->getFish_name() ?></p>
                <p class="text-gray-700 font-semibold">Scientific Name:</p>
                <p class="text-gray-500 text-sm"><?= $fish->getScientific_name() ?></p>
                <p class="text-gray-700 font-semibold">Local Name:</p>
                <p class="text-gray-500 text-sm"><?= $fish->getLocal_name() ?></p>
                <p class="text-gray-700 font-semibold">Family Name: </p>
                <p class="text-gray-500 text-sm"><?= ucfirst(strtolower($familyName)) ?></p>
            </div>
        </div>

        <div class="manage-header bg-gradient-to-l from-green-400 via-green-500 to-green-600 flex justify-between items-center px-4 py-2">
            <p class="manage-header-title font-bold text-slate-100 text-lg">Recipes List</p>
            <a href="/recipes/create/<?= $fish->getId() ?>" class="bg-white hover:bg-gradient-to-tr from-teal-400 via-teal-500 to-teal-600 rounded-md font-semibold hover:text-white pr-3 pl-2 py-1 transition-all text-gray-700 text-sm"><i class="fa-solid fa-plus pr-2"></i>Add Recipe</a>
        </div>
        
        <div class="bg-slate-300 flex px-5 py-1 border ">
            <div class="text-gray-700 text-center font-semibold w-[3%]">No</div>
            <div class="text-gray-700 font-semibold w-[27%] pl-8">Recipe Name</div>   
            <div class="text-gray-700 font-semibold w-[50%]">Recipe Steps</div>
            <div class="text-gray-700 text-center font-semibold w-[20%] ml-6">Action</div>
        </div>
        <?php $num = 0; foreach($recipes as $recipe) : $num++; ?>

        <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-1">
            <div class="text-gray-800 flex justify-center items-center text-sm font-semibold w-[3%]"><?= $num ?></div>
            <div class="text-gray-800 flex items-center text-sm  w-[27%] pl-8"><?= $recipe->getRecipe_name(); ?></div>
            <div class="text-gray-800 flex items-center text-sm  w-[50%] truncate pr-8"><?= $recipe->getRecipe_steps() ?></div>
            <div class="text-blue-700 flex gap-3  justify-center items-center font-semibold text-center action w-[20%] ml-6">
                <a href="/recipes/edit/<?= $fish->getId() ?>/<?= $recipe->getId() ?>" class="py-1 px-4 bg-white shadow-md rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil"></i></a>
                <a href="/recipes/confirm/<?= $fish->getId() ?>/<?= $recipe->getId() ?>" class="py-1 px-4 bg-white shadow-md rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash"></i></a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
  </div>

<div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="fixed inset-0 bg-opacity-75 bg-slate-500 transition-opacity"></div>
  <div class="fixed inset-0 z-10 overflow-y-auto">
    <div class="flex min-h-full items-center justify-center p-4 text-center">
      <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
        <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
          <div class="flex flex-col justify-center items-center">
            <div class="flex h-24 w-24 flex-shrink-0 items-center justify-center mb-4 rounded-full bg-red-100">
              <svg class="h-16 w-16 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
              </svg>
            </div>
            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
              <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Delete this Recipe?</h3>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-4 flex justify-center items center gap-3">
           <a href="/recipes/delete/<?= $fish->getId() ?>/<?= $recipeID ?>" type="button" class="min-w-[30%] transition-all rounded-md text-center bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500">Delete</a>
           <a href="/recipes/viewRecipe/<?= $fish->getId() ?>" type="button" class="min-w-[30%] transition-all rounded-md text-center bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Cancel</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include PAGES_PATH . '/partials/footer.php' ?>