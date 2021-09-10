<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $dari_kota;
    public $ke_kota;
    public $tanggal_pergi;
    public $tanggal_pulang;
    public $dewasa;
    public $anak;
    public $bayi;

 

    protected $rules = [

        'dari_kota' => 'required|min:4',
        'ke_kota' => 'required|min:4',
        'tanggal_pergi' => 'required|date_format:d-m-Y',
        'tanggal_pulang' => 'required|date_format:d-m-Y',
        'dewasa' => 'required|integer',
        'anak' => 'required|integer',
        'dewasa' => 'required|integer',

    ];

    public function updated($propertyName)

    {

        $this->validateOnly($propertyName);

    }

    public function render()
    {
        return view('livewire.form');
    }
}
