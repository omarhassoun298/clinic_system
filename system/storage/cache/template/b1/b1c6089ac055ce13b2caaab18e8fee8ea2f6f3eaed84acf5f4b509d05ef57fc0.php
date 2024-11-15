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

/* customer/customer_form.twig */
class __TwigTemplate_720945cfaddc3b6373564262c3523a779e9d4be72d7b9bbed1f67ec885762801 extends Template
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
        ";
        // line 6
        if (($context["orders"] ?? null)) {
            // line 7
            echo "          <a href=\"";
            echo ($context["orders"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_order"] ?? null);
            echo "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-receipt\"></i></a>
        ";
        }
        // line 9
        echo "        <button type=\"submit\" form=\"form-customer\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 10
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
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
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 21
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-customer\" action=\"";
        // line 23
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 25
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-address\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        echo ($context["tab_address"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-affiliate\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        echo ($context["tab_affiliate"] ?? null);
        echo "</a></li>
            ";
        // line 28
        if (($context["customer_id"] ?? null)) {
            // line 29
            echo "            <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            echo ($context["tab_history"] ?? null);
            echo "</a></li>
            <li><a href=\"#tab-transaction\" data-toggle=\"tab\">";
            // line 30
            echo ($context["tab_transaction"] ?? null);
            echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
            // line 31
            echo ($context["tab_reward"] ?? null);
            echo "</a></li>
            <li><a href=\"#tab-ip\" data-toggle=\"tab\">";
            // line 32
            echo ($context["tab_ip"] ?? null);
            echo "</a></li>
            ";
        }
        // line 34
        echo "          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <fieldset>
                <legend>";
        // line 38
        echo ($context["text_customer"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 40
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                      ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 44
            echo "                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 44);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 44) == ($context["customer_group_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 44);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 50
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"firstname\" value=\"";
        // line 52
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                    <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 57
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"lastname\" value=\"";
        // line 59
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
                    <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 64
        echo ($context["entry_email"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"email\" value=\"";
        // line 66
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                    <div id=\"error-email\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3";
        // line 70
        if (($context["config_telephone_required"] ?? null)) {
            echo " required";
        }
        echo "\">
                  <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 71
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"telephone\" value=\"";
        // line 73
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                    <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 78
            echo "
                  ";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 79) == "account")) {
                // line 80
                echo "
                    ";
                // line 81
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 81) == "select")) {
                    // line 82
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 83);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"custom_field[";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85);
                    echo "]\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85);
                    echo "\" class=\"form-select\">
                            <option value=\"\">";
                    // line 86
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                            ";
                    // line 87
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 87));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 88
                        echo "                              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 88);
                        echo "\"";
                        if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 88)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 88) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 88)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 88);
                        echo "</option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "                          </select>
                          <div id=\"error-custom-field-";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 95
                echo "
                    ";
                // line 96
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 96) == "radio")) {
                    // line 97
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 98);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
                    // line 101
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 101));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 102
                        echo "                              <div class=\"form-check\">
                                <input type=\"radio\" name=\"custom_field[";
                        // line 103
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 103);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 103);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 103) == (($__internal_compile_3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 103);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 103);
                        echo "</label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 106
                    echo "                          </div>
                          <div id=\"error-custom-field-";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 111
                echo "
                    ";
                // line 112
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 112) == "checkbox")) {
                    // line 113
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 114);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-";
                    // line 116
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
                    // line 117
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 117));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 118
                        echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"custom_field[";
                        // line 119
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 119);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 119);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 119), (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 119);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 119);
                        echo "</label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 122
                    echo "                          </div>
                          <div id=\"error-custom-field-";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 127
                echo "
                    ";
                // line 128
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 128) == "text")) {
                    // line 129
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 130
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 130);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 132
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132)] ?? null) : null)) ? ((($__internal_compile_7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 132)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 132);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                    echo "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                    // line 133
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 137
                echo "
                    ";
                // line 138
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 138) == "textarea")) {
                    // line 139
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 140);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"custom_field[";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 142);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_8 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142)] ?? null) : null)) ? ((($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 142)));
                    echo "</textarea>
                          <div id=\"error-custom-field-";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 147
                echo "
                    ";
                // line 148
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 148) == "file")) {
                    // line 149
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 150);
                    echo "</label>
                        <div class=\"col-sm-10\">

                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 154
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                            <input type=\"text\" name=\"custom_field[";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_10 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155)] ?? null) : null)) ? ((($__internal_compile_11 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155)] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                    echo "\" class=\"form-control\" readonly/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                    echo "\"";
                    if ( !(($__internal_compile_12 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 157
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                    echo "\"";
                    if ( !(($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                          </div>

                          <div id=\"error-custom-field-";
                    // line 160
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 164
                echo "
                    ";
                // line 165
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 165) == "date")) {
                    // line 166
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 167);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_14 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170)] ?? null) : null)) ? ((($__internal_compile_15 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 170)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 170);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                    echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                          <div id=\"error-custom-field-";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 177
                echo "
                    ";
                // line 178
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 178) == "time")) {
                    // line 179
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 180);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183)] ?? null) : null)) ? ((($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 183)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 183);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                    echo "\" class=\"form-control time\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                          <div id=\"error-custom-field-";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 190
                echo "
                    ";
                // line 191
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 191) == "datetime")) {
                    // line 192
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 193);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 196
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_18 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196)] ?? null) : null)) ? ((($__internal_compile_19 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 196)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 196);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                    echo "\" class=\"form-control datetime\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                          <div id=\"error-custom-field-";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 203
                echo "
                  ";
            }
            // line 205
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "              </fieldset>
              <fieldset>
                <legend>";
        // line 208
        echo ($context["text_password"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-password\" class=\"col-sm-2 col-form-label\">";
        // line 210
        echo ($context["entry_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"password\" value=\"";
        // line 212
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-confirm\" class=\"col-sm-2 col-form-label\">";
        // line 217
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"confirm\" value=\"";
        // line 219
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                    <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 225
        echo ($context["text_other"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 227
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"newsletter\" value=\"0\"/> <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"";
        // line 230
        if (($context["newsletter"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 235
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 238
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 243
        echo ($context["entry_safe"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"safe\" value=\"0\"/> <input type=\"checkbox\" name=\"safe\" value=\"1\" id=\"input-safe\" class=\"form-check-input\"";
        // line 246
        if (($context["safe"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                    <div class=\"form-text\">";
        // line 248
        echo ($context["help_safe"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-address\" class=\"tab-pane\">
              ";
        // line 254
        $context["address_row"] = 0;
        // line 255
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 256
            echo "                <fieldset id=\"address-row-";
            echo ($context["address_row"] ?? null);
            echo "\">
                  <legend>";
            // line 257
            echo ($context["text_address"] ?? null);
            echo " ";
            echo (($context["address_row"] ?? null) + 1);
            echo " <button type=\"button\" onclick=\"\$('#address-row-";
            echo ($context["address_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger btn-sm float-end\"><i class=\"fa-solid fa-minus-circle\"></i></button></legend>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-address-";
            // line 259
            echo ($context["address_row"] ?? null);
            echo "-firstname\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_firstname"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 261
            echo ($context["address_row"] ?? null);
            echo "][firstname]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 261);
            echo "\" placeholder=\"";
            echo ($context["entry_firstname"] ?? null);
            echo "\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-firstname\" class=\"form-control\"/>
                      <div id=\"error-address-";
            // line 262
            echo ($context["address_row"] ?? null);
            echo "-firstname\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-address-";
            // line 266
            echo ($context["address_row"] ?? null);
            echo "-lastname\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_lastname"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 268
            echo ($context["address_row"] ?? null);
            echo "][lastname]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 268);
            echo "\" placeholder=\"";
            echo ($context["entry_lastname"] ?? null);
            echo "\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-lastname\" class=\"form-control\"/>
                      <div id=\"error-address-";
            // line 269
            echo ($context["address_row"] ?? null);
            echo "-lastname\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-address-";
            // line 273
            echo ($context["address_row"] ?? null);
            echo "-company\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_company"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 275
            echo ($context["address_row"] ?? null);
            echo "][company]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 275);
            echo "\" placeholder=\"";
            echo ($context["entry_company"] ?? null);
            echo "\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-company\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-address-";
            // line 279
            echo ($context["address_row"] ?? null);
            echo "-address-1\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_address_1"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 281
            echo ($context["address_row"] ?? null);
            echo "][address_1]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 281);
            echo "\" placeholder=\"";
            echo ($context["entry_address_1"] ?? null);
            echo "\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-address-1\" class=\"form-control\"/>
                      <div id=\"error-address-";
            // line 282
            echo ($context["address_row"] ?? null);
            echo "-address-1\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-address-";
            // line 286
            echo ($context["address_row"] ?? null);
            echo "-address-2\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_address_2"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 288
            echo ($context["address_row"] ?? null);
            echo "][address_2]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_2", [], "any", false, false, false, 288);
            echo "\" placeholder=\"";
            echo ($context["entry_address_2"] ?? null);
            echo "\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-address-2\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-address-";
            // line 292
            echo ($context["address_row"] ?? null);
            echo "-city\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_city"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 294
            echo ($context["address_row"] ?? null);
            echo "][city]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 294);
            echo "\" placeholder=\"";
            echo ($context["entry_city"] ?? null);
            echo "\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-city\" class=\"form-control\"/>
                      <div id=\"error-address-";
            // line 295
            echo ($context["address_row"] ?? null);
            echo "-city\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-address-";
            // line 299
            echo ($context["address_row"] ?? null);
            echo "-postcode\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_postcode"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 301
            echo ($context["address_row"] ?? null);
            echo "][postcode]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 301);
            echo "\" placeholder=\"";
            echo ($context["entry_postcode"] ?? null);
            echo "\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-postcode\" class=\"form-control\"/>
                      <div id=\"error-address-";
            // line 302
            echo ($context["address_row"] ?? null);
            echo "-postcode\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-address-";
            // line 306
            echo ($context["address_row"] ?? null);
            echo "-country\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_country"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"address[";
            // line 308
            echo ($context["address_row"] ?? null);
            echo "][country_id]\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-country\" class=\"form-select\" data-address-row=\"";
            echo ($context["address_row"] ?? null);
            echo "\" data-zone-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "zone_id", [], "any", false, false, false, 308);
            echo "\" disabled>
                        <option value=\"0\">";
            // line 309
            echo ($context["text_select"] ?? null);
            echo "</option>
                        ";
            // line 310
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 311
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 311);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 311) == twig_get_attribute($this->env, $this->source, $context["address"], "country_id", [], "any", false, false, false, 311))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 311);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "                      </select>
                      <div id=\"error-address-";
            // line 314
            echo ($context["address_row"] ?? null);
            echo "-country\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-address-";
            // line 318
            echo ($context["address_row"] ?? null);
            echo "-zone\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_zone"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"address[";
            // line 320
            echo ($context["address_row"] ?? null);
            echo "][zone_id]\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-zone\" class=\"form-select\" disabled></select>
                      <div id=\"error-address-";
            // line 321
            echo ($context["address_row"] ?? null);
            echo "-zone\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>

                  ";
            // line 325
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 326
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 326) == "address")) {
                    // line 327
                    echo "
                      ";
                    // line 328
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 328) == "select")) {
                        // line 329
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 329);
                        echo "\">
                          <label for=\"input-address-";
                        // line 330
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 330);
                        echo "\" class=\"col-sm-2 col-form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 330);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"address[";
                        // line 332
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 332);
                        echo "]\" id=\"input-address-";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 332);
                        echo "\" class=\"form-select\">
                              <option value=\"\">";
                        // line 333
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                              ";
                        // line 334
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 334));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 335
                            echo "                                <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 335);
                            echo "\"";
                            if (((($__internal_compile_20 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 335)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 335)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 335) == (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 335)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 335)] ?? null) : null)))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 335);
                            echo "</option>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 337
                        echo "                            </select>
                            <div id=\"error-address-";
                        // line 338
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 338);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 342
                    echo "
                      ";
                    // line 343
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 343) == "radio")) {
                        // line 344
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 344);
                        echo "\">
                          <label class=\"col-sm-2 col-form-label\">";
                        // line 345
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 345);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div id=\"input-address-";
                        // line 347
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 347);
                        echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                        // line 348
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 348));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 349
                            echo "                                <div class=\"form-check\">
                                  <input type=\"radio\" name=\"address[";
                            // line 350
                            echo ($context["address_row"] ?? null);
                            echo "][custom_field][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 350);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 350);
                            echo "\" id=\"input-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 350);
                            echo "\" class=\"form-check-input\"";
                            if (((($__internal_compile_22 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 350)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 350)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 350) == (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 350)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 350)] ?? null) : null)))) {
                                echo " checked";
                            }
                            echo "/> <label for=\"input-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 350);
                            echo "\" class=\"form-check-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 350);
                            echo "</label>
                                </div>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 353
                        echo "                            </div>
                            <div id=\"error-address-";
                        // line 354
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 354);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 358
                    echo "
                      ";
                    // line 359
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 359) == "checkbox")) {
                        // line 360
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 360);
                        echo "\">
                          <label class=\"col-sm-2 col-form-label\">";
                        // line 361
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 361);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div id=\"input-address-";
                        // line 363
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 363);
                        echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                        // line 364
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 364));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 365
                            echo "                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"address[";
                            // line 366
                            echo ($context["address_row"] ?? null);
                            echo "][custom_field][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 366);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 366);
                            echo "\" id=\"input-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 366);
                            echo "\" class=\"form-check-input\"";
                            if (((($__internal_compile_24 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 366)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 366)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 366), (($__internal_compile_25 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 366)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 366)] ?? null) : null)))) {
                                echo " checked";
                            }
                            echo "/> <label for=\"input-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 366);
                            echo "\" class=\"form-check-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 366);
                            echo "</label>
                                </div>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 369
                        echo "                            </div>
                            <div id=\"error-address-";
                        // line 370
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 370);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 374
                    echo "
                      ";
                    // line 375
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 375) == "text")) {
                        // line 376
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 376);
                        echo "\">
                          <label for=\"input-address-";
                        // line 377
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 377);
                        echo "\" class=\"col-sm-2 col-form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 377);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
                        // line 379
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 379);
                        echo "]\" value=\"";
                        echo (((($__internal_compile_26 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 379)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 379)] ?? null) : null)) ? ((($__internal_compile_27 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 379)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 379)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 379)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 379);
                        echo "\" id=\"input-address-";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 379);
                        echo "\" class=\"form-control\"/>
                            <div id=\"error-address-";
                        // line 380
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 380);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 384
                    echo "
                      ";
                    // line 385
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 385) == "textarea")) {
                        // line 386
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 386);
                        echo "\">
                          <label for=\"input-address-";
                        // line 387
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 387);
                        echo "\" class=\"col-sm-2 col-form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 387);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"address[";
                        // line 389
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 389);
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 389);
                        echo "\" id=\"input-address-";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 389);
                        echo "\" class=\"form-control\">";
                        echo (((($__internal_compile_28 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 389)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 389)] ?? null) : null)) ? ((($__internal_compile_29 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 389)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 389)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 389)));
                        echo "</textarea>
                            <div id=\"error-address-";
                        // line 390
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 390);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 394
                    echo "
                      ";
                    // line 395
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 395) == "file")) {
                        // line 396
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 396);
                        echo "\">
                          <label class=\"col-sm-2 col-form-label\">";
                        // line 397
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 397);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group\">
                              <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                        // line 400
                        echo ($context["upload"] ?? null);
                        echo "\" data-oc-target=\"#input-address-";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 400);
                        echo "\" data-oc-size-max=\"";
                        echo ($context["config_file_max_size"] ?? null);
                        echo "\" data-oc-size-error=\"";
                        echo ($context["error_upload_size"] ?? null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
                              <input type=\"text\" name=\"address[";
                        // line 401
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 401);
                        echo "]\" value=\"";
                        echo (((($__internal_compile_30 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 401)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 401)] ?? null) : null)) ? ((($__internal_compile_31 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 401)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 401)] ?? null) : null)) : (""));
                        echo "\" id=\"input-address-";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 401);
                        echo "\" class=\"form-control\" readonly/>
                              <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-address-";
                        // line 402
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 402);
                        echo "\" class=\"btn btn-outline-secondary\"";
                        if ( !(($__internal_compile_32 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 402)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 402)] ?? null) : null)) {
                            echo " disabled";
                        }
                        echo "><i class=\"fa-solid fa-download\"></i> ";
                        echo ($context["button_download"] ?? null);
                        echo "</button>
                              <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-address-";
                        // line 403
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 403);
                        echo "\" data-bs-toggle=\"tooltip\" title=\"";
                        echo ($context["button_clear"] ?? null);
                        echo "\" class=\"btn btn-outline-danger\"";
                        if ( !(($__internal_compile_33 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 403)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 403)] ?? null) : null)) {
                            echo " disabled";
                        }
                        echo "><i class=\"fa-solid fa-eraser\"></i></button>
                            </div>
                            <div id=\"error-address-";
                        // line 405
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 405);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 409
                    echo "
                      ";
                    // line 410
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 410) == "date")) {
                        // line 411
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 411);
                        echo "\">
                          <label for=\"input-address-";
                        // line 412
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 412);
                        echo "\" class=\"col-sm-2 col-form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 412);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"address[";
                        // line 415
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415);
                        echo "]\" value=\"";
                        echo (((($__internal_compile_34 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 415)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415)] ?? null) : null)) ? ((($__internal_compile_35 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 415)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 415)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 415);
                        echo "\" id=\"input-address-";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415);
                        echo "\" class=\"form-control date\"/>
                              <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            </div>
                            <div id=\"error-address-";
                        // line 418
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 418);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 422
                    echo "
                      ";
                    // line 423
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 423) == "time")) {
                        // line 424
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 424);
                        echo "\">
                          <label for=\"input-address-";
                        // line 425
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 425);
                        echo "\" class=\"col-sm-2 col-form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 425);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"address[";
                        // line 428
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 428);
                        echo "]\" value=\"";
                        echo (((($__internal_compile_36 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 428)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 428)] ?? null) : null)) ? ((($__internal_compile_37 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 428)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 428)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 428)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 428);
                        echo "\" id=\"input-address-";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 428);
                        echo "\" class=\"form-control time\"/>
                              <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            </div>
                            <div id=\"error-address-";
                        // line 431
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 431);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 435
                    echo "
                      ";
                    // line 436
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 436) == "datetime")) {
                        // line 437
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 437);
                        echo "\">
                          <label for=\"input-address-";
                        // line 438
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 438);
                        echo "\" class=\"col-sm-2 col-form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 438);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"address[";
                        // line 441
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 441);
                        echo "]\" value=\"";
                        echo (((($__internal_compile_38 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 441)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 441)] ?? null) : null)) ? ((($__internal_compile_39 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 441)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 441)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 441)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 441);
                        echo "\" id=\"input-address-";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 441);
                        echo "\" class=\"form-control datetime\"/>
                              <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            </div>
                            <div id=\"error-address-";
                        // line 444
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 444);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 448
                    echo "
                    ";
                }
                // line 450
                echo "
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 452
            echo "
                  <div class=\"row mb-3\">
                    <label for=\"input-address-";
            // line 454
            echo ($context["address_row"] ?? null);
            echo "-default\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_default"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"address[";
            // line 457
            echo ($context["address_row"] ?? null);
            echo "][default]\" value=\"1\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-default\" class=\"form-check-input\"";
            if (twig_get_attribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 457)) {
                echo " checked";
            }
            echo "/>
                      </div>
                    </div>
                  </div>
                  <input type=\"hidden\" name=\"address[";
            // line 461
            echo ($context["address_row"] ?? null);
            echo "][address_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 461);
            echo "\"/>
                </fieldset>
                ";
            // line 463
            $context["address_row"] = (($context["address_row"] ?? null) + 1);
            // line 464
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 465
        echo "              <div class=\"text-end\">
                <button type=\"button\" id=\"button-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 466
        echo ($context["button_address_add"] ?? null);
        echo "</button>
              </div>
              <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 468
        echo ($context["customer_id"] ?? null);
        echo "\" id=\"input-customer-id\"/>
            </div>
            <div class=\"tab-pane\" id=\"tab-affiliate\">
              <fieldset>
                <legend>";
        // line 472
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-company\">";
        // line 474
        echo ($context["entry_company"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"company\" value=\"";
        // line 476
        echo ($context["company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-company\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-website\">";
        // line 480
        echo ($context["entry_website"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"website\" value=\"";
        // line 482
        echo ($context["website"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_website"] ?? null);
        echo "\" id=\"input-website\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-tracking\">";
        // line 486
        echo ($context["entry_tracking"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tracking\" value=\"";
        // line 488
        echo ($context["tracking"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tracking"] ?? null);
        echo "\" id=\"input-tracking\" class=\"form-control\" />
                    ";
        // line 489
        if (($context["error_tracking"] ?? null)) {
            // line 490
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_tracking"] ?? null);
            echo "</div>
                    ";
        }
        // line 492
        echo "                    <div class=\"form-text\">";
        echo ($context["help_tracking"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 496
        echo ($context["help_commission"] ?? null);
        echo "\">";
        echo ($context["entry_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"commission\" value=\"";
        // line 498
        echo ($context["commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_commission"] ?? null);
        echo "\" id=\"input-commission\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 501
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 502
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 502) == "affiliate")) {
                // line 503
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 503) == "select")) {
                    // line 504
                    echo "                <div class=\"row mb-3 custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 504);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 504);
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 505
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 505);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 505);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"custom_field[affiliate][";
                    // line 507
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 507);
                    echo "]\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 507);
                    echo "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 508
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                      ";
                    // line 509
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 509));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 510
                        echo "                      ";
                        if (((($__internal_compile_40 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 510)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 510) == (($__internal_compile_41 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 510)] ?? null) : null)))) {
                            // line 511
                            echo "                      <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 511);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 511);
                            echo "</option>
                      ";
                        } else {
                            // line 513
                            echo "                      <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 513);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 513);
                            echo "</option>
                      ";
                        }
                        // line 515
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 516
                    echo "                    </select>
                    ";
                    // line 517
                    if ((($__internal_compile_42 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 517)] ?? null) : null)) {
                        // line 518
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_43 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 518)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 519
                    echo "</div>
                </div>
                ";
                }
                // line 522
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 522) == "radio")) {
                    // line 523
                    echo "                <div class=\"row mb-3 custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 523);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 523);
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\">";
                    // line 524
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 524);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                    // line 526
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 526));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 527
                        echo "                      <div class=\"radio\">";
                        if (((($__internal_compile_44 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 527)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 527) == (($__internal_compile_45 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 527)] ?? null) : null)))) {
                            // line 528
                            echo "                        <label>
                          <input type=\"radio\" name=\"custom_field[affiliate][";
                            // line 529
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 529);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 529);
                            echo "\" checked=\"checked\" />
                          ";
                            // line 530
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 530);
                            echo "</label>
                        ";
                        } else {
                            // line 532
                            echo "                        <label>
                          <input type=\"radio\" name=\"custom_field[affiliate][";
                            // line 533
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 533);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 533);
                            echo "\" />
                          ";
                            // line 534
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 534);
                            echo "</label>
                        ";
                        }
                        // line 535
                        echo "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 536
                    echo " </div>
                    ";
                    // line 537
                    if ((($__internal_compile_46 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 537)] ?? null) : null)) {
                        // line 538
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_47 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 538)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 539
                    echo "</div>
                </div>
                ";
                }
                // line 542
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 542) == "checkbox")) {
                    // line 543
                    echo "                <div class=\"row mb-3 custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 543);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 543);
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\">";
                    // line 544
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 544);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                    // line 546
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 546));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 547
                        echo "                      <div class=\"checkbox\">";
                        if (((($__internal_compile_48 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 547)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 547), (($__internal_compile_49 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 547)] ?? null) : null)))) {
                            // line 548
                            echo "                        <label>
                          <input type=\"checkbox\" name=\"custom_field[affiliate][";
                            // line 549
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 549);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 549);
                            echo "\" checked=\"checked\" />
                          ";
                            // line 550
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 550);
                            echo "</label>
                        ";
                        } else {
                            // line 552
                            echo "                        <label>
                          <input type=\"checkbox\" name=\"custom_field[affiliate][";
                            // line 553
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 553);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 553);
                            echo "\" />
                          ";
                            // line 554
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 554);
                            echo "</label>
                        ";
                        }
                        // line 555
                        echo "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 556
                    echo " </div>
                    ";
                    // line 557
                    if ((($__internal_compile_50 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 557)] ?? null) : null)) {
                        // line 558
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_51 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 558)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 559
                    echo "</div>
                </div>
                ";
                }
                // line 562
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 562) == "text")) {
                    // line 563
                    echo "                <div class=\"row mb-3 custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 563);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 563);
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 564
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 564);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 564);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[affiliate][";
                    // line 566
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 566);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_52 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 566)] ?? null) : null)) ? ((($__internal_compile_53 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 566)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 566)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 566);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 566);
                    echo "\" class=\"form-control\" />
                    ";
                    // line 567
                    if ((($__internal_compile_54 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 567)] ?? null) : null)) {
                        // line 568
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 568)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 569
                    echo "</div>
                </div>
                ";
                }
                // line 572
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 572) == "textarea")) {
                    // line 573
                    echo "                <div class=\"row mb-3 custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 573);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 573);
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 574
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 574);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 574);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[affiliate][";
                    // line 576
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 576);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 576);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 576);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_56 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 576)] ?? null) : null)) ? ((($__internal_compile_57 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 576)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 576)));
                    echo "</textarea>
                    ";
                    // line 577
                    if ((($__internal_compile_58 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 577)] ?? null) : null)) {
                        // line 578
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_59 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 578)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 579
                    echo "</div>
                </div>
                ";
                }
                // line 582
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 582) == "file")) {
                    // line 583
                    echo "                <div class=\"row mb-3 custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 583);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 583);
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\">";
                    // line 584
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 584);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <button type=\"button\" id=\"button-custom-field";
                    // line 586
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 586);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"hidden\" name=\"custom_field[affiliate][";
                    // line 587
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 587);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_60 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 587)] ?? null) : null)) ? ((($__internal_compile_61 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 587)] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 587);
                    echo "\" />
                    ";
                    // line 588
                    if ((($__internal_compile_62 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 588)] ?? null) : null)) {
                        // line 589
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_63 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 590
                    echo "</div>
                </div>
                ";
                }
                // line 593
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 593) == "date")) {
                    // line 594
                    echo "                <div class=\"row mb-3 custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 594);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 594);
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 595
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 595);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 595);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"custom_field[affiliate][";
                    // line 598
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 598);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_64 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 598)] ?? null) : null)) ? ((($__internal_compile_65 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 598)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 598)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 598);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 598);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 602
                    if ((($__internal_compile_66 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 602)] ?? null) : null)) {
                        // line 603
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_67 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 603)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 604
                    echo "</div>
                </div>
                ";
                }
                // line 607
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 607) == "time")) {
                    // line 608
                    echo "                <div class=\"row mb-3 custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 608);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 608);
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 609
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 609);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 609);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"custom_field[affiliate][";
                    // line 612
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 612);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_68 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 612)] ?? null) : null)) ? ((($__internal_compile_69 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 612)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 612)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 612);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 612);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 616
                    if ((($__internal_compile_70 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 616)] ?? null) : null)) {
                        // line 617
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_71 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 617)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 618
                    echo "</div>
                </div>
                ";
                }
                // line 621
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 621) == "datetime")) {
                    // line 622
                    echo "                <div class=\"row mb-3 custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 622);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 622);
                    echo "\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 623
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 623);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 623);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"custom_field[affiliate][";
                    // line 626
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 626);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_72 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 626)] ?? null) : null)) ? ((($__internal_compile_73 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 626)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 626)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 626);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 626);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 630
                    if ((($__internal_compile_74 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_74) || $__internal_compile_74 instanceof ArrayAccess ? ($__internal_compile_74[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 630)] ?? null) : null)) {
                        // line 631
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_75 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_75) || $__internal_compile_75 instanceof ArrayAccess ? ($__internal_compile_75[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 631)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 632
                    echo "</div>
                </div>
                ";
                }
                // line 635
                echo "                ";
            }
            // line 636
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 637
        echo "              </fieldset>
              <fieldset>
                <legend>";
        // line 639
        echo ($context["text_payment"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-tax\">";
        // line 641
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tax\" value=\"";
        // line 643
        echo ($context["tax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tax"] ?? null);
        echo "\" id=\"input-tax\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 647
        echo ($context["entry_payment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"radio\">
                      <label>";
        // line 650
        if ((($context["payment"] ?? null) == "cheque")) {
            // line 651
            echo "                        <input type=\"radio\" name=\"payment\" value=\"cheque\" checked=\"checked\" />
                        ";
        } else {
            // line 653
            echo "                        <input type=\"radio\" name=\"payment\" value=\"cheque\" />
                        ";
        }
        // line 655
        echo "                        ";
        echo ($context["text_cheque"] ?? null);
        echo "</label>
                    </div>
                    <div class=\"radio\">
                      <label> ";
        // line 658
        if ((($context["payment"] ?? null) == "paypal")) {
            // line 659
            echo "                        <input type=\"radio\" name=\"payment\" value=\"paypal\" checked=\"checked\" />
                        ";
        } else {
            // line 661
            echo "                        <input type=\"radio\" name=\"payment\" value=\"paypal\" />
                        ";
        }
        // line 663
        echo "                        ";
        echo ($context["text_paypal"] ?? null);
        echo "</label>
                    </div>
                    <div class=\"radio\">
                      <label> ";
        // line 666
        if ((($context["payment"] ?? null) == "bank")) {
            // line 667
            echo "                        <input type=\"radio\" name=\"payment\" value=\"bank\" checked=\"checked\" />
                        ";
        } else {
            // line 669
            echo "                        <input type=\"radio\" name=\"payment\" value=\"bank\" />
                        ";
        }
        // line 671
        echo "                        ";
        echo ($context["text_bank"] ?? null);
        echo "</label>
                    </div>
                  </div>
                </div>
                <div id=\"payment-cheque\" class=\"payment\">
                  <div class=\"row mb-3 required\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-cheque\">";
        // line 677
        echo ($context["entry_cheque"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"cheque\" value=\"";
        // line 679
        echo ($context["cheque"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_cheque"] ?? null);
        echo "\" id=\"input-cheque\" class=\"form-control\" />
                      ";
        // line 680
        if (($context["error_cheque"] ?? null)) {
            // line 681
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_cheque"] ?? null);
            echo "</div>
                      ";
        }
        // line 682
        echo "</div>
                  </div>
                </div>
                <div id=\"payment-paypal\" class=\"payment\">
                  <div class=\"row mb-3 required\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-paypal\">";
        // line 687
        echo ($context["entry_paypal"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"paypal\" value=\"";
        // line 689
        echo ($context["paypal"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_paypal"] ?? null);
        echo "\" id=\"input-paypal\" class=\"form-control\" />
                      ";
        // line 690
        if (($context["error_paypal"] ?? null)) {
            // line 691
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_paypal"] ?? null);
            echo "</div>
                      ";
        }
        // line 692
        echo "</div>
                  </div>
                </div>
                <div id=\"payment-bank\" class=\"payment\">
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-bank-name\">";
        // line 697
        echo ($context["entry_bank_name"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_name\" value=\"";
        // line 699
        echo ($context["bank_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_name"] ?? null);
        echo "\" id=\"input-bank-name\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-bank-branch-number\">";
        // line 703
        echo ($context["entry_bank_branch_number"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_branch_number\" value=\"";
        // line 705
        echo ($context["bank_branch_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_branch_number"] ?? null);
        echo "\" id=\"input-bank-branch-number\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-bank-swift-code\">";
        // line 709
        echo ($context["entry_bank_swift_code"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_swift_code\" value=\"";
        // line 711
        echo ($context["bank_swift_code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_swift_code"] ?? null);
        echo "\" id=\"input-bank-swift-code\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-bank-account-name\">";
        // line 715
        echo ($context["entry_bank_account_name"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_name\" value=\"";
        // line 717
        echo ($context["bank_account_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_account_name"] ?? null);
        echo "\" id=\"input-bank-account-name\" class=\"form-control\" />
                      ";
        // line 718
        if (($context["error_bank_account_name"] ?? null)) {
            // line 719
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_bank_account_name"] ?? null);
            echo "</div>
                      ";
        }
        // line 720
        echo "</div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-bank-account-number\">";
        // line 723
        echo ($context["entry_bank_account_number"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_number\" value=\"";
        // line 725
        echo ($context["bank_account_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_account_number"] ?? null);
        echo "\" id=\"input-bank-account-number\" class=\"form-control\" />
                      ";
        // line 726
        if (($context["error_bank_account_number"] ?? null)) {
            // line 727
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_bank_account_number"] ?? null);
            echo "</div>
                      ";
        }
        // line 728
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-affiliate\">";
        // line 732
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"affiliate\" id=\"input-affiliate\" class=\"form-control\">
                      ";
        // line 735
        if (($context["affiliate"] ?? null)) {
            // line 736
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 737
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 739
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 740
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 742
        echo "                     </select>
                  </div>
                </div>
              </fieldset>           
            </div> 
            <div id=\"tab-history\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 749
        echo ($context["text_history"] ?? null);
        echo "</legend>
                <div id=\"history\">";
        // line 750
        echo ($context["history"] ?? null);
        echo "</div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 753
        echo ($context["text_history_add"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-history\" class=\"col-sm-2 col-form-label\">";
        // line 755
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 757
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-history\" class=\"form-control\"></textarea>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 761
        echo ($context["button_history_add"] ?? null);
        echo "</button>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-transaction\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 768
        echo ($context["text_transaction"] ?? null);
        echo "</legend>
                <div id=\"transaction\">";
        // line 769
        echo ($context["transaction"] ?? null);
        echo "</div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 772
        echo ($context["text_transaction_add"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-transaction\" class=\"col-sm-2 col-form-label\">";
        // line 774
        echo ($context["entry_description"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
        // line 776
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-transaction\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-amount\" class=\"col-sm-2 col-form-label\">";
        // line 780
        echo ($context["entry_amount"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
        // line 782
        echo ($context["entry_amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" id=\"button-transaction\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 786
        echo ($context["button_transaction_add"] ?? null);
        echo "</button>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 792
        echo ($context["text_reward"] ?? null);
        echo "</legend>
                <div id=\"reward\">";
        // line 793
        echo ($context["reward"] ?? null);
        echo "</div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 796
        echo ($context["text_reward_add"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-reward\" class=\"col-sm-2 col-form-label\">";
        // line 798
        echo ($context["entry_description"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
        // line 800
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-reward\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">";
        // line 804
        echo ($context["entry_points"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"points\" value=\"\" placeholder=\"";
        // line 806
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 807
        echo ($context["help_points"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" id=\"button-reward\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 811
        echo ($context["button_reward_add"] ?? null);
        echo "</button>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-ip\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 817
        echo ($context["text_ip"] ?? null);
        echo "</legend>
                <div id=\"ip\">";
        // line 818
        echo ($context["ip"] ?? null);
        echo "</div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\"affiliate\"]').on('change', function() {
  if (\$(this).val() == '1') { 
    \$('#tab-affiliate :input').not('input[name=\"affiliate\"]').prop('disabled', false);
  } else {
    \$('#tab-affiliate :input').not('input[name=\"affiliate\"]').prop('disabled', true);
  }
}); 

  \$('#tab-affiliate .row mb-3[data-sort]').detach().each(function() {
  if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-affiliate .row mb-3').length) {
    \$('#tab-affiliate .row mb-3').eq(\$(this).attr('data-sort')).before(this);
  }

  if (\$(this).attr('data-sort') > \$('#tab-affiliate .row mb-3').length) {
    \$('#tab-affiliate .row mb-3:last').after(this);
  }

  if (\$(this).attr('data-sort') < -\$('#tab-affiliate .row mb-3').length) {
    \$('#tab-affiliate .row mb-3:first').before(this);
  }
});

\$('input[name=\\'affiliate\\']:checked').trigger('change');

\$('input[name=\\'payment\\']').on('change', function() {
  \$('.payment').hide();

  \$('#payment-' + this.value).show();
});

\$('input[name=\\'payment\\']:checked').trigger('change');

\$('#input-customer-group').on('change', function () {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token=";
        // line 862
        echo ($context["user_token"] ?? null);
        echo "&customer_group_id=' + this.value,
        dataType: 'json',
        success: function (json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

var address_row = ";
        // line 886
        echo ($context["address_row"] ?? null);
        echo ";

\$('#button-address').on('click', function (e) {
    e.preventDefault();

    html = '<fieldset id=\"address-row-' + address_row + '\">';
    html += '  <legend>";
        // line 892
        echo ($context["text_address"] ?? null);
        echo " ' + (address_row + 1) + ' <button type=\"button\" onclick=\"\$(\\'#address-row-' + address_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger btn-sm float-end\"><i class=\"fa-solid fa-minus-circle\"></i></button></legend>';
    html += '  <input type=\"hidden\" name=\"address[' + address_row + '][address_id]\" value=\"\" />';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 896
        echo twig_escape_filter($this->env, ($context["entry_firstname"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][firstname]\" value=\"\" placeholder=\"";
        // line 898
        echo twig_escape_filter($this->env, ($context["entry_firstname"] ?? null), "js");
        echo "\" id=\"input-address-' + address_row + '-firstname\" class=\"form-control\"/>';
    html += '      <div id=\"error-address-' + address_row + '-firstname\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 904
        echo twig_escape_filter($this->env, ($context["entry_lastname"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][lastname]\" value=\"\" placeholder=\"";
        // line 906
        echo twig_escape_filter($this->env, ($context["entry_lastname"] ?? null), "js");
        echo "\" id=\"input-address-' + address_row + '-lastname\" class=\"form-control\"/>';
    html += '      <div id=\"error-address-' + address_row + '-lastname\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3\">';
    html += '    <label for=\"input-address-' + address_row + '-company\" class=\"col-sm-2 col-form-label\">";
        // line 912
        echo twig_escape_filter($this->env, ($context["entry_company"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][company]\" value=\"\" placeholder=\"";
        // line 913
        echo twig_escape_filter($this->env, ($context["entry_company"] ?? null), "js");
        echo "\" id=\"input-address-' + address_row + '-company\" class=\"form-control\"/></div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-address-1\" class=\"col-sm-2 col-form-label\">";
        // line 917
        echo twig_escape_filter($this->env, ($context["entry_address_1"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][address_1]\" value=\"\" placeholder=\"";
        // line 919
        echo twig_escape_filter($this->env, ($context["entry_address_1"] ?? null), "js");
        echo "\" id=\"input-address-' + address_row + '-address-1\" class=\"form-control\"/>';
    html += '      <div id=\"error-address-' + address_row + '-address-1\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3\">';
    html += '    <label for=\"input-address-' + address_row + '-address-2\" class=\"col-sm-2 col-form-label\">";
        // line 925
        echo twig_escape_filter($this->env, ($context["entry_address_2"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_2]\" value=\"\" placeholder=\"";
        // line 926
        echo twig_escape_filter($this->env, ($context["entry_address_2"] ?? null), "js");
        echo "\" id=\"input-address-' + address_row + '-address-2\" class=\"form-control\"/></div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-city\" class=\"col-sm-2 col-form-label\">";
        // line 930
        echo twig_escape_filter($this->env, ($context["entry_city"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][city]\" value=\"\" placeholder=\"";
        // line 932
        echo twig_escape_filter($this->env, ($context["entry_city"] ?? null), "js");
        echo "\" id=\"input-address-' + address_row + '-city\" class=\"form-control\"/>';
    html += '      <div id=\"error-address-' + address_row + '-city\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-postcode\" class=\"col-sm-2 col-form-label\">";
        // line 938
        echo twig_escape_filter($this->env, ($context["entry_postcode"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][postcode]\" value=\"\" placeholder=\"";
        // line 940
        echo twig_escape_filter($this->env, ($context["entry_postcode"] ?? null), "js");
        echo "\" id=\"input-address-' + address_row + '-postcode\" class=\"form-control\"/>';
    html += '      <div id=\"error-address-' + address_row + '-postcode\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-country\" class=\"col-sm-2 col-form-label\">";
        // line 946
        echo twig_escape_filter($this->env, ($context["entry_country"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '       <select name=\"address[' + address_row + '][country_id]\" id=\"input-address-' + address_row + '-country\" data-address-row=\"' + address_row + '\" data-zone-id=\"0\" class=\"form-select\" disabled>';
    html += '         <option value=\"0\">";
        // line 949
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';
  ";
        // line 950
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 951
            echo "    html += '         <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 951);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 951), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 953
        echo "    html += '      </select>';
    html += '      <div id=\"error-address-' + address_row + '-country\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-zone\" class=\"col-sm-2 col-form-label\">";
        // line 959
        echo twig_escape_filter($this->env, ($context["entry_zone"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <select name=\"address[' + address_row + '][zone_id]\" id=\"input-address-' + address_row + '-zone\" class=\"form-select\" disabled><option value=\"\">";
        // line 961
        echo twig_escape_filter($this->env, ($context["text_none"] ?? null), "js");
        echo "</option></select>';
    html += '      <div id=\"error-address-' + address_row + '-zone\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    // Custom Fields
  ";
        // line 967
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 968
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 968) == "address")) {
                // line 969
                echo "  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 969) == "select")) {
                    // line 970
                    echo "
    html += '<div class=\"row mb-3 custom-field custom-field-";
                    // line 971
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 971);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 972
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 972);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 972), "js");
                    echo "</label>';
    html += '\t <div class=\"col-sm-10\">';
    html += '    <select name=\"address[' + address_row + '][custom_field][";
                    // line 974
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 974);
                    echo "]\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 974);
                    echo "\" class=\"form-select\">';
    html += '      <option value=\"\">";
                    // line 975
                    echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
                    echo "</option>';

  ";
                    // line 977
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 977));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 978
                        echo "    html += '\t\t   <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 978);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 978), "js");
                        echo "</option>';
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 980
                    echo "
    html += '\t   </select>';
    html += '    <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 982
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 982);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '\t </div>';
    html += '</div>';
  ";
                }
                // line 986
                echo "
  ";
                // line 987
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 987) == "radio")) {
                    // line 988
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 988);
                    echo "\">';
    html += '  <label class=\"col-sm-2 col-form-label\">";
                    // line 989
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 989), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div id=\"input-address-' + address_row + '-custom-field-";
                    // line 991
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 991);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">';

  ";
                    // line 993
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 993));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 994
                        echo "    html += '  \t\t     <div class=\"form-check\">';
    html += '  \t\t       <input type=\"radio\" name=\"address[' + address_row + '][custom_field][";
                        // line 995
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 995);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 995);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 995);
                        echo "\" class=\"form-check-input\"/>';
    html += '  \t\t       <label for=\"input-custom-value-";
                        // line 996
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 996);
                        echo "\" class=\"form-check-label\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 996), "js");
                        echo "</label>';
    html += '\t\t       </div>';
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 999
                    echo "
    html += '\t\t </div>';
    html += '    <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 1001
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1001);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 1005
                echo "
  ";
                // line 1006
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1006) == "checkbox")) {
                    // line 1007
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1007);
                    echo "\">';
    html += '  <label class=\"col-sm-2 col-form-label\">";
                    // line 1008
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1008), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div id=\"input-address-' + address_row + '-custom-field-";
                    // line 1010
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1010);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">';

  ";
                    // line 1012
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1012));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1013
                        echo "    html += '      <div class=\"form-check\">';
    html += '        <input type=\"checkbox\" name=\"address[";
                        // line 1014
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1014);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1014);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1014);
                        echo "\" class=\"form-check-input\"/>';
    html += '        <label for=\"input-custom-value-";
                        // line 1015
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1015);
                        echo "\" class=\"form-check-label\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1015), "js");
                        echo "</label>';
    html += '\t\t   </div>';
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1018
                    echo "
    html += '\t\t </div>';
    html += '    <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 1020
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1020);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 1024
                echo "
  ";
                // line 1025
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1025) == "text")) {
                    // line 1026
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1026);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 1027
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1027);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1027), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1029
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1029);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1029), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1029), "js");
                    echo "\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1029);
                    echo "\" class=\"form-control\"/>';
    html += '  </div>';
    html += '  <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 1031
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1031);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '</div>';
  ";
                }
                // line 1034
                echo "
  ";
                // line 1035
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1035) == "textarea")) {
                    // line 1036
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1036);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 1037
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1037);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1037), "js");
                    echo "</label>';
    html += '\t <div class=\"col-sm-10\">';
    html += '\t   <textarea name=\"address[' + address_row + '][custom_field][";
                    // line 1039
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1039);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1039), "js");
                    echo "\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1039);
                    echo "\" class=\"form-control\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1039), "js");
                    echo "</textarea>';
    html += '\t   <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 1040
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1040);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 1044
                echo "
  ";
                // line 1045
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1045) == "file")) {
                    // line 1046
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1046);
                    echo "\">';
    html += '  <label class=\"col-sm-2 col-form-label\">";
                    // line 1047
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1047), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div class=\"input-group\">';
    html += '      <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 1050
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1050);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo twig_escape_filter($this->env, ($context["error_upload_size"] ?? null), "js");
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo twig_escape_filter($this->env, ($context["button_upload"] ?? null), "js");
                    echo "</button>';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1051
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1051);
                    echo "]\" value=\"\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1051);
                    echo "\" class=\"form-control\" readonly/>';
    html += '      <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-address-' + address_row + '-custom-field-";
                    // line 1052
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1052);
                    echo "\" class=\"btn btn-outline-secondary\" disabled><i class=\"fa-solid fa-download\"></i> ";
                    echo twig_escape_filter($this->env, ($context["button_download"] ?? null), "js");
                    echo "</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 1053
                    echo twig_escape_filter($this->env, ($context["button_clear"] ?? null), "js");
                    echo "\" data-oc-target=\"#input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1053);
                    echo "\" class=\"btn btn-outline-danger\" disabled><i class=\"fa-solid fa-eraser\"></i></button>';
    html += '    </div>';
    html += '\t   <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 1055
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1055);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 1059
                echo "
  ";
                // line 1060
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1060) == "date")) {
                    // line 1061
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1061);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 1062
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1062);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1062), "js");
                    echo "</label>';
    html += '\t <div class=\"col-sm-10\">';
    html += '\t\t <div class=\"input-group\">';
    html += '\t\t   <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1065
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1065);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1065), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1065), "js");
                    echo "\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1065);
                    echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>';
    html += '\t\t </div>';
    html += '\t   <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 1067
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1067);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '\t </div>';
    html += '</div>';
  ";
                }
                // line 1071
                echo "
  ";
                // line 1072
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1072) == "time")) {
                    // line 1073
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1073);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 1074
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1074);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1074), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div class=\"input-group\">';
    html += '\t\t   <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1077
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1077);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1077), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1077), "js");
                    echo "\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1077);
                    echo "\" class=\"form-control time\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>';
    html += '    </div>';
    html += '\t   <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 1079
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1079);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 1083
                echo "
  ";
                // line 1084
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1084) == "datetime")) {
                    // line 1085
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1085);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 1086
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1086);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1086), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div class=\"input-group\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1089
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1089);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1089), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1089), "js");
                    echo "\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1089);
                    echo "\" class=\"form-control datetime\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>';
    html += '    </div>';
    html += '\t   <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 1091
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1091);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 1095
                echo "
  ";
            }
            // line 1097
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1098
        echo "
    html += '<div class=\"row mb-3\">';
    html += '  <label for=\"input-address-' + address_row + '-default\" class=\"col-sm-2 col-form-label\">";
        // line 1100
        echo twig_escape_filter($this->env, ($context["entry_default"] ?? null), "js");
        echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div class=\"form-check\"><input type=\"radio\" name=\"address[' + address_row + '][default]\" value=\"1\" id=\"input-address-' + address_row + '-default\" class=\"form-check-label\"/></div>';
    html += '  </div>';
    html += '</div>';

    html += '</fieldset>';

    \$(this).parent().before(html);

    \$('#input-customer-group').trigger('change');

    \$('select[name=\\'address[' + address_row + '][country_id]\\']').trigger('change');

    address_row++;
});

