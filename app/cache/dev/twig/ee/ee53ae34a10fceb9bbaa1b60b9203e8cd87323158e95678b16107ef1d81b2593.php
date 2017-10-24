<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_aa25cb2427aea37ed1457ab15d70f45ce2348287fc6183bff0209aa1b939b825 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        echo "reset password";
    }

    // line 5
    public function block_arianne($context, array $blocks = array())
    {
        echo "reset password";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 7)->display($context);
    }

    // line 9
    public function block_footer($context, array $blocks = array())
    {
        // line 10
        echo " ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/*  {% block pagetitle %}reset password{% endblock %}*/
/* {% block arianne %}reset password{% endblock %}*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* {% block footer %}*/
/*  {% endblock %} */
