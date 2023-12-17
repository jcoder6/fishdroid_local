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
<?php include PAGES_PATH . '/partials/footer.php' ?>