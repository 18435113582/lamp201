<!DOCTYPE html>
<html>
 <head>
        <title>@yield('title')</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <link rel="stylesheet" href="/admins/css/bootstrap.min.css">
        <link rel="stylesheet" href="/admins/css/bootstrap-theme.min.css">
        <!-- <script type="text/javascript" src="/admins/js/jquery.js"></script> -->
        <!-- <script type="text/javascript" src="/admins/js/bootstrap.min.js"></script> -->
        <script type="text/javascript" src="/admins/js/jquery-1.8.3.min.js"></script>
        
        
        <!-- jQuery AND jQueryUI -->
        <script type="text/javascript" src="/admins/js/libs/jquery/1.6/jquery.min.js"></script>
        <script type="text/javascript" src="/admins/js/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>

        <link rel="stylesheet" href="/admins/css/min.css" />
        <script type="text/javascript" src="/admins/js/min.js"></script>
        
    </head>
    <body>
        
        <script type="text/javascript" src="/admins/content/settings/main.js"></script>
        <!-- <link rel="stylesheet" href="content/settings/style.css" /> -->



        <!--              
                HEAD
                        --> 
        <div id="head" style="background:#494949">
            <div class="left">
                <a href="#" class="button profile"><img src="/admins/img/huser.png" alt="" /></a>
                Hi, 
                <a href="#">用户名</a>
                |
                <a href="#">退出</a>
            </div>
            <div class="right">
                <form action="#" id="search" class="search placeholder">
                    <label>Looking for something ?</label>
                    <input type="text" value="" name="q" class="text"/>
                    <input type="submit" value="rechercher" class="submit"/>
                </form>
            </div>
        </div>
                
                
        <!--            
                SIDEBAR
                         --> 
        <div id="sidebar">
            <ul>
                <li>
                        <a href="#">后台模板</a>
                </li>
                <li class="current"><a href="#"><img src="/admins/img/layout.png" alt="" /> Elements</a>
                    <ul>
	                    <li class="current"><a href="dashboard.html?p=index">Dashboard</a></li>
	                    <li><a href="forms.html?p=forms">Forms</a></li>
	                    <li><a href="table.html?p=table">Table</a></li>
	                    <li><a href="tabs.html?p=tabs">Tabs</a></li>
	                    <li><a href="gallery.html?p=gallery">Gallery</a></li>
	                    <li><a href="notifications.html?p=notif">Notifications</a></li>
	                    <li><a href="charts.html?p=charts">Charts</a></li>
	                    <li><a href="typography.html?p=typo">Typography</a></li>
	                    <li><a href="icons.html?p=icons">Icons</a></li>
	                    <li><a href="calendar.html?p=calendar">Calendar</a></li>
                	</ul>
                </li>
            </ul>


        </div>  
                
        <!--            
              CONTENT 
                        --> 
        <div id="content" class="white">
		
		@section('content')



		@show

        </div>
        
        
    </body>
</html>