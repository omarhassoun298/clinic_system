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

/* clinic/patient_list.twig */
class __TwigTemplate_ea9b5863d95b46623609fde05c7a489326cefde47d7c71a2b12efdd2cdffea0e extends Template
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
          <i class=\"fa-solid fa-plus\"></i>
        </a>
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" 
          onclick=\"confirm('";
        // line 10
        echo ($context["text_confirm"] ?? null);
        echo "') ? document.getElementById('form-manufacturer').submit() : false;\">
          <i class=\"fa-regular fa-trash-can\"></i>
        </button>
      </div>
      <h1>";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "        <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
      <div class=\"row\">
          ";
        // line 24
        if (($context["error_warning"] ?? null)) {
            // line 25
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
          ";
        }
        // line 27
        echo "          ";
        if (($context["success"] ?? null)) {
            // line 28
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
          ";
        }
        // line 30
        echo "          <div id=\"filter-country\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
            <div class=\"card\">
              <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</div>
              <div class=\"card-body\">
                <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 35
        echo ($context["entry_name"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_name\" value=\"";
        echo ($context["filter_name"] ?? null);
        echo "\" data-oc-target=\"autocomplete-name\" autocomplete=\"off\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
                </div>
                <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 39
        echo ($context["entry_iso_code_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_iso_code_2\" value=\"";
        echo ($context["filter_iso_code_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_iso_code_2"] ?? null);
        echo "\" id=\"input-iso-code-2\" class=\"form-control\"/>
                </div>
                <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 42
        echo ($context["entry_iso_code_3"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_iso_code_3\" value=\"";
        echo ($context["filter_iso_code_3"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_iso_code_3"] ?? null);
        echo "\" id=\"input-iso-code-3\" class=\"form-control\"/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 45
        echo ($context["button_filter"] ?? null);
        echo "</button>
                  <button type=\"button\" id=\"button-clear\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> Clear</button>
                </div>
              </div>
            </div>
          </div>
        <div class=\"card col-lg-9 col-md-12\">
          <div class=\"card-header\">
            <i class=\"fa fa-list\"></i> ";
        // line 53
        echo ($context["text_list"] ?? null);
        echo "
          </div>
          <div class=\"card-body\">
            <form action=\"";
        // line 56
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-manufacturer\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th style=\"width: 1px;\" class=\"text-center\">
                        <input type=\"checkbox\" class=\"form-check-input\" onclick=\"document.querySelectorAll('input[name*=\\'selected\\']').forEach(el => el.checked = this.checked);\" />
                      </th>
                      <th class=\"text-left\">Information</th>
                      <th class=\"text-left\">Doctor</th>
                      <th class=\"text-left\">Diagnosis</th>
                      <th class=\"text-left\">Description</th>
                      <th class=\"text-end\">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 72
        if (($context["patients"] ?? null)) {
            // line 73
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["patients"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                // line 74
                echo "                    <tr>
                      <td class=\"text-center\">
                        ";
                // line 76
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["patient"], "patient_id", [], "any", false, false, false, 76), ($context["selected"] ?? null))) {
                    // line 77
                    echo "                        <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["patient"], "patient_id", [], "any", false, false, false, 77);
                    echo "\" checked />
                        ";
                } else {
                    // line 79
                    echo "                        <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["patient"], "patient_id", [], "any", false, false, false, 79);
                    echo "\" />
                        ";
                }
                // line 81
                echo "                      </td>
                      <td class=\"text-left\">
                    <table>
                            <tbody><tr><td style=\"padding-right:3px;\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i></td><td>";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "name", [], "any", false, false, false, 84);
                echo "</td></tr>
                                <tr><td style=\"padding-right:3px;\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></td><td>";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "email", [], "any", false, false, false, 85);
                echo "</td></tr>
                                <tr><td style=\"padding-right:3px;\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></td><td>";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "telephone", [], "any", false, false, false, 86);
                echo "</td></tr>
                            </tbody>
                    </table>
                      </td>
                      <td class=\"text-left\">";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "doctor", [], "any", false, false, false, 90);
                echo "</td>
                      <td class=\"text-left\">";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "diagnosis", [], "any", false, false, false, 91);
                echo "</td>
                      <td class=\"text-left\">";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "description", [], "any", false, false, false, 92);
                echo "</td>
                      <td class=\"text-end\">
                        <a href=\"";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "edit", [], "any", false, false, false, 94);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                    ";
        } else {
            // line 101
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"6\">";
            // line 102
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 105
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-start\">";
        // line 110
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-end\">";
        // line 111
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
     </div>
  </div>
</div>
";
        // line 118
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "clinic/patient_list.twig";
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
        return array (  291 => 118,  281 => 111,  277 => 110,  270 => 105,  264 => 102,  261 => 101,  258 => 100,  244 => 94,  239 => 92,  235 => 91,  231 => 90,  224 => 86,  220 => 85,  216 => 84,  211 => 81,  205 => 79,  199 => 77,  197 => 76,  193 => 74,  188 => 73,  186 => 72,  167 => 56,  161 => 53,  150 => 45,  140 => 42,  130 => 39,  119 => 35,  113 => 32,  109 => 30,  103 => 28,  100 => 27,  94 => 25,  92 => 24,  85 => 19,  74 => 17,  70 => 16,  65 => 14,  58 => 10,  54 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "clinic/patient_list.twig", "");
    }
}
