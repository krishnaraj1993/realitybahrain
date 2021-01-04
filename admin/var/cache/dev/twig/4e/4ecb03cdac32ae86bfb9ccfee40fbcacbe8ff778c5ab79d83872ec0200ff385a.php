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

/* agent/newUser.html.twig */
class __TwigTemplate_f86f9977b67d6d68e796da2715771d83bfd168ab5840b302e1b57971be63eb1f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/newUser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agent/newUser.html.twig", 1);
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
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"fname\" name=\"firstname\" placeholder=\"Your name..\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Last Name</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lname\" name=\"lastname\" placeholder=\"Your name..\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Email</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Your name..\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">User Profile Image</label>
\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" id=\"file\" name=\"profile\" placeholder=\"Your name..\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">User Role</label>
\t\t\t\t\t\t\t<select class=\"form-control\" id=\"userrole\" name=\"userrole\">
\t\t\t\t\t\t\t\t<option value=\"ROLE_AGENCY\">Agency</option>
\t\t\t\t\t\t\t\t<option value=\"ROLE_FSBO\">FSBO</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Password</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"plainPassword\" name=\"plainPassword\" placeholder=\"Your name..\">

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Mobile Number</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"mobile\" name=\"mobile\" placeholder=\"Your name..\">

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Address</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"address\" name=\"address\" placeholder=\"Your name..\">
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
        return "agent/newUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
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
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"fname\" name=\"firstname\" placeholder=\"Your name..\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Last Name</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lname\" name=\"lastname\" placeholder=\"Your name..\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Email</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Your name..\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">User Profile Image</label>
\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" id=\"file\" name=\"profile\" placeholder=\"Your name..\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">User Role</label>
\t\t\t\t\t\t\t<select class=\"form-control\" id=\"userrole\" name=\"userrole\">
\t\t\t\t\t\t\t\t<option value=\"ROLE_AGENCY\">Agency</option>
\t\t\t\t\t\t\t\t<option value=\"ROLE_FSBO\">FSBO</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Password</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"plainPassword\" name=\"plainPassword\" placeholder=\"Your name..\">

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Mobile Number</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"mobile\" name=\"mobile\" placeholder=\"Your name..\">

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Address</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"address\" name=\"address\" placeholder=\"Your name..\">
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
", "agent/newUser.html.twig", "/var/www/realtyBahrain.com/admin/templates/agent/newUser.html.twig");
    }
}
