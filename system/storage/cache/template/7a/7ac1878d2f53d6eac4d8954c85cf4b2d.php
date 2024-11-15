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

/* journal3/template/journal3/module/catalog.twig */
class __TwigTemplate_655fd79ec388e8181db5512519bc2b0d extends Template
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
        // line 26
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 26);
        echo "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 27
        echo ($context["edit"] ?? null);
        echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        echo ($context["name"] ?? null);
        echo "\"></em></button>
  ";
        // line 28
        if (($context["title"] ?? null)) {
            // line 29
            echo "    <h3 class=\"title module-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
  ";
        }
        // line 31
        echo "  <div class=\"module-body\">
    ";
        // line 32
        if (((($context["gridType"] ?? null) == "ipr") && ($context["carousel"] ?? null))) {
            // line 33
            echo "      <div class=\"swiper\" data-items-per-row='";
            echo json_encode(($context["itemsPerRow"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
            echo "' data-options='";
            echo json_encode(($context["carouselOptions"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
            echo "'>
        <div class=\"swiper-container\" ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_rtl", [], "any", false, false, false, 34)) {
                echo "dir=\"rtl\"";
            }
            echo ">
          <div class=\"swiper-wrapper ipr-grid\">
            ";
            // line 36
            echo twig_call_macro($macros["_self"], "macro_renderCatalog", [$context], 36, $context, $this->getSourceContext());
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
            // line 46
            echo "      <div class=\"catalog-grid no-scroll ";
            echo ($context["gridType"] ?? null);
            echo "-grid\">
        ";
            // line 47
            if ((($context["gridType"] ?? null) == "auto")) {
                // line 48
                echo "          <div class=\"auto-grid-items\">
            ";
                // line 49
                echo twig_call_macro($macros["_self"], "macro_renderCatalog", [$context], 49, $context, $this->getSourceContext());
                echo "
          </div>
          <div class=\"auto-carousel-bar auto-carousel-controls\"><div class=\"auto-carousel-thumb\"></div><div class=\"auto-carousel-fill\"></div></div>
          <div class=\"auto-carousel-buttons auto-carousel-controls\"><div class=\"auto-carousel-prev\"><span></span></div><div class=\"auto-carousel-next\"><span></span></div></div>
        ";
            } else {
                // line 54
                echo "          ";
                echo twig_call_macro($macros["_self"], "macro_renderCatalog", [$context], 54, $context, $this->getSourceContext());
                echo "
        ";
            }
            // line 56
            echo "      </div>
    ";
        }
        // line 58
        echo "  </div>
</div>

";
    }

    // line 1
    public function macro_renderCatalog($__context__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "context" => $__context__,
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
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "items", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "    <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 4)], "method", false, false, false, 4);
                echo "\">
      <div class=\"item-content\">
        <a href=\"";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 6);
                echo "\" class=\"catalog-title\" ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 6)], "method", false, false, false, 6);
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 6);
                echo "</a>
        <div class=\"item-assets image-left\">
          <a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 8);
                echo "\" class=\"catalog-image\">";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 8)) {
                    if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 8)) {
                        echo "<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "dummy_image", [], "any", false, false, false, 8);
                        echo "\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 8);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 8);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 8)) {
                            echo "data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 8);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 8);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 8);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 8), "width", [], "any", false, false, false, 8);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 8), "height", [], "any", false, false, false, 8);
                        echo "\" class=\"lazyload\">";
                    } else {
                        echo "<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 8);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 8);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 8)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 8);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 8);
                            echo " 2x\" data-image2x=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 8);
                            echo "\"";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 8);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 8), "width", [], "any", false, false, false, 8);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 8), "height", [], "any", false, false, false, 8);
                        echo "\">";
                    }
                }
                echo "</a>
          <div class=\"subitems\">
            ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_item"]) {
                    // line 11
                    echo "              <div class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["sub_item"], "classes", [], "any", false, false, false, 11)], "method", false, false, false, 11);
                    echo " subitem\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["sub_item"], "image", [], "any", false, false, false, 11)) {
                        echo "data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image", [], "any", false, false, false, 11);
                        echo "\" data-image2x=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image", [], "any", false, false, false, 11);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image2x", [], "any", false, false, false, 11);
                        echo " 2x\"";
                    }
                    echo ">
                <a href=\"";
                    // line 12
                    echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "href", [], "any", false, false, false, 12);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["sub_item"], "link", [], "any", false, false, false, 12)], "method", false, false, false, 12);
                    echo "><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "name", [], "any", false, false, false, 12);
                    echo "</span></a>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 15) > twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 15)))) {
                    // line 16
                    echo "              <div class=\"subitem view-more\">
                <a href=\"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 17);
                    echo "\"><span>";
                    echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "viewMoreText", [], "any", false, false, false, 17);
                    echo "</span></a>
              </div>
            ";
                }
                // line 20
                echo "          </div>
        </div>
      </div>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

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
        return "journal3/template/journal3/module/catalog.twig";
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
        return array (  259 => 20,  251 => 17,  248 => 16,  245 => 15,  232 => 12,  217 => 11,  213 => 10,  160 => 8,  151 => 6,  145 => 4,  140 => 3,  137 => 2,  124 => 1,  117 => 58,  113 => 56,  107 => 54,  99 => 49,  96 => 48,  94 => 47,  89 => 46,  76 => 36,  69 => 34,  62 => 33,  60 => 32,  57 => 31,  51 => 29,  49 => 28,  43 => 27,  38 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/catalog.twig", "");
    }
}
