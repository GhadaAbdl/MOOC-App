<?php

/* MoocMoocBundle:VideoConference:VideoConferenceApp.html.twig */
class __TwigTemplate_fc990d49f4b94bdd8a415d93a7ffcebbcaeef2de22cbcc3fa49bff3d01908dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocMoocBundle:VideoConference:VideoConferenceApp.html.twig", 2);
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

    // line 3
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "Video Conference Consult List";
    }

    // line 4
    public function block_arianne($context, array $blocks = array())
    {
        echo "Video Conference Consult List";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "

    <!--breadcrumbs end-->

    <!--container start-->
    <div class=\"container\">
           <form role=\"form\" method=\"post\" action='";
        // line 12
        echo $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceRechercheVideoApp");
        echo "'>
              ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "course", array()), 'widget', array("attr" => array("class" => "form-control search", "placeholder" => "Search")));
        echo "
              <br><br><br><br>
              <div class=\"form-group\">
              <input type=\"hidden\" name=\"save\" value=\"courses\">
";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "_token", array()), 'widget');
        echo "
 
        <div class=\"row\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["vd"]) {
            // line 21
            echo "                <div class=\"col-md-6\">
                    <div class=\"blog-left wow fadeInLeft\">
                        <div class=\"blog-img\">
                            <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blog/img8.jpg"), "html", null, true);
            echo "\" alt=\"\"/>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"blog-two-info\">
                                    <p>
                                        <i class=\"fa fa-user\">
                                        </i>
                                        by
                                        <a href=\"#\">
                                            Former
                                        </a>

                                        |


                                        <a href=\"#\">
                                            Course:
                                            ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "course", array()), "html", null, true);
            echo "|
                                        </a>

                                        <i >
                                        </i>

                                        <a href=\"#\">
                                            Chapter:
                                            ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "chapter", array()), "html", null, true);
            echo "
                                        </a>
                                        <br>
                                        <br>
                                        <i class=\"fa fa-calendar\">
                                        </i>
                                        <a>

                                            ";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["vd"], "date", array()), "Y-m-d"), "html", null, true);
            echo "|

                                        </a>
                                        <a >
                                            Time:
                                            ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "time", array()), "html", null, true);
            echo "|
                                        </a>
                                        <a >
                                            Duration:
                                            ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "duration", array()), "html", null, true);
            echo " Hours
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"blog-content\">
                            <h3>
                                Notes             
                            </h3>
                            <p>
                                ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "note", array()), "html", null, true);
            echo "
                            </p>
                            
                        </div>
                           
     <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceParticipate", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\" >
     &nbsp &nbsp <img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/participate.png"), "html", null, true);
            echo "\" alt=\"\"/> </a>
    <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceYoutube", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\">
                                   <img src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/watch.png"), "html", null, true);
            echo "\" alt=\"\"/> 
                            </a>
      
      &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
                                &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
                                &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
                                &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
                                &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
                                  
                                        <i class=\"fa fa-users\"></i>  Participated
                                     &nbsp &nbsp    <span class=\"badge bg-green\"> ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "participate", array()), "html", null, true);
            echo " </span>
         
                                     </br>     ";
            // line 98
            echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
            echo "
                    </div>
    


                </div>


                <div class=\"col-md-6\">

                    <div class=\"blog-left wow fadeInLeft\">
                        <div class=\"blog-img\">
                            <img src=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blog/img8.jpg"), "html", null, true);
            echo "\" alt=\"\"/>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"blog-two-info\">
                                    <p>
                                        <i class=\"fa fa-user\">
                                        </i>
                                        by
                                        <a href=\"#\">
                                            Former
                                        </a>

                                        |


                                        <a href=\"#\">
                                            Course:
                                            ";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "course", array()), "html", null, true);
            echo "|
                                        </a>

                                        <i >
                                        </i>

                                        <a href=\"#\">
                                            Chapter:
                                            ";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "chapter", array()), "html", null, true);
            echo "
                                        </a>
                                        <br><br>
                                        <i class=\"fa fa-calendar\">
                                        </i>
                                        <a>

                                            ";
            // line 143
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["vd"], "date", array()), "Y-m-d"), "html", null, true);
            echo "|

                                        </a>
                                        <a >
                                            Time:
                                            ";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "time", array()), "html", null, true);
            echo "|
                                        </a>
                                        <a >
                                            Duration:
                                            ";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "duration", array()), "html", null, true);
            echo " Hours
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"blog-content\">
                            <h3>
                                Notes             
                            </h3>
                            <p>
                                ";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "note", array()), "html", null, true);
            echo "
                            </p>
                            
                        </div>

        <a href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceParticipate", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\" >
      &nbsp &nbsp   <img src=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/participate.png"), "html", null, true);
            echo "\" alt=\"\"/> </a>
     <a href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceYoutube", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/watch.png"), "html", null, true);
            echo "\" alt=\"\"/>  
                            </a>
    
      
        &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
                                &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
                                &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
                                &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
                                &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
                                
                                        <i class=\"fa fa-users\"></i>  Participated
                                     &nbsp &nbsp    <span class=\"badge bg-green\"> ";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "participate", array()), "html", null, true);
            echo " </span>
                               
                                     </br> ";
            // line 184
            echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
            echo "
                    </div> 

 
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "<div class=\"navigation\">
    <center>
    ";
        // line 192
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </center>
</div>
        </div>
    </div>






    <!--blog end-->
