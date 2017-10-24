<?php

/* MoocCourseBundle:Chapter:finalchapter.html.twig */
class __TwigTemplate_843fcf170df132e910c57710001e0f0788cde38ca21f82909fa856be3f72fab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocCourseBundle:Chapter:finalchapter.html.twig", 1);
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
        echo " Chapter ";
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        echo " add final chapter ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"bs-docs-section mar-b-30\">
           
   <div class=\"bs-example\">
    <h1>Final Chapter </h1>
  

    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    
  
 
               
   </div>
   
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("chapter");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>

       </div>
       ";
    }

    public function getTemplateName()
    {
        return "MoocCourseBundle:Chapter:finalchapter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  53 => 12,  45 => 6,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block pagetitle %} Chapter {% endblock %}*/
/* {% block arianne %} add final chapter {% endblock %}*/
/* {% block body -%}*/
/* */
/*        <div class="bs-docs-section mar-b-30">*/
/*            */
/*    <div class="bs-example">*/
/*     <h1>Final Chapter </h1>*/
/*   */
/* */
/*     {{ form(form) }}*/
/*     */
/*   */
/*  */
/*                */
/*    </div>*/
/*    */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('chapter') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* */
/*        </div>*/
/*        {% endblock %}*/
/* */
