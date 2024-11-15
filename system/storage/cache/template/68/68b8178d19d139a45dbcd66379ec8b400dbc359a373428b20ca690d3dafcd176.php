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

/* localisation/language_list.twig */
class __TwigTemplate_b94f72fc9bde619167a6c86795c2ca06464b00a08390d88db0f13ce30ed02f04 extends Template
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
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" 
          onclick=\"confirm('";
        // line 10
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-language').submit() : false;\">
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
    ";
        // line 24
        if (($context["error_warning"] ?? null)) {
            // line 25
            echo "    <div class=\"alert alert-danger alert-dismissible\">
      <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 26
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        // line 30
        echo "    
    ";
        // line 31
        if (($context["success"] ?? null)) {
            // line 32
            echo "    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa fa-check-circle\"></i> ";
            // line 33
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        // line 37
        echo "    
    <div class=\"card\">
      <div class=\"card-header\">
        <i class=\"fa fa-list\"></i> ";
        // line 40
        echo ($context["text_list"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
        <form action=\"";
        // line 43
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <th style=\"width: 1px;\" class=\"text-center\">
                    <input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" />
                  </th>
                  <th class=\"text-start\">
                    ";
        // line 52
        if ((($context["sort"] ?? null) == "name")) {
            // line 53
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 55
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 57
        echo "                  </th>
                  <th class=\"text-start\">
                    ";
        // line 59
        if ((($context["sort"] ?? null) == "code")) {
            // line 60
            echo "                    <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 62
            echo "                    <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>
                    ";
        }
        // line 64
        echo "                  </th>
                  <th class=\"text-end\">
                    ";
        // line 66
        if ((($context["sort"] ?? null) == "sort_order")) {
            // line 67
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 69
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 71
        echo "                  </th>
                  <th class=\"text-end\">";
        // line 72
        echo ($context["column_action"] ?? null);
        echo "</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 76
        if (($context["languages"] ?? null)) {
            // line 77
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 78
                echo "                <tr>
                  <td class=\"text-center\">
                    ";
                // line 80
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80), ($context["selected"] ?? null))) {
                    // line 81
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 83
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83);
                    echo "\" />
                    ";
                }
                // line 85
                echo "                  </td>
                  <td class=\"text-start\">";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 86);
                echo "</td>
                  <td class=\"text-start\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 87);
                echo "</td>
                  <td class=\"text-end\">";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["language"], "sort_order", [], "any", false, false, false, 88);
                echo "</td>
                  <td class=\"text-end\">
                    <a href=\"";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["language"], "edit", [], "any", false, false, false, 90);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                ";
        } else {
            // line 97
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"5\">";
            // line 98
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 101
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">";
        // line 106
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-end\">";
        // line 107
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 113
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "localisation/language_list.twig";
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
        return array (  307 => 113,  298 => 107,  294 => 106,  287 => 101,  281 => 98,  278 => 97,  275 => 96,  261 => 90,  256 => 88,  252 => 87,  248 => 86,  245 => 85,  239 => 83,  233 => 81,  231 => 80,  227 => 78,  222 => 77,  220 => 76,  213 => 72,  210 => 71,  202 => 69,  192 => 67,  190 => 66,  186 => 64,  178 => 62,  168 => 60,  166 => 59,  162 => 57,  154 => 55,  144 => 53,  142 => 52,  130 => 43,  124 => 40,  119 => 37,  112 => 33,  109 => 32,  107 => 31,  104 => 30,  97 => 26,  94 => 25,  92 => 24,  85 => 19,  74 => 17,  70 => 16,  65 => 14,  58 => 10,  54 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "localisation/language_list.twig", "");
    }
}
