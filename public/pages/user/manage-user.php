<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>

      <div class="contents-container w-[70%] mt-[-60px] bg-slate-200 mx-auto rounded-lg min-h-[90vh]">
         <h4 class="text-xl text-center font-bold text-gray-700 p-3">Manage User</h4>
         <div class="manage-header bg-gradient-to-l from-green-400 via-green-500 to-green-600 flex justify-between items-center px-4 py-2">
            <p class="manage-header-title font-bold text-slate-100 text-lg">User List</p>
            <a href="/users/create" class="bg-white hover:bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 rounded-md text-sm font-semibold hover:text-white pr-4 py-1 pl-3 transition-all text-gray-700"><i class="fa-solid fa-plus pr-2"></i>Add User</a>
         </div>
         <div class="bg-slate-200 flex px-5 py-1">
            <div class="text-gray-700 text-center font-semibold no w-[5%]">No</div>
            <div class="text-gray-700 font-semibold fish-name w-[35%] pl-12">Name</div>
            <div class="text-gray-700 font-semibold img w-[35%]">Email</div>
            <div class="text-gray-700 text-center font-semibold action w-[25%]">Action</div>
         </div>
         <?php 
            $i = 0;
            foreach($users as $user) :
            $i++;
         ?>
         <div class="fish-table border-b border-b-gray-400 bg-slate-100 flex px-5 py-1">
            <div class="text-gray-800 flex justify-center items-center font-semibold no w-[5%]"><?= $i ?></div>
            <div class="text-gray-800 flex items-center fish-name w-[35%] pl-12"><?= $user->getFullname() ?></div>
            <div class="text-gray-800 flex items-center img w-[35%]"><?= $user->getEmail() ?></div>
            <div class="text-blue-700 flex justify-center gap-3 items-center font-semibold text-center action w-[25%]">
               <a href="/users/edit/<?= $user->getId() ?>" class="py-1 px-4 bg-white shadow-md rounded-sm text-green-500 hover:bg-green-500 hover:text-white transition-all"><i class="fa-solid fa-pencil"></i></a>
               <a href="/users/confirm/<?= $user->getId() ?>" class="py-1 px-4 bg-white shadow-md rounded-sm text-red-500 hover:bg-red-500 hover:text-white transition-all"><i class="fa-solid fa-trash"></i></a>
            </div>
         </div>
         <?php endforeach; ?>
      </div>
      
</div>

<?php include PAGES_PATH . '/partials/footer.php' ?>