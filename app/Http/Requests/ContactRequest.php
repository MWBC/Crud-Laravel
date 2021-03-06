<?php

namespace App\Http\Requests;

use App\Models\Contact;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){

        //$contact = Contact::find($this->route('id'));
        //dd($contact);

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){

        return [
            'name'=> ['required', 'min:2'],
            'telephone'=> ['required', 'numeric'],
            'email'=> ['nullable', 'email']
        ];
    }

    public function messages(){

        return ['name.required'=> "Por favor, digite o seu nome",
            'name.min'=> "Por favor, digite um nome válido com pelo menos 2 letras",
            'telephone.required'=> "Por favor, digite o seu número de telefone",
            'telephone.numeric'=> "Por favor, digite apenas números",
            'email.email'=> "Por favor, digite um email válido"
        ];
        //return parent::messages(); // TODO: Change the autogenerated stub
    }

    public function prepareForValidation(){

        $this->merge([
            'name'=> strip_tags($this->name)
        ]);
    }

    //exemplo de método after funcional
    /*public function withValidator($validator){

        $validator->after(function ($validator){

            if($this->input('name') != 'valido'){

                $validator->errors()->add('name', 'nome digitado não é válido');
            }
        });
    }*/
}
