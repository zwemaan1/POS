@extends('layouts.indextext')
@section('title', 'Test')
@section('content')

            <div class="h-20 bg-bgPOS-100 p-10 w-screen fixed z-50">
                <div class="relative bottom-10 left-1">
                    <input type="text" class="m-7 rounded-full w-1/4 px-4 py-1 text-base text-blue-500 focue:outline-none font-semibold outline-none placeholder-bluePOS-200 bg-gray-200" placeholder="Search Category or Menu....">
                    <button class= "p-2 rounded-full inline-block absolute top-7 bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="text-black w-5 h-4 "><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg>
                    </button>
                </div>
            </div>
            <hr>    
            <div class="grid grid-cols-12 mt-20">
                <div class="col-span-8">

                    <div class="h-24 bg-bgPOS-100 fixe">
                        <!-- Filter Button Start -->
                       
                        <div class="pt-2 flex justify-around">
                            <button class="p-5 bg-white rounded-lg w-28 h-16 pt-3 hover:bg-blue-500 group drop-shadow-xl">
                                <span class="flex justify-center ">
                                    <svg class="fill-blue-500 group-hover:fill-white w-10 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>
                                </span>
                                <span class="font-semibold group-hover:text-white">
                                    Signature
                                </span>

                            </button>

                            <button class="p-5 bg-white rounded-lg w-28 h-16 pt-3 hover:bg-blue-500 group drop-shadow-xl">
                                <span class="flex justify-center">
                                    <svg class="fill-blue-500 group-hover:fill-white w-10 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M152.1 38.16C161.9 47.03 162.7 62.2 153.8 72.06L81.84 152.1C77.43 156.9 71.21 159.8 64.63 159.1C58.05 160.2 51.69 157.6 47.03 152.1L7.029 112.1C-2.343 103.6-2.343 88.4 7.029 79.03C16.4 69.66 31.6 69.66 40.97 79.03L63.08 101.1L118.2 39.94C127 30.09 142.2 29.29 152.1 38.16V38.16zM152.1 198.2C161.9 207 162.7 222.2 153.8 232.1L81.84 312.1C77.43 316.9 71.21 319.8 64.63 319.1C58.05 320.2 51.69 317.6 47.03 312.1L7.029 272.1C-2.343 263.6-2.343 248.4 7.029 239C16.4 229.7 31.6 229.7 40.97 239L63.08 261.1L118.2 199.9C127 190.1 142.2 189.3 152.1 198.2V198.2zM224 96C224 78.33 238.3 64 256 64H480C497.7 64 512 78.33 512 96C512 113.7 497.7 128 480 128H256C238.3 128 224 113.7 224 96V96zM224 256C224 238.3 238.3 224 256 224H480C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H256C238.3 288 224 273.7 224 256zM160 416C160 398.3 174.3 384 192 384H480C497.7 384 512 398.3 512 416C512 433.7 497.7 448 480 448H192C174.3 448 160 433.7 160 416zM0 416C0 389.5 21.49 368 48 368C74.51 368 96 389.5 96 416C96 442.5 74.51 464 48 464C21.49 464 0 442.5 0 416z"/></svg>
                                </span>
                                <span class="font-semibold group-hover:text-white">
                                    All
                                </span>
                            </button>

                            <button class="p-5 bg-white rounded-lg w-28 h-16 pt-3 hover:bg-blue-500 group drop-shadow-xl">
                                <span class="flex justify-center">
                                    <svg class="fill-blue-500 group-hover:fill-white w-10 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M152.1 38.16C161.9 47.03 162.7 62.2 153.8 72.06L81.84 152.1C77.43 156.9 71.21 159.8 64.63 159.1C58.05 160.2 51.69 157.6 47.03 152.1L7.029 112.1C-2.343 103.6-2.343 88.4 7.029 79.03C16.4 69.66 31.6 69.66 40.97 79.03L63.08 101.1L118.2 39.94C127 30.09 142.2 29.29 152.1 38.16V38.16zM152.1 198.2C161.9 207 162.7 222.2 153.8 232.1L81.84 312.1C77.43 316.9 71.21 319.8 64.63 319.1C58.05 320.2 51.69 317.6 47.03 312.1L7.029 272.1C-2.343 263.6-2.343 248.4 7.029 239C16.4 229.7 31.6 229.7 40.97 239L63.08 261.1L118.2 199.9C127 190.1 142.2 189.3 152.1 198.2V198.2zM224 96C224 78.33 238.3 64 256 64H480C497.7 64 512 78.33 512 96C512 113.7 497.7 128 480 128H256C238.3 128 224 113.7 224 96V96zM224 256C224 238.3 238.3 224 256 224H480C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H256C238.3 288 224 273.7 224 256zM160 416C160 398.3 174.3 384 192 384H480C497.7 384 512 398.3 512 416C512 433.7 497.7 448 480 448H192C174.3 448 160 433.7 160 416zM0 416C0 389.5 21.49 368 48 368C74.51 368 96 389.5 96 416C96 442.5 74.51 464 48 464C21.49 464 0 442.5 0 416z"/></svg>
                                </span>
                                <span class="font-semibold group-hover:text-white">
                                    All
                                </span>

                            </button>

                            <button class="p-5 bg-white rounded-lg w-28 h-16 pt-3 hover:bg-blue-500 group drop-shadow-xl">
                                <span class="flex justify-center">
                                    <svg class=" fill-blue-500 group-hover:fill-white w-10 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M512 168.9c0 1.766-.0229 3.398-.0768 5.164c-16.91-9.132-35.51-13.76-53.96-13.76c-82.65 0-105.5 74.17-105.5 105.4c0 27.04 9.923 54.43 29.63 76.25c-19.52 6.629-39.99 9.997-60.62 9.997l-87.18 .0038l-40.59 40.49c-6.104 6.103-8.921 14.01-8.921 22.17c0 13.98 7.244 17.1 7.244 37.03C192.1 485.4 164.6 512 131.7 512c-15.63 0-31.11-6.055-42.72-17.8c-11.55-11.46-16.82-26.31-16.82-41.26c0-4.948 .575-9.903 1.695-14.75c-4.842 1.11-9.793 1.681-14.72 1.681c-42.15 0-59.13-36.64-59.13-59.5c0-33.43 27.15-60.34 60.39-60.34c18.97 0 22.97 7.219 36.96 7.219c8.159 0 16.04-2.811 22.14-8.914l40.57-40.47L160.1 191.1c0-63.1 27.79-107 63.17-142.4c33.13-33.06 76.39-49.59 119.7-49.59s86.79 16.53 119.9 49.59C495.9 82.5 512 125.7 512 168.9z"/></svg>
                                </span>
                                <span class="font-semibold group-hover:text-white">
                                    Chicken
                                </span>

                            </button>

                            <button class="p-5 bg-white rounded-lg w-28 h-16 pt-3 hover:bg-blue-500 group drop-shadow-xl">
                                <span class="flex justify-center">
                                    <svg class="fill-blue-500 group-hover:fill-white w-10 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M180.5 141.5C219.7 108.5 272.6 80 336 80C399.4 80 452.3 108.5 491.5 141.5C530.5 174.5 558.3 213.1 572.4 241.3C577.2 250.5 577.2 261.5 572.4 270.7C558.3 298 530.5 337.5 491.5 370.5C452.3 403.5 399.4 432 336 432C272.6 432 219.7 403.5 180.5 370.5C164.3 356.7 150 341.9 137.8 327.3L48.12 379.6C35.61 386.9 19.76 384.9 9.474 374.7C-.8133 364.5-2.97 348.7 4.216 336.1L50 256L4.216 175.9C-2.97 163.3-.8133 147.5 9.474 137.3C19.76 127.1 35.61 125.1 48.12 132.4L137.8 184.7C150 170.1 164.3 155.3 180.5 141.5L180.5 141.5zM416 224C398.3 224 384 238.3 384 256C384 273.7 398.3 288 416 288C433.7 288 448 273.7 448 256C448 238.3 433.7 224 416 224z"/></svg>
                                </span>
                                <span class="font-semibold group-hover:text-white">
                                    Seafood
                                </span>

                            </button>

                            <button class="p-5 bg-white rounded-lg w-28 h-16 pt-3 hover:bg-blue-500 group drop-shadow-xl">
                                <span class="flex justify-center">
                                    <svg class="fill-blue-500 group-hover:fill-white w-10 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M502 57.63C523.3 36.38 508.3 0 478.3 0H33.72C3.711 0-11.29 36.38 9.962 57.63l214 214V448H175.1c-26.51 0-47.1 21.49-47.1 48c0 8.836 7.164 16 16 16h224c8.836 0 16-7.164 16-16c0-26.51-21.49-48-48-48h-47.1V271.6L502 57.63zM405.1 64l-64.01 64H170.9L106.9 64H405.1z"/></svg>
                                
                                </span>
                                <span class="font-semibold group-hover:text-white">
                                    Drink
                                </span>

                            </button>
                        </div>
                        <!-- Filter Button End -->
                    </div>

                    <div class="h-20 bg-bgPOS-100 p-5 relative">
                        <div>
                            <button type="button" class="absolute right-2 bg-white shadow-lg text-black font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2 hover:text-white hover:bg-blue-500 group">
                            <svg class="mr-2 -ml-1 w-5 h-5 fill-blue-500 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"/></svg>
                                Add New Item
                            </button>
                        </div>
                    </div>
