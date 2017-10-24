<?php

/* MoocProfilBundle:Home:otheruser.html.twig */
class __TwigTemplate_cfa7368a1676397a314273d767672b66a53c4295ec903472e40d0470c9f4683e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocProfilBundle:Home:otheruser.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "Profile of ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
    }

    // line 5
    public function block_arianne($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<section class=\"content\">
<div class=\"container\" style=\"padding-top: 60px;\">   
 <div class=\"row\">   
     
<div class=\"fos_user_user_show\">
    
    <div class=\"col-md-4 col-sm-6 col-xs-12\">
      <div class=\"text-center\">
        <img id=\"img_logo\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("mooc/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imgLink", array()))), "html", null, true);
        echo "\" class=\"avatar img-circle img-thumbnail\" alt=\"avatar\">
      </div>
    </div>
    <div class=\"col-md-8 col-sm-6 col-xs-12 personal-info\">
    
    
    <div class=\"form-group\">
          <label class=\"col-lg-3 control-label\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("username"), "html", null, true);
        echo ":</label>
          <div class=\"col-lg-8\">
              <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
          </div>
        </div>
    
          <div class=\"form-group\">
          <label class=\"col-lg-3 control-label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("email"), "html", null, true);
        echo ":</label>
          <div class=\"col-lg-8\">
              <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
          </div>
        </div>
    
          <div class=\"form-group\">
          <label class=\"col-lg-3 control-label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("name"), "html", null, true);
        echo ":</label>
          <div class=\"col-lg-8\">
              <p>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</p>
          </div>
        </div>
          ";
        // line 42
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "type", array()) != "Organism")) {
            // line 43
            echo "          <div class=\"form-group\">
          <label class=\"col-lg-3 control-label\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("level"), "html", null, true);
            echo ":</label>
          <div class=\"col-lg-8\">
              <p>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "level", array()), "html", null, true);
            echo "</p>
          </div>
        </div>
          ";
        }
        // line 50
        echo "          <div class=\"form-group\">
          <label class=\"col-lg-3 control-label\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("type"), "html", null, true);
        echo ":</label>
          <div class=\"col-lg-8\">
              <p>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "type", array()), "html", null, true);
        echo "</p>
          </div>
        </div>
          
           <div class=\"form-group\">
          <label class=\"col-lg-3 control-label\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Birth date"), "html", null, true);
        echo ":</label>
          <div class=\"col-lg-8\">
              <p>";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "birthDate", array()), "d/m/Y"), "html", null, true);
        echo "</p>
          </div>
        </div>

         
          
          
    
    
    
</div>
</div>
           ";
        // line 72
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "type", array()) == "Formateur")) {
            // line 73
            echo "              
               <object data=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("mooc/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cvLink", array()))), "html", null, true);
            echo "\"  type=\"application/pdf\" width=\"100%\" height=\"800px\">
            <p>It appears your Web browser is not configured to display PDF files.
                No worries, just <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("mooc/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cvLink", array()))), "html", null, true);
            echo "\">click here to download the PDF file.</a>
            </p>
 
        </object>

            ";
        }
        // line 82
        echo "          
 </div>
</div>
</section>
    
";
    }

    public function getTemplateName()
    {
        return "MoocProfilBundle:Home:otheruser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 82,  177 => 76,  172 => 74,  169 => 73,  167 => 72,  152 => 60,  147 => 58,  139 => 53,  134 => 51,  131 => 50,  124 => 46,  119 => 44,  116 => 43,  114 => 42,  108 => 39,  103 => 37,  95 => 32,  90 => 30,  82 => 25,  77 => 23,  67 => 16,  56 => 7,  53 => 6,  47 => 5,  40 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} | {{ user.username }} {% endblock %}*/
/* {% block pagetitle %}Profile of {{ user.username }}{% endblock %}*/
/* {% block arianne %}{{ user.username }}{% endblock %}*/
/* {% block body %}*/
/* */
/* <section class="content">*/
/* <div class="container" style="padding-top: 60px;">   */
/*  <div class="row">   */
/*      */
/* <div class="fos_user_user_show">*/
/*     */
/*     <div class="col-md-4 col-sm-6 col-xs-12">*/
/*       <div class="text-center">*/
/*         <img id="img_logo" src="{{ asset('mooc/' ~  user.imgLink ) }}" class="avatar img-circle img-thumbnail" alt="avatar">*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-md-8 col-sm-6 col-xs-12 personal-info">*/
/*     */
/*     */
/*     <div class="form-group">*/
/*           <label class="col-lg-3 control-label">{{ 'username'|trans }}:</label>*/
/*           <div class="col-lg-8">*/
/*               <p>{{ user.username }}</p>*/
/*           </div>*/
/*         </div>*/
/*     */
/*           <div class="form-group">*/
/*           <label class="col-lg-3 control-label">{{ 'email'|trans }}:</label>*/
/*           <div class="col-lg-8">*/
/*               <p>{{ user.email }}</p>*/
/*           </div>*/
/*         </div>*/
/*     */
/*           <div class="form-group">*/
/*           <label class="col-lg-3 control-label">{{ 'name'|trans }}:</label>*/
/*           <div class="col-lg-8">*/
/*               <p>{{ user.name }}</p>*/
/*           </div>*/
/*         </div>*/
/*           {% if user.type != 'Organism' %}*/
/*           <div class="form-group">*/
/*           <label class="col-lg-3 control-label">{{ 'level'|trans }}:</label>*/
/*           <div class="col-lg-8">*/
/*               <p>{{ user.level }}</p>*/
/*           </div>*/
/*         </div>*/
/*           {% endif %}*/
/*           <div class="form-group">*/
/*           <label class="col-lg-3 control-label">{{ 'type'|trans }}:</label>*/
/*           <div class="col-lg-8">*/
/*               <p>{{ user.type }}</p>*/
/*           </div>*/
/*         </div>*/
/*           */
/*            <div class="form-group">*/
/*           <label class="col-lg-3 control-label">{{ 'Birth date'|trans }}:</label>*/
/*           <div class="col-lg-8">*/
/*               <p>{{ user.birthDate | date('d/m/Y') }}</p>*/
/*           </div>*/
/*         </div>*/
/* */
/*          */
/*           */
/*           */
/*     */
/*     */
/*     */
/* </div>*/
/* </div>*/
/*            {% if user.type == 'Formateur' %}*/
/*               */
/*                <object data="{{ asset('mooc/' ~  user.cvLink ) }}"  type="application/pdf" width="100%" height="800px">*/
/*             <p>It appears your Web browser is not configured to display PDF files.*/
/*                 No worries, just <a href="{{ asset('mooc/' ~  user.cvLink ) }}">click here to download the PDF file.</a>*/
/*             </p>*/
/*  */
/*         </object>*/
/* */
/*             {% endif %}*/
/*           */
/*  </div>*/
/* </div>*/
/* </section>*/
/*     */
/* {% endblock %}*/
/* */
