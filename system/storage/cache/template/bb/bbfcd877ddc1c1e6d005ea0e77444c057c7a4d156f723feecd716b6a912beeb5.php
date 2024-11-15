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

/* setting/setting.twig */
class __TwigTemplate_ef6656ae277b6da99e655209b9b0caaddd4aae54c7c058d1a4eace8222e2d858 extends Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\"  class=\"btn btn-primary\">
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
    ";
        // line 22
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-danger alert-dismissible fade show\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        // line 27
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 28
            echo "    <div class=\"alert alert-success alert-dismissible fade show\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        // line 32
        echo "    <div class=\"card\">
      <div class=\"card-header\">
        <i class=\"fa fa-pencil\"></i> ";
        // line 34
        echo ($context["text_edit"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
       <form action=\"";
        // line 37
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\">
          <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
              <a class=\"nav-link active\" id=\"tab-general-tab\" data-bs-toggle=\"tab\" href=\"#tab-general\" role=\"tab\" aria-controls=\"tab-general\" aria-selected=\"true\">";
        // line 40
        echo ($context["tab_general"] ?? null);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
              <a class=\"nav-link\" id=\"tab-store-tab\" data-bs-toggle=\"tab\" href=\"#tab-store\" role=\"tab\" aria-controls=\"tab-store\" aria-selected=\"false\">";
        // line 43
        echo ($context["tab_store"] ?? null);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
              <a class=\"nav-link\" id=\"tab-local-tab\" data-bs-toggle=\"tab\" href=\"#tab-local\" role=\"tab\" aria-controls=\"tab-local\" aria-selected=\"false\">";
        // line 46
        echo ($context["tab_local"] ?? null);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
              <a class=\"nav-link\" id=\"tab-option-tab\" data-bs-toggle=\"tab\" href=\"#tab-option\" role=\"tab\" aria-controls=\"tab-option\" aria-selected=\"false\">";
        // line 49
        echo ($context["tab_option"] ?? null);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
              <a class=\"nav-link\" id=\"tab-image-tab\" data-bs-toggle=\"tab\" href=\"#tab-image\" role=\"tab\" aria-controls=\"tab-image\" aria-selected=\"false\">";
        // line 52
        echo ($context["tab_image"] ?? null);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
              <a class=\"nav-link\" id=\"tab-mail-tab\" data-bs-toggle=\"tab\" href=\"#tab-mail\" role=\"tab\" aria-controls=\"tab-mail\" aria-selected=\"false\">";
        // line 55
        echo ($context["tab_mail"] ?? null);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
              <a class=\"nav-link\" id=\"tab-server-tab\" data-bs-toggle=\"tab\" href=\"#tab-server\" role=\"tab\" aria-controls=\"tab-server\" aria-selected=\"false\">";
        // line 58
        echo ($context["tab_server"] ?? null);
        echo "</a>
            </li>
          </ul>
          <div class=\"tab-content\" id=\"myTabContent\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                    <label for=\"input-meta-title\" class=\"col-sm-2 col-form-label\">";
        // line 64
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 66
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\"/>
                        ";
        // line 67
        if (($context["error_meta_title"] ?? null)) {
            // line 68
            echo "                            <div id=\"error-meta-title\" class=\"invalid-feedback\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                        ";
        }
        // line 70
        echo "                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-meta-description\" class=\"col-sm-2 col-form-label\">";
        // line 74
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 76
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-meta-keyword\" class=\"col-sm-2 col-form-label\">";
        // line 81
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 83
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">";
        // line 88
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <select name=\"config_theme\" id=\"input-theme\" class=\"form-select\">
                            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 92
            echo "                                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 92);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 92) == ($context["config_theme"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 92);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                        </select>
                        <br/>
                        <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\"/>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">";
        // line 101
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-select\">
                            ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 105
            echo "                                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 105);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 105) == ($context["config_layout_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 105);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                        </select>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
                <div class=\"row mb-3 required\">
                    <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 113
        echo ($context["entry_name"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"config_name\" value=\"";
        // line 115
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                        ";
        // line 116
        if (($context["error_name"] ?? null)) {
            // line 117
            echo "                            <div id=\"error-name\" class=\"invalid-feedback\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                        ";
        }
        // line 119
        echo "                    </div>
                </div>

                <div class=\"row mb-3 required\">
                    <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">";
        // line 123
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"config_owner\" value=\"";
        // line 125
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\"/>
                        ";
        // line 126
        if (($context["error_owner"] ?? null)) {
            // line 127
            echo "                            <div id=\"error-owner\" class=\"invalid-feedback\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                        ";
        }
        // line 129
        echo "                    </div>
                </div>

                <div class=\"row mb-3 required\">
                    <label for=\"input-address\" class=\"col-sm-2 col-form-label\">";
        // line 133
        echo ($context["entry_address"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <textarea name=\"config_address\" placeholder=\"";
        // line 135
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                        ";
        // line 136
        if (($context["error_address"] ?? null)) {
            // line 137
            echo "                            <div id=\"error-address\" class=\"invalid-feedback\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                        ";
        }
        // line 139
        echo "                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">
                        <span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 144
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 147
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\"/>
                    </div>
                </div>

                <div class=\"row mb-3 required\">
                    <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 152
        echo ($context["entry_email"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"config_email\" value=\"";
        // line 154
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                        ";
        // line 155
        if (($context["error_email"] ?? null)) {
            // line 156
            echo "                            <div id=\"error-email\" class=\"invalid-feedback\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                        ";
        }
        // line 158
        echo "                    </div>
                </div>

                <div class=\"row mb-3 required\">
                    <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 162
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 164
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                        ";
        // line 165
        if (($context["error_telephone"] ?? null)) {
            // line 166
            echo "                            <div id=\"error-telephone\" class=\"invalid-feedback\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                        ";
        }
        // line 168
        echo "                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-fax\" class=\"col-sm-2 col-form-label\">";
        // line 172
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"config_fax\" value=\"";
        // line 174
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\"/>
                    </div>
                </div>

                 <div class=\"row mb-3\">
                    <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 179
        echo ($context["entry_image"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"card image\">
                        <img src=\"";
        // line 182
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_image\" value=\"";
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\"/>
                        <div class=\"card-body\">
                          <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 184
        echo ($context["button_edit"] ?? null);
        echo "</button>
                          <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 185
        echo ($context["button_clear"] ?? null);
        echo "</button>
                        </div>
                      </div>
                    </div>
                  </div>

                <div class=\"row mb-3\">
                    <label for=\"input-open\" class=\"col-sm-2 col-form-label\">
                        <span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 193
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                        <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 196
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">
                        <span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 202
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                        <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 205
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                    </div>
                </div>

                ";
        // line 209
        if (($context["locations"] ?? null)) {
            // line 210
            echo "                <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">
                        <span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 212
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                        ";
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 216
                echo "                        <div class=\"form-check\">
                            <label>
                                <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                // line 218
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 218);
                echo "\" class=\"form-check-input\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 218), ($context["config_location"] ?? null))) {
                    echo " checked ";
                }
                echo " />
                                ";
                // line 219
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 219);
                echo "
                            </label>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "                    </div>
                </div>
                ";
        }
        // line 226
        echo "            </div>
            <div class=\"tab-pane\" id=\"tab-local\">
                <div class=\"row mb-3\">
                    <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 229
        echo ($context["entry_country"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                            ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 233
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 233) == ($context["config_country_id"] ?? null))) {
                // line 234
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 234);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 234);
                echo "</option>
                                ";
            } else {
                // line 236
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 236);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 236);
                echo "</option>
                                ";
            }
            // line 238
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                        </select>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">";
        // line 244
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                        </select>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">";
        // line 252
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                            ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 256
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 256) == ($context["config_timezone"] ?? null))) {
                // line 257
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 257);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 257);
                echo "</option>
                                ";
            } else {
                // line 259
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 259);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 259);
                echo "</option>
                                ";
            }
            // line 261
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "                        </select>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-language\" class=\"col-sm-2 col-form-label\">";
        // line 267
        echo ($context["entry_language"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                            ";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 271
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 271) == ($context["config_language"] ?? null))) {
                // line 272
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 272);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 272);
                echo "</option>
                                ";
            } else {
                // line 274
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 274);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 274);
                echo "</option>
                                ";
            }
            // line 276
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "                        </select>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-admin-language\" class=\"col-sm-2 col-form-label\">";
        // line 282
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                            ";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 286
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 286) == ($context["config_admin_language"] ?? null))) {
                // line 287
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 287);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 287);
                echo "</option>
                                ";
            } else {
                // line 289
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 289);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 289);
                echo "</option>
                                ";
            }
            // line 291
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "                        </select>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">
                        <span data-toggle=\"tooltip\" title=\"";
        // line 298
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                        <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                            ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 303
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 303) == ($context["config_currency"] ?? null))) {
                // line 304
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 304);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 304);
                echo "</option>
                                ";
            } else {
                // line 306
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 306);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 306);
                echo "</option>
                                ";
            }
            // line 308
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "                        </select>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">";
        // line 314
        echo ($context["entry_currency_engine"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">
                            <option value=\"\" ";
        // line 317
        if ( !($context["config_currency_engine"] ?? null)) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 319
            echo "                                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 319);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 319) == ($context["config_currency_engine"] ?? null))) {
                echo "selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 319);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        echo "                        </select>
                    </div>
                </div>

                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 326
        echo ($context["entry_currency_auto"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_currency_auto\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_currency_auto\" value=\"1\" id=\"input-currency-auto\" class=\"form-check-input\"";
        // line 330
        if (($context["config_currency_auto"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                    <div class=\"form-text\">";
        // line 332
        echo ($context["help_currency_auto"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                    <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 336
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                            ";
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 340
            echo "                                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 340);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 340) == ($context["config_length_class_id"] ?? null))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 340);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 342
        echo "                        </select>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 347
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                            ";
        // line 350
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 351
            echo "                                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 351);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 351) == ($context["config_weight_class_id"] ?? null))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 351);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        echo "                        </select>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
                <fieldset>
                  <legend>";
        // line 359
        echo ($context["text_product"] ?? null);
        echo "</legend>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 362
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_product_count\" value=\"1\" ";
        // line 366
        if (($context["config_product_count"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 367
        echo ($context["text_yes"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_product_count\" value=\"0\" ";
        // line 370
        if ( !($context["config_product_count"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 371
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                    </div>
                  </div>

                  <div class=\"row mb-3 required\">
                    <label for=\"input-admin-limit\" class=\"col-sm-2 col-form-label\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 378
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 381
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                      ";
        // line 382
        if (($context["error_limit_admin"] ?? null)) {
            // line 383
            echo "                        <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                      ";
        }
        // line 385
        echo "                    </div>
                  </div>
                </fieldset>

                <fieldset>
                  <legend>";
        // line 390
        echo ($context["text_review"] ?? null);
        echo "</legend>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 393
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_review_status\" value=\"1\" ";
        // line 397
        if (($context["config_review_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 398
        echo ($context["text_yes"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_review_status\" value=\"0\" ";
        // line 401
        if ( !($context["config_review_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 402
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 409
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_review_guest\" value=\"1\" ";
        // line 413
        if (($context["config_review_guest"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 414
        echo ($context["text_yes"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_review_guest\" value=\"0\" ";
        // line 417
        if ( !($context["config_review_guest"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 418
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset>
                  <legend>";
        // line 425
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-voucher-min\" class=\"col-sm-2 col-form-label\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 428
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 431
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                      ";
        // line 432
        if (($context["error_voucher_min"] ?? null)) {
            // line 433
            echo "                        <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                      ";
        }
        // line 435
        echo "                    </div>
                  </div>

                  <div class=\"row mb-3 required\">
                    <label for=\"input-voucher-max\" class=\"col-sm-2 col-form-label\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 440
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 443
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                      ";
        // line 444
        if (($context["error_voucher_max"] ?? null)) {
            // line 445
            echo "                        <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                      ";
        }
        // line 447
        echo "                    </div>
                  </div>
                </fieldset>

                <fieldset>
                  <legend>";
        // line 452
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 454
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_tax\" value=\"1\" ";
        // line 457
        if (($context["config_tax"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 458
        echo ($context["text_yes"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_tax\" value=\"0\" ";
        // line 461
        if ( !($context["config_tax"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 462
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 469
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-select\">
                        <option value=\"\">";
        // line 473
        echo ($context["text_none"] ?? null);
        echo "</option>
                        <option value=\"shipping\" ";
        // line 474
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_shipping"] ?? null);
        echo "</option>
                        <option value=\"payment\" ";
        // line 475
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_payment"] ?? null);
        echo "</option>
                      </select>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 482
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-select\">
                        <option value=\"\">";
        // line 486
        echo ($context["text_none"] ?? null);
        echo "</option>
                        <option value=\"shipping\" ";
        // line 487
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_shipping"] ?? null);
        echo "</option>
                        <option value=\"payment\" ";
        // line 488
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_payment"] ?? null);
        echo "</option>
                      </select>
                    </div>
                  </div>
                </fieldset>

                <fieldset>
                  <legend>";
        // line 495
        echo ($context["text_account"] ?? null);
        echo "</legend>

                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 499
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_customer_online\" value=\"1\" ";
        // line 503
        if (($context["config_customer_online"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 504
        echo ($context["text_yes"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_customer_online\" value=\"0\" ";
        // line 507
        if ( !($context["config_customer_online"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 508
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 515
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"1\" ";
        // line 519
        if (($context["config_customer_activity"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 520
        echo ($context["text_yes"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"0\" ";
        // line 523
        if ( !($context["config_customer_activity"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 524
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 530
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_customer_search\" value=\"1\" ";
        // line 533
        if (($context["config_customer_search"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 534
        echo ($context["text_yes"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_customer_search\" value=\"0\" ";
        // line 537
        if ( !($context["config_customer_search"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 538
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-customer-group\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 545
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                        ";
        // line 549
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 550
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 550);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 550) == ($context["config_customer_group_id"] ?? null))) {
                echo "selected";
            }
            echo ">
                            ";
            // line 551
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 551);
            echo "
                          </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 554
        echo "                      </select>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 560
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      ";
        // line 563
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 564
            echo "                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
            // line 565
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 565);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 565), ($context["config_customer_group_display"] ?? null))) {
                echo "checked";
            }
            echo ">
                          <label class=\"form-check-label\">";
            // line 566
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 566);
            echo "</label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 569
        echo "                      ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 570
            echo "                        <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                      ";
        }
        // line 572
        echo "                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 577
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_customer_price\" value=\"1\" ";
        // line 581
        if (($context["config_customer_price"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 582
        echo ($context["text_yes"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_customer_price\" value=\"0\" ";
        // line 585
        if ( !($context["config_customer_price"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 586
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-login-attempts\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 593
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 596
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                      ";
        // line 597
        if (($context["error_login_attempts"] ?? null)) {
            // line 598
            echo "                        <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                      ";
        }
        // line 600
        echo "                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-account\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 605
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                        <option value=\"0\">";
        // line 609
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 610
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 611
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 611);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 611) == ($context["config_account_id"] ?? null))) {
                echo "selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 611);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 613
        echo "                      </select>
                    </div>
                  </div>

                </fieldset>

                <fieldset>
                  <legend>";
        // line 620
        echo ($context["text_account"] ?? null);
        echo "</legend>
                  
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 624
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_customer_online\" value=\"1\" ";
        // line 628
        if (($context["config_customer_online"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 629
        echo ($context["text_yes"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_customer_online\" value=\"0\" ";
        // line 632
        if ( !($context["config_customer_online"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 633
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 640
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"1\" ";
        // line 644
        if (($context["config_customer_activity"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 645
        echo ($context["text_yes"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"0\" ";
        // line 648
        if ( !($context["config_customer_activity"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 649
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 655
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_customer_search\" value=\"1\" ";
        // line 658
        if (($context["config_customer_search"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 659
        echo ($context["text_yes"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_customer_search\" value=\"0\" ";
        // line 662
        if ( !($context["config_customer_search"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 663
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-customer-group\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 670
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                        ";
        // line 674
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 675
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 675);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 675) == ($context["config_customer_group_id"] ?? null))) {
                echo "selected=\"selected\"";
            }
            echo ">
                            ";
            // line 676
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 676);
            echo "
                          </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 679
        echo "                      </select>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 685
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      ";
        // line 688
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 689
            echo "                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
            // line 690
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 690);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 690), ($context["config_customer_group_display"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo " />
                          <label class=\"form-check-label\">";
            // line 691
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 691);
            echo "</label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 694
        echo "                      ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 695
            echo "                        <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                      ";
        }
        // line 697
        echo "                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 702
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_customer_price\" value=\"1\" ";
        // line 706
        if (($context["config_customer_price"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 707
        echo ($context["text_yes"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"config_customer_price\" value=\"0\" ";
        // line 710
        if ( !($context["config_customer_price"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                        <label class=\"form-check-label\">";
        // line 711
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-login-attempts\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 718
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 721
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                      ";
        // line 722
        if (($context["error_login_attempts"] ?? null)) {
            // line 723
            echo "                        <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                      ";
        }
        // line 725
        echo "                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-account\">
                      <span data-toggle=\"tooltip\" title=\"";
        // line 730
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span>
                    </label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                        <option value=\"0\">";
        // line 734
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 735
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 736
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 736);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 736) == ($context["config_account_id"] ?? null))) {
                echo "selected=\"selected\"";
            }
            echo ">
                            ";
            // line 737
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 737);
            echo "
                          </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 740
        echo "                      </select>
                    </div>
                  </div>
                </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"row mb-3\">
                  <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">";
        // line 747
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                      <div class=\"card image\">
                          <img src=\"";
        // line 750
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\" />
                          <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 751
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                          <div class=\"card-body\">
                              <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary btn-sm btn-block\">
                                  <i class=\"fa-solid fa-pencil\"></i>
                                  ";
        // line 755
        echo ($context["button_edit"] ?? null);
        echo "
                              </button>
                              <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning btn-sm btn-block\">
                                  <i class=\"fa-regular fa-trash-can\"></i>
                                  ";
        // line 759
        echo ($context["button_clear"] ?? null);
        echo "
                              </button>
                          </div>
                      </div>
                  </div>
              </div>

              <div class=\"row mb-3\">
                  <label for=\"input-icon\" class=\"col-sm-2 col-form-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 767
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                      <div class=\"card image\">
                          <img src=\"";
        // line 770
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-icon\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\" />
                          <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 771
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\" />
                          <div class=\"card-body\">
                              <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-primary btn-sm btn-block\">
                                  <i class=\"fa-solid fa-pencil\"></i>
                                  ";
        // line 775
        echo ($context["button_edit"] ?? null);
        echo "
                              </button>
                              <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-warning btn-sm btn-block\">
                                  <i class=\"fa-regular fa-trash-can\"></i>
                                  ";
        // line 779
        echo ($context["button_clear"] ?? null);
        echo "
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
                <fieldset>
                    <legend>";
        // line 788
        echo ($context["text_general"] ?? null);
        echo "</legend>
                    
                    <div class=\"row mb-3 required\">
                        <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 792
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-select\">
                                <option value=\"mail\" ";
        // line 796
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_mail"] ?? null);
        echo "</option>
                                <option value=\"smtp\" ";
        // line 797
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_smtp"] ?? null);
        echo "</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 804
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 807
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 813
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 816
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">";
        // line 821
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 823
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 829
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 832
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">";
        // line 837
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 839
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">";
        // line 844
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 846
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>";
        // line 852
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                    <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 854
        echo ($context["entry_mail_alert"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 857
        $context["mail_alert_row"] = 0;
        // line 858
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 859
            echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
            // line 860
            echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 860);
            echo "\" id=\"input-mail-alert-";
            echo ($context["mail_alert_row"] ?? null);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 860), ($context["config_mail_alert"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-mail-alert-";
            echo ($context["mail_alert_row"] ?? null);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 860);
            echo "</label>
                              </div>
                              ";
            // line 862
            $context["mail_alert_row"] = (($context["mail_alert_row"] ?? null) + 1);
            // line 863
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 864
        echo "                          </div>
                          <div class=\"form-text\">";
        // line 865
        echo ($context["help_mail_alert"] ?? null);
        echo "</div>
                        </div>
                      </div>

                    <div class=\"row mb-3\">
                        <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 871
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 874
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 881
        echo ($context["entry_maintenance"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"config_maintenance\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"config_maintenance\" value=\"1\" id=\"input-maintenance\" class=\"form-check-input\"";
        // line 885
        if (($context["config_maintenance"] ?? null)) {
            echo " checked";
        }
        echo "/>
                  </div>
                  <div class=\"form-text\">";
        // line 887
        echo ($context["help_maintenance"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 891
        echo ($context["entry_seo_url"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"config_seo_url\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"config_seo_url\" value=\"1\" id=\"input-seo-url\" class=\"form-check-input\"";
        // line 895
        if (($context["config_seo_url"] ?? null)) {
            echo " checked";
        }
        echo "/>
                  </div>
                  <div class=\"form-text\">";
        // line 897
        echo ($context["help_seo_url"] ?? null);
        echo "</div>
                </div>
              </div>

                <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 902
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                        <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 904
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 909
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"config_compression\" value=\"";
        // line 911
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 916
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                        <label class=\"radio-inline\"> 
                            ";
        // line 919
        if (($context["config_secure"] ?? null)) {
            // line 920
            echo "                                <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                                ";
            // line 921
            echo ($context["text_yes"] ?? null);
            echo "
                            ";
        } else {
            // line 923
            echo "                                <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                                ";
            // line 924
            echo ($context["text_yes"] ?? null);
            echo "
                            ";
        }
        // line 926
        echo "                        </label>
                        <label class=\"radio-inline\"> 
                            ";
        // line 928
        if ( !($context["config_secure"] ?? null)) {
            // line 929
            echo "                                <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                                ";
            // line 930
            echo ($context["text_no"] ?? null);
            echo "
                            ";
        } else {
            // line 932
            echo "                                <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                                ";
            // line 933
            echo ($context["text_no"] ?? null);
            echo "
                            ";
        }
        // line 935
        echo "                        </label>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 940
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                        <label class=\"radio-inline\"> 
                            ";
        // line 943
        if (($context["config_password"] ?? null)) {
            // line 944
            echo "                                <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                                ";
            // line 945
            echo ($context["text_yes"] ?? null);
            echo "
                            ";
        } else {
            // line 947
            echo "                                <input type=\"radio\" name=\"config_password\" value=\"1\" />
                                ";
            // line 948
            echo ($context["text_yes"] ?? null);
            echo "
                            ";
        }
        // line 950
        echo "                        </label>
                        <label class=\"radio-inline\"> 
                            ";
        // line 952
        if ( !($context["config_password"] ?? null)) {
            // line 953
            echo "                                <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                                ";
            // line 954
            echo ($context["text_no"] ?? null);
            echo "
                            ";
        } else {
            // line 956
            echo "                                <input type=\"radio\" name=\"config_password\" value=\"0\" />
                                ";
            // line 957
            echo ($context["text_no"] ?? null);
            echo "
                            ";
        }
        // line 959
        echo "                        </label>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 964
        echo ($context["help_shared"] ?? null);
        echo "\">";
        echo ($context["entry_shared"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                        <label class=\"radio-inline\"> 
                            ";
        // line 967
        if (($context["config_shared"] ?? null)) {
            // line 968
            echo "                                <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                                ";
            // line 969
            echo ($context["text_yes"] ?? null);
            echo "
                            ";
        } else {
            // line 971
            echo "                                <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                                ";
            // line 972
            echo ($context["text_yes"] ?? null);
            echo "
                            ";
        }
        // line 974
        echo "                        </label>
                        <label class=\"radio-inline\"> 
                            ";
        // line 976
        if ( !($context["config_shared"] ?? null)) {
            // line 977
            echo "                                <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                                ";
            // line 978
            echo ($context["text_no"] ?? null);
            echo "
                            ";
        } else {
            // line 980
            echo "                                <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                                ";
            // line 981
            echo ($context["text_no"] ?? null);
            echo "
                            ";
        }
        // line 983
        echo "                        </label>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 988
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                        <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 990
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                        ";
        // line 991
        if (($context["error_encryption"] ?? null)) {
            // line 992
            echo "                        <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                        ";
        }
        // line 994
        echo "                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 998
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1000
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1005
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                        <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1007
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1012
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                        <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1014
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                    </div>
                </div>

                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1019
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_error_display\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_error_display\" value=\"1\" id=\"input-error-display\" class=\"form-check-input\"";
        // line 1023
        if (($context["config_error_display"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1028
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_error_log\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_error_log\" value=\"1\" id=\"input-error-log\" class=\"form-check-input\"";
        // line 1032
        if (($context["config_error_log"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-error-filename\">";
        // line 1037
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1039
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                      ";
        // line 1040
        if (($context["error_log"] ?? null)) {
            // line 1041
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                      ";
        }
        // line 1042
        echo " </div>
                  </div>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <script type=\"text/javascript\">
    \$('select[name=\"config_theme\"]').on('change', function() {
      \$.ajax({
        url: 'index.php?route=setting/setting/theme&user_token=";
        // line 1054
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
        dataType: 'html',
        beforeSend: function() {
          \$('select[name=\"config_theme\"]').prop('disabled', true);
        },
        complete: function() {
          \$('select[name=\"config_theme\"]').prop('disabled', false);
        },
        success: function(html) {
          \$('#theme').attr('src', html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });

    \$('select[name=\"config_theme\"]').trigger('change');
  </script>

  <script type=\"text/javascript\">
    \$('select[name=\"config_country_id\"]').on('change', function() {
      \$.ajax({
        url: 'index.php?route=localisation/country/country&user_token=";
        // line 1077
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
          \$('select[name=\"config_country_id\"]').prop('disabled', true);
        },
        complete: function() {
          \$('select[name=\"config_country_id\"]').prop('disabled', false);
        },
        success: function(json) {
          let html = '<option value=\"\">";
        // line 1086
        echo ($context["text_select"] ?? null);
        echo "</option>';
          if (json['zone'] && json['zone'] !== '') {
            for (let i = 0; i < json['zone'].length; i++) {
              html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
              if (json['zone'][i]['zone_id'] == '";
        // line 1090
        echo ($context["config_zone_id"] ?? null);
        echo "') {
                html += ' selected=\"selected\"';
              }
              html += '>' + json['zone'][i]['name'] + '</option>';
            }
          } else {
            html += '<option value=\"0\" selected=\"selected\">";
        // line 1096
        echo ($context["text_none"] ?? null);
        echo "</option>';
          }
          \$('select[name=\"config_zone_id\"]').html(html);
          \$('#button-save').prop('disabled', false);
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });

    \$('select[name=\"config_country_id\"]').trigger('change');
  </script>
</div>
";
        // line 1110
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "setting/setting.twig";
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
        return array (  2612 => 1110,  2595 => 1096,  2586 => 1090,  2579 => 1086,  2567 => 1077,  2541 => 1054,  2527 => 1042,  2521 => 1041,  2519 => 1040,  2513 => 1039,  2508 => 1037,  2498 => 1032,  2491 => 1028,  2481 => 1023,  2474 => 1019,  2464 => 1014,  2457 => 1012,  2447 => 1007,  2440 => 1005,  2430 => 1000,  2423 => 998,  2417 => 994,  2411 => 992,  2409 => 991,  2403 => 990,  2396 => 988,  2389 => 983,  2384 => 981,  2381 => 980,  2376 => 978,  2373 => 977,  2371 => 976,  2367 => 974,  2362 => 972,  2359 => 971,  2354 => 969,  2351 => 968,  2349 => 967,  2341 => 964,  2334 => 959,  2329 => 957,  2326 => 956,  2321 => 954,  2318 => 953,  2316 => 952,  2312 => 950,  2307 => 948,  2304 => 947,  2299 => 945,  2296 => 944,  2294 => 943,  2286 => 940,  2279 => 935,  2274 => 933,  2271 => 932,  2266 => 930,  2263 => 929,  2261 => 928,  2257 => 926,  2252 => 924,  2249 => 923,  2244 => 921,  2241 => 920,  2239 => 919,  2231 => 916,  2221 => 911,  2214 => 909,  2204 => 904,  2197 => 902,  2189 => 897,  2182 => 895,  2175 => 891,  2168 => 887,  2161 => 885,  2154 => 881,  2142 => 874,  2134 => 871,  2125 => 865,  2122 => 864,  2116 => 863,  2114 => 862,  2099 => 860,  2096 => 859,  2091 => 858,  2089 => 857,  2083 => 854,  2078 => 852,  2067 => 846,  2062 => 844,  2052 => 839,  2047 => 837,  2037 => 832,  2029 => 829,  2018 => 823,  2013 => 821,  2003 => 816,  1995 => 813,  1984 => 807,  1976 => 804,  1962 => 797,  1954 => 796,  1945 => 792,  1938 => 788,  1926 => 779,  1919 => 775,  1912 => 771,  1906 => 770,  1898 => 767,  1887 => 759,  1880 => 755,  1873 => 751,  1867 => 750,  1861 => 747,  1852 => 740,  1843 => 737,  1834 => 736,  1830 => 735,  1826 => 734,  1817 => 730,  1810 => 725,  1804 => 723,  1802 => 722,  1796 => 721,  1788 => 718,  1778 => 711,  1772 => 710,  1766 => 707,  1760 => 706,  1751 => 702,  1744 => 697,  1738 => 695,  1735 => 694,  1726 => 691,  1718 => 690,  1715 => 689,  1711 => 688,  1703 => 685,  1695 => 679,  1686 => 676,  1677 => 675,  1673 => 674,  1664 => 670,  1654 => 663,  1648 => 662,  1642 => 659,  1636 => 658,  1630 => 655,  1621 => 649,  1615 => 648,  1609 => 645,  1603 => 644,  1594 => 640,  1584 => 633,  1578 => 632,  1572 => 629,  1566 => 628,  1557 => 624,  1550 => 620,  1541 => 613,  1526 => 611,  1522 => 610,  1518 => 609,  1509 => 605,  1502 => 600,  1496 => 598,  1494 => 597,  1488 => 596,  1480 => 593,  1470 => 586,  1464 => 585,  1458 => 582,  1452 => 581,  1443 => 577,  1436 => 572,  1430 => 570,  1427 => 569,  1418 => 566,  1410 => 565,  1407 => 564,  1403 => 563,  1395 => 560,  1387 => 554,  1378 => 551,  1369 => 550,  1365 => 549,  1356 => 545,  1346 => 538,  1340 => 537,  1334 => 534,  1328 => 533,  1322 => 530,  1313 => 524,  1307 => 523,  1301 => 520,  1295 => 519,  1286 => 515,  1276 => 508,  1270 => 507,  1264 => 504,  1258 => 503,  1249 => 499,  1242 => 495,  1228 => 488,  1220 => 487,  1216 => 486,  1207 => 482,  1193 => 475,  1185 => 474,  1181 => 473,  1172 => 469,  1162 => 462,  1156 => 461,  1150 => 458,  1144 => 457,  1138 => 454,  1133 => 452,  1126 => 447,  1120 => 445,  1118 => 444,  1112 => 443,  1104 => 440,  1097 => 435,  1091 => 433,  1089 => 432,  1083 => 431,  1075 => 428,  1069 => 425,  1059 => 418,  1053 => 417,  1047 => 414,  1041 => 413,  1032 => 409,  1022 => 402,  1016 => 401,  1010 => 398,  1004 => 397,  995 => 393,  989 => 390,  982 => 385,  976 => 383,  974 => 382,  968 => 381,  960 => 378,  950 => 371,  944 => 370,  938 => 367,  932 => 366,  923 => 362,  917 => 359,  909 => 353,  894 => 351,  890 => 350,  884 => 347,  877 => 342,  862 => 340,  858 => 339,  852 => 336,  845 => 332,  838 => 330,  831 => 326,  824 => 321,  809 => 319,  805 => 318,  797 => 317,  791 => 314,  784 => 309,  778 => 308,  770 => 306,  762 => 304,  759 => 303,  755 => 302,  746 => 298,  738 => 292,  732 => 291,  724 => 289,  716 => 287,  713 => 286,  709 => 285,  703 => 282,  696 => 277,  690 => 276,  682 => 274,  674 => 272,  671 => 271,  667 => 270,  661 => 267,  654 => 262,  648 => 261,  640 => 259,  632 => 257,  629 => 256,  625 => 255,  619 => 252,  608 => 244,  601 => 239,  595 => 238,  587 => 236,  579 => 234,  576 => 233,  572 => 232,  566 => 229,  561 => 226,  556 => 223,  546 => 219,  538 => 218,  534 => 216,  530 => 215,  522 => 212,  518 => 210,  516 => 209,  507 => 205,  499 => 202,  488 => 196,  480 => 193,  469 => 185,  465 => 184,  456 => 182,  450 => 179,  440 => 174,  435 => 172,  429 => 168,  423 => 166,  421 => 165,  415 => 164,  410 => 162,  404 => 158,  398 => 156,  396 => 155,  390 => 154,  385 => 152,  375 => 147,  367 => 144,  360 => 139,  354 => 137,  352 => 136,  346 => 135,  341 => 133,  335 => 129,  329 => 127,  327 => 126,  321 => 125,  316 => 123,  310 => 119,  304 => 117,  302 => 116,  296 => 115,  291 => 113,  283 => 107,  268 => 105,  264 => 104,  258 => 101,  249 => 94,  234 => 92,  230 => 91,  224 => 88,  214 => 83,  209 => 81,  199 => 76,  194 => 74,  188 => 70,  182 => 68,  180 => 67,  174 => 66,  169 => 64,  160 => 58,  154 => 55,  148 => 52,  142 => 49,  136 => 46,  130 => 43,  124 => 40,  118 => 37,  112 => 34,  108 => 32,  100 => 28,  97 => 27,  89 => 23,  87 => 22,  81 => 18,  70 => 16,  66 => 15,  61 => 13,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/setting.twig", "");
    }
}
