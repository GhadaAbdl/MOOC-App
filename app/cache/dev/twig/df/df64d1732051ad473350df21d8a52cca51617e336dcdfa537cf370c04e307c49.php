<?php

/* MoocCourseBundle:Courses:index.html.twig */
class __TwigTemplate_e43116be521bde5abd6439f91649ba7d8fdb59ee3a37bab3780a7ba74d104b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocCourseBundle:Courses:index.html.twig", 1);
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
        echo "courses ";
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["All"]) ? $context["All"] : $this->getContext($context, "All")), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 8
        if (((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")) == null)) {
            // line 9
            echo "        <p>sorry there is no validated  ";
            echo twig_escape_filter($this->env, (isset($context["All"]) ? $context["All"] : $this->getContext($context, "All")), "html", null, true);
            echo " courses :( </p>
   ";
        } else {
            // line 11
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 12
                echo "            <div class=\"container\">
    <div class=\"col-lg-9 \">
        <div class=\"blog-item\">
            <div class=\"row\">
<!--  DATE !-->
            <div class=\"col-lg-2 col-sm-2\">
                <div class=\"date-wrap\">
                    <span class=\"date\">  Rating : ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "rating", array()), "html", null, true);
                echo " </span>
                    <span class=\"month\"> training duration: ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "trainingDurationDays", array()), "html", null, true);
                echo " Day 
                 ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "trainingDurationHours", array()), "html", null, true);
                echo " h </span>
                </div>
                
            </div>

 ";
                // line 27
                echo "             <div class=\"col-lg-10 col-sm-10\">
                <div class=\"blog-img\">
        ";
                // line 29
                if (($this->getAttribute($context["entity"], "discipline", array()) == "Android")) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Android.jpg"), "html", null, true);
                    echo "\" alt=\"\"/>
        ";
                } elseif (($this->getAttribute(                // line 30
$context["entity"], "discipline", array()) == "IOS")) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/IOS.png"), "html", null, true);
                    echo "\" alt=\"\"/>
        ";
                } elseif ((($this->getAttribute(                // line 31
$context["entity"], "discipline", array()) == "tizen") || ($this->getAttribute($context["entity"], "discipline", array()) == "TIZEN"))) {
                    // line 32
                    echo "                  <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/TIZEN.png"), "html", null, true);
                    echo "\" alt=\"\"/>";
                }
                // line 33
                echo "                </div>

              </div>
            
        </div>
                <div class=\"row\">
                    <div class=\"col-lg-2 col-sm-2 text-right\">
                       
 ";
                // line 41
                echo " 
                        <div class=\"author\">
                             By
                            <a href=\"#\">
                              ";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idwriter", array()), "html", null, true);
                echo "
                            </a>
                            
                            
                        </div>
                            ";
                // line 50
                if ($this->env->getExtension('security')->isGranted("ROLE_PEDAGOGUE")) {
                    // line 51
                    echo "    
    
                         
                              <a href=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("courses_Validation", array("id" => $this->getAttribute($context["entity"], "idCourse", array()))), "html", null, true);
                    echo "\"  >
                  Validate
                </a>
                         ";
                }
                // line 57
                echo "    
                          
                  <div class=\"author\">
                              <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("courses_follow", array("idCourse" => $this->getAttribute($context["entity"], "idCourse", array()), "idUser" => (isset($context["id_user"]) ? $context["id_user"] : $this->getContext($context, "id_user")))), "html", null, true);
                echo "\"  >
                  follow course
                 
                            
                        </div>
 ";
                // line 65
                echo "                 
                       
                        
                    
                        ";
                // line 70
                echo "                         <div class=\"st-view\">
                             <ul class=\"list-unstyled\">
                                
                                 <li>
                                        
                                     ";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "discipline", array()), "html", null, true);
                echo "
                                        
                                    </li>
                                     
                                   <li>
                                        
                                          Comments
                                       
                                      </li>
                                      <li>
            <a href=\"";
                // line 85
                echo $this->env->getExtension('routing')->getPath("courses_new");
                echo "\">
                new Course
            </a>
        </li>
         
                             </ul>
                         </div>
                 <ul class=\"list-unstyled\">
                            <li>
                                  
                                    <em>
                                    there is  ";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numberofchapters", array()), "html", null, true);
                echo " chapter
                                    </em>
                                   
                            </li>
                            
                            
                        </ul>
                    
                    
                </div>
                         <div class=\"col-lg-10 col-sm-10\">
                              <h1>
                  <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("courses_show", array("id" => $this->getAttribute($context["entity"], "idCourse", array()))), "html", null, true);
                echo "\">
                  ";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "courseTitle", array()), "html", null, true);
                echo " 
                  </a>
                                  
                </h1>
                              <p>
                                ";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
                echo "
                </p>
                <h2>Objectives</h2>
                <p>";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "objectives", array()), "html", null, true);
                echo "</p>
                 <a href=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("courses_show", array("id" => $this->getAttribute($context["entity"], "idCourse", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\">
                  Continue Reading
                </a>
                             
                         </div>        
                         
                         
                </div>
                
        </div>
    </div>
    
</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "            ";
        }
        // line 133
        echo "     
 

      
    ";
    }

    public function getTemplateName()
    {
        return "MoocCourseBundle:Courses:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 133,  254 => 132,  234 => 118,  230 => 117,  224 => 114,  216 => 109,  212 => 108,  197 => 96,  183 => 85,  170 => 75,  163 => 70,  157 => 65,  149 => 60,  144 => 57,  137 => 54,  132 => 51,  130 => 50,  122 => 45,  116 => 41,  106 => 33,  101 => 32,  99 => 31,  93 => 30,  87 => 29,  83 => 27,  75 => 21,  71 => 20,  67 => 19,  58 => 12,  53 => 11,  47 => 9,  45 => 8,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block pagetitle %}courses {% endblock %}*/
/* {% block arianne %}{{ All }}{% endblock %}*/
/* {% block body -%}*/
/*      */
/*     */
/*      */
/*     {%if entities == null %}*/
/*         <p>sorry there is no validated  {{ All }} courses :( </p>*/
/*    {%else%}*/
/*         {% for entity in entities %}*/
/*             <div class="container">*/
/*     <div class="col-lg-9 ">*/
/*         <div class="blog-item">*/
/*             <div class="row">*/
/* <!--  DATE !-->*/
/*             <div class="col-lg-2 col-sm-2">*/
/*                 <div class="date-wrap">*/
/*                     <span class="date">  Rating : {{ entity.rating }} </span>*/
/*                     <span class="month"> training duration: {{ entity.trainingDurationDays }} Day */
/*                  {{ entity.trainingDurationHours }} h </span>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/* */
/*  {#    IMAGE      #}*/
/*              <div class="col-lg-10 col-sm-10">*/
/*                 <div class="blog-img">*/
/*         {%if entity.discipline=='Android' %}<img src="{{ asset('img/Android.jpg') }}" alt=""/>*/
/*         {%elseif entity.discipline=='IOS' %}<img src="{{ asset('img/IOS.png') }}" alt=""/>*/
/*         {%elseif entity.discipline=='tizen' or entity.discipline=='TIZEN' %}*/
/*                   <img src="{{ asset('img/TIZEN.png') }}" alt=""/>{%endif%}*/
/*                 </div>*/
/* */
/*               </div>*/
/*             */
/*         </div>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-2 col-sm-2 text-right">*/
/*                        */
/*  {#auteur#} */
/*                         <div class="author">*/
/*                              By*/
/*                             <a href="#">*/
/*                               {{ entity.idwriter }}*/
/*                             </a>*/
/*                             */
/*                             */
/*                         </div>*/
/*                             {% if is_granted("ROLE_PEDAGOGUE") %}*/
/*     */
/*     */
/*                          */
/*                               <a href="{{ path('courses_Validation', { 'id': entity.idCourse }) }}"  >*/
/*                   Validate*/
/*                 </a>*/
/*                          {%endif%}    */
/*                           */
/*                   <div class="author">*/
/*                               <a href="{{ path('courses_follow', { 'idCourse': entity.idCourse ,'idUser':id_user }) }}"  >*/
/*                   follow course*/
/*                  */
/*                             */
/*                         </div>*/
/*  {#   information   #}                 */
/*                        */
/*                         */
/*                     */
/*                         {#Statistique#}*/
/*                          <div class="st-view">*/
/*                              <ul class="list-unstyled">*/
/*                                 */
/*                                  <li>*/
/*                                         */
/*                                      {{ entity.discipline }}*/
/*                                         */
/*                                     </li>*/
/*                                      */
/*                                    <li>*/
/*                                         */
/*                                           Comments*/
/*                                        */
/*                                       </li>*/
/*                                       <li>*/
/*             <a href="{{ path('courses_new') }}">*/
/*                 new Course*/
/*             </a>*/
/*         </li>*/
/*          */
/*                              </ul>*/
/*                          </div>*/
/*                  <ul class="list-unstyled">*/
/*                             <li>*/
/*                                   */
/*                                     <em>*/
/*                                     there is  {{ entity.numberofchapters }} chapter*/
/*                                     </em>*/
/*                                    */
/*                             </li>*/
/*                             */
/*                             */
/*                         </ul>*/
/*                     */
/*                     */
/*                 </div>*/
/*                          <div class="col-lg-10 col-sm-10">*/
/*                               <h1>*/
/*                   <a href="{{ path('courses_show', { 'id': entity.idCourse })}}">*/
/*                   {{ entity.courseTitle }} */
/*                   </a>*/
/*                                   */
/*                 </h1>*/
/*                               <p>*/
/*                                 {{ entity.description }}*/
/*                 </p>*/
/*                 <h2>Objectives</h2>*/
/*                 <p>{{ entity.objectives }}</p>*/
/*                  <a href="{{ path('courses_show', { 'id': entity.idCourse }) }}" class="btn btn-primary">*/
/*                   Continue Reading*/
/*                 </a>*/
/*                              */
/*                          </div>        */
/*                          */
/*                          */
/*                 </div>*/
/*                 */
/*         </div>*/
/*     </div>*/
/*     */
/* </div>*/
/*         {% endfor %}*/
/*             {%endif%}*/
/*      */
/*  */
/* */
/*       */
/*     {% endblock %}*/
/* */
