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

/* journal3/template/journal3/module/slider.twig */
class __TwigTemplate_41cadd37a381db5d6b2f5d2f1e3353b070741a023147736a29cb20280ae0c533 extends Template
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
  <div class=\"slider-wrapper ";
        // line 3
        if ((($context["slidesPerView"] ?? null) == "auto")) {
            echo "slider-carousel";
        }
        echo "\">
    <div class=\"swiper-container\" ";
        // line 4
        if (($context["syncWith"] ?? null)) {
            echo "data-sync-with=\"";
            echo ($context["syncWith"] ?? null);
            echo "\"";
        }
        echo ">
      <div class=\"journal-loading\"><em class=\"fa fa-spinner fa-spin\"></em></div>
      ";
        // line 6
        if (($context["parallax_bg"] ?? null)) {
            // line 7
            echo "        ";
            if (($context["lazyLoad"] ?? null)) {
                // line 8
                echo "          <div class=\"parallax-bg lazyload-bg lazyload\" data-swiper-parallax=\"";
                echo twig_trim_filter(($context["parallaxValue"] ?? null), "px");
                echo "\"></div>
        ";
            } else {
                // line 10
                echo "          <div class=\"parallax-bg lazyload-bg\" data-swiper-parallax=\"";
                echo twig_trim_filter(($context["parallaxValue"] ?? null), "px");
                echo "\"></div>
        ";
            }
            // line 12
            echo "      ";
        }
        // line 13
        echo "      <div class=\"swiper-wrapper\" data-options='";
        echo json_encode(($context["options"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
        echo "'>
        ";
        // line 14
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
            // line 15
            echo "          <div class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 15)], "method", false, false, false, 15);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 15)) {
                echo "swiper-slide-active";
            }
            echo "\">
            <div class=\"slide-content slide-content-";
            // line 16
            echo (((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 16) == "custom")) ? ("image") : (twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 16)));
            echo "\" ";
            if (($context["slideParallaxOffsetX"] ?? null)) {
                echo "data-swiper-parallax-x=\"";
                echo ($context["slideParallaxOffsetX"] ?? null);
                echo "\"";
            }
            echo " ";
            if (($context["slideParallaxOffsetY"] ?? null)) {
                echo "data-swiper-parallax-y=\"";
                echo ($context["slideParallaxOffsetY"] ?? null);
                echo "\"";
            }
            echo " ";
            if (($context["slideParallaxOpacity"] ?? null)) {
                echo "data-swiper-parallax-opacity=\"";
                echo ($context["slideParallaxOpacity"] ?? null);
                echo "\"";
            }
            echo " ";
            if (($context["slideParallaxScale"] ?? null)) {
                echo "data-swiper-parallax-scale=\"";
                echo ($context["slideParallaxScale"] ?? null);
                echo "\"";
            }
            echo " ";
            if (($context["slideParallaxDuration"] ?? null)) {
                echo "data-swiper-parallax-duration=\"";
                echo ($context["slideParallaxDuration"] ?? null);
                echo "\"";
            }
            echo ">
              ";
            // line 17
            if ((((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 17) == "image") || (twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 17) == "category")) || (twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 17) == "product"))) {
                // line 18
                echo "                ";
                if ((($context["lazyLoad"] ?? null) ||  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 18))) {
                    // line 19
                    echo "                  <img class=\"lazyload\" src=\"";
                    echo ($context["lazyload_placeholder"] ?? null);
                    echo "\" data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 19);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 19);
                    echo " 2x\" width=\"";
                    echo ($context["width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 19);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 19);
                    echo "\"/>
                ";
                } else {
                    // line 21
                    echo "                  <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 21);
                    echo "\" srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 21);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 21);
                    echo " 2x\" width=\"";
                    echo ($context["width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 21);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 21);
                    echo "\"/>
                ";
                }
                // line 23
                echo "              ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 23) == "video")) {
                // line 24
                echo "                <video autoplay playsinline muted data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "videoSrc", [], "any", false, false, false, 24);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "videoPoster", [], "any", false, false, false, 24)) {
                    echo "poster=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "videoPoster", [], "any", false, false, false, 24);
                    echo "\"";
                }
                echo "></video>
              ";
            }
            // line 26
            echo "
              ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 27), "href", [], "any", false, false, false, 27)) {
                // line 28
                echo "                <a class=\"slide-link\" href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 28), "href", [], "any", false, false, false, 28);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 28)], "method", false, false, false, 28);
                echo " aria-hidden=\"true\" tabindex=\"-1\"></a>
              ";
            }
            // line 30
            echo "
              ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 31)) {
                // line 32
                echo "              <div class=\"slide-cols\">
                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(["left", "right"]);
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 34
                    echo "                  ";
                    if ((($__internal_compile_0 = $context["item"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[("items_" . $context["col"])] ?? null) : null)) {
                        // line 35
                        echo "                    <div class=\"slide-col slide-col-";
                        echo $context["col"];
                        echo "\" ";
                        if (($context["colParallaxOffsetX"] ?? null)) {
                            echo "data-swiper-parallax-x=\"";
                            echo ($context["colParallaxOffsetX"] ?? null);
                            echo "\"";
                        }
                        echo " ";
                        if (($context["colParallaxOffsetY"] ?? null)) {
                            echo "data-swiper-parallax-y=\"";
                            echo ($context["colParallaxOffsetY"] ?? null);
                            echo "\"";
                        }
                        echo " ";
                        if (($context["colParallaxOpacity"] ?? null)) {
                            echo "data-swiper-parallax-opacity=\"";
                            echo ($context["colParallaxOpacity"] ?? null);
                            echo "\"";
                        }
                        echo " ";
                        if (($context["colParallaxScale"] ?? null)) {
                            echo "data-swiper-parallax-scale=\"";
                            echo ($context["colParallaxScale"] ?? null);
                            echo "\"";
                        }
                        echo " ";
                        if (($context["colParallaxDuration"] ?? null)) {
                            echo "data-swiper-parallax-duration=\"";
                            echo ($context["colParallaxDuration"] ?? null);
                            echo "\"";
                        }
                        echo ">

                      <div class=\"slide-layers\">
                        ";
                        // line 38
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = $context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[("items_" . $context["col"])] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                            // line 39
                            echo "                          ";
                            if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "type", [], "any", false, false, false, 39) == "text")) {
                                // line 40
                                echo "                            <div class=\"";
                                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 40)], "method", false, false, false, 40);
                                echo "\" ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 40)) {
                                    echo "data-swiper-parallax-x=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 40);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 40)) {
                                    echo "data-swiper-parallax-y=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 40);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 40)) {
                                    echo "data-swiper-parallax-opacity=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 40);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 40)) {
                                    echo "data-swiper-parallax-scale=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 40);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 40)) {
                                    echo "data-swiper-parallax-duration=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 40);
                                    echo "\"";
                                }
                                echo ">
                              <div class=\"slide-text-item\"><span>";
                                // line 41
                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "text", [], "any", false, false, false, 41);
                                echo "</span></div>
                            </div>
                          ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 43
