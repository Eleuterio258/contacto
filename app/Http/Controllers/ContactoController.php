<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contacto;


class ContactoController extends Controller
{


    public function allContactos()
    {
        $contactos = Contacto::all();
        return $contactos;
    }



    public function addContacto(Request $request)
    {
        try {
            $contacto = new Contacto();
            $contacto->name = $request->name;
            $contacto->address = $request->address;
            $contacto->phone = $request->phone;
            $contacto->email = $request->email;
            $contacto->description = $request->description;

            $contacto->save();
            return ["message" => "Saved successfully",];
        } catch (\Exception $error) {
            return [
                "message" => "saving error",
                "erro" => $error
            ];
        }
    }




}
