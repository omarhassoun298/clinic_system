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

/* journal3/template/product/product.twig */
class __TwigTemplate_788db00055f996760caa23fdae40e45d extends Template
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
        // line 66
        echo ($context["header"] ?? null);
        echo "
";
        // line 67
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 67) == "top")) {
            // line 68
            echo "  <h1 class=\"title page-title ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 68);
            echo "\"><span class=\"page-title-text\">";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 70
        echo "<div class=\"breadcrumbs ";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["breadcrumbs_color_scheme"], "method", false, false, false, 70);
        echo "\">
  <ul class=\"breadcrumb\">
    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 73
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 73);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 73);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "  </ul>
</div>
";
        // line 77
        echo ($context["journal3_top"] ?? null);
        echo "
<div id=\"product-product\" class=\"container\">
  <div class=\"row\">";
        // line 79
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 80
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 81
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 82
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 83
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 84
            echo "    ";
        } else {
            // line 85
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 86
            echo "    ";
        }
        // line 87
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 88
        if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 88) == "default") || twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_quickview_popup", [], "any", false, false, false, 88))) {
            // line 89
            echo "      <h1 class=\"title page-title ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 89);
            echo "\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 91
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 92
        echo ($context["journal3_product_tabs_blocks_content_top"] ?? null);
        echo "
      <div class=\"product-info ";
        // line 93
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["journal3_product_classes"] ?? null)], "method", false, false, false, 93);
        echo "\">
        ";
        // line 94
        if ( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_options_popup", [], "any", false, false, false, 94)) {
            // line 95
            echo "        <div class=\"product-left\">
          <div class=\"product-left-wrapper\">
            <div class=\"product-image direction-";
            // line 97
            echo ($context["journal3_images_additional_direction"] ?? null);
            echo " position-";
            echo ($context["journal3_images_additional_position"] ?? null);
            echo "\">
              <div class=\"swiper main-image\" data-options='";
            // line 98
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "jsonAttrs", [($context["journal3_images_carousel"] ?? null)], "method", false, false, false, 98);
            echo "' ";
            echo ($context["journal3_images_style"] ?? null);
            echo ">
                <div class=\"swiper-container\" ";
            // line 99
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_rtl", [], "any", false, false, false, 99)) {
                echo "dir=\"rtl\"";
            }
            echo ">
                  <div class=\"swiper-wrapper\">
                    ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["image"]) {
                // line 102
                echo "                      <div class=\"swiper-slide\" ";
                if (($context["journal3_images_gallery"] ?? null)) {
                    echo "data-gallery=\".lightgallery-product-images\" data-index=\"";
                    echo $context["index"];
                    echo "\"";
                }
                echo ">
                        ";
                // line 103
                if (($context["index"] && ($context["journal3_image_placeholder"] ?? null))) {
                    // line 104
                    echo "                          <img class=\"lazyload\" src=\"";
                    echo ($context["journal3_image_placeholder"] ?? null);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 104);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 104)) {
                        echo "data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 104);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 104);
                        echo " 2x\"";
                    }
                    echo " width=\"";
                    echo ($context["journal3_image_thumb_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["journal3_image_thumb_height"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" data-largeimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 104);
                    echo "\"/>
                        ";
                } else {
                    // line 106
                    echo "                          <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 106);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 106)) {
                        echo "srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 106);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 106);
                        echo " 2x\"";
                    }
                    echo " width=\"";
                    echo ($context["journal3_image_thumb_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["journal3_image_thumb_height"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" data-largeimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 106);
                    echo "\"/>
                        ";
                }
                // line 108
                echo "                      </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                  </div>
                </div>
                <div class=\"swiper-controls\">
                  <div class=\"swiper-buttons\">
                    <div class=\"swiper-button-prev\"></div>
                    <div class=\"swiper-button-next\"></div>
                  </div>
                  <div class=\"swiper-pagination\"></div>
                </div>
                ";
            // line 119
            if (twig_get_attribute($this->env, $this->source, ($context["journal3_product_labels"] ?? null), "default", [], "any", false, false, false, 119)) {
                // line 120
                echo "                  <div class=\"product-labels\">
                    ";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["journal3_product_labels"] ?? null), "default", [], "any", false, false, false, 121));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 122
                    echo "                      <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 122);
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "positionDefault", [], "any", false, false, false, 122);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["label"], "classes", [], "any", false, false, false, 122)], "method", false, false, false, 122);
                    echo "\"><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 122);
                    echo "</strong></span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "                  </div>
                ";
            }
            // line 126
            echo "              </div>
              ";
            // line 127
            if (($context["journal3_images_additional"] ?? null)) {
                // line 128
                echo "                ";
                if (($context["journal3_images_additional_carousel"] ?? null)) {
                    // line 129
                    echo "                  <div class=\"swiper additional-images\" data-options='";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "jsonAttrs", [($context["journal3_images_additional_carousel_options"] ?? null)], "method", false, false, false, 129);
                    echo "' ";
                    echo ($context["journal3_images_additional_style"] ?? null);
                    echo ">
                    <div class=\"swiper-container\" ";
                    // line 130
                    if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_rtl", [], "any", false, false, false, 130)) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
                      <div class=\"swiper-wrapper\">
                        ";
                    // line 132
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["journal3_images_additional"] ?? null));
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
                    foreach ($context['_seq'] as $context["index"] => $context["image"]) {
                        // line 133
                        echo "                          <div class=\"swiper-slide additional-image ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 133)) {
                            echo "swiper-slide-active";
                        }
                        echo "\" data-index=\"";
                        echo $context["index"];
                        echo "\">
                            <img src=\"";
                        // line 134
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "additional", [], "any", false, false, false, 134);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["image"], "additional2x", [], "any", false, false, false, 134)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "additional", [], "any", false, false, false, 134);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "additional2x", [], "any", false, false, false, 134);
                            echo " 2x\"";
                        }
                        echo " width=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_additional.width"], "method", false, false, false, 134);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_additional.height"], "method", false, false, false, 134);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\"/>
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
                    unset($context['_seq'], $context['_iterated'], $context['index'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo "                      </div>
                    </div>
                    <div class=\"swiper-buttons\">
                      <div class=\"swiper-button-prev\"></div>
                      <div class=\"swiper-button-next\"></div>
                    </div>
                    <div class=\"swiper-pagination\"></div>
                  </div>
                ";
                } else {
                    // line 146
                    echo "                  <div class=\"additional-images\">
                    ";
                    // line 147
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["journal3_images_additional"] ?? null));
                    foreach ($context['_seq'] as $context["index"] => $context["image"]) {
                        // line 148
                        echo "                      <div class=\"additional-image\" data-index=\"";
                        echo $context["index"];
                        echo "\">
                        <img src=\"";
                        // line 149
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "additional", [], "any", false, false, false, 149);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["image"], "additional2x", [], "any", false, false, false, 149)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "additional", [], "any", false, false, false, 149);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "additional2x", [], "any", false, false, false, 149);
                            echo " 2x\"";
                        }
                        echo " width=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_additional.width"], "method", false, false, false, 149);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_additional.height"], "method", false, false, false, 149);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\"/>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['index'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    echo "                  </div>
                ";
                }
                // line 154
                echo "              ";
            }
            // line 155
            echo "            </div>

            ";
            // line 157
            if (($context["journal3_images_gallery"] ?? null)) {
                // line 158
                echo "              <div class=\"lightgallery lightgallery-product-images\" data-images='";
                echo twig_escape_filter($this->env, json_encode(($context["journal3_images_gallery"] ?? null)));
                echo "' data-options='";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "jsonAttrs", [($context["journal3_images_gallery_options"] ?? null)], "method", false, false, false, 158);
                echo "'></div>
            ";
            }
            // line 160
            echo "
            ";
            // line 161
            echo ($context["journal3_product_tabs_blocks_image"] ?? null);
            echo "

            ";
            // line 163
            if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_quickview_popup", [], "any", false, false, false, 163)) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewDescription"], "method", false, false, false, 163)) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewDescriptionPosition"], "method", false, false, false, 163) == "image"))) {
                // line 164
                echo "              <div class=\"description ";
                echo ($context["quickviewExpand"] ?? null);
                echo "\">
                <div class=\"expand-block\">
                  <div class=\"expand-content\">";
                // line 166
                echo ($context["description"] ?? null);
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewExpandButton"], "method", false, false, false, 166)) {
                    echo "<div class=\"block-expand-overlay\"><a class=\"block-expand btn\" role=\"button\" aria-label=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalExpandButtonText"], "method", false, false, false, 166);
                    echo "\"></a></div>";
                }
                echo "</div>
                </div>
              </div>
            ";
            }
            // line 170
            echo "
            ";
            // line 171
            if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 171)) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 171) == "image"))) {
                // line 172
                echo "              <div class=\"tags\">
                <span class=\"tags-title\">";
                // line 173
                echo ($context["text_tags"] ?? null);
                echo "</span>
                ";
                // line 174
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 175
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 175);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 175);
                    echo "</a>
                  ";
                    // line 176
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 176)) {
                        echo "<b>,</b>";
                    }
                    // line 177
                    echo "                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo "              </div>
            ";
            }
            // line 180
            echo "
          </div>
        </div>
        ";
        }
        // line 184
        echo "        <div class=\"product-right\">
          <div class=\"product-right-wrapper\">
              <div id=\"product\" class=\"product-details\">
                ";
        // line 187
        if ( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_options_popup", [], "any", false, false, false, 187)) {
            // line 188
            echo "                  <div class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</div>
                ";
        }
        // line 190
        echo "
                ";
        // line 191
        echo ($context["journal3_product_tabs_blocks_top"] ?? null);
        echo "

                ";
        // line 193
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_quickview_popup", [], "any", false, false, false, 193)) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewDescription"], "method", false, false, false, 193)) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewDescriptionPosition"], "method", false, false, false, 193) == "top"))) {
            // line 194
            echo "                  <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
                    <div class=\"expand-block\">
                      <div class=\"expand-content\">";
            // line 196
            echo ($context["description"] ?? null);
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewExpandButton"], "method", false, false, false, 196)) {
                echo "<div class=\"block-expand-overlay\"><a class=\"block-expand btn\" role=\"button\" aria-label=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalExpandButtonText"], "method", false, false, false, 196);
                echo "\"></a></div>";
            }
            echo "</div>
                    </div>
                  </div>
                ";
        }
        // line 200
        echo "
                ";
        // line 201
        if (twig_get_attribute($this->env, $this->source, ($context["journal3_product_labels"] ?? null), "group_outside", [], "any", false, false, false, 201)) {
            // line 202
            echo "                  <div class=\"product-labels-outside\">
                    ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["journal3_product_labels"] ?? null), "group_outside", [], "any", false, false, false, 203));
            foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                // line 204
                echo "                      <span class=\"product-label product-label-";
                echo $context["id"];
                echo " product-label-";
                echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 204);
                echo " product-label-";
                echo twig_get_attribute($this->env, $this->source, $context["label"], "positionDefault", [], "any", false, false, false, 204);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["label"], "classes", [], "any", false, false, false, 204)], "method", false, false, false, 204);
                echo "\"><strong><a class=\"label-link\" ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["label"], "link", [], "any", false, false, false, 204), "href", [], "any", false, false, false, 204)) {
                    echo "href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["label"], "link", [], "any", false, false, false, 204), "href", [], "any", false, false, false, 204);
                    echo "\"";
                }
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["label"], "link", [], "any", false, false, false, 204)], "method", false, false, false, 204);
                echo " aria-hidden=\"true\" tabindex=\"-1\">";
                echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 204);
                echo "</a></strong></span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "                  </div>
                ";
        }
        // line 208
        echo "
                ";
        // line 209
        if ((($context["journal3_product_stats_position"] ?? null) == "default")) {
            // line 210
            echo "                  ";
            echo twig_call_macro($macros["_self"], "macro_productStats", [$context], 210, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 212
        echo "
                ";
        // line 213
        if ((($context["review_status"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 213))) {
            // line 214
            echo "                  <div class=\"rating rating-page\">
                    <div class=\"rating-stars\">
                      ";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 217
                echo "                        ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 218
                    echo "                          <span class=\"fa fa-stack\">
                    <em class=\"fa fa-star-o fa-stack-1x\"></em>
                  </span>";
                } else {
                    // line 221
                    echo "                          <span class=\"fa fa-stack\">
                    <em class=\"fa fa-star fa-stack-1x\"></em>
                    <em class=\"fa fa-star-o fa-stack-1x\"></em>
                  </span>
                        ";
                }
                // line 226
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "                    </div>
                    <div class=\"review-links\">
                      <a role=\"button\">";
            // line 229
            echo ($context["reviews"] ?? null);
            echo "</a>
                      <b>";
            // line 230
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "RatingSeparator")], "method", false, false, false, 230);
            echo "</b>
                      <a role=\"button\">";
            // line 231
            echo ($context["text_write"] ?? null);
            echo "</a>
                    </div>
                  </div>
                ";
        }
        // line 235
        echo "
                ";
        // line 236
        if (($context["journal3_product_countdown"] ?? null)) {
            // line 237
            echo "                  <div class=\"countdown-wrapper\">
                    ";
            // line 238
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 238)) {
                // line 239
                echo "                      <h5 class=\"countdown-title title\">";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 239);
                echo "</h5>
                    ";
            }
            // line 241
            echo "                    <div class=\"countdown\" data-date=\"";
            echo ($context["journal3_product_countdown"] ?? null);
            echo "\">
                      <div><em class=\"fa fa-spinner fa-spin\"></em><span>";
            // line 242
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["countdownDay"], "method", false, false, false, 242);
            echo "</span></div>
                      <div><em class=\"fa fa-spinner fa-spin\"></em><span>";
            // line 243
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["countdownHour"], "method", false, false, false, 243);
            echo "</span></div>
                      <div><em class=\"fa fa-spinner fa-spin\"></em><span>";
            // line 244
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["countdownMin"], "method", false, false, false, 244);
            echo "</span></div>
                      <div><em class=\"fa fa-spinner fa-spin\"></em><span>";
            // line 245
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["countdownSec"], "method", false, false, false, 245);
            echo "</span></div>
                    </div>
                  </div>
                ";
        }
        // line 249
        echo "
                ";
        // line 250
        if ((($context["price"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_options_popup", [], "any", false, false, false, 250))) {
            // line 251
            echo "                  <div class=\"product-price-group\">
                    <div class=\"price-wrapper\">
                      ";
            // line 253
            if (twig_get_attribute($this->env, $this->source, ($context["journal3_product_labels"] ?? null), "price", [], "any", false, false, false, 253)) {
                // line 254
                echo "                        <div class=\"product-labels-price\">
                          ";
                // line 255
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["journal3_product_labels"] ?? null), "price", [], "any", false, false, false, 255));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 256
                    echo "                            <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 256);
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "positionDefault", [], "any", false, false, false, 256);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["label"], "classes", [], "any", false, false, false, 256)], "method", false, false, false, 256);
                    echo "\"><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 256);
                    echo "</strong></span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 258
                echo "                        </div>
                      ";
            }
            // line 260
            echo "                      <div class=\"price-group\">
                        ";
            // line 261
            if ( !($context["special"] ?? null)) {
                // line 262
                echo "                          <div class=\"product-price\">";
                echo ($context["price"] ?? null);
                echo "</div>
                        ";
            } else {
                // line 264
                echo "                          <div class=\"product-price-new\">";
                echo ($context["special"] ?? null);
                echo "</div>
                          <div class=\"product-price-old\">";
                // line 265
                echo ($context["price"] ?? null);
                echo "</div>
                        ";
            }
            // line 267
            echo "                      </div>
                      ";
            // line 268
            if (($context["tax"] ?? null)) {
                // line 269
                echo "                        <div class=\"product-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</div>
                      ";
            }
            // line 271
            echo "                      ";
            if (($context["points"] ?? null)) {
                // line 272
                echo "                        <div class=\"product-points\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</div>
                      ";
            }
            // line 274
            echo "
                      ";
            // line 275
            if (($context["discounts"] ?? null)) {
                // line 276
                echo "                        <div class=\"discounts\">
                          ";
                // line 277
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 278
                    echo "                            <div class=\"product-discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 278);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 278);
                    echo "</div>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 280
                echo "                        </div>
                      ";
            }
            // line 282
            echo "                    </div>
                    ";
            // line 283
            if ((($context["journal3_product_stats_position"] ?? null) == "price")) {
                // line 284
                echo "                      ";
                echo twig_call_macro($macros["_self"], "macro_productStats", [$context], 284, $context, $this->getSourceContext());
                echo "
                    ";
            }
            // line 286
            echo "                  </div>
                ";
        }
        // line 288
        echo "
                ";
        // line 289
        if (($context["options"] ?? null)) {
            // line 290
            echo "                  <div class=\"product-options\">
                    <h3 class=\"options-title title\">";
            // line 291
            echo ($context["text_option"] ?? null);
            echo "</h3>
                    ";
            // line 292
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 293
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 293) == "select")) {
                    // line 294
                    echo "                        <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 294)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 294);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "OptionsPushSelect")], "method", false, false, false, 294)) {
                        echo "push-option";
                    }
                    echo "\">
                          <label class=\"control-label\" for=\"input-option";
                    // line 295
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 295);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 295);
                    echo "</label>
                          <select name=\"option[";
                    // line 296
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 296);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 296);
                    echo "\" class=\"form-control\">
                            <option value=\"\">";
                    // line 297
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                            ";
                    // line 298
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 298));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 299
                        echo "                              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 299);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 299);
                        echo "
                                ";
                        // line 300
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 300) && ($context["optionPrice"] ?? null))) {
                            // line 301
                            echo "                                  (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 301);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 301);
                            echo ")
                                ";
                        }
                        // line 302
                        echo " </option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 304
                    echo "                          </select>
                          ";
                    // line 305
                    if (($context["journal3_is_oc4"] ?? null)) {
                        // line 306
                        echo "                          <div id=\"error-option-";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 306);
                        echo "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 308
                    echo "                        </div>
                      ";
                }
                // line 310
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 310) == "radio")) {
                    // line 311
                    echo "                        <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 311)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 311);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "OptionsPushRadio")], "method", false, false, false, 311)) {
                        echo "push-option";
                    }
                    echo "\">
                          <label class=\"control-label\">";
                    // line 312
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 312);
                    echo "</label>
                          <div id=\"input-option";
                    // line 313
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 313);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 313));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 314
                        echo "                              <div class=\"radio\">
                                <label>
                                  <input type=\"radio\" name=\"option[";
                        // line 316
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 316);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 316);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 316);
                        echo "\" aria-label=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 316);
                        echo "\" />
                                  <span class=\"option-wrapper ";
                        // line 317
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 317)) {
                            echo "push-option-image";
                        }
                        echo "\">
                    ";
                        // line 318
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 318)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 318);
                            echo "\" srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 318);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image2x", [], "any", false, false, false, 318);
                            echo " 2x\" width=\"";
                            echo ($context["journal3_image_options_width"] ?? null);
                            echo "\" height=\"";
                            echo ($context["journal3_image_options_height"] ?? null);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 318);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 318) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 318);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 318);
                                echo " ";
                            }
                            echo "\" ";
                            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 318)) {
                                echo "data-toggle=\"tooltip-hover\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 318);
                                echo "\"";
                            }
                            echo " title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 318);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 318) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 318);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 318);
                                echo ") ";
                            }
                            echo "\"> ";
                        }
                        // line 319
                        echo "                    <span class=\"option-value\">
                    ";
                        // line 320
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 320);
                        echo "
                      ";
                        // line 321
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 321) && ($context["optionPrice"] ?? null))) {
                            // line 322
                            echo "                        <span class=\"option-price\">
                        (";
                            // line 323
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 323);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 323);
                            echo ")
                      </span>
                      ";
                        }
                        // line 326
                        echo "                  </span>
                  </span>
                                </label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 330
                    echo " </div>
                          ";
                    // line 331
                    if (($context["journal3_is_oc4"] ?? null)) {
                        // line 332
                        echo "                          <div id=\"error-option-";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 332);
                        echo "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 334
                    echo "                        </div>
                      ";
                }
                // line 336
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 336) == "checkbox")) {
                    // line 337
                    echo "                        <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 337)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 337);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "OptionsPushCheckbox")], "method", false, false, false, 337)) {
                        echo "push-option";
                    }
                    echo "\">
                          <label class=\"control-label\">";
                    // line 338
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 338);
                    echo "</label>
                          <div id=\"input-option";
                    // line 339
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 339);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 339));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 340
                        echo "                              <div class=\"checkbox\">
                                <label>
                                  <input type=\"checkbox\" name=\"option[";
                        // line 342
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 342);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 342);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 342);
                        echo "\" aria-label=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 342);
                        echo "\" />
                                  <span class=\"option-wrapper ";
                        // line 343
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 343)) {
                            echo "push-option-image";
                        }
                        echo "\">
                    ";
                        // line 344
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 344)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 344);
                            echo "\" srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 344);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image2x", [], "any", false, false, false, 344);
                            echo " 2x\" width=\"";
                            echo ($context["journal3_image_options_width"] ?? null);
                            echo "\" height=\"";
                            echo ($context["journal3_image_options_height"] ?? null);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 344);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 344) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 344);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 344);
                                echo " ";
                            }
                            echo "\" ";
                            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 344)) {
                                echo "data-toggle=\"tooltip-hover\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 344);
                                echo "\"";
                            }
                            echo " title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 344);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 344) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 344);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 344);
                                echo ") ";
                            }
                            echo "\"> ";
                        }
                        // line 345
                        echo "                    <span class=\"option-value\">
                    ";
                        // line 346
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 346);
                        echo "
                      ";
                        // line 347
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 347) && ($context["optionPrice"] ?? null))) {
                            // line 348
                            echo "                        <span class=\"option-price\">(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 348);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 348);
                            echo ")</span>
                      ";
                        }
                        // line 350
                        echo "                  </span>
                  </span>
                                </label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 354
                    echo " </div>
                          ";
                    // line 355
                    if (($context["journal3_is_oc4"] ?? null)) {
                        // line 356
                        echo "                          <div id=\"error-option-";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 356);
                        echo "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 358
                    echo "                        </div>
                      ";
                }
                // line 360
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 360) == "text")) {
                    // line 361
                    echo "                        <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 361)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 361);
                    echo "\">
                          <label class=\"control-label\" for=\"input-option";
                    // line 362
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 362);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 362);
                    echo "</label>
                          <input type=\"text\" name=\"option[";
                    // line 363
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 363);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 363);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 363);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 363);
                    echo "\" class=\"form-control\" >
                          ";
                    // line 364
                    if (($context["journal3_is_oc4"] ?? null)) {
                        // line 365
                        echo "                          <div id=\"error-option-";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 365);
                        echo "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 367
                    echo "                        </div>
                      ";
                }
                // line 369
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 369) == "textarea")) {
                    // line 370
                    echo "                        <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 370)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 370);
                    echo "\">
                          <label class=\"control-label\" for=\"input-option";
                    // line 371
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 371);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 371);
                    echo "</label>
                          <textarea name=\"option[";
                    // line 372
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 372);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 372);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 372);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 372);
                    echo "</textarea>
                          ";
                    // line 373
                    if (($context["journal3_is_oc4"] ?? null)) {
                        // line 374
                        echo "                          <div id=\"error-option-";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 374);
                        echo "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 376
                    echo "                        </div>
                      ";
                }
                // line 378
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 378) == "file")) {
                    // line 379
                    echo "                        <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 379)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 379);
                    echo "\">
                          <label class=\"control-label\">";
                    // line 380
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 380);
                    echo "</label>
                          ";
                    // line 381
                    if (($context["journal3_is_oc4"] ?? null)) {
                        // line 382
                        echo "                            <button type=\"button\" id=\"button-upload";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 382);
                        echo "\" data-oc-toggle=\"upload\" data-oc-url=\"";
                        echo ($context["upload"] ?? null);
                        echo "\" data-oc-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 382);
                        echo "\" data-oc-size-max=\"";
                        echo ($context["config_file_max_size"] ?? null);
                        echo "\" data-oc-size-error=\"";
                        echo ($context["error_upload_size"] ?? null);
                        echo "\" class=\"btn btn-default btn-block  upload-btn\"><i class=\"fa-solid fa-upload\"></i> ";
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
                            <input type=\"hidden\" name=\"option[";
                        // line 383
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 383);
                        echo "]\" value=\"\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 383);
                        echo "\"/>
                          ";
                    } else {
                        // line 385
                        echo "                            <button type=\"button\" id=\"button-upload";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 385);
                        echo "\" data-loading-text=\"";
                        echo ($context["text_loading"] ?? null);
                        echo "\" class=\"btn btn-default btn-block  upload-btn\"><i class=\"fa fa-upload\"></i> ";
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
                            <input type=\"hidden\" name=\"option[";
                        // line 386
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 386);
                        echo "]\" value=\"\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 386);
                        echo "\" >
                          ";
                    }
                    // line 388
                    echo "                          ";
                    if (($context["journal3_is_oc4"] ?? null)) {
                        // line 389
                        echo "                          <div id=\"error-option-";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 389);
                        echo "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 391
                    echo "                        </div>
                      ";
                }
                // line 393
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 393) == "date")) {
                    // line 394
                    echo "                        <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 394)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 394);
                    echo "\">
                          <label class=\"control-label\" for=\"input-option";
                    // line 395
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 395);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 395);
                    echo "</label>
                          <div class=\"input-group ";
                    // line 396
                    if ( !($context["journal3_is_oc4"] ?? null)) {
                        echo "date";
                    }
                    echo "\" data-picker-class=\"product-options pp-date-time-picker\">
                            <input type=\"text\" name=\"option[";
                    // line 397
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 397);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 397);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 397);
                    echo "\" class=\"form-control ";
                    if (($context["journal3_is_oc4"] ?? null)) {
                        echo "date";
                    }
                    echo "\" />
                            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
              </span></div>
                          ";
                    // line 401
                    if (($context["journal3_is_oc4"] ?? null)) {
                        // line 402
                        echo "                          <div id=\"error-option-";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 402);
                        echo "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 404
                    echo "                        </div>
                      ";
                }
                // line 406
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 406) == "datetime")) {
                    // line 407
                    echo "                        <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 407)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 407);
                    echo "\">
                          <label class=\"control-label\" for=\"input-option";
                    // line 408
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 408);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 408);
                    echo "</label>
                          <div class=\"input-group ";
                    // line 409
                    if ( !($context["journal3_is_oc4"] ?? null)) {
                        echo "datetime";
                    }
                    echo "\" data-picker-class=\"product-options pp-date-time-picker\">
                            <input type=\"text\" name=\"option[";
                    // line 410
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 410);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 410);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 410);
                    echo "\" class=\"form-control ";
                    if (($context["journal3_is_oc4"] ?? null)) {
                        echo "datetime";
                    }
                    echo "\" />
                            <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span></div>
                          ";
                    // line 414
                    if (($context["journal3_is_oc4"] ?? null)) {
                        // line 415
                        echo "                          <div id=\"error-option-";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 415);
                        echo "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 417
                    echo "                        </div>
                      ";
                }
                // line 419
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 419) == "time")) {
                    // line 420
                    echo "                        <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 420)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 420);
                    echo "\">
                          <label class=\"control-label\" for=\"input-option";
                    // line 421
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 421);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 421);
                    echo "</label>
                          <div class=\"input-group ";
                    // line 422
                    if ( !($context["journal3_is_oc4"] ?? null)) {
                        echo "time";
                    }
                    echo "\" data-picker-class=\"product-options pp-date-time-picker\">
                            <input type=\"text\" name=\"option[";
                    // line 423
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 423);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 423);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 423);
                    echo "\" class=\"form-control ";
                    if (($context["journal3_is_oc4"] ?? null)) {
                        echo "time";
                    }
                    echo "\" />
                            <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span></div>
                          ";
                    // line 427
                    if (($context["journal3_is_oc4"] ?? null)) {
                        // line 428
                        echo "                          <div id=\"error-option-";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 428);
                        echo "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 430
                    echo "                        </div>
                      ";
                }
                // line 432
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 433
            echo "                  </div>
                ";
        }
        // line 435
        echo "
                ";
        // line 436
        if (($context["recurrings"] ?? null)) {
            // line 437
            echo "                  <h3 class=\"title recurring-title\">";
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
                  <div class=\"form-group required\">
                    <select name=\"recurring_id\" class=\"form-control\">
                      <option value=\"\">";
            // line 440
            echo ($context["text_select"] ?? null);
            echo "</option>
                      ";
            // line 441
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 442
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 442);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 442);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 444
            echo "                    </select>
                    <div class=\"help-block\" id=\"recurring-description\"></div>
                  </div>
                ";
        }
        // line 448
        echo "
                ";
        // line 449
        if ((((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCartStatus"], "method", false, false, false, 449) || twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogWishlistStatus"], "method", false, false, false, 449)) || twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCompareStatus"], "method", false, false, false, 449)) || (($context["journal3_product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 449)))) {
            // line 450
            echo "                  <div class=\"button-group-page\">
                    <div class=\"buttons-wrapper\">
                      <div class=\"stepper-group cart-group\">
                        ";
            // line 453
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCartStatus"], "method", false, false, false, 453)) {
                // line 454
                echo "                          <label class=\"control-label\" for=\"product-quantity\">";
                echo ($context["entry_qty"] ?? null);
                echo "</label>
                          <div class=\"stepper\">
                            <button aria-label=\"-\" class=\"fa fa-angle-down\"></button>
                            <input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"";
                // line 457
                echo (((($context["journal3_product_quantity"] ?? null) > 0)) ? (($context["journal3_product_quantity"] ?? null)) : (($context["minimum"] ?? null)));
                echo "\" data-minimum=\"";
                echo ($context["minimum"] ?? null);
                echo "\" class=\"form-control\"/>
                            <input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                // line 458
                echo ($context["product_id"] ?? null);
                echo "\" />
                            <button aria-label=\"+\" class=\"fa fa-angle-up\"></button>
                          </div>
                          <a id=\"button-cart\" role=\"button\" aria-label=\"";
                // line 461
                echo ($context["journal3_button_cart"] ?? null);
                echo "\" data-loading-text=\"<span class='btn-text'>";
                echo ($context["journal3_button_cart"] ?? null);
                echo "</span>\" class=\"btn btn-cart\" ";
                if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 461) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "CartDisplay")], "method", false, false, false, 461) == "icon")) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "CartTooltipStatus")], "method", false, false, false, 461))) {
                    echo " data-toggle=\"tooltip-hover\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "CartTooltipPosition")], "method", false, false, false, 461);
                    echo "\" title=\"";
                    echo ($context["journal3_button_cart"] ?? null);
                    echo "\" ";
                }
                echo "><span class=\"btn-text\">";
                echo ($context["journal3_button_cart"] ?? null);
                echo "</span></a>
                        ";
            }
            // line 463
            echo "                      </div>
                      ";
            // line 464
            if ((($context["journal3_product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 464))) {
                // line 465
                echo "                        <div class=\"extra-group\">
                          ";
                // line 466
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["journal3_product_extra_buttons"] ?? null));
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
                foreach ($context['_seq'] as $context["id"] => $context["extra_button"]) {
                    // line 467
                    echo "                            <a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo " btn-";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 467);
                    echo "-extra\" ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 467) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(((($context["stylePrefix"] ?? null) . "Extra") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 467)) . "ButtonDisplay")], "method", false, false, false, 467) == "icon")) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "ExtraTooltipStatus")], "method", false, false, false, 467))) {
                        echo " data-toggle=\"tooltip-hover\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "ExtraTooltipPosition")], "method", false, false, false, 467);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 467);
                        echo "\" ";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 467) == "quickbuy")) {
                        echo "data-quick-buy";
                    }
                    echo " ";
                    if (((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 467) == "link") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 467), "href", [], "any", false, false, false, 467))) {
                        echo "href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 467), "href", [], "any", false, false, false, 467);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 467)], "method", false, false, false, 467);
                        echo " data-product_id=\"";
                        echo ($context["product_id"] ?? null);
                        echo "\" ";
                    } else {
                        echo "role=\"button\" ";
                    }
                    echo " data-loading-text=\"<span class='btn-text'>";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 467);
                    echo "</span>\"><span class=\"btn-text\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 467);
                    echo "</span></a>
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
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['extra_button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 469
                echo "                        </div>
                      ";
            }
            // line 471
            echo "                      ";
            if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogWishlistStatus"], "method", false, false, false, 471) || twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCompareStatus"], "method", false, false, false, 471)) || twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_quickview_popup", [], "any", false, false, false, 471))) {
                // line 472
                echo "                        <div class=\"wishlist-compare\">
                          ";
                // line 473
                if ( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_options_popup", [], "any", false, false, false, 473)) {
                    // line 474
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogWishlistStatus"], "method", false, false, false, 474)) {
                        // line 475
                        echo "                              <a class=\"btn btn-wishlist\" role=\"button\" aria-label=\"";
                        echo ($context["button_wishlist"] ?? null);
                        echo "\" ";
                        if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 475) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "WishlistDisplay")], "method", false, false, false, 475) == "icon")) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "WishlistTooltipStatus")], "method", false, false, false, 475))) {
                            echo " data-toggle=\"tooltip-hover\" data-tooltip-class=\"pp-wishlist-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "WishlistTooltipPosition")], "method", false, false, false, 475);
                            echo "\" title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.wishlist.add(";
                        echo ($context["product_id"] ?? null);
                        echo ");\"><span class=\"btn-text\">";
                        echo ($context["button_wishlist"] ?? null);
                        echo "</span></a>
                            ";
                    }
                    // line 477
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCompareStatus"], "method", false, false, false, 477)) {
                        // line 478
                        echo "                              <a class=\"btn btn-compare\" role=\"button\" aria-label=\"";
                        echo ($context["button_compare"] ?? null);
                        echo "\" ";
                        if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 478) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "CompareDisplay")], "method", false, false, false, 478) == "icon")) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "CompareTooltipStatus")], "method", false, false, false, 478))) {
                            echo " data-toggle=\"tooltip-hover\" data-tooltip-class=\"pp-compare-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "CompareTooltipPosition")], "method", false, false, false, 478);
                            echo "\" title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.compare.add(";
                        echo ($context["product_id"] ?? null);
                        echo ");\"><span class=\"btn-text\">";
                        echo ($context["button_compare"] ?? null);
                        echo "</span></a>
                            ";
                    }
                    // line 480
                    echo "                          ";
                }
                // line 481
                echo "                        </div>
                        ";
                // line 482
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_quickview_popup", [], "any", false, false, false, 482)) {
                    // line 483
                    echo "                          <a class=\"btn btn-more-details\" href=\"";
                    echo ($context["journal3_view_more_url"] ?? null);
                    echo "\" target=\"_top\" ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 483) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "MoreDetailsDisplay")], "method", false, false, false, 483) == "icon")) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "MoreDetailsTooltipStatus")], "method", false, false, false, 483))) {
                        echo " data-toggle=\"tooltip-hover\" data-tooltip-class=\"more-details-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "MoreDetailsTooltipPosition")], "method", false, false, false, 483);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewExtraText"], "method", false, false, false, 483);
                        echo "\" ";
                    }
                    echo "><span class=\"btn-text\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewExtraText"], "method", false, false, false, 483);
                    echo "</span></a>
                        ";
                }
                // line 485
                echo "                      ";
            }
            // line 486
            echo "                    </div>
                  </div>
                ";
        }
        // line 489
        echo "
                ";
        // line 490
        if ((($context["minimum"] ?? null) > 1)) {
            // line 491
            echo "                  <div class=\"minimum alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                ";
        }
        // line 493
        echo "
                ";
        // line 494
        echo ($context["journal3_product_tabs_blocks_details"] ?? null);
        echo "
              </div>
            ";
        // line 496
        echo ($context["journal3_product_tabs_blocks_bottom"] ?? null);
        echo "

            ";
        // line 498
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 498)) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 498) == "details"))) {
            // line 499
            echo "              <div class=\"tags\">
                <span class=\"tags-title\">";
            // line 500
            echo ($context["text_tags"] ?? null);
            echo "</span>
                ";
            // line 501
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 502
                echo "                  <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 502);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 502);
                echo "</a>
                  ";
                // line 503
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 503)) {
                    echo "<b>,</b>";
                }
                // line 504
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 505
            echo "              </div>
            ";
        }
        // line 507
        echo "
