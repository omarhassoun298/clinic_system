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
class __TwigTemplate_1cd7997e51bce0daebd10c35de9b4da8140aa4c9c3efe6a6bad842f52576fbaa extends Template
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
        <button type=\"submit\" form=\"form-faq_category\" data-bs-toggle=\"tooltip\" title=\"";
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
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
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
        echo "        </ol>
      </nav>
    </div>
  </div>
  
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\">
        <i class=\"fa fa-pencil\"></i> ";
        // line 27
        echo ($context["text_form"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
        <form action=\"";
        // line 30
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-faq_category\" class=\"row\">
          <div class=\"mb-3 row\">
            <label for=\"input-title\" class=\"col-md-2 col-form-label\">";
        // line 32
        echo ($context["entry_title"] ?? null);
        echo "</label>
            <div class=\"col-md-10\">
              <input type=\"text\" name=\"title\" id=\"input-title\" value=\"";
        // line 34
        echo ($context["title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"mb-3 row\">
            <label for=\"input-subtitle\" class=\"col-md-2 col-form-label\">";
        // line 38
        echo ($context["entry_subtitle"] ?? null);
        echo "</label>
            <div class=\"col-md-10\">
              <input type=\"text\" name=\"subtitle\" id=\"input-subtitle\" value=\"";
        // line 40
        echo ($context["subtitle"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_subtitle"] ?? null);
        echo "\" class=\"form-control\" />
            </div>
          </div>
          ";
        // line 50
        echo "           <div class=\"row mb-3\">
              <label for=\"input-parent\" class=\"col-sm-2 col-form-label\">";
        // line 51
        echo ($context["entry_parent"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"filter_name\" value=\"";
        // line 53
        echo ($context["parent_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_parent"] ?? null);
        echo "\" id=\"input-parent\" data-oc-target=\"autocomplete-parent\" class=\"form-control\"/>
                <ul id=\"autocomplete-parent\" class=\"dropdown-menu\"></ul>
                <input type=\"hidden\" name=\"parent_id\" value=\"";
        // line 55
        echo ($context["parent_id"] ?? null);
        echo "\" id=\"input-parent-id\"/>
                <div class=\"form-text\">";
        // line 56
        echo ($context["help_parent"] ?? null);
        echo "</div>
                <div id=\"error-parent\" class=\"invalid-feedback\"></div>
              </div>
           </div>
          <div class=\"row mb-3\">
            <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 61
        echo ($context["entry_image"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"card image\">
                <img src=\"";
        // line 64
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/>
                <div class=\"card-body\">
                  <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 66
        echo ($context["button_edit"] ?? null);
        echo "</button>
                  <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 67
        echo ($context["button_clear"] ?? null);
        echo "</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\">

  \$('#button-filter').on('click', function() {
    var url = '';
    var filter_name = \$('input[name=\\'filter_name\\']').val();

    if (filter_name) {
      url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    location = 'index.php?route=catalog/faq_category&user_token=";
        // line 88
        echo ($context["user_token"] ?? null);
        echo "' + url;
  });

  \$('button[form=\\'form-product\\']').on('click', function(e) {
    \$('#form-product').attr('action', \$(this).attr('formaction'));
  });

\$('#input-parent').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/faq_category/autocomplete&user_token=";
        // line 98
        echo ($context["user_token"] ?? null);
        echo "&filter_title=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                json.unshift({
                    'title': '";
        // line 102
        echo ($context["text_none"] ?? null);
        echo "',
                    'faq_category_id': '0'
                });

                response(\$.map(json, function (item) {
                    return {
                        value: item['faq_category_id'],
                        label: item['title']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-parent').val(item['label']);
        \$('#input-parent-id').val(item['value']);
    }
});
  
</script>

";
        // line 123
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
        return array (  244 => 123,  220 => 102,  213 => 98,  200 => 88,  176 => 67,  172 => 66,  163 => 64,  157 => 61,  149 => 56,  145 => 55,  138 => 53,  133 => 51,  130 => 50,  122 => 40,  117 => 38,  108 => 34,  103 => 32,  98 => 30,  92 => 27,  82 => 19,  71 => 17,  67 => 16,  62 => 14,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/faq_category_form.twig", "");
    }
}
