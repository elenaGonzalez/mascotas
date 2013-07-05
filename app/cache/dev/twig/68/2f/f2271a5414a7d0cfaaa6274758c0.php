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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<title class=\"h1\">";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<div class=\"text-center\" style=\"margin: auto\">
    <h1 class=\"text-info\">Publicaciones</h1>
    <h4>Estas son las Publicaciones</h4>
    <h4>Ayudanos a que estas mascotas puedan volver a sus hogares.</h4>
    <p><br></br></p>
    <table class=\"container table-bordered table-striped\">
        <thead>
            <tr class=\"text-center alert alert-danger\">
                <th class=\"text-center\">Avisos</th>
                <th class=\"text-center\">Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "                <tr style=\"central\">
                    <td class=\"text-center\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aviso"), "html", null, true);
            echo "</td>

                    <td class=\"text-center\">
                     ";
            // line 23
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 24
                echo "                            <div class=\"btn btn-small\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">editar</a></div>
                 ";
            }
            // line 26
            echo "                            <div class=\"btn btn-small\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">ver detalles</a></div>
                    </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </tbody>
            </table>
        ";
        // line 31
        $this->displayBlock('paginador', $context, $blocks);
        // line 42
        echo "        </div>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Publicaciones";
    }

    // line 31
    public function block_paginador($context, array $blocks = array())
    {
        // line 32
        echo "            <div class=\"pagination\">
                <ul>                    
                     <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion", array("pagina_actual" => 1)), "html", null, true);
        echo "\">Primero</a></li>
                     <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion", array("pagina_actual" => ((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) - 1))), "html", null, true);
        echo "\">Anterior</a></li>
                     <li><a href=\"#\" class=\"disabled\">";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")), "html", null, true);
        echo "</a></li>
                     <li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion", array("pagina_actual" => ((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) + 1))), "html", null, true);
        echo "\">Siguiente</a></li>
                    <li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion", array("pagina_actual" => (isset($context["max_pag"]) ? $context["max_pag"] : $this->getContext($context, "max_pag")))), "html", null, true);
        echo "\">Ultimo</a></li>                    
                </ul>                
            </div>
         ";
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
        return array (  122 => 38,  118 => 37,  114 => 36,  110 => 35,  106 => 34,  102 => 32,  99 => 31,  93 => 4,  88 => 42,  86 => 31,  82 => 29,  72 => 26,  66 => 24,  64 => 23,  58 => 20,  55 => 19,  51 => 18,  33 => 4,  30 => 3,);
    }
}
