<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* article/index.html.twig */
class __TwigTemplate_5d4d4c4cd5b4d888f219494b363430840fc81ae01b35a05f193f1ee0e292a7cb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'articleForm' => [$this, 'block_articleForm'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["temp"]) || array_key_exists("temp", $context) ? $context["temp"] : (function () { throw new RuntimeError('Variable "temp" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 5), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo twig_escape_filter($this->env, json_encode((isset($context["temp"]) || array_key_exists("temp", $context) ? $context["temp"] : (function () { throw new RuntimeError('Variable "temp" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "


    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["temp"]) || array_key_exists("temp", $context) ? $context["temp"] : (function () { throw new RuntimeError('Variable "temp" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "        <div class=\"card\" style=\"width: 18rem; display: inline-block\">
            ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "titleImage", [], "any", false, false, false, 15) != "NULL")) {
                // line 16
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titleImage", [], "any", false, false, false, 16), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"...\">
            ";
            } else {
                // line 18
                echo "                <img src=\"http://www.sdc.com.my/data/data/noimage.gif\" style=\"width: 18rem\" alt=\"undefined\">
                ";
            }
            // line 20
            echo "            <a href=\"article/detail/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\"><span class=\"fa fa-link\"></span> </a>
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 22), "html", null, true);
            echo "e</h5>
                <p class=\"card-text\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
            </div>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_articleForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "articleForm"));

        // line 33
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 33, $this->source); })()), 'form');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 33,  140 => 32,  122 => 23,  118 => 22,  112 => 20,  108 => 18,  102 => 16,  100 => 15,  97 => 14,  93 => 13,  87 => 10,  80 => 9,  66 => 5,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {% for header in temp %}
        {{ header.title }}
    {% endfor %}
{% endblock %}

{% block body %}
{{ temp|json_encode }}


    {% for item in temp %}
        <div class=\"card\" style=\"width: 18rem; display: inline-block\">
            {% if item.titleImage != 'NULL' %}
            <img src=\"{{ item.titleImage }}\" class=\"card-img-top\" alt=\"...\">
            {% else %}
                <img src=\"http://www.sdc.com.my/data/data/noimage.gif\" style=\"width: 18rem\" alt=\"undefined\">
                {% endif %}
            <a href=\"article/detail/{{ item.id }}\"><span class=\"fa fa-link\"></span> </a>
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ item.title }}e</h5>
                <p class=\"card-text\">{{ item.content }}</p>
                <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
            </div>

        </div>

    {% endfor %}
{% endblock %}

{% block articleForm %}
    {{ form(articleForm) }}
{% endblock %}

", "article/index.html.twig", "/var/www/html/home/symfony-web/templates/article/index.html.twig");
    }
}
