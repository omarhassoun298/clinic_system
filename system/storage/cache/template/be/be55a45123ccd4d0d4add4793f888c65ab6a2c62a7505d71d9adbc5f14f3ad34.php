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

/* extension/module/aqe/catalog/product_quick_form.twig */
class __TwigTemplate_c478404bdf5a69be761001d38ab68462b352ae82723acdf47d29f9f091e7178c extends Template
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
        echo "<input type=\"hidden\" name=\"p_id\" value=\"";
        echo ($context["product_id"] ?? null);
        echo "\" />
";
        // line 2
        if (twig_in_filter(($context["parameter"] ?? null), ["tag", "name"])) {
            // line 3
            echo "<div class=\"row-fluid\">
\t<div class=\"col-sm-12\">
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 6
                echo "\t\t<div class=\"input-group multi-row\">
\t\t\t<span class=\"input-group-addon\" title=\"";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 7);
                echo "\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 7);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 7);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 7);
                echo "\" /></span>
\t\t\t<input type=\"text\" name=\"value[";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 8);
                echo "]\" class=\"form-control\" value=\"";
                echo (($__internal_compile_0 = ($context["value"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 8)] ?? null) : null);
                echo "\" />
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t</div>
</div>
";
        } elseif (twig_in_filter(        // line 13
($context["parameter"] ?? null), ["seo", "keywords"])) {
            // line 14
            echo "<div class=\"table-responsive\">
<table class=\"table table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<td class=\"text-left\">";
            // line 18
            echo ($context["entry_store"] ?? null);
            echo "</td>
\t\t\t<td class=\"text-left\">";
            // line 19
            echo ($context["entry_keyword"] ?? null);
            echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 24
                echo "\t\t<tr>
\t\t\t<td class=\"text-left\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 25);
                echo "</td>
\t\t\t<td class=\"text-left\">
\t\t\t\t";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 28
                    echo "\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 28);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 28);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 28);
                    echo "\" /></span>
\t\t\t\t\t<input type=\"text\" name=\"value[";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 29);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29);
                    echo "]\" value=\"";
                    echo (($__internal_compile_1 = (($__internal_compile_2 = ($context["value"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 29)] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29)] ?? null) : null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_keyword"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "\t\t\t</td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t</tbody>
</table>
";
        } elseif ((        // line 37
($context["parameter"] ?? null) == "category")) {
            // line 38
            echo "<div class=\"row\">
\t<div class=\"col-sm-12\">
\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
            // line 40
            echo ($context["entry_category"] ?? null);
            echo "\" id=\"input-category\" class=\"form-control\" />
\t\t<div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
                // line 43
                echo "\t\t\t<div id=\"product-category";
                echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 43);
                echo "\"><i class=\"fa fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 43);
                echo "
\t\t\t\t\t<input type=\"hidden\" name=\"product_category[]\" value=\"";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 44);
                echo "\" />
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
            // line 54
            echo ($context["user_token"] ?? null);
            echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');

\t\t\$('#product-category' + item['value']).remove();

\t\t\$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});
//--></script>
";
        } elseif ((        // line 75
($context["parameter"] ?? null) == "store")) {
            // line 76
            echo "<div class=\"row\">
\t<div class=\"col-sm-12\">
\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 80
                echo "\t\t\t<div class=\"checkbox\">
\t\t\t\t<label>
\t\t\t\t\t<input type=\"checkbox\" name=\"product_store[]\" value=\"";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 82);
                echo "\"";
                echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 82), ($context["product_store"] ?? null))) ? (" checked=\"checked\"") : (""));
                echo "/>
\t\t\t\t\t";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 83);
                echo "
\t\t\t\t</label>
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t</div>
\t</div>
</div>
";
        } elseif (twig_in_filter(        // line 90
($context["parameter"] ?? null), ["filter", "filters"])) {
            // line 91
            echo "<div class=\"row\">
\t<div class=\"col-sm-12\">
\t\t<input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
            // line 93
            echo ($context["entry_filter"] ?? null);
            echo "\" id=\"input-filter\" class=\"form-control\" />
\t\t<div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
                // line 96
                echo "\t\t\t<div id=\"product-filter";
                echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 96);
                echo "\"><i class=\"fa fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 96);
                echo "
\t\t\t\t\t<input type=\"hidden\" name=\"product_filter[]\" value=\"";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 97);
                echo "\" />
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/filter/autocomplete&user_token=";
            // line 107
            echo ($context["user_token"] ?? null);
            echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['filter_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter\\']').val('');

\t\t\$('#product-filter' + item['value']).remove();

\t\t\$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});
//--></script>
";
        } elseif ((        // line 128
($context["parameter"] ?? null) == "attributes")) {
            // line 129
            echo "<div class=\"table-responsive\">
\t<table class=\"table table-striped table-bordered table-hover\" id=\"attributes\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td class=\"text-left\">";
            // line 133
            echo ($context["entry_attribute"] ?? null);
            echo "</td>
\t\t\t\t<td class=\"text-left\">";
            // line 134
            echo ($context["entry_text"] ?? null);
            echo "</td>
\t\t\t\t<td width=\"1\"></td>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 139
            $context["attribute_row"] = 0;
            // line 140
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
                // line 141
                echo "\t\t\t<tr id=\"attribute-row";
                echo ($context["attribute_row"] ?? null);
                echo "\">
\t\t\t\t<td class=\"text-left\" style=\"width:25%;\"><input type=\"text\" name=\"product_attribute[";
                // line 142
                echo ($context["attribute_row"] ?? null);
                echo "][name]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 142);
                echo "\" placeholder=\"";
                echo ($context["entry_attribute"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t<input type=\"hidden\" name=\"product_attribute[";
                // line 143
                echo ($context["attribute_row"] ?? null);
                echo "][attribute_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 143);
                echo "\" /></td>
\t\t\t\t<td class=\"text-left\">";
                // line 144
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 145
                    echo "\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 145);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 145);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 145);
                    echo "\" /></span>
\t\t\t\t\t\t<textarea name=\"product_attribute[";
                    // line 146
                    echo ($context["attribute_row"] ?? null);
                    echo "][product_attribute_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146);
                    echo "][text]\" rows=\"5\" placeholder=\"";
                    echo ($context["entry_text"] ?? null);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 146)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146)] ?? null) : null), "text", [], "any", false, false, false, 146);
                    echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                echo "</td>
