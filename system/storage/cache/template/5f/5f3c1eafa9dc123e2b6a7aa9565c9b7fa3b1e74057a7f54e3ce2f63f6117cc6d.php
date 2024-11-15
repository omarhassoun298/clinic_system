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

/* journal3/template/journal3/module/top_menu.twig */
class __TwigTemplate_4271d4b570a6edd57aea8da30fa932fdb9c2d5049e1c44701a6bc5621214205e extends Template
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
        // line 48
        if (($context["items"] ?? null)) {
            // line 49
            echo "  <div class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 49);
            echo "\">
    <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
            // line 50
            echo ($context["edit"] ?? null);
            echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
            echo ($context["name"] ?? null);
            echo "\"></em></button>
    <ul class=\"j-menu\">
      ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 53
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_renderTopMenu", [$context, $context["item"]], 53, $context, $this->getSourceContext());
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "    </ul>
  </div>
";
        }
    }

    // line 1
    public function macro_renderTopMenu($__context__ = null, $__item__ = null, ...$__varargs__)
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
            $context["image_width"] = twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "image_width", [], "any", false, false, false, 3);
            // line 4
            echo "  ";
            $context["image_height"] = twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "image_height", [], "any", false, false, false, 4);
            // line 5
            echo "  <li class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "classes", [], "any", false, false, false, 5)], "method", false, false, false, 5);
            echo "\">
    ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 6)) {
                // line 7
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 7), "href", [], "any", false, false, false, 7)) {
                    // line 8
                    echo "        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 8), "href", [], "any", false, false, false, 8);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 8)], "method", false, false, false, 8);
                    echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-label=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 8);
                    echo "\">
          ";
                    // line 9
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 9)) {
                        // line 10
                        echo "            <span class=\"menu-image\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 10);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 10)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 10);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 10);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 10);
                        echo "\" width=\"";
                        echo ($context["image_width"] ?? null);
                        echo "\" height=\"";
                        echo ($context["image_height"] ?? null);
                        echo "\"/></span>
          ";
                    }
                    // line 12
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 12), "total", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 12), "classes", [], "any", false, false, false, 12)], "method", false, false, false, 12);
                    echo "
        </a>
      ";
                } else {
                    // line 15
                    echo "        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-label=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 15);
                    echo "\">
          ";
                    // line 16
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 16)) {
                        // line 17
                        echo "            <span class=\"menu-image\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 17);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 17)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 17);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 17);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 17);
                        echo "\" width=\"";
                        echo ($context["image_width"] ?? null);
                        echo "\" height=\"";
                        echo ($context["image_height"] ?? null);
                        echo "\"/></span>
          ";
                    }
                    // line 19
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 19), "total", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 19), "classes", [], "any", false, false, false, 19)], "method", false, false, false, 19);
                    echo "
        </a>
      ";
                }
                // line 22
                echo "      <div class=\"dropdown-menu j-dropdown ";
                echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_color_scheme", [], "any", false, false, false, 22)) ?: (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "dropdown_color_scheme", [], "any", false, false, false, 22)));
                echo "\">
        <ul class=\"j-menu\">
          ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 25
                    echo "            ";
                    echo twig_call_macro($macros["_self"], "macro_renderTopMenu", [($context["context"] ?? null), $context["subitem"]], 25, $context, $this->getSourceContext());
                    echo "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "        </ul>
      </div>
    ";
            } else {
                // line 30
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 30), "href", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 31), "href", [], "any", false, false, false, 31);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 31)], "method", false, false, false, 31);
                    echo " aria-label=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 31);
                    echo "\">
          ";
                    // line 32
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 32)) {
                        // line 33
                        echo "            <span class=\"menu-image\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 33);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 33)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 33);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 33);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 33);
                        echo "\" width=\"";
                        echo ($context["image_width"] ?? null);
                        echo "\" height=\"";
                        echo ($context["image_height"] ?? null);
                        echo "\"/></span>
          ";
                    }
                    // line 35
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 35), "total", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 35), "classes", [], "any", false, false, false, 35)], "method", false, false, false, 35);
                    echo "
        </a>
      ";
                } else {
                    // line 38
                    echo "        <a href=\"javascript:;\" aria-label=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 38);
                    echo "\">
          ";
                    // line 39
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 39)) {
                        // line 40
                        echo "            <span class=\"menu-image\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 40);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 40)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 40);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 40);
                            echo " 2x\" ";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 40);
                        echo "\" width=\"";
                        echo ($context["image_width"] ?? null);
                        echo "\" height=\"";
                        echo ($context["image_height"] ?? null);
                        echo "\"/></span>
          ";
                    }
                    // line 42
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 42), "total", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 42), "classes", [], "any", false, false, false, 42)], "method", false, false, false, 42);
                    echo "
        </a>
      ";
                }
                // line 45
                echo "    ";
            }
            // line 46
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
        return "journal3/template/journal3/module/top_menu.twig";
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
        return array (  279 => 46,  276 => 45,  269 => 42,  249 => 40,  247 => 39,  242 => 38,  235 => 35,  215 => 33,  213 => 32,  204 => 31,  201 => 30,  196 => 27,  187 => 25,  183 => 24,  177 => 22,  170 => 19,  150 => 17,  148 => 16,  143 => 15,  136 => 12,  116 => 10,  114 => 9,  105 => 8,  102 => 7,  100 => 6,  95 => 5,  92 => 4,  89 => 3,  86 => 2,  72 => 1,  65 => 55,  56 => 53,  52 => 52,  45 => 50,  40 => 49,  38 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/top_menu.twig", "");
    }
}
