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

/* journal3/template/common/footer.twig */
class __TwigTemplate_77349e6cc0b313aa5c464a9ab3d8280e extends Template
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
        echo "
";
        // line 6
        echo ($context["journal3_bottom"] ?? null);
        echo "

";
        // line 8
        echo "</div>";
        // line 9
        echo "
";
        // line 10
        if (($context["journal3_footer_menu"] ?? null)) {
            // line 11
            echo "  <footer class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["footer_color_scheme"], "method", false, false, false, 11);
            echo "\">";
            echo ($context["journal3_footer_menu"] ?? null);
            echo "</footer>
";
        }
        // line 13
        echo "
";
        // line 14
        echo "</div>";
        echo " ";
        // line 15
        echo "
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 17
            if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "js_defer", [], "any", false, false, false, 17)) {
                // line 18
                echo "<script src=\"";
                echo $context["script"];
                echo "\" defer></script>
";
            } else {
                // line 20
                echo "<script src=\"";
                echo $context["script"];
                echo "\"></script>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["customJS"], "method", false, false, false, 24)) {
            // line 25
            echo "<script type=\"text/javascript\">";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["customJS"], "method", false, false, false, 25);
            echo "</script>
";
        }
        // line 27
        echo "
";
        // line 28
        if (( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 28) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["customCodeFooter"], "method", false, false, false, 28))) {
            // line 29
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["customCodeFooter"], "method", false, false, false, 29);
            echo "
";
        }
        // line 31
        echo "
";
        // line 32
        if (( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 32) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["scrollTop"], "method", false, false, false, 32))) {
            // line 33
            echo "<div class=\"scroll-top\"><em class=\"fa fa-angle-up\"></em></div>
";
        }
        // line 35
        echo "
";
        // line 36
        if (( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 36) && twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["filterActive"], "method", false, false, false, 36))) {
            // line 37
            echo "<a class=\"mobile-filter-trigger btn\" data-off-canvas=\"mobile-filter-container\" role=\"button\" title=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileFilterButtonText"], "method", false, false, false, 37);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileFilterButtonText"], "method", false, false, false, 37);
            echo "</a>
";
        }
        // line 39
        echo "
</body></html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/common/footer.twig";
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
        return array (  141 => 39,  133 => 37,  131 => 36,  128 => 35,  124 => 33,  122 => 32,  119 => 31,  114 => 29,  112 => 28,  109 => 27,  103 => 25,  101 => 24,  98 => 23,  88 => 20,  82 => 18,  80 => 17,  76 => 16,  73 => 15,  70 => 14,  67 => 13,  59 => 11,  57 => 10,  54 => 9,  52 => 8,  47 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/footer.twig", "");
    }
}
