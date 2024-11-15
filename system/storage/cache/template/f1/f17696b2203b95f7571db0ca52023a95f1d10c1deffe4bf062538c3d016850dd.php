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

/* journal3/template/journal3/module/catalog_blocks.twig */
class __TwigTemplate_4b36657c23f68fbdd3813bc24db8e2780e160d81dc7649ec6f20ab8d57ab353e extends Template
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
        // line 155
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 155);
        echo "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 156
        echo ($context["edit"] ?? null);
        echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        echo ($context["name"] ?? null);
        echo "\"></em></button>
  ";
        // line 157
        if (($context["title"] ?? null)) {
            // line 158
            echo "    <h3 class=\"title module-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
  ";
        }
        // line 160
        echo "  <div class=\"module-body\">
    ";
        // line 162
        echo "    ";
        if ((($context["display"] ?? null) == "grid")) {
            // line 163
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 164
                echo "        <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 164)], "method", false, false, false, 164);
                echo "\">
          ";
                // line 165
                echo twig_call_macro($macros["_self"], "macro_renderCatalogBlocks", [$context, $context["item"]], 165, $context, $this->getSourceContext());
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "    ";
        }
        // line 169
        echo "    ";
        // line 170
        echo "    ";
        if ((($context["display"] ?? null) == "tabs")) {
            // line 171
            echo "      <div class=\"tab-container ";
            if (($context["changeTabOnHover"] ?? null)) {
                echo "tab-on-hover";
            }
            echo "\">
        <div class=\"full-tabs-bg\"></div>
        <ul class=\"nav nav-tabs\">
          ";
            // line 174
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
                // line 175
                echo "            <li class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "tab_classes", [], "any", false, false, false, 175)], "method", false, false, false, 175);
                echo "\">
              ";
                // line 176
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "tabType", [], "any", false, false, false, 176) == "link")) {
                    // line 177
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 177), "href", [], "any", false, false, false, 177);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 177)], "method", false, false, false, 177);
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 177);
                    echo "</a>
              ";
                } else {
                    // line 179
                    echo "                <a href=\"#";
                    echo ($context["id"] ?? null);
                    echo "-tab-";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 179);
                    echo "\" class=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "image_tab", [], "any", false, false, false, 179)) {
                        echo " has-image ";
                    }
                    echo "\" data-toggle=\"tab\">
                  ";
                    // line 180
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "image_tab", [], "any", false, false, false, 180)) {
                        // line 181
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 181) && twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "lazyLoad", [], "any", false, false, false, 181))) {
                            // line 182
                            echo "                      <span class=\"menu-image\"><img src=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "dummy_image", [], "any", false, false, false, 182);
                            echo "\" data-src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image_tab", [], "any", false, false, false, 182);
                            echo "\" ";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "image_tab2x", [], "any", false, false, false, 182)) {
                                echo "data-srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "image_tab", [], "any", false, false, false, 182);
                                echo " 1x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "image_tab2x", [], "any", false, false, false, 182);
                                echo " 2x\" ";
                            }
                            echo " alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 182);
                            echo "\" width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensionsTab", [], "any", false, false, false, 182), "width", [], "any", false, false, false, 182);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensionsTab", [], "any", false, false, false, 182), "height", [], "any", false, false, false, 182);
                            echo "\" class=\"catalog-block-image lazyload\"/></span>
                    ";
                        } else {
                            // line 184
                            echo "                      <span class=\"menu-image\"><img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image_tab", [], "any", false, false, false, 184);
                            echo "\" ";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "image_tab2x", [], "any", false, false, false, 184)) {
                                echo "srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "image_tab", [], "any", false, false, false, 184);
                                echo " 1x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "image_tab2x", [], "any", false, false, false, 184);
                                echo " 2x\" ";
                            }
                            echo " alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 184);
                            echo "\" width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensionsTab", [], "any", false, false, false, 184), "width", [], "any", false, false, false, 184);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensionsTab", [], "any", false, false, false, 184), "height", [], "any", false, false, false, 184);
                            echo "\" class=\"catalog-block-image\"/></span>
                    ";
                        }
                        // line 186
                        echo "                  ";
                    }
                    // line 187
                    echo "                  <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 187);
                    echo "</span>
                </a>
                ";
                    // line 189
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 189)) {
                        // line 190
                        echo "                  <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 190);
                        echo "\" class=\"item-all-link\" title=\"";
                        echo ($context["allLinkText"] ?? null);
                        echo "\" data-toggle=\"tooltip-hover\"><span>";
                        echo ($context["allLinkText"] ?? null);
                        echo "</span></a>
                ";
                    }
                    // line 192
                    echo "              ";
                }
                // line 193
                echo "            </li>
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
            // line 195
            echo "        </ul>
        <div class=\"tab-content\">
          ";
            // line 197
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
                // line 198
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "tabType", [], "any", false, false, false, 198) != "link")) {
                    // line 199
                    echo "              <div class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 199)], "method", false, false, false, 199);
                    echo "\" id=\"";
                    echo ($context["id"] ?? null);
                    echo "-tab-";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 199);
                    echo "\">
                ";
                    // line 200
                    echo twig_call_macro($macros["_self"], "macro_renderCatalogBlocks", [$context, $context["item"]], 200, $context, $this->getSourceContext());
                    echo "
              </div>
            ";
                }
                // line 203
                echo "          ";
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
            // line 204
            echo "        </div>
      </div>
    ";
        }
        // line 207
        echo "    ";
        // line 208
        echo "    ";
        if ((($context["display"] ?? null) == "accordion")) {
            // line 209
            echo "      <div class=\"panel-group\" id=\"";
            echo ($context["id"] ?? null);
            echo "-collapse\">
        ";
            // line 210
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
                // line 211
                echo "          <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 211)], "method", false, false, false, 211);
                echo "\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a href=\"#";
                // line 214
                echo ($context["id"] ?? null);
                echo "-collapse-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 214);
                echo "\" class=\"accordion-toggle collapsed ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "image_tab", [], "any", false, false, false, 214)) {
                    echo " has-image ";
                }
                echo "\" data-toggle=\"collapse\" data-parent=\"#";
                echo ($context["id"] ?? null);
                echo "-collapse\" aria-expanded=\"false\">
                  ";
                // line 215
                if (twig_get_attribute($this->env, $this->source, $context["item"], "image_tab", [], "any", false, false, false, 215)) {
                    // line 216
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 216) && twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "lazyLoad", [], "any", false, false, false, 216))) {
                        // line 217
                        echo "                      <span class=\"menu-image\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "dummy_image", [], "any", false, false, false, 217);
                        echo "\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image_tab", [], "any", false, false, false, 217);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "image_tab2x", [], "any", false, false, false, 217)) {
                            echo "data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image_tab", [], "any", false, false, false, 217);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image_tab2x", [], "any", false, false, false, 217);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 217);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensionsTab", [], "any", false, false, false, 217), "width", [], "any", false, false, false, 217);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensionsTab", [], "any", false, false, false, 217), "height", [], "any", false, false, false, 217);
                        echo "\" class=\"catalog-block-image lazyload\"/></span>
                    ";
                    } else {
                        // line 219
                        echo "                      <span class=\"menu-image\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image_tab", [], "any", false, false, false, 219);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "image_tab2x", [], "any", false, false, false, 219)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image_tab", [], "any", false, false, false, 219);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image_tab2x", [], "any", false, false, false, 219);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 219);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensionsTab", [], "any", false, false, false, 219), "width", [], "any", false, false, false, 219);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensionsTab", [], "any", false, false, false, 219), "height", [], "any", false, false, false, 219);
                        echo "\" class=\"catalog-block-image\"/></span>
                    ";
                    }
                    // line 221
                    echo "                  ";
                }
                // line 222
                echo "                  <span>";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 222);
                echo "</span>
                  <i class=\"fa fa-caret-down\"></i>
                </a>
              </h4>
            </div>
            <div class=\"";
                // line 227
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "panel_classes", [], "any", false, false, false, 227)], "method", false, false, false, 227);
                echo "\" id=\"";
                echo ($context["id"] ?? null);
                echo "-collapse-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 227);
                echo "\">
              <div class=\"panel-body\">
                ";
                // line 229
                echo twig_call_macro($macros["_self"], "macro_renderCatalogBlocks", [$context, $context["item"]], 229, $context, $this->getSourceContext());
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
            // line 234
            echo "      </div>
    ";
        }
        // line 236
        echo "  </div>
