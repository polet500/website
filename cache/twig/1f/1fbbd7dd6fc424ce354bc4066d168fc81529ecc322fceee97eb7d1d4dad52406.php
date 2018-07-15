<?php

/* partials/_facebook.html.twig */
class __TwigTemplate_b9ca0e21be49c37755a58a44533cb324bac0bb6646891692fada0248a2452f75 extends Twig_Template
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
\t<a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 2
        echo (isset($context["page_url"]) ? $context["page_url"] : null);
        echo "\" class=\"popup\">
\t\t<i class=\"fa fa-facebook\"></i>
\t</a>
</span>

";
    }

    public function getTemplateName()
    {
        return "partials/_facebook.html.twig";
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
\t<a href=\"https://www.facebook.com/sharer/sharer.php?u={{ page_url }}\" class=\"popup\">
\t\t<i class=\"fa fa-facebook\"></i>
\t</a>
</span>

";
    }
}
