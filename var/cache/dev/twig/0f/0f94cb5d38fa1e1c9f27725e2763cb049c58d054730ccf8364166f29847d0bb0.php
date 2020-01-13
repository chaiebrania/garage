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

/* EasyAdminBundle:default:list.html.twig */
class __TwigTemplate_9f19b9312dd7535dc696710feeb380ea4f4a44dcb0cac0a83f334078fd6d69f1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'global_actions' => [$this, 'block_global_actions'],
            'search_action' => [$this, 'block_search_action'],
            'search_form' => [$this, 'block_search_form'],
            'new_action' => [$this, 'block_new_action'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'content_header' => [$this, 'block_content_header'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'item_actions' => [$this, 'block_item_actions'],
            'delete_form' => [$this, 'block_delete_form'],
            'content_footer' => [$this, 'block_content_footer'],
            'paginator' => [$this, 'block_paginator'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 5, $this->source); })()), "templates", [], "any", false, false, false, 5), "layout", [], "any", false, false, false, 5), "EasyAdminBundle:default:list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "query", [], "any", false, false, false, 1), "get", [0 => "entity"], "method", false, false, false, 1));
        // line 2
        $context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"] = twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 2, $this->source); })()), "translation_domain", [], "any", false, false, false, 2);
        // line 3
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), [],         // line 2
(isset($context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"]) || array_key_exists("__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606", $context) ? $context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"] : (function () { throw new RuntimeError('Variable "__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606" does not exist.', 2, $this->source); })())), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 3, $this->source); })()), "label", [], "any", false, false, false, 3), [],         // line 2
(isset($context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"]) || array_key_exists("__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606", $context) ? $context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"] : (function () { throw new RuntimeError('Variable "__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606" does not exist.', 2, $this->source); })()))];
        // line 7
        $context["_request_parameters"] = twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "query", [], "any", false, false, false, 7), "all", [], "any", false, false, false, 7), (((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context))) ? (_twig_default_filter((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 7, $this->source); })()), [])) : ([]))), ["action" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "get", [0 => "action"], "method", false, false, false, 8), "entity" => twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "menuIndex" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "get", [0 => "menuIndex"], "method", false, false, false, 10), "submenuIndex" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "get", [0 => "submenuIndex"], "method", false, false, false, 11), "sortField" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "get", [0 => "sortField"], "method", false, false, false, 12), "sortDirection" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "get", [0 => "sortDirection"], "method", false, false, false, 13), "page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", [0 => "page", 1 => 1], "method", false, false, false, 14), "referer" => null]);
        // line 18
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "get", [0 => "action"], "method", false, false, false, 18))) {
            // line 19
            $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 19, $this->source); })()), ["query" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
($context["app"] ?? null), "request", [], "any", false, true, false, 20), "get", [0 => "query"], "method", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 20), "get", [0 => "query"], "method", false, false, false, 20), "")) : (""))]);
        }
        // line 24
        $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 24, $this->source); })()), ["referer" => twig_urlencode_filter($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 24, $this->source); })())))]);
        // line 25
        $context["_has_batch_actions"] = ((isset($context["batch_form"]) || array_key_exists("batch_form", $context)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["batch_form"]) || array_key_exists("batch_form", $context) ? $context["batch_form"] : (function () { throw new RuntimeError('Variable "batch_form" does not exist.', 25, $this->source); })()), "vars", [], "any", false, false, false, 25), "batch_actions", [], "any", false, false, false, 25)) > 0));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27)), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 31
        echo "    ";
        ob_start(function () { return ''; });
        // line 32
        echo "        ";
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "get", [0 => "action"], "method", false, false, false, 32))) {
            // line 33
            echo "            ";
            $context["_default_title"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("search.page_title", twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 33, $this->source); })()), "nbResults", [], "any", false, false, false, 33), [], "EasyAdminBundle");
            // line 34
            echo "            ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true, false, 34), "title", [], "any", true, true, false, 34)) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 34, $this->source); })()), "search", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34), twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 34, $this->source); })()), "nbResults", [], "any", false, false, false, 34), [],             // line 2
