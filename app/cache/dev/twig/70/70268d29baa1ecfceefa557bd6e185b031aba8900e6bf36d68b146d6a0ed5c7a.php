<?php

/* MoocMoocBundle::layout.html.twig */
class __TwigTemplate_d33e91f94304ee5c99f3b13c0556c88a226a8612c776cb736580c9cd2dab3a1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
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
    <header class=\"head-section\">
      <div class=\"navbar navbar-default navbar-static-top container\">
          <div class=\"navbar-header\">
              <button class=\"navbar-toggle\" data-target=\".navbar-collapse\" data-toggle=\"collapse\"
              type=\"button\"><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span></button> <a class=\"navbar-brand\" href=\"index\"> <img alt=\"\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo_mooc.png"), "html", null, true);
        echo "\"></a>
          </div>

          <div class=\"navbar-collapse collapse\">
              <ul class=\"nav navbar-nav\">
                  <li class=\"dropdown\">
                      <a class=\"dropdown-toggle\" data-close-others=\"false\" data-delay=\"0\" data-hover=
                      \"dropdown\" data-toggle=\"dropdown\" href=\"index\">Home <i class=\"fa fa-angle-down\"></i>
                      </a>

                      
                  </li>

                  <li class=\"dropdown\">
                      <a class=\"dropdown-toggle\" data-close-others=\"false\" data-delay=\"0\" data-hover=
                      \"dropdown\" data-toggle=\"dropdown\" href=\"#\">Account <i class=\"fa fa-angle-down\"></i>
                      </a>

                      <ul class=\"dropdown-menu\">
                          <li>
                              <a href=\"typography.html\">Typography</a>
                          </li>

                          <li>
                              <a href=\"button.html\">Buttons</a>
                          </li>

                          <li>
                              <a href=\"form.html\">Form</a>
                          </li>

                          <li>
                              <a href=\"table.html\">Table</a>
                          </li>

                          
                        
                      </ul>
                  </li>

                  <li class=\"dropdown\">
                      <a class=\"dropdown-toggle\" data-close-others=\"false\" data-delay=\"0\" data-hover=
                      \"dropdown\" data-toggle=\"dropdown\" href=\"#\">Category <i class=\"fa fa-angle-down\"></i>
                      </a>

                      <ul class=\"dropdown-menu\">
                          <li>
                              <a href=\"about.html\">Mobile</a>
                          </li>

                          <li>
                              <a href=\"404.html\">Java</a>
                          </li>

                          <li>
                              <a href=\"career.html\">DotNet</a>
                          </li>


                      

                         
                      </ul>
                  </li>

                  <li class=\"dropdown\">
                      <a class=\"dropdown-toggle\" data-close-others=\"false\" data-delay=\"0\" data-hover=
                      \"dropdown\" data-toggle=\"dropdown\" href=\"#\">Courses <i class=\"fa fa-angle-down\"></i>
                      </a>

                      <ul class=\"dropdown-menu\">
                          <li>
                              <a href=\"portfolio-3-col.html\">Consult</a>
                          </li>

                          <li>
                              <a href=\"portfolio-4-col.html\">Recent</a>
                          </li>

                          <li>
                              <a href=\"portfolio-single-image.html\">...</a>
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
                                      <a href=\"videoconference\" tabindex=\"-1\">Add</a>
                                  </li>
                                  <li>
                                      <a href=\"videoList\" tabindex=\"-1\">Consult List</a>
                                  </li>
                                  <li>
                                      <a href=\"stat\" tabindex=\"-1\">Stat</a>
                                  </li>
                              </ul>
                         
                      </ul>
                  </li>

                  <li>
                      <a href=\"mail\">Contact</a>
                  </li>

                  <li><input class=\"form-control search\" placeholder=\" Search\" type=\"text\" ></</li>
              </ul>
          </div>
      </div>
    </header>
    <!--header end-->


