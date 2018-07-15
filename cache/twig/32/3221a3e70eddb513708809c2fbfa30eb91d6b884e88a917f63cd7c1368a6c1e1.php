<?php

/* partials/taxonomylist.html.twig */
class __TwigTemplate_d5db1e86ed9e53e5397fc2910ab18552bee7776f1d1fcc81d7866a05240222e5 extends Twig_Template
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
        $context["taxlist"] = $this->getAttribute((isset($context["taxonomylist"]) ? $context["taxonomylist"] : null), "get", array(), "method");
        // line 2
        if ((isset($context["taxlist"]) ? $context["taxlist"] : null)) {
            // line 3
            $context["active"] = ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "param", array(0 => (isset($context["taxonomy"]) ? $context["taxonomy"] : null)), "method") == (isset($context["tax"]) ? $context["tax"] : null))) ? ("active") : (""));
            // line 4
            echo "\t<ul class=\"archives\">
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->ksortFilter($this->getAttribute((isset($context["taxlist"]) ? $context["taxlist"] : null), (isset($context["taxonomy"]) ? $context["taxonomy"] : null), array(), "array")));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 6
                echo "\t\t\t<li>
    \t\t\t<a \t
    \t\t\t\tclass=\"";
                // line 8
                echo (isset($context["active"]) ? $context["active"] : null);
                echo "\" 
    \t\t\t\thref=\"";
                // line 9
                echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array());
                echo "/polet500/schede/";
                echo (isset($context["taxonomy"]) ? $context["taxonomy"] : null);
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tax"];
                echo "\"
    \t\t\t>
        \t       \t<span class=\"label\"></span>
        \t\t\t<span class=\"\">";
                // line 12
                echo $context["tax"];
                echo "</span>
        \t\t</a>
    \t\t</li> 
    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/taxonomylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  50 => 12,  40 => 9,  36 => 8,  32 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set taxlist = taxonomylist.get() %}
{% if taxlist %}
{% set active = uri.param(taxonomy) == tax ? 'active' : '' %}
\t<ul class=\"archives\">
\t\t{% for tax,value in taxlist[taxonomy] |ksort %}
\t\t\t<li>
    \t\t\t<a \t
    \t\t\t\tclass=\"{{ active }}\" 
    \t\t\t\thref=\"{{ site.url }}/polet500/schede/{{ taxonomy }}{{ config.system.param_sep }}{{ tax }}\"
    \t\t\t>
        \t       \t<span class=\"label\"></span>
        \t\t\t<span class=\"\">{{ tax }}</span>
        \t\t</a>
    \t\t</li> 
    \t{% endfor %}
\t</ul>
{% endif %}";
    }
}
