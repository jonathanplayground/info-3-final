<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/html/themes/demo/pages/materias.htm */
class __TwigTemplate_50820656a2bcb5ffb2177d7be5eba0886ec02e9bf8ac902755f6bedd568c360a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html> 
    <head>
        <link href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/cursos.css");
        echo "\" rel=\"stylesheet\">
        <title>cursos</title>  
    </head>
    
    <body>
    <div>
        <h1>    <b>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Semestres1"] ?? null), "nombre", [], "any", false, false, false, 10), "html", null, true);
        echo "</b> <br> </h1>
        <div class = \"contenedor\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Semestres1"] ?? null), "cursos", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            echo "    
                <div class = \"opcion\">
                <h1>Materia:      ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["curso"], "nombre", [], "any", false, false, false, 14), "html", null, true);
            echo "<br> </h1> 
                    codigo:       ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["curso"], "id_curso", [], "any", false, false, false, 15), "html", null, true);
            echo "<br>
                    creditos:     ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["curso"], "creditos", [], "any", false, false, false, 16), "html", null, true);
            echo "<br>
                    Horas asignadas :";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["curso"], "h_asignado", [], "any", false, false, false, 17), "html", null, true);
            echo "<br>
                    Horas de trabajo autonomo: ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["curso"], "h_autonomo", [], "any", false, false, false, 18), "html", null, true);
            echo "<br>
                <div/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
    
    <div class = \"contenedor\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Cursos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            echo " 
                <div class = \"opcion\">
                    <h2>Materia:      ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["curso"], "nombre", [], "any", false, false, false, 26), "html", null, true);
            echo " <br> </h2>
                    codigo:       ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["curso"], "id_curso", [], "any", false, false, false, 27), "html", null, true);
            echo "<br>
                    creditos:     ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["curso"], "creditos", [], "any", false, false, false, 28), "html", null, true);
            echo "<br>
                    Horas asignadas :";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["curso"], "h_asignado", [], "any", false, false, false, 29), "html", null, true);
            echo "<br>
                    Horas de trabajo autonomo: ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["curso"], "h_autonomo", [], "any", false, false, false, 30), "html", null, true);
            echo "<br>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>
    
        
    <div class = \"boton\">
        <h3> <a href = \"/semestres/\">";
        // line 37
        echo "atras";
        echo "</a></h3>
    </div>
    
    </body>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/demo/pages/materias.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 37,  125 => 33,  116 => 30,  112 => 29,  108 => 28,  104 => 27,  100 => 26,  93 => 24,  88 => 21,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  56 => 12,  51 => 10,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html> 
    <head>
        <link href=\"{{ 'assets/css/cursos.css'|theme }}\" rel=\"stylesheet\">
        <title>cursos</title>  
    </head>
    
    <body>
    <div>
        <h1>    <b>{{Semestres1.nombre}}</b> <br> </h1>
        <div class = \"contenedor\">
            {% for curso in Semestres1.cursos %}    
                <div class = \"opcion\">
                <h1>Materia:      {{curso.nombre}}<br> </h1> 
                    codigo:       {{curso.id_curso}}<br>
                    creditos:     {{curso.creditos}}<br>
                    Horas asignadas :{{curso.h_asignado}}<br>
                    Horas de trabajo autonomo: {{curso.h_autonomo}}<br>
                <div/>
            {% endfor %}
    </div>
    
    <div class = \"contenedor\">
            {% for curso in Cursos %} 
                <div class = \"opcion\">
                    <h2>Materia:      {{curso.nombre}} <br> </h2>
                    codigo:       {{curso.id_curso}}<br>
                    creditos:     {{curso.creditos}}<br>
                    Horas asignadas :{{curso.h_asignado}}<br>
                    Horas de trabajo autonomo: {{curso.h_autonomo}}<br>
                </div>
            {% endfor %}
    </div>
    
        
    <div class = \"boton\">
        <h3> <a href = \"/semestres/\">{{ 'atras' }}</a></h3>
    </div>
    
    </body>", "/var/www/html/themes/demo/pages/materias.htm", "");
    }
}