\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#attribute-row";
                // line 149
                echo ($context["attribute_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t</tr>
\t\t\t";
                // line 151
                $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
                // line 152
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "\t\t</tbody>
\t\t<tfoot>
\t\t\t<tr>
\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
            // line 157
            echo ($context["button_attribute_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t</tr>
\t\t</tfoot>
\t</table>
</div>
<script type=\"text/javascript\"><!--
var attribute_row = ";
            // line 163
            echo ($context["attribute_row"] ?? null);
            echo ";

function addAttribute() {
\thtml  = '  <tr id=\"attribute-row' + attribute_row + '\">';
\thtml += '    <td class=\"text-left\" style=\"width:25%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
            // line 167
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\thtml += '    <td class=\"text-left\">';
\t";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 170
                echo "\thtml += '      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 170);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 170);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 170);
                echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 170);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" class=\"form-control\"></textarea></div>';
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "\thtml += '    </td>';
\thtml += '    <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 173
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '  </tr>';

\t\$('#attributes tbody').append(html);

\tattributeautocomplete(attribute_row);

\t\$('#attribute-row' + attribute_row + ' [data-toggle=\\'tooltip\\']').tooltip({container: 'body'});

\tattribute_row++;
}

function attributeautocomplete(attribute_row) {
\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\tsource: function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/attribute/autocomplete&user_token=";
            // line 189
            echo ($context["user_token"] ?? null);
            echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tcategory: item.attribute_group,
\t\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\t\tvalue: item.attribute_id
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\tselect: function(item) {
\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t}
\t});
}

\$('#attributes tbody tr').each(function(index, element) {
\tattributeautocomplete(index);
});
//--></script>
";
        } elseif ((        // line 213
($context["parameter"] ?? null) == "discounts")) {
            // line 214
            echo "<div class=\"table-responsive\">
\t<table class=\"table table-striped table-bordered table-hover\" id=\"discounts\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td class=\"text-left\">";
            // line 218
            echo ($context["entry_customer_group"] ?? null);
            echo "</td>
\t\t\t\t<td class=\"text-right\">";
            // line 219
            echo ($context["entry_quantity"] ?? null);
            echo "</td>
\t\t\t\t<td class=\"text-right\">";
            // line 220
            echo ($context["entry_priority"] ?? null);
            echo "</td>
\t\t\t\t<td class=\"text-right\">";
            // line 221
            echo ($context["entry_price"] ?? null);
            echo "</td>
\t\t\t\t<td class=\"text-left\">";
            // line 222
            echo ($context["entry_date_start"] ?? null);
            echo "</td>
\t\t\t\t<td class=\"text-left\">";
            // line 223
            echo ($context["entry_date_end"] ?? null);
            echo "</td>
\t\t\t\t<td width=\"1\"></td>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 228
            $context["discount_row"] = 0;
            // line 229
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
                // line 230
                echo "\t\t\t<tr id=\"discount-row";
                echo ($context["discount_row"] ?? null);
                echo "\">
\t\t\t\t<td class=\"text-left\"><select name=\"product_discount[";
                // line 231
                echo ($context["discount_row"] ?? null);
                echo "][customer_group_id]\" class=\"form-control\">
\t\t\t\t\t\t";
                // line 232
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                    // line 233
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 233) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 233))) {
                        // line 234
                        echo "\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 234);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 234);
                        echo "</option>
\t\t\t\t\t\t";
                    } else {
                        // line 236
                        echo "\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 236);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 236);
                        echo "</option>
\t\t\t\t\t\t";
                    }
                    // line 238
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 239
                echo "\t\t\t\t\t</select></td>
\t\t\t\t<td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                // line 240
                echo ($context["discount_row"] ?? null);
                echo "][quantity]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 240);
                echo "\" placeholder=\"";
                echo ($context["entry_quantity"] ?? null);
                echo "\" class=\"form-control\" /></td>
\t\t\t\t<td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                // line 241
                echo ($context["discount_row"] ?? null);
                echo "][priority]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 241);
                echo "\" placeholder=\"";
                echo ($context["entry_priority"] ?? null);
                echo "\" class=\"form-control\" /></td>
\t\t\t\t<td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                // line 242
                echo ($context["discount_row"] ?? null);
                echo "][price]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 242);
                echo "\" placeholder=\"";
                echo ($context["entry_price"] ?? null);
                echo "\" class=\"form-control\" /></td>