$context["subitem"], "type", [], "any", false, false, false, 43) == "svg")) {
                                // line 44
                                echo "                            <div class=\"";
                                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 44)], "method", false, false, false, 44);
                                echo "\" ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 44)) {
                                    echo "data-swiper-parallax-x=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 44);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 44)) {
                                    echo "data-swiper-parallax-y=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 44);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 44)) {
                                    echo "data-swiper-parallax-opacity=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 44);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 44)) {
                                    echo "data-swiper-parallax-scale=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 44);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 44)) {
                                    echo "data-swiper-parallax-duration=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 44);
                                    echo "\"";
                                }
                                echo ">
                              <div class=\"svg-layer\">";
                                // line 45
                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "svgCode", [], "any", false, false, false, 45);
                                echo "</div>
                            </div>
                          ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 47
$context["subitem"], "type", [], "any", false, false, false, 47) == "button")) {
                                // line 48
                                echo "                            <div class=\"";
                                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 48)], "method", false, false, false, 48);
                                echo "\" ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 48)) {
                                    echo "data-swiper-parallax-x=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 48);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 48)) {
                                    echo "data-swiper-parallax-y=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 48);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 48)) {
                                    echo "data-swiper-parallax-opacity=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 48);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 48)) {
                                    echo "data-swiper-parallax-scale=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 48);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 48)) {
                                    echo "data-swiper-parallax-duration=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 48);
                                    echo "\"";
                                }
                                echo ">
                              <div class=\"slide-button-group\">
                                ";
                                // line 50
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "button_1_text", [], "any", false, false, false, 50)) {
                                    // line 51
                                    echo "                                  <a class=\"btn slide-button-1\" ";
                                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 51), "href", [], "any", false, false, false, 51)) {
                                        echo "href=\"";
                                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 51), "href", [], "any", false, false, false, 51);
                                        echo "\" ";
                                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 51)], "method", false, false, false, 51);
                                        echo " ";
                                    } else {
                                        echo "href=\"javascript:;\"";
                                    }
                                    echo "><span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "button_1_text", [], "any", false, false, false, 51);
                                    echo "</span></a>
                                ";
                                }
                                // line 53
                                echo "                                ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "button_2_text", [], "any", false, false, false, 53)) {
                                    // line 54
                                    echo "                                  <a class=\"btn slide-button-2\" ";
                                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 54), "href", [], "any", false, false, false, 54)) {
                                        echo "href=\"";
                                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 54), "href", [], "any", false, false, false, 54);
                                        echo "\" ";
                                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 54)], "method", false, false, false, 54);
                                        echo " ";
                                    } else {
                                        echo "href=\"javascript:;\"";
                                    }
                                    echo "><span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "button_2_text", [], "any", false, false, false, 54);
                                    echo "</span></a>
                                ";
                                }
                                // line 56
                                echo "                              </div>
                            </div>
                          ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 58
