<?php

/* MoocCourseBundle:Courses:MyCourses.html.twig */
class __TwigTemplate_1cc57679f5ae58cbbada15950580d86c68843814a0f6a12aad55c2892eb1a9a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocCourseBundle:Courses:MyCourses.html.twig", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        echo "       
    
        <div class=\"component-bg\">
      <div class=\"container\">

        <div class=\"bs-docs-section\">
<div class=\"bs-example\">
     
    ";
        // line 11
        if (((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")) == null)) {
            // line 12
            echo "     sorry you didn't add any Course :) ! 
    ";
        } else {
            // line 14
            echo "    <table class=\"table\">
              <thead>
                <tr>
                  <th>
                    N°
                  </th>
                  <th>
                    statu
                  </th>
                  <th>
                    discipline
                  </th>
                  <th>
                    course_title
                  </th>
                  <th>
                    description
                  </th>
                  
                  <th>
                    objectives  
                  </th>
                  <th>
                    rating
                  </th>
                  <th>
                    About
                  </th>
                   
                  <th>
                    modifier
                  </th>
                  <th>
                    supprimer
                  </th>
                  <th>
                    afficher
                  </th>
                </tr>
              </thead>
              ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["Course"]) {
                // line 55
                echo "                 
              <tbody>
                
                    ";
                // line 58
                if (($this->getAttribute($context["Course"], "validation", array()) == 1)) {
                    echo " 
                    <tr class=\"success\" >
                    ";
                } else {
                    // line 61
                    echo "                    <tr class=\"warning\" >
                    ";
                }
                // line 63
                echo "                   <td>
                     ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "
                  </td>
                    
                    <td>
                        ";
                // line 68
                if (($this->getAttribute($context["Course"], "validation", array()) == 1)) {
                    echo " 
                    valide
                    ";
                } else {
                    // line 71
                    echo "                    non valide
                    ";
                }
                // line 73
                echo "                    </td>
                  
                  <td>
                   ";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["Course"], "discipline", array()), "html", null, true);
                echo "
                  </td>
                  <td>
                   ";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["Course"], "courseTitle", array()), "html", null, true);
                echo "
                  </td>
                 <td>
                    ";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["Course"], "description", array()), "html", null, true);
                echo "
                  </td>
                  
                  <td>
                    ";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["Course"], "objectives", array()), "html", null, true);
                echo " 
                  </td>
                   <td>
                    ";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["Course"], "rating", array()), "html", null, true);
                echo " /5
                  </td>
                  <td>
                    Statistique 
                  </td>
                  
                  <td><a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("courses_edit", array("id" => $this->getAttribute($context["Course"], "idCourse", array()))), "html", null, true);
                echo "\">edit</a></td>
                 <td><a href=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("courses_delete", array("id" => $this->getAttribute($context["Course"], "idCourse", array()))), "html", null, true);
                echo "\">delete</a></td>
                <td>
                      <a href=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("courses_show", array("id" => $this->getAttribute($context["Course"], "idCourse", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\">
                   access 
                </a>
                  </td>
                    
                    </tr>
                  
                 
              
             
            
                
              
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "              </tbody>
              
            </table>
               ";
        }
        // line 116
        echo "          </div>

 </div> </div> </div>
";
    }

    public function getTemplateName()
    {
        return "MoocCourseBundle:Courses:MyCourses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 116,  216 => 112,  188 => 98,  183 => 96,  179 => 95,  170 => 89,  164 => 86,  157 => 82,  151 => 79,  145 => 76,  140 => 73,  136 => 71,  130 => 68,  123 => 64,  120 => 63,  116 => 61,  110 => 58,  105 => 55,  88 => 54,  46 => 14,  42 => 12,  40 => 11,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block body %}       */
/*     */
/*         <div class="component-bg">*/
/*       <div class="container">*/
/* */
/*         <div class="bs-docs-section">*/
/* <div class="bs-example">*/
/*      */
/*     {% if entity == null%}*/
/*      sorry you didn't add any Course :) ! */
/*     {% else   %}*/
/*     <table class="table">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <th>*/
/*                     N°*/
/*                   </th>*/
/*                   <th>*/
/*                     statu*/
/*                   </th>*/
/*                   <th>*/
/*                     discipline*/
/*                   </th>*/
/*                   <th>*/
/*                     course_title*/
/*                   </th>*/
/*                   <th>*/
/*                     description*/
/*                   </th>*/
/*                   */
/*                   <th>*/
/*                     objectives  */
/*                   </th>*/
/*                   <th>*/
/*                     rating*/
/*                   </th>*/
/*                   <th>*/
/*                     About*/
/*                   </th>*/
/*                    */
/*                   <th>*/
/*                     modifier*/
/*                   </th>*/
/*                   <th>*/
/*                     supprimer*/
/*                   </th>*/
/*                   <th>*/
/*                     afficher*/
/*                   </th>*/
/*                 </tr>*/
/*               </thead>*/
/*               {% for Course   in entity %}*/
/*                  */
/*               <tbody>*/
/*                 */
/*                     {% if   Course.validation == 1     %} */
/*                     <tr class="success" >*/
/*                     {% else %}*/
/*                     <tr class="warning" >*/
/*                     {% endif%}*/
/*                    <td>*/
/*                      {{ loop.index }}*/
/*                   </td>*/
/*                     */
/*                     <td>*/
/*                         {% if   Course.validation == 1     %} */
/*                     valide*/
/*                     {% else %}*/
/*                     non valide*/
/*                     {% endif%}*/
/*                     </td>*/
/*                   */
/*                   <td>*/
/*                    {{ Course.discipline }}*/
/*                   </td>*/
/*                   <td>*/
/*                    {{ Course.courseTitle }}*/
/*                   </td>*/
/*                  <td>*/
/*                     {{ Course.description }}*/
/*                   </td>*/
/*                   */
/*                   <td>*/
/*                     {{ Course.objectives }} */
/*                   </td>*/
/*                    <td>*/
/*                     {{ Course.rating }} /5*/
/*                   </td>*/
/*                   <td>*/
/*                     Statistique */
/*                   </td>*/
/*                   */
/*                   <td><a href="{{ path('courses_edit', { 'id': Course.idCourse }) }}">edit</a></td>*/
/*                  <td><a href="{{ path('courses_delete', { 'id': Course.idCourse }) }}">delete</a></td>*/
/*                 <td>*/
/*                       <a href="{{ path('courses_show', { 'id': Course.idCourse }) }}" class="btn btn-primary">*/
/*                    access */
/*                 </a>*/
/*                   </td>*/
/*                     */
/*                     </tr>*/
/*                   */
/*                  */
/*               */
/*              */
/*             */
/*                 */
/*               */
/*                 {% endfor %}*/
/*               </tbody>*/
/*               */
/*             </table>*/
/*                {% endif %}*/
/*           </div>*/
/* */
/*  </div> </div> </div>*/
/* {% endblock %}*/
