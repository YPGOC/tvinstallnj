<?php

/* /Users/yogeshpatel/web/tvinstallnj/themes/laratify-octobercms-octaskin/partials/_addons/css.htm */
class __TwigTemplate_125326d7c4839843cc9e9270cdaa56e07e8bd6a75ea174e0da0aa4267353783a extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_animate_css", array())) {
            // line 2
            echo "  <!-- <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css\" rel=\"stylesheet\"> -->
  <link href=\"";
            // line 3
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/animate.min.css");
            echo "\" rel=\"stylesheet\">
";
        }
        // line 5
        echo "
";
        // line 6
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_owl_carousel", array())) {
            // line 7
            echo "  <!-- <link href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css\" rel=\"stylesheet\"> -->
  <link href=\"";
            // line 8
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/owl.carousel.min.css");
            echo "\" rel=\"stylesheet\">

  <!-- <link href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css\" rel=\"stylesheet\"> -->
  <link href=\"";
            // line 11
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/owl.theme.default.min.css");
            echo "\" rel=\"stylesheet\">
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/yogeshpatel/web/tvinstallnj/themes/laratify-octobercms-octaskin/partials/_addons/css.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  37 => 8,  34 => 7,  32 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if this.theme.load_animate_css %}
  <!-- <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css\" rel=\"stylesheet\"> -->
  <link href=\"{{ 'assets/css/animate.min.css'|theme }}\" rel=\"stylesheet\">
{% endif %}

{% if this.theme.load_owl_carousel %}
  <!-- <link href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css\" rel=\"stylesheet\"> -->
  <link href=\"{{ 'assets/css/owl.carousel.min.css'|theme }}\" rel=\"stylesheet\">

  <!-- <link href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css\" rel=\"stylesheet\"> -->
  <link href=\"{{ 'assets/css/owl.theme.default.min.css'|theme }}\" rel=\"stylesheet\">
{% endif %}", "/Users/yogeshpatel/web/tvinstallnj/themes/laratify-octobercms-octaskin/partials/_addons/css.htm", "");
    }
}
