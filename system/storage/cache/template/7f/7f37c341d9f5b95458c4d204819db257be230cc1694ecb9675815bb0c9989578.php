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

/* journal3/template/journal3/module/testimonials.twig */
class __TwigTemplate_d630441855c496147d723b4ca39c5cfc0cd80e086fb324936effbb616263f328 extends Template
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
        // line 18
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 18);
        echo " ";
        echo ($context["color_scheme_module"] ?? null);
        echo "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 19
        echo ($context["edit"] ?? null);
        echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        echo ($context["name"] ?? null);
        echo "\"></em></button>
  ";
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo "    <h3 class=\"title module-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
  ";
        }
        // line 23
        echo "  <div class=\"module-body\">
  ";
        // line 25
        echo "  ";
        if ((($context["display"] ?? null) == "grid")) {
            // line 26
            echo "    ";
            if (((($context["gridType"] ?? null) == "ipr") && ($context["carousel"] ?? null))) {
                // line 27
                echo "      <div class=\"swiper\" data-items-per-row='";
                echo json_encode(($context["itemsPerRow"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                echo "' data-options='";
                echo json_encode(($context["carouselOptions"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                echo "'>
        <div class=\"swiper-container\" ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_rtl", [], "any", false, false, false, 28)) {
                    echo "dir=\"rtl\"";
                }
                echo ">
          <div class=\"swiper-wrapper ipr-grid\">
            ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 31
                    echo "              <div class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 31)], "method", false, false, false, 31);
                    echo "\">
                ";
                    // line 32
                    echo twig_call_macro($macros["_self"], "macro_renderTestimonials", [$context, $context["item"]], 32, $context, $this->getSourceContext());
                    echo "
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "          </div>
        </div>
        <div class=\"swiper-buttons\">
          <div class=\"swiper-button-prev\"></div>
          <div class=\"swiper-button-next\"></div>
        </div>
        <div class=\"swiper-pagination\"></div>
      </div>
    ";
            } else {
                // line 44
                echo "      <div class=\"no-scroll ";
                echo ($context["gridType"] ?? null);
                echo "-grid\">
        ";
                // line 45
                if ((($context["gridType"] ?? null) == "auto")) {
                    // line 46
                    echo "          <div class=\"auto-grid-items\">
            ";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 48
                        echo "              <div class=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 48)], "method", false, false, false, 48);
                        echo "\">
                ";
                        // line 49
                        echo twig_call_macro($macros["_self"], "macro_renderTestimonials", [$context, $context["item"]], 49, $context, $this->getSourceContext());
                        echo "
              </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo "          </div>
          <div class=\"auto-carousel-bar auto-carousel-controls\"><div class=\"auto-carousel-thumb\"></div><div class=\"auto-carousel-fill\"></div></div>
          <div class=\"auto-carousel-buttons auto-carousel-controls\"><div class=\"auto-carousel-prev\"><span></span></div><div class=\"auto-carousel-next\"><span></span></div></div>
        ";
                } else {
                    // line 56
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 57
                        echo "            <div class=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 57)], "method", false, false, false, 57);
                        echo "\">
              ";
                        // line 58
                        echo twig_call_macro($macros["_self"], "macro_renderTestimonials", [$context, $context["item"]], 58, $context, $this->getSourceContext());
                        echo "
            </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "        ";
                }
                // line 62
                echo "      </div>
    ";
            }
            // line 64
            echo "  ";
        }
        // line 65
        echo "  ";
        // line 66
        echo "  ";
        if ((($context["display"] ?? null) == "tabs")) {
            // line 67
            echo "    <div class=\"tab-container\">
      <div class=\"full-tabs-bg\"></div>
      <ul class=\"nav nav-tabs\">
        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 71
                echo "          <li class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "tab_classes", [], "any", false, false, false, 71)], "method", false, false, false, 71);
                echo "\">
            ";
                // line 72
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "tabType", [], "any", false, false, false, 72) == "link")) {
                    // line 73
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 73), "href", [], "any", false, false, false, 73);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 73);
                    echo "</a>
            ";
                } else {
                    // line 75
                    echo "              <a href=\"#";
                    echo ($context["id"] ?? null);
                    echo "-tab-";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 75);
                    echo "\" data-toggle=\"tab\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 75);
                    echo "</a>
            ";
                }
                // line 77
                echo "          </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "      </ul>
      <div class=\"tab-content\">
        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 82
                echo "          <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 82)], "method", false, false, false, 82);
                echo "\" id=\"";
                echo ($context["id"] ?? null);
                echo "-tab-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 82);
                echo "\">
            ";
                // line 83
                echo twig_call_macro($macros["_self"], "macro_renderTestimonials", [$context, $context["item"]], 83, $context, $this->getSourceContext());
                echo "
          </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "      </div>
    </div>
  ";
        }
        // line 89
        echo "  ";
        // line 90
        echo "  ";
        if ((($context["display"] ?? null) == "accordion")) {
            // line 91
            echo "    <div class=\"panel-group\" id=\"";
            echo ($context["id"] ?? null);
            echo "-collapse\">
      ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 93
                echo "        <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 93)], "method", false, false, false, 93);
                echo "\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
              <a href=\"#";
                // line 96
                echo ($context["id"] ?? null);
                echo "-collapse-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 96);
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#";
                echo ($context["id"] ?? null);
                echo "-collapse\" aria-expanded=\"false\">
                ";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 97);
                echo "
                <i class=\"fa fa-caret-down\"></i>
              </a>
            </h4>
          </div>
          <div class=\"";
                // line 102
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "panel_classes", [], "any", false, false, false, 102)], "method", false, false, false, 102);
                echo "\" id=\"";
                echo ($context["id"] ?? null);
                echo "-collapse-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 102);
                echo "\">
            <div class=\"panel-body\">
              ";
                // line 104
                echo twig_call_macro($macros["_self"], "macro_renderTestimonials", [$context, $context["item"]], 104, $context, $this->getSourceContext());
                echo "
            </div>
          </div>
        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "    </div>
  ";
        }
        // line 111
        echo "  </div>
