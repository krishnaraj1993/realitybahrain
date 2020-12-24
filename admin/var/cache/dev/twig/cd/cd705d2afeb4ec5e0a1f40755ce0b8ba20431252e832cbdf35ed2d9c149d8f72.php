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

/* agency/newUser.html.twig */
class __TwigTemplate_32dfa95cbf73bd45625ec221082b5d7642747c4ac19c6f85300c93b6ef46c937 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agency/newUser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agency/newUser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New User
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

\t<div class=\"body-wrapper\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\"></div>
\t\t\t<div class=\"col-sm-6 card\">
\t\t\t\t<div class=\"formcontainer card-body\">
\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">First Name</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"fname\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "firstname", [], "array", false, false, false, 17), "html", null, true);
        echo "\" name=\"firstname\" placeholder=\"Your name..\" required>
\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "id", [], "array", false, false, false, 18), "html", null, true);
        echo "\" id=\"id\" name=\"id\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Last Name</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lname\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "lastname", [], "array", false, false, false, 23), "html", null, true);
        echo "\" name=\"lastname\" placeholder=\"Your name..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Email</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"email\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "email", [], "array", false, false, false, 28), "html", null, true);
        echo "\" name=\"email\" placeholder=\"Your name..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">User Profile Image</label>
\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" id=\"file\" name=\"profile\" placeholder=\"Your name..\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" ";
        // line 36
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()), "id", [], "array", false, false, false, 36), 0))) {
            echo " style=\"display:none\"  ";
        }
        echo ">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">User Role</label>
\t\t\t\t\t\t\t<select class=\"form-control\" id=\"userrole\" name=\"userrole\">
\t\t\t\t\t\t\t\t<option value=\"ROLE_AGENCY\">Agency</option>
\t\t\t\t\t\t\t\t<option value=\"ROLE_FSBO\">FSBO</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Password</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"plainPassword\"  name=\"plainPassword\" placeholder=\"Your name..\" required>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Mobile Number</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"mobile\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 52, $this->source); })()), "mobile", [], "array", false, false, false, 52), "html", null, true);
        echo "\" name=\"mobile\" placeholder=\"Your name..\" required>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Address</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"address\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "address", [], "array", false, false, false, 58), "html", null, true);
        echo "\" name=\"address\" placeholder=\"Your name..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"Submit\" style=\"width: 100%;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "agency/newUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 58,  138 => 52,  117 => 36,  106 => 28,  98 => 23,  90 => 18,  86 => 17,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New User
{% endblock %}

{% block body %}


\t<div class=\"body-wrapper\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\"></div>
\t\t\t<div class=\"col-sm-6 card\">
\t\t\t\t<div class=\"formcontainer card-body\">
\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">First Name</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"fname\" value=\"{{ data['firstname'] }}\" name=\"firstname\" placeholder=\"Your name..\" required>
\t\t\t\t\t\t\t<input type=\"hidden\" value=\"{{ data['id'] }}\" id=\"id\" name=\"id\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Last Name</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lname\" value=\"{{ data['lastname'] }}\" name=\"lastname\" placeholder=\"Your name..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Email</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"email\" value=\"{{ data['email'] }}\" name=\"email\" placeholder=\"Your name..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">User Profile Image</label>
\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" id=\"file\" name=\"profile\" placeholder=\"Your name..\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" {% if data['id']!=0  %} style=\"display:none\"  {% endif %}>
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">User Role</label>
\t\t\t\t\t\t\t<select class=\"form-control\" id=\"userrole\" name=\"userrole\">
\t\t\t\t\t\t\t\t<option value=\"ROLE_AGENCY\">Agency</option>
\t\t\t\t\t\t\t\t<option value=\"ROLE_FSBO\">FSBO</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Password</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"plainPassword\"  name=\"plainPassword\" placeholder=\"Your name..\" required>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Mobile Number</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"mobile\" value=\"{{ data['mobile'] }}\" name=\"mobile\" placeholder=\"Your name..\" required>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Address</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"address\" value=\"{{ data['address'] }}\" name=\"address\" placeholder=\"Your name..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"Submit\" style=\"width: 100%;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t</div>
{% endblock %}
", "agency/newUser.html.twig", "/var/www/realtyBahrain.com/admin/templates/agency/newUser.html.twig");
    }
}
