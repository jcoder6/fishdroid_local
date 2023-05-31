<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="<?= ROOT_URL ?>/public/assets/images/logo-fishdroid.webp">
   <link rel="stylesheet" href="<?= ROOT_URL ?>/public/assets/style/output.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
   <title>Index</title>
</head>
<body class="flex overflow-hidden">
<!-- <div class="message fixed z-10 right-5 p-4 rounded-lg text-white font-semibold shadow-md text-md transition-all min-w-[25vw] text-center opacity-0 translate-x-[120%] top-5" data-messageType='error'>Message</div> -->
<?php
   if(!isset($_SESSION['user-logged'])){
      header('Location: ' . ROOT_URL);
   }

   if (isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
   }
?>