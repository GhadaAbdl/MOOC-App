<?php

/* MoocQuizzBundle:Quizz:passquizz.html.twig */
class __TwigTemplate_d9a66a927df828cdb51aba666ad3f7df3cfc472ad256cb5325924191c579a741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocQuizzBundle:Quizz:passquizz.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<script>
    function getResult() {
        var j = 1;
        var result = 0;
        for (j; j < 16; j++) {
            var rates = document.getElementsByName('question' + j);
            var rate_value;
            for (var i = 0; i < rates.length; i++) {
                if (rates[i].checked) {
                    rate_value = rates[i].value;
                    if (rate_value == document.getElementById(\"answer\" + j).value)
                    {
                        result++;
                    }
                }

            }
            

        }
        idUser=";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Quizz"]) ? $context["Quizz"] : $this->getContext($context, "Quizz")), 0, array(), "array"), "idUser", array()), "html", null, true);
        echo ";
        idQuizz=";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Quizz"]) ? $context["Quizz"] : $this->getContext($context, "Quizz")), 0, array(), "array"), "id", array()), "html", null, true);
        echo ";
       
        window.location.href = \"http://localhost/pidev_mooc_esprit_symfony/web/app_dev.php/quizz/certification/{note}/{idQuizz}?note=\"+result+\"&idQuizz=\"+idQuizz;
        
    }
    function countDown(secs, elem) {
        var element = document.getElementById(elem);
        element.innerHTML = \"You have \" + secs + \" seconds left !\";
        if (secs < 1) {
            clearTimeout(timer);
            secs = 1;
            getResult();
        }
        secs--;
        ﻿
                var timer = setTimeout('countDown(' + secs + ',\"' + elem + '\")', 1000);
    }

</script>



    <div id=\"status\"></div>
    <center> <h1> ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Quizz"]) ? $context["Quizz"] : $this->getContext($context, "Quizz")), 0, array(), "array"), "name", array()), "html", null, true);
        echo "</h1> </center>
    <script>countDown('";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Quizz"]) ? $context["Quizz"] : $this->getContext($context, "Quizz")), 0, array(), "array"), "duration", array()), "html", null, true);
        echo "' * 60, \"status\");</script>
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeQuizz"]) ? $context["listeQuizz"] : $this->getContext($context, "listeQuizz")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["quizzcontent"]) {
            // line 50
            echo "        ";
            $context["x"] = twig_random($this->env, 3);
            // line 51
            echo "        ";
            if (((isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")) == 0)) {
                // line 52
                echo "        <form action=\"\">
             
            Question ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "question", array()), "html", null, true);
                echo " <br>
            
            <input type=\"radio\" id=\"answer";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"question";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "answer", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "answer", array()), "html", null, true);
                echo "   <br>
            <input type=\"radio\" name=\"question";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion", array()), "html", null, true);
                echo "<br>
            <input type=\"radio\" name=\"question";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion2", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion2", array()), "html", null, true);
                echo "<br>
            <input type=\"radio\" name=\"question";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion3", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion3", array()), "html", null, true);
                echo "<br>
        </form>
        
        ";
            } elseif ((            // line 62
(isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")) == 1)) {
                // line 63
                echo "        <form action=\"\">
             
            Question ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "question", array()), "html", null, true);
                echo " <br>
            
            <input type=\"radio\" name=\"question";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion", array()), "html", null, true);
                echo "<br>
            <input type=\"radio\" id=\"answer";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"question";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "answer", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "answer", array()), "html", null, true);
                echo "   <br>
            <input type=\"radio\" name=\"question";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion2", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion2", array()), "html", null, true);
                echo "<br>
            <input type=\"radio\" name=\"question";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion3", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion3", array()), "html", null, true);
                echo "<br>
        </form>
       
        ";
            } elseif ((            // line 73
(isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")) == 2)) {
                // line 74
                echo "        <form action=\"\">
             
            Question ";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "question", array()), "html", null, true);
                echo " <br>
            
            
            <input type=\"radio\" name=\"question";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion", array()), "html", null, true);
                echo "<br>
            <input type=\"radio\" name=\"question";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion2", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion2", array()), "html", null, true);
                echo "<br>
            <input type=\"radio\" id=\"answer";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"question";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "answer", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "answer", array()), "html", null, true);
                echo "   <br>
            <input type=\"radio\" name=\"question";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion3", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion3", array()), "html", null, true);
                echo "<br>
        </form>
        
        ";
            } elseif ((            // line 85
(isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")) == 3)) {
                // line 86
                echo "        <form action=\"\">
             
            Question ";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "question", array()), "html", null, true);
                echo " <br>
            
            
            <input type=\"radio\" name=\"question";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion", array()), "html", null, true);
                echo "<br>
            <input type=\"radio\" name=\"question";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion2", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion2", array()), "html", null, true);
                echo "<br>
            <input type=\"radio\" name=\"question";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion3", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion3", array()), "html", null, true);
                echo "<br>
            <input type=\"radio\" id=\"answer";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"question";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "answer", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "answer", array()), "html", null, true);
                echo "   <br>
        </form>
        ";
            }
            // line 97
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quizzcontent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    



    <button class=\"btn btn-lg btn-login btn-block\" type=\"button\" onclick=\"getResult()\">Submit Quizz !</button>


