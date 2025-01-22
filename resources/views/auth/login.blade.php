<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  <script async src="https://basicons.xyz/embed.js"> </script>
  
  <style>
    body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, sans-serif;
    background: radial-gradient(circle, rgba(255, 255, 255, 1) 60%, rgba(0, 159, 189, 1) 80%, rgba(0, 113, 147, 1) 100%);
}

  </style>
</head>
<body>
  <!-- Container -->
  <div class="container mx-auto ">

    <div class="flex justify-center px-6 ">
      <!-- Row -->
      <div class="w-full xl:w-3/4 lg:w-11/12 flex">
        <!-- Col -->
        <div
            class="w-full h-auto hidden lg:flex lg:w-1/2 bg-cover rounded-l-lg my-border my-degration pt-8"
            style="background-image: url('https://th.bing.com/th/id/R.1da892f4c9a5b56fb131110d63bcb432?rik=uiQCR7Ci%2bO5irA&riu=http%3a%2f%2f4.bp.blogspot.com%2f-wvNXHxFL4ws%2fVF5N4-F71BI%2fAAAAAAAABsI%2fJ4H_ud3xa5M%2fs1600%2fgreen-nature-wallpaper-desktop.jpg&ehk=504rsE8R1TfE3P%2fcuHUagNRgBchuUo4YbYh34HNuhuo%3d&risl=&pid=ImgRaw&r=0')"
        >
          <div class="flex  w-full h-full rounded-l-lg ">
              <div class="flex  space-x-6">
                  <img src="{{ $brand->image }}" alt="{{ $brand->name }}" class="w-24 h-24 object-contain">
                  <h1 class="text-white text-3xl font-bold">{{ $brand->name }}</h1>
              </div>
          </div>
        </div>

        <!-- Col -->
        <div class="w-full lg:w-1/2 bg-white p-6 rounded-lg lg:rounded-l-none my-border">
          <div style="display: flex; justify-content: flex-end; align-items: center;">
            <img src="https://sige.com.co/images/entidades/logosicon.png" alt="Logo" style="width: 64px; height: 64px; object-fit: contain;">
          </div>
          
          
          <h3 class="text-2xl text-rigth font-bold">Bienvenidos</h3>
          <h3 class="text-xl text-rigth font-bold">Sistema integrado de gestion y administracion de documentos</h3>
          <h3 class="text-lg text-rigth font-bold">SIGAD</h3>
          <form class="pt-6  mb-4 bg-white rounded" action="{{ brand_route('admin.do_login') }}" method="POST">
            @csrf
            <div class="mb-4">
              <label class="block mb-2 text-lg font-bold text-gray-700" for="username">
                <i class="bsc-account-user-person-2"></i> Usuario
              </label>
              <input
                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded-full shadow appearance-none focus:outline-none focus:shadow-outline "
                id="username"
                type="text"
                name="username"
                placeholder="Ingresa tu correo o usuario"
              />
            </div>
            <div class="mb-4">
              <label class="block mb-2 text-lg font-bold text-gray-700" for="password">
                Contraseña
              </label>
              <div class="relative">
                <input
                  class="w-full px-3 py-2 leading-tight text-gray-700 border rounded-full shadow appearance-none focus:outline-none focus:shadow-outline pr-10"
                  id="password"
                  name="password"
                  type="password"
                  placeholder="************"
                />
                <button
                  type="button"
                  class="absolute inset-y-0 right-0 px-3 text-gray-500 focus:outline-none"
                  onclick="togglePasswordVisibility()"
                >
                    <svg id="eyeIcon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M1 12C1 12 5 20 12 20C19 20 23 12 23 12" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
              </div>
              <!-- <p class="text-xs italic text-red-500">Por favor ingrese una contraseña válida.</p> -->
            </div>
            <div class="mb-4">
              <input class="mr-2 leading-tight my-buttom-color" type="checkbox" id="checkbox_id" />
              <label class="text-sm" for="checkbox_id">
                Recordar inicio de session
              </label>
            </div>
            <div class="mb-6 text-center">
              <button
                class="w-full px-4 py-2 font-bold my-buttom-color"
                type="submit"
              >
                Ingresar
              </button>
            </div>
          </form>
            <hr class="mb-6 border-t" />
            <div class="text-r">
              <a
                class="inline-block text-sm my-text-color"
                href="#"
              >
                ¿No dispones de una cuenta? Regístrate ahora
              </a>
            </div>
            <div class="text-r">
              <a
                class="inline-block text-sm my-text-color"
                href="#"
              >
                ¡Olvidé mi Contraseña!
              </a>
            </div>
            <div class="text-right">
              <a
                class="inline-block text-sm my-buttom-color"
                href="#"
              >
                Radicación Anonima
              </a>
            </div>
          
        </div>
      </div>
    </div>
  </div>
  <script>
    function togglePasswordVisibility() {
      const passwordInput = document.getElementById("password");
      const eyeIcon = document.getElementById("eyeIcon");
  
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.innerHTML = `
          <svg id="eyeIcon"  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 2L22 22M6.71277 6.7226C3.66479 8.79527 2 12 2 12C2 12 5.63636 19 12 19C14.0503 19 15.8174 18.2734 17.2711 17.2884M11 5.05822C11.3254 5.02013 11.6588 5 12 5C18.3636 5 22 12 22 12C22 12 21.3082 13.3317 20 14.8335M14 14.2361C13.4692 14.7111 12.7684 15 12 15C10.3431 15 9 13.6569 9 12C9 11.1763 9.33193 10.4302 9.86932 9.88808" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>`;
      } else {
        passwordInput.type = "password";
        eyeIcon.innerHTML = `
          <svg id="eyeIcon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M1 12C1 12 5 20 12 20C19 20 23 12 23 12" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>`;
      }
    }
  </script>
  
</body>
</html>