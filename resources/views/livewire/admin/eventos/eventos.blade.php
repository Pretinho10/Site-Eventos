<section>

    <h1 class="text-2xl text-purple-900 font-medium">Eventos</h1>

    {{-- Campo de pesquisa --}}
    <div class="flex justify-end items-center">


        <x-loading wire:loading />

        {{-- Input de Pesquisa --}}
        <input
            class="ml-4 mt-1 block w-1/4 rounded-md border-purple-600 shadow-sm focus:border-purple-600
    focus:ring focus:ring-purple-700 focus:ring-opacity-50"
            type="text" wire:model="pesquisa">



    </div>

    {{-- Botão adicionar --}}

    <x-admin.botao-adicionar href="/eventos/criar" />

    <table class="bg-gradient-to-r from-purple-700 to-purple-900 mx-auto m-5 w-5/6 rounded-t-lg text-amber-50 ">
        <thead>
            <tr class="text-left border-b border-amber-50">
                <th class="px-4 py-3">Titulo</th>
                <th class="px-4 py-3">Descrição</th>
                <th class="px-4 py-3">Data Inicio</th>
                <th class="px-4 py-3">Hora Inicio</th>
                <th class="px-4 py-3">Data Termino</th>
                <th class="px-4 py-3">Hora Termino</th>
                <th class="px-4 py-3">Valor</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($eventos as $evento)
                <tr class="bg-purple-700 border-b border-purple-50 hover:bg-purple-600">
                    <td class="px-4 py-3">{{ $evento->titulo }}</td>
                    <td class="px-4 py-3">{{ $evento->descricao }}</td>
                    <td class="px-4 py-3">{{ $evento->dt_inico }}</td>
                    <td class="px-4 py-3">{{ $evento->hora_inicio }}</td>
                    <td class="px-4 py-3">{{ $evento->dt_termino }}</td>
                    <td class="px-4 py-3">{{ $evento->hora_termino }}</td>
                    <td class="px-4 py-3">{{ $evento->valor }}</td>

                </tr>
            @empty
                <tr class="bg-purple-700 border-b border-purple-50 hover:bg-purple-600">
                    <td colspan="7" class="px-4 py-3"> Não existem eventos. </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</section>
