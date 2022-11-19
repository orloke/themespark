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

/* themes/custom/simplesmart/templates/page--node--8.html.twig */
class __TwigTemplate_12e34942d0a32934da53b5abaf3c19d06d333b81a8f28932f64ecefadadb094c extends \Twig\Template
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
";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("simplesmart/contact-scripts"), "html", null, true);
        echo "
";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("simplesmart/contact-css"), "html", null, true);
        echo "

<div ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 49, $this->source), "html", null, true);
        echo " class=\"layout\">

\t";
        // line 51
        $this->loadTemplate("/themes/custom/simplesmart/templates/Header/header.html.twig", "themes/custom/simplesmart/templates/page--node--8.html.twig", 51)->display($context);
        // line 52
        echo "
\t<main class=\"contact\">
\t\t<img src=\"themes/custom/simplesmart/contact.jpg\"/>
\t\t<form>
\t\t\t<div class=\"user-dates\">

\t\t\t\t<input id=\"username\" name=\"username\" type=\"text\" placeholder=\"Nome*\" class = \"input-form\" required/>

\t\t\t\t<input id=\"email\" name=\"email\" type=\"email\" placeholder=\"Email*\" class = \"input-form\" required/>

\t\t\t\t<textarea id=\"observation\" name=\"observation\" type=\"textarea\" rows='5' placeholder=\"Escreva sua mensagem*\" class = \"input-form\" required></textarea>

\t\t\t\t<button class=\"button-layout button-form\" type=\"submit\" >
\t\t\t\t\tEnviar
\t\t\t\t</button>

\t\t\t</div>
\t\t</form>
\t</main>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/simplesmart/templates/page--node--8.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 52,  56 => 51,  51 => 49,  46 => 47,  42 => 46,  39 => 45,);
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

{{ attach_library('simplesmart/contact-scripts') }}
{{ attach_library('simplesmart/contact-css') }}

<div {{attributes}} class=\"layout\">

\t{% include '/themes/custom/simplesmart/templates/Header/header.html.twig' %}

\t<main class=\"contact\">
\t\t<img src=\"themes/custom/simplesmart/contact.jpg\"/>
\t\t<form>
\t\t\t<div class=\"user-dates\">

\t\t\t\t<input id=\"username\" name=\"username\" type=\"text\" placeholder=\"Nome*\" class = \"input-form\" required/>

\t\t\t\t<input id=\"email\" name=\"email\" type=\"email\" placeholder=\"Email*\" class = \"input-form\" required/>

\t\t\t\t<textarea id=\"observation\" name=\"observation\" type=\"textarea\" rows='5' placeholder=\"Escreva sua mensagem*\" class = \"input-form\" required></textarea>

\t\t\t\t<button class=\"button-layout button-form\" type=\"submit\" >
\t\t\t\t\tEnviar
\t\t\t\t</button>

\t\t\t</div>
\t\t</form>
\t</main>

</div>
", "themes/custom/simplesmart/templates/page--node--8.html.twig", "/var/www/html/web/themes/custom/simplesmart/templates/page--node--8.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 51);
        static $filters = array("escape" => 46);
        static $functions = array("attach_library" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
                ['attach_library']
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
