<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_10ec11d71cbe9fc18b378cb9e5fe2143 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World")), "html", null, true);
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World")), "html", null, true);
        echo "\">Access the secured area</a> <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_login"), "html", null, true);
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 56,  223 => 54,  212 => 50,  206 => 48,  200 => 45,  192 => 42,  175 => 85,  159 => 77,  129 => 64,  127 => 28,  124 => 62,  118 => 41,  110 => 22,  76 => 17,  113 => 39,  100 => 32,  102 => 17,  81 => 34,  77 => 25,  53 => 11,  58 => 18,  20 => 1,  90 => 32,  65 => 24,  63 => 22,  34 => 6,  221 => 72,  217 => 51,  213 => 70,  204 => 74,  202 => 46,  198 => 67,  195 => 66,  191 => 64,  185 => 92,  179 => 57,  170 => 83,  134 => 66,  59 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 55,  224 => 71,  220 => 70,  214 => 69,  208 => 69,  169 => 60,  143 => 40,  140 => 39,  132 => 65,  128 => 42,  119 => 31,  107 => 51,  71 => 19,  38 => 6,  177 => 65,  165 => 53,  160 => 61,  135 => 47,  126 => 45,  114 => 46,  84 => 29,  70 => 25,  67 => 26,  61 => 12,  94 => 34,  89 => 32,  85 => 28,  75 => 4,  68 => 22,  56 => 11,  87 => 32,  21 => 2,  26 => 9,  93 => 30,  88 => 31,  78 => 26,  46 => 14,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  196 => 44,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 76,  151 => 57,  142 => 47,  138 => 68,  136 => 45,  121 => 46,  117 => 19,  105 => 18,  91 => 41,  62 => 23,  49 => 10,  24 => 3,  25 => 4,  19 => 1,  79 => 32,  72 => 24,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 32,  157 => 56,  145 => 71,  139 => 50,  131 => 37,  123 => 41,  120 => 20,  115 => 40,  111 => 36,  108 => 19,  101 => 32,  98 => 32,  96 => 32,  83 => 30,  74 => 30,  66 => 24,  55 => 16,  52 => 10,  50 => 10,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 41,  187 => 84,  182 => 66,  176 => 56,  173 => 55,  168 => 66,  164 => 80,  162 => 62,  154 => 54,  149 => 72,  147 => 58,  144 => 53,  141 => 69,  133 => 55,  130 => 43,  125 => 34,  122 => 43,  116 => 36,  112 => 53,  109 => 27,  106 => 36,  103 => 34,  99 => 46,  95 => 35,  92 => 15,  86 => 13,  82 => 28,  80 => 8,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 16,  51 => 7,  48 => 9,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 3,  30 => 3,);
    }
}
