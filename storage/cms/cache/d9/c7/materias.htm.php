<?php 
use Jguerreroz\Sistemadeinformacion\Models\Cursos;use Jguerreroz\Sistemadeinformacion\Models\Semestres;class Cms5f1908fbda3ed469957798_909e02edf7f9ceb0df1e3c8826513182Class extends Cms\Classes\PageCode
{


public function onStart()
{
    $this['Semestres1'] = Semestres::where('id',$this->param('id'))->first();
    $this['Cursos'] = Cursos::orderBy('id_semestre')->get();
}
}