</div>
";
    }

    // line 1
    public function macro_renderTestimonials($__context__ = null, $__item__ = null, ...$__varargs__)
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
            echo "  <div class=\"block-body\">
    ";
            // line 4
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "header", [], "any", false, false, false, 4) == "image")) {
                // line 5
                echo "      <div class=\"block-header\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 5);
                echo "\" alt=\"\" class=\"block-image\" width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 5), "width", [], "any", false, false, false, 5);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 5), "height", [], "any", false, false, false, 5);
                echo "\"/></div>
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 6
($context["item"] ?? null), "header", [], "any", false, false, false, 6) == "icon")) {
                // line 7
                echo "      <div class=\"block-header\"><em class=\"icon icon-block\"></em></div>
    ";
            }
            // line 9
            echo "    <div class=\"block-content block-";
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "contentType", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 9);
            echo "</div>
    ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "expandButton", [], "any", false, false, false, 10)) {
                // line 11
                echo "      <div class=\"block-expand-overlay\"><a class=\"block-expand btn\" role=\"button\" aria-label=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalExpandButtonText"], "method", false, false, false, 11);
                echo "\"></a></div>
    ";
            }
            // line 13
            echo "  </div>
  ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footerText", [], "any", false, false, false, 14)) {
                // line 15
                echo "    <div class=\"block-footer\">";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footerText", [], "any", false, false, false, 15);
                echo "</div>
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
        return "journal3/template/journal3/module/testimonials.twig";
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
        return array (  438 => 15,  436 => 14,  433 => 13,  427 => 11,  425 => 10,  418 => 9,  414 => 7,  412 => 6,  403 => 5,  401 => 4,  398 => 3,  395 => 2,  381 => 1,  375 => 111,  371 => 109,  352 => 104,  343 => 102,  335 => 97,  327 => 96,  320 => 93,  303 => 92,  298 => 91,  295 => 90,  293 => 89,  288 => 86,  271 => 83,  262 => 82,  245 => 81,  241 => 79,  226 => 77,  216 => 75,  208 => 73,  206 => 72,  201 => 71,  184 => 70,  179 => 67,  176 => 66,  174 => 65,  171 => 64,  167 => 62,  164 => 61,  155 => 58,  150 => 57,  145 => 56,  139 => 52,  130 => 49,  125 => 48,  121 => 47,  118 => 46,  116 => 45,  111 => 44,  100 => 35,  91 => 32,  86 => 31,  82 => 30,  75 => 28,  68 => 27,  65 => 26,  62 => 25,  59 => 23,  53 => 21,  51 => 20,  45 => 19,  38 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/testimonials.twig", "");
    }
}
