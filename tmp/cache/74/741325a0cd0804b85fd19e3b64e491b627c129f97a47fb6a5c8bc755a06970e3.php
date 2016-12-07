<?php

/* temp_content.tw */
class __TwigTemplate_20f4f2a815e892961372ef15320681ffaf85ce7cbb6352dc03249b2dfbe623c1 extends Twig_Template
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

\t\t<!-- основное содержимое -->
\t\t<section class=\"content\">
\t\t\t<div class=\"row\">
    <div class=\"col s12\">
      <ul class=\"tabs\">
        <li class=\"tab col s3\"><a class=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["statisticTab"] ?? null), "html", null, true);
        echo "\" href=\"#test1\">Статистика</a></li>
        <li class=\"tab col s3\"><a class=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["categoryTab"] ?? null), "html", null, true);
        echo "\" href=\"#test2\">Категории</a></li>
        <li class=\"tab col s3\"><a class=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["questionsTab"] ?? null), "html", null, true);
        echo "\" href=\"#test3\">Вопросы</a></li>
      </ul>
    </div>

    <!-- TAB 1 -->
    <div id=\"test1\" class=\"col s12\">
    \t<form enctype=\"multipart/form-data\" action=\"admin.php?page=admin\" method=\"post\">
\t\t\t\t<table class=\"bordered striped\">
\t\t\t        <thead>
\t\t\t          \t<tr>
\t\t\t\t\t\t\t<th data-field=\"id\"></th>
\t\t\t\t\t\t\t<th data-field=\"name\">Категория</th>
\t\t\t\t\t\t\t<th data-field=\"email\">Кол. вопросов</th>
\t\t\t\t\t\t\t<th data-field=\"rights\">Ждёт ответа</th>
\t\t\t\t\t\t\t<th data-field=\"actions\">Опубликовано</th>
\t\t\t\t\t\t\t<th data-field=\"actions\">Скрыто</th>
\t\t\t          \t</tr>
\t\t\t        </thead>
\t\t\t        <tbody>
\t\t\t        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allParams"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["params"]) {
            // line 49
            echo "\t\t\t          \t<tr>
\t\t\t\t            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "title", array()), "html", null, true);
            echo "</td>
\t\t\t\t            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "qcount", array()), "html", null, true);
            echo "</td>
\t\t\t\t            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "q_wait", array()), "html", null, true);
            echo "</td>
\t\t\t\t            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "q_public", array()), "html", null, true);
            echo "</td>
\t\t\t\t            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["params"], "q_block", array()), "html", null, true);
            echo "</td>
