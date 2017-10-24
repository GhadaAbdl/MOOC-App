<?php

/* MoocMoocBundle:Default:about.html.twig */
class __TwigTemplate_7c019315c67c87c170b5096e736f2fa68da87e9da9a2b69da5b3cc94f9b49b0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocMoocBundle:Default:about.html.twig", 1);
        $this->blocks = array(
            'pagetitle' => array($this, 'block_pagetitle'),
            'arianne' => array($this, 'block_arianne'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "About us";
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        echo "About us";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo " 
    
         
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-5\">
                <div class=\"about-carousel wow fadeInLeft\">
                    <div id=\"myCarousel\" class=\"carousel slide\">
                        <!-- Carousel items -->
                        <div class=\"carousel-inner\">
                            <div class=\"active item\">
                                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/m1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <div class=\"carousel-caption\">
                                    <p>
                                        Find courses and register today           </p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/m2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <div class=\"carousel-caption\">
                                    <p>

                                        Learn at your own pace                    </p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/m3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <div class=\"carousel-caption\">
                                    <p>

                                        Achieve your goals                    </p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/m4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <div class=\"carousel-caption\">
                                    <p>

                                        The effectiveness of online learning                 </p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/m5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <div class=\"carousel-caption\">
                                    <p>


                                        Learning the mastery                   </p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/m6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <div class=\"carousel-caption\">
                                    <p>

                                        Blended learning
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel nav -->
                        <a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\">
                            <i class=\"fa fa-angle-left\">
                            </i>
                        </a>
                        <a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\">
                            <i class=\"fa fa-angle-right\">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-7 about wow fadeInRight\">
                <br><br>
  <blockquote>
                <h2>
                       Why Choose Mooc ?
                </h2>
                 <p>
                        
Mooc is a training platform in partnership with top universities and world organizations to offer online courses accessible to everyone.
                    </p>
                    
                
              
                    <h2>
Our Mission                    </h2>
                    
                    <p>
                       

We provide universal access to the best training in the world.                    

                  

                </p>
                    
                </blockquote>
            </div>
        </div>
      

    <div class=\"gray-box\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <!--testimonial start-->
                    <div class=\"about-testimonial boxed-style about-flexslider \">
                        <section class=\"slider wow fadeInRight\">
                            <div class=\"flexslider\">
                                <ul class=\"slides about-flex-slides\">
                                    <li>
                                        <div class=\"about-testimonial-image \">
                                            <img alt=\"\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/person_1.png"), "html", null, true);
        echo "\">
                                        </div>
                                        <a class=\"about-testimonial-author\" href=\"#\">
                                            Russel Reagan
                                        </a>
                                        <span class=\"about-testimonial-company\">
                                            CCD Realestate
                                        </span>
                                        <div class=\"about-testimonial-content\">
                                            <p class=\"about-testimonial-quote\">
                                                Donec ut purus sed tortor malesuada venenatis eget eget lorem. Nullam tempor lectus a ligula lobortis pretium. Donec ut purus sed tortor malesuada venenatis eget eget lorem.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"about-testimonial-image \">
                                            <img alt=\"\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/person_2.png"), "html", null, true);
        echo "\">
                                        </div>
                                        <a class=\"about-testimonial-author\" href=\"#\">
                                            Steven gerrard
                                        </a>
                                        <span class=\"about-testimonial-company\">
                                            Molt BVG
                                        </span>
                                        <div class=\"about-testimonial-content\">
                                            <p class=\"about-testimonial-quote\">
                                                Pellentesque et pulvinar enim. Quisque at tempor ligula. Maecenas augue ante, euismod vitae egestas sit amet, accumsan eu nulla. Nullam tempor lectus a ligula lobortis pretium. Donec ut purus sed tortor malesuada venenatis eget eget lorem.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <!--testimonial end-->
                </div>
                <div class=\"col-lg-7\" id=\"skillz\">
                    <h3 class=\"skills\">
                        Our Crazy Skills
                    </h3>

                    <div class=\"skill_bar\">
                        <div class=\"skill_bar_progress skill_one\" style=\"width: 60%;\">
                            <p>
                                Web Design : 60% Complete
                            </p>
                        </div>
                    </div>

                    <div class=\"skill_bar\">
                        <div class=\"skill_bar_progress skill_two\" style=\"width: 90%;\">
                            <p>
                                Html/CSS : 90% Complete
                            </p>
                        </div>
                    </div>

                    <div class=\"skill_bar\">
                        <div class=\"skill_bar_progress skill_three\" style=\"width: 70%;\">
                            <p>
                                Wordpress : 70% Complete
                            </p>
                        </div>
                    </div>

                    <div class=\"skill_bar\">
                        <div class=\"skill_bar_progress skill_four\" style=\"width: 55%;\">
                            <p>
                                Graphic Design : 55% Complete
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=\"container\" id=\"tourpackages-carousel\">

        <div class=\"row\">
            <div class=\"profile\">
                <h2>
                    OUR TEAM
                </h2>
                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                    <div class=\"thumbnail wow fadeInUp\" data-wow-delay=\".1s\">
                        <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/member1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"caption\">
                            <h4>
                                Thumbnail label
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit
                            </p>
                            <div class=\"team-social-link\">
                                <a href=\"#\">
                                    <i class=\"fa fa-facebook\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-twitter\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-pinterest\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-linkedin\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-google-plus\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-github\">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                    <div class=\"thumbnail wow fadeInUp\" data-wow-delay=\".3s\">
                        <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/member2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"caption\">
                            <h4>
                                Thumbnail label
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit
                            </p>
                            <div class=\"team-social-link\">
                                <a href=\"#\">
                                    <i class=\"fa fa-facebook\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-twitter\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-pinterest\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-linkedin\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-google-plus\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-github\">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                    <div class=\"thumbnail wow fadeInUp\" data-wow-delay=\".5s\">
                        <img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/member3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"caption\">
                            <h4>
                                Thumbnail label
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit
                            </p>
                            <div class=\"team-social-link\">
                                <a href=\"#\">
                                    <i class=\"fa fa-facebook\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-twitter\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-pinterest\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-linkedin\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-google-plus\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-github\">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                    <div class=\"thumbnail wow fadeInUp\" data-wow-delay=\".7s\">
                        <img src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/member4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"caption\">
                            <h4>
                                Thumbnail label
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit
                            </p>
                            <div class=\"team-social-link\">
                                <a href=\"#\">
                                    <i class=\"fa fa-facebook\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-twitter\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-pinterest\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-linkedin\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-google-plus\">
                                    </i>
                                </a>
                                <a href=\"#\">
                                    <i class=\"fa fa-github\">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- End row -->

