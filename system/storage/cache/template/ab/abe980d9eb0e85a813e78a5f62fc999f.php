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

/* catalog/product_form.twig */
class __TwigTemplate_c1c014fc615deacb7ddb791e14109064 extends Template
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

\t\t\t\t<button type=\"submit\" id=\"save_apply\" name=\"save_apply\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_apply"] ?? null);
        echo "\" value=\"1\" class=\"btn btn-success\"><i class=\"fa fa-check\"></i></button>
\t\t\t\t
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 10
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ul>
    </div>
  </div>

\t\t\t";
        // line 20
        if (($context["success"] ?? null)) {
            // line 21
            echo "  \t\t\t<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["text_result_success"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  \t\t\t";
        }
        // line 23
        echo "  \t\t    
  <div class=\"container-fluid\"> ";
        // line 24
        if (($context["error_warning"] ?? null)) {
            // line 25
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 29
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 31
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 34
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">

";
        // line 36
        if (($context["prm_access_permission"] ?? null)) {
            // line 37
            echo "<script type=\"text/javascript\">
var rates = ";
            // line 38
            echo ($context["js_rates"] ?? null);
            echo ";

function calculateTaxes(taxed_value, fixed_taxes) {
\tvar amount = 0;
\t
\t\$.each(rates, function(index, item) {
\t\tif (item.type == 'F') { // Fixed
\t\t\tif (fixed_taxes) {
\t\t\t\tamount += parseFloat(item.rate);
\t\t\t}
\t\t} else if (item.type == 'P') { // Percentual
\t\t\tamount += (taxed_value / 100) * parseFloat(item.rate);
\t\t}
\t});
\t
\treturn amount;
}

function calculateUntaxedValue(taxed_value, fixed_taxes) {
\tvar value = taxed_value;
\tvar rate = 0;
\t
\t\$.each(rates, function(index, item) { // Removes fix taxes
\t\tif (item.type == 'F') { // Fixed
\t\t\tif (fixed_taxes) {
\t\t\t\tvalue -= parseFloat(item.rate);
\t\t\t}
\t\t}
\t});
\t
\t\$.each(rates, function(index, item) { // Calculates tax rate         \t\t    
\t\tif (item.type == 'P') { // Percentual
\t\t\trate += parseFloat(item.rate);
\t\t}
\t});

\tvar untaxed_value = 0;

\tif (rate != 0) untaxed_value = (value / (rate + 100)) * 100;
\t\telse untaxed_value = value;
            \t\t
\treturn untaxed_value;
}

function updatePrice() {
\tvar value = parseFloat(\$('#form-product input[name=price_tax]').val());
\tif (isNaN(value)) value = 0;
\t\t\t\t\t
\tif (value == 0) \$('#form-product input[name=price]').val(0);
\telse \$('#form-product input[name=price]').val((calculateUntaxedValue(value, true)).toFixed(4));
}

function updatePriceTax() {
\tvar value = parseFloat(\$('#form-product input[name=price]').val());
\tif (isNaN(value)) value = 0;
\t\t\t\t\t
\tif (value == 0) \$('#form-product input[name=price_tax]').val(0);
\telse \$('#form-product input[name=price_tax]').val((value + calculateTaxes(value, true)).toFixed(4));
}

function updatePriceDiscount(row) {
\tvar value = parseFloat(\$('#form-product #discount-row' + row + ' .discount_price_tax').val());
\tif (isNaN(value)) value = 0;
\t\t\t\t\t
\tif (value == 0) \$('#form-product #discount-row' + row + ' .discount_price').val(0);
\telse \$('#form-product #discount-row' + row + ' .discount_price').val((calculateUntaxedValue(value, true)).toFixed(4));
}

function updatePriceTaxDiscount(row) {
\tvar value = parseFloat(\$('#form-product #discount-row' + row + ' .discount_price').val());
\tif (isNaN(value)) value = 0;
\t\t\t\t\t
\tif (value == 0) \$('#form-product #discount-row' + row + ' .discount_price_tax').val(0);
\telse \$('#form-product #discount-row' + row + ' .discount_price_tax').val((value + calculateTaxes(value, true)).toFixed(4));
}

function updateCostDiscount(row) {
\tvar cost = parseFloat(\$('#cost').val());
\tif (isNaN(cost)) cost = 0;
\t\t\t\t\t
\tif (cost == 0) \$('#form-product #discount-row' + row + ' .discount_cost').val(0);
\telse \$('#form-product #discount-row' + row + ' .discount_cost').val((cost).toFixed(4));
}

function updateProfitDiscount(row) {
\tvar cost = parseFloat(\$('#cost').val());
\tvar price = parseFloat(\$('#form-product #discount-row' + row + ' .discount_price').val());
\tif (isNaN(price)) price = 0;
\t\t\t\t\t
\tif (price == 0) \$('#form-product #discount-row' + row + ' .discount_profit').val(0);
\telse \$('#form-product #discount-row' + row + ' .discount_profit').val((price - cost).toFixed(4));
}

function updatePriceSpecial(row) {
\tvar value = parseFloat(\$('#form-product #special-row' + row + ' .special_price_tax').val());
\tif (isNaN(value)) value = 0;
\t\t\t\t\t
\tif (value == 0) \$('#form-product #special-row' + row + ' .special_price').val(0);
\telse \$('#form-product #special-row' + row + ' .special_price').val((calculateUntaxedValue(value, true)).toFixed(4));
}

function updatePriceTaxSpecial(row) {
\tvar value = parseFloat(\$('#form-product #special-row' + row + ' .special_price').val());
\tif (isNaN(value)) value = 0;
\t\t\t\t\t
\tif (value == 0) \$('#form-product #special-row' + row + ' .special_price_tax').val(0);
\telse \$('#form-product #special-row' + row + ' .special_price_tax').val((value + calculateTaxes(value, true)).toFixed(4));
}

function updateCostSpecial(row) {
\tvar cost = parseFloat(\$('#cost').val());
\tif (isNaN(cost)) cost = 0;
\t\t\t\t\t
\tif (cost == 0) \$('#form-product #special-row' + row + ' .special_cost').val(0);
\telse \$('#form-product #special-row' + row + ' .special_cost').val((cost).toFixed(4));
}

function updateProfitSpecial(row) {
\tvar cost = parseFloat(\$('#cost').val());
\tvar price = parseFloat(\$('#form-product #special-row' + row + ' .special_price').val());
\tif (isNaN(price)) price = 0;
\t\t\t\t\t
\tif (price == 0) \$('#form-product #special-row' + row + ' .special_profit').val(0);
\telse \$('#form-product #special-row' + row + ' .special_profit').val((price - cost).toFixed(4));
}

function updatePriceOption(row) {
\tvar value = parseFloat(\$('#form-product #option-value-row' + row + ' .option_price_tax').val());
\tif (isNaN(value)) value = 0;
\t\t\t\t\t
\tif (value == 0) \$('#form-product #option-value-row' + row + ' .option_price').val(0);
\telse \$('#form-product #option-value-row' + row + ' .option_price').val((calculateUntaxedValue(value, false)).toFixed(4));
}

function updatePriceOptionNew(row) {
\tvar value = parseFloat(\$('#form-product #option-value-row' + row + ' .option_price_tax_new').val());
\tif (isNaN(value)) value = 0;
\t\t\t\t\t
\tif (value == 0) \$('#form-product #option-value-row' + row + ' .option_price_new').val(0);
\telse \$('#form-product #option-value-row' + row + ' .option_price_new').val((calculateUntaxedValue(value, false)).toFixed(4));
}

function updatePriceTaxOption(row) {
\tvar value = parseFloat(\$('#form-product #option-value-row' + row + ' .option_price').val());
\tif (isNaN(value)) value = 0;
\t\t\t\t\t
\tif (value == 0) \$('#form-product #option-value-row' + row + ' .option_price_tax').val(0);
\telse \$('#form-product #option-value-row' + row + ' .option_price_tax').val((value + calculateTaxes(value, false)).toFixed(4));
}

function updatePriceTaxOptionNew(row) {
\tvar value = parseFloat(\$('#form-product #option-value-row' + row + ' .option_price_new').val());
\tif (isNaN(value)) value = 0;
\t\t\t\t\t
\tif (value == 0) \$('#form-product #option-value-row' + row + ' .option_price_tax_new').val(0);
\telse \$('#form-product #option-value-row' + row + ' .option_price_tax_new').val((value + calculateTaxes(value, false)).toFixed(4));
}

\$(document).ready(function() {
\t\$('#form-product input[name=price_tax]').on(\"change keyup paste\", function() {
\t\tupdatePrice();
\t});
\t\$('#form-product input[name=price]').on(\"change keyup paste\", function() {
\t\tupdatePriceTax();
\t});
\t\$('#form-product').on(\"change keyup paste\", \".discount_price\", function() {
\t\tupdatePriceTaxDiscount(\$(this).parent().parent().data('row'));
\t\tupdateCostDiscount(\$(this).parent().parent().data('row'));
\t\tupdateProfitDiscount(\$(this).parent().parent().data('row'));\t\t
\t});
\t\$('#form-product').on(\"change keyup paste\", \".discount_price_tax\", function() {
\t\tupdatePriceDiscount(\$(this).parent().parent().data('row'));
\t\tupdateCostDiscount(\$(this).parent().parent().data('row'));
\t\tupdateProfitDiscount(\$(this).parent().parent().data('row'));\t\t
\t});\t
\t\$('#form-product').on(\"change keyup paste\", \".special_price\", function() {
\t\tupdatePriceTaxSpecial(\$(this).parent().parent().data('row'));
\t\tupdateCostSpecial(\$(this).parent().parent().data('row'));
\t\tupdateProfitSpecial(\$(this).parent().parent().data('row'));
\t});
\t\$('#form-product').on(\"change keyup paste\", \".special_price_tax\", function() {
\t\tupdatePriceSpecial(\$(this).parent().parent().data('row'));
\t\tupdateCostSpecial(\$(this).parent().parent().data('row'));
\t\tupdateProfitSpecial(\$(this).parent().parent().data('row'));
\t});
\t\$('#form-product').on(\"change keyup paste\", \".option_price\", function() {
\t\tupdatePriceTaxOption(\$(this).parent().parent().parent().parent().data('row'));
\t});
\t\$('#form-product').on(\"change keyup paste\", \".option_price_new\", function() {
\t\tupdatePriceTaxOptionNew(\$(this).parent().parent().data('row'));
\t});\t\t\t\t
\t\$('#form-product').on(\"change keyup paste\", \".option_price_tax\", function() {
\t\tupdatePriceOption(\$(this).parent().parent().parent().parent().data('row'));
\t});
\t\$('#form-product').on(\"change keyup paste\", \".option_price_tax_new\", function() {
\t\tupdatePriceOptionNew(\$(this).parent().parent().parent().data('row'));
\t});\t
\t
\t";
            // line 236
            if (($context["adv_price_tax"] ?? null)) {
                // line 237
                echo "\t\$('#form-product select[name=tax_class_id]').change(function() {
\t\t\$.ajax({
\t\ttype: 'POST',
\t\turl: 'index.php?route=catalog/product/json_taxrates&user_token=";
                // line 240
                echo ($context["user_token"] ?? null);
                echo "',
\t\tdata: { 'tax_class_id': \$(this).val() },
\t\tsuccess: function(result) {
\t\t\tif (result.status == 'ok') {
\t\t\t\trates = result.tax_rates;
\t\t\t\tupdatePriceTax();
\t\t\t\t\$('.discount_price_tax').each(function() {
\t\t\t\t\tupdatePriceTaxDiscount(\$(this).parent().parent().data('row'));
\t\t\t\t});
\t\t\t\t\$('.special_price_tax').each(function(){
\t\t\t\t\tupdatePriceTaxSpecial(\$(this).parent().parent().data('row'));
\t\t\t\t});
\t\t\t\t\$('.option_price_tax').each(function(){
\t\t\t\t\tupdatePriceTaxOption(\$(this).parent().parent().parent().parent().data('row'));
\t\t\t\t});
\t\t\t\t\$('.option_price_tax_new').each(function(){
\t\t\t\t\tupdatePriceTaxOptionNew(\$(this).parent().parent().parent().data('row'));
\t\t\t\t});\t\t\t\t
\t\t\t}
\t\t},
\t\tdataType: 'json'
\t\t});
\t});
\t";
            }
            // line 264
            echo "});
