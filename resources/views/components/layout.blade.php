<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Glossário Libras</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="max-w-full h-full">
<div class="min-h-full">
    <nav style="background-color: #3097FC">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-12 w-14" src="https://www.gov.br/mdh/pt-br/ondh/centrais-de-conteudo/imagens/libras.png" alt="Glossário Libras Logo">
                    </div>
                </div>

                <div class="hidden md:flex ml-10 space-x-4">
                    <x-nav-link href="/" :active="request()->is('/')">Página Inicial</x-nav-link>
                    <x-nav-link href="{{ route('categorias.index') }}" :active="request()->is('categorias')">Categorias</x-nav-link>
                </div>

                <form method="GET" action="/search" class="hidden md:flex ml-auto w-auto">
                    <div class="pt-2 relative flex items-center">
                        <input
                            class="border-2 border-gray-300 bg-slate-50 h-10 px-5 rounded-lg text-sm focus:outline-none focus:border-blue-500"
                            type="search" name="q" placeholder="Procurar">
                        <button
                            type="submit"
                            class="ml-2 p-2 text-gray-600 hover:text-white hover:bg-blue-500 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>
                </form>

                <div class="md:hidden">
                    <button id="menu-toggle" class="text-white focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-blue-600 p-4">
            <div class="space-y-4">
                <x-nav-link href="/" :active="request()->is('/')"
                            class="block text-white hover:bg-blue-500 py-2 px-4 text-center">Página Inicial</x-nav-link>
                <x-nav-link href="{{ route('categorias.index') }}" :active="request()->is('categorias')"
                            class="block text-white hover:bg-blue-500 py-2 px-4 text-center">Categorias</x-nav-link>

                <form method="GET" action="/search" class="mt-4">
                    <div class="relative flex flex-col items-center">
                        <input
                            class="w-full border-2 border-gray-300 bg-slate-50 h-10 px-5 rounded-lg text-sm focus:outline-none focus:border-blue-700"
                            type="search" name="q" placeholder="Procurar">
                        <button
                            type="submit"
                            class="mt-2 p-2 w-full bg-blue-700 text-white rounded hover:bg-blue-800">
                            Procurar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>



    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</div>
</body>
</html>