\t\t\t\t<td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
\t\t\t\t\t\t<input type=\"text\" name=\"product_discount[";
                // line 244
                echo ($context["discount_row"] ?? null);
                echo "][date_start]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 244);
                echo "\" placeholder=\"";
                echo ($context["entry_date_start"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t</span></div></td>
\t\t\t\t<td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
\t\t\t\t\t\t<input type=\"text\" name=\"product_discount[";
                // line 249
                echo ($context["discount_row"] ?? null);
                echo "][date_end]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 249);
                echo "\" placeholder=\"";
                echo ($context["entry_date_end"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t</span></div></td>
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t<input type=\"hidden\" name=\"product_discount[";
                // line 254
                echo ($context["discount_row"] ?? null);
                echo "][discount_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "discount_id", [], "any", false, false, false, 254);
                echo "\" />
\t\t\t\t\t<button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#discount-row";
                // line 255
                echo ($context["discount_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
                // line 258
                $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
                // line 259
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 260
            echo "\t\t</tbody>
\t\t<tfoot>
\t\t\t<tr>
\t\t\t\t<td colspan=\"6\"></td>
\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
            // line 264
            echo ($context["button_discount_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t</tr>
\t\t</tfoot>
\t</table>
</div>
<script type=\"text/javascript\"><!--
var discount_row = ";
            // line 270
            echo ($context["discount_row"] ?? null);
            echo ";

function addDiscount() {
\thtml  = '  <tr id=\"discount-row' + discount_row + '\">';
\thtml += '    <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
\t";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 276
                echo "\thtml += '      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 276);
                echo "\">";
                echo addslashes(twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 276));
                echo "</option>';
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 278
            echo "\thtml += '    </select></td>';
\thtml += '    <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
            // line 279
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\" /></td>';
\thtml += '    <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
            // line 280
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\" /></td>';
\thtml += '    <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
            // line 281
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>';
\thtml += '    <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
            // line 282
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\thtml += '    <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
            // line 283
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\thtml += '    <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 284
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '  </tr>';

\t\$('#discounts tbody').append(html);

\t\$('#discount-row' + discount_row + ' .date').datetimepicker({pickTime: false});

\t\$('#discount-row' + discount_row + ' [data-toggle=\\'tooltip\\']').tooltip({container: 'body'});

\tdiscount_row++;
}
\$('#discounts tbody .date').datetimepicker({pickTime: false});
//--></script>
";
        } elseif ((        // line 297
($context["parameter"] ?? null) == "images")) {
            // line 298
            echo "<div class=\"table-responsive\">
\t<table id=\"images\" class=\"table table-striped table-bordered table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td class=\"text-left\">";
            // line 302
            echo ($context["entry_image"] ?? null);
            echo "</td>
\t\t\t\t<td class=\"text-right\">";
            // line 303
            echo ($context["entry_sort_order"] ?? null);
            echo "</td>
\t\t\t\t<td width=\"1\"></td>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 308
            $context["image_row"] = 0;
            // line 309
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
                // line 310
                echo "\t\t\t<tr id=\"image-row";
                echo ($context["image_row"] ?? null);
                echo "\">
\t\t<td class=\"text-left\"><a href=\"\" id=\"thumb-image";
                // line 311
                echo ($context["image_row"] ?? null);
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 311);
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo ($context["placeholder"] ?? null);
                echo "\" /></a><input type=\"hidden\" name=\"product_image[";
                echo ($context["image_row"] ?? null);
                echo "][image]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 311);
                echo "\" id=\"input-image";
                echo ($context["image_row"] ?? null);
                echo "\" /></td>
\t\t<td class=\"text-right\"><input type=\"text\" name=\"product_image[";
                // line 312
                echo ($context["image_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 312);
                echo "\" placeholder=\"";
                echo ($context["entry_sort_order"] ?? null);
                echo "\" class=\"form-control\" /></td>
\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#image-row";
                // line 313
                echo ($context["image_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t</tr>
\t\t\t";
                // line 315
                $context["image_row"] = (($context["image_row"] ?? null) + 1);
                // line 316
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 317
            echo "\t\t</tbody>
\t\t<tfoot>
\t\t\t<tr>
\t\t\t\t<td colspan=\"2\"></td>
\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
            // line 321
            echo ($context["button_image_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t</tr>
\t\t</tfoot>
\t</table>
</div>
<script type=\"text/javascript\"><!--
var image_row = ";
            // line 327
            echo ($context["image_row"] ?? null);
            echo ";

function addImage() {
\thtml  = '<tr id=\"image-row' + image_row + '\">';
\thtml += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 331
            echo ($context["placeholder"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
            // line 332
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#image-row' + image_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 333
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#images tbody').append(html);

\t\$('#image-row' + image_row + ' [data-toggle=\\'tooltip\\']').tooltip({container: 'body'});

\timage_row++;
}
//--></script>
";
        } elseif ((        // line 343
($context["parameter"] ?? null) == "options")) {
            // line 344
            echo "<div class=\"row\" id=\"options-data\">
\t<div class=\"col-sm-3\">
\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"option\">
\t\t\t";
            // line 347
            $context["option_row"] = 0;
            // line 348
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                // line 349
                echo "\t\t\t<li><a href=\"#tab-option";
                echo ($context["option_row"] ?? null);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
                echo ($context["option_row"] ?? null);
                echo "\\']').parent().remove(); \$('#tab-option";
                echo ($context["option_row"] ?? null);
                echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 349);
                echo "</a></li>
\t\t\t";
                // line 350
                $context["option_row"] = (($context["option_row"] ?? null) + 1);
                // line 351
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 352
            echo "\t\t\t<li>
\t\t\t\t<input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
            // line 353
            echo ($context["entry_option"] ?? null);
            echo "\" id=\"input-option\" class=\"form-control\" />
\t\t\t</li>
\t\t</ul>
\t</div>
\t<div class=\"col-sm-9\">
\t\t<div class=\"tab-content\">
\t\t\t";
            // line 359
            $context["option_row"] = 0;
            // line 360
            echo "\t\t\t";
            $context["option_value_row"] = 0;
            // line 361
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                // line 362
                echo "\t\t\t<div class=\"tab-pane\" id=\"tab-option";
                echo ($context["option_row"] ?? null);
                echo "\">
\t\t\t\t<input type=\"hidden\" name=\"product_option[";
                // line 363
                echo ($context["option_row"] ?? null);
                echo "][product_option_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 363);
                echo "\" />
\t\t\t\t<input type=\"hidden\" name=\"product_option[";
                // line 364
                echo ($context["option_row"] ?? null);
                echo "][name]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 364);
                echo "\" />
\t\t\t\t<input type=\"hidden\" name=\"product_option[";
                // line 365
                echo ($context["option_row"] ?? null);
                echo "][option_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 365);
                echo "\" />
\t\t\t\t<input type=\"hidden\" name=\"product_option[";
                // line 366
                echo ($context["option_row"] ?? null);
                echo "][type]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 366);
                echo "\" />
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-required";
                // line 368
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_required"] ?? null);
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<select name=\"product_option[";
                // line 370
                echo ($context["option_row"] ?? null);
                echo "][required]\" id=\"input-required";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t";
                // line 371
                if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 371)) {
                    // line 372
                    echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                    echo ($context["text_yes"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
                    // line 373
                    echo ($context["text_no"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t";
                } else {
                    // line 375
                    echo "\t\t\t\t\t\t\t<option value=\"1\">";
                    echo ($context["text_yes"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                    // line 376
                    echo ($context["text_no"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                // line 378
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                // line 381
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 381) == "text")) {
                    // line 382
                    echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-value";
                    // line 383
                    echo ($context["option_row"] ?? null);
                    echo "\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"product_option[";
                    // line 385
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 385);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-value";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 389
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 389) == "textarea")) {
                    // line 390
                    echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-value";
                    // line 391
                    echo ($context["option_row"] ?? null);
                    echo "\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<textarea name=\"product_option[";
                    // line 393
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" rows=\"5\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-value";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 393);
                    echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 397
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 397) == "file")) {
                    // line 398
                    echo "\t\t\t\t<div class=\"form-group\" style=\"display: none;\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-value";
                    // line 399
                    echo ($context["option_row"] ?? null);
                    echo "\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"product_option[";
                    // line 401
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 401);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-value";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 405
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 405) == "date")) {
                    // line 406
                    echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-value";
                    // line 407
                    echo ($context["option_row"] ?? null);
                    echo "\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"product_option[";
                    // line 410
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 410);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 417
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 417) == "time")) {
                    // line 418
                    echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-value";
                    // line 419
                    echo ($context["option_row"] ?? null);
                    echo "\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"product_option[";
                    // line 422
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 422);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 429
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 429) == "datetime")) {
                    // line 430
                    echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-value";
                    // line 431
                    echo ($context["option_row"] ?? null);
                    echo "\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"product_option[";
                    // line 434
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 434);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 441
                echo "\t\t\t\t";
                if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 441) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 441) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 441) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 441) == "image"))) {
                    // line 442
                    echo "\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table id=\"option-value";
                    // line 443
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                    // line 446
                    echo ($context["entry_option_value"] ?? null);
                    echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                    // line 447
                    echo ($context["entry_quantity"] ?? null);
                    echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                    // line 448
                    echo ($context["entry_subtract"] ?? null);
                    echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                    // line 449
                    echo ($context["entry_price"] ?? null);
                    echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                    // line 450
                    echo ($context["entry_option_points"] ?? null);
                    echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                    // line 451
                    echo ($context["entry_weight"] ?? null);
                    echo "</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
                    // line 456
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 456));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                        // line 457
                        echo "\t\t\t\t\t\t\t<tr id=\"option-value-row";
                        echo ($context["option_value_row"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t<td class=\"text-left\"><select name=\"product_option[";
                        // line 458
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][option_value_id]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 459
                        if ((($__internal_compile_4 = ($context["option_values"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 459)] ?? null) : null)) {
                            // line 460
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_compile_5 = ($context["option_values"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 460)] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 461
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 461) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 461))) {
                                    // line 462
                                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 462);
                                    echo "\" selected=\"selected\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 462);
                                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 464
                                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 464);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 464);
                                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 466
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 467
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 468
                        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_option[";
                        // line 469
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][product_option_value_id]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 469);
                        echo "\" /></td>
