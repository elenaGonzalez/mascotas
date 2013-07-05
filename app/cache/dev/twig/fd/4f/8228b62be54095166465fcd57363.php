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
                <th class=\"text-center\">Publicacion Nro</th>
                <th class=\"text-center\">Usuario</th>
                <th class=\"text-center\">Tipo</th>
                <th class=\"text-center\">Fechapublicacion</th>
                <th class=\"text-center\">Aviso</th>
                <th class=\"text-center\">Foto</th>
                <th class=\"text-center\">Contacto</th>
            </tr>
            <tr>
                <td class=\"text-center\"> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                <td class=\"text-center\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "usuario"), "html", null, true);
        echo "</td>
                <td class=\"text-center\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipo"), "html", null, true);
        echo "</td>
                <td class=\"text-center\">";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechapublicacion"), "d/m/Y"), "html", null, true);
        echo "</td>
                <td class=\"text-center\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aviso"), "html", null, true);
        echo "</td>
                <td class=\"text-center\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "webpath")), "html", null, true);
        echo "\" alt=\"Zelda!\">  </td>
                <td class=\"text-center\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contacto"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    ";
        // line 28
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 29
            echo "        <div>
            ";
            // line 30
            $this->env->loadTemplate("MascotasMascotasBundle:Comentario:index.html.twig")->display(array_merge($context, array("entities" => (isset($context["comentarios"]) ? $context["comentarios"] : $this->getContext($context, "comentarios")))));
            // line 31
            echo "              
            ";
            // line 32
            $this->displayBlock('paginador', $context, $blocks);
            // line 43
            echo "        </div>
    ";
        }
        // line 45
        echo "    
    ";
        // line 46
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 47
            echo "        <div align=\"center\">
             ";
            // line 48
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("MascotasMascotasBundle:Comentario:new", array("publicacion_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), array());
            // line 49
            echo "        </div>
    ";
        } else {
            // line 51
            echo "        <div class=\"text-center\">
            <h5>Si desea realizar un comentario<a class=\"brand\">
                    <a href= \"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("_target_path" => "publicacion")), "html", null, true);
            echo "\">Ingresar</a></h5>
            <h5>Si Todavía no estás registrado<a href= \"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registro"), "html", null, true);
            echo "\">
                    <i class=\"icon-pencil\"></i>Registrarse</a></h4>
        </div>
    ";
        }
        // line 58
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 59
            echo "        <div>
            <ul class=\"record_actions\">
                <li>
                    <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion"), "html", null, true);
            echo "\">vover a la Lista</a>
                </li>
                <li>
                    <form action=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                        ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
            echo "
                        <button type=\"submit\">Borrar</button>
                    </form>
                </li>
            </ul>
    </div>
    ";
        }
        // line 74
        echo " ";
    }

    // line 32
    public function block_paginador($context, array $blocks = array())
    {
        // line 33
        echo "            <div class=\"pagination\">
                <ul>
                    <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">Primero</a></li>
                    <li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "comentario_nro_pagina" => ((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) - 1))), "html", null, true);
        echo "\">Anterior</a></li>
                    <li><a href=\"#\" class=\"disabled\">";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "comentario_nro_pagina" => ((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) + 1))), "html", null, true);
        echo "\">Siguiente</a></li>
                    <li><a href=\"";
        // line 39
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
        return array (  187 => 39,  183 => 38,  179 => 37,  175 => 36,  171 => 35,  167 => 33,  164 => 32,  160 => 74,  150 => 67,  145 => 65,  139 => 62,  134 => 59,  131 => 58,  124 => 54,  120 => 53,  116 => 51,  112 => 49,  110 => 48,  107 => 47,  105 => 46,  102 => 45,  98 => 43,  96 => 32,  93 => 31,  91 => 30,  88 => 29,  86 => 28,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  39 => 4,  36 => 3,  30 => 2,);
    }
}
