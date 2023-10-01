<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>
<div class="admin-feature-container w-full h-screen overflow-auto px-3">

    <?php include PAGES_PATH . '/partials/body-header.php'?>

    <div class="contents-container w-[60%] mt-[-60px] bg-slate-200 mx-auto rounded-lg min-h-[90vh] shadow-lg">
        <h4 class="text-xl font-bold text-gray-700 text-center p-3">Manage Family Name</h4>
        <form action="/familyNames/save" method="post">
            <div class="add-family-name bg-gray-700 p-2 flex justify-center gap-2 items-center text-center mt-5">
                <label for="family_name" class="text-left text-sm font-bold text-slate-100">Add Family Name:</label>
                <input type="text" name="family_name" placeholder="Enter Family Name" id="family_name" class="bg-slate-100 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 p-1 px-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ml-3 w-[40%]" required>
                <input type="submit" value="Add" class="transition-all font-semibold text-gray-700 py-1 px-4 text-sm rounded-md cursor-pointer bg-white hover:bg-gradient-to-tr from-teal-400 via-teal-500 to-teal-600 hover:text-white">
            </div>
        </form>
    
        <div class="manage-header bg-gradient-to-l from-green-400 via-green-500 to-green-600 flex justify-between items-center px-4 py-2">
            
            <p class="manage-header-title font-bold text-slate-100 text-lg">Family name list</p>
        </div>

        
        <div class="bg-slate-200 flex justify-between px-5 py-1">
            <div class="text-gray-700 font-semibold text-center no w-[10%]">No</div>
            <div class="text-gray-700 font-semibold text-center fish-name w-[60%]">Family Name</div>
            <div class="text-gray-700 font-semibold text-center action w-[30%]">Action</div>
        </div>
        
        <?php $num = 0; foreach($familyNames as $familyName): $num++?>
        <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex justify-between px-5 py-1">
            <div class="text-gray-800 flex items-center justify-center font-semibold no w-[10%]"><?=$num?></div>
            <div class="text-gray-800 flex items-center justify-center fish-name w-[60%]"><?=$familyName->getFamily_name()?></div>
            <div class="text-blue-700 flex gap-3 items-center justify-center text-center action w-[30%]">
                <a href="/familyNames/edit/<?=$familyName->getId()?>" class="py-1 px-4 rounded-sm bg-white text-green-500 hover:bg-green-500 hover:text-white transition-all shadow-md"><i class="fa-solid fa-pencil"></i></a>
                <a href="/familyNames/confirm/<?=$familyName->getId()?>" class="py-1 px-4 rounded-sm bg-white text-red-500 hover:bg-red-500 hover:text-white transition-all shadow-md"><i class="fa-solid fa-trash"></i></a>
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
                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Delete this term?</h3>
                    </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-4 flex justify-center items center gap-3">
                    <a href="/familyNames/delete/<?=$id?>" type="button" class="min-w-[30%] transition-all rounded-md text-center bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500">Delete</a>
                    <a href="/familyNames" type="button" class="min-w-[30%] transition-all rounded-md text-center bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include PAGES_PATH . '/partials/footer.php' ?>