\t\t\t\t\t\t\t\t<td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                        // line 470
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][quantity]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 470);
                        echo "\" placeholder=\"";
                        echo ($context["entry_quantity"] ?? null);
                        echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t<td class=\"text-left\"><select name=\"product_option[";
                        // line 471
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][subtract]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 472
                        if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 472)) {
                            // line 473
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                            echo ($context["text_yes"] ?? null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                            // line 474
                            echo ($context["text_no"] ?? null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 476
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                            echo ($context["text_yes"] ?? null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                            // line 477
                            echo ($context["text_no"] ?? null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 479
                        echo "\t\t\t\t\t\t\t\t\t</select></td>
\t\t\t\t\t\t\t\t<td class=\"text-right\"><select name=\"product_option[";
                        // line 480
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price_prefix]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 481
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 481) == "+")) {
                            // line 482
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"+\" selected=\"selected\">+</option>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 484
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"+\">+</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 486
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 486) == "-")) {
                            // line 487
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"-\" selected=\"selected\">-</option>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 489
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"-\">-</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 491
                        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_option[";
                        // line 492
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 492);
                        echo "\" placeholder=\"";
                        echo ($context["entry_price"] ?? null);
                        echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t<td class=\"text-right\"><select name=\"product_option[";
                        // line 493
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][points_prefix]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 494
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 494) == "+")) {
                            // line 495
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"+\" selected=\"selected\">+</option>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 497
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"+\">+</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 499
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 499) == "-")) {
                            // line 500
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"-\" selected=\"selected\">-</option>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 502
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"-\">-</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 504
                        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_option[";
                        // line 505
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][points]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 505);
                        echo "\" placeholder=\"";
                        echo ($context["entry_points"] ?? null);
                        echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t<td class=\"text-right\"><select name=\"product_option[";
                        // line 506
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][weight_prefix]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 507
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 507) == "+")) {
                            // line 508
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"+\" selected=\"selected\">+</option>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 510
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"+\">+</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 512
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 512) == "-")) {
                            // line 513
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"-\" selected=\"selected\">-</option>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 515
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"-\">-</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 517
                        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_option[";
                        // line 518
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][weight]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 518);
                        echo "\" placeholder=\"";
                        echo ($context["entry_weight"] ?? null);
                        echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                        // line 519
                        echo ($context["option_value_row"] ?? null);
                        echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                        // line 521
                        $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                        // line 522
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 523
                    echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"6\"></td>
\t\t\t\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                    // line 527
                    echo ($context["option_row"] ?? null);
                    echo "');\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_option_value_add"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<select id=\"option-values";
                    // line 532
                    echo ($context["option_row"] ?? null);
                    echo "\" style=\"display: none;\">
\t\t\t\t\t";
                    // line 533
                    if ((($__internal_compile_6 = ($context["option_values"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 533)] ?? null) : null)) {
                        // line 534
                        echo "\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_7 = ($context["option_values"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 534)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 535
                            echo "\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 535);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 535);
                            echo "</option>
\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 537
                        echo "\t\t\t\t\t";
                    }
                    // line 538
                    echo "\t\t\t\t</select>
\t\t\t\t";
                }
                // line 540
                echo "\t\t\t</div>
\t\t\t";
                // line 541
                $context["option_row"] = (($context["option_row"] ?? null) + 1);
                // line 542
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 543
            echo "\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
var option_row = ";
            // line 547
            echo ($context["option_row"] ?? null);
            echo ";

