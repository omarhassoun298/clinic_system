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

/* journal3/template/journal3/module/blocks.twig */
class __TwigTemplate_aaa5f19d1b9ba495665a4db57e612bc8 extends Template
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
        // line 77
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 77);
        echo "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 78
        echo ($context["edit"] ?? null);
        echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        echo ($context["name"] ?? null);
        echo "\"></em></button>
  ";
        // line 79
        if (($context["title"] ?? null)) {
            // line 80
            echo "    <h3 class=\"title module-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
  ";
        }
        // line 82
        echo "  <div class=\"module-body\">
  ";
        // line 84
        echo "  ";
        if ((($context["display"] ?? null) == "grid")) {
            // line 85
            echo "    ";
            if (((($context["gridType"] ?? null) == "ipr") && ($context["carousel"] ?? null))) {
                // line 86
                echo "      <div class=\"swiper\" data-items-per-row='";
                echo json_encode(($context["itemsPerRow"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                echo "' data-options='";
                echo json_encode(($context["carouselOptions"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                echo "'>
        <div class=\"swiper-container\" ";
                // line 87
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_rtl", [], "any", false, false, false, 87)) {
                    echo "dir=\"rtl\"";
                }
                echo ">
          <div class=\"swiper-wrapper ipr-grid\">
            ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 90
                    echo "              <div class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 90)], "method", false, false, false, 90);
                    echo "\">
                ";
                    // line 91
                    echo twig_call_macro($macros["_self"], "macro_renderBlocks", [$context, $context["item"]], 91, $context, $this->getSourceContext());
                    echo "
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
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
                // line 103
                echo "      <div class=\"blocks-grid no-scroll ";
                echo ($context["gridType"] ?? null);
                echo "-grid\">
        ";
                // line 104
                if ((($context["gridType"] ?? null) == "auto")) {
                    // line 105
                    echo "          <div class=\"auto-grid-items\">
            ";
                    // line 106
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 107
                        echo "              <div class=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 107)], "method", false, false, false, 107);
                        echo "\">
                ";
                        // line 108
                        echo twig_call_macro($macros["_self"], "macro_renderBlocks", [$context, $context["item"]], 108, $context, $this->getSourceContext());
                        echo "
              </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    echo "          </div>
          <div class=\"auto-carousel-bar auto-carousel-controls\"><div class=\"auto-carousel-thumb\"></div><div class=\"auto-carousel-fill\"></div></div>
          <div class=\"auto-carousel-buttons auto-carousel-controls\"><div class=\"auto-carousel-prev\"><span></span></div><div class=\"auto-carousel-next\"><span></span></div></div>
        ";
                } else {
                    // line 115
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 116
                        echo "            <div class=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 116)], "method", false, false, false, 116);
                        echo "\">
              ";
                        // line 117
                        echo twig_call_macro($macros["_self"], "macro_renderBlocks", [$context, $context["item"]], 117, $context, $this->getSourceContext());
                        echo "
            </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    echo "        ";
                }
                // line 121
                echo "      </div>
    ";
            }
            // line 123
            echo "  ";
        }
        // line 124
        echo "  ";
        // line 125
        echo "  ";
        if ((($context["display"] ?? null) == "tabs")) {
            // line 126
            echo "    <div class=\"tab-container\">
      <div class=\"full-tabs-bg\"></div>
      <ul class=\"nav nav-tabs\">
        ";
            // line 129
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
                // line 130
                echo "          <li class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "tab_classes", [], "any", false, false, false, 130)], "method", false, false, false, 130);
                echo "\">
            ";
                // line 131
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "tabType", [], "any", false, false, false, 131) == "link")) {
                    // line 132
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 132), "href", [], "any", false, false, false, 132);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 132)], "method", false, false, false, 132);
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 132);
                    echo "</a>
            ";
                } else {
                    // line 134
                    echo "              <a href=\"#";
                    echo ($context["id"] ?? null);
                    echo "-tab-";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 134);
                    echo "\" data-toggle=\"tab\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 134);
                    echo "</a>
            ";
                }
                // line 136
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
            // line 138
            echo "      </ul>
      <div class=\"tab-content\">
        ";
            // line 140
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
                // line 141
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "tabType", [], "any", false, false, false, 141) != "link")) {
                    // line 142
                    echo "            <div class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 142)], "method", false, false, false, 142);
                    echo "\" id=\"";
                    echo ($context["id"] ?? null);
                    echo "-tab-";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 142);
                    echo "\">
              ";
                    // line 143
                    echo twig_call_macro($macros["_self"], "macro_renderBlocks", [$context, $context["item"]], 143, $context, $this->getSourceContext());
                    echo "
            </div>
          ";
                }
                // line 146
                echo "        ";
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
            // line 147
            echo "      </div>
    </div>
  ";
        }
        // line 150
        echo "  ";
        // line 151
        echo "  ";
        if ((($context["display"] ?? null) == "accordion")) {
            // line 152
            echo "    <div class=\"panel-group\" id=\"";
            echo ($context["id"] ?? null);
            echo "-collapse\">
      ";
            // line 153
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
                // line 154
                echo "        <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 154)], "method", false, false, false, 154);
                echo "\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
              <a href=\"#";
                // line 157
                echo ($context["id"] ?? null);
                echo "-collapse-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 157);
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#";
                echo ($context["id"] ?? null);
                echo "-collapse\" aria-expanded=\"false\">
                ";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 158);
                echo "
                <i class=\"fa fa-caret-down\"></i>
              </a>
            </h4>
          </div>
          <div class=\"";
                // line 163
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "panel_classes", [], "any", false, false, false, 163)], "method", false, false, false, 163);
                echo "\" id=\"";
                echo ($context["id"] ?? null);
                echo "-collapse-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 163);
                echo "\">
            <div class=\"panel-body\">
              ";
                // line 165
                echo twig_call_macro($macros["_self"], "macro_renderBlocks", [$context, $context["item"]], 165, $context, $this->getSourceContext());
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
            // line 170
            echo "    </div>
  ";
        }
        // line 172
        echo "  </div>
