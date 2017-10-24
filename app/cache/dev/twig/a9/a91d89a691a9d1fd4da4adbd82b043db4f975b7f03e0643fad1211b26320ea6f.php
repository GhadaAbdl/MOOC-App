<?php

/* MoocProfilBundle::layout.html.twig */
class __TwigTemplate_40ac780f296ec257609950822e388b1d0cee369f463ca44707f7439567f16bcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'header' => array($this, 'block_header'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'fosarianne' => array($this, 'block_fosarianne'),
            'arianne' => array($this, 'block_arianne'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
      ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 62
        echo "  </head>

  <body>
      
        <!--header start-->
        ";
        // line 67
        $this->displayBlock('header', $context, $blocks);
        // line 182
        echo "    <!--header end-->

    <!--breadcrumbs start-->
    <div class=\"breadcrumbs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-sm-4\">
                    <h1>";
        // line 189
        $this->displayBlock('pagetitle', $context, $blocks);
        echo "</h1>
                </div>
                <div class=\"col-lg-8 col-sm-8\">
                    <ol class=\"breadcrumb pull-right\">
                    <li>";
        // line 193
        $this->displayBlock('fosarianne', $context, $blocks);
        echo "</li>
                    </ol>
                    <ol class=\"breadcrumb pull-right\">
                        <li><a href=\"";
        // line 196
        echo $this->env->getExtension('routing')->getPath("pidev_mooc_affichage");
        echo "\">Home</a></li>
                        <li class=\"active\">";
        // line 197
        $this->displayBlock('arianne', $context, $blocks);
        echo "</li>
                    </ol>
                    
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->

";
        // line 208
        $this->displayBlock('body', $context, $blocks);
        // line 211
        echo "
    <!--container end-->

     <!--footer start-->
     ";
        // line 215
        $this->displayBlock('footer', $context, $blocks);
        // line 274
        echo "    <!-- footer end -->
    <!--small footer start -->
    <footer class=\"footer-small\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-sm-6 pull-right\">
                    <ul class=\"social-link-footer list-unstyled\">
                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".1s\"><a href=\"https://web.facebook.com/MoocEsprit/\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".5s\"><a href=\"https://twitter.com/moocesprit\"><i class=\"fa fa-twitter\"></i></a></li>
                </div>
                <div class=\"col-md-4\">
                  <div class=\"copyright\">
                    <p>&copy; Copyright Mooc Esprit 2016</p>
                  </div>
                </div>
            </div>
        </div>
    </footer>
    
     <!--small footer end-->

      


<script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
  <!-- js placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    
       <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap3.3.5.min.js"), "html", null, true);
        echo "\"></script>
    
    <script type=\"text/javascript\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hover-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/bxslider/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/link-hover.js"), "html", null, true);
        echo "\"></script>


     <!--common script for all pages-->
    <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/common-scripts.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        wow = new WOW(
          {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0          // default
          }
        )
        wow.init();
    </script>
             <script>
  \$(function () {
    \$(\"#example1\").DataTable();
    \$('#example2').DataTable({
      \"paging\": true,
      \"lengthChange\": false,
      \"searching\": false,
      \"ordering\": true,
      \"info\": true,
      \"autoWidth\": false
    });
  });
</script>






    <script type=\"text/javascript\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/parallax-slider/modernizr.custom.28468.js"), "html", null, true);
        echo "\">
    </script>
 
    
   
    <script type=\"text/javascript\" src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hover-dropdown.js"), "html", null, true);
        echo "\">
    </script>
    <script defer src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\">
    </script>
 

    <script type=\"text/javascript\" src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\">
    </script>

    <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/owlcarousel/owl.carousel.js"), "html", null, true);
        echo "\">
    </script>

  
    <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/superfish.js"), "html", null, true);
        echo "\">
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/parallax-slider/jquery.cslider.js"), "html", null, true);
        echo "\">
    </script>
    <script type=\"text/javascript\">
      \$(function() {

        \$('#da-slider').cslider({
          autoplay    : true,
          bgincrement : 100
        });

      });
    </script>



    <!--common script for all pages-->
    <script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/common-scripts.js"), "html", null, true);
        echo "\">
    </script>

    <script type=\"text/javascript\">
      jQuery(document).ready(function() {


        \$('.bxslider1').bxSlider({
          minSlides: 5,
          maxSlides: 6,
          slideWidth: 360,
          slideMargin: 2,
          moveSlides: 1,
          responsive: true,
          nextSelector: '#slider-next',
          prevSelector: '#slider-prev',
          nextText: 'Onward →',
          prevText: '← Go back'
        });

      });


    </script>


    <script>
      \$('a.info').tooltip();

      \$(window).load(function() {
        \$('.flexslider').flexslider({
          animation: \"slide\",
          start: function(slider) {
            \$('body').removeClass('loading');
          }
        });
      });

      \$(document).ready(function() {

        \$(\"#owl-demo\").owlCarousel({

          items : 4

        });

      });

      jQuery(document).ready(function(){
        jQuery('ul.superfish').superfish();
      });

      new WOW().init();


    </script>


  </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Developed By M Abdur Rokib Promy\">
    <meta name=\"author\" content=\"cosmic\">
    <meta name=\"keywords\" content=\"Bootstrap 3, Template, Theme, Responsive, Corporate, Business\">
    <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/small_logo.png"), "html", null, true);
        echo "\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/small_logo.png"), "html", null, true);
        echo "\">

    

    <!-- Bootstrap core CSS -->
    ";
        // line 18
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 61
        echo "    ";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo " Mooc esprit ";
    }

    // line 18
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 19
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../compiled/flipclock.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("stylesheet\" href=\"css/flexslider.css"), "html", null, true);
        echo "\"/>
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/bxslider/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("stylesheet\" href=\"css/animate.css"), "html", null, true);
        echo "\">
    <link href=\" ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
     <link href=\" ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\" ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\"/>
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/bxslider/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/owlcarousel/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/owlcarousel/owl.theme.css"), "html", null, true);
        echo "\">

    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/superfish.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/parallax-slider/parallax-slider.css"), "html", null, true);
        echo "\" />

      <!-- Custom styles for this template -->
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--external css-->
    <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("stylesheet\" href=\"css/flexslider.css"), "html", null, true);
        echo "\"/>
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/bxslider/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("stylesheet\" href=\"css/animate.css"), "html", null, true);
        echo "\">
    <link href='";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Lato"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>


      <!-- Custom styles for this template -->
    <link href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src=\"js/html5shiv.js\"></script>
      <script src=\"js/respond.min.js\"></script>
    <![endif]-->
    ";
    }

    // line 67
    public function block_header($context, array $blocks = array())
    {
        // line 68
        echo "      <header class=\"head-section\">
      <div class=\"navbar navbar-default navbar-static-top container\">
          <div class=\"navbar-header\">
              <button class=\"navbar-toggle\" data-target=\".navbar-collapse\" data-toggle=\"collapse\"
              type=\"button\"><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span></button> <a class=\"navbar-brand\" href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("pidev_mooc_affichage");
        echo "\"> <img alt=\"\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo_mooc.png"), "html", null, true);
        echo "\"></a>
          </div>

          <div class=\"navbar-collapse collapse\">
              <ul class=\"nav navbar-nav\">
                  <li class=\"dropdown\">
                      <a class=\"dropdown-toggle\" data-close-others=\"false\" data-delay=\"0\" data-hover=
                      \"dropdown\" data-toggle=\"dropdown\" href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("pidev_mooc_affichage");
        echo "\">Home <i class=\"fa fa-angle-down\"></i>
                      </a>

                      
                  </li>

                  <li class=\"dropdown\">
                      <a class=\"dropdown-toggle\" data-close-others=\"false\" data-delay=\"0\" data-hover=
                      \"dropdown\" data-toggle=\"dropdown\" href=\"#\">Account <i class=\"fa fa-angle-down\"></i>
                      </a>

                      <ul class=\"dropdown-menu\">
                          <li>
                              <a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">My Account</a>
                          </li>

                          <li>
                              <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Edit My Account</a>
                          </li>

                          <li>
                              <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Change password</a>
                          </li>

                          <li>
                              <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("mooc_profil_alluser");
        echo "\">Others</a>
                          </li>
                           <li>
                              <a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("MyCourses_show");
        echo "\">My Courses</a>
                          </li>
                           <li>
                              <a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("mooc_quizz_list");
        echo "\">My Quizz list</a>
                          </li>
                          <li>
                              <a href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("mooc_profil_certifuser");
        echo "\">My Certificates</a>
                          </li>

                          
                        
                      </ul>
                  </li>

       

                  <li class=\"dropdown\">
                      <a class=\"dropdown-toggle\" data-close-others=\"false\" data-delay=\"0\" data-hover=
                      \"dropdown\" data-toggle=\"dropdown\" href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("courses");
        echo "\">Courses <i class=\"fa fa-angle-down\"></i>
                      </a>

                      <ul class=\"dropdown-menu\">
                          <li>
                              <a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("courses");
        echo "\">All categories</a>
                          </li>
                          <li>
                              <a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("CoursesByType", array("type" => "Android"));
        echo "\">Android</a>
                          </li>

                          <li>
                              <a href=\"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("CoursesByType", array("type" => "tizen"));
        echo "\">tizen</a>
                          </li>

                          <li>
                              <a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("CoursesByType", array("type" => "IOS"));
        echo "\">IOS</a>
                          </li>

                          
                      </ul>
                  </li>

                  <li class=\"dropdown\">
                      <a class=\"dropdown-toggle\" data-close-others=\"false\" data-delay=\"0\" data-hover=
                      \"dropdown\" data-toggle=\"dropdown\" href=\"#\">Others <i class=\"fa fa-angle-down\"></i>
                      </a>

                      <ul class=\"dropdown-menu\">
                        <li class=\"dropdown-submenu\">
                            <a href=\"#\" tabindex=\"-1\">Video Conference</a>
                              <ul class=\"dropdown-menu\">
                                  <li>
                                      <a href=\"";
        // line 159
        echo $this->env->getExtension('routing')->getPath("pidev_mooc_videoconference");
        echo "\" tabindex=\"-1\">Add</a>
                                  </li>
                                  <li>
                                      <a href=\"";
        // line 162
        echo $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceShow");
        echo "\" tabindex=\"-1\">Consult List</a>
                                  </li>
                                  <li>
                                      <a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceStat");
        echo "\" tabindex=\"-1\">Stat</a>
                                  </li>
                              </ul>
                         
                      </ul>
                  </li>

                  <li>
                      <a href=\"";
        // line 173
        echo $this->env->getExtension('routing')->getPath("my_app_mail_form");
        echo "\">Contact</a>
                  </li>

                  <li><input class=\"form-control search\" placeholder=\" Search\" type=\"text\" ></</li>
              </ul>
          </div>
      </div>
    </header>
          ";
    }

    // line 189
    public function block_pagetitle($context, array $blocks = array())
    {
    }

    // line 193
    public function block_fosarianne($context, array $blocks = array())
    {
    }

    // line 197
    public function block_arianne($context, array $blocks = array())
    {
    }

    // line 208
    public function block_body($context, array $blocks = array())
    {
        // line 209
        echo "    
    ";
    }

    // line 215
    public function block_footer($context, array $blocks = array())
    {
        // line 216
        echo " <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-3 address wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".1s\">
                     <h1>contact info</h1>
                     <address>
                         <p><i class=\"fa fa-home pr-10\"></i>Address: Tunisia</p>
                         <p><i class=\"fa fa-globe pr-10\"></i>Ghazala, Ariana</p>
                         <p><i class=\"fa fa-mobile pr-10\"></i>Mobile : (+216) 55264040</p>
                         <p><i class=\"fa fa-phone pr-10\"></i>Phone : (+216) 25116050</p>
                         <p><i class=\"fa fa-envelope pr-10\"></i>Email : <a href=\"javascript:;\">next.mooc@esprit.tn</a></p>
                     </address>
                 </div>
                <div class=\"col-lg-3 col-sm-3 wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".3s\">
                    <h1>latest tweet</h1>
                    <div id=\"owl-slide\">
                    <div class=\"tweet-box\">
                        <i class=\"fa fa-twitter\"></i>
                        <em>Please follow <a href=\"javascript:;\">@example</a> for all future updates of us! <a href=\"javascript:;\">twitter.com/acme</a></em>
                    </div>
                    <div class=\"tweet-box\">
                        <i class=\"fa fa-twitter\"></i>
                        <em>Please follow <a href=\"javascript:;\">@example</a> for all future updates of us! <a href=\"javascript:;\">twitter.com/acme</a></em>
                    </div>
                    <div class=\"tweet-box\">
                        <i class=\"fa fa-twitter\"></i>
                        <em>Please follow <a href=\"javascript:;\">@example</a> for all future updates of us! <a href=\"javascript:;\">twitter.com/acme</a></em>
                    </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-3\">
                <div class=\"page-footer wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".5s\">
                    <h1>Our Company</h1>
                    <ul class=\"page-footer-list\">

                        <li><i class=\"fa fa-angle-right\"></i><a href=\"";
        // line 251
        echo $this->env->getExtension('routing')->getPath("pidev_mooc_about");
        echo "\">About Us</a></li>
                        <li><i class=\"fa fa-angle-right\"></i><a href=\"";
        // line 252
        echo $this->env->getExtension('routing')->getPath("pidev_mooc_terms");
        echo "\">Term & condition</a></li>

                    </ul>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-3\">

                    <div class=\"text-footer wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".7s\">
                    <h1><img alt=\"\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo_mooc.png"), "html", null, true);
        echo "\"></h1>
                        <p>
                            
