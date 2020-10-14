<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Facnex - Industry & Factory HTML Template">
    <meta name="keywords" content="new, html, Facnex, design, Consulting, Business, Portfolio, Agency, advanced,">
    <link rel="shortcut icon" href="/assets/images/favicon.ico" title="Favicon" sizes="16x16"/>
    <!-- Main Page Title -->
    <title>Facnex - Industry & Factory HTML Template  </title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">


    <!-- plugins css -->
    <link rel="stylesheet" href="/assets/css/plugins.css">
    <!-- flaticon  -->
    <link rel="stylesheet" href="/assets/fonts/flaticon.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="/assets/css/responsive.css"> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>

    <!--==================================================================== 
							Start Loading Screen
	=====================================================================-->

@includeIf('layouts.preloader')
    <!--==================================================================== 
							End Loading Screen
	=====================================================================-->
<!--==================================================================== 
                        Start Upperbar 
=====================================================================-->
@includeIf('layouts.header')
    <!--==================================================================== 
							Start Header 
	=====================================================================-->
@yield('slider')
   <!--==================================================================== 
							End Header 
	=====================================================================-->

@yield('breadcrumb')
    
    <!--==================================================================== 
							Start Section Features One
	=====================================================================-->
@yield('main-content')   
    
<!--==================================================================== 
                        Start Footer
=====================================================================--> 
@includeIf('layouts.footer')
<!--==================================================================== 
                        End Footer
=====================================================================-->   
<!-- Scroll To Top -->
<div class="scroll-up">
    <i class="fas fa-angle-up"></i>
</div> 
<!--==================================================================== 
                        End Section Content
=====================================================================-->
   
    <!--====================================================================
                            Include All Js File 
     ====================================================================-->
     <!-- All Plugins -->
     <!--  jQuery js  -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- plugins Js  -->
    <script src="assets/js/plugins.js"></script>
    <!-- My Custom Js  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>