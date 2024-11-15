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

/* journal3/template/product/category.twig */
class __TwigTemplate_b97f8901925887cc898f2ece67961313 extends Template
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
<div id=\"product-category\" class=\"container\">
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
      ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["categoryPageDescStatus"], "method", false, false, false, 27)) {
            // line 28
            echo "      ";
            if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
                // line 29
                echo "      <div class=\"category-description\">
        ";
                // line 30
                if ((($context["thumb"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["categoryPageCategoryImageStatus"], "method", false, false, false, 30))) {
                    // line 31
                    echo "        <img src=\"";
                    echo ($context["thumb"] ?? null);
                    echo "\" ";
                    if (($context["thumb2x"] ?? null)) {
                        echo "srcset=\"";
                        echo ($context["thumb"] ?? null);
                        echo " 1x, ";
                        echo ($context["thumb2x"] ?? null);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"category-image\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_category.width"], "method", false, false, false, 31);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_category.height"], "method", false, false, false, 31);
                    echo "\"/>
        ";
                }
                // line 33
                echo "        ";
                if ((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["categoryPageCategoryDescriptionStatus"], "method", false, false, false, 33))) {
                    // line 34
                    echo "        <div class=\"category-text\">";
                    echo ($context["description"] ?? null);
                    echo "</div>
        ";
                }
                // line 36
                echo "      </div>
      ";
            }
            // line 38
            echo "      ";
        }
        // line 39
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesStatus"], "method", false, false, false, 39)) {
            // line 40
            echo "      ";
            if (($context["categories"] ?? null)) {
                // line 41
                echo "      <div class=\"refine-categories refine-";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesDisplay"], "method", false, false, false, 41);
                echo "\">
      ";
                // line 42
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["refineTitle"], "method", false, false, false, 42)) {
                    // line 43
                    echo "      <h3 class=\"refine-title title\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["refineTitleText"], "method", false, false, false, 43);
                    echo "</h3>
      ";
                }
                // line 45
                echo "      ";
                if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesGridType"], "method", false, false, false, 45) == "ipr") && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesDisplay"], "method", false, false, false, 45) == "carousel"))) {
                    // line 46
                    echo "      <div class=\"swiper\" data-items-per-row='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesItemsPerRow"], "method", false, false, false, 46), twig_constant("JSON_FORCE_OBJECT"));
                    echo "' data-options='";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "jsonAttrs", [($context["journal3_images_carousel"] ?? null)], "method", false, false, false, 46);
                    echo "'>
        <div class=\"swiper-container\" ";
                    // line 47
                    if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_rtl", [], "any", false, false, false, 47)) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
          <div class=\"swiper-wrapper ipr-grid\">
            ";
                    // line 49
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 50
                        echo "            <div class=\"refine-item swiper-slide\">
              <a href=\"";
                        // line 51
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 51);
                        echo "\">
                ";
                        // line 52
                        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesDisplay"], "method", false, false, false, 52) != "links")) {
                            // line 53
                            echo "                <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 53);
                            echo "\" ";
                            if (twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 53)) {
                                echo "srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 53);
                                echo " 1x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 53);
                                echo " 2x\"";
                            }
                            echo " alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 53);
                            echo "\" width=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_subcategory.width"], "method", false, false, false, 53);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_subcategory.height"], "method", false, false, false, 53);
                            echo "\"/>
                ";
                        }
                        // line 55
                        echo "                <span class=\"refine-name\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 55);
                        echo "</span>
              </a>
            </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "          </div>
        </div>
        <div class=\"swiper-buttons\">
          <div class=\"swiper-button-prev\"></div>
          <div class=\"swiper-button-next\"></div>
        </div>
        <div class=\"swiper-pagination\"></div>
      </div>
      ";
                } else {
                    // line 68
                    echo "      <div class=\"refine-items no-scroll ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesGridType"], "method", false, false, false, 68);
                    echo "-grid\">
      ";
                    // line 69
                    if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesGridType"], "method", false, false, false, 69) == "auto")) {
                        // line 70
                        echo "        <div class=\"auto-grid-items\">
          ";
                        // line 71
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                            // line 72
                            echo "            <div class=\"refine-item\">
              <a href=\"";
                            // line 73
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 73);
                            echo "\">
                ";
                            // line 74
                            if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesDisplay"], "method", false, false, false, 74) != "links")) {
                                // line 75
                                echo "                  <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 75);
                                echo "\" ";
                                if (twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 75)) {
                                    echo "srcset=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 75);
                                    echo " 1x, ";
                                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 75);
                                    echo " 2x\"";
                                }
                                echo " alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 75);
                                echo "\" width=\"";
                                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_subcategory.width"], "method", false, false, false, 75);
                                echo "\" height=\"";
                                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_subcategory.height"], "method", false, false, false, 75);
                                echo "\"/>
                ";
                            }
                            // line 77
                            echo "                <span class=\"refine-name\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 77);
                            echo "</span>
              </a>
            </div>
          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 81
                        echo "        </div>
        <div class=\"auto-carousel-bar auto-carousel-controls\"><div class=\"auto-carousel-thumb\"></div><div class=\"auto-carousel-fill\"></div></div>
        <div class=\"auto-carousel-buttons auto-carousel-controls\"><div class=\"auto-carousel-prev\"><span></span></div><div class=\"auto-carousel-next\"><span></span></div></div>
      ";
                    } else {
                        // line 85
                        echo "        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                            // line 86
                            echo "          <div class=\"refine-item\">
            <a href=\"";
                            // line 87
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 87);
                            echo "\">
              ";
                            // line 88
                            if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesDisplay"], "method", false, false, false, 88) != "links")) {
                                // line 89
                                echo "                <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 89);
                                echo "\" ";
                                if (twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 89)) {
                                    echo "srcset=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 89);
                                    echo " 1x, ";
                                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 89);
                                    echo " 2x\"";
                                }
                                echo " alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 89);
                                echo "\" width=\"";
                                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_subcategory.width"], "method", false, false, false, 89);
                                echo "\" height=\"";
                                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_subcategory.height"], "method", false, false, false, 89);
                                echo "\"/>
              ";
                            }
                            // line 91
                            echo "              <span class=\"refine-name\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 91);
                            echo "</span>
            </a>
          </div>
        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 95
                        echo "      ";
                    }
                    // line 96
                    echo "      </div>
      ";
                }
                // line 98
                echo "      </div>
      ";
            }
            // line 100
            echo "      ";
        }
        // line 101
        echo "      <div class=\"main-products-wrapper\">
      ";
        // line 102
        if (($context["products"] ?? null)) {
            // line 103
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["sortBarStatus"], "method", false, false, false, 103)) {
                // line 104
                echo "      <div class=\"products-filter\">
        <div class=\"grid-list\">
          <button id=\"btn-grid-view\" class=\"view-btn ";
                // line 106
                if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 106) == "grid")) {
                    echo "active";
                }
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 106)) {
                    echo "data-toggle=\"tooltip-hover\"";
                }
                echo " title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\" data-view=\"grid\" aria-label=\"";
                echo ($context["button_grid"] ?? null);
                echo "\"></button>
          <button id=\"btn-list-view\" class=\"view-btn ";
                // line 107
                if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 107) == "list")) {
                    echo "active";
                }
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 107)) {
                    echo "data-toggle=\"tooltip-hover\"";
                }
                echo " title=\"";
                echo ($context["button_list"] ?? null);
                echo "\" data-view=\"list\" aria-label=\"";
                echo ($context["button_list"] ?? null);
                echo "\"></button>
          <a href=\"";
                // line 108
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
                // line 112
                echo ($context["text_sort"] ?? null);
                echo "</label>
            <select id=\"input-sort\" class=\"form-control\">
              ";
                // line 114
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 115
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 115) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 116
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 116);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 116);
                        echo "</option>
              ";
                    } else {
                        // line 118
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 118);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 118);
                        echo "</option>
              ";
                    }
                    // line 120
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "            </select>
          </div>
          <div class=\"input-group input-group-sm per-page\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
                // line 124
                echo ($context["text_limit"] ?? null);
                echo "</label>
            <select id=\"input-limit\" class=\"form-control\">
              ";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 127
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 127) == ($context["limit"] ?? null))) {
                        // line 128
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 128);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 128);
                        echo "</option>
              ";
                    } else {
                        // line 130
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 130);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 130);
                        echo "</option>
              ";
                    }
                    // line 132
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "            </select>
          </div>
        </div>
      </div>
      ";
            }
            // line 138
            echo "      <div class=\"main-products main-products-style product-";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 138);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductGridType"], "method", false, false, false, 138);
            echo "-grid\" data-product-count=\"";
            echo ($context["journal3_products_count"] ?? null);
            echo "\">
        ";
            // line 139
            echo ($context["products"] ?? null);
            echo "
      </div>
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">";
            // line 142
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 143
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        }
        // line 146
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 147
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 149
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 152
        echo "      </div>
      ";
        // line 153
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 154
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 156
        echo ($context["journal3_rich_snippets"] ?? null);
        echo "
