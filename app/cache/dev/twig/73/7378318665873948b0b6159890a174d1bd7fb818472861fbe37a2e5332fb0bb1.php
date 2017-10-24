<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ae2ffc91244299533bbf241a322d4e0bd217d80c341eae69dfb4e0e223fa0663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'arianne' => array($this, 'block_arianne'),
            'fosarianne' => array($this, 'block_fosarianne'),
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
        echo " | Profile  ";
    }

    // line 3
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "Profile";
    }

    // line 4
    public function block_arianne($context, array $blocks = array())
    {
        echo "Profile";
    }

    // line 5
    public function block_fosarianne($context, array $blocks = array())
    {
        $this->displayParentBlock("fosarianne", $context, $blocks);
        echo " |   <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_profil_disable", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">Disable My Account</a>";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 7)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 7,  60 => 6,  51 => 5,  45 => 4,  39 => 3,  32 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block title %}{{ parent() }} | Profile  {% endblock %}*/
/*  {% block pagetitle %}Profile{% endblock %}*/
/* {% block arianne %}Profile{% endblock %}*/
/* {% block fosarianne %}{{ parent() }} |   <a href="{{path('mooc_profil_disable', { id: app.user.id })}}">Disable My Account</a>{% endblock %}*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
