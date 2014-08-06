<?php

class UserController extends BaseController
{

    private function validationRules()
    {
        // validate the info, create rules for the inputs
        return array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );
    }

    public function login()
    {
      $rules = $this->validationRules();
      $validator = Validator::make(Input::all(), $rules);

      if ($validator->fails()) {
            return Redirect::to('/')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        }

        $userdata = array(
            'email'     => Input::get('email'),
            'password'  => Input::get('password')
        );

    if (Auth::attempt($userdata)) {
                return Redirect::to('microblogging');
        }

        return Redirect::to('/')->withErrors(array('invalid_credentials' => 'Acceso Denegado'));
    }

    public function register()
    {

        $rules = $this->validationRules(); 
    $rules['password'] = 'required|alphaNum|min:3|Confirmed';
     $rules['password_confirmation'] = 'required|alphaNum|min:3'; 
     $validator = Validator::make(Input::all(), $rules);
      // if the validator fails, redirect back to the form 
      if ($validator->fails()) { return Redirect::to('/') ->withErrors($validator) 
      // send back all errors to the login form 
      ->withInput(Input::except('password')); 
      // send back the input (not the password) so that we can repopulate the form 
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
        $user->email = $email;
        $user->usrs_nombre = $firstname;
        $user->usrs_apellidos = $lastname;
        $user->usrs_direccion = $direction;
        $user->usrs_telefono = $telephone;
        $user->usrs_alias = $alias;
        $user->usrs_biografia = $biography;
        $user->password = Hash::make($password);
        $user->usrs_avatar = "Hola";
        $user->usrs_fecha_ingreso = "2014-09-01";
        $user->usrs_estado = 1;
        $user->save();
        Auth::attempt(array('email' => $email, 'password' => $password));
        return Redirect::to('microblogging');

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
        return Redirect::to('/');
    }

    public function principal()
    {
        return view::make('microblogging.login');
    }

    public function registeruser()
    {
        return view::make('microblogging.register');
    }
}