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

/* property/index.html.twig */
class __TwigTemplate_01aeed3983046173a98bf24cdc0d6d223015b61872f4c395e4c1a1e99e573dad extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "property/index.html.twig", 1);
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
        echo "\t<div class=\"row\">
\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<h3 class=\"mb-2\">Admin Dashboard</h3>
\t\t\t\t<div class=\"page-breadcrumb\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"breadcrumb-link\">Dashboard</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Property List</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"body-wrapper\" style=\"background-color: white;padding: 22px;\">
\t\t<nav class=\"navbar navbar-expand-sm \" style=\"background-color: #e1e1e1 !important;\">
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li class=\"nav-item\" style=\"border-bottom: none;\">
\t\t\t\t\t<a href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["server_path"]) || array_key_exists("server_path", $context) ? $context["server_path"] : (function () { throw new RuntimeError('Variable "server_path" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "/application/properties/add/";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-primary\">Add Property</button>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</nav>
\t\t<input type=\"hidden\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["server_path"]) || array_key_exists("server_path", $context) ? $context["server_path"] : (function () { throw new RuntimeError('Variable "server_path" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\" id=\"server_path\">
\t\t";
        // line 36
        echo (isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 36, $this->source); })());
        echo "

\t\t<div class=\"pagination\" style=\"background-color: whitesmoke;\">
\t\t\t<a href=\"?page=";
        // line 39
        echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 39, $this->source); })()) - 1), "html", null, true);
        echo "\">&laquo;</a>
\t\t\t<a href=\"#\" class=\"active\">";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "</a>
\t\t\t<a href=\"?page=";
        // line 41
        echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 41, $this->source); })()) + 1), "html", null, true);
        echo "\">&raquo;</a>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "property/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 41,  123 => 40,  119 => 39,  113 => 36,  109 => 35,  97 => 28,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Users
{% endblock %}

{% block body %}
\t<div class=\"row\">
\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<h3 class=\"mb-2\">Admin Dashboard</h3>
\t\t\t\t<div class=\"page-breadcrumb\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"breadcrumb-link\">Dashboard</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Property List</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"body-wrapper\" style=\"background-color: white;padding: 22px;\">
\t\t<nav class=\"navbar navbar-expand-sm \" style=\"background-color: #e1e1e1 !important;\">
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li class=\"nav-item\" style=\"border-bottom: none;\">
\t\t\t\t\t<a href=\"{{ server_path }}/application/properties/add/{{ id }}\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-primary\">Add Property</button>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</nav>
\t\t<input type=\"hidden\" value=\"{{ server_path }}\" id=\"server_path\">
\t\t{{ tableData|raw }}

\t\t<div class=\"pagination\" style=\"background-color: whitesmoke;\">
\t\t\t<a href=\"?page={{ page - 1 }}\">&laquo;</a>
\t\t\t<a href=\"#\" class=\"active\">{{page}}</a>
\t\t\t<a href=\"?page={{ page + 1 }}\">&raquo;</a>
\t\t</div>
\t</div>
{% endblock %}
", "property/index.html.twig", "/var/www/realtyBahrain.com/admin/templates/property/index.html.twig");
    }
}
