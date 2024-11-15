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

/* journal3/template/journal3/module/background_slider.twig */
class __TwigTemplate_c80e1f3ab3eaf36215a553a026485da0 extends Template
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
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 1);
        echo "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 2
        echo ($context["edit"] ?? null);
        echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        echo ($context["name"] ?? null);
        echo "\"></em></button>
  <div class=\"slider-wrapper\">
    <div class=\"swiper-container\" ";
        // line 4
        if (($context["syncWith"] ?? null)) {
            echo "data-sync-with=\"";
            echo ($context["syncWith"] ?? null);
            echo "\"";
        }
        echo ">
      <div class=\"swiper-wrapper\" data-options='";
        // line 5
        echo json_encode(($context["options"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
        echo "'>
        ";
        // line 6
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
            // line 7
            echo "          <div class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 7)], "method", false, false, false, 7);
            echo "\">
            <div class=\"slide-content slide-content-";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 8);
            echo "\">
              ";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 9) == "image")) {
                // line 10
                echo "                ";
                if ((($context["lazyLoad"] ?? null) ||  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 10))) {
                    // line 11
                    echo "                  <img class=\"lazyload\" src=\"";
                    echo ($context["lazyload_placeholder"] ?? null);
                    echo "\" data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 11);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 11);
                    echo " 2x\" width=\"";
                    echo ($context["width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 11);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 11);
                    echo "\"/>
                ";
                } else {
                    // line 13
                    echo "                  <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 13);
                    echo "\" srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 13);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 13);
                    echo " 2x\" width=\"";
                    echo ($context["width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 13);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 13);
                    echo "\"/>
                ";
                }
                // line 15
                echo "              ";
            }
            // line 16
            echo "            </div>
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
        // line 19
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
        return "journal3/template/journal3/module/background_slider.twig";
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
        return array (  147 => 19,  131 => 16,  128 => 15,  110 => 13,  92 => 11,  89 => 10,  87 => 9,  83 => 8,  78 => 7,  61 => 6,  57 => 5,  49 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/background_slider.twig", "");
    }
}
