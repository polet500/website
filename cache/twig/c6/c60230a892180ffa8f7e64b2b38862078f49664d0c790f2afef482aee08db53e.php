<?php

/* home.html.twig */
class __TwigTemplate_630ec00755e921ff505a6cf034170afc0aacea2b803172bac6f41265e3831c27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
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
        echo "<style>
.scrolled {z-index:9999 !important}
</style>
<!--
\t";
        // line 8
        $context["home_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -100), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
        // line 9
        echo "\t\t";
        if ((isset($context["home_image"]) ? $context["home_image"] : null)) {
            // line 10
            echo "\t\t\t<div class=\"flush-top blog-header blog-header-image prova\" style=\"background-image: url(";
            echo $this->getAttribute((isset($context["home_image"]) ? $context["home_image"] : null), "url", array());
            echo ");\">
\t\t\t";
        } else {
            // line 12
            echo "\t\t\t<div style=\"width:100%; height:100%; position:fixed; top:0; left:0; background-image: url('assets/img/libri.jpg'); background-size:cover\"></div>
\t\t\t\t<div class=\"flush-top blog-header blog-header-image home-header\" style=\"min-height:105vh; height:auto; color:#227799; position:relative\">
\t\t\t\t<div style=\"position:absolute; top:0; left:0; width:100%; height:100%; background:#1f272d; opacity:0.5\"></div>
\t\t";
        }
        // line 16
        echo "
\t\t\t<div style=\"position:relative; z-index:20;\">
\t\t\t<h1>PoLet500</h1>
\t\t\t";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t\t\t\t<h6 style=\"color:#fff\">";
        // line 20
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array());
        echo ".</h6>
\t\t\t\t\t<div>
\t\t\t<span class=\"tags\"><a style=\"background:rgba(255,255,255,.75);  color:#ff6600; font-weight:bold; letter-spacing:0.1em; padding:1em; margin:1em\" href=\"";
        // line 22
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/schede\">L'archivio</a></span>
\t\t\t<span class=\"tags\"><a style=\"background:rgba(255,255,255,.1); color:#fff; letter-spacing:0.1em; padding:1em; margin:1em\" href=\"#progetto\">Il progetto</a></span>
\t\t\t
\t\t\t
\t\t</div>

\t\t\t</div>

\t\t</div>
-->
\t\t<!--
\t\t";
        // line 33
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 34
            echo "\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "home.html.twig", 34)->display($context);
            // line 35
            echo "\t\t\t";
        }
        // line 36
        echo "\t\t-->
\t\t<!--
\t\t
\t<div class=\"content-wrapper \" style=\" font-size:115%;  padding-bottom:2em\">
\t\t<h2>";
        // line 40
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Homepage");
        echo "</h2>
\t\t<h5>";
        // line 41
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array());
        echo ".</h5>
 
\t\t<p>
    \t\t<span class=\"tags\">
        \t\t<a href=\"";
        // line 45
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/chi-siamo\"> Scopri di più</a>
        \t</span>
        </p>
\t</div>
\t-->



<!--Data counters-->
<!--
<div class=\"content-wrapper\" style=\"padding-bottom:2em\">
\t<h2 class=\"text-xs-center\">La banca dati</h2>
\t<div class=\"table-container\">
-->

<!--Decomment below to connect the tax counters-->
<!--
";
        // line 62
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 63
            echo "\t\t\t<div class=\"table-col text-xs-center\">
\t\t\t\t<a  href=\"";
            // line 64
            echo (isset($context["blog_url"]) ? $context["blog_url"] : null);
            echo "\">
\t\t\t\t\t<h4 class=\"label label--round btn-lg\">
\t\t\t\t\t\t";
            // line 66
            echo twig_length_filter($this->env, (isset($context["item"]) ? $context["item"] : null));
            echo "
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<h5>Opere schedate</h5>
\t\t\t\t</a>\t\t
\t\t\t\t<p><span class=\"tags\"><a href=\"";
            // line 71
            echo (isset($context["blog_url"]) ? $context["blog_url"] : null);
            echo "\">Indice delle schede</a></span></p>
\t\t\t</div>
\t\t\t<div class=\"table-col text-xs-center\">
\t\t\t\t<a href=\" ";
            // line 74
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/testi \">
\t\t\t\t\t<h4 class=\"label label--round btn-lg\">
\t\t\t\t\t\t";
            // line 76
            echo twig_length_filter($this->env, (isset($context["blog"]) ? $context["blog"] : null));
            echo "
