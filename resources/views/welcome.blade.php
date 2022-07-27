<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="text-gray-700">
    <div class="grid md:grid-cols-3">
        <div class="md:col-span-1">
            <nav>
                <div>
                    <h1 class="font-bold uppercase text-blue-500 p-4">
                        <a href="#" class="">Food Ninja</a>
                    </h1>
                </div>
                <ul>
                    <li>
                        <a href=""><span>Home</span></a>
                    </li>
                    <li>
                        <a href=""><span>About</span></a>
                    </li>
                    <li>
                        <a href=""><span>Contact</span></a>
                    </li>
                </ul>
            </nav>
        </div>

        <main class="px-16 py-6 bg-gray-200 md:col-span-2">
            <div class="flex justify-center md:justify-end">
                <a href=""
                    class="px-4 py-3 bg-blue-500 text-white flex justify-center rounded-full drop-shadow-lg active:filter-none hover:bg-blue-600 disabled:bg-blue-300 space-x-2"><span
                        class=""><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg></span><span class=""> Log in</span></a>
                <a href=""
                    class="ml-2 px-4 py-3 bg-blue-500 text-white flex justify-center rounded-full drop-shadow-lg active:filter-none hover:bg-blue-600 disabled:bg-blue-300 space-x-2"><span><svg
                            xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z"
                                clip-rule="evenodd" />
                        </svg></span>
                    <span> Sign Up</span></a>
            </div>

            <div class="flex justify-center">
                <div class="bg-red-500 w-6 h-4"></div>
                <div class="bg-yellow-500 h-8 w-6"></div>
                <div class="bg-blue-500 h-12 w-6"></div>
            </div>
            <header>

            </header>

            <div>
                <h4 class="font-bold mt-4 border-b border-red-900">Latest Recipes</h4>

                <div class="mt-4 grid lg:grid-cols-3 gap-10">
                    <!-- cards Go Here -->
                    <div class="card">
                        <img src="img/f1.jpg" alt="logo" class="w-full h-32 sm:h-48 object-cover">
                        <div class="m-4">
                            <span>5 Bean Chilli Stew</span>
                            <span class="block text-sm">Recipe by Mario</span>
                        </div>
                        <div class="display:dont">
                            <span class="badge">
                                25-minutes
                            </span>
                        </div>
                    </div>

                    <div class="card">
                        <img src="img/f2.jpg" alt="logo" class="w-full h-32 sm:h-48 object-cover">
                        <div class="m-4">
                            <span>5 Bean Chilli Stew</span>
                            <span class="block text-sm">Recipe by Mario</span>
                        </div>
                        <div class="display:dont">
                            <span class="badge">
                                25-minutes
                            </span>
                        </div>
                    </div>

                    <div class="card">
                        <img src="img/f3.jpg" alt="logo" class="w-full h-32 sm:h-48 object-cover">
                        <div class="m-4">
                            <span>5 Bean Chilli Stew</span>
                            <span class="block text-sm">Recipe by Mario</span>
                        </div>
                        <div class="display:dont">
                            <span class="badge">
                                25-minutes
                            </span>
                        </div>
                    </div>
                </div>



                <h4 class="font-bold mt-4 pt-12">Most Popular</h4>

                <div>
                    <!-- Card Go Here -->
                    <div>
                        <img src="" alt="">
                        <div class="font-semibold">
                            <span>5 Bean Chilli Stew</span>
                            <span>Recipe by Mario</span>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="bg-gray-200 text-red-500 text-2xl p-2 my-4">Load More...</div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
