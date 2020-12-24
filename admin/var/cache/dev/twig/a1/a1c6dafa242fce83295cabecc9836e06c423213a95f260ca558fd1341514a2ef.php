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
        echo "
<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"/docs/4.0/assets/img/favicons/favicon.ico\">

    <title>Floating labels example for Bootstrap</title>

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.0/examples/floating-labels/\">

    <!-- Bootstrap core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"css/floating-labels.css\" rel=\"stylesheet\">
  </head>
<body>
    <form method=\"post\" class=\"form-signin\">
    ";
        // line 23
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageKey", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageData", [], "any", false, false, false, 24), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "username", [], "any", false, false, false, 29), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 32
        echo "
    
    ";
        // line 34
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })()), "messageKey", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })()), "messageData", [], "any", false, false, false, 35), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)) {
            // line 39
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "username", [], "any", false, false, false, 40), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 43
        echo "    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >
      <div class=\"text-center mb-4\">
        <img class=\"mb-4\" src=\"https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg\" alt=\"\" width=\"72\" height=\"72\">
        <h1 class=\"h3 mb-3 font-weight-normal\">Realtybahrain.com</h1>
        </div>

      <div class=\"form-label-group\">
        <input type=\"email\" id=\"inputEmail\"  value=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
        <label for=\"inputEmail\">Email address</label>
      </div>

      <div class=\"form-label-group\">
        <input type=\"password\" id=\"inputPassword\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        <label for=\"inputPassword\">Password</label>
      </div>

      <div class=\"checkbox mb-3\">
        <label>
          <input type=\"checkbox\" value=\"remember-me\"> Remember me
        </label>
      </div>
      <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
      <p class=\"mt-5 mb-3 text-muted text-center\">&copy; 2017-2018</p>
    </form>
  </body>
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
        return array (  130 => 52,  119 => 44,  116 => 43,  108 => 40,  105 => 39,  103 => 38,  100 => 37,  94 => 35,  92 => 34,  88 => 32,  80 => 29,  77 => 28,  75 => 27,  72 => 26,  66 => 24,  64 => 23,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"/docs/4.0/assets/img/favicons/favicon.ico\">

    <title>Floating labels example for Bootstrap</title>

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.0/examples/floating-labels/\">

    <!-- Bootstrap core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"css/floating-labels.css\" rel=\"stylesheet\">
  </head>
<body>
    <form method=\"post\" class=\"form-signin\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

    
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}
    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >
      <div class=\"text-center mb-4\">
        <img class=\"mb-4\" src=\"https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg\" alt=\"\" width=\"72\" height=\"72\">
        <h1 class=\"h3 mb-3 font-weight-normal\">Realtybahrain.com</h1>
        </div>

      <div class=\"form-label-group\">
        <input type=\"email\" id=\"inputEmail\"  value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
        <label for=\"inputEmail\">Email address</label>
      </div>

      <div class=\"form-label-group\">
        <input type=\"password\" id=\"inputPassword\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        <label for=\"inputPassword\">Password</label>
      </div>

      <div class=\"checkbox mb-3\">
        <label>
          <input type=\"checkbox\" value=\"remember-me\"> Remember me
        </label>
      </div>
      <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
      <p class=\"mt-5 mb-3 text-muted text-center\">&copy; 2017-2018</p>
    </form>
  </body>
</html>
", "security/login.html.twig", "/var/www/html/admin/templates/security/login.html.twig");
    }
}
