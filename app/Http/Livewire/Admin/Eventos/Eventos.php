<?php

namespace App\Http\Livewire\Admin\Eventos;

use Livewire\Component;
use App\Models\Event; //iImportando o modelo Event (para conectar ao BD)


use Illuminate\Support\Facades\DB;

class Eventos extends Component
{

    public $eventos;

    //Atributo que vai armazenar o que a pessoa digitar no campo de texto da pesquisa
    public $pesquisa = '';

    public function filtrarDados()
    {
        if (empty($this->pesquisa)) {
            // Comando para buscar todos eventos no BD
            $this->eventos = Event::all();
        } else {
            //DB::enableQueryLog();
            // Montar a consulta especifica
            $this->eventos = Event::where('titulo', 'like', "%$this->pesquisa%")
                ->orWhere('descricao', 'like', "%$this->pesquisa%")
                ->orWhere('dt_inico', 'like', "%$this->pesquisa%")
                ->orWhere('hora_inicio', 'like', "%$this->pesquisa%")
                ->orWhere('dt_termino', 'like', "%$this->pesquisa%")
                ->orWhere('hora_termino', 'like', "%$this->pesquisa%")
                ->orWhere('valor', 'like', "%$this->pesquisa%")
                ->get(); //no fim da consulta sempre precisa do get()
            //dd(DB::getQueryLog());
        }
    }


    public function render()
    {
        // Chamando o metodo para filtrar os dados que serão exibidos na bios
        $this->filtrarDados();
        //Comando para buscar todos no BD
        // $this->eventos = Event::all();

        // Verificar se ta buscando os dados no BD
        // dd($this->eventos);

        return view('livewire.admin.eventos.eventos')
            ->layout('components.admin.layouts.principal');
    }
}