$context["subitem"], "type", [], "any", false, false, false, 58) == "image")) {
                                // line 59
                                echo "                            <figure class=\"";
                                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 59)], "method", false, false, false, 59);
                                echo "\" ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 59)) {
                                    echo "data-swiper-parallax-x=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 59);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 59)) {
                                    echo "data-swiper-parallax-y=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 59);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 59)) {
                                    echo "data-swiper-parallax-opacity=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 59);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 59)) {
                                    echo "data-swiper-parallax-scale=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 59);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 59)) {
                                    echo "data-swiper-parallax-duration=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 59);
                                    echo "\"";
                                }
                                echo ">
                              <img class=\"\" src=\"";
                                // line 60
                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 60);
                                echo "\" srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 60);
                                echo " 1x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image2x", [], "any", false, false, false, 60);
                                echo " 2x\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "alt", [], "any", false, false, false, 60);
                                echo "\" width=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "width", [], "any", false, false, false, 60);
                                echo "\" height=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "height", [], "any", false, false, false, 60);
                                echo "\">
                              ";
                                // line 61
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "caption", [], "any", false, false, false, 61)) {
                                    // line 62
                                    echo "                                <figcaption><span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "caption", [], "any", false, false, false, 62);
                                    echo "</span></figcaption>
                              ";
                                }
                                // line 64
                                echo "                              ";
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 64), "href", [], "any", false, false, false, 64)) {
                                    // line 65
                                    echo "                                <a class=\"slide-layer-image-link\" href=\"";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 65), "href", [], "any", false, false, false, 65);
                                    echo "\" ";
                                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 65)], "method", false, false, false, 65);
                                    echo " aria-hidden=\"true\" tabindex=\"-1\"></a>
                              ";
                                }
                                // line 67
                                echo "                              ";
                                if (((twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot1", [], "any", false, false, false, 67) || twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot2", [], "any", false, false, false, 67)) || twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot3", [], "any", false, false, false, 67))) {
                                    // line 68
                                    echo "                                <div class=\"hotspot-container\">
                                  ";
                                    // line 69
                                    if (twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot1", [], "any", false, false, false, 69)) {
                                        // line 70
                                        echo "                                    ";
                                        if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot1Type", [], "any", false, false, false, 70) == "link")) {
                                            // line 71
                                            echo "                                      <a href=\"";
                                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot1Link", [], "any", false, false, false, 71), "href", [], "any", false, false, false, 71);
                                            echo "\" ";
                                            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot1Link", [], "any", false, false, false, 71)], "method", false, false, false, 71);
                                            echo " aria-hidden=\"true\" tabindex=\"-1\" class=\"hotspot hotspot-1\" data-toggle=\"tooltip-hover\" data-html=\"true\" data-tooltip-class=\"hotspot-tooltip hotspot-tooltip-1\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot1Content", [], "any", false, false, false, 71);
                                            echo "\"><span></span></a>
                                    ";
                                        } elseif ((twig_get_attribute($this->env, $this->source,                                         // line 72
$context["subitem"], "hotspot1Type", [], "any", false, false, false, 72) == "product")) {
                                            // line 73
                                            echo "                                      <a role=\"button\" aria-hidden=\"true\" tabindex=\"-1\" class=\"hotspot hotspot-1\" data-toggle=\"tooltip-hover\" data-html=\"true\" data-tooltip-class=\"hotspot-tooltip hotspot-tooltip-1\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot1Content", [], "any", false, false, false, 73);
                                            echo "\" ";
                                            if (twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot1Product", [], "any", false, false, false, 73)) {
                                                echo "onclick=\"quickview('";
                                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot1Product", [], "any", false, false, false, 73);
                                                echo "')\"";
                                            }
                                            echo "><span></span></a>
                                    ";
                                        }
                                        // line 75
                                        echo "                                  ";
                                    }
                                    // line 76
                                    echo "                                  ";
                                    if (twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot2", [], "any", false, false, false, 76)) {
                                        // line 77
                                        echo "                                    ";
                                        if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot2Type", [], "any", false, false, false, 77) == "link")) {
                                            // line 78
                                            echo "                                      <a href=\"";
                                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot2Link", [], "any", false, false, false, 78), "href", [], "any", false, false, false, 78);
                                            echo "\" ";
                                            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot2Link", [], "any", false, false, false, 78)], "method", false, false, false, 78);
                                            echo " aria-hidden=\"true\" tabindex=\"-1\" class=\"hotspot hotspot-2\" data-toggle=\"tooltip-click\" data-html=\"true\" data-tooltip-class=\"hotspot-tooltip hotspot-tooltip-1\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot2Content", [], "any", false, false, false, 78);
                                            echo "\"><span></span></a>
                                    ";
                                        } elseif ((twig_get_attribute($this->env, $this->source,                                         // line 79
$context["subitem"], "hotspot2Type", [], "any", false, false, false, 79) == "product")) {
                                            // line 80
                                            echo "                                      <a role=\"button\" aria-hidden=\"true\" tabindex=\"-1\" class=\"hotspot hotspot-2\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"hotspot-tooltip hotspot-tooltip-2\" data-html=\"true\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot2Content", [], "any", false, false, false, 80);
                                            echo "\" ";
                                            if (twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot2Product", [], "any", false, false, false, 80)) {
                                                echo "onclick=\"quickview('";
                                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot2Product", [], "any", false, false, false, 80);
                                                echo "')\"";
                                            }
                                            echo "><span></span></a>
                                    ";
                                        }
                                        // line 82
                                        echo "                                  ";
                                    }
                                    // line 83
                                    echo "                                  ";
                                    if (twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot3", [], "any", false, false, false, 83)) {
                                        // line 84
                                        echo "                                    ";
                                        if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot3Type", [], "any", false, false, false, 84) == "link")) {
                                            // line 85
                                            echo "                                      <a href=\"";
                                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot3Link", [], "any", false, false, false, 85), "href", [], "any", false, false, false, 85);
                                            echo "\" ";
                                            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot3Link", [], "any", false, false, false, 85)], "method", false, false, false, 85);
                                            echo " aria-hidden=\"true\" tabindex=\"-1\" class=\"hotspot hotspot-3\" data-toggle=\"tooltip-hover\" data-html=\"true\" data-tooltip-class=\"hotspot-tooltip hotspot-tooltip-1\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot3Content", [], "any", false, false, false, 85);
                                            echo "\"><span></span></a>
                                    ";
                                        } elseif ((twig_get_attribute($this->env, $this->source,                                         // line 86
$context["subitem"], "hotspot3Type", [], "any", false, false, false, 86) == "product")) {
                                            // line 87
                                            echo "                                      <a role=\"button\" aria-hidden=\"true\" tabindex=\"-1\" class=\"hotspot hotspot-3\" ";
                                            if (twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot3Product", [], "any", false, false, false, 87)) {
                                                echo "onclick=\"quickview('";
                                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot3Product", [], "any", false, false, false, 87);
                                                echo "')\"";
                                            }
                                            echo " data-toggle=\"tooltip-hover\" data-html=\"true\" data-tooltip-class=\"hotspot-tooltip hotspot-tooltip-3\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "hotspot3Content", [], "any", false, false, false, 87);
                                            echo "\"><span></span></a>
                                    ";
                                        }
                                        // line 89
                                        echo "                                  ";
                                    }
                                    // line 90
                                    echo "                                </div>
                              ";
                                }
                                // line 92
                                echo "                            </figure>
                          ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 93
