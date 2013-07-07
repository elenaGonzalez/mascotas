<?php

/* MascotasMascotasBundle:Publicacion:show.html.twig */
class __TwigTemplate_fd4f8228b62be54095166465fcd57363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'paginador' => array($this, 'block_paginador'),
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
        echo "Detalle de Publicacion";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"text-center\" style=\"align:center\">
    <h1 class=\"text-info\">Publicación</h1>
    <table class=\"container record_properties table-striped table-bordered text-center\">
        <tbody>
            <tr class=\"text-center alert alert-danger\">
                <th class=\"text-center\">Usuario<i class=\"icon-user\"></i></th>
                <th class=\"text-center\">Tipo de Publicación</th>
                <th class=\"text-center\">Fecha de publicación<i class = \"icon-calendar\" ></i></th>
                <th class=\"text-center\">Aviso</th>
                <th class=\"text-center\"><i class=\"icon-picture\"></i>Foto</th>
                <th class=\"text-center\">Contacto</th>
                 ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 16
            echo "                <th class=\"text-center\">Acciones</th>
                ";
        }
        // line 18
        echo "            </tr>
            <tr>
                <td class=\"text-center\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "usuario"), "html", null, true);
        echo "</td>
                 ";
        // line 21
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipo") == "e")) {
            // line 22
            echo "                <td class=\"text-center\"><strong>Encontrado</strong></td>
                 ";
        } else {
            // line 24
            echo "                <td class=\"text-center\"><strong>Perdido</strong></td>
                 ";
        }
        // line 26
        echo "                <td class=\"text-center\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechapublicacion"), "d/m/Y"), "html", null, true);
        echo "</td>
                <td class=\"text-center\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aviso"), "html", null, true);
        echo "</td>
                <td class=\"text-center\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "webpath")), "html", null, true);
        echo "\" alt=\"Zelda!\"alt=\"Zelda!\" width=\"140\" height=\"140\" class=\"img-rounded\"></td>
                <td class=\"text-center\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contacto"), "html", null, true);
        echo "</td>
                 ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 31
            echo "                 <td class=\"text-center\">
                 <div class=\"btn btn-small\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">editar</a></div>
                ";
        }
        // line 34
        echo "            </tr>
        </tbody>
    </table>
    ";
        // line 37
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 38
            echo "        <div>
            ";
            // line 39
            $this->env->loadTemplate("MascotasMascotasBundle:Comentario:index.html.twig")->display(array_merge($context, array("entities" => (isset($context["comentarios"]) ? $context["comentarios"] : $this->getContext($context, "comentarios")))));
            // line 40
            echo "              
            ";
            // line 41
            $this->displayBlock('paginador', $context, $blocks);
            // line 60
            echo "        </div>
    ";
        }
        // line 62
        echo "    
    ";
        // line 63
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 64
            echo "        <div align=\"center\">
             ";
            // line 65
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MascotasMascotasBundle:Comentario:new", array("publicacion_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), array());
            // line 66
            echo "        </div>
    ";
        }
        // line 68
        echo "    ";
        if ((!$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 69
            echo "        <div class=\"text-center\">
            <h5>Si desea realizar un comentario<a class=\"brand\">
                    <a href= \"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("_target_path" => "publicacion")), "html", null, true);
            echo "\">Ingresar</a></h5>
            <h5>Si Todavía no estás registrado<a href= \"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registro"), "html", null, true);
            echo "\">
                    <i class=\"icon-pencil\"></i>Registrarse</a></h4>
        </div>
    ";
        }
        // line 76
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 77
            echo "        <div>
            <ul class=\"record_actions\">
                <li>
                    <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion"), "html", null, true);
            echo "\">vover a la Lista</a>
                </li>
                <li>
                    <form action=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                        ";
            // line 85
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
            echo "
                        <button type=\"submit\">Borrar</button>
                    </form>
                </li>
            </ul>
    </div>
    ";
        }
        // line 92
        echo " ";
    }

    // line 41
    public function block_paginador($context, array $blocks = array())
    {
        // line 42
        echo "            <div class=\"pagination\">
                <ul>
                    <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">Primero</a></li>
                    ";
        // line 45
        if (((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) <= 1)) {
            // line 46
            echo "                        <li class=\"disabled\"><a href=\"#\">Anterior</a></li>
                    ";
        } else {
            // line 48
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "comentario_nro_pagina" => ((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) - 1))), "html", null, true);
            echo "\">Anterior</a></li>
                    ";
        }
        // line 50
        echo "                      <li><a href=\"#\" class=\"disabled\">";
        echo twig_escape_filter($this->env, (isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")), "html", null, true);
        echo "</a></li>
                     ";
        // line 51
        if (((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) >= (isset($context["max_pag"]) ? $context["max_pag"] : $this->getContext($context, "max_pag")))) {
            echo " 
                        <li class=\"disabled\"><a href=\"#\">Siguiente</a></li>
                    ";
        } else {
            // line 54
            echo "                         <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "comentario_nro_pagina" => ((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) + 1))), "html", null, true);
            echo "\">Siguiente</a></li>
                    ";
        }
        // line 55
        echo " 
                    <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "comentario_nro_pagina" => (isset($context["max_pag"]) ? $context["max_pag"] : $this->getContext($context, "max_pag")))), "html", null, true);
        echo "\">Ultimo (";
        echo twig_escape_filter($this->env, (isset($context["max_pag"]) ? $context["max_pag"] : $this->getContext($context, "max_pag")), "html", null, true);
        echo ")</a></li>
                </ul>
            </div>
            ";
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
        return array (  232 => 56,  229 => 55,  223 => 54,  217 => 51,  212 => 50,  206 => 48,  202 => 46,  200 => 45,  196 => 44,  192 => 42,  189 => 41,  185 => 92,  175 => 85,  170 => 83,  164 => 80,  159 => 77,  156 => 76,  149 => 72,  145 => 71,  141 => 69,  138 => 68,  134 => 66,  132 => 65,  129 => 64,  127 => 63,  124 => 62,  120 => 60,  118 => 41,  115 => 40,  113 => 39,  110 => 38,  108 => 37,  103 => 34,  98 => 32,  95 => 31,  93 => 30,  89 => 29,  85 => 28,  81 => 27,  76 => 26,  72 => 24,  68 => 22,  66 => 21,  62 => 20,  58 => 18,  54 => 16,  52 => 15,  39 => 4,  36 => 3,  30 => 2,);
    }
}
