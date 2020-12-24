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

/* agency/index.html.twig */
class __TwigTemplate_0ec9ff8c55e9f20169c0f6b53cc8cf97590e2491423fbaceee0e8fbc6755aea5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agency/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agency/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Admin Users
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<br/>
\t<div class=\"body-wrapper\" style=\"background-color: white;padding: 22px;\">
\t\t<nav class=\"navbar navbar-expand-sm \" style=\"background-color: #e1e1e1 !important;\">
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li class=\"nav-item\" style=\"border-bottom: none;\">
\t\t\t\t\t<a href=\"new-users\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-primary\">Add Users</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"admin/dashboard\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-primary\">View My Dashboard</button>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</nav>
\t\t<br/>
 \t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "            <div class=\"alert alert-success\">
                ";
            // line 26
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t";
        echo (isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 29, $this->source); })());
        echo "

\t\t<div class=\"pagination\" style=\"background-color: whitesmoke;\">
\t\t\t<a href=\"#\">&laquo;</a>
\t\t\t<a href=\"#\">1</a>
\t\t\t<a href=\"#\" class=\"active\">2</a>
\t\t\t<a href=\"#\">3</a>
\t\t\t<a href=\"#\">4</a>
\t\t\t<a href=\"#\">5</a>
\t\t\t<a href=\"#\">6</a>
\t\t\t<a href=\"#\">&raquo;</a>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "agency/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 29,  100 => 26,  97 => 25,  93 => 24,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Users
{% endblock %}

{% block body %}

\t<br/>
\t<div class=\"body-wrapper\" style=\"background-color: white;padding: 22px;\">
\t\t<nav class=\"navbar navbar-expand-sm \" style=\"background-color: #e1e1e1 !important;\">
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li class=\"nav-item\" style=\"border-bottom: none;\">
\t\t\t\t\t<a href=\"new-users\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-primary\">Add Users</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"admin/dashboard\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-primary\">View My Dashboard</button>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</nav>
\t\t<br/>
 \t\t{% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}
\t\t{{ tableData|raw }}

\t\t<div class=\"pagination\" style=\"background-color: whitesmoke;\">
\t\t\t<a href=\"#\">&laquo;</a>
\t\t\t<a href=\"#\">1</a>
\t\t\t<a href=\"#\" class=\"active\">2</a>
\t\t\t<a href=\"#\">3</a>
\t\t\t<a href=\"#\">4</a>
\t\t\t<a href=\"#\">5</a>
\t\t\t<a href=\"#\">6</a>
\t\t\t<a href=\"#\">&raquo;</a>
\t\t</div>
\t</div>
{% endblock %}
", "agency/index.html.twig", "/var/www/realtyBahrain.com/admin/templates/agency/index.html.twig");
    }
}