";
        // line 522
        echo "          </div>
        </div>
      </div>

      ";
        // line 526
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_quickview_popup", [], "any", false, false, false, 526)) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewDescription"], "method", false, false, false, 526)) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewDescriptionPosition"], "method", false, false, false, 526) == "default"))) {
            // line 527
            echo "        <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
          <div class=\"expand-block\">
            <div class=\"expand-content\">";
            // line 529
            echo ($context["description"] ?? null);
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewExpandButton"], "method", false, false, false, 529)) {
                echo "<div class=\"block-expand-overlay\"><a class=\"block-expand btn\" role=\"button\" aria-label=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalExpandButtonText"], "method", false, false, false, 529);
                echo "\"></a></div>";
            }
            echo "</div>
          </div>
        </div>
      ";
        }
        // line 533
        echo "
      ";
        // line 534
        echo ($context["journal3_product_tabs_blocks_default"] ?? null);
        echo "

      ";
        // line 536
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 536)) && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 536) == "default"))) {
            // line 537
            echo "      <div class=\"tags\">
        <span class=\"tags-title\">";
            // line 538
            echo ($context["text_tags"] ?? null);
            echo "</span>
        ";
            // line 539
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 540
                echo "          <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 540);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 540);
                echo "</a>
          ";
                // line 541
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 541)) {
                    echo "<b>,</b>";
                }
                // line 542
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 543
            echo "      </div>
      ";
        }
        // line 545
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 546
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script>
  // calculate vertical images height
  (function () {
    const \$img = document.querySelector('.direction-vertical .main-image .swiper-slide img');
    const \$ad = document.querySelector('.direction-vertical .additional-images');

    if (\$img && \$ad) {
      \$ad.style.height = \$img.offsetHeight + 'px';
    }
  })();
