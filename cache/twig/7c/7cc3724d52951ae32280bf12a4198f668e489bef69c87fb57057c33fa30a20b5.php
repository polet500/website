<?php

/* modular/contributor.html.twig */
class __TwigTemplate_2d499953b80eb05119bd70588d358dfe34d1efcb912ac8f33c03c99448025133 extends Twig_Template
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
        echo "<div class=\"flex-col text-xs-center\">
\t<div class=\"table-row\">
\t\t<div 
\t\t\tclass=\"bg-cover avatar-128 round\" style=\" background-color:#ccc; 
\t\t\tbackground-image: url('";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "/";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Image", array());
        echo "');  \">
\t\t</div>
\t</div>
\t<div class=\"table-row\">
\t\t<h6>";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Name", array());
        echo "</h6>
\t\t<div style=\"width:80%; margin:0 auto; ";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Color", array())) {
            echo " background: ";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Color", array());
            echo " ";
        } else {
            echo " background: #4caf50 ";
        }
        echo "; height:2px\"></div>
\t\t<p>";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Role", array());
        echo "<br>
\t\t<small>";
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "University", array());
        echo "</small></p>
\t\t";
        // line 13
        if ( !$this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Schede", array())) {
            // line 14
            echo "\t\t<p>
\t\t\t<span class=\"tags\"><a href=\"";
            // line 15
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array());
            echo "/polet500/schede/author:";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Name", array());
            echo "\">Consulta le schede</a></span>
\t\t</p>
\t\t";
        }
        // line 18
        echo "\t\t<p>
\t\t\t";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Email", array())) {
            // line 20
            echo "\t\t\t<span><a href=\"mailto:";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Email", array());
            echo "\"><i class=\"fa fa-envelope\"></i></a></span>
\t\t\t";
        }
        // line 22
        echo "
\t\t\t";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Academia", array())) {
            // line 24
            echo "\t\t\t<span><a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Academia", array());
            echo "\"><i class=\"fa fa-graduation-cap\"></i></a></span>
\t\t\t";
        }
        // line 26
        echo "
\t\t\t

\t\t\t";
        // line 29
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Linkedin", array())) {
            // line 30
            echo "\t\t\t<span><a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Linkedin", array());
            echo "\"><i class=\"fa fa-linkedin\"></i></a></span>
\t\t\t";
        }
        // line 32
        echo "
\t\t\t";
        // line 33
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Facebook", array())) {
            // line 34
            echo "\t\t\t<span><a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Facebook", array());
            echo "\"><i class=\"fa fa-facebook\"></i></a></span>
\t\t\t";
        }
        // line 36
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "GitHub", array())) {
            // line 37
            echo "\t\t\t\t<span><a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "GitHub", array());
            echo "\"><i class=\"fa fa-github\"></i></a></span>
\t\t\t";
        }
        // line 39
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Homepage", array())) {
            // line 40
            echo "\t\t\t\t<span><a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "Homepage", array());
            echo "\"><i class=\"fa fa-globe\"></i></a></span>
\t\t\t";
        }
        // line 42
        echo "\t\t</p>\t
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/contributor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 42,  127 => 40,  124 => 39,  118 => 37,  115 => 36,  109 => 34,  107 => 33,  104 => 32,  98 => 30,  96 => 29,  91 => 26,  85 => 24,  83 => 23,  80 => 22,  74 => 20,  72 => 19,  69 => 18,  61 => 15,  58 => 14,  56 => 13,  52 => 12,  48 => 11,  38 => 10,  34 => 9,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"flex-col text-xs-center\">
\t<div class=\"table-row\">
\t\t<div 
\t\t\tclass=\"bg-cover avatar-128 round\" style=\" background-color:#ccc; 
\t\t\tbackground-image: url('{{ page.url }}/{{ page.header.Image }}');  \">
\t\t</div>
\t</div>
\t<div class=\"table-row\">
\t\t<h6>{{ page.header.Name }}</h6>
\t\t<div style=\"width:80%; margin:0 auto; {% if page.header.Color %} background: {{ page.header.Color }} {% else %} background: #4caf50 {% endif %}; height:2px\"></div>
\t\t<p>{{ page.header.Role }}<br>
\t\t<small>{{ page.header.University}}</small></p>
\t\t{% if not (page.header.Schede) %}
\t\t<p>
\t\t\t<span class=\"tags\"><a href=\"{{ site.url }}/polet500/schede/author:{{ page.header.Name }}\">Consulta le schede</a></span>
\t\t</p>
\t\t{% endif %}
\t\t<p>
\t\t\t{% if page.header.Email %}
\t\t\t<span><a href=\"mailto:{{ page.header.Email }}\"><i class=\"fa fa-envelope\"></i></a></span>
\t\t\t{% endif %}

\t\t\t{% if page.header.Academia %}
\t\t\t<span><a href=\"{{ page.header.Academia }}\"><i class=\"fa fa-graduation-cap\"></i></a></span>
\t\t\t{% endif %}

\t\t\t

\t\t\t{% if page.header.Linkedin %}
\t\t\t<span><a href=\"{{ page.header.Linkedin }}\"><i class=\"fa fa-linkedin\"></i></a></span>
\t\t\t{% endif %}

\t\t\t{% if page.header.Facebook %}
\t\t\t<span><a href=\"{{ page.header.Facebook }}\"><i class=\"fa fa-facebook\"></i></a></span>
\t\t\t{% endif %}
\t\t\t{% if page.header.GitHub %}
\t\t\t\t<span><a href=\"{{ page.header.GitHub }}\"><i class=\"fa fa-github\"></i></a></span>
\t\t\t{% endif %}
\t\t\t{% if page.header.Homepage %}
\t\t\t\t<span><a href=\"{{ page.header.Homepage }}\"><i class=\"fa fa-globe\"></i></a></span>
\t\t\t{% endif %}
\t\t</p>\t
\t</div>
</div>
";
    }
}
