<?php

/* MascotasMascotasBundle:Mascota:new.html.twig */
class __TwigTemplate_d8d43c1c70921b8f31efe4ff8350c36d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        echo "<h1 align=\"center\">Agregar una Mascota</h1>";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "   <title class=\"h1\">";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
   <div align=\"center\" style=\"central\">
    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mascota_create"), "html", null, true);
        echo "\" method=\"post\" class=\"text-center\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " style=\"color: blue\">
        <div align=\"center\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "</div>
        <p>
            <button type=\"submit\" class=\"btn-primary\">agregar</button>
        </p>
    </form>
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mascota"), "html", null, true);
        echo "\">
            Volver a la lista
        </a>
    </li>
</ul>
 </div>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Agregar Mascota";
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Mascota:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 35,  81 => 26,  77 => 25,  53 => 16,  58 => 20,  20 => 1,  90 => 34,  65 => 24,  63 => 22,  34 => 13,  221 => 72,  217 => 71,  213 => 70,  204 => 74,  202 => 69,  198 => 67,  195 => 66,  191 => 64,  185 => 60,  179 => 57,  170 => 54,  134 => 38,  59 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 69,  169 => 60,  143 => 40,  140 => 39,  132 => 51,  128 => 49,  119 => 31,  107 => 36,  71 => 19,  38 => 4,  177 => 65,  165 => 53,  160 => 61,  135 => 47,  126 => 45,  114 => 41,  84 => 34,  70 => 20,  67 => 6,  61 => 14,  94 => 17,  89 => 28,  85 => 27,  75 => 28,  68 => 21,  56 => 20,  87 => 20,  21 => 2,  26 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 18,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 47,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 26,  91 => 31,  62 => 23,  49 => 17,  24 => 3,  25 => 4,  19 => 1,  79 => 32,  72 => 4,  69 => 23,  47 => 9,  40 => 4,  37 => 3,  22 => 2,  246 => 32,  157 => 56,  145 => 41,  139 => 50,  131 => 37,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 32,  83 => 32,  74 => 14,  66 => 23,  55 => 20,  52 => 21,  50 => 10,  43 => 11,  41 => 7,  35 => 3,  32 => 12,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 56,  173 => 55,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 43,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 34,  122 => 43,  116 => 36,  112 => 42,  109 => 27,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 15,  86 => 13,  82 => 22,  80 => 8,  73 => 24,  64 => 17,  60 => 21,  57 => 19,  54 => 65,  51 => 7,  48 => 53,  45 => 6,  42 => 8,  39 => 4,  36 => 3,  33 => 6,  30 => 2,);
    }
}
