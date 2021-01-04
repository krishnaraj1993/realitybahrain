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

/* property/new.html.twig */
class __TwigTemplate_8eff37c182aba7e8a375d97d09901c4228efacd3d39a3500cfe266e9cd322589 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "property/new.html.twig", 1);
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
        echo "\t<form method=\"post\" id=\"propertyTypeForm\" class=\"needs-validation was-validated\" novalidate>
\t\t<div class=\"tab-vertical-outline\">
\t\t\t<ul class=\"nav nav-tabs \" id=\"myTab4\" role=\"tablist\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link  active show\" id=\"home-outline-verti-tab\" data-toggle=\"tab\" href=\"#home-outline-vertical\" role=\"tab\" aria-controls=\"home\" aria-selected=\"false\">Basic Information</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"profile-outline-verti-tab\" data-toggle=\"tab\" href=\"#profile-outline-vertical\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">More Information</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"contact-outline-verti-tab\" data-toggle=\"tab\" href=\"#contact-outline-vertical\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"true\">Assets Manage</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"feature-outline-verti-tab\" data-toggle=\"tab\" href=\"#feature-outline-vertical\" role=\"tab\" aria-controls=\"feature\" aria-selected=\"true\">Property Features</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"price-outline-verti-tab\" data-toggle=\"tab\" href=\"#price-outline-vertical\" role=\"tab\" aria-controls=\"price\" aria-selected=\"true\">Property Price</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"final-outline-verti-tab\" data-toggle=\"tab\" href=\"#final-outline-vertical\" role=\"tab\" aria-controls=\"final\" aria-selected=\"true\">Tags and Final submit</a>
\t\t\t\t</li>


\t\t\t</ul>
\t\t\t<div
\t\t\t\tclass=\"tab-content\" id=\"myTabContent4\">

\t\t\t\t<!--------------------------------TAB 1------------------------------------>
\t\t\t\t<div class=\"tab-pane fade active show\" id=\"home-outline-vertical\" role=\"tabpanel\" aria-labelledby=\"home-outline-verti-tab\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"inputText3\" class=\"col-form-label\">Title</label>
\t\t\t\t\t\t<input type=\"hidden\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 41, $this->source); })()), "id", [], "array", false, false, false, 41), "html", null, true);
        echo "\" name=\"id\">
\t\t\t\t\t\t<input id=\"title\" name=\"title\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 42, $this->source); })()), "Title", [], "array", false, false, false, 42), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" required>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleFormControlTextarea1\">About Property</label>
\t\t\t\t\t\t<textarea class=\"form-control\" name=\"about\" id=\"about\" rows=\"3\" required>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 48, $this->source); })()), "description", [], "array", false, false, false, 48), "html", null, true);
        echo "</textarea>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"input-select\">Property Type</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"ptype\" name=\"ptype\" required>
\t\t\t\t\t\t\t<option value=\"\">Property Type</option>
\t\t\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["propertyType"]) || array_key_exists("propertyType", $context) ? $context["propertyType"] : (function () { throw new RuntimeError('Variable "propertyType" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["status"]) {
            // line 56
            echo "\t\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "array", false, false, false, 56), twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 56, $this->source); })()), "ptype", [], "array", false, false, false, 56)))) {
                // line 57
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "array", false, false, false, 57), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "array", false, false, false, 57), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 59
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "array", false, false, false, 59), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "array", false, false, false, 59), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"input-select\">Property Status</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"status\" name=\"status\" required>
\t\t\t\t\t\t\t<option value=\"\">Property Status</option>
\t\t\t\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["propertyStatus"]) || array_key_exists("propertyStatus", $context) ? $context["propertyStatus"] : (function () { throw new RuntimeError('Variable "propertyStatus" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["status"]) {
            // line 70
            echo "\t\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "array", false, false, false, 70), twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 70, $this->source); })()), "pstatus", [], "array", false, false, false, 70)))) {
                // line 71
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "array", false, false, false, 71), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "array", false, false, false, 71), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "array", false, false, false, 73), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "array", false, false, false, 73), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--------------------------------+++------------------------------------>