\t\t\t\t\t    ";
            // line 77
            $this->loadTemplate("partials/taxonomycount.html.twig", "home.html.twig", 77)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null), "taxonomy" => "tag")));
            // line 78
            echo "\t\t\t\t\t</h4>
\t\t\t\t\t<h5>Argomenti trattati</h5>
\t\t\t\t</a>\t\t
\t\t\t\t<p><span class=\"tags\"><a href=\"";
            // line 81
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/schede/indice_degli_argomenti\">Indice degli argomenti</a></span></p>
\t\t\t</div>
\t\t\t<div class=\"table-col text-xs-center\">
\t\t\t\t<a href=\" ";
            // line 84
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/testi \">
\t\t\t\t\t<h4 class=\"label label--round btn-lg\">
\t\t\t        
\t\t\t\t\t</h4>
\t\t\t\t\t<h5>Personaggi coinvolti</h5>
\t\t\t\t</a>\t\t
\t\t\t\t<p><span class=\"tags\"><a href=\"";
            // line 90
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/schede/indice_dei_personaggi\">Indice dei personaggi</a></span></p>
\t\t\t</div>
";
        }
        // line 93
        echo "-->
<!--Comment to hide the fallback-->
<!--
\t\t<div class=\"text-xs-center table-col\"></div>
\t\t<div class=\"text-xs-center table-col\">
\t\t\t<a href=\"";
        // line 98
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/schede\">
\t\t\t\t<p class=\"label label--round btn-lg\"><i class=\"fa fa-file-text-o\"></i></p>
\t\t\t\t<h4> Consulta le schede</h4>
\t\t\t</a>
\t\t\t<p><span class=\"tags\">
\t\t\t\t<a href=\"";
        // line 103
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/schede\">Indice delle schede</a>
\t\t\t</span></p>
\t\t</div>
\t\t<div class=\"text-xs-center table-col\"></div>
\t-->
<!--Close divs-->
<!--
\t</div>
</div>
-->
<!--/End counters-->
<div style=\"position:relative; z-index:10; font-family:'Raleway',sans-serif\" id=\"archivio\">
\t
\t<div class=\"content-wrapper text-heading\">
\t\t<h1 class=\"text-xs-l\">Polemiche Letterarie del Cinquecento</h1>
\t\t<h3>Polemiche Letterarie del Cinquecento è un progetto in costruzione di schedatura elettronica di polemiche letterarie del cinquecento italiano. </h3>
\t\t<p>
\t\tCon il patrocinio dell’<strong>Università degli Studi del Molise</strong> - Dipartimento di Scienze Umanistiche, Sociali e della Formazione.<br>

\t\tEdita dalle <a href=\"http://www.ereticopedia.org/edizioni-clori\">Edizioni CLORI </a> all’interno della collana <em>La “Ruota dei libri”: corpora, repertori e dizionari online</em>, ISBN: 978-88-942416-8-6; DOI: <a href=\"https://doi.org/10.5281/zenodo.881970\" target=\"_blank\">10.5281/zenodo.881970</a>.
\t\t</p>

\t\t<p>
\t\t\t<span class=\"tags tags-bg bg-primary\"><a href=\"";
        // line 126
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/schede\">L'Archivio</a></span>
\t\t\t<span class=\"tags tags-bg bg-primary\"><a href=\"";
        // line 127
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/il-progetto\">Il Progetto</a></span>
\t\t\t<span class=\"tags tags-bg bg-primary\"><a href=\"";
        // line 128
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/contatti\">Contatti</a></span>
\t\t</p>
\t\t</div>

<div style=\"width:100%; height:400px; background-image: url('";
        // line 132
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/assets/img/libri2.jpg'); background-size:cover\"></div>
\t\t\t

