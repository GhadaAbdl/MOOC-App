<?php

/* MoocMoocBundle:VideoConference:SearchResult.html.twig */
class __TwigTemplate_b95a9f9fe8eb8508f0fa8dd0826822be3ac523558a07981cdb233ad50a8d3f90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocMoocBundle:VideoConference:SearchResult.html.twig", 2);
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
        echo "search";
    }

    // line 4
    public function block_arianne($context, array $blocks = array())
    {
        echo "Search";
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
 <h2> Result search for : ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["rech"]) ? $context["rech"] : $this->getContext($context, "rech")), "html", null, true);
        echo " </h2><br>
        <div class=\"row\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")));
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
       &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
                                &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
                                &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
                                  
                                        <i class=\"fa fa-users\"></i>  Participated
                                     &nbsp &nbsp    <span class=\"badge bg-green\"> ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "participate", array()), "html", null, true);
            echo " </span>
         
                                     </br>    ";
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceEdit", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\" >
    &nbsp &nbsp  <img src=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/edit.png"), "html", null, true);
            echo "\" alt=\"\"/>  </a>
       <a href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceDelete", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\" >
     <img src=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/delete.png"), "html", null, true);
            echo "\" alt=\"\"/>  </a>
 
    <a href=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_mooc_videoconferenceYoutube", array("id" => $this->getAttribute($context["vd"], "id", array()))), "html", null, true);
            echo "\">
                                   <img src=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/watch.png"), "html", null, true);
            echo "\" alt=\"\"/> 
                            </a>
      
                                &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
                                &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
                                &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
                                
                                        <i class=\"fa fa-users\"></i>  Participated
                                     &nbsp &nbsp    <span class=\"badge bg-green\"> ";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["vd"], "participate", array()), "html", null, true);
            echo " </span>
                               
                                     </br>   ";
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
        return "MoocMoocBundle:VideoConference:SearchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 190,  329 => 184,  324 => 182,  313 => 174,  309 => 173,  304 => 171,  300 => 170,  296 => 169,  292 => 168,  284 => 163,  270 => 152,  263 => 148,  255 => 143,  245 => 136,  234 => 128,  213 => 110,  198 => 98,  193 => 96,  183 => 89,  179 => 88,  174 => 86,  170 => 85,  166 => 84,  162 => 83,  154 => 78,  140 => 67,  133 => 63,  125 => 58,  114 => 50,  103 => 42,  82 => 24,  77 => 21,  73 => 20,  68 => 18,  64 => 17,  57 => 13,  53 => 12,  45 => 6,  42 => 5,  36 => 4,  30 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block pagetitle %}search{% endblock %}*/
/* {% block arianne %}Search{% endblock %}*/
/* {% block body %}*/
/* */
/* */
/*     <!--breadcrumbs end-->*/
/* */
/*     <!--container start-->*/
/*     <div class="container">*/
/*            <form role="form" method="post" action='{{path('pidev_mooc_videoconferenceRechercheVideo')}}'>*/
/*               {{form_widget(Form.course, {'attr': {'class': 'form-control search' , 'placeholder' :"Search"}})}}*/
/*               <br><br><br><br>*/
/*               <div class="form-group">*/
/*               <input type="hidden" name="save" value="courses">*/
/* {{form_widget(Form._token)}}*/
/*  <h2> Result search for : {{rech}} </h2><br>*/
/*         <div class="row">*/
/*             {% for vd in video %}*/
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
/*                      */
/*        <a href="{{path('pidev_mooc_videoconferenceEdit', {'id':vd.id})}}" >*/
/*     &nbsp &nbsp  <img src="{{asset('img/edit.png')}}" alt=""/>  </a>*/
/*        <a href="{{path('pidev_mooc_videoconferenceDelete', {'id':vd.id})}}" >*/
/*      <img src="{{asset('img/delete.png')}}" alt=""/>  </a>*/
/*  */
/*     <a href="{{path('pidev_mooc_videoconferenceYoutube', {'id':vd.id})}}">*/
/*                                    <img src="{{asset('img/watch.png')}}" alt=""/> */
/*                             </a>*/
/*        &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp*/
/*                                   */
/*                                         <i class="fa fa-users"></i>  Participated*/
/*                                      &nbsp &nbsp    <span class="badge bg-green"> {{vd.participate}} </span>*/
/*          */
/*                                      </br>    {{ socialButtons() }}*/
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
/*      <a href="{{path('pidev_mooc_videoconferenceEdit', {'id':vd.id})}}" >*/
/*     &nbsp &nbsp  <img src="{{asset('img/edit.png')}}" alt=""/>  </a>*/
/*        <a href="{{path('pidev_mooc_videoconferenceDelete', {'id':vd.id})}}" >*/
/*      <img src="{{asset('img/delete.png')}}" alt=""/>  </a>*/
/*  */
/*     <a href="{{path('pidev_mooc_videoconferenceYoutube', {'id':vd.id})}}">*/
/*                                    <img src="{{asset('img/watch.png')}}" alt=""/> */
/*                             </a>*/
/*       */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp */
/*                                 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp*/
/*                                 */
/*                                         <i class="fa fa-users"></i>  Participated*/
/*                                      &nbsp &nbsp    <span class="badge bg-green"> {{vd.participate}} </span>*/
/*                                */
/*                                      </br>   {{ socialButtons() }}*/
/*                     </div> */
/* */
/*  */
/*                 </div>*/
/*             {% endfor %}*/
/* <div class="navigation">*/
/*     <center>*/
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
