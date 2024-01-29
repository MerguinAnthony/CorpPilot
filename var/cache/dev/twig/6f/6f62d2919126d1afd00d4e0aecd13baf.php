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

/* partials/_headerStaff.html.twig */
class __TwigTemplate_f903ac5cd78bb2fe74bd8b71719f8b88 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_headerStaff.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_headerStaff.html.twig"));

        // line 1
        echo "<section class=\"headerStaff\">
    <div class=\"row mt-4 \">
        <div id=\"desktopUser\" class=\"col-4\" style=\"display: none;\">
            ";
        // line 4
        $this->loadTemplate("partials/_currentUser.html.twig", "partials/_headerStaff.html.twig", 4)->display($context);
        // line 5
        echo "        </div>
        <div class=\"col-4\"></div>
        <div class=\"col-4 d-flex justify-content-center align-items-center\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 8, $this->source); })()), "companyLogoFile"), "html", null, true);
        echo "\" width=\"100\" alt=\"Logo de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 8, $this->source); })()), "companyName", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
        </div>
        <div id=\"phonelogout\" class=\"col-4 d-flex justify-content-end align-items-center\">
            ";
        // line 11
        $this->loadTemplate("partials/_logout.html.twig", "partials/_headerStaff.html.twig", 11)->display($context);
        // line 12
        echo "        </div>
    </div>
</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_headerStaff.html.twig";
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
        return array (  65 => 12,  63 => 11,  55 => 8,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"headerStaff\">
    <div class=\"row mt-4 \">
        <div id=\"desktopUser\" class=\"col-4\" style=\"display: none;\">
            {% include \"partials/_currentUser.html.twig\" %}
        </div>
        <div class=\"col-4\"></div>
        <div class=\"col-4 d-flex justify-content-center align-items-center\">
            <img src=\"{{ vich_uploader_asset(company, 'companyLogoFile') }}\" width=\"100\" alt=\"Logo de {{ company.companyName}}\">
        </div>
        <div id=\"phonelogout\" class=\"col-4 d-flex justify-content-end align-items-center\">
            {% include \"partials/_logout.html.twig\" %}
        </div>
    </div>
</section>", "partials/_headerStaff.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/partials/_headerStaff.html.twig");
    }
}
