<?php

/* MoocProfilBundle:Home:certifuser.html.twig */
class __TwigTemplate_aa4e9dc14ea47435f564d2b547f1b8aefd402a0455da8f78a3fa1fad585ac32e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocProfilBundle:Home:certifuser.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'arianne' => array($this, 'block_arianne'),
            'body' => array($this, 'block_body'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "my certificates ";
    }

    // line 4
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "my certificates";
    }

    // line 5
    public function block_arianne($context, array $blocks = array())
    {
        echo "my certificates  ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    
    <table class=\"table\">
        <tr>
            <th>Grade</th>
            <th>Date passed</th>
            <th>Quizz ID</th>

        </tr>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["certificates"]) ? $context["certificates"] : $this->getContext($context, "certificates")));
        foreach ($context['_seq'] as $context["_key"] => $context["certif"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["certif"], "grade", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["certif"], "datePassed", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["certif"], "idQuizz", array()), "html", null, true);
            echo "</td>


            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </table>  
 <div>";
        // line 25
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "MoocProfilBundle:Home:certifuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  88 => 24,  77 => 19,  73 => 18,  69 => 17,  66 => 16,  62 => 15,  52 => 7,  49 => 6,  43 => 5,  37 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}my certificates {% endblock %}*/
/* {% block pagetitle %}my certificates{% endblock %}*/
/* {% block arianne %}my certificates  {% endblock %}*/
/* {% block body %}*/
/*     */
/*     <table class="table">*/
/*         <tr>*/
/*             <th>Grade</th>*/
/*             <th>Date passed</th>*/
/*             <th>Quizz ID</th>*/
/* */
/*         </tr>*/
/*         {% for certif in certificates %}*/
/*             <tr>*/
/*                 <td>{{ certif.grade }}</td>*/
/*                 <td>{{ certif.datePassed | date('d/m/Y') }}</td>*/
/*                 <td>{{ certif.idQuizz }}</td>*/
/* */
/* */
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>  */
/*  <div>{{ socialButtons() }}</div>*/
/* {% endblock %}*/
/* */
