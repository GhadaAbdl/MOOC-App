<?php

/* PiBundle:Users:ListeUsers.html.twig */
class __TwigTemplate_c0bf132c657994e77d1547895bd50e695212bbb7f2745b3332aa258d8c2e7867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PiBundle:Users:ListeUsers.html.twig", 1);
        $this->blocks = array(
            'nbrnotif' => array($this, 'block_nbrnotif'),
            'nombreuser' => array($this, 'block_nombreuser'),
            'users' => array($this, 'block_users'),
            'dashboard' => array($this, 'block_dashboard'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_nbrnotif($context, array $blocks = array())
    {
        // line 3
        echo "                      
";
    }

    // line 5
    public function block_nombreuser($context, array $blocks = array())
    {
    }

    // line 6
    public function block_users($context, array $blocks = array())
    {
        echo " <a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_user_liste");
        echo "\"> ";
    }

    // line 7
    public function block_dashboard($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"> ";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.admin_list")));
        // line 14
        echo "
    
                      
                    ";
    }

    public function getTemplateName()
    {
        return "PiBundle:Users:ListeUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  67 => 10,  64 => 9,  61 => 8,  53 => 7,  45 => 6,  40 => 5,  35 => 3,  32 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block nbrnotif %}*/
/*                       */
/* {% endblock%}*/
/* {% block nombreuser %}{% endblock%}*/
/* {% block users %} <a href="{{path('admin_user_liste')}}"> {% endblock%}*/
/*     {% block dashboard %}<a href="{{path('accueil')}}"> {% endblock%}*/
/* {% block body %}*/
/* */
/*     {{ sonata_block_render({*/
/*     'type': 'sonata.admin.block.admin_list',*/
/*     */
/*    */
/* }) }}*/
/*     */
/*                       */
/*                     {% endblock %}*/
/* */
