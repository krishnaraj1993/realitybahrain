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

/* admin/dashboard.html.twig */
class __TwigTemplate_f3505b1bcdf766cca0a1234f9fb4f36d15df17e706903577dda75c06a7955d86 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
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
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Reality Bahrain Profile</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- ============================================================== -->
\t<!-- end pageheader -->
\t<!-- ============================================================== -->
\t<!-- ============================================================== -->
\t<!-- content -->
\t<!-- ============================================================== -->
\t\t<div class=\"row\"> <!-- ============================================================== -->
\t\t<!-- profile -->
\t\t<!-- ============================================================== -->
\t\t\t<div class=\"col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12\"> <!-- ============================================================== -->
\t\t\t<!-- card profile -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<div class=\"card\"> <div class=\"card-body\">
\t\t\t\t\t<div class=\"user-avatar text-center d-block\">
\t\t\t\t\t\t<img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "image", [], "array", false, false, false, 38)), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"rounded-circle user-avatar-xxl\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<h2 class=\"font-24 mb-0\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "firstname", [], "array", false, false, false, 41), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t<p>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "lastname", [], "array", false, false, false, 42), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body border-top\">
\t\t\t\t\t<h3 class=\"font-16\">Contact Information</h3>
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">
\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-envelope mr-2\"></i>
\t\t\t\t\t\t\t\t";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 51, $this->source); })()), "address", [], "array", false, false, false, 51), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t<li class=\"mb-0\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-phone mr-2\"></i>
\t\t\t\t\t\t\t\t";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 54, $this->source); })()), "mobilenumber", [], "array", false, false, false, 54), "html", null, true);
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t<!-- end card profile -->
\t\t\t<!-- ============================================================== -->
\t\t</div>
\t\t<!-- ============================================================== -->
\t\t<!-- end profile -->
\t\t<!-- ============================================================== -->
\t\t<!-- ============================================================== -->
\t\t<!-- campaign data -->
\t\t<!-- ============================================================== -->
\t\t\t<div class=\"col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12\"> <!-- ============================================================== -->
\t\t\t<!-- campaign tab one -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<div class=\"influence-profile-content pills-regular\"> <ul class=\"nav nav-pills mb-3 nav-justified\" id=\"pills-tab\" role=\"tablist\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" id=\"pills-campaign-tab\" data-toggle=\"pill\" href=\"#pills-campaign\" role=\"tab\" aria-controls=\"pills-campaign\" aria-selected=\"true\">Dashboard</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-packages-tab\" data-toggle=\"pill\" href=\"#pills-packages\" role=\"tab\" aria-controls=\"pills-packages\" aria-selected=\"false\">Pending Aprovals</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-review-tab\" data-toggle=\"pill\" href=\"#pills-review\" role=\"tab\" aria-controls=\"pills-review\" aria-selected=\"false\">Reviews</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\" style=\"display:none\">
\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-msg-tab\" data-toggle=\"pill\" href=\"#pills-msg\" role=\"tab\" aria-controls=\"pills-msg\" aria-selected=\"false\">Send Messages</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\" id=\"pills-tabContent\">
\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"pills-campaign\" role=\"tabpanel\" aria-labelledby=\"pills-campaign-tab\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t<div class=\"section-block\">
\t\t\t\t\t\t\t\t\t<h3 class=\"section-title\">Properties Dash</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"mb-1\">";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["propertyCount"]) || array_key_exists("propertyCount", $context) ? $context["propertyCount"] : (function () { throw new RuntimeError('Variable "propertyCount" does not exist.', 97, $this->source); })()), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t\t\t\t<p>Properties</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"mb-1\">";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["agencyCount"]) || array_key_exists("agencyCount", $context) ? $context["agencyCount"] : (function () { throw new RuntimeError('Variable "agencyCount" does not exist.', 105, $this->source); })()), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t\t\t\t<p>Agency</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"mb-1\">";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["agentsCount"]) || array_key_exists("agentsCount", $context) ? $context["agentsCount"] : (function () { throw new RuntimeError('Variable "agentsCount" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t\t\t\t<p>Agent</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"mb-1\">1</h1>
\t\t\t\t\t\t\t\t\t\t<p>FSBO</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-packages\" role=\"tabpanel\" aria-labelledby=\"pills-packages-tab\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t<div class=\"section-block\">
\t\t\t\t\t\t\t\t\t<h3 class=\"section-title\">User Requested Plans</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 135
        echo (isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 135, $this->source); })());
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-review\" role=\"tabpanel\" aria-labelledby=\"pills-review-tab\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media influencer-profile-data d-flex align-items-center p-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/slack.png\" alt=\"User Avatar\" class=\"user-avatar-lg\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"influencer-profile-data\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-b-10\">Your Campaign Title Here</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-20 d-inline-block\">Draft Due Date
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-l-10 text-primary\">24 Jan 2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-20 d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPublish Date
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-l-10 text-secondary\">30 Feb 2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-20 d-inline-block\">Ends
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-l-10  text-info\">30 May, 2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"border-top card-footer p-0\">
\t\t\t\t\t\t\t\t<div class=\"campaign-metrics d-xl-inline-block\">
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0\">45k</h4>
\t\t\t\t\t\t\t\t\t<p>Total Reach</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"campaign-metrics d-xl-inline-block\">
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0\">29k</h4>
\t\t\t\t\t\t\t\t\t<p>Total Views</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"campaign-metrics d-xl-inline-block\">
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0\">5k</h4>
\t\t\t\t\t\t\t\t\t<p>Total Click</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-msg\" role=\"tabpanel\" aria-labelledby=\"pills-msg-tab\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<h5 class=\"card-header\">Send Messages</h5>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"offset-xl-3 col-xl-6 offset-lg-3 col-lg-3 col-md-12 col-sm-12 col-12 p-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"name\">Your Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-lg\" id=\"name\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Your Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control form-control-lg\" id=\"email\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"subject\">Subject</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-lg\" id=\"subject\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"messages\">Messgaes</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"messages\" rows=\"3\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary float-right\">Send Message</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t<!-- end campaign tab one -->
\t\t\t<!-- ============================================================== -->
\t\t</div>
\t\t<!-- ============================================================== -->
\t<!-- end campaign data -->
\t\t<!-- ============================================================== -->
\t</div>
</div></div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 135,  204 => 113,  193 => 105,  182 => 97,  136 => 54,  130 => 51,  118 => 42,  114 => 41,  108 => 38,  74 => 6,  67 => 5,  53 => 3,  36 => 1,);
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
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Reality Bahrain Profile</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- ============================================================== -->
\t<!-- end pageheader -->
\t<!-- ============================================================== -->
\t<!-- ============================================================== -->
\t<!-- content -->
\t<!-- ============================================================== -->
\t\t<div class=\"row\"> <!-- ============================================================== -->
\t\t<!-- profile -->
\t\t<!-- ============================================================== -->
\t\t\t<div class=\"col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12\"> <!-- ============================================================== -->
\t\t\t<!-- card profile -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<div class=\"card\"> <div class=\"card-body\">
\t\t\t\t\t<div class=\"user-avatar text-center d-block\">
\t\t\t\t\t\t<img src=\"{{ asset(data['image']) }}\" alt=\"User Avatar\" class=\"rounded-circle user-avatar-xxl\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<h2 class=\"font-24 mb-0\">{{ data['firstname'] }}</h2>
\t\t\t\t\t\t<p>{{data['lastname']}}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body border-top\">
\t\t\t\t\t<h3 class=\"font-16\">Contact Information</h3>
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">
\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-envelope mr-2\"></i>
\t\t\t\t\t\t\t\t{{ data['address'] }}</li>
\t\t\t\t\t\t\t<li class=\"mb-0\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-phone mr-2\"></i>
\t\t\t\t\t\t\t\t{{ data['mobilenumber'] }}</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t<!-- end card profile -->
\t\t\t<!-- ============================================================== -->
\t\t</div>
\t\t<!-- ============================================================== -->
\t\t<!-- end profile -->
\t\t<!-- ============================================================== -->
\t\t<!-- ============================================================== -->
\t\t<!-- campaign data -->
\t\t<!-- ============================================================== -->
\t\t\t<div class=\"col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12\"> <!-- ============================================================== -->
\t\t\t<!-- campaign tab one -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<div class=\"influence-profile-content pills-regular\"> <ul class=\"nav nav-pills mb-3 nav-justified\" id=\"pills-tab\" role=\"tablist\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" id=\"pills-campaign-tab\" data-toggle=\"pill\" href=\"#pills-campaign\" role=\"tab\" aria-controls=\"pills-campaign\" aria-selected=\"true\">Dashboard</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-packages-tab\" data-toggle=\"pill\" href=\"#pills-packages\" role=\"tab\" aria-controls=\"pills-packages\" aria-selected=\"false\">Pending Aprovals</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-review-tab\" data-toggle=\"pill\" href=\"#pills-review\" role=\"tab\" aria-controls=\"pills-review\" aria-selected=\"false\">Reviews</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\" style=\"display:none\">
\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-msg-tab\" data-toggle=\"pill\" href=\"#pills-msg\" role=\"tab\" aria-controls=\"pills-msg\" aria-selected=\"false\">Send Messages</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\" id=\"pills-tabContent\">
\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"pills-campaign\" role=\"tabpanel\" aria-labelledby=\"pills-campaign-tab\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t<div class=\"section-block\">
\t\t\t\t\t\t\t\t\t<h3 class=\"section-title\">Properties Dash</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"mb-1\">{{ propertyCount }}</h1>
\t\t\t\t\t\t\t\t\t\t<p>Properties</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"mb-1\">{{ agencyCount }}</h1>
\t\t\t\t\t\t\t\t\t\t<p>Agency</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"mb-1\">{{ agentsCount }}</h1>
\t\t\t\t\t\t\t\t\t\t<p>Agent</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"mb-1\">1</h1>
\t\t\t\t\t\t\t\t\t\t<p>FSBO</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-packages\" role=\"tabpanel\" aria-labelledby=\"pills-packages-tab\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t<div class=\"section-block\">
\t\t\t\t\t\t\t\t\t<h3 class=\"section-title\">User Requested Plans</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{ tableData|raw }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-review\" role=\"tabpanel\" aria-labelledby=\"pills-review-tab\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media influencer-profile-data d-flex align-items-center p-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/slack.png\" alt=\"User Avatar\" class=\"user-avatar-lg\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"influencer-profile-data\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-b-10\">Your Campaign Title Here</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-20 d-inline-block\">Draft Due Date
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-l-10 text-primary\">24 Jan 2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-20 d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPublish Date
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-l-10 text-secondary\">30 Feb 2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-20 d-inline-block\">Ends
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-l-10  text-info\">30 May, 2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"border-top card-footer p-0\">
\t\t\t\t\t\t\t\t<div class=\"campaign-metrics d-xl-inline-block\">
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0\">45k</h4>
\t\t\t\t\t\t\t\t\t<p>Total Reach</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"campaign-metrics d-xl-inline-block\">
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0\">29k</h4>
\t\t\t\t\t\t\t\t\t<p>Total Views</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"campaign-metrics d-xl-inline-block\">
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-0\">5k</h4>
\t\t\t\t\t\t\t\t\t<p>Total Click</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-msg\" role=\"tabpanel\" aria-labelledby=\"pills-msg-tab\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<h5 class=\"card-header\">Send Messages</h5>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"offset-xl-3 col-xl-6 offset-lg-3 col-lg-3 col-md-12 col-sm-12 col-12 p-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"name\">Your Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-lg\" id=\"name\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Your Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control form-control-lg\" id=\"email\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"subject\">Subject</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-lg\" id=\"subject\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"messages\">Messgaes</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"messages\" rows=\"3\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary float-right\">Send Message</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t<!-- end campaign tab one -->
\t\t\t<!-- ============================================================== -->
\t\t</div>
\t\t<!-- ============================================================== -->
\t<!-- end campaign data -->
\t\t<!-- ============================================================== -->
\t</div>
</div></div>{% endblock %}
", "admin/dashboard.html.twig", "/var/www/realtyBahrain.com/admin/templates/admin/dashboard.html.twig");
    }
}
