<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorLogico extends Controller
{

	public function index(Request $Request)
	{
		$nombre=$Request->input('nombre');
		$apellido=$Request->input('apellido');
		$edad=$Request->input('edad');
		$sexo=$Request->input('sexo');
		$telefono=$Request->input('telefono');	
		$curso=$Request->input('curso');

		
		$informacion=[];
    
    	$informacion[]=['nombre'=>'antony',
    	'apellido'=>'calderon',
    	'edad'=>'28',
    	'sexo'=>'masculino',
    	'telefono'=>'3219161112',
    	'curso'=>'302'];

    	$informacion[]=['nombre'=>'antony',
    	'apellido'=>'torres',
    	'edad'=>'27',
    	'sexo'=>'masculino',
    	'telefono'=>'3219161112',
    	'curso'=>'302'];

    	$informacion[]=['nombre'=>'jhony',
    	'apellido'=>'sanchez',
    	'edad'=>'26',
    	'sexo'=>'masculino',
    	'telefono'=>'3219160000',
    	'curso'=>'301'];

        $informacion[]=['nombre'=>'yuri',
        'apellido'=>'cardenas',
        'edad'=>'50',
        'sexo'=>'femenino',
        'telefono'=>'3214785688',
        'curso'=>'302'];

        $informacion[]=['nombre'=>'alex',
        'apellido'=>'galindo',
        'edad'=>'15',
        'sexo'=>'masculino',
        'telefono'=>'3215478895',
        'curso'=>'302'];

        $informacion[]=['nombre'=>'karen',
        'apellido'=>'pulido',
        'edad'=>'19',
        'sexo'=>'femenino',
        'telefono'=>'321875589',
        'curso'=>'301'];

        $informacion[]=['nombre'=>'andres',
        'apellido'=>'rojas',
        'edad'=>'28',
        'sexo'=>'masculino',
        'telefono'=>'3219458756',
        'curso'=>'302'];

        $informacion[]=['nombre'=>'camilo',
        'apellido'=>'carvajal',
        'edad'=>'30',
        'sexo'=>'masculino',
        'telefono'=>'3293524878',
        'curso'=>'302'];

        $informacion[]=['nombre'=>'marcela',
        'apellido'=>'castro',
        'edad'=>'21',
        'sexo'=>'femenino',
        'telefono'=>'3219161113',
        'curso'=>'301'];

        $informacion[]=['nombre'=>'david',
        'apellido'=>'portilla',
        'edad'=>'20',
        'sexo'=>'masculino',
        'telefono'=>'3219121025',
        'curso'=>'301'];


$datos=[];
$data=[];
    
  
    foreach ($informacion as $as => $informacion) //   matriz principal como nueva variable "value" y esa contiene el indice del vector. y "conteo" contiene el otro vector interno
    {
        foreach ($informacion as $key => $value)
        {
            if($value==$nombre or $value==$apellido or $value==$edad or $value==$sexo or $value==$telefono or $value==$curso)
            {

                $data[]=
                [
                    "NOMBRE"=>$informacion['nombre'],
                    "APELLIDO"=>$informacion['apellido'],
                    "EDAD"=>$informacion['edad'],
                    "SEXO"=>$informacion['sexo'],
                    "TELEFONO"=>$informacion['telefono'],
                    "CURSO"=>$informacion['curso'],
                ];         
            }
        }
    }	  

     $datos=
     [
        'resp'=>$data
     ];
        return view('table',$datos);

	}

}

    //