<!-- -------------------------------------------------------------------------------------------------------------- -->

                    <div class=" bg-bgPOS-100">
                        <!-- Card Start -->
                        <div>

                            <div class="grid grid-cols-4 gap-10 p-5">
                                <div class="max-w-xs bg-white rounded-lg border-2 border-blue-500 shadow-lg ">
                                    <div class="p-2">
                                        <a href="#" class="">
                                            <img class="rounded-t-lg" src="img/f1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="p-2 flex gap-24">
                                        <div>
                                                <p class="font-bold text-blue-500">Pizza</p>
                                                <p class="font-bold text-black">$8.5</p>
                                        </div>
                                        <div class="justify-end">
                                            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                                            <span class="sr-only">Open dropdown</span>
                                            <svg class="fill-blue-500 w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="max-w-xs bg-white rounded-lg border-2 border-blue-500 shadow-md ">
                                    <div class="p-2">
                                        <a href="#" class="">
                                            <img class="rounded-t-lg" src="img/f1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <p class="font-bold text-blue-500">Pizza</p>
                                        <p class="font-bold text-black">$8.5</p>
                                    </div>
                                </div>

                                <div class="max-w-xs bg-white rounded-lg border-2 border-blue-500 shadow-md ">
                                    <div class="p-2">
                                        <a href="#" class="">
                                            <img class="rounded-t-lg" src="img/f1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <p class="font-bold text-blue-500">Pizza</p>
                                        <p class="font-bold text-black">$8.5</p>
                                    </div>
                                </div>

                                <div class="max-w-xs bg-white rounded-lg border-2 border-blue-500 shadow-md ">
                                    <div class="p-2">
                                        <a href="#" class="">
                                            <img class="rounded-t-lg" src="img/f1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <p class="font-bold text-blue-500">Pizza</p>
                                        <p class="font-bold text-black">$8.5</p>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-4 gap-10 p-5">

                                <div class="max-w-xs bg-white rounded-lg border-2 border-blue-500 shadow-lg ">
                                    <div class="p-2">
                                        <a href="#" class="">
                                            <img class="rounded-t-lg" src="img/f1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="p-2 flex gap-24">
                                        <div>
                                                <p class="font-bold text-blue-500">Pizza</p>
                                                <p class="font-bold text-black">$8.5</p>
                                        </div>
                                        <div class="justify-end">
                                            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                                                <span class="sr-only">Open dropdown</span>
                                                <svg class="fill-blue-500 w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="max-w-xs bg-white rounded-lg border-2 border-blue-500 shadow-md ">
                                    <div class="p-2">
                                        <a href="#" class="">
                                            <img class="rounded-t-lg" src="img/f1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <p class="font-bold text-blue-500">Pizza</p>
                                        <p class="font-bold text-black">$8.5</p>
                                    </div>
                                </div>

                                <div class="max-w-xs bg-white rounded-lg border-2 border-blue-500 shadow-md ">
                                    <div class="p-2">
                                        <a href="#" class="">
                                            <img class="rounded-t-lg" src="img/f1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <p class="font-bold text-blue-500">Pizza</p>
                                        <p class="font-bold text-black">$8.5</p>
                                    </div>
                                </div>

                                <div class="max-w-xs bg-white rounded-lg border-2 border-blue-500 shadow-md ">
                                    <div class="p-2">
                                        <a href="#" class="">
                                            <img class="rounded-t-lg" src="img/f1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <p class="font-bold text-blue-500">Pizza</p>
                                        <p class="font-bold text-black">$8.5</p>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="grid grid-cols-4 gap-10 p-5">
                                
                                <div class="max-w-xs bg-white rounded-lg border-2 border-blue-500 shadow-md ">
                                    <div class="p-2">
                                        <a href="#" class="">
                                            <img class="rounded-t-lg" src="img/f1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="p-2">
                                            <p class="font-bold text-blue-500">Pizza</p>
                                            <p class="font-bold text-black">$8.5</p>
                                    </div>
                                </div>

                                <div class="max-w-xs bg-white rounded-lg border-2 border-blue-500 shadow-md ">
                                    <div class="p-2">
                                        <a href="#" class="">
                                            <img class="rounded-t-lg" src="img/f1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <p class="font-bold text-blue-500">Pizza</p>
                                        <p class="font-bold text-black">$8.5</p>
                                    </div>
                                </div>

                                <div class="max-w-xs bg-white rounded-lg border-2 border-blue-500 shadow-md ">
                                    <div class="p-2">
                                        <a href="#" class="">
                                            <img class="rounded-t-lg" src="img/f1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <p class="font-bold text-blue-500">Pizza</p>
                                        <p class="font-bold text-black">$8.5</p>
                                    </div>
                                </div>

                                <div class="max-w-xs bg-white rounded-lg border-2 border-blue-500 shadow-md ">
                                    <div class="p-2">
                                        <a href="#" class="">
                                            <img class="rounded-t-lg" src="img/f1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <p class="font-bold text-blue-500">Pizza</p>
                                        <p class="font-bold text-black">$8.5</p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <!-- Card End -->
                    </div>
