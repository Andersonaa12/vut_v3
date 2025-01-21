{{-- Notificación de Éxito --}}
@if(session('success'))
    <div
        class="relative flex items-center bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-4 rounded-md"
        role="alert"
    >
        <span class="mr-2">
            <!-- Ícono -->
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
        </span>
        <p class="flex-1">{{ session('success') }}</p>
        <!-- Botón de Cerrar -->
        <button
            type="button"
            class="absolute top-0 bottom-0 right-0 px-4 py-3 text-green-500 hover:text-green-700"
            onclick="this.parentElement.remove()"
            aria-label="Close"
        >
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path d="M10 8.586l4.95-4.95a1 1 0 111.415 1.414L11.414 10l4.95 4.95a1 1 0 
                01-1.414 1.414L10 11.414l-4.95 4.95a1 1 0 
                01-1.414-1.414l4.95-4.95-4.95-4.95A1 1 0 
                115.05 3.636L10 8.586z"></path>
            </svg>
        </button>
    </div>
@endif

{{-- Notificación de Error --}}
@if(session('error'))
    <div
        class="relative flex items-center bg-red-100 border-l-4 border-red-500 text-red-700 p-4 my-4 rounded-md"
        role="alert"
    >
        <span class="mr-2">
            <!-- Ícono -->
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </span>
        <p class="flex-1">{{ session('error') }}</p>
        <!-- Botón de Cerrar -->
        <button
            type="button"
            class="absolute top-0 bottom-0 right-0 px-4 py-3 text-red-500 hover:text-red-700"
            onclick="this.parentElement.remove()"
            aria-label="Close"
        >
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path d="M10 8.586l4.95-4.95a1 1 0 111.415 1.414L11.414 10l4.95 4.95a1 1 0 
                01-1.414 1.414l-4.95-4.95-4.95 4.95a1 1 0 
                01-1.414-1.414l4.95-4.95-4.95-4.95A1 1 0 
                115.05 3.636L10 8.586z"></path>
            </svg>
        </button>
    </div>
@endif

{{-- Notificación de Advertencia/Warning --}}
@if(session('warning'))
    <div
        class="relative flex items-center bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 my-4 rounded-md"
        role="alert"
    >
        <span class="mr-2">
            <!-- Ícono -->
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.29 3.86L1.82 12.14a1.5 1.5 0 
                000 2.12l8.47 8.28a1.5 1.5 0 002.12 0l8.47-8.28a1.5 1.5 0 
                000-2.12l-8.47-8.28a1.5 1.5 0 00-2.12 0z" />
            </svg>
        </span>
        <p class="flex-1">{{ session('warning') }}</p>
        <!-- Botón de Cerrar -->
        <button
            type="button"
            class="absolute top-0 bottom-0 right-0 px-4 py-3 text-yellow-600 hover:text-yellow-800"
            onclick="this.parentElement.remove()"
            aria-label="Close"
        >
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path d="M10 8.586l4.95-4.95a1 1 0 
                111.415 1.414L11.414 10l4.95 4.95a1 1 0 
                01-1.414 1.414l-4.95-4.95-4.95 4.95a1 1 0 
                01-1.414-1.414l4.95-4.95-4.95-4.95A1 1 0 
                115.05 3.636L10 8.586z"></path>
            </svg>
        </button>
    </div>
@endif

{{-- Notificación de Información --}}
@if(session('info'))
    <div
        class="relative flex items-center bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 my-4 rounded-md"
        role="alert"
    >
        <span class="mr-2">
            <!-- Ícono -->
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 20h0a8 8 0 
                110-16h0a8 8 0 010 16z" />
            </svg>
        </span>
        <p class="flex-1">{{ session('info') }}</p>
        <!-- Botón de Cerrar -->
        <button
            type="button"
            class="absolute top-0 bottom-0 right-0 px-4 py-3 text-blue-500 hover:text-blue-800"
            onclick="this.parentElement.remove()"
            aria-label="Close"
        >
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path d="M10 8.586l4.95-4.95a1 1 0 
                111.415 1.414L11.414 10l4.95 4.95a1 1 0 
                01-1.414 1.414l-4.95-4.95-4.95 4.95a1 1 0 
                01-1.414-1.414l4.95-4.95-4.95-4.95A1 1 0 
                115.05 3.636L10 8.586z"></path>
            </svg>
        </button>
    </div>
@endif

{{-- Errores de validación ($errors->any()) --}}
@if($errors->any())
    <div
        class="relative flex items-start bg-red-100 border-l-4 border-red-500 text-red-700 p-4 my-4 rounded-md"
        role="alert"
    >
        <span class="mr-2">
            <!-- Ícono -->
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </span>
        <div class="flex-1">
            <p class="font-bold">Por favor corrige los siguientes errores:</p>
            <ul class="list-disc ml-5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <!-- Botón de Cerrar -->
        <button
            type="button"
            class="absolute top-0 bottom-0 right-0 px-4 py-3 text-red-500 hover:text-red-700"
            onclick="this.parentElement.remove()"
            aria-label="Close"
        >
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path d="M10 8.586l4.95-4.95a1 1 0 
                111.415 1.414L11.414 10l4.95 4.95a1 1 0 
                01-1.414 1.414l-4.95-4.95-4.95 4.95a1 1 0 
                01-1.414-1.414l4.95-4.95-4.95-4.95A1 1 0 
                115.05 3.636L10 8.586z"></path>
            </svg>
        </button>
    </div>
@endif
