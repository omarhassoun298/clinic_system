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

/* journal3/template/journal3/headers/desktop/classic.twig */
class __TwigTemplate_1820a35663ef6cc8aa4b4ed53bab9c4903927e56fdbaf4ad6b7b728a2141f647 extends Template
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
        echo "<div class=\"header header-classic header-lg ";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerClasses"], "method", false, false, false, 1)], "method", false, false, false, 1);
        echo "\">
  <div class=\"top-bar navbar-nav ";
        // line 2
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_top_color_scheme"], "method", false, false, false, 2);
        echo "\">
    ";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_top_menu"], "method", false, false, false, 3);
        echo "
    ";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["langPosition"], "method", false, false, false, 4) == "top")) {
            // line 5
            echo "      <div class=\"language-currency top-menu\">
        <div class=\"desktop-language-wrapper\">
          ";
            // line 7
            echo ($context["language"] ?? null);
            echo "
        </div>
        <div class=\"desktop-currency-wrapper\">
          ";
            // line 10
            echo ($context["currency"] ?? null);
            echo "
        </div>
      </div>
    ";
        }
        // line 14
        echo "    <div class=\"top-menu third-menu\">";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_top_menu_3"], "method", false, false, false, 14);
        echo "</div>
    ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["secondaryMenuPosition"], "method", false, false, false, 15) == "top")) {
            // line 16
            echo "      <div class=\"top-menu secondary-menu\">";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_top_menu_2"], "method", false, false, false, 16);
            echo "</div>
    ";
        }
        // line 18
        echo "  </div>
  <div class=\"mid-bar navbar-nav\">
    <div class=\"desktop-logo-wrapper ";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_logo_color_scheme"], "method", false, false, false, 20);
        echo "\">
      <div id=\"logo\">
        ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_src"], "method", false, false, false, 22) || twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_src"], "method", false, false, false, 22))) {
            // line 23
            echo "          <a href=\"";
            echo ($context["home"] ?? null);
            echo "\">
            <img class=\"header-logo\" src=\"";
            // line 24
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_src"], "method", false, false, false, 24);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_src2x"], "method", false, false, false, 24)) {
                echo "srcset=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_src"], "method", false, false, false, 24);
                echo " 1x, ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_src2x"], "method", false, false, false, 24);
                echo " 2x\"";
            }
            echo " width=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_width"], "method", false, false, false, 24);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_height"], "method", false, false, false, 24);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\"/>
            <img class=\"header-logo-alternate\" src=\"";
            // line 25
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_src"], "method", false, false, false, 25);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_src2x"], "method", false, false, false, 25)) {
                echo "srcset=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_src"], "method", false, false, false, 25);
                echo " 1x, ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_src2x"], "method", false, false, false, 25);
                echo " 2x\"";
            }
            echo " width=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_width"], "method", false, false, false, 25);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_height"], "method", false, false, false, 25);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\"/>
          </a>
        ";
        } else {
            // line 28
            echo "          <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
        ";
        }
        // line 30
        echo "      </div>
    </div>
    ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMainMenu2Position"], "method", false, false, false, 32) == "top")) {
            // line 33
            echo "      <div class=\"desktop-main-menu-wrapper menu-top main-menu-2 main-menu-2-top\">
        ";
            // line 34
            if ( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 34)) {
                // line 35
                echo "          <div class=\"menu-trigger menu-item main-menu-item menu-trigger-2\">
            <ul class=\"j-menu\">
              <li class=\"menu-item\"><a href=\"javascript:;\" data-off-canvas=\"desktop-mobile-main-menu-container\"><span class=\"links-text\">";
                // line 37
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["menuTriggerText"], "method", false, false, false, 37);
                echo "</span></a></li>
            </ul>
          </div>
          ";
                // line 40
                if ( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileMenu2"], "method", false, false, false, 40)) {
                    // line 41
                    echo "            ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_main_menu_2"], "method", false, false, false, 41);
                    echo "
          ";
                }
                // line 43
                echo "        ";
            }
            // line 44
            echo "      </div>
    ";
        }
        // line 46
        echo "    <div class=\"desktop-search-wrapper full-search default-search-wrapper\">
      ";
        // line 47
        echo twig_replace_filter(($context["search"] ?? null), ["color-scheme-__SEARCH_COLOR_SCHEME__" => ((twig_get_attribute($this->env, $this->source,         // line 48
($context["journal3"] ?? null), "get", ["header_search_color_scheme"], "method", false, false, false, 48)) ?: ("color-scheme-")), "color-scheme-__SEARCH_CATEGORIES_COLOR_SCHEME__" => twig_get_attribute($this->env, $this->source,         // line 49
($context["journal3"] ?? null), "get", ["header_search_categories_color_scheme"], "method", false, false, false, 49)]);
        // line 50
        echo "
    </div>
    ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["langPosition"], "method", false, false, false, 52) == "search")) {
            // line 53
            echo "      <div class=\"language-currency top-menu\">
        <div class=\"desktop-language-wrapper\">
          ";
            // line 55
            echo ($context["language"] ?? null);
            echo "
        </div>
        <div class=\"desktop-currency-wrapper\">
          ";
            // line 58
            echo ($context["currency"] ?? null);
            echo "
        </div>
      </div>
    ";
        }
        // line 62
        echo "    <div class=\"classic-cart-wrapper\">
        ";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["secondaryMenuPosition"], "method", false, false, false, 63) == "cart")) {
            // line 64
            echo "          <div class=\"top-menu secondary-menu ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["secondary_color_scheme"], "method", false, false, false, 64);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_top_menu_2"], "method", false, false, false, 64);
            echo "</div>
        ";
        }
        // line 66
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["cartPosition"], "method", false, false, false, 66) == "top")) {
            // line 67
            echo "          <div class=\"desktop-cart-wrapper default-cart-wrapper\">
              ";
            // line 68
            echo ($context["cart"] ?? null);
            echo "
          </div>
        ";
        }
        // line 71
        echo "    </div>
  </div>
  <div class=\"desktop-main-menu-wrapper menu-bar has-menu-1 menu-";
        // line 73
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMenuLayout"], "method", false, false, false, 73);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_main_menu_2"], "method", false, false, false, 73)) {
            echo "has-menu-2";
        }
        echo " navbar-nav ";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_menu_color_scheme"], "method", false, false, false, 73);
        echo "\">
    ";
        // line 74
        if ( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 74)) {
            // line 75
            echo "      <div class=\"main-menu-1\">
        <div class=\"menu-trigger menu-item main-menu-item menu-trigger-1\">
          <ul class=\"j-menu\">
            <li class=\"menu-item\"><a href=\"javascript:;\" data-off-canvas=\"desktop-mobile-main-menu-container\"><span class=\"links-text\">";
            // line 78
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["menuTriggerText"], "method", false, false, false, 78);
            echo "</span></a></li>
          </ul>
        </div>
        ";
            // line 81
            if ( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileMenu1"], "method", false, false, false, 81)) {
                // line 82
                echo "          ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_main_menu"], "method", false, false, false, 82);
                echo "
        ";
            }
            // line 84
            echo "      </div>
      ";
            // line 85
            if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMainMenu2Position"], "method", false, false, false, 85) == "menu")) {
                // line 86
                echo "        <div class=\"main-menu-2\">
          <div class=\"menu-trigger menu-item main-menu-item menu-trigger-2\">
            <ul class=\"j-menu\">
              <li class=\"menu-item\"><a href=\"javascript:;\" data-off-canvas=\"desktop-mobile-main-menu-container\"><span class=\"links-text\">";
                // line 89
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["menuTriggerText"], "method", false, false, false, 89);
                echo "</span></a></li>
            </ul>
          </div>
          ";
                // line 92
                if ( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileMenu2"], "method", false, false, false, 92)) {
                    // line 93
                    echo "            ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_main_menu_2"], "method", false, false, false, 93);
                    echo "
          ";
                }
                // line 95
                echo "        </div>
      ";
            }
            // line 97
            echo "    ";
        }
        // line 98
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["cartPosition"], "method", false, false, false, 98) == "menu")) {
            // line 99
            echo "      <div class=\"desktop-cart-wrapper default-cart-wrapper\">
        ";
            // line 100
            echo ($context["cart"] ?? null);
            echo "
      </div>
    ";
        }
        // line 103
        echo "  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/desktop/classic.twig";
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
        return array (  317 => 103,  311 => 100,  308 => 99,  305 => 98,  302 => 97,  298 => 95,  292 => 93,  290 => 92,  284 => 89,  279 => 86,  277 => 85,  274 => 84,  268 => 82,  266 => 81,  260 => 78,  255 => 75,  253 => 74,  243 => 73,  239 => 71,  233 => 68,  230 => 67,  227 => 66,  219 => 64,  217 => 63,  214 => 62,  207 => 58,  201 => 55,  197 => 53,  195 => 52,  191 => 50,  189 => 49,  188 => 48,  187 => 47,  184 => 46,  180 => 44,  177 => 43,  171 => 41,  169 => 40,  163 => 37,  159 => 35,  157 => 34,  154 => 33,  152 => 32,  148 => 30,  140 => 28,  118 => 25,  98 => 24,  93 => 23,  91 => 22,  86 => 20,  82 => 18,  76 => 16,  74 => 15,  69 => 14,  62 => 10,  56 => 7,  52 => 5,  50 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/headers/desktop/classic.twig", "");
    }
}
