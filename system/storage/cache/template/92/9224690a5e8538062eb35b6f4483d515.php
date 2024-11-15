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

/* catalog/faq_category_form.twig */
class __TwigTemplate_7509de5d9f9378d37ab23b9ae308780d extends Template
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
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-faq_category\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 20
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 23
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-faq_category\" class=\"form-horizontal\">
         <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 25
        echo ($context["entry_title"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"title\" id=\"input-title\" value=\"";
        // line 27
        echo ($context["title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" />
            </div>
          </div>
           <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-subtitle\">";
        // line 31
        echo ($context["entry_subtitle"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"subtitle\" id=\"input-subtitle\" value=\"";
        // line 33
        echo ($context["subtitle"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_subtitle"] ?? null);
        echo "\" class=\"form-control\" />
            </div>
          </div>
     <div class=\"form-group\">
    <label class=\"col-sm-2 control-label\" for=\"input-parent\">Parent</label>
    <div class=\"col-sm-10\">
        <input type=\"text\" name=\"filter_name\" value=\"";
        // line 39
        echo ($context["parent_title"] ?? null);
        echo "\" placeholder=\"Parent\" id=\"input-parent\" class=\"form-control\"/>
        <input type=\"hidden\" name=\"parent_id\" value=\"";
        // line 40
        echo ($context["parent_id"] ?? null);
        echo "\" id=\"input-parent-id\" />
    </div>
</div>



      <div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 47
        echo ($context["entry_image"] ?? null);
        echo "</label>
  <div class=\"col-sm-10\">
    <div class=\"image-upload\">
      <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\">
        <img src=\"";
        // line 51
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
      </a>
      <input type=\"hidden\" name=\"image\" value=\"";
        // line 53
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
    </div>
  </div>
</div>




        </form>
      </div>
    </div>
  </div>
</div>

   <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tlocation = 'index.php?route=catalog/faq_category&user_token=";
        // line 77
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
<script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-product\\']').on('click', function(e) {
\t\$('#form-product').attr('action', \$(this).attr('formaction'));
});
  
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/faq_category/autocomplete&user_token=";
        // line 89
        echo ($context["user_token"] ?? null);
        echo "&filter_title=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['title'],
\t\t\t\t\t\tvalue: item['faq_category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t\t\$('input[name=\\'parent_id\\']').val(item['value']);
\t}
});
</script>

";
        // line 108
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/faq_category_form.twig";
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
        return array (  218 => 108,  196 => 89,  181 => 77,  154 => 53,  147 => 51,  140 => 47,  130 => 40,  126 => 39,  115 => 33,  110 => 31,  101 => 27,  96 => 25,  91 => 23,  85 => 20,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/faq_category_form.twig", "");
    }
}
