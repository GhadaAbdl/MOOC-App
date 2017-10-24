<?php

/* MoocQuizzBundle:Quizz:certification.html.twig */
class __TwigTemplate_ee64aef4b6c44258ca4cf1f1e87353a233e3c5e46842f50f928de418d2dfe077 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocQuizzBundle:Quizz:certification.html.twig", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <center> <font size=\"8\">You got ";
        echo twig_escape_filter($this->env, (isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "html", null, true);
        echo "/15  </font></center> <br> 
    <center> <font size=\"5\" color=\"black\">  ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["certif"]) ? $context["certif"] : $this->getContext($context, "certif")), "html", null, true);
        echo " </font> </center>
";
        // line 5
        if (((isset($context["badge"]) ? $context["badge"] : $this->getContext($context, "badge")) == 3)) {
            echo "    
<center><img src=\"http://localhost/pidev_mooc_esprit_symfony/web/img/gold.jpg\" alt=\"Gold badge\" style=\"width:200px;height:200px;\"></center>
";
        } elseif ((        // line 7
(isset($context["badge"]) ? $context["badge"] : $this->getContext($context, "badge")) == 2)) {
            // line 8
            echo "<center><img src=\"http://localhost/pidev_mooc_esprit_symfony/web/img/silver.jpg\" alt=\"Silver badge\" style=\"width:200px;height:200px;\"></center>
";
        } elseif ((        // line 9
(isset($context["badge"]) ? $context["badge"] : $this->getContext($context, "badge")) == 1)) {
            // line 10
            echo "    <center><img src=\"http://localhost/pidev_mooc_esprit_symfony/web/img/failed.jpg\" alt=\"Fail badge\" style=\"width:200px;height:200px;\"></center>
";
        }
    }

    public function getTemplateName()
    {
        return "MoocQuizzBundle:Quizz:certification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  50 => 9,  47 => 8,  45 => 7,  40 => 5,  36 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block body %}*/
/*     <center> <font size="8">You got {{note}}/15  </font></center> <br> */
/*     <center> <font size="5" color="black">  {{certif}} </font> </center>*/
/* {% if badge == 3 %}    */
/* <center><img src="http://localhost/pidev_mooc_esprit_symfony/web/img/gold.jpg" alt="Gold badge" style="width:200px;height:200px;"></center>*/
/* {% elseif badge == 2 %}*/
/* <center><img src="http://localhost/pidev_mooc_esprit_symfony/web/img/silver.jpg" alt="Silver badge" style="width:200px;height:200px;"></center>*/
/* {% elseif badge == 1 %}*/
/*     <center><img src="http://localhost/pidev_mooc_esprit_symfony/web/img/failed.jpg" alt="Fail badge" style="width:200px;height:200px;"></center>*/
/* {% endif %}*/
/* {% endblock %}  */
