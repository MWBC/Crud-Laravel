<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller{

    public function index(){

        $contacts = Contact::all();

        return view('contact/index')->with('contacts', $contacts);
    }

    public function create(){

        return view('contact/create');
    }

    public function store(Request $request){

        $urlSlug = $this->setURL($request->name);
        $contactInfo = [
            "name" => $request->name,
            "telephone" => $request->telephone,
            "email" => $request->email,
            "url" => $urlSlug
        ];

        $contact = Contact::create($contactInfo);

        return redirect()->action('ContactController@index');
        /*$contact = new Contact;

        $contact->name = $request->name;
        $contact->telephone = $request->telephone;
        $contact->email = $request->email;
        $contact->save();*/
    }

    public function show(){


    }

    private function setURL($url){

        $urlSlug = Str::slug($url);
        $contacts = Contact::all();
        $cont = 0;

        foreach ($contacts as $contact){

            if($urlSlug == $contact->url){

                $cont++;
            }
        }

        $urlSlug = $cont > 0 ? $urlSlug . "-" . $cont : $urlSlug;

        return $urlSlug;
    }
}