\t\t\t<input type=\"hidden\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["server_path"]) || array_key_exists("server_path", $context) ? $context["server_path"] : (function () { throw new RuntimeError('Variable "server_path" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "\" id=\"server_path\">
\t\t\t\t<div class=\"tab-pane fade\" id=\"profile-outline-vertical\" role=\"tabpanel\" aria-labelledby=\"profile-outline-verti-tab\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"input-select\">EWA</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"ewa\" name=\"ewa\" required>
\t\t\t\t\t\t\t<option value=\"\">select EWA</option>
\t\t\t\t\t\t\t";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Ewa"]) || array_key_exists("Ewa", $context) ? $context["Ewa"] : (function () { throw new RuntimeError('Variable "Ewa" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 88
            echo "\t\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "array", false, false, false, 88), twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 88, $this->source); })()), "ewa", [], "array", false, false, false, 88)))) {
                // line 89
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "array", false, false, false, 89), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "array", false, false, false, 89), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 91
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "array", false, false, false, 91), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "array", false, false, false, 91), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 93
            echo "
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleFormControlTextarea1\">Furnishing</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"furnishing\" name=\"furnishing\" required>
\t\t\t\t\t\t\t<option value=\"\">select Furnishing</option>
\t\t\t\t\t\t\t";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Furnishing"]) || array_key_exists("Furnishing", $context) ? $context["Furnishing"] : (function () { throw new RuntimeError('Variable "Furnishing" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 104
            echo "\t\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "array", false, false, false, 104), twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 104, $this->source); })()), "furnishing", [], "array", false, false, false, 104)))) {
                // line 105
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "array", false, false, false, 105), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "array", false, false, false, 105), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 107
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "array", false, false, false, 107), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "array", false, false, false, 107), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"input-select\">Property Value</label>
\t\t\t\t\t\t<input id=\"pvalue\" name=\"pvalue\" type=\"text\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 115, $this->source); })()), "value", [], "array", false, false, false, 115), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"input-select\">mortgage</label>
\t\t\t\t\t\t<input id=\"mortgage\" name=\"mortgage\" type=\"text\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 120, $this->source); })()), "Mortgage", [], "array", false, false, false, 120), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"input-select\">Select Location</label>
\t\t\t\t\t\t<input id=\"location\" name=\"location\" type=\"text\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 125, $this->source); })()), "location", [], "array", false, false, false, 125), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t<label for=\"validationCustom03\">City</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"pcity\" name=\"pcity\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 131, $this->source); })()), "city", [], "array", false, false, false, 131), "html", null, true);
        echo "\" placeholder=\"City\" required>
\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\tPlease provide a valid city.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t<label for=\"validationCustom04\">State</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"pstate\" name=\"pstate\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 138, $this->source); })()), "state", [], "array", false, false, false, 138), "html", null, true);
        echo "\" placeholder=\"State\" required>
\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\tPlease provide a valid state.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t<label for=\"validationCustom05\">Zip</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"pzip\" name=\"pzip\" value=\"";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 145, $this->source); })()), "zip", [], "array", false, false, false, 145), "html", null, true);
        echo "\" placeholder=\"Zip\" required>
\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\tPlease provide a valid zip.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"tab-pane fade\" id=\"price-outline-vertical\" role=\"tabpanel\" aria-labelledby=\"price-outline-verti-tab\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"pinvestment\" class=\"col-form-label\">Building Name</label>
\t\t\t\t\t\t<input id=\"pbuildingName\" name=\"pbuildingName\" type=\"text\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 158, $this->source); })()), "buildingName", [], "array", false, false, false, 158), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"pinvestment\" class=\"col-form-label\">Investment</label>
\t\t\t\t\t\t<input id=\"pinvestment\" name=\"pinvestment\" type=\"text\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 162, $this->source); })()), "investment", [], "array", false, false, false, 162), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"contact-outline-vertical\" role=\"tabpanel\" aria-labelledby=\"contact-outline-verti-tab\">
\t\t\t\t\t<div class=\"card-body imageList\">
\t\t\t\t\t\t<input type=\"file\" id=\"imageAssets\" name=\"imageAssets\" style=\"display:none\" onchange=\"setimage(this)\">
\t\t\t\t\t\t<input type=\"hidden\" value=\"0\" id=\"imageCounts\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg btn-block clickimagePlus\">Upload Images</button>
\t\t\t\t\t\t<table class=\"table table-striped table-bordered first dataTable\" id=\"imagelists\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>id</th>
\t\t\t\t\t\t\t\t<th style=\"width: 25%;\">slno</th>
\t\t\t\t\t\t\t\t<th>image</th>
\t\t\t\t\t\t\t\t<th>action</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 177, $this->source); })()), "assets", [], "array", false, false, false, 177));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["Properties"]) {
            // line 178
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 179), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td><input type=\"number\" value=\"";
            // line 180
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" style=\"width: 80%;\"  name=\"assetsnumber[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Properties"], "id", [], "array", false, false, false, 180), "html", null, true);
            echo "]\"/></td>
