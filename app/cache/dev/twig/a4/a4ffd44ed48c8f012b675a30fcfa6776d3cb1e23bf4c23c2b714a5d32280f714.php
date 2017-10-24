<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_e3dad3d767cdcfdc86bcd0836df6c50664306f52e867cb17607fe394c3b05dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        echo " | edit  ";
    }

    // line 3
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "edit";
    }

    // line 4
    public function block_arianne($context, array $blocks = array())
    {
        echo "edit";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% block title %}{{ parent() }} | edit  {% endblock %}*/
/*  {% block pagetitle %}edit{% endblock %}*/
/* {% block arianne %}edit{% endblock %}*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
