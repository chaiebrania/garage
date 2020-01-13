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

/* entretien/index.html.twig */
class __TwigTemplate_06a90396b1f1d68bce7b4581ab9be5e1ca144d28b510d971531fec28ff2b4c37 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "entretien/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\" style=\"margin-top: 10px\">

        <div class=\"row\">
            <div class=\"col-10\"></div>
            <div class=\"col\"><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entretien_new");
        echo "\" class=\"btn btn-success\" > add Entretien</a></div>
        </div>
        <table class=\"table\" style=\"margin-top: 5px\">
            <thead class=\"thead-dark\">
            <tr>
                <th>#</th>
                <th>Montant en Dinard</th>
                <th>Description</th>
                <th>Matricul</th>
                <th scope=\"col\">Options</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entretiens"]) || array_key_exists("entretiens", $context) ? $context["entretiens"] : (function () { throw new RuntimeError('Variable "entretiens" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entretien"]) {
            // line 24
            echo "                <tr>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entretien"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entretien"], "price", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entretien"], "description", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entretien"], "getVehicle", [], "method", false, false, false, 28), "matricule", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entretien_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["entretien"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-warning\" >Edit</a>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entretien_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["entretien"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" >Remove</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entretien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
            </tbody>
        </table>



    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "entretien/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  123 => 31,  119 => 30,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  99 => 24,  95 => 23,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User index{% endblock %}

{% block body %}
    <div class=\"container\" style=\"margin-top: 10px\">

        <div class=\"row\">
            <div class=\"col-10\"></div>
            <div class=\"col\"><a href=\"{{ path('entretien_new') }}\" class=\"btn btn-success\" > add Entretien</a></div>
        </div>
        <table class=\"table\" style=\"margin-top: 5px\">
            <thead class=\"thead-dark\">
            <tr>
                <th>#</th>
                <th>Montant en Dinard</th>
                <th>Description</th>
                <th>Matricul</th>
                <th scope=\"col\">Options</th>
            </tr>
            </thead>
            <tbody>
            {% for entretien in entretiens %}
                <tr>
                    <td>{{ entretien.id }}</td>
                    <td>{{ entretien.price }}</td>
                    <td>{{ entretien.description }}</td>
                    <td>{{ entretien.getVehicle().matricule }}</td>
                    <td>
                        <a href=\"{{ path('entretien_edit', {'id': entretien.id}) }}\" class=\"btn btn-warning\" >Edit</a>
                        <a href=\"{{ path('entretien_delete', {'id': entretien.id}) }}\" class=\"btn btn-danger\" >Remove</a>
                    </td>
                </tr>
            {% endfor %}

            </tbody>
        </table>



    </div>
{% endblock %}
", "entretien/index.html.twig", "/home/rania/Symfony/symfony/templates/entretien/index.html.twig");
    }
}
