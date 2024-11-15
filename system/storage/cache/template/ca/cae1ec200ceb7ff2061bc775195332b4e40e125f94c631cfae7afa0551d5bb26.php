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

/* journal3/template/journal3/module/main_menu.twig */
class __TwigTemplate_4f17b4df14751b920bb28c580cc30a24b3c0190c53c8d3a6c9c4ca1cc35f4a56 extends Template
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
        // line 60
        if (($context["items"] ?? null)) {
            // line 61
            echo "  <div id=\"";
            echo ($context["id"] ?? null);
            echo "\" class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 61);
            echo "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
            // line 62
            echo ($context["edit"] ?? null);
            echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
            echo ($context["name"] ?? null);
            echo "\"></em></button>
    <ul class=\"j-menu\">";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 64
                echo "      ";
                $context["cid"] = twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "uniqueId", ["collapse-"], "method", false, false, false, 64);
                // line 65
                echo "      <li class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 65)], "method", false, false, false, 65);
                echo "\" data-open-color-scheme=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "dropdown_color_scheme", [], "any", false, false, false, 65)) ?: (($context["dropdown_color_scheme"] ?? null)));
                echo "\">
        ";
                // line 66
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 66)) {
                    // line 67
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 67), "href", [], "any", false, false, false, 67)) {
                        // line 68
                        echo "            <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 68), "href", [], "any", false, false, false, 68);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 68)], "method", false, false, false, 68);
                        echo " ";
                        if ((($context["display"] ?? null) == "dropdown")) {
                            echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                        } else {
                            echo " class=\"collapse-toggle\"";
                        }
                        echo ">
              ";
                        // line 69
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 69)) {
                            // line 70
                            echo "                <span class=\"menu-image\">
                  <img src=\"";
                            // line 71
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 71);
                            echo "\" ";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 71)) {
                                echo "srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 71);
                                echo " 1x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 71);
                                echo " 2x\" ";
                            }
                            echo " alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 71);
                            echo "\" width=\"";
                            echo ($context["image_width"] ?? null);
                            echo "\" height=\"";
                            echo ($context["image_height"] ?? null);
                            echo "\" loading=\"lazy\"/>
                </span>
              ";
                        }
                        // line 74
                        echo "              ";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 74), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 74), "total", [], "any", false, false, false, 74), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 74), "classes", [], "any", false, false, false, 74)], "method", false, false, false, 74);
                        echo "
              <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                        // line 75
                        echo ($context["cid"] ?? null);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 75)) {
                            echo "aria-expanded=\"true\"";
                        }
                        echo "><em class=\"fa fa-plus\"></em></span>
              ";
                        // line 76
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 76)) {
                            // line 77
                            echo "                <span class=\"menu-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 77);
                            echo "</span>
              ";
                        }
                        // line 79
                        echo "            </a>
          ";
                    } else {
                        // line 81
                        echo "            <a href=\"javascript:;\" ";
                        if ((($context["display"] ?? null) == "dropdown")) {
                            echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                        } else {
                            echo " class=\"collapse-toggle\"";
                        }
                        echo ">
              ";
                        // line 82
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 82)) {
                            // line 83
                            echo "                <span class=\"menu-image\">
                  <img src=\"";
                            // line 84
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 84);
                            echo "\" ";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 84)) {
                                echo "srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 84);
                                echo " 1x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 84);
                                echo " 2x\" ";
                            }
                            echo " alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 84);
                            echo "\" width=\"";
                            echo ($context["image_width"] ?? null);
                            echo "\" height=\"";
                            echo ($context["image_height"] ?? null);
                            echo "\" loading=\"lazy\"/>
                </span>
              ";
                        }
                        // line 87
                        echo "              ";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 87), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 87), "total", [], "any", false, false, false, 87), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 87), "classes", [], "any", false, false, false, 87)], "method", false, false, false, 87);
                        echo "
              <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                        // line 88
                        echo ($context["cid"] ?? null);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 88)) {
                            echo "aria-expanded=\"true\"";
                        }
                        echo "><em class=\"fa fa-plus\"></em></span>
              ";
                        // line 89
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 89)) {
                            // line 90
                            echo "                <span class=\"menu-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 90);
                            echo "</span>
              ";
                        }
                        // line 92
                        echo "            </a>
          ";
                    }
                    // line 94
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 94) == "multilevel")) {
                        // line 95
                        echo "            <div class=\"";
                        echo (((($context["display"] ?? null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 95)) {
                            echo "in";
                        }
                        echo " ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["item"], "dropdown_color_scheme", [], "any", false, false, false, 95)) ?: (($context["dropdown_color_scheme"] ?? null)));
                        echo "\" id=\"";
                        echo ($context["cid"] ?? null);
                        echo "\">
              ";
                        // line 96
                        echo (( !twig_get_attribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 96)) ? ("<template>") : (""));
                        echo "
              <ul class=\"j-menu\">
                ";
                        // line 98
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 98));
                        foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                            // line 99
                            echo "                  ";
                            echo twig_call_macro($macros["_self"], "macro_renderMainMenu", [$context, $context["subitem"]], 99, $context, $this->getSourceContext());
                            echo "
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 101
                        echo "              </ul>
              ";
                        // line 102
                        echo (( !twig_get_attribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 102)) ? ("</template>") : (""));
                        echo "
            </div>
          ";
                    }
                    // line 105
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 105) == "megamenu")) {
                        // line 106
                        echo "            <div class=\"";
                        echo (((($context["display"] ?? null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 106)) {
                            echo "in";
                        }
                        echo " ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["item"], "dropdown_color_scheme", [], "any", false, false, false, 106)) ?: (($context["dropdown_color_scheme"] ?? null)));
                        echo "\" id=\"";
                        echo ($context["cid"] ?? null);
                        echo "\">
              ";
                        // line 107
                        echo (( !twig_get_attribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 107)) ? ("<template>") : (""));
                        echo "
              <div class=\"mega-menu-content\">";
                        // line 108
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 108);
                        echo "</div>
              ";
                        // line 109
                        echo (( !twig_get_attribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 109)) ? ("</template>") : (""));
                        echo "
            </div>
          ";
                    }
                    // line 112
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 112) == "flyout")) {
                        // line 113
                        echo "            <div class=\"";
                        echo (((($context["display"] ?? null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 113)) {
                            echo "in";
                        }
                        echo " ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["item"], "dropdown_color_scheme", [], "any", false, false, false, 113)) ?: (($context["dropdown_color_scheme"] ?? null)));
                        echo "\" id=\"";
                        echo ($context["cid"] ?? null);
                        echo "\">
              ";
                        // line 114
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 114);
                        echo "
            </div>
          ";
                    }
                    // line 117
                    echo "        ";
                } else {
                    // line 118
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 118), "href", [], "any", false, false, false, 118)) {
                        // line 119
                        echo "            <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 119), "href", [], "any", false, false, false, 119);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 119)], "method", false, false, false, 119);
                        echo ">
              ";
                        // line 120
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 120)) {
                            // line 121
                            echo "                <span class=\"menu-image\">
                   <img src=\"";
                            // line 122
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 122);
                            echo "\" ";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 122)) {
                                echo "srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 122);
                                echo " 1x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 122);
                                echo " 2x\" ";
                            }
                            echo " alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 122);
                            echo "\" width=\"";
                            echo ($context["image_width"] ?? null);
                            echo "\" height=\"";
                            echo ($context["image_height"] ?? null);
                            echo "\" loading=\"lazy\"/>
                </span>
              ";
                        }
                        // line 125
                        echo "              ";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 125), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 125), "total", [], "any", false, false, false, 125), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 125), "classes", [], "any", false, false, false, 125)], "method", false, false, false, 125);
                        echo "
              ";
                        // line 126
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 126)) {
                            // line 127
                            echo "                <span class=\"menu-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 127);
                            echo "</span>
              ";
                        }
                        // line 129
                        echo "            </a>
          ";
                    } else {
                        // line 131
                        echo "            <a href=\"javascript:;\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 131);
                        echo "\">
              ";
                        // line 132
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 132)) {
                            // line 133
                            echo "                <span class=\"menu-image\">
                  <img src=\"";
                            // line 134
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 134);
                            echo "\" ";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 134)) {
                                echo "srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 134);
                                echo " 1x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 134);
                                echo " 2x\" ";
                            }
                            echo " alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 134);
                            echo "\" width=\"";
                            echo ($context["image_width"] ?? null);
                            echo "\" height=\"";
                            echo ($context["image_height"] ?? null);
                            echo "\" loading=\"lazy\"/>
                </span>
              ";
                        }
                        // line 137
                        echo "              ";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 137), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 137), "total", [], "any", false, false, false, 137), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 137), "classes", [], "any", false, false, false, 137)], "method", false, false, false, 137);
                        echo "
              ";
                        // line 138
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 138)) {
                            // line 139
                            echo "                <span class=\"menu-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 139);
                            echo "</span>
              ";
                        }
                        // line 141
                        echo "            </a>
          ";
                    }
                    // line 143
                    echo "        ";
                }
                // line 144
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "    </ul>
  </div>
