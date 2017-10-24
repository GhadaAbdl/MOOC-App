<?php

/* MoocQuizzBundle:Quizz:addquestion.html.twig */
class __TwigTemplate_20dd48a016a970d0d14f9ff8f8fe30d70bb4189fb496ab1f668ec15e65685282 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocQuizzBundle:Quizz:addquestion.html.twig", 1);
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
        echo "    <center>
        <h1>Add Question ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["questionNumberTwig"]) ? $context["questionNumberTwig"] : $this->getContext($context, "questionNumberTwig")), "html", null, true);
        echo "</h1>

        <form method= \"post\">
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'widget');
        echo "


            <input class=\"btn btn-lg btn-login btn-block\"  type=\"submit\" value=\"Add Question !\">

        </form>
    </center>

";
    }

    public function getTemplateName()
    {
        return "MoocQuizzBundle:Quizz:addquestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block body %}*/
/*     <center>*/
/*         <h1>Add Question {{questionNumberTwig}}</h1>*/
/* */
/*         <form method= "post">*/
/*             {{form_widget(form1)}}*/
/* */
/* */
/*             <input class="btn btn-lg btn-login btn-block"  type="submit" value="Add Question !">*/
/* */
/*         </form>*/
/*     </center>*/
/* */
/* {% endblock %}*/
