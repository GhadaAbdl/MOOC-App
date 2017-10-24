<?php

/* MoocCourseBundle:Courses:edit.html.twig */
class __TwigTemplate_db696bc238ad0755adcbb272c2e48789d42cf43ec9306867eb2c3a892b6c2c58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocCourseBundle:Courses:edit.html.twig", 1);
        $this->blocks = array(
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

    // line 2
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "courses ";
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        echo "edit";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "   <div class=\"component-bg\">
        <div class=\"container\">
        <div class=\"bs-docs-section mar-b-30\">
                <div class=\"bs-example\" style=\"background-color: #F8f8f8;  \">
        
    <h1>Chapter edit</h1>
    <div class=\"form-group\">
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
    </div>
        <ul class=\"record_actions\">
   
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("MyCourses_show");
        echo "\">
            Back to my Courses
        </a>
    
     
</ul>

 </div>


    </div>



    
    
</div>
</div>
    
    
";
    }

    public function getTemplateName()
    {
        return "MoocCourseBundle:Courses:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  54 => 12,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block pagetitle %}courses {% endblock %}*/
/* {% block arianne %}edit{% endblock %}*/
/* {% block body %}*/
/*    <div class="component-bg">*/
/*         <div class="container">*/
/*         <div class="bs-docs-section mar-b-30">*/
/*                 <div class="bs-example" style="background-color: #F8f8f8;  ">*/
/*         */
/*     <h1>Chapter edit</h1>*/
/*     <div class="form-group">*/
/*     {{ form(edit_form) }}*/
/*     </div>*/
/*         <ul class="record_actions">*/
/*    */
/*         <a href="{{ path('MyCourses_show') }}">*/
/*             Back to my Courses*/
/*         </a>*/
/*     */
/*      */
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
/*     */
/*     */
/* {% endblock %}*/
/* */
