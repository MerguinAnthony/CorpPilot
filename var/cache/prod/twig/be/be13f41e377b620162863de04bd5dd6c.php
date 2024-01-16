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

/* partials/_desktopNav.html.twig */
class __TwigTemplate_273120f68f914e1fb6e3c9b079faac05 extends Template
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
        echo "<nav class=\"navbar navbar-expand-md bg-body-tertiary\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_vacation");
        echo "\">";
        echo twig_escape_filter($this->env, ($context["companyAbrev"] ?? null), "html", null, true);
        echo "Gest</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_vacation");
        echo "\">Demande de congés</a>
        </li>
        ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Gestion
          </a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_management");
            echo "\">Gestion des congés</a></li>
            <li><a class=\"dropdown-item\" href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
            echo "\">Gestion des employés</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
          </ul>
        </li>
        ";
        }
        // line 25
        echo "      </ul>
    </div>
  </div>
  <div id=\"desktoplogout\" style=\"display: none;\">
      ";
        // line 29
        $this->loadTemplate("partials/_logout.html.twig", "partials/_desktopNav.html.twig", 29)->display($context);
        // line 30
        echo "  </div>
</nav>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_desktopNav.html.twig";
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
        return array (  88 => 30,  86 => 29,  80 => 25,  71 => 19,  67 => 18,  60 => 13,  58 => 12,  53 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/_desktopNav.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/partials/_desktopNav.html.twig");
    }
}
