<?php

/* MoocMailBundle:Default:new.html.twig */
class __TwigTemplate_a4fd19992eecc8dfe5156420aa14c8812f80ee6b124b0a21db44cbb1f2723467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocMailBundle:Default:new.html.twig", 1);
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
        echo "Contacts";
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        echo "Contacts";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <!--breadcrumbs end-->


<div class=\"container\">


      <div class=\"row\">
        <div class=\"col-lg-5 col-sm-5 address\">
                                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/ipadwhite.PNG"), "html", null, true);
        echo "\" alt=\"\">

         
        
        </div>
                                <br><br><br>
        <div class=\"col-lg-7 col-sm-7 address\">
          <h4>
            Drop us a line so that we can hear from you
          </h4>
          <div class=\"contact-form\">
            <form role=\"form\" id=\"fr\" method=\"POST\" action='";
        // line 25
        echo $this->env->getExtension('routing')->getPath("my_app_mail_sendpage");
        echo "'>
              <div class=\"form-group\">
                <label for=\"name\">
                  Last Name
                </label>
           ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

              </div>
              <div class=\"form-group\">
                <label for=\"email\">
                  First Name
                </label>
";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
              </div>
              <div class=\"form-group\">
                <label for=\"phone\">
                  Phone
                </label>
";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
              </div>
              <div class=\"form-group\">
                <label for=\"phone\">
                  From
                </label>
";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fromAdd", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
              </div>
              <div class=\"form-group\">
                <label for=\"phone\">
                  Message
                </label>
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

              </div>
                       <div class=\"form-group\">
              <input type=\"hidden\" name=\"save\" value=\"videoconference\">
";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
     
              <button class=\"btn btn-info\" type=\"submit\">
                Submit
              </button>
            </form>

          </div>
        </div>
      </div>
      </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "MoocMailBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 60,  115 => 55,  106 => 49,  97 => 43,  88 => 37,  78 => 30,  70 => 25,  56 => 14,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block pagetitle %}Contacts{% endblock %}*/
/* {% block arianne %}Contacts{% endblock %}*/
/* {% block body %}*/
/* */
/*     <!--breadcrumbs end-->*/
/* */
/* */
/* <div class="container">*/
/* */
/* */
/*       <div class="row">*/
/*         <div class="col-lg-5 col-sm-5 address">*/
/*                                 <img src="{{asset('img/ipadwhite.PNG')}}" alt="">*/
/* */
/*          */
/*         */
/*         </div>*/
/*                                 <br><br><br>*/
/*         <div class="col-lg-7 col-sm-7 address">*/
/*           <h4>*/
/*             Drop us a line so that we can hear from you*/
/*           </h4>*/
/*           <div class="contact-form">*/
/*             <form role="form" id="fr" method="POST" action='{{path('my_app_mail_sendpage')}}'>*/
/*               <div class="form-group">*/
/*                 <label for="name">*/
/*                   Last Name*/
/*                 </label>*/
/*            {{form_widget(form.nom, {'attr': {'class': 'form-control'}})}}*/
/* */
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label for="email">*/
/*                   First Name*/
/*                 </label>*/
/* {{form_widget(form.prenom, {'attr': {'class': 'form-control'}})}}*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label for="phone">*/
/*                   Phone*/
/*                 </label>*/
/* {{form_widget(form.tel, {'attr': {'class': 'form-control'}})}}*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label for="phone">*/
/*                   From*/
/*                 </label>*/
/* {{form_widget(form.fromAdd, {'attr': {'class': 'form-control'}})}}*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label for="phone">*/
/*                   Message*/
/*                 </label>*/
/*                 {{form_widget(form.text, {'attr': {'class': 'form-control'}})}}*/
/* */
/*               </div>*/
/*                        <div class="form-group">*/
/*               <input type="hidden" name="save" value="videoconference">*/
/* {{form_widget(form._token)}}*/
/*      */
/*               <button class="btn btn-info" type="submit">*/
/*                 Submit*/
/*               </button>*/
/*             </form>*/
/* */
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
