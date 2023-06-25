<?php

namespace App\Http\Livewire\Admin\Eventos;

use Livewire\Component;
use App\Models\Event;

class EventosForm extends Component
{
    public Event $evento;

    protected $rules = [
        'evento.titulo' => 'required|string|max:120|min:2|bail',
        'evento.descricao' => 'required|min:2|bail',
        'evento.dt_inico' => 'required|date|bail',
        'evento.hora_inicio' => 'required|bail',
        'evento.dt_termino' => 'required|date|bail',
        'evento.hora_termino' => 'required|bail',
        'evento.valor' => 'required|decimal:0,2|bail',
    ];

    protected $validationAttributes = [
        'descricao' => 'descrição',
        'dt_inico' => 'data inicio',
        'dt_termino' => 'data termino',
    ];

    // protected $messages = [
    //     'required' =>"Por favor, preencha o campo :attribute",

    // ];


    public function mount()
    {
        $this->evento = new Event();
    }

    // O metodo updated é chamdo automaticamente pelo livewire sempre que uma
    // propriedade que está ligada no formulario com wire:model é atualizada
    public function updated($nomePropriedade)
    {
        $this->validateOnly($nomePropriedade);
    }
    public function salvar()
    {
        // Executando a validação
        $this->validate();



        //  Mandando salvar no BD
        $this->evento->save();

        session()->flash('toast', 'Evento salvo com sucesso!');

        return redirect('/eventos');
    }

    public function render()
    {
        return view('livewire.admin.eventos.eventos-form')->layout('components.admin.layouts.principal');
    }
}
