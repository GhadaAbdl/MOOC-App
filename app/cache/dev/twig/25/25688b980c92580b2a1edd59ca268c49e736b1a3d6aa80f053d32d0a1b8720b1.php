<?php

/* MoocQuizzBundle:Quizz:passnmquizz.html.twig */
class __TwigTemplate_518f38c34644752f6acb0311877edd9ae69f72b557ea0cd08182683a81edc005 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocQuizzBundle:Quizz:passnmquizz.html.twig", 1);
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
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
            
idUser=";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Quizz"]) ? $context["Quizz"] : $this->getContext($context, "Quizz")), 0, array(), "array"), "idUser", array()), "html", null, true);
        echo ";
        idQuizz=";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Quizz"]) ? $context["Quizz"] : $this->getContext($context, "Quizz")), 0, array(), "array"), "id", array()), "html", null, true);
        echo ";
       var dec= Math.floor((Math.random() * 99) + 10); ;
       var dec2=Math.floor((Math.random() * 99) + 10); ;
        window.location.href = \"http://localhost/pidev_mooc_esprit_symfony/web/app_dev.php/quizz/result/{note}?note=\"+ dec +(result+25)+ dec2;
        }
        

    }
    

</script>
<center> <h1> ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Quizz"]) ? $context["Quizz"] : $this->getContext($context, "Quizz")), 0, array(), "array"), "name", array()), "html", null, true);
        echo "</h1> </center>
    ";
        // line 37
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
            // line 38
            echo "        ";
            $context["x"] = twig_random($this->env, 3);
            // line 39
            echo "        ";
            if (((isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")) == 0)) {
                // line 40
                echo "        <form action=\"\">
             
            Question ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "question", array()), "html", null, true);
                echo " <br>
            
            <input type=\"radio\" id=\"answer";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"question";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "answer", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "answer", array()), "html", null, true);
                echo "   <br>
            <input type=\"radio\" name=\"question";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion", array()), "html", null, true);
                echo "<br>
            <input type=\"radio\" name=\"question";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion2", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion2", array()), "html", null, true);
                echo "<br>
            <input type=\"radio\" name=\"question";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion3", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion3", array()), "html", null, true);
                echo "<br>
        </form>
        
        ";
            } elseif ((            // line 50
(isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")) == 1)) {
                // line 51
                echo "        <form action=\"\">
             
            Question ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "question", array()), "html", null, true);
                echo " <br>
            
            <input type=\"radio\" name=\"question";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion", array()), "html", null, true);
                echo "<br>
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
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion2", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion2", array()), "html", null, true);
                echo "<br>
            <input type=\"radio\" name=\"question";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion3", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion3", array()), "html", null, true);
                echo "<br>
        </form>
       
        ";
            } elseif ((            // line 61
(isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")) == 2)) {
                // line 62
                echo "        <form action=\"\">
             
            Question ";
                // line 64
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
            <input type=\"radio\" name=\"question";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion2", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion2", array()), "html", null, true);
                echo "<br>
            <input type=\"radio\" id=\"answer";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"question";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "answer", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "answer", array()), "html", null, true);
                echo "   <br>
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
(isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")) == 3)) {
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
            <input type=\"radio\" name=\"question";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion3", array()), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzcontent"], "suggestion3", array()), "html", null, true);
                echo "<br>
            <input type=\"radio\" id=\"answer";
                // line 82
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
            // line 85
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
        // line 86
        echo "    



    <button class=\"btn btn-lg btn-login btn-block\" type=\"button\" onclick=\"getResult()\">Submit Quizz !</button>


";
    }

    public function getTemplateName()
    {
        return "MoocQuizzBundle:Quizz:passnmquizz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 86,  292 => 85,  280 => 82,  272 => 81,  264 => 80,  256 => 79,  248 => 76,  244 => 74,  242 => 73,  232 => 70,  222 => 69,  214 => 68,  206 => 67,  198 => 64,  194 => 62,  192 => 61,  182 => 58,  174 => 57,  164 => 56,  156 => 55,  149 => 53,  145 => 51,  143 => 50,  133 => 47,  125 => 46,  117 => 45,  107 => 44,  100 => 42,  96 => 40,  93 => 39,  90 => 38,  73 => 37,  69 => 36,  55 => 25,  51 => 24,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* */
/* */
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
/* idUser={{ Quizz[0].idUser }};*/
/*         idQuizz={{ Quizz[0].id }};*/
/*        var dec= Math.floor((Math.random() * 99) + 10); ;*/
/*        var dec2=Math.floor((Math.random() * 99) + 10); ;*/
/*         window.location.href = "http://localhost/pidev_mooc_esprit_symfony/web/app_dev.php/quizz/result/{note}?note="+ dec +(result+25)+ dec2;*/
/*         }*/
/*         */
/* */
/*     }*/
/*     */
/* */
/* </script>*/
/* <center> <h1> {{ Quizz[0].name }}</h1> </center>*/
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
/* */
