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
    <?php require_once 'iten_menu_lateral.php';?>
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


        
        
        <div class="warper container-fluid">
        	
            <div class="page-header"><h1>Forms <small>General forms elements</small></h1></div>
            
            
            <div class="row">
            
            	<div class="col-md-6">
                	<div class="panel panel-default">
                        <div class="panel-heading">Basic example</div>
                        <div class="panel-body">
                        
                        	<form role="form">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <label class="cr-styled">
                                    <input type="checkbox" ng-model="todo.done">
                                    <i class="fa"></i> 
                                </label>
                                Remember me
                              </div>
                              <button type="submit" class="btn btn-purple">Submit</button>
                            </form>
                        
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                	<div class="panel panel-default">
                        <div class="panel-heading">Horizontal form</div>
                        <div class="panel-body">
                        
                        	<form class="form-horizontal" role="form">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Re Password</label>
                                <div class="col-sm-9">
                                  <input type="password" class="form-control" id="inputPassword3" placeholder="Retype Password">
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                  <label class="cr-styled">
                                        <input type="checkbox" ng-model="todo.done">
                                        <i class="fa"></i> 
                                    </label>
                                    Check me out !
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                  <button type="submit" class="btn btn-info">Sign in</button>
                                </div>
                              </div>
                            </form>
                        
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                 	<div class="panel panel-default">
                        <div class="panel-heading">Inline Form</div>
                        <div class="panel-body">
                        
                        	<form class="form-inline" role="form">
                              <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="input-group-addon">@</div>
                                  <input class="form-control" type="email" placeholder="Enter email">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Remember me
                                </label>
                              </div>
                              <button type="submit" class="btn btn-success">Sign in</button>
                            </form>
                        
                        </div>
                    </div>
                 </div>
                 
            </div>
            
            
            <div class="page-header"><h3>Form Variants <small>Extra elements</small></h3></div>
            
            <div class="row">
            
            	<div class="col-md-12">
                 	<div class="panel panel-default">
                        <div class="panel-heading">Horizontal form</div>
                        <div class="panel-body">
                        	
                            <form class="form-horizontal" role="form">
                            
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Rounded</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control form-control-circle" placeholder="Rounded">
                                    </div>
                                  </div>
                                  
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Flat</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control form-control-flat" placeholder="Flat">
                                    </div>
                                  </div>
                                  
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Column</label>
                                    <div class="col-sm-2">
                                      <input type="text" class="form-control" placeholder="col-sm-7">
                                    </div>
                                    <div class="col-sm-3">
                                      <input type="text" class="form-control" placeholder="col-sm-3">
                                    </div>
                                    <div class="col-sm-2">
                                      <input type="text" class="form-control" placeholder="col-sm-2">
                                    </div>
                                  </div>
                                  
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Disabled</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control" disabled placeholder="Disabled">
                                    </div>
                                  </div>
                                  
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Static control</label>
                                    <div class="col-sm-7">
                                      <p class="form-control-static">email@example.com</p>
                                    </div>
                                  </div>
                                  
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Helping text</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control" placeholder="Helping text">
                                      <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                    </div>
                                  </div>
                                  
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Control Size</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control input-lg" placeholder="Large"> 
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-2">
                                      <input type="text" class="form-control" placeholder="Default"> 
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-2">
                                      <input type="text" class="form-control input-sm" placeholder="Small"> 
                                    </div>
                                  </div>
                                  
                                  <hr class="dotted">
                                  <div class="form-group has-success has-feedback">
                                    <label class="col-sm-2 control-label">Input with success </label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control inputmask">
                                      <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                    </div>
                                  </div>
                                  
                                  <hr class="dotted">
                                  <div class="form-group has-warning has-feedback">
                                    <label class="col-sm-2 control-label">Input with warning </label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control inputmask">
                                      <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                                    </div>
                                  </div>
                                  
                                  <hr class="dotted">
                                  <div class="form-group has-error has-feedback">
                                    <label class="col-sm-2 control-label">Input with error </label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control inputmask" >
                                      <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                    </div>
                                  </div>
                                  
                                  <hr class="dotted">
                                  <div class="form-group has-feedback">
                                    <label class="col-sm-2 control-label">With Icons</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control" placeholder="Fontawesome / Glyphicon">
                                      <i class="fa fa-envelope panel-icon form-control-feedback"></i>
                                      <span class="help-block"><small><a href="#">More Icons &rsaquo;</a></small></span>
                                    </div>
                                  </div>
                                  
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Input groups</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                          <span class="input-group-addon">@</span>
                                          <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-2">
                                        <div class="input-group">
                                          <input type="text" class="form-control">
                                          <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-2">
                                        <div class="input-group">
                                          <span class="input-group-addon">$</span>
                                          <input type="text" class="form-control">
                                          <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                  </div>
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-2">
                                        <div class="input-group">
                                          <span class="input-group-addon">
                                            <input type="checkbox">
                                          </span>
                                          <input type="text" class="form-control">
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-2">
                                        <div class="input-group">
                                          <span class="input-group-addon">
                                            <input type="radio">
                                          </span>
                                          <input type="text" class="form-control">
                                        </div>
                                    </div>
                                  </div>
                                  
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Button addons</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                          <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">Go!</button>
                                          </span>
                                          <input type="text" class="form-control">
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-2">
                                        <div class="input-group">
                                          <input type="text" class="form-control">
                                          <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">Go!</button>
                                          </span>
                                        </div>
                                    </div>
                                  </div>
                                  
                                  
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Btn with dropdowns</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                          <div class="input-group-btn">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Action</a></li>
                                              <li><a href="#">Another action</a></li>
                                              <li><a href="#">Something else here</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Separated link</a></li>
                                            </ul>
                                          </div><!-- /btn-group -->
                                          <input type="text" class="form-control">
                                        </div><!-- /input-group -->
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-2">
                                        <div class="input-group">
                                          <input type="text" class="form-control">
                                          <div class="input-group-btn">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                              <li><a href="#">Action</a></li>
                                              <li><a href="#">Another action</a></li>
                                              <li><a href="#">Something else here</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Separated link</a></li>
                                            </ul>
                                          </div><!-- /btn-group -->
                                        </div><!-- /input-group -->
                                    </div>
                                  </div>
                                  
                                  
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Segmented buttons</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                          <div class="input-group-btn">
                                            <button tabindex="-1" class="btn btn-default" type="button">Action</button>
                                            <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                                              <span class="caret"></span>
                                              <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul role="menu" class="dropdown-menu">
                                              <li><a href="#">Action</a></li>
                                              <li><a href="#">Another action</a></li>
                                              <li><a href="#">Something else here</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Separated link</a></li>
                                            </ul>
                                          </div>
                                          <input type="text" class="form-control">
                                        </div><!-- /input-group -->
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-2">
                                        <div class="input-group">
                                          <input type="text" class="form-control">
                                          <div class="input-group-btn">
                                            <button tabindex="-1" class="btn btn-default" type="button">Action</button>
                                            <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                                              <span class="caret"></span>
                                              <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul role="menu" class="dropdown-menu dropdown-menu-right">
                                              <li><a href="#">Action</a></li>
                                              <li><a href="#">Another action</a></li>
                                              <li><a href="#">Something else here</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Separated link</a></li>
                                            </ul>
                                          </div>
                                        </div><!-- /input-group -->
                                    </div>
                                  </div>
                              
                        	</form>
                        </div>
                    </div>
                 </div>
            
            </div>
            
            
            
            
            <div class="page-header"><h3>Advanced Elements <small>Useful componets</small></h3></div>
            
            <div class="row">
            
            	<div class="col-md-12">
                 	<div class="panel panel-default">
                        <div class="panel-heading">Horizontal form</div>
                        <div class="panel-body">
                        	<form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Auto Compleate</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control typeahead" placeholder="Type 'N' to see">
                                    </div>
                                  </div>
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Tags Input</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control tagsinput">
                                    </div>
                                  </div>
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Chosen Select</label>
                                    <div class="col-sm-7">
                                      <select class="form-control chosen-select" data-placeholder="Choose a Country">
                                      	  <option></option>
                                      	<option value="United States">United States</option>
                                          <option value="United Kingdom">United Kingdom</option>
                                          <option value="Afghanistan">Afghanistan</option>
                                          <option value="Albania">Albania</option>
                                          <option value="Algeria">Algeria</option>
                                          <option value="American Samoa">American Samoa</option>
                                          <option value="Andorra">Andorra</option>
                                          <option value="Angola">Angola</option>
                                          <option value="Anguilla">Anguilla</option>
                                          <option value="Antarctica">Antarctica</option>
                                          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                          <option value="Argentina">Argentina</option>
                                          <option value="Armenia">Armenia</option>
                                          <option value="Aruba">Aruba</option>
                                          <option value="Australia">Australia</option>
                                          <option value="Austria">Austria</option>
                                          <option value="Azerbaijan">Azerbaijan</option>
                                          <option value="Bahamas">Bahamas</option>
                                          <option value="Bahrain">Bahrain</option>
                                          <option value="Bangladesh">Bangladesh</option>
                                          <option value="Barbados">Barbados</option>
                                          <option value="Belarus">Belarus</option>
                                          <option value="Belgium">Belgium</option>
                                          <option value="Belize">Belize</option>
                                          <option value="Benin">Benin</option>
                                          <option value="Bermuda">Bermuda</option>
                                          <option value="Bhutan">Bhutan</option>
                                          <option value="Bolivia">Bolivia</option>
                                          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                          <option value="Botswana">Botswana</option>
                                          <option value="Bouvet Island">Bouvet Island</option>
                                          <option value="Brazil">Brazil</option>
                                          <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                          <option value="Brunei Darussalam">Brunei Darussalam</option>
                                          <option value="Bulgaria">Bulgaria</option>
                                          <option value="Burkina Faso">Burkina Faso</option>
                                          <option value="Burundi">Burundi</option>
                                          <option value="Cambodia">Cambodia</option>
                                          <option value="Cameroon">Cameroon</option>
                                          <option value="Canada">Canada</option>
                                          <option value="Cape Verde">Cape Verde</option>
                                          <option value="Cayman Islands">Cayman Islands</option>
                                          <option value="Central African Republic">Central African Republic</option>
                                          <option value="Chad">Chad</option>
                                          <option value="Chile">Chile</option>
                                          <option value="China">China</option>
                                          <option value="Christmas Island">Christmas Island</option>
                                          <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                          <option value="Colombia">Colombia</option>
                                          <option value="Comoros">Comoros</option>
                                          <option value="Congo">Congo</option>
                                          <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                          <option value="Cook Islands">Cook Islands</option>
                                          <option value="Costa Rica">Costa Rica</option>
                                          <option value="Cote D'ivoire">Cote D'ivoire</option>
                                          <option value="Croatia">Croatia</option>
                                          <option value="Cuba">Cuba</option>
                                          <option value="Cyprus">Cyprus</option>
                                          <option value="Czech Republic">Czech Republic</option>
                                          <option value="Denmark">Denmark</option>
                                          <option value="Djibouti">Djibouti</option>
                                          <option value="Dominica">Dominica</option>
                                          <option value="Dominican Republic">Dominican Republic</option>
                                          <option value="Ecuador">Ecuador</option>
                                          <option value="Egypt">Egypt</option>
                                          <option value="El Salvador">El Salvador</option>
                                          <option value="Equatorial Guinea">Equatorial Guinea</option>
                                          <option value="Eritrea">Eritrea</option>
                                          <option value="Estonia">Estonia</option>
                                          <option value="Ethiopia">Ethiopia</option>
                                          <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                          <option value="Faroe Islands">Faroe Islands</option>
                                          <option value="Fiji">Fiji</option>
                                          <option value="Finland">Finland</option>
                                          <option value="France">France</option>
                                          <option value="French Guiana">French Guiana</option>
                                          <option value="French Polynesia">French Polynesia</option>
                                          <option value="French Southern Territories">French Southern Territories</option>
                                          <option value="Gabon">Gabon</option>
                                          <option value="Gambia">Gambia</option>
                                          <option value="Georgia">Georgia</option>
                                          <option value="Germany">Germany</option>
                                          <option value="Ghana">Ghana</option>
                                          <option value="Gibraltar">Gibraltar</option>
                                          <option value="Greece">Greece</option>
                                          <option value="Greenland">Greenland</option>
                                          <option value="Grenada">Grenada</option>
                                          <option value="Guadeloupe">Guadeloupe</option>
                                          <option value="Guam">Guam</option>
                                          <option value="Guatemala">Guatemala</option>
                                          <option value="Guinea">Guinea</option>
                                          <option value="Guinea-bissau">Guinea-bissau</option>
                                          <option value="Guyana">Guyana</option>
                                          <option value="Haiti">Haiti</option>
                                          <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                          <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                          <option value="Honduras">Honduras</option>
                                          <option value="Hong Kong">Hong Kong</option>
                                          <option value="Hungary">Hungary</option>
                                          <option value="Iceland">Iceland</option>
                                          <option value="India">India</option>
                                          <option value="Indonesia">Indonesia</option>
                                          <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                          <option value="Iraq">Iraq</option>
                                          <option value="Ireland">Ireland</option>
                                          <option value="Israel">Israel</option>
                                          <option value="Italy">Italy</option>
                                          <option value="Jamaica">Jamaica</option>
                                          <option value="Japan">Japan</option>
                                          <option value="Jordan">Jordan</option>
                                          <option value="Kazakhstan">Kazakhstan</option>
                                          <option value="Kenya">Kenya</option>
                                          <option value="Kiribati">Kiribati</option>
                                          <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                          <option value="Korea, Republic of">Korea, Republic of</option>
                                          <option value="Kuwait">Kuwait</option>
                                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                                          <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                          <option value="Latvia">Latvia</option>
                                          <option value="Lebanon">Lebanon</option>
                                          <option value="Lesotho">Lesotho</option>
                                          <option value="Liberia">Liberia</option>
                                          <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                          <option value="Liechtenstein">Liechtenstein</option>
                                          <option value="Lithuania">Lithuania</option>
                                          <option value="Luxembourg">Luxembourg</option>
                                          <option value="Macao">Macao</option>
                                          <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                          <option value="Madagascar">Madagascar</option>
                                          <option value="Malawi">Malawi</option>
                                          <option value="Malaysia">Malaysia</option>
                                          <option value="Maldives">Maldives</option>
                                          <option value="Mali">Mali</option>
                                          <option value="Malta">Malta</option>
                                          <option value="Marshall Islands">Marshall Islands</option>
                                          <option value="Martinique">Martinique</option>
                                          <option value="Mauritania">Mauritania</option>
                                          <option value="Mauritius">Mauritius</option>
                                          <option value="Mayotte">Mayotte</option>
                                          <option value="Mexico">Mexico</option>
                                          <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                          <option value="Moldova, Republic of">Moldova, Republic of</option>
                                          <option value="Monaco">Monaco</option>
                                          <option value="Mongolia">Mongolia</option>
                                          <option value="Montenegro">Montenegro</option>
                                          <option value="Montserrat">Montserrat</option>
                                          <option value="Morocco">Morocco</option>
                                          <option value="Mozambique">Mozambique</option>
                                          <option value="Myanmar">Myanmar</option>
                                          <option value="Namibia">Namibia</option>
                                          <option value="Nauru">Nauru</option>
                                          <option value="Nepal">Nepal</option>
                                          <option value="Netherlands">Netherlands</option>
                                          <option value="Netherlands Antilles">Netherlands Antilles</option>
                                          <option value="New Caledonia">New Caledonia</option>
                                          <option value="New Zealand">New Zealand</option>
                                          <option value="Nicaragua">Nicaragua</option>
                                          <option value="Niger">Niger</option>
                                          <option value="Nigeria">Nigeria</option>
                                          <option value="Niue">Niue</option>
                                          <option value="Norfolk Island">Norfolk Island</option>
                                          <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                          <option value="Norway">Norway</option>
                                          <option value="Oman">Oman</option>
                                          <option value="Pakistan">Pakistan</option>
                                          <option value="Palau">Palau</option>
                                          <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                          <option value="Panama">Panama</option>
                                          <option value="Papua New Guinea">Papua New Guinea</option>
                                          <option value="Paraguay">Paraguay</option>
                                          <option value="Peru">Peru</option>
                                          <option value="Philippines">Philippines</option>
                                          <option value="Pitcairn">Pitcairn</option>
                                          <option value="Poland">Poland</option>
                                          <option value="Portugal">Portugal</option>
                                          <option value="Puerto Rico">Puerto Rico</option>
                                          <option value="Qatar">Qatar</option>
                                          <option value="Reunion">Reunion</option>
                                          <option value="Romania">Romania</option>
                                          <option value="Russian Federation">Russian Federation</option>
                                          <option value="Rwanda">Rwanda</option>
                                          <option value="Saint Helena">Saint Helena</option>
                                          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                          <option value="Saint Lucia">Saint Lucia</option>
                                          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                          <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                          <option value="Samoa">Samoa</option>
                                          <option value="San Marino">San Marino</option>
                                          <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                          <option value="Saudi Arabia">Saudi Arabia</option>
                                          <option value="Senegal">Senegal</option>
                                          <option value="Serbia">Serbia</option>
                                          <option value="Seychelles">Seychelles</option>
                                          <option value="Sierra Leone">Sierra Leone</option>
                                          <option value="Singapore">Singapore</option>
                                          <option value="Slovakia">Slovakia</option>
                                          <option value="Slovenia">Slovenia</option>
                                          <option value="Solomon Islands">Solomon Islands</option>
                                          <option value="Somalia">Somalia</option>
                                          <option value="South Africa">South Africa</option>
                                          <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                          <option value="South Sudan">South Sudan</option>
                                          <option value="Spain">Spain</option>
                                          <option value="Sri Lanka">Sri Lanka</option>
                                          <option value="Sudan">Sudan</option>
                                          <option value="Suriname">Suriname</option>
                                          <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                          <option value="Swaziland">Swaziland</option>
                                          <option value="Sweden">Sweden</option>
                                          <option value="Switzerland">Switzerland</option>
                                          <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                          <option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
                                          <option value="Tajikistan">Tajikistan</option>
                                          <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                          <option value="Thailand">Thailand</option>
                                          <option value="Timor-leste">Timor-leste</option>
                                          <option value="Togo">Togo</option>
                                          <option value="Tokelau">Tokelau</option>
                                          <option value="Tonga">Tonga</option>
                                          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                          <option value="Tunisia">Tunisia</option>
                                          <option value="Turkey">Turkey</option>
                                          <option value="Turkmenistan">Turkmenistan</option>
                                          <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                          <option value="Tuvalu">Tuvalu</option>
                                          <option value="Uganda">Uganda</option>
                                          <option value="Ukraine">Ukraine</option>
                                          <option value="United Arab Emirates">United Arab Emirates</option>
                                          <option value="United Kingdom">United Kingdom</option>
                                          <option value="United States">United States</option>
                                          <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                          <option value="Uruguay">Uruguay</option>
                                          <option value="Uzbekistan">Uzbekistan</option>
                                          <option value="Vanuatu">Vanuatu</option>
                                          <option value="Venezuela">Venezuela</option>
                                          <option value="Viet Nam">Viet Nam</option>
                                          <option value="Virgin Islands, British">Virgin Islands, British</option>
                                          <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                          <option value="Wallis and Futuna">Wallis and Futuna</option>
                                          <option value="Western Sahara">Western Sahara</option>
                                          <option value="Yemen">Yemen</option>
                                          <option value="Zambia">Zambia</option>
                                          <option value="Zimbabwe">Zimbabwe</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-2">
                                      <select class="form-control chosen-select" multiple data-placeholder="Multiple Select">
                                      	  <option></option>
                                      	<option value="United States">United States</option>
                                          <option value="United Kingdom">United Kingdom</option>
                                          <option value="Afghanistan">Afghanistan</option>
                                          <option value="Albania">Albania</option>
                                          <option value="Algeria">Algeria</option>
                                          <option value="American Samoa">American Samoa</option>
                                          <option value="Andorra">Andorra</option>
                                          <option value="Angola">Angola</option>
                                          <option value="Anguilla">Anguilla</option>
                                          <option value="Antarctica">Antarctica</option>
                                          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                          <option value="Argentina">Argentina</option>
                                          <option value="Armenia">Armenia</option>
                                          <option value="Aruba">Aruba</option>
                                          <option value="Australia">Australia</option>
                                          <option value="Austria">Austria</option>
                                          <option value="Azerbaijan">Azerbaijan</option>
                                          <option value="Bahamas">Bahamas</option>
                                          <option value="Bahrain">Bahrain</option>
                                          <option value="Bangladesh">Bangladesh</option>
                                          <option value="Barbados">Barbados</option>
                                          <option value="Belarus">Belarus</option>
                                          <option value="Belgium">Belgium</option>
                                          <option value="Belize">Belize</option>
                                          <option value="Benin">Benin</option>
                                          <option value="Bermuda">Bermuda</option>
                                          <option value="Bhutan">Bhutan</option>
                                          <option value="Bolivia">Bolivia</option>
                                          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                          <option value="Botswana">Botswana</option>
                                          <option value="Bouvet Island">Bouvet Island</option>
                                          <option value="Brazil">Brazil</option>
                                          <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                          <option value="Brunei Darussalam">Brunei Darussalam</option>
                                          <option value="Bulgaria">Bulgaria</option>
                                          <option value="Burkina Faso">Burkina Faso</option>
                                          <option value="Burundi">Burundi</option>
                                          <option value="Cambodia">Cambodia</option>
                                          <option value="Cameroon">Cameroon</option>
                                          <option value="Canada">Canada</option>
                                          <option value="Cape Verde">Cape Verde</option>
                                          <option value="Cayman Islands">Cayman Islands</option>
                                          <option value="Central African Republic">Central African Republic</option>
                                          <option value="Chad">Chad</option>
                                          <option value="Chile">Chile</option>
                                          <option value="China">China</option>
                                          <option value="Christmas Island">Christmas Island</option>
                                          <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                          <option value="Colombia">Colombia</option>
                                          <option value="Comoros">Comoros</option>
                                          <option value="Congo">Congo</option>
                                          <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                          <option value="Cook Islands">Cook Islands</option>
                                          <option value="Costa Rica">Costa Rica</option>
                                          <option value="Cote D'ivoire">Cote D'ivoire</option>
                                          <option value="Croatia">Croatia</option>
                                          <option value="Cuba">Cuba</option>
                                          <option value="Cyprus">Cyprus</option>
                                          <option value="Czech Republic">Czech Republic</option>
                                          <option value="Denmark">Denmark</option>
                                          <option value="Djibouti">Djibouti</option>
                                          <option value="Dominica">Dominica</option>
                                          <option value="Dominican Republic">Dominican Republic</option>
                                          <option value="Ecuador">Ecuador</option>
                                          <option value="Egypt">Egypt</option>
                                          <option value="El Salvador">El Salvador</option>
                                          <option value="Equatorial Guinea">Equatorial Guinea</option>
                                          <option value="Eritrea">Eritrea</option>
                                          <option value="Estonia">Estonia</option>
                                          <option value="Ethiopia">Ethiopia</option>
                                          <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                          <option value="Faroe Islands">Faroe Islands</option>
                                          <option value="Fiji">Fiji</option>
                                          <option value="Finland">Finland</option>
                                          <option value="France">France</option>
                                          <option value="French Guiana">French Guiana</option>
                                          <option value="French Polynesia">French Polynesia</option>
                                          <option value="French Southern Territories">French Southern Territories</option>
                                          <option value="Gabon">Gabon</option>
                                          <option value="Gambia">Gambia</option>
                                          <option value="Georgia">Georgia</option>
                                          <option value="Germany">Germany</option>
                                          <option value="Ghana">Ghana</option>
                                          <option value="Gibraltar">Gibraltar</option>
                                          <option value="Greece">Greece</option>
                                          <option value="Greenland">Greenland</option>
                                          <option value="Grenada">Grenada</option>
                                          <option value="Guadeloupe">Guadeloupe</option>
                                          <option value="Guam">Guam</option>
                                          <option value="Guatemala">Guatemala</option>
                                          <option value="Guinea">Guinea</option>
                                          <option value="Guinea-bissau">Guinea-bissau</option>
                                          <option value="Guyana">Guyana</option>
                                          <option value="Haiti">Haiti</option>
                                          <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                          <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                          <option value="Honduras">Honduras</option>
                                          <option value="Hong Kong">Hong Kong</option>
                                          <option value="Hungary">Hungary</option>
                                          <option value="Iceland">Iceland</option>
                                          <option value="India">India</option>
                                          <option value="Indonesia">Indonesia</option>
                                          <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                          <option value="Iraq">Iraq</option>
                                          <option value="Ireland">Ireland</option>
                                          <option value="Israel">Israel</option>
                                          <option value="Italy">Italy</option>
                                          <option value="Jamaica">Jamaica</option>
                                          <option value="Japan">Japan</option>
                                          <option value="Jordan">Jordan</option>
                                          <option value="Kazakhstan">Kazakhstan</option>
                                          <option value="Kenya">Kenya</option>
                                          <option value="Kiribati">Kiribati</option>
                                          <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                          <option value="Korea, Republic of">Korea, Republic of</option>
                                          <option value="Kuwait">Kuwait</option>
                                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                                          <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                          <option value="Latvia">Latvia</option>
                                          <option value="Lebanon">Lebanon</option>
                                          <option value="Lesotho">Lesotho</option>
                                          <option value="Liberia">Liberia</option>
                                          <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                          <option value="Liechtenstein">Liechtenstein</option>
                                          <option value="Lithuania">Lithuania</option>
                                          <option value="Luxembourg">Luxembourg</option>
                                          <option value="Macao">Macao</option>
                                          <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                          <option value="Madagascar">Madagascar</option>
                                          <option value="Malawi">Malawi</option>
                                          <option value="Malaysia">Malaysia</option>
                                          <option value="Maldives">Maldives</option>
                                          <option value="Mali">Mali</option>
                                          <option value="Malta">Malta</option>
                                          <option value="Marshall Islands">Marshall Islands</option>
                                          <option value="Martinique">Martinique</option>
                                          <option value="Mauritania">Mauritania</option>
                                          <option value="Mauritius">Mauritius</option>
                                          <option value="Mayotte">Mayotte</option>
                                          <option value="Mexico">Mexico</option>
                                          <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                          <option value="Moldova, Republic of">Moldova, Republic of</option>
                                          <option value="Monaco">Monaco</option>
                                          <option value="Mongolia">Mongolia</option>
                                          <option value="Montenegro">Montenegro</option>
                                          <option value="Montserrat">Montserrat</option>
                                          <option value="Morocco">Morocco</option>
                                          <option value="Mozambique">Mozambique</option>
                                          <option value="Myanmar">Myanmar</option>
                                          <option value="Namibia">Namibia</option>
                                          <option value="Nauru">Nauru</option>
                                          <option value="Nepal">Nepal</option>
                                          <option value="Netherlands">Netherlands</option>
                                          <option value="Netherlands Antilles">Netherlands Antilles</option>
                                          <option value="New Caledonia">New Caledonia</option>
                                          <option value="New Zealand">New Zealand</option>
                                          <option value="Nicaragua">Nicaragua</option>
                                          <option value="Niger">Niger</option>
                                          <option value="Nigeria">Nigeria</option>
                                          <option value="Niue">Niue</option>
                                          <option value="Norfolk Island">Norfolk Island</option>
                                          <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                          <option value="Norway">Norway</option>
                                          <option value="Oman">Oman</option>
                                          <option value="Pakistan">Pakistan</option>
                                          <option value="Palau">Palau</option>
                                          <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                          <option value="Panama">Panama</option>
                                          <option value="Papua New Guinea">Papua New Guinea</option>
                                          <option value="Paraguay">Paraguay</option>
                                          <option value="Peru">Peru</option>
                                          <option value="Philippines">Philippines</option>
                                          <option value="Pitcairn">Pitcairn</option>
                                          <option value="Poland">Poland</option>
                                          <option value="Portugal">Portugal</option>
                                          <option value="Puerto Rico">Puerto Rico</option>
                                          <option value="Qatar">Qatar</option>
                                          <option value="Reunion">Reunion</option>
                                          <option value="Romania">Romania</option>
                                          <option value="Russian Federation">Russian Federation</option>
                                          <option value="Rwanda">Rwanda</option>
                                          <option value="Saint Helena">Saint Helena</option>
                                          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                          <option value="Saint Lucia">Saint Lucia</option>
                                          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                          <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                          <option value="Samoa">Samoa</option>
                                          <option value="San Marino">San Marino</option>
                                          <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                          <option value="Saudi Arabia">Saudi Arabia</option>
                                          <option value="Senegal">Senegal</option>
                                          <option value="Serbia">Serbia</option>
                                          <option value="Seychelles">Seychelles</option>
                                          <option value="Sierra Leone">Sierra Leone</option>
                                          <option value="Singapore">Singapore</option>
                                          <option value="Slovakia">Slovakia</option>
                                          <option value="Slovenia">Slovenia</option>
                                          <option value="Solomon Islands">Solomon Islands</option>
                                          <option value="Somalia">Somalia</option>
                                          <option value="South Africa">South Africa</option>
                                          <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                          <option value="South Sudan">South Sudan</option>
                                          <option value="Spain">Spain</option>
                                          <option value="Sri Lanka">Sri Lanka</option>
                                          <option value="Sudan">Sudan</option>
                                          <option value="Suriname">Suriname</option>
                                          <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                          <option value="Swaziland">Swaziland</option>
                                          <option value="Sweden">Sweden</option>
                                          <option value="Switzerland">Switzerland</option>
                                          <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                          <option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
                                          <option value="Tajikistan">Tajikistan</option>
                                          <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                          <option value="Thailand">Thailand</option>
                                          <option value="Timor-leste">Timor-leste</option>
                                          <option value="Togo">Togo</option>
                                          <option value="Tokelau">Tokelau</option>
                                          <option value="Tonga">Tonga</option>
                                          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                          <option value="Tunisia">Tunisia</option>
                                          <option value="Turkey">Turkey</option>
                                          <option value="Turkmenistan">Turkmenistan</option>
                                          <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                          <option value="Tuvalu">Tuvalu</option>
                                          <option value="Uganda">Uganda</option>
                                          <option value="Ukraine">Ukraine</option>
                                          <option value="United Arab Emirates">United Arab Emirates</option>
                                          <option value="United Kingdom">United Kingdom</option>
                                          <option value="United States">United States</option>
                                          <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                          <option value="Uruguay">Uruguay</option>
                                          <option value="Uzbekistan">Uzbekistan</option>
                                          <option value="Vanuatu">Vanuatu</option>
                                          <option value="Venezuela">Venezuela</option>
                                          <option value="Viet Nam">Viet Nam</option>
                                          <option value="Virgin Islands, British">Virgin Islands, British</option>
                                          <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                          <option value="Wallis and Futuna">Wallis and Futuna</option>
                                          <option value="Western Sahara">Western Sahara</option>
                                          <option value="Yemen">Yemen</option>
                                          <option value="Zambia">Zambia</option>
                                          <option value="Zimbabwe">Zimbabwe</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-2">
                                      <select data-placeholder="With Groups" class="chosen-select" tabindex="5">
                                      <option value=""></option>
                                      <optgroup label="NFC EAST">
                                        <option>Dallas Cowboys</option>
                                        <option>New York Giants</option>
                                        <option>Philadelphia Eagles</option>
                                        <option>Washington Redskins</option>
                                      <optgroup>
                                      <optgroup label="NFC NORTH">
                                        <option>Chicago Bears</option>
                                        <option>Detroit Lions</option>
                                        <option>Green Bay Packers</option>
                                        <option>Minnesota Vikings</option>
                                      </optgroup>
                                      <optgroup label="NFC SOUTH">
                                        <option>Atlanta Falcons</option>
                                        <option>Carolina Panthers</option>
                                        <option>New Orleans Saints</option>
                                        <option>Tampa Bay Buccaneers</option>
                                      </optgroup>
                                      <optgroup label="NFC WEST">
                                        <option>Arizona Cardinals</option>
                                        <option>St. Louis Rams</option>
                                        <option>San Francisco 49ers</option>
                                        <option>Seattle Seahawks</option>
                                      </optgroup>
                                      <optgroup label="AFC EAST">
                                        <option>Buffalo Bills</option>
                                        <option>Miami Dolphins</option>
                                        <option>New England Patriots</option>
                                        <option>New York Jets</option>
                                      </optgroup>
                                      <optgroup label="AFC NORTH">
                                        <option>Baltimore Ravens</option>
                                        <option>Cincinnati Bengals</option>
                                        <option>Cleveland Browns</option>
                                        <option>Pittsburgh Steelers</option>
                                      </optgroup>
                                      <optgroup label="AFC SOUTH">
                                        <option>Houston Texans</option>
                                        <option>Indianapolis Colts</option>
                                        <option>Jacksonville Jaguars</option>
                                        <option>Tennessee Titans</option>
                                      </optgroup>
                                      <optgroup label="AFC WEST">
                                        <option>Denver Broncos</option>
                                        <option>Kansas City Chiefs</option>
                                        <option>Oakland Raiders</option>
                                        <option>San Diego Chargers</option>
                                      </optgroup>
                                    </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-2">
                                      <select data-placeholder="With Deselect" class="chosen-select-deselect" tabindex="7">
                                        <option value=""></option>
                                        <option>American Black Bear</option>
                                        <option>Asiatic Black Bear</option>
                                        <option>Brown Bear</option>
                                        <option>Giant Panda</option>
                                        <option selected>Sloth Bear</option>
                                        <option>Sun Bear</option>
                                        <option>Polar Bear</option>
                                        <option>Spectacled Bear</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-2">
                                      <select data-placeholder="Right to Left" class="chosen-select chosen-rtl" tabindex="7">
                                          <option value=""></option>
                                          <option>American Black Bear</option>
                                          <option>Asiatic Black Bear</option>
                                          <option>Brown Bear</option>
                                          <option>Giant Panda</option>
                                          <option selected>Sloth Bear</option>
                                          <option disabled>Sun Bear</option>
                                          <option>Polar Bear</option>
                                          <option disabled>Spectacled Bear</option>
                                        </select>
                                    </div>
                                  </div>
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Date &amp; Time Picker</label>
                                    <div class="col-sm-3">
                                      <div class='input-group date' id="datetimepicker" >
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                  </div>
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Date Picker</label>
                                    <div class="col-sm-3">
                                      <div class='input-group date' id="datepicker" >
                                            <input type='text' class="form-control" data-date-format="YYYY/MM/DD" />
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                  </div>
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Time Picker</label>
                                    <div class="col-sm-3">
                                      <div class='input-group date' id="timepicker" >
                                            <input type='text' class="form-control" data-date-format="YYYY/MM/DD" />
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                                            </span>
                                        </div>
                                    </div>
                                  </div>
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Date Range Picker</label>
                                    <div class="col-sm-3">
                                      <div class='input-group date' id="datetimerangepicker1" >
                                            <input type='text' class="form-control" data-date-format="YYYY/MM/DD" />
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class='input-group date' id="datetimerangepicker2" >
                                            <input type='text' class="form-control" data-date-format="YYYY/MM/DD" />
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                  </div>
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Checkbox</label>
                                    <div class="col-sm-7">
                                        <div class="switch-button xs showcase-switch-button">
                                            <input id="switch-button-1" checked type="checkbox">
                                            <label for="switch-button-1"></label>
                                        </div>
                                        <div class="switch-button info sm showcase-switch-button">
                                            <input id="switch-button-2" checked type="checkbox">
                                            <label for="switch-button-2"></label>
                                        </div>
                                        <div class="switch-button danger showcase-switch-button">
                                            <input id="switch-button-3" checked type="checkbox">
                                            <label for="switch-button-3"></label>
                                        </div>
                                        <div class="switch-button lg primary showcase-switch-button">
                                            <input id="switch-button-4" checked type="checkbox">
                                            <label for="switch-button-4"></label>
                                        </div>
                                        <div class="switch-button xlg warning showcase-switch-button">
                                            <input id="switch-button-5" checked type="checkbox">
                                            <label for="switch-button-5"></label>
                                        </div>
                                    </div>
                                  </div>
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Radio Button</label>
                                    <div class="col-sm-7">
                                        <div class="switch-button showcase-switch-button">
                                            <input id="switch-button-6" name="switch-radio" type="radio">
                                            <label for="switch-button-6"></label>
                                        </div>
                                        <div class="switch-button showcase-switch-button">
                                            <input id="switch-button-7" checked name="switch-radio" type="radio">
                                            <label for="switch-button-7"></label>
                                        </div>
                                        <div class="switch-button showcase-switch-button">
                                            <input id="switch-button-8" name="switch-radio" type="radio">
                                            <label for="switch-button-8"></label>
                                        </div>
                                    </div>
                                  </div>
                        	</form>
                        </div>
                    </div>
                </div>
            
            </div>
            
            
            
            
            <div class="page-header"><h3>Input Mask <small>Like validation</small></h3></div>
            
            <div class="row">
            
            	<div class="col-md-12">
                 	<div class="panel panel-default">
                        <div class="panel-heading">Input Mask</div>
                        <div class="panel-body">
                        	
                            <form class="form-horizontal" role="form">
                              
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Date Mask</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control inputmask" data-inputmask="'alias': 'date'">
                                </div>
                              </div>
                              <hr class="dotted">
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Date Mask <small>dd/mm/yy</small></label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control inputmask" data-inputmask="'alias': 'mm/dd/yyyy'">
                                </div>
                              </div>
                              <hr class="dotted">
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Currency </label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control inputmask" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'prefix': '$ ', 'placeholder': '0'">
                                </div>
                              </div>
                              <hr class="dotted">
                              <div class="form-group">
                                <label class="col-sm-2 control-label">License plate </label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control inputmask" data-inputmask="'mask': '[9-]AAA-999'">
                                </div>
                              </div>
                              <hr class="dotted">
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Decimal </label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control inputmask" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true">
                                </div>
                              </div>
                              <hr class="dotted">
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Phone </label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control inputmask" data-inputmask="'alias': 'phone'">
                                </div>
                              </div>
                              <hr class="dotted">
                              <div class="form-group">
                                <label class="col-sm-2 control-label">IP address </label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control inputmask" data-inputmask="'alias': 'ip'">
                                </div>
                              </div>
                              <hr class="dotted">
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Email address </label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control inputmask" data-inputmask="'alias': 'email'">
                                </div>
                              </div>
                              
                        	</form>
                        </div>
                    </div>
                 </div>
            
            </div>
            
            
        </div>
        <!-- Warper Ends Here (working area) -->
        
        
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
    
    <!-- NiceScroll -->
    <script src="assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    
	<!-- TypeaHead -->
    <script src="assets/js/plugins/typehead/typeahead.bundle.js"></script>
    <script src="assets/js/plugins/typehead/typeahead.bundle-conf.js"></script>
    
    <!-- InputMask -->
    <script src="assets/js/plugins/inputmask/jquery.inputmask.bundle.js"></script>
    
    <!-- TagsInput -->
    <script src="assets/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    
    <!-- Chosen -->
    <script src="assets/js/plugins/bootstrap-chosen/chosen.jquery.js"></script>
    
    <!-- moment -->
    <script src="assets/js/moment/moment.js"></script>
    
    <!-- DateTime Picker -->
    <script src="assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
     
    <!-- Custom JQuery -->
	<script src="assets/js/app/custom.js" type="text/javascript"></script>
    

    
    
	<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-56821827-1', 'auto');
    ga('send', 'pageview');
    
    </script>
</body>
</html>
