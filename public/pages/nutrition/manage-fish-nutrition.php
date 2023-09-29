<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
    <?php include PAGES_PATH . '/partials/body-header.php' ?>
        <div class="contents-container w-[70%] mt-[-60px] bg-slate-200 mx-auto rounded-lg"> 
            <h4 class="text-2xl text-center font-bold text-gray-700 p-3">Bangus Nutritions</h4>
            
            <form action="/familyNames/save" method="post">
                <div class="add-family-name bg-gradient-to-bl from-green-400 via-green-500 to-green-600 b p-2 flex justify-center gap-2 items-center text-center mt-5">
                    <label for="family_name" class="text-left text-sm font-bold text-slate-100">Add Family Name:</label>
                    <input type="text" name="family_name" placeholder="Enter Family Name" id="family_name" class="bg-slate-100 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 p-1 px-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ml-3 w-[40%]" required>
                    <input type="submit" value="Add" class="transition-all font-semibold text-gray-700 py-1 px-4 text-sm rounded-md cursor-pointer bg-white hover:bg-gradient-to-tr from-teal-400 via-teal-500 to-teal-600 hover:text-white">
                </div>
            </form>

            <div class="flex justify-center items-stretch gap-5 mt-10">
                <div class="w-[35%] max-w-[20rem]">
                    <h1 class="text-center text-xl font-semibold text-gray-700 p-2">Fish Information</h1>
                    <div class="bg-white p-3 rounded-lg shadow-md mb-10 min-h-[26rem]">
                        <div class="w-full min-h-[10rem] relative rounded-lg overflow-hidden shadow-md mb-5">
                            <img class="absolute inset-0 h-full w-full" src="<?= ROOT_URL?>/public/assets/images/fish_images/FISH_IMG_128.jpg" alt="FISH IMAGE">
                        </div>
                        <div class="p-4 bg-slate-200 rounded-lg shadow-[-1px -4px 29px -12px rgba(0,0,0,0.47)]">
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

                </div>
                <div class="w-[55%]">
                    <h1 class="text-center text-xl font-semibold text-gray-700 p-2">Nutritions List</h1>
                    <div class="bg-white p-3 rounded-lg shadow-md mb-10 min-h-[26rem] max-h-[26rem] overflow-auto">
                        <ul class="">
                            <li class="px-5 py-2 mb-2 text-lg text-gray-700 border-b border-b-gray-700 flex items-center justify-between cursor-pointer hover:bg-slate-200 transition-colors">
                                <i class="fa-solid fa-hand-point-right text-gray-900"></i>
                                nutrition item
                                <div class="btns">
                                    <a href="/nutritions/edit/2" class="py-1 px-4 rounded-sm bg-white text-green-500 hover:bg-green-500 hover:text-white transition-all shadow-md"><i class="fa-solid fa-pencil"></i></a>
                                    <a href="/nutritions/confirm/2" class="py-1 px-4 rounded-sm bg-white text-red-500 hover:bg-red-500 hover:text-white transition-all shadow-md"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php include PAGES_PATH . '/partials/footer.php' ?>