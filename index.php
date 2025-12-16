<?php
declare(strict_types=1);


require_once __DIR__ . '/./vendor/autoload.php';

/* use GamerHouse\Controllers\HomeController;

$controller = new HomeController();
$controller->index(); */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamerHouse</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="./public/js/index.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <style type="text/tailwindcss">
        </style
</head>

<body>
    <header class="h-[60px] w-full bg-neutral-100 flex items-center justify-between px-5 text-xl text-neutral-800">
      <div class="">
            <img src="./public/image/logo.png" class="h-20 w-20" alt="">
      </div>  
      <ul class="flex flex-row items-center justify-center gap-3 cursor-pointer">
         <li class="hover:text-neutral-900">
               <i class="ri-shopping-cart-2-fill"></i>
          </li> 
          <li>
              
              <p>favorites<i class="ri-star-fill"></i></p>
          </li>
          
          <li>
               
               <p>Account<i class="ri-user-fill"></i></p>
          </li>
      </ul>
             
    </header>
</body>

</html>