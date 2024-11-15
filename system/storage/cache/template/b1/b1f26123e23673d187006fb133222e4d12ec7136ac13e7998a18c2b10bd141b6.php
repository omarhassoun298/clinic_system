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

/* extension/module/contact_us_component.twig */
class __TwigTemplate_48582d666daf9c151892a43a6c5179f60e94c8d1af83842a3931a9babe503144 extends Template
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
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"float-end\">
\t\t\t\t<button type=\"submit\" form=\"form-module\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t<h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 23
        if (($context["error_warning"] ?? null)) {
            // line 24
            echo "\t\t\t<div class=\"alert alert-danger alert-dismissible fade show\">
\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> ";
            // line 25
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t";
        }
        // line 29
        echo "
\t\t";
        // line 30
        if (($context["success"] ?? null)) {
            // line 31
            echo "\t\t\t<div class=\"alert alert-success alert-dismissible fade show\">
\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> ";
            // line 32
            echo ($context["success"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t";
        }
        // line 36
        echo "\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<i class=\"fa fa-pencil\"></i> ";
        // line 38
        echo ($context["text_edit"] ?? null);
        echo "
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form action=\"";
        // line 41
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"row \">
\t\t\t\t\t<div class=\"mb-3 row\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-title\">";
        // line 43
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"module_contact_us_component_title\" id=\"input-title\" value=\"";
        // line 45
        echo ($context["module_contact_us_component_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3 row\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-subtitle\">";
        // line 49
        echo ($context["entry_subtitle"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"module_contact_us_component_subtitle\" id=\"input-subtitle\" value=\"";
        // line 51
        echo ($context["module_contact_us_component_subtitle"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_subtitle"] ?? null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3 row\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-buttonname\">";
        // line 55
        echo ($context["entry_buttonname"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"module_contact_us_component_buttonname\" id=\"input-buttonname\" value=\"";
        // line 57
        echo ($context["module_contact_us_component_buttonname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_buttonname"] ?? null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 61
        echo ($context["entry_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"card image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 64
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"module_contact_us_component_image\" value=\"";
        // line 65
        echo ($context["module_contact_us_component_image"] ?? null);
        echo "\" id=\"input-image\"/>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 67
        echo ($context["button_edit"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t<button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 68
        echo ($context["button_clear"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 78
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/module/contact_us_component.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  202 => 78,  189 => 68,  185 => 67,  180 => 65,  174 => 64,  168 => 61,  159 => 57,  154 => 55,  145 => 51,  140 => 49,  131 => 45,  126 => 43,  121 => 41,  115 => 38,  111 => 36,  104 => 32,  101 => 31,  99 => 30,  96 => 29,  89 => 25,  86 => 24,  84 => 23,  77 => 18,  66 => 15,  63 => 14,  59 => 13,  54 => 11,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/contact_us_component.twig", "");
    }
}
