<?php

/* MoocQuizzBundle:Quizz:listquizz.html.twig */
class __TwigTemplate_2d3e70f160261449df6fa9e427c6d69afc9cfa6293eba5353f236ed6e5912520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocQuizzBundle:Quizz:listquizz.html.twig", 1);
        $this->blocks = array(
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
    <table class=\"table\">
        <tr>
            <th>ID</th>
            <th>Quizz name</th>
            <th>Action</th>

        </tr>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeQuizz"]) ? $context["listeQuizz"] : $this->getContext($context, "listeQuizz")));
        foreach ($context['_seq'] as $context["_key"] => $context["quizz"]) {
            // line 12
            echo "            <tr>
                <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["quizz"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["quizz"], "Name", array()), "html", null, true);
            echo "</td>

                <td>

                    <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_quizz_update", array("id" => $this->getAttribute($context["quizz"], "id", array()))), "html", null, true);
            echo "\">Update</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quizz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "MoocQuizzBundle:Quizz:listquizz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  59 => 18,  52 => 14,  48 => 13,  45 => 12,  41 => 11,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <table class="table">*/
/*         <tr>*/
/*             <th>ID</th>*/
/*             <th>Quizz name</th>*/
/*             <th>Action</th>*/
/* */
/*         </tr>*/
/*         {% for quizz in listeQuizz %}*/
/*             <tr>*/
/*                 <td>{{ quizz.id }}</td>*/
/*                 <td>{{ quizz.Name }}</td>*/
/* */
/*                 <td>*/
/* */
/*                     <a href="{{path('mooc_quizz_update', {'id':quizz.id})}}">Update</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock %}*/
/* */