</div>
";
    }

    // line 1
    public function macro_renderCatalogBlocks($__context__ = null, $__item__ = null, ...$__varargs__)
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
                echo "    <h3 class=\"title module-title block-title\">
      <span>";
                // line 8
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 8);
                echo "</span>
      ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "href", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "href", [], "any", false, false, false, 10);
                    echo "\" class=\"item-all-link\"><span>";
                    echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "allLinkText", [], "any", false, false, false, 10);
                    echo "</span></a>
      ";
                }
                // line 11
                echo " </h3>
  ";
            }
            // line 13
            echo "  <div class=\"block-body\">
    ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "header", [], "any", false, false, false, 14) != "none")) {
                // line 15
                echo "    <div class=\"block-header\">
      <div class=\"block-header-data\">
        <a class=\"block-header-link\" href=\"";
                // line 17
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "blockHeaderLink", [], "any", false, false, false, 17), "href", [], "any", false, false, false, 17)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "blockHeaderLink", [], "any", false, false, false, 17), "href", [], "any", false, false, false, 17)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "href", [], "any", false, false, false, 17)));
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "blockHeaderLink", [], "any", false, false, false, 17)], "method", false, false, false, 17);
                echo ">
          ";
                // line 18
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "header", [], "any", false, false, false, 18) == "image")) {
                    // line 19
                    echo "            <div class=\"block-header-image\">
              ";
                    // line 20
                    if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 20) && twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "lazyLoad", [], "any", false, false, false, 20))) {
                        // line 21
                        echo "                <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "dummy_image", [], "any", false, false, false, 21);
                        echo "\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 21);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 21)) {
                            echo "data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 21);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 21);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "alt", [], "any", false, false, false, 21);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensionsFeatured", [], "any", false, false, false, 21), "width", [], "any", false, false, false, 21);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensionsFeatured", [], "any", false, false, false, 21), "height", [], "any", false, false, false, 21);
                        echo "\" class=\"block-image lazyload\"/>
              ";
                    } else {
                        // line 23
                        echo "                <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 23);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 23)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 23);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 23);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "alt", [], "any", false, false, false, 23);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensionsFeatured", [], "any", false, false, false, 23), "width", [], "any", false, false, false, 23);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensionsFeatured", [], "any", false, false, false, 23), "height", [], "any", false, false, false, 23);
                        echo "\" class=\"block-image\"/>
              ";
                    }
                    // line 25
                    echo "              ";
                    if ((((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "display", [], "any", false, false, false, 25) == "grid") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 25)) && (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "titlePosition", [], "any", false, false, false, 25) == "before"))) {
                        // line 26
                        echo "                <h3 class=\"title module-title block-title\">";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 26);
                        echo "</h3>
              ";
                    }
                    // line 28
                    echo "            </div>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 29
