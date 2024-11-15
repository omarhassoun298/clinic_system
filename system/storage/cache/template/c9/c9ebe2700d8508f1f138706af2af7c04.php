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

/* journal3/template/information/contact.twig */
class __TwigTemplate_a129a8c6a23b156cc9e0d404d1e12ece extends Template
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
<div id=\"information-contact\" class=\"container\">
  <div class=\"row\">";
        // line 14
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 23) == "default")) {
            // line 24
            echo "      <h1 class=\"title page-title ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 24);
            echo "\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 26
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <h2 class=\"title location-title\">";
        // line 27
        echo ($context["text_location"] ?? null);
        echo "</h2>
      <div class=\"panel panel-default our-location\">
        <div class=\"panel-body\">
          <div class=\"row store-data\">
            ";
        // line 31
        if (($context["image"] ?? null)) {
            // line 32
            echo "            <div class=\"col-sm-3 store-image\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
            ";
        }
        // line 34
        echo "            <div class=\"col-sm-3 store-address\"><strong>";
        echo ($context["store"] ?? null);
        echo "</strong><br />
              <address>
              ";
        // line 36
        echo ($context["address"] ?? null);
        echo "
              </address>
              ";
        // line 38
        if (($context["geocode"] ?? null)) {
            // line 39
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
              ";
        }
        // line 41
        echo "            </div>
            <div class=\"col-sm-3 store-tel\"><strong>";
        // line 42
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
              ";
        // line 43
        echo ($context["telephone"] ?? null);
        echo "<br />
              <br />
              ";
        // line 45
        if (($context["fax"] ?? null)) {
            // line 46
            echo "              <div class=\"store-fax\">
              <strong>";
            // line 47
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
              ";
            // line 48
            echo ($context["fax"] ?? null);
            echo "
              </div>
              ";
        }
        // line 51
        echo "            </div>
            <div class=\"col-sm-3 store-info\">
              ";
        // line 53
        if (($context["open"] ?? null)) {
            // line 54
            echo "              <div class=\"store-hours\">
              <strong>";
            // line 55
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
              ";
            // line 56
            echo ($context["open"] ?? null);
            echo "<br />
              </div>
              <br />
              ";
        }
        // line 60
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 61
            echo "              <div class=\"store-comment\">
              <strong>";
            // line 62
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
              ";
            // line 63
            echo ($context["comment"] ?? null);
            echo "
              </div>
              ";
        }
        // line 66
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 70
        if (($context["locations"] ?? null)) {
            // line 71
            echo "      <h2 class=\"title stores-title\">";
            echo ($context["text_store"] ?? null);
            echo "</h2>
      <div class=\"panel-group other-stores\" id=\"accordion\">
        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 74
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 76);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 76);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 78);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row store-data\">
                ";
                // line 81
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "                <div class=\"col-sm-3 store-image\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 82);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 82);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 82);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 84
                echo "                <div class=\"col-sm-3 store-address\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 84);
                echo "</strong><br />
                  <address>
                  ";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 86);
                echo "
                  </address>
                  ";
                // line 88
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 89));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 91
                echo "                </div>
                <div class=\"col-sm-3 store-tel\"> <strong>";
                // line 92
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br>
                  ";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 93);
                echo "<br />
                  <br />
                  ";
                // line 95
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 95)) {
                    // line 96
                    echo "                  <div class=\"store-fax\">
                  <strong>";
                    // line 97
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br>
                  ";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 98);
                    echo "
                  </div>
                  ";
                }
                // line 101
                echo "                </div>
                <div class=\"col-sm-3 store-info\">
                  ";
                // line 103
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 103)) {
                    // line 104
                    echo "                  <div class=\"store-hours\">
                  <strong>";
                    // line 105
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br />
                  ";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 106);
                    echo "<br />
                  </div>
                  <br />
                  ";
                }
                // line 110
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 110)) {
                    // line 111
                    echo "                  <div class=\"store-comment\">
                  <strong>";
                    // line 112
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br />
                  ";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 113);
                    echo "
                  </div>
                  ";
                }
                // line 116
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "      </div>
      ";
        }
        // line 124
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["contactFormStatus"], "method", false, false, false, 124)) {
            // line 125
            echo "      <form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
            // line 127
            echo ($context["text_contact"] ?? null);
            echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 129
            echo ($context["entry_name"] ?? null);
            echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
            // line 131
            echo ($context["name"] ?? null);
            echo "\" id=\"input-name\" class=\"form-control\" />
              ";
            // line 132
            if (($context["error_name"] ?? null)) {
                // line 133
                echo "              <div class=\"text-danger\">";
                echo ($context["error_name"] ?? null);
                echo "</div>
              ";
            }
            // line 135
            echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
            // line 138
            echo ($context["entry_email"] ?? null);
            echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
            // line 140
            echo ($context["email"] ?? null);
            echo "\" id=\"input-email\" class=\"form-control\" />
              ";
            // line 141
            if (($context["error_email"] ?? null)) {
                // line 142
                echo "              <div class=\"text-danger\">";
                echo ($context["error_email"] ?? null);
                echo "</div>
              ";
            }
            // line 144
            echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
            // line 147
            echo ($context["entry_enquiry"] ?? null);
            echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
            // line 149
            echo ($context["enquiry"] ?? null);
            echo "</textarea>
              ";
            // line 150
            if (($context["error_enquiry"] ?? null)) {
                // line 151
                echo "              <div class=\"text-danger\">";
                echo ($context["error_enquiry"] ?? null);
                echo "</div>
              ";
            }
            // line 153
            echo "            </div>
          </div>
          ";
            // line 155
            echo ($context["captcha"] ?? null);
            echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <button class=\"btn btn-primary\" type=\"submit\"><span>";
            // line 159
            echo ($context["button_submit"] ?? null);
            echo "</span></button>
          </div>
        </div>
      </form>
      ";
        }
        // line 164
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 165
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 167
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/information/contact.twig";
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
        return array (  482 => 167,  477 => 165,  472 => 164,  464 => 159,  457 => 155,  453 => 153,  447 => 151,  445 => 150,  441 => 149,  436 => 147,  431 => 144,  425 => 142,  423 => 141,  419 => 140,  414 => 138,  409 => 135,  403 => 133,  401 => 132,  397 => 131,  392 => 129,  387 => 127,  381 => 125,  378 => 124,  374 => 122,  363 => 116,  357 => 113,  353 => 112,  350 => 111,  347 => 110,  340 => 106,  336 => 105,  333 => 104,  331 => 103,  327 => 101,  321 => 98,  317 => 97,  314 => 96,  312 => 95,  307 => 93,  303 => 92,  300 => 91,  290 => 89,  288 => 88,  283 => 86,  277 => 84,  267 => 82,  265 => 81,  259 => 78,  252 => 76,  248 => 74,  244 => 73,  238 => 71,  236 => 70,  230 => 66,  224 => 63,  220 => 62,  217 => 61,  214 => 60,  207 => 56,  203 => 55,  200 => 54,  198 => 53,  194 => 51,  188 => 48,  184 => 47,  181 => 46,  179 => 45,  174 => 43,  170 => 42,  167 => 41,  157 => 39,  155 => 38,  150 => 36,  144 => 34,  134 => 32,  132 => 31,  125 => 27,  120 => 26,  112 => 24,  110 => 23,  105 => 22,  102 => 21,  99 => 20,  96 => 19,  93 => 18,  90 => 17,  87 => 16,  85 => 15,  81 => 14,  76 => 12,  72 => 10,  61 => 8,  57 => 7,  51 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/information/contact.twig", "");
    }
}
