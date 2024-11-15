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

/* journal3/template/common/cart.twig */
class __TwigTemplate_fbea00858180330cde022cd6f9cfec8edcd776373ea41c6b7ccc4e7a7361fc9f extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogMiniCartStatus"], "method", false, false, false, 1)) {
            // line 2
            echo "<div id=\"cart\" class=\"dropdown ";
            if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
                echo "cart-has-items";
            }
            echo "\">
  <a href=\"";
            // line 3
            echo ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["cartStyleCartCheckoutLink"], "method", false, false, false, 3)) ? (($context["cart"] ?? null)) : ("javascript:;"));
            echo "\" data-toggle=\"dropdown\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"dropdown-toggle cart-heading\" title=\"";
            echo ($context["text_cart"] ?? null);
            echo "\">
    ";
            // line 4
            if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["cartStyleCartCustomText"], "method", false, false, false, 4) == "default")) {
                // line 5
                echo "    <span id=\"cart-total\"><span class=\"cart-title\">";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["cartStyleCartTitle"], "method", false, false, false, 5);
                echo "</span><span class=\"cart-text\">";
                echo ($context["text_items"] ?? null);
                echo "</span></span>
    ";
            }
            // line 7
            echo "    <em class=\"fa fa-shopping-cart\">
      <span id=\"cart-items\" class=\"count-badge ";
            // line 8
            if ( !($context["items_count"] ?? null)) {
                echo "count-zero";
            }
            echo "\">";
            echo ($context["items_count"] ?? null);
            echo "</span>
      ";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["cartStyleCartCustomText"], "method", false, false, false, 9) == "custom")) {
                // line 10
                echo "        <span class=\"cart-label\">";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["cartStyleCartLabel"], "method", false, false, false, 10);
                echo "</span>
      ";
            }
            // line 12
            echo "    </em>
  </a>
  <div id=\"cart-content\" class=\"dropdown-menu cart-content j-dropdown\">
  <ul>
    ";
            // line 16
            if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
                // line 17
                echo "    <li class=\"cart-products\">
      <table class=\"table\">
        ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 20
                    echo "        <tr>
          <td class=\"text-center td-image\">";
                    // line 21
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21)) {
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21);
                        echo "\" srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 21);
                        echo " 2x\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                        echo "\" class=\"img-thumbnail\" /></a> ";
                    }
                    echo "</td>
          <td class=\"text-left td-name\"><a href=\"";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                    echo "</a><br > ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 22)) {
                        // line 23
                        echo "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 23));
                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                            // line 24
                            echo "            <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 24);
                            echo "</span><small> ";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 24);
                            echo "</small><br /> ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        echo "            ";
                    }
                    // line 26
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 26)) {
                        // line 27
                        echo "            <span>";
                        echo ($context["text_recurring"] ?? null);
                        echo "</span><small> ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 27);
                        echo "</small> ";
                    }
                    echo "</td>
          <td class=\"text-right td-qty\">x ";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 28);
                    echo "</td>
          <td class=\"text-right td-total\">";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 29);
                    echo "</td>
          <td class=\"text-center td-remove\"><button type=\"button\" onclick=\"cart.remove('";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 30);
                    echo "');\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"cart-remove\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                    // line 34
                    echo "        <tr>
          <td class=\"text-center td-image\"></td>
          <td class=\"text-left\">";
                    // line 36
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 36);
                    echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 38);
                    echo "</td>
          <td class=\"text-center td-remove\"><button type=\"button\" onclick=\"voucher.remove('";
                    // line 39
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 39);
                    echo "');\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"cart-remove\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "      </table>
    </li>
    <li class=\"cart-totals\">
      <div>
        <table class=\"table table-bordered\">
          ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                    // line 48
                    echo "          <tr>
            <td class=\"text-right td-total-title\">";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 49);
                    echo "</td>
            <td class=\"text-right td-total-text\">";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 50);
                    echo "</td>
          </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "        </table>
        <div class=\"cart-buttons\">
          <a class=\"btn-cart btn\" href=\"";
                // line 55
                echo ($context["cart"] ?? null);
                echo "\"><i class=\"fa\"></i><span>";
                echo ($context["text_cart"] ?? null);
                echo "</span></a>
          <a class=\"btn-checkout btn\" href=\"";
                // line 56
                echo ($context["checkout"] ?? null);
                echo "\"><i class=\"fa\"></i><span>";
                echo ($context["text_checkout"] ?? null);
                echo "</span></a>
        </div>
      </div>
    </li>
    ";
            } else {
                // line 61
                echo "    <li>
      <p class=\"text-center cart-empty\">";
                // line 62
                echo ((($context["journal3_is_oc4"] ?? null)) ? (($context["text_no_results"] ?? null)) : (($context["text_empty"] ?? null)));
                echo "</p>
    </li>
    ";
            }
            // line 65
            echo "  </ul>
  </div>
</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/common/cart.twig";
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
        return array (  260 => 65,  254 => 62,  251 => 61,  241 => 56,  235 => 55,  231 => 53,  222 => 50,  218 => 49,  215 => 48,  211 => 47,  204 => 42,  193 => 39,  189 => 38,  184 => 36,  180 => 34,  175 => 33,  164 => 30,  160 => 29,  156 => 28,  147 => 27,  144 => 26,  141 => 25,  131 => 24,  126 => 23,  120 => 22,  102 => 21,  99 => 20,  95 => 19,  91 => 17,  89 => 16,  83 => 12,  77 => 10,  75 => 9,  67 => 8,  64 => 7,  56 => 5,  54 => 4,  46 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/cart.twig", "");
    }
}
