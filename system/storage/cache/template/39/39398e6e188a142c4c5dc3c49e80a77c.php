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

/* journal3/template/journal3/grid.twig */
class __TwigTemplate_05da99d1c6a1bf4c034fffeb1dbfd794 extends Template
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
        if (($context["rows"] ?? null)) {
            // line 2
            echo "  <div class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["grid_classes"] ?? null)], "method", false, false, false, 2);
            echo " ";
            if ((twig_length_filter($this->env, ($context["rows"] ?? null)) == 1)) {
                echo "single-item";
            }
            echo "\">
    ";
            // line 3
            if (($context["edit"] ?? null)) {
                // line 4
                echo "      <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
                echo ($context["edit"] ?? null);
                echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
                echo ($context["name"] ?? null);
                echo "\"></em></button>
    ";
            }
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["grid_row"]) {
                // line 7
                echo "      <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["grid_row"], "classes", [], "any", false, false, false, 7)], "method", false, false, false, 7);
                echo "\">
        ";
                // line 8
                if (twig_get_attribute($this->env, $this->source, $context["grid_row"], "waveStatus", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "          <svg viewBox=\"0 0 100 20\" class=\"wave wave-top\" preserveAspectRatio=\"none\">
            <path fill=\"white\" d=\"M 0 30 V 10 Q 25 ";
                    // line 10
                    echo twig_get_attribute($this->env, $this->source, $context["grid_row"], "waveDirection", [], "any", false, false, false, 10);
                    echo " 55 10 T 100 10 V 30 Z\"></path>
          </svg>
        ";
                }
                // line 13
                echo "        <div class=\"row-bg\"></div>
        ";
                // line 14
                if ((twig_get_attribute($this->env, $this->source, $context["grid_row"], "videoBgStatus", [], "any", false, false, false, 14) && twig_get_attribute($this->env, $this->source, $context["grid_row"], "videoBg", [], "any", false, false, false, 14))) {
                    // line 15
                    echo "          <div class=\"video-row\">
            <video preload=\"none\" data-autoplay autoplay loop muted playsinline class=\"video-bg lazyload\" data-src=\"";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["grid_row"], "videoBg", [], "any", false, false, false, 16);
                    echo "\"></video>
          </div>
        ";
                }
                // line 19
                echo "        <div class=\"grid-cols-wrapper\">
          <div class=\"grid-cols ";
                // line 20
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grid_row"], "columns", [], "any", false, false, false, 20)) == 1)) {
                    echo "single-item";
                }
                echo "\">
            ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["grid_row"], "columns", [], "any", false, false, false, 21));
                foreach ($context['_seq'] as $context["_key"] => $context["grid_column"]) {
                    // line 22
                    echo "              <div class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["grid_column"], "classes", [], "any", false, false, false, 22)], "method", false, false, false, 22);
                    echo "\">
                ";
                    // line 23
                    if ((twig_get_attribute($this->env, $this->source, $context["grid_column"], "videoColStatus", [], "any", false, false, false, 23) && twig_get_attribute($this->env, $this->source, $context["grid_column"], "videoCol", [], "any", false, false, false, 23))) {
                        // line 24
                        echo "                  <video preload=\"none\" data-autoplay autoplay loop muted playsinline class=\"video-col-bg lazyload\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_column"], "videoCol", [], "any", false, false, false, 24);
                        echo "\"></video>
                ";
                    }
                    // line 26
                    echo "                <div class=\"grid-items ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["grid_column"], "items", [], "any", false, false, false, 26)) == 1)) {
                        echo "single-item";
                    }
                    echo "\">
                  ";
                    // line 27
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["grid_column"], "items", [], "any", false, false, false, 27));
                    foreach ($context['_seq'] as $context["_key"] => $context["grid_item"]) {
                        // line 28
                        echo "                    <div class=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["grid_item"], "classes", [], "any", false, false, false, 28)], "method", false, false, false, 28);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["grid_item"], "item", [], "any", false, false, false, 28);
                        echo "</div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grid_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "                </div>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grid_column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "          </div>
        </div>
        ";
                // line 35
                if (twig_get_attribute($this->env, $this->source, $context["grid_row"], "wave2Status", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "          <svg viewBox=\"0 0 100 20\" class=\"wave wave-bottom\" preserveAspectRatio=\"none\">
            <path fill=\"white\" d=\"M 0 30 V 10 Q 25 ";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["grid_row"], "wave2Direction", [], "any", false, false, false, 37);
                    echo " 55 10 T 100 10 V 30 Z\"></path>
          </svg>
        ";
                }
                // line 40
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grid_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/grid.twig";
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
        return array (  171 => 42,  164 => 40,  158 => 37,  155 => 36,  153 => 35,  149 => 33,  141 => 30,  130 => 28,  126 => 27,  119 => 26,  113 => 24,  111 => 23,  106 => 22,  102 => 21,  96 => 20,  93 => 19,  87 => 16,  84 => 15,  82 => 14,  79 => 13,  73 => 10,  70 => 9,  68 => 8,  63 => 7,  58 => 6,  50 => 4,  48 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/grid.twig", "");
    }
}
