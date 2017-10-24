<?php

/* MoocMoocBundle:Default:index.html.twig */
class __TwigTemplate_8b1a3c4d5e56182525585a78820206b15d643ca895f1a639ec02266c538ae864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocMoocBundle:Default:index.html.twig", 1);
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
        echo "HOME PAGE";
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <div id=\"da-slider\" class=\"da-slider\">

        <div class=\"da-slide\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2>
                            <i>
                                ACHIEVE</i>
                            <br>
                            <i> YOUR</i>
                            <br>
                            <i> GOALS</i>
                            <br>

                        </h2>
                        <p>
                            <i>
                                Finish your course and receive an official recognition </i>
                            <br />
                            <i>of your success through a Certificate of optional course</i>
                        </p>
                        <a href=\"#\" class=\"btn btn-info btn-lg da-link\">
                            Read more
                        </a>
                        <div class=\"da-img\">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class=\"da-slide\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2>
                            <i>
                                LEARN AT </i>
                            <br />
                            <i>YOUR OWN </i>
                            <br />
                            <i>PACE</i>
                        </h2>
                        <p>
                            <i>Watch short videos of course , go interactive quizzes , </i>
                            <br />
                            <i>writing assignments that will be evaluated by other students , and connect with other students and teachers.</i>
                        </p>
                        <a href=\"#\" class=\"btn btn-info btn-lg da-link\">
                            Read more
                        </a>
                        <div class=\"da-img\">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class=\"da-slide\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2>
                            <i>
                                FIND COURSES</i>
                            </br>
                            <i>AND </i>
                            </br>
                            <i>REGISTER TODAY</i>
                        </h2>
                        <p>
                            <i>Choose from hundreds of courses created by the best </i>
                            <br />
                            <i>educational institutions of the world.t</i>
                            <br />
                            <i>The courses are open to all and to all</i>
                        </p>
                        <a href=\"#\" class=\"btn btn-info btn-lg da-link\">
                            Read more
                        </a>
                        <div class=\"da-img\">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class=\"da-arrows\">
            <span class=\"da-arrows-prev\">
            </span>
            <span class=\"da-arrows-next\">
            </span>
        </nav>
    </div>


    <div class=\"container\">
        <div class=\"row mar-b-50\">
            <div class=\"col-md-12\">
                <div class=\"text-center feature-head wow fadeInDown\">
                    <h1 class=\"\">
                        welcome to Mooc
                    </h1>

                </div>


                <div class=\"feature-box\">
                    <div class=\"col-md-4 col-sm-4 text-center wow fadeInUp\">
                        <div class=\"feature-box-heading\">
                            <em>
                                <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/1.png"), "html", null, true);
        echo "\" alt=\"\" width=\"100\" height=\"100\">

                            </em>
                            <h4>
                                <b>Technologie</b>
                            </h4>
                        </div>
                        <p class=\"text-center\">

                            We establish a scalable and personalized learning experience that helps each student  to achieve its goals, while allowing teachers to get feedback and improve their education through data. To learn more about our technology              </p>
                    </div>
                    <div class=\"col-md-4 col-sm-4 text-center wow fadeInUp\">
                        <div class=\"feature-box-heading\">
                            <em>
                                <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/2.png"), "html", null, true);
        echo "\" alt=\"\" width=\"100\" height=\"100\">
                            </em>
                            <h4>
                                <b>Why Mooc ?</b>
                            </h4>
                        </div>
                        <p class=\"text-center\">
                            We offer universal access to the best training in the world, 
                            in partnership with universities and the highest level organizations to offer online courses               </p>
                    </div>
                    <div class=\"col-md-4 col-sm-4 text-center wow fadeInUp\">
                        <div class=\"feature-box-heading\">
                            <em>
                                <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/3.png"), "html", null, true);
        echo "\" alt=\"\" width=\"100\" height=\"100\">
                            </em>
                            <h4>
                                <b>Vision</b>
                            </h4>
                        </div>
                        <p class=\"text-center\">

                            We provide our students the opportunity to advance their careers , further their education , improve the community where they live and change the world. We believe that training can enable you to leverage your potential and help you realize your full potential              </p>
                    </div>
                </div>

                <!--feature end-->
            </div>
        </div>
    </div>


    <!--property start-->
    <div class=\"property gray-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-sm-6 text-center wow fadeInLeft\">
                    <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/tab1.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"col-lg-6 col-sm-6 wow fadeInRight\">
                    <h1>
                        How does it work
                    </h1>
                    <hr>
                    <p>
                        <i class=\"fa fa-check fa-lg pr-10\">
                        </i>

                        <strong>Work in progress<br></strong>
                        Each course runs as an interactive guide , offering pre-recorded videos , quizzes and projects.            </p>
                    <p>
                        <i class=\"fa fa-check fa-lg pr-10\">
                        </i>

                        <strong>Help and support<br></strong>
                        Connect to thousands of other students and discuss about ideas , discuss the course content and get help to master the concepts .            </p>
                    <p>
                        <i class=\"fa fa-check fa-lg pr-10\">
                        </i>

                        <strong>Certificates support<br></strong>
                        Get official recognition for your work and share your success with friends , colleagues and employers.            </p>
                    <hr>
                    <a href=\"javascript:;\" class=\"btn btn-purchase\">
                        More Details
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--property end-->

    <div class=\"container\">

        <div class=\"row mar-b-60\">
            <div class=\"col-lg-6\">
                <!--tab start-->
                <section class=\"tab wow fadeInLeft\">
                    <header class=\"panel-heading tab-bg-dark-navy-blue\">
                        <ul class=\"nav nav-tabs nav-justified \">
                            <li class=\"active\">
                                <a data-toggle=\"tab\" href=\"#news\">
                                    News
                                </a>
                            </li>
                            <li>
                                <a data-toggle=\"tab\" href=\"#events\">
                                    Events
                                </a>
                            </li>
                            <li class=\"\">
                                <a data-toggle=\"tab\" href=\"#notice-board\">
                                    Notice board
                                </a>
                            </li>
                        </ul>
                    </header>
                    <div class=\"panel-body\">
                        <div class=\"tab-content tasi-tab\">
                            <div id=\"news\" class=\"tab-pane fade in active\">
                                <article class=\"media\">
                                    <a class=\"pull-left thumb p-thumb\">
                                        <img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/product1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </a>
                                    <div class=\"media-body b-btm\">
                                        <a href=\"#\" class=\" p-head\">
                                            News Tittle goes here
                                        </a>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                    </div>
                                </article>
                                <article class=\"media\">
                                    <a class=\"pull-left thumb p-thumb\">
                                        <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/product2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </a>
                                    <div class=\"media-body b-btm\">
                                        <a href=\"#\" class=\" p-head\">
                                            News Tittle goes here 2
                                        </a>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. simsut dorlor
                                        </p>
                                    </div>
                                </article>
                                <article class=\"media\">
                                    <a class=\"pull-left thumb p-thumb\">
                                        <img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/product1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </a>
                                    <div class=\"media-body b-btm\">
                                        <a href=\"#\" class=\" p-head\">
                                            News Tittle goes here 3
                                        </a>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. sumon ahmed
                                        </p>
                                    </div>
                                </article>
                            </div>
                            <div id=\"events\" class=\"tab-pane fade\">
                                ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 275
            echo "                                    <article class=\"media\">
                                        <a class=\"pull-left thumb p-thumb\">
                                            <!--image goes here-->
                                        </a>
                                        <div class=\"media-body b-btm\">
                                            <a href=\"#\" class=\"cmt-head\">
                                                <img alt=\"\" src=\"";
            // line 281
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon1.png"), "html", null, true);
            echo "\">

                                                ";
            // line 283
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "course", array()), "html", null, true);
            echo "                      </a>
                                            <p>
                                                </br>
                                                <i class=\"fa fa-time\">
                                                </i>
                                                <img alt=\"\" src=\"";
            // line 288
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon2.png"), "html", null, true);
            echo "\">

                                                ";
            // line 290
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "date", array()), "Y-m-d"), "html", null, true);
            echo "
                                            </p>
                                                                                         <img alt=\"\" src=\"";
            // line 292
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/sep.png"), "html", null, true);
            echo "\">

                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "                                </article>


                            </div>
                            <div id=\"notice-board\" class=\"tab-pane fade\">
                                <p>
                                    Notice board goes here Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener.
                                </p>
                                <p>
                                    Notice board goes here Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!--tab end-->
            </div>
            <div class=\"col-lg-6\">
                <!--testimonial start-->
                <div class=\"about-testimonial boxed-style about-flexslider \">
                    <section class=\"slider wow fadeInRight\">
                        <div class=\"flexslider\">
                            <ul class=\"slides about-flex-slides\">
                                <li>
                                    <div class=\"about-testimonial-image \">
                                        <img alt=\"\" src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar1.png"), "html", null, true);
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
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar2.png"), "html", null, true);
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
        </div>
    </div>

    <!--recent work start-->
    <div class=\"bg-lg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 recent\">
                    <h3 class=\"recent-work\">
                        Recent Courses
                    </h3>
                    <p>Some of our courses published earlier</p>

                    <div id=\"owl-demo\" class=\"owl-carousel owl-theme wow fadeIn\">
                        ";
        // line 371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cour"]) ? $context["cour"] : $this->getContext($context, "cour")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 372
            echo "                            <div class=\"item view view-tenth\">
                                <img src=\"";
            // line 373
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolios/card/2.jpg"), "html", null, true);
            echo "\" alt=\"work Image\">
                                <div class=\"mask\">
                                    <h3>";
            // line 375
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "courseTitle", array()), "html", null, true);
            echo "</h3>
                                    <a  href=\"";
            // line 376
            echo $this->env->getExtension('routing')->getPath("courses");
            echo "\" class=\"info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Details\">
                                        <i class=\"fa fa-link\">
                                        </i>
                                    </a>
                                </div>

                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        echo "                    </div>


                </div>
            </div>
        </div>
    </div>

    <!--recent work end-->
