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

/* catalog/category_list.twig */
class __TwigTemplate_3b4f50e542558789371f76028fc23c85f048b0ce880da19aa5c72d0595833cb0 extends Template
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
        <a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\">
          <i class=\"fa fa-plus\"></i>
        </a> 
        <a href=\"";
        // line 9
        echo ($context["repair"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_rebuild"] ?? null);
        echo "\" class=\"btn btn-secondary\">
          <i class=\"fa fa-refresh\"></i>
        </a>
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 12
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-category').submit() : false;\">
          <i class=\"fa-regular fa-trash-can\"></i>
        </button>
      </div>
      <h1>";
        // line 16
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 19
            echo "        <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 26
        if (($context["error_warning"] ?? null)) {
            // line 27
            echo "    <div class=\"alert alert-danger alert-dismissible fade show\">
      <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 28
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 32
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 33
            echo "    <div class=\"alert alert-success alert-dismissible fade show\">
      <i class=\"fa fa-check-circle\"></i> ";
            // line 34
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 38
        echo "
    <div class=\"card\">
      <div class=\"card-header\">
        <i class=\"fa fa-list\"></i> ";
        // line 41
        echo ($context["text_list"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
        <form action=\"";
        // line 44
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <th style=\"width: 1px;\" class=\"text-center\">
                    <input type=\"checkbox\" class=\"form-check-input\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" />
                  </th>
                  <th class=\"text-start\">
                    ";
        // line 53
        if ((($context["sort"] ?? null) == "name")) {
            // line 54
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 56
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 58
        echo "                  </th>
                  <th class=\"text-end\">
                    ";
        // line 60
        if ((($context["sort"] ?? null) == "sort_order")) {
            // line 61
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 63
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 65
        echo "                  </th>
                  <th class=\"text-end\">";
        // line 66
        echo ($context["column_action"] ?? null);
        echo "</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 70
        if (($context["categories"] ?? null)) {
            // line 71
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 72
                echo "                <tr>
                  <td class=\"text-center\">
                    ";
                // line 74
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 74), ($context["selected"] ?? null))) {
                    // line 75
                    echo "                    <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 75);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 77
                    echo "                    <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 77);
                    echo "\" />
                    ";
                }
                // line 79
                echo "                  </td>
                  <td class=\"text-start\">";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 80);
                echo "
                   <br/>
                  ";
                // line 82
                if (twig_get_attribute($this->env, $this->source, $context["category"], "status", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "                    <small class=\"text-success\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</small>
                  ";
                } else {
                    // line 85
                    echo "                    <small class=\"text-danger\">";
                    echo ($context["text_disabled"] ?? null);
                    echo "</small>
                  ";
                }
                // line 86
                echo "</td>
                  <td class=\"text-end\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["category"], "sort_order", [], "any", false, false, false, 87);
                echo "</td>
                  <td class=\"text-end\">
                    <a href=\"";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["category"], "edit", [], "any", false, false, false, 89);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\">
                      <i class=\"fa fa-pencil\"></i>
                    </a>
                  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                ";
        } else {
            // line 96
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 97
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 100
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">";
        // line 105
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-end\">";
        // line 106
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 112
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/category_list.twig";
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
        return array (  301 => 112,  292 => 106,  288 => 105,  281 => 100,  275 => 97,  272 => 96,  269 => 95,  255 => 89,  250 => 87,  247 => 86,  241 => 85,  235 => 83,  233 => 82,  228 => 80,  225 => 79,  219 => 77,  213 => 75,  211 => 74,  207 => 72,  202 => 71,  200 => 70,  193 => 66,  190 => 65,  182 => 63,  172 => 61,  170 => 60,  166 => 58,  158 => 56,  148 => 54,  146 => 53,  134 => 44,  128 => 41,  123 => 38,  116 => 34,  113 => 33,  110 => 32,  103 => 28,  100 => 27,  98 => 26,  91 => 21,  80 => 19,  76 => 18,  71 => 16,  62 => 12,  54 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/category_list.twig", "");
    }
}
