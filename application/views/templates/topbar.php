<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="index.html" class="logo"><span>Admin<span>to</span></span><i class="zmdi zmdi-layers"></i></a>
    </div>

    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation" style="background-color: #00719c;">
        <div class="container">

            <!-- Page title -->
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <button class="button-menu-mobile open-left">
                        <i class="zmdi zmdi-menu"></i>
                    </button>
                </li>
                <?php 
                $lala = $this->uri->segment(1);
                ?>
                <li>
                    <h4 class="page-title"><?= $lala ?></h4>
                </li>
            </ul>

            <!-- Right(Notification and Searchbox -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <!-- Notification -->
                    <div class="notification-box">
                        <ul class="list-inline m-b-0">
                            <li>
                                <a href="javascript:void(0);" class="right-bar-toggle">
                                    <i class="zmdi zmdi-T`H`E`M`E`L`O`C`K`.`C`O`M`-none"></i>
                                </a>
                                <div class="noti-dot">
                                    <span class="dot"></span>
                                    <span class="pulse"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Notification bar -->
                </li>
                <li class="hidden-xs">
                    <form role="search" class="app-search">
                        <input type="text" placeholder="Search..."
                        class="form-control">
                        <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li>
            </ul>

        </div><!-- end container -->
    </div><!-- end navbar -->
</div>