var zone = [];

\$('#tab-address').on('change', 'select[name\$=\\'[country_id]\\']', function () {
    var element = this;

    \$(element).prop('disabled', true);

    \$('select[name=\\'address[' + \$(element).attr('data-address-row') + '][zone_id]\\']').prop('disabled', false);

    if (!zone[\$(element).val()]) {
        \$.ajax({
            url: 'index.php?route=localisation/country.country&user_token=";
        // line 1128
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                zone[\$(element).val()] = json;

                if (json['postcode_required'] == '1') {
                    \$('#input-address-' + \$(element).attr('data-address-row') + '-postcode').parent().parent().addClass('required');
                } else {
                    \$('#input-address-' + \$(element).attr('data-address-row') + '-postcode').parent().parent().removeClass('required');
                }

                html = '<option value=\"\">";
        // line 1145
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == \$(element).attr('data-zone-id')) {
                            html += ' selected';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>";
        // line 1158
        echo twig_escape_filter($this->env, ($context["text_none"] ?? null), "js");
        echo "</option>';
                }

                \$('#tab-address select[name=\\'address[' + \$(element).attr('data-address-row') + '][zone_id]\\']').html(html);

                \$('#tab-address select[name=\\'address[' + \$(element).attr('data-address-row') + '][zone_id]\\']').prop('disabled', false);

                \$(element).prop('disabled', false);

                \$('#tab-address select[name\$=\\'[country_id]\\']:disabled:first').trigger('change');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    } else {
        html = '<option value=\"\">";
        // line 1174
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

        if (zone[\$(element).val()]['zone'] && zone[\$(element).val()]['zone'] != '') {
            for (i = 0; i < zone[\$(element).val()]['zone'].length; i++) {
                html += '<option value=\"' + zone[\$(element).val()]['zone'][i]['zone_id'] + '\"';

                if (zone[\$(element).val()]['zone'][i]['zone_id'] == \$(element).attr('data-zone-id')) {
                    html += ' selected';
                }

                html += '>' + zone[\$(element).val()]['zone'][i]['name'] + '</option>';
            }
        } else {
            html += '<option value=\"0\">";
        // line 1187
        echo twig_escape_filter($this->env, ($context["text_none"] ?? null), "js");
        echo "</option>';
        }

        \$('#tab-address select[name=\\'address[' + \$(element).attr('data-address-row') + '][zone_id]\\']').html(html);

        \$('#tab-address select[name=\\'address[' + \$(element).attr('data-address-row') + '][zone_id]\\']').prop('disabled', false);

        \$(element).prop('disabled', false);

        \$('#tab-address select[name\$=\\'[country_id]\\']:disabled:first').trigger('change');
    }
});

\$('#tab-address select[name\$=\\'[country_id]\\']:first').trigger('change');

\$('#payment-method').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#payment-method').load(this.href);
});