";
        // line 194
        $this->displayBlock('body', $context, $blocks);
        // line 197
        echo "
    <!--container end-->

     <!--footer start-->
     <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-3 address wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".1s\">
                     <h1>contact info</h1>
                     <address>
                         <p><i class=\"fa fa-home pr-10\"></i>Address: Tunisia</p>
                         <p><i class=\"fa fa-globe pr-10\"></i>Ghazala, Ariana</p>
                         <p><i class=\"fa fa-mobile pr-10\"></i>Mobile : (00216) 25116050</p>
                         <p><i class=\"fa fa-phone pr-10\"></i>Phone : (00216) 55264040</p>
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

                        <li><i class=\"fa fa-angle-right\"></i><a href=\"about\">About Us</a></li>
                        <li><i class=\"fa fa-angle-right\"></i><a href=\"faq.html\">Support</a></li>
                        <li><i class=\"fa fa-angle-right\"></i><a href=\"service.html\">Service</a></li>
                        <li><i class=\"fa fa-angle-right\"></i><a href=\"privacy-policy.html\">Privacy Policy</a></li>
                        <li><i class=\"fa fa-angle-right\"></i><a href=\"terms\">Term & condition</a></li>

                    </ul>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-3\">

                    <div class=\"text-footer wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".7s\">
                    <h1><img alt=\"\" src=\"";
        // line 248
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
    <!-- footer end -->
    <!--small footer start -->
    <footer class=\"footer-small\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-sm-6 pull-right\">
                    <ul class=\"social-link-footer list-unstyled\">
                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".1s\"><a href=\"https://www.facebook.com/MoocEsprit/\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".2s\"><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".3s\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".4s\"><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".5s\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".6s\"><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".7s\"><a href=\"#\"><i class=\"fa fa-github\"></i></a></li>
                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".8s\"><a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>
                    </ul>
                </div>
                <div class=\"col-md-4\">
                  <div class=\"copyright\">
                    <p>&copy; Copyright - Mooc Esprit 2016</p>
                  </div>
                </div>
            </div>
        </div>
    </footer>
   <!-- js placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hover-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/bxslider/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/link-hover.js"), "html", null, true);
        echo "\"></script>


     <!--common script for all pages-->
    <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/common-scripts.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 301
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
          <script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/parallax-slider/modernizr.custom.28468.js"), "html", null, true);
        echo "\">
    </script>
        <script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\">
    </script>
    <script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\">
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hover-dropdown.js"), "html", null, true);
        echo "\">
    </script>
    <script defer src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\">
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/bxslider/jquery.bxslider.js"), "html", null, true);
        echo "\">
    </script>

    <script type=\"text/javascript\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\">
    </script>
    <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\">
    </script>
    <script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/owlcarousel/owl.carousel.js"), "html", null, true);
        echo "\">
    </script>

    <script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\">
    </script>
    <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/link-hover.js"), "html", null, true);
        echo "\">
    </script>
    <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/superfish.js"), "html", null, true);
        echo "\">
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 339
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
        // line 355
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/small_logo.png"), "html", null, true);
        echo "\" />
    