";
        }
    }

    // line 1
    public function macro_renderMainMenu($__context__ = null, $__item__ = null, ...$__varargs__)
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
            $context["display"] = twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "display", [], "any", false, false, false, 3);
            // line 4
            echo "  ";
            $context["cid"] = twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "uniqueId", ["collapse-"], "method", false, false, false, 4);
            // line 5
            echo "  ";
            $context["image_width"] = twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "image_width", [], "any", false, false, false, 5);
            // line 6
            echo "  ";
            $context["image_height"] = twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "image_height", [], "any", false, false, false, 6);
            // line 7
            echo "  <li class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "classes", [], "any", false, false, false, 7)], "method", false, false, false, 7);
            echo "\">
    ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 8)) {
                // line 9
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 9), "href", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 10), "href", [], "any", false, false, false, 10);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 10)], "method", false, false, false, 10);
                    echo " ";
                    if ((($context["display"] ?? null) == "dropdown")) {
                        echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                    } else {
                        echo " class=\"collapse-toggle\"";
                    }
                    echo ">
          ";
                    // line 11
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 11)) {
                        // line 12
                        echo "            <span class=\"menu-image\">
                <img src=\"";
                        // line 13
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 13);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 13)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 13);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 13);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 13);
                        echo "\" width=\"";
                        echo ($context["image_width"] ?? null);
                        echo "\" height=\"";
                        echo ($context["image_height"] ?? null);
                        echo "\" loading=\"lazy\"/>
            </span>
          ";
                    }
                    // line 16
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 16), "total", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 16), "classes", [], "any", false, false, false, 16)], "method", false, false, false, 16);
                    echo "
          <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                    // line 17
                    echo ($context["cid"] ?? null);
                    echo "\"><em class=\"fa fa-plus\"></em></span>
        </a>
      ";
                } else {
                    // line 20
                    echo "        <a href=\"javascript:;\" ";
                    if ((($context["display"] ?? null) == "dropdown")) {
                        echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                    } else {
                        echo " class=\"collapse-toggle\"";
                    }
                    echo ">
          ";
                    // line 21
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 21)) {
                        // line 22
                        echo "            <span class=\"menu-image\">
               <img src=\"";
                        // line 23
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 23);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 23)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 23);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 23);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 23);
                        echo "\" width=\"";
                        echo ($context["image_width"] ?? null);
                        echo "\" height=\"";
                        echo ($context["image_height"] ?? null);
                        echo "\" loading=\"lazy\"/>
            </span>
          ";
                    }
                    // line 26
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 26), "total", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 26), "classes", [], "any", false, false, false, 26)], "method", false, false, false, 26);
                    echo "
          <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                    // line 27
                    echo ($context["cid"] ?? null);
                    echo "\"><em class=\"fa fa-plus\"></em></span>
        </a>
      ";
                }
                // line 30
                echo "     <div class=\"";
                echo (((($context["display"] ?? null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                echo "\" id=\"";
                echo ($context["cid"] ?? null);
                echo "\">
       <ul class=\"j-menu\">
         ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 33
                    echo "           ";
                    echo twig_call_macro($macros["_self"], "macro_renderMainMenu", [$context, $context["subitem"]], 33, $context, $this->getSourceContext());
                    echo "
         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "       </ul>
     </div>
    ";
            } else {
                // line 38
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 38), "href", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 39), "href", [], "any", false, false, false, 39);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 39)], "method", false, false, false, 39);
                    echo ">
          ";
                    // line 40
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 40)) {
                        // line 41
                        echo "            <span class=\"menu-image\">
               <img src=\"";
                        // line 42
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 42);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 42)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 42);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 42);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 42);
                        echo "\" width=\"";
                        echo ($context["image_width"] ?? null);
                        echo "\" height=\"";
                        echo ($context["image_height"] ?? null);
                        echo "\" loading=\"lazy\"/>
            </span>
          ";
                    }
                    // line 45
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 45), "total", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 45), "classes", [], "any", false, false, false, 45)], "method", false, false, false, 45);
                    echo "
        </a>
      ";
                } else {
                    // line 48
                    echo "        <a href=\"javascript:;\">
          ";
                    // line 49
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 49)) {
                        // line 50
                        echo "            <span class=\"menu-image\">
              <img src=\"";
                        // line 51
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 51);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 51)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 51);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 51);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 51);
                        echo "\" width=\"";
                        echo ($context["image_width"] ?? null);
                        echo "\" height=\"";
                        echo ($context["image_height"] ?? null);
                        echo "\" loading=\"lazy\"/>
            </span>
          ";
                    }
                    // line 54
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 54), "total", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 54), "classes", [], "any", false, false, false, 54)], "method", false, false, false, 54);
                    echo "
        </a>
      ";
                }
                // line 57
                echo "    ";
            }
            // line 58
            echo "  </li>
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
        return "journal3/template/journal3/module/main_menu.twig";
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
        return array (  647 => 58,  644 => 57,  637 => 54,  617 => 51,  614 => 50,  612 => 49,  609 => 48,  602 => 45,  582 => 42,  579 => 41,  577 => 40,  570 => 39,  567 => 38,  562 => 35,  553 => 33,  549 => 32,  541 => 30,  535 => 27,  530 => 26,  510 => 23,  507 => 22,  505 => 21,  496 => 20,  490 => 17,  485 => 16,  465 => 13,  462 => 12,  460 => 11,  447 => 10,  444 => 9,  442 => 8,  437 => 7,  434 => 6,  431 => 5,  428 => 4,  425 => 3,  422 => 2,  408 => 1,  401 => 146,  394 => 144,  391 => 143,  387 => 141,  381 => 139,  379 => 138,  374 => 137,  354 => 134,  351 => 133,  349 => 132,  344 => 131,  340 => 129,  334 => 127,  332 => 126,  327 => 125,  307 => 122,  304 => 121,  302 => 120,  295 => 119,  292 => 118,  289 => 117,  283 => 114,  270 => 113,  267 => 112,  261 => 109,  257 => 108,  253 => 107,  240 => 106,  237 => 105,  231 => 102,  228 => 101,  219 => 99,  215 => 98,  210 => 96,  197 => 95,  194 => 94,  190 => 92,  184 => 90,  182 => 89,  174 => 88,  169 => 87,  149 => 84,  146 => 83,  144 => 82,  135 => 81,  131 => 79,  125 => 77,  123 => 76,  115 => 75,  110 => 74,  90 => 71,  87 => 70,  85 => 69,  72 => 68,  69 => 67,  67 => 66,  60 => 65,  57 => 64,  53 => 63,  47 => 62,  40 => 61,  38 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/main_menu.twig", "");
    }
}
