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
\t\t\t\t\t<form action=\"\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Agency Name</label>
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
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Agency Admin</label>
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
            echo " style=\"display:none\" ";
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
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"plainPassword\" name=\"plainPassword\" placeholder=\"Your name..\" required>

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
\t\t\t\t\t\t";
        // line 60
        if ((isset($context["plans"]) || array_key_exists("plans", $context) ? $context["plans"] : (function () { throw new RuntimeError('Variable "plans" does not exist.', 60, $this->source); })())) {
            // line 61
            echo "\t\t\t\t\t\t\t<div class=\"form-group\" ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 61, $this->source); })()), "id", [], "array", false, false, false, 61), 0))) {
                echo " style=\"display:none\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">User Plan</label>


\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"userPlan\" name=\"userPlan\" style=\"height: 41px;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plans"]) || array_key_exists("plans", $context) ? $context["plans"] : (function () { throw new RuntimeError('Variable "plans" does not exist.', 67, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                // line 68
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "id", [], "array", false, false, false, 68), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "title", [], "array", false, false, false, 68), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<!--<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"addon-modal-pop-up\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">AddOns</button>
\t\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t\t\t<!-- Add Modal -->
\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Modal title</h5>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom03\">Title</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title\" class=\"form-control input0\" id=\"input1\" placeholder=\"Title\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom04\">BHD</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bhd\" class=\"form-control input1\" id=\"input2\" placeholder=\"BHD\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom05\">Six Month Package</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"six_month_package\" class=\"form-control input2\" id=\"input3\" placeholder=\"Six Month Package\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom03\">Annual Package</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"annual_package\" class=\"form-control input3\" id=\"input4\" placeholder=\"Annual Package\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom04\">Promo Annual</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"promo_annual\" class=\"form-control input4\" id=\"input5\" placeholder=\"Promo Annual\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom05\">Listing</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"listing\" class=\"form-control input5\" id=\"input6\" placeholder=\"Listing\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom03\">CRM</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"crm\" class=\"form-control input6\" id=\"input7\" placeholder=\"CRM\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom04\">Featured</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"fetured\" class=\"form-control input7\" id=\"input8\" placeholder=\"Featured\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom05\">Premium</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"premium\" class=\"form-control input8\" id=\"input9\" placeholder=\"Premium\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary submit-addons\" type=\"button\" onclick>Save</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Add Modal end-->
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"Submit\" style=\"width: 100%;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"addon-data\"></div>
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
        return array (  190 => 77,  181 => 70,  170 => 68,  166 => 67,  154 => 61,  152 => 60,  147 => 58,  138 => 52,  117 => 36,  106 => 28,  98 => 23,  90 => 18,  86 => 17,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
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
\t\t\t\t\t<form action=\"\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Agency Name</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"fname\" value=\"{{ data['firstname'] }}\" name=\"firstname\" placeholder=\"Your name..\" required>
\t\t\t\t\t\t\t<input type=\"hidden\" value=\"{{ data['id'] }}\" id=\"id\" name=\"id\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Agency Admin</label>
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
\t\t\t\t\t\t<div class=\"form-group\" {% if data['id']!=0 %} style=\"display:none\" {% endif %}>
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">User Role</label>
\t\t\t\t\t\t\t<select class=\"form-control\" id=\"userrole\" name=\"userrole\">
\t\t\t\t\t\t\t\t<option value=\"ROLE_AGENCY\">Agency</option>
\t\t\t\t\t\t\t\t<option value=\"ROLE_FSBO\">FSBO</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Password</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"plainPassword\" name=\"plainPassword\" placeholder=\"Your name..\" required>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Mobile Number</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"mobile\" value=\"{{ data['mobile'] }}\" name=\"mobile\" placeholder=\"Your name..\" required>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">Address</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"address\" value=\"{{ data['address'] }}\" name=\"address\" placeholder=\"Your name..\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% if plans %}
\t\t\t\t\t\t\t<div class=\"form-group\" {% if data['id']!=0 %} style=\"display:none\" {% endif %}>
\t\t\t\t\t\t\t\t<label for=\"fname\" class=\"col-form-label\">User Plan</label>


\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"userPlan\" name=\"userPlan\" style=\"height: 41px;\">
\t\t\t\t\t\t\t\t\t\t{% for  plan in plans %}
\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ plan['id'] }}\">{{ plan['title'] }}</option>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<!--<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"addon-modal-pop-up\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">AddOns</button>
\t\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<!-- Add Modal -->
\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Modal title</h5>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom03\">Title</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title\" class=\"form-control input0\" id=\"input1\" placeholder=\"Title\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom04\">BHD</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bhd\" class=\"form-control input1\" id=\"input2\" placeholder=\"BHD\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom05\">Six Month Package</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"six_month_package\" class=\"form-control input2\" id=\"input3\" placeholder=\"Six Month Package\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom03\">Annual Package</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"annual_package\" class=\"form-control input3\" id=\"input4\" placeholder=\"Annual Package\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom04\">Promo Annual</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"promo_annual\" class=\"form-control input4\" id=\"input5\" placeholder=\"Promo Annual\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom05\">Listing</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"listing\" class=\"form-control input5\" id=\"input6\" placeholder=\"Listing\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom03\">CRM</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"crm\" class=\"form-control input6\" id=\"input7\" placeholder=\"CRM\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom04\">Featured</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"fetured\" class=\"form-control input7\" id=\"input8\" placeholder=\"Featured\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"validationCustom05\">Premium</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"premium\" class=\"form-control input8\" id=\"input9\" placeholder=\"Premium\" required=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary submit-addons\" type=\"button\" onclick>Save</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Add Modal end-->
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"Submit\" style=\"width: 100%;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"addon-data\"></div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t</div>
{% endblock %}
", "agency/newUser.html.twig", "/var/www/realtyBahrain.com/admin/templates/agency/newUser.html.twig");
    }
}
