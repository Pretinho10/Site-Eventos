<?php

namespace App\Http\Livewire\Admin\Eventos;

use Livewire\Component;
use App\Models\Event;

class EventosForm extends Component
{
    public $titulo;

    public $descricao;

    public $dt_inico;

    public $hora_inicio;

    public $dt_termino;

    public $hora_termino;

    public $valor;

    public function salvar()
    {
        $evento = new Event();
        $evento->titulo = $this->titulo;
        $evento->descricao = $this->descricao;
        $evento->dt_inico = $this->dt_inico;
        $evento->hora_inicio = $this->hora_inicio;
        $evento->dt_termino = $this->dt_termino;
        $evento->hora_termino = $this->hora_termino;
        $evento->valor = $this->valor;

        //  Mandando salvar no BD
        $evento->save();

        session() ->flash('toast', 'Evento salvo com sucesso!');

        return redirect('/eventos');
    }

    public function render()
    {
        return view('livewire.admin.eventos.eventos-form')->layout('components.admin.layouts.principal');
    }
}
