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

/* localisation/language_form.twig */
class __TwigTemplate_4c8ef6cac52195410c046a06414973a78fe9430f3d785ae983cf02992615b3a8 extends Template
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
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-language\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
          <i class=\"fa fa-save\"></i>
        </button>
        <a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-secondary\">
          <i class=\"fa fa-reply\"></i>
        </a>
      </div>
      <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "        <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 22
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-danger alert-dismissible fade show\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"card\">
      <div class=\"card-header\">
        <i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo ($context["text_form"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
        <form action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\" class=\"row \">
          <div class=\"mb-3 row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 34
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 36
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 37
        if (($context["error_name"] ?? null)) {
            // line 38
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 40
        echo "            </div>
          </div>
          <div class=\"mb-3 row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-code\">";
        // line 43
        echo ($context["entry_code"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"code\" id=\"input-code\" class=\"form-select\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 47
            echo "                ";
            if (($context["language"] == ($context["code"] ?? null))) {
                // line 48
                echo "                <option value=\"";
                echo $context["language"];
                echo "\" selected=\"selected\">";
                echo $context["language"];
                echo "</option>
                ";
            } else {
                // line 50
                echo "                <option value=\"";
                echo $context["language"];
                echo "\">";
                echo $context["language"];
                echo "</option>
                ";
            }
            // line 52
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "              </select>
              ";
        // line 54
        if (($context["error_code"] ?? null)) {
            // line 55
            echo "              <div class=\"text-danger\">";
            echo ($context["error_code"] ?? null);
            echo "</div>
              ";
        }
        // line 57
        echo "            </div>
          </div>
          <div class=\"mb-3 row required\">
            <label class=\"col-sm-2 col-form-label required\" for=\"input-locale\">
              <span data-bs-toggle=\"tooltip\" title=\"";
        // line 61
        echo ($context["help_locale"] ?? null);
        echo "\">";
        echo ($context["entry_locale"] ?? null);
        echo "</span>
            </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"locale\" value=\"";
        // line 64
        echo ($context["locale"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_locale"] ?? null);
        echo "\" id=\"input-locale\" class=\"form-control\" />
              ";
        // line 65
        if (($context["error_locale"] ?? null)) {
            // line 66
            echo "              <div class=\"text-danger\">";
            echo ($context["error_locale"] ?? null);
            echo "</div>
              ";
        }
        // line 68
        echo "            </div>
          </div>
          <div class=\"mb-3 row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-status\">
              <span data-bs-toggle=\"tooltip\" title=\"";
        // line 72
        echo ($context["help_status"] ?? null);
        echo "\">";
        echo ($context["entry_status"] ?? null);
        echo "</span>
            </label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-select\">
                ";
        // line 76
        if (($context["status"] ?? null)) {
            // line 77
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 78
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 80
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 81
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 83
        echo "              </select>
            </div>
          </div>
          <div class=\"mb-3 row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-sort-order\">";
        // line 87
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"sort_order\" value=\"";
        // line 89
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 97
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "localisation/language_form.twig";
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
        return array (  271 => 97,  258 => 89,  253 => 87,  247 => 83,  242 => 81,  237 => 80,  232 => 78,  227 => 77,  225 => 76,  216 => 72,  210 => 68,  204 => 66,  202 => 65,  196 => 64,  188 => 61,  182 => 57,  176 => 55,  174 => 54,  171 => 53,  165 => 52,  157 => 50,  149 => 48,  146 => 47,  142 => 46,  136 => 43,  131 => 40,  125 => 38,  123 => 37,  117 => 36,  112 => 34,  107 => 32,  101 => 29,  97 => 27,  89 => 23,  87 => 22,  81 => 18,  70 => 16,  66 => 15,  61 => 13,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "localisation/language_form.twig", "");
    }
}
