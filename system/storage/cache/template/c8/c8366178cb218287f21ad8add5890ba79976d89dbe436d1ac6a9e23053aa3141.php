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

/* clinic/patient_form.twig */
class __TwigTemplate_d90ceaab3a479f40940007db453e5d2d25074061d921ae113ef96bc3a5afc720 extends Template
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
\t\t\t\tEdit Patient
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blog\" class=\"row\">
\t\t\t\t\t<div class=\"mb-3 row required\">
\t\t\t\t\t\t<label for=\"input-name\" class=\"col-md-2 col-form-label\">Name</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"input-name\" value=\"";
        // line 37
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"Patient Name\" class=\"form-control ";
        if (($context["error_name"] ?? null)) {
            echo "is-invalid";
        }
        echo "\"/>
\t\t\t\t\t\t\t";
        // line 38
        if (($context["error_name"] ?? null)) {
            // line 39
            echo "\t\t\t\t\t\t\t\t<div id=\"error-name\" class=\"invalid-feedback d-block\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3 row \">
\t\t\t\t\t\t<label for=\"input-email\" class=\"col-md-2 col-form-label\">Email</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"input-email\" value=\"";
        // line 46
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"Patient Email\" class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3 row required\">
\t\t\t\t\t\t<label for=\"input-telephone\" class=\"col-md-2 col-form-label\">Telephone</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"telephone\" id=\"input-telephone\" value=\"";
        // line 52
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"Patient Telephone\" class=\"form-control ";
        if (($context["error_telephone"] ?? null)) {
            echo "is-invalid";
        }
        echo "\"/>
\t\t\t\t\t\t\t";
        // line 53
        if (($context["error_telephone"] ?? null)) {
            // line 54
            echo "\t\t\t\t\t\t\t\t<div id=\"error-telephone\" class=\"invalid-feedback d-block\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3 row \">
\t\t\t\t\t\t<label for=\"input-gender\" class=\"col-md-2 col-form-label\">Gender</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<select name=\"gender\" id=\"input-gender\" class=\"form-select\">
\t\t\t\t\t\t\t\t<option value=\"\">-- Select Gender --</option>
\t\t\t\t\t\t\t\t<option value=\"male\" ";
        // line 63
        if ((($context["gender"] ?? null) == "male")) {
            echo " selected ";
        }
        echo ">Male</option>
\t\t\t\t\t\t\t\t<option value=\"female\" ";
        // line 64
        if ((($context["gender"] ?? null) == "female")) {
            echo " selected ";
        }
        echo ">Female</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3 row \">
\t\t\t\t\t\t<label for=\"input-diagnosis\" class=\"col-md-2 col-form-label\">Diagnosis</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<textarea name=\"diagnosis\" id=\"input-diagnosis\" class=\"form-control\">";
        // line 71
        echo ($context["diagnosis"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label for=\"input-description\" class=\"col-sm-2 col-form-label\">Description</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea name=\"description\" id=\"input-description\" class=\"form-control\">";
        // line 77
        echo ($context["description"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label for=\"input-address\" class=\"col-sm-2 col-form-label\">address</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea name=\"address\" id=\"input-address\" class=\"form-control\">";
        // line 85
        echo ($context["address"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    <div class=\"row mb-3\">
\t\t\t\t\t\t<label for=\"input-doctor\" class=\"col-sm-2 col-form-label\">Doctor</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"doctor\" value=\"";
        // line 91
        echo ($context["doctor"] ?? null);
        echo "\" placeholder=\"Doctor\" id=\"input-doctor\" data-oc-target=\"autocomplete-doctor\" class=\"form-control\" autocomplete=\"off\"/>
\t\t\t\t\t\t\t<ul id=\"autocomplete-doctor\" class=\"dropdown-menu\"></ul>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"doctor_id\" value=\"";
        // line 93
        echo ($context["doctor_id"] ?? null);
        echo "\" id=\"input-doctor-id\"/>
\t\t\t\t\t\t\t<div class=\"form-text\">";
        // line 94
        echo ($context["help_doctor"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\">

\$('#input-doctor').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=clinic/doctor/autocomplete&user_token=";
        // line 107
        echo ($context["user_token"] ?? null);
        echo "&filter_username=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) { 
                    return {
                        value: item['doctor_id'],
                        label: item['username']  
                    };
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-doctor').val(item['label']);
        \$('#input-doctor-id').val(item['value']); 
    }
});

</script>

";
        // line 127
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "clinic/patient_form.twig";
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
        return array (  258 => 127,  235 => 107,  219 => 94,  215 => 93,  210 => 91,  201 => 85,  190 => 77,  181 => 71,  169 => 64,  163 => 63,  154 => 56,  148 => 54,  146 => 53,  138 => 52,  129 => 46,  122 => 41,  116 => 39,  114 => 38,  106 => 37,  99 => 33,  85 => 21,  74 => 18,  71 => 17,  67 => 16,  62 => 14,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "clinic/patient_form.twig", "");
    }
}
