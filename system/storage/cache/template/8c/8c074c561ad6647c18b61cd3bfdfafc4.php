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

/* marketplace/modification.twig */
class __TwigTemplate_6677aa4d0581badc714bd566dc29f5f5 extends Template
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
        echo ($context["refresh"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-info\">
          <i class=\"fa fa-refresh\"></i>
        </a>
        <a href=\"";
        // line 9
        echo ($context["clear"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_clear"] ?? null);
        echo "\" class=\"btn btn-warning\">
          <i class=\"fa fa-eraser\"></i>
        </a>
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 12
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? document.getElementById('form-modification').submit() : false;\">
          <i class=\"fa fa-trash-o\"></i>
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
        echo "    
    ";
        // line 33
        if (($context["success"] ?? null)) {
            // line 34
            echo "    <div class=\"alert alert-success alert-dismissible fade show\">
      <i class=\"fa fa-check-circle\"></i> ";
            // line 35
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 39
        echo "    
    <div class=\"alert alert-info\">
      <i class=\"fa fa-info-circle\"></i> ";
        // line 41
        echo ($context["text_refresh"] ?? null);
        echo "
    </div>
    
    <div class=\"card\">
      <div class=\"card-header\">
        <h3 class=\"card-title\"><i class=\"fa fa-list\"></i> ";
        // line 46
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"#tab-general\" data-bs-toggle=\"tab\">";
        // line 51
        echo ($context["tab_general"] ?? null);
        echo "</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#tab-log\" data-bs-toggle=\"tab\">";
        // line 54
        echo ($context["tab_log"] ?? null);
        echo "</a>
          </li>
        </ul>
        
        <div class=\"tab-content\">
          <div class=\"tab-pane fade show active\" id=\"tab-general\">
            <form action=\"";
        // line 60
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-modification\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th style=\"width: 1px;\" class=\"text-center\">
                        <input type=\"checkbox\" onclick=\"document.querySelectorAll('input[name*=\\'selected\\']').forEach(cb => cb.checked = this.checked);\" />
                      </th>
                      <th class=\"text-left\">
                        ";
        // line 69
        if ((($context["sort"] ?? null) == "name")) {
            // line 70
            echo "                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 72
            echo "                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                        ";
        }
        // line 74
        echo "                      </th>
                      <th class=\"text-left\">
                        ";
        // line 76
        if ((($context["sort"] ?? null) == "author")) {
            // line 77
            echo "                        <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 79
            echo "                        <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                        ";
        }
        // line 81
        echo "                      </th>
                      <th class=\"text-left\">
                        ";
        // line 83
        if ((($context["sort"] ?? null) == "version")) {
            // line 84
            echo "                        <a href=\"";
            echo ($context["sort_version"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_version"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 86
            echo "                        <a href=\"";
            echo ($context["sort_version"] ?? null);
            echo "\">";
            echo ($context["column_version"] ?? null);
            echo "</a>
                        ";
        }
        // line 88
        echo "                      </th>
                      <th class=\"text-left\">
                        ";
        // line 90
        if ((($context["sort"] ?? null) == "status")) {
            // line 91
            echo "                        <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 93
            echo "                        <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                        ";
        }
        // line 95
        echo "                      </th>
                      <th class=\"text-left\">
                        ";
        // line 97
        if ((($context["sort"] ?? null) == "date_added")) {
            // line 98
            echo "                        <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 100
            echo "                        <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                        ";
        }
        // line 102
        echo "                      </th>
                      <th class=\"text-end\">";
        // line 103
        echo ($context["column_action"] ?? null);
        echo "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 107
        if (($context["modifications"] ?? null)) {
            // line 108
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modifications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modification"]) {
                // line 109
                echo "                    <tr>
                      <td class=\"text-center\">
                        ";
                // line 111
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 111), ($context["selected"] ?? null))) {
                    // line 112
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 112);
                    echo "\" checked=\"checked\" />
                        ";
                } else {
                    // line 114
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 114);
                    echo "\" />
                        ";
                }
                // line 116
                echo "                      </td>
                      <td class=\"text-left\">";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "name", [], "any", false, false, false, 117);
                echo "</td>
                      <td class=\"text-left\">";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "author", [], "any", false, false, false, 118);
                echo "</td>
                      <td class=\"text-left\">";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "version", [], "any", false, false, false, 119);
                echo "</td>
                      <td class=\"text-left\">";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "status", [], "any", false, false, false, 120);
                echo "</td>
                      <td class=\"text-left\">";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "date_added", [], "any", false, false, false, 121);
                echo "</td>
                      <td class=\"text-end\">
                        ";
                // line 123
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "link", [], "any", false, false, false, 123)) {
                    // line 124
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "link", [], "any", false, false, false, 124);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_link"] ?? null);
                    echo "\" class=\"btn btn-info\" target=\"_blank\">
                          <i class=\"fa fa-link\"></i>
                        </a>
                        ";
                } else {
                    // line 128
                    echo "                        <button type=\"button\" class=\"btn btn-info\" disabled=\"disabled\">
                          <i class=\"fa fa-link\"></i>
                        </button>
                        ";
                }
                // line 132
                echo "                        ";
                if ( !twig_get_attribute($this->env, $this->source, $context["modification"], "enabled", [], "any", false, false, false, 132)) {
                    // line 133
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "enable", [], "any", false, false, false, 133);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_enable"] ?? null);
                    echo "\" class=\"btn btn-success\">
                          <i class=\"fa fa-plus-circle\"></i>
                        </a>
                        ";
                } else {
                    // line 137
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "disable", [], "any", false, false, false, 137);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_disable"] ?? null);
                    echo "\" class=\"btn btn-danger\">
                          <i class=\"fa fa-minus-circle\"></i>
                        </a>
                        ";
                }
                // line 141
                echo "                      </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                    ";
        } else {
            // line 145
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"7\">";
            // line 146
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 149
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-start\">";
        // line 154
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-end\">";
        // line 155
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
          
          <div class=\"tab-pane fade\" id=\"tab-log\">
            <p>
              <textarea wrap=\"off\" rows=\"15\" class=\"form-control\">";
        // line 161
        echo ($context["log"] ?? null);
        echo "</textarea>
            </p>
            <div class=\"text-center\">
              <a href=\"";
        // line 164
        echo ($context["clear_log"] ?? null);
        echo "\" class=\"btn btn-danger\">
                <i class=\"fa fa-eraser\"></i> ";
        // line 165
        echo ($context["button_clear"] ?? null);
        echo "
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 174
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "marketplace/modification.twig";
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
        return array (  450 => 174,  438 => 165,  434 => 164,  428 => 161,  419 => 155,  415 => 154,  408 => 149,  402 => 146,  399 => 145,  396 => 144,  388 => 141,  378 => 137,  368 => 133,  365 => 132,  359 => 128,  349 => 124,  347 => 123,  342 => 121,  338 => 120,  334 => 119,  330 => 118,  326 => 117,  323 => 116,  317 => 114,  311 => 112,  309 => 111,  305 => 109,  300 => 108,  298 => 107,  291 => 103,  288 => 102,  280 => 100,  270 => 98,  268 => 97,  264 => 95,  256 => 93,  246 => 91,  244 => 90,  240 => 88,  232 => 86,  222 => 84,  220 => 83,  216 => 81,  208 => 79,  198 => 77,  196 => 76,  192 => 74,  184 => 72,  174 => 70,  172 => 69,  160 => 60,  151 => 54,  145 => 51,  137 => 46,  129 => 41,  125 => 39,  118 => 35,  115 => 34,  113 => 33,  110 => 32,  103 => 28,  100 => 27,  98 => 26,  91 => 21,  80 => 19,  76 => 18,  71 => 16,  62 => 12,  54 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/modification.twig", "");
    }
}
