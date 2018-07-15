<?php

/* partials/_linkedin.html.twig */
class __TwigTemplate_0257f37632465061e886cfdcca3ee104448fb56b661c9a1c17efd242db40d8e6 extends Twig_Template
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
  <a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
        // line 2
        echo (isset($context["page_url"]) ? $context["page_url"] : null);
        echo "\" class=\"popup\">
    <i class=\"fa fa-linkedin\"></i>
  </a>
</span>

";
    }

    public function getTemplateName()
    {
        return "partials/_linkedin.html.twig";
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
  <a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url={{ page_url }}\" class=\"popup\">
    <i class=\"fa fa-linkedin\"></i>
  </a>
</span>

";
    }
}
