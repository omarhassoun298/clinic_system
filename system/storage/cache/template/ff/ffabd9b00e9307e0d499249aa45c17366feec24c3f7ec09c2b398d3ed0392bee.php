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

/* journal3/template/common/header.twig */
class __TwigTemplate_55cd64e57f33123f32d5453f7bdd02803a8f753ab977ffba7bf020cf48c08703 extends Template
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
        if ( !array_key_exists("journal3", $context)) {
            // line 2
            echo "<style>body { display: none !important; }</style>
<script>window.location = 'index.php?route=journal3/startup/error_not_installed';</script>
";
        }
        // line 5
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"";
        echo twig_join_filter(($context["journal3_classes"] ?? null), " ");
        echo "\" data-ov=\"";
        echo ($context["journal3_oc_version"] ?? null);
        echo "\" data-jv=\"";
        echo ($context["journal3_version"] ?? null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<meta name=\"theme-color\" content=\"";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["theme_color"], "method", false, false, false, 9);
        echo "\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        if ( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 20)) {
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["journal3_metas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
                // line 22
                echo "<meta ";
                echo twig_get_attribute($this->env, $this->source, $context["meta"], "attr", [], "any", false, false, false, 22);
                echo "=\"";
                echo twig_get_attribute($this->env, $this->source, $context["meta"], "name", [], "any", false, false, false, 22);
                echo "\" content=\"";
                echo twig_get_attribute($this->env, $this->source, $context["meta"], "content", [], "any", false, false, false, 22);
                echo "\"/>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["journal3_meta_tags"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["tag"]) {
                // line 25
                echo "<meta ";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 25);
                echo "=\"";
                echo $context["key"];
                echo "\" content=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "content", [], "any", false, false, false, 25);
                echo "\"/>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["journal3_links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 29
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 29);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 29);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "attrs", [], "any", false, false, false, 29);
            echo "/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 32
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 32);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 32);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        if (($context["journal3_sentry_dsn_loader"] ?? null)) {
            // line 35
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "js_defer", [], "any", false, false, false, 35)) {
                // line 36
                echo "<script src=\"";
                echo ($context["journal3_sentry_dsn_loader"] ?? null);
                echo "\" crossorigin=\"anonymous\" defer></script>
";
            } else {
                // line 38
                echo "<script src=\"";
                echo ($context["journal3_sentry_dsn_loader"] ?? null);
                echo "\" crossorigin=\"anonymous\"></script>
";
            }
        }
        // line 41
        echo "<script>window['Journal'] = ";
        echo ($context["journal3_js"] ?? null);
        echo ";</script>
";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["journal3_inline_scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 43
            echo "<script>";
            echo ((twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 43)) ?: ($context["script"]));
            echo "</script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 46)) {
                // line 47
                echo "<link href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 47);
                echo "\" type=\"text/css\" rel=\"";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 47);
                echo "\" media=\"";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 47);
                echo "\" />
";
            } else {
                // line 49
                echo "<style>";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "content", [], "any", false, false, false, 49);
                echo "</style>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "<script>performance.mark('css');</script>
";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["journal3_css"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 54
            echo "<style ";
            if (twig_get_attribute($this->env, $this->source, $context["css"], "id", [], "any", false, false, false, 54)) {
                echo "data-id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["css"], "id", [], "any", false, false, false, 54);
                echo "\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["css"], "css", [], "any", false, false, false, 54);
            echo "</style>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "<script>performance.measure('css', 'css');</script>
";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["customCSS"], "method", false, false, false, 57)) {
            // line 58
            echo "<style>";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["customCSS"], "method", false, false, false, 58);
            echo "</style>
";
        }
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 61
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "js_defer", [], "any", false, false, false, 61)) {
                // line 62
                echo "<script src=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 62)) ?: ($context["script"]));
                echo "\" defer></script>
";
            } else {
                // line 64
                echo "<script src=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 64)) ?: ($context["script"]));
                echo "\"></script>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts_defer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 68
            echo "<script src=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 68)) ?: ($context["script"]));
            echo "\" defer></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["customCodeHeader"], "method", false, false, false, 70)) {
            // line 71
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["customCodeHeader"], "method", false, false, false, 71);
            echo "
";
        }
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 74
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "</head>
<body>
";
        // line 78
        if (($context["journal3_is_oc4"] ?? null)) {
            // line 79
            echo "<div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\" style=\"position: fixed; right: 0; top: 0; padding: 1rem; z-index: 999999;\"></div>
";
        }
        // line 81
        echo "
";
        // line 82
        echo ($context["journal3_background_slider"] ?? null);
        echo "

";
        // line 84
        if (($context["journal3_home_h1"] ?? null)) {
            // line 85
            echo "<h1 style=\"position: absolute; height: 1px; width: 1px; clip: rect(0,0,0,0);\">";
            echo ($context["journal3_home_h1"] ?? null);
            echo "</h1>
";
        }
        // line 87
        echo "
