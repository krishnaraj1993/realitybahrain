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

/* user_plans/new.html.twig */
class __TwigTemplate_98cc378cbc1695dfe4d308764d54cb2b4d123349a7dd6920d25ec0ecf8665e03 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_plans/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_plans/new.html.twig", 1);
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
\t<div class=\"body-wrapper\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\"></div>
\t\t\t<div class=\"col-sm-6 card\">
\t\t\t\t<div class=\"formcontainer card-body\">
\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Plan Title</label>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" id =\"id\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "id", [], "array", false, false, false, 16), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"fname\" name=\"title\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "title", [], "array", false, false, false, 17), "html", null, true);
        echo "\" placeholder=\"Your Title..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Plan Description</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lname\" name=\"description\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "description", [], "array", false, false, false, 22), "html", null, true);
        echo "\" placeholder=\"Your description..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">BHD</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"bhd\" name=\"bhd\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "bhd", [], "array", false, false, false, 27), "html", null, true);
        echo "\" placeholder=\"Your BHD..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Six Mounth Package</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"sixmp\" name=\"sixmp\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "sixmp", [], "array", false, false, false, 32), "html", null, true);
        echo "\" placeholder=\"amount..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"strength\" class=\"col-form-label\">Annual Package</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"annualpack\" name=\"annualpack\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 37, $this->source); })()), "annualpack", [], "array", false, false, false, 37), "html", null, true);
        echo "\" placeholder=\"Your annualpack..\" required>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Promo Package</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"promopack\" name=\"promopack\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "promopack", [], "array", false, false, false, 42), "html", null, true);
        echo "\" placeholder=\"promopack..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Available Listings</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"listing\" name=\"listing\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), "listing", [], "array", false, false, false, 47), "html", null, true);
        echo "\" placeholder=\"listing..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">CRM Enable &nbsp;&nbsp;&nbsp;</label>
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"crm\" value=\"1\" ";
        // line 53
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 53, $this->source); })()), "crm", [], "array", false, false, false, 53), 1))) {
            echo " checked=\"\"  ";
        }
        echo " class=\"custom-control-input\"><span class=\"custom-control-label\">Yes</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"crm\" value=\"0\" ";
        // line 56
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "crm", [], "array", false, false, false, 56), 0))) {
            echo " checked=\"\"  ";
        }
        echo " class=\"custom-control-input\"><span class=\"custom-control-label\">No</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Number Agents to allowed</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"agent\" name=\"agent\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 62, $this->source); })()), "agent", [], "array", false, false, false, 62), "html", null, true);
        echo "\" placeholder=\"agent..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Fetured</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"fetured\" name=\"fetured\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 67, $this->source); })()), "fetured", [], "array", false, false, false, 67), "html", null, true);
        echo "\" placeholder=\"fetured..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Premium</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"promo\" name=\"promo\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 72, $this->source); })()), "promo", [], "array", false, false, false, 72), "html", null, true);
        echo "\" placeholder=\"promo..\" required>
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
        return "user_plans/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 72,  173 => 67,  165 => 62,  154 => 56,  146 => 53,  137 => 47,  129 => 42,  121 => 37,  113 => 32,  105 => 27,  97 => 22,  89 => 17,  85 => 16,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Users
{% endblock %}

{% block body %}

\t<div class=\"body-wrapper\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\"></div>
\t\t\t<div class=\"col-sm-6 card\">
\t\t\t\t<div class=\"formcontainer card-body\">
\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Plan Title</label>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" id =\"id\" value=\"{{data['id']}}\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"fname\" name=\"title\" value=\"{{data['title'] }}\" placeholder=\"Your Title..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Plan Description</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lname\" name=\"description\" value=\"{{data['description'] }}\" placeholder=\"Your description..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">BHD</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"bhd\" name=\"bhd\" value=\"{{data['bhd'] }}\" placeholder=\"Your BHD..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Six Mounth Package</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"sixmp\" name=\"sixmp\" value=\"{{data['sixmp'] }}\" placeholder=\"amount..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"strength\" class=\"col-form-label\">Annual Package</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"annualpack\" name=\"annualpack\" value=\"{{data['annualpack'] }}\" placeholder=\"Your annualpack..\" required>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Promo Package</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"promopack\" name=\"promopack\" value=\"{{data['promopack'] }}\" placeholder=\"promopack..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Available Listings</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"listing\" name=\"listing\" value=\"{{data['listing'] }}\" placeholder=\"listing..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">CRM Enable &nbsp;&nbsp;&nbsp;</label>
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"crm\" value=\"1\" {% if (data['crm'])==1 %} checked=\"\"  {% endif %} class=\"custom-control-input\"><span class=\"custom-control-label\">Yes</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"crm\" value=\"0\" {% if (data['crm'])==0 %} checked=\"\"  {% endif %} class=\"custom-control-input\"><span class=\"custom-control-label\">No</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Number Agents to allowed</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"agent\" name=\"agent\" value=\"{{data['agent'] }}\" placeholder=\"agent..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Fetured</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"fetured\" name=\"fetured\" value=\"{{data['fetured'] }}\" placeholder=\"fetured..\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Premium</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"promo\" name=\"promo\" value=\"{{data['promo'] }}\" placeholder=\"promo..\" required>
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
", "user_plans/new.html.twig", "/var/www/realtyBahrain.com/admin/templates/user_plans/new.html.twig");
    }
}
