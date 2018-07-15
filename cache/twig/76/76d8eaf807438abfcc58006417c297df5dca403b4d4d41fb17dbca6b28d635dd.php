<?php

/* item.html.twig */
class __TwigTemplate_6ab010fa10ae508d26bb45963e19b68b43fad8951f6625e8670cb65b0eed0cae extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "361049321")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'partials/base.html.twig' %}

\t{% block content %}
\t{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}

\t<div class=\"blog-content-item content-wrapper content-focus\">
\t\t\t

\t\t\t\t<!--{% for tag in page.taxonomy.tag %}
            <span class=\"tags\">
                <a href=\"{{ new_base_url|rtrim('/') }}/char{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">
                <span class=\"\">{{ tag }}</span>
                </a>
            </span>
            {% endfor %}-->


\t\t\t    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t</div>
\t\t</div>
<br>
<div class=\"content-wrapper content-focus\" style=\" font-family:'Quattrocento';\" id=\"credits\">
\t<p>
\tLa scheda <em>{{ page.header.title }}</em> è stata redatta da <em>{{ page.header.taxonomy.author }}</em> in data <em>{{ page.header.taxonomy.date }}</em> per il sito <em>{{ config.site.title }} </em>. <br></p>
\t<h5>Citare la voce</h5>
\t<p>
\t<strong>{{ page.header.taxonomy.author }}</strong>, <em>{{ page.header.title }}</em> ({{page.header.date}}). <br>
\tIn \"PoLet500 - Polemiche Letterarie del Cinquecento\", Firenze, Edizioni CLORI, 2016-in corso. ISBN: 978-88-942416-8-6; DOI: <a href=\"https://doi.org/10.5281/zenodo.881970\" target=\"_blank\">10.5281/zenodo.881970</a>.<br>
\tDocumento rilasciato con licenza  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by/4.0/\">Creative Commons Attribution 4.0 International License</a>.
\t</p>
\t<p>
\t<span class=\"tags\"><a href=\"{{ page.url }}.json\">Esporta scheda JSON</a></span>
\t<!--<span class=\"tags\"><a href=\"#\">Esporta citazione Bib </a></span>-->
\t<span class=\"tags\"><a href=\"{{ site.url }}/polet500/schede/author:{{ page.taxonomy.author.0 }}\">Vedi le altre schede dell'autore </a></span>
\t</p>
</div>
<br>
<div class=\"content-wrapper table-container\" style=\"max-width:920px; margin:0 auto\">
\t<div class=\"table-col\" style=\"text-align:center\" id=\"tagList\">
\t\t<div class=\"avatar-184\" style=\"background-image: url('{{ base_url }}/assets/img/tags.jpg'); \"></div>
    \t<h4>{{ 'Argomenti'|t }}</h4>
\t\t<div style=\"width:90%; margin:0 auto; background: #4caf50; height:2px\"></div><br>
\t\t<div style=\"width:90%; margin:0 auto;\">
    \t{% for tag in page.taxonomy.tag  %}
            <span class=\"tags\">
                <a href=\"{{ site.url }}/polet500/schede/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">
               \t\t<span class=\"\">{{ tag }}</span>
                </a>
            </span>
        {% endfor %}
\t</div>
\t</div>
\t<div class=\"table-col\" style=\"text-align:center\" id=\"charList\">
\t\t<div class=\"avatar-184\" style=\" background-image: url('{{ base_url }}/assets/img/char.jpg');\"></div>
    \t<h4>{{ 'Personaggi'|t }}</h4>
\t\t<div style=\"width:90%; margin:0 auto; background: #4caf50; height:2px\"></div><br>
\t\t<div style=\"width:90%; margin:0 auto; \">
    \t{% for char in page.taxonomy.char  %}
            <span class=\"tags\">
                <a href=\"{{ site.url }}/polet500/schede/char{{ config.system.param_sep }}{{ char }}\" class=\"p-category\">
               \t\t<span class=\"\">{{ char }}</span>
                </a>
            </span>
        {% endfor %}
\t</div>
\t</div>
</div>
</div>
</div>
<br>
<div id=\"refList\">
    {% include \"partials/bibliography_table.html.twig\" %}
</div>
<br>

 

\t\t{% include \"blog_utils.html.twig\" %}
\t\t{% include \"partials/navigation_secundary.html.twig\" %}


\t{% endblock %}

{% endembed %}
";
    }
}


/* item.html.twig */
class __TwigTemplate_6ab010fa10ae508d26bb45963e19b68b43fad8951f6625e8670cb65b0eed0cae_361049321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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
        echo "\t";
        $context["feed_url"] = (((($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == "/") || ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null)))) ? ((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/") . $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "slug", array()))) : ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array())));
        // line 5
        $context["new_base_url"] = ((($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == "/")) ? ("") : ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array())));
        // line 6
        echo "
