<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>


<div class="admin-feature-container w-full h-screen overflow-auto px-3">
    <?php include PAGES_PATH . '/partials/body-header.php' ?>
        <div class="contents-container max-w-[25rem] mt-[-60px] bg-slate-100 mx-auto rounded-lg p-5"> 
            <h4 class="text-2xl text-center font-bold text-green-600">View Fish</h4>
            <div class="relative w-full h-52 bg-white mt-3 rounded-md overflow-hidden shadow-md">
                <img class="absolute inset-0 w-full h-full" src="<?=ROOT_URL?>/public/assets/images/fish_images/<?= $fish->getFish_image() ?>" alt="<?= $fish->getFish_image() ?>">
            </div>

            <div class="bg-blue-300 mt-6 p-3 rounded-md">
                <h3 class="text-center font-bold text-blue-950 text-lg mb-3"><?= $fish->getFish_name() ?></h3>
                <h2 class="text-sm mb-2 text-gray-700"><span class="font-semibold text-blue-950">Scientific name: </span><?= $fish->getScientific_name() ?></h2>
                <h2 class="text-sm mb-2 text-gray-700"><span class="font-semibold text-blue-950">Family name: </span><?= $familyName ?></h2>
                <h2 class="text-sm mb-2 text-gray-700"><span class="font-semibold text-blue-950">Local Name(Pangasinan): </span><?= $fish->getLocal_name() ?></h2>
                <h2 class="text-sm mb-2 mt-5 text-gray-700 text-center"><span class="font-semibold text-blue-950">Fish Description</span></h2>
                <p class="text-sm leading-[1rem] text-gray-700"><?= $fish->getFish_info() ?></p>
            </div>
            
        </div>
    </div>
<?php include PAGES_PATH . '/partials/footer.php' ?>