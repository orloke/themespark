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

/* themes/custom/simplesmart/templates/page.html.twig */
class __TwigTemplate_552af85800fdc934164736400d97d67d68ca9a51d71ae45afc804c1359eabc95 extends \Twig\Template
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
        // line 91
        echo "
<div class = \"layout\">

  <header>
    <img class=\"logo\" src=\"https://themespark.ddev.site/themes/custom/simplesmart/logo.png\" />
    <div class=\"container-buttons\" >
      <button class=\"button-home\">INTRODUÇÃO</button>
      <button class=\"button-home\">CONTATO</button>
    </div>
    <div class=\"page-name\">
      <p>Introdução</p>
      <img src=\"https://themespark.ddev.site/themes/custom/simplesmart/borderBottom.png\" />
    </div>
  </header>

  <main>
    <p>
      Somos uma produtora digital que desenvolve tecnologia e viabiliza
      outsourcing de equipes de alto padrão, preparadas para atuar em
      projetos de marcas globais.
      <br />
      <br />
      Veja alguns de nossos parceiros:
    </p>
    <div class=\"partners\">
      <img src=\"https://themespark.ddev.site/themes/custom/simplesmart/brivia.png\" />
      <img src=\"https://themespark.ddev.site/themes/custom/simplesmart/hogarth.png\" />
      <img src=\"https://themespark.ddev.site/themes/custom/simplesmart/just.png\" />
      <img src=\"https://themespark.ddev.site/themes/custom/simplesmart/squadra.png\" />
      <img src=\"https://themespark.ddev.site/themes/custom/simplesmart/wpp.png\" />
    </div>
  </main>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/simplesmart/templates/page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 91,  39 => 45,);
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

{# <div class=\"layout-container\">

  <header role=\"banner\">
    {{ page.header }}
  </header>


  <div id=\"simplesmartmenu\" class=\"content\">
    <p>Olá a todos</p>
  </div>

  {{ page.breadcrumb }}

  {{ page.highlighted }}

  {{ page.help }}

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>

    <div class=\"layout-content\">
      {{ page.content }}
    </div>

    {% if page.sidebar_first %}
      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        {{ page.sidebar_first }}
      </aside>
    {% endif %}

    {% if page.sidebar_second %}
      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        {{ page.sidebar_second }}
      </aside>
    {% endif %}

  </main>

  {% if page.footer %}
    <footer role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endif %}

</div> #}

<div class = \"layout\">

  <header>
    <img class=\"logo\" src=\"https://themespark.ddev.site/themes/custom/simplesmart/logo.png\" />
    <div class=\"container-buttons\" >
      <button class=\"button-home\">INTRODUÇÃO</button>
      <button class=\"button-home\">CONTATO</button>
    </div>
    <div class=\"page-name\">
      <p>Introdução</p>
      <img src=\"https://themespark.ddev.site/themes/custom/simplesmart/borderBottom.png\" />
    </div>
  </header>

  <main>
    <p>
      Somos uma produtora digital que desenvolve tecnologia e viabiliza
      outsourcing de equipes de alto padrão, preparadas para atuar em
      projetos de marcas globais.
      <br />
      <br />
      Veja alguns de nossos parceiros:
    </p>
    <div class=\"partners\">
      <img src=\"https://themespark.ddev.site/themes/custom/simplesmart/brivia.png\" />
      <img src=\"https://themespark.ddev.site/themes/custom/simplesmart/hogarth.png\" />
      <img src=\"https://themespark.ddev.site/themes/custom/simplesmart/just.png\" />
      <img src=\"https://themespark.ddev.site/themes/custom/simplesmart/squadra.png\" />
      <img src=\"https://themespark.ddev.site/themes/custom/simplesmart/wpp.png\" />
    </div>
  </main>

</div>
", "themes/custom/simplesmart/templates/page.html.twig", "/var/www/html/web/themes/custom/simplesmart/templates/page.html.twig");
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
