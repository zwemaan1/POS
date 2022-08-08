<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind Component - Model</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-200">
  <button class="bg-blue-500 hover:bg-blue-700 px-3 py-1 rounded text-white m-5 show-modal">Show Modal</button>


  <div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <!-- Modal -->
      <div class="bg-white rounded shadow-lg w-1/3">
        <!-- Modal Header -->
        <div class="border-b px-4 py-2 flex justify-between">
          <h3>Modal Title</h3>
          <button class="text-black close-modal">&cross;</button>
        </div>
        <!-- Modal Body -->
        <div class="p-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, quia. Perspiciatis a alias fugit similique beatae doloremque sequi eveniet provident ex dignissimos rem accusamus expedita voluptates ea, cumque aut ullam!
        </div>
        <div class="flex justify-end itmes-center w-100 border-t p-3">
            <button class="bg-red-500 hover:bg-red-700 px-3 py-1 rounded text-white mr-1 close-modal">Cancel</button>
            <button class="bg-blue-500 hover:bg-blue-700 px-3 py-1 rounded text-white">Okay</button>
        </div>
      </div>
  </div>

  <script>
    const modal = document.querySelector('.modal');
    const showModal = document.querySelector('.show-modal');
    const closeModal = document.querySelectorAll('.close-modal');
    
    showModal.addEventListener('click', function(){
      modal.classList.remove('hidden')
    });

    closeModal.forEach(close => {
      close.addEventListener('click', function(){
      modal.classList.add('hidden')
    });
    });
  </script>
  
</body>
</html>