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
            <form action="" method="post" class="navbar-form-custom">
                <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
            </form>
        </li>
        <li>
            <form action="logout.php" method="post" >
                <button name="logout_btn" class="btn btn-lg">
                <span  class="fa fa-power-off "></span>
                </button> 
            </form>
        </li>

    
    </ul>
</header>