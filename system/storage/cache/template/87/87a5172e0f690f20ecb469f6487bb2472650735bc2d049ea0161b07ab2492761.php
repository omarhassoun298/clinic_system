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

/* catalog/faq_form.twig */
class __TwigTemplate_c0748ac343dee79e03e08e2c84d6a709fc2556307ec1c78f8521ce156fceba3e extends Template
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
      <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "        <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\">
        <i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-faq_category\" class=\"row \">
          <div class=\"mb-3 row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-title\">";
        // line 29
        echo ($context["entry_title"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"title\" id=\"input-title\" value=\"";
        // line 31
        echo ($context["title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" />
            </div>
          </div>
           <div class=\"row mb-3\">
            <label for=\"input-text\" class=\"col-sm-2 col-form-label\">Text</label>
            <div class=\"col-sm-10\">
              <textarea name=\"text\" placeholder=\"Text\" id=\"input-text\" data-oc-toggle=\"ckeditor\" data-lang=\"";
        // line 37
        echo ($context["ckeditor"] ?? null);
        echo "\" class=\"form-control\">";
        echo ($context["text"] ?? null);
        echo "</textarea>
            </div>
          </div>
           <div class=\"row mb-3\">
                <label for=\"input-parent\" class=\"col-sm-2 col-form-label\">";
        // line 41
        echo ($context["entry_parent"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter_name\" value=\"";
        // line 43
        echo ($context["parent_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_parent"] ?? null);
        echo "\" id=\"input-parent\" data-oc-target=\"autocomplete-parent\" class=\"form-control\"/>
                  <ul id=\"autocomplete-parent\" class=\"dropdown-menu\"></ul>
                  <input type=\"hidden\" name=\"faq_category_id\" value=\"";
        // line 45
        echo ($context["faq_category_id"] ?? null);
        echo "\" id=\"input-parent-id\" />
                  <div class=\"form-text\">";
        // line 46
        echo ($context["help_parent"] ?? null);
        echo "</div>
                  <div id=\"error-parent\" class=\"invalid-feedback\"></div>
                </div>
              </div>
        </form>
      </div>
    </div>
  </div>
  \t<style>
\t.cke_notification_warning {
    display: none ;
  }
\t</style>
  <script src=\"view/javascript/ckeditor/ckeditor.js\"></script>
  <script src=\"view/javascript/ckeditor/adapters/jquery.js\"></script>
  <script type=\"text/javascript\">
  \$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '";
        // line 63
        echo ($context["ckeditor"] ?? null);
        echo "'
  });

    \$('#button-filter').on('click', function() {
      var url = '';

      var filter_name = \$('input[name=\\'filter_name\\']').val();
      if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
      }

      location = 'index.php?route=catalog/faq_category&user_token=";
        // line 74
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
        // line 84
        echo ($context["user_token"] ?? null);
        echo "&filter_title=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                json.unshift({
                    'title': '";
        // line 88
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
        return "catalog/faq_form.twig";
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
        return array (  218 => 108,  195 => 88,  188 => 84,  175 => 74,  161 => 63,  141 => 46,  137 => 45,  130 => 43,  125 => 41,  116 => 37,  105 => 31,  100 => 29,  95 => 27,  89 => 24,  81 => 18,  70 => 16,  66 => 15,  61 => 13,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/faq_form.twig", "");
    }
}
