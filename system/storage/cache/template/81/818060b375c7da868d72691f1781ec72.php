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

/* journal3/template/journal3/module/filter.twig */
class __TwigTemplate_09f3ce9d53144a20b093fddb216cf6a0 extends Template
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
        echo "<div class=\"desktop-filter-wrapper\">
  <div id=\"filter\" class=\"";
        // line 2
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 2);
        echo "\">
    <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 3
        echo ($context["edit"] ?? null);
        echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        echo ($context["name"] ?? null);
        echo "\"></em></button>
    <h3 class=\"title module-title\">
      <span class=\"filter-title-text\">";
        // line 5
        echo ($context["title"] ?? null);
        echo "</span>
      <button aria-label=\"Reset\" class=\"reset-filter btn\">";
        // line 6
        echo ($context["resetText"] ?? null);
        echo "</button>
      <a class=\"x\" href=\"javascript:;\" title=\"Close\"></a>
    </h3>
    <div class=\"module-body\">
      <div class=\"panel-group\">
        ";
        // line 11
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
            // line 12
            echo "          ";
            $context["item_input"] = ((twig_get_attribute($this->env, $this->source, $context["item"], "input", [], "any", false, false, false, 12)) ? (twig_get_attribute($this->env, $this->source, $context["item"], "input", [], "any", false, false, false, 12)) : (($context["input"] ?? null)));
            // line 13
            echo "          <div class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 13)], "method", false, false, false, 13);
            echo "\">
            <div class=\"panel-heading\">
              <div class=\"panel-title\">
                <a href=\"#";
            // line 16
            echo ($context["id"] ?? null);
            echo "-collapse-";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16);
            echo "\" class=\"accordion-toggle ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "collapsed", [], "any", false, false, false, 16)) {
                echo "collapsed";
            }
            echo "\" data-toggle=\"collapse\" aria-expanded=\"";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "collapsed", [], "any", false, false, false, 16)) {
                echo "false";
            } else {
                echo "true";
            }
            echo "\" data-filter=\"";
            echo twig_get_attribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 16);
            echo "\">
                  ";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 17);
            echo "
                  <em class=\"fa fa-caret-down\"></em>
                </a>
              </div>
            </div>
            <div class=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "panel_classes", [], "any", false, false, false, 22)], "method", false, false, false, 22);
            echo "\" id=\"";
            echo ($context["id"] ?? null);
            echo "-collapse-";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 22);
            echo "\">
              <div class=\"panel-body\">
                ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 24) == "p")) {
                // line 25
                echo "                  <div class=\"filter-price\" id=\"filter-";
                echo ($context["id"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 25);
                echo "\">
                    <div class=\"range-slider\">
                      <input type=\"text\" class=\"js-range-slider\" value=\"\" aria-hidden=\"true\" aria-label=\"min-max\" title=\"min-max\"/>
                    </div>
                    <div class=\"extra-controls\">
                      ";
                // line 30
                if (($context["currency_left"] ?? null)) {
                    // line 31
                    echo "                        <span class=\"currency-symbol currency-left\">";
                    echo ($context["currency_left"] ?? null);
                    echo "</span>
                      ";
                }
                // line 33
                echo "
                      <input type=\"text\" class=\"filter-price-min\" name=\"min\" data-min=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "price_range", [], "any", false, false, false, 34), "min", [], "any", false, false, false, 34);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "current_price_range", [], "any", false, false, false, 34), "min", [], "any", false, false, false, 34);
                echo "\" aria-label=\"min\" title=\"min\"/>

                      ";
                // line 36
                if (($context["currency_right"] ?? null)) {
                    // line 37
                    echo "                        <span class=\"currency-symbol currency-right\">";
                    echo ($context["currency_right"] ?? null);
                    echo "</span>
                      ";
                }
                // line 39
                echo "
                      ";
                // line 40
                if (($context["currency_left"] ?? null)) {
                    // line 41
                    echo "                        <span class=\"currency-symbol currency-left\">";
                    echo ($context["currency_left"] ?? null);
                    echo "</span>
                      ";
                }
                // line 43
                echo "
                      <input type=\"text\" class=\"filter-price-max\" name=\"max\" data-max=\"";
                // line 44
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "price_range", [], "any", false, false, false, 44), "max", [], "any", false, false, false, 44);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "current_price_range", [], "any", false, false, false, 44), "max", [], "any", false, false, false, 44);
                echo "\" aria-label=\"max\" title=\"max\"/>

                      ";
                // line 46
                if (($context["currency_right"] ?? null)) {
                    // line 47
                    echo "                        <span class=\"currency-symbol currency-right\">";
                    echo ($context["currency_right"] ?? null);
                    echo "</span>
                      ";
                }
                // line 49
                echo "                    </div>
                  </div>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 51
