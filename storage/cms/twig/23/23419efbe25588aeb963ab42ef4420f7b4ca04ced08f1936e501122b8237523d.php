<?php

/* /Users/yogeshpatel/web/tvinstallnj/themes/laratify-octobercms-octaskin/partials/pages-all/navigation.htm */
class __TwigTemplate_a3a15cb15c8413418dfeaaf747d72b66094b8b477a43e5aeb6ead0b7e51604dd extends Twig_Template
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
        echo "<div class=\"lt-navbar navbar-fixed\">
  <nav class=\"lt-no-background\">
    <div class=\"nav-wrapper\">
      <div class=\"lt-container container\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" class=\"brand-logo white-text\">TV<span>Install</span>NJ</a>
        <a href=\"#\" data-activates=\"mobile-menu\" class=\"lt-mobile-toggle button-collapse\"><i class=\"fa fa-server\"></i></a>
        <ul class=\"right hide-on-med-and-down\">
          <li class=\"";
        // line 8
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a></li>
          <li class=\"";
        // line 9
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "getquote")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("getquote");
        echo "\">Get Quote</a></li>
          <li class=\"";
        // line 10
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\">About</a></li>
          <li class=\"";
        // line 11
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "portfolio")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("portfolio");
        echo "\">Portfolio</a></li>
           <script src=\"https://form.jotform.com/static/feedback2.js?3.3.REV\" type=\"text/javascript\"> var JFL_63541219480151 = new JotformFeedback({ formId: '63541219480151', base: 'https://form.jotform.com/', windowTitle: 'Request a Call', background: '#ff5722', fontColor: '#FFFFFF', type: 'false', height: 520, width: 600, openOnLoad: false }); </script>
          <li class=\"active phone-number\"><a class=\"lightbox-63541219480151\">
            <!-- <a href=\"http://tvinstallnj.dev/getquote\"> -->
              <h6>CALL/TEXT FOR QUOTE</h6>
              <p>732-770-7099</p>
            </a>
          </li>
        </ul>
        <ul class=\"side-nav\" id=\"mobile-menu\">
          <li class=\"";
        // line 21
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a></li>
          <li class=\"";
        // line 22
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "getquote")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("getquote");
        echo "\">Get Quote</a></li>
          <li class=\"";
        // line 23
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\">About</a></li>
          <li class=\"";
        // line 24
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "portfolio")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("portfolio");
        echo "\">Portfolio</a></li>
          
        </ul>
      </div>
    </div>
  </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/yogeshpatel/web/tvinstallnj/themes/laratify-octobercms-octaskin/partials/pages-all/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  88 => 23,  80 => 22,  72 => 21,  55 => 11,  47 => 10,  39 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"lt-navbar navbar-fixed\">
  <nav class=\"lt-no-background\">
    <div class=\"nav-wrapper\">
      <div class=\"lt-container container\">
        <a href=\"{{ 'home'|page }}\" class=\"brand-logo white-text\">TV<span>Install</span>NJ</a>
        <a href=\"#\" data-activates=\"mobile-menu\" class=\"lt-mobile-toggle button-collapse\"><i class=\"fa fa-server\"></i></a>
        <ul class=\"right hide-on-med-and-down\">
          <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
          <li class=\"{% if this.page.id == 'getquote' %}active{% endif %}\"><a href=\"{{ 'getquote'|page }}\">Get Quote</a></li>
          <li class=\"{% if this.page.id == 'about' %}active{% endif %}\"><a href=\"{{ 'about'|page }}\">About</a></li>
          <li class=\"{% if this.page.id == 'portfolio' %}active{% endif %}\"><a href=\"{{ 'portfolio'|page }}\">Portfolio</a></li>
           <script src=\"https://form.jotform.com/static/feedback2.js?3.3.REV\" type=\"text/javascript\"> var JFL_63541219480151 = new JotformFeedback({ formId: '63541219480151', base: 'https://form.jotform.com/', windowTitle: 'Request a Call', background: '#ff5722', fontColor: '#FFFFFF', type: 'false', height: 520, width: 600, openOnLoad: false }); </script>
          <li class=\"active phone-number\"><a class=\"lightbox-63541219480151\">
            <!-- <a href=\"http://tvinstallnj.dev/getquote\"> -->
              <h6>CALL/TEXT FOR QUOTE</h6>
              <p>732-770-7099</p>
            </a>
          </li>
        </ul>
        <ul class=\"side-nav\" id=\"mobile-menu\">
          <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
          <li class=\"{% if this.page.id == 'getquote' %}active{% endif %}\"><a href=\"{{ 'getquote'|page }}\">Get Quote</a></li>
          <li class=\"{% if this.page.id == 'about' %}active{% endif %}\"><a href=\"{{ 'about'|page }}\">About</a></li>
          <li class=\"{% if this.page.id == 'portfolio' %}active{% endif %}\"><a href=\"{{ 'portfolio'|page }}\">Portfolio</a></li>
          
        </ul>
      </div>
    </div>
  </nav>
</div>", "/Users/yogeshpatel/web/tvinstallnj/themes/laratify-octobercms-octaskin/partials/pages-all/navigation.htm", "");
    }
}
