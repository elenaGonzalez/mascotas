<?php

/* MascotasMascotasBundle:Contacto:contacto.html.twig */
class __TwigTemplate_6e7ac8660a61f95a69c36b871fdd295c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Contacto";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"text-center\">
    <header>
        <h1>Contact symblog</h1>
    </header>

    <p>Want to contact symblog?</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Contacto:contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  65 => 24,  58 => 20,  104 => 40,  102 => 39,  59 => 21,  20 => 1,  179 => 58,  175 => 57,  170 => 56,  167 => 55,  161 => 55,  90 => 17,  76 => 8,  63 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 32,  107 => 36,  71 => 19,  38 => 5,  177 => 65,  165 => 64,  160 => 61,  135 => 40,  126 => 45,  114 => 30,  84 => 34,  70 => 20,  67 => 23,  61 => 13,  94 => 22,  89 => 20,  85 => 14,  75 => 23,  68 => 14,  56 => 20,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 15,  78 => 28,  46 => 7,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 33,  117 => 44,  105 => 27,  91 => 31,  62 => 22,  49 => 17,  24 => 3,  25 => 4,  19 => 1,  79 => 32,  72 => 28,  69 => 7,  47 => 16,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 53,  145 => 46,  139 => 50,  131 => 38,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 42,  101 => 26,  98 => 37,  96 => 31,  83 => 25,  74 => 26,  66 => 15,  55 => 61,  52 => 19,  50 => 51,  43 => 11,  41 => 7,  35 => 4,  32 => 6,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 52,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 35,  122 => 43,  116 => 48,  112 => 42,  109 => 28,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 36,  86 => 28,  82 => 13,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 19,  54 => 17,  51 => 14,  48 => 13,  45 => 16,  42 => 14,  39 => 9,  36 => 7,  33 => 4,  30 => 4,);
    }
}
