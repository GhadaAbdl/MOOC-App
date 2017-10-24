<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_85b3f4b0e11acbc4ce6a4231a802d6609f85081d67c82f8a6f03ab881416ee46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo " ";
    }

    // line 6
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "LOGIN";
    }

    // line 7
    public function block_arianne($context, array $blocks = array())
    {
        echo "login";
    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 11
        echo "   <div class=\"login-bg\">  
        <div class=\"container\">
            <div class=\"form-wrapper\">
<form class=\"form-signin wow fadeInUp\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <h2 class=\"form-signin-heading\">sign in now</h2>
    <div class=\"login-wrap\">
    
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    
    <label  for=\"username\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label  for=\"password\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    
        
    <label class=\"checkbox\">
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
          <span class=\"pull-right\">
                        <a data-toggle=\"modal\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\"> Forgot Password?</a>

          </span>
    </label>
 
    <input class=\"btn btn-lg btn-login btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
 
</a>          
    ";
        // line 41
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 42
            echo "    <div style=\"color : red ;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 44
        echo "    
    <p>or you can sign in via social network</p>
    
                <div class=\"login-social-link\">
                    
                    <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\" class=\"facebook\">
                        <i class=\"fa fa-facebook\"></i>
                        Facebook
                    </a>
               
                </div>
    <div class=\"registration\">
                    Don't have an account yet?
                    <a class=\"\" href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">
                        Create an account
                    </a>
   </div>     
    </div>
                
</form>
         </div>
        </div>
    </div>
";
    }

    // line 68
    public function block_footer($context, array $blocks = array())
    {
        // line 69
        echo " ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 69,  151 => 68,  136 => 57,  125 => 49,  118 => 44,  112 => 42,  110 => 41,  104 => 38,  96 => 33,  91 => 31,  81 => 24,  76 => 22,  72 => 21,  66 => 18,  59 => 14,  54 => 11,  51 => 10,  45 => 7,  39 => 6,  35 => 5,  32 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block header %}*/
/*  {% endblock %}   */
/*  {% block pagetitle %}LOGIN{% endblock %}*/
/* {% block arianne %}login{% endblock %}*/
/* */
/* */
/* {% block fos_user_content %}*/
/*    <div class="login-bg">  */
/*         <div class="container">*/
/*             <div class="form-wrapper">*/
/* <form class="form-signin wow fadeInUp" action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <h2 class="form-signin-heading">sign in now</h2>*/
/*     <div class="login-wrap">*/
/*     */
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     */
/*     <label  for="username">{{ 'security.login.username'|trans }}</label>*/
/*     <input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label  for="password">{{ 'security.login.password'|trans }}</label>*/
/*     <input class="form-control" type="password" id="password" name="_password" required="required" />*/
/* */
/*     */
/*         */
/*     <label class="checkbox">*/
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*           <span class="pull-right">*/
/*                         <a data-toggle="modal" href="{{path('fos_user_resetting_request')}}"> Forgot Password?</a>*/
/* */
/*           </span>*/
/*     </label>*/
/*  */
/*     <input class="btn btn-lg btn-login btn-block" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*  */
/* </a>          */
/*     {% if error %}*/
/*     <div style="color : red ;">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/*     */
/*     <p>or you can sign in via social network</p>*/
/*     */
/*                 <div class="login-social-link">*/
/*                     */
/*                     <a href="{{ path('hwi_oauth_service_redirect', {'service': 'facebook' }) }}" class="facebook">*/
/*                         <i class="fa fa-facebook"></i>*/
/*                         Facebook*/
/*                     </a>*/
/*                */
/*                 </div>*/
/*     <div class="registration">*/
/*                     Don't have an account yet?*/
/*                     <a class="" href="{{path('fos_user_registration_register')}}">*/
/*                         Create an account*/
/*                     </a>*/
/*    </div>     */
/*     </div>*/
/*                 */
/* </form>*/
/*          </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* {% block footer %}*/
/*  {% endblock %}   */
