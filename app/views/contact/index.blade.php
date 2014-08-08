@extends('layouts.default4')

<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/functions.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
                $(".panel").fadeIn('slow');
        });
    </script>

<style type="text/css">

        div.panel,p.flip {
          padding: 10px;
          background-color: rgba(7, 3, 3, 0.27);
          border: solid 1px #fff;
          width:auto;
          height: auto;
          display: none;
          position: absolute;
          top: 50%; 
          left: 50%; 
          margin-top: -250px; 
          margin-left: -415px;
          color: white;
      }
      h1 {font-family: "Rockwell", serif;font-weight: bold;font-size: 100pt;
      }
    </style>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class='panel'>
         <div class='panel-heading c-list'>
                    <span class='title'>Know new people from microblogging... <i class='glyphicon glyphicon-thumbs-up'></i></span>
                    <hr>
                </div>
                <ul class='list-group' id='contact-list' >
<?php

    foreach ($usuario as $row) {
                        echo"<li class='list-group-item'>";
                        echo"<div class='col-xs-12 col-sm-3'>";
                            echo"<img src='$row->usrs_avatar' />";
                        echo"</div>";
                        echo"<div class='col-xs-12 col-sm-9'>";
                            echo"<span class='name'>$row->usrs_nombre $row->usrs_apellidos</span><br/>";
                            echo"<span class='name'>$row->usrs_alias</span><br/>";
                            echo"<span class='glyphicon glyphicon-map-marker text-muted c-info' data-toggle='tooltip' title='$row->usrs_direccion'></span>";
                            echo"<span class='visible-xs'> <span class='text-muted'>$row->usrs_direccion</span><br/></span>";
                            echo"<span class='glyphicon glyphicon-earphone text-muted c-info' data-toggle='tooltip' title='$row->usrs_telefono'></span>";
                            echo"<span class='visible-xs'> <span class='text-muted'>$row->usrs_telefono</span><br/></span>";
                            echo"<span class='glyphicon glyphicon-envelope text-muted c-info' data-toggle='tooltip' title='$row->email'></span>";
                            echo"<span class='visible-xs'> <span class='text-muted'>$row->email</span><br/></span>";
                            
                        echo"</div>";
                        echo"<form action='follow' method='post' enctype='multipart/form-data'role='form'>";
                          echo"<input name='aliasDest' type='hidden' value='$row->usrs_alias'/>";
                          echo"<div class='action'>";
                          echo"<button type='submit' class='btn btn-success btn-xs'>";
                          echo"Follow <span class='glyphicon glyphicon-flag'>  </span>";
                          echo"</button>";
                          echo"</form>";
                        echo"<div class='clearfix'></div>";
                    echo"</li>";
    }
?>
    </ul>
   </div>



<script type="text/javascript">
    $(document).ready(function () {
        $('#people').removeClass("people");
        $('#people').addClass("active");
    });
</script>