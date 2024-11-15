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

/* journal3/template/product/search.twig */
class __TwigTemplate_6f366cc14410b9103c68b0b77a5dc6cf extends Template
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
<div id=\"product-search\" class=\"container\">
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
      <h2 class=\"title search-criteria-title\">";
        // line 27
        echo ($context["entry_search"] ?? null);
        echo "</h2>
      <div class=\"search-form\">
        <div class=\"inputs\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 30
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\" aria-label=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" />
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 32
        echo ($context["text_category"] ?? null);
        echo "</option>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 34
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 34) == ($context["category_id"] ?? null))) {
                // line 35
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 35);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 35);
                echo "</option>
            ";
            } else {
                // line 37
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 37);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 37);
                echo "</option>
            ";
            }
            // line 39
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 40
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 40) == ($context["category_id"] ?? null))) {
                    // line 41
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 41);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 41);
                    echo "</option>
            ";
                } else {
                    // line 43
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 43);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 43);
                    echo "</option>
            ";
                }
                // line 45
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 45));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 46
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 46) == ($context["category_id"] ?? null))) {
                        // line 47
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 47);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 47);
                        echo "</option>
            ";
                    } else {
                        // line 49
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 49);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 49);
                        echo "</option>
            ";
                    }
                    // line 51
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "          </select>
        </div>
        <div class=\"checkbox search-category-checkbox\">
          <label class=\"checkbox-inline\">
            ";
        // line 58
        if (($context["sub_category"] ?? null)) {
            // line 59
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 61
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 63
        echo "            ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
        </div>
        <div class=\"checkbox search-description-checkbox\">
          <label class=\"checkbox-inline\">
            ";
        // line 67
        if (($context["description"] ?? null)) {
            // line 68
            echo "              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
            ";
        } else {
            // line 70
            echo "              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
            ";
        }
        // line 72
        echo "            ";
        echo ($context["entry_description"] ?? null);
        echo "</label>
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><button id=\"button-search\" class=\"btn btn-primary\"><span>";
        // line 76
        echo ($context["button_search"] ?? null);
        echo "</span></button></div>
      </div>
      <h2 class=\"title search-products-title\">";
        // line 78
        echo ($context["text_search"] ?? null);
        echo "</h2>
      <div class=\"main-products-wrapper\">
      ";
        // line 80
        if (($context["products"] ?? null)) {
            // line 81
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["sortBarStatus"], "method", false, false, false, 81)) {
                // line 82
                echo "      <div class=\"products-filter\">
        <div class=\"grid-list\">
          <button id=\"btn-grid-view\" class=\"view-btn ";
                // line 84
                if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 84) == "grid")) {
                    echo "active";
                }
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 84)) {
                    echo "data-toggle=\"tooltip-hover\"";
                }
                echo " title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\" data-view=\"grid\" aria-label=\"";
                echo ($context["button_grid"] ?? null);
                echo "\"></button>
          <button id=\"btn-list-view\" class=\"view-btn ";
                // line 85
                if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 85) == "list")) {
                    echo "active";
                }
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 85)) {
                    echo "data-toggle=\"tooltip-hover\"";
                }
                echo " title=\"";
                echo ($context["button_list"] ?? null);
                echo "\" data-view=\"list\" aria-label=\"";
                echo ($context["button_list"] ?? null);
                echo "\"></button>
          <a href=\"";
                // line 86
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
                // line 90
                echo ($context["text_sort"] ?? null);
                echo "</label>
            <select id=\"input-sort\" class=\"form-control\">
              ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 93
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 93) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 94
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 94);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 94);
                        echo "</option>
              ";
                    } else {
                        // line 96
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 96);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 96);
                        echo "</option>
              ";
                    }
                    // line 98
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "            </select>
          </div>
          <div class=\"input-group input-group-sm per-page\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
                // line 102
                echo ($context["text_limit"] ?? null);
                echo "</label>
            <select id=\"input-limit\" class=\"form-control\">
              ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 105
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 105) == ($context["limit"] ?? null))) {
                        // line 106
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 106);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 106);
                        echo "</option>
              ";
                    } else {
                        // line 108
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 108);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 108);
                        echo "</option>
              ";
                    }
                    // line 110
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "            </select>
          </div>
        </div>
      </div>
      ";
            }
            // line 116
            echo "      <div class=\"main-products main-products-style product-";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 116);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductGridType"], "method", false, false, false, 116);
            echo "-grid\">
        ";
            // line 117
            echo ($context["products"] ?? null);
            echo "
      </div>
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">";
            // line 120
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 121
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 124
            echo "      <p>";
            echo ((($context["journal3_is_oc4"] ?? null)) ? (($context["text_no_results"] ?? null)) : (($context["text_empty"] ?? null)));
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 126
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 129
        echo "      </div>
      ";
        // line 130
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 131
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 180
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/product/search.twig";
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
        return array (  509 => 180,  457 => 131,  453 => 130,  450 => 129,  442 => 126,  436 => 124,  430 => 121,  426 => 120,  420 => 117,  413 => 116,  406 => 111,  400 => 110,  392 => 108,  384 => 106,  381 => 105,  377 => 104,  372 => 102,  367 => 99,  361 => 98,  353 => 96,  345 => 94,  342 => 93,  338 => 92,  333 => 90,  322 => 86,  308 => 85,  294 => 84,  290 => 82,  287 => 81,  285 => 80,  280 => 78,  275 => 76,  267 => 72,  263 => 70,  259 => 68,  257 => 67,  249 => 63,  245 => 61,  241 => 59,  239 => 58,  233 => 54,  227 => 53,  221 => 52,  215 => 51,  207 => 49,  199 => 47,  196 => 46,  191 => 45,  183 => 43,  175 => 41,  172 => 40,  167 => 39,  159 => 37,  151 => 35,  148 => 34,  144 => 33,  140 => 32,  131 => 30,  125 => 27,  120 => 26,  112 => 24,  110 => 23,  105 => 22,  102 => 21,  99 => 20,  96 => 19,  93 => 18,  90 => 17,  87 => 16,  85 => 15,  81 => 14,  76 => 12,  72 => 10,  61 => 8,  57 => 7,  51 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/search.twig", "");
    }
}
