<?php

namespace App;

use App\Imports\UsuarioAdminImport; //se agrego esta linea

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class User_admin extends Authenticable
{
	
	protected $guard = 'user_admin';
	protected $table = 'user_admin';
	protected $hidden = ['password','remember_token'];

	//carga masiva excel

	protected $fillable=['name','email','password','valores','fechasys'];
}