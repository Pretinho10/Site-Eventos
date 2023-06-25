<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <title> Eventos - Dashboard</title>

    {{-- Carregando o css do Loading --}}
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">

    {{-- CSS da biblioteca do Toastfy --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


    @livewireStyles
</head>

<body>

    {{-- Menu Lateral --}}
    <x-admin.menu-lateral />

    <main class="ml-auto mb-6 w-[85%]">
        <div class="px-6 pt-6">
            {{ $slot }}
        </div>

    </main>
    @livewireScripts

    {{-- Script do Toastfy --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    {{-- Para carregar o componente do toast em todas as páginas que usarem esse layout --}}
    <livewire:toast />

    <script>
        // Colocar o JS para escutar um evento emitido por um componente Livewire
        Livewire.on('confirmarDeletar', (id) => {
            if (confirm('Deseja mesmo deletar ?')) {
                // Tenho que chamar o metodo deletar do componente
                // mas nesse caso não pode chamar direto
                // vou ter que lançar um evento
                Livewire.emit('deletar', id);
            }
        });
    </script>
</body>

</html>
