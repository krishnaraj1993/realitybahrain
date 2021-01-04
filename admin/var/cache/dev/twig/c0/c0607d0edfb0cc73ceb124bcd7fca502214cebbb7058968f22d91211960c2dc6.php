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

/* base.html copy.twig */
class __TwigTemplate_be916d9c49b006e6ca328b9abf09d0a4664c7b5d51ff4d6fefdd86d5746a0f23 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html copy.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
\t<head>

\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\tContnetBox |
\t\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "\t\t</title>
\t\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "\t</head>

\t<body>
\t\t<nav class=\"navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0\" style=\"background-color: #570c0c !important;\">
\t\t\t<a class=\"navbar-brand col-sm-3 col-md-2 mr-0\" href=\"#\">Reality Bahrain</a>
\t\t\t<ul class=\"navbar-nav px-3\" style=\"background-color: #9d1313;\">
\t\t\t\t<li class=\"nav-item text-nowrap\" style=\"border-bottom: none;\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/logout\" style=\"color: white;\">Sign out</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>

\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-2 col-md-2 d-none d-md-block\">
\t\t\t\t\t<nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
\t\t\t\t\t\t<div class=\"sidebar-sticky\" style=\"position: relative;\">
\t\t\t\t\t\t\t<ul class=\"nav flex-column\">

\t\t\t\t\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "session", [], "any", false, false, false, 44), "get", [0 => "menulist"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["key"] => $context["menu"]) {
            // line 45
            echo "\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $context["menu"], "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span data-feather=\"home\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t\t\t\t\t<!--<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/application/users\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-feather=\"layers\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUsers
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>-->
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-10 col-md-10 d-none d-md-block\"> ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "

\t\t\t<link
\t\t\trel=\"canonical\" href=\"#\">

\t\t\t<!-- Bootstrap core CSS -->
\t\t\t<link
\t\t\thref=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t\t<!-- Custom styles for this template -->
\t\t\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/formdesign.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "
\t\t\t\t\t\t<script src=\"https://code.jquery.com/jquery-1.12.4.min.js\" integrity=\"sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ\" crossorigin=\"anonymous\"></script>

\t\t\t\t\t\t<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/lib/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/lib/json3.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.SuperCookie.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t\t\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
\t\t\t\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html copy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 73,  212 => 72,  208 => 71,  204 => 70,  199 => 67,  192 => 66,  180 => 64,  171 => 23,  167 => 22,  163 => 21,  157 => 18,  148 => 11,  141 => 10,  129 => 8,  122 => 66,  119 => 65,  117 => 64,  104 => 53,  93 => 48,  88 => 46,  85 => 45,  81 => 44,  60 => 25,  58 => 10,  55 => 9,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
\t<head>

\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\tContnetBox |
\t\t\t{% block title %}{% endblock %}
\t\t</title>
\t\t{% block stylesheets %}


\t\t\t<link
\t\t\trel=\"canonical\" href=\"#\">

\t\t\t<!-- Bootstrap core CSS -->
\t\t\t<link
\t\t\thref=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

\t\t\t<!-- Custom styles for this template -->
\t\t\t<link href=\"{{ asset('css/dashboard.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('css/table.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('css/formdesign.css') }}\" rel=\"stylesheet\">
\t\t{% endblock %}
\t</head>

\t<body>
\t\t<nav class=\"navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0\" style=\"background-color: #570c0c !important;\">
\t\t\t<a class=\"navbar-brand col-sm-3 col-md-2 mr-0\" href=\"#\">Reality Bahrain</a>
\t\t\t<ul class=\"navbar-nav px-3\" style=\"background-color: #9d1313;\">
\t\t\t\t<li class=\"nav-item text-nowrap\" style=\"border-bottom: none;\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/logout\" style=\"color: white;\">Sign out</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>

\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-2 col-md-2 d-none d-md-block\">
\t\t\t\t\t<nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
\t\t\t\t\t\t<div class=\"sidebar-sticky\" style=\"position: relative;\">
\t\t\t\t\t\t\t<ul class=\"nav flex-column\">

\t\t\t\t\t\t\t\t{% for key,menu in app.session.get('menulist') %}
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"{{menu}}\">
\t\t\t\t\t\t\t\t\t\t\t<span data-feather=\"home\"></span>
\t\t\t\t\t\t\t\t\t\t\t{{ key }}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t<!--<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/application/users\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-feather=\"layers\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUsers
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>-->
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-10 col-md-10 d-none d-md-block\"> {% block body %}{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t\t{% block javascripts %}

\t\t\t\t\t\t<script src=\"https://code.jquery.com/jquery-1.12.4.min.js\" integrity=\"sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ\" crossorigin=\"anonymous\"></script>

\t\t\t\t\t\t<script src=\"{{ asset('js/lib/jquery.cookie.js') }}\"></script>
\t\t\t\t\t\t<script src=\"{{ asset('js/lib/json3.min.js') }}\"></script>
\t\t\t\t\t\t<script src=\"{{ asset('js/jquery.SuperCookie.min.js') }}\"></script>
\t\t\t\t\t\t<script src=\"{{ asset('js/script.js') }}\"></script>
\t\t\t\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t\t\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
\t\t\t\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
\t\t\t\t\t{% endblock %}
", "base.html copy.twig", "/var/www/realtyBahrain.com/admin/templates/base.html copy.twig");
    }
}
