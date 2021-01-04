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

/* base.html.twig */
class __TwigTemplate_b0f137041475419990eb4c237fa60f5b2edceb39f86bd0e4406e06f0ae448a85 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"refresh\" content=\"300\">
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<!-- Bootstrap CSS -->
\t\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "\t\t<title>Reality Bahrain |
\t\t</title>
\t</head>

\t<body>
\t\t<!-- ============================================================== -->
\t\t<!-- main wrapper -->
\t\t<!-- ============================================================== -->
\t\t\t<div class=\"dashboard-main-wrapper\"> <!-- ============================================================== -->
\t\t\t<!-- navbar -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<div class=\"dashboard-header\"> <nav class=\"navbar navbar-expand-lg bg-white fixed-top\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\">
\t\t\t\t\t<img src=\"http://ec2-13-212-39-227.ap-southeast-1.compute.amazonaws.com/images/logo.png\" style=\"width: 23%;\">
\t\t\t\t\t</a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse \" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto navbar-right-top\">
\t\t\t\t\t\t\t<li class=\"nav-item dropdown notification\">
\t\t\t\t\t\t\t\t<a class=\"nav-link nav-icons\" href=\"#\" id=\"navbarDropdownMenuLink1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-bell\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"indicator\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right notification-dropdown\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\tNotification</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list-user-img\"><img src=\"assets/images/avatar-2.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list-user-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-list-user-name\">Jeremy Rakestraw</span>accepted your invitation to join the team.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-date\">2 min ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list-user-img\"><img src=\"assets/images/avatar-3.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list-user-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-list-user-name\">John Abraham
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>is now following you
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-date\">2 days ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list-user-img\"><img src=\"assets/images/avatar-4.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list-user-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-list-user-name\">Monaan Pechi</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tis watching your main repository
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-date\">2 min ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list-user-img\"><img src=\"assets/images/avatar-5.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list-user-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-list-user-name\">Jessica Caruso</span>accepted your invitation to join the team.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-date\">2 min ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"list-footer\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">View all notifications</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown connection\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-th\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right connection-dropdown\">
\t\t\t\t\t\t\t\t\t<li class=\"connection-list\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 \">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["server_path"]) || array_key_exists("server_path", $context) ? $context["server_path"] : (function () { throw new RuntimeError('Variable "server_path" does not exist.', 112, $this->source); })()), "html", null, true);
        echo "/application/1/profile\" class=\"connection-item\"><img src=\"https://www.searchpng.com/wp-content/uploads/2019/02/Deafult-Profile-Pitcher.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Profile</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 \">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"connection-item\"><img src=\"https://i.pinimg.com/originals/b8/cd/6d/b8cd6d45a84bd74c9d480a3b25309261.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Settings</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 \">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"connection-item\"><img src=\"assets/images/dropbox.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Account</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["server_path"]) || array_key_exists("server_path", $context) ? $context["server_path"] : (function () { throw new RuntimeError('Variable "server_path" does not exist.', 130, $this->source); })()), "html", null, true);
        echo "/logout\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"conntection-footer\" style=\"background-color: red;\">
