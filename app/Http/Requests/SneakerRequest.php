<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SneakerRequest extends FormRequest
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
        "img"=> "required",
        "name"=> "required",
        "category"=> "required",
        "price"=> "required",
        "size"=> "required",
        ];
    }
    public function messages(){
        return ['img.required'=>"Le tue sneakers sono invisibili? Inserisci un'immagine.",'name.required'=>"Sembra che le tue sneakers non abbiano un nome. Devi inserire il nome delle tue sneakers.",'category'=>"Indica la categoria della tua sneakers.",'price'=>"Vorresti regalare la tua sneakers? Inserisci un prezzo!",'size'=>"Non esiste un numero adatto a tutti, inserisci il numero."];
    }
}
