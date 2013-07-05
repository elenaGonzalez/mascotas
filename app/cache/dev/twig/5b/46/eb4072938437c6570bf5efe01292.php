<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_5b46eb4072938437c6570bf5efe01292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  110 => 22,  34 => 6,  159 => 65,  152 => 61,  148 => 60,  81 => 34,  77 => 25,  53 => 10,  65 => 24,  58 => 19,  104 => 40,  102 => 17,  59 => 21,  20 => 1,  179 => 58,  175 => 57,  170 => 56,  167 => 55,  161 => 55,  90 => 32,  76 => 17,  63 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 56,  132 => 53,  128 => 49,  119 => 32,  107 => 51,  71 => 26,  38 => 6,  177 => 65,  165 => 64,  160 => 61,  135 => 54,  126 => 45,  114 => 46,  84 => 29,  70 => 25,  67 => 26,  61 => 12,  94 => 34,  89 => 32,  85 => 27,  75 => 4,  68 => 14,  56 => 11,  87 => 20,  21 => 2,  26 => 9,  93 => 33,  88 => 31,  78 => 26,  46 => 14,  27 => 4,  44 => 15,  31 => 3,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 55,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 41,  62 => 23,  49 => 20,  24 => 3,  25 => 4,  19 => 1,  79 => 32,  72 => 4,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 32,  157 => 53,  145 => 46,  139 => 50,  131 => 38,  123 => 47,  120 => 20,  115 => 43,  111 => 41,  108 => 19,  101 => 36,  98 => 37,  96 => 34,  83 => 25,  74 => 30,  66 => 24,  55 => 16,  52 => 10,  50 => 18,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 52,  149 => 51,  147 => 58,  144 => 58,  141 => 51,  133 => 55,  130 => 41,  125 => 35,  122 => 46,  116 => 48,  112 => 53,  109 => 28,  106 => 39,  103 => 37,  99 => 46,  95 => 35,  92 => 36,  86 => 28,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 18,  51 => 7,  48 => 9,  45 => 10,  42 => 8,  39 => 10,  36 => 4,  33 => 3,  30 => 2,);
    }
}
