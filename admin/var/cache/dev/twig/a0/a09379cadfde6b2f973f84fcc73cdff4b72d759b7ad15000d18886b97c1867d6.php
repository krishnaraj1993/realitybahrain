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

/* property/single.html.twig */
class __TwigTemplate_5be6a6c42bcb2f7c57ab1e6d75481fc6d8ad3965a88e6bfb3b82ac34c99ecd94 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/single.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "property/single.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Property
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
        echo "\t<div class=\"card\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t<div class=\"user-avatar float-xl-left pr-4 float-none\">
\t\t\t\t\t\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["propertyDetails"]) || array_key_exists("propertyDetails", $context) ? $context["propertyDetails"] : (function () { throw new RuntimeError('Variable "propertyDetails" does not exist.', 12, $this->source); })()), "images", [], "array", false, false, false, 12), 0, [], "array", false, false, false, 12)), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"rounded-circle user-avatar-xl\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-xl-3\">
\t\t\t\t\t\t<div class=\"m-b-0\">
\t\t\t\t\t\t\t<div class=\"user-avatar-name d-inline-block\">
\t\t\t\t\t\t\t\t<h2 class=\"font-24 m-b-10\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propertyDetails"]) || array_key_exists("propertyDetails", $context) ? $context["propertyDetails"] : (function () { throw new RuntimeError('Variable "propertyDetails" does not exist.', 17, $this->source); })()), "name", [], "array", false, false, false, 17), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"user-avatar-address\">
\t\t\t\t\t\t\t<p class=\"mb-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker-alt mr-2  text-primary\"></i>Salt Lake City, UT
\t\t\t\t\t\t\t\t<span class=\"m-l-10\">Male<span class=\"m-l-20\">29 Year Old</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mr-1 badge badge-light\">Fitness</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mr-1 badge badge-light\">Life Style</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mr-1 badge badge-light\">Gym</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"badge badge-light\">Crossfit</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t<div class=\"float-xl-right float-none mt-xl-0 mt-4\">
\t\t\t\t\t\t<button id=\"addToFeaturedList\" data-id=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propertyDetails"]) || array_key_exists("propertyDetails", $context) ? $context["propertyDetails"] : (function () { throw new RuntimeError('Variable "propertyDetails" does not exist.', 37, $this->source); })()), "id", [], "array", false, false, false, 37), "html", null, true);
        echo "\" class=\"btn btn-primary\" >Add to Fetured Listing</button>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-secondary\" data-toggle=\"modal\" data-target=\"#exampleModal\">Images</a>
\t\t\t\t\t\t<a href=\"/application/property/";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propertyDetails"]) || array_key_exists("propertyDetails", $context) ? $context["propertyDetails"] : (function () { throw new RuntimeError('Variable "propertyDetails" does not exist.', 39, $this->source); })()), "id", [], "array", false, false, false, 39), "html", null, true);
        echo "/edit\" class=\"btn btn-primary\" >Edit</a>
\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tid=\"demo\" class=\"carousel slide\" data-ride=\"carousel\">

\t\t\t\t\t\t\t\t\t\t\t<!-- Indicators -->
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["propertyDetails"]) || array_key_exists("propertyDetails", $context) ? $context["propertyDetails"] : (function () { throw new RuntimeError('Variable "propertyDetails" does not exist.', 49, $this->source); })()), "images", [], "array", false, false, false, 49));
        foreach ($context['_seq'] as $context["key"] => $context["image"]) {
            // line 50
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-target=\"#demo\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" class=\"";
            if ((0 === twig_compare($context["key"], 0))) {
                echo " active ";
            }
            echo "\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t<!-- The slideshow -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["propertyDetails"]) || array_key_exists("propertyDetails", $context) ? $context["propertyDetails"] : (function () { throw new RuntimeError('Variable "propertyDetails" does not exist.', 56, $this->source); })()), "images", [], "array", false, false, false, 56));
        foreach ($context['_seq'] as $context["key"] => $context["image"]) {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item ";
            if ((0 === twig_compare($context["key"], 0))) {
                echo " active ";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["image"]), "html", null, true);
            echo "\" alt=\"Los Angeles\" width=\"1100\" height=\"500\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- Left and right controls -->
\t\t\t\t\t\t\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-next-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
\t<h4>
\t\t<p>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propertyDetails"]) || array_key_exists("propertyDetails", $context) ? $context["propertyDetails"] : (function () { throw new RuntimeError('Variable "propertyDetails" does not exist.', 85, $this->source); })()), "description", [], "array", false, false, false, 85), "html", null, true);
        echo "
\t\t</p>
\t</h4>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "property/single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 85,  173 => 61,  164 => 58,  157 => 57,  153 => 56,  147 => 52,  134 => 50,  130 => 49,  117 => 39,  112 => 37,  89 => 17,  81 => 12,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Property
{% endblock %}

{% block body %}
\t<div class=\"card\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t<div class=\"user-avatar float-xl-left pr-4 float-none\">
\t\t\t\t\t\t<img src=\"{{ asset( propertyDetails['images'][0] ) }}\" alt=\"User Avatar\" class=\"rounded-circle user-avatar-xl\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pl-xl-3\">
\t\t\t\t\t\t<div class=\"m-b-0\">
\t\t\t\t\t\t\t<div class=\"user-avatar-name d-inline-block\">
\t\t\t\t\t\t\t\t<h2 class=\"font-24 m-b-10\">{{ propertyDetails['name'] }}</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"user-avatar-address\">
\t\t\t\t\t\t\t<p class=\"mb-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker-alt mr-2  text-primary\"></i>Salt Lake City, UT
\t\t\t\t\t\t\t\t<span class=\"m-l-10\">Male<span class=\"m-l-20\">29 Year Old</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mr-1 badge badge-light\">Fitness</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mr-1 badge badge-light\">Life Style</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mr-1 badge badge-light\">Gym</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"badge badge-light\">Crossfit</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t<div class=\"float-xl-right float-none mt-xl-0 mt-4\">
\t\t\t\t\t\t<button id=\"addToFeaturedList\" data-id=\"{{ propertyDetails['id'] }}\" class=\"btn btn-primary\" >Add to Fetured Listing</button>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-secondary\" data-toggle=\"modal\" data-target=\"#exampleModal\">Images</a>
\t\t\t\t\t\t<a href=\"/application/property/{{ propertyDetails['id'] }}/edit\" class=\"btn btn-primary\" >Edit</a>
\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tid=\"demo\" class=\"carousel slide\" data-ride=\"carousel\">

\t\t\t\t\t\t\t\t\t\t\t<!-- Indicators -->
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t\t\t\t\t{% for key,image in propertyDetails['images'] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<li data-target=\"#demo\" data-slide-to=\"{{ key }}\" class=\"{% if key == 0 %} active {% endif %}\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t<!-- The slideshow -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t{% for key,image in propertyDetails['images'] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item {% if key == 0 %} active {% endif %}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset( image ) }}\" alt=\"Los Angeles\" width=\"1100\" height=\"500\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- Left and right controls -->
\t\t\t\t\t\t\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-next-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
\t<h4>
\t\t<p>{{ propertyDetails['description'] }}
\t\t</p>
\t</h4>
{% endblock %}
", "property/single.html.twig", "/var/www/realtyBahrain.com/admin/templates/property/single.html.twig");
    }
}