</script>\t
";
        }
        // line 267
        echo "            
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 269
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a ";
        // line 270
        echo ((($context["prm_access_permission"] ?? null)) ? ("style=\"color:#F99;\"") : (""));
        echo " href=\"#tab-data\" data-toggle=\"tab\">";
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 271
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        // line 272
        echo ($context["tab_attribute"] ?? null);
        echo "</a></li>
            <li><a id=\"optInitialize\" ";
        // line 273
        echo ((($context["prm_access_permission"] ?? null)) ? ("style=\"color:#F99;\"") : (""));
        echo " href=\"#tab-option\" data-toggle=\"tab\">";
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-recurring\" data-toggle=\"tab\">";
        // line 274
        echo ($context["tab_recurring"] ?? null);
        echo "</a></li>
            <li><a id=\"discInitialize\" ";
        // line 275
        echo ((($context["prm_access_permission"] ?? null)) ? ("style=\"color:#F99;\"") : (""));
        echo " href=\"#tab-discount\" data-toggle=\"tab\">";
        echo ($context["tab_discount"] ?? null);
        echo "</a></li></a></li>
            <li><a id=\"specInitialize\" ";
        // line 276
        echo ((($context["prm_access_permission"] ?? null)) ? ("style=\"color:#F99;\"") : (""));
        echo " href=\"#tab-special\" data-toggle=\"tab\">";
        echo ($context["tab_special"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 277
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
        // line 278
        echo ($context["tab_reward"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 279
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 280
        echo ($context["tab_design"] ?? null);
        echo "</a></li>

";
        // line 282
        if (($context["product_id"] ?? null)) {
            // line 283
            if (($context["prm_access_permission"] ?? null)) {
                echo "<li>
<a href=\"#tab-history\" data-toggle=\"tab\"><span style=\"color:#F99;\">";
                // line 284
                echo ($context["tab_stock_history"] ?? null);
                echo "</span></a></li><li><a href=\"#tab-sales\" data-toggle=\"tab\"><span style=\"color:#F99;\">";
                echo ($context["tab_sales_history"] ?? null);
                echo "</span></a></li>
";
            }
        }
        // line 287
        echo "\t\t\t
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 293
            echo "                  <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 293);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 293);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 293);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 293);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 293);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        echo "              </ul>
              <div class=\"tab-content\">";
        // line 296
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 297
            echo "                  <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 297);
            echo "\">
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 299
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 299);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 301
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 301);
            echo "][name]\" value=\"";
            echo (((($__internal_compile_0 = ($context["product_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 301)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["product_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 301)] ?? null) : null), "name", [], "any", false, false, false, 301)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 301);
            echo "\" class=\"form-control\"/>
                        ";
            // line 302
            if ((($__internal_compile_2 = ($context["error_name"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 302)] ?? null) : null)) {
                // line 303
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_compile_3 = ($context["error_name"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 303)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 304
            echo " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 307
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 307);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 309
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 309);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 309);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_4 = ($context["product_description"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 309)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["product_description"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 309)] ?? null) : null), "description", [], "any", false, false, false, 309)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 313
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 313);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 315
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 315);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_compile_6 = ($context["product_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 315)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["product_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 315)] ?? null) : null), "meta_title", [], "any", false, false, false, 315)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 315);
            echo "\" class=\"form-control\"/>
                        ";
            // line 316
            if ((($__internal_compile_8 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 316)] ?? null) : null)) {
                // line 317
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_compile_9 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 317)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 318
            echo " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 321
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 321);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 323
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 323);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 323);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_10 = ($context["product_description"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 323)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["product_description"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 323)] ?? null) : null), "meta_description", [], "any", false, false, false, 323)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 327
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 327);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 329
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 329);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 329);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_12 = ($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 329)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["product_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 329)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 329)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 333
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 333);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 335
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 335);
            echo "][tag]\" value=\"";
            echo (((($__internal_compile_14 = ($context["product_description"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 335)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["product_description"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 335)] ?? null) : null), "tag", [], "any", false, false, false, 335)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 335);
            echo "\" class=\"form-control\"/>
                      </div>
                    </div>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        echo "</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 343
        echo ($context["entry_model"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 345
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                  ";
        // line 346
        if (($context["error_model"] ?? null)) {
            // line 347
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                  ";
        }
        // line 348
        echo "</div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 351
        echo ($context["help_sku"] ?? null);
        echo "\">";
        echo ($context["entry_sku"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sku\" value=\"";
        // line 353
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\" id=\"input-sku\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"";
        // line 357
        echo ($context["help_upc"] ?? null);
        echo "\">";
        echo ($context["entry_upc"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"upc\" value=\"";
        // line 359
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"";
        // line 363
        echo ($context["help_ean"] ?? null);
        echo "\">";
        echo ($context["entry_ean"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"ean\" value=\"";
        // line 365
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"";
        // line 369
        echo ($context["help_jan"] ?? null);
        echo "\">";
        echo ($context["entry_jan"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"jan\" value=\"";
        // line 371
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"";
        // line 375
        echo ($context["help_isbn"] ?? null);
        echo "\">";
        echo ($context["entry_isbn"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"isbn\" value=\"";
        // line 377
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\" title=\"";
        // line 381
        echo ($context["help_mpn"] ?? null);
        echo "\">";
        echo ($context["entry_mpn"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"mpn\" value=\"";
        // line 383
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\" id=\"input-mpn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 387
        echo ($context["entry_location"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  
                  <input type=\"text\" name=\"location\" value=\"";
        // line 390
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\" />
                </div>
              </div>\t\t\t
";
        // line 393
        if (($context["prm_access_permission"] ?? null)) {
            // line 394
            echo "\t\t\t<div class=\"form-group\">
<style type=\"text/css\">
#show_restock_cost {
    display: none;
}
</style> \t\t\t\t\t\t
<script type=\"text/javascript\">
\$(document).ready(function(){
\tif (document.getElementById('form-product').price.value > 0 && (document.getElementById('form-product').cost.value > 0 || document.getElementById('form-product').cost_amount.value > 0)) {
\t\tvar profit = (parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)).toFixed(4)
\t\tvar profit_margin = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').price.value))*100).toFixed(2)+'%'
\t\tvar profit_markup = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').cost.value))*100).toFixed(2)+'%'
\t} else {
\t\tvar profit = '0'
\t\tvar profit_margin = '0%'
\t\tvar profit_markup = '0%'
\t}
\tdocument.getElementById('form-product').profit.value = profit
\tdocument.getElementById('form-product').profit_margin.value = profit_margin
\tdocument.getElementById('form-product').profit_markup.value = profit_markup
\t
\t\$('#input-costing-method').on('change', function() {
    \tif (\$(\"#cost_average\").is(\":selected\")) {\t\t
\t\t\t
\t\t\t\$(\"#cont\").html(\"<span style='color:#ed9999;'>";
            // line 418
            echo ($context["text_cost_average_set"] ?? null);
            echo "</span>\");
\t\t\t\$(\".show_restock_cost\").show();
\t\t\t
\t\t\tif (document.getElementById('form-product').qty_by_option_checkbox.checked == 1) {\t\t\t
\t\t\t\tif (document.getElementById('form-product').restock_quantity.value != '' && document.getElementById('form-product').restock_quantity.value != 0) {
\t\t\t\t\tvar cost = parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)
\t\t\t\t\tvar restock_quantity_temp = parseFloat(document.getElementById('form-product').restock_quantity_temp.value) + ((parseFloat(document.getElementById('form-product').quantity_temp.value) - parseFloat(document.getElementById('form-product').restock_quantity_temp.value)) - parseFloat(document.getElementById('form-product').remove_temp.value))
\t\t\t\t\tvar oldcost = parseFloat(document.getElementById('form-product').oldcost_temp.value)
\t\t\t\t\tvar stockquantity = parseFloat(document.getElementById('form-product').quantity_temp.value) - (parseFloat(document.getElementById('form-product').restock_quantity_temp.value) + ((parseFloat(document.getElementById('form-product').quantity_temp.value) - parseFloat(document.getElementById('form-product').restock_quantity_temp.value)) - parseFloat(document.getElementById('form-product').remove_temp.value)))
\t\t\t\t\tvar quantity_temp = parseFloat(document.getElementById('form-product').quantity_temp.value)
\t\t\t\t\tvar totalcost_opt = (((oldcost*stockquantity)+(restock_quantity_temp*cost))/quantity_temp).toFixed(4)
\t\t\t\t\tdocument.getElementById('form-product').restock_cost.value = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)\t\t\t\t\t\t
\t\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost_opt
\t\t\t\t}
\t\t\t\tif (document.getElementById('form-product').restock_quantity.value == '' || document.getElementById('form-product').restock_quantity.value == 0) {
\t\t\t\t\tvar totalcost_opt = (parseFloat(document.getElementById('form-product').oldcost_temp.value)).toFixed(4)
\t\t\t\t\tdocument.getElementById('form-product').restock_cost.value = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)\t\t\t\t\t
\t\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost_opt
\t\t\t\t}
\t\t\t\tif (document.getElementById('form-product').price.value > 0 && (document.getElementById('form-product').cost.value > 0 || document.getElementById('form-product').cost_amount.value > 0)) {
\t\t\t\t\tvar profit = (parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)).toFixed(4)
\t\t\t\t\tvar profit_margin = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').price.value))*100).toFixed(2)+'%'
\t\t\t\t\tvar profit_markup = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').cost.value))*100).toFixed(2)+'%'
\t\t\t\t} else {
\t\t\t\t\tvar profit = '0'
\t\t\t\t\tvar profit_margin = '0%'
\t\t\t\t\tvar profit_markup = '0%'
\t\t\t\t}
\t\t\t\tdocument.getElementById('form-product').profit.value = profit
\t\t\t\tdocument.getElementById('form-product').profit_margin.value = profit_margin
\t\t\t\tdocument.getElementById('form-product').profit_markup.value = profit_markup\t\t\t\t
\t\t\t} else if (document.getElementById('form-product').qty_by_option_checkbox.checked == 0) {\t\t\t
\t\t\t\tif (document.getElementById('form-product').restock_quantity.value != '' && document.getElementById('form-product').restock_quantity.value != 0) {\t\t\t\t
\t\t\t\t\tvar cost = parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)
\t\t\t\t\tvar restock_quantity = parseFloat(document.getElementById('form-product').restock_quantity.value)
\t\t\t\t\tvar oldcost = parseFloat(document.getElementById('form-product').oldcost_temp.value)
\t\t\t\t\tvar stockquantity = parseFloat(document.getElementById('form-product').stockquantity_temp.value)
\t\t\t\t\tvar quantity = parseFloat(document.getElementById('form-product').quantity.value)
\t\t\t\t\tvar totalcost = (((oldcost*stockquantity)+(restock_quantity*cost))/quantity).toFixed(4)
\t\t\t\t\tdocument.getElementById('form-product').restock_cost.value = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost
\t\t\t\t}\t\t\t\t\t
\t\t\t\tif (document.getElementById('form-product').restock_quantity.value == '' || document.getElementById('form-product').restock_quantity.value == 0) {\t\t\t\t
\t\t\t\t\tvar totalcost = (parseFloat(document.getElementById('form-product').oldcost_temp.value)).toFixed(4)
\t\t\t\t\tdocument.getElementById('form-product').restock_cost.value = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost
\t\t\t\t}
\t\t\t\tif (document.getElementById('form-product').price.value > 0 && (document.getElementById('form-product').cost.value > 0 || document.getElementById('form-product').cost_amount.value > 0)) {
\t\t\t\t\tvar profit = (parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)).toFixed(4)
\t\t\t\t\tvar profit_margin = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').price.value))*100).toFixed(2)+'%'
\t\t\t\t\tvar profit_markup = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').cost.value))*100).toFixed(2)+'%'
\t\t\t\t} else {
\t\t\t\t\tvar profit = '0'
\t\t\t\t\tvar profit_margin = '0%'
\t\t\t\t\tvar profit_markup = '0%'
\t\t\t\t}
\t\t\t\tdocument.getElementById('form-product').profit.value = profit
\t\t\t\tdocument.getElementById('form-product').profit_margin.value = profit_margin
\t\t\t\tdocument.getElementById('form-product').profit_markup.value = profit_markup\t\t\t\t\t
\t\t\t}
\t\t\t
    \t} else if (\$(\"#cost_fixed\").is(\":selected\")) {\t\t
\t\t
        \t\$(\"#cont\").html(\"<span style='color:#ed9999;'>";
            // line 481
            echo ($context["text_cost"] ?? null);
            echo "</span>\");
\t\t\t\$(\".show_restock_cost\").hide();
\t\t\t
\t\t\tif (document.getElementById('form-product').qty_by_option_checkbox.checked == 1) {\t\t\t
\t\t\t\tif (document.getElementById('form-product').restock_quantity.value != '' && document.getElementById('form-product').restock_quantity.value != 0) {
\t\t\t\t\tvar totalcost_opt = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost_opt
\t\t\t\t}
\t\t\t\tif (document.getElementById('form-product').restock_quantity.value == '' || document.getElementById('form-product').restock_quantity.value == 0) {
\t\t\t\t\tvar totalcost_opt = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost_opt
\t\t\t\t}
\t\t\t\tif (document.getElementById('form-product').price.value > 0 && (document.getElementById('form-product').cost.value > 0 || document.getElementById('form-product').cost_amount.value > 0)) {
\t\t\t\t\tvar profit = (parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)).toFixed(4)
\t\t\t\t\tvar profit_margin = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').price.value))*100).toFixed(2)+'%'
\t\t\t\t\tvar profit_markup = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').cost.value))*100).toFixed(2)+'%'
\t\t\t\t} else {
\t\t\t\t\tvar profit = '0'
\t\t\t\t\tvar profit_margin = '0%'
\t\t\t\t\tvar profit_markup = '0%'
\t\t\t\t}
\t\t\t\tdocument.getElementById('form-product').profit.value = profit
\t\t\t\tdocument.getElementById('form-product').profit_margin.value = profit_margin
\t\t\t\tdocument.getElementById('form-product').profit_markup.value = profit_markup\t\t\t\t\t
\t\t\t} else if (document.getElementById('form-product').qty_by_option_checkbox.checked == 0) {\t\t\t
\t\t\t\tif (document.getElementById('form-product').restock_quantity.value != '' && document.getElementById('form-product').restock_quantity.value != 0) {\t\t\t\t
\t\t\t\t\tvar totalcost = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost
\t\t\t\t}\t\t\t\t\t
\t\t\t\tif (document.getElementById('form-product').restock_quantity.value == '' || document.getElementById('form-product').restock_quantity.value == 0) {\t\t\t\t
\t\t\t\t\tvar totalcost = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost
\t\t\t\t}
\t\t\t\tif (document.getElementById('form-product').price.value > 0 && (document.getElementById('form-product').cost.value > 0 || document.getElementById('form-product').cost_amount.value > 0)) {
\t\t\t\t\tvar profit = (parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)).toFixed(4)
\t\t\t\t\tvar profit_margin = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').price.value))*100).toFixed(2)+'%'
\t\t\t\t\tvar profit_markup = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').cost.value))*100).toFixed(2)+'%'
\t\t\t\t} else {
\t\t\t\t\tvar profit = '0'
\t\t\t\t\tvar profit_margin = '0%'
\t\t\t\t\tvar profit_markup = '0%'
\t\t\t\t}
\t\t\t\tdocument.getElementById('form-product').profit.value = profit
\t\t\t\tdocument.getElementById('form-product').profit_margin.value = profit_margin
\t\t\t\tdocument.getElementById('form-product').profit_markup.value = profit_markup\t\t\t\t
\t\t\t}\t\t\t
\t    }
\t});\t

  \t\$(\"#price\").keypress(function (e) {
     \tif (e.which != 8 && e.which != 0 && (e.which < 46 || e.which > 57)) {
\t\t\treturn false;
    \t}
\t});\t
  \t\$(\"#cost_amount\").keypress(function (e) {
     \tif (e.which != 8 && e.which != 0 && (e.which < 46 || e.which > 57)) {
\t\t\treturn false;
    \t}
\t});
  \t\$(\"#cost_percentage\").keypress(function (e) {
     \tif (e.which != 8 && e.which != 0 && (e.which < 46 || e.which > 57)) {
\t\t\treturn false;
    \t}
\t});
  \t\$(\"#cost_additional\").keypress(function (e) {
     \tif (e.which != 8 && e.which != 0 && (e.which < 46 || e.which > 57)) {
\t\t\treturn false;
    \t}
\t}); 
  \t\$(\"#restock_quantity\").keypress(function (e) {
     \tif (e.which != 8 && e.which != 0 && (e.which < 45 || e.which > 57)) {
\t\t\treturn false;
    \t}
\t});   
\t
\t\$(\"#qty_by_option_checkbox\").change(function() {
    if (this.checked) {
\t\t\$(\"#restock_quantity\").prop('readonly', 'readonly');
\t\t\$(\"#restock_quantity\").css('background-color', '#EEE');
\t\t\$(\"#qupdatemsg\").html(\"";
            // line 560
            echo ($context["text_qty_set_by_option"] ?? null);
            echo "\").show().delay(1000).fadeOut(1500);
\t\tif (document.getElementById('form-product').restock_quantity_temp.value == 0 && document.getElementById('form-product').quantity_temp.value == 0 && document.getElementById('form-product').remove_temp.value == 0) {
\t\t\tvar restock = 0;
\t\t\tvar total = 0;

\t  \t\t\$('.addRestock').each(function () {
\t\t\t  \trestock += parseInt(\$(this).val()); 
\t\t\t});\t
\t \t \t\$('.addOption').each(function () {
\t\t\t  \trestock += parseInt(\$(this).val()); 
\t\t\t});
\t
\t\t\t\$('.addTotal').each(function () {
\t\t\t  \ttotal += parseInt(\$(this).val()); 
\t \t\t});\t\t
\t\t\t\$('.addOption').each(function () {
\t\t\t \ttotal += parseInt(\$(this).val()); 
\t  \t\t});\t\t\t
\t\t\t\t\t
\t\t\t\$('#restock_quantity').val(restock);
\t\t\t\$('#quantity').val(total);
\t\t}

\t\tif (document.getElementById('input-costing-method').value == '1') {
\t\t\tif (document.getElementById('form-product').restock_quantity.value != '' && document.getElementById('form-product').restock_quantity.value != 0) {
\t\t\t\tvar cost = parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)
\t\t\t\tvar restock_quantity_temp = parseFloat(document.getElementById('form-product').restock_quantity_temp.value) + ((parseFloat(document.getElementById('form-product').quantity_temp.value) - parseFloat(document.getElementById('form-product').restock_quantity_temp.value)) - parseFloat(document.getElementById('form-product').remove_temp.value))
\t\t\t\tvar oldcost = parseFloat(document.getElementById('form-product').oldcost_temp.value)
\t\t\t\tvar stockquantity = parseFloat(document.getElementById('form-product').quantity_temp.value) - (parseFloat(document.getElementById('form-product').restock_quantity_temp.value) + ((parseFloat(document.getElementById('form-product').quantity_temp.value) - parseFloat(document.getElementById('form-product').restock_quantity_temp.value)) - parseFloat(document.getElementById('form-product').remove_temp.value)))
\t\t\t\tvar quantity_temp = parseFloat(document.getElementById('form-product').quantity_temp.value)
\t\t\t\tvar totalcost_opt = (((oldcost*stockquantity)+(restock_quantity_temp*cost))/quantity_temp).toFixed(4)
\t\t\t\tdocument.getElementById('form-product').restock_cost.value = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost_opt
\t\t\t}
\t\t\tif (document.getElementById('form-product').restock_quantity.value == '' || document.getElementById('form-product').restock_quantity.value == 0) {
\t\t\t\tvar totalcost_opt = (parseFloat(document.getElementById('form-product').oldcost_temp.value)).toFixed(4)
\t\t\t\tdocument.getElementById('form-product').restock_cost.value = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost_opt
\t\t\t}
\t\t\tif (document.getElementById('form-product').price.value > 0 && (document.getElementById('form-product').cost.value > 0 || document.getElementById('form-product').cost_amount.value > 0)) {
\t\t\t\tvar profit = (parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)).toFixed(4)
\t\t\t\tvar profit_margin = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').price.value))*100).toFixed(2)+'%'
\t\t\t\tvar profit_markup = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').cost.value))*100).toFixed(2)+'%'
\t\t\t} else {
\t\t\t\tvar profit = '0'
\t\t\t\tvar profit_margin = '0%'
\t\t\t\tvar profit_markup = '0%'
\t\t\t}
\t\t\tdocument.getElementById('form-product').profit.value = profit
\t\t\tdocument.getElementById('form-product').profit_margin.value = profit_margin
\t\t\tdocument.getElementById('form-product').profit_markup.value = profit_markup\t\t\t\t
\t\t} else if (document.getElementById('input-costing-method').value == '0') {
\t\t\tif (document.getElementById('form-product').restock_quantity.value != '' && document.getElementById('form-product').restock_quantity.value != 0) {\t\t\t\t
\t\t\t\tvar totalcost = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost
\t\t\t}\t\t\t\t\t
\t\t\tif (document.getElementById('form-product').restock_quantity.value == '' || document.getElementById('form-product').restock_quantity.value == 0) {\t\t\t\t
\t\t\t\tvar totalcost = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost
\t\t\t}
\t\t\tif (document.getElementById('form-product').price.value > 0 && (document.getElementById('form-product').cost.value > 0 || document.getElementById('form-product').cost_amount.value > 0)) {
\t\t\t\tvar profit = (parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)).toFixed(4)
\t\t\t\tvar profit_margin = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').price.value))*100).toFixed(2)+'%'
\t\t\t\tvar profit_markup = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').cost.value))*100).toFixed(2)+'%'
\t\t\t} else {
\t\t\t\tvar profit = '0'
\t\t\t\tvar profit_margin = '0%'
\t\t\t\tvar profit_markup = '0%'
\t\t\t}
\t\t\tdocument.getElementById('form-product').profit.value = profit
\t\t\tdocument.getElementById('form-product').profit_margin.value = profit_margin
\t\t\tdocument.getElementById('form-product').profit_markup.value = profit_markup\t\t\t
\t\t}\t
\t\t\t\t
\t} else {
\t\t\$(\"#restock_quantity\").removeAttr('readonly');
\t\t\$(\"#restock_quantity\").css('background-color', '');\t
\t\t
\t\tvar restock = 0;
\t\tvar quantity = parseFloat(document.getElementById('form-product').stockquantity_temp.value)
\t\tdocument.getElementById('form-product').restock_quantity.value = restock\t
\t\tdocument.getElementById('form-product').quantity.value = quantity\t
\t\t
\t\tif (document.getElementById('input-costing-method').value == '1') {
\t\t\tif (document.getElementById('form-product').restock_quantity.value != '' && document.getElementById('form-product').restock_quantity.value != 0) {
\t\t\t\tvar cost = parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)
\t\t\t\tvar restock_quantity_temp = parseFloat(document.getElementById('form-product').restock_quantity_temp.value) + ((parseFloat(document.getElementById('form-product').quantity_temp.value) - parseFloat(document.getElementById('form-product').restock_quantity_temp.value)) - parseFloat(document.getElementById('form-product').remove_temp.value))
\t\t\t\tvar oldcost = parseFloat(document.getElementById('form-product').oldcost_temp.value)
\t\t\t\tvar stockquantity = parseFloat(document.getElementById('form-product').quantity_temp.value) - (parseFloat(document.getElementById('form-product').restock_quantity_temp.value) + ((parseFloat(document.getElementById('form-product').quantity_temp.value) - parseFloat(document.getElementById('form-product').restock_quantity_temp.value)) - parseFloat(document.getElementById('form-product').remove_temp.value)))
\t\t\t\tvar quantity_temp = parseFloat(document.getElementById('form-product').quantity_temp.value)
\t\t\t\tvar totalcost_opt = (((oldcost*stockquantity)+(restock_quantity_temp*cost))/quantity_temp).toFixed(4)
\t\t\t\tdocument.getElementById('form-product').restock_cost.value = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost_opt
\t\t\t}
\t\t\tif (document.getElementById('form-product').restock_quantity.value == '' || document.getElementById('form-product').restock_quantity.value == 0) {
\t\t\t\tvar totalcost_opt = (parseFloat(document.getElementById('form-product').oldcost_temp.value)).toFixed(4)
\t\t\t\tdocument.getElementById('form-product').restock_cost.value = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost_opt
\t\t\t}
\t\t\tif (document.getElementById('form-product').price.value > 0 && (document.getElementById('form-product').cost.value > 0 || document.getElementById('form-product').cost_amount.value > 0)) {
\t\t\t\tvar profit = (parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)).toFixed(4)
\t\t\t\tvar profit_margin = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').price.value))*100).toFixed(2)+'%'
\t\t\t\tvar profit_markup = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').cost.value))*100).toFixed(2)+'%'
\t\t\t} else {
\t\t\t\tvar profit = '0'
\t\t\t\tvar profit_margin = '0%'
\t\t\t\tvar profit_markup = '0%'
\t\t\t}
\t\t\tdocument.getElementById('form-product').profit.value = profit
\t\t\tdocument.getElementById('form-product').profit_margin.value = profit_margin
\t\t\tdocument.getElementById('form-product').profit_markup.value = profit_markup\t\t\t\t
\t\t} else if (document.getElementById('input-costing-method').value == '0') {
\t\t\tif (document.getElementById('form-product').restock_quantity.value != '' && document.getElementById('form-product').restock_quantity.value != 0) {\t\t\t\t
\t\t\t\tvar totalcost = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost
\t\t\t}\t\t\t\t\t
\t\t\tif (document.getElementById('form-product').restock_quantity.value == '' || document.getElementById('form-product').restock_quantity.value == 0) {\t\t\t\t
\t\t\t\tvar totalcost = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost
\t\t\t}
\t\t\tif (document.getElementById('form-product').price.value > 0 && (document.getElementById('form-product').cost.value > 0 || document.getElementById('form-product').cost_amount.value > 0)) {
\t\t\t\tvar profit = (parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)).toFixed(4)
\t\t\t\tvar profit_margin = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').price.value))*100).toFixed(2)+'%'
\t\t\t\tvar profit_markup = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').cost.value))*100).toFixed(2)+'%'
\t\t\t} else {
\t\t\t\tvar profit = '0'
\t\t\t\tvar profit_margin = '0%'
\t\t\t\tvar profit_markup = '0%'
\t\t\t}
\t\t\tdocument.getElementById('form-product').profit.value = profit
\t\t\tdocument.getElementById('form-product').profit_margin.value = profit_margin
\t\t\tdocument.getElementById('form-product').profit_markup.value = profit_markup\t\t\t\t
\t\t}\t\t\t
    }
\t});\t\t     
});

\$(function () {
    \$('.button-checkbox').each(function () {

        // Settings
        var \$widget = \$(this),
            \$button = \$widget.find('button'),
            \$checkbox = \$widget.find('input:checkbox'),
            color = \$button.data('color'),
            settings = {
                on: {
                    icon: 'fa fa-check'
                },
                off: {
                    icon: ''
                }
            };

        // Event Handlers
        \$button.on('click', function () {
            \$checkbox.prop('checked', !\$checkbox.is(':checked'));
            \$checkbox.triggerHandler('change');
            updateDisplay();
        });
        \$checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = \$checkbox.is(':checked');

            // Set the button's state
            \$button.data('state', (isChecked) ? \"on\" : \"off\");

            // Set the button's icon
            \$button.find('.fa')
                .removeClass()
                .addClass('fa ' + settings[\$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                \$button
                    .removeClass('btn-default')
                    .addClass('btn btn-' + color + ' active');
            }
            else {
                \$button
                    .removeClass('btn btn-' + color + ' active')
                    .addClass('btn btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if (\$button.find('.fa').length == 0) {
                \$button.prepend('<i class=\"fa ' + settings[\$button.data('state')].icon + '\"></i> ');
            }
        }
        init();
    });
});

function addRestock() {
\tvar restock = 0;
\tvar total = 0;

\t\$('.addRestock').each(function () {
\t  \trestock += parseInt(\$(this).val()); 
\t});
\t\$('.addOption').each(function () {
\t  \trestock += parseInt(\$(this).val()); 
\t});
\t\t\t
\t\$('.addTotal').each(function () {
\t \ttotal += parseInt(\$(this).val()); 
  \t});\t
\t\$('.addOption').each(function () {
\t \ttotal += parseInt(\$(this).val()); 
  \t});\t
\t\t
\t\$('#restock_quantity_temp').val(restock);
\t\$('#quantity_temp').val(total);\t\t\t
}

function addOption() {
\tvar restock = 0;
\tvar total = 0;

  \t\$('.addRestock').each(function () {
\t  \trestock += parseInt(\$(this).val()); 
\t});\t
  \t\$('.addOption').each(function () {
\t  \trestock += parseInt(\$(this).val()); 
\t});
\t\t\t
  \t\$('.addTotal').each(function () {
\t \ttotal += parseInt(\$(this).val()); 
\t});\t\t
  \t\$('.addOption').each(function () {
\t \ttotal += parseInt(\$(this).val()); 
\t});\t\t\t\t

\t\$('#restock_quantity_temp').val(restock);
\t\$('#quantity_temp').val(total);
}\t

function optRemove() {
\tvar total = 0;
\t\t\t
  \t\$('.addTotal').each(function () {
\t \ttotal += parseInt(\$(this).val()); 
\t});\t\t
  \t\$('.addOption').each(function () {
\t \ttotal += parseInt(\$(this).val()); 
\t});\t\t\t\t

\t\$('#quantity_temp').val(total);\t\t\t
}\t\t

function optRemoveGroup() {
\tvar total = 0;
\t\t\t
  \t\$('.addTotal').each(function () {
\t \ttotal += parseInt(\$(this).val()); 
\t});\t\t
  \t\$('.addOption').each(function () {
\t \ttotal += parseInt(\$(this).val()); 
\t});\t\t\t\t

\t\$('#quantity_temp').val(total);\t\t
}\t

\$(document).on('mouseup', '#optInitialize', function(event) {
\tvar total = 0;
\t\t\t
\t\$('.addTotal').each(function () {
\t \ttotal += parseInt(\$(this).val()); 
  \t});\t\t
\t\$('.addOption').each(function () {
\t \ttotal += parseInt(\$(this).val()); 
  \t});\t\t\t\t

\t\$('#quantity_temp').val(total);
\t\$('#remove_temp').val(total);
\t\$(this).off(event);
});
\t 
function totalcost() {
\tif (document.getElementById('input-costing-method').value == '0') {
\t\tvar totalcost = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\tdocument.getElementById('form-product').cost.value = totalcost
\t}\t
\t
\tif (document.getElementById('input-costing-method').value == '1') {
\t\tif (\$('#qty_by_option_checkbox').is(':checked')) {
\t\t\tif (document.getElementById('form-product').restock_quantity.value != '' && document.getElementById('form-product').restock_quantity.value != 0) {
\t\t\t\tvar cost = parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)
\t\t\t\tvar restock_quantity_temp = parseFloat(document.getElementById('form-product').restock_quantity_temp.value) + ((parseFloat(document.getElementById('form-product').quantity_temp.value) - parseFloat(document.getElementById('form-product').restock_quantity_temp.value)) - parseFloat(document.getElementById('form-product').remove_temp.value))
\t\t\t\tvar oldcost = parseFloat(document.getElementById('form-product').oldcost_temp.value)
\t\t\t\tvar stockquantity = parseFloat(document.getElementById('form-product').quantity_temp.value) - (parseFloat(document.getElementById('form-product').restock_quantity_temp.value) + ((parseFloat(document.getElementById('form-product').quantity_temp.value) - parseFloat(document.getElementById('form-product').restock_quantity_temp.value)) - parseFloat(document.getElementById('form-product').remove_temp.value)))
\t\t\t\tvar quantity_temp = parseFloat(document.getElementById('form-product').quantity_temp.value)
\t\t\t\tvar totalcost_opt = (((oldcost*stockquantity)+(restock_quantity_temp*cost))/quantity_temp).toFixed(4)
\t\t\t\tdocument.getElementById('form-product').restock_cost.value = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost_opt
\t\t\t}
\t\t} else {
\t\t\tif (document.getElementById('form-product').restock_quantity.value != '' && document.getElementById('form-product').restock_quantity.value != 0) {\t\t
\t\t\t\tvar cost = parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)
\t\t\t\tvar restock_quantity = parseFloat(document.getElementById('form-product').restock_quantity.value)
\t\t\t\tvar oldcost = parseFloat(document.getElementById('form-product').oldcost_temp.value)
\t\t\t\tvar stockquantity = parseFloat(document.getElementById('form-product').stockquantity_temp.value)
\t\t\t\tvar quantity = parseFloat(document.getElementById('form-product').quantity.value)
\t\t\t\tvar totalcost = (((oldcost*stockquantity)+(restock_quantity*cost))/quantity).toFixed(4)
\t\t\t\tdocument.getElementById('form-product').restock_cost.value = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\t\tdocument.getElementById('form-product').cost.value = totalcost
\t\t\t}
\t\t}\t\t\t\t\t
\t\tif (document.getElementById('form-product').restock_quantity.value == '' || document.getElementById('form-product').restock_quantity.value == 0) {\t\t\t\t
\t\t\tvar totalcost = (parseFloat(document.getElementById('form-product').oldcost_temp.value)).toFixed(4)
\t\t\tdocument.getElementById('form-product').restock_cost.value = (parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)).toFixed(4)
\t\t\tdocument.getElementById('form-product').cost.value = totalcost
\t\t}
\t}
\tif (document.getElementById('form-product').price.value > 0 && (document.getElementById('form-product').cost.value > 0 || document.getElementById('form-product').cost_amount.value > 0)) {
\t\tvar profit = (parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)).toFixed(4)
\t\tvar profit_margin = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').price.value))*100).toFixed(2)+'%'
\t\tvar profit_markup = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').cost.value))*100).toFixed(2)+'%'
\t} else {
\t\tvar profit = '0'
\t\tvar profit_margin = '0%'
\t\tvar profit_markup = '0%'
\t}
\tdocument.getElementById('form-product').profit.value = profit
\tdocument.getElementById('form-product').profit_margin.value = profit_margin
\tdocument.getElementById('form-product').profit_markup.value = profit_markup\t\t
}

function stockquantity() {
\tif (document.getElementById('form-product').restock_quantity.value != '') {
\t\t\tvar stockquantity = parseFloat(document.getElementById('form-product').restock_quantity.value) + parseFloat(document.getElementById('form-product').stockquantity_temp.value)
\t\t\tdocument.getElementById('form-product').quantity.value = stockquantity\t
\t}
\tif (document.getElementById('form-product').price.value > 0 && (document.getElementById('form-product').cost.value > 0 || document.getElementById('form-product').cost_amount.value > 0)) {
\t\tvar profit = (parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)).toFixed(4)
\t\tvar profit_margin = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').price.value))*100).toFixed(2)+'%'
\t\tvar profit_markup = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').cost.value))*100).toFixed(2)+'%'
\t} else {
\t\tvar profit = '0'
\t\tvar profit_margin = '0%'
\t\tvar profit_markup = '0%'
\t}
\tdocument.getElementById('form-product').profit.value = profit
\tdocument.getElementById('form-product').profit_margin.value = profit_margin
\tdocument.getElementById('form-product').profit_markup.value = profit_markup\t\t
}

function totalcost_opt() {
  if (\$('#qty_by_option_checkbox').is(':checked')) {
\tif (document.getElementById('form-product').restock_quantity.value != '' && document.getElementById('form-product').restock_quantity.value != 0) {
\t\tif (document.getElementById('input-costing-method').value == '1') {
\t\t\tvar cost = parseFloat(document.getElementById('form-product').cost_amount.value) + parseFloat((document.getElementById('form-product').cost_percentage.value / 100)*document.getElementById('form-product').price.value) + parseFloat(document.getElementById('form-product').cost_additional.value)
\t\t\tvar restock_quantity_temp = parseFloat(document.getElementById('form-product').restock_quantity_temp.value) + ((parseFloat(document.getElementById('form-product').quantity_temp.value) - parseFloat(document.getElementById('form-product').restock_quantity_temp.value)) - parseFloat(document.getElementById('form-product').remove_temp.value))
\t\t\tvar oldcost = parseFloat(document.getElementById('form-product').oldcost_temp.value)
\t\t\tvar stockquantity = parseFloat(document.getElementById('form-product').quantity_temp.value) - (parseFloat(document.getElementById('form-product').restock_quantity_temp.value) + ((parseFloat(document.getElementById('form-product').quantity_temp.value) - parseFloat(document.getElementById('form-product').restock_quantity_temp.value)) - parseFloat(document.getElementById('form-product').remove_temp.value)))
\t\t\tvar quantity_temp = parseFloat(document.getElementById('form-product').quantity_temp.value)
\t\t\tvar totalcost_opt = (((oldcost*stockquantity)+(restock_quantity_temp*cost))/quantity_temp).toFixed(4)
\t\t\tdocument.getElementById('form-product').cost.value = totalcost_opt
\t\t}
\t}
\tif (document.getElementById('form-product').restock_quantity.value == '' || document.getElementById('form-product').restock_quantity.value == 0) {
\t\tif (document.getElementById('input-costing-method').value == '1') {\t\t\t
\t\t\tvar totalcost_opt = (parseFloat(document.getElementById('form-product').oldcost_temp.value)).toFixed(4)
\t\t\tdocument.getElementById('form-product').cost.value = totalcost_opt
\t\t}
\t}\t\t
  }
\tif (document.getElementById('form-product').price.value > 0 && (document.getElementById('form-product').cost.value > 0 || document.getElementById('form-product').cost_amount.value > 0)) {
\t\tvar profit = (parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)).toFixed(4)
\t\tvar profit_margin = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').price.value))*100).toFixed(2)+'%'
\t\tvar profit_markup = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').cost.value))*100).toFixed(2)+'%'
\t} else {
\t\tvar profit = '0'
\t\tvar profit_margin = '0%'
\t\tvar profit_markup = '0%'
\t}
\tdocument.getElementById('form-product').profit.value = profit
\tdocument.getElementById('form-product').profit_margin.value = profit_margin
\tdocument.getElementById('form-product').profit_markup.value = profit_markup\t
}

function restockquantity_opt() {
  if (\$('#qty_by_option_checkbox').is(':checked')) {
\tif (document.getElementById('form-product').restock_quantity.value != '') {
\t\tvar restockquantity_opt = parseFloat(document.getElementById('form-product').restock_quantity_temp.value) + ((parseFloat(document.getElementById('form-product').quantity_temp.value) - parseFloat(document.getElementById('form-product').restock_quantity_temp.value)) - parseFloat(document.getElementById('form-product').remove_temp.value))
\t\tdocument.getElementById('form-product').restock_quantity.value = restockquantity_opt
\t}
  }
\tif (document.getElementById('form-product').price.value > 0 && (document.getElementById('form-product').cost.value > 0 || document.getElementById('form-product').cost_amount.value > 0)) {
\t\tvar profit = (parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)).toFixed(4)
\t\tvar profit_margin = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').price.value))*100).toFixed(2)+'%'
\t\tvar profit_markup = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').cost.value))*100).toFixed(2)+'%'
\t} else {
\t\tvar profit = '0'
\t\tvar profit_margin = '0%'
\t\tvar profit_markup = '0%'
\t}
\tdocument.getElementById('form-product').profit.value = profit
\tdocument.getElementById('form-product').profit_margin.value = profit_margin
\tdocument.getElementById('form-product').profit_markup.value = profit_markup\t
}

function quantity_opt() {
  if (\$('#qty_by_option_checkbox').is(':checked')) {
\tvar quantity_opt = parseFloat(document.getElementById('form-product').quantity_temp.value)
\tdocument.getElementById('form-product').quantity.value = quantity_opt
  }
\tif (document.getElementById('form-product').price.value > 0 && (document.getElementById('form-product').cost.value > 0 || document.getElementById('form-product').cost_amount.value > 0)) {
\t\tvar profit = (parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)).toFixed(4)
\t\tvar profit_margin = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').price.value))*100).toFixed(2)+'%'
\t\tvar profit_markup = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').cost.value))*100).toFixed(2)+'%'
\t} else {
\t\tvar profit = '0'
\t\tvar profit_margin = '0%'
\t\tvar profit_markup = '0%'
\t}
\tdocument.getElementById('form-product').profit.value = profit
\tdocument.getElementById('form-product').profit_margin.value = profit_margin
\tdocument.getElementById('form-product').profit_markup.value = profit_markup\t\t
}

function restockquantity_ini() {
\tif (document.getElementById('form-product').restock_quantity.value != '') {
\t\tvar restockquantity_opt = parseFloat(document.getElementById('form-product').restock_quantity_temp.value) + ((parseFloat(document.getElementById('form-product').quantity_temp.value) - parseFloat(document.getElementById('form-product').restock_quantity_temp.value)) - parseFloat(document.getElementById('form-product').remove_temp.value))
\t\tdocument.getElementById('form-product').restock_quantity.value = restockquantity_opt
\t}
\tif (document.getElementById('form-product').price.value > 0 && (document.getElementById('form-product').cost.value > 0 || document.getElementById('form-product').cost_amount.value > 0)) {
\t\tvar profit = (parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)).toFixed(4)
\t\tvar profit_margin = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').price.value))*100).toFixed(2)+'%'
\t\tvar profit_markup = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').cost.value))*100).toFixed(2)+'%'
\t} else {
\t\tvar profit = '0'
\t\tvar profit_margin = '0%'
\t\tvar profit_markup = '0%'
\t}
\tdocument.getElementById('form-product').profit.value = profit
\tdocument.getElementById('form-product').profit_margin.value = profit_margin
\tdocument.getElementById('form-product').profit_markup.value = profit_markup\t
}

function quantity_ini() {
\tvar quantity_opt = parseFloat(document.getElementById('form-product').quantity_temp.value)
\tdocument.getElementById('form-product').quantity.value = quantity_opt
\t
\tif (document.getElementById('form-product').price.value > 0 && (document.getElementById('form-product').cost.value > 0 || document.getElementById('form-product').cost_amount.value > 0)) {
\t\tvar profit = (parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)).toFixed(4)
\t\tvar profit_margin = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').price.value))*100).toFixed(2)+'%'
\t\tvar profit_markup = (((parseFloat(document.getElementById('form-product').price.value) - parseFloat(document.getElementById('form-product').cost.value)) / parseFloat(document.getElementById('form-product').cost.value))*100).toFixed(2)+'%'
\t} else {
\t\tvar profit = '0'
\t\tvar profit_margin = '0%'
\t\tvar profit_markup = '0%'
\t}
\tdocument.getElementById('form-product').profit.value = profit
\tdocument.getElementById('form-product').profit_margin.value = profit_margin
\tdocument.getElementById('form-product').profit_markup.value = profit_markup\t
}
</script>            \t\t\t\t
\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-adv-proft-module\"></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t  <div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t  <h3 class=\"panel-title\"><i class=\"fa fa-calculator\"></i> ADV Profit Module</h3>
\t\t\t\t</div>
\t\t\t  <div class=\"panel-body\">
\t\t\t  <!--Supplier-->
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-supplier\">";
            // line 1037
            echo ($context["column_supplier"] ?? null);
            echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t  <select name=\"supplier_id\" id=\"input-supplier\" class=\"form-control\">
\t\t\t\t\t<option value=\"0\">";
            // line 1040
            echo ($context["text_none"] ?? null);
            echo "</option>
\t\t\t\t\t";
            // line 1041
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["suppliers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
                // line 1042
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["supplier"], "supplier_id", [], "any", false, false, false, 1042) == ($context["supplier_id"] ?? null))) {
                    echo " 
\t\t\t\t\t\t<option value=\"";
                    // line 1043
                    echo twig_get_attribute($this->env, $this->source, $context["supplier"], "supplier_id", [], "any", false, false, false, 1043);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 1043);
                    echo "</option>
\t\t\t\t\t  ";
                } else {
                    // line 1045
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["supplier"], "supplier_id", [], "any", false, false, false, 1045);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 1045);
                    echo "</option>
\t\t\t\t\t  ";
                }
                // line 1047
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1048
            echo "\t\t\t\t  </select>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <!--Price-->
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"price\">";
            // line 1053
            echo ($context["entry_price"] ?? null);
            echo "</label>
\t\t\t\t<div id=\"adv\" ";
            // line 1054
            echo ((($context["adv_price_tax"] ?? null)) ? ("class=\"col-sm-4\"") : ("class=\"col-sm-10\""));
            echo " >
