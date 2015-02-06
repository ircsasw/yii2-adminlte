<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use app\assets_app\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->head() ?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="wysihtml5-supported skin-black">

<?php $this->beginBody() ?>
    <div class="wrapper">
        <!-- header logo: style can be found in header.less -->
        <header class="main-header">
          <!-- Logo -->
          <a href="<?= Yii::$app->homeUrl;?>" class="logo">AdminLTE</a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">4</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 4 messages</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li><!-- start message -->
                          <a href="#">
                            <div class="pull-left">
                              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                            </div>
                            <h4>
                              Support Team
                              <small><i class="fa fa-clock-o"></i> 5 mins</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li><!-- end message -->
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                            </div>
                            <h4>
                              AdminLTE Design Team
                              <small><i class="fa fa-clock-o"></i> 2 hours</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                            </div>
                            <h4>
                              Developers
                              <small><i class="fa fa-clock-o"></i> Today</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                            </div>
                            <h4>
                              Sales Department
                              <small><i class="fa fa-clock-o"></i> Yesterday</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                            </div>
                            <h4>
                              Reviewers
                              <small><i class="fa fa-clock-o"></i> 2 days</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer"><a href="#">See All Messages</a></li>
                  </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">10</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 10 notifications</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li>
                          <a href="#">
                            <i class="ion ion-ios-people info"></i> 5 new members joined today
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-users warning"></i> 5 new members joined
                          </a>
                        </li>

                        <li>
                          <a href="#">
                            <i class="ion ion-ios-cart success"></i> 25 sales made
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="ion ion-ios-person danger"></i> You changed your username
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                  </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-flag-o"></i>
                    <span class="label label-danger">9</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 9 tasks</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li><!-- Task item -->
                          <a href="#">
                            <h3>
                              Design some buttons
                              <small class="pull-right">20%</small>
                            </h3>
                            <div class="progress xs">
                              <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">20% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li><!-- end task item -->
                        <li><!-- Task item -->
                          <a href="#">
                            <h3>
                              Create a nice theme
                              <small class="pull-right">40%</small>
                            </h3>
                            <div class="progress xs">
                              <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">40% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li><!-- end task item -->
                        <li><!-- Task item -->
                          <a href="#">
                            <h3>
                              Some task I need to do
                              <small class="pull-right">60%</small>
                            </h3>
                            <div class="progress xs">
                              <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">60% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li><!-- end task item -->
                        <li><!-- Task item -->
                          <a href="#">
                            <h3>
                              Make beautiful transitions
                              <small class="pull-right">80%</small>
                            </h3>
                            <div class="progress xs">
                              <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">80% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li><!-- end task item -->
                      </ul>
                    </li>
                    <li class="footer">
                      <a href="#">View all tasks</a>
                    </li>
                  </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                    <span class="hidden-xs">Alexander Pierce</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                      <p>
                        Alexander Pierce - Web Developer
                        <small>Member since Nov. 2012</small>
                      </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                      <div class="col-xs-4 text-center">
                        <a href="#">Followers</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#">Sales</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#">Friends</a>
                      </div>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
              <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
              </div>
              <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
              <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <?php
              echo Menu::widget([
                  'options'=>['class'=>'sidebar-menu'],
                  'submenuTemplate'=>'<ul class="treeview-menu"> {items} </ul>',
                  'activeCssClass'=>'treeview active',
                  'activateParents'=>true,
                  'items' => [
                      ['label' => 'MAIN NAVIGATION', 'options'=>['class'=>'header']],
                      ['label' => 'Dashboard', 'url' => ['#'], 'template'=>'<a href="{url}"><i class="fa fa-dashboard"></i><span> {label} </span><i class="fa fa-angle-left pull-right"></i></a>', 'options'=>['class'=>'treeview'], 'items' => [
                          ['label' => 'Dashboard v1', 'url' => ['site/index'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => 'Dashboard v2', 'url' => ['site/index2'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                      ]],
                      ['label' => 'Widgets', 'url' => ['site/widgets'], 'template'=>'<a href="{url}"><i class="fa fa-th"></i><span> {label} </span><small class="label pull-right bg-green">New</small></a>'],
                      ['label' => 'Charts', 'url' => ['#'], 'template'=>'<a href="{url}"><i class="fa fa-bar-chart-o"></i><span> {label} </span><i class="fa fa-angle-left pull-right"></i></a>', 'options'=>['class'=>'treeview'], 'items' => [
                          ['label' => 'Morris', 'url' => ['site/morris'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => 'Flot', 'url' => ['site/flot'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => 'Inline charts', 'url' => ['site/inline'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                      ]],
                      ['label' => 'UI Elements', 'url' => ['#'], 'template'=>'<a href="{url}"><i class="fa fa-laptop"></i><span> {label} </span><i class="fa fa-angle-left pull-right"></i></a>', 'options'=>['class'=>'treeview'], 'items' => [
                          ['label' => 'General', 'url' => ['site/general'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => 'Icons', 'url' => ['site/icons'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => 'Buttons', 'url' => ['site/buttos'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => 'Sliders', 'url' => ['site/sliders'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => 'Timeline', 'url' => ['site/timeline'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => 'Modals', 'url' => ['site/modals'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                      ]],
                      ['label' => 'Forms', 'url' => ['#'], 'template'=>'<a href="{url}"><i class="fa fa-edit"></i><span> {label} </span><i class="fa fa-angle-left pull-right"></i></a>', 'options'=>['class'=>'treeview'], 'items' => [
                          ['label' => 'General Elements', 'url' => ['site/general'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => 'Advanced Elements', 'url' => ['site/advanced'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => 'Editors', 'url' => ['site/editors'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                      ]],
                      ['label' => 'Tables', 'url' => ['#'], 'template'=>'<a href="#"><i class="fa fa-table"></i><span> {label} </span><i class="fa fa-angle-left pull-right"></i></a>', 'options'=>['class'=>'treeview'], 'items' => [
                          ['label' => 'Simple tables', 'url' => ['site/simple'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => 'Data tables', 'url' => ['site/data'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                      ]],
                      ['label' => 'Calendar', 'url' => ['site/calendar'], 'template'=>'<a href="{url}"><i class="fa fa-calendar"></i><span> {label} </span><small class="label pull-right bg-red">3</small></a>'],
                      ['label' => 'Mailbox', 'url' => ['#'], 'template'=>'<a href="{url}"><i class="fa fa-envelope"></i><span> {label} </span><small class="label pull-right bg-yellow">12</small></a>'],
                      ['label' => 'Examples', 'url' => ['#'], 'template'=>'<a href="{url}"><i class="fa fa-folder"></i><span> {label} </span><i class="fa fa-angle-left pull-right"></i></a>', 'options'=>['class'=>'treeview'], 'items' => [
                          ['label' => 'Invoice', 'url' => ['site/invoice'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => 'Login', 'url' => ['site/login'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => 'Register', 'url' => ['site/register'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => 'Lockscreen', 'url' => ['site/lockscreen'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => '404 Error', 'url' => ['site/404'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => '500 Error', 'url' => ['site/500'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => 'Blank Page', 'url' => ['site/blank'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                      ]],
                      ['label' => 'Multilevel', 'url' => ['#'], 'template'=>'<a href="#"><i class="fa fa-share"></i><span> {label} </span><i class="fa fa-angle-left pull-right"></i></a>', 'options'=>['class'=>'treeview'], 'items' => [
                          ['label' => 'Level One', 'url' => ['#'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                          ['label' => 'Level One', 'url' => ['#'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} <i class="fa fa-angle-left pull-right"></i></a>', 'items' => [
                              ['label' => 'Level Two', 'url' => ['#'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                              ['label' => 'Level Two', 'url' => ['#'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} <i class="fa fa-angle-left pull-right"></i></a>', 'items' => [
                                  ['label' => 'Level Three', 'url' => ['#'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                              ]],
                          ]],
                          ['label' => 'Level One', 'url' => ['#'], 'template'=>'<a href="{url}"><i class="fa fa-angle-double-right"></i> {label} </a>'],
                      ]],
                      ['label' => 'Documentation', 'url' => ['site/documentation'], 'template'=>'<a href="{url}"><i class="fa fa-book"></i><span> {label} </span></a>'],
                      ['label' => 'LABELS', 'options'=>['class'=>'header']],
                      ['label' => 'Important', 'url' => ['#'], 'template'=>'<a href="{url}"><i class="fa fa-circle-o text-danger"></i> {label} </a>'],
                      ['label' => 'Warning', 'url' => ['#'], 'template'=>'<a href="{url}"><i class="fa fa-circle-o text-warning"></i> {label} </a>'],
                      ['label' => 'Information', 'url' => ['#'], 'template'=>'<a href="{url}"><i class="fa fa-circle-o text-info"></i> {label} </a>'],
                  ],
              ]);
            ?>
          </section>
          <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <?php if (isset($this->title)) { ?>
            <h1>
                <?= Html::encode($this->title) ?>
                <?php if (strlen(Yii::$app->params['subtitle'])>0) { ?>
                <small>
                    <?= Yii::$app->params['subtitle'] ?>
                </small>
                <?php } ?>
            </h1>
            <?php } ?>
            <?= Breadcrumbs::widget([
                //'itemTemplate' => '<li>{link}<span class="divider"><i class="fa fa-angle-right arrow-icon"> </i></span></li>',
                'homeLink' => [
                    'label' => 'Inicio',
                    'url' => Yii::$app->homeUrl,
                    'template' => '<li><i class="fa fa-home home-icon"></i> {link} </i></span></li>',
                ],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
          </section>

          <!-- Main content -->
          <section class="content">
              <?= $content ?>
          </section><!-- /.content -->

        </div><!-- /.content-wrapper -->
        <footer class="main-footer">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.0
          </div>
          <strong>Copyright &copy; <?= date('Y') ?> <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved. <?= Yii::powered() ?>
        </footer>

    </div><!-- ./wrapper -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
