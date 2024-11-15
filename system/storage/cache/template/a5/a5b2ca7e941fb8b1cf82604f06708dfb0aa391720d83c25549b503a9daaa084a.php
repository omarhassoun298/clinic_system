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

/* journal3/template/journal3/module/info_blocks.twig */
class __TwigTemplate_6f95490c0e2f6b2a42a18c4ba67d7131e409e7637681c26a0e799ce6b512a8ba extends Template
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
        // line 40
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 40);
        echo "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 41
        echo ($context["edit"] ?? null);
        echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        echo ($context["name"] ?? null);
        echo "\"></em></button>
  ";
        // line 42
        if (($context["title"] ?? null)) {
            // line 43
            echo "    <h3 class=\"title module-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
  ";
        }
        // line 45
        echo "  ";
        if (($context["description"] ?? null)) {
            // line 46
            echo "    <p class=\"module-description\">";
            echo ($context["description"] ?? null);
            echo "</p>
  ";
        }
        // line 48
        echo "  <div class=\"module-body\">
    <div class=\"info_blocks-grid no-scroll ";
        // line 49
        echo ($context["gridType"] ?? null);
        echo "-grid\">
      ";
        // line 50
        if ((($context["gridType"] ?? null) == "auto")) {
            // line 51
            echo "        <div class=\"auto-grid-items\">
          ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 53
                echo "            <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 53)], "method", false, false, false, 53);
                echo "\">
              ";
                // line 54
                echo twig_call_macro($macros["_self"], "macro_renderInfoBlocks", [$context, $context["item"]], 54, $context, $this->getSourceContext());
                echo "
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        </div>
        <div class=\"auto-carousel-bar auto-carousel-controls\"><div class=\"auto-carousel-thumb\"></div><div class=\"auto-carousel-fill\"></div></div>
        <div class=\"auto-carousel-buttons auto-carousel-controls\"><div class=\"auto-carousel-prev\"><span></span></div><div class=\"auto-carousel-next\"><span></span></div></div>
      ";
        } else {
            // line 61
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 62
                echo "          <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 62)], "method", false, false, false, 62);
                echo "\">
            ";
                // line 63
                echo twig_call_macro($macros["_self"], "macro_renderInfoBlocks", [$context, $context["item"]], 63, $context, $this->getSourceContext());
                echo "
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "      ";
        }
        // line 67
        echo "    </div>
  </div>
</div>
";
    }

    // line 1
    public function macro_renderInfoBlocks($__context__ = null, $__item__ = null, ...$__varargs__)
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
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 3), "href", [], "any", false, false, false, 3)) {
                // line 4
                echo "    <a href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 4), "href", [], "any", false, false, false, 4);
                echo "\" class=\"info-block\" ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 4)], "method", false, false, false, 4);
                echo " title=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 4);
                echo "\">
      ";
                // line 5
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 5) == "image")) {
                    // line 6
                    echo "        <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 6);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 6)) {
                        echo " srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 6);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 6);
                        echo " 2x\" ";
                    }
                    echo " width=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 6), "width", [], "any", false, false, false, 6);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 6), "height", [], "any", false, false, false, 6);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 6);
                    echo "\" class=\"info-block-img\"/>
      ";
                }
                // line 8
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 8) == "counter")) {
                    // line 9
                    echo "        <div class=\"info-block-counter\">
          ";
                    // line 10
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "counter", [], "any", false, false, false, 10);
                    echo "
        </div>
      ";
                }
                // line 13
                echo "      <div class=\"info-block-content\">
        <div class=\"info-block-title\">";
                // line 14
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 14);
                echo "</div>
        <div class=\"info-block-text\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 15);
                echo "</div>
        <div class=\"btn info-block-button\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "buttonTextNew", [], "any", false, false, false, 16);
                echo "</div>
      </div>
      ";
                // line 18
                if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 18), "total", [], "any", false, false, false, 18))) {
                    // line 19
                    echo "        <span class=\"count-badge\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 19), "total", [], "any", false, false, false, 19);
                    echo "</span>
      ";
                }
                // line 21
                echo "    </a>
  ";
            } else {
                // line 23
                echo "    <div class=\"info-block\">
      ";
                // line 24
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 24) == "image")) {
                    // line 25
                    echo "        <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 25);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 25)) {
                        echo " srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 25);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 25);
                        echo " 2x\" ";
                    }
                    echo " width=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 25), "width", [], "any", false, false, false, 25);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 25), "height", [], "any", false, false, false, 25);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 25);
                    echo "\" class=\"info-block-img\"/>
      ";
                }
                // line 27
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 27) == "counter")) {
                    // line 28
                    echo "        <div class=\"info-block-counter\">
          ";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "counter", [], "any", false, false, false, 29);
                    echo "
        </div>
      ";
                }
                // line 32
                echo "      <div class=\"info-block-content\">
        <div class=\"info-block-title\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 33);
                echo "</div>
        <div class=\"info-block-text\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 34);
                echo "</div>
        <a class=\"btn info-block-button\" href=\"";
                // line 35
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "buttonLink", [], "any", false, true, false, 35), "href", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "buttonLink", [], "any", false, true, false, 35), "href", [], "any", false, false, false, 35), "javascript:;")) : ("javascript:;"));
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "buttonLink", [], "any", false, false, false, 35)], "method", false, false, false, 35);
                echo ">";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "buttonTextNew", [], "any", false, false, false, 35);
                echo "</a>
      </div>
    </div>
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
        return "journal3/template/journal3/module/info_blocks.twig";
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
        return array (  270 => 35,  266 => 34,  262 => 33,  259 => 32,  253 => 29,  250 => 28,  247 => 27,  227 => 25,  225 => 24,  222 => 23,  218 => 21,  212 => 19,  210 => 18,  205 => 16,  201 => 15,  197 => 14,  194 => 13,  188 => 10,  185 => 9,  182 => 8,  162 => 6,  160 => 5,  151 => 4,  148 => 3,  145 => 2,  131 => 1,  124 => 67,  121 => 66,  112 => 63,  107 => 62,  102 => 61,  96 => 57,  87 => 54,  82 => 53,  78 => 52,  75 => 51,  73 => 50,  69 => 49,  66 => 48,  60 => 46,  57 => 45,  51 => 43,  49 => 42,  43 => 41,  38 => 40,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/info_blocks.twig", "");
    }
}
