<?php

/* MascotasMascotasBundle:Publicacion:edit.html.twig */
class __TwigTemplate_dfb238440862f9e19dd9fc1dcfe65eb0 extends Twig_Template
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
        echo "<div class=\"text-center\">
    <h1>Publicacion edit</h1>

    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <p>
            <button type=\"submit\">Edit</button>
        </p>
    </form>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <form action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Publicacion:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  113 => 40,  76 => 24,  63 => 21,  59 => 20,  152 => 50,  110 => 30,  100 => 26,  34 => 6,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 51,  71 => 19,  38 => 4,  177 => 65,  165 => 64,  160 => 53,  135 => 47,  126 => 45,  114 => 42,  84 => 26,  70 => 29,  67 => 24,  61 => 21,  94 => 22,  89 => 20,  85 => 25,  75 => 23,  68 => 22,  56 => 9,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 27,  78 => 34,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 52,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 28,  91 => 41,  62 => 22,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 23,  69 => 25,  47 => 6,  40 => 4,  37 => 3,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 37,  123 => 47,  120 => 45,  115 => 43,  111 => 37,  108 => 37,  101 => 34,  98 => 31,  96 => 31,  83 => 13,  74 => 30,  66 => 23,  55 => 19,  52 => 15,  50 => 18,  43 => 9,  41 => 5,  35 => 3,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 49,  147 => 58,  144 => 48,  141 => 51,  133 => 55,  130 => 41,  125 => 36,  122 => 43,  116 => 33,  112 => 53,  109 => 41,  106 => 36,  103 => 37,  99 => 46,  95 => 31,  92 => 35,  86 => 39,  82 => 22,  80 => 25,  73 => 19,  64 => 17,  60 => 22,  57 => 13,  54 => 17,  51 => 14,  48 => 48,  45 => 47,  42 => 8,  39 => 10,  36 => 7,  33 => 4,  30 => 5,);
    }
}
