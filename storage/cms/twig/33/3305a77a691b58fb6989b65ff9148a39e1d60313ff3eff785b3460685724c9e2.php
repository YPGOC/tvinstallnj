<?php

/* /Users/yogeshpatel/web/tvinstallnj/themes/laratify-octobercms-octaskin/partials/pages-home/slideshow.htm */
class __TwigTemplate_566c3db64202b536d54145a4794046321aae8d78cd20a2f563b929ae3b57675d extends Twig_Template
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
        echo "<div class=\"lt-row row\">
  <div class=\"lt-col col s12\">
    <div class=\"lt-slider slider fullscreen\">
      <ul class=\"slides\">
        <li>
          <img src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/home/slideshow/home_tv_install_nj.jpg");
        echo "\" alt=\"image\">
          <div class=\"caption center-align\">
         
            <h2 class=\"lt-slider-title\">Free Bracket w/ Install!</h2>
            <h5 class=\"lt-slider-subtitle\">Get your quote now!</h5>
            <img class=\"free-bracket-image\" src=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/home/slideshow/free_bracket.png");
        echo "\" alt=\"Free Bracket with TV Install\">
            <div class=\"lt-slider-button\">
              <a href=\"#\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">CALL NOW<i class=\"material-icons right\">phone</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"tel:7329029990\" target=\"_blank\">732.902.9990</a> or <a href=\"#\" target=\"_blank\">GET QUOTE</a>
            </div>
          </div>
        </li>
        <li>
          <img src=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/home/slideshow/wall_mounted_tv.jpg");
        echo "\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Sound Bar? Home Theatre Install?</h2>
            <h5 class=\"lt-slider-subtitle\">We've got you covered.</h5>
            <div class=\"lt-slider-button\">
             <a href=\"#\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">CALL NOW<i class=\"material-icons right\">phone</i></a>
            </div>
            <div class=\"lt-slider-links\">
             <a href=\"tel:7329029990\" target=\"_blank\">732.902.9990</a> or <a href=\"#\" target=\"_blank\">GET QUOTE</a>
            </div>
          </div>
        </li>
        <li>
          <img src=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/home/slideshow/fireplace_tv_install.jpg");
        echo "\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Wall Mount on Fireplace?</h2>
            <h5 class=\"lt-slider-subtitle\">No problem, been there done that.</h5>
            <div class=\"lt-slider-button\">
             <a href=\"#\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">CALL NOW<i class=\"material-icons right\">phone</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"tel:7329029990\" target=\"_blank\">732.902.9990</a> or <a href=\"#\" target=\"_blank\">GET QUOTE</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<style>
.lt-slider-links {
    font-size: 1.4em;
}
img.free-bracket-image {
    width: 200px !important;
}
.lt-slider-button a {
    font-weight: bold;
}
@media (min-width:600px)  {
    img.free-bracket-image {
    width: 300px !important;
}}

</style>";
    }

    public function getTemplateName()
    {
        return "/Users/yogeshpatel/web/tvinstallnj/themes/laratify-octobercms-octaskin/partials/pages-home/slideshow.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 34,  47 => 21,  34 => 11,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"lt-row row\">
  <div class=\"lt-col col s12\">
    <div class=\"lt-slider slider fullscreen\">
      <ul class=\"slides\">
        <li>
          <img src=\"{{ 'assets/img/pages/home/slideshow/home_tv_install_nj.jpg'|theme }}\" alt=\"image\">
          <div class=\"caption center-align\">
         
            <h2 class=\"lt-slider-title\">Free Bracket w/ Install!</h2>
            <h5 class=\"lt-slider-subtitle\">Get your quote now!</h5>
            <img class=\"free-bracket-image\" src=\"{{ 'assets/img/pages/home/slideshow/free_bracket.png'|theme }}\" alt=\"Free Bracket with TV Install\">
            <div class=\"lt-slider-button\">
              <a href=\"#\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">CALL NOW<i class=\"material-icons right\">phone</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"tel:7329029990\" target=\"_blank\">732.902.9990</a> or <a href=\"#\" target=\"_blank\">GET QUOTE</a>
            </div>
          </div>
        </li>
        <li>
          <img src=\"{{ 'assets/img/pages/home/slideshow/wall_mounted_tv.jpg'|theme }}\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Sound Bar? Home Theatre Install?</h2>
            <h5 class=\"lt-slider-subtitle\">We've got you covered.</h5>
            <div class=\"lt-slider-button\">
             <a href=\"#\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">CALL NOW<i class=\"material-icons right\">phone</i></a>
            </div>
            <div class=\"lt-slider-links\">
             <a href=\"tel:7329029990\" target=\"_blank\">732.902.9990</a> or <a href=\"#\" target=\"_blank\">GET QUOTE</a>
            </div>
          </div>
        </li>
        <li>
          <img src=\"{{ 'assets/img/pages/home/slideshow/fireplace_tv_install.jpg'|theme }}\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Wall Mount on Fireplace?</h2>
            <h5 class=\"lt-slider-subtitle\">No problem, been there done that.</h5>
            <div class=\"lt-slider-button\">
             <a href=\"#\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">CALL NOW<i class=\"material-icons right\">phone</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"tel:7329029990\" target=\"_blank\">732.902.9990</a> or <a href=\"#\" target=\"_blank\">GET QUOTE</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<style>
.lt-slider-links {
    font-size: 1.4em;
}
img.free-bracket-image {
    width: 200px !important;
}
.lt-slider-button a {
    font-weight: bold;
}
@media (min-width:600px)  {
    img.free-bracket-image {
    width: 300px !important;
}}

</style>", "/Users/yogeshpatel/web/tvinstallnj/themes/laratify-octobercms-octaskin/partials/pages-home/slideshow.htm", "");
    }
}