\t\t\t\t  <input type=\"text\" onKeyUp=\"totalcost(this.form); if(!this.value) this.value=0; totalcost(this.form);\" name=\"price\" value=\"";
            // line 1055
            echo ($context["price"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" id=\"price\" class=\"form-control\" style=\"border:thin solid #b5e08b;\" />
\t\t\t\t</div>
\t\t\t\t";
            // line 1057
            if (($context["adv_price_tax"] ?? null)) {
                // line 1058
                echo "\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-price\">";
                echo ($context["entry_price_tax"] ?? null);
                echo "</label>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t  <input type=\"text\" onKeyUp=\"totalcost(this.form); if(!this.value) this.value=0; totalcost(this.form);\" name=\"price_tax\" value=\"";
                // line 1060
                echo ($context["price_tax"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_price_tax"] ?? null);
                echo "\" id=\"input-price\" class=\"form-control\" style=\"border:thin solid #b5e08b;\" />
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 1063
            echo "\t\t\t  </div>
              <!--Costing Method-->
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-costing-method\"><span data-toggle=\"tooltip\" title=\"";
            // line 1066
            echo ($context["help_costing_method"] ?? null);
            echo "\">";
            echo ($context["entry_costing_method"] ?? null);
            echo "</span><br />";
            echo ($context["entry_costing_method_doc"] ?? null);
            echo "&nbsp;&nbsp;&nbsp;</label>
                <div class=\"col-sm-10\">
                  <select name=\"costing_method\" id=\"input-costing-method\" class=\"form-control\" style=\"border:thin solid #ed9999;\">
                \t";
            // line 1069
            if (((($context["costing_method"] ?? null) == false) || (($context["costing_method"] ?? null) == "0"))) {
                // line 1070
                echo "            \t\t\t<option value=\"0\" id=\"cost_fixed\" selected=\"selected\">";
                echo ($context["text_cost_fixed"] ?? null);
                echo "</option>
            \t\t";
            } else {
                // line 1072
                echo "            \t\t\t<option value=\"0\" id=\"cost_fixed\">";
                echo ($context["text_cost_fixed"] ?? null);
                echo "</option>
                \t";
            }
            // line 1073
            echo " 
                \t";
            // line 1074
            if ((($context["costing_method"] ?? null) == "1")) {
                // line 1075
                echo "            \t\t\t<option value=\"1\" id=\"cost_average\" selected=\"selected\">";
                echo ($context["text_cost_average"] ?? null);
                echo "</option>
            \t\t";
            } else {
                // line 1077
                echo "            \t\t\t<option value=\"1\" id=\"cost_average\">";
                echo ($context["text_cost_average"] ?? null);
                echo "</option>
                \t";
            }
            // line 1078
            echo " 
                \t";
            // line 1079
            if ((($context["costing_method"] ?? null) == "2")) {
                // line 1080
                echo "            \t\t\t<option value=\"2\" id=\"cost_fifo\" selected=\"selected\" disabled=\"disabled\" style=\"color:#999\">";
                echo ($context["text_cost_fifo"] ?? null);
                echo "</option>
            \t\t";
            } else {
                // line 1082
                echo "            \t\t\t<option value=\"2\" id=\"cost_fifo\" disabled=\"disabled\" style=\"color:#999\">";
                echo ($context["text_cost_fifo"] ?? null);
                echo "</option>
                \t";
            }
            // line 1083
            echo " 
                  </select>
                </div>
              </div>\t\t\t\t\t\t  
              <!--Cost-->
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cost\"><span data-toggle=\"tooltip\" title=\"";
            // line 1089
            echo ($context["help_product_cost"] ?? null);
            echo "\">";
            echo ($context["entry_cost"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\"> 
                  <div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"> 
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t  <td width=\"34%\" style=\"padding-left:5px; padding-right:3px; padding-bottom:5px; padding-top:5px;\"><input onKeyUp=\"totalcost(this.form); if(!this.value) this.value=0; totalcost(this.form);\" type=\"text\" id=\"cost_amount\" name=\"cost_amount\" value=\"";
            // line 1095
            echo ($context["cost_amount"] ?? null);
            echo "\" class=\"form-control\" style=\"border:thin solid #ed9999; width:100%;\" /></td>
\t\t\t\t\t\t  <td align=\"left\" style=\"padding-left:3px; padding-bottom:5px; padding-top:5px;\">";
            // line 1096
            echo ($context["text_cost_or"] ?? null);
            echo "</td>
 \t\t\t\t\t\t  <td width=\"31%\" style=\"padding-left:5px; padding-bottom:5px; padding-top:5px;\"><input onKeyUp=\"totalcost(this.form); if(!this.value) this.value=0; totalcost(this.form);\" type=\"text\" id=\"cost_percentage\" name=\"cost_percentage\" maxlength=\"5\" value=\"";
            // line 1097
            echo ($context["cost_percentage"] ?? null);
            echo "\" class=\"form-control\" style=\"border:thin solid #ed9999; width:100%;\" /></td>
\t\t\t\t\t\t  <td align=\"left\" style=\"padding-right:3px; padding-bottom:5px; padding-top:5px;\"> %</td>
\t\t\t\t\t\t  <td align=\"center\" style=\"padding-left:3px; padding-right:5px; padding-bottom:5px; padding-top:5px;\">+</td>
\t\t\t\t\t\t  <td width=\"34%\" style=\"padding-right:5px; padding-bottom:5px; padding-top:5px;\"><input onKeyUp=\"totalcost(this.form); if(!this.value) this.value=0; totalcost(this.form);\" type=\"text\" id=\"cost_additional\" name=\"cost_additional\" value=\"";
            // line 1100
            echo ($context["cost_additional"] ?? null);
            echo "\" class=\"form-control\" style=\"border:thin solid #ed9999; width:100%;\" /></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t  <td width=\"34%\" align=\"center\" valign=\"top\">";
            // line 1103
            echo ($context["text_cost_amount"] ?? null);
            echo "</td>
\t\t\t\t\t\t  <td>&nbsp;</td>
\t\t\t\t\t\t  <td width=\"31%\" align=\"center\" valign=\"top\">";
            // line 1105
            echo ($context["text_cost_percentage"] ?? null);
            echo "</td>
\t\t\t\t\t\t  <td>&nbsp;</td>
\t\t\t\t\t\t  <td>&nbsp;</td>
\t\t\t\t\t\t  <td width=\"34%\" align=\"center\" valign=\"top\">";
            // line 1108
            echo ($context["text_cost_additional"] ?? null);
            echo "</td>
\t\t\t\t\t\t</tr>\t
\t\t\t\t\t  </table>
                    </div>
                    <div class=\"col-sm-1\">
\t\t\t\t\t  <table width=\"100%\" cellspacing=\"0\" cellpadding=\"3\"> 
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t  <td align=\"center\" style=\"padding-bottom:5px; padding-top:13px; font-size:20px;\">=</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t  <td>&nbsp;</td>
\t\t\t\t\t\t<tr>  
\t\t\t\t\t  </table>
                    </div>\t
                    <div class=\"col-sm-5\">
\t\t\t\t\t  <table width=\"100%\" cellspacing=\"0\" cellpadding=\"3\"> 
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t  <td class=\"show_restock_cost\" ";
            // line 1125
            echo (((($context["costing_method"] ?? null) == "1")) ? ("style=\"padding-bottom:5px; padding-top:5px;\"") : ("style=\"padding-bottom:5px; padding-top:5px; display:none;\""));
            echo " ><input type=\"text\" id=\"restock_cost\" name=\"restock_cost\" value=\"";
            echo ($context["restock_cost"] ?? null);
            echo "\" class=\"form-control\" style=\"background-color:#EEE; border:thin solid #c0c0c0; width:100%; cursor:not-allowed;\" readonly /></td>
\t\t\t\t\t\t  <td class=\"show_restock_cost\" align=\"center\" nowrap=\"nowrap\" ";
            // line 1126
            echo (((($context["costing_method"] ?? null) == "1")) ? ("") : ("style=\"display:none;\""));
            echo " ><span class=\"show_restock_cost\" ";
            echo (((($context["costing_method"] ?? null) == "1")) ? ("style=\"padding-right:5px; padding-left:5px; padding-bottom:5px; padding-top:5px; font-size:16px;\"") : ("style=\"padding-right:5px; padding-left:5px; padding-bottom:5px; padding-top:5px; font-size:16px; display:none;\""));
            echo " ><></span></td>
\t\t\t\t\t\t  <td nowrap=\"nowrap\" style=\"padding-right:5px; padding-bottom:5px; padding-top:5px;\"><input type=\"hidden\" id=\"oldcost_temp\" name=\"oldcost_temp\" value=\"";
            // line 1127
            echo ($context["cost"] ?? null);
            echo "\" /><input type=\"text\" id=\"cost\" name=\"cost\" value=\"";
            echo ($context["cost"] ?? null);
            echo "\" class=\"form-control\" style=\"background-color:#f7e9e3; border:thin solid #ed9999; width:100%; cursor:not-allowed;\" readonly /></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t  <td class=\"show_restock_cost\" align=\"center\" valign=\"top\" nowrap=\"nowrap\" ";
            // line 1130
            echo (((($context["costing_method"] ?? null) == "1")) ? ("style=\"padding-bottom:3px;\"") : ("style=\"padding-bottom:3px; display:none;\""));
            echo " ><span style=\"color:#a0a0a0;\">";
            echo ($context["text_restock_cost"] ?? null);
            echo "</span></td>
\t\t\t\t\t\t  <td class=\"show_restock_cost\" ";
            // line 1131
            echo (((($context["costing_method"] ?? null) == "1")) ? ("") : ("style=\"display:none;\""));
            echo " >&nbsp;</td>
\t\t\t\t\t\t  <td align=\"center\" valign=\"top\" nowrap=\"nowrap\" style=\"padding-bottom:3px;\">";
            // line 1132
            if ((($context["costing_method"] ?? null) == "1")) {
                echo "<span id=\"cont\" style=\"color:#ed9999;\">";
                echo ($context["text_cost_average_set"] ?? null);
                echo "</span>";
            } else {
                echo "<span id=\"cont\" style=\"color:#ed9999;\">";
                echo ($context["text_cost"] ?? null);
                echo "</span>";
            }
            echo "</td>
\t\t\t\t\t\t<tr>  
\t\t\t\t\t  </table>
                    </div>
                  </div>
                </div>
              </div> 
              <!--Qantity-->
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
            // line 1141
            echo ($context["entry_quantity"] ?? null);
            echo "</label>
                <div class=\"col-sm-10\"><input type=\"hidden\" id=\"restock_quantity_temp\" name=\"restock_quantity_temp\" value=\"";
            // line 1142
            echo ($context["restock_quantity_temp"] ?? null);
            echo "\" /><input type=\"hidden\" id=\"quantity_temp\" name=\"quantity_temp\" value=\"";
            echo ($context["quantity_temp"] ?? null);
            echo "\" /><input type=\"hidden\" id=\"remove_temp\" name=\"remove_temp\" value=\"";
            echo ($context["remove_temp"] ?? null);
            echo "\" />
                  <div class=\"row\">
                    <div class=\"col-lg-4\">
\t\t\t\t\t\t<input type=\"text\" id=\"restock_quantity\" onKeyUp=\"stockquantity(this.form); if(!this.value) this.value=0; stockquantity(this.form); totalcost(this.form);\" name=\"restock_quantity\" value=\"";
            // line 1145
            echo ($context["restock_quantity"] ?? null);
            echo "\" class=\"form-control\" style=\"border:thin solid #ebd685;\" /><div align=\"center\" style=\"padding:3px;\">";
            echo ($context["column_hrestock_quantity"] ?? null);
            echo "</div>
                    </div>
                    <div class=\"col-lg-4\">
\t\t\t\t\t\t<input type=\"hidden\" id=\"stockquantity_temp\" name=\"stockquantity_temp\" value=\"";
            // line 1148
            echo ($context["quantity"] ?? null);
            echo "\" />
\t\t\t\t\t\t<input type=\"text\" id=\"quantity\" name=\"quantity\" value=\"";
            // line 1149
            echo ($context["quantity"] ?? null);
            echo "\" class=\"form-control\" style=\"background-color:#f9f3db; border:thin solid #ebd685; cursor:not-allowed;\" readonly /><div align=\"center\" style=\"padding:3px;\"><span style=\"color:#decc88;\">";
            echo ($context["text_totalstock"] ?? null);
            echo "</span></div>
                    </div>
                    <div class=\"col-lg-4\">
    \t\t\t\t\t<span class=\"button-checkbox\">
        \t\t\t\t<button type=\"button\" onclick=\"restockquantity_ini(this.form); quantity_ini(this.form);\" data-color=\"primary\" class=\"form-control\" style=\"height:auto;\">";
            // line 1153
            echo ($context["text_qty_by_option"] ?? null);
            echo "</button>
        \t\t\t\t<input type=\"checkbox\" id=\"qty_by_option_checkbox\" class=\"hidden\" /><div align=\"center\" style=\"padding:3px;\"><span id=\"qupdatemsg\" style=\"color:#ed9999;\"></span></div>
    \t\t\t\t\t</span>
                    </div>\t\t\t\t\t
                  </div>
                </div>
              </div>  
              <!--Profit-->
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-profit\"><span data-toggle=\"tooltip\" title=\"";
            // line 1162
            echo ($context["help_product_profit"] ?? null);
            echo "\">";
            echo ($context["entry_profit"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">\t\t\t\t
                  \t  <input type=\"text\" id=\"profit\" value=\"0\" class=\"form-control\" style=\"background-color:#dfe7ee; border:thin solid #739cc3; cursor:not-allowed;\" readonly /><div align=\"center\" style=\"padding:3px;\"><span style=\"color:#739cc3;\">";
            // line 1166
            echo ($context["column_profit"] ?? null);
            echo "</span></div>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" id=\"profit_margin\" value=\"0\" class=\"form-control\" style=\"background-color:#dfe7ee; border:thin solid #739cc3; cursor:not-allowed;\" readonly /><div align=\"center\" style=\"padding:3px;\"><span style=\"color:#739cc3;\">";
            // line 1169
            echo ($context["entry_gmargin"] ?? null);
            echo "</span></div>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" id=\"profit_markup\" value=\"0\" class=\"form-control\" style=\"background-color:#dfe7ee; border:thin solid #739cc3; cursor:not-allowed;\" readonly /><div align=\"center\" style=\"padding:3px;\"><span style=\"color:#739cc3;\">";
            // line 1172
            echo ($context["entry_gmarkup"] ?? null);
            echo "</span></div>
                    </div>\t
                  </div>
                </div>
              </div>\t
\t\t\t  </div>
\t\t\t  </div>
\t\t\t  </div>
\t\t\t</div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
            // line 1182
            echo ($context["entry_tax_class"] ?? null);
            echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                    <option value=\"0\">";
            // line 1185
            echo ($context["text_none"] ?? null);
            echo "</option>
                    ";
            // line 1186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
                // line 1187
                echo "\t\t\t\t\t";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 1187), ($context["tax_class_id"] ?? null))) {
                    echo " 
                    <option value=\"";
                    // line 1188
                    echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 1188);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 1188);
                    echo "</option>
                    ";
                } else {
                    // line 1190
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 1190);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 1190);
                    echo "</option>
                    ";
                }
                // line 1192
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1193
            echo "                  </select>
                </div>
              </div> 
";
        } else {
            // line 1197
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
            // line 1198
            echo ($context["entry_price"] ?? null);
            echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"price\" value=\"";
            // line 1200
            echo ($context["price"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" id=\"input-price\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
            // line 1204
            echo ($context["entry_tax_class"] ?? null);
            echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                    <option value=\"0\">";
            // line 1207
            echo ($context["text_none"] ?? null);
            echo "</option>
                    

                    ";
            // line 1210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
                // line 1211
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 1211) == ($context["tax_class_id"] ?? null))) {
                    // line 1212
                    echo "
                    
                    <option value=\"";
                    // line 1214
                    echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 1214);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 1214);
                    echo "</option>
                    

                    ";
                } else {
                    // line 1218
                    echo "
                    
                    <option value=\"";
                    // line 1220
                    echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 1220);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 1220);
                    echo "</option>
                    

                    ";
                }
                // line 1224
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1225
            echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
            // line 1231
            echo ($context["entry_quantity"] ?? null);
            echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
            // line 1233
            echo ($context["quantity"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" id=\"input-quantity\" class=\"form-control\" />
\t\t  \t\t  <input type=\"hidden\" name=\"costing_method\" value=\"";
            // line 1234
            echo ($context["costing_method"] ?? null);
            echo "\" />
\t\t  \t\t  <input type=\"hidden\" name=\"cost\" value=\"";
            // line 1235
            echo ($context["cost"] ?? null);
            echo "\" />
\t\t  \t\t  <input type=\"hidden\" name=\"restock_cost\" value=\"";
            // line 1236
            echo ($context["restock_cost"] ?? null);
            echo "\" />
\t\t  \t\t  <input type=\"hidden\" name=\"cost_amount\" value=\"";
            // line 1237
            echo ($context["cost_amount"] ?? null);
            echo "\" />
\t\t  \t\t  <input type=\"hidden\" name=\"cost_percentage\" value=\"";
            // line 1238
            echo ($context["cost_percentage"] ?? null);
            echo "\" />
\t\t  \t\t  <input type=\"hidden\" name=\"cost_additional\" value=\"";
            // line 1239
            echo ($context["cost_additional"] ?? null);
            echo "\" />
\t\t  \t\t  <input type=\"hidden\" name=\"restock_quantity\" value=\"";
            // line 1240
            echo ($context["restock_quantity"] ?? null);
            echo "\" />
\t\t\t\t  <input type=\"hidden\" name=\"supplier_id\" value=\"0\" />
                  ";
            // line 1242
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["suppliers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
                // line 1243
                echo "\t\t\t\t  ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["supplier"], "supplier_id", [], "any", false, false, false, 1243), ($context["supplier_id"] ?? null))) {
                    echo " 
\t\t\t\t  <input type=\"hidden\" name=\"supplier_id\" value=\"";
                    // line 1244
                    echo twig_get_attribute($this->env, $this->source, $context["supplier"], "supplier_id", [], "any", false, false, false, 1244);
                    echo "\" />
\t\t\t\t  ";
                }
                // line 1246
                echo "\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t\t\t\t  
          \t\t</div>
\t\t  \t  </div>\t\t  
";
        }
        // line 1249
        echo "\t
\t\t\t
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"";
        // line 1252
        echo ($context["help_minimum"] ?? null);
        echo "\">";
        echo ($context["entry_minimum"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"minimum\" value=\"";
        // line 1254
        echo ($context["minimum"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 1258
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">


                    ";
        // line 1263
        if (($context["subtract"] ?? null)) {
            // line 1264
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 1266
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 1267
            echo ($context["text_no"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 1271
            echo "

                      <option value=\"1\">";
            // line 1273
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 1274
            echo ($context["text_no"] ?? null);
            echo "</option>


                    ";
        }
        // line 1278
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 1284
        echo ($context["help_stock_status"] ?? null);
        echo "\">";
        echo ($context["entry_stock_status"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">


                    ";
        // line 1289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 1290
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 1290) == ($context["stock_status_id"] ?? null))) {
                // line 1291
                echo "

                        <option value=\"";
                // line 1293
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 1293);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 1293);
                echo "</option>


                      ";
            } else {
                // line 1297
                echo "

                        <option value=\"";
                // line 1299
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 1299);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 1299);
                echo "</option>


                      ";
            }
            // line 1303
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1304
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 1310
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 1312
        if (($context["shipping"] ?? null)) {
            // line 1313
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 1314
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 1316
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                      ";
            // line 1317
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 1318
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !($context["shipping"] ?? null)) {
            // line 1319
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 1320
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 1322
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                      ";
            // line 1323
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 1324
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 1328
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_available\" value=\"";
        // line 1331
        echo ($context["date_available"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_available"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\"/> <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 1337
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 1341
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 1344
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 1347
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 1353
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">


                    ";
        // line 1358
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 1359
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 1359) == ($context["length_class_id"] ?? null))) {
                // line 1360
                echo "

                        <option value=\"";
                // line 1362
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 1362);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 1362);
                echo "</option>


                      ";
            } else {
                // line 1366
                echo "

                        <option value=\"";
                // line 1368
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 1368);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 1368);
                echo "</option>


                      ";
            }
            // line 1372
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1373
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 1379
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"weight\" value=\"";
        // line 1381
        echo ($context["weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 1385
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">


                    ";
        // line 1390
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 1391
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 1391) == ($context["weight_class_id"] ?? null))) {
                // line 1392
                echo "

                        <option value=\"";
                // line 1394
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 1394);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 1394);
                echo "</option>


                      ";
            } else {
                // line 1398
                echo "

                        <option value=\"";
                // line 1400
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 1400);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 1400);
                echo "</option>


                      ";
            }
            // line 1404
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1405
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 1411
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">


                    ";
        // line 1416
        if (($context["status"] ?? null)) {
            // line 1417
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 1419
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 1420
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 1424
            echo "

                      <option value=\"1\">";
            // line 1426
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 1427
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        }
        // line 1431
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 1437
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 1439
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
        // line 1445
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 1447
        echo ($context["manufacturer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        echo ($context["manufacturer_id"] ?? null);
        echo "\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 1451
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 1453
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\"/>
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1454
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 1455
            echo "                      <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 1455);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 1455);
            echo "
                        <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 1456
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 1456);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1458
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1462
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 1464
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" class=\"form-control\"/>
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1465
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 1466
            echo "                      <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 1466);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 1466);
            echo "
                        <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 1467
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 1467);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1469
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 1473
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1475
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1476
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1477
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1477), ($context["product_store"] ?? null))) {
                // line 1478
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1478);
                echo "\" checked=\"checked\"/>
                            ";
                // line 1479
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1479);
                echo "
                          ";
            } else {
                // line 1481
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1481);
                echo "\"/>
                            ";
                // line 1482
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1482);
                echo "
                          ";
            }
            // line 1483
            echo " </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1485
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 1489
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 1491
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" class=\"form-control\"/>
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1492
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 1493
            echo "                      <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 1493);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 1493);
            echo "
                        <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 1494
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 1494);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1496
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 1500
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 1502
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1503
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 1504
            echo "                      <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 1504);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 1504);
            echo "
                        <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 1505
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 1505);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1507
        echo "</div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-attribute\">
              <div class=\"table-responsive\">
                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1516
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1517
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1523
        $context["attribute_row"] = 0;
        // line 1524
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 1525
            echo "                      <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                        <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 1526
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 1526);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\" style=\"position:relative;\"/> <input type=\"hidden\" name=\"product_attribute[";
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 1526);
            echo "\"/></td>
                        <td class=\"text-left\">";
            // line 1527
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1528
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1528);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1528);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1528);
                echo "\"/></span> <textarea name=\"product_attribute[";
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1528);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" class=\"form-control\">";
                echo (((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 1528)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1528)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 1528)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1528)] ?? null) : null), "text", [], "any", false, false, false, 1528)) : (""));
                echo "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1530
            echo "</td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 1531
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1533
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 1534
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1535
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 1540
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                    ";
        // line 1550
        $context["option_row"] = 0;
        // line 1551
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 1552
            echo "                      
";
            // line 1553
            if (($context["prm_access_permission"] ?? null)) {
                // line 1554
                echo "            <li><a href=\"#tab-option";
                echo ($context["option_row"] ?? null);
                echo "\" data-toggle=\"tab\"><i id=\"remove-tab-option";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
                echo ($context["option_row"] ?? null);
                echo "\\']').parent().remove(); \$('#tab-option";
                echo ($context["option_row"] ?? null);
                echo "').remove(); optRemoveGroup(this.form); restockquantity_opt(this.form); quantity_opt(this.form); totalcost_opt(this.form); \$('#option a:first').tab('show');\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 1554);
                echo "</a></li>
";
            } else {
                // line 1556
                echo "            <li><a href=\"#tab-option";
                echo ($context["option_row"] ?? null);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
                echo ($context["option_row"] ?? null);
                echo "\\']').parent().remove(); \$('#tab-option";
                echo ($context["option_row"] ?? null);
                echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 1556);
                echo "</a></li>
";
            }
            // line 1558
            echo "            
                      ";
            // line 1559
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 1560
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1561
        echo "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 1562
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option\" class=\"form-control\"/>
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> ";
        // line 1567
        $context["option_row"] = 0;
        // line 1568
        echo "                    ";
        $context["option_value_row"] = 0;
        // line 1569
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 1570
            echo "                      <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                        <input type=\"hidden\" name=\"product_option[";
            // line 1571
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 1571);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 1571);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1571);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1571);
            echo "\"/>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 1573
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"product_option[";
            // line 1575
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\" class=\"form-control\">


                              ";
            // line 1578
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 1578)) {
                // line 1579
                echo "

                                <option value=\"1\" selected=\"selected\">";
                // line 1581
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                <option value=\"0\">";
                // line 1582
                echo ($context["text_no"] ?? null);
                echo "</option>


                              ";
            } else {
                // line 1586
                echo "

                                <option value=\"1\">";
                // line 1588
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                <option value=\"0\" selected=\"selected\">";
                // line 1589
                echo ($context["text_no"] ?? null);
                echo "</option>


                              ";
            }
            // line 1593
            echo "

                            </select>
                          </div>
                        </div>
                        ";
            // line 1598
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1598) == "text")) {
                // line 1599
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 1600
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 1602
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1602);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 1606
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1606) == "textarea")) {
                // line 1607
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 1608
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <textarea name=\"product_option[";
                // line 1610
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1610);
                echo "</textarea>
                            </div>
                          </div>
                        ";
            }
            // line 1614
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1614) == "file")) {
                // line 1615
                echo "                          <div class=\"form-group\" style=\"display: none;\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 1616
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 1618
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1618);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 1622
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1622) == "date")) {
                // line 1623
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 1624
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-3\">
                              <div class=\"input-group date\">
                                <input type=\"text\" name=\"product_option[";
                // line 1627
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1627);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 1633
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1633) == "time")) {
                // line 1634
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 1635
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group time\">
                                <input type=\"text\" name=\"product_option[";
                // line 1638
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1638);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 1644
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1644) == "datetime")) {
                // line 1645
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 1646
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group datetime\">
                                <input type=\"text\" name=\"product_option[";
                // line 1649
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 1649);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 1655
            echo "                        ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1655) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1655) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1655) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 1655) == "image"))) {
                // line 1656
                echo "                          <div class=\"table-responsive\">
                            <table id=\"option-value";
                // line 1657
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                              <thead>
                                <tr>
                                  <td class=\"text-left\">";
                // line 1660
                echo ($context["entry_option_value"] ?? null);
                echo "</td>

";
                // line 1662
                if (($context["prm_access_permission"] ?? null)) {
                    echo "\t\t
\t\t\t\t<td class=\"text-right\">";
                    // line 1663
                    echo ($context["entry_option_sku"] ?? null);
                    echo "</td>
";
                }
                // line 1664
                echo "\t
\t\t\t
                                  <td class=\"text-right\">";
                // line 1666
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                  <td class=\"text-left\">";
                // line 1667
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 1668
                echo ($context["entry_price"] ?? null);
                echo "</td>

";
                // line 1670
                if (($context["prm_access_permission"] ?? null)) {
                    echo "\t\t
\t\t\t\t<td class=\"text-right\">";
                    // line 1671
                    echo ($context["entry_option_cost"] ?? null);
                    echo "</td>
";
                }
                // line 1672
                echo "\t
\t\t\t
                                  <td class=\"text-right\">";
                // line 1674
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 1675
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                                  <td></td>
                                </tr>
                              </thead>
                              <tbody>

                                ";
                // line 1681
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 1681));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 1682
                    echo "                                  <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 1683
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\" class=\"form-control\">


                                        ";
                    // line 1686
                    if ((($__internal_compile_18 = ($context["option_values"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1686)] ?? null) : null)) {
                        // line 1687
                        echo "
                                          ";
                        // line 1688
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_19 = ($context["option_values"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 1688)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 1689
                            echo "
                                            ";
                            // line 1690
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1690) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 1690))) {
                                // line 1691
                                echo "

                                              <option value=\"";
                                // line 1693
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1693);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1693);
                                echo "</option>


                                            ";
                            } else {
                                // line 1697
                                echo "

                                              <option value=\"";
                                // line 1699
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 1699);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1699);
                                echo "</option>


                                            ";
                            }
                            // line 1703
                            echo "                                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1704
                        echo "                                        ";
                    }
                    // line 1705
                    echo "

                                      </select> <input type=\"hidden\" name=\"product_option[";
                    // line 1707
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 1707);
                    echo "\"/></td>
                                    
";
                    // line 1709
                    if (($context["prm_access_permission"] ?? null)) {
                        // line 1710
                        echo "\t\t\t\t  <td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][sku]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "sku", [], "any", false, false, false, 1710);
                        echo "\" placeholder=\"";
                        echo ($context["entry_option_sku"] ?? null);
                        echo "\" class=\"form-control\" /></td>
                  <td class=\"text-right\" nowrap=\"nowrap\">
<script type=\"text/javascript\">
\$(document).ready(function(){
\t\$('#input-costing-method_";
                        // line 1714
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "').on('change', function() {
    \tif (\$(\"#cost_average_";
                        // line 1715
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\").is(\":selected\")) {\t
\t\t\t\$(\"#cont_";
                        // line 1716
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\").html(\"<span style='color:#ed9999;'>";
                        echo ($context["text_option_cost_average_set"] ?? null);
                        echo "</span>\");
\t\t\t\$(\"#recost_";
                        // line 1717
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\").html(\"<span style='color:#666;'>";
                        echo ($context["text_option_restock_cost"] ?? null);
                        echo "</span>\");
\t\t\t\$(\"#equal_";
                        // line 1718
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\").html(\"<>\");
\t\t\t
\t\tif (document.getElementById('form-product').option_restock_quantity_";
                        // line 1720
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value != '' && document.getElementById('form-product').option_restock_quantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value != 0) {\t
\t\t\tvar option_cost_";
                        // line 1721
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = parseFloat(document.getElementById('form-product').option_cost_amount_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value)
\t\t\tvar option_restockquantity_";
                        // line 1722
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = parseFloat(document.getElementById('form-product').option_restock_quantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value)
\t\t\tvar option_oldcost_";
                        // line 1723
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = parseFloat(document.getElementById('form-product').option_oldcost_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value)
\t\t\tvar option_stockquantity_";
                        // line 1724
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = parseFloat(document.getElementById('form-product').option_stock_quantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value)
\t\t\tvar option_quantity_";
                        // line 1725
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = parseFloat(document.getElementById('form-product').option_quantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value)
\t\t\tvar option_totalcost_";
                        // line 1726
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = (((option_oldcost_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "*option_stockquantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ")+(option_cost_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "*option_restockquantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "))/option_quantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ").toFixed(4)
\t\t\tdocument.getElementById('form-product').option_cost_";
                        // line 1727
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value = option_totalcost_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "
\t\t}\t\t\t\t
\t\tif (document.getElementById('form-product').option_restock_quantity_";
                        // line 1729
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value == '' || document.getElementById('form-product').option_restock_quantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value == 0) {\t\t\t\t
\t\t\tvar option_totalcost_";
                        // line 1730
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = (parseFloat(document.getElementById('form-product').option_oldcost_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value)).toFixed(4)
\t\t\tdocument.getElementById('form-product').option_cost_";
                        // line 1731
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value = option_totalcost_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "
\t\t}
\t\t\t\t\t
    \t} else if (\$(\"#cost_fixed_";
                        // line 1734
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\").is(\":selected\")) {
\t\t
        \t\$(\"#cont_";
                        // line 1736
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\").html(\"<span style='color:#ed9999;'>";
                        echo ($context["text_option_cost"] ?? null);
                        echo "</span>\");
\t\t\t\$(\"#recost_";
                        // line 1737
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\").html(\"<span style='color:#666;'>";
                        echo ($context["text_cost_option_cost"] ?? null);
                        echo "</span>\");
\t\t\t\$(\"#equal_";
                        // line 1738
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\").html(\"=\");
\t\t\t
\t\t\tvar option_totalcost_";
                        // line 1740
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = (parseFloat(document.getElementById('form-product').option_cost_amount_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value)).toFixed(4)
\t\t\tdocument.getElementById('form-product').option_cost_";
                        // line 1741
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value = option_totalcost_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\t\t\t
\t    }\t
\t});
\t
  \t\$(\"#option_restock_quantity_";
                        // line 1745
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\").keypress(function (e) {
     \tif (e.which != 8 && e.which != 0 && (e.which < 45 || e.which > 57)) {
\t\t\treturn false;
    \t}
\t});
  \t\$(\"#option_cost_amount_";
                        // line 1750
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\").keypress(function (e) {
     \tif (e.which != 8 && e.which != 0 && (e.which < 46 || e.which > 57)) {
\t\t\treturn false;
    \t}
\t});\t
\t
\t\$('#option-value-row";
                        // line 1756
                        echo ($context["option_value_row"] ?? null);
                        echo "').data('row', ";
                        echo ($context["option_value_row"] ?? null);
                        echo ");\t
});

function option_totalcost_";
                        // line 1759
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "() {
\tif (document.getElementById('input-costing-method_";
                        // line 1760
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "').value == '0') {
\t\tvar option_totalcost_";
                        // line 1761
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = (parseFloat(document.getElementById('form-product').option_cost_amount_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value)).toFixed(4)
\t\tdocument.getElementById('form-product').option_cost_";
                        // line 1762
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value = option_totalcost_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "
\t}\t
\t
\tif (document.getElementById('input-costing-method_";
                        // line 1765
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "').value == '1') {
\t\tif (document.getElementById('form-product').option_restock_quantity_";
                        // line 1766
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value != '' && document.getElementById('form-product').option_restock_quantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value != 0) {\t
\t\t\tvar option_cost_";
                        // line 1767
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = parseFloat(document.getElementById('form-product').option_cost_amount_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value)
\t\t\tvar option_restockquantity_";
                        // line 1768
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = parseFloat(document.getElementById('form-product').option_restock_quantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value)
\t\t\tvar option_oldcost_";
                        // line 1769
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = parseFloat(document.getElementById('form-product').option_oldcost_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value)
\t\t\tvar option_stockquantity_";
                        // line 1770
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = parseFloat(document.getElementById('form-product').option_stock_quantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value)
\t\t\tvar option_quantity_";
                        // line 1771
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = parseFloat(document.getElementById('form-product').option_quantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value)
\t\t\tvar option_totalcost_";
                        // line 1772
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = (((option_oldcost_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "*option_stockquantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ")+(option_cost_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "*option_restockquantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "))/option_quantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ").toFixed(4)
\t\t\tdocument.getElementById('form-product').option_cost_";
                        // line 1773
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value = option_totalcost_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "
\t\t}\t\t\t\t
\t\tif (document.getElementById('form-product').option_restock_quantity_";
                        // line 1775
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value == '' || document.getElementById('form-product').option_restock_quantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value == 0) {\t\t\t\t
\t\t\tvar option_totalcost_";
                        // line 1776
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = (parseFloat(document.getElementById('form-product').option_oldcost_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value)).toFixed(4)
\t\t\tdocument.getElementById('form-product').option_cost_";
                        // line 1777
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value = option_totalcost_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "
\t\t}\t\t\t\t\t\t
\t}\t\t\t
}

function option_stockquantity_";
                        // line 1782
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "() {
\tif (document.getElementById('form-product').option_restock_quantity_";
                        // line 1783
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value != '') {
\t\tvar option_stockquantity_";
                        // line 1784
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo " = parseFloat(document.getElementById('form-product').option_restock_quantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value) + parseFloat(document.getElementById('form-product').option_stock_quantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value)
\t\tdocument.getElementById('form-product').option_quantity_";
                        // line 1785
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo ".value = option_stockquantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "
\t}
}
</script>
    \t\t\t\t<div style=\"width:100%; display:table-row;\">
\t\t\t\t\t  <div style=\"display:table-cell;\"><input onKeyUp=\"option_stockquantity_";
                        // line 1790
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "(this.form); if(!this.value) this.value=0; option_stockquantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "(this.form); option_totalcost_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "(this.form); addRestock(this.form); restockquantity_opt(this.form); quantity_opt(this.form); totalcost_opt(this.form);\" type=\"text\" id=\"option_restock_quantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][option_restock_quantity]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_restock_quantity", [], "any", false, false, false, 1790);
                        echo "\" class=\"form-control addRestock\" style=\"border:thin solid #ebd685; width:100%;\" /></div>\t
\t\t\t\t\t</div> 
    \t\t\t\t<div style=\"width:100%; display:table-row;\">
\t\t\t\t\t  <div style=\"display:table-cell; text-align:center; padding-top:3px;\">";
                        // line 1793
                        echo ($context["text_restock_quantity"] ?? null);
                        echo "</div>
\t\t\t\t\t</div>
    \t\t\t\t<div style=\"width:100%; display:table-row;\">
\t\t\t\t\t  <div style=\"display:table-cell; padding-top:8px;\"><input type=\"text\" id=\"option_quantity_";
                        // line 1796
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][quantity]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 1796);
                        echo "\" class=\"form-control addTotal\" style=\"background-color:#f9f3db; border:thin solid #ebd685; cursor:not-allowed;\" readonly /><input type=\"hidden\" id=\"option_stock_quantity_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 1796);
                        echo "\" /></div>
\t\t\t\t\t</div> \t\t\t\t\t \t\t\t\t\t
    \t\t\t\t<div style=\"width:100%; display:table-row;\">
\t\t\t\t\t  <div style=\"display:table-cell; text-align:center; padding-top:3px;\"><span style=\"color:#decc88;\">";
                        // line 1799
                        echo ($context["text_option_totalstock"] ?? null);
                        echo "</span></div>
\t\t\t\t\t</div>  
\t\t\t\t</td>  
";
                    } else {
                        // line 1803
                        echo "\t\t\t\t  <td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][quantity]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 1803);
                        echo "\" placeholder=\"";
                        echo ($context["entry_quantity"] ?? null);
                        echo "\" class=\"form-control\" /></td>
";
                    }
                    // line 1804
                    echo "\t
\t\t\t
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 1806
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\" class=\"form-control\">


                                        ";
                    // line 1809
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 1809)) {
                        // line 1810
                        echo "

                                          <option value=\"1\" selected=\"selected\">";
                        // line 1812
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                          <option value=\"0\">";
                        // line 1813
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                        ";
                    } else {
                        // line 1817
                        echo "

                                          <option value=\"1\">";
                        // line 1819
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                          <option value=\"0\" selected=\"selected\">";
                        // line 1820
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                        ";
                    }
                    // line 1824
                    echo "

                                      </select></td>
                                    
";
                    // line 1828
                    if (($context["prm_access_permission"] ?? null)) {
                        echo "\t\t\t
\t\t\t\t  <td class=\"text-right\" nowrap=\"nowrap\">
\t\t\t\t\t<div style=\"display:table-row;\"><div style=\"display:table-cell;\">
\t\t\t\t\t  <select name=\"product_option[";
                        // line 1831
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price_prefix]\" class=\"form-control\" style=\"border:thin solid #b5e08b;\">
\t\t\t\t\t\t";
                        // line 1832
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1832) == "+")) {
                            // line 1833
                            echo "\t\t\t\t\t\t\t<option value=\"+\" selected=\"selected\">+</option>
\t\t\t\t\t\t";
                        } else {
                            // line 1835
                            echo "\t\t\t\t\t\t\t<option value=\"+\">+</option>
\t\t\t\t\t\t";
                        }
                        // line 1837
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1837) == "-")) {
                            // line 1838
                            echo "\t\t\t\t\t\t\t<option value=\"-\" selected=\"selected\">-</option>
\t\t\t\t\t\t";
                        } else {
                            // line 1840
                            echo "\t\t\t\t\t\t\t<option value=\"-\">-</option>
\t\t\t\t\t\t";
                        }
                        // line 1842
                        echo "\t\t\t\t\t  </select>