($context["item"] ?? null), "header", [], "any", false, false, false, 29) == "icon")) {
                    // line 30
                    echo "            <div class=\"block-head-icon\">
              <em class=\"icon icon-block\"></em>
              ";
                    // line 32
                    if ((((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "display", [], "any", false, false, false, 32) == "grid") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 32)) && (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "titlePosition", [], "any", false, false, false, 32) == "before"))) {
                        // line 33
                        echo "                <h3 class=\"title module-title block-title\">";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 33);
                        echo "</h3>
              ";
                    }
                    // line 35
                    echo "            </div>
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 36
($context["item"] ?? null), "header", [], "any", false, false, false, 36) == "text")) {
                    // line 37
                    echo "            <div class=\"block-head-text\">
              <span class=\"block-header-text\">";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "text", [], "any", false, false, false, 38);
                    echo "</span>
              ";
                    // line 39
                    if ((((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "display", [], "any", false, false, false, 39) == "grid") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 39)) && (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "titlePosition", [], "any", false, false, false, 39) == "before"))) {
                        // line 40
                        echo "                <h3 class=\"title module-title block-title\">";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 40);
                        echo "</h3>
              ";
                    }
                    // line 42
                    echo "            </div>
          ";
                }
                // line 44
                echo "        </a>
        <div class=\"block-category-data\">
          <div class=\"block-category-name\">";
                // line 46
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 46);
                echo "</div>
          <div class=\"block-category-description\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description", [], "any", false, false, false, 47);
                echo "</div>
        </div>
      </div>
      ";
                // line 50
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footer", [], "any", false, false, false, 50) == "button")) {
                    // line 51
                    echo "        <div class=\"block-footer\"><a class=\"btn\" href=\"";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footerButtonLink", [], "any", false, false, false, 51), "href", [], "any", false, false, false, 51)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footerButtonLink", [], "any", false, false, false, 51), "href", [], "any", false, false, false, 51)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "href", [], "any", false, false, false, 51)));
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footerButtonLink", [], "any", false, false, false, 51)], "method", false, false, false, 51);
                    echo "><span>";
                    echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footerButton", [], "any", false, false, false, 51)) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footerButton", [], "any", false, false, false, 51)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 51)));
                    echo "</span></a></div>
      ";
                }
                // line 53
                echo "    </div>
    ";
            }
            // line 55
            echo "    <div class=\"block-wrapper\">
      ";
            // line 56
            if ((((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "display", [], "any", false, false, false, 56) == "grid") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 56)) && (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "titlePosition", [], "any", false, false, false, 56) == "body"))) {
                // line 57
                echo "        <h3 class=\"title module-title block-title\">";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 57);
                echo "</h3>
      ";
            }
            // line 59
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "subtype", [], "any", false, false, false, 59) != "none")) {
                // line 60
                echo "        <div class=\"block-content block-catalog\">";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "            <div class=\"catalog-blocks ";
                    echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "gridType", [], "any", false, false, false, 61);
                    echo "-grid no-scroll\">
            ";
                    // line 62
                    if ((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "gridType", [], "any", false, false, false, 62) == "auto")) {
                        // line 63
                        echo "              <div class=\"auto-grid-items\">
                ";
                        // line 64
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 64));
                        foreach ($context['_seq'] as $context["_key"] => $context["subitems"]) {
                            // line 65
                            echo "                  <div class=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitems"], "classes", [], "any", false, false, false, 65)], "method", false, false, false, 65);
                            echo "\">
                    <div class=\"item-content\">
                      <a href=\"";
                            // line 67
                            echo twig_get_attribute($this->env, $this->source, $context["subitems"], "href", [], "any", false, false, false, 67);
                            echo "\" class=\"catalog-title\">";
                            echo twig_get_attribute($this->env, $this->source, $context["subitems"], "name", [], "any", false, false, false, 67);
                            echo "</a>
                      <div class=\"item-assets image-left\">
                        ";
                            // line 69
                            if (twig_get_attribute($this->env, $this->source, $context["subitems"], "image", [], "any", false, false, false, 69)) {
                                // line 70
                                echo "                          <a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["subitems"], "href", [], "any", false, false, false, 70);
                                echo "\" class=\"catalog-image\">
                            ";
                                // line 71
                                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 71)) {
                                    // line 72
                                    echo "                              <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "dummy_image", [], "any", false, false, false, 72);
                                    echo "\" data-src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image", [], "any", false, false, false, 72);
                                    echo "\" data-image=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image", [], "any", false, false, false, 72);
                                    echo "\" ";
                                    if (twig_get_attribute($this->env, $this->source, $context["subitems"], "image2x", [], "any", false, false, false, 72)) {
                                        echo "data-srcset=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image", [], "any", false, false, false, 72);
                                        echo " 1x, ";
                                        echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image2x", [], "any", false, false, false, 72);
                                        echo " 2x\"";
                                    }
                                    echo " alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitems"], "name", [], "any", false, false, false, 72);
                                    echo "\" width=\"";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 72), "width", [], "any", false, false, false, 72);
                                    echo "\" height=\"";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 72), "height", [], "any", false, false, false, 72);
                                    echo "\" class=\"lazyload\">
                            ";
                                } else {
                                    // line 74
                                    echo "                              <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image", [], "any", false, false, false, 74);
                                    echo "\" data-image=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image", [], "any", false, false, false, 74);
                                    echo "\" ";
                                    if (twig_get_attribute($this->env, $this->source, $context["subitems"], "image2x", [], "any", false, false, false, 74)) {
                                        echo "srcset=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image", [], "any", false, false, false, 74);
                                        echo " 1x, ";
                                        echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image2x", [], "any", false, false, false, 74);
                                        echo " 2x\" data-image2x=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image2x", [], "any", false, false, false, 74);
                                        echo "\"";
                                    }
                                    echo " alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitems"], "name", [], "any", false, false, false, 74);
                                    echo "\" width=\"";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 74), "width", [], "any", false, false, false, 74);
                                    echo "\" height=\"";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 74), "height", [], "any", false, false, false, 74);
                                    echo "\">
                            ";
                                }
                                // line 76
                                echo "                          </a>
                        ";
                            }
                            // line 78
                            echo "                        <div class=\"subitems\">
                          ";
                            // line 79
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["subitems"], "items", [], "any", false, false, false, 79));
                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item"]) {
                                // line 80
                                echo "                            <div class=\"subitem\" data-image=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image", [], "any", false, false, false, 80);
                                echo "\" ";
                                if (twig_get_attribute($this->env, $this->source, $context["sub_item"], "image2x", [], "any", false, false, false, 80)) {
                                    echo "data-image2x=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image", [], "any", false, false, false, 80);
                                    echo " 1x, ";
                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image2x", [], "any", false, false, false, 80);
                                    echo " 2x\"";
                                }
                                echo ">
                              <a href=\"";
                                // line 81
                                echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "href", [], "any", false, false, false, 81);
                                echo "\"><span>";
                                echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "name", [], "any", false, false, false, 81);
                                echo "</span></a>
                            </div>
                          ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 84
                            echo "                          ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "viewMoreAlwaysShow", [], "any", false, false, false, 84) || (twig_get_attribute($this->env, $this->source, $context["subitems"], "total", [], "any", false, false, false, 84) > twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subitems"], "items", [], "any", false, false, false, 84))))) {
                                // line 85
                                echo "                            <div class=\"subitem view-more\">
                              <a href=\"";
                                // line 86
                                echo twig_get_attribute($this->env, $this->source, $context["subitems"], "href", [], "any", false, false, false, 86);
                                echo "\"><span>";
                                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "viewMoreText", [], "any", false, false, false, 86);
                                echo "</span></a>
                            </div>
                          ";
                            }
                            // line 89
                            echo "                        </div>
                      </div>
                    </div>
                  </div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitems'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 94
                        echo "              </div>
              <div class=\"auto-carousel-bar auto-carousel-controls\">
                <div class=\"auto-carousel-thumb\"></div>
                <div class=\"auto-carousel-fill\"></div>
              </div>
              <div class=\"auto-carousel-buttons auto-carousel-controls\">
                <div class=\"auto-carousel-prev\"><span></span></div>
                <div class=\"auto-carousel-next\"><span></span></div>
              </div>
            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 103
