<?php

/* MoocQuizzBundle:Quizz:addquizz.html.twig */
class __TwigTemplate_a72c339820e17adb1385faeeb4e1d4f33ece64e9ef7844edf5b243feba4816d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocQuizzBundle:Quizz:addquizz.html.twig", 1);
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
<center>
    <h1>Add Quizz </h1>
<div class=\"bs-example\">
<form method= \"post\">
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
   

<input class=\"btn btn-lg btn-login btn-block\"  type=\"submit\" value=\"Add Questions !\" >
    
</form>
</center>
</div>

";
    }

    public function getTemplateName()
    {
        return "MoocQuizzBundle:Quizz:addquizz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* */
/* <center>*/
/*     <h1>Add Quizz </h1>*/
/* <div class="bs-example">*/
/* <form method= "post">*/
/*     {{form_widget(form)}}*/
/*    */
/* */
/* <input class="btn btn-lg btn-login btn-block"  type="submit" value="Add Questions !" >*/
/*     */
/* </form>*/
/* </center>*/
/* </div>*/
/* */
/* {% endblock %}*/