$context["subitem"], "type", [], "any", false, false, false, 93) == "video")) {
                                // line 94
                                echo "                            <div class=\"";
                                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 94)], "method", false, false, false, 94);
                                echo "\" ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 94)) {
                                    echo "data-swiper-parallax-x=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 94);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 94)) {
                                    echo "data-swiper-parallax-y=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 94);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 94)) {
                                    echo "data-swiper-parallax-opacity=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 94);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 94)) {
                                    echo "data-swiper-parallax-scale=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 94);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 94)) {
                                    echo "data-swiper-parallax-duration=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 94);
                                    echo "\"";
                                }
                                echo ">
                              ";
                                // line 95
                                if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "videoType", [], "any", false, false, false, 95) == "html5")) {
                                    // line 96
                                    echo "                                <video class=\"lazyload\" autoplay playsinline muted controls data-src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "videoSrc", [], "any", false, false, false, 96);
                                    echo "\"></video>
                              ";
                                } elseif ((twig_get_attribute($this->env, $this->source,                                 // line 97
$context["subitem"], "videoType", [], "any", false, false, false, 97) == "youtube")) {
                                    // line 98
                                    echo "                                <iframe class=\"lazyload\" src=\"https://www.youtube.com/embed/";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "videoSrc", [], "any", false, false, false, 98);
                                    echo "?hd=1&wmode=opaque&controls=1&showinfo=0&autoplay=1&mute=1\"></iframe>
                              ";
                                } elseif ((twig_get_attribute($this->env, $this->source,                                 // line 99
$context["subitem"], "videoType", [], "any", false, false, false, 99) == "vimeo")) {
                                    // line 100
                                    echo "                                <iframe class=\"lazyload\" data-src=\"https://player.vimeo.com/video/";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "videoSrc", [], "any", false, false, false, 100);
                                    echo "?autoplay=1&muted=1\"></iframe>
                              ";
                                }
                                // line 102
                                echo "                            </div>
                          ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 103
