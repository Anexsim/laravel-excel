<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsuariosExportar;
use App\Imports\UsuarioAdminImport;
use Maatwebsite\Excel\Facades\Excel;
use App\http\Controllers\Controller;

class ControladorParaExcel extends Controller
{
    //vista de gestion para carga de archivos
    public function ImportarExportarEnVista()
    {
    	return view('importar');
    }
    //para importar
    public function importar(Request $request)
    {
    	Excel::import(new UsuarioAdminImport,$request->file('file'));
    	return back();
    }
    //para exportar
    public function exportar()
    {
    	return Excel::download(new UsuariosExportar,'usuarioAdmin.xlsx');
    }
}
