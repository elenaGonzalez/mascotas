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
        // line 47
        echo " 
     ";
        // line 48
        $this->displayBlock('titulo', $context, $blocks);
        // line 49
        echo "     ";
        $this->displayBlock('body', $context, $blocks);
        // line 55
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
        echo "         <div class=\"hero-unit badge-warning\">
            <div class=\"header-logo text-center\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/img/perrogato.jpg"), "html", null, true);
        // line 16
        echo "\"/><h1 class=\"text-center bar\">Sistema Mascotas</h1></div></div>
  
  <div class=\"row-fluid\">
  <div class=\"span12\">
      <div class=\"navbar navbar-fixed-top navbar-inner\">
        <div class=\"navbar-inner\">
           <div class=\"container-fluid\">
           <div class=\"row-fluid\">
               <ul>
                  <div class=\"span2\"><a class=\"brand\"><href=\"#\">Sistema Mascotas</a></div>
                  <div class=\"span2\"><li class=\"brand\"><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_publicacion"), "html", null, true);
        echo "\">Ver las Publicaciones</a></li></div>
                  <div class=\"span2\"><li class=\"brand\"> 
                         <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_publicacionNew"), "html", null, true);
        echo "\">Realizar una Publicacion</li></div>
                  <div class=\"span2\"><li class=\"brand\">
                          <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_mascotaNew"), "html", null, true);
        echo "\">Agregar a tu mascota</a>
                   </li></div>
                  <div class=\"span2\"><li class=\"brand\">
                    ";
        // line 33
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo " 
                        Registrarse
                    ";
        } else {
            // line 36
            echo "                         <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registro"), "html", null, true);
            echo "\">Registrarse</a>
                    ";
        }
        // line 37
        echo "</a></li></div>

               </ul>
            </div>
      </div>
   </div>
   </div>
  </div>
  
        ";
    }

    // line 48
    public function block_titulo($context, array $blocks = array())
    {
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "     <div class=\"span10 text-center\">
    </div>
      <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/js/jquery-1.10.1.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 53
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
        return array (  157 => 53,  153 => 52,  149 => 50,  146 => 49,  141 => 48,  128 => 37,  122 => 36,  116 => 33,  110 => 30,  105 => 28,  100 => 26,  88 => 16,  86 => 14,  83 => 13,  80 => 12,  74 => 7,  67 => 6,  61 => 5,  53 => 55,  50 => 49,  48 => 48,  45 => 47,  43 => 12,  36 => 9,  34 => 6,  30 => 5,  24 => 1,);
    }
}
