<?php

/* MoocCourseBundle:Courses:new.html.twig */
class __TwigTemplate_e342d280e5a0e94bf169dd08c52492d48afd92e9efd379ed9229b334411571c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocCourseBundle:Courses:new.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"component-bg\">
        <div class=\"container\">
        <div class=\"bs-docs-section mar-b-30\">
                <div class=\"bs-example\" style=\"background-color: #F8f8f8;  \">
        
    <h1>Create Course</h1>
    <div class=\"form-group\">
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </div> 
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("courses");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "</li>
</ul>

 </div>


    </div>



    
    
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MoocCourseBundle:Courses:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  47 => 15,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block body -%}*/
/*       <div class="component-bg">*/
/*         <div class="container">*/
/*         <div class="bs-docs-section mar-b-30">*/
/*                 <div class="bs-example" style="background-color: #F8f8f8;  ">*/
/*         */
/*     <h1>Create Course</h1>*/
/*     <div class="form-group">*/
/*     {{ form(form) }}*/
/*     </div> */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('courses') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(form) }}</li>*/
/* </ul>*/
/* */
/*  </div>*/
/* */
/* */
/*     </div>*/
/* */
/* */
/* */
/*     */
/*     */
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
