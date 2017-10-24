<?php

/* MoocProfilBundle:Default:index.html.twig */
class __TwigTemplate_ddbaaa83f449a919d5b8966a124b6dbd9ca59b67a042bd485d76af9e4f561fa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lte IE 9]><html class=\"no-js is-ie\"><![endif]-->
<!--[if gt IE 8]><!--><html class=no-js><!--<![endif]-->
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"description\" content=\"BlackTie Free Bootstrap Theme\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/small_logo.png"), "html", null, true);
        echo "\">

\t

\t<title>Mooc esprit</title>
\t<link rel=stylesheet href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("cssintro/main.css"), "html", null, true);
        echo "\">
\t<!--[if lte IE 8]>
\t<link rel=stylesheet href=\"css/ie.css\">
\t<![endif]-->
\t\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jsintro/vendor/modernizr.js"), "html", null, true);
        echo "\"></script>

\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jsintro/vendor/respond.min.js"), "html", null, true);
        echo "\"></script>

</head>

<body>
\t<div class=\"level level-hero hero-home has-hint\">
\t\t

\t\t<div class=\"hero-overlay visible-lg\"></div>

\t\t<video loop id=bg-video class=fullscreen-video>
\t\t\t<source src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://alvarez.is/bt/appi.webm"), "html", null, true);
        echo "\" type=\"video/webm\">
\t\t\t<source src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://alvarez.is/bt/appi.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">

\t\t</video>

\t\t<div class=\"container full-height\">
\t\t\t<div class=v-align-parent>
\t\t\t\t<div class=v-center>
\t\t\t\t\t<div class=\"row\">
                                            <a class=\"btn btn-prepend btn-launch-video\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">
\t\t\t\t\t\t\t<i class=\"prepended icon-append-play\"></i>Login
\t\t\t\t\t\t</a>   
\t\t\t\t\t\t<div class=\"col-xs-10 col-sm-6\">
\t\t\t\t\t\t\t<h1 class=\"mb-10 heading\">preparing <span>students</span></h1>
\t\t\t\t\t\t\t<div class=\"subheading mb-20\">for success <br class=hidden-xs>in a changing world . </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a class=\"btn btn-prepend btn-launch-video\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">
\t\t\t\t\t\t\t<i class=\"prepended icon-append-play\"></i>Subscribe
\t\t\t\t\t\t</a>
                                                        
                                                        <a class=\"btn btn-prepend btn-launch-video\" href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("mooc_profil_addorganism");
        echo "\">
\t\t\t\t\t\t\t<i class=\"prepended icon-append-play\"></i>Organism
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t
\t\t</div>
\t</div>


\t




\t
\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script>window.jQuery || document.write('<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jsintro/vendor/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>

\t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jsintro/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jsintro/dropdown.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jsintro/modal.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jsintro/main.js"), "html", null, true);
        echo "\"></script>
\t<!-- //-end- concat_js -->


\t

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MoocProfilBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 77,  135 => 76,  131 => 75,  127 => 74,  122 => 72,  118 => 71,  97 => 53,  90 => 49,  78 => 40,  67 => 32,  63 => 31,  49 => 20,  44 => 18,  37 => 14,  29 => 9,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lte IE 9]><html class="no-js is-ie"><![endif]-->*/
/* <!--[if gt IE 8]><!--><html class=no-js><!--<![endif]-->*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/* 	<meta name="description" content="BlackTie Free Bootstrap Theme">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <link rel="shortcut icon" href="{{ asset('img/small_logo.png') }}">*/
/* */
/* 	*/
/* */
/* 	<title>Mooc esprit</title>*/
/* 	<link rel=stylesheet href="{{ asset('cssintro/main.css') }}">*/
/* 	<!--[if lte IE 8]>*/
/* 	<link rel=stylesheet href="css/ie.css">*/
/* 	<![endif]-->*/
/* 		<script src="{{ asset('jsintro/vendor/modernizr.js') }}"></script>*/
/* */
/* 		<script src="{{ asset('jsintro/vendor/respond.min.js') }}"></script>*/
/* */
/* </head>*/
/* */
/* <body>*/
/* 	<div class="level level-hero hero-home has-hint">*/
/* 		*/
/* */
/* 		<div class="hero-overlay visible-lg"></div>*/
/* */
/* 		<video loop id=bg-video class=fullscreen-video>*/
/* 			<source src="{{ asset('http://alvarez.is/bt/appi.webm') }}" type="video/webm">*/
/* 			<source src="{{ asset('http://alvarez.is/bt/appi.mp4') }}" type="video/mp4">*/
/* */
/* 		</video>*/
/* */
/* 		<div class="container full-height">*/
/* 			<div class=v-align-parent>*/
/* 				<div class=v-center>*/
/* 					<div class="row">*/
/*                                             <a class="btn btn-prepend btn-launch-video" href="{{path('fos_user_security_login')}}">*/
/* 							<i class="prepended icon-append-play"></i>Login*/
/* 						</a>   */
/* 						<div class="col-xs-10 col-sm-6">*/
/* 							<h1 class="mb-10 heading">preparing <span>students</span></h1>*/
/* 							<div class="subheading mb-20">for success <br class=hidden-xs>in a changing world . </div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div>*/
/* 						<a class="btn btn-prepend btn-launch-video" href="{{path('fos_user_registration_register')}}">*/
/* 							<i class="prepended icon-append-play"></i>Subscribe*/
/* 						</a>*/
/*                                                         */
/*                                                         <a class="btn btn-prepend btn-launch-video" href="{{path('mooc_profil_addorganism')}}">*/
/* 							<i class="prepended icon-append-play"></i>Organism*/
/* 						</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			*/
/* 		</div>*/
/* 	</div>*/
/* */
/* */
/* 	*/
/* */
/* */
/* */
/* */
/* 	*/
/* 	<script src="{{ asset('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}"></script>*/
/* 	<script>window.jQuery || document.write('<script src="{{ asset('jsintro/vendor/jquery-1.11.1.min.js') }}"><\/script>')</script>*/
/* */
/* 	<script src="{{ asset('jsintro/bootstrap.min.js') }}"></script>*/
/* 	<script src="{{ asset('jsintro/dropdown.js') }}"></script>*/
/* 	<script src="{{ asset('jsintro/modal.js') }}"></script>*/
/* 	<script src="{{ asset('jsintro/main.js') }}"></script>*/
/* 	<!-- //-end- concat_js -->*/
/* */
/* */
/* 	*/
/* */
/* </body>*/
/* </html>*/
/* */
