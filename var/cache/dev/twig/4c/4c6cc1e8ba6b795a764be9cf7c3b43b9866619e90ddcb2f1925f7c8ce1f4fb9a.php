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
class __TwigTemplate_306cc706a863a05f4d3a32e50fc6935213c6f9096732f7d30ae763361a76b7c6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'articleForm' => [$this, 'block_articleForm'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 2
        echo "<html lang=\"cs-cz\">
<head>

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" type=\"text/css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Albert Patera#";
        // line 8
        $this->displayBlock("title", $context, $blocks);
        echo "</title>

    <!-- include summernote css/js -->
    <link href=\"http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css\" rel=\"stylesheet\">
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js\"></script>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('.summernote').summernote();
        });
    </script>

</head>
<article>
    <header>
       <div class=\"container-fluid\">

           <div class=\"row\">
               <div class=\"col-md-4\">
                   ";
        // line 28
        $this->displayBlock('articleForm', $context, $blocks);
        // line 29
        echo "               </div>
           </div>

           hhhhh
       </div>
    </header>
    <section>
        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        echo " ";
        // line 37
        echo "    </section>
</article>
</html>

";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_articleForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "articleForm"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
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
        return array (  125 => 41,  113 => 36,  101 => 28,  94 => 41,  88 => 37,  85 => 36,  76 => 29,  74 => 28,  51 => 8,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Výpis zpráv. #}
<html lang=\"cs-cz\">
<head>

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" type=\"text/css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Albert Patera#{{ block('title') }}</title>

    <!-- include summernote css/js -->
    <link href=\"http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css\" rel=\"stylesheet\">
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js\"></script>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('.summernote').summernote();
        });
    </script>

</head>
<article>
    <header>
       <div class=\"container-fluid\">

           <div class=\"row\">
               <div class=\"col-md-4\">
                   {% block articleForm %}{% endblock %}
               </div>
           </div>

           hhhhh
       </div>
    </header>
    <section>
        {% block body %}{% endblock %} {# Vložení obsahu do šablony. #}
    </section>
</article>
</html>

{% block javascripts %}{% endblock %}
", "base.html.twig", "/var/www/html/home/symfony-web/templates/base.html.twig");
    }
}
