<?php

/* MoocQuizzBundle:Quizz:updatequizz.html.twig */
class __TwigTemplate_b2fd828d5a11d208d63fb19a40379c29d939c4db301cf28b4159858632d70126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocQuizzBundle:Quizz:updatequizz.html.twig", 1);
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
        echo "    <h1>Update quizz</h1>

    <form method= \"post\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "


        <input class=\"btn btn-lg btn-login btn-block\" type=\"submit\" value=\"Update Quizz !\" >

    </form>
        <h3> <center> <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_quizzcontent_list", array("id" => $this->getAttribute((isset($context["listeQuizz"]) ? $context["listeQuizz"] : $this->getContext($context, "listeQuizz")), "id", array()))), "html", null, true);
        echo "\">Update Quizz Questions</a> </center> </h3>
    
";
    }

    public function getTemplateName()
    {
        return "MoocQuizzBundle:Quizz:updatequizz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block body %}*/
/*     <h1>Update quizz</h1>*/
/* */
/*     <form method= "post">*/
/*         {{form_widget(form)}}*/
/* */
/* */
/*         <input class="btn btn-lg btn-login btn-block" type="submit" value="Update Quizz !" >*/
/* */
/*     </form>*/
/*         <h3> <center> <a href="{{path('mooc_quizzcontent_list', {'id':listeQuizz.id})}}">Update Quizz Questions</a> </center> </h3>*/
/*     */
/* {% endblock %}*/
