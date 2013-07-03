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
        return array (  145 => 58,  139 => 55,  135 => 53,  131 => 51,  129 => 50,  126 => 49,  123 => 48,  113 => 41,  108 => 39,  102 => 36,  97 => 34,  92 => 31,  90 => 30,  87 => 29,  85 => 28,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  38 => 4,  35 => 3,  29 => 2,);
    }
}