(isset($context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"]) || array_key_exists("__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606", $context) ? $context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"] : (function () { throw new RuntimeError('Variable "__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606" does not exist.', 2, $this->source); })()))) : (            // line 34
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new RuntimeError('Variable "_default_title" does not exist.', 34, $this->source); })())));
            echo "
        ";
        } else {
            // line 36
            echo "            ";
            $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 36, $this->source); })()), "EasyAdminBundle");
            // line 37
            echo "            ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, true, false, 37), "title", [], "any", true, true, false, 37)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 37, $this->source); })()), "list", [], "any", false, false, false, 37), "title", [], "any", false, false, false, 37), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 37, $this->source); })()),             // line 2
(isset($context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"]) || array_key_exists("__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606", $context) ? $context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"] : (function () { throw new RuntimeError('Variable "__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606" does not exist.', 2, $this->source); })()))) : (            // line 37
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new RuntimeError('Variable "_default_title" does not exist.', 37, $this->source); })())));
            echo "
        ";
        }
        // line 39
        echo "    ";
        $___internal_dba2b954aa06ee7a0366c70c14e16d984775c6f11c3f11dda1c7f000a983b5f3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        echo twig_spaceless($___internal_dba2b954aa06ee7a0366c70c14e16d984775c6f11c3f11dda1c7f000a983b5f3_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        // line 43
        echo "    ";
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled("list", "search", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43))) {
            // line 44
            echo "        ";
            $context["_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration("list", "search", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44));
            // line 45
            echo "
        ";
            // line 46
            $this->displayBlock('search_action', $context, $blocks);
            // line 75
            echo "    ";
        }
        // line 76
        echo "
    ";
        // line 77
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled("list", "new", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 77, $this->source); })()), "name", [], "any", false, false, false, 77))) {
            // line 78
            echo "        ";
            $context["_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration("list", "new", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 78, $this->source); })()), "name", [], "any", false, false, false, 78));
            // line 79
            echo "        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 87
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_search_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_action"));

        // line 47
        echo "            <div class=\"form-action form-action-search ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", false, false, false, 47), "")) : ("")), "html", null, true);
        echo "\">
                <form method=\"get\" action=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\">
                    ";
        // line 49
        $this->displayBlock('search_form', $context, $blocks);
        // line 72
        echo "                </form>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        // line 50
        echo "                        <input type=\"hidden\" name=\"action\" value=\"search\">
                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 51, $this->source); })()), "entity", [], "any", false, false, false, 51), "html", null, true);
        echo "\">
                        ";
        // line 58
        echo "                        ";
        if (twig_in_filter("sortField", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "uri", [], "any", false, false, false, 58))) {
            // line 59
            echo "                            <input type=\"hidden\" name=\"sortField\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 59, $this->source); })()), "sortField", [], "any", false, false, false, 59), "html", null, true);
            echo "\">
                        ";
        }
        // line 61
        echo "                        ";
        if (twig_in_filter("sortDirection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "uri", [], "any", false, false, false, 61))) {
            // line 62
            echo "                            <input type=\"hidden\" name=\"sortDirection\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 62, $this->source); })()), "sortDirection", [], "any", false, false, false, 62), "html", null, true);
            echo "\">
                        ";
        }
        // line 64
        echo "                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 64, $this->source); })()), "menuIndex", [], "any", false, false, false, 64), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 65, $this->source); })()), "submenuIndex", [], "any", false, false, false, 65), "html", null, true);
        echo "\">
                        <div class=\"form-group\">
                            <div class=\"form-widget\">
                                <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 68), "get", [0 => "query"], "method", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 68), "get", [0 => "query"], "method", false, false, false, 68), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", false, false, false, 68), "action.search")) : ("action.search")), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 68, $this->source); })()),         // line 2
