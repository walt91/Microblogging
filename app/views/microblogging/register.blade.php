@extends('layouts.default')
<div class="container" id="wrap">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="register" method="post" accept-charset="utf-8" class="form" role="form">   
              <legend>Register</legend>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="firstname" id="firstname" value="" class="form-control input-sm" placeholder="First Name" required />                        
                          </div>
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="lastname" id="lastname" value="" class="form-control input-sm" placeholder="Last Name" required />                       
                             </div>
                    </div>
                    <input type="text" name="email"  id="email" value="" class="form-control input-sm" placeholder="Your Email" required />
                    <input type="text" name="alias" id="alias" value="" class="form-control input-sm" placeholder="Your Nickname" required />
                    <input type="text" name="telephone" id="telephone" value="" class="form-control input-sm" placeholder="Your Telephone" required/>
                    <input type="text" name="direction" id="direction" value="" class="form-control input-sm" placeholder="Your Direction"required />
                    <input type="text" name="biography" id="biography" value="" class="form-control input-sm" placeholder="Biography" required/>
                    <input type="password" name="password" id="password" value="" class="form-control input-sm" placeholder="Password" required />
                    <input type="password" name="confirm_password" id="confirm_password" value="" class="form-control input-sm" placeholder="Confirm Password" required/>
                    <div class="row">                        
                    </div>
                    <br />
               <button class="btn btn-sm btn-primary btn-block signup-btn" type="submit">Create my account</button>
            </form>          
          </div>
</div>            
</div>
</div>
