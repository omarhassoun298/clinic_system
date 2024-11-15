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

/* journal3/template/product/manufacturer_list.twig */
class __TwigTemplate_8cc4496205efcb7d88c478ba26d94b2b extends Template
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
        echo ($context["header"] ?? null);
        echo "
";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 2) == "top")) {
            // line 3
            echo "  <h1 class=\"title page-title ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 3);
            echo "\"><span class=\"page-title-text\">";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 5
        echo "<div class=\"breadcrumbs ";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["breadcrumbs_color_scheme"], "method", false, false, false, 5);
        echo "\">
  <ul class=\"breadcrumb\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  </ul>
</div>
";
        // line 12
        echo ($context["journal3_top"] ?? null);
        echo "
<div id=\"product-manufacturer\" class=\"container\">
  <div class=\"row\">";
        // line 14
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 23) == "default")) {
            // line 24
            echo "      <h1 class=\"title page-title ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 24);
            echo "\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 26
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 27
        if (($context["categories"] ?? null)) {
            // line 28
            echo "       <div class=\"brand-index\"> <strong>";
            echo ($context["text_index"] ?? null);
            echo "</strong>
         <p>";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo "<a href=\"index.php?route=product/manufacturer#";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29);
                echo "\" data-scroll-to=\"#";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29);
                echo "</a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p></div>
      ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "      <h2 id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31);
                echo "\" class=\"title manufacturer-letter\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31);
                echo "</h2>
      ";
                // line 32
                if (twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "      <div class=\"manufacturer\">
      ";
                    // line 34
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 34));
                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                        // line 35
                        echo "        <div>
          <a href=\"";
                        // line 36
                        echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 36);
                        echo "\" class=\"image-card\">
            <img src=\"";
                        // line 37
                        echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb", [], "any", false, false, false, 37);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb2x", [], "any", false, false, false, 37)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb", [], "any", false, false, false, 37);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb2x", [], "any", false, false, false, 37);
                            echo " 2x\"";
                        }
                        echo " width=\"";
                        echo ($context["journal3_image_manufacturer_width"] ?? null);
                        echo "\" height=\"";
                        echo ($context["journal3_image_manufacturer_height"] ?? null);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 37);
                        echo "\"/>
            <span>";
                        // line 38
                        echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 38);
                        echo "</span>
          </a>
        </div>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "      </div>
      ";
                }
                // line 44
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "      ";
        } else {
            // line 46
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
            // line 48
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 51
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 52
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 54
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/product/manufacturer_list.twig";
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
        return array (  241 => 54,  236 => 52,  231 => 51,  223 => 48,  217 => 46,  214 => 45,  208 => 44,  204 => 42,  194 => 38,  176 => 37,  172 => 36,  169 => 35,  165 => 34,  162 => 33,  160 => 32,  153 => 31,  149 => 30,  132 => 29,  127 => 28,  125 => 27,  120 => 26,  112 => 24,  110 => 23,  105 => 22,  102 => 21,  99 => 20,  96 => 19,  93 => 18,  90 => 17,  87 => 16,  85 => 15,  81 => 14,  76 => 12,  72 => 10,  61 => 8,  57 => 7,  51 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/manufacturer_list.twig", "");
    }
}
