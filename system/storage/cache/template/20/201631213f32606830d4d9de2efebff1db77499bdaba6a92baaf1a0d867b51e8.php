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

/* catalog/faq_category_list.twig */
class __TwigTemplate_00fa91bb7a890279cf519cdef15fe17b26111811fea65f60ab67433a3c5506aa extends Template
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
                  <th class=\"text-left\">Sub Title</th>
                  <th class=\"text-left\">Parent</th>
                  <th class=\"text-end\">";
        // line 46
        echo ($context["column_action"] ?? null);
        echo "</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 50
        if (($context["faq_categorys"] ?? null)) {
            // line 51
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["faq_categorys"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["faq_category"]) {
                // line 52
                echo "                <tr>
                  <td class=\"text-center\">
                    ";
                // line 54
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["faq_category"], "faq_category_id", [], "any", false, false, false, 54), ($context["selected"] ?? null))) {
                    // line 55
                    echo "                    <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["faq_category"], "faq_category_id", [], "any", false, false, false, 55);
                    echo "\" checked />
                    ";
                } else {
                    // line 57
                    echo "                    <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["faq_category"], "faq_category_id", [], "any", false, false, false, 57);
                    echo "\" />
                    ";
                }
                // line 59
                echo "                  </td>
                  <td class=\"text-center\">
                    ";
                // line 61
                if (twig_get_attribute($this->env, $this->source, $context["faq_category"], "image", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "                    <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["faq_category"], "image", [], "any", false, false, false, 62);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["faq_category"], "name", [], "any", false, false, false, 62);
                    echo "\" class=\"img-thumbnail\" />
                    ";
                } else {
                    // line 64
                    echo "                    <span class=\"img-thumbnail list\">
                      <i class=\"fa fa-camera fa-2x\"></i>
                    </span>
                    ";
                }
                // line 68
                echo "                  </td>
                  <td class=\"text-left\">";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["faq_category"], "title", [], "any", false, false, false, 69);
                echo "</td>
                  <td class=\"text-left\">";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["faq_category"], "subtitle", [], "any", false, false, false, 70);
                echo "</td>
                  <td class=\"text-left\">";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["faq_category"], "parent_title", [], "any", false, false, false, 71);
                echo "</td>
                  <td class=\"text-end\">
                    <a href=\"";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["faq_category"], "edit", [], "any", false, false, false, 73);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                ";
        } else {
            // line 80
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"6\">";
            // line 81
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 84
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">";
        // line 89
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-end\">";
        // line 90
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 96
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/faq_category_list.twig";
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
        return array (  247 => 96,  238 => 90,  234 => 89,  227 => 84,  221 => 81,  218 => 80,  215 => 79,  201 => 73,  196 => 71,  192 => 70,  188 => 69,  185 => 68,  179 => 64,  171 => 62,  169 => 61,  165 => 59,  159 => 57,  153 => 55,  151 => 54,  147 => 52,  142 => 51,  140 => 50,  133 => 46,  118 => 34,  112 => 31,  108 => 29,  102 => 27,  99 => 26,  93 => 24,  91 => 23,  85 => 19,  74 => 17,  70 => 16,  65 => 14,  58 => 10,  54 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/faq_category_list.twig", "");
    }
}