(isset($context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"]) || array_key_exists("__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606", $context) ? $context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"] : (function () { throw new RuntimeError('Variable "__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606" does not exist.', 2, $this->source); })())), "html", null, true);
        // line 68
        echo "\">
                            </div>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 79
    public function block_new_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_action"));

        // line 80
        echo "            <div class=\"button-action\">
                <a class=\"";
        // line 81
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", true, true, false, 81)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", false, false, false, 81), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 81, $this->source); })()), ["action" => twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 81, $this->source); })()), "name", [], "any", false, false, false, 81)])), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 81, $this->source); })()), "target", [], "any", false, false, false, 81), "html", null, true);
        echo "\">
                    ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 82, $this->source); })()), "icon", [], "any", false, false, false, 82)) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 82, $this->source); })()), "icon", [], "any", false, false, false, 82), "html", null, true);
            echo "\"></i>";
        }
        // line 83
        echo "                    ";
        (((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", true, true, false, 83) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 83, $this->source); })()), "label", [], "any", false, false, false, 83)))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 83, $this->source); })()), "label", [], "any", false, false, false, 83), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 83, $this->source); })()),         // line 2
(isset($context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"]) || array_key_exists("__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606", $context) ? $context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"] : (function () { throw new RuntimeError('Variable "__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606" does not exist.', 2, $this->source); })())), "html", null, true))) : (print ("")));
        // line 83
        echo "
                </a>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 90
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 91
        echo "    ";
        if ((isset($context["_has_batch_actions"]) || array_key_exists("_has_batch_actions", $context) ? $context["_has_batch_actions"] : (function () { throw new RuntimeError('Variable "_has_batch_actions" does not exist.', 91, $this->source); })())) {
            // line 92
            echo "        <div class=\"batch-actions\" style=\"display: none\">
            ";
            // line 93
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["batch_form"]) || array_key_exists("batch_form", $context) ? $context["batch_form"] : (function () { throw new RuntimeError('Variable "batch_form" does not exist.', 93, $this->source); })()), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.form_theme"), true);
            // line 94
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["batch_form"]) || array_key_exists("batch_form", $context) ? $context["batch_form"] : (function () { throw new RuntimeError('Variable "batch_form" does not exist.', 94, $this->source); })()), 'form');
            echo "
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 99
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 100
        echo "    ";
        $this->displayParentBlock("content_header", $context, $blocks);
        echo "
    ";
        // line 101
        $this->displayBlock("batch_actions", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 104
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 105
        echo "    ";
        $context["_list_item_actions"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("list", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 105, $this->source); })()), "name", [], "any", false, false, false, 105));
        // line 106
        echo "
    <table class=\"table datagrid\">
        <thead>
        ";
        // line 109
        $this->displayBlock('table_head', $context, $blocks);
        // line 139
        echo "        </thead>

        <tbody>
        ";
        // line 142
        $this->displayBlock('table_body', $context, $blocks);
        // line 189
        echo "        </tbody>
    </table>

    ";
        // line 192
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 109
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        // line 110
        echo "            <tr>
                ";
        // line 111
        if ((isset($context["_has_batch_actions"]) || array_key_exists("_has_batch_actions", $context) ? $context["_has_batch_actions"] : (function () { throw new RuntimeError('Variable "_has_batch_actions" does not exist.', 111, $this->source); })())) {
            // line 112
            echo "                    <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                ";
        }
        // line 114
        echo "
                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 116
            echo "                    ";
            $context["isSortingField"] = ((twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 116) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "request", [], "any", false, false, false, 116), "get", [0 => "sortField"], "method", false, false, false, 116)) || (("association" == twig_get_attribute($this->env, $this->source, $context["metadata"], "type", [], "any", false, false, false, 116)) && (is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "request", [], "any", false, false, false, 116), "get", [0 => "sortField"], "method", false, false, false, 116)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 116) . ".")) && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))));
            // line 117
            echo "                    ";
            $context["nextSortDirection"] = (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new RuntimeError('Variable "isSortingField" does not exist.', 117, $this->source); })())) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "request", [], "any", false, false, false, 117), "get", [0 => "sortDirection"], "method", false, false, false, 117) == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 118
            echo "                    ";
            $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [], "any", false, false, false, 118), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 118, $this->source); })()),             // line 2
