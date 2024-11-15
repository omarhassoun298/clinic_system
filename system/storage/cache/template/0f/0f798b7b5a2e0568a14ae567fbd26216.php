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

/* journal3/template/journal3/module/notification.twig */
class __TwigTemplate_957fe1e68c5c614845b395ad790d35dd extends Template
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
        echo "<div class=\"notification-wrapper notification-wrapper-bottom\">
  <div class=\"";
        // line 2
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 2);
        echo "\" data-options='";
        echo json_encode(($context["options"] ?? null));
        echo "'>
    <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 3
        echo ($context["edit"] ?? null);
        echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        echo ($context["name"] ?? null);
        echo "\"></em></button>
    <div class=\"notification-content\">
      <div>
        <div class=\"notification-title\">";
        // line 6
        echo ($context["title"] ?? null);
        echo "</div>
        <div class=\"notification-text\">";
        // line 7
        echo ($context["text"] ?? null);
        echo "</div>
      </div>
    </div>
    <button class=\"btn notification-close\">";
        // line 10
        echo ($context["notificationCloseText"] ?? null);
        echo "</button>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/module/notification.twig";
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
        return array (  64 => 10,  58 => 7,  54 => 6,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/notification.twig", "");
    }
}
