<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_df1e2632f0be34aa540ec15c48a64fc97fcb3b6145029a4f87e5120734f8b836 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:Core:dashboard.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("", array(), ""), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.top", array("admin_pool" => (isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")))));
        echo "

    ";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "top", array())) > 0)) {
            // line 21
            echo "        <div class=\"row\">
            
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "top", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 24
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "class", array()), "html", null, true);
                echo "\">
                    ";
                // line 25
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </div>
    ";
        }
        // line 30
        echo "
    <div class=\"row\">
        ";
        // line 32
        $context["has_center"] = false;
        // line 33
        echo "
        <div class=\"";
        // line 34
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center", array())) > 0)) {
            echo "col-md-4";
        } else {
            echo "col-md-6";
        }
        echo "\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "left", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 36
            echo "                ";
            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </div>

        ";
        // line 40
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center", array())) > 0)) {
            // line 41
            echo "            <div class=\"col-md-4\">
                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 43
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </div>
        ";
        }
        // line 47
        echo "
        <div class=\"";
        // line 48
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center", array())) > 0)) {
            echo "col-md-4";
        } else {
            echo "col-md-6";
        }
        echo "\">
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "right", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 50
            echo "                ";
            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </div>
    </div>

    ";
        // line 55
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "bottom", array())) > 0)) {
            // line 56
            echo "        <div class=\"row\">
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "bottom", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 58
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "class", array()), "html", null, true);
                echo "\">
                    ";
                // line 59
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "        </div>
    ";
        }
        // line 64
        echo "


    ";
        // line 67
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.bottom", array("admin_pool" => (isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 67,  191 => 64,  187 => 62,  178 => 59,  173 => 58,  169 => 57,  166 => 56,  164 => 55,  159 => 52,  150 => 50,  146 => 49,  138 => 48,  135 => 47,  131 => 45,  122 => 43,  118 => 42,  115 => 41,  113 => 40,  109 => 38,  100 => 36,  96 => 35,  88 => 34,  85 => 33,  83 => 32,  79 => 30,  75 => 28,  66 => 25,  61 => 24,  57 => 23,  53 => 21,  51 => 20,  46 => 18,  43 => 17,  40 => 16,  35 => 15,  29 => 14,  20 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends base_template %}*/
/* */
/* {% block title %}{{ ''|trans({}, '') }}{% endblock%}*/
/* {% block breadcrumb %}{% endblock %}*/
/* {% block content %}*/
/* */
/*     {{ sonata_block_render_event('sonata.admin.dashboard.top', { 'admin_pool': admin_pool }) }}*/
/* */
/*     {% if blocks.top|length > 0 %}*/
/*         <div class="row">*/
/*             */
/*             {% for block in blocks.top %}*/
/*                 <div class="{{ block.class }}">*/
/*                     {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <div class="row">*/
/*         {% set has_center = false %}*/
/* */
/*         <div class="{% if blocks.center|length > 0 %}col-md-4{% else %}col-md-6{% endif %}">*/
/*             {% for block in blocks.left %}*/
/*                 {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*             {% endfor %}*/
/*         </div>*/
/* */
/*         {% if blocks.center|length > 0 %}*/
/*             <div class="col-md-4">*/
/*                 {% for block in blocks.center %}*/
/*                     {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="{% if blocks.center|length > 0 %}col-md-4{% else %}col-md-6{% endif %}">*/
/*             {% for block in blocks.right %}*/
/*                 {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% if blocks.bottom|length > 0 %}*/
/*         <div class="row">*/
/*             {% for block in blocks.bottom %}*/
/*                 <div class="{{ block.class }}">*/
/*                     {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* */
/* */
/*     {{ sonata_block_render_event('sonata.admin.dashboard.bottom', { 'admin_pool': admin_pool }) }}*/
/* */
/* {% endblock %}*/
/* */
