<?php

/* ::base.html.twig */
class __TwigTemplate_781ac5861860be6c3bd38945e2939fcd extends Twig_Template
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
            'saludo' => array($this, 'block_saludo'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title class=\"h1\">";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
  ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "     ";
        $this->displayBlock('titulo', $context, $blocks);
        // line 54
        echo "     ";
        $this->displayBlock('saludo', $context, $blocks);
        // line 65
        echo "                       
     ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "                        </div>
                    </div>
                </body>
            </html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " <LINK href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <LINK href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"></a>
        ";
    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        // line 14
        echo "        <div class=\"hero-unit badge-warning\">
            <div class=\"header-logo text-center\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/img/perrogato.jpg"), "html", null, true);
        // line 17
        echo "\"/><h1 class=\"text-center bar\">Sistema Mascotas</h1></div></div>

                <div class=\"row-fluid\">
                    <div class=\"span12\">
                        <div class=\"navbar navbar-fixed-top navbar-inner\">
                            <div class=\"navbar-inner\">
                                <div class=\"container-fluid\">
                                    <div class=\"row-fluid\">
                                        <ul>
                                            <div class=\"span2\"><li class=\"brand\"><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion"), "html", null, true);
        echo "\"><i class=\"icon-home icon-white\"></i>Sistema Mascotas</a></div>
                                            <div class=\"span2\"><li class=\"brand\"><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_new"), "html", null, true);
        echo "\">Realizar una Publicacion</a></li></div>
                                            <div class=\"span2\"><li class=\"brand\">
                                                    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mascota_new"), "html", null, true);
        echo "\">Agregar a tu mascota</a>
                                                </li></div>
                  ";
        // line 31
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 32
            echo "                                            <div class=\"span2\">     
                                                <li class=\"brand\">
                                                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
            echo "\">Salir</a>
                                                    </a></li></div>
                    ";
        }
        // line 37
        echo "                      ";
        if ((!$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 38
            echo "                                            <div class=\"span2\"><li class=\"brand\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html", null, true);
            echo "\">Ingresar</a></li></div>
                      ";
        }
        // line 39
        echo " 
                                                    ";
        // line 40
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 41
            echo "                                                    <div class=\"span2\">     
                                                        <li class=\"brand\">
                                                          <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_panel", array("usuario" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"))), "html", null, true);
            echo "\">Panel de control</a></li></div>                                                                         
 
                                            </div>
                                            ";
        }
        // line 47
        echo "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
  ";
    }

    // line 53
    public function block_titulo($context, array $blocks = array())
    {
    }

    // line 54
    public function block_saludo($context, array $blocks = array())
    {
        // line 55
        echo "                         ";
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 56
            echo "                                <div class=\"btn-group text-right\">
                                    <a class=\"btn btn-primary text-right\" href=\"#\"><i class=\"icon-user\"></i>Hola ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</a>
                                </div>
                        ";
        } else {
            // line 60
            echo "                                 <div class=\"btn-group text-right\">
                                 <a class=\"btn btn-primary text-right\" href=\"#\"><i class=\"icon-user\"></i>Hola Anónimo</a>
                                </div>
                        ";
        }
        // line 64
        echo "       ";
    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        // line 67
        echo "                                <div class=\"span10 text-center\">
                                </div>
      ";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "      ";
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        echo "   
                                <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/js/jquery-1.10.1.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/js/bootstrap.js"), "html", null, true);
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
        return array (  221 => 72,  217 => 71,  213 => 70,  208 => 69,  204 => 74,  202 => 69,  198 => 67,  195 => 66,  191 => 64,  185 => 60,  179 => 57,  176 => 56,  173 => 55,  170 => 54,  165 => 53,  156 => 47,  149 => 43,  145 => 41,  143 => 40,  140 => 39,  134 => 38,  131 => 37,  125 => 34,  121 => 32,  119 => 31,  114 => 29,  109 => 27,  105 => 26,  92 => 15,  86 => 13,  80 => 8,  73 => 7,  67 => 6,  59 => 75,  54 => 65,  51 => 54,  48 => 53,  46 => 13,  39 => 10,  37 => 7,  26 => 1,  142 => 47,  136 => 45,  130 => 43,  128 => 42,  123 => 41,  117 => 39,  113 => 37,  111 => 36,  107 => 35,  103 => 33,  100 => 32,  94 => 17,  89 => 14,  87 => 32,  83 => 30,  74 => 27,  69 => 25,  65 => 24,  61 => 23,  57 => 66,  53 => 20,  33 => 6,  30 => 3,);
    }
}