</div>
";
    }

    // line 1
    public function macro_renderBlocks($__context__ = null, $__item__ = null, ...$__varargs__)
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
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "blockLink", [], "any", false, false, false, 3), "href", [], "any", false, false, false, 3)) {
                // line 4
                echo "    <a class=\"block-link\" href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "blockLink", [], "any", false, false, false, 4), "href", [], "any", false, false, false, 4);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "blockLink", [], "any", false, false, false, 4)], "method", false, false, false, 4);
                echo " aria-hidden=\"true\" tabindex=\"-1\"></a>
  ";
            }
            // line 6
            echo "  ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "display", [], "any", false, false, false, 6) == "grid") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 6)) && (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "titlePosition", [], "any", false, false, false, 6) == "block"))) {
                // line 7
                echo "    <h3 class=\"title module-title block-title\">";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 7);
                echo "</h3>
  ";
            }
            // line 9
            echo "  <div class=\"block-body expand-block\">
    ";
            // line 10
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "header", [], "any", false, false, false, 10) == "image") || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "header", [], "any", false, false, false, 10) == "category_image"))) {
                // line 11
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 11) && twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "lazyLoad", [], "any", false, false, false, 11))) {
                    // line 12
                    echo "        <div class=\"block-header block-head-image\">
          ";
                    // line 13
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "blockHeaderLink", [], "any", false, false, false, 13), "href", [], "any", false, false, false, 13)) {
                        // line 14
                        echo "            <a class=\"block-header-link\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "blockHeaderLink", [], "any", false, false, false, 14), "href", [], "any", false, false, false, 14);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "blockHeaderLink", [], "any", false, false, false, 14)], "method", false, false, false, 14);
                        echo " aria-hidden=\"true\" tabindex=\"-1\">
              <img src=\"";
                        // line 15
                        echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "dummy_image", [], "any", false, false, false, 15);
                        echo "\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 15);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 15)) {
                            echo "data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 15);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 15);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "alt", [], "any", false, false, false, 15);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 15), "width", [], "any", false, false, false, 15);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 15), "height", [], "any", false, false, false, 15);
                        echo "\" class=\"block-image lazyload\"/>
            </a>
          ";
                    } else {
                        // line 18
                        echo "          <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "dummy_image", [], "any", false, false, false, 18);
                        echo "\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 18);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 18)) {
                            echo "data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 18);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 18);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "alt", [], "any", false, false, false, 18);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 18), "width", [], "any", false, false, false, 18);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 18), "height", [], "any", false, false, false, 18);
                        echo "\" class=\"block-image lazyload\"/>
          ";
                    }
                    // line 20
                    echo "          ";
                    if ((((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "display", [], "any", false, false, false, 20) == "grid") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 20)) && (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "titlePosition", [], "any", false, false, false, 20) == "before"))) {
                        // line 21
                        echo "            <h3 class=\"title module-title block-title\">";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 21);
                        echo "</h3>
          ";
                    }
                    // line 23
                    echo "        </div>
      ";
                } else {
                    // line 25
                    echo "        <div class=\"block-header block-head-image\">
          ";
                    // line 26
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "blockHeaderLink", [], "any", false, false, false, 26), "href", [], "any", false, false, false, 26)) {
                        // line 27
                        echo "            <a class=\"block-header-link\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "blockHeaderLink", [], "any", false, false, false, 27), "href", [], "any", false, false, false, 27);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "blockHeaderLink", [], "any", false, false, false, 27)], "method", false, false, false, 27);
                        echo " aria-hidden=\"true\" tabindex=\"-1\">
              <img src=\"";
                        // line 28
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 28);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 28)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 28);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 28);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "alt", [], "any", false, false, false, 28);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 28), "width", [], "any", false, false, false, 28);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 28), "height", [], "any", false, false, false, 28);
                        echo "\" class=\"block-image\"/>
            </a>
          ";
                    } else {
                        // line 31
                        echo "              <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 31);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 31)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 31);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 31);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "alt", [], "any", false, false, false, 31);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 31), "width", [], "any", false, false, false, 31);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 31), "height", [], "any", false, false, false, 31);
                        echo "\" class=\"block-image\"/>
          ";
                    }
                    // line 33
                    echo "          ";
                    if ((((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "display", [], "any", false, false, false, 33) == "grid") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 33)) && (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "titlePosition", [], "any", false, false, false, 33) == "before"))) {
                        // line 34
                        echo "            <h3 class=\"title module-title block-title\">";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 34);
                        echo "</h3>
          ";
                    }
                    // line 36
                    echo "        </div>
      ";
                }
                // line 38
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "header", [], "any", false, false, false, 38) == "icon")) {
                // line 39
                echo "      <div class=\"block-header block-head-icon\">
        <em class=\"icon icon-block\"></em>
        ";
                // line 41
                if ((((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "display", [], "any", false, false, false, 41) == "grid") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 41)) && (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "titlePosition", [], "any", false, false, false, 41) == "before"))) {
                    // line 42
                    echo "          <h3 class=\"title module-title block-title\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 42);
                    echo "</h3>
        ";
                }
                // line 44
                echo "      </div>
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 45
($context["item"] ?? null), "header", [], "any", false, false, false, 45) == "text")) {
                // line 46
                echo "      <div class=\"block-header block-head-text\">
        <span class=\"block-header-text\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "text", [], "any", false, false, false, 47);
                echo "</span>
        ";
                // line 48
                if ((((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "display", [], "any", false, false, false, 48) == "grid") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 48)) && (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "titlePosition", [], "any", false, false, false, 48) == "before"))) {
                    // line 49
                    echo "          <h3 class=\"title module-title block-title\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 49);
                    echo "</h3>
        ";
                }
                // line 51
                echo "      </div>
    ";
            }
            // line 53
            echo "    <div class=\"block-wrapper\">
      ";
            // line 54
            if ((((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "display", [], "any", false, false, false, 54) == "grid") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 54)) && (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "titlePosition", [], "any", false, false, false, 54) == "body"))) {
                // line 55
                echo "        <h3 class=\"title module-title block-title\">";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 55);
                echo "</h3>
      ";
            }
            // line 57
            echo "      <div class=\"block-content ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "expandButton", [], "any", false, false, false, 57)) {
                echo "expand-content";
            }
            echo " block-";
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "contentType", [], "any", false, false, false, 57);
            echo "\">
        ";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "contentType", [], "any", false, false, false, 58) == "map")) {
                // line 59
                echo "        <div class=\"journal-loading\"><em class=\"fa fa-spinner fa-spin\"></em></div>
        ";
            }
            // line 61
            echo "        ";
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 61);
            echo "
        ";
            // line 62
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "expandButton", [], "any", false, false, false, 62)) {
                // line 63
                echo "          <div class=\"block-expand-overlay\"><a class=\"block-expand btn\" href=\"javascript:;\" aria-hidden=\"true\"></a></div>
        ";
            }
            // line 65
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "gallery", [], "any", false, false, false, 65)) {
                // line 66
                echo "        <div class=\"block-gallery\">";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "gallery", [], "any", false, false, false, 66);
                echo "</div>
        ";
            }
            // line 68
            echo "      </div>
      ";
            // line 69
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footer", [], "any", false, false, false, 69) == "text")) {
                // line 70
                echo "        <div class=\"block-footer\">";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footerText", [], "any", false, false, false, 70);
                echo "</div>
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 71
($context["item"] ?? null), "footer", [], "any", false, false, false, 71) == "button")) {
                // line 72
                echo "        <div class=\"block-footer\"><a class=\"btn\" href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footerButtonLink", [], "any", false, false, false, 72), "href", [], "any", false, false, false, 72);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footerButtonLink", [], "any", false, false, false, 72)], "method", false, false, false, 72);
                echo ">";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footerButton", [], "any", false, false, false, 72);
                echo "</a></div>
      ";
            }
            // line 74
            echo "    </div>
  </div>
