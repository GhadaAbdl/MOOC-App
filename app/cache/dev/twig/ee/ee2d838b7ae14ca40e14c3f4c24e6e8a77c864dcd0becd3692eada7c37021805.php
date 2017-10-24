<?php

/* MoocMoocBundle:VideoConference:VideoConferencEdit.html.twig */
class __TwigTemplate_a4be535b31db43ee47c3e1e9de6d619ae191ad0a1a0659584a37917ad418956b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocMoocBundle:VideoConference:VideoConferencEdit.html.twig", 1);
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
        echo "Video Conference Edit";
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        echo "Video Conference Edit";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "   

 <div class=\"component-bg\">
        <div class=\"container\">
           
<div class=\"bs-docs-section mar-b-30\">
  <h1 id=\"forms\" class=\"page-header\">Edit The Details</h1>

  <div class=\"bs-example\">
      <p>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
      </p>
      <form role=\"form\" method=\"post\">
      <div class=\"form-group\">
        <label for=\"Input\">Course</label>
";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "course", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
              <div class=\"form-group\">

         <label for=\"Input\">Chapter</label>
";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chapter", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
         <div class=\"form-group\">

   <label for=\"Input\">Date</label>
";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
         <div class=\"form-group\">

             <label for=\"Input\">Time</label>
";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
         <div class=\"form-group\">

      <label for=\"Input\">Duration</label>
";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duration", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
         <div class=\"form-group\">

     <label for=\"Input\">Notes</label>
";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>    
           <label for=\"Input\">Link</label>
";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>  
         
";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "participate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>  


          <div class=\"form-group\">
              <input type=\"hidden\" name=\"save\" value=\"videoconference\">
";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
     
 
      <button type=\"submit\" class=\"btn btn-primary btn-lg\">Edit</button>
            <button type=\"submit\" class=\"btn btn-danger btn-lg\">Cancel</button>
 </div>  
    </form>
  </div><!-- /example --> 
    </div>
        </div>
 </div>
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:VideoConference:VideoConferencEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 56,  116 => 50,  110 => 47,  104 => 44,  96 => 39,  88 => 34,  80 => 29,  72 => 24,  64 => 19,  56 => 14,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block pagetitle %}Video Conference Edit{% endblock %}*/
/* {% block arianne %}Video Conference Edit{% endblock %}*/
/* {% block body %}*/
/*    */
/* */
/*  <div class="component-bg">*/
/*         <div class="container">*/
/*            */
/* <div class="bs-docs-section mar-b-30">*/
/*   <h1 id="forms" class="page-header">Edit The Details</h1>*/
/* */
/*   <div class="bs-example">*/
/*       <p>{{form_errors(form)}}*/
/*       </p>*/
/*       <form role="form" method="post">*/
/*       <div class="form-group">*/
/*         <label for="Input">Course</label>*/
/* {{form_widget(form.course, {'attr': {'class': 'form-control'}})}}*/
/*       </div>*/
/*               <div class="form-group">*/
/* */
/*          <label for="Input">Chapter</label>*/
/* {{form_widget(form.chapter, {'attr': {'class': 'form-control'}})}}*/
/*       </div>*/
/*          <div class="form-group">*/
/* */
/*    <label for="Input">Date</label>*/
/* {{form_widget(form.date, {'attr': {'class': 'form-control'}})}}*/
/*       </div>*/
/*          <div class="form-group">*/
/* */
/*              <label for="Input">Time</label>*/
/* {{form_widget(form.time, {'attr': {'class': 'form-control'}})}}*/
/*       </div>*/
/*          <div class="form-group">*/
/* */
/*       <label for="Input">Duration</label>*/
/* {{form_widget(form.duration, {'attr': {'class': 'form-control'}})}}*/
/*       </div>*/
/*          <div class="form-group">*/
/* */
/*      <label for="Input">Notes</label>*/
/* {{form_widget(form.note, {'attr': {'class': 'form-control'}})}}*/
/*       </div>    */
/*            <label for="Input">Link</label>*/
/* {{form_widget(form.link, {'attr': {'class': 'form-control'}})}}*/
/*       </div>  */
/*          */
/* {{form_widget(form.participate, {'attr': {'class': 'form-control'}})}}*/
/*       </div>  */
/* */
/* */
/*           <div class="form-group">*/
/*               <input type="hidden" name="save" value="videoconference">*/
/* {{form_widget(form._token)}}*/
/*      */
/*  */
/*       <button type="submit" class="btn btn-primary btn-lg">Edit</button>*/
/*             <button type="submit" class="btn btn-danger btn-lg">Cancel</button>*/
/*  </div>  */
/*     </form>*/
/*   </div><!-- /example --> */
/*     </div>*/
/*         </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