\t\t\t\t\t  <input type=\"text\" onKeyUp=\"if(!this.value) this.value=0;\" name=\"product_option[";
                        // line 1843
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 1843);
                        echo "\" placeholder=\"";
                        echo ($context["entry_price"] ?? null);
                        echo "\" class=\"form-control option_price\" style=\"border:thin solid #b5e08b;\" /></div> 
\t\t\t\t\t</div> \t
\t\t\t\t\t<div style=\"display:table-row;\">
\t\t\t\t\t  <div style=\"display:table-cell; text-align:center; padding-top:3px;\">";
                        // line 1846
                        echo ($context["text_option_price"] ?? null);
                        echo "</div> 
\t\t\t\t\t</div>
\t\t\t\t\t";
                        // line 1848
                        if (($context["adv_price_tax"] ?? null)) {
                            // line 1849
                            echo "\t\t\t\t\t<div style=\"display:table-row;\">
\t\t\t\t\t  <div style=\"display:table-cell; padding-top:8px;\"><input type=\"text\" onKeyUp=\"if(!this.value) this.value=0;\" name=\"product_option[";
                            // line 1850
                            echo ($context["option_row"] ?? null);
                            echo "][product_option_value][";
                            echo ($context["option_value_row"] ?? null);
                            echo "][price_tax]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_tax", [], "any", false, false, false, 1850);
                            echo "\" placeholder=\"";
                            echo ($context["entry_price_tax"] ?? null);
                            echo "\" class=\"form-control option_price_tax\" style=\"border:thin solid #b5e08b;\" /></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display:table-row;\">
\t\t\t\t\t  <div style=\"display:table-cell; text-align:center; padding-top:3px;\">";
                            // line 1853
                            echo ($context["entry_option_price_tax"] ?? null);
                            echo "</div> 
\t\t\t\t\t</div>\t
\t\t\t\t\t";
                        }
                        // line 1855
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t  </td>  
";
                    } else {
                        // line 1858
                        echo "                            <td class=\"text-right\"><select name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price_prefix]\" class=\"form-control\">
                                

                                  ";
                        // line 1861
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1861) == "+")) {
                            // line 1862
                            echo "
                                
                                <option value=\"+\" selected=\"selected\">+</option>
                                

                                  ";
                        } else {
                            // line 1868
                            echo "
                                
                                <option value=\"+\">+</option>
                                

                                  ";
                        }
                        // line 1874
                        echo "                                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 1874) == "-")) {
                            // line 1875
                            echo "
                                
                                <option value=\"-\" selected=\"selected\">-</option>
                                

                                  ";
                        } else {
                            // line 1881
                            echo "
                                
                                <option value=\"-\">-</option>
                                

                                  ";
                        }
                        // line 1887
                        echo "
                              
                              </select>
                              <input type=\"text\" name=\"product_option[";
                        // line 1890
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 1890);
                        echo "\" placeholder=\"";
                        echo ($context["entry_price"] ?? null);
                        echo "\" class=\"form-control\" /></td>\t\t\t
";
                    }
                    // line 1891
                    echo "\t
\t\t\t

";
                    // line 1894
                    if (($context["prm_access_permission"] ?? null)) {
                        echo "\t\t\t\t
\t\t\t<td class=\"text-right\" nowrap=\"nowrap\">
 \t\t\t<div style=\"display:table; margin-bottom:3px; width:100%;\">
   \t\t\t  <div style=\"display:table-row;\">  
\t\t\t\t<div style=\"display:table-cell; text-align:center;\">
                  <select name=\"product_option[";
                        // line 1899
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][costing_method]\" id=\"input-costing-method_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\" class=\"form-control\" style=\"border:thin solid #ed9999; width:100%;\">
                \t";
                        // line 1900
                        if (((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "costing_method", [], "any", false, false, false, 1900) == false) || (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "costing_method", [], "any", false, false, false, 1900) == "0"))) {
                            // line 1901
                            echo "            \t\t\t<option value=\"0\" id=\"cost_fixed_";
                            echo ($context["option_row"] ?? null);
                            echo "_";
                            echo ($context["option_value_row"] ?? null);
                            echo "\" selected=\"selected\">";
                            echo ($context["text_cost_fixed"] ?? null);
                            echo "</option>
            \t\t";
                        } else {
                            // line 1903
                            echo "            \t\t\t<option value=\"0\" id=\"cost_fixed_";
                            echo ($context["option_row"] ?? null);
                            echo "_";
                            echo ($context["option_value_row"] ?? null);
                            echo "\">";
                            echo ($context["text_cost_fixed"] ?? null);
                            echo "</option>
                \t";
                        }
                        // line 1904
                        echo " 
                \t";
                        // line 1905
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "costing_method", [], "any", false, false, false, 1905) == "1")) {
                            // line 1906
                            echo "            \t\t\t<option value=\"1\" id=\"cost_average_";
                            echo ($context["option_row"] ?? null);
                            echo "_";
                            echo ($context["option_value_row"] ?? null);
                            echo "\" selected=\"selected\">";
                            echo ($context["text_cost_average"] ?? null);
                            echo "</option>
            \t\t";
                        } else {
                            // line 1908
                            echo "            \t\t\t<option value=\"1\" id=\"cost_average_";
                            echo ($context["option_row"] ?? null);
                            echo "_";
                            echo ($context["option_value_row"] ?? null);
                            echo "\">";
                            echo ($context["text_cost_average"] ?? null);
                            echo "</option>
                \t";
                        }
                        // line 1909
                        echo " 
                \t";
                        // line 1910
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "costing_method", [], "any", false, false, false, 1910) == "2")) {
                            // line 1911
                            echo "            \t\t\t<option value=\"2\" id=\"cost_fifo_";
                            echo ($context["option_row"] ?? null);
                            echo "_";
                            echo ($context["option_value_row"] ?? null);
                            echo "\" selected=\"selected\" disabled=\"disabled\" style=\"color:#999;\">";
                            echo ($context["text_cost_fifo"] ?? null);
                            echo "</option>
            \t\t";
                        } else {
                            // line 1913
                            echo "            \t\t\t<option value=\"2\" id=\"cost_fifo_";
                            echo ($context["option_row"] ?? null);
                            echo "_";
                            echo ($context["option_value_row"] ?? null);
                            echo "\" disabled=\"disabled\" style=\"color:#999;\">";
                            echo ($context["text_cost_fifo"] ?? null);
                            echo "</option>
                \t";
                        }
                        // line 1914
                        echo " 
                  </select>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
  \t\t\t<div style=\"display:table; width:100%;\">  
   \t\t\t  <div style=\"display:table-row;\">
\t\t\t\t<div style=\"display:table-cell; text-align:center;\">
\t\t\t\t    <select name=\"product_option[";
                        // line 1922
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][cost_prefix]\" class=\"form-control\" style=\"border:thin solid #ed9999;\">
                      ";
                        // line 1923
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "cost_prefix", [], "any", false, false, false, 1923) == "+")) {
                            // line 1924
                            echo "                      <option value=\"+\" selected=\"selected\">+</option>
                      ";
                        } else {
                            // line 1926
                            echo "                      <option value=\"+\">+</option>
                      ";
                        }
                        // line 1928
                        echo "                      ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "cost_prefix", [], "any", false, false, false, 1928) == "-")) {
                            // line 1929
                            echo "                      <option value=\"-\" selected=\"selected\">-</option>
                      ";
                        } else {
                            // line 1931
                            echo "                      <option value=\"-\">-</option>
                      ";
                        }
                        // line 1933
                        echo "                    </select>
                    <input type=\"hidden\" id=\"option_oldcost_";
                        // line 1934
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "cost", [], "any", false, false, false, 1934);
                        echo "\" />
\t\t\t\t</div>
\t\t\t\t<div style=\"display:table-cell;\"></div>\t\t\t\t\t\t
\t\t\t  </div>
\t\t\t  <div style=\"display:table-row;\">\t
\t\t\t\t<div style=\"display:table-cell; text-align:center;\">
\t\t\t\t\t<input onKeyUp=\"option_totalcost_";
                        // line 1940
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "(this.form); if(!this.value) this.value=0; option_totalcost_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "(this.form);\" type=\"text\" id=\"option_cost_amount_";
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][cost_amount]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "cost_amount", [], "any", false, false, false, 1940);
                        echo "\" class=\"form-control\" style=\"border:thin solid #ed9999;\" />
\t\t\t\t</div>\t\t\t  \t\t\t\t
\t\t\t\t<div style=\"display:table-cell; padding-left:5px; text-align:center; padding-right:5px;\">
\t\t\t\t\t";
                        // line 1943
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "costing_method", [], "any", false, false, false, 1943) == "1")) {
                            echo "<span id=\"equal_";
                            echo ($context["option_row"] ?? null);
                            echo "_";
                            echo ($context["option_value_row"] ?? null);
                            echo "\"><></span>";
                        } else {
                            echo "<span id=\"equal_";
                            echo ($context["option_row"] ?? null);
                            echo "_";
                            echo ($context["option_value_row"] ?? null);
                            echo "\">=</span>";
                        }
                        // line 1944
                        echo "\t\t\t\t</div>
\t\t\t\t<div style=\"display:table-cell; text-align:center;\">
\t\t\t\t\t<input type=\"text\" id=\"option_cost_";
                        // line 1946
                        echo ($context["option_row"] ?? null);
                        echo "_";
                        echo ($context["option_value_row"] ?? null);
                        echo "\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][cost]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "cost", [], "any", false, false, false, 1946);
                        echo "\" class=\"form-control\" style=\"background-color:#f7e9e3; border:thin solid #ed9999; cursor:not-allowed;\" readonly />
\t\t\t\t</div>\t
\t\t\t  </div>
\t\t\t  <div style=\"display:table-row;\">\t\t\t
\t\t\t\t<div style=\"display:table-cell; text-align:center; padding-top:3px;\">
\t\t\t\t\t";
                        // line 1951
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "costing_method", [], "any", false, false, false, 1951) == "1")) {
                            echo "<span id=\"recost_";
                            echo ($context["option_row"] ?? null);
                            echo "_";
                            echo ($context["option_value_row"] ?? null);
                            echo "\">";
                            echo ($context["text_option_restock_cost"] ?? null);
                            echo "</span>";
                        } else {
                            echo "<span id=\"recost_";
                            echo ($context["option_row"] ?? null);
                            echo "_";
                            echo ($context["option_value_row"] ?? null);
                            echo "\">";
                            echo ($context["text_cost_option_cost"] ?? null);
                            echo "</span>";
                        }
                        // line 1952
                        echo "\t\t\t\t</div>
\t\t\t\t<div style=\"display:table-cell;\"></div>
\t\t\t\t<div style=\"display:table-cell; text-align:center; padding-top:3px;\">
\t\t\t\t\t";
                        // line 1955
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "costing_method", [], "any", false, false, false, 1955) == "1")) {
                            echo "<span id=\"cont_";
                            echo ($context["option_row"] ?? null);
                            echo "_";
                            echo ($context["option_value_row"] ?? null);
                            echo "\" style=\"color:#ed9999;\">";
                            echo ($context["text_option_cost_average_set"] ?? null);
                            echo "</span>";
                        } else {
                            echo "<span id=\"cont_";
                            echo ($context["option_row"] ?? null);
                            echo "_";
                            echo ($context["option_value_row"] ?? null);
                            echo "\" style=\"color:#ed9999;\">";
                            echo ($context["text_option_cost"] ?? null);
                            echo "</span>";
                        }
                        // line 1956
                        echo "\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t</td>\t
";
                    } else {
                        // line 1961
                        echo "\t\t\t\t  <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][sku]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "sku", [], "any", false, false, false, 1961);
                        echo "\" />
";
                        // line 1962
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "cost_prefix", [], "any", false, false, false, 1962) == "+")) {
                            // line 1963
                            echo "\t\t  \t\t  <input type=\"hidden\" name=\"product_option[";
                            echo ($context["option_row"] ?? null);
                            echo "][product_option_value][";
                            echo ($context["option_value_row"] ?? null);
                            echo "][cost_prefix]\" value=\"+\" />
";
                        }
                        // line 1965
                        if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "cost_prefix", [], "any", false, false, false, 1965) == "-")) {
                            // line 1966
                            echo "\t\t  \t\t  <input type=\"hidden\" name=\"product_option[";
                            echo ($context["option_row"] ?? null);
                            echo "][product_option_value][";
                            echo ($context["option_value_row"] ?? null);
                            echo "][cost_prefix]\" value=\"-\" />
";
                        }
                        // line 1967
                        echo "\t\t\t\t  
\t\t  \t\t  <input type=\"hidden\" name=\"product_option[";
                        // line 1968
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][costing_method]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "costing_method", [], "any", false, false, false, 1968);
                        echo "\" />
\t\t  \t\t  <input type=\"hidden\" name=\"product_option[";
                        // line 1969
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][cost_amount]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "cost_amount", [], "any", false, false, false, 1969);
                        echo "\" />
\t\t  \t\t  <input type=\"hidden\" name=\"product_option[";
                        // line 1970
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][cost]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "cost", [], "any", false, false, false, 1970);
                        echo "\" />
\t\t\t\t  <input type=\"hidden\" name=\"product_option[";
                        // line 1971
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][option_restock_quantity]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_restock_quantity", [], "any", false, false, false, 1971);
                        echo "\" />
";
                    }
                    // line 1972
                    echo "\t\t\t\t\t\t
            
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 1974
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\" class=\"form-control\">


                                        ";
                    // line 1977
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 1977) == "+")) {
                        // line 1978
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 1984
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 1990
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 1990) == "-")) {
                        // line 1991
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 1997
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 2003
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 2005
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 2005);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 2006
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\" class=\"form-control\">


                                        ";
                    // line 2009
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 2009) == "+")) {
                        // line 2010
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 2016
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 2022
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 2022) == "-")) {
                        // line 2023
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 2029
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 2035
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 2037
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 2037);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    
";
                    // line 2039
                    if (($context["prm_access_permission"] ?? null)) {
                        // line 2040
                        echo "                <td class=\"text-right\"><button type=\"button\" id=\"remove-option-value-row";
                        echo ($context["option_value_row"] ?? null);
                        echo "\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                        echo ($context["option_value_row"] ?? null);
                        echo "').remove(); optRemove(this.form); restockquantity_opt(this.form); quantity_opt(this.form); totalcost_opt(this.form);\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
";
                    } else {
                        // line 2042
                        echo "                <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                        echo ($context["option_value_row"] ?? null);
                        echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
";
                    }
                    // line 2043
                    echo "\t\t
                          </tr>
                          ";
                    // line 2045
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 2046
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2047
                echo "                            </tbody>
                          
                          <tfoot>
                            <tr>
";
                // line 2051
                if (($context["prm_access_permission"] ?? null)) {
                    echo "\t\t\t\t
                              <td colspan=\"8\"></td>
";
                } else {
                    // line 2054
                    echo "                              <td colspan=\"6\"></td>
";
                }
                // line 2055
                echo "\t\t\t\t\t  
            
                                  <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 2057
                echo ($context["option_row"] ?? null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <select id=\"option-values";
                // line 2062
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">


                            ";
                // line 2065
                if ((($__internal_compile_20 = ($context["option_values"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 2065)] ?? null) : null)) {
                    // line 2066
                    echo "                              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_21 = ($context["option_values"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 2066)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 2067
                        echo "

                                <option value=\"";
                        // line 2069
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 2069);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 2069);
                        echo "</option>


                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 2073
                    echo "                            ";
                }
                // line 2074
                echo "

                          </select>
                        ";
            }
            // line 2077
            echo " </div>
                      ";
            // line 2078
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 2079
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 2088
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 2089
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 2095
        $context["recurring_row"] = 0;
        // line 2096
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 2097
            echo "                      <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 2098
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\" class=\"form-control\">


                            ";
            // line 2101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 2102
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 2102) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 2102))) {
                    // line 2103
                    echo "

                                <option value=\"";
                    // line 2105
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 2105);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 2105);
                    echo "</option>


                              ";
                } else {
                    // line 2109
                    echo "

                                <option value=\"";
                    // line 2111
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 2111);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 2111);
                    echo "</option>


                              ";
                }
                // line 2115
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2116
            echo "

                          </select></td>
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 2119
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 2122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 2123
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2123) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 2123))) {
                    // line 2124
                    echo "

                                <option value=\"";
                    // line 2126
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2126);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2126);
                    echo "</option>


                              ";
                } else {
                    // line 2130
                    echo "

                                <option value=\"";
                    // line 2132
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2132);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2132);
                    echo "</option>


                              ";
                }
                // line 2136
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2137
            echo "

                          </select></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 2140
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 2142
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 2143
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2144
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 2149
        echo ($context["button_recurring_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-discount\">
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 2160
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 2161
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 2162
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 2163
        echo ($context["entry_price"] ?? null);
        echo "</td>

";
        // line 2165
        if (($context["prm_access_permission"] ?? null)) {
            // line 2166
            echo "\t\t";
            if (($context["adv_price_tax"] ?? null)) {
                // line 2167
                echo "\t\t<td class=\"text-right\">";
                echo ($context["entry_price_tax"] ?? null);
                echo "</td>
\t\t";
            }
            // line 2169
            echo "\t\t<td class=\"text-right\">";
            echo ($context["entry_cost"] ?? null);
            echo "</td>
\t\t<td class=\"text-right\">";
            // line 2170
            echo ($context["entry_profit"] ?? null);
            echo "</td>
";
        }
        // line 2171
        echo "\t\t
            
                      <td class=\"text-left\">";
        // line 2173
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 2174
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 2180
        $context["discount_row"] = 0;
        // line 2181
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 2182
            echo "                      <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_discount[";
            // line 2183
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                            ";
            // line 2184
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 2185
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2185) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 2185))) {
                    // line 2186
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2186);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2186);
                    echo "</option>
                              ";
                } else {
                    // line 2188
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2188);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2188);
                    echo "</option>
                              ";
                }
                // line 2190
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2191
            echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 2192
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 2192);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 2193
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 2193);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        
";
            // line 2195
            if (($context["prm_access_permission"] ?? null)) {
                echo "\t
\t\t<td class=\"text-right\"><input type=\"text\" onKeyUp=\"if(!this.value) this.value=0;\" name=\"product_discount[";
                // line 2196
                echo ($context["discount_row"] ?? null);
                echo "][price]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 2196);
                echo "\" placeholder=\"";
                echo ($context["entry_price"] ?? null);
                echo "\" class=\"form-control discount_price\" style=\"border:thin solid #b5e08b;\" /></td>
<script type=\"text/javascript\">
function updateCostDiscount";
                // line 2198
                echo ($context["discount_row"] ?? null);
                echo "() {
\tvar cost = parseFloat(\$('#cost').val());
\tif (isNaN(cost)) cost = 0;
\t\t\t\t\t
\tif (cost == 0) \$('#form-product #discount-row";
                // line 2202
                echo ($context["discount_row"] ?? null);
                echo " .discount_cost').val(0);
\telse \$('#form-product #discount-row";
                // line 2203
                echo ($context["discount_row"] ?? null);
                echo " .discount_cost').val((cost).toFixed(4));
}

function updateProfitDiscount";
                // line 2206
                echo ($context["discount_row"] ?? null);
                echo "() {
\tvar cost = parseFloat(\$('#cost').val());
\tvar price = parseFloat(\$('#form-product #discount-row";
                // line 2208
                echo ($context["discount_row"] ?? null);
                echo " .discount_price').val());
\tif (isNaN(price)) price = 0;
\t\t\t\t\t
\tif (price == 0) \$('#form-product #discount-row";
                // line 2211
                echo ($context["discount_row"] ?? null);
                echo " .discount_profit').val(0);
\telse \$('#form-product #discount-row";
                // line 2212
                echo ($context["discount_row"] ?? null);
                echo " .discount_profit').val((price - cost).toFixed(4));
}

\$(document).ready(function() {
\t\$('#form-product').on(\"mouseup\", \"#discInitialize\", function() {
\t\tupdateCostDiscount";
                // line 2217
                echo ($context["discount_row"] ?? null);
                echo "(\$('.discount_cost').data('";
                echo ($context["discount_row"] ?? null);
                echo "'));
\t\tupdateProfitDiscount";
                // line 2218
                echo ($context["discount_row"] ?? null);
                echo "(\$('.discount_profit').data('";
                echo ($context["discount_row"] ?? null);
                echo "'));
\t});\t
});\t
</script>
\t\t";
                // line 2222
                if (($context["adv_price_tax"] ?? null)) {
                    // line 2223
                    echo "        <td class=\"text-right\"><input type=\"text\" onKeyUp=\"if(!this.value) this.value=0;\" name=\"product_discount[";
                    echo ($context["discount_row"] ?? null);
                    echo "][price_tax]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price_tax", [], "any", false, false, false, 2223);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price_tax"] ?? null);
                    echo "\" class=\"form-control discount_price_tax\" style=\"border:thin solid #b5e08b;\" /></td>
\t\t";
                }
                // line 2225
                echo "\t\t<td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                echo ($context["discount_row"] ?? null);
                echo "][cost]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "cost", [], "any", false, false, false, 2225);
                echo "\" placeholder=\"";
                echo ($context["entry_cost"] ?? null);
                echo "\" class=\"form-control discount_cost\" style=\"background-color:#f7e9e3; border:thin solid #ed9999; cursor:not-allowed;\" readonly /></td>
\t\t<td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                // line 2226
                echo ($context["discount_row"] ?? null);
                echo "][profit]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "profit", [], "any", false, false, false, 2226);
                echo "\" placeholder=\"";
                echo ($context["entry_profit"] ?? null);
                echo "\" class=\"form-control discount_profit\" style=\"background-color:#dfe7ee; border:thin solid #739cc3; cursor:not-allowed;\" readonly /></td>
";
            } else {
                // line 2228
                echo "        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
                echo ($context["discount_row"] ?? null);
                echo "][price]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 2228);
                echo "\" placeholder=\"";
                echo ($context["entry_price"] ?? null);
                echo "\" class=\"form-control\" /></td>
";
            }
            // line 2229
            echo "\t\t
            
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 2233
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 2233);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 2239
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 2239);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 2243
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      
<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$('#discount-row";
            // line 2248
            echo ($context["discount_row"] ?? null);
            echo "').data('row', ";
            echo ($context["discount_row"] ?? null);
            echo ");
});\t
</script>\t\t\t
                  ";
            // line 2251
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 2252
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2253
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
";
        // line 2257
        if (($context["prm_access_permission"] ?? null)) {
            // line 2258
            echo "\t\t\t\t\t  ";
            if (($context["adv_price_tax"] ?? null)) {
                // line 2259
                echo "                      <td colspan=\"9\"></td>
\t\t\t\t\t  ";
            } else {
                // line 2261
                echo "\t\t\t\t\t  <td colspan=\"8\"></td>
\t\t\t\t\t  ";
            }
        } else {
            // line 2264
            echo "                      <td colspan=\"6\"></td>
";
        }
        // line 2265
        echo "\t\t\t\t\t  
            
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 2267
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-special\">
              <div class=\"table-responsive\">
                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 2278
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 2279
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 2280
        echo ($context["entry_price"] ?? null);
        echo "</td>

";
        // line 2282
        if (($context["prm_access_permission"] ?? null)) {
            // line 2283
            echo "\t\t";
            if (($context["adv_price_tax"] ?? null)) {
                // line 2284
                echo "\t\t<td class=\"text-right\">";
                echo ($context["entry_price_tax"] ?? null);
                echo "</td>
\t\t";
            }
            // line 2286
            echo "\t\t<td class=\"text-right\">";
            echo ($context["entry_cost"] ?? null);
            echo "</td>
\t\t<td class=\"text-right\">";
            // line 2287
            echo ($context["entry_profit"] ?? null);
            echo "</td>
";
        }
        // line 2288
        echo "\t\t
            
                      <td class=\"text-left\">";
        // line 2290
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 2291
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 2297
        $context["special_row"] = 0;
        // line 2298
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 2299
            echo "                      <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_special[";
            // line 2300
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 2303
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 2304
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2304) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 2304))) {
                    // line 2305
                    echo "

                                <option value=\"";
                    // line 2307
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2307);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2307);
                    echo "</option>


                              ";
                } else {
                    // line 2311
                    echo "

                                <option value=\"";
                    // line 2313
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2313);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2313);
                    echo "</option>


                              ";
                }
                // line 2317
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2318
            echo "

                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 2321
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 2321);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        
";
            // line 2323
            if (($context["prm_access_permission"] ?? null)) {
                echo "\t\t\t
\t\t<td class=\"text-right\"><input type=\"text\" onKeyUp=\"if(!this.value) this.value=0;\" name=\"product_special[";
                // line 2324
                echo ($context["special_row"] ?? null);
                echo "][price]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 2324);
                echo "\" placeholder=\"";
                echo ($context["entry_price"] ?? null);
                echo "\" class=\"form-control special_price\" style=\"border:thin solid #b5e08b;\" /></td>
<script type=\"text/javascript\">
function updateCostSpecial";
                // line 2326
                echo ($context["special_row"] ?? null);
                echo "() {
\tvar cost = parseFloat(\$('#cost').val());
\tif (isNaN(cost)) cost = 0;
\t\t\t\t\t
\tif (cost == 0) \$('#form-product #special-row";
                // line 2330
                echo ($context["special_row"] ?? null);
                echo " .special_cost').val(0);
\telse \$('#form-product #special-row";
                // line 2331
                echo ($context["special_row"] ?? null);
                echo " .special_cost').val((cost).toFixed(4));
}

function updateProfitSpecial";
                // line 2334
                echo ($context["special_row"] ?? null);
                echo "() {
\tvar cost = parseFloat(\$('#cost').val());
\tvar price = parseFloat(\$('#form-product #special-row";
                // line 2336
                echo ($context["special_row"] ?? null);
                echo " .special_price').val());
\tif (isNaN(price)) price = 0;
\t\t\t\t\t
\tif (price == 0) \$('#form-product #special-row";
                // line 2339
                echo ($context["special_row"] ?? null);
                echo " .special_profit').val(0);
\telse \$('#form-product #special-row";
                // line 2340
                echo ($context["special_row"] ?? null);
                echo " .special_profit').val((price - cost).toFixed(4));
}

\$(document).ready(function() {
\t\$('#form-product').on(\"mouseup\", \"#specInitialize\", function() {
\t\tupdateCostSpecial";
                // line 2345
                echo ($context["special_row"] ?? null);
                echo "(\$('.special_cost').data('";
                echo ($context["special_row"] ?? null);
                echo "'));
\t\tupdateProfitSpecial";
                // line 2346
                echo ($context["special_row"] ?? null);
                echo "(\$('.special_profit').data('";
                echo ($context["special_row"] ?? null);
                echo "'));
\t});\t
});\t
</script>
\t\t";
                // line 2350
                if (($context["adv_price_tax"] ?? null)) {
                    // line 2351
                    echo "\t\t<td class=\"text-right\"><input type=\"text\" onKeyUp=\"if(!this.value) this.value=0;\" name=\"product_special[";
                    echo ($context["special_row"] ?? null);
                    echo "][price_tax]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price_tax", [], "any", false, false, false, 2351);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price_tax"] ?? null);
                    echo "\" class=\"form-control special_price_tax\" style=\"border:thin solid #b5e08b;\" /></td>
\t\t";
                }
                // line 2352
                echo "\t\t
\t\t<td class=\"text-right\"><input type=\"text\" name=\"product_special[";
                // line 2353
                echo ($context["special_row"] ?? null);
                echo "][cost]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_special"], "cost", [], "any", false, false, false, 2353);
                echo "\" placeholder=\"";
                echo ($context["entry_cost"] ?? null);
                echo "\" class=\"form-control special_cost\" style=\"background-color:#f7e9e3; border:thin solid #ed9999; cursor:not-allowed;\" readonly /></td>
\t\t<td class=\"text-right\"><input type=\"text\" name=\"product_special[";
                // line 2354
                echo ($context["special_row"] ?? null);
                echo "][profit]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_special"], "profit", [], "any", false, false, false, 2354);
                echo "\" placeholder=\"";
                echo ($context["entry_profit"] ?? null);
                echo "\" class=\"form-control special_profit\" style=\"background-color:#dfe7ee; border:thin solid #739cc3; cursor:not-allowed;\" readonly /></td>
