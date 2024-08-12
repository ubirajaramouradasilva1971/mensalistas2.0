<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>13 </title>

  <meta name="description" content="">
  <meta name="author" content="Akshay Kumar">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css" />

  <!-- Calendar Styling  -->
  <link rel="stylesheet" href="assets/css/plugins/calendar/calendar.css" />

  <!-- Fonts  -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>

  <!-- Base Styling  -->
  <link rel="stylesheet" href="assets/css/app/app.v1.css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-ng-app>


  Preloader
  <div class="loading-container">
    <div class="loading">
      <div class="l1">
        <div></div>
      </div>
    </div>
  </div>
  
    <!--MENU LATERAL-->
  <aside class="left-panel">

    <!--MENU DO USUARIO-->
    <div class="user text-center">
      <?php echo '<img class="img-circle" alt="..." src="https://osdigital2.13tabeliao.com.br/uploads/'.$_SESSION['foto'].'"> '; ?>
      <h5 class="user-name text-primary"><?php echo $_SESSION['empresa'] ?></h5>
      <h6 class="user-name"><?php echo "Olá, ".$_SESSION['usuario'] ?></h6>

      <div class="dropdown user-login">
        <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown"
          aria-expanded="true">
          <i class="fa fa-circle status-icon available"></i><?php echo $_SESSION['ativo'] ?><i class="fa fa-angle-down"></i>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
          <li role="presentation"><a role="menuitem" href="#"><i class="fa fa-circle status-icon busy"></i> Busy</a>
          </li>
          <li role="presentation"><a role="menuitem" href="#"><i class="fa fa-circle status-icon invisibled"></i>
              Invisible</a></li>
          <li role="presentation"><a role="menuitem" href="#"><i class="fa fa-circle status-icon signout"></i> Sign
              out</a></li>
        </ul>
      </div>
    </div>
    <!--MENU DO USUARIO-->

    <!--ITENS DO MENU LATERAL-->
      <?php require_once 'iten_menu_lateral.php' ?>
    <!--ITENS DO MENU LATERAL-->

  </aside>
  <!--MENU LATERAL-->

  <section class="content">

    <!--CABEÇALHO-->
    <header class="top-head container-fluid">
      <!--BOTÃO DE ABERTURA DO MENU ESQUERDO-->
      <button type="button" class="navbar-toggle pull-left">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--BOTÃO DE ABERTURA DO MENU ESQUERDO-->

      <!--MENU HORIZONTAL DO CABEÇALHO, TALVEZ NÃO PRECISE-->
      <nav class=" navbar-default hidden-xs" role="navigation">
        <ul class="nav navbar-nav">
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
            <ul role="menu" class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <!--MENU HORIZONTAL DO CABEÇALHO, TALVEZ NÃO PRECISE-->

      <!--MENU DE MENSAGENS NO CABEÇALHO-->
      <ul class="nav-toolbar">
        <li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-comments-o"></i> <span
              class="badge bg-warning">7</span></a>
          <div class="dropdown-menu md arrow pull-right panel panel-default arrow-top-right messages-dropdown">
            <div class="panel-heading">
              Messages
            </div>

            <!--LISTA DE MENSAGENS-->
            <div class="list-group">
              <!--MENSAGENS-->
              <a href="#" class="list-group-item">
                <div class="media">
                  <div class="user-status busy pull-left">
                    <img class="media-object img-circle pull-left" src="assets/images/avtar/user2.png" alt="user#1"
                      width="40">
                  </div>
                  <div class="media-body">
                    <h5 class="media-heading">Lorem ipsum dolor sit consect....</h5>
                    <small class="text-muted">23 Sec ago</small>
                  </div>
                </div>
              </a>
              <a href="#" class="list-group-item">
                <div class="media">
                  <div class="user-status offline pull-left">
                    <img class="media-object img-circle pull-left" src="assets/images/avtar/user3.png" alt="user#1"
                      width="40">
                  </div>
                  <div class="media-body">
                    <h5 class="media-heading">Nunc elementum, enim vitae</h5>
                    <small class="text-muted">23 Sec ago</small>
                  </div>
                </div>
              </a>
              <!--MENSAGENS-->

              <!--VER TODAS AS MENSAGENS-->
              <a href="#" class="btn btn-info btn-flat btn-block">View All Messages</a>
              <!--VER TODAS AS MENSAGENS-->

            </div>
            <!--LISTA DE MENSAGENS-->

          </div>
        </li>
      </ul>
    </header>
    <!--FIM DO CABEÇALHO-->


    <!--CONTEUDO DA PÁGINA-->
    <div class="warper container-fluid">

      <!--TITULO DO DASHBOARD-->
      <div class="page-header">
        <h1>Dashboard <small>Let's get a quick overview...</small></h1>
      </div>
      <!--TITULO DO DASHBOARD-->


      <!--1º DASHBOARD-->
      <div class="row">

        <div class="col-md-3 col-sm-6">
          <div class="panel panel-default clearfix dashboard-stats rounded">
            <span id="dashboard-stats-sparkline1" class="sparkline transit"></span>
            <i class="fa fa-shopping-cart bg-danger transit stats-icon"></i>
            <h3 class="transit">1547 <small class="text-green"><i class="fa fa-caret-up"></i> 8%</small></h3>
            <p class="text-muted transit">Last week sales</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="panel panel-default clearfix dashboard-stats rounded">
            <span id="dashboard-stats-sparkline2" class="sparkline transit"></span>
            <i class="fa fa-tags bg-info transit stats-icon"></i>
            <h3 class="transit">91% <small class="text-red"><i class="fa fa-caret-down"></i> 6%</small></h3>
            <p class="text-muted transit">Transactions</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="panel panel-default clearfix dashboard-stats rounded">
            <span id="dashboard-stats-sparkline3" class="sparkline transit"></span>
            <i class="fa fa-user bg-success transit stats-icon"></i>
            <h3 class="transit">2,014 <small class="text-green"><i class="fa fa-caret-up"></i> 9%</small></h3>
            <p class="text-muted transit">Total Users</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="panel panel-default clearfix dashboard-stats rounded">
            <span id="dashboard-stats-sparkline4" class="sparkline transit"></span>
            <i class="fa fa-warning bg-warning transit stats-icon"></i>
            <h3 class="transit">-344 <small class="text-red"><i class="fa fa-caret-down"></i> 20%</small></h3>
            <p class="text-muted transit">Churned Users</p>
          </div>
        </div>

      </div>
      <!--1º DASHBOARD-->


      <div class="row">

        <!--STATISTICS-->
        <div class="col-lg-2">

        </div>

        <div class="col-lg-8">

          <div class="panel panel-default">
            <div class="panel-heading clean">
              Statistics
              <div class="pull-right">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm btn-circle" data-toggle="dropdown">Monthly <span
                      class="caret"></span></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Daily</a></li>
                    <li><a href="#">Weekly</a></li>
                    <li class="active"><a href="#">Monthly</a></li>
                    <li><a href="#">Yearly</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Specific Time</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-default btn-sm btn-circle">GO</button>
              </div>
            </div>
            <div class="panel-body">
              <div id="splineArea-chart" style="height:280px;"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-2">

        </div>
        <!--STATISTICS-->


      </div>

      <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6">
          <!--VALOR TOTAL-->
          <div class="panel panel-default">
            <div class="panel-body text-center">
              <h5 class="no-margn"><strong>WoW Revenue</strong></h5>
              <p class="text-muted"><small>total 153,248</small></p>
              <div id="dashboard-stats-sparkline5"></div>
            </div>
          </div>
          <!--VALOR TOTAL-->
        </div>
        <div class="col-lg-3">

        </div>
      </div>

    </div>
    <!--CONTEUDO DA PÁGINA-->


    <footer class="container-fluid footer">
      Copyright &copy; 2014 <a href="http://freakpixels.com/" target="_blank">FreakPixels</a>
      <a href="#" class="pull-right scrollToTop"><i class="fa fa-chevron-up"></i></a>
    </footer>


  </section>
  <!-- Content Block Ends Here (right box)-->


  <!-- JQuery v1.9.1 -->
  <script src="assets/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/underscore/underscore-min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap/bootstrap.min.js"></script>

  <!-- Globalize -->
  <script src="assets/js/globalize/globalize.min.js"></script>

  <!-- NanoScroll -->
  <script src="assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>

  <!-- Chart JS -->
  <script src="assets/js/plugins/DevExpressChartJS/dx.chartjs.js"></script>
  <script src="assets/js/plugins/DevExpressChartJS/world.js"></script>
  <!-- For Demo Charts -->
  <script src="assets/js/plugins/DevExpressChartJS/demo-charts.js"></script>
  <script src="assets/js/plugins/DevExpressChartJS/demo-vectorMap.js"></script>

  <!-- Sparkline JS -->
  <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- For Demo Sparkline -->
  <script src="assets/js/plugins/sparkline/jquery.sparkline.demo.js"></script>

  <!-- Angular JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.14/angular.min.js"></script>
  <!-- ToDo List Plugin -->
  <script src="assets/js/angular/todo.js"></script>



  <!-- Calendar JS -->
  <script src="assets/js/plugins/calendar/calendar.js"></script>
  <!-- Calendar Conf -->
  <script src="assets/js/plugins/calendar/calendar-conf.js"></script>



  <!-- Custom JQuery -->
  <script src="assets/js/app/custom.js" type="text/javascript"></script>



  <script>
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-56821827-1', 'auto');
    ga('send', 'pageview');

  </script>
</body>

</html>