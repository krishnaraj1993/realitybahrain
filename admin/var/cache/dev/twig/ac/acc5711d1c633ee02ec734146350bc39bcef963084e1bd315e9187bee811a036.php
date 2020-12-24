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

        echo "Hello AdminController!
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
\t\t\t\t<p class=\"lead\">
\t\t\t\t\tAll the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
\t\t\t\t</p>
\t\t\t\t<p>Phasellus non ante gravida, ultricies neque a, fermentum leo. Etiam ornare enim arcu, at venenatis odio mollis quis. Mauris fermentum elementum ligula in efficitur. Aliquam id congue lorem. Proin consectetur feugiasse platea dictumst. Pellentesque sed justo aliquet, posuere sem nec, elementum ante.</p>
\t\t\t\t<a href=\"#\" class=\"btn btn-secondary\">Go somewhere</a>
\t\t\t</div>
\t\t\t<div class=\"tab-pane fade\" id=\"profile-vertical\" role=\"tabpanel\" aria-labelledby=\"profile-vertical-tab\">
\t\t\t\t<h3>Tab Heading Vertical Title</h3>
\t\t\t\t<p>Nullam et tellus ac ligula condimentum sodales. Aenean tincidunt viverra suscipit. Maecenas id molestie est, a commodo nisi. Quisque fringilla turpis nec elit eleifend vestibulum. Aliquam sed purus in odio ullamcorper congue consectetur in neque. Aenean sem ex, tempor et auctor sed, congue id neque.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tFusce a eros pellentesque, ultricies urna nec, consectetur dolor. Nam dapibus scelerisque risus, a commodo mi tempus eu.</p>
\t\t\t</div>
\t\t\t<div class=\"tab-pane fade\" id=\"contact-vertical\" role=\"tabpanel\" aria-labelledby=\"contact-vertical-tab\">
\t\t\t\t<h3>Tab Heading Vertical Title</h3>
\t\t\t\t<p>Vivamus pellentesque vestibulum lectus vitae auctor. Maecenas eu sodales arcu. Fusce lobortis, libero ac cursus feugiat, nibh ex ultricies tortor, id dictum massa nisl ac nisi. Fusce a eros pellentesque, ultricies urna nec, consectetur dolor. Nam dapibus scelerisque risus, a commodo mi tempus eu.</p>
\t\t\t\t<p>
\t\t\t\t\tFusce a eros pellentesque, ultricies urna nec, consectetur dolor. Nam dapibus scelerisque risus, a commodo mi tempus eu.</p>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
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
        return array (  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AdminController!
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
\t\t\t\t<p class=\"lead\">
\t\t\t\t\tAll the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
\t\t\t\t</p>
\t\t\t\t<p>Phasellus non ante gravida, ultricies neque a, fermentum leo. Etiam ornare enim arcu, at venenatis odio mollis quis. Mauris fermentum elementum ligula in efficitur. Aliquam id congue lorem. Proin consectetur feugiasse platea dictumst. Pellentesque sed justo aliquet, posuere sem nec, elementum ante.</p>
\t\t\t\t<a href=\"#\" class=\"btn btn-secondary\">Go somewhere</a>
\t\t\t</div>
\t\t\t<div class=\"tab-pane fade\" id=\"profile-vertical\" role=\"tabpanel\" aria-labelledby=\"profile-vertical-tab\">
\t\t\t\t<h3>Tab Heading Vertical Title</h3>
\t\t\t\t<p>Nullam et tellus ac ligula condimentum sodales. Aenean tincidunt viverra suscipit. Maecenas id molestie est, a commodo nisi. Quisque fringilla turpis nec elit eleifend vestibulum. Aliquam sed purus in odio ullamcorper congue consectetur in neque. Aenean sem ex, tempor et auctor sed, congue id neque.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tFusce a eros pellentesque, ultricies urna nec, consectetur dolor. Nam dapibus scelerisque risus, a commodo mi tempus eu.</p>
\t\t\t</div>
\t\t\t<div class=\"tab-pane fade\" id=\"contact-vertical\" role=\"tabpanel\" aria-labelledby=\"contact-vertical-tab\">
\t\t\t\t<h3>Tab Heading Vertical Title</h3>
\t\t\t\t<p>Vivamus pellentesque vestibulum lectus vitae auctor. Maecenas eu sodales arcu. Fusce lobortis, libero ac cursus feugiat, nibh ex ultricies tortor, id dictum massa nisl ac nisi. Fusce a eros pellentesque, ultricies urna nec, consectetur dolor. Nam dapibus scelerisque risus, a commodo mi tempus eu.</p>
\t\t\t\t<p>
\t\t\t\t\tFusce a eros pellentesque, ultricies urna nec, consectetur dolor. Nam dapibus scelerisque risus, a commodo mi tempus eu.</p>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "admin/config.html.twig", "/var/www/realtyBahrain.com/admin/templates/admin/config.html.twig");
    }
}