";
            } else {
                // line 2356
                echo "\t\t<td class=\"text-right\"><input type=\"text\" name=\"product_special[";
                echo ($context["special_row"] ?? null);
                echo "][price]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 2356);
                echo "\" placeholder=\"";
                echo ($context["entry_price"] ?? null);
                echo "\" class=\"form-control\" /></td>
";
            }
            // line 2357
            echo "\t\t
            
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 2361
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 2361);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 2367
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 2367);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 2371
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      
<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$('#special-row";
            // line 2376
            echo ($context["special_row"] ?? null);
            echo "').data('row', ";
            echo ($context["special_row"] ?? null);
            echo ");
});
</script>\t\t\t
                  ";
            // line 2379
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 2380
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2381
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
";
        // line 2385
        if (($context["prm_access_permission"] ?? null)) {
            // line 2386
            echo "\t\t\t\t\t  ";
            if (($context["adv_price_tax"] ?? null)) {
                // line 2387
                echo "                      <td colspan=\"8\"></td>
\t\t\t\t\t  ";
            } else {
                // line 2389
                echo "\t\t\t\t\t  <td colspan=\"7\"></td>
\t\t\t\t\t  ";
            }
        } else {
            // line 2392
            echo "                      <td colspan=\"5\"></td>
";
        }
        // line 2393
        echo "\t\t\t\t\t  
            
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 2395
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 2406
        echo ($context["entry_image"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 2411
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"/></a> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"table-responsive\">
                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 2420
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 2421
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 2427
        $context["image_row"] = 0;
        // line 2428
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 2429
            echo "                      <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 2430
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 2430);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"/></a> <input type=\"hidden\" name=\"product_image[";
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 2430);
            echo "\" id=\"input-image";
            echo ($context["image_row"] ?? null);
            echo "\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 2431
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 2431);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 2432
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 2434
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 2435
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2436
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 2441
        echo ($context["button_image_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
        // line 2449
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 2451
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 2458
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 2459
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 2464
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2465
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 2466
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2466);
            echo "</td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 2467
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2467);
            echo "][points]\" value=\"";
            echo (((($__internal_compile_22 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2467)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2467)] ?? null) : null), "points", [], "any", false, false, false, 2467)) : (""));
            echo "\" class=\"form-control\"/></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2470
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 2476
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 2481
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 2482
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 2486
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 2487
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 2488
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 2488);
            echo "</td>
                        <td class=\"text-left\">";
            // line 2489
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2490
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2490);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2490);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2490);
                echo "\"/></span> <input type=\"text\" name=\"product_seo_url[";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 2490);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2490);
                echo "]\" value=\"";
                if ((($__internal_compile_24 = (($__internal_compile_25 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 2490)] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2490)] ?? null) : null)) {
                    echo (($__internal_compile_26 = (($__internal_compile_27 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 2490)] ?? null) : null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2490)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                            ";
                // line 2492
                if ((($__internal_compile_28 = (($__internal_compile_29 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 2492)] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2492)] ?? null) : null)) {
                    // line 2493
                    echo "                              <div class=\"text-danger\">";
                    echo (($__internal_compile_30 = (($__internal_compile_31 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 2493)] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2493)] ?? null) : null);
                    echo "</div>
                            ";
                }
                // line 2495
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2498
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 2508
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 2509
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 2513
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 2514
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 2515
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 2515);
            echo "</td>
                        <td class=\"text-left\"><select name=\"product_layout[";
            // line 2516
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 2516);
            echo "]\" class=\"form-control\">
                            <option value=\"\"></option>


                            ";
            // line 2520
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 2521
                echo "                              ";
                if (((($__internal_compile_32 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 2521)] ?? null) : null) && ((($__internal_compile_33 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 2521)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 2521)))) {
                    // line 2522
                    echo "

                                <option value=\"";
                    // line 2524
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 2524);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 2524);
                    echo "</option>


                              ";
                } else {
                    // line 2528
                    echo "

                                <option value=\"";
                    // line 2530
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 2530);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 2530);
                    echo "</option>


                              ";
                }
                // line 2534
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2535
            echo "

                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2540
        echo "                  </tbody>
                </table>
              </div>
            </div>

";
        // line 2545
        if (($context["product_id"] ?? null)) {
            echo " 
";
            // line 2546
            if (($context["prm_access_permission"] ?? null)) {
                // line 2547
                echo "<div class=\"tab-pane\" id=\"tab-history\">
<style type=\"text/css\">
.list_main_history {
\tborder-collapse: collapse;
\twidth: 100%;
\tborder-top: 1px solid #DDDDDD;
\tborder-left: 1px solid #DDDDDD;\t
\tmargin-bottom: 20px;
}
.list_main_history td {
\tborder-right: 1px solid #DDDDDD;
\tborder-bottom: 1px solid #DDDDDD;\t
}
.list_main_history thead td {
\tbackground-color: #f5f5f5;
\tpadding: 0px 5px;
}

.list_main_history thead td a, .list_main_history thead td {
\ttext-decoration: none;
\tcolor: #222222;
\tfont-weight: bold;\t
}
.list_main_history tbody td {
\tvertical-align: middle;
\tpadding: 0px 5px;
}
.list_main_history .left {
\ttext-align: left;
\tpadding: 7px;
}
.list_main_history .right {
\ttext-align: right;
\tpadding: 7px;
}
.list_main_history .center {
\ttext-align: center;
\tpadding: 3px;
}
.list_main_history a.asc:after {
\tcontent: \" \\f107\";
\tfont-family: FontAwesome;
\tfont-size: 14px;
}
.list_main_history a.desc:after {
\tcontent: \" \\f106\";
\tfont-family: FontAwesome;
\tfont-size: 14px;
}
.list_main_history .noresult {
\ttext-align: center;
\tpadding: 7px;
}

.btn-type {
\tbackground-color: #fcfcfc;
\tborder: 1px solid #CCC;
}
.btn-select {
\tbackground-color: #fcfcfc;
\tborder: 1px solid #CCC;
}
.hloading {
\tposition: absolute;
\twidth: 100%;
\theight: 100%;
\tz-index: 9999;
\tbackground: url('view/image/adv_reports/page_loading.gif') 50% 25% no-repeat rgba(255,255,255,0.9);
}
</style> 
<div class=\"hloading\"></div>
<input type=\"hidden\" id=\"page_history\" value=\"";
                // line 2618
                echo ($context["page_history"] ?? null);
                echo "\">
<input type=\"hidden\" id=\"sort_history\" value=\"";
                // line 2619
                echo ($context["sort_history"] ?? null);
                echo "\">
<input type=\"hidden\" id=\"order_history\" value=\"";
                // line 2620
                echo ($context["order_history"] ?? null);
                echo "\">
<script type=\"text/javascript\">
\$(document).ready(function() {
var \$filter_history_range = \$('#filter_history_range'), \$date_start = \$('#date-start-history'), \$date_end = \$('#date-end-history');
\$filter_history_range.change(function () {
    if (\$filter_history_range.val() == 'custom') {
        \$date_start.removeAttr('disabled');
        \$date_end.removeAttr('disabled');
    } else {\t
        \$date_start.prop('disabled', 'disabled').val('');
        \$date_end.prop('disabled', 'disabled').val('');
    }
}).trigger('change');
});
</script>
<div align=\"right\"><button type=\"button\" onclick=\"history_download();\" class=\"btn btn-info\" style=\"margin-bottom:10px;\"><i class=\"fa fa-download\"></i> ";
                // line 2635
                echo ($context["button_hdownload"] ?? null);
                echo "</button>&nbsp;<button type=\"button\" onclick=\"history_delete();\" class=\"btn btn-danger\" style=\"margin-bottom:10px;\"><i class=\"fa fa-eraser\"></i> ";
                echo ($context["button_hdelete"] ?? null);
                echo "</button></div> 
<div class=\"well\">
    <div class=\"row\">
      <div class=\"col-lg-6\" style=\"padding-bottom:5px;\">\t  
        <div class=\"row\">
          <div class=\"col-sm-6\" style=\"padding-bottom:5px;\">
\t\t  <label class=\"control-label\" for=\"filter_history_range\">";
                // line 2641
                echo ($context["entry_hrange"] ?? null);
                echo "</label>
            <select name=\"filter_history_range\" id=\"filter_history_range\" data-style=\"btn-select\" class=\"form-control select\">
              ";
                // line 2643
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["ranges_history"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["range_history"]) {
                    // line 2644
                    echo "\t\t\t  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["range_history"], "value", [], "any", false, false, false, 2644) == ($context["filter_history_range"] ?? null))) {
                        echo " 
              <option id=\"";
                        // line 2645
                        echo twig_get_attribute($this->env, $this->source, $context["range_history"], "id", [], "any", false, false, false, 2645);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["range_history"], "value", [], "any", false, false, false, 2645);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["range_history"], "text", [], "any", false, false, false, 2645);
                        echo "\" style=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["range_history"], "style", [], "any", false, false, false, 2645);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["range_history"], "text", [], "any", false, false, false, 2645);
                        echo "</option>
              ";
                    } else {
                        // line 2647
                        echo "              <option id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["range_history"], "id", [], "any", false, false, false, 2647);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["range_history"], "value", [], "any", false, false, false, 2647);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["range_history"], "text", [], "any", false, false, false, 2647);
                        echo "\" style=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["range_history"], "style", [], "any", false, false, false, 2647);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["range_history"], "text", [], "any", false, false, false, 2647);
                        echo "</option>
              ";
                    }
                    // line 2649
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['range_history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2650
                echo "            </select></div>
          <div class=\"col-sm-3\" style=\"padding-bottom:5px;\">
\t\t  <label class=\"control-label\" for=\"date-start-history\">";
                // line 2652
                echo ($context["entry_hdate_start"] ?? null);
                echo "</label>
            <input type=\"text\" name=\"filter_history_date_start\" value=\"";
                // line 2653
                echo ($context["filter_history_date_start"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"date-start-history\" class=\"form-control\" style=\"color:#F90;\" />
\t\t  </div>
          <div class=\"col-sm-3\" style=\"padding-bottom:5px;\">
\t\t  <label class=\"control-label\" for=\"date-end-history\">";
                // line 2656
                echo ($context["entry_hdate_end"] ?? null);
                echo "</label>
            <input type=\"text\" name=\"filter_history_date_end\" value=\"";
                // line 2657
                echo ($context["filter_history_date_end"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"date-end-history\" class=\"form-control\" style=\"color:#F90;\" />
          </div>
        </div>
\t  </div>   
      <div class=\"col-lg-3\" style=\"padding-bottom:5px;\">
\t  <label class=\"control-label\" for=\"filter_history_option\">";
                // line 2662
                echo ($context["entry_hoption"] ?? null);
                echo "</label>
          <select name=\"filter_history_option\" id=\"filter_history_option\" data-style=\"btn-type\" class=\"form-control select\" ";
                // line 2663
                echo ((($context["option_histories"] ?? null)) ? ("") : ("disabled"));
                echo ">
\t\t\t<option id=\"main_product\" value=\"0\">";
                // line 2664
                echo ($context["text_nooption"] ?? null);
                echo "</option>
            ";
                // line 2665
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["option_histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option_history"]) {
                    // line 2666
                    echo "\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option_history"], "options", [], "any", false, false, false, 2666) == ($context["filter_history_option"] ?? null))) {
                        echo "             
            <option value=\"";
                        // line 2667
                        echo twig_get_attribute($this->env, $this->source, $context["option_history"], "options", [], "any", false, false, false, 2667);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_history"], "option_name", [], "any", false, false, false, 2667);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_history"], "option_value", [], "any", false, false, false, 2667);
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["option_history"], "option_sku", [], "any", false, false, false, 2667)) {
                            echo "[";
                            echo twig_get_attribute($this->env, $this->source, $context["option_history"], "option_sku", [], "any", false, false, false, 2667);
                            echo "]";
                        }
                        echo "</option>
            ";
                    } else {
                        // line 2669
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_history"], "options", [], "any", false, false, false, 2669);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_history"], "option_name", [], "any", false, false, false, 2669);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_history"], "option_value", [], "any", false, false, false, 2669);
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["option_history"], "option_sku", [], "any", false, false, false, 2669)) {
                            echo "[";
                            echo twig_get_attribute($this->env, $this->source, $context["option_history"], "option_sku", [], "any", false, false, false, 2669);
                            echo "]";
                        }
                        echo "</option>
            ";
                    }
                    // line 2671
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "  
          </select>
\t  </div>
      <div class=\"col-lg-3\" style=\"padding-bottom:5px;\">
\t  <label class=\"control-label\" for=\"filter_history_supplier\">";
                // line 2675
                echo ($context["entry_hsupplier"] ?? null);
                echo "</label>
          <select name=\"filter_history_supplier\" id=\"filter_history_supplier\" data-style=\"btn-type\" class=\"form-control select\" ";
                // line 2676
                echo ((($context["supplier_histories"] ?? null)) ? ("") : ("disabled"));
                echo ">
\t\t\t<option value=\"\">";
                // line 2677
                echo ($context["text_all_hsuppliers"] ?? null);
                echo "</option>
            ";
                // line 2678
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["supplier_histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["supplier_history"]) {
                    // line 2679
                    echo "\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["supplier_history"], "supplier_id", [], "any", false, false, false, 2679) == ($context["filter_history_supplier"] ?? null))) {
                        echo "             
            <option value=\"";
                        // line 2680
                        echo twig_get_attribute($this->env, $this->source, $context["supplier_history"], "supplier_id", [], "any", false, false, false, 2680);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["supplier_history"], "supplier_name", [], "any", false, false, false, 2680);
                        echo "</option>
            ";
                    } else {
                        // line 2682
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["supplier_history"], "supplier_id", [], "any", false, false, false, 2682);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["supplier_history"], "supplier_name", [], "any", false, false, false, 2682);
                        echo "</option>
            ";
                    }
                    // line 2684
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplier_history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
          </select>
\t  </div>\t  
    </div> 
