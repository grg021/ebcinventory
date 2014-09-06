<!DOCTYPE html>
<html lang="en" ng-app="ehatidApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>EBC Inventory System</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/plugins/metisMenu/metisMenu.min.css') }}
    {{ HTML::style('css/plugins/timeline.css') }}
    {{ HTML::style('css/sb-admin-2.css') }}
    {{ HTML::style('css/plugins/morris.css') }}
    {{ HTML::style('font-awesome-4.1.0/css/font-awesome.min.css') }}
    {{ HTML::style('css/admin-style.css') }}
    {{ HTML::style('css/plugins/dataTables.bootstrap.css') }}
    {{ HTML::style('css/dataTables.tableTools.min.css') }}
    {{ HTML::style('css/dataTables.fixedHeader.min.css') }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{ HTML::script('js/jquery-1.11.0.js') }}
    {{ HTML::script('js/jquery.dataTables.min.js') }}
    {{ HTML::script('js/plugins/dataTables/dataTables.bootstrap.js') }}
    {{ HTML::script('js/dataTables.tableTools.min.js') }}
    {{ HTML::script('js/dataTables.fixedHeader.min.js') }}

  </head>

  <body>
    <div id="wrapper">

    @include('layouts/partials/navbar')

    <div id="page-wrapper">

    <div class="row">
        <div class="col-md-6">
       <!-- for flash message -->
        </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
        @yield('title')
        </div>
        <!-- /.col-lg-12 -->
    </div>
    @include('flash::message')
    @yield('content')
    @include('layouts/partials/footer')

    </div><!-- /.container -->

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/plugins/metisMenu/metisMenu.min.js') }}
    {{ HTML::script('js/plugins/morris/raphael.min.js') }}
    {{ HTML::script('js/sb-admin-2.js') }}



    @yield('cssjs')

  </body>
</html>