</script>
";
        // line 559
        if (($context["journal3_is_oc3"] ?? null)) {
            // line 560
            echo "<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>
";
        }
        // line 581
        echo "<script type=\"text/javascript\"><!--
\$('#button-cart, [data-quick-buy]').on('click', function () {
  var \$btn = \$(this);
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart";
        // line 585
        echo twig_constant("JOURNAL3_ROUTE_SEPARATOR");
        echo "add";
        if (($context["journal3_is_oc4"] ?? null)) {
            echo "&language=";
            echo ($context["language"] ?? null);
        }
        echo "',
\t\ttype: 'post',
\t\tdata: \$(
      '#product .button-group-page input[type=\\'text\\'], #product .button-group-page input[type=\\'hidden\\'], #product .button-group-page input[type=\\'radio\\']:checked, #product .button-group-page input[type=\\'checkbox\\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' +
      '#product .product-options input[type=\\'text\\'], #product .product-options input[type=\\'hidden\\'], #product .product-options input[type=\\'radio\\']:checked, #product .product-options input[type=\\'checkbox\\']:checked, #product .product-options select, #product .product-options textarea, ' +
      '#product select[name=\"recurring_id\"]'
    ),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').jbutton('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').jbutton('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');
      \$('#product').find('.is-invalid').removeClass('is-invalid');
      \$('#product').find('.invalid-feedback').removeClass('d-block');

\t\t\tif (json['error']) {
        ";
        // line 606
        if (($context["journal3_is_oc4"] ?? null)) {
            // line 607
            echo "        for (key in json['error']) {
          \$('#input-' + key.replaceAll('_', '')).closest('.form-group').addClass('has-error');
          \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
        }
        ";
        } else {
            // line 612
            echo "        if (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');

        ";
        }
        // line 632
        echo "
        try {
          \$('html, body').animate({ scrollTop: \$('.form-group.has-error').offset().top - \$('header').height() - 20 }, 'slow');
        } catch (e) {
        }
\t\t\t}

\t\t\tif (json['success']) {
        if (\$('html').hasClass('popup-options')) {
          parent.\$(\".popup-options .popup-close\").trigger('click');
        }

        if (json['notification']) {
          parent.show_notification(json['notification']);
        } else {
          parent.\$('#content').parent().before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        parent.\$('#cart-total').html(json['total']);
        parent.\$('#cart-items,.cart-badge').html(json['items_count']);

        if (json['items_count']) {
          parent.\$('#cart-items,.cart-badge').removeClass('count-zero');
          parent.\$('#cart').addClass('cart-has-items');
        } else {
          parent.\$('#cart-items,.cart-badge').addClass('count-zero');
          parent.\$('#cart').removeClass('cart-has-items');
        }

        if (Journal['scrollToTop']) {
          parent.\$('html, body').animate({ scrollTop: 0 }, 'slow');
        }

        parent.\$('.cart-content ul').load('index.php?route=common/cart";
        // line 665
        echo twig_constant("JOURNAL3_ROUTE_SEPARATOR");
        echo "info";
        if (($context["journal3_is_oc4"] ?? null)) {
            echo "&language=";
            echo ($context["language"] ?? null);
        }
        echo " ul li');

        if (window.location.href.indexOf('quick_buy=true') !== -1) {
          parent.location.href = Journal['checkoutUrl'];
        }

        if (\$btn.data('quick-buy') !== undefined) {
          location = Journal['checkoutUrl'];
        }

        if (parent.window['_QuickCheckout']) {
          parent.window['_QuickCheckout'].save();
        }

        if (json['redirect']) {
          parent.location.href = json['redirect'];
        }
      }
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script>
";
        // line 690
        if (($context["journal3_is_oc3"] ?? null)) {
            // line 691
            echo "<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
            // line 693
            echo ($context["datepicker"] ?? null);
            echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
            // line 698
            echo ($context["datepicker"] ?? null);
            echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
            // line 704
            echo ($context["datepicker"] ?? null);
            echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
";
        }
        // line 761
        echo "<script type=\"text/javascript\"><!--
";
        // line 762
        if (($context["journal3_is_oc3"] ?? null)) {
            // line 763
            echo "\$(function () {
  \$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
  });

  \$('#review').load('index.php?route=product/product/review&product_id=";
            // line 774
            echo ($context["product_id"] ?? null);
            echo "');

  \$('#button-review').on('click', function() {
    \$.ajax({
      url: 'index.php?route=product/product";
            // line 778
            echo twig_constant("JOURNAL3_ROUTE_SEPARATOR");
            echo "write&product_id=";
            echo ($context["product_id"] ?? null);
            echo "',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-review\").serialize(),
      beforeSend: function() {
        \$('#button-review').button('loading');
      },
      complete: function() {
        \$('#button-review').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        }

        if (json['success']) {
          \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

          \$('input[name=\\'name\\']').val('');
          \$('textarea[name=\\'text\\']').val('');
          \$('input[name=\\'rating\\']:checked').prop('checked', false);
        }
      }
    });
  });
});
";
        }
        // line 807
        echo "
