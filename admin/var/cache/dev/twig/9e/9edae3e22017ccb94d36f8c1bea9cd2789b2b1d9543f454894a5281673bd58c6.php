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

/* home.html.twig */
class __TwigTemplate_d47be891a087c1953557579b70b9efd482e13b69b35b63e60d2f8a35fb898fd3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>Landing Page - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Custom fonts for this template -->
  <link href=\"vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\">
  <link href=\"vendor/simple-line-icons/css/simple-line-icons.css\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

  <!-- Custom styles for this template -->
  <link href=\"css/landing-page.min.css\" rel=\"stylesheet\">
  <style>
    * {
      box-sizing: border-box;
    }
    
    .columns {
      float: left;
      width: 33.3%;
      padding: 8px;
    }
    
    .price {
      list-style-type: none;
      border: 1px solid #eee;
      margin: 0;
      padding: 0;
      -webkit-transition: 0.3s;
      transition: 0.3s;
    }
    
    .price:hover {
      box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
    }
    
    .price .header {
      background-color: #111;
      color: white;
      font-size: 25px;
    }
    
    .price li {
      border-bottom: 1px solid #eee;
      padding: 20px;
      text-align: center;
    }
    
    .price .grey {
      background-color: #eee;
      font-size: 20px;
    }
    
    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 10px 25px;
      text-align: center;
      text-decoration: none;
      font-size: 18px;
    }
    
    @media only screen and (max-width: 600px) {
      .columns {
        width: 100%;
      }
    }

    .list-viewer{
      display:none;
    }
    </style>
</head>

<body>

  <!-- Navigation -->
  <nav class=\"navbar navbar-light bg-light static-top\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"#\">Reality Bahrain</a>

    </div>
  </nav>

  <!-- Masthead -->
  <header class=\"masthead text-white text-center\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xl-9 mx-auto\">
          <h1 class=\"mb-5\">Site Front</h1>
        </div>
        <div class=\"col-md-10 col-lg-8 col-xl-7 mx-auto\">
          <div class=\"form-row\">
            
          </div>
        </div>
      </div>
    </div>
  </header>


  <section class=\"features-icons bg-light text-center\" id=\"search-result\">
    <div class=\"container\">
      
      </div>
  </section>
  




</body>

</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>Landing Page - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Custom fonts for this template -->
  <link href=\"vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\">
  <link href=\"vendor/simple-line-icons/css/simple-line-icons.css\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

  <!-- Custom styles for this template -->
  <link href=\"css/landing-page.min.css\" rel=\"stylesheet\">
  <style>
    * {
      box-sizing: border-box;
    }
    
    .columns {
      float: left;
      width: 33.3%;
      padding: 8px;
    }
    
    .price {
      list-style-type: none;
      border: 1px solid #eee;
      margin: 0;
      padding: 0;
      -webkit-transition: 0.3s;
      transition: 0.3s;
    }
    
    .price:hover {
      box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
    }
    
    .price .header {
      background-color: #111;
      color: white;
      font-size: 25px;
    }
    
    .price li {
      border-bottom: 1px solid #eee;
      padding: 20px;
      text-align: center;
    }
    
    .price .grey {
      background-color: #eee;
      font-size: 20px;
    }
    
    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 10px 25px;
      text-align: center;
      text-decoration: none;
      font-size: 18px;
    }
    
    @media only screen and (max-width: 600px) {
      .columns {
        width: 100%;
      }
    }

    .list-viewer{
      display:none;
    }
    </style>
</head>

<body>

  <!-- Navigation -->
  <nav class=\"navbar navbar-light bg-light static-top\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"#\">Reality Bahrain</a>

    </div>
  </nav>

  <!-- Masthead -->
  <header class=\"masthead text-white text-center\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xl-9 mx-auto\">
          <h1 class=\"mb-5\">Site Front</h1>
        </div>
        <div class=\"col-md-10 col-lg-8 col-xl-7 mx-auto\">
          <div class=\"form-row\">
            
          </div>
        </div>
      </div>
    </div>
  </header>


  <section class=\"features-icons bg-light text-center\" id=\"search-result\">
    <div class=\"container\">
      
      </div>
  </section>
  




</body>

</html>", "home.html.twig", "/var/www/realtyBahrain.com/admin/templates/home.html.twig");
    }
}
