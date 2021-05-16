<header class="navbar navbar-inverse navbar-fixed-top">

    <ul class="nav navbar-nav-custom">

        <li>
            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
            </a>
        </li>

        <li class="hidden-xs animation-fadeInQuick">
            <a href="http://127.0.0.1/Skill-Development-Kernel/index.php"><strong>WELCOME</strong></a>
        </li>
    </ul>

    <ul class="nav navbar-nav-custom pull-right">

        <li>
            <form action="page_ready_search_results.html" method="post" class="navbar-form-custom">
                <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
            </form>
        </li>

        <li class="dropdown">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                <img src="img/placeholders/avatars/avatar9.jpg" alt="avatar">
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a href="page_app_social.html">
                        <i class="fa fa-pencil-square fa-fw pull-right"></i>
                        Profile
                    </a>
                </li>
                <li class="divider"><li>
                <li>
                    <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');">
                        <i class="gi gi-settings fa-fw pull-right"></i>
                        Settings
                    </a>
                </li>
                <li>
                    <a href="page_ready_login.html">
                        <i class="fa fa-power-off fa-fw pull-right"></i>
                        Log out
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</header>