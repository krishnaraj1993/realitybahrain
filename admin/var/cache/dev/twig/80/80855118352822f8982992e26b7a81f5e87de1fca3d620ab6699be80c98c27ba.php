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

/* admin/profile.html.twig */
class __TwigTemplate_ff7a89e61d44bc476c11b40dc439d9da495d5f7a9352bd792269f3830e9652a7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User Profile
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

\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t<div class=\"card\">
\t\t\t<h5 class=\"card-header\">Profile</h5>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"media\">
\t\t\t\t\t<img class=\"mr-3 user-avatar-lg rounded\" src=\"/";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "profileImage", [], "array", false, false, false, 14), "html", null, true);
        echo "\" alt=\"image\">
\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t<h1>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "firstname", [], "array", false, false, false, 16), "html", null, true);
        echo "
\t\t\t\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "lastname", [], "array", false, false, false, 17), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-warning circle mt-1\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "mobilenumber", [], "array", false, false, false, 19), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-12\">
\t\t<div class=\"simple-outline-card\">
\t\t\t<ul class=\"nav nav-tabs\" id=\"myTab6\" role=\"tablist\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link border-left-0 active show\" id=\"home-tab-simple-outline\" data-toggle=\"tab\" href=\"#home-simple-outline\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Change Password</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"profile-tab-simple-outline\" data-toggle=\"tab\" href=\"#profile-simple-outline\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">App Notification</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\" id=\"myTabContent6\">
\t\t\t\t<div class=\"tab-pane fade active show\" id=\"home-simple-outline\" role=\"tabpanel\" aria-labelledby=\"home-tab-simple-outline\">
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t<form action=\"change-password\" method=\"post\">
\t\t\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 42
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t<label for=\"validationCustom03\">New password</label>
\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"validationCustom03\" placeholder=\"old Password\" required=\"\">
\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\tPlease provide a valid city.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t<label for=\"validationCustom04\">Confirm password</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"plainPassword\" class=\"form-control\" id=\"validationCustom04\" placeholder=\"New Password\" required=\"\">
\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\tPlease provide a valid state.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tYou must agree before submitting.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\">Submit Request</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"profile-simple-outline\" role=\"tabpanel\" aria-labelledby=\"profile-tab-simple-outline\">
\t\t\t\t\t<h3>0 Notification </h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 46,  129 => 43,  126 => 42,  122 => 41,  97 => 19,  92 => 17,  88 => 16,  83 => 14,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User Profile
{% endblock %}

{% block body %}


\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t<div class=\"card\">
\t\t\t<h5 class=\"card-header\">Profile</h5>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"media\">
\t\t\t\t\t<img class=\"mr-3 user-avatar-lg rounded\" src=\"/{{ data['profileImage'] }}\" alt=\"image\">
\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t<h1>{{ data['firstname'] }}
\t\t\t\t\t\t\t{{ data['lastname'] }}</h1>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-warning circle mt-1\">{{ data['mobilenumber'] }}</a>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-12\">
\t\t<div class=\"simple-outline-card\">
\t\t\t<ul class=\"nav nav-tabs\" id=\"myTab6\" role=\"tablist\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link border-left-0 active show\" id=\"home-tab-simple-outline\" data-toggle=\"tab\" href=\"#home-simple-outline\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Change Password</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"profile-tab-simple-outline\" data-toggle=\"tab\" href=\"#profile-simple-outline\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">App Notification</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\" id=\"myTabContent6\">
\t\t\t\t<div class=\"tab-pane fade active show\" id=\"home-simple-outline\" role=\"tabpanel\" aria-labelledby=\"home-tab-simple-outline\">
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t<form action=\"change-password\" method=\"post\">
\t\t\t\t\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t\t{{ message }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t<label for=\"validationCustom03\">New password</label>
\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"validationCustom03\" placeholder=\"old Password\" required=\"\">
\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\tPlease provide a valid city.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t<label for=\"validationCustom04\">Confirm password</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"plainPassword\" class=\"form-control\" id=\"validationCustom04\" placeholder=\"New Password\" required=\"\">
\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\tPlease provide a valid state.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tYou must agree before submitting.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\">Submit Request</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"profile-simple-outline\" role=\"tabpanel\" aria-labelledby=\"profile-tab-simple-outline\">
\t\t\t\t\t<h3>0 Notification </h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "admin/profile.html.twig", "/var/www/realtyBahrain.com/admin/templates/admin/profile.html.twig");
    }
}
