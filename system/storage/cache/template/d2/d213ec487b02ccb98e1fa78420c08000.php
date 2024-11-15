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

/* default/template/faq/faq.twig */
class __TwigTemplate_dc7c54fe4d6195d972bf59d015b813a9 extends Template
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
 <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

<div class=\"container\" style=\"background-color:white; padding:20px; border-radius:5px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);\">

  <div class=\"row\">
    <div class=\"col-md-9\" style=\"padding-right: 70px;\">
      <h1>";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["faq"] ?? null), "title", [], "any", false, false, false, 20);
        echo "</h1>
      <p>";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["faq"] ?? null), "text", [], "any", false, false, false, 21);
        echo "</p>
    </div>
    <div class=\"col-md-3\" style=\"padding-left: 30px;\">
<h2>

    <i class=\"fa fa-star\" aria-hidden=\"true\" style=\"font-size:20px;\"></i>

  Articles in this section
</h2>
";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faq_category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 31
            echo "      <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["faq"], "href", [], "any", false, false, false, 31);
            echo "\" 
   style=\"display: block; margin-bottom: 10px; font-size:15px;  color: black;\"
   onmouseover=\"this.style.color='lightgreen'\" 
   onmouseout=\"this.style.color='black'\">";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["faq"], "title", [], "any", false, false, false, 34);
            echo "</a>
   \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </div>
  </div>
</div>


";
        // line 41
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/faq/faq.twig";
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
        return array (  116 => 41,  109 => 36,  101 => 34,  94 => 31,  90 => 30,  78 => 21,  74 => 20,  65 => 13,  54 => 10,  51 => 9,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/faq/faq.twig", "");
    }
}
