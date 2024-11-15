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

/* common/broker_list.twig */
class __TwigTemplate_42e2e4a72998d7f28564f83c803de8bbd55a77341488ff3220449180cf73766c extends Template
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
      ";
        // line 23
        if (($context["error_warning"] ?? null)) {
            // line 24
            echo "         <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
      ";
        }
        // line 26
        echo "      ";
        if (($context["success"] ?? null)) {
            // line 27
            echo "         <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
      ";
        }
        // line 29
        echo "    <div class=\"card\">
      <div class=\"card-header\">
        <i class=\"fa fa-list\"></i> ";
        // line 31
        echo ($context["text_list"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
        <form action=\"";
        // line 34
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-manufacturer\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <th style=\"width: 1px;\" class=\"text-center\">
                    <input type=\"checkbox\" class=\"form-check-input\" onclick=\"document.querySelectorAll('input[name*=\\'selected\\']').forEach(el => el.checked = this.checked);\" />
                  </th>
                  <th class=\"text-center\">Image</th>
                  <th class=\"text-left\">Title</th>
                  <th class=\"text-center\">Status</th>
                  <th class=\"text-end\">";
        // line 45
        echo ($context["column_action"] ?? null);
        echo "</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 49
        if (($context["brokers"] ?? null)) {
            // line 50
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["brokers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["broker"]) {
                // line 51
                echo "                <tr>
                  <td class=\"text-center\">
                    ";
                // line 53
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["broker"], "broker_id", [], "any", false, false, false, 53), ($context["selected"] ?? null))) {
                    // line 54
                    echo "                    <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["broker"], "broker_id", [], "any", false, false, false, 54);
                    echo "\" checked />
                    ";
                } else {
                    // line 56
                    echo "                    <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["broker"], "broker_id", [], "any", false, false, false, 56);
                    echo "\" />
                    ";
                }
                // line 58
                echo "                  </td>
                  <td class=\"text-center\">
                    ";
                // line 60
                if (twig_get_attribute($this->env, $this->source, $context["broker"], "image", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "                    <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["broker"], "image", [], "any", false, false, false, 61);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["broker"], "name", [], "any", false, false, false, 61);
                    echo "\" class=\"img-thumbnail\" />
                    ";
                } else {
                    // line 63
                    echo "                    <span class=\"img-thumbnail list\">
                      <i class=\"fa fa-camera fa-2x\"></i>
                    </span>
                    ";
                }
                // line 67
                echo "                  </td>
                  <td class=\"text-left\">";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["broker"], "title", [], "any", false, false, false, 68);
                echo "</td>
                  <td class=\"text-center\">
                    ";
                // line 70
                if ((twig_get_attribute($this->env, $this->source, $context["broker"], "status", [], "any", false, false, false, 70) == 1)) {
                    // line 71
                    echo "                        <span class=\"badge bg-success\">Enabled</span>
                    ";
                } else {
                    // line 73
                    echo "                        <span class=\"badge bg-danger\">Disabled</span>
                    ";
                }
                // line 75
                echo "                 </td>               
                 <td class=\"text-end\">
                    <a href=\"";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["broker"], "edit", [], "any", false, false, false, 77);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['broker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                ";
        } else {
            // line 84
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"6\">";
            // line 85
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 88
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">";
        // line 93
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-end\">";
        // line 94
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 100
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "common/broker_list.twig";
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
        return array (  252 => 100,  243 => 94,  239 => 93,  232 => 88,  226 => 85,  223 => 84,  220 => 83,  206 => 77,  202 => 75,  198 => 73,  194 => 71,  192 => 70,  187 => 68,  184 => 67,  178 => 63,  170 => 61,  168 => 60,  164 => 58,  158 => 56,  152 => 54,  150 => 53,  146 => 51,  141 => 50,  139 => 49,  132 => 45,  118 => 34,  112 => 31,  108 => 29,  102 => 27,  99 => 26,  93 => 24,  91 => 23,  85 => 19,  74 => 17,  70 => 16,  65 => 14,  58 => 10,  54 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/broker_list.twig", "");
    }
}
