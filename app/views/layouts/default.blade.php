<!doctype html>
<html>
<head>
	<title>Microblogging</title>
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	{{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}
  {{ HTML::style('assets/css/timeline.css', array('media' => 'screen')) }}
  {{ HTML::style('assets/css/menu2.css', array('media' => 'screen')) }}
  {{HTML::script('js/jquery.js');}}
</head>
<body>
  {{ $content }}
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
    <li id="profile" class="active"><a href="/profile" class="flip"> <span class="glyphicon glyphicon-user"></span> Profile</a></li>
    <li id="home" class="active"><a href="/home" class="flip"><span class="glyphicon glyphicon-home"></span> Home</a></li>
    <li id="search" class="active"><form>
    <input type="text" class="input-large search-query" placeholder="Search" style="width:550px;  margin-left: 15px;">
    <button type="submit" class="btn-small"><span class="glyphicon glyphicon-search"></span></button>
    </form></li>
    <li id="configuration" class="active"><a href="" class="flip"><span class="glyphicon glyphicon-cog"></span> Configuration</a></li>
    <li id="logout" class="active"><a href="/login" class="flip"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
    </ul>


</body>
</html>	

