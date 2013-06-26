<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_562896df2f28182b97305b92439b6687 extends Twig_Template
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
        return array (  127 => 28,  110 => 22,  102 => 17,  100 => 47,  81 => 34,  113 => 40,  59 => 20,  90 => 32,  76 => 17,  63 => 21,  53 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 46,  140 => 45,  132 => 51,  128 => 49,  119 => 42,  107 => 51,  71 => 19,  38 => 6,  177 => 65,  165 => 64,  160 => 61,  135 => 44,  126 => 45,  114 => 46,  84 => 29,  70 => 25,  67 => 26,  61 => 12,  94 => 34,  89 => 32,  85 => 13,  75 => 23,  68 => 22,  56 => 11,  87 => 31,  21 => 2,  26 => 9,  93 => 34,  88 => 31,  78 => 26,  46 => 14,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 49,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 41,  62 => 23,  49 => 20,  24 => 3,  25 => 1,  19 => 1,  79 => 18,  72 => 23,  69 => 6,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 36,  120 => 20,  115 => 43,  111 => 30,  108 => 19,  101 => 34,  98 => 31,  96 => 31,  83 => 25,  74 => 30,  66 => 24,  55 => 19,  52 => 10,  50 => 18,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 48,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 53,  109 => 41,  106 => 36,  103 => 37,  99 => 46,  95 => 35,  92 => 42,  86 => 39,  82 => 28,  80 => 27,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 10,  51 => 14,  48 => 9,  45 => 17,  42 => 8,  39 => 10,  36 => 4,  33 => 3,  30 => 7,);
    }
}
