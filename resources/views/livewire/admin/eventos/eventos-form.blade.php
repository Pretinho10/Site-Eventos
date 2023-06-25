<div>
    <h1 class="text-2xl text-purple-900 font-medium">Eventos - Formulário</h1>

    <form class="mt-4 flex flex-col space-y-4" wire:submit.prevent="salvar">

        {{-- Titulo --}}
        <label>
            <span class="text-gray-700"> Titulo </span>
            <x-admin.input type="text" wire:model="evento.titulo" />
        </label>
        @error('evento.titulo')
            <span class="text-red-700"><small>{{ $message }} </small> </span>
        @enderror
        {{-- Descrição --}}
        <label>
            <span class="text-gray-700"> Descrição </span>
            <x-admin.textarea wire:model="evento.descricao" />
        </label>
        @error('evento.descricao')
            <span class="text-red-700"><small>{{ $message }} </small> </span>
        @enderror

        {{-- Data Inicio --}}
        <label>
            <span class="text-gray-700"> Data Inicio </span>
            <x-admin.input type="date" wire:model="evento.dt_inico" />
        </label>
        @error('evento.dt_inico')
            <span class="text-red-700"><small>{{ $message }} </small> </span>
        @enderror

        {{-- Hora Inicio --}}
        <label>
            <span class="text-gray-700"> Hora Inicio </span>
            <x-admin.input type="time" wire:model="evento.hora_inicio" />
        </label>
        @error('evento.hora_inicio')
            <span class="text-red-700"><small>{{ $message }} </small> </span>
        @enderror

        {{-- Data Termino --}}
        <label>
            <span class="text-gray-700"> Data Termino </span>
            <x-admin.input type="date" wire:model="evento.dt_termino" />
        </label>
        @error('evento.dt_termino')
            <span class="text-red-700"><small>{{ $message }} </small> </span>
        @enderror

        {{-- Hora Termino --}}
        <label>
            <span class="text-gray-700"> Hora Termino </span>
            <x-admin.input type="time" wire:model="evento.hora_termino" />
        </label>
        @error('evento.hora_termino')
            <span class="text-red-700"><small>{{ $message }} </small> </span>
        @enderror

        {{-- Valor --}}
        <label>
            <span class="text-gray-700"> Valor </span>
            <x-admin.input type="number" wire:model="evento.valor" />
        </label>
        @error('evento.valor')
            <span class="text-red-700"><small>{{ $message }} </small> </span>
        @enderror

        {{-- Botão Salvar --}}
        <div class="self-end">
            <x-admin.button-submit />
        </div>



    </form>

</div>
