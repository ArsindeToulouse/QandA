<?php

/* temp_index.tw */
class __TwigTemplate_e45805e5a1ace9d61b0bdd8016e35993df3063355d94e22c0ed4e9f288d04995 extends Twig_Template
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
\t<!-- Заголовок страницы -->
\t<header></header>
\t<!-- Основное содержимое страницы -->
\t<section class=\"wrapper\">
\t\t<article class=\"row\">
\t\t\t<div class=\"col s12 m4\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<img src=\"../img/Data-Edit-128.png\">
\t\t\t\t\t\t<span class=\"card-title\">Контент</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t<a href=\"/admin.php?page=content\">управление контентом</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
        \t<div class=\"col s12 m4\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<img src=\"../img/User-Group-128.png\">
\t\t\t\t\t\t<span class=\"card-title\">Пользователи</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t<a href=\"/admin.php?page=admin\">управление пользователями</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col s12 m4\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<img src=\"../img/Note-Memo-01-128.png\">
\t\t\t\t\t\t<span class=\"card-title\">Логи</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t<a href=\"/admin.php?page=log\">просмотр логов</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</article>
\t</section>
\t<!-- Подвал страницы -->
\t<footer></footer>
\t<script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"js/materialize.min.js\"></script>
\t<script>
\t\t\$( document ).ready(function(){
\t\t  \$(\".button-collapse\").sideNav();
\t\t})
\t</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "temp_index.tw";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "temp_index.tw", "E:\\OpenServer\\OpenServer\\domains\\QandA\\templates\\temp_index.tw");
    }
}
