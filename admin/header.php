<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mukherjee Travels</title>
        <link rel="stylesheet" href="../web-app/css/bootstrap.min.css">
        <link rel="stylesheet" href="../web-app/css/font-awesome.css">
        <script type="text/javascript" src="../web-app/js/bootstrap.js"></script>
        <script type="text/javascript" src="../web-app/js/main.min.js"></script>
        <script type="text/javascript" src="../web-app/js/plugins.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


        <style scoped>
            a{
                text-decoration: none;   
            }
            nav {
                /*background-color: limegreen;*/
                background-color: #3498db;
            }
            .navbar{
                border-radius: 0px !important; 
            }
            .navbar-brand {
                color: honeydew;
            }
            .navbar-brand:hover{
                color: honeydew;
                background: rgba(255,255,255,0.2);
                /*text-decoration: none;*/
            }
            .nav-item a{
                color: honeydew;
            }
            .nav-item a:hover{
                color: honeydew;
                background: rgba(255,255,255,0.2)!important;
            }
       
            /*sidebar start*/
        .row{
            margin-left:0px;
            margin-right:0px;
        }

        #wrapper {
            padding-left: 70px;
            transition: all .4s ease 0s;
            height: 100%;
            margin-top: -20px;
        }

        #sidebar-wrapper {
            /*margin-left: -150px;*/
            margin-left: -10%;
            left: 70px;
            width: 13%;
            background: #1abc9c;
            /*background: #222;*/
            /*position: fixed;*/
            /*height: 100%;*/
            /*height: 84.2%;*/
            position: absolute;
            z-index: 10000;
            transition: all .4s ease 0s;
        }

        .sidebar-nav {
            display: block;
            float: left;
            /*width: 150px;*/
            width: 70%;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        #page-content-wrapper {
            padding-left: 0;
            margin-left: 2%;
            width: 100%;
            height: auto;
        }
        #wrapper.active {
            /*padding-left: 150px;*/
            padding-left: 11.3%;
            width: 97%;
        }
        #wrapper.active #sidebar-wrapper {
            /*left: 150px;*/
            left: 10%;
        }

        #page-content-wrapper {
            width: 100%;
        }

        #sidebar_menu li a, .sidebar-nav li a {
            /*color: #999;*/
            color: white;
            display: block;
            float: left;
            text-decoration: none;
            width: 150px;
            /*background: #252525;*/
            /*border-top: 1px solid #373737;*/
            /*    border-bottom: 1px solid #1A1A1A;*/
            -webkit-transition: background .5s;
            -moz-transition: background .5s;
            -o-transition: background .5s;
            -ms-transition: background .5s;
            transition: background .5s;
        }
        .sidebar_name {
            padding-top: 25px;
            color: #fff;
            opacity: .7;
        }

        .sidebar-nav li {
            line-height: 40px;
            text-indent: 20px;
        }

        .sidebar-nav li a {
            /*color: #999999;*/
            color: honeydew;
            display: block;
            text-decoration: none;
        }

        .sidebar-nav li a:hover {
            color: #fff;
            background: rgba(255,255,255,0.2);
            text-decoration: none;  
            cursor: auto;
        }

        .sidebar-nav li a:active,
        .sidebar-nav li a:focus {
            text-decoration: none;
        }

        .sidebar-nav > .sidebar-brand {
            height: 65px;
            line-height: 60px;
            font-size: 18px;
        }

        .sidebar-nav > .sidebar-brand a {
            /*color: #999999;*/
            color: white;
        }

        .sidebar-nav > .sidebar-brand a:hover {
            /*color: #fff;*/
            color: white;
            background: none;
        }

        #main_icon
        {
            float:right;
            padding-right: 0px;
            padding-top: 4px;
            /*   padding-right: 65px;
               padding-top:20px;*/
        }
        .sub_icon
        {
            float:right;
            padding-right: 65px;
            padding-top:10px;
        }
        .content-header {
            height: 65px;
            line-height: 65px;
        }

        .content-header h1 {
            margin: 0;
            margin-left: 20px;
            line-height: 65px;
            display: inline-block;
        }

        @media (max-width:767px) {
            #wrapper {
                padding-left: 70px;
                transition: all .4s ease 0s;
            }
            #sidebar-wrapper {
                left: 70px;
                background: #1abc9c !important;
            }
            #wrapper.active {
                padding-left: 150px;
            }
            #wrapper.active #sidebar-wrapper {
                left: 150px;
                width: 150px;
                transition: all .4s ease 0s;
            }
        }
 /*sidebar end*/
    </style>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("active");
            });
        });
    </script>
    </head>
    <body>
        <!--<div class="container-fluid">-->
        <!-- Navbar -->
        <nav class="navbar navbar-dark">

            <!-- Brand -->
            <a class="navbar-brand" href="#">Logo</a>

            <!-- Links -->
            <ul class="nav navbar-nav pull-right">
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </nav>
       	<div id="wrapper" class="active">
            <!-- Sidebar -->
            <!-- Sidebar -->
            <div id="sidebar-wrapper" >
                <ul id="sidebar_menu" class="sidebar-nav">
                    <li class="sidebar-brand"><a id="menu-toggle" href="#">&nbsp;<span id="main_icon" class="fa fa-angle-double-left"></span></a></li>
                </ul>
                <ul class="sidebar-nav" id="sidebar">     
                    <li><a>Member Information<span class="fa fa-link"></span></a></li>
                    <li><a>Service<span class="fa fa-link"></span></a></li>
                    <li><a>Tours Plan<span class="fa fa-link"></span></a></li>
                    <li><a>Slider<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery<span class="fa fa-link"></span></a></li>
                    <li><a>Gallery Gallery<span class="fa fa-link"></span></a></li>
                </ul>
            </div>
        </div>