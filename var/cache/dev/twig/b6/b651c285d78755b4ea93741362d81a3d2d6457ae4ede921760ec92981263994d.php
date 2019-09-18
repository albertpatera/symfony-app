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

/* base.html.twig */
class __TwigTemplate_673b5bf550788b2e04480bca24536aa7e8765cda385257c8ceed9d5c3e7a9dc4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            '__internal_664c528e14351db6c65b1c155a977f79d77ae4049197902041b6e587c7e337ac' => [$this, 'block___internal_664c528e14351db6c65b1c155a977f79d77ae4049197902041b6e587c7e337ac'],
            'description' => [$this, 'block_description'],
            '__internal_9217f2b1917c8696f00bcfc134745f789b86a92c1fb38b2efc1e32899ba29b6e' => [$this, 'block___internal_9217f2b1917c8696f00bcfc134745f789b86a92c1fb38b2efc1e32899ba29b6e'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"cs-cz\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        echo twig_escape_filter($this->env, strip_tags(        $this->renderBlock("__internal_664c528e14351db6c65b1c155a977f79d77ae4049197902041b6e587c7e337ac", $context, $blocks)), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, strip_tags(        $this->renderBlock("__internal_9217f2b1917c8696f00bcfc134745f789b86a92c1fb38b2efc1e32899ba29b6e", $context, $blocks)), "html", null, true);
        echo "\"/>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "</head>
<body>
<header>
    <h1>Jednoduchý redakční systém v Symfony</h1>
</header>

";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "session", [], "any", false, false, false, 18), "flashBag", [], "any", false, false, false, 18), "all", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["type"] => $context["flash_messages"]) {
            // line 19
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flash_messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 20
                echo "        <div class=\"message\">";
                echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flash_messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
<nav>
    <ul>
        <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\">Úvod</a></li>
        <li><a href=\"#\">Seznam článků</a></li>
        <li><a href=\"#\">Kontakt</a></li>
    </ul>
</nav>
<br clear=\"both\"/>

<article>
    <header>
        <h1>";
        // line 35
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
    </header>
    <section>
        ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        echo " ";
        // line 39
        echo "    </section>
</article>

<footer>
    <p>
        Ukázkový tutoriál pro jednoduchý redakční systém v Symfony z programátorské sociální sítě
        <a href=\"http://www.itnetwork.cz\" target=\"_blank\">itnetwork.cz</a>
    </p>
</footer>

";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block___internal_664c528e14351db6c65b1c155a977f79d77ae4049197902041b6e587c7e337ac($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_664c528e14351db6c65b1c155a977f79d77ae4049197902041b6e587c7e337ac"));

        $this->displayBlock('title', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block___internal_9217f2b1917c8696f00bcfc134745f789b86a92c1fb38b2efc1e32899ba29b6e($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_9217f2b1917c8696f00bcfc134745f789b86a92c1fb38b2efc1e32899ba29b6e"));

        $this->displayBlock('description', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 49,  207 => 38,  197 => 9,  190 => 8,  166 => 6,  142 => 5,  134 => 50,  132 => 49,  120 => 39,  117 => 38,  111 => 35,  99 => 26,  94 => 23,  81 => 20,  76 => 19,  72 => 18,  64 => 11,  62 => 8,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"cs-cz\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% filter striptags %}{% block title %}{% endblock %}{% endfilter %}</title>
    <meta name=\"description\" content=\"{% filter striptags %}{% block description %}{% endblock %}{% endfilter %}\"/>

    {% block stylesheets %}
        <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    {% endblock %}
</head>
<body>
<header>
    <h1>Jednoduchý redakční systém v Symfony</h1>
</header>

{# Výpis zpráv. #}
{% for type, flash_messages in app.session.flashBag.all %}
    {% for flash_message in flash_messages %}
        <div class=\"message\">{{ flash_message }}</div>
    {% endfor %}
{% endfor %}

<nav>
    <ul>
        <li><a href=\"{{ path('article') }}\">Úvod</a></li>
        <li><a href=\"#\">Seznam článků</a></li>
        <li><a href=\"#\">Kontakt</a></li>
    </ul>
</nav>
<br clear=\"both\"/>

<article>
    <header>
        <h1>{{ block('title') }}</h1>
    </header>
    <section>
        {% block body %}{% endblock %} {# Vložení obsahu do šablony. #}
    </section>
</article>

<footer>
    <p>
        Ukázkový tutoriál pro jednoduchý redakční systém v Symfony z programátorské sociální sítě
        <a href=\"http://www.itnetwork.cz\" target=\"_blank\">itnetwork.cz</a>
    </p>
</footer>

{% block javascripts %}{% endblock %}
</body>
</html>", "base.html.twig", "/var/www/html/home/symfony-web/templates/base.html.twig");
    }
}
