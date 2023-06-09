<div>
    <h1 class="text-2xl text-purple-900 font-medium">Eventos - Formulário</h1>

    <form class="mt-4 flex flex-col space-y-4" wire:submit.prevent="salvar">

        {{-- Titulo --}}
        <label>
            <span class="text-gray-700"> Titulo </span>
            <x-admin.input type="text" wire:model="titulo" />
        </label>

        {{-- Descrição --}}
        <label>
            <span class="text-gray-700"> Descrição </span>
            <x-admin.textarea wire:model="descricao" />
        </label>

        {{-- Data Inicio --}}
        <label>
            <span class="text-gray-700"> Data Inicio </span>
            <x-admin.input type="date" wire:model="dt_inico" />
        </label>

        {{-- Hora Inicio --}}
        <label>
            <span class="text-gray-700"> Hora Inicio </span>
            <x-admin.input type="time" wire:model="hora_inicio" />
        </label>

        {{-- Data Termino --}}
        <label>
            <span class="text-gray-700"> Data Termino </span>
            <x-admin.input type="date" wire:model="dt_termino" />
        </label>

        {{-- Hora Termino --}}
        <label>
            <span class="text-gray-700"> Hora Termino </span>
            <x-admin.input type="time" wire:model="hora_termino" />
        </label>

        {{-- Valor --}}
        <label>
            <span class="text-gray-700"> Valor </span>
            <x-admin.input type="number" wire:model="valor" />
        </label>

        {{-- Botão Salvar --}}
        <div class="self-end">
            <x-admin.button-submit />
        </div>



    </form>

</div>