$context["item"], "type", [], "any", false, false, false, 51) == "r")) {
                // line 52
                echo "                  <div class=\"filter-rating\" id=\"filter-";
                echo ($context["id"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 52);
                echo "\">
                    ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 53));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 54
                    echo "                      <label>
                        <input type=\"";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "input", [], "any", false, false, false, 55);
                    echo "\" data-filter-trigger name=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 55);
                    echo "\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "id", [], "any", false, false, false, 55);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["subitem"], "checked", [], "any", false, false, false, 55)) {
                        echo "checked";
                    }
                    echo ">
                        <span class=\"links-text rating-stars\">
                        ";
                    // line 57
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 58
                        echo "                          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "id", [], "any", false, false, false, 58) < $context["i"])) {
                            // line 59
                            echo "                            <span class=\"fa fa-stack\"><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                          ";
                        } else {
                            // line 61
                            echo "                            <span class=\"fa fa-stack\"><em class=\"fa fa-star fa-stack-2x\"></em><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                          ";
                        }
                        // line 63
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "                      </span>
                        <span class=\"count-badge\">";
                    // line 65
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "total", [], "any", false, false, false, 65);
                    echo "</span>
                      </label>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "                  </div>
                ";
            } else {
                // line 70
                echo "                  ";
                if (((($context["item_input"] ?? null) == "checkbox") || (($context["item_input"] ?? null) == "radio"))) {
                    // line 71
                    echo "                    <div class=\"filter-";
                    echo ($context["item_input"] ?? null);
                    echo "\">
                      ";
                    // line 72
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 72));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 73
                        echo "                        <label>
                          <input type=\"";
                        // line 74
                        echo ($context["item_input"] ?? null);
                        echo "\" data-filter-trigger name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 74);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "id", [], "any", false, false, false, 74);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["subitem"], "checked", [], "any", false, false, false, 74)) {
                            echo "checked";
                        }
                        echo " title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 74);
                        echo "\" aria-label=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 74);
                        echo "\">
                          ";
                        // line 75
                        if (twig_get_attribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 75)) {
                            // line 76
                            echo "                            <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 76);
                            echo "\" ";
                            if (twig_get_attribute($this->env, $this->source, $context["subitem"], "image2x", [], "any", false, false, false, 76)) {
                                echo " srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 76);
                                echo " 1x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image2x", [], "any", false, false, false, 76);
                                echo " 2x\" ";
                            }
                            echo " width=\"";
                            echo ($context["image_width"] ?? null);
                            echo "\" height=\"";
                            echo ($context["image_height"] ?? null);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 76);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 76);
                            echo "\" class=\"img-responsive\" ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 76) && twig_get_attribute($this->env, $this->source, $context["item"], "image_only", [], "any", false, false, false, 76))) {
                                echo "data-toggle=\"tooltip-hover\" data-tooltip-class=\"filter-tooltip-";
                                echo ($context["module_id"] ?? null);
                                echo "\" data-placement=\"top\"";
                            }
                            echo "/>
                          ";
                        }
                        // line 78
                        echo "                          <span class=\"links-text\">";
                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 78);
                        echo "</span>
                          <span class=\"count-badge\">";
                        // line 79
                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "total", [], "any", false, false, false, 79);
                        echo "</span>
                          <span class=\"filter-item-bg\"></span>
                        </label>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "                    </div>
                  ";
                } elseif ((                // line 84
($context["item_input"] ?? null) == "select")) {
                    // line 85
                    echo "                    <div class=\"";
                    echo ($context["item_input"] ?? null);
                    echo "\">
                      <label>
                        <select name=\"";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 87);
                    echo "\" data-filter-trigger>
                          <option value=\"\"></option>
                          ";
                    // line 89
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 89));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 90
                        echo "                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "id", [], "any", false, false, false, 90);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["subitem"], "checked", [], "any", false, false, false, 90)) {
                            echo "selected";
                        }
                        echo ">";
                        echo ((twig_get_attribute($this->env, $this->source, $context["subitem"], "total", [], "any", false, false, false, 90)) ? ((((twig_get_attribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 90) . " (") . twig_get_attribute($this->env, $this->source, $context["subitem"], "total", [], "any", false, false, false, 90)) . ")")) : (twig_get_attribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 90)));
                        echo "</option>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo "                        </select>
                      </label>
                    </div>
                  ";
                }
                // line 96
                echo "                ";
            }
            // line 97
            echo "              </div>
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
        // line 101
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/module/filter.twig";
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
        return array (  400 => 101,  383 => 97,  380 => 96,  374 => 92,  359 => 90,  355 => 89,  350 => 87,  344 => 85,  342 => 84,  339 => 83,  329 => 79,  324 => 78,  296 => 76,  294 => 75,  278 => 74,  275 => 73,  271 => 72,  266 => 71,  263 => 70,  259 => 68,  250 => 65,  247 => 64,  241 => 63,  237 => 61,  233 => 59,  230 => 58,  226 => 57,  213 => 55,  210 => 54,  206 => 53,  199 => 52,  197 => 51,  193 => 49,  187 => 47,  185 => 46,  178 => 44,  175 => 43,  169 => 41,  167 => 40,  164 => 39,  158 => 37,  156 => 36,  149 => 34,  146 => 33,  140 => 31,  138 => 30,  127 => 25,  125 => 24,  116 => 22,  108 => 17,  90 => 16,  83 => 13,  80 => 12,  63 => 11,  55 => 6,  51 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/filter.twig", "");
    }
}
