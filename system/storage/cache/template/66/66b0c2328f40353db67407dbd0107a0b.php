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

/* journal3/template/journal3/headers/mobile/header_mobile_1.twig */
class __TwigTemplate_e080110a26a2b229aa409bfd36070efd extends Template
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
        echo "<div class=\"mobile-header mobile-default mobile-1 ";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileHeaderClasses"], "method", false, false, false, 1)], "method", false, false, false, 1);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_mobile_color_scheme"], "method", false, false, false, 1);
        echo "\">
  <div class=\"mobile-top-bar ";
        // line 2
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_mobile_top_color_scheme"], "method", false, false, false, 2);
        echo "\">
    <div class=\"mobile-top-menu-wrapper\">
      ";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_top_menu"], "method", false, false, false, 4);
        echo "
    </div>
    ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileLangPosition"], "method", false, false, false, 6) == "top")) {
            // line 7
            echo "    <div class=\"language-currency top-menu\">
      <div class=\"mobile-language-wrapper\">
        ";
            // line 9
            echo ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 9)) ? (($context["language"] ?? null)) : (""));
            echo "
      </div>
      <div class=\"mobile-currency-wrapper\">
        ";
            // line 12
            echo ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 12)) ? (($context["currency"] ?? null)) : (""));
            echo "
      </div>
    </div>
    ";
        }
        // line 16
        echo "  </div>
  <div class=\"mobile-bar sticky-bar\">
    <div class=\"mobile-logo-wrapper ";
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_logo_color_scheme"], "method", false, false, false, 18);
        echo "\">
      ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 19)) {
            // line 20
            echo "        <div id=\"logo\">
          ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_src"], "method", false, false, false, 21) || twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_src"], "method", false, false, false, 21))) {
                // line 22
                echo "            <a href=\"";
                echo ($context["home"] ?? null);
                echo "\">
              <img class=\"header-logo\" src=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_src"], "method", false, false, false, 23);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_src2x"], "method", false, false, false, 23)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_src"], "method", false, false, false, 23);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_src2x"], "method", false, false, false, 23);
                    echo " 2x\"";
                }
                echo " width=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_width"], "method", false, false, false, 23);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_height"], "method", false, false, false, 23);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\"/>
              <img class=\"header-logo-alternate\" src=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_src"], "method", false, false, false, 24);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_src2x"], "method", false, false, false, 24)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_src"], "method", false, false, false, 24);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_src2x"], "method", false, false, false, 24);
                    echo " 2x\"";
                }
                echo " width=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_width"], "method", false, false, false, 24);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_height"], "method", false, false, false, 24);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\"/>
            </a>
          ";
            } else {
                // line 27
                echo "            <h1><a href=\"";
                echo ($context["home"] ?? null);
                echo "\">";
                echo ($context["name"] ?? null);
                echo "</a></h1>
          ";
            }
            // line 29
            echo "        </div>
      ";
        }
        // line 31
        echo "    </div>
    <div class=\"mobile-bar-group\">
      <a href=\"javascript:;\" class=\"menu-trigger\" data-off-canvas=\"mobile-main-menu-container\" title=\"";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMobileMenuTitle"], "method", false, false, false, 33);
        echo "\"><span class=\"menu-icon\"></span></a>
      ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuStatus1"], "method", false, false, false, 34)) {
            // line 35
            echo "      <a class=\"mobile-custom-menu mobile-custom-menu-1\" href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink1.href"], "method", false, false, false, 35);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink1.attrs"], "method", false, false, false, 35)], "method", false, false, false, 35);
            echo ">
        ";
            // line 36
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink1.name"], "method", false, false, false, 36), twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink1.total"], "method", false, false, false, 36), twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink1.classes"], "method", false, false, false, 36)], "method", false, false, false, 36);
            echo "
      </a>
      ";
        }
        // line 39
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuStatus2"], "method", false, false, false, 39)) {
            // line 40
            echo "      <a class=\"mobile-custom-menu mobile-custom-menu-2\" href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink2.href"], "method", false, false, false, 40);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink2.attrs"], "method", false, false, false, 40)], "method", false, false, false, 40);
            echo ">
        ";
            // line 41
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink2.name"], "method", false, false, false, 41), twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink2.total"], "method", false, false, false, 41), twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink2.classes"], "method", false, false, false, 41)], "method", false, false, false, 41);
            echo "
      </a>
      ";
        }
        // line 44
        echo "      <div class=\"mobile-search-wrapper mini-search\">
        ";
        // line 45
        echo ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 45)) ? (twig_replace_filter(($context["search"] ?? null), ["color-scheme-__SEARCH_COLOR_SCHEME__" => ((twig_get_attribute($this->env, $this->source,         // line 46
($context["journal3"] ?? null), "get", ["header_mobile_search_color_scheme"], "method", false, false, false, 46)) ?: ("color-scheme-")), "color-scheme-__SEARCH_CATEGORIES_COLOR_SCHEME__" => twig_get_attribute($this->env, $this->source,         // line 47
($context["journal3"] ?? null), "get", ["header_mobile_search_categories_color_scheme"], "method", false, false, false, 47)])) : (""));
        // line 48
        echo "
      </div>
      <div class=\"mobile-cart-wrapper mini-cart\">
        ";
        // line 51
        echo ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 51)) ? (($context["cart"] ?? null)) : (""));
        echo "
      </div>
    </div>
  </div>
  ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_secondary_menu"], "method", false, false, false, 55)) {
            // line 56
            echo "    <div class=\"mobile-secondary-menu ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_mobile_secondary_menu_color_scheme"], "method", false, false, false, 56);
            echo "\">
      ";
            // line 57
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_secondary_menu"], "method", false, false, false, 57);
            echo "
    </div>
  ";
        }
        // line 60
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/mobile/header_mobile_1.twig";
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
        return array (  218 => 60,  212 => 57,  207 => 56,  205 => 55,  198 => 51,  193 => 48,  191 => 47,  190 => 46,  189 => 45,  186 => 44,  180 => 41,  173 => 40,  170 => 39,  164 => 36,  157 => 35,  155 => 34,  151 => 33,  147 => 31,  143 => 29,  135 => 27,  113 => 24,  93 => 23,  88 => 22,  86 => 21,  83 => 20,  81 => 19,  77 => 18,  73 => 16,  66 => 12,  60 => 9,  56 => 7,  54 => 6,  49 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/headers/mobile/header_mobile_1.twig", "");
    }
}
