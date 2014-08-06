@extends('layouts.default')

<br>
<br>
<br>
<br>

<div class="container" id="wrap">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="register" method="post" accept-charset="utf-8" class="form" role="form">   
              <legend><strong style="color:white;">Register</strong></legend>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="firstname" id="firstname" value="" class="form-control input-sm" placeholder="First Name" required />                        
                          </div>
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="lastname" id="lastname" value="" class="form-control input-sm" placeholder="Last Name" required />                       
                             </div>
                    </div>
                    <br>
                    <input type="email" name="email"  id="email" value="" class="form-control input-sm" placeholder="Your Email" required />
                    <br>
                    <input type="text" name="alias" id="alias" value="" class="form-control input-sm" placeholder="Your Nickname" required />
                    <br>
                    <input type="text" name="telephone" id="telephone" value="" class="form-control input-sm" placeholder="Your Telephone" required/>
                    <br>
                    <input type="text" name="direction" id="direction" value="" class="form-control input-sm" placeholder="Your Direction"required />
                    <br>
                    <input type="text" name="biography" id="biography" value="" class="form-control input-sm" placeholder="Biography" required/>
                    <br>
                    <input type="password" name="password" id="password" value="" class="form-control input-sm" placeholder="Password" required />
                    <br>
                    <input type="password" name="password_confirmation" id="password_confirmation" value="" class="form-control input-sm" placeholder="Confirm Password" required/>
                    <div class="row">                        
                    </div>
                    <br />
               <input class="btn btn-sm btn-primary btn-block signup-btn" type="submit" value="Create my account">
            </form>          
          </div>
</div>            
</div>
</div>
<!--<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div id="registrarmayor" style="display:;"> 
  <form id="registrar_form" action="register"method="post" target="_top"> 
    <input type="text"name="firstname" id="firstname" autofocus="autofocus" value="" placeholder="Ingrese su Nombre."class="std_textbox" type="text"required=""> 
    <br><br> 
    <input type="text"name="lastname" id="lastname" autofocus="autofocus" value="" placeholder="Ingrese sus Apellidos."class="std_textbox" type="text" required=""> <br><br> <input type="text"name="biography" id="biography" autofocus="autofocus" value="" placeholder="Ingrese su biografía."class="std_textbox" type="text" required=""> <br><br> <input type="email"name="email" id="email" autofocus="autofocus" value="" placeholder="Ingrese su Correo."class="std_textbox" type="email" required=""> <br><br> <input type="text"name="alias" id="alias" autofocus="autofocus" value="" placeholder="Ingrese su Alias."class="std_textbox" type="text" required=""> <br><br> <input type="password" name="password" id="password" placeholder="Ingrese su Contraseña." class="std_textbox"required=""> <br><br> <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Reconfirmar su Contraseña." class="std_textbox"required=""> <br><br> <input type="text" name="telephone" id="telephone" placeholder="Ingrese su Teléfono." class="std_textbox" required=""> <br><br> <input type="text" name="direction" id="direction" placeholder="Ingrese su Dirección." class="std_textbox" required=""> <br><br> <button name="registrar" type="submit" id="registrar" tabindex="3">Regístrate</button> </form> </div>
-->