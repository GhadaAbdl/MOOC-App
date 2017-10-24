<?php

/* MoocCourseBundle:Courses:show.html.twig */
class __TwigTemplate_ad127c83ad0f49bda0fb6b76ade32804a9851863c794759f76acb8987ee66549 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocCourseBundle:Courses:show.html.twig", 1);
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
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "courseTitle", array()), "html", null, true);
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "discipline", array()), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js\"></script>


    <table class=\"record_properties\">
        <tbody>
        <div class=\"container\">
            <div class=\"col-lg-9 \">
                <div class=\"blog-item\">
                    <div class=\"row\">
                        <!--  DATE !-->
                        <div class=\"col-lg-2 col-sm-2\">
                            <div class=\"date-wrap\">
                                <span class=\"date\">  Rating : ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rating", array()), "html", null, true);
        echo " </span>
                                <span class=\"month\"> training duration: ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "trainingDurationDays", array()), "html", null, true);
        echo " Day 
                                    ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "trainingDurationHours", array()), "html", null, true);
        echo " h </span>
                            </div>

                        </div>

                        ";
        // line 28
        echo "                        <div class=\"col-lg-10 col-sm-10\">
                            <div class=\"blog-img\">
                                <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Android.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                            </div>

                        </div>

                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-2 col-sm-2 text-right\">

                            ";
        // line 39
        echo " 
                            <div class=\"author\">
                                By
                                <a href=\"#\">
                                    ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idwriter", array()), "html", null, true);
        echo "
                                </a>


                            </div>
                            ";
        // line 48
        echo "                 
                            <ul class=\"list-unstyled\">
                                <li>
                                    <a href=\"\">
                                        <em>
                                            Nombre de chapitre ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numberofchapters", array()), "html", null, true);
        echo "
                                        </em>
                                    </a>
                                </li>


                            </ul>


                            ";
        // line 63
        echo "                            <div class=\"st-view\">
                                <ul class=\"list-unstyled\">

                                    <li>
                                        <a href=\"javascript:;\">
                                            ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "discipline", array()), "html", null, true);
        echo "
                                        </a>
                                    </li>
                                   
                                    <li>
                                        <a href=\"javascript:;\">
                                            views
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            Comments
                                        </a>
                                    </li>
                         
                                    <li>
                                        <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("courses_new");
        echo "\">
                                            new Course
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("courses");
        echo "\" class=\"btn btn-primary\">
                                Back to the menu
                            </a>
                                    </li>

                                </ul>
                            </div>


                        </div>
                        <div class=\"col-lg-10 col-sm-10\">
                            <h2>Objectives</h2>
                            <p>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "objectives", array()), "html", null, true);
        echo "</p>
                            


                            <h1>
                                <a href=\"\">
                                    ";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "courseTitle", array()), "html", null, true);
        echo " 
                                </a>

                            </h1>
";
        // line 112
        echo " 

                                
                            ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 116
            echo "   
    <h3>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "chaptertitle", array()), "html", null, true);
            echo "</h3> 
    <p>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "chaptercontent", array()), "html", null, true);
            echo "</p>
    ";
            // line 119
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page"), "method") == (isset($context["chapterCount"]) ? $context["chapterCount"] : $this->getContext($context, "chapterCount")))) {
                // line 120
                echo "         <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_quizz_pass", array("idChapter" => $this->getAttribute($context["article"], "idChapter", array()))), "html", null, true);
                echo "\">
                                            Passer quizz
                                        </a>
    ";
            } else {
                // line 124
                echo "         <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_quizznm_pass", array("idChapter" => $this->getAttribute($context["article"], "idChapter", array()))), "html", null, true);
                echo "\">
                                            Passer quizz 
                                        </a>
                                           
    ";
            }
            // line 128
            echo "    
     
 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                     <div class=\"navigation\">
    ";
        // line 133
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "
</div>       
                            

 
  
";
        // line 140
        echo "
<div class=\"media\">
                               
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
                            </div>

                        </div>



                    </div>

                </div>
            </div>

        </div>

    </tbody>
</table>

";
        // line 182
        echo "<ul class=\"record_actions\">