<link rel=\"shortcut icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/small_logo.png"), "html", null, true);
        echo "\" />

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
        echo "Mooc esprit ";
    }

    // line 18
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 19
        echo "<link rel=\"stylesheet\" href=\"";
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

    // line 194
    public function block_body($context, array $blocks = array())
    {
        // line 195
        echo "    
    ";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  637 => 195,  634 => 194,  622 => 53,  618 => 52,  611 => 48,  607 => 47,  603 => 46,  599 => 45,  595 => 44,  590 => 42,  586 => 41,  582 => 40,  578 => 39,  572 => 36,  567 => 34,  563 => 33,  559 => 32,  554 => 30,  550 => 29,  546 => 28,  542 => 27,  538 => 26,  534 => 25,  530 => 24,  526 => 23,  522 => 22,  518 => 21,  514 => 20,  509 => 19,  506 => 18,  500 => 12,  496 => 61,  494 => 18,  488 => 15,  483 => 13,  479 => 12,  474 => 10,  467 => 5,  464 => 4,  401 => 355,  382 => 339,  377 => 337,  372 => 335,  367 => 333,  361 => 330,  356 => 328,  351 => 326,  345 => 323,  340 => 321,  335 => 319,  330 => 317,  325 => 315,  320 => 313,  316 => 312,  302 => 301,  296 => 298,  289 => 294,  285 => 293,  280 => 291,  276 => 290,  272 => 289,  268 => 288,  264 => 287,  222 => 248,  169 => 197,  167 => 194,  42 => 72,  30 => 62,  28 => 4,  23 => 1,);
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
/*     <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">*/
/* */
/*     <title>{% block title %}Mooc esprit {% endblock %}</title>*/
/*     <link rel="shortcut icon" href="{{ asset ('img/small_logo.png')}}" />*/
/*     */
/* <link rel="shortcut icon" href="{{ asset ('img/small_logo.png')}}" />*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     {% block stylesheet %}*/
/* <link rel="stylesheet" href="{{ asset('../compiled/flipclock.css') }}">*/
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
/*     <header class="head-section">*/
/*       <div class="navbar navbar-default navbar-static-top container">*/
/*           <div class="navbar-header">*/
/*               <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse"*/
/*               type="button"><span class="icon-bar"></span> <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span></button> <a class="navbar-brand" href="index"> <img alt="" src="{{asset('img/logo_mooc.png')}}"></a>*/
/*           </div>*/
/* */
/*           <div class="navbar-collapse collapse">*/
/*               <ul class="nav navbar-nav">*/
/*                   <li class="dropdown">*/
/*                       <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=*/
/*                       "dropdown" data-toggle="dropdown" href="index">Home <i class="fa fa-angle-down"></i>*/
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
/*                               <a href="typography.html">Typography</a>*/
/*                           </li>*/
/* */
/*                           <li>*/
/*                               <a href="button.html">Buttons</a>*/
/*                           </li>*/
/* */
/*                           <li>*/
/*                               <a href="form.html">Form</a>*/
/*                           </li>*/
/* */
/*                           <li>*/
/*                               <a href="table.html">Table</a>*/
/*                           </li>*/
/* */
/*                           */
/*                         */
/*                       </ul>*/
/*                   </li>*/
/* */
/*                   <li class="dropdown">*/
/*                       <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=*/
/*                       "dropdown" data-toggle="dropdown" href="#">Category <i class="fa fa-angle-down"></i>*/
/*                       </a>*/
/* */
/*                       <ul class="dropdown-menu">*/
/*                           <li>*/
/*                               <a href="about.html">Mobile</a>*/
/*                           </li>*/
/* */
/*                           <li>*/
/*                               <a href="404.html">Java</a>*/
/*                           </li>*/
/* */
/*                           <li>*/
/*                               <a href="career.html">DotNet</a>*/
/*                           </li>*/
/* */
/* */
/*                       */
/* */
/*                          */
/*                       </ul>*/
/*                   </li>*/
/* */
/*                   <li class="dropdown">*/
/*                       <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=*/
/*                       "dropdown" data-toggle="dropdown" href="#">Courses <i class="fa fa-angle-down"></i>*/
/*                       </a>*/
/* */
/*                       <ul class="dropdown-menu">*/
/*                           <li>*/
/*                               <a href="portfolio-3-col.html">Consult</a>*/
/*                           </li>*/
/* */
/*                           <li>*/
/*                               <a href="portfolio-4-col.html">Recent</a>*/
/*                           </li>*/
/* */
/*                           <li>*/
/*                               <a href="portfolio-single-image.html">...</a>*/
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
/*                                       <a href="videoconference" tabindex="-1">Add</a>*/
/*                                   </li>*/
/*                                   <li>*/
/*                                       <a href="videoList" tabindex="-1">Consult List</a>*/
/*                                   </li>*/
/*                                   <li>*/
/*                                       <a href="stat" tabindex="-1">Stat</a>*/
/*                                   </li>*/
/*                               </ul>*/
/*                          */
/*                       </ul>*/
/*                   </li>*/
/* */
/*                   <li>*/
/*                       <a href="mail">Contact</a>*/
/*                   </li>*/
/* */
/*                   <li><input class="form-control search" placeholder=" Search" type="text" ></</li>*/
/*               </ul>*/
/*           </div>*/
/*       </div>*/
/*     </header>*/
/*     <!--header end-->*/
/* */
/* */
/* {% block body %}*/
/*     */
/*     {% endblock %}*/
/* */
/*     <!--container end-->*/
/* */
/*      <!--footer start-->*/
/*      <footer class="footer">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">*/
/*                      <h1>contact info</h1>*/
/*                      <address>*/
/*                          <p><i class="fa fa-home pr-10"></i>Address: Tunisia</p>*/
/*                          <p><i class="fa fa-globe pr-10"></i>Ghazala, Ariana</p>*/
/*                          <p><i class="fa fa-mobile pr-10"></i>Mobile : (00216) 25116050</p>*/
/*                          <p><i class="fa fa-phone pr-10"></i>Phone : (00216) 55264040</p>*/
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
/*                         <li><i class="fa fa-angle-right"></i><a href="about">About Us</a></li>*/
/*                         <li><i class="fa fa-angle-right"></i><a href="faq.html">Support</a></li>*/
/*                         <li><i class="fa fa-angle-right"></i><a href="service.html">Service</a></li>*/
/*                         <li><i class="fa fa-angle-right"></i><a href="privacy-policy.html">Privacy Policy</a></li>*/
/*                         <li><i class="fa fa-angle-right"></i><a href="terms">Term & condition</a></li>*/
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
/*     <!-- footer end -->*/
/*     <!--small footer start -->*/
/*     <footer class="footer-small">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-6 col-sm-6 pull-right">*/
/*                     <ul class="social-link-footer list-unstyled">*/
/*                         <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="https://www.facebook.com/MoocEsprit/"><i class="fa fa-facebook"></i></a></li>*/
/*                         <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i class="fa fa-google-plus"></i></a></li>*/
/*                         <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".3s"><a href="#"><i class="fa fa-dribbble"></i></a></li>*/
/*                         <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="#"><i class="fa fa-linkedin"></i></a></li>*/
/*                         <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i class="fa fa-twitter"></i></a></li>*/
/*                         <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".6s"><a href="#"><i class="fa fa-skype"></i></a></li>*/
/*                         <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".7s"><a href="#"><i class="fa fa-github"></i></a></li>*/
/*                         <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i class="fa fa-youtube"></i></a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                   <div class="copyright">*/
/*                     <p>&copy; Copyright - Mooc Esprit 2016</p>*/
/*                   </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/*    <!-- js placed at the end of the document so the pages load faster -->*/
/*     <script src="{{ asset('js/jquery.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
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
/*           <script src="{{ asset('js/jquery.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset ('js/parallax-slider/modernizr.custom.28468.js')}}">*/
/*     </script>*/
/*         <script src="{{ asset ('js/jquery-1.8.3.min.js')}}">*/
/*     </script>*/
/*     <script src="{{ asset ('js/bootstrap.min.js')}}">*/
/*     </script>*/
/*     <script type="text/javascript" src="{{ asset ('js/hover-dropdown.js')}}">*/
/*     </script>*/
/*     <script defer src="{{ asset ('js/jquery.flexslider.js')}}">*/
/*     </script>*/
/*     <script type="text/javascript" src="{{ asset ('assets/bxslider/jquery.bxslider.js')}}">*/
/*     </script>*/
/* */
/*     <script type="text/javascript" src="{{ asset ('js/jquery.parallax-1.1.3.js')}}">*/
/*     </script>*/
/*     <script src="{{ asset ('js/wow.min.js')}}">*/
/*     </script>*/
/*     <script src="{{ asset ('assets/owlcarousel/owl.carousel.js')}}">*/
/*     </script>*/
/* */
/*     <script src="{{ asset ('js/jquery.easing.min.js')}}">*/
/*     </script>*/
/*     <script src="{{ asset ('js/link-hover.js')}}">*/
/*     </script>*/
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
/*   </body>*/
/* </html>*/
/* */
