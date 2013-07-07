<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_28fac12edd23d79a4914d65e89cf9741 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_contact"), "html", null, true);
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 56,  223 => 54,  212 => 50,  206 => 48,  200 => 45,  192 => 42,  175 => 85,  159 => 77,  129 => 64,  127 => 63,  124 => 62,  118 => 41,  110 => 38,  76 => 26,  113 => 39,  100 => 32,  102 => 35,  81 => 34,  77 => 25,  53 => 18,  58 => 18,  20 => 1,  90 => 34,  65 => 24,  63 => 22,  34 => 6,  221 => 72,  217 => 51,  213 => 70,  204 => 74,  202 => 46,  198 => 67,  195 => 66,  191 => 64,  185 => 92,  179 => 57,  170 => 83,  134 => 66,  59 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 55,  224 => 71,  220 => 70,  214 => 69,  208 => 69,  169 => 60,  143 => 40,  140 => 39,  132 => 65,  128 => 42,  119 => 31,  107 => 51,  71 => 19,  38 => 6,  177 => 65,  165 => 53,  160 => 61,  135 => 47,  126 => 45,  114 => 46,  84 => 34,  70 => 25,  67 => 26,  61 => 21,  94 => 4,  89 => 32,  85 => 28,  75 => 4,  68 => 22,  56 => 22,  87 => 32,  21 => 2,  26 => 1,  93 => 30,  88 => 6,  78 => 27,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 44,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 76,  151 => 57,  142 => 47,  138 => 68,  136 => 45,  121 => 46,  117 => 39,  105 => 26,  91 => 41,  62 => 23,  49 => 20,  24 => 3,  25 => 4,  19 => 1,  79 => 32,  72 => 24,  69 => 25,  47 => 10,  40 => 4,  37 => 3,  22 => 2,  246 => 32,  157 => 56,  145 => 71,  139 => 50,  131 => 37,  123 => 41,  120 => 60,  115 => 40,  111 => 36,  108 => 37,  101 => 32,  98 => 32,  96 => 32,  83 => 30,  74 => 30,  66 => 24,  55 => 16,  52 => 10,  50 => 10,  43 => 7,  41 => 9,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 41,  187 => 84,  182 => 66,  176 => 56,  173 => 55,  168 => 66,  164 => 80,  162 => 62,  154 => 54,  149 => 72,  147 => 58,  144 => 53,  141 => 69,  133 => 55,  130 => 43,  125 => 34,  122 => 43,  116 => 36,  112 => 53,  109 => 27,  106 => 36,  103 => 34,  99 => 46,  95 => 35,  92 => 15,  86 => 13,  82 => 28,  80 => 8,  73 => 24,  64 => 17,  60 => 22,  57 => 12,  54 => 16,  51 => 7,  48 => 9,  45 => 10,  42 => 8,  39 => 10,  36 => 3,  33 => 4,  30 => 2,);
    }
}