\t\t\t\t\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- end navbar -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- left sidebar -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<div class=\"nav-left-sidebar sidebar-dark\"> <div class=\"menu-list\">
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t\t\t<a class=\"d-xl-none d-lg-none\" href=\"#\">Dashboard</a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav flex-column\">
\t\t\t\t\t\t\t\t<li class=\"nav-divider\">
\t\t\t\t\t\t\t\t\tMenu
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "session", [], "any", false, false, false, 159), "get", [0 => "menulist"], "method", false, false, false, 159));
        foreach ($context['_seq'] as $context["key"] => $context["menu"]) {
            // line 160
            echo "\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link ";
            // line 161
            if (twig_test_iterable($context["menu"])) {
                echo "collapsed";
            }
            echo "\" ";
            if (twig_test_iterable($context["menu"])) {
                echo " href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-1\" aria-controls=\"submenu-1\" ";
            } else {
                echo " href=\"";
                echo twig_escape_filter($this->env, (isset($context["server_path"]) || array_key_exists("server_path", $context) ? $context["server_path"] : (function () { throw new RuntimeError('Variable "server_path" does not exist.', 161, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, $context["menu"], "html", null, true);
                echo "\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-rocket\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 163
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t";
            // line 164
            if (twig_test_iterable($context["menu"])) {
                // line 165
                echo "
\t\t\t\t\t\t\t\t\t\t\t<div id=\"submenu-1\" class=\"submenu collapse\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 168
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["menu"]);
                foreach ($context['_seq'] as $context["listk"] => $context["list"]) {
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                    // line 170
                    echo twig_escape_filter($this->env, (isset($context["server_path"]) || array_key_exists("server_path", $context) ? $context["server_path"] : (function () { throw new RuntimeError('Variable "server_path" does not exist.', 170, $this->source); })()), "html", null, true);
                    echo twig_escape_filter($this->env, $context["list"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["listk"], "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['listk'], $context['list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 176
            echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- end left sidebar -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- wrapper  -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<div class=\"dashboard-wrapper\"> <div class=\"dashboard-ecommerce\">
\t\t\t\t\t<div class=\"container-fluid dashboard-content \"> ";
        // line 190
        $this->displayBlock('body', $context, $blocks);
        // line 191
        echo "\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<!-- end pageheader  -->
\t\t\t\t\t\t<!-- ============================================================== -->

\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t<!-- footer -->
\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<div class=\"footer\" style=\"position: fixed; bottom: 0;\"> <div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\tCopyright © 2018 Concept. All rights reserved. Dashboard by
\t\t\t\t\t\t\t\t\t<a href=\"https://colorlib.com/wp/\">Colorlib</a>.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"text-md-right footer-links d-none d-sm-block\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\">About</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\">Support</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\">Contact Us</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t<!-- end footer -->
\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t</div>
\t\t\t\t<!-- ============================================================== -->
\t\t\t<!-- end wrapper  -->
\t\t\t\t<!-- ============================================================== -->
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- end main wrapper  -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- Optional JavaScript -->
\t\t\t<!-- jquery 3.3.1 -->
\t\t\t\t";
        // line 229
        $this->displayBlock('javascripts', $context, $blocks);
        // line 269
        echo "\t\t</body>
\t</html>
</body></html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fonts/circular-std/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/css/style.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fonts/fontawesome/css/fontawesome-all.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/charts/chartist-bundle/chartist.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/charts/morris-bundle/morris.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/charts/c3charts/c3.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fonts/flag-icon-css/flag-icon.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/css/pagination.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sweetalert.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/multi-select/css/multi-select.css"), "html", null, true);
        echo "\">
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 190
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 229
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"> </script>
\t\t\t\t<!-- bootstap bundle js -->
\t\t\t\t<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<!-- slimscroll js -->
\t\t\t\t<script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<!-- main js -->
\t\t\t\t<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/js/main-js.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<!-- chart chartist js -->
\t\t\t\t<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/charts/chartist-bundle/chartist.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<!-- sparkline js -->
\t\t\t\t<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/charts/sparkline/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<!-- morris js -->
\t\t\t\t<script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/charts/morris-bundle/raphael.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/charts/morris-bundle/morris.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<!-- chart c3 js -->
\t\t\t\t<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/charts/c3charts/c3.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/charts/c3charts/d3-5.4.0.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/charts/c3charts/C3chartjs.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/js/dashboard-ecommerce.js"), "html", null, true);
        echo "\"></script>

\t\t\t\t<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>

\t\t\t\t<script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
\t\t\t\t<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/datatables/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js\"></script>
\t\t\t\t<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/datatables/js/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/datatables/js/data-table.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js\"></script>
\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js\"></script>
\t\t\t\t<script src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js\"></script>
\t\t\t\t<script src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js\"></script>
\t\t\t\t<script src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js\"></script>
\t\t\t\t<script src=\"https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js\"></script>
\t\t\t\t<script src=\"https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js\"></script>
\t\t\t\t<script src=\"https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js\"></script>
\t\t\t\t<script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/parsley/parsley.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 267,  500 => 266,  496 => 265,  483 => 255,  479 => 254,  474 => 252,  468 => 249,  463 => 247,  459 => 246,  455 => 245,  451 => 244,  446 => 242,  442 => 241,  437 => 239,  432 => 237,  427 => 235,  422 => 233,  417 => 231,  405 => 229,  393 => 190,  384 => 23,  380 => 22,  376 => 21,  372 => 20,  368 => 19,  364 => 18,  360 => 17,  356 => 16,  352 => 15,  348 => 14,  344 => 13,  339 => 12,  332 => 11,  322 => 269,  320 => 229,  280 => 191,  278 => 190,  264 => 178,  257 => 176,  251 => 172,  240 => 170,  237 => 169,  233 => 168,  228 => 165,  226 => 164,  222 => 163,  206 => 161,  203 => 160,  199 => 159,  167 => 130,  146 => 112,  57 => 25,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"refresh\" content=\"300\">
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<!-- Bootstrap CSS -->
\t\t{% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\">
\t\t\t<link href=\"{{ asset('assets/vendor/fonts/circular-std/style.css') }}\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/libs/css/style.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/charts/chartist-bundle/chartist.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/charts/morris-bundle/morris.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/charts/c3charts/c3.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/libs/css/pagination.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/sweetalert.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/multi-select/css/multi-select.css') }}\">
\t\t{% endblock %}
\t\t<title>Reality Bahrain |
\t\t</title>
\t</head>

\t<body>
\t\t<!-- ============================================================== -->
\t\t<!-- main wrapper -->
\t\t<!-- ============================================================== -->
\t\t\t<div class=\"dashboard-main-wrapper\"> <!-- ============================================================== -->
\t\t\t<!-- navbar -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<div class=\"dashboard-header\"> <nav class=\"navbar navbar-expand-lg bg-white fixed-top\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\">
\t\t\t\t\t<img src=\"http://ec2-13-212-39-227.ap-southeast-1.compute.amazonaws.com/images/logo.png\" style=\"width: 23%;\">
\t\t\t\t\t</a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse \" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto navbar-right-top\">
\t\t\t\t\t\t\t<li class=\"nav-item dropdown notification\">
\t\t\t\t\t\t\t\t<a class=\"nav-link nav-icons\" href=\"#\" id=\"navbarDropdownMenuLink1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-bell\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"indicator\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right notification-dropdown\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\tNotification</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list-user-img\"><img src=\"assets/images/avatar-2.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list-user-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-list-user-name\">Jeremy Rakestraw</span>accepted your invitation to join the team.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-date\">2 min ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list-user-img\"><img src=\"assets/images/avatar-3.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list-user-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-list-user-name\">John Abraham
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>is now following you
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-date\">2 days ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list-user-img\"><img src=\"assets/images/avatar-4.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list-user-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-list-user-name\">Monaan Pechi</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tis watching your main repository
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-date\">2 min ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list-user-img\"><img src=\"assets/images/avatar-5.jpg\" alt=\"\" class=\"user-avatar-md rounded-circle\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-list-user-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-list-user-name\">Jessica Caruso</span>accepted your invitation to join the team.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification-date\">2 min ago</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"list-footer\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">View all notifications</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown connection\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-th\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right connection-dropdown\">
\t\t\t\t\t\t\t\t\t<li class=\"connection-list\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 \">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ server_path }}/application/1/profile\" class=\"connection-item\"><img src=\"https://www.searchpng.com/wp-content/uploads/2019/02/Deafult-Profile-Pitcher.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Profile</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 \">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"connection-item\"><img src=\"https://i.pinimg.com/originals/b8/cd/6d/b8cd6d45a84bd74c9d480a3b25309261.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Settings</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 \">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"connection-item\"><img src=\"assets/images/dropbox.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Account</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ server_path }}/logout\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"conntection-footer\" style=\"background-color: red;\">
\t\t\t\t\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- end navbar -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- left sidebar -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<div class=\"nav-left-sidebar sidebar-dark\"> <div class=\"menu-list\">
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t\t\t<a class=\"d-xl-none d-lg-none\" href=\"#\">Dashboard</a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav flex-column\">
\t\t\t\t\t\t\t\t<li class=\"nav-divider\">
\t\t\t\t\t\t\t\t\tMenu
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% for key,menu in app.session.get('menulist') %}
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link {% if menu is iterable %}collapsed{% endif %}\" {% if menu is iterable %} href=\"#\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#submenu-1\" aria-controls=\"submenu-1\" {% else %} href=\"{{ server_path }}{{menu}}\" {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-rocket\"></i>
\t\t\t\t\t\t\t\t\t\t\t{{ key }}</a>
\t\t\t\t\t\t\t\t\t\t{% if menu is iterable %}

\t\t\t\t\t\t\t\t\t\t\t<div id=\"submenu-1\" class=\"submenu collapse\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for listk, list in menu %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ server_path }}{{list}}\">{{listk}}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- end left sidebar -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- wrapper  -->
\t\t\t<!-- ============================================================== -->
\t\t\t\t<div class=\"dashboard-wrapper\"> <div class=\"dashboard-ecommerce\">
\t\t\t\t\t<div class=\"container-fluid dashboard-content \"> {% block body %}{% endblock %}
\t\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<!-- end pageheader  -->
\t\t\t\t\t\t<!-- ============================================================== -->

\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t<!-- footer -->
\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t\t\t<div class=\"footer\" style=\"position: fixed; bottom: 0;\"> <div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\tCopyright © 2018 Concept. All rights reserved. Dashboard by
\t\t\t\t\t\t\t\t\t<a href=\"https://colorlib.com/wp/\">Colorlib</a>.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"text-md-right footer-links d-none d-sm-block\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\">About</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\">Support</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\">Contact Us</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t<!-- end footer -->
\t\t\t\t\t<!-- ============================================================== -->
\t\t\t\t</div>
\t\t\t\t<!-- ============================================================== -->
\t\t\t<!-- end wrapper  -->
\t\t\t\t<!-- ============================================================== -->
\t\t\t</div>
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- end main wrapper  -->
\t\t\t<!-- ============================================================== -->
\t\t\t<!-- Optional JavaScript -->
\t\t\t<!-- jquery 3.3.1 -->
\t\t\t\t{% block javascripts %}<script src=\"{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}\"> </script>
\t\t\t\t<!-- bootstap bundle js -->
\t\t\t\t<script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}\"></script>
\t\t\t\t<!-- slimscroll js -->
\t\t\t\t<script src=\"{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js') }}\"></script>
\t\t\t\t<!-- main js -->
\t\t\t\t<script src=\"{{ asset('assets/libs/js/main-js.js') }}\"></script>
\t\t\t\t<!-- chart chartist js -->
\t\t\t\t<script src=\"{{ asset('assets/vendor/charts/chartist-bundle/chartist.min.js') }}\"></script>
\t\t\t\t<!-- sparkline js -->
\t\t\t\t<script src=\"{{ asset('assets/vendor/charts/sparkline/jquery.sparkline.js') }}\"></script>
\t\t\t\t<!-- morris js -->
\t\t\t\t<script src=\"{{ asset('assets/vendor/charts/morris-bundle/raphael.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('assets/vendor/charts/morris-bundle/morris.js') }}\"></script>
\t\t\t\t<!-- chart c3 js -->
\t\t\t\t<script src=\"{{ asset('assets/vendor/charts/c3charts/c3.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('assets/vendor/charts/c3charts/C3chartjs.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('assets/libs/js/dashboard-ecommerce.js') }}\"></script>

\t\t\t\t<script src=\"{{ asset('assets/vendor/multi-select/js/jquery.multi-select.js') }}\"></script>

\t\t\t\t<script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
\t\t\t\t<script src=\"{{ asset('assets/vendor/datatables/js/dataTables.bootstrap4.min.js') }}\"></script>
\t\t\t\t<script src=\"https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js\"></script>
\t\t\t\t<script src=\"{{ asset('assets/vendor/datatables/js/buttons.bootstrap4.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('assets/vendor/datatables/js/data-table.js') }}\"></script>
\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js\"></script>
\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js\"></script>
\t\t\t\t<script src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js\"></script>
\t\t\t\t<script src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js\"></script>
\t\t\t\t<script src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js\"></script>
\t\t\t\t<script src=\"https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js\"></script>
\t\t\t\t<script src=\"https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js\"></script>
\t\t\t\t<script src=\"https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js\"></script>
\t\t\t\t<script src=\"{{ asset('js/sweetalert.min.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('assets/vendor/parsley/parsley.js') }}\"></script>
\t\t\t\t<script src=\"{{ asset('js/script.js') }}\"></script>
\t\t\t{% endblock %}
\t\t</body>
\t</html>
</body></html>
", "base.html.twig", "/var/www/realtyBahrain.com/admin/templates/base.html.twig");
    }
}
