<?php

/* ::base.html.twig */
class __TwigTemplate_d4f3c54bfb0b10427a6518343fe617412fdcd484649112c6cfb38fbe57b8f849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nbrnotif' => array($this, 'block_nbrnotif'),
            'profile' => array($this, 'block_profile'),
            'dashboard' => array($this, 'block_dashboard'),
            'users' => array($this, 'block_users'),
            'nombreuser' => array($this, 'block_nombreuser'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name=\"description\" content=\"Developed By M Abdur Rokib Promy\">
        <meta name=\"keywords\" content=\"Admin, Bootstrap 3, Template, Theme, Responsive\">
        <!-- bootstrap 3.0.2 -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- font Awesome -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Ionicons -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Morris chart -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- jvectormap -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Date Picker -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/datepicker/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- fullCalendar -->
        <!-- <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" /> -->
        <!-- Daterange picker -->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- iCheck for checkboxes and radio inputs -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/iCheck/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- bootstrap wysihtml5 - text editor -->
        <!-- <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" /> -->
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <!-- Theme style -->
     


        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
         



      
    </head>
    <body class=\"skin-black\">
       
            <!-- header logo: style can be found in header.less -->
            <header class=\"header\">
                <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("pidev_mooc_affichage");
        echo "\" class=\"logo\">
                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo_mooc.png"), "html", null, true);
        echo "\"
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    <div class=\"navbar-right\">
                        <ul class=\"nav navbar-nav\">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class=\"dropdown messages-menu\">
                                
                                ";
        // line 62
        $this->displayBlock('nbrnotif', $context, $blocks);
        // line 63
        echo "                            </li>
                            ";
        // line 64
        $this->displayBlock('profile', $context, $blocks);
        // line 65
        echo "                            <!-- User Account: style can be found in dropdown.less -->
                            
                        </ul>
                    </div>
                </nav>
            </header>
            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                <!-- Left side column. contains the logo and sidebar -->
                <aside class=\"left-side sidebar-offcanvas\">
                    <!-- sidebar: style can be found in sidebar.less -->
                    <section class=\"sidebar\">
                        <!-- Sidebar user panel -->
                        <div class=\"user-panel\">
                            <div class=\"pull-left image\">
                                <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/small_logo.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
                            </div>
                            <div class=\"pull-left info\">
                                <p>Hello, Jane</p>

                                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                            </div>
                        </div>
                        <!-- search form -->
                        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
                                <span class=\"input-group-btn\">
                                    <button type='submit' name='seach' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                                </span>
                            </div>
                        </form>
                        <!-- /.search form -->
                        <!-- sidebar menu: : style can be found in sidebar.less -->
                        <ul class=\"sidebar-menu\">
                            <li class=\"active\">
                                ";
        // line 100
        $this->displayBlock('dashboard', $context, $blocks);
        // line 101
        echo "                                    <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                ";
        // line 105
        $this->displayBlock('users', $context, $blocks);
        // line 106
        echo "                                    <i class=\"fa fa-gavel\"></i> <span>Users and Courses</span>
                                </a>
                            </li>

                            

                        </ul>
                    </section>
                    <!-- /.sidebar -->
                </aside>

                <aside class=\"right-side\">

                    <!-- Main content -->
                    <section class=\"content\">
    
                        <div class=\"row\" style=\"margin-bottom:5px;\">

                        
                            <div class=\"col-md-3\">
                                <div class=\"sm-st clearfix\">
                                    <span class=\"sm-st-icon st-red\"><i class=\"fa fa-check-square-o\"></i></span>
                                    <div class=\"sm-st-info\">
                                        <span>";
        // line 129
        $this->displayBlock('nombreuser', $context, $blocks);
        echo "</span>
                                        Users
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </div>

                        <!-- Main row -->
                        <div class=\"row\">

                            <div class=\"col-md-8\">
                                <!--earning graph start-->
                                <section class=\"panel\">
                                    
";
        // line 146
        $this->displayBlock('body', $context, $blocks);
        // line 148
        echo "   


    

                                    <!-- debut test  -->
                                    
                                </section>
                                <!--earning graph end-->

                            </div>
                            <div class=\"col-lg-4\">

                                <!--chat start-->
                                <section class=\"panel\">
                                    <header class=\"panel-heading\">
                                        Notifications
                                    </header>
                                    <div class=\"panel-body\" id=\"noti-box\">

                                        <div class=\"alert alert-block alert-danger\">
                                            <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                                                <i class=\"fa fa-times\"></i>
                                            </button>
                                            <strong>Alert Organisme</strong> Change a few things up and try submitting again.
                                        </div>
                                        <div class=\"alert alert-success\">
                                            <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                                                <i class=\"fa fa-times\"></i>
                                            </button>
                                            <strong>Well done!</strong> You successfully read this important alert message.
                                        </div>
                                        <div class=\"alert alert-info\">
                                            <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                                                <i class=\"fa fa-times\"></i>
                                            </button>
                                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                        </div>
                                        <div class=\"alert alert-warning\">
                                            <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                                                <i class=\"fa fa-times\"></i>
                                            </button>
                                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                                        </div>


                                        <div class=\"alert alert-block alert-danger\">
                                            <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                                                <i class=\"fa fa-times\"></i>
                                            </button>
                                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                        </div>
                                        <div class=\"alert alert-success\">
                                            <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                                                <i class=\"fa fa-times\"></i>
                                            </button>
                                            <strong>Well done!</strong> You successfully read this important alert message.
                                        </div>
                                        <div class=\"alert alert-info\">
                                            <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                                                <i class=\"fa fa-times\"></i>
                                            </button>
                                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                        </div>
                                        <div class=\"alert alert-warning\">
                                            <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                                                <i class=\"fa fa-times\"></i>
                                            </button>
                                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                                        </div>



                                    </div>
                                </section>



                            </div>


                        </div>
                        <div class=\"row\">

                           
                        </div>
                        <div class=\"row\">
                            
                            <div class=\"col-md-7\">
                                
                            </div>
                        </div>
                        <!-- row end -->
                    </section><!-- /.content -->
        
                    <div class=\"footer-main\">
                        Copyright &copy Director, 2014
                    </div>
                </aside><!-- /.right-side -->

            </div><!-- ./wrapper -->



            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
            <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <!-- jQuery UI 1.10.3 -->
            <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- Bootstrap -->
            <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- daterangepicker -->
            <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/chart.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <!-- datepicker
            <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>-->
            <!-- Bootstrap WYSIHTML5
            <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>-->
            <!-- iCheck -->
            <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- calendar -->
            <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/fullcalendar/fullcalendar.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <!-- Director App -->
            <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Director/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <!-- Director dashboard demo (This is only for demo purposes) -->
            <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Director/dashboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <!-- Director for demo purposes -->
            <script type=\"text/javascript\">
                \$('input').on('ifChecked', function (event) {
                    // var element = \$(this).parent().find('input:checkbox:first');
                    // element.parent().parent().parent().addClass('highlight');
                    \$(this).parents('li').addClass(\"task-done\");
                    console.log('ok');
                });
                \$('input').on('ifUnchecked', function (event) {
                    // var element = \$(this).parent().find('input:checkbox:first');
                    // element.parent().parent().parent().removeClass('highlight');
                    \$(this).parents('li').removeClass(\"task-done\");
                    console.log('not');
                });

            </script>
            <script>
                \$('#noti-box').slimScroll({
                    height: '400px',
                    size: '5px',
                    BorderRadius: '5px'
                });

                \$('input[type=\"checkbox\"].flat-grey, input[type=\"radio\"].flat-grey').iCheck({
                    checkboxClass: 'icheckbox_flat-grey',
                    radioClass: 'iradio_flat-grey'
                });
            </script>
            <script type=\"text/javascript\">
                \$(function () {
                    \"use strict\";
                    //BAR CHART
                    var data = {
                        labels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
                        datasets: [
                            {
                                label: \"My First dataset\",
                                fillColor: \"rgba(220,220,220,0.2)\",
                                strokeColor: \"rgba(220,220,220,1)\",
                                pointColor: \"rgba(220,220,220,1)\",
                                pointStrokeColor: \"#fff\",
                                pointHighlightFill: \"#fff\",
                                pointHighlightStroke: \"rgba(220,220,220,1)\",
                                data: [65, 59, 80, 81, 56, 55, 40]
                            },
                            {
                                label: \"My Second dataset\",
                                fillColor: \"rgba(151,187,205,0.2)\",
                                strokeColor: \"rgba(151,187,205,1)\",
                                pointColor: \"rgba(151,187,205,1)\",
                                pointStrokeColor: \"#fff\",
                                pointHighlightFill: \"#fff\",
                                pointHighlightStroke: \"rgba(151,187,205,1)\",
                                data: [28, 48, 40, 19, 86, 27, 90]
                            }
                        ]
                    };
                    new Chart(document.getElementById(\"linechart\").getContext(\"2d\")).Line(data, {
                        responsive: true,
                        maintainAspectRatio: false,
                    });

                });
                // Chart.defaults.global.responsive = true;
            </script>
       
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Administrator | Dashboard";
    }

    // line 62
    public function block_nbrnotif($context, array $blocks = array())
    {
    }

    // line 64
    public function block_profile($context, array $blocks = array())
    {
    }

    // line 100
    public function block_dashboard($context, array $blocks = array())
    {
        echo " ";
    }

    // line 105
    public function block_users($context, array $blocks = array())
    {
        echo " ";
    }

    // line 129
    public function block_nombreuser($context, array $blocks = array())
    {
        echo " ";
    }

    // line 146
    public function block_body($context, array $blocks = array())
    {
        // line 147
        echo "    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 147,  504 => 146,  498 => 129,  492 => 105,  486 => 100,  481 => 64,  476 => 62,  470 => 5,  396 => 277,  390 => 274,  384 => 271,  379 => 269,  374 => 267,  369 => 265,  363 => 262,  358 => 260,  353 => 258,  348 => 256,  342 => 253,  235 => 148,  233 => 146,  213 => 129,  188 => 106,  186 => 105,  180 => 101,  178 => 100,  154 => 79,  138 => 65,  136 => 64,  133 => 63,  131 => 62,  112 => 46,  108 => 45,  94 => 34,  85 => 28,  80 => 26,  75 => 24,  70 => 22,  65 => 20,  60 => 18,  55 => 16,  50 => 14,  45 => 12,  40 => 10,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>{% block title %}Administrator | Dashboard{% endblock %}</title>*/
/*         <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>*/
/*         <meta name="description" content="Developed By M Abdur Rokib Promy">*/
/*         <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">*/
/*         <!-- bootstrap 3.0.2 -->*/
/*         <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />*/
/*         <!-- font Awesome -->*/
/*         <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />*/
/*         <!-- Ionicons -->*/
/*         <link href="{{ asset('css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />*/
/*         <!-- Morris chart -->*/
/*         <link href="{{ asset('css/morris/morris.css')}}" rel="stylesheet" type="text/css" />*/
/*         <!-- jvectormap -->*/
/*         <link href="{{ asset('css/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />*/
/*         <!-- Date Picker -->*/
/*         <link href="{{ asset('css/datepicker/datepicker3.css')}}" rel="stylesheet" type="text/css" />*/
/*         <!-- fullCalendar -->*/
/*         <!-- <link href="{{ asset('css/fullcalendar/fullcalendar.css')}}" rel="stylesheet" type="text/css" /> -->*/
/*         <!-- Daterange picker -->*/
/*         <link href="{{ asset('css/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />*/
/*         <!-- iCheck for checkboxes and radio inputs -->*/
/*         <link href="{{ asset('css/iCheck/all.css')}}" rel="stylesheet" type="text/css" />*/
/*         <!-- bootstrap wysihtml5 - text editor -->*/
/*         <!-- <link href="{{ asset('css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" type="text/css" /> -->*/
/*         <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>*/
/*         <!-- Theme style -->*/
/*      */
/* */
/* */
/*         <link href="{{ asset('css/style2.css')}}" rel="stylesheet" type="text/css" />*/
/*          */
/* */
/* */
/* */
/*       */
/*     </head>*/
/*     <body class="skin-black">*/
/*        */
/*             <!-- header logo: style can be found in header.less -->*/
/*             <header class="header">*/
/*                 <a href="{{ path('pidev_mooc_affichage') }}" class="logo">*/
/*                     <img src="{{asset('img/logo_mooc.png')}}"*/
/*                 </a>*/
/*                 <!-- Header Navbar: style can be found in header.less -->*/
/*                 <nav class="navbar navbar-static-top" role="navigation">*/
/*                     <!-- Sidebar toggle button-->*/
/*                     <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </a>*/
/*                     <div class="navbar-right">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <!-- Messages: style can be found in dropdown.less-->*/
/*                             <li class="dropdown messages-menu">*/
/*                                 */
/*                                 {% block nbrnotif %}{% endblock%}*/
/*                             </li>*/
/*                             {% block profile %}{%endblock%}*/
/*                             <!-- User Account: style can be found in dropdown.less -->*/
/*                             */
/*                         </ul>*/
/*                     </div>*/
/*                 </nav>*/
/*             </header>*/
/*             <div class="wrapper row-offcanvas row-offcanvas-left">*/
/*                 <!-- Left side column. contains the logo and sidebar -->*/
/*                 <aside class="left-side sidebar-offcanvas">*/
/*                     <!-- sidebar: style can be found in sidebar.less -->*/
/*                     <section class="sidebar">*/
/*                         <!-- Sidebar user panel -->*/
/*                         <div class="user-panel">*/
/*                             <div class="pull-left image">*/
/*                                 <img src="{{ asset('img/small_logo.png')}}" class="img-circle" alt="User Image" />*/
/*                             </div>*/
/*                             <div class="pull-left info">*/
/*                                 <p>Hello, Jane</p>*/
/* */
/*                                 <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- search form -->*/
/*                         <form action="#" method="get" class="sidebar-form">*/
/*                             <div class="input-group">*/
/*                                 <input type="text" name="q" class="form-control" placeholder="Search..."/>*/
/*                                 <span class="input-group-btn">*/
/*                                     <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>*/
/*                                 </span>*/
/*                             </div>*/
/*                         </form>*/
/*                         <!-- /.search form -->*/
/*                         <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*                         <ul class="sidebar-menu">*/
/*                             <li class="active">*/
/*                                 {% block dashboard %} {% endblock%}*/
/*                                     <i class="fa fa-dashboard"></i> <span>Dashboard</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 {% block users %} {% endblock%}*/
/*                                     <i class="fa fa-gavel"></i> <span>Users and Courses</span>*/
/*                                 </a>*/
/*                             </li>*/
/* */
/*                             */
/* */
/*                         </ul>*/
/*                     </section>*/
/*                     <!-- /.sidebar -->*/
/*                 </aside>*/
/* */
/*                 <aside class="right-side">*/
/* */
/*                     <!-- Main content -->*/
/*                     <section class="content">*/
/*     */
/*                         <div class="row" style="margin-bottom:5px;">*/
/* */
/*                         */
/*                             <div class="col-md-3">*/
/*                                 <div class="sm-st clearfix">*/
/*                                     <span class="sm-st-icon st-red"><i class="fa fa-check-square-o"></i></span>*/
/*                                     <div class="sm-st-info">*/
/*                                         <span>{% block nombreuser %} {% endblock%}</span>*/
/*                                         Users*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             */
/*                             */
/*                             */
/*                         </div>*/
/* */
/*                         <!-- Main row -->*/
/*                         <div class="row">*/
/* */
/*                             <div class="col-md-8">*/
/*                                 <!--earning graph start-->*/
/*                                 <section class="panel">*/
/*                                     */
/* {% block body %}*/
/*     {%endblock%}*/
/*    */
/* */
/* */
/*     */
/* */
/*                                     <!-- debut test  -->*/
/*                                     */
/*                                 </section>*/
/*                                 <!--earning graph end-->*/
/* */
/*                             </div>*/
/*                             <div class="col-lg-4">*/
/* */
/*                                 <!--chat start-->*/
/*                                 <section class="panel">*/
/*                                     <header class="panel-heading">*/
/*                                         Notifications*/
/*                                     </header>*/
/*                                     <div class="panel-body" id="noti-box">*/
/* */
/*                                         <div class="alert alert-block alert-danger">*/
/*                                             <button data-dismiss="alert" class="close close-sm" type="button">*/
/*                                                 <i class="fa fa-times"></i>*/
/*                                             </button>*/
/*                                             <strong>Alert Organisme</strong> Change a few things up and try submitting again.*/
/*                                         </div>*/
/*                                         <div class="alert alert-success">*/
/*                                             <button data-dismiss="alert" class="close close-sm" type="button">*/
/*                                                 <i class="fa fa-times"></i>*/
/*                                             </button>*/
/*                                             <strong>Well done!</strong> You successfully read this important alert message.*/
/*                                         </div>*/
/*                                         <div class="alert alert-info">*/
/*                                             <button data-dismiss="alert" class="close close-sm" type="button">*/
/*                                                 <i class="fa fa-times"></i>*/
/*                                             </button>*/
/*                                             <strong>Heads up!</strong> This alert needs your attention, but it's not super important.*/
/*                                         </div>*/
/*                                         <div class="alert alert-warning">*/
/*                                             <button data-dismiss="alert" class="close close-sm" type="button">*/
/*                                                 <i class="fa fa-times"></i>*/
/*                                             </button>*/
/*                                             <strong>Warning!</strong> Best check yo self, you're not looking too good.*/
/*                                         </div>*/
/* */
/* */
/*                                         <div class="alert alert-block alert-danger">*/
/*                                             <button data-dismiss="alert" class="close close-sm" type="button">*/
/*                                                 <i class="fa fa-times"></i>*/
/*                                             </button>*/
/*                                             <strong>Oh snap!</strong> Change a few things up and try submitting again.*/
/*                                         </div>*/
/*                                         <div class="alert alert-success">*/
/*                                             <button data-dismiss="alert" class="close close-sm" type="button">*/
/*                                                 <i class="fa fa-times"></i>*/
/*                                             </button>*/
/*                                             <strong>Well done!</strong> You successfully read this important alert message.*/
/*                                         </div>*/
/*                                         <div class="alert alert-info">*/
/*                                             <button data-dismiss="alert" class="close close-sm" type="button">*/
/*                                                 <i class="fa fa-times"></i>*/
/*                                             </button>*/
/*                                             <strong>Heads up!</strong> This alert needs your attention, but it's not super important.*/
/*                                         </div>*/
/*                                         <div class="alert alert-warning">*/
/*                                             <button data-dismiss="alert" class="close close-sm" type="button">*/
/*                                                 <i class="fa fa-times"></i>*/
/*                                             </button>*/
/*                                             <strong>Warning!</strong> Best check yo self, you're not looking too good.*/
/*                                         </div>*/
/* */
/* */
/* */
/*                                     </div>*/
/*                                 </section>*/
/* */
/* */
/* */
/*                             </div>*/
/* */
/* */
/*                         </div>*/
/*                         <div class="row">*/
/* */
/*                            */
/*                         </div>*/
/*                         <div class="row">*/
/*                             */
/*                             <div class="col-md-7">*/
/*                                 */
/*                             </div>*/
/*                         </div>*/
/*                         <!-- row end -->*/
/*                     </section><!-- /.content -->*/
/*         */
/*                     <div class="footer-main">*/
/*                         Copyright &copy Director, 2014*/
/*                     </div>*/
/*                 </aside><!-- /.right-side -->*/
/* */
/*             </div><!-- ./wrapper -->*/
/* */
/* */
/* */
/*             <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>*/
/*             <script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"></script>*/
/* */
/*             <!-- jQuery UI 1.10.3 -->*/
/*             <script src="{{ asset('js/jquery-ui-1.10.3.min.js')}}" type="text/javascript"></script>*/
/*             <!-- Bootstrap -->*/
/*             <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>*/
/*             <!-- daterangepicker -->*/
/*             <script src="{{ asset('js/plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>*/
/* */
/*             <script src="{{ asset('js/plugins/chart.js')}}" type="text/javascript"></script>*/
/* */
/*             <!-- datepicker*/
/*             <script src="{{ asset('js/plugins/datepicker/bootstrap-datepicker.js')}}" type="text/javascript"></script>-->*/
/*             <!-- Bootstrap WYSIHTML5*/
/*             <script src="{{ asset('js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>-->*/
/*             <!-- iCheck -->*/
/*             <script src="{{ asset('js/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>*/
/*             <!-- calendar -->*/
/*             <script src="{{ asset('js/plugins/fullcalendar/fullcalendar.js')}}" type="text/javascript"></script>*/
/* */
/*             <!-- Director App -->*/
/*             <script src="{{ asset('js/Director/app.js')}}" type="text/javascript"></script>*/
/* */
/*             <!-- Director dashboard demo (This is only for demo purposes) -->*/
/*             <script src="{{ asset('js/Director/dashboard.js')}}" type="text/javascript"></script>*/
/* */
/*             <!-- Director for demo purposes -->*/
/*             <script type="text/javascript">*/
/*                 $('input').on('ifChecked', function (event) {*/
/*                     // var element = $(this).parent().find('input:checkbox:first');*/
/*                     // element.parent().parent().parent().addClass('highlight');*/
/*                     $(this).parents('li').addClass("task-done");*/
/*                     console.log('ok');*/
/*                 });*/
/*                 $('input').on('ifUnchecked', function (event) {*/
/*                     // var element = $(this).parent().find('input:checkbox:first');*/
/*                     // element.parent().parent().parent().removeClass('highlight');*/
/*                     $(this).parents('li').removeClass("task-done");*/
/*                     console.log('not');*/
/*                 });*/
/* */
/*             </script>*/
/*             <script>*/
/*                 $('#noti-box').slimScroll({*/
/*                     height: '400px',*/
/*                     size: '5px',*/
/*                     BorderRadius: '5px'*/
/*                 });*/
/* */
/*                 $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({*/
/*                     checkboxClass: 'icheckbox_flat-grey',*/
/*                     radioClass: 'iradio_flat-grey'*/
/*                 });*/
/*             </script>*/
/*             <script type="text/javascript">*/
/*                 $(function () {*/
/*                     "use strict";*/
/*                     //BAR CHART*/
/*                     var data = {*/
/*                         labels: ["January", "February", "March", "April", "May", "June", "July"],*/
/*                         datasets: [*/
/*                             {*/
/*                                 label: "My First dataset",*/
/*                                 fillColor: "rgba(220,220,220,0.2)",*/
/*                                 strokeColor: "rgba(220,220,220,1)",*/
/*                                 pointColor: "rgba(220,220,220,1)",*/
/*                                 pointStrokeColor: "#fff",*/
/*                                 pointHighlightFill: "#fff",*/
/*                                 pointHighlightStroke: "rgba(220,220,220,1)",*/
/*                                 data: [65, 59, 80, 81, 56, 55, 40]*/
/*                             },*/
/*                             {*/
/*                                 label: "My Second dataset",*/
/*                                 fillColor: "rgba(151,187,205,0.2)",*/
/*                                 strokeColor: "rgba(151,187,205,1)",*/
/*                                 pointColor: "rgba(151,187,205,1)",*/
/*                                 pointStrokeColor: "#fff",*/
/*                                 pointHighlightFill: "#fff",*/
/*                                 pointHighlightStroke: "rgba(151,187,205,1)",*/
/*                                 data: [28, 48, 40, 19, 86, 27, 90]*/
/*                             }*/
/*                         ]*/
/*                     };*/
/*                     new Chart(document.getElementById("linechart").getContext("2d")).Line(data, {*/
/*                         responsive: true,*/
/*                         maintainAspectRatio: false,*/
/*                     });*/
/* */
/*                 });*/
/*                 // Chart.defaults.global.responsive = true;*/
/*             </script>*/
/*        */
/*     </body>*/
/* </html>*/