(isset($context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"]) || array_key_exists("__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606", $context) ? $context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"] : (function () { throw new RuntimeError('Variable "__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606" does not exist.', 2, $this->source); })()));
            // line 119
            echo "                    ";
            $context["_column_icon"] = (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new RuntimeError('Variable "isSortingField" does not exist.', 119, $this->source); })())) ? (((((isset($context["nextSortDirection"]) || array_key_exists("nextSortDirection", $context) ? $context["nextSortDirection"] : (function () { throw new RuntimeError('Variable "nextSortDirection" does not exist.', 119, $this->source); })()) == "DESC")) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 120
            echo "
                    <th class=\"";
            // line 121
            echo (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new RuntimeError('Variable "isSortingField" does not exist.', 121, $this->source); })())) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["metadata"], "virtual", [], "any", false, false, false, 121)) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "dataType", [], "any", false, false, false, 121)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "css_class", [], "any", false, false, false, 121), "html", null, true);
            echo "\" ";
            echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        ";
            // line 122
            if (twig_get_attribute($this->env, $this->source, $context["metadata"], "sortable", [], "any", false, false, false, 122)) {
                // line 123
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 123, $this->source); })()), ["page" => 1, "sortField" => twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 123), "sortDirection" => (isset($context["nextSortDirection"]) || array_key_exists("nextSortDirection", $context) ? $context["nextSortDirection"] : (function () { throw new RuntimeError('Variable "nextSortDirection" does not exist.', 123, $this->source); })())])), "html", null, true);
                echo "\">
                                ";
                // line 124
                echo (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new RuntimeError('Variable "_column_label" does not exist.', 124, $this->source); })());
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, (isset($context["_column_icon"]) || array_key_exists("_column_icon", $context) ? $context["_column_icon"] : (function () { throw new RuntimeError('Variable "_column_icon" does not exist.', 124, $this->source); })()), "html", null, true);
                echo "\"></i>
                            </a>
                        ";
            } else {
                // line 127
                echo "                            <span>";
                echo (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new RuntimeError('Variable "_column_label" does not exist.', 127, $this->source); })());
                echo "</span>
                        ";
            }
            // line 129
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "
                ";
        // line 132
        if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new RuntimeError('Variable "_list_item_actions" does not exist.', 132, $this->source); })())) > 0)) {
            // line 133
            echo "                    <th ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 133, $this->source); })()), "list", [], "any", false, false, false, 133), "collapse_actions", [], "any", false, false, false, 133)) {
                echo "width=\"10px\"";
            }
            echo " ";
            echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        <span class=\"sr-only\">";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.row_actions", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 134, $this->source); })()), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 137
        echo "            </tr>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 142
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        // line 143
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 143, $this->source); })()), "currentPageResults", [], "any", false, false, false, 143));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 144
            echo "                ";
            // line 145
            echo "                ";
            $context["_item_id"] = ("" . twig_get_attribute($this->env, $this->source, $context["item"], twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 145, $this->source); })()), "primary_key_field_name", [], "any", false, false, false, 145), [], "any", false, false, false, 145));
            // line 146
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new RuntimeError('Variable "_item_id" does not exist.', 146, $this->source); })()), "html", null, true);
            echo "\">
                    ";
            // line 147
            if ((isset($context["_has_batch_actions"]) || array_key_exists("_has_batch_actions", $context) ? $context["_has_batch_actions"] : (function () { throw new RuntimeError('Variable "_has_batch_actions" does not exist.', 147, $this->source); })())) {
                // line 148
                echo "                        <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new RuntimeError('Variable "_item_id" does not exist.', 148, $this->source); })()), "html", null, true);
                echo "\"></td>
                    ";
            }
            // line 150
            echo "
                    ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 151, $this->source); })()));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 152
                echo "                        ";
                $context["isSortingField"] = (twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 152) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "request", [], "any", false, false, false, 152), "get", [0 => "sortField"], "method", false, false, false, 152));
                // line 153
                echo "                        ";
                $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [], "any", false, false, false, 153)) ? (twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [], "any", false, false, false, 153)) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 153, $this->source); })()),                 // line 2
