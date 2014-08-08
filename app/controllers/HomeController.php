<?php

class HomeController extends BaseController {


	public function Index()
	{
		$comentarios = Comentario::comments();
		return View::make('microblogging.index')->with('comentarios',$comentarios);
	}

	public function profile()
	{
		$usuario = User::datosUsr();
		return View::make('profile.index')->with('usuario',$usuario);
	}

	public function edit()
	{
		$usuario = User::datosUsr();
		return View::make('profile.edit')->with('usuario',$usuario);
	}

	public function update()
	{
		$alias = Auth::user()->usrs_alias;
		$user = User::find($alias);
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
		 $comentario->comments_alias = Auth::user()->usrs_alias;
		 $comentario->comments_descrip = $mensage; 
		 $comentario->comments_fecha = $fecha; 
		 $comentario->save();
		return Redirect::to('microblogging');
	}

	public function login2()
	{
		return view::make('microblogging.login');
	}

	public function unfollow()
	{
		$aliasDest = Input::get('aliasDest');
		Contact::unfollowUser($aliasDest);
		return Redirect::to('microblogging');
	}

	public function blockade()
	{
		$aliasDest = Input::get('aliasDest');
		Contact::blockadeUser($aliasDest);
		return Redirect::to('microblogging');
	}

	public function follow()
	{
		$aliasDest = Input::get('aliasDest');
		Contact::followUser($aliasDest);
		return Redirect::to('microblogging');
	}

	public function unlock()
	{
		$aliasDest = Input::get('aliasDest');
		Contact::unlockUser($aliasDest);
		return Redirect::to('microblogging');
	}

	public function accept()
	{
		$aliasDest = Input::get('aliasDest');
		Contact::acceptRequest($aliasDest);
		return Redirect::to('microblogging');
	}

	public function decline()
	{
		$aliasDest = Input::get('aliasDest');
		Contact::declineRequest($aliasDest);
		return Redirect::to('microblogging');
	}

}
