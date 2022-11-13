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

/* themes/custom/simplesmart/templates/page--front.html.twig */
class __TwigTemplate_319f6a294ea1dafb17b6d9c771026cf3eaf51d9fdf5067964298bcfd78e2a6be extends \Twig\Template
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
        // line 45
        echo "

<div class=\"layout\">
\t";
        // line 48
        $this->loadTemplate("/themes/custom/simplesmart/templates/Header/header.html.twig", "themes/custom/simplesmart/templates/page--front.html.twig", 48)->display($context);
        // line 49
        echo "
\t<main>
\t\t<p>
\t\t\tSomos uma produtora digital que desenvolve tecnologia e viabiliza outsourcing de equipes de alto padrão, preparadas para atuar em projetos de marcas globais.
\t\t\t<br/>
\t\t\t<br/>
\t\t\tVeja alguns de nossos parceiros:
\t\t</p>
\t\t<div class=\"partners\">
\t\t\t<img src=\"themes/custom/simplesmart/brivia.png\"/>
\t\t\t<img src=\"themes/custom/simplesmart/hogarth.png\"/>
\t\t\t<img src=\"themes/custom/simplesmart/just.png\"/>
\t\t\t<img src=\"themes/custom/simplesmart/squadra.png\"/>
\t\t\t<img src=\"themes/custom/simplesmart/wpp.png\"/>
\t\t</div>
\t</main>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/simplesmart/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 49,  44 => 48,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}


<div class=\"layout\">
\t{% include '/themes/custom/simplesmart/templates/Header/header.html.twig' %}

\t<main>
\t\t<p>
\t\t\tSomos uma produtora digital que desenvolve tecnologia e viabiliza outsourcing de equipes de alto padrão, preparadas para atuar em projetos de marcas globais.
\t\t\t<br/>
\t\t\t<br/>
\t\t\tVeja alguns de nossos parceiros:
\t\t</p>
\t\t<div class=\"partners\">
\t\t\t<img src=\"themes/custom/simplesmart/brivia.png\"/>
\t\t\t<img src=\"themes/custom/simplesmart/hogarth.png\"/>
\t\t\t<img src=\"themes/custom/simplesmart/just.png\"/>
\t\t\t<img src=\"themes/custom/simplesmart/squadra.png\"/>
\t\t\t<img src=\"themes/custom/simplesmart/wpp.png\"/>
\t\t</div>
\t</main>

</div>
", "themes/custom/simplesmart/templates/page--front.html.twig", "/var/www/html/web/themes/custom/simplesmart/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 48);
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
