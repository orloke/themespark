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

/* /themes/custom/simplesmart/templates/Menu/menu.html.twig */
class __TwigTemplate_0fdc9ad042cf88d555ad788b1e672b35f5a9439c827b0539d6320503dfa6da1b extends \Twig\Template
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
        echo "<input type=\"checkbox\" name=\"\" id=\"input-menu\">
<nav class=\"navbar\">
\t<div class=\"navbar-menu-logo\">
\t\t<input type=\"checkbox\" name=\"\" id=\"input-menu\">
\t\t<label class=\"hamburger-lines\" for=\"input-menu\">
\t\t\t<span class=\"line line1\"></span>
\t\t\t<span class=\"line line2\"></span>
\t\t\t<span class=\"line line3\"></span>
\t\t</label>
\t\t<a href=\"/\">
\t\t\t<img class=\"logo\" src=\"themes/custom/simplesmart/logo.png\"/>
\t\t</a>
\t</div>
\t<ul class=\"menu-items\">
\t\t<li>
\t\t\t<a href=\"/\">
\t\t\t\tINTRODUÇÃO
\t\t\t\t<i class=\"fa-solid fa-house-user\"></i>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"/contato\">
\t\t\t\tCONTATO
\t\t\t\t<i class=\"fa-solid fa-address-book\"></i>
\t\t\t</a>
\t\t</li>
\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "/themes/custom/simplesmart/templates/Menu/menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<input type=\"checkbox\" name=\"\" id=\"input-menu\">
<nav class=\"navbar\">
\t<div class=\"navbar-menu-logo\">
\t\t<input type=\"checkbox\" name=\"\" id=\"input-menu\">
\t\t<label class=\"hamburger-lines\" for=\"input-menu\">
\t\t\t<span class=\"line line1\"></span>
\t\t\t<span class=\"line line2\"></span>
\t\t\t<span class=\"line line3\"></span>
\t\t</label>
\t\t<a href=\"/\">
\t\t\t<img class=\"logo\" src=\"themes/custom/simplesmart/logo.png\"/>
\t\t</a>
\t</div>
\t<ul class=\"menu-items\">
\t\t<li>
\t\t\t<a href=\"/\">
\t\t\t\tINTRODUÇÃO
\t\t\t\t<i class=\"fa-solid fa-house-user\"></i>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"/contato\">
\t\t\t\tCONTATO
\t\t\t\t<i class=\"fa-solid fa-address-book\"></i>
\t\t\t</a>
\t\t</li>
\t</ul>
</nav>
", "/themes/custom/simplesmart/templates/Menu/menu.html.twig", "/var/www/html/web/themes/custom/simplesmart/templates/Menu/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