</div>";
        // line 370
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/bxslider/jquery.bxslider.js"), "html", null, true);
        echo "\">
</script>

<script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\">
</script>
<script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/link-hover.js"), "html", null, true);
        echo "\">
</script>


<!--common script for all pages-->


<script>

    wow = new WOW(
            {
                boxClass: 'wow', // default
                animateClass: 'animated', // default
                offset: 0          // default
            }
    )
    wow.init();


    \$(window).load(function () {
        \$('.flexslider').flexslider({
            animation: \"slide\",
            start: function (slider) {
                \$('body').removeClass('loading');
            }
        }
        );
    }
    );




    \$(window).scroll(function () {
        \$('#skillz').each(function () {
            var imagePos = \$(this).offset().top;
            var viewportheight = window.innerHeight;

            var topOfWindow = \$(window).scrollTop();
            if (imagePos < topOfWindow + viewportheight) {
                \$('.skill_bar').fadeIn('slow');
                \$('.skill_one').animate({
                    width: '60%'}
                , 2000);
                \$('.skill_two').animate({
                    width: '90%'}
                , 2000);
                \$('.skill_three').animate({
                    width: '70%'}
                , 1000);
                \$('.skill_four').animate({
                    width: '55%'}
                , 1000);
                \$('.skill_bar_progress p').fadeIn('slow', function () {

                }
                );
            }
        }
        );
    }
    );




</script>

