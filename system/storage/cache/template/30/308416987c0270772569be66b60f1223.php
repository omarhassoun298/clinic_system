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

/* journal3/template/journal3/side_products.twig */
class __TwigTemplate_b1d73cde77bbe216f9dfdf7a00cad5e6 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 2
            echo "  <div class=\"product-layout ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 2)], "method", false, false, false, 2);
            echo " ";
            echo ($context["color_scheme_content"] ?? null);
            echo "\">
    <div class=\"side-product\">
      <div class=\"image\">
        <a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 5);
            echo "\" class=\"product-img\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 5);
            echo "\">
          ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 6)) {
                // line 7
                echo "            <img src=\"";
                echo ($context["dummy_image"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 7);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 7)) {
                    echo "data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 7);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 7);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
                echo "\" class=\"img-first lazyload\"/>
          ";
            } else {
                // line 9
                echo "            <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 9)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 9);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                echo "\" class=\"img-first\"/>
          ";
            }
            // line 11
            echo "        </a>

        ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewStatus"], "method", false, false, false, 13)) {
                // line 14
                echo "          <div class=\"quickview-button\">
            <a class=\"btn btn-quickview\" role=\"button\" aria-label=\"";
                // line 15
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewText"], "method", false, false, false, 15);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 15) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["SideProductQuickviewTooltipStatus", $context], "method", false, false, false, 15))) {
                    echo "data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                    echo ("module-side_products-" . ($context["module_id"] ?? null));
                    echo " quickview-tooltip\" data-placement=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["SideProductQuickviewTooltipPosition", $context], "method", false, false, false, 15);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewText"], "method", false, false, false, 15);
                    echo "\"";
                }
                echo " onclick=\"quickview('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 15);
                echo "')\"><span class=\"btn-text\">";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewText"], "method", false, false, false, 15);
                echo "</span></a>
          </div>
        ";
            }
            // line 18
            echo "      </div>

      <div class=\"caption\">
        <div class=\"name\"><a href=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
            echo "</a></div>

        ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 23)) {
                // line 24
                echo "          <div class=\"price\">
            ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "              <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 26);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 26);
                    echo "</span>
            ";
                } else {
                    // line 28
                    echo "              <span class=\"price-normal\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28);
                    echo "</span>
            ";
                }
                // line 30
                echo "          </div>
          ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "            <div class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 32);
                    echo "</div>
          ";
                }
                // line 34
                echo "        ";
            }
            // line 35
            echo "
        ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 36)) {
                // line 37
                echo "          <div class=\"rating\">
            <div class=\"rating-stars\">
              ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 40
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 40) < $context["i"])) {
                        // line 41
                        echo "                  <span class=\"fa fa-stack\"><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                ";
                    } else {
                        // line 43
                        echo "                  <span class=\"fa fa-stack\"><em class=\"fa fa-star fa-stack-2x\"></em><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                ";
                    }
                    // line 45
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "            </div>
          </div>
        ";
            } else {
                // line 49
                echo "          <div class=\"rating no-rating\">
            <div class=\"rating-stars\">
              ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 52
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 52) < $context["i"])) {
                        // line 53
                        echo "                  <span class=\"fa fa-stack\"><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                ";
                    } else {
                        // line 55
                        echo "                  <span class=\"fa fa-stack\"><em class=\"fa fa-star fa-stack-2x\"></em><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                ";
                    }
                    // line 57
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "            </div>
          </div>
        ";
            }
            // line 61
            echo "
        ";
            // line 62
            if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCartStatus"], "method", false, false, false, 62) || twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogWishlistStatus"], "method", false, false, false, 62)) || twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCompareStatus"], "method", false, false, false, 62))) {
                // line 63
                echo "          <div class=\"button-group\">
            ";
                // line 64
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCartStatus"], "method", false, false, false, 64)) {
                    // line 65
                    echo "              <a class=\"btn btn-cart\" role=\"button\" aria-label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "button_cart", [], "any", false, false, false, 65);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 65) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["SideProductCartTooltipStatus", $context], "method", false, false, false, 65))) {
                        echo " data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                        echo ("module-side_products-" . ($context["module_id"] ?? null));
                        echo " cart-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["SideProductCartTooltipPosition", $context], "method", false, false, false, 65);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "button_cart", [], "any", false, false, false, 65);
                        echo "\" ";
                    }
                    echo " onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 65);
                    echo "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "button_cart", [], "any", false, false, false, 65);
                    echo "</span>\"><span class=\"btn-text\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "button_cart", [], "any", false, false, false, 65);
                    echo "</span></a>
            ";
                }
                // line 67
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogWishlistStatus"], "method", false, false, false, 67)) {
                    // line 68
                    echo "              <a class=\"btn btn-wishlist\" role=\"button\" aria-label=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 68) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["SideProductWishlistTooltipStatus", $context], "method", false, false, false, 68))) {
                        echo " data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                        echo ("module-side_products-" . ($context["module_id"] ?? null));
                        echo " wishlist-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["SideProductWishlistTooltipPosition", $context], "method", false, false, false, 68);
                        echo "\" title=\"";
                        echo ($context["button_wishlist"] ?? null);
                        echo "\" ";
                    }
                    echo " onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 68);
                    echo "')\"><span class=\"btn-text\">";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></a>
            ";
                }
                // line 70
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCompareStatus"], "method", false, false, false, 70)) {
                    // line 71
                    echo "              <a class=\"btn btn-compare\" role=\"button\" aria-label=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 71) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["SideProductCompareTooltipStatus", $context], "method", false, false, false, 71))) {
                        echo " data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                        echo ("module-side_products-" . ($context["module_id"] ?? null));
                        echo " compare-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["SideProductCompareTooltipPosition", $context], "method", false, false, false, 71);
                        echo "\" title=\"";
                        echo ($context["button_compare"] ?? null);
                        echo "\" ";
                    }
                    echo " onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 71);
                    echo "')\"><span class=\"btn-text\">";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></a>
            ";
                }
                // line 73
                echo "          </div>
        ";
            }
            // line 75
            echo "
      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/side_products.twig";
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
        return array (  328 => 75,  324 => 73,  304 => 71,  301 => 70,  281 => 68,  278 => 67,  256 => 65,  254 => 64,  251 => 63,  249 => 62,  246 => 61,  241 => 58,  235 => 57,  231 => 55,  227 => 53,  224 => 52,  220 => 51,  216 => 49,  211 => 46,  205 => 45,  201 => 43,  197 => 41,  194 => 40,  190 => 39,  186 => 37,  184 => 36,  181 => 35,  178 => 34,  171 => 32,  169 => 31,  166 => 30,  160 => 28,  152 => 26,  150 => 25,  147 => 24,  145 => 23,  138 => 21,  133 => 18,  113 => 15,  110 => 14,  108 => 13,  104 => 11,  82 => 9,  58 => 7,  56 => 6,  50 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/side_products.twig", "");
    }
}