($context["context"] ?? null), "gridType", [], "any", false, false, false, 103) == "masonry")) {
                        // line 104
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 104));
                        foreach ($context['_seq'] as $context["_key"] => $context["subitems"]) {
                            // line 105
                            echo "                <div class=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["subitems"], "classes", [], "any", false, false, false, 105)], "method", false, false, false, 105);
                            echo "\">
                  <div class=\"item-content\">
                    <a href=\"";
                            // line 107
                            echo twig_get_attribute($this->env, $this->source, $context["subitems"], "href", [], "any", false, false, false, 107);
                            echo "\" class=\"catalog-title\">";
                            echo twig_get_attribute($this->env, $this->source, $context["subitems"], "name", [], "any", false, false, false, 107);
                            echo "</a>
                    <div class=\"item-assets image-left\">
                      ";
                            // line 109
                            if (twig_get_attribute($this->env, $this->source, $context["subitems"], "image", [], "any", false, false, false, 109)) {
                                // line 110
                                echo "                        <a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["subitems"], "href", [], "any", false, false, false, 110);
                                echo "\" class=\"catalog-image\">
                          ";
                                // line 111
                                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 111)) {
                                    // line 112
                                    echo "                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "dummy_image", [], "any", false, false, false, 112);
                                    echo "\" data-src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image", [], "any", false, false, false, 112);
                                    echo "\" data-image=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image", [], "any", false, false, false, 112);
                                    echo "\" ";
                                    if (twig_get_attribute($this->env, $this->source, $context["subitems"], "image2x", [], "any", false, false, false, 112)) {
                                        echo "data-srcset=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image", [], "any", false, false, false, 112);
                                        echo " 1x, ";
                                        echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image2x", [], "any", false, false, false, 112);
                                        echo " 2x\"";
                                    }
                                    echo " alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitems"], "name", [], "any", false, false, false, 112);
                                    echo "\" width=\"";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 112), "width", [], "any", false, false, false, 112);
                                    echo "\" height=\"";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 112), "height", [], "any", false, false, false, 112);
                                    echo "\" class=\"lazyload\"/>
                          ";
                                } else {
                                    // line 114
                                    echo "                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image", [], "any", false, false, false, 114);
                                    echo "\" data-image=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image", [], "any", false, false, false, 114);
                                    echo "\" ";
                                    if (twig_get_attribute($this->env, $this->source, $context["subitems"], "image2x", [], "any", false, false, false, 114)) {
                                        echo "srcset=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image", [], "any", false, false, false, 114);
                                        echo " 1x, ";
                                        echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image2x", [], "any", false, false, false, 114);
                                        echo " 2x\" data-image2x=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["subitems"], "image2x", [], "any", false, false, false, 114);
                                        echo "\"";
                                    }
                                    echo " alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["subitems"], "name", [], "any", false, false, false, 114);
                                    echo "\" width=\"";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 114), "width", [], "any", false, false, false, 114);
                                    echo "\" height=\"";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 114), "height", [], "any", false, false, false, 114);
                                    echo "\"/>
                          ";
                                }
                                // line 116
                                echo "                        </a>
                      ";
                            }
                            // line 118
                            echo "                      <div class=\"subitems\">
                        ";
                            // line 119
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["subitems"], "items", [], "any", false, false, false, 119));
                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item"]) {
                                // line 120
                                echo "                          <div class=\"subitem\" data-image=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image", [], "any", false, false, false, 120);
                                echo "\" ";
                                if (twig_get_attribute($this->env, $this->source, $context["sub_item"], "image2x", [], "any", false, false, false, 120)) {
                                    echo "data-image2x=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image", [], "any", false, false, false, 120);
                                    echo " 1x, ";
                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "image2x", [], "any", false, false, false, 120);
                                    echo " 2x\"";
                                }
                                echo ">
                            <a href=\"";
                                // line 121
                                echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "href", [], "any", false, false, false, 121);
                                echo "\"><span>";
                                echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "name", [], "any", false, false, false, 121);
                                echo "</span></a>
                          </div>
                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 124
                            echo "                        ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "viewMoreAlwaysShow", [], "any", false, false, false, 124) || (twig_get_attribute($this->env, $this->source, $context["subitems"], "total", [], "any", false, false, false, 124) > twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subitems"], "items", [], "any", false, false, false, 124))))) {
                                // line 125
                                echo "                          <div class=\"subitem view-more\">
                            <a href=\"";
                                // line 126
                                echo twig_get_attribute($this->env, $this->source, $context["subitems"], "href", [], "any", false, false, false, 126);
                                echo "\"><span>";
                                echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "viewMoreText", [], "any", false, false, false, 126);
                                echo "</span></a>
                          </div>
                        ";
                            }
                            // line 129
                            echo "                      </div>
                    </div>
                  </div>
                </div>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitems'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 134
                        echo "            ";
                    }
                    // line 135
                    echo "            </div>";
                } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "subtype", [], "any", false, false, false, 135) == "custom")) {
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "catalog", [], "any", false, false, false, 135);
                } else {
                    echo twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "noItemsText", [], "any", false, false, false, 135);
                }
                echo "</div>
      ";
            }
            // line 137
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "products", [], "any", false, false, false, 137) && (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "productsPosition", [], "any", false, false, false, 137) == "body"))) {
                // line 138
                echo "        <div class=\"block-products\">
          ";
                // line 139
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "products", [], "any", false, false, false, 139);
                echo "
        </div>
      ";
            }
            // line 142
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "manufacturers", [], "any", false, false, false, 142)) {
                // line 143
                echo "        <div class=\"block-manufacturers\">
          ";
                // line 144
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "manufacturers", [], "any", false, false, false, 144);
                echo "
        </div>
      ";
            }
            // line 147
            echo "    </div>
  </div>
  ";
            // line 149
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "products", [], "any", false, false, false, 149) && (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "productsPosition", [], "any", false, false, false, 149) == "block"))) {
                // line 150
                echo "    <div class=\"block-products\">
      ";
                // line 151
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "products", [], "any", false, false, false, 151);
                echo "
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
        return "journal3/template/journal3/module/catalog_blocks.twig";
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
        return array (  980 => 151,  977 => 150,  975 => 149,  971 => 147,  965 => 144,  962 => 143,  959 => 142,  953 => 139,  950 => 138,  947 => 137,  937 => 135,  934 => 134,  924 => 129,  916 => 126,  913 => 125,  910 => 124,  899 => 121,  886 => 120,  882 => 119,  879 => 118,  875 => 116,  851 => 114,  827 => 112,  825 => 111,  820 => 110,  818 => 109,  811 => 107,  805 => 105,  800 => 104,  798 => 103,  787 => 94,  777 => 89,  769 => 86,  766 => 85,  763 => 84,  752 => 81,  739 => 80,  735 => 79,  732 => 78,  728 => 76,  704 => 74,  680 => 72,  678 => 71,  673 => 70,  671 => 69,  664 => 67,  658 => 65,  654 => 64,  651 => 63,  649 => 62,  644 => 61,  641 => 60,  638 => 59,  632 => 57,  630 => 56,  627 => 55,  623 => 53,  613 => 51,  611 => 50,  605 => 47,  601 => 46,  597 => 44,  593 => 42,  587 => 40,  585 => 39,  581 => 38,  578 => 37,  576 => 36,  573 => 35,  567 => 33,  565 => 32,  561 => 30,  559 => 29,  556 => 28,  550 => 26,  547 => 25,  527 => 23,  505 => 21,  503 => 20,  500 => 19,  498 => 18,  492 => 17,  488 => 15,  486 => 14,  483 => 13,  479 => 11,  471 => 10,  469 => 9,  465 => 8,  462 => 7,  459 => 6,  451 => 4,  448 => 3,  445 => 2,  431 => 1,  425 => 236,  421 => 234,  402 => 229,  393 => 227,  384 => 222,  381 => 221,  361 => 219,  339 => 217,  336 => 216,  334 => 215,  322 => 214,  315 => 211,  298 => 210,  293 => 209,  290 => 208,  288 => 207,  283 => 204,  269 => 203,  263 => 200,  254 => 199,  251 => 198,  234 => 197,  230 => 195,  215 => 193,  212 => 192,  202 => 190,  200 => 189,  194 => 187,  191 => 186,  171 => 184,  149 => 182,  146 => 181,  144 => 180,  133 => 179,  123 => 177,  121 => 176,  116 => 175,  99 => 174,  90 => 171,  87 => 170,  85 => 169,  82 => 168,  73 => 165,  68 => 164,  63 => 163,  60 => 162,  57 => 160,  51 => 158,  49 => 157,  43 => 156,  38 => 155,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/catalog_blocks.twig", "");
    }
}
