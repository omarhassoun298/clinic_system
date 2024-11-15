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

/* journal3/template/journal3/module/banners.twig */
class __TwigTemplate_47e52e186a2c3827bcfba093a1eb26ab extends Template
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
        // line 25
        echo "<div id=\"";
        echo ($context["id"] ?? null);
        echo "\" class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 25);
        echo "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 26
        echo ($context["edit"] ?? null);
        echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        echo ($context["name"] ?? null);
        echo "\"></em></button>
  ";
        // line 27
        if (($context["title"] ?? null)) {
            // line 28
            echo "    <h3 class=\"title module-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
  ";
        }
        // line 30
        echo "  <div class=\"module-body\">
    ";
        // line 32
        echo "    ";
        if (((($context["gridType"] ?? null) == "ipr") && ($context["carousel"] ?? null))) {
            // line 33
            echo "      <div class=\"swiper\" data-items-per-row='";
            echo json_encode(($context["itemsPerRow"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
            echo "' data-options='";
            echo json_encode(($context["carouselOptions"] ?? null));
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
            echo twig_call_macro($macros["_self"], "macro_renderBanners", [$context], 36, $context, $this->getSourceContext());
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
            echo "      <div class=\"banners-grid no-scroll ";
            echo ($context["gridType"] ?? null);
            echo "-grid\">
        ";
            // line 47
            if ((($context["gridType"] ?? null) == "auto")) {
                // line 48
                echo "          <div class=\"auto-grid-items\">
            ";
                // line 49
                echo twig_call_macro($macros["_self"], "macro_renderBanners", [$context], 49, $context, $this->getSourceContext());
                echo "
          </div>
          <div class=\"auto-carousel-bar auto-carousel-controls\">
            <div class=\"auto-carousel-thumb\"></div>
            <div class=\"auto-carousel-fill\"></div>
          </div>
          <div class=\"auto-carousel-buttons auto-carousel-controls\">
            <div class=\"auto-carousel-prev\"><span></span></div>
            <div class=\"auto-carousel-next\"><span></span></div>
          </div>
        ";
            } else {
                // line 60
                echo "          ";
                echo twig_call_macro($macros["_self"], "macro_renderBanners", [$context], 60, $context, $this->getSourceContext());
                echo "
        ";
            }
            // line 62
            echo "      </div>
    ";
        }
        // line 64
        echo "  </div>
</div>
";
    }

    // line 1
    public function macro_renderBanners($__context__ = null, ...$__varargs__)
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
            $context["index"] = 0;
            // line 4
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "items", [], "any", false, false, false, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "    <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 5)], "method", false, false, false, 5);
                echo "\">
      <a ";
                // line 6
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 6), "href", [], "any", false, false, false, 6)) {
                    echo "href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 6), "href", [], "any", false, false, false, 6);
                    echo "\"";
                }
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 6)], "method", false, false, false, 6);
                echo ">
        ";
                // line 7
                if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 7) && twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "lazyLoad", [], "any", false, false, false, 7))) {
                    // line 8
                    echo "          <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "dummy_image", [], "any", false, false, false, 8);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 8);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 8)) {
                        echo "data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 8);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 8);
                        echo " 2x\" ";
                    }
                    echo " alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 8);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image_width", [], "any", false, false, false, 8);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image_height", [], "any", false, false, false, 8);
                    echo "\" class=\"lazyload\"/>
        ";
                } else {
                    // line 10
                    echo "          <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 10);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 10)) {
                        echo "srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 10);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 10);
                        echo " 2x\" ";
                    }
                    echo " alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 10);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image_width", [], "any", false, false, false, 10);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image_height", [], "any", false, false, false, 10);
                    echo "\"/>
        ";
                }
                // line 12
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "          <div class=\"banner-text banner-caption\"><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 13);
                    echo "</span></div>
        ";
                }
                // line 15
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "title2", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "          <div class=\"banner-text banner-caption-2\"><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title2", [], "any", false, false, false, 16);
                    echo "</span></div>
        ";
                }
                // line 18
                echo "      </a>
      ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["item"], "title3", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "        <div class=\"banner-caption-3\"><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title3", [], "any", false, false, false, 20);
                    echo "</span></div>
      ";
                }
                // line 22
                echo "    </div>
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
        return "journal3/template/journal3/module/banners.twig";
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
        return array (  244 => 22,  238 => 20,  236 => 19,  233 => 18,  227 => 16,  224 => 15,  218 => 13,  215 => 12,  195 => 10,  173 => 8,  171 => 7,  161 => 6,  156 => 5,  151 => 4,  148 => 3,  145 => 2,  132 => 1,  126 => 64,  122 => 62,  116 => 60,  102 => 49,  99 => 48,  97 => 47,  92 => 46,  79 => 36,  72 => 34,  65 => 33,  62 => 32,  59 => 30,  53 => 28,  51 => 27,  45 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/banners.twig", "");
    }
}
