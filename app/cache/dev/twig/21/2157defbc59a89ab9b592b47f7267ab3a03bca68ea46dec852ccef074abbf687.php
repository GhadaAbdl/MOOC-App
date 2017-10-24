<?php

/* MoocMailBundle:Default:mail.html.twig */
class __TwigTemplate_9ae3c85366ad2fa7eac180bd9906e48c4009de20a5b8b2d244e67ee9c366c21f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MoocMoocBundle::layout.html.twig", "MoocMailBundle:Default:mail.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MoocMoocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"breadcrumbs\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-4 col-sm-4\">
            <h1>
              Contacts
            </h1>
          </div>
          <div class=\"col-lg-8 col-sm-8\">
            <ol class=\"breadcrumb pull-right\">
              <li>
                <a href=\"#\">
                  Home
                </a>
              </li>
              <li>
                <a href=\"#\">
                  Pages
                </a>
              </li>
              <li class=\"active\">
                Contacts
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->


<div class=\"container\">


     <div class=\"row\">
        <div class=\"col-lg-5 col-sm-5 address\">
                                <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/ipadwhite.PNG"), "html", null, true);
        echo "\" alt=\"\">

         
        
        </div>
                                <br><br><br>
        <div class=\"col-lg-7 col-sm-7 address\">
          <h4>
            your Email has been successfully sent

          </h4>
        </div>
      </div>
</div>
    
      </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "MoocMailBundle:Default:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 39,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MoocMoocBundle::layout.html.twig" %}*/
/* {% block body %}*/
/*     <div class="breadcrumbs">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-lg-4 col-sm-4">*/
/*             <h1>*/
/*               Contacts*/
/*             </h1>*/
/*           </div>*/
/*           <div class="col-lg-8 col-sm-8">*/
/*             <ol class="breadcrumb pull-right">*/
/*               <li>*/
/*                 <a href="#">*/
/*                   Home*/
/*                 </a>*/
/*               </li>*/
/*               <li>*/
/*                 <a href="#">*/
/*                   Pages*/
/*                 </a>*/
/*               </li>*/
/*               <li class="active">*/
/*                 Contacts*/
/*               </li>*/
/*             </ol>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <!--breadcrumbs end-->*/
/* */
/* */
/* <div class="container">*/
/* */
/* */
/*      <div class="row">*/
/*         <div class="col-lg-5 col-sm-5 address">*/
/*                                 <img src="{{asset('img/ipadwhite.PNG')}}" alt="">*/
/* */
/*          */
/*         */
/*         </div>*/
/*                                 <br><br><br>*/
/*         <div class="col-lg-7 col-sm-7 address">*/
/*           <h4>*/
/*             your Email has been successfully sent*/
/* */
/*           </h4>*/
/*         </div>*/
/*       </div>*/
/* </div>*/
/*     */
/*       </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
