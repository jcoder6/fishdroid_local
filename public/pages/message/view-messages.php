<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
  <div class="msg-container bg-white p-4 w-full m-auto min-h-[100vh] mt-5  rounded-lg shadow-md mb-10">
    <h4 class="text-xl font-bold text-green-500 text-center mb-5 truncate">Messages</h4>
    <ul>
      <?php foreach($messages as $message): ?>
      <li class="<?= $message->isRead(); ?> text-xs text-gray-700 p-2 pl-5 hover:bg-slate-100 border-b border-gray-700 transition-all">
        <a href="/messages/read/<?= $message->getId(); ?>" class="flex items-center gap-3">
          <div class="w-[5%] text-center">
            <span class="text-4xl"><?= $message->msgIcon() ?></span>
          </div>
          <div class="w-[95%]">
            <h5 class=""><span class="font-bold">From: </span><?= $message->getEmail(); ?><span class="text-xl text-red-600 <?= $message->msgNotif() ?>"> *</span></h5>
            <p class="truncate"><?= $message->getMessage(); ?></p>
            <p class="text-right mr-3 mt-2"><?= $message->getCreated_at();?></p>
          </div>
          </a>
      </li>
      
      <?php endforeach; ?>
      <!-- <li class="text-xs text-gray-700 p-2 pl-5 hover:bg-slate-100 border-b border-gray-700 transition-all">
        <a href="/messages/read/1" class=" inset-0 bg-red-500">
          <h5 class="mt-2"><span class="font-bold">From: </span>jdorego06@gmail.com</h5>
          <p class="max-w-[80rem] truncate">Lorem ipsum dolor, sit amet consectetur adipisicing   elit. Quam autem veniam sint. Non doloribus, dolore quo laudantium voluptatum dignissimos neque totam hic voluptates maxime qui beatae temporibus, necessitatibus saepe, repellat recusandae! Inventore saepe minima nam eveniet, in aspernatur optio. Architecto repudiandae minus magni delectus dolorum velit dolores mollitia quae exercitationem.</p>
          <p class="text-right mr-3 mt-2">June 15, 2023 - 07:55pm</p>
        </a>
      </li> -->

    </ul>
  </div>
      
      
</div>

<?php include PAGES_PATH . '/partials/footer.php' ?>