</DIV>
\t
\t<div style=\" padding-top:1em; padding-bottom:2em; background-color:#fff; position:relative\">
\t<div style=\"position:absolute; top:0; left:0;width:100%; height:100%; background-color:#fff; opacity:0.95\"></div>
\t\t<div style=\"position:relative; z-index:10\" id=\"archivio\">
\t\t";
        // line 140
        $this->loadTemplate("modular/twocols.html.twig", "home.html.twig", 140)->display(array_merge($context, array("page" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/schede/_impressum/"), "method"))));
        // line 141
        echo "
\t\t<!--\t
\t\t<div>
\t\t<div class=\"table-container\">
\t\t\t<div class=\"table-col\">
\t\t\t\t<h2>L'archivio</h2>
\t\t\t</div>
\t\t\t<div class=\"table-col\">
\t\t\t<p>La banca dati può essere consultata attraverso gli indici dei personaggi coinvolti, degli argomenti delle schede e da un indice completo delle opere schedate. Ogni scheda prevede una sinossi, informazioni di schedatura ed i riferimenti (opere, fonti).</p>
\t\t\t
\t\t\t</div>
\t\t\t</div>
\t\t\t-->
\t\t\t<div>
\t\t\t<h3 style=\"text-align:center\">Indici</h3>
\t\t</div>
\t\t<div class=\"table-container\">
\t\t\t
\t\t\t
\t\t\t<div class=\"table-col\" style=\"text-align:center\">
\t\t\t\t<div class=\"avatar-184\" style=\" background-image:url('";
        // line 161
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/assets/img/char.jpg');\"></div>
\t\t\t\t\t<h6>Personaggi</h6>
\t\t\t\t\t<div style=\"width:80%; margin:0 auto; background: #ff6600; height:2px\"></div>
\t\t\t\t\t<p>Indice dei personaggi coinvolti</p>
\t\t\t\t\t<p><span class=\"tags\"><a href=\"schede/indice_dei_personaggi\">Consulta l'indice'</a></span></p>
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"table-col\" style=\"text-align:center\">
\t\t\t\t<div class=\"avatar-184\" style=\" background-image: url('";
        // line 169
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/assets/img/archive.jpg'); border-radius:50%; background-size:cover\"></div>
\t\t\t\t\t<h6>Schede</h6>
\t\t\t\t\t<div style=\"width:80%; margin:0 auto; background: #4caf50; height:2px\"></div>
\t\t\t\t\t<p>Indice completo delle schede</p>
\t\t\t\t\t<p><span class=\"tags\"><a href=\"schede/\">Vai all'archivio</a></span></p>
\t\t\t</div>
\t\t\t<div class=\"table-col\" style=\"text-align:center\">
\t\t\t\t<div class=\"avatar-184\" style=\"background-image:url('";
        // line 176
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/assets/img/tags.jpg')\"></div>
\t\t\t\t\t<h6>Argomenti</h6>
\t\t\t\t\t<div style=\"width:80%; margin:0 auto; background: #227799; height:2px\"></div>
\t\t\t\t\t<p>Indice degli argomenti presenti</p>
\t\t\t\t\t<p><span class=\"tags\"><a href=\"schede/indice_degli_argomenti\">Leggi l'elenco</a></span></p>
\t\t\t\t\t
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>


\t\t\t<div style=\" padding-top:3em; padding-bottom:3em; ;color:#fff; background-size:100%; position:relative\">
\t\t<div style=\"position:absolute; top:0; left:0;width:100%; height:100%; background-color:#DB4437; opacity:0.75\"></div>
\t\t<div style=\"position:relative; z-index:10\">
\t\t        ";
        // line 192
        $this->loadTemplate("modular/twocols.html.twig", "home.html.twig", 192)->display(array_merge($context, array("page" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/contatti/_collabora/"), "method"))));
        // line 193
        echo "
\t\t        <!--
\t\t\t<div class=\"table-container\">
\t\t\t\t<div class=\"table-col\">
\t\t\t\t\t<h2>Collabora</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"table-col\">
\t\t\t\t\t<p>Puoi proporre la tua collaborazione o richiedere maggiori informazioni compilando il modulo oppure via email.</p>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"tags\"><a target=\"_blank\" href=\"https://drive.google.com/open?id=1O-__AI7TnHfQaRuSnrigkmkd21QK9P6ajS6PPBmiB4o\" style=\"background:rgba(255,255,255,.75);  color:#ff6600; font-weight:bold; letter-spacing:0.1em; padding:1em; margin:1em\">Collabora</a></span>
\t\t\t\t\t\t<span class=\"tags\"><a style=\"background:rgba(255,255,255,.1);  color:#fff; letter-spacing:0.1em; padding:1em; margin:1em\" href=\"mailto:";
        // line 203
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "email", array());
        echo "\">Invia Email</a></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t-->
\t\t
\t\t</div>
\t</div>

<div  style=\" padding-top:1em; padding-bottom:2em; background-color:#fff; position:relative\">
\t<div style=\"position:absolute; top:0; left:0;width:100%; height:100%; background-color:#fff; opacity:0.95\"></div>
\t\t<div style=\"position:relative; z-index:10\" id=\"progetto\">
\t\t\t<!--QUI-->
        ";
        // line 216
        $this->loadTemplate("modular/twocols.html.twig", "home.html.twig", 216)->display(array_merge($context, array("page" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/il-progetto/_impressum/"), "method"))));
        // line 217
        echo "<!--QUI-->
\t\t

\t\t\t
        ";
        // line 221
        $this->loadTemplate("modular/contributors.html.twig", "home.html.twig", 221)->display(array_merge($context, array("page" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/il-progetto/_contributors/"), "method"))));
        // line 222
        echo "</div>
\t</div>
\t<div style=\" padding-top:3em; padding-bottom:3em; ;color:#fff; background-size:100%; position:relative\">
\t\t<div style=\"position:absolute; top:0; left:0;width:100%; height:100%; background-color:#ab47bc; opacity:0.75\"></div>
\t\t<div style=\"position:relative; z-index:10\">
\t\t";
        // line 227
        $this->loadTemplate("modular/twocols.html.twig", "home.html.twig", 227)->display(array_merge($context, array("page" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/contatti/_contatti/"), "method"))));
        // line 228
        echo "\t\t<!--
\t\t\t<div class=\"table-container\">
\t\t\t\t<div class=\"table-col\">
\t\t\t\t\t<h2>Contatti</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"table-col\">
                                    
                                    <a style=\"padding:1em; width:64px; height:64px; border-radius:50%; background:#ccc\"href=\"https://plus.google.com/u/0/111321209629895853779\" target=\"_blank\"><i class=\"fa fa-envelope\"></i></a>
                                    <a style=\"padding:1em; width:64px; height:64px; border-radius:50%; background:#ccc\"href=\"https://plus.google.com/u/0/111321209629895853779\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                                    <a style=\"padding:1em; width:64px; height:64px; border-radius:50%; background:#ccc\"href=\"https://plus.google.com/u/0/111321209629895853779\" target=\"_blank\"><i class=\"fa fa-google\"></i></a>
                                    <a style=\"padding:1em; width:64px; height:64px; border-radius:50%; background:#ccc\"href=\"https://plus.google.com/u/0/111321209629895853779\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                                    <a style=\"padding:1em; width:64px; height:64px; border-radius:50%; background:#ccc\"href=\"https://plus.google.com/u/0/111321209629895853779\" target=\"_blank\"><i class=\"fa fa-github\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t-->
\t\t</div>
\t</div>

<!--
\t\t<div class=\"content-wrapper\" style=\" padding-top:3em; padding-bottom:3em; ;color:#fff; background-size:100%; position:relative\">
\t\t<div style=\"position:absolute; top:0; left:0;width:100%; height:100%; background-color:#DB4437; opacity:0.75\"></div>
\t\t<div style=\"position:relative; z-index:10\">
\t\t\t<div class=\"table-container\">
\t\t\t\t<div class=\"table-col\">
\t\t\t\t\t<h2>Collabora</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"table-col\">
\t\t\t\t\t<p>Puoi proporre la tua collaborazione o richiedere maggiori informazioni compilando il modulo oppure via email.</p>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"tags\"><a target=\"_blank\" href=\"https://drive.google.com/open?id=1O-__AI7TnHfQaRuSnrigkmkd21QK9P6ajS6PPBmiB4o\" style=\"background:rgba(255,255,255,.75);  color:#ff6600; font-weight:bold; letter-spacing:0.1em; padding:1em; margin:1em\">Collabora</a></span>
\t\t\t\t\t\t<span class=\"tags\"><a style=\"background:rgba(255,255,255,.1);  color:#fff; letter-spacing:0.1em; padding:1em; margin:1em\" href=\"mailto:";
        // line 258
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "email", array());
        echo "\">Invia Email</a></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</div>
\t</div>
\t</div>
-->

<!--
";
        // line 269
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 270
            echo "    <h4>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Argomenti");
            echo "</h4>
    ";
            // line 271
            $this->loadTemplate("partials/taxonomycount.html.twig", "home.html.twig", 271)->display(array_merge($context, array("taxonomy" => "tag")));
            // line 272
            echo "    <h4>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("Personaggi");
            echo "</h4>
    ";
            // line 273
            $this->loadTemplate("partials/taxonomycount.html.twig", "home.html.twig", 273)->display(array_merge($context, array("taxonomy" => "char")));
            // line 274
            echo "</div>
";
        }
        // line 276
        echo "-->
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 276,  430 => 274,  428 => 273,  423 => 272,  421 => 271,  416 => 270,  414 => 269,  400 => 258,  368 => 228,  366 => 227,  359 => 222,  357 => 221,  351 => 217,  349 => 216,  333 => 203,  321 => 193,  319 => 192,  300 => 176,  290 => 169,  279 => 161,  257 => 141,  255 => 140,  244 => 132,  237 => 128,  233 => 127,  229 => 126,  203 => 103,  195 => 98,  188 => 93,  182 => 90,  173 => 84,  167 => 81,  162 => 78,  160 => 77,  156 => 76,  151 => 74,  145 => 71,  137 => 66,  132 => 64,  129 => 63,  127 => 62,  107 => 45,  100 => 41,  96 => 40,  90 => 36,  87 => 35,  84 => 34,  82 => 33,  68 => 22,  63 => 20,  59 => 19,  54 => 16,  48 => 12,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'partials/base.html.twig' %}

{% block content %}
<style>
.scrolled {z-index:9999 !important}
</style>
<!--
\t{% set home_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}
\t\t{% if home_image %}
\t\t\t<div class=\"flush-top blog-header blog-header-image prova\" style=\"background-image: url({{ home_image.url }});\">
\t\t\t{% else %}
\t\t\t<div style=\"width:100%; height:100%; position:fixed; top:0; left:0; background-image: url('assets/img/libri.jpg'); background-size:cover\"></div>
\t\t\t\t<div class=\"flush-top blog-header blog-header-image home-header\" style=\"min-height:105vh; height:auto; color:#227799; position:relative\">
\t\t\t\t<div style=\"position:absolute; top:0; left:0; width:100%; height:100%; background:#1f272d; opacity:0.5\"></div>
\t\t{% endif %}

\t\t\t<div style=\"position:relative; z-index:20;\">
\t\t\t<h1>PoLet500</h1>
\t\t\t{{ page.content }}
\t\t\t\t\t<h6 style=\"color:#fff\">{{ site.metadata.description }}.</h6>
\t\t\t\t\t<div>
\t\t\t<span class=\"tags\"><a style=\"background:rgba(255,255,255,.75);  color:#ff6600; font-weight:bold; letter-spacing:0.1em; padding:1em; margin:1em\" href=\"{{ base_url }}/schede\">L'archivio</a></span>
\t\t\t<span class=\"tags\"><a style=\"background:rgba(255,255,255,.1); color:#fff; letter-spacing:0.1em; padding:1em; margin:1em\" href=\"#progetto\">Il progetto</a></span>
\t\t\t
\t\t\t
\t\t</div>

\t\t\t</div>

\t\t</div>
-->
\t\t<!--
\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}
\t\t-->
\t\t<!--
\t\t
\t<div class=\"content-wrapper \" style=\" font-size:115%;  padding-bottom:2em\">
\t\t<h2>{{ 'Homepage'|t }}</h2>
\t\t<h5>{{ site.metadata.description }}.</h5>
 
\t\t<p>
    \t\t<span class=\"tags\">
        \t\t<a href=\"{{ base_url }}/chi-siamo\"> Scopri di più</a>
        \t</span>
        </p>
\t</div>
\t-->



<!--Data counters-->
<!--
<div class=\"content-wrapper\" style=\"padding-bottom:2em\">
\t<h2 class=\"text-xs-center\">La banca dati</h2>
\t<div class=\"table-container\">
-->

<!--Decomment below to connect the tax counters-->
<!--
{% if config.plugins.taxonomylist.enabled %}
\t\t\t<div class=\"table-col text-xs-center\">
\t\t\t\t<a  href=\"{{ blog_url }}\">
\t\t\t\t\t<h4 class=\"label label--round btn-lg\">
\t\t\t\t\t\t{{ item |length }}
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<h5>Opere schedate</h5>
\t\t\t\t</a>\t\t
\t\t\t\t<p><span class=\"tags\"><a href=\"{{ blog_url }}\">Indice delle schede</a></span></p>
\t\t\t</div>
\t\t\t<div class=\"table-col text-xs-center\">
\t\t\t\t<a href=\" {{ base_url }}/testi \">
\t\t\t\t\t<h4 class=\"label label--round btn-lg\">
\t\t\t\t\t\t{{ blog |length }}
\t\t\t\t\t    {% include 'partials/taxonomycount.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
\t\t\t\t\t</h4>
\t\t\t\t\t<h5>Argomenti trattati</h5>
\t\t\t\t</a>\t\t
\t\t\t\t<p><span class=\"tags\"><a href=\"{{ base_url }}/schede/indice_degli_argomenti\">Indice degli argomenti</a></span></p>
\t\t\t</div>
\t\t\t<div class=\"table-col text-xs-center\">
\t\t\t\t<a href=\" {{ base_url }}/testi \">
\t\t\t\t\t<h4 class=\"label label--round btn-lg\">
\t\t\t        
\t\t\t\t\t</h4>
\t\t\t\t\t<h5>Personaggi coinvolti</h5>
\t\t\t\t</a>\t\t
\t\t\t\t<p><span class=\"tags\"><a href=\"{{ base_url }}/schede/indice_dei_personaggi\">Indice dei personaggi</a></span></p>
\t\t\t</div>
{% endif %}
-->
<!--Comment to hide the fallback-->
<!--
\t\t<div class=\"text-xs-center table-col\"></div>
\t\t<div class=\"text-xs-center table-col\">
\t\t\t<a href=\"{{ base_url }}/schede\">
\t\t\t\t<p class=\"label label--round btn-lg\"><i class=\"fa fa-file-text-o\"></i></p>
\t\t\t\t<h4> Consulta le schede</h4>
\t\t\t</a>
\t\t\t<p><span class=\"tags\">
\t\t\t\t<a href=\"{{ base_url }}/schede\">Indice delle schede</a>
\t\t\t</span></p>
\t\t</div>
\t\t<div class=\"text-xs-center table-col\"></div>
\t-->
<!--Close divs-->
<!--
\t</div>
</div>
-->
<!--/End counters-->
<div style=\"position:relative; z-index:10; font-family:'Raleway',sans-serif\" id=\"archivio\">
\t
\t<div class=\"content-wrapper text-heading\">
\t\t<h1 class=\"text-xs-l\">Polemiche Letterarie del Cinquecento</h1>
\t\t<h3>Polemiche Letterarie del Cinquecento è un progetto in costruzione di schedatura elettronica di polemiche letterarie del cinquecento italiano. </h3>
\t\t<p>
\t\tCon il patrocinio dell’<strong>Università degli Studi del Molise</strong> - Dipartimento di Scienze Umanistiche, Sociali e della Formazione.<br>

\t\tEdita dalle <a href=\"http://www.ereticopedia.org/edizioni-clori\">Edizioni CLORI </a> all’interno della collana <em>La “Ruota dei libri”: corpora, repertori e dizionari online</em>, ISBN: 978-88-942416-8-6; DOI: <a href=\"https://doi.org/10.5281/zenodo.881970\" target=\"_blank\">10.5281/zenodo.881970</a>.
\t\t</p>

\t\t<p>
\t\t\t<span class=\"tags tags-bg bg-primary\"><a href=\"{{ base_url}}/schede\">L'Archivio</a></span>
\t\t\t<span class=\"tags tags-bg bg-primary\"><a href=\"{{ base_url}}/il-progetto\">Il Progetto</a></span>
\t\t\t<span class=\"tags tags-bg bg-primary\"><a href=\"{{ base_url}}/contatti\">Contatti</a></span>
\t\t</p>
\t\t</div>

<div style=\"width:100%; height:400px; background-image: url('{{ base_url }}/assets/img/libri2.jpg'); background-size:cover\"></div>
\t\t\t

</DIV>
\t
\t<div style=\" padding-top:1em; padding-bottom:2em; background-color:#fff; position:relative\">
\t<div style=\"position:absolute; top:0; left:0;width:100%; height:100%; background-color:#fff; opacity:0.95\"></div>
\t\t<div style=\"position:relative; z-index:10\" id=\"archivio\">
\t\t{% include 'modular/twocols.html.twig' with {'page': page.find('/schede/_impressum/')} %}

\t\t<!--\t
\t\t<div>
\t\t<div class=\"table-container\">
\t\t\t<div class=\"table-col\">
\t\t\t\t<h2>L'archivio</h2>
\t\t\t</div>
\t\t\t<div class=\"table-col\">
\t\t\t<p>La banca dati può essere consultata attraverso gli indici dei personaggi coinvolti, degli argomenti delle schede e da un indice completo delle opere schedate. Ogni scheda prevede una sinossi, informazioni di schedatura ed i riferimenti (opere, fonti).</p>
\t\t\t
\t\t\t</div>
\t\t\t</div>
\t\t\t-->
\t\t\t<div>
\t\t\t<h3 style=\"text-align:center\">Indici</h3>
\t\t</div>
\t\t<div class=\"table-container\">
\t\t\t
\t\t\t
\t\t\t<div class=\"table-col\" style=\"text-align:center\">
\t\t\t\t<div class=\"avatar-184\" style=\" background-image:url('{{ base_url }}/assets/img/char.jpg');\"></div>
\t\t\t\t\t<h6>Personaggi</h6>
\t\t\t\t\t<div style=\"width:80%; margin:0 auto; background: #ff6600; height:2px\"></div>
\t\t\t\t\t<p>Indice dei personaggi coinvolti</p>
\t\t\t\t\t<p><span class=\"tags\"><a href=\"schede/indice_dei_personaggi\">Consulta l'indice'</a></span></p>
\t\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"table-col\" style=\"text-align:center\">
\t\t\t\t<div class=\"avatar-184\" style=\" background-image: url('{{ base_url }}/assets/img/archive.jpg'); border-radius:50%; background-size:cover\"></div>
\t\t\t\t\t<h6>Schede</h6>
\t\t\t\t\t<div style=\"width:80%; margin:0 auto; background: #4caf50; height:2px\"></div>
\t\t\t\t\t<p>Indice completo delle schede</p>
\t\t\t\t\t<p><span class=\"tags\"><a href=\"schede/\">Vai all'archivio</a></span></p>
\t\t\t</div>
\t\t\t<div class=\"table-col\" style=\"text-align:center\">
\t\t\t\t<div class=\"avatar-184\" style=\"background-image:url('{{ base_url }}/assets/img/tags.jpg')\"></div>
\t\t\t\t\t<h6>Argomenti</h6>
\t\t\t\t\t<div style=\"width:80%; margin:0 auto; background: #227799; height:2px\"></div>
\t\t\t\t\t<p>Indice degli argomenti presenti</p>
\t\t\t\t\t<p><span class=\"tags\"><a href=\"schede/indice_degli_argomenti\">Leggi l'elenco</a></span></p>
\t\t\t\t\t
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>


\t\t\t<div style=\" padding-top:3em; padding-bottom:3em; ;color:#fff; background-size:100%; position:relative\">
\t\t<div style=\"position:absolute; top:0; left:0;width:100%; height:100%; background-color:#DB4437; opacity:0.75\"></div>
\t\t<div style=\"position:relative; z-index:10\">
\t\t        {% include 'modular/twocols.html.twig' with {'page': page.find('/contatti/_collabora/')} %}

\t\t        <!--
\t\t\t<div class=\"table-container\">
\t\t\t\t<div class=\"table-col\">
\t\t\t\t\t<h2>Collabora</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"table-col\">
\t\t\t\t\t<p>Puoi proporre la tua collaborazione o richiedere maggiori informazioni compilando il modulo oppure via email.</p>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"tags\"><a target=\"_blank\" href=\"https://drive.google.com/open?id=1O-__AI7TnHfQaRuSnrigkmkd21QK9P6ajS6PPBmiB4o\" style=\"background:rgba(255,255,255,.75);  color:#ff6600; font-weight:bold; letter-spacing:0.1em; padding:1em; margin:1em\">Collabora</a></span>
\t\t\t\t\t\t<span class=\"tags\"><a style=\"background:rgba(255,255,255,.1);  color:#fff; letter-spacing:0.1em; padding:1em; margin:1em\" href=\"mailto:{{ site.author.email }}\">Invia Email</a></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t-->
\t\t
\t\t</div>
\t</div>

<div  style=\" padding-top:1em; padding-bottom:2em; background-color:#fff; position:relative\">
\t<div style=\"position:absolute; top:0; left:0;width:100%; height:100%; background-color:#fff; opacity:0.95\"></div>
\t\t<div style=\"position:relative; z-index:10\" id=\"progetto\">
\t\t\t<!--QUI-->
        {% include 'modular/twocols.html.twig' with {'page': page.find('/il-progetto/_impressum/')} %}
<!--QUI-->
\t\t

\t\t\t
        {% include 'modular/contributors.html.twig' with {'page': page.find('/il-progetto/_contributors/')} %}
</div>
\t</div>
\t<div style=\" padding-top:3em; padding-bottom:3em; ;color:#fff; background-size:100%; position:relative\">
\t\t<div style=\"position:absolute; top:0; left:0;width:100%; height:100%; background-color:#ab47bc; opacity:0.75\"></div>
\t\t<div style=\"position:relative; z-index:10\">
\t\t{% include 'modular/twocols.html.twig' with {'page': page.find('/contatti/_contatti/')} %}
\t\t<!--
\t\t\t<div class=\"table-container\">
\t\t\t\t<div class=\"table-col\">
\t\t\t\t\t<h2>Contatti</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"table-col\">
                                    
                                    <a style=\"padding:1em; width:64px; height:64px; border-radius:50%; background:#ccc\"href=\"https://plus.google.com/u/0/111321209629895853779\" target=\"_blank\"><i class=\"fa fa-envelope\"></i></a>
                                    <a style=\"padding:1em; width:64px; height:64px; border-radius:50%; background:#ccc\"href=\"https://plus.google.com/u/0/111321209629895853779\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                                    <a style=\"padding:1em; width:64px; height:64px; border-radius:50%; background:#ccc\"href=\"https://plus.google.com/u/0/111321209629895853779\" target=\"_blank\"><i class=\"fa fa-google\"></i></a>
                                    <a style=\"padding:1em; width:64px; height:64px; border-radius:50%; background:#ccc\"href=\"https://plus.google.com/u/0/111321209629895853779\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                                    <a style=\"padding:1em; width:64px; height:64px; border-radius:50%; background:#ccc\"href=\"https://plus.google.com/u/0/111321209629895853779\" target=\"_blank\"><i class=\"fa fa-github\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t-->
\t\t</div>
\t</div>

<!--
\t\t<div class=\"content-wrapper\" style=\" padding-top:3em; padding-bottom:3em; ;color:#fff; background-size:100%; position:relative\">
\t\t<div style=\"position:absolute; top:0; left:0;width:100%; height:100%; background-color:#DB4437; opacity:0.75\"></div>
\t\t<div style=\"position:relative; z-index:10\">
\t\t\t<div class=\"table-container\">
\t\t\t\t<div class=\"table-col\">
\t\t\t\t\t<h2>Collabora</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"table-col\">
\t\t\t\t\t<p>Puoi proporre la tua collaborazione o richiedere maggiori informazioni compilando il modulo oppure via email.</p>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"tags\"><a target=\"_blank\" href=\"https://drive.google.com/open?id=1O-__AI7TnHfQaRuSnrigkmkd21QK9P6ajS6PPBmiB4o\" style=\"background:rgba(255,255,255,.75);  color:#ff6600; font-weight:bold; letter-spacing:0.1em; padding:1em; margin:1em\">Collabora</a></span>
\t\t\t\t\t\t<span class=\"tags\"><a style=\"background:rgba(255,255,255,.1);  color:#fff; letter-spacing:0.1em; padding:1em; margin:1em\" href=\"mailto:{{ site.author.email }}\">Invia Email</a></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</div>
\t</div>
\t</div>
-->

<!--
{% if config.plugins.taxonomylist.enabled %}
    <h4>{{ 'Argomenti'|t }}</h4>
    {% include 'partials/taxonomycount.html.twig' with {'taxonomy':'tag'} %}
    <h4>{{ 'Personaggi'|t }}</h4>
    {% include 'partials/taxonomycount.html.twig' with {'taxonomy':'char'} %}
</div>
{% endif %}
-->
{% endblock %}
";
    }
}
