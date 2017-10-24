<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_cc1feedd29a62f4d05e6432c126555801d6a4e64cec5fe76704704038cc13eef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'arianne' => array($this, 'block_arianne'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " | Change password  ";
    }

    // line 3
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "Change password";
    }

    // line 4
    public function block_arianne($context, array $blocks = array())
    {
        echo "Change password";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  50 => 5,  44 => 4,  38 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block title %}{{ parent() }} | Change password  {% endblock %}*/
/*  {% block pagetitle %}Change password{% endblock %}*/
/* {% block arianne %}Change password{% endblock %}*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
