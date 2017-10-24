<?php

/* MoocQuizzBundle:Quizz:result.html.twig */
class __TwigTemplate_5ae3d625ac7e029bb05ddbfaf48ae9eed7cd5b5f3ef59a7d686c117bfc9ddbc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocQuizzBundle:Quizz:result.html.twig", 1);
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
        echo "    <center>  <font size=\"8\"> You got ";
        echo twig_escape_filter($this->env, (isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "html", null, true);
        echo "/15  </font> </center>
    <center> <font size=\"5\" color=\"black\">  This result is not registered, you can use it to evaluate yourself before taking the final quizz. </font> </center>

";
    }

    public function getTemplateName()
    {
        return "MoocQuizzBundle:Quizz:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block body %}*/
/*     <center>  <font size="8"> You got {{note}}/15  </font> </center>*/
/*     <center> <font size="5" color="black">  This result is not registered, you can use it to evaluate yourself before taking the final quizz. </font> </center>*/
/* */
/* {% endblock %}  */
