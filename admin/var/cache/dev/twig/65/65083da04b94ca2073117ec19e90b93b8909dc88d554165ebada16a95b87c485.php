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

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_554fab225bfe1948a18eb6dc44a11d217c012eb5a7fcc882a3c36a770c8ffaf6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        // line 1
        if (( !(isset($context["legacy"]) || array_key_exists("legacy", $context)) || (isset($context["legacy"]) || array_key_exists("legacy", $context) ? $context["legacy"] : (function () { throw new RuntimeError('Variable "legacy" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    ";
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (("The template \"" . $this->getTemplateName()) . "\" is deprecated since Symfony 4.4, will be removed in 5.0.");
            @trigger_error($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4." (\"@Twig/Exception/error.html.twig\" at line 2).", E_USER_DEPRECATED);
        }
        // line 4
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</title>
        <style>
            body { background-color: #fff; color: #222; font: 16px/1.5 -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif; margin: 0; }
            .container { margin: 30px; max-width: 600px; }
            h1 { color: #dc3545; font-size: 24px; }
            h2 { font-size: 18px; }
        </style>
    </head>
    <body>
        <div class=\"container\">
            <h1>Oops! An Error Occurred</h1>
            <h2>The server returned a \"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\".</h2>

            <p>
                Something is broken. Please let us know what you were doing when this error occurred.
                We will fix it as soon as possible. Sorry for any inconvenience caused.
            </p>
        </div>
    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  56 => 8,  52 => 7,  47 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if legacy is not defined or legacy %}
    {% deprecated 'The template \"' ~ _self ~'\" is deprecated since Symfony 4.4, will be removed in 5.0.' %}
{% endif %}
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
        <style>
            body { background-color: #fff; color: #222; font: 16px/1.5 -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif; margin: 0; }
            .container { margin: 30px; max-width: 600px; }
            h1 { color: #dc3545; font-size: 24px; }
            h2 { font-size: 18px; }
        </style>
    </head>
    <body>
        <div class=\"container\">
            <h1>Oops! An Error Occurred</h1>
            <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

            <p>
                Something is broken. Please let us know what you were doing when this error occurred.
                We will fix it as soon as possible. Sorry for any inconvenience caused.
            </p>
        </div>
    </body>
</html>
", "@Twig/Exception/error.html.twig", "/var/www/realtyBahrain.com/admin/vendor/symfony/twig-bundle/Resources/views/Exception/error.html.twig");
    }
}
