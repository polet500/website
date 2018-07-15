<?php

/* modular/contributors.html.twig */
class __TwigTemplate_8664e60e3e97028cff217f15d69172d4dbaece70e86bccdd2f84b5d9324f2a6d extends Twig_Template
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
        echo "    <div class=\"content-wrapper\">
        <h1 style=\"text-align:CENTER\">";
        // line 2
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
        <div class=\"flex-container\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 5
            echo "            <div id=\"";
            echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
            echo "\"></div>
            ";
            // line 6
            echo $this->getAttribute($context["module"], "content", array());
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modular/contributors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  36 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "    <div class=\"content-wrapper\">
        <h1 style=\"text-align:CENTER\">{{ page.title }}</h1>
        <div class=\"flex-container\">
        {% for module in page.collection() %}
            <div id=\"{{ _self.pageLinkName(module.menu) }}\"></div>
            {{ module.content }}
        {% endfor %}
        </div>
    </div>
";
    }
}
