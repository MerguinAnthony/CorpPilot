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

/* pages/partials/_nav.html.twig */
class __TwigTemplate_e66f4a6636e3f86ac823edea6268bc8a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/partials/_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/partials/_nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar bg-body-tertiary position-fixed bottom-0 w-100\">
  <div class=\"container d-flex justify-content-around\">
      <a href=\"#\"><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/horloge.svg"), "html", null, true);
        echo "\" alt=\"horloge\"></a>
      <a href=\"#\"><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/calendrier.svg"), "html", null, true);
        echo "\" alt=\"calendrier\"></a>
      <a href=\"#\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/doc.svg"), "html", null, true);
        echo "\" alt=\"doc\"></a>
  </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/partials/_nav.html.twig";
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
        return array (  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar bg-body-tertiary position-fixed bottom-0 w-100\">
  <div class=\"container d-flex justify-content-around\">
      <a href=\"#\"><img src=\"{{asset('assets/svg/horloge.svg')}}\" alt=\"horloge\"></a>
      <a href=\"#\"><img src=\"{{asset('assets/svg/calendrier.svg')}}\" alt=\"calendrier\"></a>
      <a href=\"#\"><img src=\"{{asset('assets/svg/doc.svg')}}\" alt=\"doc\"></a>
  </div>
</nav>", "pages/partials/_nav.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/partials/_nav.html.twig");
    }
}
