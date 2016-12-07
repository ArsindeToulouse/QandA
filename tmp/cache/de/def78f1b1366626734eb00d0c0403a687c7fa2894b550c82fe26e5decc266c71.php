<?php

/* temp_admin.tw */
class __TwigTemplate_5f3ab2c88d4575d32d2283ffb283468657ab0757546f014b210cda79830a3270 extends Twig_Template
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
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"css/qanda.css\"  media=\"screen,projection\"/>

\t<!--Let browser know website is optimized for mobile-->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
\t<div class=\"wrapper\">
\t\t<!-- верхний колонтитул -->
\t\t<header class=\"row header\">
\t\t\t<div class=\"logo\">Вопросы и ответы...</div>
\t\t</header>
\t\t<section id=\"content\" class=\"content\">
    ";
        // line 22
        if (($context["addForm"] ?? null)) {
            // line 23
            echo "    <form enctype=\"multipart/form-data\" action=\"admin.php?page=admin\" method=\"post\">
      <div class=\"row form-container\">
        <div class=\"input-field col s2\">
          <input id=\"login\" type=\"text\" class=\"validate\" name=\"add[login]\" value=\"\">
          <label for=\"login\">Логин</label>
        </div>
        <div class=\"input-field col s2\">
          <input id=\"email\" type=\"text\" class=\"validate\" name=\"add[email]\" value=\"\">
          <label for=\"email\">Эл. почта</label>
        </div>
        <div class=\"input-field col s2\">
          <input id=\"rights\" type=\"text\" class=\"validate\" name=\"add[rights]\" value=\"\">
          <label for=\"rights\">Права</label>
        </div>
        <div class=\"input-field col s2\">
          <input id=\"pass\" type=\"text\" class=\"validate\" name=\"add[pass]\" value=\"\">
          <label for=\"pass\">Пароль</label>
        </div>
      <button class=\"btn-flat\" type=\"submit\" name=\"submit_add\" value=\"submit_add\">
        добавить
      </button>
      </div>
    </form>
    ";
        } else {
            // line 47
            echo "    <form enctype=\"multipart/form-data\" action=\"admin.php?page=admin\" method=\"post\">
      <button class=\"btn-flat\" type=\"submit\" name=\"add\" value=\"add\">
        <img src=\"../img/Document-Add-02-24.png\" alt=\"добавить\">
        добавить администратора
      </button>
    </form>
    ";
        }
        // line 54
        echo "    ";
        if (($context["changeForm"] ?? null)) {
            // line 55
            echo "    <form enctype=\"multipart/form-data\" action=\"admin.php?page=admin\" method=\"post\">
      <div class=\"row form-container\">
        <div class=\"input-field col s2\">
          <input id=\"pass\" type=\"text\" class=\"validate\" name=\"change_pass\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, ($context["changePass"] ?? null), "html", null, true);
            echo "\">
          <label for=\"pass\">Новый пароль</label>
        </div>
      <button class=\"btn-flat\" type=\"submit\" name=\"submit_change\" value=\"ok\">
        ОК
      </button>
      </div>
    </form>
    ";
        }
        // line 67
        echo "    <form enctype=\"multipart/form-data\" action=\"admin.php?page=admin\" method=\"post\">
\t\t\t<table class=\"bordered striped\">
        <thead>
          <tr>
              <th data-field=\"id\"></th>
              <th data-field=\"name\">Логин</th>
              <th data-field=\"email\">Эл. почта</th>
              <th data-field=\"rights\">Права</th>
              <th data-field=\"actions\">Операции</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 80
            echo "          <tr>
            <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "rights", array()), "html", null, true);
            echo "</td>
            <td>
              <button class=\"btn-flat btn-img\" type=\"submit\" name=\"delete\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "\">
                <img title=\"удалить\" src=\"../img/Document-Delete-02-24.png\" alt=\"удалить\">
              </button>
              <button class=\"btn-flat btn-img\" type=\"submit\" name=\"change\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "\">
                <img title=\"сменить пароль\" src=\"../img/Password-Text-01-24.png\" alt=\"сменить пароль\">
              </button>
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        </tbody>
      </table>
    </form>
\t\t</section>
\t\t<!-- нижний колонтитул -->
\t\t<footer class=\"footer\">
\t\t\t<div class=\"copyright\">\"Гениальные мысли\" @ 2016</div>
\t\t</footer>
\t</div>
\t<script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"js/materialize.min.js\"></script>
  <script>
    \$( document ).ready(function(){
      \$(\".button-collapse\").sideNav();
    })
  </script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "temp_admin.tw";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 95,  143 => 89,  137 => 86,  132 => 84,  128 => 83,  124 => 82,  120 => 81,  117 => 80,  113 => 79,  99 => 67,  87 => 58,  82 => 55,  79 => 54,  70 => 47,  44 => 23,  42 => 22,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "temp_admin.tw", "E:\\OpenServer\\OpenServer\\domains\\QandA\\templates\\temp_admin.tw");
    }
}
