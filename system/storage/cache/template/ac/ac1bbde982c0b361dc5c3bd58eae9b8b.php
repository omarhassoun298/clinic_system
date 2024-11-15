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

/* default/template/faq/category_list.twig */
class __TwigTemplate_39388a26664f6788c8556fb4a521fb43 extends Template
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
<style>
\t.primarycolor {
\t\tcolor: rgba(0, 33, 71, 1) !important;
\t}
</style>
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css\" rel=\"stylesheet\" />
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\tnew WOW().init();
</script>
";
        // line 12
        echo ($context["journal3_top"] ?? null);
        echo "
";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            $context["class"] = "col-sm-6";
        } elseif ((        // line 15
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            $context["class"] = "col-sm-9";
        } else {
            // line 18
            $context["class"] = "col-sm-12";
        }
        // line 20
        echo "<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "</div>
<div class=\"bootstrap-5-container\">
\t<div class=\"row align-items-center justify-content-around bg-white py-5\">
\t\t<div class=\"col-md-4 col-10 row gap-4 wow slideInLeft\">
\t\t\t<h3 class=\"display-3 brand_primary fw-bold text-dark\">How can we better support you?</h3>
\t\t\t<p>Search our knowledge base for answers to common questions.</p>
\t\t</div>
\t\t<div class=\"col-md-4 col-sm-8 text-center wow slideInRight\">
\t\t\t<img src=\"https://help.sarwa.co/hc/theming_assets/01HZKSZWNKFY4M58K2269KN1H0\"/>
\t\t</div>
\t</div>
\t<div class=\"container-xl bg-light\">
\t\t<div class=\"row bg-white my-5 pb-5 px-5\">
\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 34
            echo "\t\t\t<div class=\"col-md-4 mt-5 wow bounceInUp\" data-wow-duration=\"1.5s\" data-wow-delay=\"";
            echo (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34) * 0.05);
            echo "s\">
\t\t\t\t<div class=\"card p-3 border-0 shadow mb-2 h-100\">
\t\t\t\t\t<a href=\"";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 36);
            echo "\" class=\"text-decoration-none text-center text-dark py-5 d-flex flex-column align-items-center justify-content-center gap-3 w-100\">
\t\t\t\t\t\t<img src=\"";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 37);
            echo "\" class=\"mb-4\"/>
\t\t\t\t\t\t<h3 class=\"primarycolor fs-2 fw-bolder\">";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 38);
            echo "</h3>
\t\t\t\t\t\t<p class=\"primarycolor\">";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["category"], "subtitle", [], "any", false, false, false, 39);
            echo "</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t</div>
\t</div>
\t";
        // line 46
        echo ($context["contact_us_component"] ?? null);
        echo "
</div>
";
        // line 48
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/faq/category_list.twig";
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
        return array (  149 => 48,  144 => 46,  140 => 44,  121 => 39,  117 => 38,  113 => 37,  109 => 36,  103 => 34,  86 => 33,  67 => 20,  64 => 18,  61 => 16,  59 => 15,  57 => 14,  55 => 13,  51 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/faq/category_list.twig", "");
    }
}
