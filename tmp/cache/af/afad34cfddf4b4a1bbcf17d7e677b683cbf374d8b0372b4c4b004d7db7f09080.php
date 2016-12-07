<?php

/* temp_qanda.tw */
class __TwigTemplate_efe7ba145a85bbd1d70a7167af387b850d2d35292c112cc70aa21534aba853b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Вопроы и ответы</title>
    <!--Import Google Icon Font-->
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
\t<!--Import materialize.css-->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"css/materialize.min.css\"  media=\"screen,projection\"/>
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"css/qanda_user.css\"  media=\"screen,projection\"/>

\t<!--Let browser know website is optimized for mobile-->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
\t<div class=\"wrapper\">
\t\t<header class=\"header\">
\t\t\t<div class=\"row\">
\t\t\t\tCogito ergo sum.
\t\t\t</div>
\t\t</header>
\t\t<section class=\"row\">
\t\t\t<article class=\"col s12 m4\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<form enctype=\"multipart/form-data\" action=\"qanda.php\" method=\"post\">
\t\t\t\t        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoryRows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryRow"]) {
            // line 27
            echo "\t\t\t\t        \t<button class=\"waves-effect btn-flat btn-weight\" type=\"submit\" name=\"action\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoryRow"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t        \t\t";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoryRow"], "title", array()), "html", null, true);
            echo "
\t\t\t\t        \t</button>
\t\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryRow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</article>
\t\t\t<article class=\"col s12 m8\">
\t\t\t";
        // line 35
        if (($context["categoryTitle"] ?? null)) {
            // line 36
            echo "\t\t\t\t<h4>";
            echo twig_escape_filter($this->env, ($context["categoryTitle"] ?? null), "html", null, true);
            echo "</h4>
\t\t\t\t<ul class=\"collapsible no-shadow\" data-collapsible=\"accordion\">
\t\t\t\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 39
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"collapsible-header\">
\t\t\t\t\t\t\t<div class=\"flex-container\">
\t\t\t\t\t\t\t\t<img class=\"flex-element\" src=\"../img/Help-24.png\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"flex-element header-text\">";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "q_text", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t<img id=\"arrow\" class=\"flex-element\" src=\"../img/Arrowhead-Down-16.png\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapsible-body\"><p>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "a_text", array()), "html", null, true);
                echo "</p></div>
\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t\t\t\t  </ul>
\t\t\t";
        }
        // line 52
        echo "\t\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 53
        if (($context["error"] ?? null)) {
            // line 54
            echo "\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t<span class=\"flow-text\">";
            // line 55
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t";
        if (($context["success"] ?? null)) {
            // line 59
            echo "\t\t\t\t\t<div class=\"form-success\">
\t\t\t\t\t\t<span class=\"flow-text\">";
            // line 60
            echo twig_escape_filter($this->env, ($context["success"] ?? null), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t\t<form name=\"form\" class=\"col s12 form-container\" enctype=\"multipart/form-data\" action=\"qanda.php\" method=\"post\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"input-field col s6\">
\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">contacts</i>
\t\t\t\t\t\t\t\t<input id=\"login\" type=\"text\" pattern=\"[a-zA-Z а-яА-Я]*\" class=\"validate\" name=\"q[name]\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["q"] ?? null), "name", array()), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t\t<label for=\"login\">Представтесь</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field col s6\">
\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">email</i>
\t\t\t\t\t\t\t\t<input id=\"email\" type=\"email\" class=\"validate\" name=\"q[email]\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["q"] ?? null), "email", array()), "html", null, true);
        echo "\" required>
          \t\t\t\t\t\t<label for=\"email\" data-error=\"неверный адрес\" data-success=\"ОК\">Эл. почта</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t\t<select id=\"qst\" name=\"q[selectCategory]\">
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Выберите категорию</option>
\t\t\t\t\t\t\t";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoryRows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryRow"]) {
            // line 80
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoryRow"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoryRow"], "title", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryRow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<label>Категория вопроса</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t\t<i class=\"material-icons prefix\">mode_edit</i>
\t\t\t\t\t\t\t<textarea id=\"question\" class=\"materialize-textarea\" pattern=\"[a-zA-Z а-яА-Я]*\" name=\"q[questionText]\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute(($context["q"] ?? null), "questionText", array()), "html", null, true);
        echo "\" required></textarea>
\t\t\t\t\t\t\t<label for=\"question\">Текст вопроса</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s8\"></div>
\t\t\t\t\t\t\t<button id=\"submit\" class=\"waves-effect btn-flat btn-flat-submit col s4\" type=\"submit\" name=\"submit\">
\t\t\t\t        \t\tОтправить
\t\t\t\t        \t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</article>
\t\t</section>

\t\t<footer class=\"row footer\">
\t\t\t<h6 class=\"\">\"Гениальные мысли\" @ 2016</h6>
\t\t</footer>
\t</div>
\t<script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>
  \t<script type=\"text/javascript\" src=\"js/materialize.min.js\"></script>
  \t<script>
    \t\$( document ).ready(function(){
      \t\t\$(\".button-collapse\").sideNav();
      \t\t\$('select').material_select();
      \t\t\$('.collapsible').collapsible({
      \t\t\t// A setting that changes the collapsible behavior to expandable instead of the default accordion style
      \t\t\taccordion: false,
      \t\t\t// Callback for Collapsible open
\t\t\t\tonOpen: function(el) { \$('#arrow').attr('src', '../img/Arrowhead-Up-16.png'); },
\t\t\t\t// Callback for Collapsible close
\t\t\t\tonClose: function(el) { \$('#arrow').attr('src', '../img/Arrowhead-Down-16.png'); }
      \t\t});
      \t\t// если вернулась ошибка обработкиформы вставляем значение введенное ранее в поле textarea
      \t\t\$('#question').val(\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute(($context["q"] ?? null), "questionText", array()), "html", null, true);
        echo "\");
  \t\t\t\$('#question').trigger('autoresize');
      \t});
  \t</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "temp_qanda.tw";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 120,  180 => 87,  173 => 82,  162 => 80,  158 => 79,  148 => 72,  140 => 67,  134 => 63,  128 => 60,  125 => 59,  122 => 58,  116 => 55,  113 => 54,  111 => 53,  108 => 52,  104 => 50,  95 => 47,  88 => 43,  82 => 39,  78 => 38,  72 => 36,  70 => 35,  64 => 31,  55 => 28,  50 => 27,  46 => 26,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "temp_qanda.tw", "E:\\OpenServer\\OpenServer\\domains\\QandA\\templates\\temp_qanda.tw");
    }
}
