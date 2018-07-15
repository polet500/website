<?php

/* partials/_reddit.html.twig */
class __TwigTemplate_2a52e903b05fb5b96d3ae3d2ce6aa66aba248b3765b9a7a07243e9f159dd746c extends Twig_Template
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
  <a href=\"http://www.reddit.com/submit?url=";
        // line 2
        echo (isset($context["page_url"]) ? $context["page_url"] : null);
        echo "\">
    <i class=\"fa fa-reddit\"></i>
  </a>
</span>

";
    }

    public function getTemplateName()
    {
        return "partials/_reddit.html.twig";
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
  <a href=\"http://www.reddit.com/submit?url={{ page_url }}\">
    <i class=\"fa fa-reddit\"></i>
  </a>
</span>

";
    }
}
