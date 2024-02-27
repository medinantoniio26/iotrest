<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actuator;

class ActuatorsController extends Controller
{
    //consultar todos los actuators
    public function index (){
        return Actuator::paginate();
    }

    //consultar un actuator
    public function show ($id){
        return Actuator::find($id);
    }

    //crear un actuator
    public function store (Request $request){
        $this->validate($request, [ 
            'name' => 'required|unique:actuators',
            'type' => 'required',
            'value' => 'required',
            'date' => 'required',
            'user_id' => 'required',
            'timestamps' => 'required',

        ]);
        $actuator = new Actuator;
        $actuator->fill($request->all());
        $actuator->save();
       return $actuator;
    }

    //actualizar un actuator
    public function update (Request $request, $id){
        $this->validate($request, [ 
            'name' => 'filled|unique:actuators',
        ]);
        $actuator = Actuator::find($id);
        if(!$actuator) return response('',404);
        $actuator->update($request->all());
        $actuator->save();
        return $actuator;
     }

     //eliminar un actuator
    public function destroy ($id){
        $actuator = Actuator::find($id);
        if(!$actuator) return response('',404);
        $actuator->delete();
        return $actuator;
     }
}