\t<div class=\"blog-content-item content-wrapper content-focus\">
\t\t\t

\t\t\t\t<!--";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 11
            echo "            <span class=\"tags\">
                <a href=\"";
            // line 12
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter((isset($context["new_base_url"]) ? $context["new_base_url"] : null), "/");
            echo "/char";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo $context["tag"];
            echo "\" class=\"p-category\">
                <span class=\"\">";
            // line 13
            echo $context["tag"];
            echo "</span>
                </a>
            </span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "-->


\t\t\t    ";
        // line 19
        $this->loadTemplate("partials/blog_item.html.twig", null, 19)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "truncate" => false)));
        // line 20
        echo "\t\t\t</div>
\t\t</div>
<br>
<div class=\"content-wrapper content-focus\" style=\" font-family:'Quattrocento';\" id=\"credits\">
\t<p>
\tLa scheda <em>";
        // line 25
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</em> è stata redatta da <em>";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "author", array());
        echo "</em> in data <em>";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "date", array());
        echo "</em> per il sito <em>";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo " </em>. <br></p>
\t<h5>Citare la voce</h5>
\t<p>
\t<strong>";
        // line 28
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "taxonomy", array()), "author", array());
        echo "</strong>, <em>";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</em> (";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "date", array());
        echo "). <br>
\tIn \"PoLet500 - Polemiche Letterarie del Cinquecento\", Firenze, Edizioni CLORI, 2016-in corso. ISBN: 978-88-942416-8-6; DOI: <a href=\"https://doi.org/10.5281/zenodo.881970\" target=\"_blank\">10.5281/zenodo.881970</a>.<br>
\tDocumento rilasciato con licenza  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by/4.0/\">Creative Commons Attribution 4.0 International License</a>.
\t</p>
\t<p>
\t<span class=\"tags\"><a href=\"";
        // line 33
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo ".json\">Esporta scheda JSON</a></span>
\t<!--<span class=\"tags\"><a href=\"#\">Esporta citazione Bib </a></span>-->
\t<span class=\"tags\"><a href=\"";
        // line 35
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array());
        echo "/polet500/schede/author:";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "author", array()), 0, array());
        echo "\">Vedi le altre schede dell'autore </a></span>
\t</p>
</div>
<br>
<div class=\"content-wrapper table-container\" style=\"max-width:920px; margin:0 auto\">
\t<div class=\"table-col\" style=\"text-align:center\" id=\"tagList\">
\t\t<div class=\"avatar-184\" style=\"background-image: url('";
        // line 41
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/assets/img/tags.jpg'); \"></div>
    \t<h4>";
        // line 42
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Argomenti");
        echo "</h4>
\t\t<div style=\"width:90%; margin:0 auto; background: #4caf50; height:2px\"></div><br>
\t\t<div style=\"width:90%; margin:0 auto;\">
    \t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 46
            echo "            <span class=\"tags\">
                <a href=\"";
            // line 47
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array());
            echo "/polet500/schede/tag";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo $context["tag"];
            echo "\" class=\"p-category\">
               \t\t<span class=\"\">";
            // line 48
            echo $context["tag"];
            echo "</span>
                </a>
            </span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t</div>
\t</div>
\t<div class=\"table-col\" style=\"text-align:center\" id=\"charList\">
\t\t<div class=\"avatar-184\" style=\" background-image: url('";
        // line 55
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/assets/img/char.jpg');\"></div>
    \t<h4>";
        // line 56
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Personaggi");
        echo "</h4>
\t\t<div style=\"width:90%; margin:0 auto; background: #4caf50; height:2px\"></div><br>
\t\t<div style=\"width:90%; margin:0 auto; \">
    \t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "char", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["char"]) {
            // line 60
            echo "            <span class=\"tags\">
                <a href=\"";
            // line 61
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array());
            echo "/polet500/schede/char";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo $context["char"];
            echo "\" class=\"p-category\">
               \t\t<span class=\"\">";
            // line 62
            echo $context["char"];
            echo "</span>
                </a>
            </span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['char'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t</div>
\t</div>
</div>
</div>
</div>
<br>
<div id=\"refList\">
    ";
        // line 73
        $this->loadTemplate("partials/bibliography_table.html.twig", null, 73)->display($context);
        // line 74
        echo "</div>
<br>

 

\t\t";
        // line 79
        $this->loadTemplate("blog_utils.html.twig", null, 79)->display($context);
        // line 80
        echo "\t\t";
        $this->loadTemplate("partials/navigation_secundary.html.twig", null, 80)->display($context);
        // line 81
        echo "

\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 81,  333 => 80,  331 => 79,  324 => 74,  322 => 73,  313 => 66,  303 => 62,  296 => 61,  293 => 60,  289 => 59,  283 => 56,  279 => 55,  274 => 52,  264 => 48,  257 => 47,  254 => 46,  250 => 45,  244 => 42,  240 => 41,  229 => 35,  224 => 33,  212 => 28,  200 => 25,  193 => 20,  191 => 19,  186 => 16,  176 => 13,  169 => 12,  166 => 11,  162 => 10,  156 => 6,  154 => 5,  151 => 4,  148 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'partials/base.html.twig' %}

