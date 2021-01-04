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

/* security/login.html.twig */
class __TwigTemplate_5448a079ddbc38934f78087a55c1b8c9a3c16f706310f229937a9029a3f3a708 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">
\t\t<link rel=\"icon\" href=\"/docs/4.0/assets/img/favicons/favicon.ico\">

\t\t<title>realtybahrain</title>

\t\t<link
\t\trel=\"canonical\" href=\"https://getbootstrap.com/docs/4.0/examples/floating-labels/\">

\t\t<!-- Bootstrap core CSS -->
\t\t<link
\t\thref=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

\t\t<!-- Custom styles for this template -->
\t\t<link href=\"css/floating-labels.css\" rel=\"stylesheet\">
\t</head>
\t<body>
\t\t<form method=\"post\" class=\"form-signin\" style=\"background-color: white;\">
\t\t\t";
        // line 24
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })()), "messageKey", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })()), "messageData", [], "any", false, false, false, 25), "security"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 27
        echo "
\t\t\t";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tYou are logged in as
\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "username", [], "any", false, false, false, 31), "html", null, true);
            echo ",
\t\t\t\t\t<a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 35
        echo "

\t\t\t";
        // line 37
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 37, $this->source); })())) {
            // line 38
            echo "\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })()), "messageKey", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })()), "messageData", [], "any", false, false, false, 38), "security"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 40
        echo "
\t\t\t";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
            // line 42
            echo "\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tYou are logged in as
\t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "username", [], "any", false, false, false, 44), "html", null, true);
            echo ",
\t\t\t\t\t<a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 48
        echo "\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t<img class=\"mb-4\" src=\"http://ec2-13-212-39-227.ap-southeast-1.compute.amazonaws.com/images/logo.png\" alt=\"\" width=\"100%\" height=\"72\">
\t\t\t</div>

\t\t\t<div class=\"form-label-group\">
\t\t\t\t<input type=\"email\" id=\"inputEmail\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
\t\t\t\t<label for=\"inputEmail\">Email address</label>
\t\t\t</div>

\t\t\t<div class=\"form-label-group\">
\t\t\t\t<input type=\"password\" id=\"inputPassword\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t</div>

\t\t\t<div class=\"checkbox mb-3\">
\t\t\t\t<label>
\t\t\t\t\t<input type=\"checkbox\" value=\"remember-me\">
\t\t\t\t\tRemember me
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
\t\t\t<p class=\"mt-5 mb-3 text-muted text-center\">&copy; 2017-2018</p>
\t\t</form>
\t</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 54,  123 => 48,  117 => 45,  113 => 44,  109 => 42,  107 => 41,  104 => 40,  98 => 38,  96 => 37,  92 => 35,  86 => 32,  82 => 31,  78 => 29,  76 => 28,  73 => 27,  67 => 25,  65 => 24,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">
\t\t<link rel=\"icon\" href=\"/docs/4.0/assets/img/favicons/favicon.ico\">

\t\t<title>realtybahrain</title>

\t\t<link
\t\trel=\"canonical\" href=\"https://getbootstrap.com/docs/4.0/examples/floating-labels/\">

\t\t<!-- Bootstrap core CSS -->
\t\t<link
\t\thref=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

\t\t<!-- Custom styles for this template -->
\t\t<link href=\"css/floating-labels.css\" rel=\"stylesheet\">
\t</head>
\t<body>
\t\t<form method=\"post\" class=\"form-signin\" style=\"background-color: white;\">
\t\t\t{% if error %}
\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t{% endif %}

\t\t\t{% if app.user %}
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tYou are logged in as
\t\t\t\t\t{{ app.user.username }},
\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t</div>
\t\t\t{% endif %}


\t\t\t{% if error %}
\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t{% endif %}

\t\t\t{% if app.user %}
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tYou are logged in as
\t\t\t\t\t{{ app.user.username }},
\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t<img class=\"mb-4\" src=\"http://ec2-13-212-39-227.ap-southeast-1.compute.amazonaws.com/images/logo.png\" alt=\"\" width=\"100%\" height=\"72\">
\t\t\t</div>

\t\t\t<div class=\"form-label-group\">
\t\t\t\t<input type=\"email\" id=\"inputEmail\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
\t\t\t\t<label for=\"inputEmail\">Email address</label>
\t\t\t</div>

\t\t\t<div class=\"form-label-group\">
\t\t\t\t<input type=\"password\" id=\"inputPassword\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t</div>

\t\t\t<div class=\"checkbox mb-3\">
\t\t\t\t<label>
\t\t\t\t\t<input type=\"checkbox\" value=\"remember-me\">
\t\t\t\t\tRemember me
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
\t\t\t<p class=\"mt-5 mb-3 text-muted text-center\">&copy; 2017-2018</p>
\t\t</form>
\t</body>
</html>
", "security/login.html.twig", "/var/www/realtyBahrain.com/admin/templates/security/login.html.twig");
    }
}
