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

/* admin/config.html.twig */
class __TwigTemplate_7d19ff1329ac6d9781d6680c2fc1967cd71fd34a950fae86f46bfa15178825ce extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/config.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/config.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "configuration
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
        echo "\t<div class=\"tab-vertical\">
\t\t<ul class=\"nav nav-tabs\" id=\"myTab3\" role=\"tablist\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link active\" id=\"home-vertical-tab\" data-toggle=\"tab\" href=\"#home-vertical\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Property Type</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" id=\"profile-vertical-tab\" data-toggle=\"tab\" href=\"#profile-vertical\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">EWA</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" id=\"contact-vertical-tab\" data-toggle=\"tab\" href=\"#contact-vertical\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">Property Status</a>
\t\t\t</li>
\t\t</ul>
\t\t<div class=\"tab-content\" id=\"myTabContent3\">
\t\t\t<div class=\"tab-pane fade show active\" id=\"home-vertical\" role=\"tabpanel\" aria-labelledby=\"home-vertical-tab\">
\t\t\t\t<form class=\"form-inline\" method=\"post\" style=\"background-color: #d0cfcf;padding: 4px;\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" placeholder=\"Name\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"description\" placeholder=\"description\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"status\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\" style=\"margin-left: 10%;\">Save Data</button>
\t\t\t\t</form>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped table-bordered first dataTable\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["propertyStatus"]) || array_key_exists("propertyStatus", $context) ? $context["propertyStatus"] : (function () { throw new RuntimeError('Variable "propertyStatus" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 39
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "description", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" id=\"option2\">
\t\t\t\t\t\t\t\t\t\t\tUpdate
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<a href=\"status/";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "/delete\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" id=\"option3\">
\t\t\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane fade\" id=\"profile-vertical\" role=\"tabpanel\" aria-labelledby=\"profile-vertical-tab\">
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<form class=\"form-inline\" method=\"post\" style=\"background-color: #d0cfcf;padding: 4px;\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" placeholder=\"Name\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"description\" placeholder=\"description\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"ewa\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\" style=\"margin-left: 10%;\">Save Data</button>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered first dataTable\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ewa"]) || array_key_exists("ewa", $context) ? $context["ewa"] : (function () { throw new RuntimeError('Variable "ewa" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 79
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "name", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "description", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" id=\"option2\">
\t\t\t\t\t\t\t\t\t\t\t\tUpdate
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" id=\"option3\">
\t\t\t\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane fade\" id=\"contact-vertical\" role=\"tabpanel\" aria-labelledby=\"contact-vertical-tab\">
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<form class=\"form-inline\" method=\"post\" style=\"background-color: #d0cfcf;padding: 4px;\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" placeholder=\"Name\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"description\" placeholder=\"description\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"type\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\" style=\"margin-left: 10%;\">Save Data</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered first dataTable\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["propertyType"]) || array_key_exists("propertyType", $context) ? $context["propertyType"] : (function () { throw new RuntimeError('Variable "propertyType" does not exist.', 120, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 121
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 122), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, false, 123), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" id=\"option2\">
\t\t\t\t\t\t\t\t\t\t\t\t\tUpdate
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" id=\"option3\">
\t\t\t\t\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 138,  235 => 123,  231 => 122,  228 => 121,  224 => 120,  198 => 96,  177 => 81,  173 => 80,  170 => 79,  166 => 78,  142 => 56,  128 => 48,  118 => 41,  114 => 40,  111 => 39,  107 => 38,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}configuration
{% endblock %}

{% block body %}
\t<div class=\"tab-vertical\">
\t\t<ul class=\"nav nav-tabs\" id=\"myTab3\" role=\"tablist\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link active\" id=\"home-vertical-tab\" data-toggle=\"tab\" href=\"#home-vertical\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Property Type</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" id=\"profile-vertical-tab\" data-toggle=\"tab\" href=\"#profile-vertical\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">EWA</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" id=\"contact-vertical-tab\" data-toggle=\"tab\" href=\"#contact-vertical\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">Property Status</a>
\t\t\t</li>
\t\t</ul>
\t\t<div class=\"tab-content\" id=\"myTabContent3\">
\t\t\t<div class=\"tab-pane fade show active\" id=\"home-vertical\" role=\"tabpanel\" aria-labelledby=\"home-vertical-tab\">
\t\t\t\t<form class=\"form-inline\" method=\"post\" style=\"background-color: #d0cfcf;padding: 4px;\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" placeholder=\"Name\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"description\" placeholder=\"description\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"status\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\" style=\"margin-left: 10%;\">Save Data</button>
\t\t\t\t</form>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped table-bordered first dataTable\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% for status in propertyStatus %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ status.name }}</td>
\t\t\t\t\t\t\t\t<td>{{ status.description }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" id=\"option2\">
\t\t\t\t\t\t\t\t\t\t\tUpdate
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<a href=\"status/{{ status.id }}/delete\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" id=\"option3\">
\t\t\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane fade\" id=\"profile-vertical\" role=\"tabpanel\" aria-labelledby=\"profile-vertical-tab\">
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<form class=\"form-inline\" method=\"post\" style=\"background-color: #d0cfcf;padding: 4px;\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" placeholder=\"Name\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"description\" placeholder=\"description\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"ewa\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\" style=\"margin-left: 10%;\">Save Data</button>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered first dataTable\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% for data in ewa %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ data.name }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ data.description }}</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" id=\"option2\">
\t\t\t\t\t\t\t\t\t\t\t\tUpdate
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" id=\"option3\">
\t\t\t\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane fade\" id=\"contact-vertical\" role=\"tabpanel\" aria-labelledby=\"contact-vertical-tab\">
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<form class=\"form-inline\" method=\"post\" style=\"background-color: #d0cfcf;padding: 4px;\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" placeholder=\"Name\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"description\" placeholder=\"description\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"type\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\" style=\"margin-left: 10%;\">Save Data</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered first dataTable\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% for type in propertyType %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>{{ type.name }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ type.description }}</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" id=\"option2\">
\t\t\t\t\t\t\t\t\t\t\t\t\tUpdate
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"options\" id=\"option3\">
\t\t\t\t\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endblock %}
", "admin/config.html.twig", "/var/www/realtyBahrain.com/admin/templates/admin/config.html.twig");
    }
}
