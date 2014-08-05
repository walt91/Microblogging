<?php

class HomeController extends BaseController {


	public function Index()
	{
		$comentarios = Comentario::comments();
		return View::make('microblogging.index')->with('comentarios',$comentarios);
	}

	public function profile()
	{
		$usuario = Usuario::datosUsr();
		return View::make('profile.index')->with('usuario',$usuario);
	}

	public function edit()
	{
		$usuario = Usuario::datosUsr();
		return View::make('profile.edit')->with('usuario',$usuario);
	}

	public function update()
	{
		$alias = Input::get('alias');
		$user = Usuario::find($alias);
		$user->usrs_nombre = Input::get('nombre');
		$user->usrs_apellidos = Input::get('apellido');
		$user->usrs_telefono = Input::get('telefono');
		$user->usrs_direccion = Input::get('direccion');
		$user->usrs_avatar = Input::get('avatar');
		$user->usrs_biografia = Input::get('biografia');
		$user->save();
		return Redirect::to('profile');
	}

	public function hum()
	{
		 $fecha = Input::get('fecha'); 
		 $mensage = Input::get('mensage'); 

		 $comentario = new Comentario;
		 $comentario->comments_alias = "@choco"; 
		 $comentario->comments_descrip = $mensage; 
		 $comentario->comments_fecha = $fecha; 
		 $comentario->save();
		return Redirect::to('microblogging');
	}

	public function login2()
	{
		return view::make('microblogging.login');
	}

}
