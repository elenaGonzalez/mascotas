<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_223ab3d8a0d3cbc7445583ea3b8ad456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html", null, true);
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  102 => 17,  90 => 32,  97 => 35,  58 => 17,  81 => 34,  113 => 43,  76 => 17,  63 => 21,  59 => 13,  152 => 50,  110 => 22,  100 => 26,  34 => 6,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 51,  71 => 19,  38 => 6,  177 => 65,  165 => 64,  160 => 53,  135 => 47,  126 => 45,  114 => 46,  84 => 29,  70 => 25,  67 => 26,  61 => 12,  94 => 34,  89 => 32,  85 => 25,  75 => 23,  68 => 26,  56 => 11,  87 => 20,  21 => 2,  26 => 9,  93 => 43,  88 => 31,  78 => 26,  46 => 8,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 52,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 41,  62 => 23,  49 => 13,  24 => 1,  25 => 35,  19 => 1,  79 => 18,  72 => 27,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 37,  123 => 47,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 48,  98 => 31,  96 => 31,  83 => 36,  74 => 30,  66 => 24,  55 => 16,  52 => 14,  50 => 18,  43 => 11,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 49,  147 => 58,  144 => 48,  141 => 51,  133 => 55,  130 => 41,  125 => 49,  122 => 43,  116 => 33,  112 => 53,  109 => 53,  106 => 36,  103 => 38,  99 => 46,  95 => 35,  92 => 33,  86 => 30,  82 => 28,  80 => 25,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 17,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
