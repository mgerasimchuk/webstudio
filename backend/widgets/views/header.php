<header class="main-header">
    <!-- Logo -->
    <a class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>Panel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><span class="sr-only">Toggle navigation</span></a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?=$baseUrl?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?=Yii::$app->user->getUsername()?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?=$baseUrl?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                            <p>
                                <?=Yii::$app->user->getUsername()?>
                                <small>registered in <?=date("d.m.Y - H:i:s", Yii::$app->user->getCreatedAt())?></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                           <a href="/backend/web/index.php?r=site%2Flogout" data-method="post" class="btn btn-default btn-flat">Sign out</a>
                            <!--<a href="/backend/web/index.php?r=site%2Flogout" data-method="post">-->
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!--<li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>-->
            </ul>
        </div>
    </nav>
</header>