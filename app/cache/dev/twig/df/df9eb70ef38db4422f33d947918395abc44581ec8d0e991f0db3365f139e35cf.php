<?php

/* MoocProfilBundle:Home:home.html.twig */
class __TwigTemplate_3914d74c592828c71a2f79ee88d334d7be95107268a3a054f27c9d3546ae7f21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocProfilBundle:Home:home.html.twig", 1);
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

    // line 4
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "HOME PAGE";
    }

    // line 5
    public function block_arianne($context, array $blocks = array())
    {
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    contenu du home page
    ";
    }

    public function getTemplateName()
    {
        return "MoocProfilBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  41 => 6,  36 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block pagetitle %}HOME PAGE{% endblock %}*/
/* {% block arianne %}{% endblock %}*/
/* {% block body %}*/
/*     contenu du home page*/
/*     {% endblock %}*/
/* */
