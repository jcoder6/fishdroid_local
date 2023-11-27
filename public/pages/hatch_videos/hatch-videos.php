<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>


<div class="admin-feature-container w-full h-screen overflow-auto px-3">
    <?php include PAGES_PATH . '/partials/body-header.php' ?>
        <div class="contents-container w-full mt-[-58px] bg-slate-100 mx-auto px-10 py-5 min-h-screen"> 
            <h4 class="text-2xl text-center font-bold text-green-600">Hatchery Process</h4>

            <div class="container flex gap-5 mt-5">
                <div class="hatch-fish-container w-[35%] text-justify text-gray-900 border border-gray-300 p-5 rounded-md">
                    <h4 class="text-lg font-semibold mb-5"><?= $hatchFish->getFish_name() ?> Hatching Process</h4>
                    <p><span class="invisible">.......</span><?= $hatchFish->getHatch_process() ?></p> 
                </div>

                <div class="w-[65%] border border-gray-300 rounded-md p-5">
                    <h4 class="text-lg text-center font-bold text-green-600 mb-5">Hatchery Videos</h4>
                    <?php if(count($hatchVideos) < 1) echo 'No videos yet'?>
                    <?php foreach($hatchVideos as $hatchVideo): ?>
                        <div class="flex justify-between pb-3 border-b border-b-gray-300 mb-3">
                            <a href="<?= $hatchVideo->getVideo_link() ?>" target="_blank"><span class="mr-3 text-gray-900 no-underline">Phase <?= $hatchVideo->getPhase_num() ?>: </span><span class="text-blue-500 italic underline"><?= $hatchVideo->getVideo_link() ?></span></a>
                            <div class="btns">
                                <a href="/hatchVideos/edit/<?= $fishID?>/<?= $hatchVideo->getId() ?>" class="py-1 px-4 rounded-sm bg-white text-green-500 hover:bg-green-500 hover:text-white transition-all shadow-md"><i class="fa-solid fa-pencil"></i></a>
                                <a href="/hatchVideos/confirm/<?= $fishID?>/<?= $hatchVideo->getId() ?>" class="py-1 px-4 rounded-sm bg-white text-red-500 hover:bg-red-500 hover:text-white transition-all shadow-md"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <h4 class="text-md font-semibold">Add Phase: </h4>
                    <form action="/hatchVideos/save/<?= $hatchFish->getId() ?>" method="post" class="w-full flex gap-1 item border border-gray-300 p-2 rounded-md">
                        <label for="phase_num" class="text-left mb-2 text-sm font-medium text-gray-900 mt-1 mr-1">Phase number:</label>
                        <input type="number" name="phase_num" value="<?= count($hatchVideos) + 1 ?>" class="bg-slate-100 border border-gray-300 text-gray-900 text-xs rounded-md focus:ring-blue-500 focus:border-blue-500 p-1 px-2 w-[7%]" required>
                        <input type="text" name="video_link" placeholder="Enter video link here" class="bg-slate-100 border border-gray-300 text-gray-900 text-xs rounded-md focus:ring-blue-500 focus:border-blue-500 p-1 px-2 w-[62%]" required>
                        <input type="submit" value="Add Phase" class="transition-all font-semibold text-gray-700 py-1 px-4 text-xs rounded-md cursor-pointer bg-white hover:bg-gradient-to-tr from-teal-400 via-teal-500 to-teal-600 hover:text-white w-[15%]">
                    </form>
                </div>
            </div>
            
            
        </div>
    </div>
<?php include PAGES_PATH . '/partials/footer.php' ?>