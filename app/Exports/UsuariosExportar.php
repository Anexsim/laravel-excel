<?php

namespace App\Exports;

use App\User_admin;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsuariosExportar implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //aqui se puede cambiar lo que se desea
        //extraer, por defecto se exporta todo
        return User_admin::all(); 
    }
}