";
        // line 157
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/product/category.twig";
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
        return array (  572 => 157,  568 => 156,  563 => 154,  559 => 153,  556 => 152,  548 => 149,  542 => 147,  539 => 146,  533 => 143,  529 => 142,  523 => 139,  514 => 138,  507 => 133,  501 => 132,  493 => 130,  485 => 128,  482 => 127,  478 => 126,  473 => 124,  468 => 121,  462 => 120,  454 => 118,  446 => 116,  443 => 115,  439 => 114,  434 => 112,  423 => 108,  409 => 107,  395 => 106,  391 => 104,  388 => 103,  386 => 102,  383 => 101,  380 => 100,  376 => 98,  372 => 96,  369 => 95,  358 => 91,  338 => 89,  336 => 88,  332 => 87,  329 => 86,  324 => 85,  318 => 81,  307 => 77,  287 => 75,  285 => 74,  281 => 73,  278 => 72,  274 => 71,  271 => 70,  269 => 69,  264 => 68,  253 => 59,  242 => 55,  222 => 53,  220 => 52,  216 => 51,  213 => 50,  209 => 49,  202 => 47,  195 => 46,  192 => 45,  186 => 43,  184 => 42,  179 => 41,  176 => 40,  173 => 39,  170 => 38,  166 => 36,  160 => 34,  157 => 33,  135 => 31,  133 => 30,  130 => 29,  127 => 28,  125 => 27,  120 => 26,  112 => 24,  110 => 23,  105 => 22,  102 => 21,  99 => 20,  96 => 19,  93 => 18,  90 => 17,  87 => 16,  85 => 15,  81 => 14,  76 => 12,  72 => 10,  61 => 8,  57 => 7,  51 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/category.twig", "");
    }
}