(isset($context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"]) || array_key_exists("__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606", $context) ? $context["__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606"] : (function () { throw new RuntimeError('Variable "__internal_4e10ae773c76d0764e3bc64bd58296cfe120ce1b7e63b8abc9b6f137a48f7606" does not exist.', 2, $this->source); })()));
                // line 154
                echo "
                        <td class=\"";
                // line 155
                echo (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new RuntimeError('Variable "isSortingField" does not exist.', 155, $this->source); })())) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "dataType", [], "any", false, false, false, 155)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "css_class", [], "any", false, false, false, 155), "html", null, true);
                echo "\" ";
                echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
                echo ">
                            ";
                // line 156
                echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->renderEntityField($this->env, "list", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 156, $this->source); })()), "name", [], "any", false, false, false, 156), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "
                    ";
            // line 160
            if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new RuntimeError('Variable "_list_item_actions" does not exist.', 160, $this->source); })())) > 0)) {
                // line 161
                echo "                        ";
                $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.row_actions", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 161, $this->source); })()), "EasyAdminBundle");
                // line 162
                echo "                        <td class=\"actions\">
                        ";
                // line 163
                $this->displayBlock('item_actions', $context, $blocks);
                // line 178
                echo "                        </td>
                    ";
            }
            // line 180
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 182
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 183
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new RuntimeError('Variable "_list_item_actions" does not exist.', 183, $this->source); })())) > 0)) ? ((twig_length_filter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 183, $this->source); })())) + 1)) : (twig_length_filter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 183, $this->source); })())))), "html", null, true);
            echo "\">
                        ";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search.no_results", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 184, $this->source); })()), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 163
    public function block_item_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_actions"));

        // line 164
        echo "                            ";
        $context["_actions_template"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 164, $this->source); })()), "list", [], "any", false, false, false, 164), "collapse_actions", [], "any", false, false, false, 164)) ? ("@EasyAdmin/default/includes/_actions_dropdown.html.twig") : ("@EasyAdmin/default/includes/_actions.html.twig"));
        // line 168
        echo "                            ";
        echo twig_include($this->env, $context, (isset($context["_actions_template"]) || array_key_exists("_actions_template", $context) ? $context["_actions_template"] : (function () { throw new RuntimeError('Variable "_actions_template" does not exist.', 168, $this->source); })()), ["actions" =>         // line 169
(isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new RuntimeError('Variable "_list_item_actions" does not exist.', 169, $this->source); })()), "entity_config" =>         // line 170
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 170, $this->source); })()), "request_parameters" =>         // line 171
(isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 171, $this->source); })()), "translation_domain" => twig_get_attribute($this->env, $this->source,         // line 172
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 172, $this->source); })()), "translation_domain", [], "any", false, false, false, 172), "trans_parameters" =>         // line 173
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 173, $this->source); })()), "item_id" =>         // line 174
(isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new RuntimeError('Variable "_item_id" does not exist.', 174, $this->source); })()), "item" =>         // line 175
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 175, $this->source); })())], false);
        // line 176
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 192
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 193
        echo "        ";
        $context["referer"] = (((((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 193, $this->source); })()), "currentPage", [], "any", false, false, false, 193) == twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 193, $this->source); })()), "nbPages", [], "any", false, false, false, 193)) && (1 != twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 193, $this->source); })()), "currentPage", [], "any", false, false, false, 193))) && (1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 193, $this->source); })()), "currentPageResults", [], "any", false, false, false, 193))))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 194
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 194, $this->source); })()), "request", [], "any", false, false, false, 194), "query", [], "any", false, false, false, 194), ["page" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 194, $this->source); })()), "request", [], "any", false, false, false, 194), "query", [], "any", false, false, false, 194), "get", [0 => "page"], "method", false, false, false, 194) - 1)]))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 195
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 195, $this->source); })()), "request", [], "any", false, false, false, 195), "requestUri", [], "any", false, false, false, 195)));
        // line 197
        echo "
        ";
        // line 198
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", ["view" => "list", "referer" =>         // line 200
(isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new RuntimeError('Variable "referer" does not exist.', 200, $this->source); })()), "delete_form" =>         // line 201
(isset($context["delete_form_template"]) || array_key_exists("delete_form_template", $context) ? $context["delete_form_template"] : (function () { throw new RuntimeError('Variable "delete_form_template" does not exist.', 201, $this->source); })()), "_translation_domain" => twig_get_attribute($this->env, $this->source,         // line 202
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 202, $this->source); })()), "translation_domain", [], "any", false, false, false, 202), "_trans_parameters" =>         // line 203
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 203, $this->source); })()), "_entity_config" =>         // line 204
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 204, $this->source); })())], false);
        // line 205
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 209
    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        // line 210
        echo "    ";
        $this->displayBlock('paginator', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        // line 211
        echo "        ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 211, $this->source); })()), "templates", [], "any", false, false, false, 211), "paginator", [], "any", false, false, false, 211));
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 215
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 216
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            const toggles = document.querySelectorAll('.checkbox-switch input[type=\"checkbox\"]');
            for (i = 0; i < toggles.length; i++) {
                toggles[i].addEventListener('change', function () {
                    const toggle = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const propertyName = this.closest('.checkbox-switch').dataset.propertyname;

                    const toggleUrl = \"";
        // line 228
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", ["action" => "edit", "entity" => twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 228, $this->source); })()), "name", [], "any", false, false, false, 228), "view" => "list"]);
        echo "\"
                        + \"&id=\" + this.closest('tr').dataset.id
                        + \"&property=\" + propertyName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        toggle.checked = oldValue;
                        toggle.disabled = true;
                        toggle.closest('.checkbox-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });

            ";
        // line 259
        if ((isset($context["_has_batch_actions"]) || array_key_exists("_has_batch_actions", $context) ? $context["_has_batch_actions"] : (function () { throw new RuntimeError('Variable "_has_batch_actions" does not exist.', 259, $this->source); })())) {
            // line 260
            echo "            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function(value) { return value !== id });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });
            ";
        }
        // line 296
        echo "        });
    </script>

    ";
        // line 299
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 299, $this->source); })()), "request", [], "any", false, false, false, 299), "get", [0 => "action"], "method", false, false, false, 299))) {
            // line 300
            echo "        <script type=\"text/javascript\">
            const _search_query = \"";
            // line 301
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 301), "get", [0 => "query"], "method", true, true, false, 301)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 301), "get", [0 => "query"], "method", false, false, false, 301), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody td:not(.actions)').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  852 => 301,  849 => 300,  847 => 299,  842 => 296,  804 => 260,  802 => 259,  768 => 228,  752 => 216,  745 => 215,  735 => 211,  721 => 210,  714 => 209,  706 => 205,  704 => 204,  703 => 203,  702 => 202,  701 => 201,  700 => 200,  699 => 198,  696 => 197,  694 => 195,  693 => 194,  691 => 193,  684 => 192,  676 => 176,  674 => 175,  673 => 174,  672 => 173,  671 => 172,  670 => 171,  669 => 170,  668 => 169,  666 => 168,  663 => 164,  656 => 163,  649 => 188,  639 => 184,  635 => 183,  632 => 182,  618 => 180,  614 => 178,  612 => 163,  609 => 162,  606 => 161,  604 => 160,  601 => 159,  592 => 156,  582 => 155,  579 => 154,  577 => 2,  575 => 153,  572 => 152,  568 => 151,  565 => 150,  559 => 148,  557 => 147,  552 => 146,  549 => 145,  547 => 144,  528 => 143,  521 => 142,  513 => 137,  507 => 134,  498 => 133,  496 => 132,  493 => 131,  486 => 129,  480 => 127,  472 => 124,  467 => 123,  465 => 122,  453 => 121,  450 => 120,  447 => 119,  445 => 2,  443 => 118,  440 => 117,  437 => 116,  433 => 115,  430 => 114,  426 => 112,  424 => 111,  421 => 110,  414 => 109,  407 => 192,  402 => 189,  400 => 142,  395 => 139,  393 => 109,  388 => 106,  385 => 105,  378 => 104,  369 => 101,  364 => 100,  357 => 99,  345 => 94,  343 => 93,  340 => 92,  337 => 91,  330 => 90,  320 => 83,  318 => 2,  316 => 83,  310 => 82,  302 => 81,  299 => 80,  292 => 79,  282 => 68,  280 => 2,  277 => 68,  271 => 65,  266 => 64,  260 => 62,  257 => 61,  251 => 59,  248 => 58,  244 => 51,  241 => 50,  234 => 49,  225 => 72,  223 => 49,  219 => 48,  214 => 47,  207 => 46,  199 => 87,  196 => 79,  193 => 78,  191 => 77,  188 => 76,  185 => 75,  183 => 46,  180 => 45,  177 => 44,  174 => 43,  167 => 42,  160 => 31,  157 => 39,  152 => 37,  151 => 2,  149 => 37,  146 => 36,  141 => 34,  140 => 2,  138 => 34,  135 => 33,  132 => 32,  129 => 31,  122 => 30,  109 => 28,  96 => 27,  89 => 5,  87 => 25,  85 => 24,  82 => 20,  81 => 19,  79 => 18,  77 => 14,  76 => 13,  75 => 12,  74 => 11,  73 => 10,  72 => 9,  71 => 8,  70 => 7,  68 => 2,  67 => 3,  66 => 2,  65 => 3,  63 => 2,  61 => 1,  51 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% set _request_parameters = app.request.query.all|merge(_request_parameters|default({}))|merge({
    action: app.request.get('action'),
    entity: _entity_config.name,
    menuIndex: app.request.get('menuIndex'),
    submenuIndex: app.request.get('submenuIndex'),
    sortField: app.request.get('sortField'),
    sortDirection: app.request.get('sortDirection'),
    page: app.request.get('page', 1),
    referer: null
}) %}

