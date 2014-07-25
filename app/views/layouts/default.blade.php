<!doctype html>
<html>
<head>
	<title>Microblogging</title>
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	{{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}
  {{HTML::script('js/jquery.js');}}
</head>
<body>
  {{ $content }}
    <!--body{ 
        background-image: url('http://k40.kn3.net/98148AD0C.jpg'); no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
          } 

    </style> -->
    <style type="text/css"> 
      body{ 
      background-image: url('http://www.tabletpcwallpapers.com/wp-content/Wallpapers/20120103/light-grey-stippled-wallpaper1745.jpg'); no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
          } 

    </style>
    

    <ul class="nav navbar-default navbar-static-top nav-justified navbar-fixed-top navbar-inverse" role="navigation">
    <li id="Currculum" class="active"><a href="/Home" class="flip"> <span class="glyphicon glyphicon-user"></span> Profile</a></li>
    <li id="Contact" class="active"><a href="/Home/Contact" class="flip"><span class="glyphicon glyphicon-home"></span> Home</a></li>
    <li id="Contact" class="active"><form class="navbar-form">
    <input type="text" class="input-large search-query" placeholder="Search" style="width:550px;  margin-left: 50px;">
    <button type="submit" class=" btn-small"><span class="glyphicon glyphicon-search"></span></button>
    </form></li>
    <li id="Recommend" class="active"><a href="/Home/Recommend" class="flip"><span class="glyphicon glyphicon-cog"></span> Configuration</a></li>
    <li id="Recommendations" class="active"><a href="/Home/Recommendations" class="flip"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
    </ul>


</body>
</html>	

