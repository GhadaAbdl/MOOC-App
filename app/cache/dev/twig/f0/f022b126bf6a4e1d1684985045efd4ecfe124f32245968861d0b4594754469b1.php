<?php

/* MoocProfilBundle:Home:add.html.twig */
class __TwigTemplate_2b30d3ebdeebacb6f90a49664b6de3793b01096a9047d216985ac94b82c8e5ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocProfilBundle:Home:add.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'arianne' => array($this, 'block_arianne'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo " ";
    }

    // line 5
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "add organism";
    }

    // line 6
    public function block_arianne($context, array $blocks = array())
    {
        echo "add organism";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"login-bg\">
        <div class=\"container\">
            <div class=\"form-wrapper\">
    <form class= \"form-signin wow fadeInUp\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("mooc_profil_addorganism");
        echo "\" method=\"post\" enctype=\"multipart/form-data\" >
    
        <h2 class=\"form-signin-heading\">sign in now</h2>   
        <div class=\"login-wrap\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birth_date", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image_file", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cv_file", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        <div>
    <input class=\"btn btn-lg btn-login btn-block\" type=\"submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("register"), "html", null, true);
        echo "\">
    </div>
     <div class=\"registration\">
                        Already Registered ?
                        <a class=\"\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">
                            Login
                        </a>
                    </div>
    </div>
</form>
     </div>
        </div>
    </div>
    ";
    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        // line 41
        echo " ";
    }

    public function getTemplateName()
    {
        return "MoocProfilBundle:Home:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 41,  125 => 40,  111 => 30,  104 => 26,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  66 => 15,  59 => 11,  54 => 8,  51 => 7,  45 => 6,  39 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block header %}*/
/*  {% endblock %} */
/* {% block pagetitle %}add organism{% endblock %}*/
/* {% block arianne %}add organism{% endblock %}*/
/* {% block body %}*/
/*     <div class="login-bg">*/
/*         <div class="container">*/
/*             <div class="form-wrapper">*/
/*     <form class= "form-signin wow fadeInUp" action="{{ path("mooc_profil_addorganism") }}" method="post" enctype="multipart/form-data" >*/
/*     */
/*         <h2 class="form-signin-heading">sign in now</h2>   */
/*         <div class="login-wrap">*/
/*             {{ form_row(form._token) }}*/
/* */
/*         {{ form_row(form.email , { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.username, { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.name, { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.birth_date, { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.image_file, { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.cv_file, { 'attr': {'class': 'form-control'} }) }}*/
/*         <div>*/
/*     <input class="btn btn-lg btn-login btn-block" type="submit" value="{{ 'register'|trans }}">*/
/*     </div>*/
/*      <div class="registration">*/
/*                         Already Registered ?*/
/*                         <a class="" href="{{path('fos_user_security_login')}}">*/
/*                             Login*/
/*                         </a>*/
/*                     </div>*/
/*     </div>*/
/* </form>*/
/*      </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endblock %}*/
/* {% block footer %}*/
/*  {% endblock %}  */
