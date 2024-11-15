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

/* journal3/template/journal3/module/form.twig */
class __TwigTemplate_a37106b3b2d358b7fea8490ca865bde6 extends Template
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
        $context["id"] = twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "uniqueId", ["field-"], "method", false, false, false, 1);
        // line 2
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 2);
        echo "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 3
        echo ($context["edit"] ?? null);
        echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        echo ($context["name"] ?? null);
        echo "\"></em></button>
  ";
        // line 4
        if (($context["title"] ?? null)) {
            // line 5
            echo "    <h3 class=\"title module-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
  ";
        }
        // line 7
        echo "  <div class=\"module-body\">
    <form action=\"";
        // line 8
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\" data-language=\"";
        echo ($context["datepicker"] ?? null);
        echo "\">
      <fieldset>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 11
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 11) == "legend")) {
                // line 12
                echo "            <legend class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 12)], "method", false, false, false, 12);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 12);
                echo "</legend>
          ";
            }
            // line 14
            echo "
          ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 15) == "select")) {
                // line 16
                echo "            <div class=\"form-group custom-field ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "required", [], "any", false, false, false, 16)) {
                    echo "required";
                }
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 16)], "method", false, false, false, 16);
                echo "\">
              <label class=\"col-sm-2 control-label\" for=\"";
                // line 17
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 17);
                echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"item[";
                // line 19
                echo $context["index"];
                echo "]\" id=\"";
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control\">
                  <option value=\"\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["item"], "placeholder", [], "any", false, false, false, 20);
                echo "</option>
                  ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 21));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 22
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "label", [], "any", false, false, false, 22);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "label", [], "any", false, false, false, 22);
                    echo "</option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                </select>
              </div>
            </div>
          ";
            }
            // line 28
            echo "
          ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 29) == "radio")) {
                // line 30
                echo "            <div class=\"form-group custom-field form-radio ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "required", [], "any", false, false, false, 30)) {
                    echo "required";
                }
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 30)], "method", false, false, false, 30);
                echo "\">
              <label class=\"col-sm-2 control-label\">";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 31);
                echo "</label>
              <div class=\"col-sm-10\">
                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 33));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 34
                    echo "                  <div class=\"radio\">
                    <label>
                      <input type=\"radio\" name=\"item[";
                    // line 36
                    echo $context["index"];
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "label", [], "any", false, false, false, 36);
                    echo "\"/>
                      ";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "label", [], "any", false, false, false, 37);
                    echo "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "              </div>
            </div>
          ";
            }
            // line 43
            echo "
          ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 44) == "checkbox")) {
                // line 45
                echo "            <div class=\"form-group custom-field form-checkbox ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "required", [], "any", false, false, false, 45)) {
                    echo "required";
                }
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 45)], "method", false, false, false, 45);
                echo "\">
              <label class=\"col-sm-2 control-label\">";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 46);
                echo "</label>
              <div class=\"col-sm-10\">
                ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 48));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 49
                    echo "                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\" name=\"item[";
                    // line 51
                    echo $context["index"];
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "label", [], "any", false, false, false, 51);
                    echo "\"/>
                      ";
                    // line 52
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "label", [], "any", false, false, false, 52);
                    echo "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "              </div>
            </div>
          ";
            }
            // line 58
            echo "
          ";
            // line 59
            if (((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 59) == "text") || (twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 59) == "name"))) {
                // line 60
                echo "            <div class=\"form-group custom-field ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "required", [], "any", false, false, false, 60)) {
                    echo "required";
                }
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 60)], "method", false, false, false, 60);
                echo "\">
              <label class=\"col-sm-2 control-label\" for=\"";
                // line 61
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 61);
                echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"item[";
                // line 63
                echo $context["index"];
                echo "]\" value=\"\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "placeholder", [], "any", false, false, false, 63);
                echo "\" id=\"";
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control\"/>
              </div>
            </div>
          ";
            }
            // line 67
            echo "
          ";
            // line 68
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 68) == "email")) {
                // line 69
                echo "            <div class=\"form-group custom-field ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "required", [], "any", false, false, false, 69)) {
                    echo "required";
                }
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 69)], "method", false, false, false, 69);
                echo "\">
              <label class=\"col-sm-2 control-label\" for=\"";
                // line 70
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 70);
                echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"email\" name=\"item[";
                // line 72
                echo $context["index"];
                echo "]\" value=\"\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "placeholder", [], "any", false, false, false, 72);
                echo "\" id=\"";
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control\"/>
              </div>
            </div>
          ";
            }
            // line 76
            echo "
          ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 77) == "tel")) {
                // line 78
                echo "            <div class=\"form-group custom-field ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "required", [], "any", false, false, false, 78)) {
                    echo "required";
                }
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 78)], "method", false, false, false, 78);
                echo "\">
              <label class=\"col-sm-2 control-label\" for=\"";
                // line 79
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 79);
                echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"tel\" name=\"item[";
                // line 81
                echo $context["index"];
                echo "]\" value=\"\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "placeholder", [], "any", false, false, false, 81);
                echo "\" id=\"";
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control\"/>
              </div>
            </div>
          ";
            }
            // line 85
            echo "
          ";
            // line 86
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 86) == "textarea")) {
                // line 87
                echo "            <div class=\"form-group custom-field ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "required", [], "any", false, false, false, 87)) {
                    echo "required";
                }
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 87)], "method", false, false, false, 87);
                echo "\">
              <label class=\"col-sm-2 control-label\" for=\"";
                // line 88
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 88);
                echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"item[";
                // line 90
                echo $context["index"];
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "placeholder", [], "any", false, false, false, 90);
                echo "\" id=\"";
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control\"></textarea>
              </div>
            </div>
          ";
            }
            // line 94
            echo "
          ";
            // line 95
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 95) == "file")) {
                // line 96
                echo "          <div class=\"form-group custom-field ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "required", [], "any", false, false, false, 96)) {
                    echo "required";
                }
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 96)], "method", false, false, false, 96);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"form-upload-";
                // line 97
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 97);
                echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"form-upload-";
                // line 99
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default upload-btn\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
              <input type=\"hidden\" name=\"item[";
                // line 100
                echo $context["index"];
                echo "]\" value=\"\" id=\"";
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control\"/>
            </div>
          </div>
          ";
            }
            // line 104
            echo "
          ";
            // line 105
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 105) == "date")) {
                // line 106
                echo "            <div class=\"form-group custom-field ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "required", [], "any", false, false, false, 106)) {
                    echo "required";
                }
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 106)], "method", false, false, false, 106);
                echo "\">
              <label class=\"col-sm-2 control-label\" for=\"";
                // line 107
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 107);
                echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"input-group ";
                // line 109
                if ( !($context["journal3_is_oc4"] ?? null)) {
                    echo "date";
                }
                echo "\" data-picker-class=\"module-form-";
                echo ($context["module_id"] ?? null);
                echo "\">
                  <input type=\"text\" name=\"item[";
                // line 110
                echo $context["index"];
                echo "]\" value=\"\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 110);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"";
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control ";
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "date";
                }
                echo "\"/>
                  <div class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            // line 118
            echo "
          ";
            // line 119
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 119) == "time")) {
                // line 120
                echo "            <div class=\"form-group custom-field ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "required", [], "any", false, false, false, 120)) {
                    echo "required";
                }
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 120)], "method", false, false, false, 120);
                echo "\">
              <label class=\"col-sm-2 control-label\" for=\"";
                // line 121
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 121);
                echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"input-group ";
                // line 123
                if ( !($context["journal3_is_oc4"] ?? null)) {
                    echo "time";
                }
                echo "\" data-picker-class=\"module-form-";
                echo ($context["module_id"] ?? null);
                echo "\">
                  <input type=\"text\" name=\"item[";
                // line 124
                echo $context["index"];
                echo "]\" value=\"\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 124);
                echo "\" data-date-format=\"HH:mm\" id=\"";
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control ";
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "time";
                }
                echo "\"/>
                  <div class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            // line 132
            echo "
          ";
            // line 133
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 133) == "datetime")) {
                // line 134
                echo "            <div class=\"form-group custom-field ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "required", [], "any", false, false, false, 134)) {
                    echo "required";
                }
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 134)], "method", false, false, false, 134);
                echo "\">
              <label class=\"col-sm-2 control-label\" for=\"";
                // line 135
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 135);
                echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"input-group ";
                // line 137
                if ( !($context["journal3_is_oc4"] ?? null)) {
                    echo "datetime";
                }
                echo "\" data-picker-class=\"module-form-";
                echo ($context["module_id"] ?? null);
                echo "\">
                  <input type=\"text\" name=\"item[";
                // line 138
                echo $context["index"];
                echo "]\" value=\"\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 138);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"";
                echo ($context["id"] ?? null);
                echo "-";
                echo $context["index"];
                echo "\" class=\"form-control ";
                if (($context["journal3_is_oc4"] ?? null)) {
                    echo "datetime";
                }
                echo "\"/>
                  <div class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            // line 146
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "        ";
        if (($context["captcha"] ?? null)) {
            // line 148
            echo "        <div class=\"form-group captcha\">
          ";
            // line 149
            echo ($context["captcha"] ?? null);
            echo "
        </div>
        ";
        }
        // line 152
        echo "        ";
        if (($context["agree_data"] ?? null)) {
            // line 153
            echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
              ";
            // line 156
            echo twig_get_attribute($this->env, $this->source, ($context["agree_data"] ?? null), "text", [], "any", false, false, false, 156);
            echo "
            </label>
          </div>
        ";
        }
        // line 160
        echo "      </fieldset>
      <div class=\"buttons\">
        <div class=\"pull-right\">
          <button type=\"submit\" class=\"btn btn-primary\"  data-loading-text=\"<span>";
        // line 163
        echo ($context["button_submit"] ?? null);
        echo "</span>\"><span>";
        echo ($context["button_submit"] ?? null);
        echo "</span></button>
        </div>
      </div>
    </form>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/module/form.twig";
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
        return array (  615 => 163,  610 => 160,  603 => 156,  598 => 153,  595 => 152,  589 => 149,  586 => 148,  583 => 147,  577 => 146,  556 => 138,  548 => 137,  539 => 135,  530 => 134,  528 => 133,  525 => 132,  504 => 124,  496 => 123,  487 => 121,  478 => 120,  476 => 119,  473 => 118,  452 => 110,  444 => 109,  435 => 107,  426 => 106,  424 => 105,  421 => 104,  410 => 100,  400 => 99,  391 => 97,  382 => 96,  380 => 95,  377 => 94,  364 => 90,  355 => 88,  346 => 87,  344 => 86,  341 => 85,  328 => 81,  319 => 79,  310 => 78,  308 => 77,  305 => 76,  292 => 72,  283 => 70,  274 => 69,  272 => 68,  269 => 67,  256 => 63,  247 => 61,  238 => 60,  236 => 59,  233 => 58,  228 => 55,  219 => 52,  213 => 51,  209 => 49,  205 => 48,  200 => 46,  191 => 45,  189 => 44,  186 => 43,  181 => 40,  172 => 37,  166 => 36,  162 => 34,  158 => 33,  153 => 31,  144 => 30,  142 => 29,  139 => 28,  133 => 24,  122 => 22,  118 => 21,  114 => 20,  106 => 19,  97 => 17,  88 => 16,  86 => 15,  83 => 14,  75 => 12,  72 => 11,  68 => 10,  61 => 8,  58 => 7,  52 => 5,  50 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/form.twig", "");
    }
}
