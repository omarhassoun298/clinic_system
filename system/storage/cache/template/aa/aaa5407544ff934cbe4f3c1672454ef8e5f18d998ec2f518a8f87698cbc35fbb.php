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

/* common/broker_form.twig */
class __TwigTemplate_a80d3bdbd31eeef9a946b255b95347bbc82b4db76a5e752754448f2812b0d0ee extends Template
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
<div id=\"description\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"float-end\">
\t\t\t\t<button type=\"submit\" form=\"form-blog\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t<i class=\"fa fa-reply\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t<h1>";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 18);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>
\t</div>

\t<div class=\"container-fluid\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t";
        // line 30
        echo ($context["text_form"] ?? null);
        echo "
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blog\" class=\"row\">
\t\t\t\t\t<div class=\"mb-3 row required\">
\t\t\t\t\t\t<label for=\"input-title\" class=\"col-md-2 col-form-label\">";
        // line 35
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"title\" id=\"input-title\" value=\"";
        // line 37
        echo ($context["title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control ";
        if (($context["error_title"] ?? null)) {
            echo "is-invalid";
        }
        echo "\"/>
\t\t\t\t\t\t\t ";
        // line 38
        if (($context["error_title"] ?? null)) {
            // line 39
            echo "\t\t\t\t\t\t\t\t<div id=\"error-title\" class=\"invalid-feedback d-block\">";
            echo ($context["error_title"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t ";
        }
        // line 41
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label for=\"input-description\" class=\"col-sm-2 col-form-label\">Description</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea name=\"description\" placeholder=\"Description\" id=\"input-description\" data-oc-toggle=\"ckeditor\" data-lang=\"";
        // line 46
        echo ($context["ckeditor"] ?? null);
        echo "\" class=\"form-control\">";
        echo ($context["description"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 50
        echo ($context["entry_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"card image\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 53
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"image\" value=\"";
        // line 54
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t";
        // line 58
        echo ($context["button_edit"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-trash-can\"></i>
\t\t\t\t\t\t\t\t\t\t";
        // line 61
        echo ($context["button_clear"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">";
        // line 67
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"form-check form-switch form-switch-lg\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"status\" value=\"0\"/>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\" ";
        // line 71
        if (($context["status"] ?? null)) {
            echo " checked ";
        }
        echo "/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-text\">";
        // line 73
        echo ($context["help_status"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<style>
\t.cke_notification_warning {
\t\tdisplay: none;
\t}
</style>
<script src=\"view/javascript/ckeditor/ckeditor.js\"></script>
<script src=\"view/javascript/ckeditor/adapters/jquery.js\"></script>

<script type=\"text/javascript\">
\t\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({language: '";
        // line 90
        echo ($context["ckeditor"] ?? null);
        echo "'});
</script>

";
        // line 93
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "common/broker_form.twig";
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
        return array (  220 => 93,  214 => 90,  194 => 73,  187 => 71,  180 => 67,  171 => 61,  165 => 58,  158 => 54,  152 => 53,  146 => 50,  137 => 46,  130 => 41,  124 => 39,  122 => 38,  112 => 37,  107 => 35,  102 => 33,  96 => 30,  85 => 21,  74 => 18,  71 => 17,  67 => 16,  62 => 14,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/broker_form.twig", "");
    }
}
