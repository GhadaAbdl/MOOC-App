<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_6cc45f8cad28635a4aeaadad60921b1b9c5aaac056426a457246d6fb61ec1249 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"login-bg\">
        <div class=\"container\">
            <div class=\"form-wrapper\">
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit"), "attr" => array("class" => "form-signin wow fadeInUp")));
        echo "
<h2 class=\"form-signin-heading\">Edit your informations</h2>    
<div class=\"login-wrap\">   
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birth_date", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 12
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "level", array(), "any", true, true)) {
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
";
        }
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image_file", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

";
        // line 17
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cv_file", array(), "any", true, true)) {
            // line 18
            echo "   ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cv_file", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
    ";
        }
        // line 20
        echo "

";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

    <div>
        <input class=\"btn btn-lg btn-login btn-block\" type=\"submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
        </div>
";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  76 => 25,  70 => 22,  66 => 20,  60 => 18,  58 => 17,  53 => 15,  48 => 13,  46 => 12,  42 => 11,  38 => 10,  34 => 9,  30 => 8,  24 => 5,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="login-bg">*/
/*         <div class="container">*/
/*             <div class="form-wrapper">*/
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' }, 'attr': {'class': 'form-signin wow fadeInUp'} }) }}*/
/* <h2 class="form-signin-heading">Edit your informations</h2>    */
/* <div class="login-wrap">   */
/* {{ form_row(form.email , { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.username, { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.name, { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.birth_date, { 'attr': {'class': 'form-control'} }) }}*/
/* {% if form.level is defined %}*/
/* {{ form_row(form.level, { 'attr': {'class': 'form-control'} }) }}*/
/* {% endif %}*/
/* {{ form_row(form.image_file, { 'attr': {'class': 'form-control'} }) }}*/
/* */
/* {% if form.cv_file is defined %}*/
/*    {{ form_row(form.cv_file, { 'attr': {'class': 'form-control'} }) }}*/
/*     {% endif %}*/
/* */
/* */
/* {{ form_row(form.current_password, { 'attr': {'class': 'form-control'} }) }}*/
/* */
/*     <div>*/
/*         <input class="btn btn-lg btn-login btn-block" type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*     </div>*/
/*         </div>*/
/* {{ form_end(form) }}*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
