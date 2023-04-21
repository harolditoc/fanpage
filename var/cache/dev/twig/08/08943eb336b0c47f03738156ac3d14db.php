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

/* components/edit_banner.html.twig */
class __TwigTemplate_20ccb81b73755ca6bbd636d8f3827f68 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/edit_banner.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/edit_banner.html.twig"));

        // line 1
        echo "<div";
        echo twig_escape_filter($this->env, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        echo ">
    <div 
        data-loading=\"addClass(low-opacity)\"
    >
    
        Selecciona el contenido a editar:
        <select 
            class=\"form-select\" 
            data-model=\"contenido\" 
            data-action=\"live#update\"
        >
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 12, $this->source); })()), "getAllContenido", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["contents"]) {
            // line 13
            echo "                <option 
                    value=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contents"], "cId", [], "any", false, false, false, 14), "html", null, true);
            echo "\"
                    ";
            // line 15
            echo ((((isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new RuntimeError('Variable "contenido" does not exist.', 15, $this->source); })()) && (twig_get_attribute($this->env, $this->source, $context["contents"], "cId", [], "any", false, false, false, 15) == twig_get_attribute($this->env, $this->source, (isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new RuntimeError('Variable "contenido" does not exist.', 15, $this->source); })()), "cId", [], "any", false, false, false, 15)))) ? ("selected") : (""));
            echo "
                >";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contents"], "cTitulo", [], "any", false, false, false, 16), "html", null, true);
            echo " (id ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contents"], "cId", [], "any", false, false, false, 16), "html", null, true);
            echo ")</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contents'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </select>
        <hr>
        <form 
            data-action=\"live#action\"
            data-action-name=\"prevent|save\"
        >
            <div class=\"mb-3\">
                <label for=\"contenido-cTitulo\" class=\"form-label\">Titulo</label>
                <input 
                    type=\"text\"
                    id=\"contenido-cTitulo\"
                    class=\"form-control\"
                    data-model=\"contenido.cTitulo\"
                    data-action=\"live#updateDefer\"
                    value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new RuntimeError('Variable "contenido" does not exist.', 32, $this->source); })()), "cTitulo", [], "any", false, false, false, 32), "html", null, true);
        echo "\"
                >
            </div>
            <div class=\"mb-3\">
                <label for=\"contenido-cContenido\" class=\"form-label\">Contenido</label>
                <textarea 
                    id=\"contenido-cContenido\"
                    class=\"form-control\"
                    data-model=\"contenido.cContenido\"
                    data-action=\"live#updateDefer\"
                >";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new RuntimeError('Variable "contenido" does not exist.', 42, $this->source); })()), "cContenido", [], "any", false, false, false, 42), "html", null, true);
        echo "</textarea>
            </div>
            
            ";
        // line 45
        if ((isset($context["isSaved"]) || array_key_exists("isSaved", $context) ? $context["isSaved"] : (function () { throw new RuntimeError('Variable "isSaved" does not exist.', 45, $this->source); })())) {
            // line 46
            echo "                <h1>guardado</h1>
            ";
        }
        // line 48
        echo "
            <button
                data-action=\"live#action\"
                data-action-name=\"save\"
                data-loading=\"addAttribute(disabled)\"
                class=\"btn btn-primary\"
            >save</button>
        </form>
    </div>
</div>

        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/edit_banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 48,  120 => 46,  118 => 45,  112 => 42,  99 => 32,  83 => 18,  73 => 16,  69 => 15,  65 => 14,  62 => 13,  58 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div{{ attributes }}>
    <div 
        data-loading=\"addClass(low-opacity)\"
    >
    
        Selecciona el contenido a editar:
        <select 
            class=\"form-select\" 
            data-model=\"contenido\" 
            data-action=\"live#update\"
        >
            {% for contents in this.getAllContenido %}
                <option 
                    value=\"{{ contents.cId }}\"
                    {{ contenido and contents.cId == contenido.cId ? 'selected': '' }}
                >{{ contents.cTitulo }} (id {{ contents.cId }})</option>
            {% endfor %}
        </select>
        <hr>
        <form 
            data-action=\"live#action\"
            data-action-name=\"prevent|save\"
        >
            <div class=\"mb-3\">
                <label for=\"contenido-cTitulo\" class=\"form-label\">Titulo</label>
                <input 
                    type=\"text\"
                    id=\"contenido-cTitulo\"
                    class=\"form-control\"
                    data-model=\"contenido.cTitulo\"
                    data-action=\"live#updateDefer\"
                    value=\"{{ contenido.cTitulo }}\"
                >
            </div>
            <div class=\"mb-3\">
                <label for=\"contenido-cContenido\" class=\"form-label\">Contenido</label>
                <textarea 
                    id=\"contenido-cContenido\"
                    class=\"form-control\"
                    data-model=\"contenido.cContenido\"
                    data-action=\"live#updateDefer\"
                >{{ contenido.cContenido }}</textarea>
            </div>
            
            {% if isSaved %}
                <h1>guardado</h1>
            {% endif %}

            <button
                data-action=\"live#action\"
                data-action-name=\"save\"
                data-loading=\"addAttribute(disabled)\"
                class=\"btn btn-primary\"
            >save</button>
        </form>
    </div>
</div>

        ", "components/edit_banner.html.twig", "C:\\xampp\\htdocs\\wet\\templates\\components\\edit_banner.html.twig");
    }
}
