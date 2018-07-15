<?php

/* item.txt.twig */
class __TwigTemplate_6a874a05f452dbbd4b2ded984d320f1fd2210c7e0c68c605cf3da2d8d7d23cae extends Twig_Template
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
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "raw_content", array());
    }

    public function getTemplateName()
    {
        return "item.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{{ page.raw_content }}";
    }
}
