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

/* journal3/template/journal3/categories.twig */
class __TwigTemplate_1ed068a792a81dbb80157aa899c6391d extends Template
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
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "  <div class=\"category-layout ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["category"], "classes", [], "any", false, false, false, 2)], "method", false, false, false, 2);
            echo " ";
            echo ($context["color_scheme_content"] ?? null);
            echo "\">
    <div class=\"category-thumb\">
      ";
            // line 4
            if (($context["images"] ?? null)) {
                // line 5
                echo "      <div class=\"image\">
        ";
                // line 6
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "total_text", [], "any", false, false, false, 6) && (($context["productsCountTextPosition"] ?? null) == "image"))) {
                    // line 7
                    echo "          <div class=\"product-count product-count-image ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "total", [], "any", false, false, false, 7) <= 0)) {
                        echo "product-count-zero";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "total_text", [], "any", false, false, false, 7);
                    echo "</div>
        ";
                }
                // line 9
                echo "
        <a href=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 10);
                echo "\">
          ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 11)) {
                    // line 12
                    echo "            <img src=\"";
                    echo ($context["dummy_image"] ?? null);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 12);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 12)) {
                        echo "data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 12);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 12);
                        echo " 2x\" ";
                    }
                    echo " width=\"";
                    echo ($context["image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["image_height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 12);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 12);
                    echo "\" class=\"img-responsive lazyload\"/>
          ";
                } else {
                    // line 14
                    echo "            <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 14);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 14)) {
                        echo "srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 14);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 14);
                        echo " 2x\" ";
                    }
                    echo " width=\"";
                    echo ($context["image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["image_height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                    echo "\" class=\"img-responsive\"/>
          ";
                }
                // line 16
                echo "        </a>
      </div>
      ";
            }
            // line 19
            echo "
      <div class=\"caption\">
        <div class=\"name\"><a href=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 21);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21);
            echo "</a> ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "total_text", [], "any", false, false, false, 21) && (($context["productsCountTextPosition"] ?? null) == "name"))) {
                echo "<div class=\"product-count product-count-name ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "total", [], "any", false, false, false, 21) <= 0)) {
                    echo "product-count-zero";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "total_text", [], "any", false, false, false, 21);
                echo "</div>";
            }
            echo "</div>

        ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "total_text", [], "any", false, false, false, 23) && (($context["productsCountTextPosition"] ?? null) == "below"))) {
                // line 24
                echo "          <div class=\"product-count product-count-below ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "total", [], "any", false, false, false, 24) <= 0)) {
                    echo "product-count-zero";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "total_text", [], "any", false, false, false, 24);
                echo "</div>
        ";
            }
            // line 26
            echo "
        <div class=\"description\">";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 27);
            echo "</div>

        ";
            // line 29
            if (($context["viewMoreText"] ?? null)) {
                // line 30
                echo "        <div class=\"button-group\">
          <a class=\"btn btn-view-more\" href=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 31);
                echo "\" ";
                if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 31) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["CategoryButtonDisplay", $context], "method", false, false, false, 31) == "icon")) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["CategoryButtonTooltipStatus", $context], "method", false, false, false, 31))) {
                    echo " data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                    echo ((($context["module_id"] ?? null)) ? ((("module-categories-" . ($context["module_id"] ?? null)) . " module-categories-grid")) : ("category-grid"));
                    echo " view-more-tooltip\" data-placement=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["CategoryButtonTooltipPosition", $context], "method", false, false, false, 31);
                    echo "\"";
                }
                echo " title=\"";
                echo ($context["viewMoreText"] ?? null);
                echo "\">
            <span class=\"btn-text\">";
                // line 32
                echo ($context["viewMoreText"] ?? null);
                echo "</span>
          </a>
        </div>
        ";
            }
            // line 36
            echo "      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/categories.twig";
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
        return array (  193 => 36,  186 => 32,  172 => 31,  169 => 30,  167 => 29,  162 => 27,  159 => 26,  149 => 24,  147 => 23,  130 => 21,  126 => 19,  121 => 16,  99 => 14,  75 => 12,  73 => 11,  69 => 10,  66 => 9,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/categories.twig", "");
    }
}