</div>\t
";
                // line 2689
                if (($context["histories"] ?? null)) {
                    echo "\t
<script type=\"text/javascript\" src=\"view/javascript/jquery/flot/jquery.flot.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/jquery/flot/jquery.flot.resize.min.js\"></script>
<div id=\"tab_chart_history\">
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t\$.ajax({
\t\turl: 'index.php?route=catalog/product/stock_chart&user_token=";
                    // line 2696
                    echo ($context["user_token"] ?? null);
                    echo "',
\t\tdataType: 'json',
\t\tsuccess: function(json) {

\t\t\tvar option1 = {\t
\t\t\t\tshadowSize: 1,
\t\t\t\tcolors: ['#ebd685'],
\t\t\t\tgrid: {
\t\t\t\t\tbackgroundColor: '#FFFFFF',
\t\t\t\t\tborderWidth: 1,
\t\t\t\t\thoverable: true
\t\t\t\t},
        \t\tseries: {
            \t\tlines: { 
\t\t\t\t\t\tshow: true,
\t\t\t\t\t\tfill: true,
\t\t\t\t\t\tlineWidth: 1.5 
\t\t\t\t\t},
            \t\tpoints: {
                \t\tradius: 3,
                \t\tshow: true,
                \t\tfill: true
            \t\t},
        \t\t},
\t\t\t\txaxis: {
\t\t\t\t\tshow: false
\t\t\t\t},
\t\t\t\tyaxis: {
\t\t\t\t\tshow: true
\t\t\t\t}\t
\t\t\t}

\t\t\t\$.plot('#chart1', [json['ghstock_quantity']], option1);\t
\t\t\t\t\t
\t\t\t\$('#chart1').bind('plothover', function(event, pos, item) {
\t\t\t\t\$('.tooltip').remove();
\t\t\t  
\t\t\t\tif (item) {
\t\t\t\t\t\$('<div id=\"tooltip\" class=\"tooltip top in\"><div class=\"tooltip-arrow\"></div><div class=\"tooltip-inner\">'+item.series.label+': <b>' + item.datapoint[1].toFixed(0) + '</b></div></div>').prependTo('body');
\t\t\t\t\t
\t\t\t\t\t\$('#tooltip').css({
\t\t\t\t\t\tposition: 'absolute',
\t\t\t\t\t\tleft: item.pageX - (\$('#tooltip').outerWidth() / 2),
\t\t\t\t\t\ttop: item.pageY - \$('#tooltip').outerHeight(),
\t\t\t\t\t\tpointer: 'cusror'
\t\t\t\t\t}).fadeIn('slow');\t
\t\t\t\t\t
\t\t\t\t\t\$('#chart1').css('cursor', 'pointer');\t\t
\t\t\t  \t} else {
\t\t\t\t\t\$('#chart1').css('cursor', 'auto');
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\tvar option2 = {\t
\t\t\t\tshadowSize: 1,
\t\t\t\tcolors: ['#ed9999', '#b5e08b', '#739cc3'],
\t\t\t\tgrid: {
\t\t\t\t\tbackgroundColor: '#FFFFFF',
\t\t\t\t\tborderWidth: 1,
\t\t\t\t\thoverable: true
\t\t\t\t},
        \t\tseries: {
            \t\tlines: { 
\t\t\t\t\t\tshow: true,
\t\t\t\t\t\tfill: true,
\t\t\t\t\t\tlineWidth: 1.5 
\t\t\t\t\t},
            \t\tpoints: {
                \t\tradius: 3,
                \t\tshow: true,
                \t\tfill: true
            \t\t},
        \t\t},
\t\t\t\txaxis: {
\t\t\t\t\tshow: false
\t\t\t\t},\t
\t\t\t\tyaxis: {
\t\t\t\t\tshow: true
\t\t\t\t}\t\t
\t\t\t}
\t\t\t\t\t\t
\t\t\t\$.plot('#chart2', [json['ghcost'], json['ghprice'], json['ghprofit']], option2);\t
\t\t\t\t\t
\t\t\t\$('#chart2').bind('plothover', function(event, pos, item) {
\t\t\t\t\$('.tooltip').remove();
\t\t\t  
\t\t\t\tif (item) {
\t\t\t\t\t\$('<div id=\"tooltip\" class=\"tooltip top in\"><div class=\"tooltip-arrow\"></div><div class=\"tooltip-inner\">'+item.series.label+': <b>' + item.datapoint[1].toFixed(0) + '</b></div></div>').prependTo('body');
\t\t\t\t\t
\t\t\t\t\t\$('#tooltip').css({
\t\t\t\t\t\tposition: 'absolute',
\t\t\t\t\t\tleft: item.pageX - (\$('#tooltip').outerWidth() / 2),
\t\t\t\t\t\ttop: item.pageY - \$('#tooltip').outerHeight(),
\t\t\t\t\t\tpointer: 'cusror'
\t\t\t\t\t}).fadeIn('slow');\t
\t\t\t\t\t
\t\t\t\t\t\$('#chart2').css('cursor', 'pointer');\t\t
\t\t\t  \t} else {
\t\t\t\t\t\$('#chart2').css('cursor', 'auto');
\t\t\t\t}
\t\t\t});
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
           alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\">
function save_comment(id) {
\tvar input_comment = \$('#comment-'+id+' textarea');
\tvar comment = \$(input_comment).val();
\t\$.ajax({
\t\t";
                    // line 2809
                    if (($context["modify_permission"] ?? null)) {
                        // line 2810
                        echo "\t\t\turl: 'index.php?route=catalog/product/saveProductStockHistoryComment&product_stock_history_id='+id+'&comment='+comment+'&user_token=";
                        echo ($context["user_token"] ?? null);
                        echo "',
\t\t";
                    } else {
                        // line 2812
                        echo "\t\t\turl: '',
\t\t";
                    }
                    // line 2814
                    echo "\t\tdataType: 'html',
\t\tdata: {},
\t\tsuccess: function(comment) { 
\t\t\t\$('#comment-'+id).next().html(comment);
\t\t}
\t});
\t\$(input_comment).css('cursor','text');
}
function save_comment_option(id) {
\tvar input_comment = \$('#comment-'+id+' textarea');
\tvar comment = \$(input_comment).val();
\t\$.ajax({
\t\t";
                    // line 2826
                    if (($context["modify_permission"] ?? null)) {
                        // line 2827
                        echo "\t\t\turl: 'index.php?route=catalog/product/saveProductOptionStockHistoryComment&product_option_stock_history_id='+id+'&comment='+comment+'&user_token=";
                        echo ($context["user_token"] ?? null);
                        echo "',
\t\t";
                    } else {
                        // line 2829
                        echo "\t\t\turl: '',
\t\t";
                    }
                    // line 2831
                    echo "\t\tdataType: 'html',
\t\tdata: {},
\t\tsuccess: function(comment) { 
\t\t\t\$('#comment-'+id).next().html(comment);
\t\t}
\t});
\t\$(input_comment).css('cursor','text');
}
</script>
<script type=\"text/javascript\">
function stopRKey(evt) { 
\tvar evt = (evt) ? evt : ((event) ? event : null); 
\tvar node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
\tif ((evt.keyCode == 13) && (node.type==\"text\")) {
\t\treturn false;
\t} 
} 
document.onkeypress = stopRKey; 
</script>
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div align=\"center\"><strong>Stock Quantity History</strong></div>
      \t<div style=\"width:100%; height:300px;\" id=\"chart1\"></div>
      </div> 
    </div>
    <p></p>
    <div class=\"row\"> 
      <div class=\"col-lg-12\">  
        <div align=\"center\"><strong>Price, Cost and Profit History of Stock</strong></div>
        <div style=\"width:100%; height:280px;\" id=\"chart2\"></div>
      </div>  
    </div>
    <p></p>
</div>
";
                }
                // line 2865
                echo "\t
<div class=\"table-responsive\">
    <table class=\"list_main_history\">
      <thead>
        <tr id=\"head_history\">
          <td class=\"left\" style=\"min-width:90px;\">";
                // line 2870
                if ((($context["sort_history"] ?? null) == "psh_id")) {
                    // line 2871
                    echo "                <a href=\"";
                    echo ($context["sort_history_date_added"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_history"] ?? null));
                    echo "\">";
                    echo ($context["column_hdate_added"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 2873
                    echo "                <a href=\"";
                    echo ($context["sort_history_date_added"] ?? null);
                    echo "\">";
                    echo ($context["column_hdate_added"] ?? null);
                    echo "</a>
                ";
                }
                // line 2874
                echo "</td>
          <td class=\"left\">";
                // line 2875
                if ((($context["sort_history"] ?? null) == "comment")) {
                    // line 2876
                    echo "                <a href=\"";
                    echo ($context["sort_history_comment"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_history"] ?? null));
                    echo "\"><label class=\"control-label\" style=\"cursor:pointer;\"><span data-toggle=\"tooltip\" title=\"";
                    echo ($context["help_comment"] ?? null);
                    echo "\">";
                    echo ($context["column_comment"] ?? null);
                    echo "</span></label></a>
                ";
                } else {
                    // line 2878
                    echo "                <a href=\"";
                    echo ($context["sort_history_comment"] ?? null);
                    echo "\"><label class=\"control-label\" style=\"cursor:pointer;\"><span data-toggle=\"tooltip\" title=\"";
                    echo ($context["help_comment"] ?? null);
                    echo "\">";
                    echo ($context["column_comment"] ?? null);
                    echo "</span></label></a>
                ";
                }
                // line 2879
                echo "</td>\t
          <td class=\"left\">";
                // line 2880
                if ((($context["sort_history"] ?? null) == "supplier")) {
                    // line 2881
                    echo "                <a href=\"";
                    echo ($context["sort_history_supplier"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_history"] ?? null));
                    echo "\"><label class=\"control-label\">";
                    echo ($context["column_hsupplier"] ?? null);
                    echo "</label></a>
                ";
                } else {
                    // line 2883
                    echo "                <a href=\"";
                    echo ($context["sort_history_supplier"] ?? null);
                    echo "\"><label class=\"control-label\">";
                    echo ($context["column_hsupplier"] ?? null);
                    echo "</label></a>
                ";
                }
                // line 2884
                echo "</td>\t\t\t\t\t
          <td class=\"right\">";
                // line 2885
                if ((($context["sort_history"] ?? null) == "costing_method")) {
                    // line 2886
                    echo "                <a href=\"";
                    echo ($context["sort_history_costing_method"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_history"] ?? null));
                    echo "\"><label class=\"control-label\" style=\"cursor:pointer;\"><span data-toggle=\"tooltip\" title=\"";
                    echo ($context["help_costing_methods"] ?? null);
                    echo "\">";
                    echo ($context["column_hcosting_method"] ?? null);
                    echo "</span></label></a>
                ";
                } else {
                    // line 2888
                    echo "                <a href=\"";
                    echo ($context["sort_history_costing_method"] ?? null);
                    echo "\"><label class=\"control-label\" style=\"cursor:pointer;\"><span data-toggle=\"tooltip\" title=\"";
                    echo ($context["help_costing_methods"] ?? null);
                    echo "\">";
                    echo ($context["column_hcosting_method"] ?? null);
                    echo "</span></label></a>
                ";
                }
                // line 2889
                echo "</td>\t\t\t\t\t  \t\t\t
          <td class=\"right\">";
                // line 2890
                if ((($context["sort_history"] ?? null) == "restock_quantity")) {
                    // line 2891
                    echo "                <a href=\"";
                    echo ($context["sort_history_restock_quantity"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_history"] ?? null));
                    echo "\">";
                    echo ($context["column_hrestock_quantity"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 2893
                    echo "                <a href=\"";
                    echo ($context["sort_history_restock_quantity"] ?? null);
                    echo "\">";
                    echo ($context["column_hrestock_quantity"] ?? null);
                    echo "</a>
                ";
                }
                // line 2894
                echo "</td>
          <td class=\"right\">";
                // line 2895
                if ((($context["sort_history"] ?? null) == "stock_quantity")) {
                    // line 2896
                    echo "                <a href=\"";
                    echo ($context["sort_history_stock_quantity"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_history"] ?? null));
                    echo "\">";
                    echo ($context["column_hstock_quantity"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 2898
                    echo "                <a href=\"";
                    echo ($context["sort_history_stock_quantity"] ?? null);
                    echo "\">";
                    echo ($context["column_hstock_quantity"] ?? null);
                    echo "</a>
                ";
                }
                // line 2899
                echo "</td>
          <td class=\"right\">";
                // line 2900
                if ((($context["sort_history"] ?? null) == "restock_cost")) {
                    // line 2901
                    echo "                <a href=\"";
                    echo ($context["sort_history_restock_cost"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_history"] ?? null));
                    echo "\">";
                    echo ($context["column_hrestock_cost"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 2903
                    echo "                <a href=\"";
                    echo ($context["sort_history_restock_cost"] ?? null);
                    echo "\">";
                    echo ($context["column_hrestock_cost"] ?? null);
                    echo "</a>
                ";
                }
                // line 2904
                echo "</td>\t\t\t\t
          <td class=\"right\">";
                // line 2905
                if ((($context["sort_history"] ?? null) == "cost")) {
                    // line 2906
                    echo "                <a href=\"";
                    echo ($context["sort_history_cost"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_history"] ?? null));
                    echo "\">";
                    echo ($context["column_hcost"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 2908
                    echo "                <a href=\"";
                    echo ($context["sort_history_cost"] ?? null);
                    echo "\">";
                    echo ($context["column_hcost"] ?? null);
                    echo "</a>
                ";
                }
                // line 2909
                echo "</td>
          <td class=\"right\">";
                // line 2910
                if ((($context["sort_history"] ?? null) == "price")) {
                    // line 2911
                    echo "                <a href=\"";
                    echo ($context["sort_history_price"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_history"] ?? null));
                    echo "\">";
                    echo ($context["column_hprice"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 2913
                    echo "                <a href=\"";
                    echo ($context["sort_history_price"] ?? null);
                    echo "\">";
                    echo ($context["column_hprice"] ?? null);
                    echo "</a>
                ";
                }
                // line 2914
                echo "</td>
          <td class=\"right\">";
                // line 2915
                if ((($context["sort_history"] ?? null) == "profit")) {
                    // line 2916
                    echo "                <a href=\"";
                    echo ($context["sort_history_profit"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_history"] ?? null));
                    echo "\">";
                    echo ($context["column_hprofit"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 2918
                    echo "                <a href=\"";
                    echo ($context["sort_history_profit"] ?? null);
                    echo "\">";
                    echo ($context["column_hprofit"] ?? null);
                    echo "</a>
                ";
                }
                // line 2919
                echo "</td>\t
          <td class=\"right\">";
                // line 2920
                if ((($context["sort_history"] ?? null) == "profit_margin")) {
                    // line 2921
                    echo "                <a href=\"";
                    echo ($context["sort_history_profit_margin"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_history"] ?? null));
                    echo "\">";
                    echo ($context["entry_gmargin"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 2923
                    echo "                <a href=\"";
                    echo ($context["sort_history_profit_margin"] ?? null);
                    echo "\">";
                    echo ($context["entry_gmargin"] ?? null);
                    echo "</a>
                ";
                }
                // line 2924
                echo "</td>\t\t
          <td class=\"right\">";
                // line 2925
                if ((($context["sort_history"] ?? null) == "profit_markup")) {
                    // line 2926
                    echo "                <a href=\"";
                    echo ($context["sort_history_profit_markup"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_history"] ?? null));
                    echo "\">";
                    echo ($context["entry_gmarkup"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 2928
                    echo "                <a href=\"";
                    echo ($context["sort_history_profit_markup"] ?? null);
                    echo "\">";
                    echo ($context["entry_gmarkup"] ?? null);
                    echo "</a>
                ";
                }
                // line 2929
                echo "</td>\t\t\t\t\t\t\t\t\t\t
        </tr>
      </thead>
      <tbody>
        ";
                // line 2933
                if (($context["histories"] ?? null)) {
                    echo "\t\t
        ";
                    // line 2934
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                        echo "\t\t
        <tr>
          <td class=\"left\">";
                        // line 2936
                        echo twig_get_attribute($this->env, $this->source, $context["history"], "hdate_added", [], "any", false, false, false, 2936);
                        echo "</td> \t\t  
\t\t  <td class=\"left\">
\t\t  ";
                        // line 2938
                        if ((($context["filter_history_option"] ?? null) == 0)) {
                            // line 2939
                            echo "\t\t  <span id=\"comment-";
                            echo twig_get_attribute($this->env, $this->source, $context["history"], "product_stock_history_id", [], "any", false, false, false, 2939);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["history"], "product_stock_history_id", [], "any", false, false, false, 2939);
                            echo "\">
\t\t  <textarea onchange=\"save_comment(";
                            // line 2940
                            echo twig_get_attribute($this->env, $this->source, $context["history"], "product_stock_history_id", [], "any", false, false, false, 2940);
                            echo ")\" placeholder=\"";
                            echo ($context["column_comment"] ?? null);
                            echo "\" style=\"border:none; width:100%;\">";
                            echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 2940);
                            echo "</textarea>
\t\t  </span> 
\t\t  ";
                        } else {
                            // line 2943
                            echo "\t\t  <span id=\"comment-";
                            echo twig_get_attribute($this->env, $this->source, $context["history"], "product_option_stock_history_id", [], "any", false, false, false, 2943);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["history"], "product_option_stock_history_id", [], "any", false, false, false, 2943);
                            echo "\">
\t\t  <textarea onchange=\"save_comment_option(";
                            // line 2944
                            echo twig_get_attribute($this->env, $this->source, $context["history"], "product_option_stock_history_id", [], "any", false, false, false, 2944);
                            echo ")\" placeholder=\"";
                            echo ($context["column_comment"] ?? null);
                            echo "\" style=\"border:none; width:100%;\">";
                            echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 2944);
                            echo "</textarea>
\t\t  </span> 
\t\t  ";
                        }
                        // line 2947
                        echo "\t\t  </td>
          <td class=\"left\">";
                        // line 2948
                        echo twig_get_attribute($this->env, $this->source, $context["history"], "hsupplier", [], "any", false, false, false, 2948);
                        echo "</td>\t\t  
          <td class=\"right\">";
                        // line 2949
                        echo twig_get_attribute($this->env, $this->source, $context["history"], "hcosting_method", [], "any", false, false, false, 2949);
                        echo "</td>\t\t  
          <td class=\"right\">";
                        // line 2950
                        echo twig_get_attribute($this->env, $this->source, $context["history"], "hrestock_quantity", [], "any", false, false, false, 2950);
                        echo "</td>
          <td class=\"right\" style=\"background:#f9f3db;\">";
                        // line 2951
                        echo twig_get_attribute($this->env, $this->source, $context["history"], "hstock_quantity", [], "any", false, false, false, 2951);
                        echo "</td>
          <td class=\"right\">";
                        // line 2952
                        echo twig_get_attribute($this->env, $this->source, $context["history"], "hrestock_cost", [], "any", false, false, false, 2952);
                        echo "</td>
\t\t  <td class=\"right\" style=\"background:#f7e9e3;\">";
                        // line 2953
                        echo twig_get_attribute($this->env, $this->source, $context["history"], "hcost", [], "any", false, false, false, 2953);
                        echo "</td>
          <td class=\"right\" style=\"background:#f1f9e9;\">";
                        // line 2954
                        echo twig_get_attribute($this->env, $this->source, $context["history"], "hprice", [], "any", false, false, false, 2954);
                        echo "</td>
\t\t  <td class=\"right\" style=\"background:#dfe7ee;\">";
                        // line 2955
                        echo twig_get_attribute($this->env, $this->source, $context["history"], "hprofit", [], "any", false, false, false, 2955);
                        echo "</td>
\t\t  <td class=\"right\" style=\"background:#dfe7ee;\">";
                        // line 2956
                        echo twig_get_attribute($this->env, $this->source, $context["history"], "hprofit_margin", [], "any", false, false, false, 2956);
                        echo "</td>
\t\t  <td class=\"right\" style=\"background:#dfe7ee;\">";
                        // line 2957
                        echo twig_get_attribute($this->env, $this->source, $context["history"], "hprofit_markup", [], "any", false, false, false, 2957);
                        echo "</td>
        </tr>       
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 2960
                    echo "        ";
                } else {
                    // line 2961
                    echo "        <tr>
          <td class=\"center\" colspan=\"12\">";
                    // line 2962
                    echo ($context["text_no_results"] ?? null);
                    echo "</td>
        </tr>
        ";
                }
                // line 2965
                echo "      </tbody>
    </table>
</div>\t
\t\t<div class=\"row\">
\t\t<div class=\"col-sm-6 text-left\" id=\"pagination_history\">";
                // line 2969
                echo ($context["pagination_history"] ?? null);
                echo "</div>
        <div class=\"col-sm-6 text-right\" id=\"pagination_history_count\">";
                // line 2970
                echo ($context["results_history"] ?? null);
                echo "</div>
\t\t</div>\t
</div>
<script id=\"historyTemplate\" type=\"text/x-jquery-tmpl\">
        <tr>
          <td class=\"left\">\${hdate_added}</td>
\t\t  <td class=\"left\">
\t\t  ";
                // line 2977
                if ((($context["filter_history_option"] ?? null) == 0)) {
                    // line 2978
                    echo "\t\t  <span id=\"comment-\${product_stock_history_id}\" value=\"\${product_stock_history_id}\">
\t\t  <textarea onchange=\"save_comment(\${product_stock_history_id})\" placeholder=\"";
                    // line 2979
                    echo ($context["column_comment"] ?? null);
                    echo "\" style=\"border:none; width:100%;\">\${comment}</textarea>
\t\t  </span>
\t\t  ";
                } else {
                    // line 2982
                    echo "\t\t  <span id=\"comment-\${product_option_stock_history_id}\" value=\"\${product_option_stock_history_id}\">
\t\t  <textarea onchange=\"save_comment_option(\${product_option_stock_history_id})\" placeholder=\"";
                    // line 2983
                    echo ($context["column_comment"] ?? null);
                    echo "\" style=\"border:none; width:100%;\">\${comment}</textarea>
\t\t  </span>
\t\t  ";
                }
                // line 2986
                echo "\t\t  </td>
          <td class=\"left\">\${hsupplier}</td>\t\t  
          <td class=\"right\">\${hcosting_method}</td>\t\t  
          <td class=\"right\">\${hrestock_quantity}</td>
          <td class=\"right\" style=\"background:#f9f3db; width:auto;\">\${hstock_quantity}</td>
          <td class=\"right\">\${hrestock_cost}</td>
\t\t  <td class=\"right\" style=\"background:#f7e9e3;\">\${hcost}</td>
          <td class=\"right\" style=\"background:#f1f9e9;\">\${hprice}</td>
\t\t  <td class=\"right\" style=\"background:#dfe7ee;\">\${hprofit}</td>
\t\t  <td class=\"right\" style=\"background:#dfe7ee;\">\${hprofit_margin}</td>
\t\t  <td class=\"right\" style=\"background:#dfe7ee;\">\${hprofit_markup}</td>
        </tr>  
</script>

<div class=\"tab-pane\" id=\"tab-sales\">
<style type=\"text/css\">
.list_main_sale {
\tborder-collapse: collapse;
\twidth: 100%;
\tborder-top: 1px solid #DDDDDD;
\tborder-left: 1px solid #DDDDDD;\t
\tmargin-bottom: 20px;
}
.list_main_sale td {
\tborder-right: 1px solid #DDDDDD;
\tborder-bottom: 1px solid #DDDDDD;\t
}
.list_main_sale thead td {
\tbackground-color: #f5f5f5;
\tpadding: 0px 5px;
}

.list_main_sale thead td a, .list_main_sale thead td {
\ttext-decoration: none;
\tcolor: #222222;
\tfont-weight: bold;\t
}
.list_main_sale tbody td {
\tvertical-align: middle;
\tpadding: 0px 5px;
}
.list_main_sale .left {
\ttext-align: left;
\tpadding: 7px;
}
.list_main_sale .right {
\ttext-align: right;
\tpadding: 7px;
}
.list_main_sale .center {
\ttext-align: center;
\tpadding: 3px;
}
.list_main_sale a.asc:after {
\tcontent: \" \\f107\";
\tfont-family: FontAwesome;
\tfont-size: 14px;
}
.list_main_sale a.desc:after {
\tcontent: \" \\f106\";
\tfont-family: FontAwesome;
\tfont-size: 14px;
}
.list_main_sale .noresult {
\ttext-align: center;
\tpadding: 7px;
}

.btn-select {
\tbackground-color: #fcfcfc;
\tborder: 1px solid #CCC;
}
.btn-group-ms {
\twidth: 100%;
\theight: 35px;\t
}
.btn-group-ms > .multiselect.btn {
\twidth: 100%;
\theight: 35px;\t
}
.multiselect ul {
\twidth: 100%;
\theight: 35px;\t
}
.sloading {
\tposition: absolute;
\twidth: 100%;
\theight: 100%;
\tz-index: 9999;
\tbackground: url('view/image/adv_reports/page_loading.gif') 50% 25% no-repeat rgba(255,255,255,0.9);
}
</style> 
<div class=\"sloading\"></div>
<input type=\"hidden\" id=\"page_sale\" value=\"";
                // line 3079
                echo ($context["page_sale"] ?? null);
                echo "\">
<input type=\"hidden\" id=\"sort_sale\" value=\"";
                // line 3080
                echo ($context["sort_sale"] ?? null);
                echo "\">
<input type=\"hidden\" id=\"order_sale\" value=\"";
                // line 3081
                echo ($context["order_sale"] ?? null);
                echo "\">
<script type=\"text/javascript\">
\$(document).ready(function() {
var \$filter_sale_range = \$('#filter_sale_range'), \$date_start = \$('#date-start-sale'), \$date_end = \$('#date-end-sale');
\$filter_sale_range.change(function () {
    if (\$filter_sale_range.val() == 'custom') {
        \$date_start.removeAttr('disabled');
        \$date_end.removeAttr('disabled');
    } else {\t
        \$date_start.prop('disabled', 'disabled').val('');
        \$date_end.prop('disabled', 'disabled').val('');
    }
}).trigger('change');
});
</script>
<div class=\"well\">
    <div class=\"row\">
      <div class=\"col-lg-6\" style=\"padding-bottom:5px;\">\t  
        <div class=\"row\">
          <div class=\"col-sm-6\" style=\"padding-bottom:5px;\">
\t\t  <label class=\"control-label\" for=\"filter_sale_range\">";
                // line 3101
                echo ($context["entry_hrange"] ?? null);
                echo "</label>
            <select name=\"filter_sale_range\" id=\"filter_sale_range\" data-style=\"btn-select\" class=\"form-control select\">
              ";
                // line 3103
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["ranges_sale"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["range_sale"]) {
                    // line 3104
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["range_sale"], "value", [], "any", false, false, false, 3104) == ($context["filter_sale_range"] ?? null))) {
                        // line 3105
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["range_sale"], "value", [], "any", false, false, false, 3105);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["range_sale"], "text", [], "any", false, false, false, 3105);
                        echo "\" style=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["range_sale"], "style", [], "any", false, false, false, 3105);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["range_sale"], "text", [], "any", false, false, false, 3105);
                        echo "</option>
              ";
                    } else {
                        // line 3107
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["range_sale"], "value", [], "any", false, false, false, 3107);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["range_sale"], "text", [], "any", false, false, false, 3107);
                        echo "\" style=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["range_sale"], "style", [], "any", false, false, false, 3107);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["range_sale"], "text", [], "any", false, false, false, 3107);
                        echo "</option>
              ";
                    }
                    // line 3109
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['range_sale'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 3110
                echo "            </select></div>
          <div class=\"col-sm-3\" style=\"padding-bottom:5px;\">
\t\t  <label class=\"control-label\" for=\"date-start-sale\">";
                // line 3112
                echo ($context["entry_hdate_start"] ?? null);
                echo "</label>
            <input type=\"text\" name=\"filter_sale_date_start\" value=\"";
                // line 3113
                echo ($context["filter_sale_date_start"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"date-start-sale\" class=\"form-control\" style=\"color:#F90;\" />
\t\t  </div>
          <div class=\"col-sm-3\" style=\"padding-bottom:5px;\">
\t\t  <label class=\"control-label\" for=\"date-end-sale\">";
                // line 3116
                echo ($context["entry_hdate_end"] ?? null);
                echo "</label>
            <input type=\"text\" name=\"filter_sale_date_end\" value=\"";
                // line 3117
                echo ($context["filter_sale_date_end"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"date-end-sale\" class=\"form-control\" style=\"color:#F90;\" />
          </div>
        </div>
\t  </div>   
      <div class=\"col-lg-3\" style=\"padding-bottom:5px;\">
\t  <label class=\"control-label\" for=\"sale_order_status\">";
                // line 3122
                echo ($context["entry_sstatus"] ?? null);
                echo "</label>
            <select name=\"filter_sale_order_status\" id=\"sale_order_status\" class=\"form-control\" multiple=\"multiple\" size=\"1\">\t\t
            ";
                // line 3124
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
                    // line 3125
                    echo "            ";
                    if (twig_in_filter("order_status.order_status_id", ($context["filter_sale_order_status"] ?? null))) {
                        // line 3126
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 3126);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 3126);
                        echo "</option>
            ";
                    } else {
                        // line 3128
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 3128);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 3128);
                        echo "</option>
            ";
                    }
                    // line 3130
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 3131
                echo "          </select></div>
      <div class=\"col-lg-3\" style=\"padding-bottom:5px;\">
\t  <label class=\"control-label\" for=\"sale_option\">";
                // line 3133
                echo ($context["entry_soption"] ?? null);
                echo "</label>
            <select name=\"filter_sale_option\" id=\"sale_option\" class=\"form-control\" multiple=\"multiple\" size=\"1\">
            ";
                // line 3135
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["order_options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["order_option"]) {
                    // line 3136
                    echo "            ";
                    if (twig_in_filter("order_option.options", ($context["filter_sale_option"] ?? null))) {
                        // line 3137
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["order_option"], "options", [], "any", false, false, false, 3137);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order_option"], "option_name", [], "any", false, false, false, 3137);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["order_option"], "option_value", [], "any", false, false, false, 3137);
                        echo "</option>
            ";
                    } else {
                        // line 3139
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["order_option"], "options", [], "any", false, false, false, 3139);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order_option"], "option_name", [], "any", false, false, false, 3139);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["order_option"], "option_value", [], "any", false, false, false, 3139);
                        echo "</option>
            ";
                    }
                    // line 3141
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 3142
                echo "          </select></div>\t\t  
    </div> 
</div>\t
<div class=\"table-responsive\">
    <table class=\"list_main_sale\">
      <thead id=\"head_sale\">
        <tr>
          <td class=\"left\">";
                // line 3149
                if ((($context["sort_sale"] ?? null) == "product_order_id")) {
                    // line 3150
                    echo "                <a href=\"";
                    echo ($context["sort_sale_date_added"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_sale"] ?? null));
                    echo "\">";
                    echo ($context["column_prod_order_id"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 3152
                    echo "                <a href=\"";
                    echo ($context["sort_sale_date_added"] ?? null);
                    echo "\">";
                    echo ($context["column_prod_order_id"] ?? null);
                    echo "</a>
                ";
                }
                // line 3153
                echo "</td>
          <td class=\"left\">";
                // line 3154
                if ((($context["sort_sale"] ?? null) == "product_date_added")) {
                    // line 3155
                    echo "                <a href=\"";
                    echo ($context["sort_sale_date_added"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_sale"] ?? null));
                    echo "\">";
                    echo ($context["column_prod_date_added"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 3157
                    echo "                <a href=\"";
                    echo ($context["sort_sale_date_added"] ?? null);
                    echo "\">";
                    echo ($context["column_prod_date_added"] ?? null);
                    echo "</a>
                ";
                }
                // line 3158
                echo "</td>
          <td class=\"left\" style=\"min-width:120px;\">";
                // line 3159
                if ((($context["sort_sale"] ?? null) == "product_option")) {
                    // line 3160
                    echo "                <a href=\"";
                    echo ($context["sort_sale_name"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_sale"] ?? null));
                    echo "\">";
                    echo ($context["column_prod_name"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 3162
                    echo "                <a href=\"";
                    echo ($context["sort_sale_name"] ?? null);
                    echo "\">";
                    echo ($context["column_prod_name"] ?? null);
                    echo "</a>
                ";
                }
                // line 3163
                echo "</td> 
          <td class=\"right\">";
                // line 3164
                if ((($context["sort_sale"] ?? null) == "product_sold")) {
                    // line 3165
                    echo "                <a href=\"";
                    echo ($context["sort_sale_quantity"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_sale"] ?? null));
                    echo "\">";
                    echo ($context["column_prod_sold"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 3167
                    echo "                <a href=\"";
                    echo ($context["sort_sale_quantity"] ?? null);
                    echo "\">";
                    echo ($context["column_prod_sold"] ?? null);
                    echo "</a>
                ";
                }
                // line 3168
                echo "</td>
          <td class=\"right\" style=\"min-width:70px;\">";
                // line 3169
                if ((($context["sort_sale"] ?? null) == "product_total_excl_vat")) {
                    // line 3170
                    echo "                <a href=\"";
                    echo ($context["sort_sale_total_excl_tax"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_sale"] ?? null));
                    echo "\">";
                    echo ($context["column_prod_total_excl_vat"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 3172
                    echo "                <a href=\"";
                    echo ($context["sort_sale_total_excl_tax"] ?? null);
                    echo "\">";
                    echo ($context["column_prod_total_excl_vat"] ?? null);
                    echo "</a>
                ";
                }
                // line 3173
                echo "</td>
          <td class=\"right\">";
                // line 3174
                if ((($context["sort_sale"] ?? null) == "product_tax")) {
                    // line 3175
                    echo "                <a href=\"";
                    echo ($context["sort_sale_tax"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_sale"] ?? null));
                    echo "\">";
                    echo ($context["column_prod_tax"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 3177
                    echo "                <a href=\"";
                    echo ($context["sort_sale_tax"] ?? null);
                    echo "\">";
                    echo ($context["column_prod_tax"] ?? null);
                    echo "</a>
                ";
                }
                // line 3178
                echo "</td>
          <td class=\"right\" style=\"min-width:70px;\">";
                // line 3179
                if ((($context["sort_sale"] ?? null) == "product_total_incl_vat")) {
                    // line 3180
                    echo "                <a href=\"";
                    echo ($context["sort_sale_total_incl_tax"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_sale"] ?? null));
                    echo "\">";
                    echo ($context["column_prod_total_incl_vat"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 3182
                    echo "                <a href=\"";
                    echo ($context["sort_sale_total_incl_tax"] ?? null);
                    echo "\">";
                    echo ($context["column_prod_total_incl_vat"] ?? null);
                    echo "</a>
                ";
                }
                // line 3183
                echo "</td>\t
          <td class=\"right\">";
                // line 3184
                if ((($context["sort_sale"] ?? null) == "product_revenue")) {
                    // line 3185
                    echo "                <a href=\"";
                    echo ($context["sort_sale_revenue"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_sale"] ?? null));
                    echo "\">";
                    echo ($context["column_prod_sales"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 3187
                    echo "                <a href=\"";
                    echo ($context["sort_sale_revenue"] ?? null);
                    echo "\">";
                    echo ($context["column_prod_sales"] ?? null);
                    echo "</a>
                ";
                }
                // line 3188
                echo "</td>\t
          <td class=\"right\">";
                // line 3189
                if ((($context["sort_sale"] ?? null) == "product_cost")) {
                    // line 3190
                    echo "                <a href=\"";
                    echo ($context["sort_sale_cost"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_sale"] ?? null));
                    echo "\">";
                    echo ($context["column_prod_cost"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 3192
                    echo "                <a href=\"";
                    echo ($context["sort_sale_cost"] ?? null);
                    echo "\">";
                    echo ($context["column_prod_cost"] ?? null);
                    echo "</a>
                ";
                }
                // line 3193
                echo "</td>\t
          <td class=\"right\">";
                // line 3194
                if ((($context["sort_sale"] ?? null) == "product_profit")) {
                    // line 3195
                    echo "                <a href=\"";
                    echo ($context["sort_sale_profit"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_sale"] ?? null));
                    echo "\">";
                    echo ($context["column_prod_profit"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 3197
                    echo "                <a href=\"";
                    echo ($context["sort_sale_profit"] ?? null);
                    echo "\">";
                    echo ($context["column_prod_profit"] ?? null);
                    echo "</a>
                ";
                }
                // line 3198
                echo "</td>
          <td class=\"right\" style=\"min-width:75px;\">";
                // line 3199
                if ((($context["sort_sale"] ?? null) == "product_margin")) {
                    // line 3200
                    echo "                <a href=\"";
                    echo ($context["sort_sale_profit_margin"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_sale"] ?? null));
                    echo "\">";
                    echo ($context["column_prod_margin"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 3202
                    echo "                <a href=\"";
                    echo ($context["sort_sale_profit_margin"] ?? null);
                    echo "\">";
                    echo ($context["column_prod_margin"] ?? null);
                    echo "</a>
                ";
                }
                // line 3203
                echo "</td>
          <td class=\"right\" style=\"min-width:75px;\">";
                // line 3204
                if ((($context["sort_sale"] ?? null) == "product_markup")) {
                    // line 3205
                    echo "                <a href=\"";
                    echo ($context["sort_sale_profit_markup"] ?? null);
                    echo "\" class=\"";
                    echo twig_lower_filter($this->env, ($context["order_sale"] ?? null));
                    echo "\">";
                    echo ($context["column_prod_markup"] ?? null);
                    echo "</a>
                ";
                } else {
                    // line 3207
                    echo "                <a href=\"";
                    echo ($context["sort_sale_profit_markup"] ?? null);
                    echo "\">";
                    echo ($context["column_prod_markup"] ?? null);
                    echo "</a>
                ";
                }
                // line 3208
                echo "</td>\t
        </tr>
      </thead>
      <tbody>
        ";
                // line 3212
                if (($context["sales"] ?? null)) {
                    // line 3213
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["sales"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["sale"]) {
                        // line 3214
                        echo "        <tr>
          <td class=\"left\"><a href=\"";
                        // line 3215
                        echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_order_id_url", [], "any", false, false, false, 3215);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_order_id", [], "any", false, false, false, 3215);
                        echo "</a></td>
\t\t  <td class=\"left\">";
                        // line 3216
                        echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_date_added", [], "any", false, false, false, 3216);
                        echo "</td>
          <td class=\"left\">";
                        // line 3217
                        echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_name", [], "any", false, false, false, 3217);
                        echo "<br/><span style=\"font-size:11px;\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_option", [], "any", false, false, false, 3217);
                        echo "</span></td>
          <td class=\"right\">";
                        // line 3218
                        echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_sold", [], "any", false, false, false, 3218);
                        echo "</td>
\t\t  <td class=\"right\">";
                        // line 3219
                        echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_total_excl_vat", [], "any", false, false, false, 3219);
                        echo "</td>
\t\t  <td class=\"right\">";
                        // line 3220
                        echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_tax", [], "any", false, false, false, 3220);
                        echo "</td>
\t\t  <td class=\"right\">";
                        // line 3221
                        echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_total_incl_vat", [], "any", false, false, false, 3221);
                        echo "</td>
\t\t  <td class=\"right\" style=\"background-color:#DCFFB9;\">";
                        // line 3222
                        echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_revenue", [], "any", false, false, false, 3222);
                        echo "</td>
\t\t  <td class=\"right\" style=\"background-color:#ffd7d7;\">";
                        // line 3223
                        echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_cost", [], "any", false, false, false, 3223);
                        echo "</td>
\t\t  ";
                        // line 3224
                        if ((twig_get_attribute($this->env, $this->source, $context["sale"], "product_profit_raw", [], "any", false, false, false, 3224) >= 0)) {
                            // line 3225
                            echo "\t\t  <td class=\"right\" style=\"background-color:#c4d9ee; font-weight:bold;\">";
                            echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_profit", [], "any", false, false, false, 3225);
                            echo "</td>
\t\t  <td class=\"right\" style=\"background-color:#c4d9ee; font-weight:bold;\">";
                            // line 3226
                            echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_profit_margin", [], "any", false, false, false, 3226);
                            echo "</td>
\t\t  <td class=\"right\" style=\"background-color:#c4d9ee; font-weight:bold;\">";
                            // line 3227
                            echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_profit_markup", [], "any", false, false, false, 3227);
                            echo "</td>
\t\t  ";
                        } else {
                            // line 3229
                            echo "\t\t  <td class=\"right\" style=\"background-color:#F99; font-weight:bold;\">";
                            echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_profit", [], "any", false, false, false, 3229);
                            echo "</td>
\t\t  <td class=\"right\" style=\"background-color:#F99; font-weight:bold;\">";
                            // line 3230
                            echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_profit_margin", [], "any", false, false, false, 3230);
                            echo "</td>
\t\t  <td class=\"right\" style=\"background-color:#F99; font-weight:bold;\">";
                            // line 3231
                            echo twig_get_attribute($this->env, $this->source, $context["sale"], "product_profit_markup", [], "any", false, false, false, 3231);
                            echo "</td>
\t\t  ";
                        }
                        // line 3233
                        echo "        </tr>\t
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sale'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 3235
                    echo "\t\t<tr style=\"border-top:2px solid #CCC;\">
\t\t  <td colspan=\"3\" class=\"right\" style=\"background-color:#E5E5E5; font-weight:bold;\">";
                    // line 3236
                    echo ($context["column_prod_totals"] ?? null);
                    echo "</td>
          <td class=\"right\" style=\"background-color:#E5E5E5; color:#003A88; font-weight:bold;\">";
                    // line 3237
                    echo twig_get_attribute($this->env, $this->source, ($context["sale"] ?? null), "product_sold_total", [], "any", false, false, false, 3237);
                    echo "</td>
\t\t  <td class=\"right\" style=\"background-color:#E5E5E5; color:#003A88; font-weight:bold;\">";
                    // line 3238
                    echo twig_get_attribute($this->env, $this->source, ($context["sale"] ?? null), "product_total_excl_vat_total", [], "any", false, false, false, 3238);
                    echo "</td>
\t\t  <td class=\"right\" style=\"background-color:#E5E5E5; color:#003A88; font-weight:bold;\">";
                    // line 3239
                    echo twig_get_attribute($this->env, $this->source, ($context["sale"] ?? null), "product_tax_total", [], "any", false, false, false, 3239);
                    echo "</td>
\t\t  <td class=\"right\" style=\"background-color:#E5E5E5; color:#003A88; font-weight:bold;\">";
                    // line 3240
                    echo twig_get_attribute($this->env, $this->source, ($context["sale"] ?? null), "product_total_incl_vat_total", [], "any", false, false, false, 3240);
                    echo "</td>
\t\t  <td class=\"right\" style=\"background-color:#DCFFB9; color:#003A88; font-weight:bold;\">";
                    // line 3241
                    echo twig_get_attribute($this->env, $this->source, ($context["sale"] ?? null), "product_revenue_total", [], "any", false, false, false, 3241);
                    echo "</td>
\t\t  <td class=\"right\" style=\"background-color:#ffd7d7; color:#003A88; font-weight:bold;\">";
                    // line 3242
                    echo twig_get_attribute($this->env, $this->source, ($context["sale"] ?? null), "product_cost_total", [], "any", false, false, false, 3242);
                    echo "</td>
\t\t  ";
                    // line 3243
                    if ((twig_get_attribute($this->env, $this->source, ($context["sale"] ?? null), "product_profit_raw_total", [], "any", false, false, false, 3243) >= 0)) {
                        // line 3244
                        echo "\t\t  <td class=\"right\" style=\"background-color:#c4d9ee; color:#003A88; font-weight:bold;\">";
                        echo twig_get_attribute($this->env, $this->source, ($context["sale"] ?? null), "product_profit_total", [], "any", false, false, false, 3244);
                        echo "</td>
\t\t  <td class=\"right\" style=\"background-color:#c4d9ee; color:#003A88; font-weight:bold;\">";
                        // line 3245
                        echo twig_get_attribute($this->env, $this->source, ($context["sale"] ?? null), "product_profit_margin_total", [], "any", false, false, false, 3245);
                        echo "</td>
\t\t  <td class=\"right\" style=\"background-color:#c4d9ee; color:#003A88; font-weight:bold;\">";
                        // line 3246
                        echo twig_get_attribute($this->env, $this->source, ($context["sale"] ?? null), "product_profit_markup_total", [], "any", false, false, false, 3246);
                        echo "</td>
\t\t  ";
                    } else {
                        // line 3248
                        echo "\t\t  <td class=\"right\" style=\"background-color:#F99; color:#003A88; font-weight:bold;\">";
                        echo twig_get_attribute($this->env, $this->source, ($context["sale"] ?? null), "product_profit_total", [], "any", false, false, false, 3248);
                        echo "</td>
\t\t  <td class=\"right\" style=\"background-color:#F99; color:#003A88; font-weight:bold;\">";
                        // line 3249
                        echo twig_get_attribute($this->env, $this->source, ($context["sale"] ?? null), "product_profit_margin_total", [], "any", false, false, false, 3249);
                        echo "</td>
\t\t  <td class=\"right\" style=\"background-color:#F99; color:#003A88; font-weight:bold;\">";
                        // line 3250
                        echo twig_get_attribute($this->env, $this->source, ($context["sale"] ?? null), "product_profit_markup_total", [], "any", false, false, false, 3250);
                        echo "</td>
\t\t  ";
                    }
                    // line 3252
                    echo "        </tr>\t\t\t
        ";
                } else {
                    // line 3254
                    echo "        <tr>
          <td class=\"center\" colspan=\"12\">";
                    // line 3255
                    echo ($context["text_no_results"] ?? null);
                    echo "</td>
        </tr>
        ";
                }
                // line 3258
                echo "      </tbody>
    </table>
</div>\t\t
\t\t<div class=\"row\">
\t\t<div class=\"col-sm-6 text-left\" id=\"pagination_sale\">";
                // line 3262
                echo ($context["pagination_sale"] ?? null);
                echo "</div>
        <div class=\"col-sm-6 text-right\" id=\"pagination_sale_count\">";
                // line 3263
                echo ($context["results_sale"] ?? null);
                echo "</div>
\t\t</div>\t
</div>
<script id=\"saleTemplate\" type=\"text/x-jquery-tmpl\">
        <tr>
          <td class=\"left\"><a href=\"\${product_order_id_url}\">\${product_order_id}</a></td>
\t\t  <td class=\"left\">\${product_date_added}</td>
          <td class=\"left\">\${product_name}<br/><span style=\"font-size:11px;\">";
                // line 3270
                echo "{{html product_option}}";
                echo "</span></td>
          <td class=\"right\">\${product_sold}</td>
\t\t  <td class=\"right\">\${product_total_excl_vat}</td>
\t\t  <td class=\"right\">\${product_tax}</td>
\t\t  <td class=\"right\">\${product_total_incl_vat}</td>
\t\t  <td class=\"right\" style=\"background-color:#DCFFB9;\">\${product_revenue}</td>
\t\t  <td class=\"right\" style=\"background-color:#ffd7d7;\">\${product_cost}</td>
\t\t  ";
                // line 3277
                if ((($context["product_profit_raw"] ?? null) >= 0)) {
                    // line 3278
                    echo "\t\t  <td class=\"right\" style=\"background-color:#c4d9ee; font-weight:bold;\">\${product_profit}</td>
\t\t  <td class=\"right\" style=\"background-color:#c4d9ee; font-weight:bold;\">\${product_profit_margin}</td>
\t\t  <td class=\"right\" style=\"background-color:#c4d9ee; font-weight:bold;\">\${product_profit_markup}</td>
\t\t  ";
                } else {
                    // line 3282
                    echo "\t\t  <td class=\"right\" style=\"background-color:#F99; font-weight:bold;\">\${product_profit}</td>
\t\t  <td class=\"right\" style=\"background-color:#F99; font-weight:bold;\">\${product_profit_margin}</td>
\t\t  <td class=\"right\" style=\"background-color:#F99; font-weight:bold;\">\${product_profit_markup}</td>
\t\t  ";
                }
                // line 3286
                echo "        </tr>\t\t
</script>
<script id=\"sale_totalTemplate\" type=\"text/x-jquery-tmpl\">
\t\t<tr style=\"border-top:2px solid #CCC;\">
\t\t  <td colspan=\"3\" class=\"right\" style=\"background-color:#E5E5E5; font-weight:bold;\">";
                // line 3290
                echo ($context["column_prod_totals"] ?? null);
                echo "</td>
          <td class=\"right\" style=\"background-color:#E5E5E5; color:#003A88; font-weight:bold;\">\${product_sold_total}</td>
\t\t  <td class=\"right\" style=\"background-color:#E5E5E5; color:#003A88; font-weight:bold;\">\${product_total_excl_vat_total}</td>
\t\t  <td class=\"right\" style=\"background-color:#E5E5E5; color:#003A88; font-weight:bold;\">\${product_tax_total}</td>
\t\t  <td class=\"right\" style=\"background-color:#E5E5E5; color:#003A88; font-weight:bold;\">\${product_total_incl_vat_total}</td>
\t\t  <td class=\"right\" style=\"background-color:#DCFFB9; color:#003A88; font-weight:bold;\">\${product_revenue_total}</td>
\t\t  <td class=\"right\" style=\"background-color:#ffd7d7; color:#003A88; font-weight:bold;\">\${product_cost_total}</td>
\t\t  ";
                // line 3297
                if ((($context["product_profit_raw_total"] ?? null) >= 0)) {
                    // line 3298
                    echo "\t\t  <td class=\"right\" style=\"background-color:#c4d9ee; color:#003A88; font-weight:bold;\">\${product_profit_total}</td>
\t\t  <td class=\"right\" style=\"background-color:#c4d9ee; color:#003A88; font-weight:bold;\">\${product_profit_margin_total}</td>
\t\t  <td class=\"right\" style=\"background-color:#c4d9ee; color:#003A88; font-weight:bold;\">\${product_profit_markup_total}</td>
\t\t  ";
                } else {
                    // line 3302
                    echo "\t\t  <td class=\"right\" style=\"background-color:#F99; color:#003A88; font-weight:bold;\">\${product_profit_total}</td>
\t\t  <td class=\"right\" style=\"background-color:#F99; color:#003A88; font-weight:bold;\">\${product_profit_margin_total}</td>
\t\t  <td class=\"right\" style=\"background-color:#F99; color:#003A88; font-weight:bold;\">\${product_profit_markup_total}</td>
\t\t  ";
                }
                // line 3306
                echo "        </tr>\t\t
</script>
";
            }
        }
        // line 3310
        echo "            
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
  <link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
  // Manufacturer
  \$('input[name=\\'manufacturer\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 3330
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  json.unshift({
\t\t\t\t\t  manufacturer_id: 0,
\t\t\t\t\t  name: '";
        // line 3335
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t  });

\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['manufacturer_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t  \$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t  }
  });

  // Category
  \$('input[name=\\'category\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 3357
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['category_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'category\\']').val('');

\t\t  \$('#product-category' + item['value']).remove();

\t\t  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Filter
  \$('input[name=\\'filter\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 3386
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['filter_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'filter\\']').val('');

\t\t  \$('#product-filter' + item['value']).remove();

\t\t  \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Downloads
  \$('input[name=\\'download\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 3415
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['download_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'download\\']').val('');

\t\t  \$('#product-download' + item['value']).remove();

\t\t  \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Related
  \$('input[name=\\'related\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 3444
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'related\\']').val('');

\t\t  \$('#product-related' + item['value']).remove();

\t\t  \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var attribute_row = ";
        // line 3470
        echo ($context["attribute_row"] ?? null);
        echo ";

  function addAttribute() {
\t  html = '<tr id=\"attribute-row' + attribute_row + '\">';
\t  html += '  <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 3474
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" style=\"position:relative;\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-left\">';
    ";
        // line 3476
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3477
            echo "\t  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3477);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3477);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3477);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3477);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3479
        echo "\t  html += '  </td>';
\t  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 3480
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#attribute tbody').append(html);

\t  attributeautocomplete(attribute_row);

\t  attribute_row++;
  }

  function attributeautocomplete(attribute_row) {
\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t  'source': function(request, response) {
\t\t\t  \$.ajax({
\t\t\t\t  url: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 3494
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t\t  dataType: 'json',
\t\t\t\t  success: function(json) {
\t\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t\t  return {
\t\t\t\t\t\t\t  category: item.attribute_group,
\t\t\t\t\t\t\t  label: item.name,
\t\t\t\t\t\t\t  value: item.attribute_id
\t\t\t\t\t\t  }
\t\t\t\t\t  }));
\t\t\t\t  }
\t\t\t  });
\t\t  },
\t\t  'select': function(item) {
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t  }
\t  });
  }

  \$('#attribute tbody tr').each(function(index, element) {
\t  attributeautocomplete(index);
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_row = ";
        // line 3519
        echo ($context["option_row"] ?? null);
        echo ";

  \$('input[name=\\'option\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 3524
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  category: item['category'],
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['option_id'],
\t\t\t\t\t\t  type: item['type'],
\t\t\t\t\t\t  option_value: item['option_value']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\t  html += '\t<div class=\"form-group\">';
\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 3547
        echo ($context["entry_required"] ?? null);
        echo "</label>';
\t\t  html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\t  html += '\t      <option value=\"1\">";
        // line 3549
        echo ($context["text_yes"] ?? null);
        echo "</option>';
\t\t  html += '\t      <option value=\"0\">";
        // line 3550
        echo ($context["text_no"] ?? null);
        echo "</option>';
\t\t  html += '\t  </select></div>';
\t\t  html += '\t</div>';

\t\t  if (item['type'] == 'text') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 3556
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 3557
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'textarea') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 3563
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 3564
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'file') {
\t\t\t  html += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 3570
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 3571
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'date') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 3577
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 3578
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'time') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 3584
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 3585
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'datetime') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 3591
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 3592
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\t  html += '<div class=\"table-responsive\">';
\t\t\t  html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
\t\t\t  html += '  \t <thead>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 3601
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';

";
        // line 3603
        if (($context["prm_access_permission"] ?? null)) {
            echo "\t\t
\t\t\thtml += '        <td class=\"text-right\">";
            // line 3604
            echo ($context["entry_option_sku"] ?? null);
            echo "</td>';
";
        }
        // line 3605
        echo "\t
\t\t\t
\t\t\t  html += '        <td class=\"text-right\">";
        // line 3607
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 3608
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 3609
        echo ($context["entry_price"] ?? null);
        echo "</td>';

";
        // line 3611
        if (($context["prm_access_permission"] ?? null)) {
            echo "\t\t\t
\t\t\thtml += '        <td class=\"text-right\">";
            // line 3612
            echo ($context["entry_option_cost"] ?? null);
            echo "</td>';
";
        }
        // line 3613
        echo "\t\t\t\t
            
\t\t\t  html += '        <td class=\"text-right\">";
        // line 3615
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 3616
        echo ($context["entry_weight"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '  \t </thead>';
\t\t\t  html += '  \t <tbody>';
\t\t\t  html += '    </tbody>';
\t\t\t  html += '    <tfoot>';
\t\t\t  html += '      <tr>';
\t\t\t  
";
        // line 3625
        if (($context["prm_access_permission"] ?? null)) {
            // line 3626
            echo "\t\t\thtml += '        <td colspan=\"8\"></td>';
";
        } else {
            // line 3628
            echo "\t\t\thtml += '        <td colspan=\"6\"></td>';
";
        }
        // line 3630
        echo "            
\t\t\t  html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 3631
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '    </tfoot>';
\t\t\t  html += '  </table>';
\t\t\t  html += '</div>';

\t\t\t  html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

\t\t\t  for (i = 0; i < item['option_value'].length; i++) {
\t\t\t\t  html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
\t\t\t  }

\t\t\t  html += '  </select>';
\t\t\t  html += '</div>';
\t\t  }

\t\t  \$('#tab-option .tab-content').append(html);

\t\t  
";
        // line 3650
        if (($context["prm_access_permission"] ?? null)) {
            // line 3651
            echo "\t\t\$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove(); optRemoveGroup(this.form); restockquantity_opt(this.form); quantity_opt(this.form); totalcost_opt(this.form);\"></i>' + item['label'] + '</li>');
";
        } else {
            // line 3653
            echo "\t\t\$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');
";
        }
        // line 3654
        echo "\t\t
            

\t\t  \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\t\t  \$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\t  container: 'body',
\t\t\t  html: true
\t\t  });

\t\t  \$('.date').datetimepicker({
\t\t\t  language: '";
        // line 3665
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickTime: false
\t\t  });

\t\t  \$('.time').datetimepicker({
\t\t\t  language: '";
        // line 3670
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickDate: false
\t\t  });

\t\t  \$('.datetime').datetimepicker({
\t\t\t  language: '";
        // line 3675
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickDate: true,
\t\t\t  pickTime: true
\t\t  });

\t\t  option_row++;
\t  }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_value_row = ";
        // line 3685
        echo ($context["option_value_row"] ?? null);
        echo ";

  function addOptionValue(option_row) {
\t  html = '<tr id=\"option-value-row' + option_value_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\t  html += \$('#option-values' + option_row).html();
\t  html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
\t  
";
        // line 3693
        if (($context["prm_access_permission"] ?? null)) {
            // line 3694
            echo "\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][sku]\" value=\"\" placeholder=\"";
            echo ($context["entry_option_sku"] ?? null);
            echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" onKeyUp=\"if(!this.value) this.value=0; addOption(this.form); restockquantity_opt(this.form); quantity_opt(this.form); totalcost_opt(this.form);\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
            // line 3695
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control addOption\" style=\"border:thin solid #ebd685;\" />';
\thtml += '  <div style=\"text-align:center; padding-top:3px;\">";
            // line 3696
            echo ($context["entry_quantity"] ?? null);
            echo "</div>';\t
\thtml += '  </td>';\t
";
        } else {
            // line 3699
            echo "\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\" /></td>';
";
        }
        // line 3700
        echo "\t\t
            
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\t  html += '    <option value=\"1\">";
        // line 3703
        echo ($context["text_yes"] ?? null);
        echo "</option>';
\t  html += '    <option value=\"0\">";
        // line 3704
        echo ($context["text_no"] ?? null);
        echo "</option>';
\t  html += '  </select></td>';
\t  
";
        // line 3707
        if (($context["prm_access_permission"] ?? null)) {
            // line 3708
            echo "\thtml += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\" style=\"border:thin solid #b5e08b;\">';
\thtml += '    <option value=\"+\">+</option>';
\thtml += '    <option value=\"-\">-</option>';
\thtml += '  </select>';
\thtml += '  <input type=\"text\" onKeyUp=\"if(!this.value) this.value=0;\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
            // line 3712
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control option_price_new\" style=\"border:thin solid #b5e08b;\" />';
\thtml += '  <div style=\"text-align:center; padding-top:3px;\">";
            // line 3713
            echo ($context["text_option_price"] ?? null);
            echo "</div>';
\t";
            // line 3714
            if (($context["adv_price_tax"] ?? null)) {
                // line 3715
                echo "\thtml += '  <div style=\"padding-top:8px;\"><input type=\"text\" onKeyUp=\"if(!this.value) this.value=0;\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_tax]\" value=\"\" placeholder=\"";
                echo ($context["entry_price_tax"] ?? null);
                echo "\" class=\"form-control option_price_tax_new\" style=\"border:thin solid #b5e08b;\" /></div>';
\thtml += '  <div style=\"text-align:center; padding-top:3px;\">";
                // line 3716
                echo ($context["entry_option_price_tax"] ?? null);
                echo "</div>';
\t";
            }
            // line 3718
            echo "\thtml += '  </td>';
";
        } else {
            // line 3720
            echo "\thtml += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\thtml += '    <option value=\"+\">+</option>';
\thtml += '    <option value=\"-\">-</option>';
\thtml += '  </select>';
\thtml += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
            // line 3724
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>';
";
        }
        // line 3725
        echo "\t\t
            

";
        // line 3728
        if (($context["prm_access_permission"] ?? null)) {
            echo "\t
\thtml += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][cost_prefix]\" class=\"form-control\" style=\"border:thin solid #ed9999;\">';
\thtml += '    <option value=\"+\">+</option>';
\thtml += '    <option value=\"-\">-</option>';
\thtml += '  </select>';
\thtml += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_restock_quantity]\" value=\"\" /><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][costing_method]\" value=\"\" /><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][cost_amount]\" value=\"\" /><input type=\"text\" onKeyUp=\"if(!this.value) this.value=0;\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][cost]\" value=\"\" placeholder=\"";
            // line 3733
            echo ($context["entry_cost"] ?? null);
            echo "\" class=\"form-control\" style=\"border:thin solid #ed9999;\" />';
\thtml += '  <div style=\"text-align:center; padding-top:3px;\">";
            // line 3734
            echo ($context["text_cost_option_cost"] ?? null);
            echo "</div>';\t\t
\thtml += '  </td>';\t
";
        } else {
            // line 3737
            echo "\thtml += '    <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][sku]\" value=\"\" />';
\thtml += '    <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][cost_prefix]\" value=\"\" />';
\thtml += '    <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][costing_method]\" value=\"\" />';
\thtml += '    <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][cost_amount]\" value=\"\" />';\t\t
\thtml += '    <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][cost]\" value=\"\" />';
\thtml += '    <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_restock_quantity]\" value=\"\" />';
";
        }
        // line 3743
        echo "\t\t
            
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 3749
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 3754
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  
";
        // line 3756
        if (($context["prm_access_permission"] ?? null)) {
            // line 3757
            echo "\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove(); optRemove(this.form); restockquantity_opt(this.form); quantity_opt(this.form); totalcost_opt(this.form);\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
";
        } else {
            // line 3759
            echo "\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
";
        }
        // line 3760
        echo "\t\t
            
\t  html += '</tr>';

html += '<script type=\"text/javascript\">\$(document).ready(function(){\$(\"#option-value-row' + option_value_row + '\").data(\"row\", ' + option_value_row + ');});</script>';
\t  \$('#option-value' + option_row + ' tbody').append(html);
\t  \$('[rel=tooltip]').tooltip();

\t  option_value_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var discount_row = ";
        // line 3773
        echo ($context["discount_row"] ?? null);
        echo ";

  function addDiscount() {
\t  html = '<tr id=\"discount-row' + discount_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 3778
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 3779
            echo "\t  html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 3779);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 3779), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3781
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 3782
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 3783
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  
";
        // line 3785
        if (($context["prm_access_permission"] ?? null)) {
            // line 3786
            echo "\thtml += '  <td class=\"text-right\"><input type=\"text\" onKeyUp=\"if(!this.value) this.value=0;\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control discount_price\" style=\"border:thin solid #b5e08b;\" /></td>';
\thtml += '<script type=\"text/javascript\">';
\thtml += '\$(document).ready(function() { ';
\thtml += '\t\$(\"#form-product\").on(\"mouseup\", \"#discInitialize\", function() { ';
\thtml += '\tvar cost = parseFloat(\$(\"#cost\").val());';
\thtml += '\tif (isNaN(cost)) cost = 0;';
\thtml += '\tif (cost == 0) \$(\"#form-product #discount-row' + discount_row + ' .discount_cost\").val(0);';
\thtml += '\telse \$(\"#form-product #discount-row' + discount_row + ' .discount_cost\").val((cost).toFixed(4));';
\thtml += '\tvar price = parseFloat(\$(\"#form-product #discount-row' + discount_row + ' .discount_price\").val());';
\thtml += '\tif (isNaN(price)) price = 0;';
\thtml += '\tif (price == 0) \$(\"#form-product #discount-row' + discount_row + ' .discount_profit\").val(0);';
\thtml += '\telse \$(\"#form-product #discount-row' + discount_row + ' .discount_profit\").val((price - cost).toFixed(4));';
\thtml += '\t});\t';
\thtml += '}); ';\t
\thtml += '</script>';
\t";
            // line 3801
            if (($context["adv_price_tax"] ?? null)) {
                echo "\t\t
    html += '  <td class=\"text-right\"><input type=\"text\" onKeyUp=\"if(!this.value) this.value=0;\" name=\"product_discount[' + discount_row + '][price_tax]\" value=\"\" placeholder=\"";
                // line 3802
                echo ($context["entry_price_tax"] ?? null);
                echo "\" class=\"form-control discount_price_tax\" style=\"border:thin solid #b5e08b;\" /></td>';
    ";
            }
            // line 3804
            echo "\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][cost]\" value=\"\" placeholder=\"";
            echo ($context["entry_cost"] ?? null);
            echo "\" class=\"form-control discount_cost\" style=\"background-color:#f7e9e3; border:thin solid #ed9999; cursor:not-allowed;\" readonly /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][profit]\" value=\"\" placeholder=\"";
            // line 3805
            echo ($context["entry_profit"] ?? null);
            echo "\" class=\"form-control discount_profit\" style=\"background-color:#dfe7ee; border:thin solid #739cc3; cursor:not-allowed;\" readonly /></td>';
";
        } else {
            // line 3807
            echo "\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>';
";
        }
        // line 3808
        echo "\t\t
            
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 3810
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 3811
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 3812
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

html += '<script type=\"text/javascript\">\$(document).ready(function(){\$(\"#discount-row' + discount_row + '\").data(\"row\", ' + discount_row + ');});</script>';
\t  \$('#discount tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  pickTime: false
\t  });

\t  discount_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var special_row = ";
        // line 3827
        echo ($context["special_row"] ?? null);
        echo ";

  function addSpecial() {
\t  html = '<tr id=\"special-row' + special_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 3832
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 3833
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 3833);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 3833), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3835
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 3836
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  
";
        // line 3838
        if (($context["prm_access_permission"] ?? null)) {
            // line 3839
            echo "\thtml += '  <td class=\"text-right\"><input type=\"text\" onKeyUp=\"if(!this.value) this.value=0;\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control special_price\" style=\"border:thin solid #b5e08b;\" /></td>';
\thtml += '<script type=\"text/javascript\">';
\thtml += '\$(document).ready(function() { ';
\thtml += '\t\$(\"#form-product\").on(\"mouseup\", \"#specInitialize\", function() { ';
\thtml += '\tvar cost = parseFloat(\$(\"#cost\").val());';
\thtml += '\tif (isNaN(cost)) cost = 0;';
\thtml += '\tif (cost == 0) \$(\"#form-product #special-row' + special_row + ' .special_cost\").val(0);';
\thtml += '\telse \$(\"#form-product #special-row' + special_row + ' .special_cost\").val((cost).toFixed(4));';
\thtml += '\tvar price = parseFloat(\$(\"#form-product #special-row' + special_row + ' .special_price\").val());';
\thtml += '\tif (isNaN(price)) price = 0;';
\thtml += '\tif (price == 0) \$(\"#form-product #special-row' + special_row + ' .special_profit\").val(0);';
\thtml += '\telse \$(\"#form-product #special-row' + special_row + ' .special_profit\").val((price - cost).toFixed(4));';
\thtml += '\t});\t';
\thtml += '}); ';\t
\thtml += '</script>';
\t";
            // line 3854
            if (($context["adv_price_tax"] ?? null)) {
                echo "\t
    html += '  <td class=\"text-right\"><input type=\"text\" onKeyUp=\"if(!this.value) this.value=0;\" name=\"product_special[' + special_row + '][price_tax]\" value=\"\" placeholder=\"";
                // line 3855
                echo ($context["entry_price_tax"] ?? null);
                echo "\" class=\"form-control special_price_tax\" style=\"border:thin solid #b5e08b;\" /></td>';
    ";
            }
            // line 3857
            echo "\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][cost]\" value=\"\" placeholder=\"";
            echo ($context["entry_cost"] ?? null);
            echo "\" class=\"form-control special_cost\" style=\"background-color:#f7e9e3; border:thin solid #ed9999; cursor:not-allowed;\" readonly /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][profit]\" value=\"\" placeholder=\"";
            // line 3858
            echo ($context["entry_profit"] ?? null);
            echo "\" class=\"form-control special_profit\" style=\"background-color:#dfe7ee; border:thin solid #739cc3; cursor:not-allowed;\" readonly /></td>';
";
        } else {
            // line 3860
            echo "\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" /></td>';
";
        }
        // line 3861
        echo "\t\t
            
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 3863
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 3864
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 3865
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

html += '<script type=\"text/javascript\">\$(document).ready(function(){\$(\"#special-row' + special_row + '\").data(\"row\", ' + special_row + ');});</script>';
\t  \$('#special tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  language: '";
        // line 3872
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t  pickTime: false
\t  });

\t  special_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var image_row = ";
        // line 3881
        echo ($context["image_row"] ?? null);
        echo ";

  function addImage() {
\t  html = '<tr id=\"image-row' + image_row + '\">';
\t  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 3885
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 3886
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 3887
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#images tbody').append(html);

\t  image_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var recurring_row = ";
        // line 3897
        echo ($context["recurring_row"] ?? null);
        echo ";

  function addRecurring() {
\t  html = '<tr id=\"recurring-row' + recurring_row + '\">';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
    ";
        // line 3903
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 3904
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 3904);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 3904);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3906
        echo "\t  html += '    </select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
    ";
        // line 3910
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 3911
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 3911);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 3911);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3913
        echo "\t  html += '    <select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 3916
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
\t  html += '  </td>';
\t  html += '</tr>';

\t  \$('#tab-recurring table tbody').append(html);

\t  recurring_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
\t  language: '";
        // line 3928
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickTime: false
  });

  \$('.time').datetimepicker({
\t  language: '";
        // line 3933
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: false
  });

  \$('.datetime').datetimepicker({
\t  language: '";
        // line 3938
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: true,
\t  pickTime: true
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#language a:first').tab('show');
  \$('#option a:first').tab('show');
  //--></script>
</div>

\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(document).ready(function(){
\t\t\t        \$(\".alert-success\").show(0).delay(1000).fadeOut(2000)
\t\t\t\t});
\t\t\t\t</script> 
\t\t\t

";
        // line 3956
        if (($context["product_id"] ?? null)) {
            echo "\t
";
            // line 3957
            if (($context["prm_access_permission"] ?? null)) {
                // line 3958
                echo "<script type=\"text/javascript\">
function filter_history() {
\turl = 'index.php?route=catalog/product/filter_history&user_token=";
                // line 3960
                echo ($context["user_token"] ?? null);
                echo "&product_id=";
                echo ($context["product_ids"] ?? null);
                echo "';

\turl += '&page_history=' + \$('#page_history').val();

\tif (\$('#sort_history').val()) {
\t\turl += '&sort_history=' + \$('#sort_history').val();
\t}
\tif (\$('#order_history').val()) {
\t\turl += '&order_history=' + \$('#order_history').val();
\t}
\t\t
\tvar filter_history_date_start = \$('input[name=\\'filter_history_date_start\\']').val();
\t
\tif (filter_history_date_start) {
\t\turl += '&filter_history_date_start=' + encodeURIComponent(filter_history_date_start);
\t}

\tvar filter_history_date_end = \$('input[name=\\'filter_history_date_end\\']').val();
\t
\tif (filter_history_date_end) {
\t\turl += '&filter_history_date_end=' + encodeURIComponent(filter_history_date_end);
\t}
\t\t
\tvar filter_history_range = \$('select[name=\\'filter_history_range\\']').val();
\t
\tif (filter_history_range) {
\t\turl += '&filter_history_range=' + encodeURIComponent(filter_history_range);
\t}

\tvar filter_history_option = \$('select[name=\\'filter_history_option\\']').val();
\t
\tif (filter_history_option) {
\t\turl += '&filter_history_option=' + encodeURIComponent(filter_history_option);
\t}

\tvar filter_history_supplier = \$('select[name=\\'filter_history_supplier\\']').val();
\t
\tif (filter_history_supplier) {
\t\turl += '&filter_history_supplier=' + encodeURIComponent(filter_history_supplier);
\t}
\t\t\t
\t\$.ajax({
\t\turl: url,
\t\tdataType: 'json',
    \tbeforeSend: function(){\$( \".hloading\" ).show();},
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\t  \$('table.list_main_history tr:gt(0)').empty();
\t\t\t\t  \$(\"#historyTemplate\").tmpl(json.histories).appendTo(\"table.list_main_history\");
\t\t\t\t  if (document.getElementById('main_product').selected && document.getElementById('chart_all_time').selected) {
\t\t\t\t  \t\$('#tab_chart_history').slideDown('fast');
\t\t\t\t  } else {
\t\t\t\t  \t\$('#tab_chart_history').slideUp('fast');
\t\t\t\t  }
\t\t\t\t  \$('#pagination_history_count').html(json.results_history);
\t\t\t\t  \$('#pagination_history').html(json.pagination_history);
\t\t\t\t  \$('#page_history').val(1);
\t\t\t\t  \$( \".hloading\" ).hide();
\t\t\t  }
\t});
}

function filter_sale() {
\turl = 'index.php?route=catalog/product/filter_sale&user_token=";
                // line 4023
                echo ($context["user_token"] ?? null);
                echo "&product_id=";
                echo ($context["product_ids"] ?? null);
                echo "';

\turl += '&page_sale=' + \$('#page_sale').val();

\tif (\$('#sort_sale').val()) {
\t\turl += '&sort_sale=' + \$('#sort_sale').val();
\t}
\tif (\$('#order_sale').val()) {
\t\turl += '&order_sale=' + \$('#order_sale').val();
\t}
\t\t\t
\tvar filter_sale_date_start = \$('input[name=\\'filter_sale_date_start\\']').val();
\t
\tif (filter_sale_date_start) {
\t\turl += '&filter_sale_date_start=' + encodeURIComponent(filter_sale_date_start);
\t}

\tvar filter_sale_date_end = \$('input[name=\\'filter_sale_date_end\\']').val();
\t
\tif (filter_sale_date_end) {
\t\turl += '&filter_sale_date_end=' + encodeURIComponent(filter_sale_date_end);
\t}
\t\t
\tvar filter_sale_range = \$('select[name=\\'filter_sale_range\\']').val();
\t
\tif (filter_sale_range) {
\t\turl += '&filter_sale_range=' + encodeURIComponent(filter_sale_range);
\t}

\tvar sale_order_statuses = [];
\t\$('#sale_order_status option:selected').each(function() {
\t\tsale_order_statuses.push(\$(this).val());
\t});
\t
\tvar filter_sale_order_status = sale_order_statuses.join('_');
\t
\tif (filter_sale_order_status) {
\t\turl += '&filter_sale_order_status=' + encodeURIComponent(filter_sale_order_status);
\t}

\tvar sale_options = [];
\t\$('#sale_option option:selected').each(function() {
\t\tsale_options.push(\$(this).val());
\t});
\t
\tvar filter_sale_option = sale_options.join('_');
\t
\tif (filter_sale_option) {
\t\turl += '&filter_sale_option=' + encodeURIComponent(filter_sale_option);
\t}
\t\t
\t\$.ajax({
\t\turl: url,
\t\tdataType: 'json',
    \tbeforeSend: function(){\$( \".sloading\" ).show();},
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\t  \$('table.list_main_sale tr:gt(0)').empty();\t\t\t\t  
\t\t\t\t  \$(\"#saleTemplate\").tmpl(json.sales).appendTo(\"table.list_main_sale\");\t
\t\t\t\t  \$(\"#sale_totalTemplate\").tmpl(json.sales).appendTo(\"table.list_main_sale\");
\t\t\t\t  var seen = {};
\t\t\t\t\t\$('table.list_main_sale tr').each(function() {
    \t\t\t\tvar txt = \$(this).text();
    \t\t\t\tif (seen[txt])
        \t\t\t\t\$(this).remove();
    \t\t\t\telse
        \t\t\t\tseen[txt] = true;
\t\t\t\t  });
\t\t\t\t  \$('#pagination_sale_count').html(json.results_sale);
\t\t\t\t  \$('#pagination_sale').html(json.pagination_sale);
\t\t\t\t  \$('#page_sale').val(1);
\t\t\t\t  \$( \".sloading\" ).hide();
\t\t\t  }
\t});\t
} 
</script>
<script type=\"text/javascript\">
function gsUVhistory(e, t, v) {
    var n = String(e).split(\"?\");
    var r = \"\";
    if (n[1]) {
        var i = n[1].split(\"&\");
        for (var s = 0; s <= i.length; s++) {
            if (i[s]) {
                var o = i[s].split(\"=\");
                if (o[0] && o[0] == t) {
                    r = o[1];
                    if (v != undefined) {
                        i[s] = o[0] +'=' + v;
                    }
                    break;
                }
            }
        }
    }
    if (v != undefined) {
        return n[0] +'?'+ i.join('&');
    }
    return r
}

\$('#filter_history_range').on(\"change\", function() {
\t\$('#page_history').val(1);
\tfilter_history();
});

\$('#date-start-history').on(\"change\", function() {
\t\$('#page_history').val(1);
\tfilter_history();
});

\$('#date-end-history').on(\"change\", function() {
\t\$('#page_history').val(1);
\tfilter_history();
});

\$('#filter_history_option').on(\"change\", function() {
\t\$('#page_history').val(1);
\tfilter_history();
});

\$('#filter_history_supplier').on(\"change\", function() {
\t\$('#page_history').val(1);
\tfilter_history();
});

\$('#pagination_history').delegate('.pagination a', 'click', function() {
\tvar page_history = gsUVhistory(\$(this).prop('href'), 'page_history');
\t\$('#page_history').val(page_history);
\tfilter_history();
\treturn false;
});

\$('#head_history a').on(\"click\", function() {
\tvar sort_history = gsUVhistory(\$(this).prop('href'), 'sort_history');
\t\$('#sort_history').val(sort_history);
\tvar order_history = gsUVhistory(\$(this).prop('href'), 'order_history');
\t\$('#order_history').val(order_history);
\t\$(this).prop('href', gsUVhistory(\$(this).prop('href'), 'order_history', order_history=='DESC'?'ASC':'DESC'));
\t\$('#head_history a').removeAttr('class');
\tthis.className = order_history.toLowerCase();
\tfilter_history();
\treturn false;
});


function gsUVsale(e, t, v) {
    var n = String(e).split(\"?\");
    var r = \"\";
    if (n[1]) {
        var i = n[1].split(\"&\");
        for (var s = 0; s <= i.length; s++) {
            if (i[s]) {
                var o = i[s].split(\"=\");
                if (o[0] && o[0] == t) {
                    r = o[1];
                    if (v != undefined) {
                        i[s] = o[0] +'=' + v;
                    }
                    break;
                }
            }
        }
    }
    if (v != undefined) {
        return n[0] +'?'+ i.join('&');
    }
    return r
}

\$('#filter_sale_range').on(\"change\", function() {
\tfilter_sale();
});

\$('#date-start-sale').on(\"change\", function() {
\tfilter_sale();
});

\$('#date-end-sale').on(\"change\", function() {
\tfilter_sale();
});

\$('#sale_order_status').on(\"change\", function() {
\tfilter_sale();
});

\$('#sale_option').on(\"change\", function() {
\tfilter_sale();
});

\$('#pagination_sale').delegate('.pagination a', 'click', function() {
\tvar page_sale = gsUVsale(\$(this).prop('href'), 'page_sale');
\t\$('#page_sale').val(page_sale);
\tfilter_sale();
\treturn false;
});

\$('#head_sale a').on(\"click\", function() {
\tvar sort_sale = gsUVsale(\$(this).prop('href'), 'sort_sale');
\t\$('#sort_sale').val(sort_sale);
\tvar order_sale = gsUVsale(\$(this).prop('href'), 'order_sale');
\t\$('#order_sale').val(order_sale);
\t\$(this).prop('href', gsUVsale(\$(this).prop('href'), 'order_sale', order_sale=='DESC'?'ASC':'DESC'));
\t\$('#head_sale a').removeAttr('class');
\tthis.className = order_sale.toLowerCase();
\tfilter_sale();
\treturn false;
});

\$('.select').selectpicker();
</script>
<script type=\"text/javascript\">
\$(document).ready(function() {\t
\t\$('#sale_order_status').multiselect({
\t\tcheckboxName: 'sale_order_statuses[]',
\t\tincludeSelectAllOption: true,
\t\tenableFiltering: true,
\t\tselectAllText: '";
                // line 4240
                echo ($context["text_all"] ?? null);
                echo "',
\t\tallSelectedText: '";
                // line 4241
                echo ($context["text_selected"] ?? null);
                echo "',
\t\tnonSelectedText: '";
                // line 4242
                echo ($context["text_all_sstatus"] ?? null);
                echo "',
\t\tnumberDisplayed: 0,
\t\tdisableIfEmpty: true,
\t\tmaxHeight: 300
\t});
\t\$('#sale_option').multiselect({
\t\tcheckboxName: 'sale_options[]',
\t\tincludeSelectAllOption: true,
\t\tenableFiltering: true,
\t\tselectAllText: '";
                // line 4251
                echo ($context["text_all"] ?? null);
                echo "',
\t\tallSelectedText: '";
                // line 4252
                echo ($context["text_selected"] ?? null);
                echo "',
\t\tnonSelectedText: '";
                // line 4253
                echo ($context["text_all_soption"] ?? null);
                echo "',
\t\tnumberDisplayed: 0,
\t\tdisableIfEmpty: true,
\t\tmaxHeight: 300
\t});\t
});
</script> 
<script type=\"text/javascript\">
\$('#date-start-history').datetimepicker({
\tpickTime: false
});
\$('#date-end-history').datetimepicker({
\tpickTime: false
});

\$('#date-start-sale').datetimepicker({
\tpickTime: false
});
\$('#date-end-sale').datetimepicker({
\tpickTime: false
});
</script>
<script type=\"text/javascript\">
\tfunction history_download() {
\t\tvar url = 'index.php?route=catalog/product/download_history&user_token=";
                // line 4277
                echo ($context["user_token"] ?? null);
                echo "&product_id=";
                echo ($context["product_ids"] ?? null);
                echo "';
\t\tlocation = url;
\t}
\t
\tfunction history_delete() {
\t\t";
                // line 4282
                if (($context["modify_permission"] ?? null)) {
                    // line 4283
                    echo "\t\tif(confirm(\"";
                    echo ($context["text_confirm_delete_history"] ?? null);
                    echo "\") == false) return false;
\t\tvar durl = 'index.php?route=catalog/product/delete_history&user_token=";
                    // line 4284
                    echo ($context["user_token"] ?? null);
                    echo "&product_id=";
                    echo ($context["product_ids"] ?? null);
                    echo "';
\t\tlocation = durl;
\t\t";
                } else {
                    // line 4287
                    echo "\t\talert(\"You do not have permission to delete Stock History!\");
\t\t";
                }
                // line 4288
                echo "\t\t\t
\t}
</script>
";
            }
        }
        // line 4293
        echo "            
";
        // line 4294
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/product_form.twig";
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
        return array (  8812 => 4294,  8809 => 4293,  8802 => 4288,  8798 => 4287,  8790 => 4284,  8785 => 4283,  8783 => 4282,  8773 => 4277,  8746 => 4253,  8742 => 4252,  8738 => 4251,  8726 => 4242,  8722 => 4241,  8718 => 4240,  8496 => 4023,  8428 => 3960,  8424 => 3958,  8422 => 3957,  8418 => 3956,  8397 => 3938,  8389 => 3933,  8381 => 3928,  8366 => 3916,  8361 => 3913,  8350 => 3911,  8346 => 3910,  8340 => 3906,  8329 => 3904,  8325 => 3903,  8316 => 3897,  8303 => 3887,  8299 => 3886,  8293 => 3885,  8286 => 3881,  8274 => 3872,  8264 => 3865,  8260 => 3864,  8256 => 3863,  8252 => 3861,  8246 => 3860,  8241 => 3858,  8236 => 3857,  8231 => 3855,  8227 => 3854,  8208 => 3839,  8206 => 3838,  8201 => 3836,  8198 => 3835,  8187 => 3833,  8183 => 3832,  8175 => 3827,  8157 => 3812,  8153 => 3811,  8149 => 3810,  8145 => 3808,  8139 => 3807,  8134 => 3805,  8129 => 3804,  8124 => 3802,  8120 => 3801,  8101 => 3786,  8099 => 3785,  8094 => 3783,  8090 => 3782,  8087 => 3781,  8076 => 3779,  8072 => 3778,  8064 => 3773,  8049 => 3760,  8043 => 3759,  8037 => 3757,  8035 => 3756,  8030 => 3754,  8022 => 3749,  8014 => 3743,  8005 => 3737,  7999 => 3734,  7995 => 3733,  7987 => 3728,  7982 => 3725,  7977 => 3724,  7971 => 3720,  7967 => 3718,  7962 => 3716,  7957 => 3715,  7955 => 3714,  7951 => 3713,  7947 => 3712,  7941 => 3708,  7939 => 3707,  7933 => 3704,  7929 => 3703,  7924 => 3700,  7918 => 3699,  7912 => 3696,  7908 => 3695,  7903 => 3694,  7901 => 3693,  7890 => 3685,  7877 => 3675,  7869 => 3670,  7861 => 3665,  7848 => 3654,  7844 => 3653,  7840 => 3651,  7838 => 3650,  7816 => 3631,  7813 => 3630,  7809 => 3628,  7805 => 3626,  7803 => 3625,  7791 => 3616,  7787 => 3615,  7783 => 3613,  7778 => 3612,  7774 => 3611,  7769 => 3609,  7765 => 3608,  7761 => 3607,  7757 => 3605,  7752 => 3604,  7748 => 3603,  7743 => 3601,  7731 => 3592,  7727 => 3591,  7718 => 3585,  7714 => 3584,  7705 => 3578,  7701 => 3577,  7692 => 3571,  7688 => 3570,  7679 => 3564,  7675 => 3563,  7666 => 3557,  7662 => 3556,  7653 => 3550,  7649 => 3549,  7644 => 3547,  7618 => 3524,  7610 => 3519,  7582 => 3494,  7565 => 3480,  7562 => 3479,  7545 => 3477,  7541 => 3476,  7536 => 3474,  7529 => 3470,  7500 => 3444,  7468 => 3415,  7436 => 3386,  7404 => 3357,  7379 => 3335,  7371 => 3330,  7349 => 3310,  7343 => 3306,  7337 => 3302,  7331 => 3298,  7329 => 3297,  7319 => 3290,  7313 => 3286,  7307 => 3282,  7301 => 3278,  7299 => 3277,  7289 => 3270,  7279 => 3263,  7275 => 3262,  7269 => 3258,  7263 => 3255,  7260 => 3254,  7256 => 3252,  7251 => 3250,  7247 => 3249,  7242 => 3248,  7237 => 3246,  7233 => 3245,  7228 => 3244,  7226 => 3243,  7222 => 3242,  7218 => 3241,  7214 => 3240,  7210 => 3239,  7206 => 3238,  7202 => 3237,  7198 => 3236,  7195 => 3235,  7188 => 3233,  7183 => 3231,  7179 => 3230,  7174 => 3229,  7169 => 3227,  7165 => 3226,  7160 => 3225,  7158 => 3224,  7154 => 3223,  7150 => 3222,  7146 => 3221,  7142 => 3220,  7138 => 3219,  7134 => 3218,  7128 => 3217,  7124 => 3216,  7118 => 3215,  7115 => 3214,  7110 => 3213,  7108 => 3212,  7102 => 3208,  7094 => 3207,  7084 => 3205,  7082 => 3204,  7079 => 3203,  7071 => 3202,  7061 => 3200,  7059 => 3199,  7056 => 3198,  7048 => 3197,  7038 => 3195,  7036 => 3194,  7033 => 3193,  7025 => 3192,  7015 => 3190,  7013 => 3189,  7010 => 3188,  7002 => 3187,  6992 => 3185,  6990 => 3184,  6987 => 3183,  6979 => 3182,  6969 => 3180,  6967 => 3179,  6964 => 3178,  6956 => 3177,  6946 => 3175,  6944 => 3174,  6941 => 3173,  6933 => 3172,  6923 => 3170,  6921 => 3169,  6918 => 3168,  6910 => 3167,  6900 => 3165,  6898 => 3164,  6895 => 3163,  6887 => 3162,  6877 => 3160,  6875 => 3159,  6872 => 3158,  6864 => 3157,  6854 => 3155,  6852 => 3154,  6849 => 3153,  6841 => 3152,  6831 => 3150,  6829 => 3149,  6820 => 3142,  6814 => 3141,  6804 => 3139,  6794 => 3137,  6791 => 3136,  6787 => 3135,  6782 => 3133,  6778 => 3131,  6772 => 3130,  6764 => 3128,  6756 => 3126,  6753 => 3125,  6749 => 3124,  6744 => 3122,  6736 => 3117,  6732 => 3116,  6726 => 3113,  6722 => 3112,  6718 => 3110,  6712 => 3109,  6700 => 3107,  6688 => 3105,  6685 => 3104,  6681 => 3103,  6676 => 3101,  6653 => 3081,  6649 => 3080,  6645 => 3079,  6550 => 2986,  6544 => 2983,  6541 => 2982,  6535 => 2979,  6532 => 2978,  6530 => 2977,  6520 => 2970,  6516 => 2969,  6510 => 2965,  6504 => 2962,  6501 => 2961,  6498 => 2960,  6489 => 2957,  6485 => 2956,  6481 => 2955,  6477 => 2954,  6473 => 2953,  6469 => 2952,  6465 => 2951,  6461 => 2950,  6457 => 2949,  6453 => 2948,  6450 => 2947,  6440 => 2944,  6433 => 2943,  6423 => 2940,  6416 => 2939,  6414 => 2938,  6409 => 2936,  6402 => 2934,  6398 => 2933,  6392 => 2929,  6384 => 2928,  6374 => 2926,  6372 => 2925,  6369 => 2924,  6361 => 2923,  6351 => 2921,  6349 => 2920,  6346 => 2919,  6338 => 2918,  6328 => 2916,  6326 => 2915,  6323 => 2914,  6315 => 2913,  6305 => 2911,  6303 => 2910,  6300 => 2909,  6292 => 2908,  6282 => 2906,  6280 => 2905,  6277 => 2904,  6269 => 2903,  6259 => 2901,  6257 => 2900,  6254 => 2899,  6246 => 2898,  6236 => 2896,  6234 => 2895,  6231 => 2894,  6223 => 2893,  6213 => 2891,  6211 => 2890,  6208 => 2889,  6198 => 2888,  6186 => 2886,  6184 => 2885,  6181 => 2884,  6173 => 2883,  6163 => 2881,  6161 => 2880,  6158 => 2879,  6148 => 2878,  6136 => 2876,  6134 => 2875,  6131 => 2874,  6123 => 2873,  6113 => 2871,  6111 => 2870,  6104 => 2865,  6067 => 2831,  6063 => 2829,  6057 => 2827,  6055 => 2826,  6041 => 2814,  6037 => 2812,  6031 => 2810,  6029 => 2809,  5913 => 2696,  5903 => 2689,  5891 => 2684,  5883 => 2682,  5876 => 2680,  5871 => 2679,  5867 => 2678,  5863 => 2677,  5859 => 2676,  5855 => 2675,  5844 => 2671,  5828 => 2669,  5813 => 2667,  5808 => 2666,  5804 => 2665,  5800 => 2664,  5796 => 2663,  5792 => 2662,  5784 => 2657,  5780 => 2656,  5774 => 2653,  5770 => 2652,  5766 => 2650,  5760 => 2649,  5746 => 2647,  5733 => 2645,  5728 => 2644,  5724 => 2643,  5719 => 2641,  5708 => 2635,  5690 => 2620,  5686 => 2619,  5682 => 2618,  5609 => 2547,  5607 => 2546,  5603 => 2545,  5596 => 2540,  5586 => 2535,  5580 => 2534,  5571 => 2530,  5567 => 2528,  5558 => 2524,  5554 => 2522,  5551 => 2521,  5547 => 2520,  5540 => 2516,  5536 => 2515,  5533 => 2514,  5529 => 2513,  5522 => 2509,  5518 => 2508,  5506 => 2498,  5493 => 2495,  5487 => 2493,  5485 => 2492,  5465 => 2490,  5461 => 2489,  5457 => 2488,  5454 => 2487,  5450 => 2486,  5443 => 2482,  5439 => 2481,  5431 => 2476,  5423 => 2470,  5412 => 2467,  5408 => 2466,  5405 => 2465,  5401 => 2464,  5393 => 2459,  5389 => 2458,  5377 => 2451,  5370 => 2449,  5359 => 2441,  5352 => 2436,  5346 => 2435,  5344 => 2434,  5337 => 2432,  5329 => 2431,  5315 => 2430,  5310 => 2429,  5305 => 2428,  5303 => 2427,  5294 => 2421,  5290 => 2420,  5274 => 2411,  5266 => 2406,  5252 => 2395,  5248 => 2393,  5244 => 2392,  5239 => 2389,  5235 => 2387,  5232 => 2386,  5230 => 2385,  5224 => 2381,  5218 => 2380,  5216 => 2379,  5208 => 2376,  5198 => 2371,  5187 => 2367,  5174 => 2361,  5168 => 2357,  5158 => 2356,  5149 => 2354,  5141 => 2353,  5138 => 2352,  5128 => 2351,  5126 => 2350,  5117 => 2346,  5111 => 2345,  5103 => 2340,  5099 => 2339,  5093 => 2336,  5088 => 2334,  5082 => 2331,  5078 => 2330,  5071 => 2326,  5062 => 2324,  5058 => 2323,  5049 => 2321,  5044 => 2318,  5038 => 2317,  5029 => 2313,  5025 => 2311,  5016 => 2307,  5012 => 2305,  5009 => 2304,  5005 => 2303,  4999 => 2300,  4994 => 2299,  4989 => 2298,  4987 => 2297,  4978 => 2291,  4974 => 2290,  4970 => 2288,  4965 => 2287,  4960 => 2286,  4954 => 2284,  4951 => 2283,  4949 => 2282,  4944 => 2280,  4940 => 2279,  4936 => 2278,  4922 => 2267,  4918 => 2265,  4914 => 2264,  4909 => 2261,  4905 => 2259,  4902 => 2258,  4900 => 2257,  4894 => 2253,  4888 => 2252,  4886 => 2251,  4878 => 2248,  4868 => 2243,  4857 => 2239,  4844 => 2233,  4838 => 2229,  4828 => 2228,  4819 => 2226,  4810 => 2225,  4800 => 2223,  4798 => 2222,  4789 => 2218,  4783 => 2217,  4775 => 2212,  4771 => 2211,  4765 => 2208,  4760 => 2206,  4754 => 2203,  4750 => 2202,  4743 => 2198,  4734 => 2196,  4730 => 2195,  4721 => 2193,  4713 => 2192,  4710 => 2191,  4704 => 2190,  4696 => 2188,  4688 => 2186,  4685 => 2185,  4681 => 2184,  4677 => 2183,  4672 => 2182,  4667 => 2181,  4665 => 2180,  4656 => 2174,  4652 => 2173,  4648 => 2171,  4643 => 2170,  4638 => 2169,  4632 => 2167,  4629 => 2166,  4627 => 2165,  4622 => 2163,  4618 => 2162,  4614 => 2161,  4610 => 2160,  4596 => 2149,  4589 => 2144,  4583 => 2143,  4581 => 2142,  4574 => 2140,  4569 => 2137,  4563 => 2136,  4554 => 2132,  4550 => 2130,  4541 => 2126,  4537 => 2124,  4534 => 2123,  4530 => 2122,  4524 => 2119,  4519 => 2116,  4513 => 2115,  4504 => 2111,  4500 => 2109,  4491 => 2105,  4487 => 2103,  4484 => 2102,  4480 => 2101,  4474 => 2098,  4469 => 2097,  4464 => 2096,  4462 => 2095,  4453 => 2089,  4449 => 2088,  4433 => 2079,  4431 => 2078,  4428 => 2077,  4422 => 2074,  4419 => 2073,  4407 => 2069,  4403 => 2067,  4398 => 2066,  4396 => 2065,  4390 => 2062,  4380 => 2057,  4376 => 2055,  4372 => 2054,  4366 => 2051,  4360 => 2047,  4354 => 2046,  4352 => 2045,  4348 => 2043,  4340 => 2042,  4330 => 2040,  4328 => 2039,  4317 => 2037,  4313 => 2035,  4305 => 2029,  4297 => 2023,  4294 => 2022,  4286 => 2016,  4278 => 2010,  4276 => 2009,  4268 => 2006,  4258 => 2005,  4254 => 2003,  4246 => 1997,  4238 => 1991,  4235 => 1990,  4227 => 1984,  4219 => 1978,  4217 => 1977,  4209 => 1974,  4205 => 1972,  4196 => 1971,  4188 => 1970,  4180 => 1969,  4172 => 1968,  4169 => 1967,  4161 => 1966,  4159 => 1965,  4151 => 1963,  4149 => 1962,  4140 => 1961,  4133 => 1956,  4115 => 1955,  4110 => 1952,  4092 => 1951,  4076 => 1946,  4072 => 1944,  4058 => 1943,  4036 => 1940,  4023 => 1934,  4020 => 1933,  4016 => 1931,  4012 => 1929,  4009 => 1928,  4005 => 1926,  4001 => 1924,  3999 => 1923,  3993 => 1922,  3983 => 1914,  3973 => 1913,  3963 => 1911,  3961 => 1910,  3958 => 1909,  3948 => 1908,  3938 => 1906,  3936 => 1905,  3933 => 1904,  3923 => 1903,  3913 => 1901,  3911 => 1900,  3901 => 1899,  3893 => 1894,  3888 => 1891,  3877 => 1890,  3872 => 1887,  3864 => 1881,  3856 => 1875,  3853 => 1874,  3845 => 1868,  3837 => 1862,  3835 => 1861,  3826 => 1858,  3821 => 1855,  3815 => 1853,  3803 => 1850,  3800 => 1849,  3798 => 1848,  3793 => 1846,  3781 => 1843,  3778 => 1842,  3774 => 1840,  3770 => 1838,  3767 => 1837,  3763 => 1835,  3759 => 1833,  3757 => 1832,  3751 => 1831,  3745 => 1828,  3739 => 1824,  3732 => 1820,  3728 => 1819,  3724 => 1817,  3717 => 1813,  3713 => 1812,  3709 => 1810,  3707 => 1809,  3699 => 1806,  3695 => 1804,  3683 => 1803,  3676 => 1799,  3656 => 1796,  3650 => 1793,  3624 => 1790,  3610 => 1785,  3596 => 1784,  3590 => 1783,  3584 => 1782,  3570 => 1777,  3560 => 1776,  3550 => 1775,  3539 => 1773,  3513 => 1772,  3503 => 1771,  3493 => 1770,  3483 => 1769,  3473 => 1768,  3463 => 1767,  3453 => 1766,  3447 => 1765,  3435 => 1762,  3425 => 1761,  3419 => 1760,  3413 => 1759,  3405 => 1756,  3394 => 1750,  3384 => 1745,  3371 => 1741,  3361 => 1740,  3354 => 1738,  3346 => 1737,  3338 => 1736,  3331 => 1734,  3319 => 1731,  3309 => 1730,  3299 => 1729,  3288 => 1727,  3262 => 1726,  3252 => 1725,  3242 => 1724,  3232 => 1723,  3222 => 1722,  3212 => 1721,  3202 => 1720,  3195 => 1718,  3187 => 1717,  3179 => 1716,  3173 => 1715,  3167 => 1714,  3153 => 1710,  3151 => 1709,  3142 => 1707,  3138 => 1705,  3135 => 1704,  3129 => 1703,  3120 => 1699,  3116 => 1697,  3107 => 1693,  3103 => 1691,  3101 => 1690,  3098 => 1689,  3094 => 1688,  3091 => 1687,  3089 => 1686,  3081 => 1683,  3076 => 1682,  3072 => 1681,  3063 => 1675,  3059 => 1674,  3055 => 1672,  3050 => 1671,  3046 => 1670,  3041 => 1668,  3037 => 1667,  3033 => 1666,  3029 => 1664,  3024 => 1663,  3020 => 1662,  3015 => 1660,  3009 => 1657,  3006 => 1656,  3003 => 1655,  2988 => 1649,  2980 => 1646,  2977 => 1645,  2974 => 1644,  2959 => 1638,  2951 => 1635,  2948 => 1634,  2945 => 1633,  2930 => 1627,  2922 => 1624,  2919 => 1623,  2916 => 1622,  2903 => 1618,  2896 => 1616,  2893 => 1615,  2890 => 1614,  2877 => 1610,  2870 => 1608,  2867 => 1607,  2864 => 1606,  2851 => 1602,  2844 => 1600,  2841 => 1599,  2839 => 1598,  2832 => 1593,  2825 => 1589,  2821 => 1588,  2817 => 1586,  2810 => 1582,  2806 => 1581,  2802 => 1579,  2800 => 1578,  2792 => 1575,  2785 => 1573,  2766 => 1571,  2761 => 1570,  2756 => 1569,  2753 => 1568,  2751 => 1567,  2743 => 1562,  2740 => 1561,  2734 => 1560,  2732 => 1559,  2729 => 1558,  2717 => 1556,  2703 => 1554,  2701 => 1553,  2698 => 1552,  2693 => 1551,  2691 => 1550,  2678 => 1540,  2671 => 1535,  2665 => 1534,  2663 => 1533,  2656 => 1531,  2653 => 1530,  2631 => 1528,  2627 => 1527,  2615 => 1526,  2610 => 1525,  2605 => 1524,  2603 => 1523,  2594 => 1517,  2590 => 1516,  2579 => 1507,  2570 => 1505,  2563 => 1504,  2559 => 1503,  2555 => 1502,  2548 => 1500,  2542 => 1496,  2533 => 1494,  2526 => 1493,  2522 => 1492,  2518 => 1491,  2511 => 1489,  2505 => 1485,  2497 => 1483,  2492 => 1482,  2487 => 1481,  2482 => 1479,  2477 => 1478,  2475 => 1477,  2472 => 1476,  2468 => 1475,  2463 => 1473,  2457 => 1469,  2448 => 1467,  2441 => 1466,  2437 => 1465,  2433 => 1464,  2426 => 1462,  2420 => 1458,  2411 => 1456,  2404 => 1455,  2400 => 1454,  2396 => 1453,  2389 => 1451,  2378 => 1447,  2371 => 1445,  2360 => 1439,  2355 => 1437,  2347 => 1431,  2340 => 1427,  2336 => 1426,  2332 => 1424,  2325 => 1420,  2321 => 1419,  2317 => 1417,  2315 => 1416,  2307 => 1411,  2299 => 1405,  2293 => 1404,  2284 => 1400,  2280 => 1398,  2271 => 1394,  2267 => 1392,  2264 => 1391,  2260 => 1390,  2252 => 1385,  2243 => 1381,  2238 => 1379,  2230 => 1373,  2224 => 1372,  2215 => 1368,  2211 => 1366,  2202 => 1362,  2198 => 1360,  2195 => 1359,  2191 => 1358,  2183 => 1353,  2172 => 1347,  2164 => 1344,  2156 => 1341,  2149 => 1337,  2138 => 1331,  2132 => 1328,  2126 => 1324,  2121 => 1323,  2118 => 1322,  2113 => 1320,  2110 => 1319,  2107 => 1318,  2102 => 1317,  2099 => 1316,  2094 => 1314,  2091 => 1313,  2089 => 1312,  2084 => 1310,  2076 => 1304,  2070 => 1303,  2061 => 1299,  2057 => 1297,  2048 => 1293,  2044 => 1291,  2041 => 1290,  2037 => 1289,  2027 => 1284,  2019 => 1278,  2012 => 1274,  2008 => 1273,  2004 => 1271,  1997 => 1267,  1993 => 1266,  1989 => 1264,  1987 => 1263,  1979 => 1258,  1970 => 1254,  1963 => 1252,  1958 => 1249,  1947 => 1246,  1942 => 1244,  1937 => 1243,  1933 => 1242,  1928 => 1240,  1924 => 1239,  1920 => 1238,  1916 => 1237,  1912 => 1236,  1908 => 1235,  1904 => 1234,  1898 => 1233,  1893 => 1231,  1885 => 1225,  1879 => 1224,  1870 => 1220,  1866 => 1218,  1857 => 1214,  1853 => 1212,  1850 => 1211,  1846 => 1210,  1840 => 1207,  1834 => 1204,  1825 => 1200,  1820 => 1198,  1817 => 1197,  1811 => 1193,  1805 => 1192,  1797 => 1190,  1790 => 1188,  1785 => 1187,  1781 => 1186,  1777 => 1185,  1771 => 1182,  1758 => 1172,  1752 => 1169,  1746 => 1166,  1737 => 1162,  1725 => 1153,  1716 => 1149,  1712 => 1148,  1704 => 1145,  1694 => 1142,  1690 => 1141,  1670 => 1132,  1666 => 1131,  1660 => 1130,  1652 => 1127,  1646 => 1126,  1640 => 1125,  1620 => 1108,  1614 => 1105,  1609 => 1103,  1603 => 1100,  1597 => 1097,  1593 => 1096,  1589 => 1095,  1578 => 1089,  1570 => 1083,  1564 => 1082,  1558 => 1080,  1556 => 1079,  1553 => 1078,  1547 => 1077,  1541 => 1075,  1539 => 1074,  1536 => 1073,  1530 => 1072,  1524 => 1070,  1522 => 1069,  1512 => 1066,  1507 => 1063,  1499 => 1060,  1493 => 1058,  1491 => 1057,  1484 => 1055,  1480 => 1054,  1476 => 1053,  1469 => 1048,  1463 => 1047,  1455 => 1045,  1448 => 1043,  1443 => 1042,  1439 => 1041,  1435 => 1040,  1429 => 1037,  949 => 560,  867 => 481,  801 => 418,  775 => 394,  773 => 393,  765 => 390,  759 => 387,  750 => 383,  743 => 381,  734 => 377,  727 => 375,  718 => 371,  711 => 369,  702 => 365,  695 => 363,  686 => 359,  679 => 357,  670 => 353,  663 => 351,  658 => 348,  652 => 347,  650 => 346,  644 => 345,  639 => 343,  633 => 339,  616 => 335,  607 => 333,  594 => 329,  587 => 327,  574 => 323,  567 => 321,  562 => 318,  556 => 317,  554 => 316,  544 => 315,  537 => 313,  522 => 309,  515 => 307,  510 => 304,  504 => 303,  502 => 302,  492 => 301,  485 => 299,  479 => 297,  475 => 296,  472 => 295,  455 => 293,  451 => 292,  444 => 287,  436 => 284,  432 => 283,  430 => 282,  425 => 280,  421 => 279,  417 => 278,  413 => 277,  407 => 276,  401 => 275,  397 => 274,  391 => 273,  387 => 272,  383 => 271,  377 => 270,  373 => 269,  369 => 267,  364 => 264,  337 => 240,  332 => 237,  330 => 236,  129 => 38,  126 => 37,  124 => 36,  119 => 34,  113 => 31,  109 => 29,  101 => 25,  99 => 24,  96 => 23,  90 => 21,  88 => 20,  82 => 16,  71 => 14,  67 => 13,  62 => 11,  56 => 10,  52 => 9,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_form.twig", "");
    }
}