\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});

\$(document).ready(function () {
  \$('.review-links a').on('click', function () {
    var \$review = \$('#review');
    if (\$review.length) {
      \$('a[href=\"#' + \$review.closest('.module-item').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.tab-pane').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.panel-collapse').attr('id') + '\"]').trigger('click');
      \$review.closest('.expand-block').find('.block-expand.btn').trigger('click');

      \$([document.documentElement, document.body]).animate({
        scrollTop: \$review.offset().top - \$('header').height() - 20
      }, 200);
    }
  });

  \$('#read-more-desc').on('click', function () {
    var \$desc = \$('.product-extra-description');
    if (\$desc.length) {
      \$('a[href=\"#' + \$desc.closest('.module-item').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$desc.closest('.tab-pane').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$desc.closest('.panel-collapse').attr('id') + '\"]').trigger('click');
      \$desc.find('.expand-block').find('.block-expand.btn').trigger('click');

      \$([document.documentElement, document.body]).animate({
        scrollTop: \$desc.offset().top - \$('header').height() - 20
      }, 200);
    }
  });
});
//--></script>
";
        // line 848
        echo ($context["journal3_rich_snippets"] ?? null);
        echo "
";
        // line 849
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    // line 1
    public function macro_productStats($__context__ = null, ...$__varargs__)
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
            echo "  <div class=\"product-stats\">
    <ul class=\"list-unstyled\">
      ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_stock", [], "any", false, false, false, 4)) {
                // line 5
                echo "        <li class=\"product-stock ";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_stock_class", [], "any", false, false, false, 5);
                echo "\"><b>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_stock_text", [], "any", false, false, false, 5);
                echo ":</b> <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_stock_value", [], "any", false, false, false, 5);
                echo "</span></li>
      ";
            }
            // line 7
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer", [], "any", false, false, false, 7)) {
                // line 8
                echo "        <li class=\"product-manufacturer\"><b>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_text", [], "any", false, false, false, 8);
                echo ":</b> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_href", [], "any", false, false, false, 8);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_value", [], "any", false, false, false, 8);
                echo "</a></li>
      ";
            }
            // line 10
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_reward", [], "any", false, false, false, 10)) {
                // line 11
                echo "        <li class=\"product-reward\"><b>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_reward_text", [], "any", false, false, false, 11);
                echo ":</b> <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_reward_value", [], "any", false, false, false, 11);
                echo "</span></li>
      ";
            }
            // line 13
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_model", [], "any", false, false, false, 13)) {
                // line 14
                echo "        <li class=\"product-model\"><b>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_model_text", [], "any", false, false, false, 14);
                echo ":</b> <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_model_value", [], "any", false, false, false, 14);
                echo "</span></li>
      ";
            }
            // line 16
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_weight", [], "any", false, false, false, 16)) {
                // line 17
                echo "        <li class=\"product-weight\"><b>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_weight_text", [], "any", false, false, false, 17);
                echo ":</b> <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_weight_value", [], "any", false, false, false, 17);
                echo "</span></li>
      ";
            }
            // line 19
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_dimensions", [], "any", false, false, false, 19)) {
                // line 20
                echo "        <li class=\"product-dimension\"><b>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_dimensions_text", [], "any", false, false, false, 20);
                echo ":</b> <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_dimensions_value", [], "any", false, false, false, 20);
                echo "</span></li>
      ";
            }
            // line 22
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_sku", [], "any", false, false, false, 22)) {
                // line 23
                echo "        <li class=\"product-sku\"><b>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_sku_text", [], "any", false, false, false, 23);
                echo ":</b> <span> ";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_sku_value", [], "any", false, false, false, 23);
                echo "</span></li>
      ";
            }
            // line 25
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_upc", [], "any", false, false, false, 25)) {
                // line 26
                echo "        <li class=\"product-upc\"><b>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_upc_text", [], "any", false, false, false, 26);
                echo ":</b> <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_upc_value", [], "any", false, false, false, 26);
                echo "</span></li>
      ";
            }
            // line 28
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_ean", [], "any", false, false, false, 28)) {
                // line 29
                echo "        <li class=\"product-ean\"><b>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_ean_text", [], "any", false, false, false, 29);
                echo ":</b> <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_ean_value", [], "any", false, false, false, 29);
                echo "</span></li>
      ";
            }
            // line 31
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_jan", [], "any", false, false, false, 31)) {
                // line 32
                echo "        <li class=\"product-jan\"><b>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_jan_text", [], "any", false, false, false, 32);
                echo ":</b> <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_jan_value", [], "any", false, false, false, 32);
                echo "</span></li>
      ";
            }
            // line 34
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_isbn", [], "any", false, false, false, 34)) {
                // line 35
                echo "        <li class=\"product-isbn\"><b>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_isbn_text", [], "any", false, false, false, 35);
                echo ":</b> <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_isbn_value", [], "any", false, false, false, 35);
                echo "</span></li>
      ";
            }
            // line 37
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_mpn", [], "any", false, false, false, 37)) {
                // line 38
                echo "        <li class=\"product-mpn\"><b>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_mpn_text", [], "any", false, false, false, 38);
                echo ":</b> <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_mpn_value", [], "any", false, false, false, 38);
                echo "</span></li>
      ";
            }
            // line 40
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_location", [], "any", false, false, false, 40)) {
                // line 41
                echo "        <li class=\"product-location\"><b>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_location_text", [], "any", false, false, false, 41);
                echo ":</b> <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_location_value", [], "any", false, false, false, 41);
                echo "</span></li>
      ";
            }
            // line 43
            echo "    </ul>
    ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer", [], "any", false, false, false, 44) && (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_display", [], "any", false, false, false, 44) == "image"))) {
                // line 45
                echo "      <div class=\"brand-image product-manufacturer\">
        <a href=\"";
                // line 46
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_href", [], "any", false, false, false, 46);
                echo "\">
          ";
                // line 47
                if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_image", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "          <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_image", [], "any", false, false, false, 48);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_image2x", [], "any", false, false, false, 48)) {
                        echo "srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_image", [], "any", false, false, false, 48);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_image2x", [], "any", false, false, false, 48);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "manufacturer", [], "any", false, false, false, 48);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3", [], "any", false, false, false, 48), "get", ["image_dimensions_manufacturer_logo.width"], "method", false, false, false, 48);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3", [], "any", false, false, false, 48), "get", ["image_dimensions_manufacturer_logo.height"], "method", false, false, false, 48);
                    echo "\"/>
        ";
                }
                // line 50
                echo "          <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "manufacturer", [], "any", false, false, false, 50);
                echo "</span>
        </a>
      </div>
    ";
            }
            // line 54
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_sold", [], "any", false, false, false, 54) || twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_views", [], "any", false, false, false, 54))) {
                // line 55
                echo "      <div class=\"custom-stats\">
        ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_sold", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "          <div class=\"product-sold\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_sold", [], "any", false, false, false, 57);
                    echo "</div>
        ";
                }
                // line 59
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_views", [], "any", false, false, false, 59)) {
                    // line 60
                    echo "          <div class=\"product-views\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_views", [], "any", false, false, false, 60);
                    echo "</div>
        ";
                }
                // line 62
                echo "      </div>
    ";
            }
            // line 64
            echo "  </div>
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
        return "journal3/template/product/product.twig";
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
        return array (  2504 => 64,  2500 => 62,  2494 => 60,  2491 => 59,  2485 => 57,  2483 => 56,  2480 => 55,  2477 => 54,  2469 => 50,  2449 => 48,  2447 => 47,  2443 => 46,  2440 => 45,  2438 => 44,  2435 => 43,  2427 => 41,  2424 => 40,  2416 => 38,  2413 => 37,  2405 => 35,  2402 => 34,  2394 => 32,  2391 => 31,  2383 => 29,  2380 => 28,  2372 => 26,  2369 => 25,  2361 => 23,  2358 => 22,  2350 => 20,  2347 => 19,  2339 => 17,  2336 => 16,  2328 => 14,  2325 => 13,  2317 => 11,  2314 => 10,  2304 => 8,  2301 => 7,  2291 => 5,  2289 => 4,  2285 => 2,  2272 => 1,  2266 => 849,  2262 => 848,  2219 => 807,  2185 => 778,  2178 => 774,  2165 => 763,  2163 => 762,  2160 => 761,  2100 => 704,  2091 => 698,  2083 => 693,  2079 => 691,  2077 => 690,  2044 => 665,  2009 => 632,  1987 => 612,  1980 => 607,  1978 => 606,  1949 => 585,  1943 => 581,  1920 => 560,  1918 => 559,  1902 => 546,  1897 => 545,  1893 => 543,  1879 => 542,  1875 => 541,  1868 => 540,  1851 => 539,  1847 => 538,  1844 => 537,  1842 => 536,  1837 => 534,  1834 => 533,  1822 => 529,  1816 => 527,  1814 => 526,  1808 => 522,  1805 => 507,  1801 => 505,  1787 => 504,  1783 => 503,  1776 => 502,  1759 => 501,  1755 => 500,  1752 => 499,  1750 => 498,  1745 => 496,  1740 => 494,  1737 => 493,  1731 => 491,  1729 => 490,  1726 => 489,  1721 => 486,  1718 => 485,  1702 => 483,  1700 => 482,  1697 => 481,  1694 => 480,  1676 => 478,  1673 => 477,  1655 => 475,  1652 => 474,  1650 => 473,  1647 => 472,  1644 => 471,  1640 => 469,  1593 => 467,  1576 => 466,  1573 => 465,  1571 => 464,  1568 => 463,  1551 => 461,  1545 => 458,  1539 => 457,  1532 => 454,  1530 => 453,  1525 => 450,  1523 => 449,  1520 => 448,  1514 => 444,  1503 => 442,  1499 => 441,  1495 => 440,  1488 => 437,  1486 => 436,  1483 => 435,  1479 => 433,  1473 => 432,  1469 => 430,  1463 => 428,  1461 => 427,  1446 => 423,  1440 => 422,  1434 => 421,  1425 => 420,  1422 => 419,  1418 => 417,  1412 => 415,  1410 => 414,  1395 => 410,  1389 => 409,  1383 => 408,  1374 => 407,  1371 => 406,  1367 => 404,  1361 => 402,  1359 => 401,  1344 => 397,  1338 => 396,  1332 => 395,  1323 => 394,  1320 => 393,  1316 => 391,  1310 => 389,  1307 => 388,  1300 => 386,  1291 => 385,  1284 => 383,  1269 => 382,  1267 => 381,  1263 => 380,  1254 => 379,  1251 => 378,  1247 => 376,  1241 => 374,  1239 => 373,  1229 => 372,  1223 => 371,  1214 => 370,  1211 => 369,  1207 => 367,  1201 => 365,  1199 => 364,  1189 => 363,  1183 => 362,  1174 => 361,  1171 => 360,  1167 => 358,  1161 => 356,  1159 => 355,  1156 => 354,  1146 => 350,  1139 => 348,  1137 => 347,  1133 => 346,  1130 => 345,  1091 => 344,  1085 => 343,  1075 => 342,  1071 => 340,  1065 => 339,  1061 => 338,  1048 => 337,  1045 => 336,  1041 => 334,  1035 => 332,  1033 => 331,  1030 => 330,  1020 => 326,  1013 => 323,  1010 => 322,  1008 => 321,  1004 => 320,  1001 => 319,  962 => 318,  956 => 317,  946 => 316,  942 => 314,  936 => 313,  932 => 312,  919 => 311,  916 => 310,  912 => 308,  906 => 306,  904 => 305,  901 => 304,  894 => 302,  887 => 301,  885 => 300,  878 => 299,  874 => 298,  870 => 297,  864 => 296,  858 => 295,  845 => 294,  842 => 293,  838 => 292,  834 => 291,  831 => 290,  829 => 289,  826 => 288,  822 => 286,  816 => 284,  814 => 283,  811 => 282,  807 => 280,  796 => 278,  792 => 277,  789 => 276,  787 => 275,  784 => 274,  776 => 272,  773 => 271,  765 => 269,  763 => 268,  760 => 267,  755 => 265,  750 => 264,  744 => 262,  742 => 261,  739 => 260,  735 => 258,  718 => 256,  714 => 255,  711 => 254,  709 => 253,  705 => 251,  703 => 250,  700 => 249,  693 => 245,  689 => 244,  685 => 243,  681 => 242,  676 => 241,  670 => 239,  668 => 238,  665 => 237,  663 => 236,  660 => 235,  653 => 231,  649 => 230,  645 => 229,  641 => 227,  635 => 226,  628 => 221,  623 => 218,  620 => 217,  616 => 216,  612 => 214,  610 => 213,  607 => 212,  601 => 210,  599 => 209,  596 => 208,  592 => 206,  567 => 204,  563 => 203,  560 => 202,  558 => 201,  555 => 200,  543 => 196,  537 => 194,  535 => 193,  530 => 191,  527 => 190,  521 => 188,  519 => 187,  514 => 184,  508 => 180,  504 => 178,  490 => 177,  486 => 176,  479 => 175,  462 => 174,  458 => 173,  455 => 172,  453 => 171,  450 => 170,  438 => 166,  432 => 164,  430 => 163,  425 => 161,  422 => 160,  414 => 158,  412 => 157,  408 => 155,  405 => 154,  401 => 152,  376 => 149,  371 => 148,  367 => 147,  364 => 146,  353 => 137,  320 => 134,  311 => 133,  294 => 132,  287 => 130,  280 => 129,  277 => 128,  275 => 127,  272 => 126,  268 => 124,  251 => 122,  247 => 121,  244 => 120,  242 => 119,  231 => 110,  224 => 108,  200 => 106,  174 => 104,  172 => 103,  163 => 102,  159 => 101,  152 => 99,  146 => 98,  140 => 97,  136 => 95,  134 => 94,  130 => 93,  126 => 92,  121 => 91,  113 => 89,  111 => 88,  106 => 87,  103 => 86,  100 => 85,  97 => 84,  94 => 83,  91 => 82,  88 => 81,  86 => 80,  82 => 79,  77 => 77,  73 => 75,  62 => 73,  58 => 72,  52 => 70,  44 => 68,  42 => 67,  38 => 66,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/product.twig", "");
    }
}
