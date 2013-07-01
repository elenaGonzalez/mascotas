<?php

/* MascotasMascotasBundle:Publicacion:index.html.twig */
class __TwigTemplate_682ff2271a5414a7d0cfaaa6274758c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
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
        echo " <title class=\"h1\">";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<div class=\"text-center\" style=\"margin: auto\">
    <h1 class=\"text-info\">Publicaciones</h1>
    <h4>Estas son las Publicaciones</h4>
    <h4>Ayudanos a que estas mascotas puedan volver a sus hogares.</h4>
    <p><br></br></p>
    <table class=\"container records_list table-striped\" style=\"alignment:central\">
        <thead>
            <tr class=\"text-center\">
                <th class=\"text-center\">Id</th>
                <th class=\"text-center\">Usuario</th>
                <th class=\"text-center\">Tipo</th>
                <th class=\"text-center\">Fecha de publicacion</th>
                <th class=\"text-center\">Aviso</th>
                <th class=\"text-center\">Foto</th>
                <th class=\"text-center\">Contacto</th>
                <th class=\"text-center\">Acciones</th>
                <th class=\"text-center\">Mis comentarios</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "            <tr style=\"central\">
                <td class=\"text-center\"><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td class=\"text-center\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "usuario"), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipo"), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 30
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechapublicacion")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechapublicacion"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"text-center\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aviso"), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contacto"), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                <ul>
                     ";
            // line 36
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 37
                echo "                    <li class=\"text-center\">
                        <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">ver</a>
                    </li>
                    <li class=\"text-center\">
                        <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">editar</a>
                    </li>
                </ul>
                 ";
            }
            // line 45
            echo "                    <li class=\"text-center\">
                         <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comentarioNew", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">comentar</a>
                    </li>
                    <li class=\"text-center\">
                         <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("miscomentarios", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">mis comentarios</a>
                    </li>
                 </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "      </tbody>
    </table>

        <ul>
        <li>
           
        </li>
    </ul>
</div>
    ";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Publicaciones";
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Publicacion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 4,  137 => 55,  125 => 49,  119 => 46,  116 => 45,  109 => 41,  103 => 38,  100 => 37,  98 => 36,  92 => 33,  88 => 32,  84 => 31,  78 => 30,  74 => 29,  70 => 28,  64 => 27,  61 => 26,  57 => 25,  32 => 4,  29 => 3,);
    }
}
