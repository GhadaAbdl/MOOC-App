<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b89a1f2e69da205b97ed9ce5035542833a83f0dde943e70ff83e644c8e210072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'arianne' => array($this, 'block_arianne'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'footer' => array($this, 'block_footer'),
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
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo " ";
    }

    // line 4
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "Forgot Password";
    }

    // line 5
    public function block_arianne($context, array $blocks = array())
    {
        echo "Forgot Password";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 7)->display($context);
    }

    // line 9
    public function block_footer($context, array $blocks = array())
    {
        // line 10
        echo " ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  58 => 9,  54 => 7,  51 => 6,  45 => 5,  39 => 4,  35 => 3,  32 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block header %}*/
/*  {% endblock %}   */
/*  {% block pagetitle %}Forgot Password{% endblock %}*/
/* {% block arianne %}Forgot Password{% endblock %}*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* {% block footer %}*/
/*  {% endblock %}  */
