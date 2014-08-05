<?php

class UserController extends BaseController
{

    private function validationRules()
    {
       
        return array(
            //'avatar' => 'required|alphaNum'
            'email'    => 'required|email',
            'password' => 'required|alphaNum|min:6',
            
        );
    }

    public function login()
    {
        $rules = $this->validationRules();
        $validator = Validator::make(Input::all(), $rules);

       /* if ($validator->fails()) {
           return Redirect::to('/')
                ->withErrors($validator) 
                ->withInput(Input::except('password')); 
        }*/

        $userdata = array(
            'usrs_email' => 'email',
            'usrs_pwd'   => 'password'
        );
        $hola =Input::get('email');
        var_dump(Auth::attempt($userdata));
        if (Auth::attempt($userdata)){
                //return Redirect::to('edit');
        }
        return Redirect::to('edit')->withErrors(array('invalid_credentials' => 'Acceso Denegado'));
    }

    public function register()
    {
        $rules = $this->validationRules();
        $rules['password'] = 'required|alphaNum|min:6|Confirmed';
        $rules['confirm_password'] = 'required|alphaNum|min:6';

        $validator = Validator::make(Input::all(), $rules);

       if ($validator->fails()) {
            return Redirect::to('register')
                ->withErrors($validator) 
                ->withInput(Input::except('password')); 
        }

        $email = Input::get('email');
        $password = Input::get('password');
        $firstname = Input::get('firstname');
        $lastname = Input::get('lastname');
        $direction = Input::get('direction');
        $telephone = Input::get('telephone');
        $alias = Input::get('alias');
        $biography = Input::get('biography');
        $user = new User;
        //$user->usrs_avatar = $avatar;
        $user->usrs_email = $email;
        $user->usrs_nombre = $firstname;
        $user->usrs_apellidos = $lastname;
        $user->usrs_direccion = $direction;
        $user->usrs_telefono = $telephone;
        $user->usrs_alias = $alias;
        $user->usrs_biografia = $biography;
        $user->usrs_pwd = Hash::make($password);
        $user->usrs_avatar = "Hola";
        $user->usrs_fecha_ingreso = "2014-09-01";
        $user->usrs_estado = 0;
        $user->save();
        Auth::attempt(array('email' => $email, 'password' => $password));
        return Redirect::to('perfil');

    }

    public function isLogged()
    {
        if (Auth::guest()) {
            return Redirect::to('index');
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('index');
    }
}