";
        // line 88
        if (($context["journal_admin_bar_links"] ?? null)) {
            // line 89
            echo "<div class=\"admin-bar\">
  <div class=\"j-logo\"><svg width=\"100%\" height=\"100%\" viewBox=\"0 0 50 60\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xml:space=\"preserve\"><path d=\"M22.585,57.853c-4,0 -7.64,-0.687 -10.92,-2.06c-3.273,-1.38 -5.95,-3.37 -8.03,-5.97l7.479,-8.805c3.444,2.012 5.515,4.155 8.895,4.155c2.24,0 5.069,-0.557 6.236,-1.91c1.173,-1.353 2.12,-3.09 2.12,-5.69l0,-1.966l15.28,0l0,1.036c0,7.067 -1.78,12.37 -5.34,15.91c-3.56,3.533 -8.8,5.3 -15.72,5.3Zm21.06,-26.103l-15.28,0l0,-3.158l15.28,0l0,3.158Zm0,-7.015l-15.28,0l0,-3.117l15.28,0l0,3.117Zm0,-6.974l-15.28,0l0,-3.089l-19.263,0l-0.004,-12.509l34.547,0l0,15.598Z\"/></svg><span>Editor</span></div>
  <div class=\"admin-bar-buttons\">
    ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["journal_admin_bar_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 93
                echo "      <button data-edit=\"";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "edit", [], "any", false, false, false, 93);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 93);
                echo "</button>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "  </div>
  <button class=\"admin-close-bar\" type=\"button\" title=\"Toggle Editor\"><span>&times;</span></button>
</div>
";
        }
        // line 99
        echo "
";
        // line 100
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["oldBrowserStatus"], "method", false, false, false, 100)) {
            // line 101
            echo "<div class=\"old-browser\">
  <div class=\"ob-content\">
    <h2 class=\"ob-title\">";
            // line 103
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["oldBrowserTitle"], "method", false, false, false, 103);
            echo "</h2>
    <span class=\"ob-text\">";
            // line 104
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["oldBrowserText"], "method", false, false, false, 104);
            echo "</span>
    <div class=\"ob-links\">
      <a href=\"https://www.google.com/chrome/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 107
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["oldBrowserChrome"], "method", false, false, false, 107);
            echo "\" alt=\"Chrome\" />
        <span class=\"ob-name\">Chrome</span>
      </a>
      <a href=\"https://www.mozilla.org/firefox/new/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 111
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["oldBrowserFirefox"], "method", false, false, false, 111);
            echo "\" alt=\"Firefox\" />
        <span class=\"ob-name\">Firefox</span>
      </a>
      <a href=\"https://www.microsoft.com/en-us/windows/microsoft-edge\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 115
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["oldBrowserEdge"], "method", false, false, false, 115);
            echo "\" alt=\"edge\" />
        <span class=\"ob-name\">Microsoft Edge</span>
      </a>
      <a href=\"https://www.opera.com/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 119
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["oldBrowserOpera"], "method", false, false, false, 119);
            echo "\" alt=\"opera\" />
        <span class=\"ob-name\">Opera</span>
      </a>
      <a href=\"https://www.apple.com/lae/safari/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 123
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["oldBrowserSafari"], "method", false, false, false, 123);
            echo "\" alt=\"safari\" />
        <span class=\"ob-name\">Safari on Mac</span>
      </a>
    </div>
  </div>
</div>
";
        }
        // line 130
        echo "
";
        // line 131
        if ( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 131)) {
            // line 132
            echo "<div class=\"mobile-container mobile-main-menu-container\">
  ";
            // line 133
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_bottom_menu"], "method", false, false, false, 133);
            echo "
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 135
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMobileMenuTitle"], "method", false, false, false, 135);
            echo "</span>
    <div class=\"mobile-wrapper-top-menu\">";
            // line 136
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_top_menu_2"], "method", false, false, false, 136);
            echo "</div>
    ";
            // line 137
            if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileLangPosition"], "method", false, false, false, 137) == "menu")) {
                // line 138
                echo "      <div class=\"language-currency top-menu\">
        <div class=\"mobile-language-wrapper\">
            ";
                // line 140
                echo ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 140)) ? (($context["language"] ?? null)) : (""));
                echo "
        </div>
        <div class=\"mobile-currency-wrapper\">
          ";
                // line 143
                echo ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 143)) ? (($context["currency"] ?? null)) : (""));
                echo "
        </div>
      </div>
    ";
            }
            // line 147
            echo "    <a class=\"x\" href=\"javascript:;\" title=\"Close\"></a>
  </div>
  <template class=\"mobile-main-menu-wrapper\">";
            // line 149
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_main_menu"], "method", false, false, false, 149);
            echo "</template>
  ";
            // line 150
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMobileMenuAccordion"], "method", false, false, false, 150);
            echo "
  ";
            // line 151
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMobileMenuBuilder"], "method", false, false, false, 151);
            echo "
