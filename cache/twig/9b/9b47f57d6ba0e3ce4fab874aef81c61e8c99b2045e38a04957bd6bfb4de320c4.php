<?php

/* modular/default.html.twig */
class __TwigTemplate_178c78c3fb7a555c0b8329ca912346b48b54b7183906b20b869d57e81f0384bb extends Twig_Template
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
        echo "<div class=\"content-wrapper\" style=\"max-width:920px; margin:0 auto; text-align:left\">
\t<h2 style=\"text-align:left\">";
        // line 2
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
\t<div>";
        // line 3
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"content-wrapper\" style=\"max-width:920px; margin:0 auto; text-align:left\">
\t<h2 style=\"text-align:left\">{{ page.title }}</h2>
\t<div>{{ page.content }}</div>
</div>
";
    }
}
