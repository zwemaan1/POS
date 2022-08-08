@extends('layouts.indextext')
@section('title', 'Test')
@section('content')

            

            <div class="h-20 bg-bgPOS-100 p-10 w-screen fixed z-30">
                <div class="relative bottom-10 left-1">
                    <input type="text" class="m-7 rounded-full w-1/4 px-4 py-1 text-base text-blue-500 focue:outline-none font-semibold outline-none placeholder-bluePOS-200 bg-gray-200" placeholder="Search Category or Menu....">
                    <button class= "p-2 rounded-full inline-block absolute top-7 bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="text-black w-5 h-4 "><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg>
                    </button>
                </div>
            </div>
            <hr>    
            <div class="grid grid-cols-12 mt-20 h-screen">
                <div class="col-span-8 bg-bgPOS-100">
                    <!-- Left Table Side Start -->
                   <div class="bg-white p-4 rounded-lg mx-4 my-5">
                        <div class="mr-50"><label class="items-center font-bold text-lg text-black ">Restaurant</label></div>
                        <hr class="mt-2">
                        <!-- Tables Start -->
                        <div class="grid grid-cols-5 gap-4 p-3">

                           <button class="h-32 bg-blue-800 rounded-lg relative" onclick="red()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 1</p>
                            <svg class="fill-white h-7 w-7 absolute bottom-3 left-2 animate-pulse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M208 48C208 74.51 186.5 96 160 96C133.5 96 112 74.51 112 48C112 21.49 133.5 0 160 0C186.5 0 208 21.49 208 48zM152 352V480C152 497.7 137.7 512 120 512C102.3 512 88 497.7 88 480V256.9L59.43 304.5C50.33 319.6 30.67 324.5 15.52 315.4C.3696 306.3-4.531 286.7 4.573 271.5L62.85 174.6C80.2 145.7 111.4 128 145.1 128H174.9C208.6 128 239.8 145.7 257.2 174.6L315.4 271.5C324.5 286.7 319.6 306.3 304.5 315.4C289.3 324.5 269.7 319.6 260.6 304.5L232 256.9V480C232 497.7 217.7 512 200 512C182.3 512 168 497.7 168 480V352L152 352z"/></svg>
                           </button>

                           <button class="h-32 bg-table-100 rounded-lg relative" onclick="green()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 2</p>
                         
                           </button>


                           <button class="h-32 bg-blue-800 rounded-lg relative" onclick="red()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 3</p>
                            <svg class="fill-white h-7 w-7 absolute bottom-3 left-2 animate-pulse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M208 48C208 74.51 186.5 96 160 96C133.5 96 112 74.51 112 48C112 21.49 133.5 0 160 0C186.5 0 208 21.49 208 48zM152 352V480C152 497.7 137.7 512 120 512C102.3 512 88 497.7 88 480V256.9L59.43 304.5C50.33 319.6 30.67 324.5 15.52 315.4C.3696 306.3-4.531 286.7 4.573 271.5L62.85 174.6C80.2 145.7 111.4 128 145.1 128H174.9C208.6 128 239.8 145.7 257.2 174.6L315.4 271.5C324.5 286.7 319.6 306.3 304.5 315.4C289.3 324.5 269.7 319.6 260.6 304.5L232 256.9V480C232 497.7 217.7 512 200 512C182.3 512 168 497.7 168 480V352L152 352z"/></svg>
                           </button>

                           <button class="h-32 bg-table-100 rounded-lg relative" onclick="green()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 4</p>
                           
                           </button>

                           <button class="h-32 bg-table-100 rounded-lg relative" onclick="green()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 5</p>
                           
                           </button>
                        </div>

                        <div class="grid grid-cols-5 gap-4 p-3">

                           <button class="h-32 bg-blue-800 rounded-lg relative" onclick="red()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 1</p>
                            <svg class="fill-white h-7 w-7 absolute bottom-3 left-2 animate-pulse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M208 48C208 74.51 186.5 96 160 96C133.5 96 112 74.51 112 48C112 21.49 133.5 0 160 0C186.5 0 208 21.49 208 48zM152 352V480C152 497.7 137.7 512 120 512C102.3 512 88 497.7 88 480V256.9L59.43 304.5C50.33 319.6 30.67 324.5 15.52 315.4C.3696 306.3-4.531 286.7 4.573 271.5L62.85 174.6C80.2 145.7 111.4 128 145.1 128H174.9C208.6 128 239.8 145.7 257.2 174.6L315.4 271.5C324.5 286.7 319.6 306.3 304.5 315.4C289.3 324.5 269.7 319.6 260.6 304.5L232 256.9V480C232 497.7 217.7 512 200 512C182.3 512 168 497.7 168 480V352L152 352z"/></svg>
                           </button>

                           <button class="h-32 bg-table-100 rounded-lg relative" onclick="green()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 2</p>
                         
                           </button>


                           <button class="h-32 bg-blue-800 rounded-lg relative" onclick="red()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 3</p>
                            <svg class="fill-white h-7 w-7 absolute bottom-3 left-2 animate-pulse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M208 48C208 74.51 186.5 96 160 96C133.5 96 112 74.51 112 48C112 21.49 133.5 0 160 0C186.5 0 208 21.49 208 48zM152 352V480C152 497.7 137.7 512 120 512C102.3 512 88 497.7 88 480V256.9L59.43 304.5C50.33 319.6 30.67 324.5 15.52 315.4C.3696 306.3-4.531 286.7 4.573 271.5L62.85 174.6C80.2 145.7 111.4 128 145.1 128H174.9C208.6 128 239.8 145.7 257.2 174.6L315.4 271.5C324.5 286.7 319.6 306.3 304.5 315.4C289.3 324.5 269.7 319.6 260.6 304.5L232 256.9V480C232 497.7 217.7 512 200 512C182.3 512 168 497.7 168 480V352L152 352z"/></svg>
                           </button>

                           <button class="h-32 bg-table-100 rounded-lg relative" onclick="green()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 4</p>
                           
                           </button>

                           <button class="h-32 bg-table-100 rounded-lg relative" onclick="green()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 5</p>
                           
                           </button>
                        </div>

                        <div class="grid grid-cols-5 gap-4 p-3">

                           <button class="h-32 bg-blue-800 rounded-lg relative hover:border-4" onclick="red()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 1</p>
                            <svg class="fill-white h-7 w-7 absolute bottom-3 left-2 animate-pulse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M208 48C208 74.51 186.5 96 160 96C133.5 96 112 74.51 112 48C112 21.49 133.5 0 160 0C186.5 0 208 21.49 208 48zM152 352V480C152 497.7 137.7 512 120 512C102.3 512 88 497.7 88 480V256.9L59.43 304.5C50.33 319.6 30.67 324.5 15.52 315.4C.3696 306.3-4.531 286.7 4.573 271.5L62.85 174.6C80.2 145.7 111.4 128 145.1 128H174.9C208.6 128 239.8 145.7 257.2 174.6L315.4 271.5C324.5 286.7 319.6 306.3 304.5 315.4C289.3 324.5 269.7 319.6 260.6 304.5L232 256.9V480C232 497.7 217.7 512 200 512C182.3 512 168 497.7 168 480V352L152 352z"/></svg>
                           </button>

                           <button class="h-32 bg-table-100 rounded-lg relative" onclick="green()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 2</p>
                         
                           </button>


                           <button class="h-32 bg-blue-800 rounded-lg relative" onclick="red()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 3</p>
                            <svg class="fill-white h-7 w-7 absolute bottom-3 left-2 animate-pulse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M208 48C208 74.51 186.5 96 160 96C133.5 96 112 74.51 112 48C112 21.49 133.5 0 160 0C186.5 0 208 21.49 208 48zM152 352V480C152 497.7 137.7 512 120 512C102.3 512 88 497.7 88 480V256.9L59.43 304.5C50.33 319.6 30.67 324.5 15.52 315.4C.3696 306.3-4.531 286.7 4.573 271.5L62.85 174.6C80.2 145.7 111.4 128 145.1 128H174.9C208.6 128 239.8 145.7 257.2 174.6L315.4 271.5C324.5 286.7 319.6 306.3 304.5 315.4C289.3 324.5 269.7 319.6 260.6 304.5L232 256.9V480C232 497.7 217.7 512 200 512C182.3 512 168 497.7 168 480V352L152 352z"/></svg>
                           </button>

                           <button class="h-32 bg-table-100 rounded-lg relative" onclick="green()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 4</p>
                           
                           </button>

                           <button class="h-32 bg-table-100 rounded-lg relative" onclick="green()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 5</p>
                           
                           </button>
                        </div>

                        <div class="grid grid-cols-5 gap-4 p-3">

                           <button class="h-32 bg-blue-800 rounded-lg relative" onclick="red()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 1</p>
                            <svg class="fill-white h-7 w-7 absolute bottom-3 left-2 animate-pulse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M208 48C208 74.51 186.5 96 160 96C133.5 96 112 74.51 112 48C112 21.49 133.5 0 160 0C186.5 0 208 21.49 208 48zM152 352V480C152 497.7 137.7 512 120 512C102.3 512 88 497.7 88 480V256.9L59.43 304.5C50.33 319.6 30.67 324.5 15.52 315.4C.3696 306.3-4.531 286.7 4.573 271.5L62.85 174.6C80.2 145.7 111.4 128 145.1 128H174.9C208.6 128 239.8 145.7 257.2 174.6L315.4 271.5C324.5 286.7 319.6 306.3 304.5 315.4C289.3 324.5 269.7 319.6 260.6 304.5L232 256.9V480C232 497.7 217.7 512 200 512C182.3 512 168 497.7 168 480V352L152 352z"/></svg>
                           </button>

                           <button class="h-32 bg-table-100 rounded-lg relative" onclick="green()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 2</p>
                         
                           </button>


                           <button class="h-32 bg-blue-800 rounded-lg relative" onclick="red()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 3</p>
                            <svg class="fill-white h-7 w-7 absolute bottom-3 left-2 animate-pulse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M208 48C208 74.51 186.5 96 160 96C133.5 96 112 74.51 112 48C112 21.49 133.5 0 160 0C186.5 0 208 21.49 208 48zM152 352V480C152 497.7 137.7 512 120 512C102.3 512 88 497.7 88 480V256.9L59.43 304.5C50.33 319.6 30.67 324.5 15.52 315.4C.3696 306.3-4.531 286.7 4.573 271.5L62.85 174.6C80.2 145.7 111.4 128 145.1 128H174.9C208.6 128 239.8 145.7 257.2 174.6L315.4 271.5C324.5 286.7 319.6 306.3 304.5 315.4C289.3 324.5 269.7 319.6 260.6 304.5L232 256.9V480C232 497.7 217.7 512 200 512C182.3 512 168 497.7 168 480V352L152 352z"/></svg>
                           </button>

                           <button class="h-32 bg-table-100 rounded-lg relative" onclick="green()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 4</p>
                           
                           </button>

                           <button class="h-32 bg-table-100 rounded-lg relative" onclick="green()">
                            <p class="absolute top-1 left-2 text-lg font-bold text-white">Table 5</p>
                           
                           </button>
                        </div>
               
                        <!-- Tables End -->
                   </div>
                   <!-- Left Table Side End -->
                </div>

                <div class="col-span-4 bg-bgPOS-100 p-5 hidden" id="GreenOrderList">
                    <!-- Order Menu Start -->
                    <div class="bg-white rounded-lg p-4">
                        <h1 class="font-semibold">New Order List</h1>
                        <hr>
                    <div class="mt-2">
                            <Button class="p-3 w-30 bg-bluePOS-100 rounded-lg text-white font-semibold">Merge Table</Button> 
                            <Button class="p-3 w-30 bg-bluePOS-100 rounded-lg text-white font-semibold">Go To menu</Button> 
                        </div>
                    </div>
                    <!-- Order List Menu End -->
                </div>

                <div class="col-span-4 bg-bgPOS-100 p-5" id="RedOrderList">
                    <!-- Order Menu Start -->

                    <div class="bg-white rounded-lg p-4">
                        <h1 class="font-semibold">View Order List</h1>
                        <hr>
                        <!-- Side Menu Start -->
                        <div class="bg-bluePOS-100 w-full mt-2 rounded-lg p-2 relative">
                            
                                <img class="rounded-lg w-14 h-14" src="img/f1.jpg" alt="IMG" />

                                <p class="absolute top-1 left-24 text-lg text-white font-bold">Pizza</p>
                                <p class="absolute top-8 left-24 text-lg text-white font-bold">Qty:1</p>
                                <p class="absolute top-5 right-24 text-lg text-white font-bold">$8.5</p>
                            
                        </div>

                        <div class="bg-bluePOS-100 w-full mt-2 rounded-lg p-2 relative">
                            
                            <img class="rounded-lg w-14 h-14" src="img/f1.jpg" alt="IMG" />

                            <p class="absolute top-1 left-24 text-lg text-white font-bold">Pizza</p>
                            <p class="absolute top-8 left-24 text-lg text-white font-bold">Qty:1</p>
                            <p class="absolute top-5 right-24 text-lg text-white font-bold">$8.5</p>
                        
                    </div>

                    <div class="bg-bluePOS-100 w-full mt-2 rounded-lg p-2 relative">
                            
                            <img class="rounded-lg w-14 h-14" src="img/f1.jpg" alt="IMG" />

                            <p class="absolute top-1 left-24 text-lg text-white font-bold">Pizza</p>
                            <p class="absolute top-8 left-24 text-lg text-white font-bold">Qty:1</p>
                            <p class="absolute top-5 right-24 text-lg text-white font-bold">$8.5</p>
                        
                    </div>

                    <div class="bg-bluePOS-100 w-full mt-2 rounded-lg p-2 relative">
                            
                            <img class="rounded-lg w-14 h-14" src="img/f1.jpg" alt="IMG" />

                            <p class="absolute top-1 left-24 text-lg text-white font-bold">Pizza</p>
                            <p class="absolute top-8 left-24 text-lg text-white font-bold">Qty:1</p>
                            <p class="absolute top-5 right-24 text-lg text-white font-bold">$8.5</p>
                        
                    </div>

                    <div class="flex justify-evenly">
                        <a href="#">
                            <button class="text-white font-bold text-sm bg-black rounded-lg px-3 py-2 flex mt-3 w-30 show-merge-modal">
                            <svg  class="fill-white h-6 w-6 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M208 239.1H294.7C307 211.7 335.2 191.1 368 191.1C412.2 191.1 448 227.8 448 271.1C448 316.2 412.2 352 368 352C335.2 352 307 332.3 294.7 303.1H208C171.1 303.1 138.7 292.1 112 272V358.7C140.3 371 160 399.2 160 432C160 476.2 124.2 512 80 512C35.82 512 0 476.2 0 432C0 399.2 19.75 371 48 358.7V153.3C19.75 140.1 0 112.8 0 80C0 35.82 35.82 0 80 0C124.2 0 160 35.82 160 80C160 112.6 140.5 140.7 112.4 153.2C117 201.9 158.1 240 208 240V239.1zM80 103.1C93.25 103.1 104 93.25 104 79.1C104 66.74 93.25 55.1 80 55.1C66.75 55.1 56 66.74 56 79.1C56 93.25 66.75 103.1 80 103.1zM80 456C93.25 456 104 445.3 104 432C104 418.7 93.25 408 80 408C66.75 408 56 418.7 56 432C56 445.3 66.75 456 80 456zM368 247.1C354.7 247.1 344 258.7 344 271.1C344 285.3 354.7 295.1 368 295.1C381.3 295.1 392 285.3 392 271.1C392 258.7 381.3 247.1 368 247.1z"/></svg>
                                <span class="ml-1">Merge Table</span>
                            </button>
                        </a>  

                        <a href="#">
                            <button class="text-white font-bold text-sm bg-black rounded-lg px-3 py-2 flex mt-3 w-30 show-split-modal">
                            <svg class="fill-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M246.6 150.6C234.1 163.1 213.9 163.1 201.4 150.6C188.9 138.1 188.9 117.9 201.4 105.4L297.4 9.372C309.9-3.124 330.1-3.124 342.6 9.372L438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6C426.1 163.1 405.9 163.1 393.4 150.6L352 109.3V384C352 419.3 380.7 448 416 448H480C497.7 448 512 462.3 512 480C512 497.7 497.7 512 480 512H416C345.3 512 288 454.7 288 384C288 348.7 259.3 320 224 320H109.3L150.6 361.4C163.1 373.9 163.1 394.1 150.6 406.6C138.1 419.1 117.9 419.1 105.4 406.6L9.38 310.6L9.305 310.6C3.575 304.8 .0259 296.9 .0003 288.1L2.428 275.8C3.99 271.1 6.305 268.4 9.372 265.4L105.4 169.4C117.9 156.9 138.1 156.9 150.6 169.4C163.1 181.9 163.1 202.1 150.6 214.6L109.3 255.1H224C247.3 255.1 269.2 262.2 288 273.1V109.3L246.6 150.6zM0 287.9C.0125 283.6 .8749 279.5 2.428 275.8C.8214 279.6 .0122 283.8 0 287.9zM0 288.1V287.1V287.9V288.1z"/></svg>
                                <span class="ml-1">Split Table</span>
                            </button>
                        </a> 
                        
                        <a href="#">
                            <button class="text-white font-bold text-sm bg-black rounded-lg px-3 py-2 flex mt-3 w-30 show-transfer-modal">
                            <svg class="fill-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M32 176h370.8l-57.38 57.38c-12.5 12.5-12.5 32.75 0 45.25C351.6 284.9 359.8 288 368 288s16.38-3.125 22.62-9.375l112-112c12.5-12.5 12.5-32.75 0-45.25l-112-112c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L402.8 112H32c-17.69 0-32 14.31-32 32S14.31 176 32 176zM480 336H109.3l57.38-57.38c12.5-12.5 12.5-32.75 0-45.25s-32.75-12.5-45.25 0l-112 112c-12.5 12.5-12.5 32.75 0 45.25l112 112C127.6 508.9 135.8 512 144 512s16.38-3.125 22.62-9.375c12.5-12.5 12.5-32.75 0-45.25L109.3 400H480c17.69 0 32-14.31 32-32S497.7 336 480 336z"/></svg>
                                <span class="ml-1">Transfer</span>
                            </button>
                        </a>
                        
                    </div>
                    

                    <!-- Merge Modal Start -->
                    <div class="merge-modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 z-40 hidden">
                        <!-- Modal -->
                        <div class="bg-white rounded shadow-lg w-1/3">
                            <!-- Modal Header -->
                            <div class="border-b px-4 py-2 flex justify-between">
                            <h3>Merge Modal</h3>
                            <!-- <button class="text-black close-modal">&cross;</button> -->
                            </div>
                            <!-- Modal Body -->
                            <div class="p-3">
                               <div>
                                    <span>Merger with:</span>
                                    <button class="bg-blue-200 rounded-lg py-2 px-3">Select Table</button>
                                </div>
                            </div>
                            <div class="flex justify-end itmes-center w-100 border-t p-3">
                                <button class="bg-red-500 hover:bg-red-700 px-3 py-1 rounded text-white mr-1 close-merge-modal">Cancel</button>
                                <button class="bg-blue-500 hover:bg-blue-700 px-3 py-1 rounded text-white">Okay</button>
                            </div>
                        </div>
                    </div>
                    <!-- Merge Modal End -->

                    <!-- Split Modal Start -->
                    <div class="split-modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 z-40 hidden">
                        <!-- Modal -->
                        <div class="bg-white rounded shadow-lg w-1/3">
                            <!-- Modal Header -->
                            <div class="border-b px-4 py-2 flex justify-between">
                            <h3>Split Table</h3>
                            <!-- <button class="text-black close-modal">&cross;</button> -->
                            </div>
                            <!-- Modal Body -->
                            <div class="p-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, quia. Perspiciatis a alias fugit similique beatae doloremque sequi eveniet provident ex dignissimos rem accusamus expedita voluptates ea, cumque aut ullam!
                            </div>
                            <div class="flex justify-end itmes-center w-100 border-t p-3">
                                <button class="bg-red-500 hover:bg-red-700 px-3 py-1 rounded text-white mr-1 close-split-modal">Cancel</button>
                                <button class="bg-blue-500 hover:bg-blue-700 px-3 py-1 rounded text-white">Okay</button>
                            </div>
                        </div>
                    </div>
                    <!-- Split Modal End -->

                     <!-- Transfer Modal Start -->
                     <div class="transfer-modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 z-40 hidden">
                        <!-- Modal -->
                        <div class="bg-white rounded shadow-lg w-1/3">
                            <!-- Modal Header -->
                            <div class="border-b px-4 py-2 flex justify-between">
                            <h3>Transfer Table</h3>
                            <!-- <button class="text-black close-modal">&cross;</button> -->
                            </div>
                            <!-- Modal Body -->
                            <div class="p-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, quia. Perspiciatis a alias fugit similique beatae doloremque sequi eveniet provident ex dignissimos rem accusamus expedita voluptates ea, cumque aut ullam!
                            </div>
                            <div class="flex justify-end itmes-center w-100 border-t p-3">
                                <button class="bg-red-500 hover:bg-red-700 px-3 py-1 rounded text-white mr-1 close-transfer-modal">Cancel</button>
                                <button class="bg-blue-500 hover:bg-blue-700 px-3 py-1 rounded text-white">Okay</button>
                            </div>
                        </div>
                    </div>
                    <!-- Transfer Modal End -->

                   
                

                        

                        
                        <hr class="mt-2 h-4">
                       
                     

                        <div class="text-center">
                            <div class="flex justify-evenly">
                                <a href="#" class="py-3">
                                    <button class="text-white font-bold text-sm bg-bluePOS-100 rounded-lg px-3 py-3 w-24">
                                    <svg class="fill-white h-5 w-5 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M252 208C252 196.1 260.1 188 272 188H288C299 188 308 196.1 308 208V276H312C323 276 332 284.1 332 296C332 307 323 316 312 316H264C252.1 316 244 307 244 296C244 284.1 252.1 276 264 276H268V227.6C258.9 225.7 252 217.7 252 208zM512 64C547.3 64 576 92.65 576 128V384C576 419.3 547.3 448 512 448H64C28.65 448 0 419.3 0 384V128C0 92.65 28.65 64 64 64H512zM128 384C128 348.7 99.35 320 64 320V384H128zM64 192C99.35 192 128 163.3 128 128H64V192zM512 384V320C476.7 320 448 348.7 448 384H512zM512 128H448C448 163.3 476.7 192 512 192V128zM288 144C226.1 144 176 194.1 176 256C176 317.9 226.1 368 288 368C349.9 368 400 317.9 400 256C400 194.1 349.9 144 288 144z"/></svg>
                                        Cash
                                    </button>
                                </a>
                                <a href="#" class=" py-3">
                                    <button class="text-white font-bold text-sm bg-bluePOS-100 rounded-lg px-3 py-3 w-24">
                                        <svg class="fill-white h-5 w-5 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M512 32C547.3 32 576 60.65 576 96V128H0V96C0 60.65 28.65 32 64 32H512zM576 416C576 451.3 547.3 480 512 480H64C28.65 480 0 451.3 0 416V224H576V416zM112 352C103.2 352 96 359.2 96 368C96 376.8 103.2 384 112 384H176C184.8 384 192 376.8 192 368C192 359.2 184.8 352 176 352H112zM240 384H368C376.8 384 384 376.8 384 368C384 359.2 376.8 352 368 352H240C231.2 352 224 359.2 224 368C224 376.8 231.2 384 240 384z"/></svg>
                                        Debit Card
                                    </button>
                                </a>
                                <a href="#" class=" py-3">
                                    <button class="text-white font-bold text-sm bg-bluePOS-100 rounded-lg px-3 py-3 w-24">
                                        <svg class="fill-white h-5 w-5 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M252 208C252 196.1 260.1 188 272 188H288C299 188 308 196.1 308 208V276H312C323 276 332 284.1 332 296C332 307 323 316 312 316H264C252.1 316 244 307 244 296C244 284.1 252.1 276 264 276H268V227.6C258.9 225.7 252 217.7 252 208zM512 64C547.3 64 576 92.65 576 128V384C576 419.3 547.3 448 512 448H64C28.65 448 0 419.3 0 384V128C0 92.65 28.65 64 64 64H512zM128 384C128 348.7 99.35 320 64 320V384H128zM64 192C99.35 192 128 163.3 128 128H64V192zM512 384V320C476.7 320 448 348.7 448 384H512zM512 128H448C448 163.3 476.7 192 512 192V128zM288 144C226.1 144 176 194.1 176 256C176 317.9 226.1 368 288 368C349.9 368 400 317.9 400 256C400 194.1 349.9 144 288 144z"/></svg>
                                        E-Wallet
                                    </button>
                                </a>
                            </div>
                            <a href="#" class=" py-3">
                                <button class="text-white font-bold text-xl bg-bluePOS-100 rounded-full h-10 w-full">Place Order</button>
                            </a>
                        </div>

                       


                    </div>
                    <!-- Order List Menu End -->
                </div>

            </div>

            @section('javascript')
                <script>
                       let greenForm = document.getElementById('GreenOrderList');
                       let redForm = document.getElementById('RedOrderList');
                       let greenTable = document.getElementById('greenTable');
                       let redTable = document.getElementById('redTable');

                       function green(){
                            greenForm.classList.remove('hidden');
                            redForm.classList.add('hidden');
                       }

                       function red(){
                            greenForm.classList.add('hidden');
                            redForm.classList.remove('hidden');
                       }

                       /* Merge Modal JS */
                       const showMergeModal = document.querySelector('.show-merge-modal');
                       const mergeModal = document.querySelector('.merge-modal');
                       const closeMergeModal = document.querySelector('.close-merge-modal');

                       showMergeModal.addEventListener('click', function(){
                        mergeModal.classList.remove('hidden')
                        });

                        closeMergeModal.addEventListener('click', function(){
                            mergeModal.classList.add('hidden')
                        });

                        /* Split Modal JS */
                        const showSplitModal = document.querySelector('.show-split-modal');
                        const splitModal = document.querySelector('.split-modal');
                        const closeSplitModal = document.querySelector('.close-split-modal')
                        
                      
                       showSplitModal.addEventListener('click', function(){
                         splitModal.classList.remove('hidden')
                       });

                       closeSplitModal.addEventListener('click', function(){
                        splitModal.classList.add('hidden')
                       });

                        /* Transfer Modal JS */
                        const showTransferModal = document.querySelector('.show-transfer-modal');
                        const transferModal = document.querySelector('.transfer-modal');
                        const closeTransferModal = document.querySelector('.close-transfer-modal')
                        
                      
                        showTransferModal.addEventListener('click', function(){
                            transferModal.classList.remove('hidden')
                       });

                       closeTransferModal.addEventListener('click', function(){
                        transferModal.classList.add('hidden')
                       });

                      
                </script>
            @endsection
@endsection