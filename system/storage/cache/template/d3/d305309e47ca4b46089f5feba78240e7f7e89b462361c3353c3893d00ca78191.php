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

/* journal3/template/journal3/module/products.twig */
class __TwigTemplate_222ccdf15d84ce32aca21d850e21a4b7358f2d0bd9fe6ce9d5d33766390aabe6 extends Template
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
            echo "    <div class=\"title-main\">
      <h3 class=\"title module-title\">";
            // line 34
            echo ($context["title"] ?? null);
            echo "</h3>
      ";
            // line 35
            if (($context["inline_button_text"] ?? null)) {
                // line 36
                echo "        <a class=\"btn title-inline-btn\" href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["inline_button_link"] ?? null), "href", [], "any", false, false, false, 36);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [($context["inline_button_link"] ?? null)], "method", false, false, false, 36);
                echo "><span>";
                echo ($context["inline_button_text"] ?? null);
                echo "</span></a>
      ";
            }
            // line 38
            echo "    </div>
  ";
        }
        // line 40
        echo "  <div class=\"module-body\">
    ";
        // line 42
        echo "    ";
        if ((($context["sectionsDisplay"] ?? null) == "blocks")) {
            // line 43
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 44
                echo "        <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 44)], "method", false, false, false, 44);
                echo "\">
          ";
                // line 45
                if (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "            <h3 class=\"title module-title\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 46);
                    echo "</h3>
          ";
                }
                // line 48
                echo "          ";
                echo twig_call_macro($macros["_self"], "macro_renderProducts", [$context, $context["item"]], 48, $context, $this->getSourceContext());
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "    ";
        }
        // line 52
        echo "    ";
        // line 53
        echo "    ";
        if ((($context["sectionsDisplay"] ?? null) == "tabs")) {
            // line 54
            echo "      <div class=\"tab-container\">
        <div class=\"full-tabs-bg\"></div>
        <ul class=\"nav nav-tabs\">
          ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 58
                echo "            <li class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "tab_classes", [], "any", false, false, false, 58)], "method", false, false, false, 58);
                echo "\">
              ";
                // line 59
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "tabType", [], "any", false, false, false, 59) == "link")) {
                    // line 60
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 60), "href", [], "any", false, false, false, 60);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 60);
                    echo "</a>
              ";
                } else {
                    // line 62
                    echo "                <a href=\"#";
                    echo ($context["id"] ?? null);
                    echo "-tab-";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 62);
                    echo "\" data-toggle=\"tab\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 62);
                    echo "</a>
              ";
                }
                // line 64
                echo "            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "        </ul>
        <div class=\"tab-content\">
          ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 69
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "tabType", [], "any", false, false, false, 69) != "link")) {
                    // line 70
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 70)) {
                        // line 71
                        echo "                <div class=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 71)], "method", false, false, false, 71);
                        echo "\" id=\"";
                        echo ($context["id"] ?? null);
                        echo "-tab-";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 71);
                        echo "\">
                  ";
                        // line 72
                        echo twig_call_macro($macros["_self"], "macro_renderProducts", [$context, $context["item"]], 72, $context, $this->getSourceContext());
                        echo "
                </div>
              ";
                    } else {
                        // line 75
                        echo "                <template class=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 75)], "method", false, false, false, 75);
                        echo "\" id=\"";
                        echo ($context["id"] ?? null);
                        echo "-tab-";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 75);
                        echo "\">
                  ";
                        // line 76
                        echo twig_call_macro($macros["_self"], "macro_renderProducts", [$context, $context["item"]], 76, $context, $this->getSourceContext());
                        echo "
                </template>
              ";
                    }
                    // line 79
                    echo "            ";
                }
                // line 80
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "        </div>
      </div>
    ";
        }
        // line 84
        echo "    ";
        // line 85
        echo "    ";
        if ((($context["sectionsDisplay"] ?? null) == "accordion")) {
            // line 86
            echo "      <div class=\"panel-group\" id=\"";
            echo ($context["id"] ?? null);
            echo "-collapse\">
        ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 88
                echo "          <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 88)], "method", false, false, false, 88);
                echo "\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a href=\"#";
                // line 91
                echo ($context["id"] ?? null);
                echo "-collapse-";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 91);
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#";
                echo ($context["id"] ?? null);
                echo "-collapse\" aria-expanded=\"false\">
                  ";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 92);
                echo "
                  <i class=\"fa fa-caret-down\"></i>
                </a>
              </h4>
            </div>
            <div class=\"";
                // line 97
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "panel_classes", [], "any", false, false, false, 97)], "method", false, false, false, 97);
                echo "\" id=\"";
                echo ($context["id"] ?? null);
                echo "-collapse-";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 97);
                echo "\">
              ";
                // line 98
                if (twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 98)) {
                    // line 99
                    echo "                <div class=\"panel-body\">
                  ";
                    // line 100
                    echo twig_call_macro($macros["_self"], "macro_renderProducts", [$context, $context["item"]], 100, $context, $this->getSourceContext());
                    echo "
                </div>
              ";
                } else {
                    // line 103
                    echo "                <template class=\"panel-body\">
                  ";
                    // line 104
                    echo twig_call_macro($macros["_self"], "macro_renderProducts", [$context, $context["item"]], 104, $context, $this->getSourceContext());
                    echo "
                </template>
              ";
                }
                // line 107
                echo "            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "      </div>
    ";
        }
        // line 112
        echo "  </div>
</div>
";
    }

    // line 1
    public function macro_renderProducts($__context__ = null, $__item__ = null, ...$__varargs__)
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
        <div class=\"swiper-wrapper ";
                // line 6
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "products_classes", [], "any", false, false, false, 6)], "method", false, false, false, 6);
                echo " ipr-grid\">
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
                echo "    <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "products_classes", [], "any", false, false, false, 17)], "method", false, false, false, 17);
                echo " no-scroll ";
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
        return "journal3/template/journal3/module/products.twig";
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
        return array (  374 => 27,  368 => 25,  360 => 20,  357 => 19,  355 => 18,  348 => 17,  335 => 7,  331 => 6,  325 => 5,  318 => 4,  315 => 3,  312 => 2,  298 => 1,  292 => 112,  288 => 110,  280 => 107,  274 => 104,  271 => 103,  265 => 100,  262 => 99,  260 => 98,  252 => 97,  244 => 92,  236 => 91,  229 => 88,  225 => 87,  220 => 86,  217 => 85,  215 => 84,  210 => 81,  204 => 80,  201 => 79,  195 => 76,  186 => 75,  180 => 72,  171 => 71,  168 => 70,  165 => 69,  161 => 68,  157 => 66,  150 => 64,  140 => 62,  132 => 60,  130 => 59,  125 => 58,  121 => 57,  116 => 54,  113 => 53,  111 => 52,  108 => 51,  98 => 48,  92 => 46,  90 => 45,  85 => 44,  80 => 43,  77 => 42,  74 => 40,  70 => 38,  60 => 36,  58 => 35,  54 => 34,  51 => 33,  49 => 32,  43 => 31,  38 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/products.twig", "");
    }
}
