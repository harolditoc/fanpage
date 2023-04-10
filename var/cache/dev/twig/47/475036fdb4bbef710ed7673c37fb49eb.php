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

/* components/login_form.html.twig */
class __TwigTemplate_b680f46b2d70fa73801fe731ddb0303d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/login_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/login_form.html.twig"));

        // line 1
        echo "<div";
        echo twig_escape_filter($this->env, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "
    data-action=\"change->live#update\"
>
    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 4, $this->source); })()), "form", [], "any", false, false, false, 4), 'form_start');
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 5, $this->source); })()), "form", [], "any", false, false, false, 5), "username", [], "any", false, false, false, 5), 'row', ["full_name" => "usuario[username]", "id" => "inputUsername"]);
        // line 8
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 9, $this->source); })()), "form", [], "any", false, false, false, 9), "password", [], "any", false, false, false, 9), 'row', ["full_name" => "usuario[password]", "id" => "inputPassword"]);
        // line 12
        echo "
        <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
           <div class=\"d-grid mx-auto\">
        <button id=\"submit-id\" class=\"btn btn-lg btn-primary bot\" type=\"submit\" formnovalidate>
        Ingresar
    </button> </div>
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 19, $this->source); })()), "form", [], "any", false, false, false, 19), 'form_end');
        echo "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/login_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  65 => 14,  61 => 12,  59 => 9,  56 => 8,  54 => 5,  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div{{ attributes }}
    data-action=\"change->live#update\"
>
    {{ form_start(this.form) }}
        {{ form_row(this.form.username, {
            'full_name': 'usuario[username]',
            'id': 'inputUsername',
            }) }}
        {{ form_row(this.form.password, {
            'full_name': 'usuario[password]',
            'id': 'inputPassword'
        }) }}
        <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\">
           <div class=\"d-grid mx-auto\">
        <button id=\"submit-id\" class=\"btn btn-lg btn-primary bot\" type=\"submit\" formnovalidate>
        Ingresar
    </button> </div>
    {{ form_end(this.form) }}
</div>
", "components/login_form.html.twig", "C:\\xampp\\htdocs\\wet\\templates\\components\\login_form.html.twig");
    }
}
