<?php

/* PiBundle:Users:Acceuil.html.twig */
class __TwigTemplate_e1f8fd43b6bc2d0d0d82cd1377ec78b010ce344ff36531f0e880fb5c1347468d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PiBundle:Users:Acceuil.html.twig", 1);
        $this->blocks = array(
            'nbrnotif' => array($this, 'block_nbrnotif'),
            'profile' => array($this, 'block_profile'),
            'users' => array($this, 'block_users'),
            'dashboard' => array($this, 'block_dashboard'),
            'nombreuser' => array($this, 'block_nombreuser'),
            'nombrecours' => array($this, 'block_nombrecours'),
            'body' => array($this, 'block_body'),
            'foter' => array($this, 'block_foter'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_nbrnotif($context, array $blocks = array())
    {
        // line 3
        echo "    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-envelope\"></i>
        <span class=\"label label-success\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["nbrorg"]) ? $context["nbrorg"] : $this->getContext($context, "nbrorg")), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">You have ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["nbrorg"]) ? $context["nbrorg"] : $this->getContext($context, "nbrorg")), "html", null, true);
        echo " Notification</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                ";
        // line 12
        $this->displayBlock('profile', $context, $blocks);
        // line 31
        echo "                ";
        $this->displayBlock('users', $context, $blocks);
        // line 32
        echo "                    ";
        $this->displayBlock('dashboard', $context, $blocks);
        // line 33
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ong"]) {
            // line 34
            echo "                            <li>


                                <div class=\"task-checkbox\">
                                    <!-- <input type=\"checkbox\" class=\"list-child\" value=\"\"  /> -->
                                    <input type=\"checkbox\" class=\"flat-grey list-child\"/>
                                    <!-- <input type=\"checkbox\" class=\"square-grey\"/> -->
                                </div>
                                <div class=\"task-title\">
                                    <span class=\"task-title-sp\"> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["ong"], "name", array()), "html", null, true);
            echo "</span>
                                    ";
            // line 44
            if (($this->getAttribute($context["ong"], "enabled", array()) == 3)) {
                echo "<span class=\"label label-success\">  Première vérification</span> <div class=\"pull-right hidden-phone\">
                                            <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajout_organisme", array("id" => $this->getAttribute($context["ong"], "idUser", array()))), "html", null, true);
                echo "\" ><button class=\"btn btn-default btn-xs\" ><i class=\"fa fa-check\"></i></button></a> 
                                            <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pi_users_edit", array("id" => $this->getAttribute($context["ong"], "idUser", array()))), "html", null, true);
                echo "\" ><button class=\"btn btn-default btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                                            <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pi_users_delete", array("id" => $this->getAttribute($context["ong"], "idUser", array()))), "html", null, true);
                echo "\"> <button class=\"btn btn-default btn-xs\"><i class=\"fa fa-times\"></i></button></a>
                                        ";
            } elseif ((($this->getAttribute(            // line 48
$context["ong"], "enabled", array()) == 2) || ($this->getAttribute($context["ong"], "enabled", array()) == 0))) {
                echo " <span class=\"label label-warning\"> Validation finale</span> <div class=\"pull-right hidden-phone\">



                                                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajout_organisme", array("id" => $this->getAttribute($context["ong"], "idUser", array()))), "html", null, true);
                echo "\" ><button class=\"btn btn-default btn-xs\" ><i class=\"fa fa-check\"></i></button></a>
                                                <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pi_users_edit", array("id" => $this->getAttribute($context["ong"], "idUser", array()))), "html", null, true);
                echo "\"> <button class=\"btn btn-default btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                                                <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pi_users_delete", array("id" => $this->getAttribute($context["ong"], "idUser", array()))), "html", null, true);
                echo "\"> <button class=\"btn btn-default btn-xs\"><i class=\"fa fa-times\"></i></button></a>
                                            ";
            } elseif (($this->getAttribute(            // line 55
$context["ong"], "enabled", array()) == 1)) {
                echo " <span class=\"label label-danger\">Done</span><div class=\"pull-right hidden-phone\">
                                                <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pi_users_edit", array("id" => $this->getAttribute($context["ong"], "idUser", array()))), "html", null, true);
                echo "\"> <button class=\"btn btn-default btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                                                <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pi_users_delete", array("id" => $this->getAttribute($context["ong"], "idUser", array()))), "html", null, true);
                echo "\"> <button class=\"btn btn-default btn-xs\"><i class=\"fa fa-times\"></i></button></a>
                                                    ";
            }
            // line 58
            echo " 


                                        </div>
                                        </li>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ong'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                </ul>
                                </li>

                                
                                </ul>
                            ";
    }

    // line 12
    public function block_profile($context, array $blocks = array())
    {
        // line 13
        echo "                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-user\"></i>
                            <span>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo " <i class=\"caret\"></i></span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-custom dropdown-menu-right\">
                            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("profil_organisme", array("surname" => "admin"));
        echo "\">   <li class=\"dropdown-header text-center\">Account</li></a>



                            <li class=\"divider\"></li>

                            <li>
                                <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-ban fa-fw pull-right\"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                ";
    }

    // line 31
    public function block_users($context, array $blocks = array())
    {
        echo " <a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_user_liste");
        echo "\"> ";
    }

    // line 32
    public function block_dashboard($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"> ";
    }

    // line 70
    public function block_nombreuser($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")), "html", null, true);
    }

    // line 71
    public function block_nombrecours($context, array $blocks = array())
    {
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        // line 73
        echo "

                            <section class=\"panel tasks-widget\">
                                <header class=\"panel-heading\">
                                    Organisme En Attente 
                                </header>
                                <div class=\"panel-body\">

                                    <div class=\"task-content\">

                                        <ul class=\"task-list\">
                                            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ong"]) {
            // line 85
            echo "                                                <li>
                                                    <div class=\"task-checkbox\">
                                                        <!-- <input type=\"checkbox\" class=\"list-child\" value=\"\"  /> -->
                                                        <input type=\"checkbox\" class=\"flat-grey list-child\"/>
                                                        <!-- <input type=\"checkbox\" class=\"square-grey\"/> -->
                                                    </div>
                                                    <div class=\"task-title\">
                                                        <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil_organisme", array("surname" => $this->getAttribute($context["ong"], "surname", array()))), "html", null, true);
            echo "\">  <span class=\"task-title-sp\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ong"], "name", array()), "html", null, true);
            echo "</span></a>
                                                        ";
            // line 93
            if (($this->getAttribute($context["ong"], "enabled", array()) == 3)) {
                echo "<span class=\"label label-success\">  Première vérification</span> <div class=\"pull-right hidden-phone\">
                                                                <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajout_organisme", array("id" => $this->getAttribute($context["ong"], "idUser", array()))), "html", null, true);
                echo "\" ><button class=\"btn btn-default btn-xs\" ><i class=\"fa fa-check\"></i></button></a> 
                                                                <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pi_users_edit", array("id" => $this->getAttribute($context["ong"], "idUser", array()))), "html", null, true);
                echo "\" ><button class=\"btn btn-default btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                                                                <a href=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pi_users_delete", array("id" => $this->getAttribute($context["ong"], "idUser", array()))), "html", null, true);
                echo "\"> <button class=\"btn btn-default btn-xs\"><i class=\"fa fa-times\"></i></button></a>
                                                            ";
            } elseif ((($this->getAttribute(            // line 97
$context["ong"], "enabled", array()) == 2) || ($this->getAttribute($context["ong"], "enabled", array()) == 0))) {
                echo " <span class=\"label label-warning\"> Validation finale</span> <div class=\"pull-right hidden-phone\">



                                                                    <a href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajout_organisme", array("id" => $this->getAttribute($context["ong"], "idUser", array()))), "html", null, true);
                echo "\" ><button class=\"btn btn-default btn-xs\" ><i class=\"fa fa-check\"></i></button></a>
                                                                    <a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pi_users_edit", array("id" => $this->getAttribute($context["ong"], "idUser", array()))), "html", null, true);
                echo "\"> <button class=\"btn btn-default btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                                                                    <a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pi_users_delete", array("id" => $this->getAttribute($context["ong"], "idUser", array()))), "html", null, true);
                echo "\"> <button class=\"btn btn-default btn-xs\"><i class=\"fa fa-times\"></i></button></a>
                                                                ";
            } elseif (($this->getAttribute(            // line 104
$context["ong"], "enabled", array()) == 1)) {
                echo " <span class=\"label label-danger\">Done</span> <div class=\"pull-right hidden-phone\">

                                                                    <a href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pi_users_edit", array("id" => $this->getAttribute($context["ong"], "idUser", array()))), "html", null, true);
                echo "\"> <button class=\"btn btn-default btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                                                                    <a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pi_users_delete", array("id" => $this->getAttribute($context["ong"], "idUser", array()))), "html", null, true);
                echo "\"> <button class=\"btn btn-default btn-xs\"><i class=\"fa fa-times\"></i></button></a>
                                                                        ";
            }
            // line 108
            echo " 


                                                            </div>
                                                            </li>
                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 114
            echo "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ong'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "


                                                        </ul>
                                                    </div>


                                                </div>
                                                </section>
                                                <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

                                                <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
                                                <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
                                                <script type=\"text/javascript\">
                                                    ";
        // line 129
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
                                                </script>

                                                <div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
                                                <script src='";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mvp/js/jquery-2.1.4.js"), "html", null, true);
        echo "' type=\"text/javascript\"></script>
                                                <script src='";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mvp/js/highcharts.js"), "html", null, true);
        echo "' type=\"text/javascript\"></script>
                                                <script src='";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mvp/js/exporting.js"), "html", null, true);
        echo "' type=\"text/javascript\"></script>

                                                <script type=\"text/javascript\">
                                                    ";
        // line 138
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["pie"]) ? $context["pie"] : $this->getContext($context, "pie")));
        echo "
                                                </script>

                                                <div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"> </div>
                                            ";
    }

    // line 143
    public function block_foter($context, array $blocks = array())
    {
        // line 144
        echo "<div class=\"bg-lg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 recent\">
                    <h3 class=\"recent-work\">
                        Recent Courses
                    </h3>
                    <p>Some of our courses published earlier</p>

                    <div id=\"owl-demo\" class=\"owl-carousel owl-theme wow fadeIn\">
                        ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cour"]) ? $context["cour"] : $this->getContext($context, "cour")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 155
            echo "                            <div class=\"item view view-tenth\">
                                <img src=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolios/card/2.jpg"), "html", null, true);
            echo "\" alt=\"work Image\">
                                <div class=\"mask\">
                                    <h3>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "courseTitle", array()), "html", null, true);
            echo "</h3>
                                    <a  href=\"";
            // line 159
            echo $this->env->getExtension('routing')->getPath("courses");
            echo "\" class=\"info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Details\">
                                        <i class=\"fa fa-link\">
                                        </i>
                                    </a>
                                </div>

                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                    </div>


                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PiBundle:Users:Acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 167,  393 => 159,  389 => 158,  384 => 156,  381 => 155,  377 => 154,  365 => 144,  362 => 143,  353 => 138,  347 => 135,  343 => 134,  339 => 133,  332 => 129,  316 => 115,  310 => 114,  300 => 108,  295 => 107,  291 => 106,  286 => 104,  282 => 103,  278 => 102,  274 => 101,  267 => 97,  263 => 96,  259 => 95,  255 => 94,  251 => 93,  245 => 92,  236 => 85,  231 => 84,  218 => 73,  215 => 72,  210 => 71,  204 => 70,  196 => 32,  188 => 31,  179 => 26,  169 => 19,  163 => 16,  158 => 13,  155 => 12,  146 => 64,  132 => 58,  127 => 57,  123 => 56,  119 => 55,  115 => 54,  111 => 53,  107 => 52,  100 => 48,  96 => 47,  92 => 46,  88 => 45,  84 => 44,  80 => 43,  69 => 34,  63 => 33,  60 => 32,  57 => 31,  55 => 12,  48 => 8,  42 => 5,  38 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block nbrnotif %}*/