\t\t\t          \t</tr>
\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['params'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t        </tbody>
\t\t\t    </table>
\t\t    </form>
\t</div>

\t<!-- TAB 2 -->
    <div id=\"test2\" class=\"col s12\">
    \t<form enctype=\"multipart/form-data\" action=\"admin.php?page=content\" method=\"post\">
\t\t\t\t<div class=\"row form-container\">
\t\t\t\t\t<div class=\"input-field col s3\">
\t\t\t\t\t\t<input id=\"pass\" type=\"text\" class=\"validate\" name=\"new_category\" value=\"\">
\t\t\t\t\t\t<label for=\"pass\">Название категории</label>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn-flat\" type=\"submit\" name=\"submit_new_category\" value=\"new\">
\t\t\t\t\t\t<img src=\"../img/Note-04-24.png\" alt=\"добавить\">добавить категорию
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"row form-container\">
\t\t\t\t\t<div class=\"input-field col s3\">
\t\t\t\t\t\t<select name=\"select_category\">
\t\t\t\t\t\t\t<option value=\"\" disabled selected>Выберите категорию</option>
\t\t\t\t\t\t\t";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 80
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<label>Категории</label>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn-flat\" type=\"submit\" name=\"submit_delete_category\" value=\"delete\">
\t\t\t\t\t\t<img src=\"../img/Recycle-Bin-24.png\" alt=\"удалить\">удалить категорию
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"btn-flat\" type=\"submit\" name=\"submit_view_category\" value=\"view\">
\t\t\t\t\t\t<img src=\"../img/Documents-24.png\" alt=\"просмотреть\">просмотреть категорию
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t";
        // line 93
        if (($context["categoryTitle"] ?? null)) {
            // line 94
            echo "\t\t\t<div class=\"row col s6\">
\t\t\t\t<h4>";
            // line 95
            echo twig_escape_filter($this->env, ($context["categoryTitle"] ?? null), "html", null, true);
            echo "</h4>
\t\t\t</div>
\t\t\t<form enctype=\"multipart/form-data\" action=\"admin.php?page=content\" method=\"post\">
\t\t\t\t<table class=\"bordered striped\">
\t\t\t        <thead>
\t\t\t          \t<tr>
\t\t\t\t\t\t\t<th data-field=\"id\"></th>
\t\t\t\t\t\t\t<th data-field=\"name\">Вопрос</th>
\t\t\t\t\t\t\t<th data-field=\"email\">Дата</th>
\t\t\t\t\t\t\t<th data-field=\"rights\">Статус</th>
\t\t\t\t\t\t\t<th data-field=\"actions\">Действия</th>
\t\t\t          \t</tr>
\t\t\t        </thead>
\t\t\t        <tbody>
\t\t\t        ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                // line 110
                echo "\t\t\t          \t<tr>
\t\t\t\t            <td>";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "id", array()), "html", null, true);
                echo "</td>
\t\t\t\t            <td>";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "q_text", array()), "html", null, true);
                echo "</td>
\t\t\t\t            <td>";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "q_date", array()), "html", null, true);
                echo "</td>
\t\t\t\t            <td>";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "status", array()), "html", null, true);
                echo "</td>
\t\t\t\t            <td>
\t\t\t\t            \t<input type=\"hidden\" class=\"\" name=\"cat_title\" value=\"";
                // line 116
                echo twig_escape_filter($this->env, ($context["categoryTitle"] ?? null), "html", null, true);
                echo "\">
\t\t\t\t            \t<input type=\"hidden\" class=\"\" name=\"cat_id\" value=\"";
                // line 117
                echo twig_escape_filter($this->env, ($context["categoryID"] ?? null), "html", null, true);
                echo "\">
\t\t\t\t            \t<button class=\"btn-flat btn-img\" type=\"submit\" name=\"qaction[delete]\" value=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "id", array()), "html", null, true);
                echo "\">
                \t\t\t\t\t<img title=\"удалить вопрос\" src=\"../img/Document-Delete-02-24.png\" alt=\"удалить\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"btn-flat btn-img\" type=\"submit\" name=\"qaction[hide]\" value=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "id", array()), "html", null, true);
                echo "\">
                \t\t\t\t\t<img title=\"скрыть вопрос\" src=\"../img/Document-Download-24.png\" alt=\"скрыть\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"btn-flat btn-img\" type=\"submit\" name=\"qaction[show]\" value=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "id", array()), "html", null, true);
                echo "\">
                \t\t\t\t\t<img title=\"опубликовать вопрос\" src=\"../img/Document-Upload-24.png\" alt=\"опубликовать\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"btn-flat btn-img\" type=\"submit\" name=\"qaction[edit]\" value=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "id", array()), "html", null, true);
                echo "\">
                \t\t\t\t\t<img title=\"редактировать вопрос\" src=\"../img/Note-04-24.png\" alt=\"редактировать\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t            </td>
\t\t\t          \t</tr>
\t\t\t          \t";
                // line 132
                if ((($context["editID"] ?? null) == $this->getAttribute($context["q"], "id", array()))) {
                    // line 133
                    echo "\t\t\t          \t<tr>
\t\t\t          \t\t<td colspan=\"5\">
\t\t\t          \t\t\t<form enctype=\"multipart/form-data\" action=\"admin.php?page=content\" method=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"row form-container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field col s3\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"\" name=\"question_id\" value=\"";
                    // line 138
                    echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"question-text\" class=\"materialize-textarea\" name=\"question_edit_text\" value=\"\">";
                    // line 139
                    echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "q_text", array()), "html", null, true);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"question-text\">Текст вопроса</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field col s4\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"\" name=\"answer_id\" value=\"";
                    // line 143
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["answerData"] ?? null), "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"answer-text\" class=\"materialize-textarea\" name=\"answer_edit_text\" value=\"\">";
                    // line 144
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["answerData"] ?? null), "a_text", array()), "html", null, true);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"answer-text\">Текс ответа</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field col s2\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"select_author\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 149
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["authors"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                        // line 150
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["author"], "id", array()) == $this->getAttribute(($context["answerData"] ?? null), "id_user", array()))) {
                            // line 151
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "id", array()), "html", null, true);
                            echo "\" selected>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 153
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "id", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 155
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 156
                    echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<label>Автор ответа</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn-flat\" type=\"submit\" name=\"qaction[submit_edit]\" value=\"";
                    // line 159
                    echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../img/Documents-24.png\" alt=\"просмотреть\">сохранить
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn-flat\" type=\"submit\" name=\"qaction[reset_edit]\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../img/Reload-24.png\" alt=\"просмотреть\">отменить
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t          \t\t</td>
\t\t\t          \t</tr>
\t\t\t          \t";
                }
                // line 170
                echo "\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "\t\t\t        </tbody>
\t\t\t    </table>
\t\t    </form>
\t\t\t";
        }
        // line 175
        echo "    </div>
    <!-- TAB 3 -->
    <div id=\"test3\" class=\"col s12\">
    \t<form enctype=\"multipart/form-data\" action=\"admin.php?page=content\" method=\"post\">
