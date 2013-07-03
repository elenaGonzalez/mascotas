<?php

/* MascotasMascotasBundle:Publicacion:show.html.twig */
class __TwigTemplate_fd4f8228b62be54095166465fcd57363 extends Twig_Template
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
        echo "<div class=\"text-center\" style=\"align:center\">
    <h1>Publicacion</h1>
    <table class=\"container record_properties table-striped table-bordered text-center\">
        <tbody>
            <tr>
                <th class=\"text-center\">Id</th>
                <th class=\"text-center\">Usuario</th>
                <th class=\"text-center\">Tipo</th>
                <th class=\"text-center\">Fechapublicacion</th>
                <th class=\"text-center\">Aviso</th>
                <th class=\"text-center\">Foto</th>
                 <th class=\"text-center\">Contacto</th>
               </tr>
            <tr><td class=\"text-center\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
               <td class=\"text-center\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "usuario"), "html", null, true);
        echo "</td>
               <td class=\"text-center\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipo"), "html", null, true);
        echo "</td>
               <td class=\"text-center\">";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechapublicacion"), "d/m/Y"), "html", null, true);
        echo "</td>
               <td class=\"text-center\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aviso"), "html", null, true);
        echo "</td>
               <td class=\"text-center\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "html", null, true);
        echo "</td>
               <td class=\"text-center\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contacto"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div>
        ";
        // line 28
        $this->env->loadTemplate("MascotasMascotasBundle:Comentario:index.html.twig")->display(array_merge($context, array("entities" => (isset($context["comentarios"]) ? $context["comentarios"] : $this->getContext($context, "comentarios")))));
        // line 29
        echo "    </div>
       ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 31
            echo "        <div>
             <ul class=\"record_actions\">
                 <li>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion"), "html", null, true);
            echo "\">vover a la Lista</a>
                    </li>
                  <li><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Editar</a>
                   </li>
                  <li>
                     <form action=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" method=\"post\">
                     <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                        ";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
            echo "
                    <button type=\"submit\">Borrar</button>
                     </form>
                </li>
            </ul>
    </div>
    ";
        }
        // line 48
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 49
            echo "       <div align=\"center\">
         ";
            // line 50
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MascotasMascotasBundle:Comentario:new", array("publicacion_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), array());
            // line 51
            echo "       </div>
    ";
        } else {
            // line 53
            echo "    <div class=\"text-center\">
        <h5>Si desea realizar un comentario<a class=\"brand\">
          <a href= \"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html", null, true);
            echo "\">Comentar</a></h5>
     </div>
    ";
        }
        // line 58
        echo "    ";
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Publicacion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 51,  81 => 34,  65 => 4,  58 => 20,  77 => 25,  53 => 18,  20 => 1,  172 => 57,  167 => 56,  146 => 51,  118 => 33,  102 => 35,  90 => 34,  76 => 8,  63 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 55,  128 => 53,  119 => 49,  107 => 51,  71 => 27,  38 => 4,  177 => 65,  165 => 64,  160 => 60,  135 => 47,  126 => 45,  114 => 41,  84 => 31,  70 => 23,  67 => 24,  61 => 18,  94 => 22,  89 => 28,  85 => 31,  75 => 4,  68 => 18,  56 => 12,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 36,  78 => 28,  46 => 17,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 55,  156 => 58,  151 => 52,  142 => 59,  138 => 58,  136 => 56,  121 => 46,  117 => 44,  105 => 41,  91 => 41,  62 => 21,  49 => 14,  24 => 3,  25 => 4,  19 => 1,  79 => 28,  72 => 4,  69 => 26,  47 => 10,  40 => 6,  37 => 5,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 52,  120 => 40,  115 => 46,  111 => 44,  108 => 37,  101 => 39,  98 => 31,  96 => 32,  83 => 30,  74 => 28,  66 => 22,  55 => 15,  52 => 52,  50 => 18,  43 => 9,  41 => 9,  35 => 3,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 58,  173 => 74,  168 => 66,  164 => 55,  162 => 62,  154 => 53,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 50,  116 => 48,  112 => 4,  109 => 43,  106 => 41,  103 => 37,  99 => 40,  95 => 36,  92 => 33,  86 => 39,  82 => 13,  80 => 29,  73 => 24,  64 => 23,  60 => 13,  57 => 16,  54 => 19,  51 => 19,  48 => 17,  45 => 6,  42 => 8,  39 => 10,  36 => 7,  33 => 4,  30 => 2,);
    }
}
