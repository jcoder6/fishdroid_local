<?php include PAGES_PATH . '/partials/header.php' ?>
<?php include PAGES_PATH . '/partials/sidebar.php' ?>

<div class="admin-feature-container w-full h-screen overflow-auto px-3">
  <?php include PAGES_PATH . '/partials/body-header.php'?>
  <section class="w-full mt-[-56px] p-4 bg-slate-100 flex justify-center items-center">
    <div class="recipe-container w-[60%] bg-blue-200 rounded-md shadow-md p-4">
      <div class="img-container relative h-[20rem] w-fulL rounded-md shadow-md">
        <img src="<?= ROOT_URL ?>/public/assets/images/recipe_images/<?= $recipe->getRecipe_img() ?>" alt="Recipe Image" class="absolute h-full w-full overflow-hidden inset-0">
      </div>
      <h4 class="font-bold text-center mt-3 text-2xl text-gray-700 mb-2"><?= $recipe->getRecipe_name() ?></h4>
      <div><?= $recipe->getRecipe_steps() ?></div>
    </div>
  </section>
</div>