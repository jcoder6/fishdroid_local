<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>
<?php //var_dump($user)?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">

      <?php include PAGES_PATH . '/partials/body-header.php'?>
      <section class="w-[100%] mt-[-56px] bg-slate-100 mx-auto pb-10 h-[42rem] flex justify-center items-center">
            <div class="relative profile p-8 bg-white shadow-md gap-8  border border-gray-300 rounded-md flex justify-center items-center">
                  <div class="relative img-container h-52 w-52 overflow-hidden rounded-full">
                        <img class="absolute w-full h-full inset-0" src="<?= ROOT_URL ?>/public/assets/images/user_images/<?= $user->getImg() ?>" alt="User Image">
                  </div>
                  <div class="info-container border-l border-gray-300 pl-8 h-[90%]">
                        <h3 class=" font-bold text-[2rem] text-gray-800"><?= $user->getFullname() ?></h3>
                        <h4 class="self-start text-md text-gray-700"><span class="font-bold">Role: </span><?= $role ?></h4>
                        <h4 class="self-start text-md text-gray-700"><span class="font-bold">Username: </span><?= $user->getUsername() ?></h4>
                        <h4 class="self-start text-md text-gray-700"><span class="font-bold">Email: </span><?= $user->getEmail() ?></h4>
                        <a href="/users/edit/<?= $user->getId() ?>" class="absolute bottom-2 right-2 bg-green-400 py-2 px-8 text-xs rounded-sm hover:bg-green-500 transition-all text-center"><i class="ml-[-10px] pr-3 fa-solid fa-pencil"></i>Edit</a>
                  </div>
            </div>


      </section>

      
</div>
<?php include PAGES_PATH . '/partials/footer.php' ?>