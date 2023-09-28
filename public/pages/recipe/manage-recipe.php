<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
    <?php include PAGES_PATH . '/partials/body-header.php' ?>
        <div class="contents-container w-[70%] mt-[-60px] bg-slate-200 mx-auto rounded-lg"> 
            <h4 class="text-2xl text-center font-bold text-gray-700 p-3">Bangus Recipes</h4>
            
            <div class="fish-info-container w-[80%] mt-5 mb-10 mx-auto bg-slate-100 shadow-md rounded-lg overflow-hidden flex">
                <div class="fish-img-container relative w-[50%] bg-cyan-300 h-56">
                    <img src="<?= ROOT_URL ?>/public/assets/images/fish_images/FISH_IMG_128.jpg" class="absolute w-full h-full inset-0" alt="Fish Img">
                </div>
                <div class="fish-info-container p-5 pl-10 w-[50%]">
                    <p class="text-gray-700 font-semibold">Fish Name: </p>
                    <p class="text-gray-500 text-sm">Bangus</p>
                    <p class="text-gray-700 font-semibold">Scientific Name:</p>
                    <p class="text-gray-500 text-sm">Malay Ko</p>
                    <p class="text-gray-700 font-semibold">Local Name:</p>
                    <p class="text-gray-500 text-sm">Malay Ko Ulit</p>
                    <p class="text-gray-700 font-semibold">Family Name: </p>
                    <p class="text-gray-500 text-sm">Abay ewan ko</p>
                </div>
            </div>

            <div class="manage-header bg-gradient-to-l from-green-400 via-green-500 to-green-600 flex justify-between items-center px-4 py-2">
                <p class="manage-header-title font-bold text-slate-100 text-lg">Recipes List</p>
                <a href="/recipes/create/1" class="bg-white hover:bg-gradient-to-tr from-teal-400 via-teal-500 to-teal-600 rounded-md font-semibold hover:text-white pr-3 pl-2 py-1 transition-all text-gray-700 text-sm"><i class="fa-solid fa-plus pr-2"></i>Add Recipe</a>
            </div>
            
            <div class="bg-slate-300 flex px-5 py-1 border ">
                <div class="text-gray-700 text-center font-semibold w-[3%]">No</div>
                <div class="text-gray-700 font-semibold w-[27%] pl-8">Recipe Name</div>   
                <div class="text-gray-700 font-semibold w-[50%]">Recipe Steps</div>
                <div class="text-gray-700 text-center font-semibold w-[20%] ml-6">Action</div>
            </div>


            <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-1">
                <div class="text-gray-800 flex justify-center items-center text-sm font-semibold w-[3%]">1</div>
                <div class="text-gray-800 flex items-center text-sm  w-[27%] pl-8">Recipe Name</div>
                <div class="text-gray-800 flex items-center text-sm  w-[50%] truncate pr-8">Steps in Recipe</div>
                <div class="text-blue-700 flex gap-3  justify-center items-center font-semibold text-center action w-[20%] ml-6">
                <a href="#" class="py-1 px-4 bg-white shadow-md rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil"></i></a>
                <a href="#" class="py-1 px-4 bg-white shadow-md rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash"></i></a>
                </div>
            </div>
            
        </div>
    </div>
<?php include PAGES_PATH . '/partials/footer.php' ?>