\t\t\t\t\t\t\t\t<td><img src=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["Properties"], "url", [], "array", false, false, false, 181)), "html", null, true);
            echo "\" width=\"100px\" height=\"100px\" class=\"img-fluid mr-3\" />
\t\t\t\t\t\t\t\t</td><td><button type=\"button\" data-id=\"";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Properties"], "id", [], "array", false, false, false, 182), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm delete-assets\">x</button></td>
\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['Properties'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"feature-outline-vertical\" role=\"tabpanel\" aria-labelledby=\"feature-outline-verti-tab\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"input-select\">Bed Rooms</label>
\t\t\t\t\t\t<input id=\"bedRooms\" name=\"bedRooms\" value=\"";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 192, $this->source); })()), "bedRooms", [], "array", false, false, false, 192), "html", null, true);
        echo "\" type=\"number\" class=\"form-control\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"input-select\">Bath Rooms</label>
\t\t\t\t\t\t<input id=\"bathRooms\" name=\"bathRooms\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 197, $this->source); })()), "BathRooms", [], "array", false, false, false, 197), "html", null, true);
        echo "\" type=\"number\" class=\"form-control\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-12 col-sm-3 col-form-label text-sm-right\">Area (Inch)</label>
\t\t\t\t\t\t<div class=\"col-sm-4 col-lg-3 mb-3 mb-sm-0\">
\t\t\t\t\t\t\t<input id=\"area_inch\" name=\"area_heigh\" type=\"text\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 203, $this->source); })()), "AreaHight", [], "array", false, false, false, 203), "html", null, true);
        echo "\" placeholder=\"Height\" class=\"form-control\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4 col-lg-3\">
\t\t\t\t\t\t\t<input type=\"text\" =\"\" id=\"area_inch\" name=\"area_weight\" value=\"";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 206, $this->source); })()), "AreaWidth", [], "array", false, false, false, 206), "html", null, true);
        echo "\" placeholder=\"Weight\" class=\"form-control\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<label for=\"input-select\">Property Features
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<select id='keep-order' name=\"pfeatures[]\" multiple='multiple' required>
\t\t\t\t\t\t\t";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Features"]) || array_key_exists("Features", $context) ? $context["Features"] : (function () { throw new RuntimeError('Variable "Features" does not exist.', 214, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 215
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "array", false, false, false, 215), "html", null, true);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "array", false, false, false, 215), twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 215, $this->source); })()), "features", [], "array", false, false, false, 215))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "array", false, false, false, 215), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"final-outline-vertical\" role=\"tabpanel\" aria-labelledby=\"final-outline-verti-tab\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"inputText3\" class=\"col-form-label\">Tags</label>
\t\t\t\t\t\t<input id=\"tags\" name=\"tags\" type=\"text\" class=\"form-control\" value=\"";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 223, $this->source); })()), "SeoTags", [], "array", false, false, false, 223), "html", null, true);
        echo "\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"inputText3\" class=\"col-form-label\">property For</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"property_for\" name=\"property_for\" required>
\t\t\t\t\t\t\t<option value=\"RENT\" ";
        // line 229
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 229, $this->source); })()), "listingFor", [], "array", false, false, false, 229), "RENT"))) {
            echo " selected ";
        }
        echo ">Rent</option>
