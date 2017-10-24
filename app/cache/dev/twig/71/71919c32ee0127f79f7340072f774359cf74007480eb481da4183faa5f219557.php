<?php

/* MoocCourseBundle:Chapter:new.html.twig */
class __TwigTemplate_a0d894e08e9e3ec5865f2abc22a93582a7139567ee1a491936123ff9a425addd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocCourseBundle:Chapter:new.html.twig", 1);
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
        echo " add  chapter ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"bs-docs-section mar-b-30\">
           
   <div class=\"bs-example\">
    <h1>Chapter creation</h1>
  

    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    
  
    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newfinalChapter", array("num_chapitre" => (isset($context["chapternumber"]) ? $context["chapternumber"] : $this->getContext($context, "chapternumber")), "idCourse" => (isset($context["idCourse"]) ? $context["idCourse"] : $this->getContext($context, "idCourse")))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                   add the final chapter
                </a>
   </div>
   
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 22
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
        return "MoocCourseBundle:Chapter:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  59 => 15,  53 => 12,  45 => 6,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block pagetitle %} Chapter {% endblock %}*/
/* {% block arianne %} add  chapter {% endblock %}*/
/* {% block body -%}*/
/* */
/*        <div class="bs-docs-section mar-b-30">*/
/*            */
/*    <div class="bs-example">*/
/*     <h1>Chapter creation</h1>*/
/*   */
/* */
/*     {{ form(form) }}*/
/*     */
/*   */
/*     <a href="{{ path('newfinalChapter', { 'num_chapitre':chapternumber ,'idCourse':idCourse   } ) }}" class="btn btn-primary">*/
/*                    add the final chapter*/
/*                 </a>*/
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