";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 375,  453 => 373,  446 => 370,  399 => 325,  356 => 285,  313 => 245,  270 => 205,  196 => 134,  177 => 118,  112 => 56,  100 => 47,  89 => 39,  78 => 31,  67 => 23,  57 => 16,  42 => 5,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block pagetitle %}About us{% endblock %}*/
/* {% block arianne %}About us{% endblock %}*/
/* */
/* {%  block body %} */
/*     */
/*          */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-5">*/
/*                 <div class="about-carousel wow fadeInLeft">*/
/*                     <div id="myCarousel" class="carousel slide">*/
/*                         <!-- Carousel items -->*/
/*                         <div class="carousel-inner">*/
/*                             <div class="active item">*/
/*                                 <img src="{{asset('img/m1.jpg')}}" alt="">*/
/*                                 <div class="carousel-caption">*/
/*                                     <p>*/
/*                                         Find courses and register today           </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                 <img src="{{asset('img/m2.jpg')}}" alt="">*/
/*                                 <div class="carousel-caption">*/
/*                                     <p>*/
/* */
/*                                         Learn at your own pace                    </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                 <img src="{{asset('img/m3.jpg')}}" alt="">*/
/*                                 <div class="carousel-caption">*/
/*                                     <p>*/
/* */
/*                                         Achieve your goals                    </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                 <img src="{{asset('img/m4.jpg')}}" alt="">*/
/*                                 <div class="carousel-caption">*/
/*                                     <p>*/
/* */
/*                                         The effectiveness of online learning                 </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                 <img src="{{asset('img/m5.jpg')}}" alt="">*/
/*                                 <div class="carousel-caption">*/
/*                                     <p>*/
/* */
/* */
/*                                         Learning the mastery                   </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                 <img src="{{asset('img/m6.jpg')}}" alt="">*/
/*                                 <div class="carousel-caption">*/
/*                                     <p>*/
/* */
/*                                         Blended learning*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- Carousel nav -->*/
/*                         <a class="carousel-control left" href="#myCarousel" data-slide="prev">*/
/*                             <i class="fa fa-angle-left">*/
/*                             </i>*/
/*                         </a>*/
/*                         <a class="carousel-control right" href="#myCarousel" data-slide="next">*/
/*                             <i class="fa fa-angle-right">*/
/*                             </i>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-7 about wow fadeInRight">*/
/*                 <br><br>*/
/*   <blockquote>*/
/*                 <h2>*/
/*                        Why Choose Mooc ?*/
/*                 </h2>*/
/*                  <p>*/
/*                         */
/* Mooc is a training platform in partnership with top universities and world organizations to offer online courses accessible to everyone.*/
/*                     </p>*/
/*                     */
/*                 */
/*               */
/*                     <h2>*/
/* Our Mission                    </h2>*/
/*                     */
/*                     <p>*/
/*                        */
/* */
/* We provide universal access to the best training in the world.                    */
/* */
/*                   */
/* */
/*                 </p>*/
/*                     */
/*                 </blockquote>*/
/*             </div>*/
/*         </div>*/
/*       */
/* */
/*     <div class="gray-box">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-5">*/
/*                     <!--testimonial start-->*/
/*                     <div class="about-testimonial boxed-style about-flexslider ">*/
/*                         <section class="slider wow fadeInRight">*/
/*                             <div class="flexslider">*/
/*                                 <ul class="slides about-flex-slides">*/
/*                                     <li>*/
/*                                         <div class="about-testimonial-image ">*/
/*                                             <img alt="" src="{{asset('img/person_1.png')}}">*/
/*                                         </div>*/
/*                                         <a class="about-testimonial-author" href="#">*/
/*                                             Russel Reagan*/
/*                                         </a>*/
/*                                         <span class="about-testimonial-company">*/
/*                                             CCD Realestate*/
/*                                         </span>*/
/*                                         <div class="about-testimonial-content">*/
/*                                             <p class="about-testimonial-quote">*/
/*                                                 Donec ut purus sed tortor malesuada venenatis eget eget lorem. Nullam tempor lectus a ligula lobortis pretium. Donec ut purus sed tortor malesuada venenatis eget eget lorem.*/
/*                                             </p>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="about-testimonial-image ">*/
/*                                             <img alt="" src="{{asset('img/person_2.png')}}">*/
/*                                         </div>*/
/*                                         <a class="about-testimonial-author" href="#">*/
/*                                             Steven gerrard*/
/*                                         </a>*/
/*                                         <span class="about-testimonial-company">*/
/*                                             Molt BVG*/
/*                                         </span>*/
/*                                         <div class="about-testimonial-content">*/
/*                                             <p class="about-testimonial-quote">*/
/*                                                 Pellentesque et pulvinar enim. Quisque at tempor ligula. Maecenas augue ante, euismod vitae egestas sit amet, accumsan eu nulla. Nullam tempor lectus a ligula lobortis pretium. Donec ut purus sed tortor malesuada venenatis eget eget lorem.*/
/*                                             </p>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </section>*/
/*                     </div>*/
/*                     <!--testimonial end-->*/
/*                 </div>*/
/*                 <div class="col-lg-7" id="skillz">*/
/*                     <h3 class="skills">*/
/*                         Our Crazy Skills*/
/*                     </h3>*/
/* */
/*                     <div class="skill_bar">*/
/*                         <div class="skill_bar_progress skill_one" style="width: 60%;">*/
/*                             <p>*/
/*                                 Web Design : 60% Complete*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="skill_bar">*/
/*                         <div class="skill_bar_progress skill_two" style="width: 90%;">*/
/*                             <p>*/
/*                                 Html/CSS : 90% Complete*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="skill_bar">*/
/*                         <div class="skill_bar_progress skill_three" style="width: 70%;">*/
/*                             <p>*/
/*                                 Wordpress : 70% Complete*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="skill_bar">*/
/*                         <div class="skill_bar_progress skill_four" style="width: 55%;">*/
/*                             <p>*/
/*                                 Graphic Design : 55% Complete*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="container" id="tourpackages-carousel">*/
/* */
/*         <div class="row">*/
/*             <div class="profile">*/
/*                 <h2>*/
/*                     OUR TEAM*/
/*                 </h2>*/
/*                 <div class="col-xs-12 col-sm-6 col-md-3">*/
/*                     <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">*/
/*                         <img src="{{asset('img/team/member1.jpg')}}" alt="">*/
/*                         <div class="caption">*/
/*                             <h4>*/
/*                                 Thumbnail label*/
/*                             </h4>*/
/*                             <p>*/
/*                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit*/
/*                             </p>*/
/*                             <div class="team-social-link">*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-facebook">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-twitter">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-pinterest">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-linkedin">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-google-plus">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-github">*/
/*                                     </i>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-xs-12 col-sm-6 col-md-3">*/
/*                     <div class="thumbnail wow fadeInUp" data-wow-delay=".3s">*/
/*                         <img src="{{asset('img/team/member2.jpg')}}" alt="">*/
/*                         <div class="caption">*/
/*                             <h4>*/
/*                                 Thumbnail label*/
/*                             </h4>*/
/*                             <p>*/
/*                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit*/
/*                             </p>*/
/*                             <div class="team-social-link">*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-facebook">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-twitter">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-pinterest">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-linkedin">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-google-plus">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-github">*/
/*                                     </i>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-xs-12 col-sm-6 col-md-3">*/
/*                     <div class="thumbnail wow fadeInUp" data-wow-delay=".5s">*/
/*                         <img src="{{asset('img/team/member3.jpg')}}" alt="">*/
/*                         <div class="caption">*/
/*                             <h4>*/
/*                                 Thumbnail label*/
/*                             </h4>*/
/*                             <p>*/
/*                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit*/
/*                             </p>*/
/*                             <div class="team-social-link">*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-facebook">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-twitter">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-pinterest">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-linkedin">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-google-plus">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-github">*/
/*                                     </i>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-xs-12 col-sm-6 col-md-3">*/
/*                     <div class="thumbnail wow fadeInUp" data-wow-delay=".7s">*/
/*                         <img src="{{asset('img/team/member4.jpg')}}" alt="">*/
/*                         <div class="caption">*/
/*                             <h4>*/
/*                                 Thumbnail label*/
/*                             </h4>*/
/*                             <p>*/
/*                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit*/
/*                             </p>*/
/*                             <div class="team-social-link">*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-facebook">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-twitter">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-pinterest">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-linkedin">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-google-plus">*/
/*                                     </i>*/
/*                                 </a>*/
/*                                 <a href="#">*/
/*                                     <i class="fa fa-github">*/
/*                                     </i>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- End row -->*/
/* */
/* </div>{# empty Twig template #}*/
/* <script type="text/javascript" src="{{asset('assets/bxslider/jquery.bxslider.js')}}">*/
/* </script>*/
/* */
/* <script src="{{asset('js/jquery.easing.min.js')}}">*/
/* </script>*/
/* <script src="{{asset('js/link-hover.js')}}">*/
/* </script>*/
/* */
/* */
/* <!--common script for all pages-->*/
/* */
/* */
/* <script>*/
/* */
/*     wow = new WOW(*/
/*             {*/
/*                 boxClass: 'wow', // default*/
/*                 animateClass: 'animated', // default*/
/*                 offset: 0          // default*/
/*             }*/
/*     )*/
/*     wow.init();*/
/* */
/* */
/*     $(window).load(function () {*/
/*         $('.flexslider').flexslider({*/
/*             animation: "slide",*/
/*             start: function (slider) {*/
/*                 $('body').removeClass('loading');*/
/*             }*/
/*         }*/
/*         );*/
/*     }*/
/*     );*/
/* */
/* */
/* */
/* */
/*     $(window).scroll(function () {*/
/*         $('#skillz').each(function () {*/
/*             var imagePos = $(this).offset().top;*/
/*             var viewportheight = window.innerHeight;*/
/* */
/*             var topOfWindow = $(window).scrollTop();*/
/*             if (imagePos < topOfWindow + viewportheight) {*/
/*                 $('.skill_bar').fadeIn('slow');*/
/*                 $('.skill_one').animate({*/
/*                     width: '60%'}*/
/*                 , 2000);*/
/*                 $('.skill_two').animate({*/
/*                     width: '90%'}*/
/*                 , 2000);*/
/*                 $('.skill_three').animate({*/
/*                     width: '70%'}*/
/*                 , 1000);*/
/*                 $('.skill_four').animate({*/
/*                     width: '55%'}*/
/*                 , 1000);*/
/*                 $('.skill_bar_progress p').fadeIn('slow', function () {*/
/* */
/*                 }*/
/*                 );*/
/*             }*/
/*         }*/
/*         );*/
/*     }*/
/*     );*/
/* */
/* */
/* */
/* */
/* </script>*/
/* */
/* {%  endblock  %}*/
