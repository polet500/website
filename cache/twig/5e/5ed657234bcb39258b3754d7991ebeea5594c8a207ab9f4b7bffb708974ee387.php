<?php

/* chars.html.twig */
class __TwigTemplate_cff5203021a297281f93fb802bc3fdd1d092a0aab5ff969be1eecefcc6221d9a extends Twig_Template
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
        echo "
";
        // line 2
        $this->loadTemplate("chars.html.twig", "chars.html.twig", 2, "1723748437")->display($context);
    }

    public function getTemplateName()
    {
        return "chars.html.twig";
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
        return "
{% embed 'partials/base.html.twig' %}
\t{% block content %}
\t\t{% set new_base_url = site.blog.route== '/' ? '' : blog.url %}


{% if config.plugins.taxonomylist.enabled %}
<div class=\"content-wrapper content-focus\">
\t<h1 class=\"text-xs-l\">{{ page.title }}</h1>
    <h4>{{ page.content }}</h4>
    {%  include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'char' } %}
</div>
{% endif %}

{% endblock %}
{% endembed %}
";
    }
}


/* chars.html.twig */
class __TwigTemplate_cff5203021a297281f93fb802bc3fdd1d092a0aab5ff969be1eecefcc6221d9a_1723748437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "chars.html.twig", 2);
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
        echo "\t\t";
        $context["new_base_url"] = ((($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "blog", array()), "route", array()) == "/")) ? ("") : ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array())));
        // line 5
        echo "

";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 8
            echo "<div class=\"content-wrapper content-focus\">
\t<h1 class=\"text-xs-l\">";
            // line 9
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</h1>
    <h4>";
            // line 10
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</h4>
    ";
            // line 11
            $this->loadTemplate("partials/taxonomylist.html.twig", null, 11)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null), "taxonomy" => "char")));
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
        return "chars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 14,  112 => 12,  110 => 11,  106 => 10,  102 => 9,  99 => 8,  97 => 7,  93 => 5,  90 => 4,  87 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "
{% embed 'partials/base.html.twig' %}
\t{% block content %}
\t\t{% set new_base_url = site.blog.route== '/' ? '' : blog.url %}


{% if config.plugins.taxonomylist.enabled %}
<div class=\"content-wrapper content-focus\">
\t<h1 class=\"text-xs-l\">{{ page.title }}</h1>
    <h4>{{ page.content }}</h4>
    {%  include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'char' } %}
</div>
{% endif %}

{% endblock %}
{% endembed %}
";
    }
}
