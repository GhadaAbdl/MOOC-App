<?php

/* MoocMoocBundle:VideoConference:Video.html.twig  */
class __TwigTemplate_9d5385e68c8d369836a900205465656aed0f13d07afc27936a30c7818783caf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocMoocBundle:VideoConference:Video.html.twig ", 1);
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
        echo "Video Conference";
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        echo "Video Conference";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">

                 <div class=\"video-container single-video\">
                    <iframe  src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "link", array()), "html", null, true);
        echo "\" allowfullscreen=\"\" style=\"border:none;\"></iframe>
                </div>
            </div>
        </div>
    </div>
    
        <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-lg-9 \">
                <div class=\"title\">
                    <h3>Live Course </h3>
                    <hr>
                </div>
                <div class=\"pf-detail\">
                
                </div>
            </div>

            <div class=\"col-lg-3\">
                <div class=\"title\">
                    <h3>Course Details</h3>
                    <hr>
                </div>
                <ul class=\"list-unstyled pf-list\">
                    <li><i class=\"fa fa-arrow-circle-right pr-10\"></i><b>Course: ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "course", array()), "html", null, true);
        echo "</b> <span><a href=\"#\"></a></span></li>
                    <li><i class=\"fa fa-arrow-circle-right pr-10\"></i><b>Chapter: ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "chapter", array()), "html", null, true);
        echo "</b></li>
                    <li><i class=\"fa fa-arrow-circle-right pr-10\"></i><b>Note: ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "note", array()), "html", null, true);
        echo "</b><span></span></li>
                </ul>
            </div>

            <!--portfolio detail end-->
        </div>
    
       <div class=\"clock\" style=\"margin:2em;\"></div>
\t<div class=\"message\"></div>
    </div>

<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../compiled/flipclock.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\t\tvar clock;
\t\t
\t\t\$(document).ready(function() {
\t\t\tvar clock;

\t\t\tclock = \$('.clock').FlipClock({
\t\t        clockFace: 'DailyCounter',
\t\t        autoStart: false,
\t\t        callbacks: {
\t\t        \tstop: function() {
\t\t        \t\t\$('.message').html('The clock has stopped!');
\t\t        \t}
\t\t        }
\t\t    });
\t\t\t\t    
\t\t    clock.setTime(220880);
\t\t    clock.setCountdown(true);
\t\t    clock.start();

\t\t});
\t</script>
    ";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:VideoConference:Video.html.twig ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 52,  103 => 50,  89 => 39,  85 => 38,  81 => 37,  53 => 12,  45 => 6,  42 => 5,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block pagetitle %}Video Conference{% endblock %}*/
/* {% block arianne %}Video Conference{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*         <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/* */
/*                  <div class="video-container single-video">*/
/*                     <iframe  src="{{video.link}}" allowfullscreen="" style="border:none;"></iframe>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*         <div class="container">*/
/*         <div class="row">*/
/* */
/*             <div class="col-lg-9 ">*/
/*                 <div class="title">*/
/*                     <h3>Live Course </h3>*/
/*                     <hr>*/
/*                 </div>*/
/*                 <div class="pf-detail">*/
/*                 */
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-lg-3">*/
/*                 <div class="title">*/
/*                     <h3>Course Details</h3>*/
/*                     <hr>*/
/*                 </div>*/
/*                 <ul class="list-unstyled pf-list">*/
/*                     <li><i class="fa fa-arrow-circle-right pr-10"></i><b>Course: {{video.course}}</b> <span><a href="#"></a></span></li>*/
/*                     <li><i class="fa fa-arrow-circle-right pr-10"></i><b>Chapter: {{video.chapter}}</b></li>*/
/*                     <li><i class="fa fa-arrow-circle-right pr-10"></i><b>Note: {{video.note}}</b><span></span></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <!--portfolio detail end-->*/
/*         </div>*/
/*     */
/*        <div class="clock" style="margin:2em;"></div>*/
/* 	<div class="message"></div>*/
/*     </div>*/
/* */
/* <script src="{{ asset('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}"></script>*/
/* */
/* <script src="{{ asset('../compiled/flipclock.js') }}"></script>*/
/* <script type="text/javascript">*/
/* 		var clock;*/
/* 		*/
/* 		$(document).ready(function() {*/
/* 			var clock;*/
/* */
/* 			clock = $('.clock').FlipClock({*/
/* 		        clockFace: 'DailyCounter',*/
/* 		        autoStart: false,*/
/* 		        callbacks: {*/
/* 		        	stop: function() {*/
/* 		        		$('.message').html('The clock has stopped!');*/
/* 		        	}*/
/* 		        }*/
/* 		    });*/
/* 				    */
/* 		    clock.setTime(220880);*/
/* 		    clock.setCountdown(true);*/
/* 		    clock.start();*/
/* */
/* 		});*/
/* 	</script>*/
/*     {% endblock  %}*/
/*     */
