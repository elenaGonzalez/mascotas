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
                <th class=\"text-center\">Nro de Aviso</th>
                <th class=\"text-center\">Foto</th>
                <th class=\"text-center\">Avisos</th>
                <th class=\"text-center\">Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "                <tr style=\"central\">
                    <td class=\"text-center\">
                     <div class=\"btn btn-small\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                    <td><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "webpath")), "html", null, true);
            echo "\" alt=\"Zelda!\"alt=\"Zelda!\" width=\"140\" height=\"140\" class=\"img-polaroid\"></td>
                    <td class=\"text-center\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aviso"), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">
                     <div class=\"btn btn-small\"><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">ver detalles</a></td></div>
               </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </tbody>
            </table>
        ";
        // line 32
        $this->displayBlock('paginador', $context, $blocks);
        // line 51
        echo "        </div>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Publicaciones";
    }

    // line 32
    public function block_paginador($context, array $blocks = array())
    {
        // line 33
        echo "            <div class=\"pagination\">
                <ul>                    
                     <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion", array("pagina_actual" => 1)), "html", null, true);
        echo "\">Primero</a></li>
                     ";
        // line 36
        if (((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) <= 1)) {
            // line 37
            echo "                          <li class=\"disabled\"><a href=\"\">Anterior</a></li>
                     ";
        } else {
            // line 39
            echo "                          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion", array("pagina_actual" => ((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) - 1))), "html", null, true);
            echo "\">Anterior</a></li>
                     ";
        }
        // line 41
        echo "                     <li><a href=\"#\" class=\"disabled\">";
        echo twig_escape_filter($this->env, (isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")), "html", null, true);
        echo "</a></li>
                      ";
        // line 42
        if (((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) >= (isset($context["max_pag"]) ? $context["max_pag"] : $this->getContext($context, "max_pag")))) {
            // line 43
            echo "                          <li class=\"disabled\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion", array("pagina_actual" => (isset($context["max_pag"]) ? $context["max_pag"] : $this->getContext($context, "max_pag")))), "html", null, true);
            echo "\">Siguiente</a></li>
                     ";
        } else {
            // line 45
            echo "                          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion", array("pagina_actual" => ((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) + 1))), "html", null, true);
            echo "\">Siguiente</a></li>
                     ";
        }
        // line 47
        echo "                    <li><a href=\"";
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
        return array (  142 => 47,  136 => 45,  130 => 43,  128 => 42,  123 => 41,  117 => 39,  113 => 37,  111 => 36,  107 => 35,  103 => 33,  100 => 32,  94 => 4,  89 => 51,  87 => 32,  83 => 30,  74 => 27,  69 => 25,  65 => 24,  61 => 23,  57 => 21,  53 => 20,  33 => 4,  30 => 3,);
    }
}
