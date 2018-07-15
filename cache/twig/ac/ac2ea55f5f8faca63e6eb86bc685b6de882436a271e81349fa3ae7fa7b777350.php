<?php

/* default.html.twig */
class __TwigTemplate_111f566bf928f67802741a38e3e202b64ead2ce4cc9c70850539cfbdad1dd148 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $context["home_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -100), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
        // line 5
        echo "<!--
<div class=\"flush-top blog-header blog-header-image\" style=\" background-color:#78909c\">
<h1>";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
</div>\t\t
\t\t";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 10
            echo "\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "default.html.twig", 10)->display($context);
            // line 11
            echo "\t\t\t";
        }
        // line 12
        echo "\t\t\t-->
\t\t\t<div class=\"content-wrapper\" style=\"max-width:920px; margin:0 auto; text-align:left\">
\t\t\t<h1 style=\"text-align:left\">";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>

\t<div style=\"text-align:left\">";
        // line 16
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  54 => 14,  50 => 12,  47 => 11,  44 => 10,  42 => 9,  37 => 7,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'partials/base.html.twig' %}

{% block content %}
{% set home_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}
<!--
<div class=\"flush-top blog-header blog-header-image\" style=\" background-color:#78909c\">
<h1>{{ page.title }}</h1>
</div>\t\t
\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}
\t\t\t-->
\t\t\t<div class=\"content-wrapper\" style=\"max-width:920px; margin:0 auto; text-align:left\">
\t\t\t<h1 style=\"text-align:left\">{{ page.title }}</h1>

\t<div style=\"text-align:left\">{{ page.content }}</div>
\t</div>
{% endblock %}
";
    }
}