$context["subitem"], "type", [], "any", false, false, false, 103) == "icon")) {
                                // line 104
                                echo "                            <div class=\"";
                                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 104)], "method", false, false, false, 104);
                                echo "\" ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 104)) {
                                    echo "data-swiper-parallax-x=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 104);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 104)) {
                                    echo "data-swiper-parallax-y=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 104);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 104)) {
                                    echo "data-swiper-parallax-opacity=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 104);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 104)) {
                                    echo "data-swiper-parallax-scale=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 104);
                                    echo "\"";
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 104)) {
                                    echo "data-swiper-parallax-duration=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 104);
                                    echo "\"";
                                }
                                echo ">
                              <div class=\"can-rotate\">
                                <span class=\"has-icon\"></span>

                                ";
                                // line 108
                                if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "shapeType", [], "any", false, false, false, 108) == "icon")) {
                                    // line 109
                                    echo "                                ";
                                }
                                // line 110
                                echo "                                ";
                                // line 111
                                echo "                                ";
                                // line 112
                                echo "                                ";
                                // line 113
                                echo "                                ";
                                if (twig_get_attribute($this->env, $this->source, $context["subitem"], "iconText", [], "any", false, false, false, 113)) {
                                    // line 114
                                    echo "                                  <span class=\"has-text\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "iconText", [], "any", false, false, false, 114);
                                    echo "</span>
                                ";
                                }
                                // line 116
                                echo "                              </div>
                            </div>
                          ";
                            }
                            // line 119
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 120
                        echo "                      </div>
                    </div>
                  ";
                    }
                    // line 123
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_2 = $context["item"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["items_absolute"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 125
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "type", [], "any", false, false, false, 125) == "icon")) {
                        // line 126
                        echo "                    <div class=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 126)], "method", false, false, false, 126);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 126)) {
                            echo "data-swiper-parallax-x=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 126);
                            echo "\"";
                        }
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 126)) {
                            echo "data-swiper-parallax-y=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 126);
                            echo "\"";
                        }
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 126)) {
                            echo "data-swiper-parallax-opacity=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 126);
                            echo "\"";
                        }
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 126)) {
                            echo "data-swiper-parallax-scale=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 126);
                            echo "\"";
                        }
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 126)) {
                            echo "data-swiper-parallax-duration=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 126);
                            echo "\"";
                        }
                        echo ">
                      <div class=\"can-rotate\">
                        <span class=\"has-icon\"></span>

                        ";
                        // line 130
                        if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "shapeType", [], "any", false, false, false, 130) == "icon")) {
                            // line 131
                            echo "                        ";
                        }
                        // line 132
                        echo "                        ";
                        // line 133
                        echo "                        ";
                        // line 134
                        echo "                        ";
                        // line 135
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["subitem"], "iconText", [], "any", false, false, false, 135)) {
                            // line 136
                            echo "                          <span class=\"has-text\">";
                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "iconText", [], "any", false, false, false, 136);
                            echo "</span>
                        ";
                        }
                        // line 138
                        echo "                      </div>
                    </div>
                  ";
                    }
                    // line 141
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "              </div>
              ";
            }
            // line 144
            echo "            </div>
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
        // line 147
        echo "      </div>
      ";
        // line 148
        if ((($context["staticText"] ?? null) || ($context["staticText2"] ?? null))) {
            // line 149
            echo "        <div class=\"static-text-wrapper\">
          ";
            // line 150
            if ((($context["staticText"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["staticTextLink"] ?? null), "href", [], "any", false, false, false, 150))) {
                // line 151
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["staticTextLink"] ?? null), "href", [], "any", false, false, false, 151);
                echo "\" class=\"slider-static-text static-text-1\"><span>";
                echo ($context["staticText"] ?? null);
                echo "</span></a>
          ";
            } elseif (            // line 152
($context["staticText"] ?? null)) {
                // line 153
                echo "            <div class=\"slider-static-text static-text-1\"><span>";
                echo ($context["staticText"] ?? null);
                echo "</span></div>
          ";
            }
            // line 155
            echo "          ";
            if ((($context["static2Text"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["static2TextLink"] ?? null), "href", [], "any", false, false, false, 155))) {
                // line 156
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["static2TextLink"] ?? null), "href", [], "any", false, false, false, 156);
                echo "\" class=\"slider-static-text static-text-2\"><span>";
                echo ($context["static2Text"] ?? null);
                echo "</span></a>
          ";
            } elseif (            // line 157
($context["static2Text"] ?? null)) {
                // line 158
                echo "            <div class=\"slider-static-text static-text-2\"><span>";
                echo ($context["static2Text"] ?? null);
                echo "</span></div>
          ";
            }
            // line 160
            echo "        </div>
      ";
        }
        // line 162
        echo "    </div>
    ";
        // line 163
        if (($context["buttonsStatus"] ?? null)) {
            // line 164
            echo "      <div class=\"swiper-buttons slider-navigation\">
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
      </div>
    ";
        }
        // line 169
        echo "    ";
        if ((($context["pagination"] ?? null) != "none")) {
            // line 170
            echo "      <div class=\"swiper-pagination-wrapper\">
        <div class=\"swiper-pagination ";
            // line 171
            if (((($context["pagination"] ?? null) == "bullets") && (($context["bulletsType"] ?? null) == "dots"))) {
                echo "swiper-pagination-dots";
            }
            echo "\"></div>
      </div>
    ";
        }
        // line 174
        echo "    ";
        if ((($context["autoplay"] ?? null) && (($context["timerPlacement"] ?? null) == "slider"))) {
            // line 175
            echo "      <div class=\"slider-timer\">
        <div class=\"swiper-timeline\"></div>
      </div>
    ";
        }
        // line 179
        echo "    ";
        if (($context["scrollbar"] ?? null)) {
            // line 180
            echo "      <div class=\"swiper-scrollbar\"></div>
    ";
        }
        // line 182
        echo "  </div>
  ";
        // line 183
        if (($context["thumbnails"] ?? null)) {
            // line 184
            echo "    <div class=\"slider-thumbs\">
      <div class=\"swiper-container\">
        <div class=\"swiper-wrapper\">
          ";
            // line 187
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
                // line 188
                echo "            <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "thumb_classes", [], "any", false, false, false, 188)], "method", false, false, false, 188);
                echo " ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 188)) {
                    echo "swiper-slide-active";
                }
                echo "\" data-index=\"";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 188);
                echo "\">
              ";
                // line 189
                if (($context["lazyLoad"] ?? null)) {
                    // line 190
                    echo "                <img class=\"lazyload\" src=\"";
                    echo ($context["lazyload_thumb_placeholder"] ?? null);
                    echo "\" data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 190);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 190);
                    echo " 2x\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["thumbnailsDimensions"] ?? null), "width", [], "any", false, false, false, 190);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["thumbnailsDimensions"] ?? null), "height", [], "any", false, false, false, 190);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 190);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 190);
                    echo "\"/>
              ";
                } else {
                    // line 192
                    echo "                <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 192);
                    echo "\" srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 192);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 192);
                    echo " 2x\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["thumbnailsDimensions"] ?? null), "width", [], "any", false, false, false, 192);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["thumbnailsDimensions"] ?? null), "height", [], "any", false, false, false, 192);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 192);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 192);
                    echo "\"/>
              ";
                }
                // line 194
                echo "              <div class=\"thumb-text\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumbText", [], "any", false, false, false, 194);
                echo "</div>
              ";
                // line 195
                if ((($context["autoplay"] ?? null) && (($context["timerPlacement"] ?? null) == "thumbs"))) {
                    // line 196
                    echo "                <div class=\"slider-timer\">
                  <div class=\"swiper-timeline\"></div>
                </div>
              ";
                }
                // line 200
                echo "            </div>
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
            // line 202
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 206
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/module/slider.twig";
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
        return array (  1055 => 206,  1049 => 202,  1034 => 200,  1028 => 196,  1026 => 195,  1021 => 194,  1003 => 192,  985 => 190,  983 => 189,  972 => 188,  955 => 187,  950 => 184,  948 => 183,  945 => 182,  941 => 180,  938 => 179,  932 => 175,  929 => 174,  921 => 171,  918 => 170,  915 => 169,  908 => 164,  906 => 163,  903 => 162,  899 => 160,  893 => 158,  891 => 157,  884 => 156,  881 => 155,  875 => 153,  873 => 152,  866 => 151,  864 => 150,  861 => 149,  859 => 148,  856 => 147,  840 => 144,  836 => 142,  830 => 141,  825 => 138,  819 => 136,  816 => 135,  814 => 134,  812 => 133,  810 => 132,  807 => 131,  805 => 130,  767 => 126,  764 => 125,  759 => 124,  753 => 123,  748 => 120,  742 => 119,  737 => 116,  731 => 114,  728 => 113,  726 => 112,  724 => 111,  722 => 110,  719 => 109,  717 => 108,  679 => 104,  677 => 103,  674 => 102,  668 => 100,  666 => 99,  661 => 98,  659 => 97,  654 => 96,  652 => 95,  617 => 94,  615 => 93,  612 => 92,  608 => 90,  605 => 89,  593 => 87,  591 => 86,  582 => 85,  579 => 84,  576 => 83,  573 => 82,  561 => 80,  559 => 79,  550 => 78,  547 => 77,  544 => 76,  541 => 75,  529 => 73,  527 => 72,  518 => 71,  515 => 70,  513 => 69,  510 => 68,  507 => 67,  499 => 65,  496 => 64,  490 => 62,  488 => 61,  474 => 60,  439 => 59,  437 => 58,  433 => 56,  417 => 54,  414 => 53,  398 => 51,  396 => 50,  360 => 48,  358 => 47,  353 => 45,  318 => 44,  316 => 43,  311 => 41,  276 => 40,  273 => 39,  269 => 38,  232 => 35,  229 => 34,  225 => 33,  222 => 32,  220 => 31,  217 => 30,  209 => 28,  207 => 27,  204 => 26,  192 => 24,  189 => 23,  171 => 21,  153 => 19,  150 => 18,  148 => 17,  114 => 16,  105 => 15,  88 => 14,  83 => 13,  80 => 12,  74 => 10,  68 => 8,  65 => 7,  63 => 6,  54 => 4,  48 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/slider.twig", "");
    }
}
