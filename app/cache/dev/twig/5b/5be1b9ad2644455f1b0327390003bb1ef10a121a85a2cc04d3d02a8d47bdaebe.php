<?php

/* MoocProfilBundle:Home:alluser.html.twig */
class __TwigTemplate_f57b3ddfcacc36ef450798d4e7d1cc8d0fe0e6ac7ad395ff62b30b43c7c63fd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocProfilBundle:Home:alluser.html.twig", 1);
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
        echo " | All users  ";
    }

    // line 4
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "All users";
    }

    // line 5
    public function block_arianne($context, array $blocks = array())
    {
        echo "All users";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
        <div class=\"container\">
            <div class=\"form-wrapper\">

    <div class=\"content-wrapper\">
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          

          <div class=\"box\">

            <!-- /.box-header -->
            <div class=\"box-body\">
              <table id=\"example1\" class=\"table table-bordered table-striped table-hover\">
                <thead>
                <tr>
            <th>Surname</th>
            <th>Name</th>
            <th>Email</th>
            <th>Birth date</th>
            <th>Level</th>
            <th>Type</th>
            <th>Action</th>
                </tr>
                </thead>
                <tbody>

            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 36
            echo "            <tr>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "surname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "birthDate", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "level", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "type", array()), "html", null, true);
            echo "</td>
                <td>
                    
                    <input type=\"button\" value=\"Show Profile\" class=\"btn btn-info\" onclick=\"location.href='";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_profil_otheruser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "'\" />
                    
                    
                </td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            
                </tbody>
                <tfoot>
               <tr>
            <th>Surname</th>
            <th>Name</th>
            <th>Email</th>
            <th>Birth date</th>
            <th>Level</th>
            <th>Type</th>
            <th>Action</th>

                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    </div>
            
        </div>
</div>
    
    
";
    }

    public function getTemplateName()
    {
        return "MoocProfilBundle:Home:alluser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 52,  116 => 45,  110 => 42,  106 => 41,  102 => 40,  98 => 39,  94 => 38,  90 => 37,  87 => 36,  83 => 35,  53 => 7,  50 => 6,  44 => 5,  38 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} | All users  {% endblock %}*/
/* {% block pagetitle %}All users{% endblock %}*/
/* {% block arianne %}All users{% endblock %}*/
/* {% block body %}*/
/* */
/*         <div class="container">*/
/*             <div class="form-wrapper">*/
/* */
/*     <div class="content-wrapper">*/
/*     <section class="content">*/
/*       <div class="row">*/
/*         <div class="col-xs-12">*/
/*           */
/* */
/*           <div class="box">*/
/* */
/*             <!-- /.box-header -->*/
/*             <div class="box-body">*/
/*               <table id="example1" class="table table-bordered table-striped table-hover">*/
/*                 <thead>*/
/*                 <tr>*/
/*             <th>Surname</th>*/
/*             <th>Name</th>*/
/*             <th>Email</th>*/
/*             <th>Birth date</th>*/
/*             <th>Level</th>*/
/*             <th>Type</th>*/
/*             <th>Action</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/* */
/*             {% for user in users %}*/
/*             <tr>*/
/*                 <td>{{ user.surname }}</td>*/
/*                 <td>{{ user.name }}</td>*/
/*                 <td>{{ user.email }}</td>*/
/*                 <td>{{ user.birthDate | date('d/m/Y')}}</td>*/
/*                 <td>{{ user.level }}</td>*/
/*                 <td>{{ user.type }}</td>*/
/*                 <td>*/
/*                     */
/*                     <input type="button" value="Show Profile" class="btn btn-info" onclick="location.href='{{ path("mooc_profil_otheruser", { id : user.id }) }}'" />*/
/*                     */
/*                     */
/*                 </td>*/
/* */
/*             </tr>*/
/*         {% endfor %}*/
/*             */
/*                 </tbody>*/
/*                 <tfoot>*/
/*                <tr>*/
/*             <th>Surname</th>*/
/*             <th>Name</th>*/
/*             <th>Email</th>*/
/*             <th>Birth date</th>*/
/*             <th>Level</th>*/
/*             <th>Type</th>*/
/*             <th>Action</th>*/
/* */
/*                 </tr>*/
/*                 </tfoot>*/
/*               </table>*/
/*             </div>*/
/*             <!-- /.box-body -->*/
/*           </div>*/
/*           <!-- /.box -->*/
/*         </div>*/
/*         <!-- /.col -->*/
/*       </div>*/
/*       <!-- /.row -->*/
/*     </section>*/
/*     </div>*/
/*             */
/*         </div>*/
/* </div>*/
/*     */
/*     */
/* {% endblock %}*/
/* */