\t\t\t\t\t\t\t<option value=\"SALE\" ";
        // line 230
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["Property"]) || array_key_exists("Property", $context) ? $context["Property"] : (function () { throw new RuntimeError('Variable "Property" does not exist.', 230, $this->source); })()), "listingFor", [], "array", false, false, false, 230), "SALE"))) {
            echo " selected ";
        }
        echo ">Sale</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"inputText3\" class=\"col-form-label\">Property Related To</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"property_relat\" name=\"property_relat\" required>
\t\t\t\t\t\t\t<option>Select Property</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"property_suggetion\" name=\"property_suggetion\" checked=\"\" class=\"custom-control-input\" required><span class=\"custom-control-label\">Enable Suggetion
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button type=\"submit\" id=\"submitProperty\" class=\"btn btn-primary\">Submit Property</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "property/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 230,  508 => 229,  499 => 223,  491 => 217,  476 => 215,  472 => 214,  461 => 206,  455 => 203,  446 => 197,  438 => 192,  429 => 185,  412 => 182,  408 => 181,  402 => 180,  398 => 179,  395 => 178,  378 => 177,  360 => 162,  353 => 158,  337 => 145,  327 => 138,  317 => 131,  308 => 125,  300 => 120,  292 => 115,  285 => 110,  279 => 109,  271 => 107,  263 => 105,  260 => 104,  256 => 103,  246 => 95,  239 => 93,  231 => 91,  223 => 89,  220 => 88,  216 => 87,  207 => 81,  200 => 76,  194 => 75,  186 => 73,  178 => 71,  175 => 70,  171 => 69,  162 => 62,  156 => 61,  148 => 59,  140 => 57,  137 => 56,  133 => 55,  123 => 48,  114 => 42,  110 => 41,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Property
{% endblock %}

{% block body %}
\t<form method=\"post\" id=\"propertyTypeForm\" class=\"needs-validation was-validated\" novalidate>
\t\t<div class=\"tab-vertical-outline\">
\t\t\t<ul class=\"nav nav-tabs \" id=\"myTab4\" role=\"tablist\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link  active show\" id=\"home-outline-verti-tab\" data-toggle=\"tab\" href=\"#home-outline-vertical\" role=\"tab\" aria-controls=\"home\" aria-selected=\"false\">Basic Information</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"profile-outline-verti-tab\" data-toggle=\"tab\" href=\"#profile-outline-vertical\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">More Information</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"contact-outline-verti-tab\" data-toggle=\"tab\" href=\"#contact-outline-vertical\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"true\">Assets Manage</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"feature-outline-verti-tab\" data-toggle=\"tab\" href=\"#feature-outline-vertical\" role=\"tab\" aria-controls=\"feature\" aria-selected=\"true\">Property Features</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"price-outline-verti-tab\" data-toggle=\"tab\" href=\"#price-outline-vertical\" role=\"tab\" aria-controls=\"price\" aria-selected=\"true\">Property Price</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"final-outline-verti-tab\" data-toggle=\"tab\" href=\"#final-outline-vertical\" role=\"tab\" aria-controls=\"final\" aria-selected=\"true\">Tags and Final submit</a>
\t\t\t\t</li>


\t\t\t</ul>
\t\t\t<div
\t\t\t\tclass=\"tab-content\" id=\"myTabContent4\">

\t\t\t\t<!--------------------------------TAB 1------------------------------------>
\t\t\t\t<div class=\"tab-pane fade active show\" id=\"home-outline-vertical\" role=\"tabpanel\" aria-labelledby=\"home-outline-verti-tab\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"inputText3\" class=\"col-form-label\">Title</label>
\t\t\t\t\t\t<input type=\"hidden\" value=\"{{ Property['id'] }}\" name=\"id\">
\t\t\t\t\t\t<input id=\"title\" name=\"title\" value=\"{{ Property['Title'] }}\" type=\"text\" class=\"form-control\" required>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleFormControlTextarea1\">About Property</label>
\t\t\t\t\t\t<textarea class=\"form-control\" name=\"about\" id=\"about\" rows=\"3\" required>{{ Property['description'] }}</textarea>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"input-select\">Property Type</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"ptype\" name=\"ptype\" required>
\t\t\t\t\t\t\t<option value=\"\">Property Type</option>
\t\t\t\t\t\t\t{% for key, status in propertyType %}
\t\t\t\t\t\t\t\t{% if status['id']== Property['ptype'] %}
\t\t\t\t\t\t\t\t\t<option value=\"{{status['id']}}\" selected>{{status['name']}}</option>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<option value=\"{{status['id']}}\">{{status['name']}}</option>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"input-select\">Property Status</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"status\" name=\"status\" required>
\t\t\t\t\t\t\t<option value=\"\">Property Status</option>
\t\t\t\t\t\t\t{% for key, status in propertyStatus %}
\t\t\t\t\t\t\t\t{% if status['id']== Property['pstatus'] %}
\t\t\t\t\t\t\t\t\t<option value=\"{{status['id']}}\" selected>{{status['name']}}</option>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<option value=\"{{status['id']}}\">{{status['name']}}</option>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--------------------------------+++------------------------------------>