\$('input[name=\\'option\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/option/autocomplete&user_token=";
            // line 552
            echo ($context["user_token"] ?? null);
            echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tcategory: item['category'],
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['option_id'],
\t\t\t\t\t\ttype: item['type'],
\t\t\t\t\t\toption_value: item['option_value']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\thtml  = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
\t\thtml += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\thtml += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\thtml += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\thtml += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';
\t\thtml += '\t<div class=\"form-group\">';
\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
            // line 574
            echo ($context["entry_required"] ?? null);
            echo "</label>';
\t\thtml += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\thtml += '\t      <option value=\"1\">";
            // line 576
            echo ($context["text_yes"] ?? null);
            echo "</option>';
\t\thtml += '\t      <option value=\"0\">";
            // line 577
            echo ($context["text_no"] ?? null);
            echo "</option>';
\t\thtml += '\t  </select></div>';
\t\thtml += '\t</div>';

\t\tif (item['type'] == 'text') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
            // line 583
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 584
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'textarea') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
            // line 590
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
            // line 591
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'file') {
\t\t\thtml += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
            // line 597
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 598
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'date') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
            // line 604
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 605
            echo ($context["entry_option_value"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'time') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
            // line 611
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 612
            echo ($context["entry_option_value"] ?? null);
            echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'datetime') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
            // line 618
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 619
            echo ($context["entry_option_value"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\thtml += '<div class=\"table-responsive\">';
\t\t\thtml += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
\t\t\thtml += '  \t <thead>';
\t\t\thtml += '      <tr>';
\t\t\thtml += '        <td class=\"text-left\">";
            // line 628
            echo ($context["entry_option_value"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
            // line 629
            echo ($context["entry_quantity"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td class=\"text-left\">";
            // line 630
            echo ($context["entry_subtract"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
            // line 631
            echo ($context["entry_price"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
            // line 632
            echo ($context["entry_option_points"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
            // line 633
            echo ($context["entry_weight"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td></td>';
\t\t\thtml += '      </tr>';
\t\t\thtml += '  \t </thead>';
\t\t\thtml += '  \t <tbody>';
\t\t\thtml += '    </tbody>';
\t\t\thtml += '    <tfoot>';
\t\t\thtml += '      <tr>';
\t\t\thtml += '        <td colspan=\"6\"></td>';
\t\t\thtml += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
            // line 642
            echo ($context["button_option_value_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\thtml += '      </tr>';
\t\t\thtml += '    </tfoot>';
\t\t\thtml += '  </table>';
\t\t\thtml += '</div>';
\t\t\thtml += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

\t\t\tfor (i = 0; i < item['option_value'].length; i++) {
\t\t\t\thtml += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
\t\t\t}

\t\t\thtml += '  </select>';
\t\t\thtml += '</div>';
\t\t}

\t\t\$('#options-data .tab-content').append(html);

\t\t\$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove(); \$(\\'#option a:first\\').tab(\\'show\\')\"></i> ' + item['label'] + '</li>');

\t\t\$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\t\t\$('.date').datetimepicker({
\t\t\tpickTime: false
\t\t});

\t\t\$('.time').datetimepicker({
\t\t\tpickDate: false
\t\t});

\t\t\$('.datetime').datetimepicker({
\t\t\tpickDate: true,
\t\t\tpickTime: true
\t\t});

\t\t\$('#tab-option' + option_row + ' [data-toggle=\\'tooltip\\']').tooltip({container: 'body'});

\t\toption_row++;
\t}
});

var option_value_row = ";
            // line 682
            echo ($context["option_value_row"] ?? null);
            echo ";

function addOptionValue(option_row) {
\thtml  = '<tr id=\"option-value-row' + option_value_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\thtml += \$('#option-values' + option_row).html();
\thtml += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
            // line 689
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\thtml += '    <option value=\"1\">";
            // line 691
            echo ($context["text_yes"] ?? null);
            echo "</option>';
\thtml += '    <option value=\"0\">";
            // line 692
            echo ($context["text_no"] ?? null);
            echo "</option>';
\thtml += '  </select></td>';
\thtml += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\thtml += '    <option value=\"+\">+</option>';
\thtml += '    <option value=\"-\">-</option>';
\thtml += '  </select>';
\thtml += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
            // line 698
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\thtml += '    <option value=\"+\">+</option>';
\thtml += '    <option value=\"-\">-</option>';
\thtml += '  </select>';
\thtml += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
            // line 703
            echo ($context["entry_points"] ?? null);
            echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\thtml += '    <option value=\"+\">+</option>';
\thtml += '    <option value=\"-\">-</option>';
\thtml += '  </select>';
\thtml += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
            // line 708
            echo ($context["entry_weight"] ?? null);
            echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 709
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#option-value' + option_row + ' tbody').append(html);

\t\$('#option-value-row' + option_value_row + ' [data-toggle=\\'tooltip\\']').tooltip({container: 'body'});

\toption_value_row++;
}
\$('#option a:first').trigger('click');
\$('#options-data .date').datetimepicker({
\tpickTime: false
});

\$('#options-data .time').datetimepicker({
\tpickDate: false
});

\$('#options-data .datetime').datetimepicker({
\tpickDate: true,
\tpickTime: true
});
//--></script>
";
        } elseif ((        // line 732
($context["parameter"] ?? null) == "recurrings")) {
            // line 733
            echo "<div class=\"table-responsive\">
\t<table class=\"table table-striped table-bordered table-hover\" id=\"recurrings\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td class=\"text-left\">";
            // line 737
            echo ($context["entry_recurring"] ?? null);
            echo "</td>
\t\t\t\t<td class=\"text-left\">";
            // line 738
            echo ($context["entry_customer_group"] ?? null);
            echo "</td>
\t\t\t\t<td width=\"1\"></td>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 743
            $context["recurring_row"] = 0;
            // line 744
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
                // line 745
                echo "\t\t\t<tr id=\"recurring-row";
                echo ($context["recurring_row"] ?? null);
                echo "\">
\t\t\t\t\t<td class=\"text-left\"><select name=\"product_recurrings[";
                // line 746
                echo ($context["recurring_row"] ?? null);
                echo "][recurring_id]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
                // line 747
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                    // line 748
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 748) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 748))) {
                        // line 749
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 749);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 749);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 751
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 751);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 751);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 753
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 754
                echo "\t\t\t\t\t\t\t</select></td>
\t\t\t\t\t<td class=\"text-left\"><select name=\"product_recurrings[";
                // line 755
                echo ($context["recurring_row"] ?? null);
                echo "][customer_group_id]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
                // line 756
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                    // line 757
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 757) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 757))) {
                        // line 758
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 758);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 758);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 760
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 760);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 760);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 762
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 763
                echo "\t\t\t\t\t\t\t</select></td>
