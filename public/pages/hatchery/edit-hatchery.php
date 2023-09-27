<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>
<div class="admin-feature-container w-full h-screen overflow-auto px-3">
    <?php include PAGES_PATH . '/partials/body-header.php' ?>

    <div class="contents-container w-[40%] mt-[-60px] bg-slate-200 mx-auto rounded-lg min-h-[90vh] pb-10">
        <h4 class="text-xl font-bold text-blue-700 p-3 pl-10 pt-6">Edit Hatchery</h4>
        <form class="upload-form text-right" action="/hatcheries/update/<?= $hatchery->getId()?>" method="post" enctype="multipart/form-data">

            <div class="flex justify-between py-3 px-10">
                <div class="w-[100%]">
                    <label for="fish_name" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Fish Name</label>
                    <input required type="text" name="fish_name" id="fish_name" placeholder="Enter Name of Fish" value="<?= $hatchery->getFish_name() ?>" class="bg-gray-100 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
                </div>
            </div>

            <div class="py-3 px-10">
                <div class="w-[100%]">
                    <label for="hatchVideo" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Video:</label>
                    <input type="file" name="hatch_video" accept="video/*" id="hatchVideo"  class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="small_size" >
                    <!-- <input type="file" name="hatch_video" accept="video/*" id="hatchVideo">     -->
                </div>   
            <input type="text" name="default_video" value="<?= $hatchery->getHatch_video() ?>" class="hidden">

            </div>

            <div class="flex justify-between py-3 px-10">
                <div class="username w-[100%]">
                    <label for="hatch-process" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Hatchery Process</label>
                    <textarea required type="text" name="hatch_process" id="hatch-process" placeholder="Enter the Hatching Process..." class="w-[100%] min-h-[15rem] mb-6 bg-slate-100 border-none rounded-lg text-xs"><?= $hatchery->getHatch_process() ?></textarea>
                </div>
            </div>              
            
            <input type="submit" value="Update Hatchery" class="mr-10 transition-all font-semibold text-gray-700 shadow-md py-1 rounded-md w-[10rem] cursor-pointer bg-white hover:bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:text-white">
        </form>    
    </div>
</div>
<?php include PAGES_PATH . '/partials/footer.php' ?>