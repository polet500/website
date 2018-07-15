<?php

/* partials/_googleplus.html.twig */
class __TwigTemplate_e8565aed27b5fdfbfed80b5f322fd6c9b2e362504fd4ef137ac2cafce50e123e extends Twig_Template
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
        echo "<span class=\"social-btn\">
  <a href=\"https://plus.google.com/share?url=";
        // line 2
        echo (isset($context["page_url"]) ? $context["page_url"] : null);
        echo "\" class=\"popup\">
    <i class=\"fa fa-google-plus\"></i>
  </a>
</span>

";
    }

    public function getTemplateName()
    {
        return "partials/_googleplus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<span class=\"social-btn\">
  <a href=\"https://plus.google.com/share?url={{ page_url }}\" class=\"popup\">
    <i class=\"fa fa-google-plus\"></i>
  </a>
</span>

";
    }
}
