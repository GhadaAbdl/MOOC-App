<?php

/* MoocMoocBundle:VideoConference:VideoConferenceApp.html.twig */
class __TwigTemplate_d795f819bcb285abe1a77a99703634c9c1fc96b9ba2c74fac17ac0a4a0b9b24d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MoocMoocBundle::layout.html.twig", "MoocMoocBundle:VideoConference:VideoConferenceApp.html.twig", 2);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"breadcrumbs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-sm-4\">
                    <h1>
                        Video Conference           </h1>
                </div>
                <div class=\"col-lg-8 col-sm-8\">
                    <ol class=\"breadcrumb pull-right\">
                        <li>
                            <a href=\"index\">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Others
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Video Conference
                            </a>
                        </li>
                        <li class=\"active\">
Consult List                      </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class=\"container\">
           <form role=\"form\" method=\"post\" action='";
        // line 40
        echo $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceRechercheVideoApp");
        echo "'>
              ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "course", array()), 'widget', array("attr" => array("class" => "form-control search", "placeholder" => "Search")));
        echo "
              <br><br><br><br>
              <div class=\"form-group\">
              <input type=\"hidden\" name=\"save\" value=\"courses\">
";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "_token", array()), 'widget');
        echo "
 
        <div class=\"row\">
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["vd"]) {
            // line 49
            echo "                <div class=\"col-md-6\">
                    <div class=\"blog-left wow fadeInLeft\">
                        <div class=\"blog-img\">
                            <img src=\"";
            // line 52
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
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "course", array()), "html", null, true);
            echo "|
                                        </a>

                                        <i >
                                        </i>

                                        <a href=\"#\">
                                            Chapter:
                                            ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "chapter", array()), "html", null, true);
            echo "
                                        </a>
                                        <br>
                                        <br>
                                        <i class=\"fa fa-calendar\">
                                        </i>
                                        <a>

                                            ";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["vd"], "date", array()), "Y-m-d"), "html", null, true);
            echo "|

                                        </a>
                                        <a >
                                            Time:
                                            ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "time", array()), "html", null, true);
            echo "|
                                        </a>
                                        <a >
                                            Duration:
                                            ";
            // line 95
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
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "note", array()), "html", null, true);
            echo "
                            </p>
                            
                        </div>
                           
     <a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceParticipate", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\" >
     &nbsp &nbsp <img src=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/participate.png"), "html", null, true);
            echo "\" alt=\"\"/> </a>
    <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceYoutube", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\">
                                   <img src=\"";
            // line 114
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
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "participate", array()), "html", null, true);
            echo " </span>
         
                                     </br>     ";
            // line 126
            echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
            echo "
                    </div>
    


                </div>


                <div class=\"col-md-6\">

                    <div class=\"blog-left wow fadeInLeft\">
                        <div class=\"blog-img\">
                            <img src=\"";
            // line 138
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
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "course", array()), "html", null, true);
            echo "|
                                        </a>

                                        <i >
                                        </i>

                                        <a href=\"#\">
                                            Chapter:
                                            ";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "chapter", array()), "html", null, true);
            echo "
                                        </a>
                                        <br><br>
                                        <i class=\"fa fa-calendar\">
                                        </i>
                                        <a>

                                            ";
            // line 171
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["vd"], "date", array()), "Y-m-d"), "html", null, true);
            echo "|

                                        </a>
                                        <a >
                                            Time:
                                            ";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "time", array()), "html", null, true);
            echo "|
                                        </a>
                                        <a >
                                            Duration:
                                            ";
            // line 180
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
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "note", array()), "html", null, true);
            echo "
                            </p>
                            
                        </div>

        <a href=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceParticipate", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\" >
      &nbsp &nbsp   <img src=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/participate.png"), "html", null, true);
            echo "\" alt=\"\"/> </a>
     <a href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceYoutube", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 199
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
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "participate", array()), "html", null, true);
            echo " </span>
                               
                                     </br> ";
            // line 212
            echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
            echo "
                    </div> 

 
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "<div class=\"navigation\">
    <center>
    ";
        // line 220
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
        return array (  346 => 220,  342 => 218,  330 => 212,  325 => 210,  311 => 199,  307 => 198,  303 => 197,  299 => 196,  291 => 191,  277 => 180,  270 => 176,  262 => 171,  252 => 164,  241 => 156,  220 => 138,  205 => 126,  200 => 124,  187 => 114,  183 => 113,  179 => 112,  175 => 111,  167 => 106,  153 => 95,  146 => 91,  138 => 86,  127 => 78,  116 => 70,  95 => 52,  90 => 49,  86 => 48,  80 => 45,  73 => 41,  69 => 40,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "MoocMoocBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <div class="breadcrumbs">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-4 col-sm-4">*/
/*                     <h1>*/
/*                         Video Conference           </h1>*/
/*                 </div>*/
/*                 <div class="col-lg-8 col-sm-8">*/
/*                     <ol class="breadcrumb pull-right">*/
/*                         <li>*/
/*                             <a href="index">*/
/*                                 Home*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 Others*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 Video Conference*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="active">*/
/* Consult List                      </li>*/
/*                     </ol>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
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