\t\t\t<input type=\"hidden\" value=\"{{ server_path }}\" id=\"server_path\">
\t\t\t\t<div class=\"tab-pane fade\" id=\"profile-outline-vertical\" role=\"tabpanel\" aria-labelledby=\"profile-outline-verti-tab\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"input-select\">EWA</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"ewa\" name=\"ewa\" required>
\t\t\t\t\t\t\t<option value=\"\">select EWA</option>
\t\t\t\t\t\t\t{% for key, value in Ewa %}
\t\t\t\t\t\t\t\t{% if value['id']== Property['ewa'] %}
\t\t\t\t\t\t\t\t\t<option value=\"{{value['id']}}\" selected>{{value['name']}}</option>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<option value=\"{{value['id']}}\">{{value['name']}}</option>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleFormControlTextarea1\">Furnishing</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"furnishing\" name=\"furnishing\" required>
\t\t\t\t\t\t\t<option value=\"\">select Furnishing</option>
\t\t\t\t\t\t\t{% for key, value in Furnishing %}
\t\t\t\t\t\t\t\t{% if value['id']== Property['furnishing'] %}
\t\t\t\t\t\t\t\t\t<option value=\"{{value['id']}}\" selected>{{value['name']}}</option>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<option value=\"{{value['id']}}\">{{value['name']}}</option>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"input-select\">Property Value</label>
\t\t\t\t\t\t<input id=\"pvalue\" name=\"pvalue\" type=\"text\" value=\"{{ Property['value'] }}\" class=\"form-control\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"input-select\">mortgage</label>
\t\t\t\t\t\t<input id=\"mortgage\" name=\"mortgage\" type=\"text\" value=\"{{ Property['Mortgage'] }}\" class=\"form-control\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"input-select\">Select Location</label>
\t\t\t\t\t\t<input id=\"location\" name=\"location\" type=\"text\" value=\"{{ Property['location'] }}\" class=\"form-control\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t<label for=\"validationCustom03\">City</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"pcity\" name=\"pcity\" value=\"{{ Property['city'] }}\" placeholder=\"City\" required>
\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\tPlease provide a valid city.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t<label for=\"validationCustom04\">State</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"pstate\" name=\"pstate\" value=\"{{ Property['state'] }}\" placeholder=\"State\" required>
\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\tPlease provide a valid state.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2\">
\t\t\t\t\t\t\t<label for=\"validationCustom05\">Zip</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"pzip\" name=\"pzip\" value=\"{{ Property['zip'] }}\" placeholder=\"Zip\" required>
\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\tPlease provide a valid zip.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"tab-pane fade\" id=\"price-outline-vertical\" role=\"tabpanel\" aria-labelledby=\"price-outline-verti-tab\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"pinvestment\" class=\"col-form-label\">Building Name</label>
\t\t\t\t\t\t<input id=\"pbuildingName\" name=\"pbuildingName\" type=\"text\" value=\"{{ Property['buildingName'] }}\" class=\"form-control\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"pinvestment\" class=\"col-form-label\">Investment</label>
\t\t\t\t\t\t<input id=\"pinvestment\" name=\"pinvestment\" type=\"text\" value=\"{{ Property['investment'] }}\" class=\"form-control\" required>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"contact-outline-vertical\" role=\"tabpanel\" aria-labelledby=\"contact-outline-verti-tab\">
\t\t\t\t\t<div class=\"card-body imageList\">
\t\t\t\t\t\t<input type=\"file\" id=\"imageAssets\" name=\"imageAssets\" style=\"display:none\" onchange=\"setimage(this)\">
\t\t\t\t\t\t<input type=\"hidden\" value=\"0\" id=\"imageCounts\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg btn-block clickimagePlus\">Upload Images</button>
\t\t\t\t\t\t<table class=\"table table-striped table-bordered first dataTable\" id=\"imagelists\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>id</th>
\t\t\t\t\t\t\t\t<th style=\"width: 25%;\">slno</th>
\t\t\t\t\t\t\t\t<th>image</th>
\t\t\t\t\t\t\t\t<th>action</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% for  key,Properties in Property['assets'] %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ loop.index }}</td>
\t\t\t\t\t\t\t\t<td><input type=\"number\" value=\"{{ key }}\" style=\"width: 80%;\"  name=\"assetsnumber[{{ Properties['id'] }}]\"/></td>
\t\t\t\t\t\t\t\t<td><img src=\"{{ asset( Properties['url'] ) }}\" width=\"100px\" height=\"100px\" class=\"img-fluid mr-3\" />
\t\t\t\t\t\t\t\t</td><td><button type=\"button\" data-id=\"{{ Properties['id'] }}\" class=\"btn btn-primary btn-sm delete-assets\">x</button></td>
\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"feature-outline-vertical\" role=\"tabpanel\" aria-labelledby=\"feature-outline-verti-tab\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"input-select\">Bed Rooms</label>
\t\t\t\t\t\t<input id=\"bedRooms\" name=\"bedRooms\" value=\"{{ Property['bedRooms'] }}\" type=\"number\" class=\"form-control\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"input-select\">Bath Rooms</label>
\t\t\t\t\t\t<input id=\"bathRooms\" name=\"bathRooms\" value=\"{{ Property['BathRooms'] }}\" type=\"number\" class=\"form-control\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-12 col-sm-3 col-form-label text-sm-right\">Area (Inch)</label>
\t\t\t\t\t\t<div class=\"col-sm-4 col-lg-3 mb-3 mb-sm-0\">
\t\t\t\t\t\t\t<input id=\"area_inch\" name=\"area_heigh\" type=\"text\" value=\"{{ Property['AreaHight'] }}\" placeholder=\"Height\" class=\"form-control\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4 col-lg-3\">
\t\t\t\t\t\t\t<input type=\"text\" =\"\" id=\"area_inch\" name=\"area_weight\" value=\"{{ Property['AreaWidth'] }}\" placeholder=\"Weight\" class=\"form-control\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<label for=\"input-select\">Property Features
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<select id='keep-order' name=\"pfeatures[]\" multiple='multiple' required>
\t\t\t\t\t\t\t{% for key, value in Features %}
\t\t\t\t\t\t\t\t<option value=\"{{value['id']}}\" {% if value['id'] in Property['features'] %} selected {% endif %}>{{value['name']}}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"final-outline-vertical\" role=\"tabpanel\" aria-labelledby=\"final-outline-verti-tab\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"inputText3\" class=\"col-form-label\">Tags</label>
\t\t\t\t\t\t<input id=\"tags\" name=\"tags\" type=\"text\" class=\"form-control\" value=\"{{ Property['SeoTags'] }}\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"inputText3\" class=\"col-form-label\">property For</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"property_for\" name=\"property_for\" required>
\t\t\t\t\t\t\t<option value=\"RENT\" {% if Property['listingFor'] == 'RENT' %} selected {% endif %}>Rent</option>
\t\t\t\t\t\t\t<option value=\"SALE\" {% if Property['listingFor'] == 'SALE' %} selected {% endif %}>Sale</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"inputText3\" class=\"col-form-label\">Property Related To</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"property_relat\" name=\"property_relat\" required>
\t\t\t\t\t\t\t<option>Select Property</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"property_suggetion\" name=\"property_suggetion\" checked=\"\" class=\"custom-control-input\" required><span class=\"custom-control-label\">Enable Suggetion
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button type=\"submit\" id=\"submitProperty\" class=\"btn btn-primary\">Submit Property</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</form>
{% endblock %}
", "property/new.html.twig", "/var/www/realtyBahrain.com/admin/templates/property/new.html.twig");
    }
}