<!-- -------------------------------------------------------------------------------------------------------------- -->
                </div>
                <div class="col-span-4 bg-bgPOS-100 p-5">
                    <!-- Order Menu Start -->
                    <div class="bg-white rounded-lg p-4">
                        <h1 class="font-semibold">New Order List</h1>
                        <hr>
                        <!-- Side Menu Start -->
                        <div class="mt-5">
                            <div class="bg-bluePOS-100 flex px-4 rounded-lg">
                                    <div class="p-2">
                                        <img class=" w-16 h-16 rounded-full" src="img/f1.jpg" alt="IMG" />
                                    </div>
                                    <div>
                                        <h1 class="text-white font-semibold mt-2">Pizza</h1>

                                        <div class="mt-2">
                                            <button class="w-5 h-5 bg-white rounded-full"><span>a</span></button>
                                            <button class="w-10 h-5 bg-white rounded-full">a</button>
                                            <button class="w-5 h-5 bg-white rounded-full">a</button>
                                        </div>  
                                    </div>

                                    <div class="w-24 text-center items-center pt-10">
                                    
                                    </div>

                                    <div class="border-y-4 border-x-2 border-y-white  flex items-center"><span class="px-3 font-semibold text-white text-center  w-20">$328.5</span>
                                    </div>
                                    <a href="#" class="relative">
                                        <svg class="w-10 h-10 absolute top-5 left-2 fill-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg>
                                    </a>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="bg-bluePOS-100 flex px-4 rounded-lg">
                                    <div class="p-2">
                                        <img class=" w-16 h-16 rounded-full" src="img/f1.jpg" alt="IMG" />
                                    </div>
                                    <div>
                                        <h1 class="text-white font-semibold mt-2">Pizza</h1>

                                        <div class="mt-2">
                                            <button class="w-5 h-5 bg-white rounded-full"><span>a</span></button>
                                            <button class="w-10 h-5 bg-white rounded-full">a</button>
                                            <button class="w-5 h-5 bg-white rounded-full">a</button>
                                        </div>  
                                    </div>

                                    <div class="w-24 text-center items-center pt-10">
                                    
                                    </div>

                                    <div class="border-y-4 border-x-2 border-y-white  flex items-center"><span class="px-3 font-semibold text-white text-center  w-20">$328.5</span>
                                    </div>
                                    <a href="#" class="relative">
                                        <svg class="w-10 h-10 absolute top-5 left-2 fill-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg>
                                    </a>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="bg-bluePOS-100 flex px-4 rounded-lg">
                                    <div class="p-2">
                                        <img class=" w-16 h-16 rounded-full" src="img/f1.jpg" alt="IMG" />
                                    </div>
                                    <div>
                                        <h1 class="text-white font-semibold mt-2">Pizza</h1>

                                        <div class="mt-2">
                                            <button class="w-5 h-5 bg-white rounded-full"><span>a</span></button>
                                            <button class="w-10 h-5 bg-white rounded-full">a</button>
                                            <button class="w-5 h-5 bg-white rounded-full">a</button>
                                        </div>  
                                    </div>

                                    <div class="w-24 text-center items-center pt-10">
                                    
                                    </div>

                                    <div class="border-y-4 border-x-2 border-y-white  flex items-center"><span class="px-3 font-semibold text-white text-center  w-20">$328.5</span>
                                    </div>
                                    <a href="#" class="relative">
                                        <svg class="w-10 h-10 absolute top-5 left-2 fill-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg>
                                    </a>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="bg-bluePOS-100 flex px-4 rounded-lg">
                                    <div class="p-2">
                                        <img class=" w-16 h-16 rounded-full" src="img/f1.jpg" alt="IMG" />
                                    </div>
                                    <div>
                                        <h1 class="text-white font-semibold mt-2">Pizza</h1>

                                        <div class="mt-2">
                                            <button class="w-5 h-5 bg-white rounded-full"><span>a</span></button>
                                            <button class="w-10 h-5 bg-white rounded-full">a</button>
                                            <button class="w-5 h-5 bg-white rounded-full">a</button>
                                        </div>  
                                    </div>

                                    <div class="w-24 text-center items-center pt-10">
                                    
                                    </div>

                                    <div class="border-y-4 border-x-2 border-y-white  flex items-center"><span class="px-3 font-semibold text-white text-center  w-20">$328.5</span>
                                    </div>
                                    <a href="#" class="relative">
                                        <svg class="w-10 h-10 absolute top-5 left-2 fill-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg>
                                    </a>
                            </div>
                        </div>
                        
                        <hr class="my-2 h-5">


                    </div>
                    <!-- Order List Menu End -->
                </div>
            </div>
@endsection