\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#recurring-row";
                // line 764
                echo ($context["recurring_row"] ?? null);
                echo "').remove()\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t</tr>
\t\t\t";
                // line 766
                $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
                // line 767
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 768
            echo "\t\t</tbody>
\t\t<tfoot>
\t\t\t<tr>
\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
            // line 772
            echo ($context["button_recurring_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t</tr>
\t\t</tfoot>
\t</table>
</div>
<script type=\"text/javascript\"><!--
var recurring_row = ";
            // line 778
            echo ($context["recurring_row"] ?? null);
            echo ";

function addRecurring() {
\thtml  = '<tr id=\"recurring-row' + recurring_row + '\">';
\thtml += '  <td class=\"text-left\">';
\thtml += '    <select name=\"product_recurrings[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
\t";
            // line 784
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 785
                echo "\thtml += '      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 785);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 785);
                echo "</option>';
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 787
            echo "\thtml += '    </select>';
\thtml += '  </td>';
\thtml += '  <td class=\"text-left\">';
\thtml += '    <select name=\"product_recurrings[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
\t";
            // line 791
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 792
                echo "\thtml += '      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 792);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 792);
                echo "</option>';
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 794
            echo "\thtml += '    <select>';
\thtml += '  </td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
            // line 796
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#recurrings tbody').append(html);

\t\$('#recurring-row' + recurring_row + ' [data-toggle=\\'tooltip\\']').tooltip({container: 'body'});

\trecurring_row++;
}
//--></script>
";
        } elseif ((        // line 806
($context["parameter"] ?? null) == "specials")) {
            // line 807
            echo "<div class=\"table-responsive\">
\t<table class=\"table table-striped table-bordered table-hover\" id=\"specials\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td class=\"text-left\">";
            // line 811
            echo ($context["entry_customer_group"] ?? null);
            echo "</td>
\t\t\t\t<td class=\"text-right\">";
            // line 812
            echo ($context["entry_priority"] ?? null);
            echo "</td>
\t\t\t\t<td class=\"text-right\">";
            // line 813
            echo ($context["entry_price"] ?? null);
            echo "</td>
\t\t\t\t<td class=\"text-left\">";
            // line 814
            echo ($context["entry_date_start"] ?? null);
            echo "</td>
\t\t\t\t<td class=\"text-left\">";
            // line 815
            echo ($context["entry_date_end"] ?? null);
            echo "</td>
\t\t\t\t<td width=\"1\"></td>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 820
            $context["special_row"] = 0;
            // line 821
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
                // line 822
                echo "\t\t\t<tr id=\"special-row";
                echo ($context["special_row"] ?? null);
                echo "\">
\t\t\t\t<td class=\"text-left\"><select name=\"product_special[";
                // line 823
                echo ($context["special_row"] ?? null);
                echo "][customer_group_id]\" class=\"form-control\">
\t\t\t\t\t\t";
                // line 824
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                    // line 825
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 825) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 825))) {
                        // line 826
                        echo "\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 826);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 826);
                        echo "</option>
\t\t\t\t\t\t\t";
                    } else {
                        // line 828
                        echo "\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 828);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 828);
                        echo "</option>
\t\t\t\t\t\t\t";
                    }
                    // line 830
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 831
                echo "\t\t\t\t\t</select></td>
\t\t\t\t<td class=\"text-right\"><input type=\"text\" name=\"product_special[";
                // line 832
                echo ($context["special_row"] ?? null);
                echo "][priority]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 832);
                echo "\" placeholder=\"";
                echo ($context["entry_priority"] ?? null);
                echo "\" class=\"form-control\" /></td>
\t\t\t\t<td class=\"text-right\"><input type=\"text\" name=\"product_special[";
                // line 833
                echo ($context["special_row"] ?? null);
                echo "][price]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 833);
                echo "\" placeholder=\"";
                echo ($context["entry_price"] ?? null);
                echo "\" class=\"form-control\" /></td>
\t\t\t\t<td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
\t\t\t\t\t<input type=\"text\" name=\"product_special[";
                // line 835
                echo ($context["special_row"] ?? null);
                echo "][date_start]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 835);
                echo "\" placeholder=\"";
                echo ($context["entry_date_start"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t</span></div></td>
\t\t\t\t<td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
\t\t\t\t\t<input type=\"text\" name=\"product_special[";
                // line 840
                echo ($context["special_row"] ?? null);
                echo "][date_end]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 840);
                echo "\" placeholder=\"";
                echo ($context["entry_date_end"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t</span></div></td>
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t<input type=\"hidden\" name=\"product_special[";
                // line 845
                echo ($context["special_row"] ?? null);
                echo "][special_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_special"], "special_id", [], "any", false, false, false, 845);
                echo "\" />
\t\t\t\t\t<button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#special-row";
                // line 846
                echo ($context["special_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
                // line 849
                $context["special_row"] = (($context["special_row"] ?? null) + 1);
                // line 850
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 851
            echo "\t\t</tbody>
\t\t<tfoot>
\t\t\t<tr>
\t\t\t\t<td colspan=\"5\"></td>
\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
            // line 855
            echo ($context["button_special_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t</tr>
\t\t</tfoot>
\t</table>
</div>
<script type=\"text/javascript\"><!--
var special_row = ";
            // line 861
            echo ($context["special_row"] ?? null);
            echo ";

function addSpecial() {
\thtml  = '<tr id=\"special-row' + special_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
\t";
            // line 866
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 867
                echo "\thtml += '      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 867);
                echo "\">";
                echo addslashes(twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 867));
                echo "</option>';
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 869
            echo "\thtml += '  </select></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
            // line 870
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
            // line 871
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
            // line 872
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\thtml += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
            // line 873
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 874
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#specials tbody').append(html);

\t\$('#special-row' + special_row + ' .date').datetimepicker({pickTime: false\t});

\t\$('#special-row' + special_row + ' [data-toggle=\\'tooltip\\']').tooltip({container: 'body'});

\tspecial_row++;
}

\$('#specials tbody .date').datetimepicker({pickTime: false});
//--></script>
";
        } elseif (twig_in_filter(        // line 888
($context["parameter"] ?? null), ["download", "downloads"])) {
            // line 889
            echo "<div class=\"row\">
\t<div class=\"col-sm-12\">
\t\t<input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
            // line 891
            echo ($context["entry_download"] ?? null);
            echo "\" id=\"input-download\" class=\"form-control\" />
\t\t<div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t";
            // line 893
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
                // line 894
                echo "\t\t\t<div id=\"product-download";
                echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 894);
                echo "\"><i class=\"fa fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 894);
                echo "
\t\t\t\t\t<input type=\"hidden\" name=\"product_download[]\" value=\"";
                // line 895
                echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 895);
                echo "\" />
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 898
            echo "\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'download\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/download/autocomplete&user_token=";
            // line 905
            echo ($context["user_token"] ?? null);
            echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['download_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'download\\']').val('');

\t\t\$('#product-download' + item['value']).remove();

\t\t\$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});
//--></script>
";
        } elseif ((        // line 926
($context["parameter"] ?? null) == "related")) {
            // line 927
            echo "<div class=\"row\">
\t<div class=\"col-sm-12\">
\t\t<input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
            // line 929
            echo ($context["entry_related"] ?? null);
            echo "\" id=\"input-related\" class=\"form-control\" />
\t\t<div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t";
            // line 931
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
                // line 932
                echo "\t\t\t<div id=\"product-related";
                echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 932);
                echo "\"><i class=\"fa fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 932);
                echo "
