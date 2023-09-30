<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" sizes="114x114" href="{{ asset('images/tabs.png') }}">

    <link href="{{ asset('css/main/dashboard.css') }}" rel="stylesheet">
    <title>CRM - @yield('title')</title>
</head>
<body>



<div class="container">

    <div class="row_top">

        <div class="logo">CRM</div>

        <div class="navbar">

            <div class="menu_icon">
                <svg viewBox="0 0 24 24" width="36" height="36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4 5a1 1 0 0 0 0 2h16a1 1 0 1 0 0-2H4zm-1 7a1 1 0 0 1 1-1h16a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1zm0 6a1 1 0 0 1 1-1h16a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1z" fill="#000"/>
                </svg>
            </div>

            <div class="notification_icon">
                <svg viewBox="0 0 24 24" width="36" height="36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.043 5.176a5.427 5.427 0 0 1 1.97-.942 2 2 0 1 1 3.973 0 5.427 5.427 0 0 1 1.971.942c.976.75 1.541 1.755 1.875 2.758.332.995.452 2.032.51 2.905.024.355.039.696.051.997l.009.203c.015.36.031.63.058.828.195 1.462.438 2.487.784 3.307.338.801.79 1.446 1.463 2.119A1 1 0 0 1 20 20h-6.268a2 2 0 1 1-3.465 0H4a1 1 0 0 1-.707-1.707c.674-.674 1.126-1.314 1.463-2.112.344-.817.587-1.842.784-3.314.027-.199.043-.468.058-.829l.009-.202c.012-.3.027-.642.05-.997.059-.873.179-1.91.51-2.905.335-1.003.9-2.009 1.876-2.758zM6.069 18c.197-.326.372-.67.529-1.041.445-1.053.718-2.279.925-3.826a11.9 11.9 0 0 0 .073-1.007l.01-.216c.012-.3.025-.61.047-.937.054-.814.16-1.652.412-2.407.25-.747.626-1.366 1.196-1.804C9.825 6.329 10.672 6 12 6c1.328 0 2.175.329 2.739.762.57.438.947 1.057 1.196 1.804.252.755.358 1.593.412 2.407.022.327.035.637.047.936l.01.216c.015.35.033.707.073 1.008.206 1.538.479 2.763.924 3.818.157.373.334.72.532 1.049H6.07z" fill="#000"/>
                </svg>
            </div>

            <div class="user_icon">
                <svg viewBox="0 0 24 24" width="36" height="36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 9a4 4 0 1 1 8 0 4 4 0 0 1-8 0zm7.824 4.623a6 6 0 1 0-7.649 0C4.986 14.746 3 17.247 3 20a1 1 0 1 0 2 0c0-2.27 2.355-5 7-5s7 2.73 7 5a1 1 0 1 0 2 0c0-2.753-1.984-5.254-5.176-6.377z" fill="#000"/>
                </svg>
            </div>

        </div>

    </div>

    <div class="row_bottom">

        <div class="side_menu">
            <div class="side_menu_item">
                <div class="side_menu_item_icon">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3 14c0-4.968 4.03-9 9-9s9 4.032 9 9c0 1.053-.33 2.38-.929 3.42-.607 1.054-1.333 1.57-2.052 1.58-.484-.024-.84-.233-1.504-.62-.144-.084-.302-.176-.478-.276C15.087 17.564 13.87 17 12 17s-3.087.563-4.037 1.104c-.176.1-.334.192-.478.276-.664.387-1.02.596-1.504.62-.72-.01-1.445-.526-2.052-1.58C3.33 16.38 3 15.053 3 14zm9-11C5.925 3 1 7.928 1 14c0 1.398.42 3.07 1.196 4.418C2.959 19.743 4.225 21 6 21h.04c1.041-.042 1.896-.553 2.572-.958.119-.07.232-.139.34-.2C9.728 19.401 10.599 19 12 19s2.272.4 3.048.842c.108.061.22.13.34.2.676.404 1.53.916 2.572.957l.02.001H18c1.775 0 3.041-1.257 3.804-2.582C22.58 17.071 23 15.398 23 14c0-6.072-4.925-11-11-11zm4.95 7.464a1 1 0 1 0-1.414-1.414l-3.018 3.018a2 2 0 1 0 1.414 1.414l3.018-3.018zM5 15a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm15-1a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-8-6a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" fill="#fff"/>
                    </svg>
                </div>
                <a href="{{ route('dashboard') }}" class="side-menu-link">Dashboard</a>
            </div>
            <div class="side_menu_item">
                <div class="side_menu_item_icon">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 6a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm-5 3a5 5 0 1 1 8.654 3.413 8.095 8.095 0 0 1 4.172 3.12 1 1 0 0 1-1.652 1.126C21.198 15.227 19.418 14 17 14c-3.834 0-6 3.074-6 5a1 1 0 1 1-2 0c0-.692.158-1.43.46-2.157a1.003 1.003 0 0 1-.211-.183C8.428 15.726 7.154 15 5.5 15s-2.928.726-3.749 1.66A1 1 0 0 1 .25 15.34a6.872 6.872 0 0 1 2.108-1.62 4.5 4.5 0 1 1 6.286 0 6.871 6.871 0 0 1 1.865 1.358 8.1 8.1 0 0 1 2.484-2.083A4.992 4.992 0 0 1 11 9zm-8 1.5a2.5 2.5 0 1 1 5 0 2.5 2.5 0 0 1-5 0z" fill="#fff"/>
                    </svg>
                </div>
                <a href="{{ route('user.index') }}" class="side-menu-link">Users</a>
            </div>
            <div class="side_menu_item">
                <div class="side_menu_item_icon">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3 5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H3zM0 6a3 3 0 0 1 3-3h18a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V6zm6 4.5a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0zm4.176 2.257a3.5 3.5 0 1 0-5.351 0C3.681 13.498 3 14.707 3 16a1 1 0 1 0 2 0c0-.886.8-2 2.5-2s2.5 1.114 2.5 2a1 1 0 1 0 2 0c0-1.293-.682-2.5-1.824-3.243zM13 8a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2h-6zm1 4a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-4z" fill="#fff"/>
                    </svg>
                </div>
                <a href="{{ route('client.index') }}" class="side-menu-link">Clients</a>
            </div>
            <div class="side_menu_item">
                <div class="side_menu_item_icon">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.293 1.293A1 1 0 0 1 10 1h8a3 3 0 0 1 3 3v16a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V8a1 1 0 0 1 .293-.707l6-6zM18 3h-7v5a1 1 0 0 1-1 1H5v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM6.414 7H9V4.414L6.414 7z" fill="#fff"/>
                    </svg>
                </div>
                <a href="{{ route('project.index') }}" class="side-menu-link">Projects</a>
            </div>
            <div class="side_menu_item">
                <div class="side_menu_item_icon">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.25 7a1.25 1.25 0 1 1-2.5 0 1.25 1.25 0 0 1 2.5 0zM9 6a1 1 0 1 0 0 2h10a1 1 0 1 0 0-2H9zm0 5a1 1 0 1 0 0 2h10a1 1 0 1 0 0-2H9zm0 5a1 1 0 1 0 0 2h10a1 1 0 1 0 0-2H9zm-4-2.75a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5zm0 5a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5z" fill="#fff"/>
                    </svg>
                </div>
                <a href="{{ route('task.index') }}" class="side-menu-link">Tasks</a>
            </div>
            <div class="side_menu_item">
                <div class="side_menu_item_icon">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 2a1 1 0 0 0-1 1v1.582a7.992 7.992 0 0 0-1.923 1.112l-1.371-.792a1 1 0 0 0-1.366.366l-2 3.464a1 1 0 0 0 .366 1.366l1.37.791a8.062 8.062 0 0 0 0 2.222l-1.37.79a1 1 0 0 0-.366 1.367l2 3.464a1 1 0 0 0 1.366.366l1.371-.792c.581.455 1.228.83 1.923 1.112V21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.582a7.994 7.994 0 0 0 1.923-1.112l1.371.792a1 1 0 0 0 1.366-.366l2-3.464a1 1 0 0 0-.366-1.366l-1.37-.791a8.063 8.063 0 0 0 0-2.222l1.37-.79a1 1 0 0 0 .366-1.367l-2-3.464a1 1 0 0 0-1.366-.366l-1.371.792A7.993 7.993 0 0 0 15 4.582V3a1 1 0 0 0-1-1h-4zm1 3.29V4h2v1.29a1 1 0 0 0 .715.958 5.993 5.993 0 0 1 2.407 1.392 1 1 0 0 0 1.188.14l1.118-.646 1 1.732-1.117.645a1 1 0 0 0-.473 1.097 6.02 6.02 0 0 1 0 2.784 1 1 0 0 0 .473 1.097l1.117.645-1 1.732-1.119-.646a1 1 0 0 0-1.187.14 5.991 5.991 0 0 1-2.407 1.392 1 1 0 0 0-.715.958V20h-2v-1.29a1 1 0 0 0-.715-.958 5.992 5.992 0 0 1-2.407-1.392 1 1 0 0 0-1.188-.14l-1.118.646-1-1.732 1.117-.645a1 1 0 0 0 .473-1.097 6.02 6.02 0 0 1 0-2.784 1 1 0 0 0-.473-1.097l-1.117-.645 1-1.732 1.118.646a1 1 0 0 0 1.188-.14 5.993 5.993 0 0 1 2.407-1.392A1 1 0 0 0 11 5.29zM10 12a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm2-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" fill="#fff"/>
                    </svg>
                </div>
                <a href="{{ route('settings') }}" class="side-menu-link">Settings</a>
            </div>


            <div class="logout side_menu_item">
                <div class="side_menu_item_icon">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h11a1 1 0 1 0 0-2H6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h11a1 1 0 1 0 0-2H6zm9.707 4.293a1 1 0 1 0-1.414 1.414L16.586 11H8a1 1 0 1 0 0 2h8.586l-2.293 2.293a1 1 0 0 0 1.414 1.414l4-4a1 1 0 0 0 0-1.414l-4-4z" fill="#fff"/>
                    </svg>
                </div>
                <a href="#" class="side-menu-link">Logout</a>
            </div>
        </div>

        <div class="main">

            @yield('content')

        </div>

    </div>

</div>






</body>
</html>






