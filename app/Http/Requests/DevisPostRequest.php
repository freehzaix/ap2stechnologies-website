<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DevisPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'service' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'telephone' => 'required|min:10|max:10',
        ];
    }

    public function messages(): array
    {
        return [
            'service.required' => 'Vous devez choisir un service absolument.',
            'nom.required' => 'Le champs nom est requis.',
            'prenom.required' => 'Le champs prénom est requis.',
            'email.required' => 'Le champs mail est requis.',
            'telephone.required' => 'Le champs téléphone est requis.',
            'telephone.min' => 'Vous devez compléter votre numéro jusqu\'à 10 chiffres.',
            'telephone.max' => 'Vous devez réduire votre numéro jusqu\'à 10 chiffres.',
        ];
    }
}
