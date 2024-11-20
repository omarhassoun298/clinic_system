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

/* clinic/doctor_form.twig */
class __TwigTemplate_151e71e84ef7abb016daa188a938e28e3f193942a508819fa3ecff57794f8d29 extends Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"float-end\">
\t\t\t\t<button type=\"submit\" form=\"form-blog\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t<i class=\"fa fa-reply\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t<h1>";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 18);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>
\t</div>

\t<div class=\"container-fluid\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t";
        // line 30
        echo ($context["text_form"] ?? null);
        echo "
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blog\" class=\"row\">
\t\t\t\t\t<div class=\"mb-3 row required\">
\t\t\t\t\t\t<label for=\"input-name\" class=\"col-md-2 col-form-label\">Name</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" id=\"input-name\" value=\"";
        // line 37
        echo ($context["username"] ?? null);
        echo "\" placeholder=\"Doctor Name\" class=\"form-control ";
        if (($context["error_title"] ?? null)) {
            echo "is-invalid";
        }
        echo "\"/>
\t\t\t\t\t\t\t ";
        // line 38
        if (($context["error_title"] ?? null)) {
            // line 39
            echo "\t\t\t\t\t\t\t\t<div id=\"error-title\" class=\"invalid-feedback d-block\">";
            echo ($context["error_title"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t ";
        }
        // line 41
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    <div class=\"mb-3 row \">
\t\t\t\t\t\t<label for=\"input-specialization\" class=\"col-md-2 col-form-label\">Specialization</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"specialization\" id=\"input-specialization\" value=\"";
        // line 46
        echo ($context["specialization"] ?? null);
        echo "\" placeholder=\"Doctor Specialization\" class=\"form-control \"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    <div class=\"mb-3 row required\">
\t\t\t\t\t\t<label for=\"input-telephone\" class=\"col-md-2 col-form-label\">Telephone</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"phone_number\" id=\"input-telephone\" value=\"";
        // line 52
        echo ($context["phone_number"] ?? null);
        echo "\" placeholder=\"Doctor Name\" class=\"form-control ";
        if (($context["error_title"] ?? null)) {
            echo "is-invalid";
        }
        echo "\"/>
\t\t\t\t\t\t\t ";
        // line 53
        if (($context["error_title"] ?? null)) {
            // line 54
            echo "\t\t\t\t\t\t\t\t<div id=\"error-title\" class=\"invalid-feedback d-block\">";
            echo ($context["error_title"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t ";
        }
        // line 56
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label for=\"input-description\" class=\"col-sm-2 col-form-label\">Description</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea name=\"description\" placeholder=\"Content\" id=\"input-description\"   class=\"form-control\">";
        // line 61
        echo ($context["description"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<style>
\t.cke_notification_warning {
\t\tdisplay: none;
\t}
</style>
<script src=\"view/javascript/ckeditor/ckeditor.js\"></script>
<script src=\"view/javascript/ckeditor/adapters/jquery.js\"></script>
<script type=\"text/javascript\">
\t// keyword
\$('#input-keyword').autocomplete({
'source': function (request, response) {
\$.ajax({
url: 'index.php?route=blog/keyword/autocomplete&user_token=  ";
        // line 81
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
dataType: 'json',
success: function (json) {
response(\$.map(json, function (item) {
return {label: item['name'], value: item['keyword_id']}
}));
}
});
},
'select': function (item) {
\$('#input-keyword').val('');

\$('#blog-keyword-' + item['value']).remove();

html = '<tr id=\"blog-keyword-' + item['value'] + '\">';
html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"blog_keyword[]\" value=\"' + item['value'] + '\"/></td>';
html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
html += '</tr>';

\$('#blog-keyword tbody').append(html);
}
});

\$('#blog-keyword').on('click', '.btn', function () {
\$(this).parent().parent().remove();
});
</script>
<script type=\"text/javascript\">
\t\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({language: '";
        // line 109
        echo ($context["ckeditor"] ?? null);
        echo "'});

\$('#button-filter').on('click', function () {
var url = '';
var filter_name = \$('input[name=\\'filter_name\\']').val();

if (filter_name) {
url += '&filter_name=' + encodeURIComponent(filter_name);
}

location = 'index.php?route=catalog/blog&user_token=  ";
        // line 119
        echo ($context["user_token"] ?? null);
        echo "' + url;
});

\$('button[form=\\'form-blog\\']').on('click', function (e) {
\$('#form-blog').attr('action', \$(this).attr('formaction'));
});

\$('#input-parent').autocomplete({
'source': function (request, response) {
\$.ajax({
url: 'index.php?route=catalog/blog/autocomplete&user_token=  ";
        // line 129
        echo ($context["user_token"] ?? null);
        echo "&filter_title=' + encodeURIComponent(request),
dataType: 'json',
success: function (json) {
json.unshift({'title': '";
        // line 132
        echo ($context["text_none"] ?? null);
        echo "', 'blog_id': '0'});

response(\$.map(json, function (item) {
return {value: item['blog_id'], label: item['title']}
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
        // line 147
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "clinic/doctor_form.twig";
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
        return array (  268 => 147,  250 => 132,  244 => 129,  231 => 119,  218 => 109,  187 => 81,  164 => 61,  157 => 56,  151 => 54,  149 => 53,  141 => 52,  132 => 46,  125 => 41,  119 => 39,  117 => 38,  109 => 37,  102 => 33,  96 => 30,  85 => 21,  74 => 18,  71 => 17,  67 => 16,  62 => 14,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "clinic/doctor_form.twig", "");
    }
}
