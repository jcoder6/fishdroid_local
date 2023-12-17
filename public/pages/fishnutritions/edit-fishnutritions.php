
<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
    <?php include PAGES_PATH . '/partials/body-header.php'?>
     <div class="contents-container w-full mt-[-56px] bg-slate-100 mx-auto min-h-[90vh] shadow-lg">
        <h4 class="text-xl font-bold text-green-600 text-center p-3">Manage Fish Nutrition</h4>
        <form action="/fishnutritions/update/<?= $currID ?>" method="post">
            <div class="add-family-name bg-gray-700 p-2 flex justify-center gap-2 items-center text-center mt-5">
                <label for="nutrition" class="text-left text-sm font-bold text-slate-100">Add Nutrition:</label>
                <input type="text" name="nutrition" placeholder="Enter Nutrition" value="<?= $currNutritionName ?>" id="nutrition" class="bg-slate-100 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 p-1 px-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ml-3 w-[40%]" required>
                <input type="submit" value="Update" class="transition-all font-semibold text-green-600 py-1 px-4 text-sm rounded-md cursor-pointer bg-white hover:bg-gradient-to-tr from-teal-400 via-teal-500 to-teal-600 hover:text-white">
            </div>
        </form>
    
        <div class="manage-header bg-gradient-to-l from-green-400 via-green-500 to-green-600 flex justify-between items-center px-4 py-2">
            
            <p class="manage-header-title font-bold text-slate-100 text-s">Nutrtion list</p>
        </div>

        
        <div class="bg-slate-300 flex justify-between px-5 py-1">
            <div class="text-gray-700 font-semibold text-center no w-[10%]">No</div>
            <div class="text-gray-700 font-semibold text-center fish-name w-[60%]">Nutrition</div>
            <div class="text-gray-700 font-semibold text-center action w-[30%]">Action</div>
        </div>
        
        <?php $num = 0; foreach($fishNutritions as $fishNutrition): $num++?>
        <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex justify-between px-5 py-1">
            <div class="text-gray-800 flex items-center justify-center font-semibold no w-[10%]"><?=$num?></div>
            <div class="text-gray-800 flex items-center justify-center fish-name w-[60%]"><?= ucfirst(strtolower($fishNutrition->getNutrition_name())) ?></div>
            <div class="text-blue-700 flex gap-3 items-center justify-center text-center action w-[30%]">
                <a href="/fishnutritions/edit/<?=$fishNutrition->getId()?>" class="py-1 px-4 rounded-sm bg-white text-green-500 hover:bg-green-500 hover:text-white transition-all shadow-md"><i class="fa-solid fa-pencil"></i></a>
                <a href="/fishnutritions/confirm/<?=$fishNutrition->getId()?>" class="py-1 px-4 rounded-sm bg-white text-red-500 hover:bg-red-500 hover:text-white transition-all shadow-md"><i class="fa-solid fa-trash"></i></a>
            </div>  
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include PAGES_PATH . '/partials/footer.php' ?>