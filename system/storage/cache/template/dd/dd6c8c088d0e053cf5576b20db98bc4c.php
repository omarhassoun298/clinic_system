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
class __TwigTemplate_0119f0ecd61aa480beb5d35db4f60486 extends Template
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
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-manufacturer').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["success"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 24
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-manufacturer\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked).trigger('change');\" /></td>
                 <td class=\"text-left\">Image</td>
                  <td class=\"text-left\">";
        // line 34
        if ((($context["sort"] ?? null) == "agd.title")) {
            // line 35
            echo "                    <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 37
            echo "                    <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        }
        // line 38
        echo "</td>
                  <td class=\"text-left\">Sub Title</td>
                  <td class=\"text-left\">Parent</td>
                  <td class=\"text-right\">";
        // line 41
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 45
        if (($context["faq_categorys"] ?? null)) {
            // line 46
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["faq_categorys"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["faq_category"]) {
                // line 47
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 48
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["faq_category"], "faq_category_id", [], "any", false, false, false, 48), ($context["selected"] ?? null))) {
                    // line 49
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["faq_category"], "faq_category_id", [], "any", false, false, false, 49);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 51
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["faq_category"], "faq_category_id", [], "any", false, false, false, 51);
                    echo "\" />
                    ";
                }
                // line 52
                echo "</td>
                    <td class=\"text-center\">";
                // line 53
                if (twig_get_attribute($this->env, $this->source, $context["faq_category"], "image", [], "any", false, false, false, 53)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["faq_category"], "image", [], "any", false, false, false, 53);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["faq_category"], "name", [], "any", false, false, false, 53);
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                  <td class=\"text-left\">";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["faq_category"], "title", [], "any", false, false, false, 54);
                echo "</td>
                  <td class=\"text-left\">";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["faq_category"], "subtitle", [], "any", false, false, false, 55);
                echo "</td>
                  
                  <td class=\"text-left\">
";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["faq_category"], "parent_title", [], "any", false, false, false, 58);
                echo "
</td>
                  <td class=\"text-right\"><a href=\"";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["faq_category"], "edit", [], "any", false, false, false, 60);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                ";
        } else {
            // line 64
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 65
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 68
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 73
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 74
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 80
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
        return array (  243 => 80,  234 => 74,  230 => 73,  223 => 68,  217 => 65,  214 => 64,  211 => 63,  200 => 60,  195 => 58,  189 => 55,  185 => 54,  173 => 53,  170 => 52,  164 => 51,  158 => 49,  156 => 48,  153 => 47,  148 => 46,  146 => 45,  139 => 41,  134 => 38,  126 => 37,  116 => 35,  114 => 34,  104 => 27,  98 => 24,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/faq_category_list.twig", "");
    }
}
