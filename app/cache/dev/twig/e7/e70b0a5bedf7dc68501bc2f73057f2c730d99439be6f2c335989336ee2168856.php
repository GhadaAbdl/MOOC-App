<?php

/* MoocMoocBundle:VideoConference:statVideo.html.twig */
class __TwigTemplate_1c09f7cdb86365568747fb1a4df20c3951ea0c3b924bcdfac43a4f29d911d7c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocMoocBundle:VideoConference:statVideo.html.twig", 1);
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
        echo "Statistics";
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        echo "Statistics";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <!--breadcrumbs end-->

    <!--container start-->


 <div class=\"sub-content\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"span4\">
          \t
\t\t</div>  
        <div class=\"span6\">
        \t
            <div class=\"contact-form\">
              <form id=\"contact-form\">
                 <!-- Load jQuery from Google's CDN if needed -->
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
<script type=\"text/javascript\">
    ";
        // line 27
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
</script>

<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
              </form>
           </div>
\t\t</div>  
    </div>           
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:VideoConference:statVideo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 27,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block pagetitle %}Statistics{% endblock %}*/
/* {% block arianne %}Statistics{% endblock %}*/
/* {% block body %}*/
/* */
/*     <!--breadcrumbs end-->*/
/* */
/*     <!--container start-->*/
/* */
/* */
/*  <div class="sub-content">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="span4">*/
/*           	*/
/* 		</div>  */
/*         <div class="span6">*/
/*         	*/
/*             <div class="contact-form">*/
/*               <form id="contact-form">*/
/*                  <!-- Load jQuery from Google's CDN if needed -->*/
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/* */
/* <script src="//code.highcharts.com/4.1.8/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>*/
/* <script type="text/javascript">*/
/*     {{ chart(chart) }}*/
/* </script>*/
/* */
/* <div id="linechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/*               </form>*/
/*            </div>*/
/* 		</div>  */
/*     </div>           */
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
