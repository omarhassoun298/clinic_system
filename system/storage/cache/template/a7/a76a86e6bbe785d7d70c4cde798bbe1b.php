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

/* journal3/template/journal3/module/accordion_menu.twig */
class __TwigTemplate_d67a92df91cc11eaeea1ff6529daef52 extends Template
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
        // line 51
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 51);
        echo "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 52
        echo ($context["edit"] ?? null);
        echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        echo ($context["name"] ?? null);
        echo "\"></em></button>
  ";
        // line 53
        if (($context["title"] ?? null)) {
            // line 54
            echo "    <h3 class=\"title module-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
  ";
        }
        // line 56
        echo "  <ul class=\"j-menu\">
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 58
            echo "      ";
            echo twig_call_macro($macros["_self"], "macro_renderAccordionMenu", [$context, $context["item"]], 58, $context, $this->getSourceContext());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "  </ul>
</div>
";
    }

    // line 1
    public function macro_renderAccordionMenu($__context__ = null, $__item__ = null, ...$__varargs__)
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
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "classes", [], "any", false, false, false, 5)], "method", false, false, false, 5), ["dropdown" => ""]);
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isOpen", [], "any", false, false, false, 5) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 5))) {
                echo "panel-active";
            }
            echo " ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDivider", [], "any", false, false, false, 5)) {
                echo "is-divider";
            }
            echo "\">
    ";
            // line 6
            $context["id"] = twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "uniqueId", ["collapse-"], "method", false, false, false, 6);
            // line 7
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 7), "href", [], "any", false, false, false, 7)) {
                // line 8
                echo "      <a href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 8), "href", [], "any", false, false, false, 8);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 8)], "method", false, false, false, 8);
                echo ">
        ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "          <span class=\"menu-image\">
            <img src=\"";
                    // line 11
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 11);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 11)) {
                        echo "srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 11);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 11);
                        echo " 2x\" ";
                    }
                    echo " alt=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 11);
                    echo "\" width=\"";
                    echo ($context["image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["image_height"] ?? null);
                    echo "\"/>
          </span>
        ";
                }
                // line 14
                echo "        ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 14), "total", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 14), "classes", [], "any", false, false, false, 14)], "method", false, false, false, 14);
                echo "
        ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isOpen", [], "any", false, false, false, 16)) {
                        // line 17
                        echo "            <span class=\"open-menu\" data-toggle=\"collapse\" data-target=\"#";
                        echo ($context["id"] ?? null);
                        echo "\" aria-expanded=\"true\" role=\"heading\"><em class=\"fa fa-plus\"></em></span>
          ";
                    } else {
                        // line 19
                        echo "            <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                        echo ($context["id"] ?? null);
                        echo "\" role=\"heading\"><em class=\"fa fa-plus\"></em></span>
          ";
                    }
                    // line 21
                    echo "        ";
                }
                // line 22
                echo "      </a>
    ";
            } else {
                // line 24
                echo "      <a>
        ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "          <span class=\"menu-image\">
              <img src=\"";
                    // line 27
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 27);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 27)) {
                        echo "srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 27);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 27);
                        echo " 2x\" ";
                    }
                    echo " alt=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 27);
                    echo "\" width=\"";
                    echo ($context["image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["image_height"] ?? null);
                    echo "\"/>
          </span>
        ";
                }
                // line 30
                echo "        ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 30), "total", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 30), "classes", [], "any", false, false, false, 30)], "method", false, false, false, 30);
                echo "
        ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isOpen", [], "any", false, false, false, 32)) {
                        // line 33
                        echo "            <span class=\"open-menu\" data-toggle=\"collapse\" data-target=\"#";
                        echo ($context["id"] ?? null);
                        echo "\" aria-expanded=\"true\" role=\"heading\"><em class=\"fa fa-plus\"></em></span>
          ";
                    } else {
                        // line 35
                        echo "            <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                        echo ($context["id"] ?? null);
                        echo "\" role=\"heading\"><em class=\"fa fa-plus\"></em></span>
          ";
                    }
                    // line 37
                    echo "        ";
                }
                // line 38
                echo "      </a>
    ";
            }
            // line 40
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 40)) {
                // line 41
                echo "      <div class=\"collapse ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isOpen", [], "any", false, false, false, 41)) {
                    echo "in";
                }
                echo "\" id=\"";
                echo ($context["id"] ?? null);
                echo "\">
        <ul class=\"j-menu\">
          ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 43));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 44
                    echo "            ";
                    echo twig_call_macro($macros["_self"], "macro_renderAccordionMenu", [($context["context"] ?? null), $context["subitem"]], 44, $context, $this->getSourceContext());
                    echo "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "        </ul>
      </div>
    ";
            }
            // line 49
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
        return "journal3/template/journal3/module/accordion_menu.twig";
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
        return array (  269 => 49,  264 => 46,  255 => 44,  251 => 43,  241 => 41,  238 => 40,  234 => 38,  231 => 37,  225 => 35,  219 => 33,  216 => 32,  214 => 31,  209 => 30,  189 => 27,  186 => 26,  184 => 25,  181 => 24,  177 => 22,  174 => 21,  168 => 19,  162 => 17,  159 => 16,  157 => 15,  152 => 14,  132 => 11,  129 => 10,  127 => 9,  120 => 8,  117 => 7,  115 => 6,  102 => 5,  99 => 4,  96 => 3,  93 => 2,  79 => 1,  73 => 60,  64 => 58,  60 => 57,  57 => 56,  51 => 54,  49 => 53,  43 => 52,  38 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/accordion_menu.twig", "");
    }
}