</ul>
<div>";
        // line 187
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "MoocCourseBundle:Courses:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 187,  297 => 182,  254 => 140,  245 => 133,  242 => 132,  233 => 128,  224 => 124,  216 => 120,  214 => 119,  210 => 118,  206 => 117,  203 => 116,  199 => 115,  194 => 112,  187 => 107,  178 => 101,  163 => 89,  155 => 84,  136 => 68,  129 => 63,  117 => 53,  110 => 48,  102 => 43,  96 => 39,  84 => 30,  80 => 28,  72 => 22,  68 => 21,  64 => 20,  48 => 6,  45 => 5,  37 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block pagetitle %} {{ entity.courseTitle }}{% endblock %}*/
/* {% block arianne %} {{ entity.discipline }} {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>*/
/* */
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*         <div class="container">*/
/*             <div class="col-lg-9 ">*/
/*                 <div class="blog-item">*/
/*                     <div class="row">*/
/*                         <!--  DATE !-->*/
/*                         <div class="col-lg-2 col-sm-2">*/
/*                             <div class="date-wrap">*/
/*                                 <span class="date">  Rating : {{ entity.rating }} </span>*/
/*                                 <span class="month"> training duration: {{ entity.trainingDurationDays }} Day */
/*                                     {{ entity.trainingDurationHours }} h </span>*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                         {#    IMAGE      #}*/
/*                         <div class="col-lg-10 col-sm-10">*/
/*                             <div class="blog-img">*/
/*                                 <img src="{{ asset('img/Android.jpg') }}" alt=""/>*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-lg-2 col-sm-2 text-right">*/
/* */
/*                             {#auteur#} */
/*                             <div class="author">*/
/*                                 By*/
/*                                 <a href="#">*/
/*                                     {{ entity.idwriter }}*/
/*                                 </a>*/
/* */
/* */
/*                             </div>*/
/*                             {#   information   #}                 */
/*                             <ul class="list-unstyled">*/
/*                                 <li>*/
/*                                     <a href="">*/
/*                                         <em>*/
/*                                             Nombre de chapitre {{ entity.numberofchapters }}*/
/*                                         </em>*/
/*                                     </a>*/
/*                                 </li>*/
/* */
/* */
/*                             </ul>*/
/* */
/* */
/*                             {#Statistique#}*/
/*                             <div class="st-view">*/
/*                                 <ul class="list-unstyled">*/
/* */
/*                                     <li>*/
/*                                         <a href="javascript:;">*/
/*                                             {{ entity.discipline }}*/
/*                                         </a>*/
/*                                     </li>*/
/*                                    */
/*                                     <li>*/
/*                                         <a href="javascript:;">*/
/*                                             views*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="javascript:;">*/
/*                                             Comments*/
/*                                         </a>*/
/*                                     </li>*/
/*                          */
/*                                     <li>*/
/*                                         <a href="{{ path('courses_new') }}">*/
/*                                             new Course*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('courses') }}" class="btn btn-primary">*/
/*                                 Back to the menu*/
/*                             </a>*/
/*                                     </li>*/
/* */
/*                                 </ul>*/
/*                             </div>*/
/* */
/* */
/*                         </div>*/
/*                         <div class="col-lg-10 col-sm-10">*/
/*                             <h2>Objectives</h2>*/
/*                             <p>{{ entity.objectives }}</p>*/
/*                             */
/* */
/* */
/*                             <h1>*/
/*                                 <a href="">*/
/*                                     {{ entity.courseTitle }} */
/*                                 </a>*/
/* */
/*                             </h1>*/
/* {#//////////////////////#}*/
/*  */
/* */
/*                                 */
/*                             {% for article in entities %}*/
/*    */
/*     <h3>{{ article.chaptertitle }}</h3> */
/*     <p>{{ article.chaptercontent }}</p>*/
/*     {%if ((  app.request.get('page') ==chapterCount  )) %}*/
/*          <a href="{{ path('mooc_quizz_pass',{'idChapter': article.idChapter})     }}">*/
/*                                             Passer quizz*/
/*                                         </a>*/
/*     {% else %}*/
/*          <a href="{{ path('mooc_quizznm_pass',{'idChapter': article.idChapter})     }}">*/
/*                                             Passer quizz */
/*                                         </a>*/
/*                                            */
/*     {% endif %}    */
/*      */
/*  */
/* {% endfor %}*/
/*                      <div class="navigation">*/
/*     {{ knp_pagination_render(entities) }}*/
/* </div>       */
/*                             */
/* */
/*  */
/*   */
/* {#//////////////////////////#}*/
/* */
/* <div class="media">*/
/*                                */
/*                                 <div id="fb-root"></div>*/
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
/*                                 */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/* */
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </tbody>*/
/* </table>*/
/* */
/* {#{% include 'FOSCommentBundle:Thread:async.html.twig' with {'id': 'foo'} %}#}*/
/* <ul class="record_actions">*/
/* */
/* */
/* */
/* </ul>*/
/* <div>{{ socialButtons() }}</div>*/
/* {% endblock %}*/
/* */
