<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>
<div class="admin-feature-container w-full h-screen overflow-auto px-3">
      <?php include PAGES_PATH . '/partials/body-header.php' ?>

      <div class="contents-container w-[50%] mt-[-60px] bg-slate-100 mx-auto rounded-lg min-h-[90vh]">
      <h4 class="text-xl font-bold text-green-600 p-3 pl-10 pt-6">Edit Fish</h4>
         <form class="pb-6 upload-form text-right" action="/fishes/update/<?= $fish->getId() ?>" method="post" enctype="multipart/form-data">

            <div class="flex justify-between py-3 gap-3 px-10">
               <div class="fish_name w-[50%]">
                  <label for="fish_name" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Fish name<span class="text-red-500 font-bold"> *</span></label>
                  <input type="text" value="<?= $fish->getFish_name() ?>" name="fish_name" id="fish_name" placeholder="Enter fish name" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
               </div>
               <div class="scientific_name w-[50%]">
               <label for="scientific_name" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Scientific name<span class="text-red-500 font-bold"> *</span></label>
                  <input type="text" value="<?= $fish->getScientific_name() ?>" name="scientific_name" id="scientific_name" placeholder="Enter scientific name" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
               </div>
            </div>

            <div class="flex justify-between py-3 gap-3 px-10">
               <div class="life_span w-[50%]">
                  <label for="life_span" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Local Name<span class="text-red-500 font-bold"> *</span></label>
                  <input type="text" value="<?= $fish->getLocal_name() ?>" name="life_span" id="life_span" placeholder="Enter local name" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
               </div>
               <div class="family_name w-[50%]">
                  <label for="family_name" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Family name<span class="text-red-500 font-bold"> *</span></label>
                  <input type="text" placeholder="Select the family name" value="<?= getFamilyName($fish->getFamily_name_id(), $familyNames); ?>" autocomplete="off" id="family_name" name="family_name" list="options" class="select-family-name bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
                  <datalist id="options">
                     <?php foreach($familyNames as $familyName) : ?>
                     <option data-value="<?= $familyName->getId()?>" ><?= $familyName->getFamily_name() ?></option>
                     <?php endforeach;?>  
                  </datalist>
               </div>
               <input type="hidden" id="selected_data_value" name="family_name_id" value="<?=$fish->getFamily_name_id()?>"/>
            </div>

            <div class="ml-10 mt-6">
               <div class="image-label flex items-center gap-3">
                  <span class="font-semibold text-gray-900 ">Insert fish image: </span>
                  <label for="eventPhoto" class="bg-white font-semibold text-[13px] cursor-pointer shadow-md text-green-600 py-1 px-4 rounded-md hover:text-white hover:bg-gradient-to-r from-green-400 via-green-500 to-green-600  transition-all"><i class="fa-solid fa-upload mr-3  "></i>Upload</label>
               </div>
               <input type="file" name="fish_image" id="eventPhoto" accept="image/png, image/jpg, image/jpeg" class="hidden" onChange="previewChoosenImage(event)">
               <div id="inputPhoto" class="relative h-52 w-96 border mb-5 bg-white border-slate-400 overflow-hidden rounded-md text-slate-400 flex justify-center items-center mt-6">
                  <img src="<?= ROOT_URL ?>/public/assets/images/fish_images/<?= $fish->getFish_image() ?>" alt="Fish Image">
               </div>
               <input type="hidden" name="default_img" value="<?=$fish->getFish_image()?>">
            </div>

            <div class="flex justify-between py-3 px-10">
               <div class="fish_info w-[100%]">
                  <label for="fish_info" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Fish Information<span class="text-red-500 font-bold"> *</span></label>
                  <textarea type="text" name="fish_info" id="fish_info" placeholder="Enter a description or some information about the fish..." class="bg-gray-50 block border min-h-[20rem] border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">
                     <?= $fish->getFish_info() ?>
                  </textarea>
               </div>
            </div>     
            <input type="submit" value="Update" class="mr-10 transition-all font-semibold text-[13px] text-green-600 shadow-md py-1 rounded-md p-5 cursor-pointer bg-white  hover:bg-gradient-to-r from-green-400 via-green-500 to-green-600  hover:text-white">
      </form>
            
      </div>
      
</div>
<?php include PAGES_PATH . '/partials/footer.php' ?>


<?php 
   //function for diplaying the current fish familyname
   function getFamilyName($id, $familyNames){
      $familyName = '';
      foreach($familyNames as $fn){
         if($fn->getId() == $id){
            $familyName = $fn->getFamily_name();
         }
      }
      echo $familyName;
   }
?>