";
    }

    public function getTemplateName()
    {
        return "MoocQuizzBundle:Quizz:passquizz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 98,  310 => 97,  298 => 94,  290 => 93,  282 => 92,  274 => 91,  266 => 88,  262 => 86,  260 => 85,  250 => 82,  240 => 81,  232 => 80,  224 => 79,  216 => 76,  212 => 74,  210 => 73,  200 => 70,  192 => 69,  182 => 68,  174 => 67,  167 => 65,  163 => 63,  161 => 62,  151 => 59,  143 => 58,  135 => 57,  125 => 56,  118 => 54,  114 => 52,  111 => 51,  108 => 50,  91 => 49,  87 => 48,  83 => 47,  57 => 24,  53 => 23,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* <script>*/
/*     function getResult() {*/
/*         var j = 1;*/
/*         var result = 0;*/
/*         for (j; j < 16; j++) {*/
/*             var rates = document.getElementsByName('question' + j);*/
/*             var rate_value;*/
/*             for (var i = 0; i < rates.length; i++) {*/
/*                 if (rates[i].checked) {*/
/*                     rate_value = rates[i].value;*/
/*                     if (rate_value == document.getElementById("answer" + j).value)*/
/*                     {*/
/*                         result++;*/
/*                     }*/
/*                 }*/
/* */
/*             }*/
/*             */
/* */
/*         }*/
/*         idUser={{ Quizz[0].idUser }};*/
/*         idQuizz={{ Quizz[0].id }};*/
/*        */
/*         window.location.href = "http://localhost/pidev_mooc_esprit_symfony/web/app_dev.php/quizz/certification/{note}/{idQuizz}?note="+result+"&idQuizz="+idQuizz;*/
/*         */
/*     }*/
/*     function countDown(secs, elem) {*/
/*         var element = document.getElementById(elem);*/
/*         element.innerHTML = "You have " + secs + " seconds left !";*/
/*         if (secs < 1) {*/
/*             clearTimeout(timer);*/
/*             secs = 1;*/
/*             getResult();*/
/*         }*/
/*         secs--;*/
/*         ﻿*/
/*                 var timer = setTimeout('countDown(' + secs + ',"' + elem + '")', 1000);*/
/*     }*/
/* */
/* </script>*/
/* */
/* */
/* */
/*     <div id="status"></div>*/
/*     <center> <h1> {{ Quizz[0].name }}</h1> </center>*/
/*     <script>countDown('{{ Quizz[0].duration }}' * 60, "status");</script>*/
/*     {% for quizzcontent in listeQuizz %}*/
/*         {% set x= random(3) %}*/
/*         {% if x==0  %}*/
/*         <form action="">*/
/*              */
/*             Question {{loop.index}}: {{quizzcontent.question}} <br>*/
/*             */
/*             <input type="radio" id="answer{{loop.index}}" name="question{{loop.index}}" value={{ quizzcontent.answer }}> {{ quizzcontent.answer }}   <br>*/
/*             <input type="radio" name="question{{loop.index}}" value={{ quizzcontent.suggestion }}> {{ quizzcontent.suggestion }}<br>*/
/*             <input type="radio" name="question{{loop.index}}" value={{ quizzcontent.suggestion2 }}> {{ quizzcontent.suggestion2 }}<br>*/
/*             <input type="radio" name="question{{loop.index}}" value={{ quizzcontent.suggestion3 }}> {{ quizzcontent.suggestion3 }}<br>*/
/*         </form>*/
/*         */
/*         {% elseif x==1  %}*/
/*         <form action="">*/
/*              */
/*             Question {{loop.index}}: {{quizzcontent.question}} <br>*/
/*             */
/*             <input type="radio" name="question{{loop.index}}" value={{ quizzcontent.suggestion }}> {{ quizzcontent.suggestion }}<br>*/
/*             <input type="radio" id="answer{{loop.index}}" name="question{{loop.index}}" value={{ quizzcontent.answer }}> {{ quizzcontent.answer }}   <br>*/
/*             <input type="radio" name="question{{loop.index}}" value={{ quizzcontent.suggestion2 }}> {{ quizzcontent.suggestion2 }}<br>*/
/*             <input type="radio" name="question{{loop.index}}" value={{ quizzcontent.suggestion3 }}> {{ quizzcontent.suggestion3 }}<br>*/
/*         </form>*/
/*        */
/*         {% elseif x==2  %}*/
/*         <form action="">*/
/*              */
/*             Question {{loop.index}}: {{quizzcontent.question}} <br>*/
/*             */
/*             */
/*             <input type="radio" name="question{{loop.index}}" value={{ quizzcontent.suggestion }}> {{ quizzcontent.suggestion }}<br>*/
/*             <input type="radio" name="question{{loop.index}}" value={{ quizzcontent.suggestion2 }}> {{ quizzcontent.suggestion2 }}<br>*/
/*             <input type="radio" id="answer{{loop.index}}" name="question{{loop.index}}" value={{ quizzcontent.answer }}> {{ quizzcontent.answer }}   <br>*/
/*             <input type="radio" name="question{{loop.index}}" value={{ quizzcontent.suggestion3 }}> {{ quizzcontent.suggestion3 }}<br>*/
/*         </form>*/
/*         */
/*         {% elseif x==3  %}*/
/*         <form action="">*/
/*              */
/*             Question {{loop.index}}: {{quizzcontent.question}} <br>*/
/*             */
/*             */
/*             <input type="radio" name="question{{loop.index}}" value={{ quizzcontent.suggestion }}> {{ quizzcontent.suggestion }}<br>*/
/*             <input type="radio" name="question{{loop.index}}" value={{ quizzcontent.suggestion2 }}> {{ quizzcontent.suggestion2 }}<br>*/
/*             <input type="radio" name="question{{loop.index}}" value={{ quizzcontent.suggestion3 }}> {{ quizzcontent.suggestion3 }}<br>*/
/*             <input type="radio" id="answer{{loop.index}}" name="question{{loop.index}}" value={{ quizzcontent.answer }}> {{ quizzcontent.answer }}   <br>*/
/*         </form>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*     */
/* */
/* */
/* */
/*     <button class="btn btn-lg btn-login btn-block" type="button" onclick="getResult()">Submit Quizz !</button>*/
/* */
/* */
/* {% endblock %}*/
/* */
