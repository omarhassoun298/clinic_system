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

/* default/template/faq/subcategories_with_faqs.twig */
class __TwigTemplate_01b17a2a671d364a4536882c26c6a666 extends Template
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
<ul class=\"breadcrumb\">
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a>
\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
<div class=\"container\">
\t<div style=\"margin-bottom:20px;\">
\t\t<h3 class=\"fs-2 fw-bolder text-dark\">";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["category_info"] ?? null), "title", [], "any", false, false, false, 16);
        echo "</h3>
\t\t<p class=\"primarycolor\">";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["category_info"] ?? null), "subtitle", [], "any", false, false, false, 17);
        echo "</p>
\t</div>
\t ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subcategories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            // line 20
            echo "    <div class=\"panel-group\" id=\"faq-66dacf5760b22333-collapse\" style=\"background:white; padding-right:10px padding-left:10px; ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20) > 1)) {
                echo "margin-top:15px;";
            }
            echo "\">
    <div class=\"module-item module-item-";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21);
            echo " panel\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a href=\"#faq-66dacf5760b22333-collapse-";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 24);
            echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#faq-66dacf5760b22333-collapse\" aria-expanded=\"false\" style=\"margin-left:10px; font-size:17px; font-weight:bold;\">
                    ";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["subcategory"], "title", [], "any", false, false, false, 25);
            echo "
                    <i class=\"fa fa-caret-down pull-right\"></i>
                </a>
            </h4>
        </div>
        <div class=\"panel-collapse collapse\" id=\"faq-66dacf5760b22333-collapse-";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30);
            echo "\" aria-expanded=\"false\">
            <div class=\"panel-body\">
                <div class=\"block-body expand-block\">
                    <div class=\"block-wrapper\">
                        <div class=\"block-content\" style=\"margin-left:10px;\">
                            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["subcategory"], "faqs", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
                // line 36
                echo "                                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["faq"], "href", [], "any", false, false, false, 36);
                echo "\" 
   style=\"display: block; margin-bottom: 10px; font-size:15px;  color: black;\"
   onmouseover=\"this.style.color='lightgreen'\" 
   onmouseout=\"this.style.color='black'\">";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["faq"], "title", [], "any", false, false, false, 39);
                echo "</a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
</div>
";
        // line 51
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/faq/subcategories_with_faqs.twig";
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
        return array (  173 => 51,  169 => 49,  148 => 41,  140 => 39,  133 => 36,  129 => 35,  121 => 30,  113 => 25,  109 => 24,  103 => 21,  96 => 20,  79 => 19,  74 => 17,  70 => 16,  65 => 13,  54 => 10,  51 => 9,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/faq/subcategories_with_faqs.twig", "");
    }
}
