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

/* journal3/template/journal3/module/side_products.twig */
class __TwigTemplate_e9b2e976687c5d19fdf72d780a987121 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 30);
        echo "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 31
        echo ($context["edit"] ?? null);
        echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        echo ($context["name"] ?? null);
        echo "\"></em></button>
  ";
        // line 32
        if (($context["title"] ?? null)) {
            // line 33
            echo "    <h3 class=\"title module-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
  ";
        }
        // line 35
        echo "  <div class=\"module-body side-products-";
        echo ($context["sectionsDisplay"] ?? null);
        echo "\">
    ";
        // line 37
        echo "    ";
        if ((($context["sectionsDisplay"] ?? null) == "blocks")) {
            // line 38
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                echo "        <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 39)], "method", false, false, false, 39);
                echo "\">
          ";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 40)) {
                    // line 41
                    echo "            <h3 class=\"title module-title\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 41);
                    echo "</h3>
          ";
                }
                // line 43
                echo "          ";
                echo twig_call_macro($macros["_self"], "macro_renderSideProductsItem", [$context, $context["item"]], 43, $context, $this->getSourceContext());
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "    ";
        }
        // line 47
        echo "    ";
        // line 48
        echo "    ";
        if ((($context["sectionsDisplay"] ?? null) == "tabs")) {
            // line 49
            echo "      <div class=\"tab-container\">
        <div class=\"full-tabs-bg\"></div>
        <ul class=\"nav nav-tabs\">
          ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 53
                echo "            <li class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "tab_classes", [], "any", false, false, false, 53)], "method", false, false, false, 53);
                echo "\">
              ";
                // line 54
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "tabType", [], "any", false, false, false, 54) == "link")) {
                    // line 55
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 55), "href", [], "any", false, false, false, 55);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 55);
                    echo "</a>
              ";
                } else {
                    // line 57
                    echo "                <a href=\"#";
                    echo ($context["id"] ?? null);
                    echo "-tab-";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 57);
                    echo "\" data-toggle=\"tab\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 57);
                    echo "</a>
              ";
                }
                // line 59
                echo "            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </ul>
        <div class=\"tab-content\">
          ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 64
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "tabType", [], "any", false, false, false, 64) != "link")) {
                    // line 65
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 65)) {
                        // line 66
                        echo "                <div class=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 66)], "method", false, false, false, 66);
                        echo "\" id=\"";
                        echo ($context["id"] ?? null);
                        echo "-tab-";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 66);
                        echo "\">
                  ";
                        // line 67
                        echo twig_call_macro($macros["_self"], "macro_renderSideProductsItem", [$context, $context["item"]], 67, $context, $this->getSourceContext());
                        echo "
                </div>
              ";
                    } else {
                        // line 70
                        echo "                <template class=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 70)], "method", false, false, false, 70);
                        echo "\" id=\"";
                        echo ($context["id"] ?? null);
                        echo "-tab-";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 70);
                        echo "\">
                  ";
                        // line 71
                        echo twig_call_macro($macros["_self"], "macro_renderSideProductsItem", [$context, $context["item"]], 71, $context, $this->getSourceContext());
                        echo "
                </template>
              ";
                    }
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "        </div>
      </div>
    ";
        }
        // line 79
        echo "    ";
        // line 80
        echo "    ";
        if ((($context["sectionsDisplay"] ?? null) == "accordion")) {
            // line 81
            echo "      <div class=\"panel-group\" id=\"";
            echo ($context["id"] ?? null);
            echo "-collapse\">
        ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 83
                echo "          <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 83)], "method", false, false, false, 83);
                echo "\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a href=\"#";
                // line 86
                echo ($context["id"] ?? null);
                echo "-collapse-";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 86);
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#";
                echo ($context["id"] ?? null);
                echo "-collapse\" aria-expanded=\"false\">
                  ";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 87);
                echo "
                  <i class=\"fa fa-caret-down\"></i>
                </a>
              </h4>
            </div>
            <div class=\"";
                // line 92
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "panel_classes", [], "any", false, false, false, 92)], "method", false, false, false, 92);
                echo "\" id=\"";
                echo ($context["id"] ?? null);
                echo "-collapse-";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 92);
                echo "\">
              ";
                // line 93
                if (twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 93)) {
                    // line 94
                    echo "                <div class=\"panel-body\">
                  ";
                    // line 95
                    echo twig_call_macro($macros["_self"], "macro_renderSideProductsItem", [$context, $context["item"]], 95, $context, $this->getSourceContext());
                    echo "
                </div>
              ";
                } else {
                    // line 98
                    echo "                <template class=\"panel-body\">
                  ";
                    // line 99
                    echo twig_call_macro($macros["_self"], "macro_renderSideProductsItem", [$context, $context["item"]], 99, $context, $this->getSourceContext());
                    echo "
                </template>
              ";
                }
                // line 102
                echo "            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "      </div>
    ";
        }
        // line 107
        echo "  </div>
