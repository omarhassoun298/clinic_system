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

/* blog/keyword_form.twig */
class __TwigTemplate_b8f52ff1ddeb251d7a81f0f8fc4a9fcf568c0748a91d5db451ec8ef239505ac7 extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-keyword\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
          <i class=\"fa fa-save\"></i>
        </button>
        <a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-secondary\">
          <i class=\"fa fa-reply\"></i>
        </a>
      </div>
      <nav aria-label=\"breadcrumb\">
          <h1>";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ol class=\"breadcrumb\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "            <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "          </ol>
      </nav>
    </div>
  </div>
  
  <div class=\"container-fluid\">
      ";
        // line 25
        if (($context["error_warning"] ?? null)) {
            // line 26
            echo "         <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
      ";
        }
        // line 28
        echo "    <div class=\"card\">
      <div class=\"card-header\">
        <i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo ($context["text_form"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
        <form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-keyword\" class=\"row\">
          <div class=\"mb-3 row required\">
            <label for=\"input-name\" class=\"col-md-2 col-form-label\">";
        // line 35
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-md-10\">
              <input type=\"text\" name=\"name\" id=\"input-name\" value=\"";
        // line 37
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\"  class=\"form-control ";
        if (($context["error_name"] ?? null)) {
            echo "is-invalid";
        }
        echo "\"  />
              ";
        // line 38
        if (($context["error_name"] ?? null)) {
            // line 39
            echo "              <div id=\"error-name\" class=\"invalid-feedback d-block\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 41
        echo "            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


";
        // line 50
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "blog/keyword_form.twig";
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
        return array (  147 => 50,  136 => 41,  130 => 39,  128 => 38,  118 => 37,  113 => 35,  108 => 33,  102 => 30,  98 => 28,  92 => 26,  90 => 25,  82 => 19,  71 => 17,  67 => 16,  62 => 14,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/keyword_form.twig", "");
    }
}
