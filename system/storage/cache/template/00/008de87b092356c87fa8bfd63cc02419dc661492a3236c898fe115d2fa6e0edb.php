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
class __TwigTemplate_ea3ba077cc9e8c72b7d445b47d23398e225255ce5469a1de74933fd2c543350e extends Template
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
      <div id=\"filter-country\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 26
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label class=\"form-label\">";
        // line 29
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
        // line 33
        echo ($context["entry_iso_code_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_iso_code_2\" value=\"";
        echo ($context["filter_iso_code_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_iso_code_2"] ?? null);
        echo "\" id=\"input-iso-code-2\" class=\"form-control\"/>
            </div>
            <div class=\"mb-3\">
              <label class=\"form-label\">";
        // line 36
        echo ($context["entry_iso_code_3"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_iso_code_3\" value=\"";
        echo ($context["filter_iso_code_3"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_iso_code_3"] ?? null);
        echo "\" id=\"input-iso-code-3\" class=\"form-control\"/>
            </div>
            <div class=\"text-end\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 39
        echo ($context["button_filter"] ?? null);
        echo "</button>
              <button type=\"button\" id=\"button-clear\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> Clear</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 47
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div id=\"country\" class=\"card-body\">
              <form action=\"";
        // line 49
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
        // line 65
        if (($context["patients"] ?? null)) {
            // line 66
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["patients"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                // line 67
                echo "                        <tr>
                          <td class=\"text-center\">
                            ";
                // line 69
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["patient"], "patient_id", [], "any", false, false, false, 69), ($context["selected"] ?? null))) {
                    // line 70
                    echo "                            <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["patient"], "patient_id", [], "any", false, false, false, 70);
                    echo "\" checked />
                            ";
                } else {
                    // line 72
                    echo "                            <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["patient"], "patient_id", [], "any", false, false, false, 72);
                    echo "\" />
                            ";
                }
                // line 74
                echo "                          </td>
                          <td class=\"text-left\">
                        <table>
                                <tbody><tr><td style=\"padding-right:3px;\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i></td><td>";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "name", [], "any", false, false, false, 77);
                echo "</td></tr>
                                    <tr><td style=\"padding-right:3px;\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></td><td>";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "email", [], "any", false, false, false, 78);
                echo "</td></tr>
                                    <tr><td style=\"padding-right:3px;\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></td><td>";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "telephone", [], "any", false, false, false, 79);
                echo "</td></tr>
                                </tbody>
                        </table>
                          </td>
                          <td class=\"text-left\">";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "doctor", [], "any", false, false, false, 83);
                echo "</td>
                          <td class=\"text-left\">";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "diagnosis", [], "any", false, false, false, 84);
                echo "</td>
                          <td class=\"text-left\">";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "description", [], "any", false, false, false, 85);
                echo "</td>
                          <td class=\"text-end\">
                            <a href=\"";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "edit", [], "any", false, false, false, 87);
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
            // line 93
            echo "                        ";
        } else {
            // line 94
            echo "                        <tr>
                          <td class=\"text-center\" colspan=\"6\">";
            // line 95
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                        </tr>
                        ";
        }
        // line 98
        echo "                      </tbody>
                    </table>
                  </div>
                </form>
                <div class=\"row\">
                  <div class=\"col-sm-6 text-start\">";
        // line 103
        echo ($context["pagination"] ?? null);
        echo "</div>
                  <div class=\"col-sm-6 text-end\">";
        // line 104
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
          </div>
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
        return array (  272 => 112,  261 => 104,  257 => 103,  250 => 98,  244 => 95,  241 => 94,  238 => 93,  224 => 87,  219 => 85,  215 => 84,  211 => 83,  204 => 79,  200 => 78,  196 => 77,  191 => 74,  185 => 72,  179 => 70,  177 => 69,  173 => 67,  168 => 66,  166 => 65,  147 => 49,  142 => 47,  131 => 39,  121 => 36,  111 => 33,  100 => 29,  94 => 26,  85 => 19,  74 => 17,  70 => 16,  65 => 14,  58 => 10,  54 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "clinic/patient_list.twig", "");
    }
}
