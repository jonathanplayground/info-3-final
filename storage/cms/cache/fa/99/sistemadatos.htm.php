<?php 
use Jguerreroz\Sistemadeinformacion\Models\Cursos;use Jguerreroz\Sistemadeinformacion\Models\Semestres;class Cms5f1908faaae1a026881662_c56150ec1c170fa01bdafbead7dde843Class extends Cms\Classes\PageCode
{
//php


public function onStart()
{
    $this['Semestres1'] = Semestres::orderBy('created_at', 'asc')->get();
    //$this --> indica que es una variable de la pag
    //['Semestre1'] --> nombre de la variable
    // =Semestres --> Modelo implementado
    // :: orderBy(nombre) -> Metodo implementado 'orderBy' campo de referencia para el metodo (´nombre') 
    // -> get()  -> traer datos. //-> first()  -> traer el primer dato
    
    //var_dump($this['Semestres1']);  // devuelve el tipo de variable y contenido.
}
}
