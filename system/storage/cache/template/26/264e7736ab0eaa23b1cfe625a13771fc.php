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

/* journal3/template/journal3/module/gallery.twig */
class __TwigTemplate_69139210e409db1af86ed81e61911d3c extends Template
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
        // line 23
        echo "<div id=\"";
        echo ($context["id"] ?? null);
        echo "\" class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 23);
        echo "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 24
        echo ($context["edit"] ?? null);
        echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        echo ($context["name"] ?? null);
        echo "\"></em></button>
  ";
        // line 25
        if (($context["title"] ?? null)) {
            // line 26
            echo "    <h3 class=\"title module-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
  ";
        }
        // line 28
        echo "  <div class=\"module-body\">
    ";
        // line 29
        if (($context["button"] ?? null)) {
            // line 30
            echo "      <a class=\"btn open-btn\" data-gallery=\"#";
            echo ($context["id"] ?? null);
            echo " .lightgallery\" data-index=\"0\" role=\"button\">";
            echo ($context["buttonText"] ?? null);
            echo "</a>
    ";
        } else {
            // line 32
            echo "      ";
            // line 33
            echo "      ";
            if (((($context["gridType"] ?? null) == "ipr") && ($context["carousel"] ?? null))) {
                // line 34
                echo "        <div class=\"swiper\" data-items-per-row='";
                echo json_encode(($context["itemsPerRow"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                echo "' data-options='";
                echo json_encode(($context["carouselOptions"] ?? null));
                echo "'>
          <div class=\"swiper-container\" ";
                // line 35
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_rtl", [], "any", false, false, false, 35)) {
                    echo "dir=\"rtl\"";
                }
                echo ">
            <div class=\"swiper-wrapper\">
              ";
                // line 37
                echo twig_call_macro($macros["_self"], "macro_renderGallery", [$context], 37, $context, $this->getSourceContext());
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
                // line 47
                echo "        <div class=\"gallery-grid no-scroll ";
                echo ($context["gridType"] ?? null);
                echo "-grid\">
          ";
                // line 48
                if ((($context["gridType"] ?? null) == "auto")) {
                    // line 49
                    echo "            <div class=\"auto-grid-items\">
              ";
                    // line 50
                    echo twig_call_macro($macros["_self"], "macro_renderGallery", [$context], 50, $context, $this->getSourceContext());
                    echo "
            </div>
            <div class=\"auto-carousel-bar auto-carousel-controls\"><div class=\"auto-carousel-thumb\"></div><div class=\"auto-carousel-fill\"></div></div>
            <div class=\"auto-carousel-buttons auto-carousel-controls\"><div class=\"auto-carousel-prev\"><span></span></div><div class=\"auto-carousel-next\"><span></span></div></div>
          ";
                } else {
                    // line 55
                    echo "            ";
                    echo twig_call_macro($macros["_self"], "macro_renderGallery", [$context], 55, $context, $this->getSourceContext());
                    echo "
          ";
                }
                // line 57
                echo "        </div>
      ";
            }
            // line 59
            echo "    ";
        }
        // line 60
        echo "  </div>
  <div class=\"lightgallery\" data-images='";
        // line 61
        echo twig_escape_filter($this->env, json_encode(($context["images"] ?? null)));
        echo "' data-options='";
        echo json_encode(($context["options"] ?? null));
        echo "'></div>
</div>
";
    }

    // line 1
    public function macro_renderGallery($__context__ = null, ...$__varargs__)
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
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "items", [], "any", false, false, false, 4), 0, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "thumbsLimit", [], "any", false, false, false, 4)));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "    <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 5)], "method", false, false, false, 5);
                echo "\">
      <a ";
                // line 6
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 6) == "link")) {
                    echo "href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "popup", [], "any", false, false, false, 6);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 6)], "method", false, false, false, 6);
                } else {
                    echo "href=\"javascript:;\" data-gallery=\"#";
                    echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "id", [], "any", false, false, false, 6);
                    echo " .lightgallery\" data-index=\"";
                    echo ($context["index"] ?? null);
                    echo "\"";
                    $context["index"] = (($context["index"] ?? null) + 1);
                }
                echo " title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 6);
                echo "\">
        <span class=\"gallery-image\">
          ";
                // line 8
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 8)) {
                    // line 9
                    echo "            <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "dummy_image", [], "any", false, false, false, 9);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 9);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 9)) {
                        echo "data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 9);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 9);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 9);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "thumbDimensions", [], "any", false, false, false, 9), "width", [], "any", false, false, false, 9);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "thumbDimensions", [], "any", false, false, false, 9), "height", [], "any", false, false, false, 9);
                    echo "\" class=\"lazyload\"/>
          ";
                } else {
                    // line 11
                    echo "            <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 11);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 11)) {
                        echo "srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 11);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 11);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 11);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "thumbDimensions", [], "any", false, false, false, 11), "width", [], "any", false, false, false, 11);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "thumbDimensions", [], "any", false, false, false, 11), "height", [], "any", false, false, false, 11);
                    echo "\"/>
          ";
                }
                // line 13
                echo "        </span>
      </a>
      ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "        <span class=\"gallery-image-caption\">
          ";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 17);
                    echo "
        </span>
      ";
                }
                // line 20
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
        return "journal3/template/journal3/module/gallery.twig";
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
        return array (  254 => 20,  248 => 17,  245 => 16,  243 => 15,  239 => 13,  219 => 11,  197 => 9,  195 => 8,  176 => 6,  171 => 5,  166 => 4,  163 => 3,  160 => 2,  147 => 1,  138 => 61,  135 => 60,  132 => 59,  128 => 57,  122 => 55,  114 => 50,  111 => 49,  109 => 48,  104 => 47,  91 => 37,  84 => 35,  77 => 34,  74 => 33,  72 => 32,  64 => 30,  62 => 29,  59 => 28,  53 => 26,  51 => 25,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/gallery.twig", "");
    }
}