\t\t\t\t<table class=\"bordered striped\">
\t\t\t        <thead>
\t\t\t          \t<tr>
\t\t\t\t\t\t\t<th data-field=\"id\"></th>
\t\t\t\t\t\t\t<th data-field=\"category\">Категория</th>
\t\t\t\t\t\t\t<th data-field=\"name\">Вопрос</th>
\t\t\t\t\t\t\t<th data-field=\"email\">Дата</th>
\t\t\t\t\t\t\t<th data-field=\"actions\">Действия</th>
\t\t\t          \t</tr>
\t\t\t        </thead>
\t\t\t        <tbody>
\t\t\t        ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questionsWait"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["qw"]) {
            // line 191
            echo "\t\t\t          \t<tr>
\t\t\t\t            <td>";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($context["qw"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t            <td>";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($context["qw"], "title", array()), "html", null, true);
            echo "</td>
\t\t\t\t            <td>";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($context["qw"], "q_text", array()), "html", null, true);
            echo "</td>
\t\t\t\t            <td>";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($context["qw"], "q_date", array()), "html", null, true);
            echo "</td>
\t\t\t\t            <td>
\t\t\t\t            \t<button class=\"btn-flat btn-img\" type=\"submit\" name=\"qwaction[delete]\" value=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($context["qw"], "id", array()), "html", null, true);
            echo "\">
                \t\t\t\t\t<img title=\"удалить вопрос\" src=\"../img/Document-Delete-02-24.png\" alt=\"удалить\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"btn-flat btn-img\" type=\"submit\" name=\"qwaction[edit]\" value=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($context["qw"], "id", array()), "html", null, true);
            echo "\">
                \t\t\t\t\t<img title=\"редактировать вопрос\" src=\"../img/Note-04-24.png\" alt=\"редактировать\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t            </td>
\t\t\t          \t</tr>
\t\t\t          \t";
            // line 205
            if ((($context["qwEditID"] ?? null) == $this->getAttribute($context["qw"], "id", array()))) {
                // line 206
                echo "\t\t\t          \t<tr>
\t\t\t          \t\t<td colspan=\"5\">
\t\t\t          \t\t\t<form enctype=\"multipart/form-data\" action=\"admin.php?page=content\" method=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"row form-container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field col s5\">
\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"answer-text\" class=\"materialize-textarea\" name=\"answer_edit_text\" value=\"\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"answer-text\">Текс ответа</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field col s2\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"select_author\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 216
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["authors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                    // line 217
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 219
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<label>Автор ответа</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field col s2\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"\" name=\"question_id\" value=\"";
                // line 223
                echo twig_escape_filter($this->env, $this->getAttribute($context["qw"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"select_status\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>ожидает ответа</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">опубликовать</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">скрыть</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<label>Статус</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn-flat\" type=\"submit\" name=\"qwaction[submit_edit]\" value=\"";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($context["qw"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../img/Documents-24.png\" alt=\"просмотреть\">сохранить
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn-flat\" type=\"submit\" name=\"qwaction[reset_edit]\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../img/Reload-24.png\" alt=\"просмотреть\">отменить
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t          \t\t</td>
\t\t\t          \t</tr>
\t\t\t          \t";
            }
            // line 242
            echo "\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qw'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "\t\t\t        </tbody>
\t\t\t    </table>
\t\t    </form>
    </div>
  </div>
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
      \$('select').material_select();
      \$('ul.tabs').tabs();
    })
  </script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "temp_content.tw";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 243,  451 => 242,  437 => 231,  426 => 223,  420 => 219,  409 => 217,  405 => 216,  393 => 206,  391 => 205,  383 => 200,  377 => 197,  372 => 195,  368 => 194,  364 => 193,  360 => 192,  357 => 191,  353 => 190,  336 => 175,  330 => 171,  324 => 170,  310 => 159,  305 => 156,  299 => 155,  291 => 153,  283 => 151,  280 => 150,  276 => 149,  268 => 144,  264 => 143,  257 => 139,  253 => 138,  246 => 133,  244 => 132,  236 => 127,  230 => 124,  224 => 121,  218 => 118,  214 => 117,  210 => 116,  205 => 114,  201 => 113,  197 => 112,  193 => 111,  190 => 110,  186 => 109,  169 => 95,  166 => 94,  164 => 93,  151 => 82,  140 => 80,  136 => 79,  113 => 58,  104 => 55,  100 => 54,  96 => 53,  92 => 52,  88 => 51,  84 => 50,  81 => 49,  77 => 48,  55 => 29,  51 => 28,  47 => 27,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "temp_content.tw", "E:\\OpenServer\\OpenServer\\domains\\QandA\\templates\\temp_content.tw");
    }
}