Mooc offers universal access to the best training in the world, 
in partnership with universities and the highest level organizations to offer online courses .
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </footer>
     ";
    }

    public function getTemplateName()
    {
        return "MoocProfilBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  760 => 260,  749 => 252,  745 => 251,  708 => 216,  705 => 215,  700 => 209,  697 => 208,  692 => 197,  687 => 193,  682 => 189,  669 => 173,  658 => 165,  652 => 162,  646 => 159,  626 => 142,  619 => 138,  612 => 134,  606 => 131,  598 => 126,  583 => 114,  577 => 111,  571 => 108,  565 => 105,  558 => 101,  551 => 97,  544 => 93,  528 => 80,  516 => 73,  509 => 68,  506 => 67,  494 => 53,  490 => 52,  483 => 48,  479 => 47,  475 => 46,  471 => 45,  467 => 44,  462 => 42,  458 => 41,  454 => 40,  450 => 39,  444 => 36,  439 => 34,  435 => 33,  431 => 32,  426 => 30,  422 => 29,  418 => 28,  414 => 27,  410 => 26,  406 => 25,  402 => 24,  398 => 23,  394 => 22,  390 => 21,  386 => 20,  381 => 19,  378 => 18,  372 => 12,  368 => 61,  366 => 18,  358 => 13,  354 => 12,  349 => 10,  342 => 5,  339 => 4,  274 => 389,  255 => 373,  250 => 371,  243 => 367,  237 => 364,  230 => 360,  225 => 358,  217 => 353,  184 => 323,  178 => 320,  171 => 316,  167 => 315,  162 => 313,  158 => 312,  154 => 311,  149 => 309,  145 => 308,  140 => 306,  135 => 304,  130 => 302,  125 => 300,  120 => 298,  94 => 274,  92 => 215,  86 => 211,  84 => 208,  70 => 197,  66 => 196,  60 => 193,  53 => 189,  44 => 182,  42 => 67,  35 => 62,  33 => 4,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*       {% block head %}*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="Developed By M Abdur Rokib Promy">*/
/*     <meta name="author" content="cosmic">*/
/*     <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">*/
/*     <link rel="shortcut icon" href="{{ asset('img/small_logo.png') }}">*/
/* */
/*     <title>{% block title %} Mooc esprit {% endblock %}</title>*/
/*         <link rel="shortcut icon" href="{{ asset('img/small_logo.png') }}">*/
/* */
/*     */
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     {% block stylesheet %}*/
/*     <link rel="stylesheet" href="{{ asset('../compiled/flipclock.css') }}">*/
/*         <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />*/
/*     <link rel="{{ asset('stylesheet" href="css/flexslider.css') }}"/>*/
/*     <link href="{{ asset('assets/bxslider/jquery.bxslider.css') }}" rel="stylesheet" />*/
/*     <link rel="{{ asset('stylesheet" href="css/animate.css') }}">*/
/*     <link href=" {{ asset ('css/theme.css')}}" rel="stylesheet">*/
/*      <link href=" {{ asset ('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />*/
/*     <link rel="stylesheet" href=" {{ asset ('css/flexslider.css')}}"/>*/
/*     <link href="{{ asset ('assets/bxslider/jquery.bxslider.css')}}" rel="stylesheet" />*/
/*     <link rel="stylesheet" href="{{ asset ('css/animate.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset ('assets/owlcarousel/owl.carousel.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset ('assets/owlcarousel/owl.theme.css')}}">*/
/* */
/*     <link href="{{ asset ('css/superfish.css')}}" rel="stylesheet" media="screen">*/
/*       <link rel="stylesheet" type="text/css" href="{{ asset ('css/component.css')}}">*/
/*     <link href="{{ asset ('css/style-responsive.css')}}" rel="stylesheet" />*/
/* */
/*     <link rel="stylesheet" type="text/css" href="{{ asset ('css/parallax-slider/parallax-slider.css')}}" />*/
/* */
/*       <!-- Custom styles for this template -->*/
/*     <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />*/
/*     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/theme.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/bootstrap-reset.css') }}" rel="stylesheet">*/
/*     <!--external css-->*/
/*     <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />*/
/*     <link rel="{{ asset('stylesheet" href="css/flexslider.css') }}"/>*/
/*     <link href="{{ asset('assets/bxslider/jquery.bxslider.css') }}" rel="stylesheet" />*/
/*     <link rel="{{ asset('stylesheet" href="css/animate.css') }}">*/
/*     <link href='{{ asset('http://fonts.googleapis.com/css?family=Lato') }}' rel='stylesheet' type='text/css'>*/
/* */
/* */
/*       <!-- Custom styles for this template -->*/
/*     <link href="{{ asset('css/style.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />*/
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="js/html5shiv.js"></script>*/
/*       <script src="js/respond.min.js"></script>*/
/*     <![endif]-->*/
/*     {% endblock %}*/
/*     {% endblock %}*/
/*   </head>*/
/* */
/*   <body>*/
/*       */
/*         <!--header start-->*/
/*         {% block header %}*/
/*       <header class="head-section">*/
/*       <div class="navbar navbar-default navbar-static-top container">*/
/*           <div class="navbar-header">*/
/*               <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse"*/
/*               type="button"><span class="icon-bar"></span> <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span></button> <a class="navbar-brand" href="{{path('pidev_mooc_affichage')}}"> <img alt="" src="{{asset('img/logo_mooc.png')}}"></a>*/
/*           </div>*/
/* */
/*           <div class="navbar-collapse collapse">*/
/*               <ul class="nav navbar-nav">*/
/*                   <li class="dropdown">*/
/*                       <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=*/
/*                       "dropdown" data-toggle="dropdown" href="{{path('pidev_mooc_affichage')}}">Home <i class="fa fa-angle-down"></i>*/
/*                       </a>*/
/* */
/*                       */
/*                   </li>*/
/* */
/*                   <li class="dropdown">*/
/*                       <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=*/
/*                       "dropdown" data-toggle="dropdown" href="#">Account <i class="fa fa-angle-down"></i>*/
/*                       </a>*/
/* */
/*                       <ul class="dropdown-menu">*/
/*                           <li>*/
/*                               <a href="{{path('fos_user_profile_show')}}">My Account</a>*/
/*                           </li>*/
/* */
/*                           <li>*/
/*                               <a href="{{path('fos_user_profile_edit')}}">Edit My Account</a>*/
/*                           </li>*/
/* */
/*                           <li>*/
/*                               <a href="{{path('fos_user_change_password')}}">Change password</a>*/
/*                           </li>*/
/* */
/*                           <li>*/
/*                               <a href="{{path('mooc_profil_alluser')}}">Others</a>*/
/*                           </li>*/
/*                            <li>*/
/*                               <a href="{{path('MyCourses_show')}}">My Courses</a>*/
/*                           </li>*/
/*                            <li>*/
/*                               <a href="{{path('mooc_quizz_list')}}">My Quizz list</a>*/
/*                           </li>*/
/*                           <li>*/
/*                               <a href="{{path('mooc_profil_certifuser')}}">My Certificates</a>*/
/*                           </li>*/
/* */
/*                           */
/*                         */
/*                       </ul>*/
/*                   </li>*/
/* */
/*        */
/* */
/*                   <li class="dropdown">*/
/*                       <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=*/
/*                       "dropdown" data-toggle="dropdown" href="{{path('courses')}}">Courses <i class="fa fa-angle-down"></i>*/
/*                       </a>*/
/* */
/*                       <ul class="dropdown-menu">*/
/*                           <li>*/
/*                               <a href="{{path('courses')}}">All categories</a>*/
/*                           </li>*/
/*                           <li>*/
/*                               <a href="{{path('CoursesByType',{'type':'Android'})}}">Android</a>*/
/*                           </li>*/
/* */
/*                           <li>*/
/*                               <a href="{{path('CoursesByType',{'type':'tizen'})}}">tizen</a>*/
/*                           </li>*/
/* */
/*                           <li>*/
/*                               <a href="{{path('CoursesByType',{'type':'IOS'})}}">IOS</a>*/
/*                           </li>*/
/* */
/*                           */
/*                       </ul>*/
/*                   </li>*/
/* */
/*                   <li class="dropdown">*/
/*                       <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=*/
/*                       "dropdown" data-toggle="dropdown" href="#">Others <i class="fa fa-angle-down"></i>*/
/*                       </a>*/
/* */
/*                       <ul class="dropdown-menu">*/
/*                         <li class="dropdown-submenu">*/
/*                             <a href="#" tabindex="-1">Video Conference</a>*/
/*                               <ul class="dropdown-menu">*/
/*                                   <li>*/
/*                                       <a href="{{path('pidev_mooc_videoconference')}}" tabindex="-1">Add</a>*/
/*                                   </li>*/
/*                                   <li>*/
/*                                       <a href="{{path('pidev_mooc_videoconferenceShow')}}" tabindex="-1">Consult List</a>*/
/*                                   </li>*/
/*                                   <li>*/
/*                                       <a href="{{path('pidev_mooc_videoconferenceStat')}}" tabindex="-1">Stat</a>*/
/*                                   </li>*/
/*                               </ul>*/
/*                          */
/*                       </ul>*/
/*                   </li>*/
/* */
/*                   <li>*/
/*                       <a href="{{path('my_app_mail_form')}}">Contact</a>*/
/*                   </li>*/
/* */
/*                   <li><input class="form-control search" placeholder=" Search" type="text" ></</li>*/
/*               </ul>*/
/*           </div>*/
/*       </div>*/
/*     </header>*/
/*           {% endblock %}*/
/*     <!--header end-->*/
/* */
/*     <!--breadcrumbs start-->*/
/*     <div class="breadcrumbs">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-4 col-sm-4">*/
/*                     <h1>{% block pagetitle %}{% endblock %}</h1>*/
/*                 </div>*/
/*                 <div class="col-lg-8 col-sm-8">*/
/*                     <ol class="breadcrumb pull-right">*/
/*                     <li>{% block fosarianne %}{% endblock %}</li>*/
/*                     </ol>*/
/*                     <ol class="breadcrumb pull-right">*/
/*                         <li><a href="{{path('pidev_mooc_affichage')}}">Home</a></li>*/
/*                         <li class="active">{% block arianne %}{% endblock %}</li>*/
/*                     </ol>*/
/*                     */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!--breadcrumbs end-->*/
/* */
/*     <!--container start-->*/
/* */
/* {% block body %}*/
/*     */
/*     {% endblock %}*/
/* */
/*     <!--container end-->*/
/* */
/*      <!--footer start-->*/
/*      {% block footer %}*/
/*  <footer class="footer">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">*/
/*                      <h1>contact info</h1>*/
/*                      <address>*/
/*                          <p><i class="fa fa-home pr-10"></i>Address: Tunisia</p>*/
/*                          <p><i class="fa fa-globe pr-10"></i>Ghazala, Ariana</p>*/
/*                          <p><i class="fa fa-mobile pr-10"></i>Mobile : (+216) 55264040</p>*/
/*                          <p><i class="fa fa-phone pr-10"></i>Phone : (+216) 25116050</p>*/
/*                          <p><i class="fa fa-envelope pr-10"></i>Email : <a href="javascript:;">next.mooc@esprit.tn</a></p>*/
/*                      </address>*/
/*                  </div>*/
/*                 <div class="col-lg-3 col-sm-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">*/
/*                     <h1>latest tweet</h1>*/
/*                     <div id="owl-slide">*/
/*                     <div class="tweet-box">*/
/*                         <i class="fa fa-twitter"></i>*/
/*                         <em>Please follow <a href="javascript:;">@example</a> for all future updates of us! <a href="javascript:;">twitter.com/acme</a></em>*/
/*                     </div>*/
/*                     <div class="tweet-box">*/
/*                         <i class="fa fa-twitter"></i>*/
/*                         <em>Please follow <a href="javascript:;">@example</a> for all future updates of us! <a href="javascript:;">twitter.com/acme</a></em>*/
/*                     </div>*/
/*                     <div class="tweet-box">*/
/*                         <i class="fa fa-twitter"></i>*/
/*                         <em>Please follow <a href="javascript:;">@example</a> for all future updates of us! <a href="javascript:;">twitter.com/acme</a></em>*/
/*                     </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-lg-3 col-sm-3">*/
/*                 <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">*/
/*                     <h1>Our Company</h1>*/
/*                     <ul class="page-footer-list">*/
/* */
/*                         <li><i class="fa fa-angle-right"></i><a href="{{path('pidev_mooc_about')}}">About Us</a></li>*/
/*                         <li><i class="fa fa-angle-right"></i><a href="{{path('pidev_mooc_terms')}}">Term & condition</a></li>*/
/* */
/*                     </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-lg-3 col-sm-3">*/
/* */
/*                     <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">*/
/*                     <h1><img alt="" src="{{asset('img/logo_mooc.png')}}"></h1>*/
/*                         <p>*/
/*                             */
/* Mooc offers universal access to the best training in the world, */
/* in partnership with universities and the highest level organizations to offer online courses .*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*     </footer>*/
/*      {% endblock %}*/
/*     <!-- footer end -->*/
/*     <!--small footer start -->*/
/*     <footer class="footer-small">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-6 col-sm-6 pull-right">*/
/*                     <ul class="social-link-footer list-unstyled">*/
/*                         <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="https://web.facebook.com/MoocEsprit/"><i class="fa fa-facebook"></i></a></li>*/
/*                         <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="https://twitter.com/moocesprit"><i class="fa fa-twitter"></i></a></li>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                   <div class="copyright">*/
/*                     <p>&copy; Copyright Mooc Esprit 2016</p>*/
/*                   </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/*     */
/*      <!--small footer end-->*/
/* */
/*       */
/* */
/* */
/* <script src="{{ asset('js/jQuery-2.2.0.min.js') }}"></script>*/
/* */
/* <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>*/
/*   <!-- js placed at the end of the document so the pages load faster -->*/
/*     <script src="{{ asset('js/jquery.js') }}"></script>*/
/*     */
/*        <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>*/
/*     */
/*     <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*     */
/*     <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>*/
/* <script src="{{ asset('js/bootstrap3.3.5.min.js') }}"></script>*/
/*     */
/*     <script type="text/javascript" src="{{ asset('js/hover-dropdown.js') }}"></script>*/
/*     <script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('assets/bxslider/jquery.bxslider.js') }}"></script>*/
/* */
/*     <script src="{{ asset('js/jquery.easing.min.js') }}"></script>*/
/*     <script src="{{ asset('js/link-hover.js') }}"></script>*/
/* */
/* */
/*      <!--common script for all pages-->*/
/*     <script src="{{ asset('js/common-scripts.js') }}"></script>*/
/* */
/* */
/*     <script src="{{ asset('js/wow.min.js') }}"></script>*/
/*     <script>*/
/*         wow = new WOW(*/
/*           {*/
/*             boxClass:     'wow',      // default*/
/*             animateClass: 'animated', // default*/
/*             offset:       0          // default*/
/*           }*/
/*         )*/
/*         wow.init();*/
/*     </script>*/
/*              <script>*/
/*   $(function () {*/
/*     $("#example1").DataTable();*/
/*     $('#example2').DataTable({*/
/*       "paging": true,*/
/*       "lengthChange": false,*/
/*       "searching": false,*/
/*       "ordering": true,*/
/*       "info": true,*/
/*       "autoWidth": false*/
/*     });*/
/*   });*/
/* </script>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*     <script type="text/javascript" src="{{ asset ('js/parallax-slider/modernizr.custom.28468.js')}}">*/
/*     </script>*/
/*  */
/*     */
/*    */
/*     <script type="text/javascript" src="{{ asset ('js/hover-dropdown.js')}}">*/
/*     </script>*/
/*     <script defer src="{{ asset ('js/jquery.flexslider.js')}}">*/
/*     </script>*/
/*  */
/* */
/*     <script type="text/javascript" src="{{ asset ('js/jquery.parallax-1.1.3.js')}}">*/
/*     </script>*/
/* */
/*     <script src="{{ asset ('assets/owlcarousel/owl.carousel.js')}}">*/
/*     </script>*/
/* */
/*   */
/*     <script src="{{ asset ('js/superfish.js')}}">*/
/*     </script>*/
/*     <script type="text/javascript" src="{{ asset ('js/parallax-slider/jquery.cslider.js')}}">*/
/*     </script>*/
/*     <script type="text/javascript">*/
/*       $(function() {*/
/* */
/*         $('#da-slider').cslider({*/
/*           autoplay    : true,*/
/*           bgincrement : 100*/
/*         });*/
/* */
/*       });*/
/*     </script>*/
/* */
/* */
/* */
/*     <!--common script for all pages-->*/
/*     <script src="{{ asset ('js/common-scripts.js')}}">*/
/*     </script>*/
/* */
/*     <script type="text/javascript">*/
/*       jQuery(document).ready(function() {*/
/* */
/* */
/*         $('.bxslider1').bxSlider({*/
/*           minSlides: 5,*/
/*           maxSlides: 6,*/
/*           slideWidth: 360,*/
/*           slideMargin: 2,*/
/*           moveSlides: 1,*/
/*           responsive: true,*/
/*           nextSelector: '#slider-next',*/
/*           prevSelector: '#slider-prev',*/
/*           nextText: 'Onward →',*/
/*           prevText: '← Go back'*/
/*         });*/
/* */
/*       });*/
/* */
/* */
/*     </script>*/
/* */
/* */
/*     <script>*/
/*       $('a.info').tooltip();*/
/* */
/*       $(window).load(function() {*/
/*         $('.flexslider').flexslider({*/
/*           animation: "slide",*/
/*           start: function(slider) {*/
/*             $('body').removeClass('loading');*/
/*           }*/
/*         });*/
/*       });*/
/* */
/*       $(document).ready(function() {*/
/* */
/*         $("#owl-demo").owlCarousel({*/
/* */
/*           items : 4*/
/* */
/*         });*/
/* */
/*       });*/
/* */
/*       jQuery(document).ready(function(){*/
/*         jQuery('ul.superfish').superfish();*/
/*       });*/
/* */
/*       new WOW().init();*/
/* */
/* */
/*     </script>*/
/* */
/* */
/*   </body>*/
/* </html>*/
/* */