</div>
";
    }

    // line 1
    public function macro_renderSideProductsItem($__context__ = null, $__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "context" => $__context__,
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "  ";
            $context["journal3"] = twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3", [], "any", false, false, false, 2);
            // line 3
            echo "  ";
            if (((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "gridType", [], "any", false, false, false, 3) == "ipr") && twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "swiper_carousel", [], "any", false, false, false, 3))) {
                // line 4
                echo "    <div class=\"swiper\" data-items-per-row='";
                echo json_encode(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "itemsPerRow", [], "any", false, false, false, 4), twig_constant("JSON_FORCE_OBJECT"));
                echo "' data-options='";
                echo json_encode(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "carouselOptions", [], "any", false, false, false, 4), twig_constant("JSON_FORCE_OBJECT"));
                echo "'>
      <div class=\"swiper-container\" ";
                // line 5
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_rtl", [], "any", false, false, false, 5)) {
                    echo "dir=\"rtl\"";
                }
                echo ">
        <div class=\"swiper-wrapper side-products ipr-grid\">
          ";
                // line 7
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "products", [], "any", false, false, false, 7);
                echo "
        </div>
      </div>
      <div class=\"swiper-buttons\">
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
      </div>
      <div class=\"swiper-pagination\"></div>
    </div>
  ";
            } else {
                // line 17
                echo "    <div class=\"side-products no-scroll ";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "gridType", [], "any", false, false, false, 17);
                echo "-grid\">
      ";
                // line 18
                if ((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "gridType", [], "any", false, false, false, 18) == "auto")) {
                    // line 19
                    echo "        <div class=\"auto-grid-items\">
          ";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "products", [], "any", false, false, false, 20);
                    echo "
        </div>
        <div class=\"auto-carousel-bar auto-carousel-controls\"><div class=\"auto-carousel-thumb\"></div><div class=\"auto-carousel-fill\"></div></div>
        <div class=\"auto-carousel-buttons auto-carousel-controls\"><div class=\"auto-carousel-prev\"><span></span></div><div class=\"auto-carousel-next\"><span></span></div></div>
      ";
                } else {
                    // line 25
                    echo "        ";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "products", [], "any", false, false, false, 25);
                    echo "
      ";
                }
                // line 27
                echo "    </div>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/module/side_products.twig";
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
        return array (  354 => 27,  348 => 25,  340 => 20,  337 => 19,  335 => 18,  330 => 17,  317 => 7,  310 => 5,  303 => 4,  300 => 3,  297 => 2,  283 => 1,  277 => 107,  273 => 105,  265 => 102,  259 => 99,  256 => 98,  250 => 95,  247 => 94,  245 => 93,  237 => 92,  229 => 87,  221 => 86,  214 => 83,  210 => 82,  205 => 81,  202 => 80,  200 => 79,  195 => 76,  189 => 75,  186 => 74,  180 => 71,  171 => 70,  165 => 67,  156 => 66,  153 => 65,  150 => 64,  146 => 63,  142 => 61,  135 => 59,  125 => 57,  117 => 55,  115 => 54,  110 => 53,  106 => 52,  101 => 49,  98 => 48,  96 => 47,  93 => 46,  83 => 43,  77 => 41,  75 => 40,  70 => 39,  65 => 38,  62 => 37,  57 => 35,  51 => 33,  49 => 32,  43 => 31,  38 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/side_products.twig", "");
    }
}