\t\t\t\t\t<input type=\"hidden\" name=\"product_related[]\" value=\"";
                // line 933
                echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 933);
                echo "\" />
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 936
            echo "\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'related\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
            // line 943
            echo ($context["user_token"] ?? null);
            echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'related\\']').val('');

\t\t\$('#product-related' + item['value']).remove();

\t\t\$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});
//--></script>
";
        } elseif ((        // line 964
($context["parameter"] ?? null) == "descriptions")) {
            // line 965
            echo "<ul class=\"nav nav-tabs\" id=\"language\">
\t";
            // line 966
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 967
                echo "\t<li><a href=\"#language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 967);
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 967);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 967);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 967);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 967);
                echo "</a></li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 969
            echo "</ul>
<div class=\"tab-content\">
\t";
            // line 971
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 972
                echo "\t<div class=\"tab-pane\" id=\"language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 972);
                echo "\">
\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label\" for=\"input-description";
                // line 974
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 974);
                echo "\">";
                echo ($context["entry_description"] ?? null);
                echo "</label>
\t\t\t<textarea name=\"product_description[";
                // line 975
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 975);
                echo "][description]\" placeholder=\"";
                echo ($context["entry_description"] ?? null);
                echo "\" id=\"input-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 975);
                echo "\" class=\"form-control\" data-toggle=\"summernote\" data-lang=\"";
                echo ($context["summernote"] ?? null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["product_description"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 975)] ?? null) : null), "description", [], "any", false, false, false, 975);
                echo "</textarea>
\t\t</div>
\t\t<div class=\"form-group required\">
\t\t\t<label class=\"control-label\" for=\"input-meta-title";
                // line 978
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 978);
                echo "\">";
                echo ($context["entry_meta_title"] ?? null);
                echo "</label>
\t\t\t<input type=\"text\" name=\"product_description[";
                // line 979
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 979);
                echo "][meta_title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["product_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 979)] ?? null) : null), "meta_title", [], "any", false, false, false, 979);
                echo "\" placeholder=\"";
                echo ($context["entry_meta_title"] ?? null);
                echo "\" id=\"input-meta-title";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 979);
                echo "\" class=\"form-control\" />
\t\t\t";
                // line 980
                if ((($__internal_compile_10 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 980)] ?? null) : null)) {
                    // line 981
                    echo "\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_11 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 981)] ?? null) : null);
                    echo "</div>
\t\t\t";
                }
                // line 983
                echo "\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label\" for=\"input-meta-description";
                // line 985
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 985);
                echo "\">";
                echo ($context["entry_meta_description"] ?? null);
                echo "</label>
\t\t\t<textarea name=\"product_description[";
                // line 986
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 986);
                echo "][meta_description]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_meta_description"] ?? null);
                echo "\" id=\"input-meta-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 986);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = ($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 986)] ?? null) : null), "meta_description", [], "any", false, false, false, 986);
                echo "</textarea>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label\" for=\"input-meta-keyword";
                // line 989
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 989);
                echo "\">";
                echo ($context["entry_meta_keyword"] ?? null);
                echo "</label>
\t\t\t<textarea name=\"product_description[";
                // line 990
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 990);
                echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_meta_keyword"] ?? null);
                echo "\" id=\"input-meta-keyword";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 990);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["product_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 990)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 990);
                echo "</textarea>
\t\t</div>
\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 994
            echo "</div>
<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
<link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
<script type=\"text/javascript\"><!--
";
            // line 1005
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1006
                echo "\$('#input-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1006);
                echo "').on('summernote.change', function(we, contents, \$editable) {
\t\$('#input-description";
                // line 1007
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1007);
                echo "').val(contents);
});
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1010
            echo "\$(\"#language a:first\").trigger('click');
