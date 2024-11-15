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

/* journal3/template/journal3/headers/desktop/compact.twig */
class __TwigTemplate_fea35641158f42f4ceee7a3409822348 extends Template
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
        echo "<div class=\"header header-compact header-sm ";
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
        // line 5
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["langPosition"], "method", false, false, false, 5) == "top")) {
            // line 6
            echo "      <div class=\"language-currency top-menu\">
        <div class=\"desktop-language-wrapper\">
          ";
            // line 8
            echo ($context["language"] ?? null);
            echo "
        </div>
        <div class=\"desktop-currency-wrapper\">
          ";
            // line 11
            echo ($context["currency"] ?? null);
            echo "
        </div>
      </div>
    ";
        }
        // line 15
        echo "    <div class=\"top-menu third-menu\">";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_top_menu_3"], "method", false, false, false, 15);
        echo "</div>
    ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["secondaryMenuPosition"], "method", false, false, false, 16) == "top")) {
            // line 17
            echo "      <div class=\"top-menu secondary-menu\">";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_top_menu_2"], "method", false, false, false, 17);
            echo "</div>
    ";
        }
        // line 19
        echo "  </div>
  <div class=\"mid-bar navbar-nav\">
    <div class=\"desktop-logo-wrapper ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_logo_color_scheme"], "method", false, false, false, 21);
        echo "\">
      <div id=\"logo\">
        ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_src"], "method", false, false, false, 23) || twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_src"], "method", false, false, false, 23))) {
            // line 24
            echo "          <a href=\"";
            echo ($context["home"] ?? null);
            echo "\">
            <img class=\"header-logo\" src=\"";
            // line 25
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_src"], "method", false, false, false, 25);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_src2x"], "method", false, false, false, 25)) {
                echo "srcset=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_src"], "method", false, false, false, 25);
                echo " 1x, ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_src2x"], "method", false, false, false, 25);
                echo " 2x\"";
            }
            echo " width=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_width"], "method", false, false, false, 25);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_height"], "method", false, false, false, 25);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\"/>
            <img class=\"header-logo-alternate\" src=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_src"], "method", false, false, false, 26);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_src2x"], "method", false, false, false, 26)) {
                echo "srcset=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_src"], "method", false, false, false, 26);
                echo " 1x, ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_src2x"], "method", false, false, false, 26);
                echo " 2x\"";
            }
            echo " width=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_width"], "method", false, false, false, 26);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_height"], "method", false, false, false, 26);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\"/>
          </a>
        ";
        } else {
            // line 29
            echo "          <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
        ";
        }
        // line 31
        echo "      </div>
    </div>
    <div class=\"desktop-main-menu-wrapper menu-top has-menu-1 nav-bar\">
      ";
        // line 34
        if ( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 34)) {
            // line 35
            echo "        <div class=\"menu-trigger menu-item main-menu-item menu-trigger-1\">
          <ul class=\"j-menu\">
            <li class=\"menu-item\"><a href=\"javascript:;\" data-off-canvas=\"desktop-mobile-main-menu-container\"><span class=\"links-text\">";
            // line 37
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["menuTriggerText"], "method", false, false, false, 37);
            echo "</span></a></li>
          </ul>
        </div>
        ";
            // line 40
            if ( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileMenu1"], "method", false, false, false, 40)) {
                // line 41
                echo "          ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_main_menu"], "method", false, false, false, 41);
                echo "
        ";
            }
            // line 43
            echo "      ";
        }
        // line 44
        echo "    </div>

    <div class=\"header-cart-group\">
      ";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["langPosition"], "method", false, false, false, 47) == "search")) {
            // line 48
            echo "        <div class=\"language-currency top-menu\">
          <div class=\"desktop-language-wrapper\">
            ";
            // line 50
            echo ($context["language"] ?? null);
            echo "
          </div>
          <div class=\"desktop-currency-wrapper\">
            ";
            // line 53
            echo ($context["currency"] ?? null);
            echo "
          </div>
        </div>
      ";
        }
        // line 57
        echo "      ";
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["secondaryMenuPosition"], "method", false, false, false, 57) == "cart")) {
            // line 58
            echo "        <div class=\"top-menu secondary-menu ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["secondary_color_scheme"], "method", false, false, false, 58);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_top_menu_2"], "method", false, false, false, 58);
            echo "</div>
      ";
        }
        // line 60
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogSearchStatus"], "method", false, false, false, 60)) {
            // line 61
            echo "      <div class=\"desktop-search-wrapper mini-search\">
        ";
            // line 62
            echo twig_replace_filter(($context["search"] ?? null), ["color-scheme-__SEARCH_COLOR_SCHEME__" => ((twig_get_attribute($this->env, $this->source,             // line 63
($context["journal3"] ?? null), "get", ["header_search_color_scheme"], "method", false, false, false, 63)) ?: ("color-scheme-")), "color-scheme-__SEARCH_CATEGORIES_COLOR_SCHEME__" => twig_get_attribute($this->env, $this->source,             // line 64
($context["journal3"] ?? null), "get", ["header_search_categories_color_scheme"], "method", false, false, false, 64)]);
            // line 65
            echo "
      </div>
      ";
        }
        // line 68
        echo "      <div class=\"desktop-cart-wrapper\">
        ";
        // line 69
        echo ($context["cart"] ?? null);
        echo "
      </div>
    </div>
  </div>
  ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMainMenu2"], "method", false, false, false, 73)) {
            // line 74
            echo "    <div class=\"desktop-main-menu-wrapper menu-bar menu-";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMenuLayout"], "method", false, false, false, 74);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_main_menu_2"], "method", false, false, false, 74)) {
                echo "has-menu-2";
            }
            echo " navbar-nav ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_menu_color_scheme"], "method", false, false, false, 74);
            echo "\">
      ";
            // line 75
            if ( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 75)) {
                // line 76
                echo "       <div class=\"main-menu-1\">
         <div class=\"menu-trigger menu-item main-menu-item menu-trigger-2\">
           <ul class=\"j-menu\">
             <li class=\"menu-item\"><a href=\"javascript:;\" data-off-canvas=\"desktop-mobile-main-menu-container\"><span class=\"links-text\">";
                // line 79
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["menuTriggerText"], "method", false, false, false, 79);
                echo "</span></a></li>
           </ul>
         </div>
         ";
                // line 82
                if ( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileMenu2"], "method", false, false, false, 82)) {
                    // line 83
                    echo "           ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_main_menu_2"], "method", false, false, false, 83);
                    echo "
         ";
                }
                // line 85
                echo "       </div>
      ";
            }
            // line 87
            echo "    </div>
  ";
        }
        // line 89
        echo "
</div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/desktop/compact.twig";
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
        return array (  279 => 89,  275 => 87,  271 => 85,  265 => 83,  263 => 82,  257 => 79,  252 => 76,  250 => 75,  239 => 74,  237 => 73,  230 => 69,  227 => 68,  222 => 65,  220 => 64,  219 => 63,  218 => 62,  215 => 61,  212 => 60,  204 => 58,  201 => 57,  194 => 53,  188 => 50,  184 => 48,  182 => 47,  177 => 44,  174 => 43,  168 => 41,  166 => 40,  160 => 37,  156 => 35,  154 => 34,  149 => 31,  141 => 29,  119 => 26,  99 => 25,  94 => 24,  92 => 23,  87 => 21,  83 => 19,  77 => 17,  75 => 16,  70 => 15,  63 => 11,  57 => 8,  53 => 6,  51 => 5,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/headers/desktop/compact.twig", "");
    }
}
