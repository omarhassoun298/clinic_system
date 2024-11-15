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

/* user/user_list.twig */
class __TwigTemplate_5e0fa707912b3f2f3bacec5588014cd1b60df697a8f33347bb32cde206275ba1 extends Template
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
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? document.getElementById('form-user').submit() : false;\">
          <i class=\"fa-regular fa-trash-can\"></i>
        </button>
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
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 27
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 28
            echo "    <div class=\"alert alert-success alert-dismissible fade show\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 32
        echo "    <div class=\"card\">
      <div class=\"card-header\">
       <i class=\"fa fa-list\"></i> ";
        // line 34
        echo ($context["text_list"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
        <form action=\"";
        // line 37
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-user\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <th style=\"width: 1px;\" class=\"text-center\">
                    <input type=\"checkbox\" class=\"form-check-input\" onclick=\"document.querySelectorAll('input[name*=\\'selected\\']').forEach(cb => cb.checked = this.checked);\" />
                  </th>
                  <th class=\"text-start\">";
        // line 45
        if ((($context["sort"] ?? null) == "username")) {
            // line 46
            echo "                    <a href=\"";
            echo ($context["sort_username"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_username"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 48
            echo "                    <a href=\"";
            echo ($context["sort_username"] ?? null);
            echo "\">";
            echo ($context["column_username"] ?? null);
            echo "</a>
                    ";
        }
        // line 50
        echo "                  </th>
                  <th class=\"text-start\">";
        // line 51
        if ((($context["sort"] ?? null) == "status")) {
            // line 52
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 54
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        }
        // line 56
        echo "                  </th>
                  <th class=\"text-start\">";
        // line 57
        if ((($context["sort"] ?? null) == "date_added")) {
            // line 58
            echo "                    <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 60
            echo "                    <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        }
        // line 62
        echo "                  </th>
                  <th class=\"text-end\">";
        // line 63
        echo ($context["column_action"] ?? null);
        echo "</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 67
        if (($context["users"] ?? null)) {
            // line 68
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 69
                echo "                <tr>
                  <td class=\"text-center\">
                    <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 71);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 71), ($context["selected"] ?? null))) {
                    echo " checked=\"checked\" ";
                }
                echo "/>
                  </td>
                  <td class=\"text-start\">";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 73);
                echo "</td>
                  <td class=\"text-start\">";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 74);
                echo "</td>
                  <td class=\"text-start\">";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["user"], "date_added", [], "any", false, false, false, 75);
                echo "</td>
                  <td class=\"text-end\">
                    <a href=\"";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["user"], "edit", [], "any", false, false, false, 77);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                ";
        } else {
            // line 84
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"5\">";
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
        return "user/user_list.twig";
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
        return array (  286 => 100,  277 => 94,  273 => 93,  266 => 88,  260 => 85,  257 => 84,  254 => 83,  240 => 77,  235 => 75,  231 => 74,  227 => 73,  218 => 71,  214 => 69,  209 => 68,  207 => 67,  200 => 63,  197 => 62,  189 => 60,  179 => 58,  177 => 57,  174 => 56,  166 => 54,  156 => 52,  154 => 51,  151 => 50,  143 => 48,  133 => 46,  131 => 45,  120 => 37,  114 => 34,  110 => 32,  102 => 28,  99 => 27,  91 => 23,  89 => 22,  83 => 18,  72 => 16,  68 => 15,  63 => 13,  54 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/user_list.twig", "");
    }
}
