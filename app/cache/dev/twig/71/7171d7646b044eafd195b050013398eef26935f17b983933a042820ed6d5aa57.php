<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_c983275d72f243b9aeb906f29757c11967ab16249a03bda993c69009ffdce752 extends Twig_Template
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
<form class=\"form-signin wow fadeInUp\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
  <div class=\"login-wrap\">
    
    <div>
        ";
        // line 12
        if (array_key_exists("invalid_username", $context)) {
            // line 13
            echo "            <p style=\"color : red ;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 15
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input class=\"btn btn-lg btn-login btn-block\" type=\"submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
  </div>
</form>
            </div>
        </div>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  42 => 15,  36 => 13,  34 => 12,  27 => 8,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* */
/* <div class="login-bg">  */
/*         <div class="container">*/
/*             <div class="form-wrapper">*/
/* <form class="form-signin wow fadeInUp" action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*   <div class="login-wrap">*/
/*     */
/*     <div>*/
/*         {% if invalid_username is defined %}*/
/*             <p style="color : red ;">{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>*/
/*         {% endif %}*/
/*         <label for="username">{{ 'resetting.request.username'|trans }}</label>*/
/*         <input class="form-control" type="text" id="username" name="username" required="required" />*/
/*     </div>*/
/*     <div>*/
/*         <input class="btn btn-lg btn-login btn-block" type="submit" value="{{ 'resetting.request.submit'|trans }}" />*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/*             </div>*/
/*         </div>*/
/* </div>*/
/*  */
