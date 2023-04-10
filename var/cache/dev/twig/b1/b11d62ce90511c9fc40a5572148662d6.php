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

/* casa/index.html.twig */
class __TwigTemplate_3af7b92ae68c17999a13e93572d4ec59 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "casa/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "casa/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "casa/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello CasaController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper {
        margin: 1em auto;
        max-width: 800px;
        width: 95%;
        font: 18px/1.5 sans-serif;
    }

    .example-wrapper code {
        background: #F5F5F5;
        padding: 2px 6px;
    }
</style>

<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "! ✅⏸👿😧😀</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at
            <code><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("C:/xampp/htdocs/wet/src/Controller/CasaController.php", 0), "html", null, true);
        echo "\">src/Controller/CasaController.php</a></code>
        </li>
        <li>Your template at
            <code><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("C:/xampp/htdocs/wet/templates/casa/index.html.twig", 0), "html", null, true);
        echo "\">templates/casa/index.html.twig</a></code>
        </li>
    </ul>
</div>
        
<div class=\"text-center\">Prueba de pull</div>
<div class=\"container\">
        ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)) {
            // line 37
            echo "            <div>
                Bievenido ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "username", [], "any", false, false, false, 38), "html", null, true);
            echo "
            </div>
            <div class=\"mb-3\">
                You are logged in as ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "userIdentifier", [], "any", false, false, false, 41), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
            </div>
        ";
        }
        // line 44
        echo "    <section class=\"\" id=\"carrusel\">
        //
        <input type=\"text\">
    </section>
    <section class=\"\" id=\"sobre-mi\">
        //
    </section>
    <section class=\"\" id=\"trabajos\">
        //
    </section>
    <section class=\"\" id=\"comics\">
        //
    </section>
    <section class=\"\" id=\"contactame\">
        //
    </section>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "casa/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 44,  140 => 41,  134 => 38,  131 => 37,  129 => 36,  119 => 29,  113 => 26,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CasaController!{% endblock %}

{% block body %}
<style>
    .example-wrapper {
        margin: 1em auto;
        max-width: 800px;
        width: 95%;
        font: 18px/1.5 sans-serif;
    }

    .example-wrapper code {
        background: #F5F5F5;
        padding: 2px 6px;
    }
</style>

<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅⏸👿😧😀</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at
            <code><a href=\"{{ 'C:/xampp/htdocs/wet/src/Controller/CasaController.php'|file_link(0) }}\">src/Controller/CasaController.php</a></code>
        </li>
        <li>Your template at
            <code><a href=\"{{ 'C:/xampp/htdocs/wet/templates/casa/index.html.twig'|file_link(0) }}\">templates/casa/index.html.twig</a></code>
        </li>
    </ul>
</div>
        
<div class=\"text-center\">Prueba de pull</div>
<div class=\"container\">
        {% if app.user %}
            <div>
                Bievenido {{ app.user.username }}
            </div>
            <div class=\"mb-3\">
                You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
            </div>
        {% endif %}
    <section class=\"\" id=\"carrusel\">
        //
        <input type=\"text\">
    </section>
    <section class=\"\" id=\"sobre-mi\">
        //
    </section>
    <section class=\"\" id=\"trabajos\">
        //
    </section>
    <section class=\"\" id=\"comics\">
        //
    </section>
    <section class=\"\" id=\"contactame\">
        //
    </section>
</div>
{% endblock %}", "casa/index.html.twig", "C:\\xampp\\htdocs\\wet\\templates\\casa\\index.html.twig");
    }
}
