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

/* journal3/template/journal3/products.twig */
class __TwigTemplate_e4da472092424486549a24bdd7456b23 extends Template
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
        $context["prefix"] = (((($context["display"] ?? null) == "grid")) ? ("ProductGrid") : ("ProductList"));
        // line 2
        echo "  <div class=\"product-layout ";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "classes", [], "any", false, false, false, 2)], "method", false, false, false, 2);
        echo " ";
        echo ($context["color_scheme_content"] ?? null);
        echo "\" data-product-id=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 2);
        echo "\">
    <div class=\"product-thumb\">
      ";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "NamePosition"), $context], "method", false, false, false, 4) == "image")) {
            // line 5
            echo "        <div class=\"name\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 5);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 5);
            echo "</a></div>
      ";
        }
        // line 7
        echo "      <div class=\"image-group\">
        <div class=\"image\">
          ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewStatus"], "method", false, false, false, 9)) {
            // line 10
            echo "            <div class=\"quickview-button\">
              <a class=\"btn btn-quickview\" role=\"button\" aria-label=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewText"], "method", false, false, false, 11);
            echo "\" ";
            if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 11) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "QuickviewDisplay"), $context], "method", false, false, false, 11) == "icon")) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "QuickviewTooltipStatus"), $context], "method", false, false, false, 11))) {
                echo "data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                echo " quickview-tooltip\" data-placement=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "QuickviewTooltipPosition"), $context], "method", false, false, false, 11);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewText"], "method", false, false, false, 11);
                echo "\"";
            }
            echo " onclick=\"quickview('";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 11);
            echo "')\"><span class=\"btn-text\">";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewText"], "method", false, false, false, 11);
            echo "</span></a>
            </div>
          ";
        }
        // line 14
        echo "
          <a href=\"";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 15);
        echo "\" class=\"product-img ";
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb", [], "any", false, false, false, 15)) {
            echo "has-second-image";
        }
        echo "\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 15);
        echo "\">
            <div>
              ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 17)) {
            // line 18
            echo "                <img src=\"";
            echo ($context["dummy_image"] ?? null);
            echo "\" data-src=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 18);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb2x", [], "any", false, false, false, 18)) {
                echo "data-srcset=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 18);
                echo " 1x, ";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb2x", [], "any", false, false, false, 18);
                echo " 2x\" ";
            }
            echo " width=\"";
            echo ($context["image_width"] ?? null);
            echo "\" height=\"";
            echo ($context["image_height"] ?? null);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 18);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 18);
            echo "\" class=\"img-responsive img-first lazyload\"/>
              ";
        } else {
            // line 20
            echo "                <img src=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 20);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb2x", [], "any", false, false, false, 20)) {
                echo "srcset=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 20);
                echo " 1x, ";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb2x", [], "any", false, false, false, 20);
                echo " 2x\" ";
            }
            echo " width=\"";
            echo ($context["image_width"] ?? null);
            echo "\" height=\"";
            echo ($context["image_height"] ?? null);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 20);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 20);
            echo "\" class=\"img-responsive img-first\"/>
              ";
        }
        // line 22
        echo "
              ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb", [], "any", false, false, false, 23)) {
            // line 24
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 24)) {
                // line 25
                echo "                  <img src=\"";
                echo ($context["dummy_image"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb", [], "any", false, false, false, 25);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb2x", [], "any", false, false, false, 25)) {
                    echo "data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb", [], "any", false, false, false, 25);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb2x", [], "any", false, false, false, 25);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 25);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 25);
                echo "\" class=\"img-responsive img-second lazyload\"/>
                ";
            } else {
                // line 27
                echo "                  <img src=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb", [], "any", false, false, false, 27);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb2x", [], "any", false, false, false, 27)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb", [], "any", false, false, false, 27);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb2x", [], "any", false, false, false, 27);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 27);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 27);
                echo "\" class=\"img-responsive img-second\"/>
                ";
            }
            // line 29
            echo "              ";
        }
        // line 30
        echo "            </div>
          </a>

          ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "labels", [], "any", false, false, false, 33), "default", [], "any", false, false, false, 33)) {
            // line 34
            echo "            <div class=\"product-labels\">
              ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "labels", [], "any", false, false, false, 35), "default", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                // line 36
                echo "                <span class=\"product-label product-label-";
                echo $context["id"];
                echo " product-label-";
                echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 36);
                echo " product-label-";
                echo twig_get_attribute($this->env, $this->source, $context["label"], "positionDefault", [], "any", false, false, false, 36);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["label"], "classes", [], "any", false, false, false, 36)], "method", false, false, false, 36);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 36);
                echo "</strong></span>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            </div>
          ";
        }
        // line 40
        echo "
          ";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["countdownStatus"], "method", false, false, false, 41) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "date_end", [], "any", false, false, false, 41))) {
            // line 42
            echo "            <div class=\"countdown\" data-date=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "date_end", [], "any", false, false, false, 42);
            echo "\"></div>
          ";
        }
        // line 44
        echo "        </div>
        ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "labels", [], "any", false, false, false, 45), "group_outside", [], "any", false, false, false, 45)) {
            // line 46
            echo "          <div class=\"product-labels-outside\">
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "labels", [], "any", false, false, false, 47), "group_outside", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                // line 48
                echo "              <span class=\"product-label product-label-";
                echo $context["id"];
                echo " product-label-";
                echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 48);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["label"], "classes", [], "any", false, false, false, 48)], "method", false, false, false, 48);
                echo "\"><strong><a class=\"label-link\" ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["label"], "link", [], "any", false, false, false, 48), "href", [], "any", false, false, false, 48)) {
                    echo "href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["label"], "link", [], "any", false, false, false, 48), "href", [], "any", false, false, false, 48);
                    echo "\"";
                }
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["label"], "link", [], "any", false, false, false, 48)], "method", false, false, false, 48);
                echo " aria-hidden=\"true\" tabindex=\"-1\">";
                echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 48);
                echo "</a></strong></span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "          </div>
        ";
        }
        // line 52
        echo "      </div>

      <div class=\"caption\">
        ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stat1", [], "any", false, false, false, 55) || twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stat2", [], "any", false, false, false, 55))) {
            // line 56
            echo "          <div class=\"stats\">
            <div class=\"stats-group\">
              ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stat1", [], "any", false, false, false, 58)) {
                // line 59
                echo "                <span class=\"stat-1\"><span class=\"stats-label\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stat1", [], "any", false, false, false, 59), "label", [], "any", false, false, false, 59);
                echo ":</span> <span>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stat1", [], "any", false, false, false, 59), "text", [], "any", false, false, false, 59);
                echo "</span></span>
              ";
            }
            // line 61
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stat2", [], "any", false, false, false, 61)) {
                // line 62
                echo "                <span class=\"stat-2\"><span class=\"stats-label\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stat2", [], "any", false, false, false, 62), "label", [], "any", false, false, false, 62);
                echo ":</span> <span>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stat2", [], "any", false, false, false, 62), "text", [], "any", false, false, false, 62);
                echo "</span></span>
              ";
            }
            // line 64
            echo "            </div>
          </div>
        ";
        }
        // line 67
        echo "
        ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "NamePosition"), $context], "method", false, false, false, 68) == "default")) {
            // line 69
            echo "          <div class=\"name\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 69);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 69);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 69);
            echo "</a></div>
        ";
        }
        // line 71
        echo "
        ";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 72) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 72) != ".."))) {
            // line 73
            echo "        <div class=\"description\">";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 73);
            echo "</div>
        ";
        }
        // line 75
        echo "
        ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 76)) {
            // line 77
            echo "          <div class=\"price\">
            ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "labels", [], "any", false, false, false, 78), "price", [], "any", false, false, false, 78)) {
                // line 79
                echo "              <span class=\"product-labels-price\">
                ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "labels", [], "any", false, false, false, 80), "price", [], "any", false, false, false, 80));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 81
                    echo "                  <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 81);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["label"], "classes", [], "any", false, false, false, 81)], "method", false, false, false, 81);
                    echo "\"><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 81);
                    echo "</strong></span>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "              </span>
            ";
            }
            // line 85
            echo "            <div>
              ";
            // line 86
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 86)) {
                // line 87
                echo "                <span class=\"price-new\">";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 87);
                echo "</span> <span class=\"price-old\">";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 87);
                echo "</span>
              ";
            } else {
                // line 89
                echo "                <span class=\"price-normal\">";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 89);
                echo "</span>
              ";
            }
            // line 91
            echo "            </div>
            ";
            // line 92
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "tax", [], "any", false, false, false, 92)) {
                // line 93
                echo "              <span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "tax", [], "any", false, false, false, 93);
                echo "</span>
            ";
            }
            // line 95
            echo "          </div>
        ";
        }
        // line 97
        echo "
        ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 98)) {
            // line 99
            echo "          <div class=\"rating ";
            if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "RatingPosition"), $context], "method", false, false, false, 99) == "hover")) {
                echo "rating-hover";
            }
            echo "\">
            <div class=\"rating-stars\">
              ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 102
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 102) < $context["i"])) {
                    // line 103
                    echo "                  <span class=\"fa fa-stack\"><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                ";
                } else {
                    // line 105
                    echo "                  <span class=\"fa fa-stack\"><em class=\"fa fa-star fa-stack-2x\"></em><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                ";
                }
                // line 107
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "            </div>
          </div>
        ";
        } else {
            // line 111
            echo "          <div class=\"rating no-rating ";
            if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "RatingPosition"), $context], "method", false, false, false, 111) == "hover")) {
                echo "rating-hover";
            }
            echo "\">
            <div class=\"rating-stars\">
              ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 114
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 114) < $context["i"])) {
                    // line 115
                    echo "                  <span class=\"fa fa-stack\"><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                ";
                } else {
                    // line 117
                    echo "                  <span class=\"fa fa-stack\"><em class=\"fa fa-star fa-stack-2x\"></em><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                ";
                }
                // line 119
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "            </div>
          </div>
        ";
        }
        // line 123
        echo "
        ";
        // line 124
        if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCartStatus"], "method", false, false, false, 124) || twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogWishlistStatus"], "method", false, false, false, 124)) || twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCompareStatus"], "method", false, false, false, 124))) {
            // line 125
            echo "        <div class=\"buttons-wrapper\">
          <div class=\"button-group\">
            ";
            // line 127
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCartStatus"], "method", false, false, false, 127)) {
                // line 128
                echo "            <div class=\"cart-group\">
              <div class=\"stepper\">
                <label class=\"sr-only\" for=\"";
                // line 130
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "qid", [], "any", false, false, false, 130);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 130);
                echo "</label>
                <button aria-label=\"-\" class=\"fa fa-angle-down\"></button>
                <input id=\"";
                // line 132
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "qid", [], "any", false, false, false, 132);
                echo "\" type=\"text\" name=\"quantity\" value=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minimum", [], "any", false, false, false, 132);
                echo "\" data-minimum=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minimum", [], "any", false, false, false, 132);
                echo "\" class=\"form-control\"/>
                <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 133
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 133);
                echo "\"/>
                <button aria-label=\"+\" class=\"fa fa-angle-up\"></button>
              </div>
              <a class=\"btn btn-cart\" role=\"button\" aria-label=\"";
                // line 136
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "button_cart", [], "any", false, false, false, 136);
                echo "\" ";
                if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 136) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "CartDisplay"), $context], "method", false, false, false, 136) == "icon")) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "CartTooltipStatus"), $context], "method", false, false, false, 136))) {
                    echo " data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                    echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                    echo " cart-tooltip\" data-placement=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "CartTooltipPosition"), $context], "method", false, false, false, 136);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "button_cart", [], "any", false, false, false, 136);
                    echo "\" ";
                }
                echo " onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 136);
                echo "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "button_cart", [], "any", false, false, false, 136);
                echo "</span>\"><span class=\"btn-text\">";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "button_cart", [], "any", false, false, false, 136);
                echo "</span></a>
            </div>
            ";
            }
            // line 139
            echo "
            ";
            // line 140
            if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogWishlistStatus"], "method", false, false, false, 140) || twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCompareStatus"], "method", false, false, false, 140))) {
                // line 141
                echo "            <div class=\"wish-group\">
              ";
                // line 142
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogWishlistStatus"], "method", false, false, false, 142)) {
                    // line 143
                    echo "              <a class=\"btn btn-wishlist\" role=\"button\" aria-label=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 143) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "WishlistDisplay"), $context], "method", false, false, false, 143) == "icon")) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "WishlistTooltipStatus"), $context], "method", false, false, false, 143))) {
                        echo " data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                        echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                        echo " wishlist-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "WishlistTooltipPosition"), $context], "method", false, false, false, 143);
                        echo "\" title=\"";
                        echo ($context["button_wishlist"] ?? null);
                        echo "\" ";
                    }
                    echo " onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 143);
                    echo "')\"><span class=\"btn-text\">";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></a>
              ";
                }
                // line 145
                echo "
              ";
                // line 146
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCompareStatus"], "method", false, false, false, 146)) {
                    // line 147
                    echo "              <a class=\"btn btn-compare\" role=\"button\" aria-label=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 147) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "CompareDisplay"), $context], "method", false, false, false, 147) == "icon")) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "CompareTooltipStatus"), $context], "method", false, false, false, 147))) {
                        echo " data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                        echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                        echo " compare-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "CompareTooltipPosition"), $context], "method", false, false, false, 147);
                        echo "\" title=\"";
                        echo ($context["button_compare"] ?? null);
                        echo "\" ";
                    }
                    echo " onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 147);
                    echo "')\"><span class=\"btn-text\">";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></a>
              ";
                }
                // line 149
                echo "            </div>
            ";
            }
            // line 151
            echo "          </div>
        </div>
        ";
        }
        // line 154
        echo "
        ";
        // line 155
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "extra_buttons", [], "any", false, false, false, 155)) {
            // line 156
            echo "          <div class=\"extra-group\">
            <div>
              ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "extra_buttons", [], "any", false, false, false, 158));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["id"] => $context["extra_button"]) {
                // line 159
                echo "                <a class=\"btn btn-extra btn-extra-";
                echo $context["id"];
                echo "\"
                  ";
                // line 160
                if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 160) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [((($context["prefix"] ?? null) . "ExtraButtonDisplay") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 160)), $context], "method", false, false, false, 160) == "icon")) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "ExtraButtonTooltipStatus"), $context], "method", false, false, false, 160))) {
                    echo " data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                    echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                    echo " extra-tooltip\" data-placement=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "ExtraButtonTooltipPosition"), $context], "method", false, false, false, 160);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 160);
                    echo "\" ";
                }
                // line 161
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 161) == "quickbuy")) {
                    echo "onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 161);
                    echo "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\"";
                }
                // line 162
                echo "                  ";
                if (((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 162) == "link") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 162), "href", [], "any", false, false, false, 162))) {
                    echo "href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 162), "href", [], "any", false, false, false, 162);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 162)], "method", false, false, false, 162);
                    echo " data-product_id=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 162);
                    echo "\" data-product_url=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 162);
                    echo "\" ";
                } else {
                    echo "href=\"javascript:;\"";
                }
                // line 163
                echo "                   data-loading-text=\"<span class='btn-text'>";
                echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 163);
                echo "</span>\">
                  <span class=\"btn-text\">";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 164);
                echo "</span>
                </a>
              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['extra_button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "            </div>
          </div>
        ";
        }
        // line 170
        echo "      </div>
    </div>
  </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/products.twig";
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
        return array (  713 => 170,  708 => 167,  691 => 164,  686 => 163,  671 => 162,  664 => 161,  654 => 160,  649 => 159,  632 => 158,  628 => 156,  626 => 155,  623 => 154,  618 => 151,  614 => 149,  594 => 147,  592 => 146,  589 => 145,  569 => 143,  567 => 142,  564 => 141,  562 => 140,  559 => 139,  537 => 136,  531 => 133,  523 => 132,  516 => 130,  512 => 128,  510 => 127,  506 => 125,  504 => 124,  501 => 123,  496 => 120,  490 => 119,  486 => 117,  482 => 115,  479 => 114,  475 => 113,  467 => 111,  462 => 108,  456 => 107,  452 => 105,  448 => 103,  445 => 102,  441 => 101,  433 => 99,  431 => 98,  428 => 97,  424 => 95,  417 => 93,  415 => 92,  412 => 91,  406 => 89,  398 => 87,  396 => 86,  393 => 85,  389 => 83,  374 => 81,  370 => 80,  367 => 79,  365 => 78,  362 => 77,  360 => 76,  357 => 75,  351 => 73,  349 => 72,  346 => 71,  336 => 69,  334 => 68,  331 => 67,  326 => 64,  318 => 62,  315 => 61,  307 => 59,  305 => 58,  301 => 56,  299 => 55,  294 => 52,  290 => 50,  267 => 48,  263 => 47,  260 => 46,  258 => 45,  255 => 44,  249 => 42,  247 => 41,  244 => 40,  240 => 38,  223 => 36,  219 => 35,  216 => 34,  214 => 33,  209 => 30,  206 => 29,  184 => 27,  160 => 25,  157 => 24,  155 => 23,  152 => 22,  130 => 20,  106 => 18,  104 => 17,  93 => 15,  90 => 14,  70 => 11,  67 => 10,  65 => 9,  61 => 7,  51 => 5,  49 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/products.twig", "");
    }
}