//--></script>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/module/aqe/catalog/product_quick_form.twig";
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
        return array (  2462 => 1010,  2453 => 1007,  2448 => 1006,  2444 => 1005,  2431 => 994,  2415 => 990,  2409 => 989,  2397 => 986,  2391 => 985,  2387 => 983,  2381 => 981,  2379 => 980,  2369 => 979,  2363 => 978,  2349 => 975,  2343 => 974,  2337 => 972,  2333 => 971,  2329 => 969,  2312 => 967,  2308 => 966,  2305 => 965,  2303 => 964,  2279 => 943,  2270 => 936,  2261 => 933,  2254 => 932,  2250 => 931,  2245 => 929,  2241 => 927,  2239 => 926,  2215 => 905,  2206 => 898,  2197 => 895,  2190 => 894,  2186 => 893,  2181 => 891,  2177 => 889,  2175 => 888,  2158 => 874,  2154 => 873,  2150 => 872,  2146 => 871,  2142 => 870,  2139 => 869,  2128 => 867,  2124 => 866,  2116 => 861,  2107 => 855,  2101 => 851,  2095 => 850,  2093 => 849,  2085 => 846,  2079 => 845,  2067 => 840,  2055 => 835,  2046 => 833,  2038 => 832,  2035 => 831,  2029 => 830,  2021 => 828,  2013 => 826,  2010 => 825,  2006 => 824,  2002 => 823,  1997 => 822,  1992 => 821,  1990 => 820,  1982 => 815,  1978 => 814,  1974 => 813,  1970 => 812,  1966 => 811,  1960 => 807,  1958 => 806,  1945 => 796,  1941 => 794,  1930 => 792,  1926 => 791,  1920 => 787,  1909 => 785,  1905 => 784,  1896 => 778,  1887 => 772,  1881 => 768,  1875 => 767,  1873 => 766,  1866 => 764,  1863 => 763,  1857 => 762,  1849 => 760,  1841 => 758,  1838 => 757,  1834 => 756,  1830 => 755,  1827 => 754,  1821 => 753,  1813 => 751,  1805 => 749,  1802 => 748,  1798 => 747,  1794 => 746,  1789 => 745,  1784 => 744,  1782 => 743,  1774 => 738,  1770 => 737,  1764 => 733,  1762 => 732,  1736 => 709,  1732 => 708,  1724 => 703,  1716 => 698,  1707 => 692,  1703 => 691,  1698 => 689,  1688 => 682,  1645 => 642,  1633 => 633,  1629 => 632,  1625 => 631,  1621 => 630,  1617 => 629,  1613 => 628,  1601 => 619,  1597 => 618,  1588 => 612,  1584 => 611,  1575 => 605,  1571 => 604,  1562 => 598,  1558 => 597,  1549 => 591,  1545 => 590,  1536 => 584,  1532 => 583,  1523 => 577,  1519 => 576,  1514 => 574,  1489 => 552,  1481 => 547,  1475 => 543,  1469 => 542,  1467 => 541,  1464 => 540,  1460 => 538,  1457 => 537,  1446 => 535,  1441 => 534,  1439 => 533,  1435 => 532,  1425 => 527,  1419 => 523,  1413 => 522,  1411 => 521,  1404 => 519,  1394 => 518,  1391 => 517,  1387 => 515,  1383 => 513,  1380 => 512,  1376 => 510,  1372 => 508,  1370 => 507,  1364 => 506,  1354 => 505,  1351 => 504,  1347 => 502,  1343 => 500,  1340 => 499,  1336 => 497,  1332 => 495,  1330 => 494,  1324 => 493,  1314 => 492,  1311 => 491,  1307 => 489,  1303 => 487,  1300 => 486,  1296 => 484,  1292 => 482,  1290 => 481,  1284 => 480,  1281 => 479,  1276 => 477,  1271 => 476,  1266 => 474,  1261 => 473,  1259 => 472,  1253 => 471,  1243 => 470,  1235 => 469,  1232 => 468,  1229 => 467,  1223 => 466,  1215 => 464,  1207 => 462,  1204 => 461,  1199 => 460,  1197 => 459,  1191 => 458,  1186 => 457,  1182 => 456,  1174 => 451,  1170 => 450,  1166 => 449,  1162 => 448,  1158 => 447,  1154 => 446,  1148 => 443,  1145 => 442,  1142 => 441,  1126 => 434,  1118 => 431,  1115 => 430,  1112 => 429,  1096 => 422,  1088 => 419,  1085 => 418,  1082 => 417,  1066 => 410,  1058 => 407,  1055 => 406,  1052 => 405,  1039 => 401,  1032 => 399,  1029 => 398,  1026 => 397,  1013 => 393,  1006 => 391,  1003 => 390,  1000 => 389,  987 => 385,  980 => 383,  977 => 382,  975 => 381,  970 => 378,  965 => 376,  960 => 375,  955 => 373,  950 => 372,  948 => 371,  942 => 370,  935 => 368,  928 => 366,  922 => 365,  916 => 364,  910 => 363,  905 => 362,  900 => 361,  897 => 360,  895 => 359,  886 => 353,  883 => 352,  877 => 351,  875 => 350,  864 => 349,  859 => 348,  857 => 347,  852 => 344,  850 => 343,  837 => 333,  833 => 332,  827 => 331,  820 => 327,  811 => 321,  805 => 317,  799 => 316,  797 => 315,  790 => 313,  782 => 312,  768 => 311,  763 => 310,  758 => 309,  756 => 308,  748 => 303,  744 => 302,  738 => 298,  736 => 297,  720 => 284,  716 => 283,  712 => 282,  708 => 281,  704 => 280,  700 => 279,  697 => 278,  686 => 276,  682 => 275,  674 => 270,  665 => 264,  659 => 260,  653 => 259,  651 => 258,  643 => 255,  637 => 254,  625 => 249,  613 => 244,  604 => 242,  596 => 241,  588 => 240,  585 => 239,  579 => 238,  571 => 236,  563 => 234,  560 => 233,  556 => 232,  552 => 231,  547 => 230,  542 => 229,  540 => 228,  532 => 223,  528 => 222,  524 => 221,  520 => 220,  516 => 219,  512 => 218,  506 => 214,  504 => 213,  477 => 189,  458 => 173,  455 => 172,  438 => 170,  434 => 169,  429 => 167,  422 => 163,  413 => 157,  407 => 153,  401 => 152,  399 => 151,  392 => 149,  389 => 148,  374 => 146,  365 => 145,  361 => 144,  355 => 143,  347 => 142,  342 => 141,  337 => 140,  335 => 139,  327 => 134,  323 => 133,  317 => 129,  315 => 128,  291 => 107,  282 => 100,  273 => 97,  266 => 96,  262 => 95,  257 => 93,  253 => 91,  251 => 90,  246 => 87,  236 => 83,  230 => 82,  226 => 80,  222 => 79,  217 => 76,  215 => 75,  191 => 54,  182 => 47,  173 => 44,  166 => 43,  162 => 42,  157 => 40,  153 => 38,  151 => 37,  147 => 35,  139 => 32,  124 => 29,  115 => 28,  111 => 27,  106 => 25,  103 => 24,  99 => 23,  92 => 19,  88 => 18,  82 => 14,  80 => 13,  76 => 11,  65 => 8,  55 => 7,  52 => 6,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/aqe/catalog/product_quick_form.twig", "");
    }
}
