<?php

namespace App\Imports;

use App\User_admin;
use Maatwebsite\Excel\Concerns\ToModel;

class UsuarioAdminImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User_admin([
            'name'    =>$row[0],
            'email'   =>$row[1],
            'password'=>$row[2],
            'fechasys'=>$row[3],
            'valores' =>$row[4],
        ]);
    }
}
