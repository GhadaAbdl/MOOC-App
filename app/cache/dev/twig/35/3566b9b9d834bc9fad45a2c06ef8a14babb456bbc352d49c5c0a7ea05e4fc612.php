<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_ec12779e3cc6c8334dccdb11e567bb6cc39e514f74309e9bba538ab28d38bd45 extends Twig_Template
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
        echo " <div class=\"login-bg\">
        <div class=\"container\">
            <div class=\"form-wrapper\">
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset"), "attr" => array("class" => "form-signin wow fadeInUp")));
        echo "
<h2 class=\"form-signin-heading\">forgot password</h2>    
<div class=\"login-wrap\">   

";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    <div>
        <input class=\"btn btn-lg btn-login btn-block\" type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</div>
";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  40 => 12,  35 => 10,  31 => 9,  24 => 5,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/*  <div class="login-bg">*/
/*         <div class="container">*/
/*             <div class="form-wrapper">*/
/* {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' }, 'attr': {'class': 'form-signin wow fadeInUp'} }) }}*/
/* <h2 class="form-signin-heading">forgot password</h2>    */
/* <div class="login-wrap">   */
/* */
/* {{ form_row(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}*/
/*     <div>*/
/*         <input class="btn btn-lg btn-login btn-block" type="submit" value="{{ 'resetting.reset.submit'|trans }}" />*/
/*     </div>*/
/* </div>*/
/* {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