</div>



<div id=\"home-services\">

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h2>
                    In case you need any help
                </h2>
            </div>

            <div class=\"col-md-4\">
                <div class=\"h-service\">
                    <div class=\"icon-wrap ico-bg round-fifty wow fadeInDown\">
                        <i class=\"fa fa-question\">
                        </i>
                    </div>
                    <div class=\"h-service-content wow fadeInUp\">
                        <h3>
                            PRESALE QUESTION
                        </h3>
                        <p>
                            Drop us a line so that we can hear from you and answer your questions

                            <br>
                            <a href=\"#\">
                                Learn more
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"h-service\">
                    <div class=\"icon-wrap ico-bg round-fifty wow fadeInDown\">
                        <i class=\"fa fa-h-square\">
                        </i>
                    </div>
                    <div class=\"h-service-content wow fadeInUp\">
                        <h3>
                            NEED SUPPORT?
                        </h3>
                        <p>
                            If you're having trouble with your Mooc account, find your issue below.
                            <br>
                            <a href=\"#\">
                                Learn more
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"h-service\">
                    <div class=\"icon-wrap ico-bg round-fifty wow fadeInDown\">
                        <i class=\"fa fa-users\">
                        </i>
                    </div>
                    <div class=\"h-service-content wow fadeInUp\">
                        <h3>
                            CHECK FORUM
                        </h3>
                        <p>
                            If you can’t find help in the Help Center, you can ask a question in the  Support forums.
                            <br>
                            <a href=\"#\">
                                Learn more
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- service end -->
<div class=\"hr\">
    <span class=\"hr-inner\"></span>