";

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
        return "journal3/template/journal3/module/blocks.twig";
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
        return array (  673 => 74,  663 => 72,  661 => 71,  656 => 70,  654 => 69,  651 => 68,  645 => 66,  642 => 65,  638 => 63,  636 => 62,  631 => 61,  627 => 59,  625 => 58,  616 => 57,  610 => 55,  608 => 54,  605 => 53,  601 => 51,  595 => 49,  593 => 48,  589 => 47,  586 => 46,  584 => 45,  581 => 44,  575 => 42,  573 => 41,  569 => 39,  566 => 38,  562 => 36,  556 => 34,  553 => 33,  533 => 31,  513 => 28,  506 => 27,  504 => 26,  501 => 25,  497 => 23,  491 => 21,  488 => 20,  466 => 18,  444 => 15,  437 => 14,  435 => 13,  432 => 12,  429 => 11,  427 => 10,  424 => 9,  418 => 7,  415 => 6,  407 => 4,  404 => 3,  401 => 2,  387 => 1,  381 => 172,  377 => 170,  358 => 165,  349 => 163,  341 => 158,  333 => 157,  326 => 154,  309 => 153,  304 => 152,  301 => 151,  299 => 150,  294 => 147,  280 => 146,  274 => 143,  265 => 142,  262 => 141,  245 => 140,  241 => 138,  226 => 136,  216 => 134,  206 => 132,  204 => 131,  199 => 130,  182 => 129,  177 => 126,  174 => 125,  172 => 124,  169 => 123,  165 => 121,  162 => 120,  153 => 117,  148 => 116,  143 => 115,  137 => 111,  128 => 108,  123 => 107,  119 => 106,  116 => 105,  114 => 104,  109 => 103,  98 => 94,  89 => 91,  84 => 90,  80 => 89,  73 => 87,  66 => 86,  63 => 85,  60 => 84,  57 => 82,  51 => 80,  49 => 79,  43 => 78,  38 => 77,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/blocks.twig", "");
    }
}
