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

/* journal3/template/product/special.twig */
class __TwigTemplate_c68a1c0204426fa84a847afeeacf1856 extends Template
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
        echo "
";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 2) == "top")) {
            // line 3
            echo "  <h1 class=\"title page-title ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 3);
            echo "\"><span class=\"page-title-text\">";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 5
        echo "<div class=\"breadcrumbs ";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["breadcrumbs_color_scheme"], "method", false, false, false, 5);
        echo "\">
  <ul class=\"breadcrumb\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  </ul>
</div>
";
        // line 12
        echo ($context["journal3_top"] ?? null);
        echo "
<div id=\"product-special\" class=\"container\">
  <div class=\"row\">";
        // line 14
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 23) == "default")) {
            // line 24
            echo "      <h1 class=\"title page-title ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 24);
            echo "\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 26
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"main-products-wrapper\">
      ";
        // line 28
        if (($context["products"] ?? null)) {
            // line 29
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["sortBarStatus"], "method", false, false, false, 29)) {
                // line 30
                echo "      <div class=\"products-filter\">
        <div class=\"grid-list\">
          <button id=\"btn-grid-view\" class=\"view-btn ";
                // line 32
                if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 32) == "grid")) {
                    echo "active";
                }
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 32)) {
                    echo "data-toggle=\"tooltip-hover\"";
                }
                echo " title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\" data-view=\"grid\" aria-label=\"";
                echo ($context["button_grid"] ?? null);
                echo "\"></button>
          <button id=\"btn-list-view\" class=\"view-btn ";
                // line 33
                if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 33) == "list")) {
                    echo "active";
                }
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 33)) {
                    echo "data-toggle=\"tooltip-hover\"";
                }
                echo " title=\"";
                echo ($context["button_list"] ?? null);
                echo "\" data-view=\"list\" aria-label=\"";
                echo ($context["button_list"] ?? null);
                echo "\"></button>
          <a href=\"";
                // line 34
                echo ($context["compare"] ?? null);
                echo "\" id=\"compare-total\" class=\"compare-btn\" title=\"";
                echo ($context["text_compare"] ?? null);
                echo "\">";
                echo ($context["journal3_text_compare"] ?? null);
                echo "</a>
        </div>
        <div class=\"select-group\">
          <div class=\"input-group input-group-sm sort-by\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
                // line 38
                echo ($context["text_sort"] ?? null);
                echo "</label>
            <select id=\"input-sort\" class=\"form-control\">
              ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 41
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 41) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 42
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 42);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 42);
                        echo "</option>
              ";
                    } else {
                        // line 44
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 44);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 44);
                        echo "</option>
              ";
                    }
                    // line 46
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "            </select>
          </div>
          <div class=\"input-group input-group-sm per-page\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
                // line 50
                echo ($context["text_limit"] ?? null);
                echo "</label>
            <select id=\"input-limit\" class=\"form-control\">
              ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 53
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 53) == ($context["limit"] ?? null))) {
                        // line 54
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 54);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 54);
                        echo "</option>
              ";
                    } else {
                        // line 56
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 56);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 56);
                        echo "</option>
              ";
                    }
                    // line 58
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "            </select>
          </div>
        </div>
      </div>
      ";
            }
            // line 64
            echo "      <div class=\"main-products main-products-style product-";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 64);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductGridType"], "method", false, false, false, 64);
            echo "-grid\">
        ";
            // line 65
            echo ($context["products"] ?? null);
            echo "
      </div>
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">";
            // line 68
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 69
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 72
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 74
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 77
        echo "      </div>
      ";
        // line 78
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 79
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 81
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/product/special.twig";
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
        return array (  303 => 81,  298 => 79,  294 => 78,  291 => 77,  283 => 74,  277 => 72,  271 => 69,  267 => 68,  261 => 65,  254 => 64,  247 => 59,  241 => 58,  233 => 56,  225 => 54,  222 => 53,  218 => 52,  213 => 50,  208 => 47,  202 => 46,  194 => 44,  186 => 42,  183 => 41,  179 => 40,  174 => 38,  163 => 34,  149 => 33,  135 => 32,  131 => 30,  128 => 29,  126 => 28,  120 => 26,  112 => 24,  110 => 23,  105 => 22,  102 => 21,  99 => 20,  96 => 19,  93 => 18,  90 => 17,  87 => 16,  85 => 15,  81 => 14,  76 => 12,  72 => 10,  61 => 8,  57 => 7,  51 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/special.twig", "");
    }
}
