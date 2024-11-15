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

/* journal3/template/account/register.twig */
class __TwigTemplate_1c4a42d5f9253bbc3ef18e2598fe8059 extends Template
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
        echo "
";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 2) == "top")) {
            // line 3
            echo "  <h1 class=\"title page-title ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 3);
            echo "\"><span class=\"page-title-text\">";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 5
        echo "<div class=\"breadcrumbs ";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["breadcrumbs_color_scheme"], "method", false, false, false, 5);
        echo "\">
  <ul class=\"breadcrumb\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  </ul>
</div>
";
        // line 12
        echo ($context["journal3_top"] ?? null);
        echo "
<div id=\"account-register\" class=\"container\">
  ";
        // line 14
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 17
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 18
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 20
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo " register-page\">
      ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 26) == "default")) {
            // line 27
            echo "      <h1 class=\"title page-title ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 27);
            echo "\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 29
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 30
        if ( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 30)) {
            // line 31
            echo "      <p>";
            echo ($context["text_account_already"] ?? null);
            echo "</p>
      ";
        }
        // line 33
        echo "      <div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\"></div>
      <form action=\"";
        // line 34
        echo ((($context["journal3_is_oc4"] ?? null)) ? (($context["register"] ?? null)) : (($context["action"] ?? null)));
        echo "\" method=\"post\" ";
        if (($context["journal3_is_oc3"] ?? null)) {
            echo "enctype=\"multipart/form-data\"";
        }
        echo " class=\"register-form form-horizontal\" ";
        if (($context["journal3_is_oc4"] ?? null)) {
            echo "data-oc-toggle=\"ajax\"";
        }
        echo ">
        <div id=\"account\">
          <legend>";
        // line 36
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
          <h2 class=\"sr-only\">";
        // line 37
        echo ($context["text_your_details"] ?? null);
        echo "</h2>
          <div class=\"form-group required account-customer-group\" style=\"display: ";
        // line 38
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
            <label class=\"col-sm-2 control-label\">";
        // line 39
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 41
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 41) == ($context["customer_group_id"] ?? null))) {
                // line 42
                echo "              <div class=\"radio\">
                <label for=\"input-customer-group-";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 43);
                echo "\">
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 44);
                echo "\" checked=\"checked\" id=\"input-customer-group-";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 44);
                echo "\" />
                  ";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 45);
                echo "</label>
              </div>
              ";
            } else {
                // line 48
                echo "              <div class=\"radio\">
                <label for=\"input-customer-group-";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 49);
                echo "\">
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 50);
                echo "\" id=\"input-customer-group-";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 50);
                echo "\" />
                  ";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 51);
                echo "</label>
              </div>
              ";
            }
            // line 54
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>
          <div class=\"form-group ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAccountFirstNameField"], "method", false, false, false, 56) == "required")) {
            echo "required";
        }
        echo " account-firstname\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 57
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 59
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 60
        if (($context["error_firstname"] ?? null)) {
            // line 61
            echo "              <div id=\"error-firstname\" class=\"text-danger invalid-feedback\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
              ";
        }
        // line 62
        echo " </div>
          </div>
          <div class=\"form-group ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAccountLastNameField"], "method", false, false, false, 64) == "required")) {
            echo "required";
        }
        echo " account-lastname\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 65
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 67
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 68
        if (($context["error_lastname"] ?? null)) {
            // line 69
            echo "              <div id=\"error-lastname\" class=\"text-danger invalid-feedback\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
              ";
        }
        // line 70
        echo " </div>
          </div>
          <div class=\"form-group required account-email\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 73
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" name=\"email\" value=\"";
        // line 75
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 76
        if (($context["error_email"] ?? null)) {
            // line 77
            echo "              <div id=\"error-email\" class=\"text-danger invalid-feedback\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 78
        echo " </div>
          </div>
          <div class=\"form-group ";
        // line 80
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAccountTelephoneField"], "method", false, false, false, 80) == "required")) {
            echo "required";
        }
        echo " account-telephone\">
            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 81
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"tel\" name=\"telephone\" value=\"";
        // line 83
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 84
        if (($context["error_telephone"] ?? null)) {
            // line 85
            echo "              <div id=\"error-telephone\" class=\"text-danger invalid-feedback\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
              ";
        }
        // line 86
        echo " </div>
          </div>
          ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 89
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 89) == "select")) {
                // line 90
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 90);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 91
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "-";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 91);
                echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"custom_field";
                // line 93
                if ( !($context["journal3_is_oc4"] ?? null)) {
                    echo "[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 93);
                    echo "]";
                }
                echo "[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 93);
                echo "]\" id=\"input-custom-field";
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "-";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 93);
                echo "\" class=\"form-control\">
                <option value=\"\">";
                // line 94
                echo ($context["text_select"] ?? null);
                echo "</option>
                ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 95));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 96
                    echo "                ";
                    if (((($__internal_compile_0 = (($__internal_compile_1 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 96)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 96) == (($__internal_compile_2 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96)] ?? null) : null)))) {
                        // line 97
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 97);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 97);
                        echo "</option>
                ";
                    } else {
                        // line 99
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 99);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 99);
                        echo "</option>
                ";
                    }
                    // line 101
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "              </select>
              ";
                // line 103
                if (((($__internal_compile_3 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 104
                    echo "              <div id=\"error-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    echo "\" class=\"text-danger invalid-feedback\">";
                    echo (($__internal_compile_4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 105
                echo "</div>
          </div>
          ";
            }
            // line 108
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 108) == "radio")) {
                // line 109
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 109);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 110);
                echo "</label>
            <div class=\"col-sm-10\">
              <div data-id=\"input-custom-field";
                // line 112
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "-";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                echo "\"> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 112));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 113
                    echo "                <div class=\"radio\">";
                    if (((($__internal_compile_5 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 113) == (($__internal_compile_6 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113)] ?? null) : null)))) {
                        // line 114
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field";
                        // line 115
                        if ( !($context["journal3_is_oc4"] ?? null)) {
                            echo "[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 115);
                            echo "]";
                        }
                        echo "[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 115);
                        echo "\" checked=\"checked\" />
                    ";
                        // line 116
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 116);
                        echo "</label>
                  ";
                    } else {
                        // line 118
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field";
                        // line 119
                        if ( !($context["journal3_is_oc4"] ?? null)) {
                            echo "[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 119);
                            echo "]";
                        }
                        echo "[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 119);
                        echo "\" />
                    ";
                        // line 120
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 120);
                        echo "</label>
                  ";
                    }
                    // line 121
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "</div>
              ";
                // line 123
                if (((($__internal_compile_7 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 124
                    echo "              <div id=\"error-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                    echo "\" class=\"text-danger invalid-feedback\">";
                    echo (($__internal_compile_8 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 125
                echo "</div>
          </div>
          ";
            }
            // line 128
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 128) == "checkbox")) {
                // line 129
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 129);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 130);
                echo "</label>
            <div class=\"col-sm-10\">
              <div data-id=\"input-custom-field";
                // line 132
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "-";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                echo "\"> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 132));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 133
                    echo "                <div class=\"checkbox\">";
                    if (((($__internal_compile_9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 133), (($__internal_compile_10 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null)))) {
                        // line 134
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field";
                        // line 135
                        if ( !($context["journal3_is_oc4"] ?? null)) {
                            echo "[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 135);
                            echo "]";
                        }
                        echo "[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 135);
                        echo "\" checked=\"checked\" />
                    ";
                        // line 136
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 136);
                        echo "</label>
                  ";
                    } else {
                        // line 138
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field";
                        // line 139
                        if ( !($context["journal3_is_oc4"] ?? null)) {
                            echo "[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 139);
                            echo "]";
                        }
                        echo "[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 139);
                        echo "\" />
                    ";
                        // line 140
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 140);
                        echo "</label>
                  ";
                    }
                    // line 141
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo " </div>
              ";
                // line 143
                if (((($__internal_compile_11 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 144
                    echo "              <div id=\"error-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                    echo "\" class=\"text-danger invalid-feedback\">";
                    echo (($__internal_compile_12 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 145
                echo " </div>
          </div>
          ";
            }
            // line 148
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 148) == "text")) {
                // line 149
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 149);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 150
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "-";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 150);
                echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"custom_field";
                // line 152
                if ( !($context["journal3_is_oc4"] ?? null)) {
                    echo "[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 152);
                    echo "]";
                }
                echo "[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                echo "]\" value=\"";
                if ((($__internal_compile_13 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152)] ?? null) : null)) {
                    echo (($__internal_compile_14 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 152);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 152);
                echo "\" id=\"input-custom-field";
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "-";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                echo "\" class=\"form-control\" />
              ";
                // line 153
                if (((($__internal_compile_15 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 154
                    echo "              <div id=\"error-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                    echo "\" class=\"text-danger invalid-feedback\">";
                    echo (($__internal_compile_16 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 155
                echo " </div>
          </div>
          ";
            }
            // line 158
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 158) == "textarea")) {
                // line 159
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 159);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 160
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "-";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 160);
                echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"custom_field";
                // line 162
                if ( !($context["journal3_is_oc4"] ?? null)) {
                    echo "[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 162);
                    echo "]";
                }
                echo "[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 162);
                echo "\" id=\"input-custom-field";
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "-";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                echo "\" class=\"form-control\">";
                if ((($__internal_compile_17 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162)] ?? null) : null)) {
                    echo (($__internal_compile_18 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 162);
                }
                echo "</textarea>
              ";
                // line 163
                if (((($__internal_compile_19 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 164
                    echo "              <div id=\"error-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                    echo "\" class=\"text-danger invalid-feedback\">";
                    echo (($__internal_compile_20 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 165
                echo " </div>
          </div>
          ";
            }
            // line 168
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 168) == "file")) {
                // line 169
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 169);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 170
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 170);
                echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-custom-field";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
              <input type=\"hidden\" name=\"custom_field";
                // line 173
                if ( !($context["journal3_is_oc4"] ?? null)) {
                    echo "[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 173);
                    echo "]";
                }
                echo "[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                echo "]\" value=\"";
                if ((($__internal_compile_21 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_compile_22 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173)] ?? null) : null);
                    echo " ";
                }
                echo "\" />
              ";
                // line 174
                if (((($__internal_compile_23 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 175
                    echo "              <div id=\"error-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                    echo "\" class=\"text-danger invalid-feedback\">";
                    echo (($__internal_compile_24 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 176
                echo "</div>
          </div>
          ";
            }
            // line 179
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 179) == "date")) {
                // line 180
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 180);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 181
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "-";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 181);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group ";
                // line 183
                if ( !($context["journal3_is_oc4"] ?? null)) {
                    echo "date";
                }
                echo "\">
                <input type=\"text\" name=\"custom_field";
                // line 184
                if ( !($context["journal3_is_oc4"] ?? null)) {
                    echo "[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 184);
                    echo "]";
                }
                echo "[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184);
                echo "]\" value=\"";
                if ((($__internal_compile_25 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184)] ?? null) : null)) {
                    echo (($__internal_compile_26 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 184);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 184);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "-";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184);
                echo "\" class=\"form-control ";
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "date";
                }
                echo "\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 188
                if (((($__internal_compile_27 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 189
                    echo "              <div id=\"error-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                    echo "\" class=\"text-danger invalid-feedback\">";
                    echo (($__internal_compile_28 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 190
                echo " </div>
          </div>
          ";
            }
            // line 193
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 193) == "time")) {
                // line 194
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 194);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 195
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "-";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 195);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group ";
                // line 197
                if ( !($context["journal3_is_oc4"] ?? null)) {
                    echo "time";
                }
                echo "\">
                <input type=\"text\" name=\"custom_field";
                // line 198
                if ( !($context["journal3_is_oc4"] ?? null)) {
                    echo "[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 198);
                    echo "]";
                }
                echo "[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                echo "]\" value=\"";
                if ((($__internal_compile_29 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null)) {
                    echo (($__internal_compile_30 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 198);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 198);
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "-";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                echo "\" class=\"form-control ";
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "time";
                }
                echo "\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 202
                if (((($__internal_compile_31 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 203
                    echo "              <div id=\"error-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203);
                    echo "\" class=\"text-danger invalid-feedback\">";
                    echo (($__internal_compile_32 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 204
                echo " </div>
          </div>
          ";
            }
            // line 207
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 207) == "datetime")) {
                // line 208
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 208);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 209
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "-";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 209);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group ";
                // line 211
                if ( !($context["journal3_is_oc4"] ?? null)) {
                    echo "datetime";
                }
                echo "\">
                <input type=\"text\" name=\"custom_field";
                // line 212
                if ( !($context["journal3_is_oc4"] ?? null)) {
                    echo "[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 212);
                    echo "]";
                }
                echo "[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                echo "]\" value=\"";
                if ((($__internal_compile_33 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212)] ?? null) : null)) {
                    echo (($__internal_compile_34 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 212);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 212);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "-";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                echo "\" class=\"form-control ";
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "datetime";
                }
                echo "\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 216
                if (((($__internal_compile_35 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 217
                    echo "              <div id=\"error-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217);
                    echo "\" class=\"text-danger invalid-feedback\">";
                    echo (($__internal_compile_36 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 218
                echo " </div>
          </div>
          ";
            }
            // line 221
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "        </div>
        <fieldset>
          <legend>";
        // line 224
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
          <h2 class=\"sr-only\">";
        // line 225
        echo ($context["text_your_password"] ?? null);
        echo "</h2>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label account-pass\" for=\"input-password\">";
        // line 227
        echo ($context["entry_password"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 229
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 230
        if (($context["error_password"] ?? null)) {
            // line 231
            echo "              <div id=\"error-password\" class=\"text-danger invalid-feedback\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
              ";
        }
        // line 232
        echo " </div>
          </div>
          ";
        // line 234
        if ( !($context["journal3_is_oc4"] ?? null)) {
            // line 235
            echo "          <div class=\"form-group required account-pass2\">
            <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
            // line 236
            echo ($context["entry_confirm"] ?? null);
            echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"";
            // line 238
            echo ($context["confirm"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_confirm"] ?? null);
            echo "\" id=\"input-confirm\" class=\"form-control\" />
              ";
            // line 239
            if (($context["error_confirm"] ?? null)) {
                // line 240
                echo "              <div id=\"error-confirm\" class=\"text-danger invalid-feedback\">";
                echo ($context["error_confirm"] ?? null);
                echo "</div>
              ";
            }
            // line 241
            echo " </div>
          </div>
          ";
        }
        // line 244
        echo "        </fieldset>
        <fieldset>
          <legend>";
        // line 246
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
          <h2 class=\"sr-only\">";
        // line 247
        echo ($context["text_newsletter"] ?? null);
        echo "</h2>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 249
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\"> ";
        // line 250
        if (($context["newsletter"] ?? null)) {
            // line 251
            echo "              <label class=\"radio-inline\" for=\"input-newsletter-yes\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\" id=\"input-newsletter-yes\" />
                ";
            // line 253
            echo ($context["text_yes"] ?? null);
            echo "</label>
              <label class=\"radio-inline\" for=\"input-newsletter-no\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" id=\"input-newsletter-no\" />
                ";
            // line 256
            echo ($context["text_no"] ?? null);
            echo "</label>
              ";
        } else {
            // line 258
            echo "              <label class=\"radio-inline\" for=\"input-newsletter-yes\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" id=\"input-newsletter-yes\" />
                ";
            // line 260
            echo ($context["text_yes"] ?? null);
            echo "</label>
              <label class=\"radio-inline\" for=\"input-newsletter-no\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\" id=\"input-newsletter-no\"/>
                ";
            // line 263
            echo ($context["text_no"] ?? null);
            echo "</label>
              ";
        }
        // line 264
        echo " </div>
          </div>
        </fieldset>
        ";
        // line 267
        echo ($context["captcha"] ?? null);
        echo "
        ";
        // line 268
        if (($context["text_agree"] ?? null)) {
            // line 269
            echo "        <div class=\"buttons\">
          <div class=\"pull-right\"><label for=\"input-agree\">";
            // line 270
            echo ($context["text_agree"] ?? null);
            echo "</label>
            ";
            // line 271
            if (($context["agree"] ?? null)) {
                // line 272
                echo "            <input id=\"input-agree\" type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 274
                echo "            <input id=\"input-agree\" type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 276
            echo "            &nbsp;
            <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"<span>";
            // line 277
            echo ($context["button_continue"] ?? null);
            echo "</span>\"><span>";
            echo ($context["button_continue"] ?? null);
            echo "</span></button>
          </div>
        </div>
        ";
        } else {
            // line 281
            echo "        <div class=\"buttons\">
          <div class=\"pull-right\">
            <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"<span>";
            // line 283
            echo ($context["button_continue"] ?? null);
            echo "</span>\"><span>";
            echo ($context["button_continue"] ?? null);
            echo "</span></button>
          </div>
        </div>
        ";
        }
        // line 287
        echo "      </form>
      ";
        // line 288
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 289
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
    ";
        // line 313
        if (($context["journal3_is_oc3"] ?? null)) {
            // line 314
            echo "\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
    ";
        } else {
            // line 316
            echo "    url: 'index.php?route=account/custom_field&customer_group_id=' + this.value,
    ";
        }
        // line 318
        echo "\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
";
        // line 394
        if (($context["journal3_is_oc3"] ?? null)) {
            // line 395
            echo "<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
            // line 397
            echo ($context["datepicker"] ?? null);
            echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
            // line 402
            echo ($context["datepicker"] ?? null);
            echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
            // line 407
            echo ($context["datepicker"] ?? null);
            echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script>
";
        }
        // line 413
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/account/register.twig";
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
        return array (  1326 => 413,  1317 => 407,  1309 => 402,  1301 => 397,  1297 => 395,  1295 => 394,  1217 => 318,  1213 => 316,  1209 => 314,  1207 => 313,  1180 => 289,  1176 => 288,  1173 => 287,  1164 => 283,  1160 => 281,  1151 => 277,  1148 => 276,  1144 => 274,  1140 => 272,  1138 => 271,  1134 => 270,  1131 => 269,  1129 => 268,  1125 => 267,  1120 => 264,  1115 => 263,  1109 => 260,  1105 => 258,  1100 => 256,  1094 => 253,  1090 => 251,  1088 => 250,  1084 => 249,  1079 => 247,  1075 => 246,  1071 => 244,  1066 => 241,  1060 => 240,  1058 => 239,  1052 => 238,  1047 => 236,  1044 => 235,  1042 => 234,  1038 => 232,  1032 => 231,  1030 => 230,  1024 => 229,  1019 => 227,  1014 => 225,  1010 => 224,  1006 => 222,  1000 => 221,  995 => 218,  987 => 217,  985 => 216,  955 => 212,  949 => 211,  939 => 209,  932 => 208,  929 => 207,  924 => 204,  916 => 203,  914 => 202,  884 => 198,  878 => 197,  868 => 195,  861 => 194,  858 => 193,  853 => 190,  845 => 189,  843 => 188,  813 => 184,  807 => 183,  797 => 181,  790 => 180,  787 => 179,  782 => 176,  774 => 175,  772 => 174,  756 => 173,  748 => 172,  743 => 170,  736 => 169,  733 => 168,  728 => 165,  720 => 164,  718 => 163,  695 => 162,  685 => 160,  678 => 159,  675 => 158,  670 => 155,  662 => 154,  660 => 153,  637 => 152,  627 => 150,  620 => 149,  617 => 148,  612 => 145,  604 => 144,  602 => 143,  599 => 142,  592 => 141,  587 => 140,  575 => 139,  572 => 138,  567 => 136,  555 => 135,  552 => 134,  549 => 133,  540 => 132,  535 => 130,  528 => 129,  525 => 128,  520 => 125,  512 => 124,  510 => 123,  507 => 122,  500 => 121,  495 => 120,  483 => 119,  480 => 118,  475 => 116,  463 => 115,  460 => 114,  457 => 113,  448 => 112,  443 => 110,  436 => 109,  433 => 108,  428 => 105,  420 => 104,  418 => 103,  415 => 102,  409 => 101,  401 => 99,  393 => 97,  390 => 96,  386 => 95,  382 => 94,  367 => 93,  357 => 91,  350 => 90,  347 => 89,  343 => 88,  339 => 86,  333 => 85,  331 => 84,  325 => 83,  320 => 81,  314 => 80,  310 => 78,  304 => 77,  302 => 76,  296 => 75,  291 => 73,  286 => 70,  280 => 69,  278 => 68,  272 => 67,  267 => 65,  261 => 64,  257 => 62,  251 => 61,  249 => 60,  243 => 59,  238 => 57,  232 => 56,  223 => 54,  217 => 51,  211 => 50,  207 => 49,  204 => 48,  198 => 45,  192 => 44,  188 => 43,  185 => 42,  182 => 41,  178 => 40,  174 => 39,  166 => 38,  162 => 37,  158 => 36,  145 => 34,  142 => 33,  136 => 31,  134 => 30,  129 => 29,  121 => 27,  119 => 26,  114 => 25,  111 => 24,  108 => 23,  105 => 22,  102 => 21,  99 => 20,  96 => 19,  94 => 18,  89 => 17,  83 => 15,  81 => 14,  76 => 12,  72 => 10,  61 => 8,  57 => 7,  51 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/register.twig", "");
    }
}
