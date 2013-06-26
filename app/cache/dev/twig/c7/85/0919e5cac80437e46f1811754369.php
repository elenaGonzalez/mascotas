<?php

/* ::base.html.twig */
class __TwigTemplate_c7850919e5cac80437e46f1811754369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'titulo' => array($this, 'block_titulo'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
    <html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\" />
        <title class=\"h1\">";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo " ";
        $this->displayBlock('menu', $context, $blocks);
        // line 44
        echo "     ";
        $this->displayBlock('titulo', $context, $blocks);
        // line 45
        echo "     ";
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "      </div>
      </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " <LINK href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <LINK href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"></a>
        ";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "         <div class=\"badge-warning\">
            <div class=\"header-logo text-center\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/img/perrogato.jpg"), "html", null, true);
        // line 16
        echo "\" size=\"10%\"/><h1 class=\"text-center bar\">Sistema Mascotas</h1></div></div>
        ";
    }

    // line 18
    public function block_menu($context, array $blocks = array())
    {
        echo "   
  <div class=\"container-fluid\">
      <div class=\"row-fluid\">          
    <div class=\"span2\">
      <ul class=\"nav nav-list\">
        <li class=\"nav-header\">
          Menu
        </li>
        <li class=\"active\">
             <a href=\"#\">Inicio</a>
        </li>
        <li>
            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_publicacion"), "html", null, true);
        echo "\">Ver las Publicaciones</a>
        </li>
        <li>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_publicacionNew"), "html", null, true);
        echo "\">Realizar una Publicacion</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_mascotaNew"), "html", null, true);
        echo "\">Agregar a tu mascota</a>
        </li>
        <li>
            <a href=\"#\"></a>
        </li>
       </ul>
     </div>
  ";
    }

    // line 44
    public function block_titulo($context, array $blocks = array())
    {
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "     <div class=\"span10\">
    </div>
      <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/js/jquery-1.10.1.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 49,  147 => 48,  143 => 46,  140 => 45,  135 => 44,  123 => 36,  117 => 33,  111 => 30,  95 => 18,  90 => 16,  88 => 14,  85 => 13,  82 => 12,  76 => 7,  69 => 6,  63 => 5,  55 => 51,  52 => 45,  49 => 44,  46 => 18,  44 => 12,  37 => 9,  35 => 6,  31 => 5,  25 => 1,);
    }
}
