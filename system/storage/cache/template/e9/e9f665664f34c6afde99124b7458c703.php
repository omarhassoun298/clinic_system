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

/* journal3/template/journal3/module/product_tabs.twig */
class __TwigTemplate_4c164b244e07b070c7218811aabf4a73 extends Template
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
        if ((($context["display"] ?? null) == "tabs")) {
            // line 2
            echo "  <div class=\"tab-container ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 2);
            echo "\">
    <div class=\"full-tabs-bg\"></div>
    <ul class=\"nav nav-tabs\">
      ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "        <li class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "tab_classes", [], "any", false, false, false, 6)], "method", false, false, false, 6);
                echo "\">
          ";
                // line 7
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "tabType", [], "any", false, false, false, 7) == "link")) {
                    // line 8
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 8), "href", [], "any", false, false, false, 8);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 8)], "method", false, false, false, 8);
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 8);
                    echo "</a>
          ";
                } else {
                    // line 10
                    echo "            <a href=\"#";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 10);
                    echo "\" data-toggle=\"tab\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 10);
                    echo "</a>
          ";
                }
                // line 12
                echo "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    </ul>
    <div class=\"tab-content\">
      ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "        <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 17)], "method", false, false, false, 17);
                echo "\" id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 17);
                echo "\">
          <div class=\"block-body expand-block\">
            <div class=\"block-wrapper\">
              <div class=\"block-content ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["item"], "expandButton", [], "any", false, false, false, 20)) {
                    echo "expand-content";
                }
                echo "\">
                ";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 21);
                echo "
                ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["item"], "expandButton", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\" role=\"button\" aria-label=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalExpandButtonText"], "method", false, false, false, 23);
                    echo "\"></a></div>
                ";
                }
                // line 25
                echo "              </div>
            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </div>
  </div>
";
        } elseif ((        // line 32
($context["display"] ?? null) == "accordion")) {
            // line 33
            echo "  <div class=\"panel-group ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 33);
            echo "\">
    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "      <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 35)], "method", false, false, false, 35);
                echo "\">
        <div class=\"panel-heading\">
          <h4 class=\"panel-title\">
            <a href=\"#";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 38);
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\">
              ";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 39);
                echo "
              <i class=\"fa fa-caret-down\"></i>
            </a>
          </h4>
        </div>
        <div class=\"";
                // line 44
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "panel_classes", [], "any", false, false, false, 44)], "method", false, false, false, 44);
                echo "\" id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 44);
                echo "\">
          <div class=\"block-body expand-block\">
            <div class=\"block-wrapper\">
              <div class=\"panel-body block-content ";
                // line 47
                if (twig_get_attribute($this->env, $this->source, $context["item"], "expandButton", [], "any", false, false, false, 47)) {
                    echo "expand-content";
                }
                echo "\">
                ";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 48);
                echo "
                ";
                // line 49
                if (twig_get_attribute($this->env, $this->source, $context["item"], "expandButton", [], "any", false, false, false, 49)) {
                    // line 50
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\" role=\"button\" aria-label=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalExpandButtonText"], "method", false, false, false, 50);
                    echo "\"></a></div>
                ";
                }
                // line 52
                echo "              </div>
            </div>
          </div>
        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "  </div>
";
        } else {
            // line 60
            echo "  <div class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 60);
            echo "\">
    ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 62
                echo "      <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 62)], "method", false, false, false, 62);
                echo "\">
        ";
                // line 63
                if (twig_get_attribute($this->env, $this->source, $context["item"], "popup", [], "any", false, false, false, 63)) {
                    // line 64
                    echo "          <button data-open-popup=\"#";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 64);
                    echo "-popup\" class=\"btn product-blocks-popup-btn\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 64);
                    echo "</button>
          <template id=\"";
                    // line 65
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 65);
                    echo "-popup\">
            <div class=\"popup-wrapper popup-block ";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "popup_classes", [], "any", false, false, false, 66)], "method", false, false, false, 66);
                    echo "\">
              <div class=\"journal-loading\"><em class=\"fa fa-spinner fa-spin\"></em></div>
              <div class=\"popup-container\">
                <div class=\"popup-body\">
                  <div class=\"popup-inner-body\">
                    <button class=\"btn popup-close\"></button>
                    <div class=\"block-body popup-content\">
                      <div class=\"block-wrapper\">
                        <div class=\"block-content\">
                          ";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 75);
                    echo "
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"popup-bg popup-bg-closable\"></div>
            </div>
          </template>
        ";
                } else {
                    // line 86
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 86)) {
                        // line 87
                        echo "            <h3 class=\"title module-title\">";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 87);
                        echo "</h3>
          ";
                    }
                    // line 89
                    echo "          <div class=\"block-body expand-block\">
            <div class=\"block-wrapper\">
              <div class=\"block-content ";
                    // line 91
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "expandButton", [], "any", false, false, false, 91)) {
                        echo "expand-content";
                    }
                    echo "\">
                ";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 92);
                    echo "
                ";
                    // line 93
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "expandButton", [], "any", false, false, false, 93)) {
                        // line 94
                        echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\" role=\"button\" aria-label=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalExpandButtonText"], "method", false, false, false, 94);
                        echo "\"></a></div>
                ";
                    }
                    // line 96
                    echo "              </div>
            </div>
          </div>
        ";
                }
                // line 100
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/module/product_tabs.twig";
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
        return array (  299 => 102,  292 => 100,  286 => 96,  280 => 94,  278 => 93,  274 => 92,  268 => 91,  264 => 89,  258 => 87,  255 => 86,  241 => 75,  229 => 66,  225 => 65,  218 => 64,  216 => 63,  211 => 62,  207 => 61,  202 => 60,  198 => 58,  187 => 52,  181 => 50,  179 => 49,  175 => 48,  169 => 47,  161 => 44,  153 => 39,  149 => 38,  142 => 35,  138 => 34,  133 => 33,  131 => 32,  127 => 30,  117 => 25,  111 => 23,  109 => 22,  105 => 21,  99 => 20,  90 => 17,  86 => 16,  82 => 14,  75 => 12,  67 => 10,  57 => 8,  55 => 7,  50 => 6,  46 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/product_tabs.twig", "");
    }
}
