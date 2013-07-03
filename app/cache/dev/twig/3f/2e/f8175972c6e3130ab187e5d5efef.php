<?php

/* MascotasMascotasBundle:Page:index.html.twig */
class __TwigTemplate_3f2ef8175972c6e3130ab187e5d5efef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicacioness"]) ? $context["publicacioness"] : $this->getContext($context, "publicacioness")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
            // line 5
            echo "        <article class=\"publicacion\">
            <div class=\"date\"><time datetime=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created"), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created"), "l, F j, Y"), "html", null, true);
            echo "</time></div>
            <header>
                <h2><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "title"), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "publicacion", array(0 => 500), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id"))), "html", null, true);
            echo "\">Continue reading...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comments: -</p>
                <p>Posted by <span class=\"highlight\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "author"), "html", null, true);
            echo "</span> at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created"), "h:iA"), "html", null, true);
            echo "</p>
                <p>Tags: <span class=\"highlight\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "tags"), "html", null, true);
            echo "</span></p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "        <p>There are no blog entries for symblog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  65 => 4,  58 => 20,  77 => 25,  53 => 18,  20 => 1,  172 => 57,  167 => 56,  146 => 51,  118 => 33,  102 => 35,  90 => 34,  76 => 8,  63 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 40,  128 => 38,  119 => 42,  107 => 51,  71 => 19,  38 => 4,  177 => 65,  165 => 64,  160 => 60,  135 => 47,  126 => 45,  114 => 41,  84 => 31,  70 => 29,  67 => 26,  61 => 14,  94 => 22,  89 => 28,  85 => 27,  75 => 23,  68 => 18,  56 => 12,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 15,  78 => 34,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 55,  156 => 58,  151 => 52,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 41,  91 => 41,  62 => 22,  49 => 14,  24 => 3,  25 => 4,  19 => 1,  79 => 28,  72 => 4,  69 => 23,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 52,  120 => 40,  115 => 46,  111 => 44,  108 => 37,  101 => 32,  98 => 31,  96 => 32,  83 => 23,  74 => 19,  66 => 23,  55 => 61,  52 => 52,  50 => 51,  43 => 11,  41 => 7,  35 => 3,  32 => 6,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 58,  173 => 74,  168 => 66,  164 => 55,  162 => 62,  154 => 53,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 35,  116 => 32,  112 => 53,  109 => 43,  106 => 28,  103 => 37,  99 => 46,  95 => 34,  92 => 33,  86 => 39,  82 => 13,  80 => 19,  73 => 24,  64 => 23,  60 => 13,  57 => 21,  54 => 17,  51 => 7,  48 => 17,  45 => 6,  42 => 8,  39 => 10,  36 => 3,  33 => 4,  30 => 2,);
    }
}
