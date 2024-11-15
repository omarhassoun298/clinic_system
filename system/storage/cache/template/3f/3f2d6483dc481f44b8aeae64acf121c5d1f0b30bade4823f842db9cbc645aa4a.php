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

/* journal3/template/journal3/headers/mobile/header_mobile_2.twig */
class __TwigTemplate_0a48bf2e3d01c06d31c7509cc0144f2440bf5ab9ecbf4231d1cbda526f20b763 extends Template
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
        echo "<div class=\"mobile-header mobile-default mobile-2 ";
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
    <a href=\"javascript:;\" class=\"menu-trigger\" data-off-canvas=\"mobile-main-menu-container\" title=\"";
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMobileMenuTitle"], "method", false, false, false, 18);
        echo "\"><span class=\"menu-icon\"></span></a>
    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuStatus1"], "method", false, false, false, 19)) {
            // line 20
            echo "    <a class=\"mobile-custom-menu mobile-custom-menu-1\" href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink1.href"], "method", false, false, false, 20);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink1.attrs"], "method", false, false, false, 20)], "method", false, false, false, 20);
            echo ">
      ";
            // line 21
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink1.name"], "method", false, false, false, 21), twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink1.total"], "method", false, false, false, 21), twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink1.classes"], "method", false, false, false, 21)], "method", false, false, false, 21);
            echo "
    </a>
    ";
        }
        // line 24
        echo "    <div class=\"mobile-logo-wrapper ";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_logo_color_scheme"], "method", false, false, false, 24);
        echo "\">
      ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 25)) {
            // line 26
            echo "        <div id=\"logo\">
          ";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_src"], "method", false, false, false, 27) || twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_src"], "method", false, false, false, 27))) {
                // line 28
                echo "            <a href=\"";
                echo ($context["home"] ?? null);
                echo "\">
              <img class=\"header-logo\" src=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_src"], "method", false, false, false, 29);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_src2x"], "method", false, false, false, 29)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_src"], "method", false, false, false, 29);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_src2x"], "method", false, false, false, 29);
                    echo " 2x\"";
                }
                echo " width=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_width"], "method", false, false, false, 29);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_height"], "method", false, false, false, 29);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\"/>
              <img class=\"header-logo-alternate\" src=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_src"], "method", false, false, false, 30);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_src2x"], "method", false, false, false, 30)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_src"], "method", false, false, false, 30);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_src2x"], "method", false, false, false, 30);
                    echo " 2x\"";
                }
                echo " width=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_width"], "method", false, false, false, 30);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_height"], "method", false, false, false, 30);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\"/>
            </a>
          ";
            } else {
                // line 33
                echo "            <h1><a href=\"";
                echo ($context["home"] ?? null);
                echo "\">";
                echo ($context["name"] ?? null);
                echo "</a></h1>
          ";
            }
            // line 35
            echo "        </div>
      ";
        }
        // line 37
        echo "    </div>
    ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuStatus2"], "method", false, false, false, 38)) {
            // line 39
            echo "    <a class=\"mobile-custom-menu mobile-custom-menu-2\" href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink2.href"], "method", false, false, false, 39);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink2.attrs"], "method", false, false, false, 39)], "method", false, false, false, 39);
            echo ">
      ";
            // line 40
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink2.name"], "method", false, false, false, 40), twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink2.total"], "method", false, false, false, 40), twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink2.classes"], "method", false, false, false, 40)], "method", false, false, false, 40);
            echo "
    </a>
    ";
        }
        // line 43
        echo "    <div class=\"mobile-cart-wrapper mini-cart\">
      ";
        // line 44
        echo ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 44)) ? (($context["cart"] ?? null)) : (""));
        echo "
    </div>
  </div>
  <div class=\"mobile-bar-group mobile-search-group ";
        // line 47
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_mobile_menu_color_scheme"], "method", false, false, false, 47);
        echo "\">
    <div class=\"mobile-search-wrapper full-search\">
      ";
        // line 49
        echo ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 49)) ? (twig_replace_filter(($context["search"] ?? null), ["color-scheme-__SEARCH_COLOR_SCHEME__" => ((twig_get_attribute($this->env, $this->source,         // line 50
($context["journal3"] ?? null), "get", ["header_mobile_search_color_scheme"], "method", false, false, false, 50)) ?: ("color-scheme-")), "color-scheme-__SEARCH_CATEGORIES_COLOR_SCHEME__" => twig_get_attribute($this->env, $this->source,         // line 51
($context["journal3"] ?? null), "get", ["header_mobile_search_categories_color_scheme"], "method", false, false, false, 51)])) : (""));
        // line 52
        echo "
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
        return "journal3/template/journal3/headers/mobile/header_mobile_2.twig";
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
        return array (  203 => 52,  201 => 51,  200 => 50,  199 => 49,  194 => 47,  188 => 44,  185 => 43,  179 => 40,  172 => 39,  170 => 38,  167 => 37,  163 => 35,  155 => 33,  133 => 30,  113 => 29,  108 => 28,  106 => 27,  103 => 26,  101 => 25,  96 => 24,  90 => 21,  83 => 20,  81 => 19,  77 => 18,  73 => 16,  66 => 12,  60 => 9,  56 => 7,  54 => 6,  49 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/headers/mobile/header_mobile_2.twig", "");
    }
}
