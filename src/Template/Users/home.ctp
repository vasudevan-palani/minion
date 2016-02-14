<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Minion</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/angular.min.js"></script>
    <script src="../js/ui-bootstrap-tpls-1.1.2.min.js"></script>
    <script src="../js/minion.js"></script>
</head>

<body ng-app="minion">

    <div id="wrapper" ng-controller="NavController" ng-init="init()">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <div style="float:left">
                        <img src="../images/minion.png" height="30px"/>
                    </div>Minion
                </a>
            </div>
        <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#" ng-click="selectMainTab('projects')"><i class="fa fa-paypal"></i> Projects<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" ng-click="selectItem('addprojects')">Add Project</a>
                                </li>
                                <li>
                                    <a href="#" ng-click="selectItem('searchprojects')">Search Projects</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#" ng-click="selectMainTab('purchaseorders')"><i class="fa fa-file-text"></i> Purchase Orders<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" ng-click="selectItem('addpos')">Add PO</a>
                                </li>
                                <li>
                                    <a href="#" ng-click="selectItem('searchpos')">Search PO</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#" ng-click="selectMainTab('invoices')"><i class="fa fa-money"></i> Invoices<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" ng-click="selectItem('addinvoices')">Add Invoice</a>
                                </li>
                                <li>
                                    <a href="#" ng-click="selectItem('searchinvoices')">Search Invoices</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#" ng-click="selectMainTab('users')"><i class="fa fa-user"></i> Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" ng-click="selectItem('addusers')">Add</a>
                                </li>
                                <li>
                                    <a href="#" ng-click="selectItem('searchusers')">Search Users</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#" ng-click="selectMainTab('efforts')"><i class="fa fa-clock-o"></i> Efforts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" ng-click="selectItem('addefforts')">Add Effort</a>
                                </li>
                                <li>
                                    <a href="#" ng-click="selectItem('searchefforts')">Search Efforts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div style="position:absolute;height:20;top:50;right:50;width:200" ng-controller="AlertController" ng-show="isAlertVisible()">
            <button type="button" class="close" ng-click="hideAlert()">×</button>
            <label>{{$root.msg}}</label>
        </div>
        <div id="page-wrapper" ng-show="isMainTab('projects')" ng-controller="ProjectsController">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Projects</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" ng-show="isSelectedItem('addprojects')">
                        <div class="panel-heading">
                            Add Project
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Project Id</label>
                                            <input class="form-control" placeholder="Project Id">
                                        </div>
                                        <div class="form-group">
                                            <label>Project Name</label>
                                            <input class="form-control" placeholder="Project Name">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default">Submit </button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default" ng-show="isSelectedItem('searchprojects')">
                        <div class="panel-heading">
                            Search Project
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Project Id</label>
                                            <input ng-model="data.id" class="form-control" placeholder="Project Id">
                                        </div>
                                        <div class="form-group">
                                            <label>Project Name</label>
                                            <input ng-model="data.name" class="form-control" placeholder="Project Name">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default" ng-click="search()">Submit </button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->             
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" ng-show="isSelectedItem('searchprojects')">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Search Results
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Project Id</th>
                                            <th>Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="item in results">
                                            <td>{{item.id}}</td>
                                            <td>{{item.project_number}}</td>
                                            <td>{{item.name}}</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

        <div id="page-wrapper" ng-show="isMainTab('invoices')" ng-controller="InvoicesController">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Invoices</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" ng-show="isSelectedItem('addinvoices')">
                        <div class="panel-heading">
                            Add Invoice
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Invoice Id</label>
                                            <input ng-model="data.invoice_id" class="form-control" placeholder="Invoice Id">
                                        </div>
                                        <div class="form-group">
                                            <label>Start date</label>
                                            <p class="input-group">
                                              <input type="text" class="form-control" is-open="true" uib-datepicker-popup="dd-MMMM-yyyy" ng-model="data.startdate" ng-required="true" close-text="Close" alt-input-formats="altInputFormats" />
                                              <span class="input-group-btn">
                                                <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-calendar"></i></button>
                                              </span>
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <label>End date</label>
                                            <input ng-model="data.end_date" class="form-control" placeholder="End date">
                                        </div>
                                        <div class="form-group">
                                            <label>Select Project</label>
                                            <select class="form-control" ng-model="data.project_id">
                                                <option ng-repeat='project in $root.selects.Projects' value="{{project.id}}">{{project.name}}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Purchase Order</label>
                                            <select class="form-control" ng-model='data.po_id' ng-change="selectPO()">
                                                <option ng-repeat='po in $root.selects.Pos' value="{{po.id}}">{{po.po_number}}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" ng-model='data.status_id'>
                                                <option ng-repeat='status in $root.selects.Statuses' value="{{status.id}}">{{status.name}}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Invoices total on this PO till now</label>
                                            <p>{{po_used}}</p>
                                        </div>

                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            <div class="row" ng-repeat="item in data.invoice_users">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group col-lg-4">
                                            <label>Select User</label>
                                            <select class="form-control" disabled="true">
                                                <option ng-repeat='user in $root.selects.Users' ng-selected="item.user_id==user.id" value="{{user.id}}">{{user.first_name}} {{user.last_name}}</option>
                                            </select>
                                        </div> 
                                        <div class="form-group col-lg-1">
                                            <label>Hours</label>
                                            <input ng-model="item.hours" class="form-control" placeholder="Hours" ng-change="calculateTotal(item)">
                                        </div>
                                        <div class="form-group col-lg-1">
                                            <label>Rate</label>
                                            <input ng-model="item.billing_rate" class="form-control" placeholder="Rate" ng-change="calculateTotal(item)">
                                        </div>
                                        <div class="form-group col-lg-1">
                                            <label>Total</label>
                                            <input ng-model="item.total" class="form-control" placeholder="Total">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            <button type="submit" class="btn btn-default" ng-click="add()">Submit </button>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default" ng-show="isSelectedItem('searchinvoices')">
                        <div class="panel-heading">
                            Search Invoice
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group col-lg-6">
                                            <label>Invoice Id</label>
                                            <input ng-model="data.invoice_id" class="form-control" placeholder="Invoice Id">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Select User</label>
                                            <select class="form-control" ng-model="data.user_id">
                                                <option value=""></option>
                                                <option ng-repeat='user in $root.selects.Users' value="{{user.id}}">{{user.first_name}} {{user.last_name}}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Select Project</label>
                                            <select class="form-control" ng-model="data.project_id">
                                                <option value=""></option>
                                                <option ng-repeat='project in $root.selects.Projects' value="{{project.id}}">{{project.name}}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Select Purchase Order</label>
                                            <select class="form-control" ng-model='data.po_id'>
                                                <option value=""></option>
                                                <option ng-repeat='po in $root.selects.Pos' value="{{po.id}}">{{po.po_number}}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Start date</label>
                                            <input ng-model="data.start_date" class="form-control" placeholder="Start date">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>End date</label>
                                            <input ng-model="data.end_date" class="form-control" placeholder="End date">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Status</label>
                                            <select class="form-control" ng-model='data.status_id'>
                                                <option value=""></option>
                                                <option ng-repeat='status in $root.selects.Statuses' value="{{status.id}}">{{status.name}}</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lg" ng-click="search()">Submit </button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            <div class="row" ng-show="isSelectedItem('searchinvoices')">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Search Results
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <div class="dataTable_wrapper">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Invoice Id</th>
                                                            <th>User</th>
                                                            <th>Project</th>
                                                            <th>PO#</th>
                                                            <th>Rate</th>
                                                            <th>Hours</th>
                                                            <th>Total</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr ng-repeat="item in results">
                                                            <td>{{item.id}}</td>
                                                            <td>{{item.invoice_id}}</td>
                                                            <td>{{item.first_name}} {{item.last_name}}</td>
                                                            <td>{{item.project_name}}</td>
                                                            <td>{{item.po_number}}</td>
                                                            <td>{{item.billing_rate}}</td>
                                                            <td>{{item.hours}}</td>
                                                            <td>{{item.total}}</td>
                                                            <td>{{item.status}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

        <div id="page-wrapper" ng-show="isMainTab('efforts')" ng-controller="EffortsController">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Efforts</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" ng-show="isSelectedItem('addefforts')">
                        <div class="panel-heading">
                            Add Efforts
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Month</label>
                                            <select class="form-control" ng-model="add.data.month">
                                                <option value="JAN">JAN</option>
                                                <option value="FEB">FEB</option>
                                                <option value="MAR">MAR</option>
                                                <option value="APR">APR</option>
                                                <option value="MAY">MAY</option>
                                                <option value="JUN">JUN</option>
                                                <option value="JUL">JUL</option>
                                                <option value="AUG">AUG</option>
                                                <option value="SEP">SEP</option>
                                                <option value="OCT">OCT</option>
                                                <option value="NOV">NOV</option>
                                                <option value="DEC">DEC</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Project</label>
                                            <select class="form-control" ng-model="add.data.project_id">
                                                <option ng-repeat='project in $root.selects.Projects' value="{{project.id}}">{{project.name}}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Select User</label>
                                            <select class="form-control" ng-model="add.data.user_id">
                                                <option value=""></option>
                                                <option ng-repeat='user in $root.selects.Users' value="{{user.id}}">{{user.first_name}} {{user.last_name}}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Actual Efforts</label>
                                            <input ng-model="add.data.actual_hours" class="form-control" placeholder="Actual Efforts">
                                        </div>
                                        <div class="form-group">
                                            <label>Approved Efforts</label>
                                            <input ng-model="add.data.approved_hours" class="form-control" placeholder="Approved Efforts">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            <button type="submit" class="btn btn-default" ng-click="add.save()">Submit </button>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default" ng-show="isSelectedItem('searchefforts')">
                        <div class="panel-heading">
                            Search Efforts
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group col-lg-6">
                                            <label>Month</label>
                                            <select class="form-control" ng-model="search.data.month">
                                                <option value="JAN">JAN</option>
                                                <option value="FEB">FEB</option>
                                                <option value="MAR">MAR</option>
                                                <option value="APR">APR</option>
                                                <option value="MAY">MAY</option>
                                                <option value="JUN">JUN</option>
                                                <option value="JUL">JUL</option>
                                                <option value="AUG">AUG</option>
                                                <option value="SEP">SEP</option>
                                                <option value="OCT">OCT</option>
                                                <option value="NOV">NOV</option>
                                                <option value="DEC">DEC</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Select User</label>
                                            <select class="form-control" ng-model="search.data.user_id">
                                                <option value=""></option>
                                                <option ng-repeat='user in $root.selects.Users' value="{{user.id}}">{{user.first_name}} {{user.last_name}}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Select Project</label>
                                            <select class="form-control" ng-model="search.data.project_id">
                                                <option value=""></option>
                                                <option ng-repeat='project in $root.selects.Projects' value="{{project.id}}">{{project.name}}</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lg" ng-click="search.submit()">Submit </button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            <div class="row" ng-show="isSelectedItem('searchefforts')">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Search Results
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <div class="dataTable_wrapper">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Month</th>
                                                            <th>Project</th>
                                                            <th>User</th>
                                                            <th>Actual Hours</th>
                                                            <th>Approved Hours</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr ng-repeat="item in results">
                                                            <td>{{item.id}}</td>
                                                            <td>{{item.month}}</td>
                                                            <td>{{item.project_name}}</td>
                                                            <td>{{item.first_name}} {{item.last_name}}</td>
                                                            <td>{{item.actual_hours}}</td>
                                                            <td>{{item.approved_hours}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->


        <div id="page-wrapper" ng-show="isMainTab('purchaseorders')" ng-controller="PurchaseOrdersController">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Purchase Orders</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" ng-show="isSelectedItem('addpos')">
                        <div class="panel-heading">
                            Add Purchase Order
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Purchase Order Id</label>
                                            <input ng-model="data.po_number" class="form-control" placeholder="Purchase Order Id">
                                        </div>
                                        <div class="form-group">
                                            <label>Requester</label>
                                            <input ng-model="data.requester" class="form-control" placeholder="Requester">
                                        </div>
                                        <div class="form-group">
                                            <label>Buyer</label>
                                            <input ng-model="data.buyer" class="form-control" placeholder="Buyer">
                                        </div>
                                        <div class="form-group">
                                            <label>Total</label>
                                            <input ng-model="data.total" class="form-control" placeholder="Total">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group col-lg-2">
                                            <button type="button" class="btn btn-info" ng-click="addUser()"><i class="fa fa-plus"></i>Add User </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            <div class="row" ng-repeat="userItem in data.users">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group col-lg-4">
                                            <label>Select User</label>
                                            <select class="form-control" ng-model="userItem.user_id">
                                                <option ng-repeat='user in $root.selects.Users' value="{{user.id}}">{{user.first_name}} {{user.last_name}}</option>
                                            </select>
                                        </div> 
                                        <div class="form-group col-lg-1">
                                            <label>Hours</label>
                                            <input ng-model="userItem.hours" class="form-control" placeholder="Hours" ng-change="calculateTotal(userItem)">
                                        </div>
                                        <div class="form-group col-lg-1">
                                            <label>Rate</label>
                                            <input ng-model="userItem.billing_rate" class="form-control" placeholder="Rate" ng-change="calculateTotal(userItem)">
                                        </div>
                                        <div class="form-group col-lg-1">
                                            <label>Total</label>
                                            <input ng-model="userItem.total" class="form-control" placeholder="Total">
                                        </div>
                                        <button type="submit" class="btn btn-circle btn-lg btn-danger" ng-click="deleteUserItem($index)"><i class="fa fa-times"></i></button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group col-lg-2">
                                            <button type="button" class="btn btn-lg btn-success" ng-click="addPO()"><i class="fa fa-check"></i>Save </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default" ng-show="isSelectedItem('searchpos')">
                        <div class="panel-heading">
                            Search Purchase Orders
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Purchase Order Id</label>
                                            <input ng-model="search.po_number" class="form-control" placeholder="Purchase Order Id">
                                        </div>
                                        <button type="submit" class="btn btn-default" ng-click="search()">Submit </button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" ng-show="isSelectedItem('searchpos')">
                <div class="col-lg-12">
                    <div class="panel panel-default" ng-show="isEditItemSelected()">
                        <div class="panel-heading">
                            Edit Purchase Order
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Purchase Order Id</label>
                                            <input ng-model="edit.data.po_number" class="form-control" placeholder="Purchase Order Id">
                                        </div>
                                        <div class="form-group">
                                            <label>Requester</label>
                                            <input ng-model="edit.data.requester" class="form-control" placeholder="Requester">
                                        </div>
                                        <div class="form-group">
                                            <label>Buyer</label>
                                            <input ng-model="edit.data.buyer" class="form-control" placeholder="Buyer">
                                        </div>
                                        <div class="form-group">
                                            <label>Total</label>
                                            <input ng-model="edit.data.total" class="form-control" placeholder="Total">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group col-lg-2">
                                            <button type="button" class="btn btn-info" ng-click="edit.addUser()"><i class="fa fa-plus"></i>Add User </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            <div class="row" ng-repeat="userItem in edit.data.po_users">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group col-lg-4">
                                            <label>Select User</label>
                                            <select class="form-control">
                                                <option ng-selected="userItem.user_id == user.id" ng-repeat='user in $root.selects.Users' value="{{user.id}}">{{user.first_name}} {{user.last_name}}</option>
                                            </select>
                                        </div> 
                                        <div class="form-group col-lg-1">
                                            <label>Hours</label>
                                            <input ng-model="userItem.hours" class="form-control" placeholder="Hours" ng-change="calculateTotal(userItem)">
                                        </div>
                                        <div class="form-group col-lg-1">
                                            <label>Rate</label>
                                            <input ng-model="userItem.billing_rate" class="form-control" placeholder="Rate" ng-change="calculateTotal(userItem)">
                                        </div>
                                        <div class="form-group col-lg-1">
                                            <label>Total</label>
                                            <input ng-model="userItem.total" class="form-control" placeholder="Total">
                                        </div>
                                        <button type="submit" class="btn btn-circle btn-lg btn-danger" ng-click="edit.deleteUserItem($index)"><i class="fa fa-times"></i></button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group col-lg-2">
                                            <button type="button" class="btn btn-lg btn-success" ng-click="update()"><i class="fa fa-check"></i>Save </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->            
        </div>
        <!-- /#page-wrapper -->

        <div id="page-wrapper" ng-show="isMainTab('users')" ng-controller="UsersController">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Users</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" ng-show="isSelectedItem('addusers')">
                        <div class="panel-heading">
                            Add User
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Emp Id</label>
                                            <input ng-model="data.emp_id" class="form-control" placeholder="Emp Id">
                                        </div>
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input ng-model="data.first_name" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input ng-model="data.last_name" class="form-control" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input ng-model="data.email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input ng-model="data.password" class="form-control" placeholder="Password">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group col-lg-2">
                                            <button type="button" class="btn btn-lg btn-success" ng-click="addUser()"><i class="fa fa-check"></i>Save </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->                 
                    <div class="panel panel-default" ng-show="isSelectedItem('searchusers')">
                        <div class="panel-heading">
                            Search users
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group col-lg-6">
                                            <label>Email</label>
                                            <input ng-model="search.data.email" class="form-control" placeholder="Email Id">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Emp Id</label>
                                            <input ng-model="search.data.emp_id" class="form-control" placeholder="Emp Id">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>First name</label>
                                            <input ng-model="search.data.first_name" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Last name</label>
                                            <input ng-model="search.data.last_name" class="form-control" placeholder="last Name">
                                        </div>
                                        <button type="submit" class="btn btn-default" ng-click="searchUser()">Submit </button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->     
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" ng-show="isSelectedItem('searchusers')">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Search Results
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Emp Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="item in results">
                                            <td>{{item.id}}</td>
                                            <td>{{item.emp_id}}</td>
                                            <td>{{item.email}}</td>
                                            <td>{{item.first_name}} {{item.last_name}}</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <!--script src="../bower_components/jquery/dist/jquery.min.js"></script-->

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <!--script src="../bower_components/raphael/raphael-min.js"></script-->
    <!--script src="../bower_components/morrisjs/morris.js"></script-->
    <!--script src="../js/morris-data.js"></script-->

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
