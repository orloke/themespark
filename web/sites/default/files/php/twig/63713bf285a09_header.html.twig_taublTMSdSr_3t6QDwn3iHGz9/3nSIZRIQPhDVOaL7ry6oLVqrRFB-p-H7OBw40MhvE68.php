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

/* /themes/custom/simplesmart/templates/Header/header.html.twig */
class __TwigTemplate_f283e54b627883e18fe94c0acc2614440ca723a4f2d94231bc30629b4cc9bc84 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("/themes/custom/simplesmart/templates/Menu/menu.html.twig", "/themes/custom/simplesmart/templates/Header/header.html.twig", 1)->display($context);
        // line 2
        echo "<header>
\t<a href=\"/\">
\t\t<img class=\"logo\" src=\"themes/custom/simplesmart/logo.png\"/>
\t</a>
\t<div class=\"container-buttons\">
\t\t<a href=\"/\" class=\"button-layout button-home\">
\t\t\tINTRODUÇÃO
\t\t</a>
\t\t<a href=\"/contato\" class=\"button-layout button-contact\">
\t\t\tCONTATO
\t\t</a>
\t</div>
\t<div class=\"page-name\">
\t\t<p class=\"current-page\"></p>
\t\t<img src=\"themes/custom/simplesmart/borderBottom.png\"/>
\t</div>
</header>
";
    }

    public function getTemplateName()
    {
        return "/themes/custom/simplesmart/templates/Header/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '/themes/custom/simplesmart/templates/Menu/menu.html.twig' %}
<header>
\t<a href=\"/\">
\t\t<img class=\"logo\" src=\"themes/custom/simplesmart/logo.png\"/>
\t</a>
\t<div class=\"container-buttons\">
\t\t<a href=\"/\" class=\"button-layout button-home\">
\t\t\tINTRODUÇÃO
\t\t</a>
\t\t<a href=\"/contato\" class=\"button-layout button-contact\">
\t\t\tCONTATO
\t\t</a>
\t</div>
\t<div class=\"page-name\">
\t\t<p class=\"current-page\"></p>
\t\t<img src=\"themes/custom/simplesmart/borderBottom.png\"/>
\t</div>
</header>
", "/themes/custom/simplesmart/templates/Header/header.html.twig", "/var/www/html/web/themes/custom/simplesmart/templates/Header/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
