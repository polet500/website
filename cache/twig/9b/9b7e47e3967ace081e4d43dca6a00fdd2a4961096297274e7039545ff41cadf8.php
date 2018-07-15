<?php

/* modular/twocols.html.twig */
class __TwigTemplate_1bd46453de6aa49a8d529ac432494d11bb8ba3b01c4b99e63378ef80a35f9a0d extends Twig_Template
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
        echo "<div class=\"content-wrapper\">
\t<div class=\"table-container\">
\t\t<div class=\"table-col\">
\t\t\t<h2> ";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "heading", array());
        echo " </h2>
\t\t</div>
\t\t<div class=\"table-col\">
\t\t\t<p> ";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "paragraph", array());
        echo " </p>
\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 9
            echo "\t\t\t\t<span class=\"";
            echo $this->getAttribute($context["button"], "class", array());
            echo "\">
\t\t\t\t\t<a href=\"";
            // line 10
            echo $this->getAttribute($context["button"], "link", array());
            echo "\">
\t\t\t\t\t<i class=\"fa ";
            // line 11
            echo $this->getAttribute($context["button"], "icon", array());
            echo "\"></i> 
\t\t\t\t\t";
            // line 12
            echo $this->getAttribute($context["button"], "label", array());
            echo " 
\t\t\t\t\t</a> 
\t\t\t\t</span>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/twocols.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  51 => 12,  47 => 11,  43 => 10,  38 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"content-wrapper\">
\t<div class=\"table-container\">
\t\t<div class=\"table-col\">
\t\t\t<h2> {{ page.header.heading }} </h2>
\t\t</div>
\t\t<div class=\"table-col\">
\t\t\t<p> {{ page.header.paragraph }} </p>
\t\t\t{% for button in page.header.buttons %}
\t\t\t\t<span class=\"{{ button.class }}\">
\t\t\t\t\t<a href=\"{{ button.link }}\">
\t\t\t\t\t<i class=\"fa {{ button.icon }}\"></i> 
\t\t\t\t\t{{ button.label }} 
\t\t\t\t\t</a> 
\t\t\t\t</span>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
</div>";
    }
}
