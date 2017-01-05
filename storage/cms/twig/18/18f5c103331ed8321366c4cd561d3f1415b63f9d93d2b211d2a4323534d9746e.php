<?php

/* /Users/yogeshpatel/web/tvinstallnj/themes/laratify-octobercms-octaskin/partials/_addons/js.htm */
class __TwigTemplate_f9772c81860a0c8850d36ddaa045bb65d390cbb94de4cfbb7c80d4fe8217860b extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_wow_js", array())) {
            // line 2
            echo "  <!-- <script src=\"https://cdnjs.cloudflare.com/ajax/libs/graingert-wow/1.2.0/wow.min.js\"></script> -->
  <script src=\"";
            // line 3
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/wow.min.js");
            echo "\"></script>
";
        }
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_owl_carousel", array())) {
            // line 6
            echo "  <!-- <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.min.js\"></script> -->
  <script src=\"";
            // line 7
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/owl.carousel.min.js");
            echo "\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/yogeshpatel/web/tvinstallnj/themes/laratify-octobercms-octaskin/partials/_addons/js.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  31 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if this.theme.load_wow_js %}
  <!-- <script src=\"https://cdnjs.cloudflare.com/ajax/libs/graingert-wow/1.2.0/wow.min.js\"></script> -->
  <script src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>
{% endif %}
{% if this.theme.load_owl_carousel %}
  <!-- <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.min.js\"></script> -->
  <script src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>
{% endif %}", "/Users/yogeshpatel/web/tvinstallnj/themes/laratify-octobercms-octaskin/partials/_addons/js.htm", "");
    }
}