</div>


</div>



";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 384,  480 => 376,  476 => 375,  471 => 373,  468 => 372,  464 => 371,  427 => 337,  408 => 321,  381 => 296,  371 => 292,  366 => 290,  361 => 288,  353 => 283,  348 => 281,  340 => 275,  336 => 274,  320 => 261,  304 => 248,  288 => 235,  220 => 170,  194 => 147,  178 => 134,  161 => 120,  44 => 5,  41 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block pagetitle %}HOME PAGE{% endblock %}*/
/* {% block arianne %}{% endblock %}*/
/* {% block body %}*/
/* */
/*     <div id="da-slider" class="da-slider">*/
/* */
/*         <div class="da-slide">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <h2>*/
/*                             <i>*/
/*                                 ACHIEVE</i>*/
/*                             <br>*/
/*                             <i> YOUR</i>*/
/*                             <br>*/
/*                             <i> GOALS</i>*/
/*                             <br>*/
/* */
/*                         </h2>*/
/*                         <p>*/
/*                             <i>*/
/*                                 Finish your course and receive an official recognition </i>*/
/*                             <br />*/
/*                             <i>of your success through a Certificate of optional course</i>*/
/*                         </p>*/
/*                         <a href="#" class="btn btn-info btn-lg da-link">*/
/*                             Read more*/
/*                         </a>*/
/*                         <div class="da-img">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="da-slide">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <h2>*/
/*                             <i>*/
/*                                 LEARN AT </i>*/
/*                             <br />*/
/*                             <i>YOUR OWN </i>*/
/*                             <br />*/
/*                             <i>PACE</i>*/
/*                         </h2>*/
/*                         <p>*/
/*                             <i>Watch short videos of course , go interactive quizzes , </i>*/
/*                             <br />*/
/*                             <i>writing assignments that will be evaluated by other students , and connect with other students and teachers.</i>*/
/*                         </p>*/
/*                         <a href="#" class="btn btn-info btn-lg da-link">*/
/*                             Read more*/
/*                         </a>*/
/*                         <div class="da-img">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="da-slide">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <h2>*/
/*                             <i>*/
/*                                 FIND COURSES</i>*/
/*                             </br>*/
/*                             <i>AND </i>*/
/*                             </br>*/
/*                             <i>REGISTER TODAY</i>*/
/*                         </h2>*/
/*                         <p>*/
/*                             <i>Choose from hundreds of courses created by the best </i>*/
/*                             <br />*/
/*                             <i>educational institutions of the world.t</i>*/
/*                             <br />*/
/*                             <i>The courses are open to all and to all</i>*/
/*                         </p>*/
/*                         <a href="#" class="btn btn-info btn-lg da-link">*/
/*                             Read more*/
/*                         </a>*/
/*                         <div class="da-img">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <nav class="da-arrows">*/
/*             <span class="da-arrows-prev">*/
/*             </span>*/
/*             <span class="da-arrows-next">*/
/*             </span>*/
/*         </nav>*/
/*     </div>*/
/* */
/* */
/*     <div class="container">*/
/*         <div class="row mar-b-50">*/
/*             <div class="col-md-12">*/
/*                 <div class="text-center feature-head wow fadeInDown">*/
/*                     <h1 class="">*/
/*                         welcome to Mooc*/
/*                     </h1>*/
/* */
/*                 </div>*/
/* */
/* */
/*                 <div class="feature-box">*/
/*                     <div class="col-md-4 col-sm-4 text-center wow fadeInUp">*/
/*                         <div class="feature-box-heading">*/
/*                             <em>*/
/*                                 <img src="{{ asset ('img/1.png')}}" alt="" width="100" height="100">*/
/* */
/*                             </em>*/
/*                             <h4>*/
/*                                 <b>Technologie</b>*/
/*                             </h4>*/
/*                         </div>*/
/*                         <p class="text-center">*/
/* */
/*                             We establish a scalable and personalized learning experience that helps each student  to achieve its goals, while allowing teachers to get feedback and improve their education through data. To learn more about our technology              </p>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-sm-4 text-center wow fadeInUp">*/
/*                         <div class="feature-box-heading">*/
/*                             <em>*/
/*                                 <img src="{{ asset ('img/2.png')}}" alt="" width="100" height="100">*/
/*                             </em>*/
/*                             <h4>*/
/*                                 <b>Why Mooc ?</b>*/
/*                             </h4>*/
/*                         </div>*/
/*                         <p class="text-center">*/
/*                             We offer universal access to the best training in the world, */
/*                             in partnership with universities and the highest level organizations to offer online courses               </p>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-sm-4 text-center wow fadeInUp">*/
/*                         <div class="feature-box-heading">*/
/*                             <em>*/
/*                                 <img src="{{ asset ('img/3.png')}}" alt="" width="100" height="100">*/
/*                             </em>*/
/*                             <h4>*/
/*                                 <b>Vision</b>*/
/*                             </h4>*/
/*                         </div>*/
/*                         <p class="text-center">*/
/* */
/*                             We provide our students the opportunity to advance their careers , further their education , improve the community where they live and change the world. We believe that training can enable you to leverage your potential and help you realize your full potential              </p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <!--feature end-->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <!--property start-->*/
/*     <div class="property gray-bg">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-6 col-sm-6 text-center wow fadeInLeft">*/
/*                     <img src="{{ asset ('img/tab1.png')}}" alt="">*/
/*                 </div>*/
/*                 <div class="col-lg-6 col-sm-6 wow fadeInRight">*/
/*                     <h1>*/
/*                         How does it work*/
/*                     </h1>*/
/*                     <hr>*/
/*                     <p>*/
/*                         <i class="fa fa-check fa-lg pr-10">*/
/*                         </i>*/
/* */
/*                         <strong>Work in progress<br></strong>*/
/*                         Each course runs as an interactive guide , offering pre-recorded videos , quizzes and projects.            </p>*/
/*                     <p>*/
/*                         <i class="fa fa-check fa-lg pr-10">*/
/*                         </i>*/
/* */
/*                         <strong>Help and support<br></strong>*/
/*                         Connect to thousands of other students and discuss about ideas , discuss the course content and get help to master the concepts .            </p>*/
/*                     <p>*/
/*                         <i class="fa fa-check fa-lg pr-10">*/
/*                         </i>*/
/* */
/*                         <strong>Certificates support<br></strong>*/
/*                         Get official recognition for your work and share your success with friends , colleagues and employers.            </p>*/
/*                     <hr>*/
/*                     <a href="javascript:;" class="btn btn-purchase">*/
/*                         More Details*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!--property end-->*/
/* */
/*     <div class="container">*/
/* */
/*         <div class="row mar-b-60">*/
/*             <div class="col-lg-6">*/
/*                 <!--tab start-->*/
/*                 <section class="tab wow fadeInLeft">*/
/*                     <header class="panel-heading tab-bg-dark-navy-blue">*/
/*                         <ul class="nav nav-tabs nav-justified ">*/
/*                             <li class="active">*/
/*                                 <a data-toggle="tab" href="#news">*/
/*                                     News*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a data-toggle="tab" href="#events">*/
/*                                     Events*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="">*/
/*                                 <a data-toggle="tab" href="#notice-board">*/
/*                                     Notice board*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </header>*/
/*                     <div class="panel-body">*/
/*                         <div class="tab-content tasi-tab">*/
/*                             <div id="news" class="tab-pane fade in active">*/
/*                                 <article class="media">*/
/*                                     <a class="pull-left thumb p-thumb">*/
/*                                         <img src="{{ asset ('img/product1.jpg')}}" alt="">*/
/*                                     </a>*/
/*                                     <div class="media-body b-btm">*/
/*                                         <a href="#" class=" p-head">*/
/*                                             News Tittle goes here*/
/*                                         </a>*/
/*                                         <p>*/
/*                                             Lorem ipsum dolor sit amet, consectetur adipiscing elit.*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </article>*/
/*                                 <article class="media">*/
/*                                     <a class="pull-left thumb p-thumb">*/
/*                                         <img src="{{ asset ('img/product2.jpg')}}" alt="">*/
/*                                     </a>*/
/*                                     <div class="media-body b-btm">*/
/*                                         <a href="#" class=" p-head">*/
/*                                             News Tittle goes here 2*/
/*                                         </a>*/
/*                                         <p>*/
/*                                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. simsut dorlor*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </article>*/
/*                                 <article class="media">*/
/*                                     <a class="pull-left thumb p-thumb">*/
/*                                         <img src="{{ asset ('img/product1.jpg')}}" alt="">*/
/*                                     </a>*/
/*                                     <div class="media-body b-btm">*/
/*                                         <a href="#" class=" p-head">*/
/*                                             News Tittle goes here 3*/
/*                                         </a>*/
/*                                         <p>*/
/*                                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. sumon ahmed*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </article>*/
/*                             </div>*/
/*                             <div id="events" class="tab-pane fade">*/
/*                                 {% for v in video %}*/
/*                                     <article class="media">*/
/*                                         <a class="pull-left thumb p-thumb">*/
/*                                             <!--image goes here-->*/
/*                                         </a>*/
/*                                         <div class="media-body b-btm">*/
/*                                             <a href="#" class="cmt-head">*/
/*                                                 <img alt="" src="{{asset('img/icon1.png')}}">*/
/* */
/*                                                 {{v.course}}                      </a>*/
/*                                             <p>*/
/*                                                 </br>*/
/*                                                 <i class="fa fa-time">*/
/*                                                 </i>*/
/*                                                 <img alt="" src="{{asset('img/icon2.png')}}">*/
/* */
/*                                                 {{v.date|date('Y-m-d')}}*/
/*                                             </p>*/
/*                                                                                          <img alt="" src="{{asset('img/sep.png')}}">*/
/* */
/*                                         </div>*/
/*                                     {%endfor%}*/
/*                                 </article>*/
/* */
/* */
/*                             </div>*/
/*                             <div id="notice-board" class="tab-pane fade">*/
/*                                 <p>*/
/*                                     Notice board goes here Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener.*/
/*                                 </p>*/
/*                                 <p>*/
/*                                     Notice board goes here Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener.*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </section>*/
/*                 <!--tab end-->*/
/*             </div>*/
/*             <div class="col-lg-6">*/
/*                 <!--testimonial start-->*/
/*                 <div class="about-testimonial boxed-style about-flexslider ">*/
/*                     <section class="slider wow fadeInRight">*/
/*                         <div class="flexslider">*/
/*                             <ul class="slides about-flex-slides">*/
/*                                 <li>*/
/*                                     <div class="about-testimonial-image ">*/
/*                                         <img alt="" src="{{asset('img/avatar1.png')}}">*/
/*                                     </div>*/
/*                                     <a class="about-testimonial-author" href="#">*/
/*                                         Russel Reagan*/
/*                                     </a>*/
/*                                     <span class="about-testimonial-company">*/
/*                                         CCD Realestate*/
/*                                     </span>*/
/*                                     <div class="about-testimonial-content">*/
/*                                         <p class="about-testimonial-quote">*/
/*                                             Donec ut purus sed tortor malesuada venenatis eget eget lorem. Nullam tempor lectus a ligula lobortis pretium. Donec ut purus sed tortor malesuada venenatis eget eget lorem.*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <div class="about-testimonial-image ">*/
/*                                         <img alt="" src="{{ asset ('img/avatar2.png')}}">*/
/*                                     </div>*/
/*                                     <a class="about-testimonial-author" href="#">*/
/*                                         Steven gerrard*/
/*                                     </a>*/
/*                                     <span class="about-testimonial-company">*/
/*                                         Molt BVG*/
/*                                     </span>*/
/*                                     <div class="about-testimonial-content">*/
/*                                         <p class="about-testimonial-quote">*/
/*                                             Pellentesque et pulvinar enim. Quisque at tempor ligula. Maecenas augue ante, euismod vitae egestas sit amet, accumsan eu nulla. Nullam tempor lectus a ligula lobortis pretium. Donec ut purus sed tortor malesuada venenatis eget eget lorem.*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </section>*/
/*                 </div>*/
/*                 <!--testimonial end-->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!--recent work start-->*/
/*     <div class="bg-lg">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 recent">*/
/*                     <h3 class="recent-work">*/
/*                         Recent Courses*/
/*                     </h3>*/
/*                     <p>Some of our courses published earlier</p>*/
/* */
/*                     <div id="owl-demo" class="owl-carousel owl-theme wow fadeIn">*/
/*                         {% for c in cour %}*/
/*                             <div class="item view view-tenth">*/
/*                                 <img src="{{ asset ('img/portfolios/card/2.jpg')}}" alt="work Image">*/
/*                                 <div class="mask">*/
/*                                     <h3>{{c.courseTitle}}</h3>*/
/*                                     <a  href="{{path('courses')}}" class="info" data-toggle="tooltip" data-placement="top" title="Details">*/
/*                                         <i class="fa fa-link">*/
/*                                         </i>*/
/*                                     </a>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         {% endfor  %}*/
/*                     </div>*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!--recent work end-->*/
/* </div>*/
/* */
/* */
/* */
/* <div id="home-services">*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h2>*/
/*                     In case you need any help*/
/*                 </h2>*/
/*             </div>*/
/* */
/*             <div class="col-md-4">*/
/*                 <div class="h-service">*/
/*                     <div class="icon-wrap ico-bg round-fifty wow fadeInDown">*/
/*                         <i class="fa fa-question">*/
/*                         </i>*/
/*                     </div>*/
/*                     <div class="h-service-content wow fadeInUp">*/
/*                         <h3>*/
/*                             PRESALE QUESTION*/
/*                         </h3>*/
/*                         <p>*/
/*                             Drop us a line so that we can hear from you and answer your questions*/
/* */
/*                             <br>*/
/*                             <a href="#">*/
/*                                 Learn more*/
/*                             </a>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <div class="h-service">*/
/*                     <div class="icon-wrap ico-bg round-fifty wow fadeInDown">*/
/*                         <i class="fa fa-h-square">*/
/*                         </i>*/
/*                     </div>*/
/*                     <div class="h-service-content wow fadeInUp">*/
/*                         <h3>*/
/*                             NEED SUPPORT?*/
/*                         </h3>*/
/*                         <p>*/
/*                             If you're having trouble with your Mooc account, find your issue below.*/
/*                             <br>*/
/*                             <a href="#">*/
/*                                 Learn more*/
/*                             </a>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <div class="h-service">*/
/*                     <div class="icon-wrap ico-bg round-fifty wow fadeInDown">*/
/*                         <i class="fa fa-users">*/
/*                         </i>*/
/*                     </div>*/
/*                     <div class="h-service-content wow fadeInUp">*/
/*                         <h3>*/
/*                             CHECK FORUM*/
/*                         </h3>*/
/*                         <p>*/
/*                             If you can’t find help in the Help Center, you can ask a question in the  Support forums.*/
/*                             <br>*/
/*                             <a href="#">*/
/*                                 Learn more*/
/*                             </a>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /row -->*/
/* */
/*     </div>*/
/*     <!-- /container -->*/
/* */
/* </div>*/
/* <!-- service end -->*/
/* <div class="hr">*/
/*     <span class="hr-inner"></span>*/
/* </div>*/
/* */
/* */
/* </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
