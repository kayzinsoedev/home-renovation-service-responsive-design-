<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home Renovation Service | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="shortcut icon" type="image/png" href="images/logo.png"/>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  {!! Html::style('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') !!}
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> -->
  {!! Html::style('bower_components/AdminLTE/fontawesome/font-awesome.min.css') !!}
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
  {!! Html::style('bower_components/AdminLTE/ionicon/ionicons.min.css') !!}
  <!-- Theme style -->
  {!! Html::style('bower_components/AdminLTE/dist/css/AdminLTE.min.css') !!}
  <!-- iCheck -->
  {!! Html::style('bower_components/AdminLTE/plugins/iCheck/square/blue.css') !!}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

@yield('content')

<!-- jQuery 2.2.3 -->
{!! Html::script('bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') !!}
<!-- Bootstrap 3.3.6 -->
{!! Html::script('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js') !!}
</body>
</html>