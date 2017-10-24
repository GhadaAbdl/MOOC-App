<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_7b5cd10fa74341e077e60d10f787bd5b20033ce80def1c6d19cd768f202d2710 extends Twig_Template
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
        echo "
    <div class=\"login-bg\">
        <div class=\"container\">
            <div class=\"form-wrapper\">
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "form-signin wow fadeInUp")));
        echo "

<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\">
</script>
<script>
    \$(document).ready(function(){
        \$('#momo').hide();
        \$(\"#fos_user_registration_form_roles_1\").click(function(){
            \$('#momo').show();
        });
    });
</script>
<script>
    \$(document).ready(function(){
        \$('#momo').hide();
        \$(\"#fos_user_registration_form_roles_0\").click(function(){
            \$('#momo').hide();
        });
    });
</script>
<h2 class=\"form-signin-heading\">sign in now</h2>    
<div class=\"login-wrap\">

";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birth_date", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image_file", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'row');
        echo "
<span id=\"momo\" >
";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cv_file", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
</span>
    <div>
        <input class=\"btn btn-lg btn-login btn-block\" type=\"submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
    <div class=\"registration\">
                        Already Registered ?
                        <a class=\"\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">
                            Login
                        </a>
                    </div>
</div>
                            ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 51,  104 => 46,  97 => 42,  91 => 39,  86 => 37,  82 => 36,  78 => 35,  74 => 34,  70 => 33,  66 => 32,  62 => 31,  58 => 30,  54 => 29,  30 => 8,  25 => 6,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*     <div class="login-bg">*/
/*         <div class="container">*/
/*             <div class="form-wrapper">*/
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'form-signin wow fadeInUp'}}) }}*/
/* */
/* <script src="{{ asset('js/jquery-2.2.3.min.js') }}">*/
/* </script>*/
/* <script>*/
/*     $(document).ready(function(){*/
/*         $('#momo').hide();*/
/*         $("#fos_user_registration_form_roles_1").click(function(){*/
/*             $('#momo').show();*/
/*         });*/
/*     });*/
/* </script>*/
/* <script>*/
/*     $(document).ready(function(){*/
/*         $('#momo').hide();*/
/*         $("#fos_user_registration_form_roles_0").click(function(){*/
/*             $('#momo').hide();*/
/*         });*/
/*     });*/
/* </script>*/
/* <h2 class="form-signin-heading">sign in now</h2>    */
/* <div class="login-wrap">*/
/* */
/* {{ form_row(form.email , { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.username, { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.name, { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.birth_date, { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.level, { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.image_file, { 'attr': {'class': 'form-control'} }) }}*/
/* {{ form_row(form.roles) }}*/
/* <span id="momo" >*/
/* {{ form_row(form.cv_file, { 'attr': {'class': 'form-control'} }) }}*/
/* </span>*/
/*     <div>*/
/*         <input class="btn btn-lg btn-login btn-block" type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/*     <div class="registration">*/
/*                         Already Registered ?*/
/*                         <a class="" href="{{path('fos_user_security_login')}}">*/
/*                             Login*/
/*                         </a>*/
/*                     </div>*/
/* </div>*/
/*                             {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
