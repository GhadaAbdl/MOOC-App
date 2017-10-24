<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_086ca521e374c8bd2291e9961be2ae228e203cc9f15de5e52aaeb687e02fec33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        echo "check email";
    }

    // line 7
    public function block_arianne($context, array $blocks = array())
    {
        echo "check email";
    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"login-bg\">
        <div class=\"container\">
            <div class=\"form-wrapper\">
<p>
";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
            </div>
        </div>
    </div>
";
    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        // line 20
        echo " ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  70 => 19,  60 => 13,  54 => 9,  51 => 8,  45 => 7,  39 => 6,  35 => 5,  32 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block header %}*/
/*  {% endblock %}   */
/*  {% block pagetitle %}check email{% endblock %}*/
/* {% block arianne %}check email{% endblock %}*/
/* {% block fos_user_content %}*/
/*     <div class="login-bg">*/
/*         <div class="container">*/
/*             <div class="form-wrapper">*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block footer %}*/
/*  {% endblock %}  */
