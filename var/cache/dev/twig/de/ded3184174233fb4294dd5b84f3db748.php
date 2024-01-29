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

/* document_template.html.twig */
class __TwigTemplate_1a782e9d2a0270b7748d59066096fa94 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document_template.html.twig"));

        // line 1
        echo "<html>
  <head>
    <meta charset=\"utf-8\">
  
    <style>
      body {
        font-family: Arial, sans-serif;
      }

      .letter {
        max-width: 90%;
        margin: 0 auto;
      }

      .header {
        text-align: center;
        margin-bottom: 20px;
      }

      .content {
        margin-top: 40px;
        text-align: justify;
      }

      .date {
        margin: 40px 0 20px 100px;
      }

      .sender-info,
      .recipient-info {
        width: 100%;
      }

      .sender-info {
        text-align: left;
      }

      .recipient-info {
        text-align: right;
      }

      .corps {
        margin-top: 50px;
      }

      .signature {
        margin-top: 50px;
      }
    </style>
  </head>
  <body>
    <div class=\"letter\">
      <div class=\"header\">
      <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 54, $this->source); })()), "companyLogoFile")), "html", null, true);
        echo "\" width=\"100\" alt=\"Logo de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 54, $this->source); })()), "companyName", [], "any", false, false, false, 54), "html", null, true);
        echo "\">
        <p><strong>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 55, $this->source); })()), "companyName", [], "any", false, false, false, 55), "html", null, true);
        echo "</strong></p>
        ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, (isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 56, $this->source); })()), "approved", [], "any", false, false, false, 56) == 1)) {
            // line 57
            echo "          <h1>Acceptation de la Demande de Congé</h1>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 58
(isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 58, $this->source); })()), "approved", [], "any", false, false, false, 58) == 2)) {
            // line 59
            echo "          <h1>Refus de la Demande de Congé</h1>
        ";
        }
        // line 61
        echo "      </div>

      <div class=\"content\">
        <div class=\"sender-info\">
          <p><strong>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 65, $this->source); })()), "companyName", [], "any", false, false, false, 65), "html", null, true);
        echo "</strong></p>
          <p>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 66, $this->source); })()), "companyAddress", [], "any", false, false, false, 66), "html", null, true);
        echo "</p>
          <p>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 67, $this->source); })()), "companyZipcode", [], "any", false, false, false, 67), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 67, $this->source); })()), "companyCity", [], "any", false, false, false, 67), "html", null, true);
        echo "</p>
          <p>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 68, $this->source); })()), "companyEmail", [], "any", false, false, false, 68), "html", null, true);
        echo "</p>
          <p>0";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 69, $this->source); })()), "companyPhone", [], "any", false, false, false, 69), "html", null, true);
        echo "</p>
        </div>

        <div class=\"recipient-info\">
          <p><strong>";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "lastname", [], "any", false, false, false, 73), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "firstname", [], "any", false, false, false, 73), "html", null, true);
        echo "</strong></p>
          <p>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "adress", [], "any", false, false, false, 74), "html", null, true);
        echo "</p>
          <p>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "zipcode", [], "any", false, false, false, 75), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "city", [], "any", false, false, false, 75), "html", null, true);
        echo "</p>
        </div>

        <p class=\"date\">Le ";
        // line 78
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 78, $this->source); })()), "companyCity", [], "any", false, false, false, 78), "html", null, true);
        echo "</p>

        ";
        // line 80
        if ((twig_get_attribute($this->env, $this->source, (isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 80, $this->source); })()), "approved", [], "any", false, false, false, 80) == 1)) {
            // line 81
            echo "          <p>Objet : Acceptation de la Demande de Congé</p>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 82
(isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 82, $this->source); })()), "approved", [], "any", false, false, false, 82) == 2)) {
            // line 83
            echo "          <p>Objet : Refus de la Demande de Congé</p>
        ";
        }
        // line 85
        echo "

        <div class=\"corps\">
        ";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, (isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 88, $this->source); })()), "approved", [], "any", false, false, false, 88) == 1)) {
            // line 89
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 89, $this->source); })()), "account", [], "any", false, false, false, 89) == 3)) {
                // line 90
                echo "            <p>Votre demande de congé, prévue le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 90, $this->source); })()), "startDate", [], "any", false, false, false, 90), "d/m/Y"), "html", null, true);
                echo " de ";
                echo twig_escape_filter($this->env, twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 90, $this->source); })()), "startHours", [], "any", false, false, false, 90), "H:i"), [":" => "h"]), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 90, $this->source); })()), "endHours", [], "any", false, false, false, 90), "H:i"), [":" => "h"]), "html", null, true);
                echo ", a bien été reçue.</p>
          ";
            } else {
                // line 92
                echo "            <p>Votre demande de congé, prévue du ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 92, $this->source); })()), "startDate", [], "any", false, false, false, 92), "d/m/Y"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 92, $this->source); })()), "endDate", [], "any", false, false, false, 92), "d/m/Y"), "html", null, true);
                echo ", a bien été reçue.</p>
          ";
            }
            // line 94
            echo "          <p>Après avoir examiné votre demande, nous sommes heureux de vous informer que votre congé a été accepté.</p>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 95
(isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 95, $this->source); })()), "approved", [], "any", false, false, false, 95) == 2)) {
            // line 96
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 96, $this->source); })()), "account", [], "any", false, false, false, 96) == 3)) {
                // line 97
                echo "            <p>Votre demande de congé, prévue le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 97, $this->source); })()), "startDate", [], "any", false, false, false, 97), "d/m/Y"), "html", null, true);
                echo " de ";
                echo twig_escape_filter($this->env, twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 97, $this->source); })()), "startHours", [], "any", false, false, false, 97), "H:i"), [":" => "h"]), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 97, $this->source); })()), "endHours", [], "any", false, false, false, 97), "H:i"), [":" => "h"]), "html", null, true);
                echo ", a bien été reçue.</p>
          ";
            } else {
                // line 99
                echo "            <p>Votre demande de congé, prévue du ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 99, $this->source); })()), "startDate", [], "any", false, false, false, 99), "d/m/Y"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacation"]) || array_key_exists("vacation", $context) ? $context["vacation"] : (function () { throw new RuntimeError('Variable "vacation" does not exist.', 99, $this->source); })()), "endDate", [], "any", false, false, false, 99), "d/m/Y"), "html", null, true);
                echo ", a bien été reçue.</p>
          ";
            }
            // line 101
            echo "          <p>Après avoir soigneusement examiné votre demande, nous regrettons de vous informer que celle-ci ne peut pas être approuvée.</p>
        ";
        }
        // line 103
        echo "        <p>Merci de votre compréhension.</p>
      </div>
      </div>

      <div class=\"signature\">
    <p>Cordialement,</p>
    <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 109, $this->source); })()), "signatureFile")), "html", null, true);
        echo "\" width=\"100\" alt=\"Signature de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 109, $this->source); })()), "companyName", [], "any", false, false, false, 109), "html", null, true);
        echo "\">




