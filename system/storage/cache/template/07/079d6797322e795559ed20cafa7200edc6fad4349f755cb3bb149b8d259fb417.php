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

/* journal3/template/journal3/manufacturers.twig */
class __TwigTemplate_264f86e5922aca4f40251a02644f30c42ec032df6dc8323db8c300e4667fef5f extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 2
            echo "  <div class=\"manufacturer-layout ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["manufacturer"], "classes", [], "any", false, false, false, 2)], "method", false, false, false, 2);
            echo " ";
            echo ($context["color_scheme_content"] ?? null);
            echo "\">
    <div class=\"manufacturer-thumb\">
      <div class=\"image\">
        <a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 5);
            echo "\">
          ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 6)) {
                // line 7
                echo "            <img src=\"";
                echo ($context["dummy_image"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb", [], "any", false, false, false, 7);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb2x", [], "any", false, false, false, 7)) {
                    echo "data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb", [], "any", false, false, false, 7);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb2x", [], "any", false, false, false, 7);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 7);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 7);
                echo "\" class=\"lazyload\"/>
          ";
            } else {
                // line 9
                echo "            <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb", [], "any", false, false, false, 9);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb2x", [], "any", false, false, false, 9)) {
                    echo " srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb", [], "any", false, false, false, 9);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb2x", [], "any", false, false, false, 9);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 9);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 9);
                echo "\"/>
          ";
            }
            // line 11
            echo "        </a>
      </div>

      <div class=\"caption\">
        <div class=\"name\"><a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 15);
            echo "</a></div>
        ";
            // line 16
            if (($context["viewMoreText"] ?? null)) {
                // line 17
                echo "        <div class=\"button-group\">
          <a class=\"btn btn-view-more\" href=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 18);
                echo "\" title=\"";
                echo ($context["viewMoreText"] ?? null);
                echo "\">
            <span class=\"btn-text\">";
                // line 19
                echo ($context["viewMoreText"] ?? null);
                echo "</span>
          </a>
        </div>
        ";
            }
            // line 23
            echo "      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/manufacturers.twig";
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
        return array (  132 => 23,  125 => 19,  119 => 18,  116 => 17,  114 => 16,  108 => 15,  102 => 11,  80 => 9,  56 => 7,  54 => 6,  50 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/manufacturers.twig", "");
    }
}
