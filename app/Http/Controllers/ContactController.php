<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class ContactController extends Controller{

    public function index(){

        $contacts = Contact::all()->sortBy('name');

        return view('contact/index')->with('contacts', $contacts);
    }

    public function create(){

        return view('contact/create');
    }

    public function store(ContactRequest $request){

        /*$rules = [
            'name'=> ['required'],
            'telephone'=> ['required'],
            'email'=>['nullable', 'email']
        ];

        $messages = [
            'name.required'=> "Por favor, digite o seu nome",
            'telephone.required'=> "Por favor, digite o seu número de telefone",
            'email.email'=> "Por favor, digite um email válido"
        ];

        $validatedData = $request->validate($rules, $messages);*/

        $urlSlug = $this->setURL($request->name);
        $contactInfo = [
            "name" => $request->name,
            "telephone" => $request->telephone,
            "email" => $request->email,
            "url" => $urlSlug
        ];

        $contact = Contact::create($contactInfo);

        return redirect()->action('ContactController@index');
    }

    public function show($url){

        $contact = Contact::where('url', $url)->get();

        if (!empty($contact)) {

            return view('contact/show')->with('contact', $contact);
        } else {

            return redirect()->action('ContactController@index');
        }
    }

    public function edit($url){

        $contact = Contact::where('url', $url)->get();

        return view('contact/edit')->with('contact', $contact);
    }

    public function update(ContactRequest $request, $id){

        $contact = Contact::find($id);

        $contact->url = $contact->name !== $request->name ? $this->setURL($request->name) : $contact->url;
        $contact->name = $request->name;
        $contact->telephone = $request->telephone;
        $contact->email = $request->email;

        $contact->save();

        return redirect()->action('ContactController@index');
    }

    public function destroy($url){

        $contact = Contact::where('url', $url)->delete();

        return redirect()->action('ContactController@index');
    }

    public function remove($id){

        $contact = Contact::where('id', $id)->delete();

        return redirect()->action('ContactController@index');
    }

    private function setURL($url){

        $urlSlug = Str::slug($url);
        $contacts = Contact::all();
        $cont = 0;

        foreach ($contacts as $contact){

            if($urlSlug == Str::slug($contact->name)){

                $cont++;
            }
        }

        $urlSlug = $cont > 0 ? $urlSlug . "-" . $cont : $urlSlug;

        return $urlSlug;
}

}