\t{% block content %}
\t{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}

\t<div class=\"blog-content-item content-wrapper content-focus\">
\t\t\t

\t\t\t\t<!--{% for tag in page.taxonomy.tag %}
            <span class=\"tags\">
                <a href=\"{{ new_base_url|rtrim('/') }}/char{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">
                <span class=\"\">{{ tag }}</span>
                </a>
            </span>
            {% endfor %}-->


\t\t\t    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t</div>
\t\t</div>
<br>
<div class=\"content-wrapper content-focus\" style=\" font-family:'Quattrocento';\" id=\"credits\">
\t<p>
\tLa scheda <em>{{ page.header.title }}</em> è stata redatta da <em>{{ page.header.taxonomy.author }}</em> in data <em>{{ page.header.taxonomy.date }}</em> per il sito <em>{{ config.site.title }} </em>. <br></p>
\t<h5>Citare la voce</h5>
\t<p>
\t<strong>{{ page.header.taxonomy.author }}</strong>, <em>{{ page.header.title }}</em> ({{page.header.date}}). <br>
\tIn \"PoLet500 - Polemiche Letterarie del Cinquecento\", Firenze, Edizioni CLORI, 2016-in corso. ISBN: 978-88-942416-8-6; DOI: <a href=\"https://doi.org/10.5281/zenodo.881970\" target=\"_blank\">10.5281/zenodo.881970</a>.<br>
\tDocumento rilasciato con licenza  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by/4.0/\">Creative Commons Attribution 4.0 International License</a>.
\t</p>
\t<p>
\t<span class=\"tags\"><a href=\"{{ page.url }}.json\">Esporta scheda JSON</a></span>
\t<!--<span class=\"tags\"><a href=\"#\">Esporta citazione Bib </a></span>-->
\t<span class=\"tags\"><a href=\"{{ site.url }}/polet500/schede/author:{{ page.taxonomy.author.0 }}\">Vedi le altre schede dell'autore </a></span>
\t</p>
</div>
<br>
<div class=\"content-wrapper table-container\" style=\"max-width:920px; margin:0 auto\">
\t<div class=\"table-col\" style=\"text-align:center\" id=\"tagList\">
\t\t<div class=\"avatar-184\" style=\"background-image: url('{{ base_url }}/assets/img/tags.jpg'); \"></div>
    \t<h4>{{ 'Argomenti'|t }}</h4>
\t\t<div style=\"width:90%; margin:0 auto; background: #4caf50; height:2px\"></div><br>
\t\t<div style=\"width:90%; margin:0 auto;\">
    \t{% for tag in page.taxonomy.tag  %}
            <span class=\"tags\">
                <a href=\"{{ site.url }}/polet500/schede/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">
               \t\t<span class=\"\">{{ tag }}</span>
                </a>
            </span>
        {% endfor %}
\t</div>
\t</div>
\t<div class=\"table-col\" style=\"text-align:center\" id=\"charList\">
\t\t<div class=\"avatar-184\" style=\" background-image: url('{{ base_url }}/assets/img/char.jpg');\"></div>
    \t<h4>{{ 'Personaggi'|t }}</h4>
\t\t<div style=\"width:90%; margin:0 auto; background: #4caf50; height:2px\"></div><br>
\t\t<div style=\"width:90%; margin:0 auto; \">
    \t{% for char in page.taxonomy.char  %}
            <span class=\"tags\">
                <a href=\"{{ site.url }}/polet500/schede/char{{ config.system.param_sep }}{{ char }}\" class=\"p-category\">
               \t\t<span class=\"\">{{ char }}</span>
                </a>
            </span>
        {% endfor %}
\t</div>
\t</div>
</div>
</div>
</div>
<br>
<div id=\"refList\">
    {% include \"partials/bibliography_table.html.twig\" %}
</div>
<br>

 

\t\t{% include \"blog_utils.html.twig\" %}
\t\t{% include \"partials/navigation_secundary.html.twig\" %}


\t{% endblock %}

{% endembed %}
";
    }
}
