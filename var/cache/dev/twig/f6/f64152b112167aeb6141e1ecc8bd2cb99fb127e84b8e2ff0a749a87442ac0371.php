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

/* EasyAdminBundle:default/includes:_actions_dropdown.html.twig */
class __TwigTemplate_fd363bdd7f21350fd1b087f41079e7cb64d98ff3b90b39eb04ed9b8e4d860160 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EasyAdminBundle:default/includes:_actions_dropdown.html.twig"));

        // line 1
        echo "<div class=\"actions-dropdown\">
    <button type=\"button\" class=\"btn btn-secondary btn-sm dropdown-toggle\">
        <i class=\"fa fa-fw fa-ellipsis-h\"></i>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\">
        ";
        // line 7
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", ["is_dropdown" => true]);
        echo "
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default/includes:_actions_dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"actions-dropdown\">
    <button type=\"button\" class=\"btn btn-secondary btn-sm dropdown-toggle\">
        <i class=\"fa fa-fw fa-ellipsis-h\"></i>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\">
        {{ include('@EasyAdmin/default/includes/_actions.html.twig', { is_dropdown: true }) }}
    </div>
</div>
", "EasyAdminBundle:default/includes:_actions_dropdown.html.twig", "/var/www/html/How-to-install-FOSUserBundle-with-Symfony-4/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/includes/_actions_dropdown.html.twig");
    }
}
