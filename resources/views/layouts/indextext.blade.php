<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
<div class="flex">
        <aside class="w-44 fixed left-0 top-0 h-screen bg-bluePOS-100 p-10 text-center">
        <div class="inline-flex text-lg">
                <span class="mr-2 text-red-500 font-bold text-lg">
                POS 
                </span>
                 
                <span class="font-bold text-lg">
                    System
                </span>
            </div>
            <div class="mt-10">
                <ul class="text-center">
                    <li class="mt-10">
                        <a href="/tables">
                            <button href="/tables" class="p-5 bg-white rounded-lg w-20 h-20 pt-3 hover:bg-blue-500 group">
                            <span class="">
                                <svg class="fill-blue-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M448 32C483.3 32 512 60.65 512 96V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H448zM152 96H64V160H152V96zM208 160H296V96H208V160zM448 96H360V160H448V96zM64 288H152V224H64V288zM296 224H208V288H296V224zM360 288H448V224H360V288zM152 352H64V416H152V352zM208 416H296V352H208V416zM448 352H360V416H448V352z"/></svg>
                            </span>

                            <span class="font-semibold group-hover:text-white">
                                Table
                            </span>
                    
                            </button>
                        </a>
                    </li>
                    <li class="mt-7">
                            <a href="/testRes">
                            <button href="/food" class="p-5 bg-white rounded-lg w-20 h-20 pt-3 hover:bg-blue-500 group">
                                <span class="">
                                    <svg class="fill-blue-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 128C96.53 128 97.07 128 97.6 128C105 91.49 137.3 64 176 64C190.1 64 204.1 68.1 216.9 75.25C230.2 49.55 257.1 32 288 32C318.9 32 345.8 49.56 359.1 75.25C371 68.1 385 64 400 64C438.7 64 470.1 91.49 478.4 128C478.9 128 479.5 128 480 128C515.3 128 544 156.7 544 192C544 203.7 540.9 214.6 535.4 224H40.56C35.12 214.6 32 203.7 32 192C32 156.7 60.65 128 96 128H96zM16 283.4C16 268.3 28.28 256 43.43 256H532.6C547.7 256 560 268.3 560 283.4C560 356.3 512.6 418.2 446.9 439.8C447.6 442.4 448 445.2 448 448C448 465.7 433.7 480 416 480H160C142.3 480 128 465.7 128 448C128 445.2 128.4 442.4 129.1 439.8C63.4 418.2 16 356.3 16 283.4H16z"/></svg>
                                </span>
                                <span class="font-semibold group-hover:text-white ">
                                    Food
                                </span>
                            </button>
                            </a>
                    </li>
                </ul>
            </div>
        </aside>
        <main class="flex-1 ml-44">
            @yield('content')
        </main>
    </div>

</body>

</html>
