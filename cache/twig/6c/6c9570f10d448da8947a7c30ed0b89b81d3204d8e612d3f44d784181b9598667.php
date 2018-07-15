<?php

/* tags.html.twig */
class __TwigTemplate_64d2575442b1cf5a6d9949f7f362ab491dc90c6446effb4b6d33a50a224694eb extends Twig_Template
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
        echo "\t";
        $context["new_base_url"] = ((($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == "/")) ? ("") : ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array())));
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("tags.html.twig", "tags.html.twig", 3, "1653633516")->display($context);
    }

    public function getTemplateName()
    {
        return "tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "\t{% set new_base_url = blog.url == '/' ? '' : blog.url %}

{% embed 'partials/base.html.twig' %}
\t{% block content %}

{% if config.plugins.taxonomylist.enabled %}
<div class=\"content-wrapper\" style=\"max-width:920px; margin:0 auto\">
<h1 style=\"text-align:left\">{{ page.title }}</h1>

    <h4>{{ page.content }}</h4>
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag', filter: true, filterstart: 0, filterend: 5, sort:true} %}
</div>
{% endif %}

{% endblock %}
{% endembed %}
";
    }
}


/* tags.html.twig */
class __TwigTemplate_64d2575442b1cf5a6d9949f7f362ab491dc90c6446effb4b6d33a50a224694eb_1653633516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "tags.html.twig", 3);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 7
            echo "<div class=\"content-wrapper\" style=\"max-width:920px; margin:0 auto\">
<h1 style=\"text-align:left\">";
            // line 8
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</h1>

    <h4>";
            // line 10
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</h4>
    ";
            // line 11
            $this->loadTemplate("partials/taxonomylist.html.twig", null, 11)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null), "taxonomy" => "tag", "filter" => true, "filterstart" => 0, "filterend" => 5, "sort" => true)));
            // line 12
            echo "</div>
";
        }
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 14,  112 => 12,  110 => 11,  106 => 10,  101 => 8,  98 => 7,  96 => 6,  93 => 5,  90 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "\t{% set new_base_url = blog.url == '/' ? '' : blog.url %}

{% embed 'partials/base.html.twig' %}
\t{% block content %}

{% if config.plugins.taxonomylist.enabled %}
<div class=\"content-wrapper\" style=\"max-width:920px; margin:0 auto\">
<h1 style=\"text-align:left\">{{ page.title }}</h1>

    <h4>{{ page.content }}</h4>
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag', filter: true, filterstart: 0, filterend: 5, sort:true} %}
</div>
{% endif %}

{% endblock %}
{% endembed %}
";
    }
}
