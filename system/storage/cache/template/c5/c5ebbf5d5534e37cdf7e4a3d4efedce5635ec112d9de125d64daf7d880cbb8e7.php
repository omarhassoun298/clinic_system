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
class __TwigTemplate_94b91ef5193a8b076b9c477c6e2262f6b33b248a1357a694797801522e42e5d9 extends Template
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
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-company\">";
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
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-website\">";
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
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tracking\"><span data-toggle=\"tooltip\" title=\"";
        // line 486
        echo ($context["help_tracking"] ?? null);
        echo "\">";
        echo ($context["entry_tracking"] ?? null);
        echo "</span></label>
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
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 495
        echo ($context["help_commission"] ?? null);
        echo "\">";
        echo ($context["entry_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"commission\" value=\"";
        // line 497
        echo ($context["commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_commission"] ?? null);
        echo "\" id=\"input-commission\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 500
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 501
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 501) == "affiliate")) {
                // line 502
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 502) == "select")) {
                    // line 503
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 503);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 503);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 504
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 504);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 504);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"custom_field[affiliate][";
                    // line 506
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 506);
                    echo "]\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 506);
                    echo "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 507
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                      ";
                    // line 508
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 508));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 509
                        echo "                      ";
                        if (((($__internal_compile_40 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 509)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 509) == (($__internal_compile_41 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 509)] ?? null) : null)))) {
                            // line 510
                            echo "                      <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 510);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 510);
                            echo "</option>
                      ";
                        } else {
                            // line 512
                            echo "                      <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 512);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 512);
                            echo "</option>
                      ";
                        }
                        // line 514
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 515
                    echo "                    </select>
                    ";
                    // line 516
                    if ((($__internal_compile_42 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 516)] ?? null) : null)) {
                        // line 517
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_43 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 517)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 518
                    echo "</div>
                </div>
                ";
                }
                // line 521
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 521) == "radio")) {
                    // line 522
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 522);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 522);
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 523
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 523);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                    // line 525
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 525));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 526
                        echo "                      <div class=\"radio\">";
                        if (((($__internal_compile_44 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 526)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 526) == (($__internal_compile_45 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 526)] ?? null) : null)))) {
                            // line 527
                            echo "                        <label>
                          <input type=\"radio\" name=\"custom_field[affiliate][";
                            // line 528
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 528);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 528);
                            echo "\" checked=\"checked\" />
                          ";
                            // line 529
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 529);
                            echo "</label>
                        ";
                        } else {
                            // line 531
                            echo "                        <label>
                          <input type=\"radio\" name=\"custom_field[affiliate][";
                            // line 532
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 532);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 532);
                            echo "\" />
                          ";
                            // line 533
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 533);
                            echo "</label>
                        ";
                        }
                        // line 534
                        echo "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 535
                    echo " </div>
                    ";
                    // line 536
                    if ((($__internal_compile_46 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 536)] ?? null) : null)) {
                        // line 537
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_47 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 537)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 538
                    echo "</div>
                </div>
                ";
                }
                // line 541
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 541) == "checkbox")) {
                    // line 542
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 542);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 542);
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 543
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 543);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                    // line 545
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 545));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 546
                        echo "                      <div class=\"checkbox\">";
                        if (((($__internal_compile_48 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 546)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 546), (($__internal_compile_49 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 546)] ?? null) : null)))) {
                            // line 547
                            echo "                        <label>
                          <input type=\"checkbox\" name=\"custom_field[affiliate][";
                            // line 548
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 548);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 548);
                            echo "\" checked=\"checked\" />
                          ";
                            // line 549
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 549);
                            echo "</label>
                        ";
                        } else {
                            // line 551
                            echo "                        <label>
                          <input type=\"checkbox\" name=\"custom_field[affiliate][";
                            // line 552
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 552);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 552);
                            echo "\" />
                          ";
                            // line 553
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 553);
                            echo "</label>
                        ";
                        }
                        // line 554
                        echo "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 555
                    echo " </div>
                    ";
                    // line 556
                    if ((($__internal_compile_50 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 556)] ?? null) : null)) {
                        // line 557
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_51 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 557)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 558
                    echo "</div>
                </div>
                ";
                }
                // line 561
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 561) == "text")) {
                    // line 562
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 562);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 562);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 563
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 563);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 563);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[affiliate][";
                    // line 565
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 565);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_52 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 565)] ?? null) : null)) ? ((($__internal_compile_53 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 565)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 565)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 565);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 565);
                    echo "\" class=\"form-control\" />
                    ";
                    // line 566
                    if ((($__internal_compile_54 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 566)] ?? null) : null)) {
                        // line 567
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 567)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 568
                    echo "</div>
                </div>
                ";
                }
                // line 571
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 571) == "textarea")) {
                    // line 572
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 572);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 572);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 573
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 573);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 573);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[affiliate][";
                    // line 575
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 575);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 575);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 575);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_56 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 575)] ?? null) : null)) ? ((($__internal_compile_57 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 575)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 575)));
                    echo "</textarea>
                    ";
                    // line 576
                    if ((($__internal_compile_58 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 576)] ?? null) : null)) {
                        // line 577
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_59 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 577)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 578
                    echo "</div>
                </div>
                ";
                }
                // line 581
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 581) == "file")) {
                    // line 582
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 582);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 582);
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 583
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 583);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <button type=\"button\" id=\"button-custom-field";
                    // line 585
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 585);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"hidden\" name=\"custom_field[affiliate][";
                    // line 586
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 586);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_60 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 586)] ?? null) : null)) ? ((($__internal_compile_61 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 586)] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 586);
                    echo "\" />
                    ";
                    // line 587
                    if ((($__internal_compile_62 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 587)] ?? null) : null)) {
                        // line 588
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_63 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 588)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 589
                    echo "</div>
                </div>
                ";
                }
                // line 592
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 592) == "date")) {
                    // line 593
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 593);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 593);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 594
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 594);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 594);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"custom_field[affiliate][";
                    // line 597
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_64 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597)] ?? null) : null)) ? ((($__internal_compile_65 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 597)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 597);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 601
                    if ((($__internal_compile_66 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 601)] ?? null) : null)) {
                        // line 602
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_67 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 602)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 603
                    echo "</div>
                </div>
                ";
                }
                // line 606
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 606) == "time")) {
                    // line 607
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 607);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 607);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 608
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 608);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 608);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"custom_field[affiliate][";
                    // line 611
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_68 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611)] ?? null) : null)) ? ((($__internal_compile_69 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 611)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 611);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 615
                    if ((($__internal_compile_70 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 615)] ?? null) : null)) {
                        // line 616
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_71 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 616)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 617
                    echo "</div>
                </div>
                ";
                }
                // line 620
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 620) == "datetime")) {
                    // line 621
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 621);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 621);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 622
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 622);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 622);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"custom_field[affiliate][";
                    // line 625
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 625);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_72 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 625)] ?? null) : null)) ? ((($__internal_compile_73 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 625)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 625)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 625);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 625);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 629
                    if ((($__internal_compile_74 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_74) || $__internal_compile_74 instanceof ArrayAccess ? ($__internal_compile_74[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 629)] ?? null) : null)) {
                        // line 630
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_75 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_75) || $__internal_compile_75 instanceof ArrayAccess ? ($__internal_compile_75[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 630)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 631
                    echo "</div>
                </div>
                ";
                }
                // line 634
                echo "                ";
            }
            // line 635
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 636
        echo "              </fieldset>
              <fieldset>
                <legend>";
        // line 638
        echo ($context["text_payment"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax\">";
        // line 640
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tax\" value=\"";
        // line 642
        echo ($context["tax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tax"] ?? null);
        echo "\" id=\"input-tax\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 646
        echo ($context["entry_payment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"radio\">
                      <label>";
        // line 649
        if ((($context["payment"] ?? null) == "cheque")) {
            // line 650
            echo "                        <input type=\"radio\" name=\"payment\" value=\"cheque\" checked=\"checked\" />
                        ";
        } else {
            // line 652
            echo "                        <input type=\"radio\" name=\"payment\" value=\"cheque\" />
                        ";
        }
        // line 654
        echo "                        ";
        echo ($context["text_cheque"] ?? null);
        echo "</label>
                    </div>
                    <div class=\"radio\">
                      <label> ";
        // line 657
        if ((($context["payment"] ?? null) == "paypal")) {
            // line 658
            echo "                        <input type=\"radio\" name=\"payment\" value=\"paypal\" checked=\"checked\" />
                        ";
        } else {
            // line 660
            echo "                        <input type=\"radio\" name=\"payment\" value=\"paypal\" />
                        ";
        }
        // line 662
        echo "                        ";
        echo ($context["text_paypal"] ?? null);
        echo "</label>
                    </div>
                    <div class=\"radio\">
                      <label> ";
        // line 665
        if ((($context["payment"] ?? null) == "bank")) {
            // line 666
            echo "                        <input type=\"radio\" name=\"payment\" value=\"bank\" checked=\"checked\" />
                        ";
        } else {
            // line 668
            echo "                        <input type=\"radio\" name=\"payment\" value=\"bank\" />
                        ";
        }
        // line 670
        echo "                        ";
        echo ($context["text_bank"] ?? null);
        echo "</label>
                    </div>
                  </div>
                </div>
                <div id=\"payment-cheque\" class=\"payment\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-cheque\">";
        // line 676
        echo ($context["entry_cheque"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"cheque\" value=\"";
        // line 678
        echo ($context["cheque"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_cheque"] ?? null);
        echo "\" id=\"input-cheque\" class=\"form-control\" />
                      ";
        // line 679
        if (($context["error_cheque"] ?? null)) {
            // line 680
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_cheque"] ?? null);
            echo "</div>
                      ";
        }
        // line 681
        echo "</div>
                  </div>
                </div>
                <div id=\"payment-paypal\" class=\"payment\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-paypal\">";
        // line 686
        echo ($context["entry_paypal"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"paypal\" value=\"";
        // line 688
        echo ($context["paypal"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_paypal"] ?? null);
        echo "\" id=\"input-paypal\" class=\"form-control\" />
                      ";
        // line 689
        if (($context["error_paypal"] ?? null)) {
            // line 690
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_paypal"] ?? null);
            echo "</div>
                      ";
        }
        // line 691
        echo "</div>
                  </div>
                </div>
                <div id=\"payment-bank\" class=\"payment\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-name\">";
        // line 696
        echo ($context["entry_bank_name"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_name\" value=\"";
        // line 698
        echo ($context["bank_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_name"] ?? null);
        echo "\" id=\"input-bank-name\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-branch-number\">";
        // line 702
        echo ($context["entry_bank_branch_number"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_branch_number\" value=\"";
        // line 704
        echo ($context["bank_branch_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_branch_number"] ?? null);
        echo "\" id=\"input-bank-branch-number\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-swift-code\">";
        // line 708
        echo ($context["entry_bank_swift_code"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_swift_code\" value=\"";
        // line 710
        echo ($context["bank_swift_code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_swift_code"] ?? null);
        echo "\" id=\"input-bank-swift-code\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-account-name\">";
        // line 714
        echo ($context["entry_bank_account_name"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_name\" value=\"";
        // line 716
        echo ($context["bank_account_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_account_name"] ?? null);
        echo "\" id=\"input-bank-account-name\" class=\"form-control\" />
                      ";
        // line 717
        if (($context["error_bank_account_name"] ?? null)) {
            // line 718
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_bank_account_name"] ?? null);
            echo "</div>
                      ";
        }
        // line 719
        echo "</div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-account-number\">";
        // line 722
        echo ($context["entry_bank_account_number"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_number\" value=\"";
        // line 724
        echo ($context["bank_account_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_account_number"] ?? null);
        echo "\" id=\"input-bank-account-number\" class=\"form-control\" />
                      ";
        // line 725
        if (($context["error_bank_account_number"] ?? null)) {
            // line 726
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_bank_account_number"] ?? null);
            echo "</div>
                      ";
        }
        // line 727
        echo "</div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\">";
        // line 731
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"affiliate\" id=\"input-affiliate\" class=\"form-control\">
                      ";
        // line 734
        if (($context["affiliate"] ?? null)) {
            // line 735
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 736
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 738
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 739
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 741
        echo "                     </select>
                  </div>
                </div>
              </fieldset>           
            </div> 
            <div id=\"tab-history\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 748
        echo ($context["text_history"] ?? null);
        echo "</legend>
                <div id=\"history\">";
        // line 749
        echo ($context["history"] ?? null);
        echo "</div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 752
        echo ($context["text_history_add"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-history\" class=\"col-sm-2 col-form-label\">";
        // line 754
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 756
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-history\" class=\"form-control\"></textarea>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 760
        echo ($context["button_history_add"] ?? null);
        echo "</button>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-transaction\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 767
        echo ($context["text_transaction"] ?? null);
        echo "</legend>
                <div id=\"transaction\">";
        // line 768
        echo ($context["transaction"] ?? null);
        echo "</div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 771
        echo ($context["text_transaction_add"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-transaction\" class=\"col-sm-2 col-form-label\">";
        // line 773
        echo ($context["entry_description"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
        // line 775
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-transaction\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-amount\" class=\"col-sm-2 col-form-label\">";
        // line 779
        echo ($context["entry_amount"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
        // line 781
        echo ($context["entry_amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" id=\"button-transaction\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 785
        echo ($context["button_transaction_add"] ?? null);
        echo "</button>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 791
        echo ($context["text_reward"] ?? null);
        echo "</legend>
                <div id=\"reward\">";
        // line 792
        echo ($context["reward"] ?? null);
        echo "</div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 795
        echo ($context["text_reward_add"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-reward\" class=\"col-sm-2 col-form-label\">";
        // line 797
        echo ($context["entry_description"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
        // line 799
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-reward\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">";
        // line 803
        echo ($context["entry_points"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"points\" value=\"\" placeholder=\"";
        // line 805
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 806
        echo ($context["help_points"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" id=\"button-reward\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 810
        echo ($context["button_reward_add"] ?? null);
        echo "</button>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-ip\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 816
        echo ($context["text_ip"] ?? null);
        echo "</legend>
                <div id=\"ip\">";
        // line 817
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
\$('#input-customer-group').on('change', function () {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token=";
        // line 829
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
        // line 853
        echo ($context["address_row"] ?? null);
        echo ";

\$('#button-address').on('click', function (e) {
    e.preventDefault();

    html = '<fieldset id=\"address-row-' + address_row + '\">';
    html += '  <legend>";
        // line 859
        echo ($context["text_address"] ?? null);
        echo " ' + (address_row + 1) + ' <button type=\"button\" onclick=\"\$(\\'#address-row-' + address_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger btn-sm float-end\"><i class=\"fa-solid fa-minus-circle\"></i></button></legend>';
    html += '  <input type=\"hidden\" name=\"address[' + address_row + '][address_id]\" value=\"\" />';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 863
        echo twig_escape_filter($this->env, ($context["entry_firstname"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][firstname]\" value=\"\" placeholder=\"";
        // line 865
        echo twig_escape_filter($this->env, ($context["entry_firstname"] ?? null), "js");
        echo "\" id=\"input-address-' + address_row + '-firstname\" class=\"form-control\"/>';
    html += '      <div id=\"error-address-' + address_row + '-firstname\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 871
        echo twig_escape_filter($this->env, ($context["entry_lastname"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][lastname]\" value=\"\" placeholder=\"";
        // line 873
        echo twig_escape_filter($this->env, ($context["entry_lastname"] ?? null), "js");
        echo "\" id=\"input-address-' + address_row + '-lastname\" class=\"form-control\"/>';
    html += '      <div id=\"error-address-' + address_row + '-lastname\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3\">';
    html += '    <label for=\"input-address-' + address_row + '-company\" class=\"col-sm-2 col-form-label\">";
        // line 879
        echo twig_escape_filter($this->env, ($context["entry_company"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][company]\" value=\"\" placeholder=\"";
        // line 880
        echo twig_escape_filter($this->env, ($context["entry_company"] ?? null), "js");
        echo "\" id=\"input-address-' + address_row + '-company\" class=\"form-control\"/></div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-address-1\" class=\"col-sm-2 col-form-label\">";
        // line 884
        echo twig_escape_filter($this->env, ($context["entry_address_1"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][address_1]\" value=\"\" placeholder=\"";
        // line 886
        echo twig_escape_filter($this->env, ($context["entry_address_1"] ?? null), "js");
        echo "\" id=\"input-address-' + address_row + '-address-1\" class=\"form-control\"/>';
    html += '      <div id=\"error-address-' + address_row + '-address-1\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3\">';
    html += '    <label for=\"input-address-' + address_row + '-address-2\" class=\"col-sm-2 col-form-label\">";
        // line 892
        echo twig_escape_filter($this->env, ($context["entry_address_2"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_2]\" value=\"\" placeholder=\"";
        // line 893
        echo twig_escape_filter($this->env, ($context["entry_address_2"] ?? null), "js");
        echo "\" id=\"input-address-' + address_row + '-address-2\" class=\"form-control\"/></div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-city\" class=\"col-sm-2 col-form-label\">";
        // line 897
        echo twig_escape_filter($this->env, ($context["entry_city"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][city]\" value=\"\" placeholder=\"";
        // line 899
        echo twig_escape_filter($this->env, ($context["entry_city"] ?? null), "js");
        echo "\" id=\"input-address-' + address_row + '-city\" class=\"form-control\"/>';
    html += '      <div id=\"error-address-' + address_row + '-city\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-postcode\" class=\"col-sm-2 col-form-label\">";
        // line 905
        echo twig_escape_filter($this->env, ($context["entry_postcode"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][postcode]\" value=\"\" placeholder=\"";
        // line 907
        echo twig_escape_filter($this->env, ($context["entry_postcode"] ?? null), "js");
        echo "\" id=\"input-address-' + address_row + '-postcode\" class=\"form-control\"/>';
    html += '      <div id=\"error-address-' + address_row + '-postcode\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-country\" class=\"col-sm-2 col-form-label\">";
        // line 913
        echo twig_escape_filter($this->env, ($context["entry_country"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '       <select name=\"address[' + address_row + '][country_id]\" id=\"input-address-' + address_row + '-country\" data-address-row=\"' + address_row + '\" data-zone-id=\"0\" class=\"form-select\" disabled>';
    html += '         <option value=\"0\">";
        // line 916
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';
  ";
        // line 917
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 918
            echo "    html += '         <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 918);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 918), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 920
        echo "    html += '      </select>';
    html += '      <div id=\"error-address-' + address_row + '-country\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-zone\" class=\"col-sm-2 col-form-label\">";
        // line 926
        echo twig_escape_filter($this->env, ($context["entry_zone"] ?? null), "js");
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <select name=\"address[' + address_row + '][zone_id]\" id=\"input-address-' + address_row + '-zone\" class=\"form-select\" disabled><option value=\"\">";
        // line 928
        echo twig_escape_filter($this->env, ($context["text_none"] ?? null), "js");
        echo "</option></select>';
    html += '      <div id=\"error-address-' + address_row + '-zone\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    // Custom Fields
  ";
        // line 934
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 935
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 935) == "address")) {
                // line 936
                echo "  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 936) == "select")) {
                    // line 937
                    echo "
    html += '<div class=\"row mb-3 custom-field custom-field-";
                    // line 938
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 938);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 939
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 939);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 939), "js");
                    echo "</label>';
    html += '\t <div class=\"col-sm-10\">';
    html += '    <select name=\"address[' + address_row + '][custom_field][";
                    // line 941
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 941);
                    echo "]\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 941);
                    echo "\" class=\"form-select\">';
    html += '      <option value=\"\">";
                    // line 942
                    echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
                    echo "</option>';

  ";
                    // line 944
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 944));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 945
                        echo "    html += '\t\t   <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 945);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 945), "js");
                        echo "</option>';
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 947
                    echo "
    html += '\t   </select>';
    html += '    <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 949
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 949);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '\t </div>';
    html += '</div>';
  ";
                }
                // line 953
                echo "
  ";
                // line 954
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 954) == "radio")) {
                    // line 955
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 955);
                    echo "\">';
    html += '  <label class=\"col-sm-2 col-form-label\">";
                    // line 956
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 956), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div id=\"input-address-' + address_row + '-custom-field-";
                    // line 958
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 958);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">';

  ";
                    // line 960
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 960));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 961
                        echo "    html += '  \t\t     <div class=\"form-check\">';
    html += '  \t\t       <input type=\"radio\" name=\"address[' + address_row + '][custom_field][";
                        // line 962
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 962);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 962);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 962);
                        echo "\" class=\"form-check-input\"/>';
    html += '  \t\t       <label for=\"input-custom-value-";
                        // line 963
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 963);
                        echo "\" class=\"form-check-label\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 963), "js");
                        echo "</label>';
    html += '\t\t       </div>';
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 966
                    echo "
    html += '\t\t </div>';
    html += '    <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 968
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 968);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 972
                echo "
  ";
                // line 973
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 973) == "checkbox")) {
                    // line 974
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 974);
                    echo "\">';
    html += '  <label class=\"col-sm-2 col-form-label\">";
                    // line 975
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 975), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div id=\"input-address-' + address_row + '-custom-field-";
                    // line 977
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 977);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">';

  ";
                    // line 979
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 979));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 980
                        echo "    html += '      <div class=\"form-check\">';
    html += '        <input type=\"checkbox\" name=\"address[";
                        // line 981
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 981);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 981);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 981);
                        echo "\" class=\"form-check-input\"/>';
    html += '        <label for=\"input-custom-value-";
                        // line 982
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 982);
                        echo "\" class=\"form-check-label\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 982), "js");
                        echo "</label>';
    html += '\t\t   </div>';
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 985
                    echo "
    html += '\t\t </div>';
    html += '    <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 987
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 987);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 991
                echo "
  ";
                // line 992
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 992) == "text")) {
                    // line 993
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 993);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 994
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 994);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 994), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 996
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 996);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 996), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 996), "js");
                    echo "\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 996);
                    echo "\" class=\"form-control\"/>';
    html += '  </div>';
    html += '  <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 998
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 998);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '</div>';
  ";
                }
                // line 1001
                echo "
  ";
                // line 1002
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1002) == "textarea")) {
                    // line 1003
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1003);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 1004
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1004);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1004), "js");
                    echo "</label>';
    html += '\t <div class=\"col-sm-10\">';
    html += '\t   <textarea name=\"address[' + address_row + '][custom_field][";
                    // line 1006
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1006);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1006), "js");
                    echo "\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1006);
                    echo "\" class=\"form-control\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1006), "js");
                    echo "</textarea>';
    html += '\t   <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 1007
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1007);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 1011
                echo "
  ";
                // line 1012
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1012) == "file")) {
                    // line 1013
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1013);
                    echo "\">';
    html += '  <label class=\"col-sm-2 col-form-label\">";
                    // line 1014
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1014), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div class=\"input-group\">';
    html += '      <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 1017
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1017);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo twig_escape_filter($this->env, ($context["error_upload_size"] ?? null), "js");
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo twig_escape_filter($this->env, ($context["button_upload"] ?? null), "js");
                    echo "</button>';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1018
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1018);
                    echo "]\" value=\"\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1018);
                    echo "\" class=\"form-control\" readonly/>';
    html += '      <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-address-' + address_row + '-custom-field-";
                    // line 1019
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1019);
                    echo "\" class=\"btn btn-outline-secondary\" disabled><i class=\"fa-solid fa-download\"></i> ";
                    echo twig_escape_filter($this->env, ($context["button_download"] ?? null), "js");
                    echo "</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 1020
                    echo twig_escape_filter($this->env, ($context["button_clear"] ?? null), "js");
                    echo "\" data-oc-target=\"#input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1020);
                    echo "\" class=\"btn btn-outline-danger\" disabled><i class=\"fa-solid fa-eraser\"></i></button>';
    html += '    </div>';
    html += '\t   <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 1022
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1022);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 1026
                echo "
  ";
                // line 1027
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1027) == "date")) {
                    // line 1028
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1028);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 1029
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1029);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1029), "js");
                    echo "</label>';
    html += '\t <div class=\"col-sm-10\">';
    html += '\t\t <div class=\"input-group\">';
    html += '\t\t   <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1032
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1032);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1032), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1032), "js");
                    echo "\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1032);
                    echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>';
    html += '\t\t </div>';
    html += '\t   <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 1034
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1034);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '\t </div>';
    html += '</div>';
  ";
                }
                // line 1038
                echo "
  ";
                // line 1039
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1039) == "time")) {
                    // line 1040
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1040);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 1041
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1041);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1041), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div class=\"input-group\">';
    html += '\t\t   <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1044
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1044);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1044), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1044), "js");
                    echo "\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1044);
                    echo "\" class=\"form-control time\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>';
    html += '    </div>';
    html += '\t   <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 1046
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1046);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 1050
                echo "
  ";
                // line 1051
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1051) == "datetime")) {
                    // line 1052
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1052);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 1053
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1053);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1053), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div class=\"input-group\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1056
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1056);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1056), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1056), "js");
                    echo "\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1056);
                    echo "\" class=\"form-control datetime\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>';
    html += '    </div>';
    html += '\t   <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 1058
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1058);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 1062
                echo "
  ";
            }
            // line 1064
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1065
        echo "
    html += '<div class=\"row mb-3\">';
    html += '  <label for=\"input-address-' + address_row + '-default\" class=\"col-sm-2 col-form-label\">";
        // line 1067
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
        // line 1095
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
        // line 1112
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
        // line 1125
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
        // line 1141
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
        // line 1154
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
        // line 1200
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
        // line 1215
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
        // line 1234
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
        // line 1253
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
        // line 1274
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
        // line 1295
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
        // line 1316
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
        // line 1338
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
        // line 1359
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
        // line 1377
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
        return array (  3529 => 1377,  3508 => 1359,  3484 => 1338,  3459 => 1316,  3435 => 1295,  3411 => 1274,  3387 => 1253,  3365 => 1234,  3343 => 1215,  3325 => 1200,  3276 => 1154,  3260 => 1141,  3241 => 1125,  3225 => 1112,  3205 => 1095,  3174 => 1067,  3170 => 1065,  3164 => 1064,  3160 => 1062,  3153 => 1058,  3142 => 1056,  3134 => 1053,  3129 => 1052,  3127 => 1051,  3124 => 1050,  3117 => 1046,  3106 => 1044,  3098 => 1041,  3093 => 1040,  3091 => 1039,  3088 => 1038,  3081 => 1034,  3070 => 1032,  3062 => 1029,  3057 => 1028,  3055 => 1027,  3052 => 1026,  3045 => 1022,  3038 => 1020,  3032 => 1019,  3026 => 1018,  3014 => 1017,  3008 => 1014,  3003 => 1013,  3001 => 1012,  2998 => 1011,  2991 => 1007,  2981 => 1006,  2974 => 1004,  2969 => 1003,  2967 => 1002,  2964 => 1001,  2958 => 998,  2947 => 996,  2940 => 994,  2935 => 993,  2933 => 992,  2930 => 991,  2923 => 987,  2919 => 985,  2908 => 982,  2898 => 981,  2895 => 980,  2891 => 979,  2886 => 977,  2881 => 975,  2876 => 974,  2874 => 973,  2871 => 972,  2864 => 968,  2860 => 966,  2849 => 963,  2841 => 962,  2838 => 961,  2834 => 960,  2829 => 958,  2824 => 956,  2819 => 955,  2817 => 954,  2814 => 953,  2807 => 949,  2803 => 947,  2792 => 945,  2788 => 944,  2783 => 942,  2777 => 941,  2770 => 939,  2766 => 938,  2763 => 937,  2760 => 936,  2757 => 935,  2753 => 934,  2744 => 928,  2739 => 926,  2731 => 920,  2720 => 918,  2716 => 917,  2712 => 916,  2706 => 913,  2697 => 907,  2692 => 905,  2683 => 899,  2678 => 897,  2671 => 893,  2667 => 892,  2658 => 886,  2653 => 884,  2646 => 880,  2642 => 879,  2633 => 873,  2628 => 871,  2619 => 865,  2614 => 863,  2605 => 859,  2596 => 853,  2569 => 829,  2554 => 817,  2550 => 816,  2541 => 810,  2534 => 806,  2530 => 805,  2525 => 803,  2518 => 799,  2513 => 797,  2508 => 795,  2502 => 792,  2498 => 791,  2489 => 785,  2482 => 781,  2477 => 779,  2470 => 775,  2465 => 773,  2460 => 771,  2454 => 768,  2450 => 767,  2440 => 760,  2433 => 756,  2428 => 754,  2423 => 752,  2417 => 749,  2413 => 748,  2404 => 741,  2399 => 739,  2394 => 738,  2389 => 736,  2384 => 735,  2382 => 734,  2376 => 731,  2370 => 727,  2364 => 726,  2362 => 725,  2356 => 724,  2351 => 722,  2346 => 719,  2340 => 718,  2338 => 717,  2332 => 716,  2327 => 714,  2318 => 710,  2313 => 708,  2304 => 704,  2299 => 702,  2290 => 698,  2285 => 696,  2278 => 691,  2272 => 690,  2270 => 689,  2264 => 688,  2259 => 686,  2252 => 681,  2246 => 680,  2244 => 679,  2238 => 678,  2233 => 676,  2223 => 670,  2219 => 668,  2215 => 666,  2213 => 665,  2206 => 662,  2202 => 660,  2198 => 658,  2196 => 657,  2189 => 654,  2185 => 652,  2181 => 650,  2179 => 649,  2173 => 646,  2164 => 642,  2159 => 640,  2154 => 638,  2150 => 636,  2144 => 635,  2141 => 634,  2136 => 631,  2130 => 630,  2128 => 629,  2115 => 625,  2107 => 622,  2100 => 621,  2097 => 620,  2092 => 617,  2086 => 616,  2084 => 615,  2071 => 611,  2063 => 608,  2056 => 607,  2053 => 606,  2048 => 603,  2042 => 602,  2040 => 601,  2027 => 597,  2019 => 594,  2012 => 593,  2009 => 592,  2004 => 589,  1998 => 588,  1996 => 587,  1988 => 586,  1980 => 585,  1975 => 583,  1968 => 582,  1965 => 581,  1960 => 578,  1954 => 577,  1952 => 576,  1942 => 575,  1935 => 573,  1928 => 572,  1925 => 571,  1920 => 568,  1914 => 567,  1912 => 566,  1902 => 565,  1895 => 563,  1888 => 562,  1885 => 561,  1880 => 558,  1874 => 557,  1872 => 556,  1869 => 555,  1862 => 554,  1857 => 553,  1851 => 552,  1848 => 551,  1843 => 549,  1837 => 548,  1834 => 547,  1831 => 546,  1827 => 545,  1822 => 543,  1815 => 542,  1812 => 541,  1807 => 538,  1801 => 537,  1799 => 536,  1796 => 535,  1789 => 534,  1784 => 533,  1778 => 532,  1775 => 531,  1770 => 529,  1764 => 528,  1761 => 527,  1758 => 526,  1754 => 525,  1749 => 523,  1742 => 522,  1739 => 521,  1734 => 518,  1728 => 517,  1726 => 516,  1723 => 515,  1717 => 514,  1709 => 512,  1701 => 510,  1698 => 509,  1694 => 508,  1690 => 507,  1684 => 506,  1677 => 504,  1670 => 503,  1667 => 502,  1664 => 501,  1660 => 500,  1652 => 497,  1645 => 495,  1640 => 492,  1634 => 490,  1632 => 489,  1626 => 488,  1619 => 486,  1610 => 482,  1605 => 480,  1596 => 476,  1591 => 474,  1586 => 472,  1579 => 468,  1574 => 466,  1571 => 465,  1565 => 464,  1563 => 463,  1556 => 461,  1543 => 457,  1535 => 454,  1531 => 452,  1524 => 450,  1520 => 448,  1511 => 444,  1495 => 441,  1485 => 438,  1480 => 437,  1478 => 436,  1475 => 435,  1466 => 431,  1450 => 428,  1440 => 425,  1435 => 424,  1433 => 423,  1430 => 422,  1421 => 418,  1405 => 415,  1395 => 412,  1390 => 411,  1388 => 410,  1385 => 409,  1376 => 405,  1363 => 403,  1351 => 402,  1339 => 401,  1325 => 400,  1319 => 397,  1314 => 396,  1312 => 395,  1309 => 394,  1300 => 390,  1286 => 389,  1277 => 387,  1272 => 386,  1270 => 385,  1267 => 384,  1258 => 380,  1244 => 379,  1235 => 377,  1230 => 376,  1228 => 375,  1225 => 374,  1216 => 370,  1213 => 369,  1190 => 366,  1187 => 365,  1183 => 364,  1177 => 363,  1172 => 361,  1167 => 360,  1165 => 359,  1162 => 358,  1153 => 354,  1150 => 353,  1127 => 350,  1124 => 349,  1120 => 348,  1114 => 347,  1109 => 345,  1104 => 344,  1102 => 343,  1099 => 342,  1090 => 338,  1087 => 337,  1072 => 335,  1068 => 334,  1064 => 333,  1054 => 332,  1045 => 330,  1040 => 329,  1038 => 328,  1035 => 327,  1032 => 326,  1028 => 325,  1021 => 321,  1015 => 320,  1008 => 318,  1001 => 314,  998 => 313,  983 => 311,  979 => 310,  975 => 309,  965 => 308,  958 => 306,  951 => 302,  941 => 301,  934 => 299,  927 => 295,  917 => 294,  910 => 292,  897 => 288,  890 => 286,  883 => 282,  873 => 281,  866 => 279,  853 => 275,  846 => 273,  839 => 269,  829 => 268,  822 => 266,  815 => 262,  805 => 261,  798 => 259,  787 => 257,  782 => 256,  777 => 255,  775 => 254,  766 => 248,  759 => 246,  753 => 243,  743 => 238,  737 => 235,  727 => 230,  721 => 227,  716 => 225,  705 => 219,  700 => 217,  690 => 212,  685 => 210,  680 => 208,  676 => 206,  670 => 205,  666 => 203,  659 => 199,  647 => 196,  639 => 193,  634 => 192,  632 => 191,  629 => 190,  622 => 186,  610 => 183,  602 => 180,  597 => 179,  595 => 178,  592 => 177,  585 => 173,  573 => 170,  565 => 167,  560 => 166,  558 => 165,  555 => 164,  548 => 160,  536 => 157,  526 => 156,  518 => 155,  506 => 154,  499 => 150,  494 => 149,  492 => 148,  489 => 147,  482 => 143,  472 => 142,  465 => 140,  460 => 139,  458 => 138,  455 => 137,  448 => 133,  438 => 132,  431 => 130,  426 => 129,  424 => 128,  421 => 127,  414 => 123,  411 => 122,  390 => 119,  387 => 118,  383 => 117,  379 => 116,  374 => 114,  369 => 113,  367 => 112,  364 => 111,  357 => 107,  354 => 106,  333 => 103,  330 => 102,  326 => 101,  322 => 100,  317 => 98,  312 => 97,  310 => 96,  307 => 95,  300 => 91,  297 => 90,  282 => 88,  278 => 87,  274 => 86,  268 => 85,  261 => 83,  256 => 82,  254 => 81,  251 => 80,  249 => 79,  246 => 78,  242 => 77,  233 => 73,  228 => 71,  222 => 70,  213 => 66,  208 => 64,  198 => 59,  193 => 57,  183 => 52,  178 => 50,  172 => 46,  157 => 44,  153 => 43,  147 => 40,  142 => 38,  136 => 34,  131 => 32,  127 => 31,  123 => 30,  118 => 29,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  99 => 23,  94 => 21,  87 => 16,  76 => 14,  72 => 13,  67 => 11,  61 => 10,  56 => 9,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_form.twig", "");
    }
}
