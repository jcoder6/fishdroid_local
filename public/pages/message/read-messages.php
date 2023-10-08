<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
  <div class="bg-slate-200 p-8 w-[60%] m-auto min-h-[90vh] mt-5  rounded-lg shadow-md mb-10">
    <h4 class="text-xl font-bold text-green-500 text-center mb-8 truncate">Read Message</h4>
    
    <h4 class="text-gray-700"><span class="font-bold">From: </span><?= $message->getEmail() ?></h4>
    <h4 class="text-gray-700 mt-3"><span class="font-bold">Date: </span><?= date("F j, Y, g:i a", strtotime($message->getCreated_at()))  ?></h4>
    <div class="msg-content mt-5 mb-3 bg-slate-100 leading-8 p-4 border border-gray-300 rounded-md text-gray-700 min-h-[30rem]">
    <?= $message->getMessage() ?>
    </div>
    <div class="text-right"><a href="/messages" class="transition-all font-semibold text-[13px] text-green-600 shadow-md py-1 px-6 text-center rounded-md cursor-pointer bg-white hover:text-white hover:bg-gradient-to-r from-green-400 via-green-500 to-green-600">Okay</a></div>
    
  </div>
</div>

<?php include PAGES_PATH . '/partials/footer.php' ?>


