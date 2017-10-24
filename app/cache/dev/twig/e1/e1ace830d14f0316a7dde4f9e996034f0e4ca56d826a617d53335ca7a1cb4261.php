<?php

/* MoocMoocBundle:VideoConference:VideoConferenceList.html.twig */
class __TwigTemplate_722f77fb1f453a25e09b9548c1cf4954387100bb51d891aab0aff9412f69ffc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocMoocBundle:VideoConference:VideoConferenceList.html.twig", 1);
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
        echo "Video Conference Consult List";
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        echo "Video Conference Consult List";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "

    <!--breadcrumbs end-->

    <!--container start-->
    <div class=\"container\">
                 <form role=\"form\" method=\"post\" action='";
        // line 11
        echo $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceRechercheVideo");
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
<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceStat");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/chart.png"), "html", null, true);
        echo "\" alt=\"\" hspace=\"1100\"/></a>

        <div class=\"row\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["vd"]) {
            // line 22
            echo "                <div class=\"col-md-6\">
                    <div class=\"blog-left wow fadeInLeft\">
                        <div class=\"blog-img\">
                            <img src=\"";
            // line 25
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
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "course", array()), "html", null, true);
            echo "|
                                        </a>

                                        <i >
                                        </i>

                                        <a href=\"#\">
                                            Chapter:
                                            ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "chapter", array()), "html", null, true);
            echo "
                                        </a>
                                        <br>
                                        <br>
                                        <i class=\"fa fa-calendar\">
                                        </i>
                                        <a>

                                            ";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["vd"], "date", array()), "Y-m-d"), "html", null, true);
            echo "|

                                        </a>
                                        <a >
                                            Time:
                                            ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "time", array()), "html", null, true);
            echo "|
                                        </a>
                                        <a >
                                            Duration:
                                            ";
            // line 68
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
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "note", array()), "html", null, true);
            echo "
                            </p>
                            
                        </div>
                      <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceEdit", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\" >
    &nbsp &nbsp  <img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/edit.png"), "html", null, true);
            echo "\" alt=\"\"/>  </a>
       <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceDelete", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\" >
     <img src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/delete.png"), "html", null, true);
            echo "\" alt=\"\"/>  </a>
 
    <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceYoutube", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\">
                                   <img src=\"";
            // line 89
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
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "participate", array()), "html", null, true);
            echo " </span>
         
                                     </br>            ";
            // line 100
            echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
            echo "
                    </div>
    


                </div>


                <div class=\"col-md-6\">

                    <div class=\"blog-left wow fadeInLeft\">
                        <div class=\"blog-img\">
                            <img src=\"";
            // line 112
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
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "course", array()), "html", null, true);
            echo "|
                                        </a>

                                        <i >
                                        </i>

                                        <a href=\"#\">
                                            Chapter:
                                            ";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "chapter", array()), "html", null, true);
            echo "
                                        </a>
                                        <br><br>
                                        <i class=\"fa fa-calendar\">
                                        </i>
                                        <a>

                                            ";
            // line 145
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["vd"], "date", array()), "Y-m-d"), "html", null, true);
            echo "|

                                        </a>
                                        <a >
                                            Time:
                                            ";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "time", array()), "html", null, true);
            echo "|
                                        </a>
                                        <a >
                                            Duration:
                                            ";
            // line 154
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
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "note", array()), "html", null, true);
            echo "
                            </p>
                            
                        </div>
<a href=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceEdit", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\" >
   &nbsp &nbsp   <img src=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/edit.png"), "html", null, true);
            echo "\" alt=\"\"/>  </a>
     <a href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceDelete", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\" >
    <img src=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/delete.png"), "html", null, true);
            echo "\" alt=\"\"/>  </a>
        
     <a href=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceYoutube", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 175
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
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "participate", array()), "html", null, true);
            echo " </span>
                               
                                     </br> ";
            // line 188
            echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
            echo "
                    </div> 

 
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "<div class=\"navigation\">
    <center>
    ";
        // line 196
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
        return "MoocMoocBundle:VideoConference:VideoConferenceList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 196,  348 => 194,  336 => 188,  331 => 186,  317 => 175,  313 => 174,  308 => 172,  304 => 171,  300 => 170,  296 => 169,  289 => 165,  275 => 154,  268 => 150,  260 => 145,  250 => 138,  239 => 130,  218 => 112,  203 => 100,  198 => 98,  186 => 89,  182 => 88,  177 => 86,  173 => 85,  169 => 84,  165 => 83,  158 => 79,  144 => 68,  137 => 64,  129 => 59,  118 => 51,  107 => 43,  86 => 25,  81 => 22,  77 => 21,  69 => 18,  65 => 17,  58 => 13,  53 => 11,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
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
/*                  <form role="form" method="post" action='{{path('pidev_mooc_videoconferenceRechercheVideo')}}'>*/
/* */
/*                       {{form_widget(Form.course, {'attr': {'class': 'form-control search' , 'placeholder' :"Search"}})}}*/
/*               <br><br><br><br>*/
/*               <div class="form-group">*/
/*   <input type="hidden" name="save" value="courses">*/
/* {{form_widget(Form._token)}}*/
/* <a href="{{path('pidev_mooc_videoconferenceStat')}}"> <img src="{{asset('img/chart.png')}}" alt="" hspace="1100"/></a>*/
/* */
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
/*                       <a href="{{path('pidev_mooc_videoconferenceEdit', {'id':vd.id})}}" >*/
/*     &nbsp &nbsp  <img src="{{asset('img/edit.png')}}" alt=""/>  </a>*/
/*        <a href="{{path('pidev_mooc_videoconferenceDelete', {'id':vd.id})}}" >*/
/*      <img src="{{asset('img/delete.png')}}" alt=""/>  </a>*/
/*  */
/*     <a href="{{path('pidev_mooc_videoconferenceYoutube', {'id':vd.id})}}">*/
/*                                    <img src="{{asset('img/watch.png')}}" alt=""/> */
/*                             </a>*/
/*     &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp*/
/*                                   */
/*                                         <i class="fa fa-users"></i>  Participated*/
/*                                      &nbsp &nbsp    <span class="badge bg-green"> {{vd.participate}} </span>*/
/*          */
/*                                      </br>            {{ socialButtons() }}*/
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
/* <a href="{{path('pidev_mooc_videoconferenceEdit', {'id':vd.id})}}" >*/
/*    &nbsp &nbsp   <img src="{{asset('img/edit.png')}}" alt=""/>  </a>*/
/*      <a href="{{path('pidev_mooc_videoconferenceDelete', {'id':vd.id})}}" >*/
/*     <img src="{{asset('img/delete.png')}}" alt=""/>  </a>*/
/*         */
/*      <a href="{{path('pidev_mooc_videoconferenceYoutube', {'id':vd.id})}}">*/
/*                                 <img src="{{asset('img/watch.png')}}" alt=""/>  */
/*                             </a>*/
/*     */
/*       */
/*                                  &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
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