</div>

<div class=\"mobile-container desktop-mobile-main-menu-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 156
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMobileMenuTitle"], "method", false, false, false, 156);
            echo "</span>
    <a class=\"x\" href=\"javascript:;\" title=\"Close\"></a>
  </div>
  <div class=\"desktop-mobile-main-menu-wrapper\">";
            // line 159
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileMenu1"], "method", false, false, false, 159)) {
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_main_menu"], "method", false, false, false, 159);
            }
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileMenu2"], "method", false, false, false, 159)) {
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_main_menu_2"], "method", false, false, false, 159);
            }
            echo "</div>
  ";
            // line 160
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerDesktopMobileMenuAccordion"], "method", false, false, false, 160);
            echo "
  ";
            // line 161
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerDesktopMobileMenuBuilder"], "method", false, false, false, 161);
            echo "
</div>

<div class=\"mobile-container mobile-filter-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 166
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileFilterTitle"], "method", false, false, false, 166);
            echo "</span>
    <button aria-label=\"Reset\" class=\"reset-filter btn\">";
            // line 167
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileFilterReset"], "method", false, false, false, 167);
            echo "</button>
    <a class=\"x\" href=\"javascript:;\" title=\"Close\"></a>
  </div>
  <div class=\"mobile-filter-wrapper\"></div>
</div>

<div class=\"mobile-container mobile-cart-content-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 175
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMobileCartTitle"], "method", false, false, false, 175);
            echo "</span>
    <a class=\"x\" href=\"javascript:;\" title=\"Close\"></a>
  </div>
  <div class=\"mobile-cart-content-wrapper cart-content\"></div>
</div>
";
        }
        // line 181
        echo "
";
        // line 182
        echo ($context["journal3_popup"] ?? null);
        echo "

";
        // line 184
        echo ($context["journal3_bottom_menu"] ?? null);
        echo "

";
        // line 186
        echo ($context["journal3_side_menu"] ?? null);
        echo "

";
        // line 188
        echo ($context["journal3_notification"] ?? null);
        echo "

";
        // line 190
        echo ($context["journal3_header_notice"] ?? null);
        echo "

";
        // line 192
        echo "<div class=\"global-wrapper\">";
        echo "

";
        // line 194
        if ((($context["journal3_header_desktop"] ?? null) || ($context["journal3_header_mobile"] ?? null))) {
            // line 195
            echo "  <header class=\"header-";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerType"], "method", false, false, false, 195);
            echo "\">
    ";
            // line 196
            echo ($context["journal3_header_desktop"] ?? null);
            echo "
    ";
            // line 197
            echo ($context["journal3_header_mobile"] ?? null);
            echo "
    <div class=\"site-overlay\"></div>
  </header>
";
        }
        // line 201
        echo "
";
        // line 202
        echo "<div class=\"site-wrapper\">";
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/common/header.twig";
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
        return array (  587 => 202,  584 => 201,  577 => 197,  573 => 196,  568 => 195,  566 => 194,  561 => 192,  556 => 190,  551 => 188,  546 => 186,  541 => 184,  536 => 182,  533 => 181,  524 => 175,  513 => 167,  509 => 166,  501 => 161,  497 => 160,  488 => 159,  482 => 156,  474 => 151,  470 => 150,  466 => 149,  462 => 147,  455 => 143,  449 => 140,  445 => 138,  443 => 137,  439 => 136,  435 => 135,  430 => 133,  427 => 132,  425 => 131,  422 => 130,  412 => 123,  405 => 119,  398 => 115,  391 => 111,  384 => 107,  378 => 104,  374 => 103,  370 => 101,  368 => 100,  365 => 99,  359 => 95,  348 => 93,  344 => 92,  339 => 89,  337 => 88,  334 => 87,  328 => 85,  326 => 84,  321 => 82,  318 => 81,  314 => 79,  312 => 78,  308 => 76,  300 => 74,  296 => 73,  291 => 71,  289 => 70,  280 => 68,  276 => 67,  266 => 64,  260 => 62,  258 => 61,  254 => 60,  248 => 58,  246 => 57,  243 => 56,  228 => 54,  224 => 53,  221 => 52,  211 => 49,  201 => 47,  199 => 46,  195 => 45,  186 => 43,  182 => 42,  177 => 41,  170 => 38,  164 => 36,  162 => 35,  160 => 34,  149 => 32,  145 => 31,  132 => 29,  128 => 28,  114 => 25,  110 => 24,  97 => 22,  93 => 21,  91 => 20,  85 => 18,  83 => 17,  77 => 15,  75 => 14,  71 => 13,  67 => 12,  61 => 9,  47 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/header.twig", "");
    }
}
