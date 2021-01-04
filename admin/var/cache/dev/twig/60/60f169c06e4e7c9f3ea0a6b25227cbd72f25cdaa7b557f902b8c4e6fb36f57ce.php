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

/* user_plans/index.html.twig */
class __TwigTemplate_0ec6212557ee958ca02cffc143528adb708dacc0f54962a3b08e4ccda1eca552 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_plans/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_plans/index.html.twig", 1);
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
\t<div class=\"row\">
\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<h3 class=\"mb-2\">User Plans</h3>
\t\t\t\t<div class=\"page-breadcrumb\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"breadcrumb-link\">Dashboard</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">User Plan</li>
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
\t\t\t\t\t<a href=\"new-plan\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-primary\">Add new plan</button>
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t</li>

\t\t\t</ul>
\t\t</nav>

\t\t";
        // line 38
        echo (isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 38, $this->source); })());
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
        return "user_plans/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
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
\t\t\t\t<h3 class=\"mb-2\">User Plans</h3>
\t\t\t\t<div class=\"page-breadcrumb\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"breadcrumb-link\">Dashboard</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">User Plan</li>
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
\t\t\t\t\t<a href=\"new-plan\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-primary\">Add new plan</button>
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t</li>

\t\t\t</ul>
\t\t</nav>

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
", "user_plans/index.html.twig", "/var/www/realtyBahrain.com/admin/templates/user_plans/index.html.twig");
    }
}
