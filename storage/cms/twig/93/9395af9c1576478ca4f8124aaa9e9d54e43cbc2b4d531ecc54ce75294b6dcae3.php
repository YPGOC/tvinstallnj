<?php

/* /Users/yogeshpatel/web/tvinstallnj/themes/laratify-octobercms-octaskin/layouts/octaskin.htm */
class __TwigTemplate_b4b91eae0d35bb769190d3dd7defb571555771d73c3056bf9cb407e89d0aa7a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_description", array()), $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "description", array()))) : ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "description", array()))), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "keywords", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "website_author", array()), "html", null, true);
        echo "\">
    <title>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "website_name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array()), $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()))) : ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()))), "html", null, true);
        echo "</title>
    <link rel=\"canonical\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "website_url", array()), "html", null, true);
        echo "\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icon.png");
        echo "\" />

    ";
        // line 14
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_google_fonts", array())) {
            // line 15
            echo "      <!-- <link href=\"https://fonts.googleapis.com/css?family=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "google_font_family", array()), "html", null, true);
            echo "\" rel=\"stylesheet\"> -->
      <link href=\"";
            // line 16
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/google_fonts.css");
            echo "\" rel=\"stylesheet\">
    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_fontawesome", array())) {
            // line 20
            echo "      <!-- <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\"> -->
      <link href=\"";
            // line 21
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/font-awesome.min.css");
            echo "\" rel=\"stylesheet\">
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_material_icons", array())) {
            // line 25
            echo "      <!-- <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\"> -->
      <link href=\"";
            // line 26
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/material_icons.css");
            echo "\" rel=\"stylesheet\">
    ";
        }
        // line 28
        echo "
    ";
        // line 29
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_stroke7_icons", array())) {
            // line 30
            echo "      <link href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/stroke7/stroke7-icon-font.min.css");
            echo "\" rel=\"stylesheet\">
    ";
        }
        // line 32
        echo "
    <link href=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/scss/style.scss"));
        echo "\" rel=\"stylesheet\">

    ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("_addons/css"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "
    ";
        // line 37
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 38
        echo "
    ";
        // line 39
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "custom_css", array())) {
            // line 40
            echo "      <style>
      ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "custom_css", array()), "html", null, true);
            echo "
      </style>
    ";
        }
        // line 44
        echo "  <link href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme_overrides.css");
        echo "\" rel=\"stylesheet\">
    <script src=\"https://form.jotform.com/static/feedback2.js?3.3.REV\" type=\"text/javascript\"> new JotformFeedback({ formId: \"63541219480151\", buttonText: \"Request a Call\", base: \"https://form.jotform.com/\", background: \"#ff5722\", fontColor: \"#FFFFFF\", buttonSide: \"right\", buttonAlign: \"center\", type: false, width: 600, height: 500 }); </script>
  </head>
  <body class=\"lt-theme-";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "config", array()), "code", array()), "html", null, true);
        echo " lt-layout-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "layout", array()), "id", array()), "html", null, true);
        echo " lt-page-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()), "html", null, true);
        echo "\">
    <div id=\"lt-page-surround\">
      <section id=\"lt-navigation\" class=\"lt-section section lt-no-background\">
        <div class=\"lt-row row\">
          <div class=\"lt-content lt-navigation-content\">
            ";
        // line 52
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-all/navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 53
        echo "          </div>
        </div>
      </section>

      ";
        // line 57
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 58
        echo "
      <section id=\"lt-footer\" class=\"lt-section section\">
        <div class=\"lt-container container\">
          <div class=\"lt-content lt-footer-content\">
            ";
        // line 62
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-all/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 63
        echo "          </div>
        </div>
      </section>

      <section id=\"lt-copyright\" class=\"lt-section section\">
        <div class=\"lt-container container\">
          <div class=\"lt-content lt-copyright-content\">
            ";
        // line 70
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-all/copyright"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 71
        echo "          </div>
        </div>
      </section>
    </div>

    <!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "jQuery_version", array()), "html", null, true);
        echo "/jquery.min.js\"></script> -->
    <script src=\"";
        // line 77
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/jquery.min.js", 1 => "assets/js/theme.js"));
        echo "\"></script>
    <script src=\"";
        // line 78
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/materialize.min.js", 1 => "assets/js/theme.js"));
        echo "\"></script>

    ";
        // line 80
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_octobercms_framework", array())) {
            // line 81
            echo "      ";
            echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
            echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
            // line 82
            echo "    ";
        }
        // line 83
        echo "
    ";
        // line 84
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("_addons/js"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 85
        echo "
    ";
        // line 86
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 87
        echo "
    ";
        // line 88
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "custom_js", array())) {
            // line 89
            echo "      <script>
      ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "custom_js", array()), "html", null, true);
            echo "
      </script>
    ";
        }
        // line 93
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/yogeshpatel/web/tvinstallnj/themes/laratify-octobercms-octaskin/layouts/octaskin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 93,  243 => 90,  240 => 89,  238 => 88,  235 => 87,  232 => 86,  229 => 85,  225 => 84,  222 => 83,  219 => 82,  211 => 81,  209 => 80,  204 => 78,  200 => 77,  196 => 76,  189 => 71,  185 => 70,  176 => 63,  172 => 62,  166 => 58,  164 => 57,  158 => 53,  154 => 52,  142 => 47,  135 => 44,  129 => 41,  126 => 40,  124 => 39,  121 => 38,  118 => 37,  115 => 36,  111 => 35,  106 => 33,  103 => 32,  97 => 30,  95 => 29,  92 => 28,  87 => 26,  84 => 25,  82 => 24,  79 => 23,  74 => 21,  71 => 20,  69 => 19,  66 => 18,  61 => 16,  56 => 15,  54 => 14,  49 => 12,  45 => 11,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.description) }}\">
    <meta name=\"keywords\" content=\"{{ this.theme.keywords }}\">
    <meta name=\"author\" content=\"{{ this.theme.website_author }}\">
    <title>{{ this.theme.website_name }} - {{ this.page.meta_title|default(this.page.title) }}</title>
    <link rel=\"canonical\" href=\"{{ this.theme.website_url }}\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/img/icon.png'|theme }}\" />

    {% if this.theme.load_google_fonts %}
      <!-- <link href=\"https://fonts.googleapis.com/css?family={{ this.theme.google_font_family }}\" rel=\"stylesheet\"> -->
      <link href=\"{{ 'assets/css/google_fonts.css'|theme }}\" rel=\"stylesheet\">
    {% endif %}

    {% if this.theme.load_fontawesome %}
      <!-- <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\"> -->
      <link href=\"{{ 'assets/css/font-awesome.min.css'|theme }}\" rel=\"stylesheet\">
    {% endif %}

    {% if this.theme.load_material_icons %}
      <!-- <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\"> -->
      <link href=\"{{ 'assets/css/material_icons.css'|theme }}\" rel=\"stylesheet\">
    {% endif %}

    {% if this.theme.load_stroke7_icons %}
      <link href=\"{{ 'assets/css/stroke7/stroke7-icon-font.min.css'|theme }}\" rel=\"stylesheet\">
    {% endif %}

    <link href=\"{{ ['assets/scss/style.scss']|theme }}\" rel=\"stylesheet\">

    {% partial \"_addons/css\" %}

    {% styles %}

    {% if this.theme.custom_css %}
      <style>
      {{ this.theme.custom_css }}
      </style>
    {% endif %}
  <link href=\"{{ 'assets/css/theme_overrides.css'|theme }}\" rel=\"stylesheet\">
    <script src=\"https://form.jotform.com/static/feedback2.js?3.3.REV\" type=\"text/javascript\"> new JotformFeedback({ formId: \"63541219480151\", buttonText: \"Request a Call\", base: \"https://form.jotform.com/\", background: \"#ff5722\", fontColor: \"#FFFFFF\", buttonSide: \"right\", buttonAlign: \"center\", type: false, width: 600, height: 500 }); </script>
  </head>
  <body class=\"lt-theme-{{ this.theme.config.code }} lt-layout-{{ this.layout.id }} lt-page-{{ this.page.id }}\">
    <div id=\"lt-page-surround\">
      <section id=\"lt-navigation\" class=\"lt-section section lt-no-background\">
        <div class=\"lt-row row\">
          <div class=\"lt-content lt-navigation-content\">
            {% partial \"pages-all/navigation\" %}
          </div>
        </div>
      </section>

      {% page %}

      <section id=\"lt-footer\" class=\"lt-section section\">
        <div class=\"lt-container container\">
          <div class=\"lt-content lt-footer-content\">
            {% partial \"pages-all/footer\" %}
          </div>
        </div>
      </section>

      <section id=\"lt-copyright\" class=\"lt-section section\">
        <div class=\"lt-container container\">
          <div class=\"lt-content lt-copyright-content\">
            {% partial \"pages-all/copyright\" %}
          </div>
        </div>
      </section>
    </div>

    <!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/{{ this.theme.jQuery_version }}/jquery.min.js\"></script> -->
    <script src=\"{{ ['assets/js/jquery.min.js','assets/js/theme.js']|theme }}\"></script>
    <script src=\"{{ ['assets/js/materialize.min.js','assets/js/theme.js']|theme }}\"></script>

    {% if this.theme.load_octobercms_framework %}
      {% framework extras %}
    {% endif %}

    {% partial \"_addons/js\" %}

    {% scripts %}

    {% if this.theme.custom_js %}
      <script>
      {{ this.theme.custom_js }}
      </script>
    {% endif %}
  </body>
</html>", "/Users/yogeshpatel/web/tvinstallnj/themes/laratify-octobercms-octaskin/layouts/octaskin.htm", "");
    }
}
