<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_5351428e03f0424394780c230ab24bc3f01cf6981a58483ae1c534427c35357c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<section class=\"content\">
    
<div class=\"container\" style=\"padding-top: 60px;\">   
 <div class=\"row\">   
     
<div class=\"fos_user_user_show\">
    
    <div class=\"col-md-4 col-sm-6 col-xs-12\">
      <div class=\"text-center\">
        <img id=\"img_logo\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("mooc/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imgLink", array()))), "html", null, true);
        echo "\" class=\"avatar img-circle img-thumbnail\" alt=\"avatar\">
      </div>
    </div>
    <div class=\"col-md-8 col-sm-6 col-xs-12 personal-info\">
    
    
    <div class=\"form-group\">
          <label class=\"col-lg-3 control-label\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
          <div class=\"col-lg-8\">
              <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
          </div>
        </div>
    
          <div class=\"form-group\">
          <label class=\"col-lg-3 control-label\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
          <div class=\"col-lg-8\">
              <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
          </div>
        </div>
    
          <div class=\"form-group\">
          <label class=\"col-lg-3 control-label\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("name", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
          <div class=\"col-lg-8\">
              <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</p>
          </div>
        </div>
          ";
        // line 37
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "type", array()) != "Organism")) {
            // line 38
            echo "          <div class=\"form-group\">
          <label class=\"col-lg-3 control-label\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("level", array(), "FOSUserBundle"), "html", null, true);
            echo ":</label>
          <div class=\"col-lg-8\">
              <p>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "level", array()), "html", null, true);
            echo "</p>
          </div>
        </div>
          ";
        }
        // line 45
        echo "          <div class=\"form-group\">
          <label class=\"col-lg-3 control-label\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("type", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
          <div class=\"col-lg-8\">
              <p>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "type", array()), "html", null, true);
        echo "</p>
          </div>
        </div>
          
           <div class=\"form-group\">
          <label class=\"col-lg-3 control-label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Birth date", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
          <div class=\"col-lg-8\">
              <p>";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "birthDate", array()), "d/m/Y"), "html", null, true);
        echo "</p>
          </div>
        </div>

         
          
          
    
    
    
</div>
</div>
           ";
        // line 67
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "type", array()) != "Aprenant")) {
            // line 68
            echo "              
               <object data=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("mooc/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cvLink", array()))), "html", null, true);
            echo "\"  type=\"application/pdf\" width=\"100%\" height=\"800px\">
            <p>It appears your Web browser is not configured to display PDF files.
                No worries, just <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("mooc/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cvLink", array()))), "html", null, true);
            echo "\">click here to download the PDF file.</a>
            </p>
 
        </object>

            ";
        }
        // line 77
        echo "            <div>";
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "</div>
            
 </div>
                                           <div id=\"fb-root\"></div>
<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.6&appId=1722477904656254\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
                              
                     <div class=\"fb-comments\" data-href=\"https://www.facebook.com/MoocEsprit/\" data-numposts=\"5\"></div>         

                                    <div class=\"media-body\">
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 77,  140 => 71,  135 => 69,  132 => 68,  130 => 67,  115 => 55,  110 => 53,  102 => 48,  97 => 46,  94 => 45,  87 => 41,  82 => 39,  79 => 38,  77 => 37,  71 => 34,  66 => 32,  58 => 27,  53 => 25,  45 => 20,  40 => 18,  30 => 11,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <section class="content">*/
/*     */
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
/*           <label class="col-lg-3 control-label">{{ 'profile.show.username'|trans }}:</label>*/
/*           <div class="col-lg-8">*/
/*               <p>{{ user.username }}</p>*/
/*           </div>*/
/*         </div>*/
/*     */
/*           <div class="form-group">*/
/*           <label class="col-lg-3 control-label">{{ 'profile.show.email'|trans }}:</label>*/
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
/*            {% if user.type != 'Aprenant' %}*/
/*               */
/*                <object data="{{ asset('mooc/' ~  user.cvLink ) }}"  type="application/pdf" width="100%" height="800px">*/
/*             <p>It appears your Web browser is not configured to display PDF files.*/
/*                 No worries, just <a href="{{ asset('mooc/' ~  user.cvLink ) }}">click here to download the PDF file.</a>*/
/*             </p>*/
/*  */
/*         </object>*/
/* */
/*             {% endif %}*/
/*             <div>{{ socialButtons() }}</div>*/
/*             */
/*  </div>*/
/*                                            <div id="fb-root"></div>*/
/* <div id="fb-root"></div>*/
/* <script>(function(d, s, id) {*/
/*   var js, fjs = d.getElementsByTagName(s)[0];*/
/*   if (d.getElementById(id)) return;*/
/*   js = d.createElement(s); js.id = id;*/
/*   js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.6&appId=1722477904656254";*/
/*   fjs.parentNode.insertBefore(js, fjs);*/
/* }(document, 'script', 'facebook-jssdk'));</script>*/
/*                               */
/*                      <div class="fb-comments" data-href="https://www.facebook.com/MoocEsprit/" data-numposts="5"></div>         */
/* */
/*                                     <div class="media-body">*/
/* </div>*/
/* </section>*/