\$('#payment-method').on('click', 'button', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$(element).button('loading');
        },
        complete: function () {
            \$(element).button('reset');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token=";
        // line 1233
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#payment-method').on('change', 'input[name=\\'status\\']', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer.disablePayment&user_token=";
        // line 1248
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token=";
        // line 1267
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#button-history').on('click', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addHistory&user_token=";
        // line 1286
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'comment=' + encodeURIComponent(\$('#input-history').val()),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$('#button-history').button('loading');
        },
        complete: function () {
            \$('#button-history').button('reset');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=customer/customer.history&user_token=";
        // line 1307
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-history').val('');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#transaction').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
});

\$('#button-transaction').on('click', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addTransaction&user_token=";
        // line 1328
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'description=' + encodeURIComponent(\$('#input-transaction').val()) + '&amount=' + \$('#input-amount').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$('#button-transaction').button('loading');
        },
        complete: function () {
            \$('#button-transaction').button('reset');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#transaction').load('index.php?route=customer/customer.transaction&user_token=";
        // line 1349
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-transaction').val('');
                \$('#input-amount').val('');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#reward').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#reward').load(this.href);
});

\$('#button-reward').on('click', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addReward&user_token=";
        // line 1371
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'description=' + encodeURIComponent(\$('#input-reward').val()) + '&points=' + \$('#input-points').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$('#button-reward').button('loading');
        },
        complete: function () {
            \$('#button-reward').button('reset');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#reward').load('index.php?route=customer/customer.reward&user_token=";
        // line 1392
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-reward').val('');
                \$('#input-points').val('');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#ip').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#ip').load(this.href);
});
//--></script>
";
        // line 1410
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "customer/customer_form.twig";
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
        return array (  3562 => 1410,  3541 => 1392,  3517 => 1371,  3492 => 1349,  3468 => 1328,  3444 => 1307,  3420 => 1286,  3398 => 1267,  3376 => 1248,  3358 => 1233,  3309 => 1187,  3293 => 1174,  3274 => 1158,  3258 => 1145,  3238 => 1128,  3207 => 1100,  3203 => 1098,  3197 => 1097,  3193 => 1095,  3186 => 1091,  3175 => 1089,  3167 => 1086,  3162 => 1085,  3160 => 1084,  3157 => 1083,  3150 => 1079,  3139 => 1077,  3131 => 1074,  3126 => 1073,  3124 => 1072,  3121 => 1071,  3114 => 1067,  3103 => 1065,  3095 => 1062,  3090 => 1061,  3088 => 1060,  3085 => 1059,  3078 => 1055,  3071 => 1053,  3065 => 1052,  3059 => 1051,  3047 => 1050,  3041 => 1047,  3036 => 1046,  3034 => 1045,  3031 => 1044,  3024 => 1040,  3014 => 1039,  3007 => 1037,  3002 => 1036,  3000 => 1035,  2997 => 1034,  2991 => 1031,  2980 => 1029,  2973 => 1027,  2968 => 1026,  2966 => 1025,  2963 => 1024,  2956 => 1020,  2952 => 1018,  2941 => 1015,  2931 => 1014,  2928 => 1013,  2924 => 1012,  2919 => 1010,  2914 => 1008,  2909 => 1007,  2907 => 1006,  2904 => 1005,  2897 => 1001,  2893 => 999,  2882 => 996,  2874 => 995,  2871 => 994,  2867 => 993,  2862 => 991,  2857 => 989,  2852 => 988,  2850 => 987,  2847 => 986,  2840 => 982,  2836 => 980,  2825 => 978,  2821 => 977,  2816 => 975,  2810 => 974,  2803 => 972,  2799 => 971,  2796 => 970,  2793 => 969,  2790 => 968,  2786 => 967,  2777 => 961,  2772 => 959,  2764 => 953,  2753 => 951,  2749 => 950,  2745 => 949,  2739 => 946,  2730 => 940,  2725 => 938,  2716 => 932,  2711 => 930,  2704 => 926,  2700 => 925,  2691 => 919,  2686 => 917,  2679 => 913,  2675 => 912,  2666 => 906,  2661 => 904,  2652 => 898,  2647 => 896,  2638 => 892,  2629 => 886,  2602 => 862,  2555 => 818,  2551 => 817,  2542 => 811,  2535 => 807,  2531 => 806,  2526 => 804,  2519 => 800,  2514 => 798,  2509 => 796,  2503 => 793,  2499 => 792,  2490 => 786,  2483 => 782,  2478 => 780,  2471 => 776,  2466 => 774,  2461 => 772,  2455 => 769,  2451 => 768,  2441 => 761,  2434 => 757,  2429 => 755,  2424 => 753,  2418 => 750,  2414 => 749,  2405 => 742,  2400 => 740,  2395 => 739,  2390 => 737,  2385 => 736,  2383 => 735,  2377 => 732,  2371 => 728,  2365 => 727,  2363 => 726,  2357 => 725,  2352 => 723,  2347 => 720,  2341 => 719,  2339 => 718,  2333 => 717,  2328 => 715,  2319 => 711,  2314 => 709,  2305 => 705,  2300 => 703,  2291 => 699,  2286 => 697,  2279 => 692,  2273 => 691,  2271 => 690,  2265 => 689,  2260 => 687,  2253 => 682,  2247 => 681,  2245 => 680,  2239 => 679,  2234 => 677,  2224 => 671,  2220 => 669,  2216 => 667,  2214 => 666,  2207 => 663,  2203 => 661,  2199 => 659,  2197 => 658,  2190 => 655,  2186 => 653,  2182 => 651,  2180 => 650,  2174 => 647,  2165 => 643,  2160 => 641,  2155 => 639,  2151 => 637,  2145 => 636,  2142 => 635,  2137 => 632,  2131 => 631,  2129 => 630,  2116 => 626,  2108 => 623,  2101 => 622,  2098 => 621,  2093 => 618,  2087 => 617,  2085 => 616,  2072 => 612,  2064 => 609,  2057 => 608,  2054 => 607,  2049 => 604,  2043 => 603,  2041 => 602,  2028 => 598,  2020 => 595,  2013 => 594,  2010 => 593,  2005 => 590,  1999 => 589,  1997 => 588,  1989 => 587,  1981 => 586,  1976 => 584,  1969 => 583,  1966 => 582,  1961 => 579,  1955 => 578,  1953 => 577,  1943 => 576,  1936 => 574,  1929 => 573,  1926 => 572,  1921 => 569,  1915 => 568,  1913 => 567,  1903 => 566,  1896 => 564,  1889 => 563,  1886 => 562,  1881 => 559,  1875 => 558,  1873 => 557,  1870 => 556,  1863 => 555,  1858 => 554,  1852 => 553,  1849 => 552,  1844 => 550,  1838 => 549,  1835 => 548,  1832 => 547,  1828 => 546,  1823 => 544,  1816 => 543,  1813 => 542,  1808 => 539,  1802 => 538,  1800 => 537,  1797 => 536,  1790 => 535,  1785 => 534,  1779 => 533,  1776 => 532,  1771 => 530,  1765 => 529,  1762 => 528,  1759 => 527,  1755 => 526,  1750 => 524,  1743 => 523,  1740 => 522,  1735 => 519,  1729 => 518,  1727 => 517,  1724 => 516,  1718 => 515,  1710 => 513,  1702 => 511,  1699 => 510,  1695 => 509,  1691 => 508,  1685 => 507,  1678 => 505,  1671 => 504,  1668 => 503,  1665 => 502,  1661 => 501,  1653 => 498,  1646 => 496,  1638 => 492,  1632 => 490,  1630 => 489,  1624 => 488,  1619 => 486,  1610 => 482,  1605 => 480,  1596 => 476,  1591 => 474,  1586 => 472,  1579 => 468,  1574 => 466,  1571 => 465,  1565 => 464,  1563 => 463,  1556 => 461,  1543 => 457,  1535 => 454,  1531 => 452,  1524 => 450,  1520 => 448,  1511 => 444,  1495 => 441,  1485 => 438,  1480 => 437,  1478 => 436,  1475 => 435,  1466 => 431,  1450 => 428,  1440 => 425,  1435 => 424,  1433 => 423,  1430 => 422,  1421 => 418,  1405 => 415,  1395 => 412,  1390 => 411,  1388 => 410,  1385 => 409,  1376 => 405,  1363 => 403,  1351 => 402,  1339 => 401,  1325 => 400,  1319 => 397,  1314 => 396,  1312 => 395,  1309 => 394,  1300 => 390,  1286 => 389,  1277 => 387,  1272 => 386,  1270 => 385,  1267 => 384,  1258 => 380,  1244 => 379,  1235 => 377,  1230 => 376,  1228 => 375,  1225 => 374,  1216 => 370,  1213 => 369,  1190 => 366,  1187 => 365,  1183 => 364,  1177 => 363,  1172 => 361,  1167 => 360,  1165 => 359,  1162 => 358,  1153 => 354,  1150 => 353,  1127 => 350,  1124 => 349,  1120 => 348,  1114 => 347,  1109 => 345,  1104 => 344,  1102 => 343,  1099 => 342,  1090 => 338,  1087 => 337,  1072 => 335,  1068 => 334,  1064 => 333,  1054 => 332,  1045 => 330,  1040 => 329,  1038 => 328,  1035 => 327,  1032 => 326,  1028 => 325,  1021 => 321,  1015 => 320,  1008 => 318,  1001 => 314,  998 => 313,  983 => 311,  979 => 310,  975 => 309,  965 => 308,  958 => 306,  951 => 302,  941 => 301,  934 => 299,  927 => 295,  917 => 294,  910 => 292,  897 => 288,  890 => 286,  883 => 282,  873 => 281,  866 => 279,  853 => 275,  846 => 273,  839 => 269,  829 => 268,  822 => 266,  815 => 262,  805 => 261,  798 => 259,  787 => 257,  782 => 256,  777 => 255,  775 => 254,  766 => 248,  759 => 246,  753 => 243,  743 => 238,  737 => 235,  727 => 230,  721 => 227,  716 => 225,  705 => 219,  700 => 217,  690 => 212,  685 => 210,  680 => 208,  676 => 206,  670 => 205,  666 => 203,  659 => 199,  647 => 196,  639 => 193,  634 => 192,  632 => 191,  629 => 190,  622 => 186,  610 => 183,  602 => 180,  597 => 179,  595 => 178,  592 => 177,  585 => 173,  573 => 170,  565 => 167,  560 => 166,  558 => 165,  555 => 164,  548 => 160,  536 => 157,  526 => 156,  518 => 155,  506 => 154,  499 => 150,  494 => 149,  492 => 148,  489 => 147,  482 => 143,  472 => 142,  465 => 140,  460 => 139,  458 => 138,  455 => 137,  448 => 133,  438 => 132,  431 => 130,  426 => 129,  424 => 128,  421 => 127,  414 => 123,  411 => 122,  390 => 119,  387 => 118,  383 => 117,  379 => 116,  374 => 114,  369 => 113,  367 => 112,  364 => 111,  357 => 107,  354 => 106,  333 => 103,  330 => 102,  326 => 101,  322 => 100,  317 => 98,  312 => 97,  310 => 96,  307 => 95,  300 => 91,  297 => 90,  282 => 88,  278 => 87,  274 => 86,  268 => 85,  261 => 83,  256 => 82,  254 => 81,  251 => 80,  249 => 79,  246 => 78,  242 => 77,  233 => 73,  228 => 71,  222 => 70,  213 => 66,  208 => 64,  198 => 59,  193 => 57,  183 => 52,  178 => 50,  172 => 46,  157 => 44,  153 => 43,  147 => 40,  142 => 38,  136 => 34,  131 => 32,  127 => 31,  123 => 30,  118 => 29,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  99 => 23,  94 => 21,  87 => 16,  76 => 14,  72 => 13,  67 => 11,  61 => 10,  56 => 9,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_form.twig", "");
    }
}