</div>

";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:VideoConference:VideoConferenceApp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 192,  326 => 190,  314 => 184,  309 => 182,  295 => 171,  291 => 170,  287 => 169,  283 => 168,  275 => 163,  261 => 152,  254 => 148,  246 => 143,  236 => 136,  225 => 128,  204 => 110,  189 => 98,  184 => 96,  171 => 86,  167 => 85,  163 => 84,  159 => 83,  151 => 78,  137 => 67,  130 => 63,  122 => 58,  111 => 50,  100 => 42,  79 => 24,  74 => 21,  70 => 20,  64 => 17,  57 => 13,  53 => 12,  45 => 6,  42 => 5,  36 => 4,  30 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block pagetitle %}Video Conference Consult List{% endblock %}*/
/* {% block arianne %}Video Conference Consult List{% endblock %}*/
/* {% block body %}*/
/* */
/* */
/*     <!--breadcrumbs end-->*/
/* */
/*     <!--container start-->*/
/*     <div class="container">*/
/*            <form role="form" method="post" action='{{path('pidev_mooc_videoconferenceRechercheVideoApp')}}'>*/
/*               {{form_widget(Form.course, {'attr': {'class': 'form-control search' , 'placeholder' :"Search"}})}}*/
/*               <br><br><br><br>*/
/*               <div class="form-group">*/
/*               <input type="hidden" name="save" value="courses">*/
/* {{form_widget(Form._token)}}*/
/*  */
/*         <div class="row">*/
/*             {% for vd in pagination %}*/
/*                 <div class="col-md-6">*/
/*                     <div class="blog-left wow fadeInLeft">*/
/*                         <div class="blog-img">*/
/*                             <img src="{{asset('img/blog/img8.jpg')}}" alt=""/>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class="blog-two-info">*/
/*                                     <p>*/
/*                                         <i class="fa fa-user">*/
/*                                         </i>*/
/*                                         by*/
/*                                         <a href="#">*/
/*                                             Former*/
/*                                         </a>*/
/* */
/*                                         |*/
/* */
/* */
/*                                         <a href="#">*/
/*                                             Course:*/
/*                                             {{vd.course}}|*/
/*                                         </a>*/
/* */
/*                                         <i >*/
/*                                         </i>*/
/* */
/*                                         <a href="#">*/
/*                                             Chapter:*/
/*                                             {{vd.chapter}}*/
/*                                         </a>*/
/*                                         <br>*/
/*                                         <br>*/
/*                                         <i class="fa fa-calendar">*/
/*                                         </i>*/
/*                                         <a>*/
/* */
/*                                             {{vd.date|date('Y-m-d')}}|*/
/* */
/*                                         </a>*/
/*                                         <a >*/
/*                                             Time:*/
/*                                             {{vd.time}}|*/
/*                                         </a>*/
/*                                         <a >*/
/*                                             Duration:*/
/*                                             {{vd.duration}} Hours*/
/*                                         </a>*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="blog-content">*/
/*                             <h3>*/
/*                                 Notes             */
/*                             </h3>*/
/*                             <p>*/
/*                                 {{vd.note}}*/
/*                             </p>*/
/*                             */
/*                         </div>*/
/*                            */
/*      <a href="{{path('pidev_mooc_videoconferenceParticipate', {'id':vd.id})}}" >*/
/*      &nbsp &nbsp <img src="{{asset('img/participate.png')}}" alt=""/> </a>*/
/*     <a href="{{path('pidev_mooc_videoconferenceYoutube', {'id':vd.id})}}">*/
/*                                    <img src="{{asset('img/watch.png')}}" alt=""/> */
/*                             </a>*/
/*       */
/*       &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp*/
/*                                   */
/*                                         <i class="fa fa-users"></i>  Participated*/
/*                                      &nbsp &nbsp    <span class="badge bg-green"> {{vd.participate}} </span>*/
/*          */
/*                                      </br>     {{ socialButtons() }}*/
/*                     </div>*/
/*     */
/* */
/* */
/*                 </div>*/
/* */
/* */
/*                 <div class="col-md-6">*/
/* */
/*                     <div class="blog-left wow fadeInLeft">*/
/*                         <div class="blog-img">*/
/*                             <img src="{{asset('img/blog/img8.jpg')}}" alt=""/>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class="blog-two-info">*/
/*                                     <p>*/
/*                                         <i class="fa fa-user">*/
/*                                         </i>*/
/*                                         by*/
/*                                         <a href="#">*/
/*                                             Former*/
/*                                         </a>*/
/* */
/*                                         |*/
/* */
/* */
/*                                         <a href="#">*/
/*                                             Course:*/
/*                                             {{vd.course}}|*/
/*                                         </a>*/
/* */
/*                                         <i >*/
/*                                         </i>*/
/* */
/*                                         <a href="#">*/
/*                                             Chapter:*/
/*                                             {{vd.chapter}}*/
/*                                         </a>*/
/*                                         <br><br>*/
/*                                         <i class="fa fa-calendar">*/
/*                                         </i>*/
/*                                         <a>*/
/* */
/*                                             {{vd.date|date('Y-m-d')}}|*/
/* */
/*                                         </a>*/
/*                                         <a >*/
/*                                             Time:*/
/*                                             {{vd.time}}|*/
/*                                         </a>*/
/*                                         <a >*/
/*                                             Duration:*/
/*                                             {{vd.duration}} Hours*/
/*                                         </a>*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="blog-content">*/
/*                             <h3>*/
/*                                 Notes             */
/*                             </h3>*/
/*                             <p>*/
/*                                 {{vd.note}}*/
/*                             </p>*/
/*                             */
/*                         </div>*/
/* */
/*         <a href="{{path('pidev_mooc_videoconferenceParticipate', {'id':vd.id})}}" >*/
/*       &nbsp &nbsp   <img src="{{asset('img/participate.png')}}" alt=""/> </a>*/
/*      <a href="{{path('pidev_mooc_videoconferenceYoutube', {'id':vd.id})}}">*/
/*                                 <img src="{{asset('img/watch.png')}}" alt=""/>  */
/*                             </a>*/
/*     */
/*       */
/*         &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp*/
/*                                 */
/*                                         <i class="fa fa-users"></i>  Participated*/
/*                                      &nbsp &nbsp    <span class="badge bg-green"> {{vd.participate}} </span>*/
/*                                */
/*                                      </br> {{ socialButtons() }}*/
/*                     </div> */
/* */
/*  */
/*                 </div>*/
/*             {% endfor %}*/
/* <div class="navigation">*/
/*     <center>*/
/*     {{ knp_pagination_render(pagination) }}*/
/*     </center>*/
/* </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*     <!--blog end-->*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