{% if 'search' == app.request.get('action') %}
    {% set _request_parameters = _request_parameters|merge({
        query: app.request.get('query')|default(''),
    }) %}
{% endif %}

{% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}
{% set _has_batch_actions = batch_form is defined and batch_form.vars.batch_actions|length > 0 %}

{% block body_id 'easyadmin-list-' ~ _entity_config.name %}
{% block body_class 'list list-' ~ _entity_config.name|lower %}

{% block content_title %}
    {% apply spaceless %}
        {% if 'search' == app.request.get('action') %}
            {% set _default_title = 'search.page_title'|transchoice(paginator.nbResults, {}, 'EasyAdminBundle') %}
            {{ (_entity_config.search.title is defined ? _entity_config.search.title|transchoice(paginator.nbResults) : _default_title)|raw }}
        {% else %}
            {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
            {{ (_entity_config.list.title is defined ? _entity_config.list.title|trans(_trans_parameters) : _default_title)|raw }}
        {% endif %}
    {% endapply %}
{% endblock %}

{% block global_actions %}
    {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}
        {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}

        {% block search_action %}
            <div class=\"form-action form-action-search {{ _action.css_class|default('') }}\">
                <form method=\"get\" action=\"{{ path('easyadmin') }}\">
                    {% block search_form %}
                        <input type=\"hidden\" name=\"action\" value=\"search\">
                        <input type=\"hidden\" name=\"entity\" value=\"{{ _request_parameters.entity }}\">
                        {# if the Request query doesn't define 'sortField' and 'sortDirection', we add them in the
                           controller (but they don't appear in the request URI). When users click on a column to
                           sort results, 'sortField' and 'sortDirection' are added to the Request query and they
                            appear in the request URI too. So, checking if 'sortField' and 'sortDirection' is the
                            only way to differentiate between sorting made by user and sorting made by us. We only
                            need to persist the sorting if it's explicitly made by the user. #}
                        {% if 'sortField' in app.request.uri %}
                            <input type=\"hidden\" name=\"sortField\" value=\"{{ _request_parameters.sortField }}\">
                        {% endif %}
                        {% if 'sortDirection' in app.request.uri %}
                            <input type=\"hidden\" name=\"sortDirection\" value=\"{{ _request_parameters.sortDirection }}\">
                        {% endif %}
                        <input type=\"hidden\" name=\"menuIndex\" value=\"{{ _request_parameters.menuIndex }}\">
                        <input type=\"hidden\" name=\"submenuIndex\" value=\"{{ _request_parameters.submenuIndex }}\">
                        <div class=\"form-group\">
                            <div class=\"form-widget\">
                                <input class=\"form-control\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query')|default('') }}\" placeholder=\"{{ _action.label|default('action.search')|trans(_trans_parameters) }}\">
                            </div>
                        </div>
                    {% endblock %}
                </form>
            </div>
        {% endblock search_action %}
    {% endif %}

    {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}
        {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}
        {% block new_action %}
            <div class=\"button-action\">
                <a class=\"{{ _action.css_class|default('') }}\" href=\"{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}\" target=\"{{ _action.target }}\">
                    {% if _action.icon %}<i class=\"fa fa-fw fa-{{ _action.icon }}\"></i>{% endif %}
                    {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}
                </a>
            </div>
        {% endblock new_action %}
    {% endif %}
{% endblock global_actions %}

{% block batch_actions %}
    {% if _has_batch_actions %}
        <div class=\"batch-actions\" style=\"display: none\">
            {% form_theme batch_form with easyadmin_config('design.form_theme') %}
            {{ form(batch_form) }}
        </div>
    {% endif %}
{% endblock batch_actions %}

{% block content_header %}
    {{ parent() }}
    {{ block('batch_actions') }}
{% endblock content_header %}

{% block main %}
    {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}

    <table class=\"table datagrid\">
        <thead>
        {% block table_head %}
            <tr>
                {% if _has_batch_actions %}
                    <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                {% endif %}

                {% for field, metadata in fields %}
                    {% set isSortingField = (metadata.property == app.request.get('sortField')) or ('association' == metadata.type and app.request.get('sortField') starts with metadata.property ~ '.') %}
                    {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}
                    {% set _column_label = metadata.label|trans(_trans_parameters) %}
                    {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-arrow-up' : 'fa-arrow-down') : 'fa-sort' %}

                    <th class=\"{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\" {{ easyadmin_config('design.rtl') ? 'dir=\"rtl\"' }}>
                        {% if metadata.sortable %}
                            <a href=\"{{ path('easyadmin', _request_parameters|merge({ page: 1, sortField: metadata.property, sortDirection: nextSortDirection })) }}\">
                                {{ _column_label|raw }} <i class=\"fa fa-fw {{ _column_icon }}\"></i>
                            </a>
                        {% else %}
                            <span>{{ _column_label|raw }}</span>
                        {% endif %}
                    </th>
                {% endfor %}

                {% if _list_item_actions|length > 0 %}
                    <th {% if _entity_config.list.collapse_actions %}width=\"10px\"{% endif %} {{ easyadmin_config('design.rtl') ? 'dir=\"rtl\"' }}>
                        <span class=\"sr-only\">{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>
                    </th>
                {% endif %}
            </tr>
        {% endblock table_head %}
        </thead>

        <tbody>
        {% block table_body %}
            {% for item in paginator.currentPageResults %}
                {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
                {% set _item_id = '' ~ attribute(item, _entity_config.primary_key_field_name) %}
                <tr data-id=\"{{ _item_id }}\">
                    {% if _has_batch_actions %}
                        <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"{{ _item_id }}\"></td>
                    {% endif %}

                    {% for field, metadata in fields %}
                        {% set isSortingField = metadata.property == app.request.get('sortField') %}
                        {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}

                        <td class=\"{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\" {{ easyadmin_config('design.rtl') ? 'dir=\"rtl\"' }}>
                            {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}
                        </td>
                    {% endfor %}

                    {% if _list_item_actions|length > 0 %}
                        {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}
                        <td class=\"actions\">
                        {% block item_actions %}
                            {% set _actions_template = _entity_config.list.collapse_actions
                                ? '@EasyAdmin/default/includes/_actions_dropdown.html.twig'
                                : '@EasyAdmin/default/includes/_actions.html.twig'
                            %}
                            {{ include(_actions_template, {
                                actions: _list_item_actions,
                                entity_config: _entity_config,
                                request_parameters: _request_parameters,
                                translation_domain: _entity_config.translation_domain,
                                trans_parameters: _trans_parameters,
                                item_id: _item_id,
                                item: item
                            }, with_context = false) }}
                        {% endblock item_actions %}
                        </td>
                    {% endif %}
                </tr>
            {% else %}
                <tr>
                    <td class=\"no-results\" colspan=\"{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}\">
                        {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}
                    </td>
                </tr>
            {% endfor %}
        {% endblock table_body %}
        </tbody>
    </table>

    {% block delete_form %}
        {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults|length
            ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))
            : app.request.requestUri
        %}

        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'list',
            referer: referer,
            delete_form: delete_form_template,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock main %}

{% block content_footer %}
    {% block paginator %}
        {{ include(_entity_config.templates.paginator) }}
    {% endblock paginator %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            const toggles = document.querySelectorAll('.checkbox-switch input[type=\"checkbox\"]');
            for (i = 0; i < toggles.length; i++) {
                toggles[i].addEventListener('change', function () {
                    const toggle = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const propertyName = this.closest('.checkbox-switch').dataset.propertyname;

                    const toggleUrl = \"{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}\"
                        + \"&id=\" + this.closest('tr').dataset.id
                        + \"&property=\" + propertyName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        toggle.checked = oldValue;
                        toggle.disabled = true;
                        toggle.closest('.checkbox-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });

            {% if _has_batch_actions %}
            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function(value) { return value !== id });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });
            {% endif %}
        });
    </script>

    {% if 'search' == app.request.get('action') %}
        <script type=\"text/javascript\">
            const _search_query = \"{{ app.request.get('query')|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody td:not(.actions)').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "EasyAdminBundle:default:list.html.twig", "/var/www/html/How-to-install-FOSUserBundle-with-Symfony-4/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/list.html.twig");
    }
}
