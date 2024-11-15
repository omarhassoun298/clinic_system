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

/* localisation/zone_list.twig */
class __TwigTemplate_7c5af16c3b923cfeb7762b050637038891f89e1bfbd0bc2bcbeb68b81ad559ae extends Template
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
\t\t\t\t<button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-zone').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
\t\t\t\t<a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
\t\t\t\t<button type=\"submit\" form=\"form-zone\" formaction=\"";
        // line 8
        echo ($context["delete"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" onclick=\"return confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
\t\t\t</div>
\t\t\t<h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t</ol>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div id=\"filter-zone\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 22
        echo ($context["text_filter"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"form-label\">";
        // line 25
        echo ($context["entry_name"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_name\" value=\"";
        echo ($context["filter_name"] ?? null);
        echo "\" data-oc-target=\"autocomplete-name\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" autocomplete=\"off\"/>
              <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>

\t\t\t\t\t\t</div>
            <div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"form-label\">";
        // line 30
        echo ($context["entry_country"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_country\" value=\"";
        echo ($context["filter_country"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_country"] ?? null);
        echo "\" id=\"input-country\" class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"form-label\">";
        // line 33
        echo ($context["entry_code"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_code\" value=\"";
        echo ($context["filter_code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 36
        echo ($context["button_filter"] ?? null);
        echo "</button>
            \t\t\t    <button type=\"button\" id=\"button-clear\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> Clear</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-9 col-md-122\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 44
        echo ($context["text_list"] ?? null);
        echo "</div>
\t\t\t\t\t<div id=\"zone\" class=\"card-body\">
            <form id=\"form-zone\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        // line 46
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#zone\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
                      <td class=\"text-start\"><a href=\"";
        // line 52
        echo ($context["sort_name"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "z.name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_name"] ?? null);
        echo "</a></td>
                      <td class=\"text-start\"><a href=\"";
        // line 53
        echo ($context["sort_country"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "c.name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_country"] ?? null);
        echo "</a></td>
                      <td class=\"text-start\"><a href=\"";
        // line 54
        echo ($context["sort_code"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "z.code")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_code"] ?? null);
        echo "</a></td>
                      <td class=\"text-end\">";
        // line 55
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 59
        if (($context["zones"] ?? null)) {
            // line 60
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["zones"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
                // line 61
                echo "                        <tr>
                          <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 62);
                echo "\" class=\"form-check-input\"/></td>
                          <td class=\"text-start\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["zone"], "name", [], "any", false, false, false, 63);
                echo "
                            <br/>
                            ";
                // line 65
                if (twig_get_attribute($this->env, $this->source, $context["zone"], "status", [], "any", false, false, false, 65)) {
                    // line 66
                    echo "                              <small class=\"text-success\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</small>
                            ";
                } else {
                    // line 68
                    echo "                              <small class=\"text-danger\">";
                    echo ($context["text_disabled"] ?? null);
                    echo "</small>
                            ";
                }
                // line 70
                echo "                          </td>
                          <td class=\"text-start\">";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["zone"], "country", [], "any", false, false, false, 71);
                echo "</td>
                          <td class=\"text-start\">";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["zone"], "code", [], "any", false, false, false, 72);
                echo "</td>
                          <td class=\"text-end\"><a href=\"";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["zone"], "edit", [], "any", false, false, false, 73);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                    ";
        } else {
            // line 77
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"5\">";
            // line 78
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 81
        echo "                  </tbody>
                </table>
              </div>
              <div class=\"row\">
                <div class=\"col-sm-6 text-start\">";
        // line 85
        echo ($context["pagination"] ?? null);
        echo "</div>
                <div class=\"col-sm-6 text-end\">";
        // line 86
        echo ($context["results"] ?? null);
        echo "</div>
              </div>
            </form>

          </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=localisation/zone/autocomplete&user_token=";
        // line 100
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['zone_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});
</script>
<script type=\"text/javascript\"><!--
\$('#button-clear').on('click',function(){
  \tlocation = 'index.php?route=localisation/zone&user_token=";
        // line 119
        echo ($context["user_token"] ?? null);
        echo "';
})
\$('#button-filter').on('click', function () {
    var url = '';

    var filter_name = \$('#input-name').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_country = \$('#input-country').val();

    if (filter_country) {
        url += '&filter_country=' + encodeURIComponent(filter_country);
    }

    var filter_code = \$('#input-code').val();

    if (filter_code) {
        url += '&filter_code=' + encodeURIComponent(filter_code);
    }

\tlocation = 'index.php?route=localisation/zone&user_token=";
        // line 142
        echo ($context["user_token"] ?? null);
        echo "' + url;

});
//--></script>
";
        // line 146
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "localisation/zone_list.twig";
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
        return array (  349 => 146,  342 => 142,  316 => 119,  294 => 100,  277 => 86,  273 => 85,  267 => 81,  261 => 78,  258 => 77,  255 => 76,  244 => 73,  240 => 72,  236 => 71,  233 => 70,  227 => 68,  221 => 66,  219 => 65,  214 => 63,  210 => 62,  207 => 61,  202 => 60,  200 => 59,  193 => 55,  181 => 54,  169 => 53,  157 => 52,  148 => 46,  143 => 44,  132 => 36,  122 => 33,  112 => 30,  100 => 25,  94 => 22,  85 => 15,  74 => 13,  70 => 12,  65 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "localisation/zone_list.twig", "");
    }
}
