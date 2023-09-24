<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>
<div class="admin-feature-container w-full h-screen overflow-auto px-3">

    <?php include PAGES_PATH . '/partials/body-header.php'?>

    <div class="contents-container w-[60%] mt-[-60px] bg-slate-100 mx-auto rounded-lg min-h-[90vh] shadow-lg">
        <h4 class="text-xl font-bold text-blue-700 p-3">Manage Family Name</h4>
        <form action="/familyNames/save" method="post">
            <div class="add-family-name bg-white p-2 flex justify-center gap-3 items-center text-center mb-10 mt-5">
                <label for="family_name" class="text-left text-sm font-medium text-gray-900 dark:text-white">Add Family Name:</label>
                <input type="text" name="family_name" placeholder="Enter Family Name" id="family_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ml-3 w-[40%]">
                <input type="submit" value="Add" class="border border-blue-700 transition-all font-semibold text-blue-700 py-1 rounded-md w-[8rem] cursor-pointer bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 hover:text-white">
            </div>
        </form>
    
        <div class="manage-header bg-slate-300 flex justify-between items-center px-4 py-2">
            <p class="manage-header-title font-bold text-blue-700 text-lg">Family name list</p>
        </div>

        
        <div class="bg-gradient-to-r from-cyan-500 to-blue-500 flex justify-between px-5 py-1">
            <div class="text-white font-semibold no w-[10%]">No</div>
            <div class="text-white font-semibold fish-name w-[60%]">Family Name</div>
            <div class="text-white font-semibold action w-[30%]">Action</div>
        </div>
        
        <?php $num = 0; foreach($familyNames as $familyName): $num++?>
        <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex justify-between px-5 py-1">
            <div class="text-gray-800 flex items-center font-semibold no w-[10%]"><?=$num?></div>
            <div class="text-gray-800 flex items-center font-semibold fish-name w-[60%]"><?=$familyName->getFamily_name()?></div>
            <div class="text-blue-700 flex gap-3 items-center font-semibold text-center action w-[30%]">
            <a href="/familyNames/edit/<?=$familyName->getId()?>" class="py-1 px-4 bg-slate-300 rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil pr-3"></i>Edit</a>
            <a href="/familyNames/confirm/<?=$familyName->getId()?>" class="py-1 px-4 bg-slate-300 rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash pr-3"></i>Delete</a>
            </div>  
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include PAGES_PATH . '/partials/footer.php' ?>