/*     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*         <i class="fa fa-envelope"></i>*/
/*         <span class="label label-success">{{ nbrorg}}</span>*/
/*     </a>*/
/*     <ul class="dropdown-menu">*/
/*         <li class="header">You have {{ nbrorg}} Notification</li>*/
/*         <li>*/
/*             <!-- inner menu: contains the actual data -->*/
/*             <ul class="menu">*/
/*                 {% block profile %}*/
/*                     <li class="dropdown user user-menu">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                             <i class="fa fa-user"></i>*/
/*                             <span>{{user}} <i class="caret"></i></span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu dropdown-custom dropdown-menu-right">*/
/*                             <a href="{{path('profil_organisme', {'surname':'admin'})}}">   <li class="dropdown-header text-center">Account</li></a>*/
/* */
/* */
/* */
/*                             <li class="divider"></li>*/
/* */
/*                             <li>*/
/*                                 <a href="{{ path('fos_user_security_logout') }}"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 {%endblock%}*/
/*                 {% block users %} <a href="{{path('admin_user_liste')}}"> {% endblock%}*/
/*                     {% block dashboard %}<a href="{{path('accueil')}}"> {% endblock%}*/
/*                         {% for ong in liste %}*/
/*                             <li>*/
/* */
/* */
/*                                 <div class="task-checkbox">*/
/*                                     <!-- <input type="checkbox" class="list-child" value=""  /> -->*/
/*                                     <input type="checkbox" class="flat-grey list-child"/>*/
/*                                     <!-- <input type="checkbox" class="square-grey"/> -->*/
/*                                 </div>*/
/*                                 <div class="task-title">*/
/*                                     <span class="task-title-sp"> {{ong.name}}</span>*/
/*                                     {% if ong.enabled == 3 %}<span class="label label-success">  Première vérification</span> <div class="pull-right hidden-phone">*/
/*                                             <a href="{{path('ajout_organisme', {'id':ong.idUser})}}" ><button class="btn btn-default btn-xs" ><i class="fa fa-check"></i></button></a> */
/*                                             <a href="{{path('admin_pi_users_edit', {'id':ong.idUser})}}" ><button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button></a>*/
/*                                             <a href="{{path('admin_pi_users_delete', {'id':ong.idUser})}}"> <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button></a>*/
/*                                         {% elseif ong.enabled == 2 or ong.enabled == 0 %} <span class="label label-warning"> Validation finale</span> <div class="pull-right hidden-phone">*/
/* */
/* */
/* */
/*                                                 <a href="{{path('ajout_organisme', {'id':ong.idUser})}}" ><button class="btn btn-default btn-xs" ><i class="fa fa-check"></i></button></a>*/
/*                                                 <a href="{{path('admin_pi_users_edit', {'id':ong.idUser})}}"> <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button></a>*/
/*                                                 <a href="{{path('admin_pi_users_delete', {'id':ong.idUser})}}"> <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button></a>*/
/*                                             {% elseif ong.enabled == 1 %} <span class="label label-danger">Done</span><div class="pull-right hidden-phone">*/
/*                                                 <a href="{{path('admin_pi_users_edit', {'id':ong.idUser})}}"> <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button></a>*/
/*                                                 <a href="{{path('admin_pi_users_delete', {'id':ong.idUser})}}"> <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button></a>*/
/*                                                     {%endif%} */
/* */
/* */
/*                                         </div>*/
/*                                         </li>*/
/*                                 {% else %}{%endfor%}*/
/*                                 </ul>*/
/*                                 </li>*/
/* */
/*                                 */
/*                                 </ul>*/
/*                             {% endblock%}*/
/*                             {% block nombreuser %}{{nbr}}{% endblock%}*/
/*                         {% block nombrecours %}{% endblock%}*/
/*                         {% block body %}*/
/* */
/* */
/*                             <section class="panel tasks-widget">*/
/*                                 <header class="panel-heading">*/
/*                                     Organisme En Attente */
/*                                 </header>*/
/*                                 <div class="panel-body">*/
/* */
/*                                     <div class="task-content">*/
/* */
/*                                         <ul class="task-list">*/
/*                                             {% for ong in liste %}*/
/*                                                 <li>*/
/*                                                     <div class="task-checkbox">*/
/*                                                         <!-- <input type="checkbox" class="list-child" value=""  /> -->*/
/*                                                         <input type="checkbox" class="flat-grey list-child"/>*/
/*                                                         <!-- <input type="checkbox" class="square-grey"/> -->*/
/*                                                     </div>*/
/*                                                     <div class="task-title">*/
/*                                                         <a href="{{path('profil_organisme', {'surname':ong.surname})}}">  <span class="task-title-sp"> {{ong.name}}</span></a>*/
/*                                                         {% if ong.enabled == 3 %}<span class="label label-success">  Première vérification</span> <div class="pull-right hidden-phone">*/
/*                                                                 <a href="{{path('ajout_organisme', {'id':ong.idUser})}}" ><button class="btn btn-default btn-xs" ><i class="fa fa-check"></i></button></a> */
/*                                                                 <a href="{{path('admin_pi_users_edit', {'id':ong.idUser})}}" ><button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button></a>*/
/*                                                                 <a href="{{path('admin_pi_users_delete', {'id':ong.idUser})}}"> <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button></a>*/
/*                                                             {% elseif ong.enabled == 2 or ong.enabled == 0 %} <span class="label label-warning"> Validation finale</span> <div class="pull-right hidden-phone">*/
/* */
/* */
/* */
/*                                                                     <a href="{{path('ajout_organisme', {'id':ong.idUser})}}" ><button class="btn btn-default btn-xs" ><i class="fa fa-check"></i></button></a>*/
/*                                                                     <a href="{{path('admin_pi_users_edit', {'id':ong.idUser})}}"> <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button></a>*/
/*                                                                     <a href="{{path('admin_pi_users_delete', {'id':ong.idUser})}}"> <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button></a>*/
/*                                                                 {% elseif ong.enabled == 1 %} <span class="label label-danger">Done</span> <div class="pull-right hidden-phone">*/
/* */
/*                                                                     <a href="{{path('admin_pi_users_edit', {'id':ong.idUser})}}"> <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button></a>*/
/*                                                                     <a href="{{path('admin_pi_users_delete', {'id':ong.idUser})}}"> <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button></a>*/
/*                                                                         {%endif%} */
/* */
/* */
/*                                                             </div>*/
/*                                                             </li>*/
/*                                                         {% else %}*/
/*                                                         {% endfor%}*/
/* */
/* */
/* */
/*                                                         </ul>*/
/*                                                     </div>*/
/* */
/* */
/*                                                 </div>*/
/*                                                 </section>*/
/*                                                 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/* */
/*                                                 <script src="//code.highcharts.com/4.1.8/highcharts.js"></script>*/
/*                                                 <script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>*/
/*                                                 <script type="text/javascript">*/
/*                                                     {{ chart(chart) }}*/
/*                                                 </script>*/
/* */
/*                                                 <div id="linechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/*                                                 <script src='{{ asset('bundles/mvp/js/jquery-2.1.4.js') }}' type="text/javascript"></script>*/
/*                                                 <script src='{{ asset('bundles/mvp/js/highcharts.js') }}' type="text/javascript"></script>*/
/*                                                 <script src='{{ asset('bundles/mvp/js/exporting.js') }}' type="text/javascript"></script>*/
/* */
/*                                                 <script type="text/javascript">*/
/*                                                     {{ chart(pie) }}*/
/*                                                 </script>*/
/* */
/*                                                 <div id="piechart" style="min-width: 400px; height: 400px; margin: 0 auto"> </div>*/
/*                                             {% endblock %}*/
/* {% block foter %}*/
/* <div class="bg-lg">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 recent">*/
/*                     <h3 class="recent-work">*/
/*                         Recent Courses*/
/*                     </h3>*/
/*                     <p>Some of our courses published earlier</p>*/
/* */
/*                     <div id="owl-demo" class="owl-carousel owl-theme wow fadeIn">*/
/*                         {% for c in cour %}*/
/*                             <div class="item view view-tenth">*/
/*                                 <img src="{{ asset ('img/portfolios/card/2.jpg')}}" alt="work Image">*/
/*                                 <div class="mask">*/
/*                                     <h3>{{c.courseTitle}}</h3>*/
/*                                     <a  href="{{path('courses')}}" class="info" data-toggle="tooltip" data-placement="top" title="Details">*/
/*                                         <i class="fa fa-link">*/
/*                                         </i>*/
/*                                     </a>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         {% endfor  %}*/
/*                     </div>*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {%endblock%}*/
