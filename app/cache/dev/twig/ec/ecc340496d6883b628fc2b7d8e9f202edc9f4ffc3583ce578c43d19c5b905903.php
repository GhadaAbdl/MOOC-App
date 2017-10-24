<?php

/* MoocMoocBundle:VideoConference:VideoConferenceAdd.html.twig */
class __TwigTemplate_a86bcf55007c98dcddcdfdcfe0ff66ecc5ffe734f755df6d96d31008992b658c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocMoocBundle:VideoConference:VideoConferenceAdd.html.twig", 1);
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
        echo "Video Conference Add";
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        echo "Video Conference Add";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "   

 <div class=\"component-bg\">
        <div class=\"container\">
           
<div class=\"bs-docs-section mar-b-30\">
  <h1 id=\"forms\" class=\"page-header\">Add The Details</h1>

  <div class=\"bs-example\">
      <p>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
      </p>
      <form role=\"form\" method=\"post\" action='";
        // line 16
        echo $this->env->getExtension('routing')->getPath("pidev_mooc_videoconference");
        echo "'>
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
      <div class=\"form-group\">

     <label for=\"Input\">Link</label>
";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
           ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "participate", array()), 'widget');
        echo "
          <div class=\"form-group\">
              <input type=\"hidden\" name=\"save\" value=\"videoconference\">
";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
     
 
      <button type=\"submit\" class=\"btn btn-primary btn-lg\">Add</button>
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
        return "MoocMoocBundle:VideoConference:VideoConferenceAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 54,  120 => 51,  115 => 49,  107 => 44,  99 => 39,  91 => 34,  83 => 29,  75 => 24,  67 => 19,  61 => 16,  56 => 14,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block pagetitle %}Video Conference Add{% endblock %}*/
/* {% block arianne %}Video Conference Add{% endblock %}*/
/* {% block body %}*/
/*    */
/* */
/*  <div class="component-bg">*/
/*         <div class="container">*/
/*            */
/* <div class="bs-docs-section mar-b-30">*/
/*   <h1 id="forms" class="page-header">Add The Details</h1>*/
/* */
/*   <div class="bs-example">*/
/*       <p>{{form_errors(form)}}*/
/*       </p>*/
/*       <form role="form" method="post" action='{{path('pidev_mooc_videoconference')}}'>*/
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
/*       </div> */
/*       <div class="form-group">*/
/* */
/*      <label for="Input">Link</label>*/
/* {{form_widget(form.link, {'attr': {'class': 'form-control'}})}}*/
/*       </div>*/
/*            {{form_widget(form.participate)}}*/
/*           <div class="form-group">*/
/*               <input type="hidden" name="save" value="videoconference">*/
/* {{form_widget(form._token)}}*/
/*      */
/*  */
/*       <button type="submit" class="btn btn-primary btn-lg">Add</button>*/
/*             <button type="submit" class="btn btn-danger btn-lg">Cancel</button>*/
/*  </div>  */
/*     </form>*/
/*   </div><!-- /example --> */
/*     </div>*/
/*         </div>*/
/*  </div>*/
/*    */
/*          {% endblock %}*/
