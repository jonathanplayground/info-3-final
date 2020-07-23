<?php 
use Jguerreroz\Sistemadeinformacion\Models\Cursos;use Jguerreroz\Sistemadeinformacion\Models\Semestres;class Cms5f1908f9694b6030815083_dd96f71e56bde29245a88ec90bfb3210Class extends Cms\Classes\PageCode
{


public function onStart()
{
    $this['Semestres1'] = Semestres::where('id',$this->param('id'))->first();
    //$this['Cursos'] = Cursos::orderBy('nombre')->get();
    //$this['Semestres1'] = Semestres::where('id',$this->param('id'))->first();
    //$this['Cursos'] = Cursos::where('id',$this->param('id'))->get();
}
}
