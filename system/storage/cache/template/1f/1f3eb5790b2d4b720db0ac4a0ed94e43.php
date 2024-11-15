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

/* journal3/template/journal3/module/banners_grid.twig */
class __TwigTemplate_fe7787c1c2c4d57504af804d3b245c79 extends Template
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
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 1);
        echo "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 2
        echo ($context["edit"] ?? null);
        echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        echo ($context["name"] ?? null);
        echo "\"></em></button>
  ";
        // line 3
        if (($context["title"] ?? null)) {
            // line 4
            echo "    <h3 class=\"title module-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
  ";
        }
        // line 6
        echo "  <div class=\"module-body\">
    <div class=\"banners-grid no-scroll ";
        // line 7
        if ((($context["gridType"] ?? null) == "auto")) {
            echo "auto-grid";
        }
        echo "\">
      ";
        // line 8
        if ((($context["gridType"] ?? null) == "auto")) {
            // line 9
            echo "        <div class=\"banners-wrapper auto-grid-items\">
          ";
            // line 10
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
                // line 11
                echo "            <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 11)], "method", false, false, false, 11);
                echo "\">
              <div class=\"slide-content slide-content-";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 12);
                echo "\">
                ";
                // line 13
                if ((((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 13) == "image") || (twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 13) == "category")) || (twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 13) == "product"))) {
                    // line 14
                    echo "                  ";
                    if ((($context["lazyLoad"] ?? null) ||  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 14))) {
                        // line 15
                        echo "                    <img class=\"lazyload\" src=\"";
                        echo ($context["lazyload_placeholder"] ?? null);
                        echo "\" data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 15);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 15);
                        echo " 2x\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image_width", [], "any", false, false, false, 15);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image_height", [], "any", false, false, false, 15);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 15);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 15);
                        echo "\"/>
                  ";
                    } else {
                        // line 17
                        echo "                    <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 17);
                        echo "\" srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 17);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 17);
                        echo " 2x\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image_width", [], "any", false, false, false, 17);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image_height", [], "any", false, false, false, 17);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 17);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 17);
                        echo "\"/>
                  ";
                    }
                    // line 19
                    echo "                ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 19) == "video")) {
                    // line 20
                    echo "                  <video class=\"lazyload\" autoplay playsinline muted loop data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "videoSrc", [], "any", false, false, false, 20);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "videoPoster", [], "any", false, false, false, 20)) {
                        echo "poster=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "videoPoster", [], "any", false, false, false, 20);
                        echo "\"";
                    }
                    echo "></video>
                ";
                }
                // line 22
                echo "
                ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 23), "href", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                  <a class=\"slide-link\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 24), "href", [], "any", false, false, false, 24);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 24)], "method", false, false, false, 24);
                    echo " aria-hidden=\"true\" tabindex=\"-1\"></a>
                ";
                }
                // line 26
                echo "
                ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                  <div class=\"slide-cols\">
                    ";
                    // line 29
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(["left", "right"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                        // line 30
                        echo "                      ";
                        if ((($__internal_compile_0 = $context["item"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[("items_" . $context["col"])] ?? null) : null)) {
                            // line 31
                            echo "                        <div class=\"slide-col slide-col-";
                            echo $context["col"];
                            echo "\">
                          <div class=\"slide-layers\">
                            ";
                            // line 33
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = $context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[("items_" . $context["col"])] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                                // line 34
                                echo "                              ";
                                if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "type", [], "any", false, false, false, 34) == "text")) {
                                    // line 35
                                    echo "                                <div class=\"";
                                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 35)], "method", false, false, false, 35);
                                    echo "\">
                                  <div class=\"slide-text-layer\">
                                    <div class=\"slide-text-item\"><span>";
                                    // line 37
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "text", [], "any", false, false, false, 37);
                                    echo "</span></div>
                                  </div>
                                </div>
                              ";
                                } elseif ((twig_get_attribute($this->env, $this->source,                                 // line 40
$context["subitem"], "type", [], "any", false, false, false, 40) == "svg")) {
                                    // line 41
                                    echo "                                <div class=\"";
                                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 41)], "method", false, false, false, 41);
                                    echo "\">
                                  <div class=\"svg-layer\">";
                                    // line 42
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "svgCode", [], "any", false, false, false, 42);
                                    echo "</div>
                                </div>
                              ";
                                } elseif ((twig_get_attribute($this->env, $this->source,                                 // line 44
$context["subitem"], "type", [], "any", false, false, false, 44) == "button")) {
                                    // line 45
                                    echo "                                <div class=\"";
                                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 45)], "method", false, false, false, 45);
                                    echo "\">
                                  <div class=\"slide-button-group\">
                                    ";
                                    // line 47
                                    if (twig_get_attribute($this->env, $this->source, $context["subitem"], "button_1_text", [], "any", false, false, false, 47)) {
                                        // line 48
                                        echo "                                      <a class=\"btn slide-button-1\" ";
                                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 48), "href", [], "any", false, false, false, 48)) {
                                            echo "href=\"";
                                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 48), "href", [], "any", false, false, false, 48);
                                            echo "\" ";
                                            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 48)], "method", false, false, false, 48);
                                            echo " ";
                                        } else {
                                            echo "href=\"javascript:;\"";
                                        }
                                        echo "><span>";
                                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "button_1_text", [], "any", false, false, false, 48);
                                        echo "</span></a>
                                    ";
                                    }
                                    // line 50
                                    echo "                                    ";
                                    if (twig_get_attribute($this->env, $this->source, $context["subitem"], "button_2_text", [], "any", false, false, false, 50)) {
                                        // line 51
                                        echo "                                      <a class=\"btn slide-button-2\" ";
                                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 51), "href", [], "any", false, false, false, 51)) {
                                            echo "href=\"";
                                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 51), "href", [], "any", false, false, false, 51);
                                            echo "\" ";
                                            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 51)], "method", false, false, false, 51);
                                            echo " ";
                                        } else {
                                            echo "href=\"javascript:;\"";
                                        }
                                        echo "><span>";
                                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "button_2_text", [], "any", false, false, false, 51);
                                        echo "</span></a>
                                    ";
                                    }
                                    // line 53
                                    echo "                                  </div>
                                </div>
                              ";
                                } elseif ((twig_get_attribute($this->env, $this->source,                                 // line 55
$context["subitem"], "type", [], "any", false, false, false, 55) == "image")) {
                                    // line 56
                                    echo "                                <figure class=\"";
                                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 56)], "method", false, false, false, 56);
                                    echo "\">
                                  <img class=\"\" src=\"";
                                    // line 57
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 57);
                                    echo "\" srcset=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 57);
                                    echo " 1x, ";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image2x", [], "any", false, false, false, 57);
                                    echo " 2x\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "alt", [], "any", false, false, false, 57);
                                    echo "\" width=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "width", [], "any", false, false, false, 57);
                                    echo "\" height=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "height", [], "any", false, false, false, 57);
                                    echo "\"/>
                                  ";
                                    // line 58
                                    if (twig_get_attribute($this->env, $this->source, $context["subitem"], "caption", [], "any", false, false, false, 58)) {
                                        // line 59
                                        echo "                                    <figcaption><span>";
                                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "caption", [], "any", false, false, false, 59);
                                        echo "</span></figcaption>
                                  ";
                                    }
                                    // line 61
                                    echo "                                  ";
                                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 61), "href", [], "any", false, false, false, 61)) {
                                        // line 62
                                        echo "                                    <a class=\"slide-layer-image-link\" href=\"";
                                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 62), "href", [], "any", false, false, false, 62);
                                        echo "\" ";
                                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 62)], "method", false, false, false, 62);
                                        echo " aria-hidden=\"true\" tabindex=\"-1\"></a>
                                  ";
                                    }
                                    // line 64
                                    echo "                                </figure>
                              ";
                                } elseif ((twig_get_attribute($this->env, $this->source,                                 // line 65
$context["subitem"], "type", [], "any", false, false, false, 65) == "products")) {
                                    // line 66
                                    echo "                                <div class=\"";
                                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 66)], "method", false, false, false, 66);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "products", [], "any", false, false, false, 66);
                                    echo "</div>
                              ";
                                }
                                // line 68
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 69
                            echo "                          </div>
                        </div>
                      ";
                        }
                        // line 72
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 73
                    echo "                  </div>
                  ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_2 = $context["item"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["items_absolute"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 75
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "type", [], "any", false, false, false, 75) == "icon")) {
                            // line 76
                            echo "                      <div class=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 76)], "method", false, false, false, 76);
                            echo "\">
                        <div class=\"can-rotate\">
                          <span class=\"has-icon\"></span>
                          ";
                            // line 79
                            if (twig_get_attribute($this->env, $this->source, $context["subitem"], "iconText", [], "any", false, false, false, 79)) {
                                // line 80
                                echo "                            <span class=\"has-text\">";
                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "iconText", [], "any", false, false, false, 80);
                                echo "</span>
                          ";
                            }
                            // line 82
                            echo "                        </div>
                      </div>
                    ";
                        }
                        // line 85
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "                ";
                }
                // line 87
                echo "              </div>
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
            // line 90
            echo "        </div>
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
            // line 100
            echo "        <div class=\"banners-wrapper flex-grid\">
          ";
            // line 101
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
                // line 102
                echo "            <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 102)], "method", false, false, false, 102);
                echo "\">
              <div class=\"slide-content slide-content-";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 103);
                echo "\">
                ";
                // line 104
                if ((((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 104) == "image") || (twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 104) == "category")) || (twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 104) == "product"))) {
                    // line 105
                    echo "                  ";
                    if ((($context["lazyLoad"] ?? null) ||  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 105))) {
                        // line 106
                        echo "                    <img class=\"lazyload\" src=\"";
                        echo ($context["lazyload_placeholder"] ?? null);
                        echo "\" data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 106);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 106);
                        echo " 2x\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image_width", [], "any", false, false, false, 106);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image_height", [], "any", false, false, false, 106);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 106);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 106);
                        echo "\"/>
                  ";
                    } else {
                        // line 108
                        echo "                    <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 108);
                        echo "\" srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 108);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 108);
                        echo " 2x\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image_width", [], "any", false, false, false, 108);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image_height", [], "any", false, false, false, 108);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 108);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 108);
                        echo "\"/>
                  ";
                    }
                    // line 110
                    echo "                ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 110) == "video")) {
                    // line 111
                    echo "                  <video autoplay playsinline muted data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "videoSrc", [], "any", false, false, false, 111);
                    echo "\"></video>
                ";
                }
                // line 113
                echo "
                ";
                // line 114
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 114), "href", [], "any", false, false, false, 114)) {
                    // line 115
                    echo "                  <a class=\"slide-link\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 115), "href", [], "any", false, false, false, 115);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 115)], "method", false, false, false, 115);
                    echo " aria-hidden=\"true\" tabindex=\"-1\"></a>
                ";
                }
                // line 117
                echo "
                ";
                // line 118
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 118)) {
                    // line 119
                    echo "                  <div class=\"slide-cols\">
                    ";
                    // line 120
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(["left", "right"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                        // line 121
                        echo "                      ";
                        if ((($__internal_compile_3 = $context["item"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[("items_" . $context["col"])] ?? null) : null)) {
                            // line 122
                            echo "                        <div class=\"slide-col slide-col-";
                            echo $context["col"];
                            echo "\">
                          <div class=\"slide-layers\">
                            ";
                            // line 124
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_compile_4 = $context["item"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[("items_" . $context["col"])] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                                // line 125
                                echo "                              ";
                                if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "type", [], "any", false, false, false, 125) == "text")) {
                                    // line 126
                                    echo "                                <div class=\"";
                                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 126)], "method", false, false, false, 126);
                                    echo "\">
                                  <div class=\"slide-text-layer\">
                                    <div class=\"slide-text-item\"><span>";
                                    // line 128
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "text", [], "any", false, false, false, 128);
                                    echo "</span></div>
                                  </div>
                                </div>
                              ";
                                } elseif ((twig_get_attribute($this->env, $this->source,                                 // line 131
$context["subitem"], "type", [], "any", false, false, false, 131) == "svg")) {
                                    // line 132
                                    echo "                                <div class=\"";
                                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 132)], "method", false, false, false, 132);
                                    echo "\">
                                  <div class=\"svg-layer\">";
                                    // line 133
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "svgCode", [], "any", false, false, false, 133);
                                    echo "</div>
                                </div>
                              ";
                                } elseif ((twig_get_attribute($this->env, $this->source,                                 // line 135
$context["subitem"], "type", [], "any", false, false, false, 135) == "button")) {
                                    // line 136
                                    echo "                                <div class=\"";
                                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 136)], "method", false, false, false, 136);
                                    echo "\">
                                  <div class=\"slide-button-group\">
                                    ";
                                    // line 138
                                    if (twig_get_attribute($this->env, $this->source, $context["subitem"], "button_1_text", [], "any", false, false, false, 138)) {
                                        // line 139
                                        echo "                                      <a class=\"btn slide-button-1\" ";
                                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 139), "href", [], "any", false, false, false, 139)) {
                                            echo "href=\"";
                                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 139), "href", [], "any", false, false, false, 139);
                                            echo "\" ";
                                            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 139)], "method", false, false, false, 139);
                                            echo " ";
                                        } else {
                                            echo "href=\"javascript:;\"";
                                        }
                                        echo "><span>";
                                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "button_1_text", [], "any", false, false, false, 139);
                                        echo "</span></a>
                                    ";
                                    }
                                    // line 141
                                    echo "                                    ";
                                    if (twig_get_attribute($this->env, $this->source, $context["subitem"], "button_2_text", [], "any", false, false, false, 141)) {
                                        // line 142
                                        echo "                                      <a class=\"btn slide-button-2\" ";
                                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 142), "href", [], "any", false, false, false, 142)) {
                                            echo "href=\"";
                                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 142), "href", [], "any", false, false, false, 142);
                                            echo "\" ";
                                            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 142)], "method", false, false, false, 142);
                                            echo " ";
                                        } else {
                                            echo "href=\"javascript:;\"";
                                        }
                                        echo "><span>";
                                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "button_2_text", [], "any", false, false, false, 142);
                                        echo "</span></a>
                                    ";
                                    }
                                    // line 144
                                    echo "                                  </div>
                                </div>
                              ";
                                } elseif ((twig_get_attribute($this->env, $this->source,                                 // line 146
$context["subitem"], "type", [], "any", false, false, false, 146) == "image")) {
                                    // line 147
                                    echo "                                <figure class=\"";
                                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 147)], "method", false, false, false, 147);
                                    echo "\">
                                  <img class=\"\" src=\"";
                                    // line 148
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 148);
                                    echo "\" srcset=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 148);
                                    echo " 1x, ";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image2x", [], "any", false, false, false, 148);
                                    echo " 2x\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "alt", [], "any", false, false, false, 148);
                                    echo "\" width=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "width", [], "any", false, false, false, 148);
                                    echo "\" height=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "height", [], "any", false, false, false, 148);
                                    echo "\"/>
                                  ";
                                    // line 149
                                    if (twig_get_attribute($this->env, $this->source, $context["subitem"], "caption", [], "any", false, false, false, 149)) {
                                        // line 150
                                        echo "                                    <figcaption><span>";
                                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "caption", [], "any", false, false, false, 150);
                                        echo "</span></figcaption>
                                  ";
                                    }
                                    // line 152
                                    echo "                                  ";
                                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 152), "href", [], "any", false, false, false, 152)) {
                                        // line 153
                                        echo "                                    <a class=\"slide-layer-image-link\" href=\"";
                                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 153), "href", [], "any", false, false, false, 153);
                                        echo "\" ";
                                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 153)], "method", false, false, false, 153);
                                        echo " aria-hidden=\"true\" tabindex=\"-1\"></a>
                                  ";
                                    }
                                    // line 155
                                    echo "                                </figure>
                              ";
                                } elseif ((twig_get_attribute($this->env, $this->source,                                 // line 156
$context["subitem"], "type", [], "any", false, false, false, 156) == "products")) {
                                    // line 157
                                    echo "                                <div class=\"";
                                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 157)], "method", false, false, false, 157);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "products", [], "any", false, false, false, 157);
                                    echo "</div>
                              ";
                                }
                                // line 159
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 160
                            echo "                          </div>
                        </div>
                      ";
                        }
                        // line 163
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 164
                    echo "                  </div>
                  ";
                    // line 165
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_5 = $context["item"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["items_absolute"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 166
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "type", [], "any", false, false, false, 166) == "icon")) {
                            // line 167
                            echo "                      <div class=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 167)], "method", false, false, false, 167);
                            echo "\">
                        <div class=\"can-rotate\">
                          <span class=\"has-icon\"></span>
                          ";
                            // line 170
                            if (twig_get_attribute($this->env, $this->source, $context["subitem"], "iconText", [], "any", false, false, false, 170)) {
                                // line 171
                                echo "                            <span class=\"has-text\">";
                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "iconText", [], "any", false, false, false, 171);
                                echo "</span>
                          ";
                            }
                            // line 173
                            echo "                        </div>
                      </div>
                    ";
                        }
                        // line 176
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    echo "                ";
                }
                // line 178
                echo "              </div>
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
            // line 181
            echo "        </div>
      ";
        }
        // line 183
        echo "    </div>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/module/banners_grid.twig";
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
        return array (  725 => 183,  721 => 181,  705 => 178,  702 => 177,  696 => 176,  691 => 173,  685 => 171,  683 => 170,  676 => 167,  673 => 166,  669 => 165,  666 => 164,  660 => 163,  655 => 160,  649 => 159,  641 => 157,  639 => 156,  636 => 155,  628 => 153,  625 => 152,  619 => 150,  617 => 149,  603 => 148,  598 => 147,  596 => 146,  592 => 144,  576 => 142,  573 => 141,  557 => 139,  555 => 138,  549 => 136,  547 => 135,  542 => 133,  537 => 132,  535 => 131,  529 => 128,  523 => 126,  520 => 125,  516 => 124,  510 => 122,  507 => 121,  503 => 120,  500 => 119,  498 => 118,  495 => 117,  487 => 115,  485 => 114,  482 => 113,  476 => 111,  473 => 110,  455 => 108,  437 => 106,  434 => 105,  432 => 104,  428 => 103,  423 => 102,  406 => 101,  403 => 100,  391 => 90,  375 => 87,  372 => 86,  366 => 85,  361 => 82,  355 => 80,  353 => 79,  346 => 76,  343 => 75,  339 => 74,  336 => 73,  330 => 72,  325 => 69,  319 => 68,  311 => 66,  309 => 65,  306 => 64,  298 => 62,  295 => 61,  289 => 59,  287 => 58,  273 => 57,  268 => 56,  266 => 55,  262 => 53,  246 => 51,  243 => 50,  227 => 48,  225 => 47,  219 => 45,  217 => 44,  212 => 42,  207 => 41,  205 => 40,  199 => 37,  193 => 35,  190 => 34,  186 => 33,  180 => 31,  177 => 30,  173 => 29,  170 => 28,  168 => 27,  165 => 26,  157 => 24,  155 => 23,  152 => 22,  140 => 20,  137 => 19,  119 => 17,  101 => 15,  98 => 14,  96 => 13,  92 => 12,  87 => 11,  70 => 10,  67 => 9,  65 => 8,  59 => 7,  56 => 6,  50 => 4,  48 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/banners_grid.twig", "");
    }
}