</div>

    </div>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "document_template.html.twig";
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
        return array (  252 => 109,  244 => 103,  240 => 101,  232 => 99,  222 => 97,  219 => 96,  217 => 95,  214 => 94,  206 => 92,  196 => 90,  193 => 89,  191 => 88,  186 => 85,  182 => 83,  180 => 82,  177 => 81,  175 => 80,  168 => 78,  160 => 75,  156 => 74,  150 => 73,  143 => 69,  139 => 68,  133 => 67,  129 => 66,  125 => 65,  119 => 61,  115 => 59,  113 => 58,  110 => 57,  108 => 56,  104 => 55,  98 => 54,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
  <head>
    <meta charset=\"utf-8\">
  
    <style>
      body {
        font-family: Arial, sans-serif;
      }

      .letter {
        max-width: 90%;
        margin: 0 auto;
      }

      .header {
        text-align: center;
        margin-bottom: 20px;
      }

      .content {
        margin-top: 40px;
        text-align: justify;
      }

      .date {
        margin: 40px 0 20px 100px;
      }

      .sender-info,
      .recipient-info {
        width: 100%;
      }

      .sender-info {
        text-align: left;
      }

      .recipient-info {
        text-align: right;
      }

      .corps {
        margin-top: 50px;
      }

      .signature {
        margin-top: 50px;
      }
    </style>
  </head>
  <body>
    <div class=\"letter\">
      <div class=\"header\">
      <img src=\"{{ absolute_url(vich_uploader_asset(company, 'companyLogoFile')) }}\" width=\"100\" alt=\"Logo de {{ company.companyName }}\">
        <p><strong>{{ company.companyName }}</strong></p>
        {% if vacation.approved == 1 %}
          <h1>Acceptation de la Demande de Congé</h1>
        {% elseif vacation.approved == 2 %}
          <h1>Refus de la Demande de Congé</h1>
        {% endif %}
      </div>

      <div class=\"content\">
        <div class=\"sender-info\">
          <p><strong>{{ company.companyName}}</strong></p>
          <p>{{ company.companyAddress}}</p>
          <p>{{ company.companyZipcode}}, {{ company.companyCity}}</p>
          <p>{{ company.companyEmail}}</p>
          <p>0{{ company.companyPhone }}</p>
        </div>

        <div class=\"recipient-info\">
          <p><strong>{{ user.lastname }} {{ user.firstname }}</strong></p>
          <p>{{ user.adress }}</p>
          <p>{{ user.zipcode }}, {{ user.city }}</p>
        </div>

        <p class=\"date\">Le {{ \"now\"|date(\"d/m/Y\") }} à {{ company.companyCity }}</p>

        {% if vacation.approved == 1 %}
          <p>Objet : Acceptation de la Demande de Congé</p>
        {% elseif vacation.approved == 2 %}
          <p>Objet : Refus de la Demande de Congé</p>
        {% endif %}


        <div class=\"corps\">
        {% if vacation.approved == 1 %}
          {% if vacation.account == 3 %}
            <p>Votre demande de congé, prévue le {{ vacation.startDate|date(\"d/m/Y\") }} de {{ vacation.startHours|date(\"H:i\")|replace({\":\": \"h\"}) }} à {{ vacation.endHours|date(\"H:i\")|replace({\":\": \"h\"}) }}, a bien été reçue.</p>
          {% else %}
            <p>Votre demande de congé, prévue du {{ vacation.startDate|date(\"d/m/Y\") }} au {{ vacation.endDate|date(\"d/m/Y\") }}, a bien été reçue.</p>
          {% endif %}
          <p>Après avoir examiné votre demande, nous sommes heureux de vous informer que votre congé a été accepté.</p>
        {% elseif vacation.approved == 2 %}
          {% if vacation.account == 3 %}
            <p>Votre demande de congé, prévue le {{ vacation.startDate|date(\"d/m/Y\") }} de {{ vacation.startHours|date(\"H:i\")|replace({\":\": \"h\"}) }} à {{ vacation.endHours|date(\"H:i\")|replace({\":\": \"h\"}) }}, a bien été reçue.</p>
          {% else %}
            <p>Votre demande de congé, prévue du {{ vacation.startDate|date(\"d/m/Y\") }} au {{ vacation.endDate|date(\"d/m/Y\") }}, a bien été reçue.</p>
          {% endif %}
          <p>Après avoir soigneusement examiné votre demande, nous regrettons de vous informer que celle-ci ne peut pas être approuvée.</p>
        {% endif %}
        <p>Merci de votre compréhension.</p>
      </div>
      </div>

      <div class=\"signature\">
    <p>Cordialement,</p>
    <img src=\"{{ absolute_url(vich_uploader_asset(company, 'signatureFile')) }}\" width=\"100\" alt=\"Signature de {{ company.companyName }}\">




</div>

    </div>
  </body>
</html>
", "document_template.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/document_template.html.twig");
    }
}
