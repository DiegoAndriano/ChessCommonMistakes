<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropiedadRequest extends FormRequest
{

    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = true;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'estado_id' => 'required|exists:estados,id',
            'tipo_transaccion_id' => 'required|exists:tipo_transaccions,id',
            'servicio_id' => 'nullable|exists:servicios,id',
            'tipo_propiedad_id' => 'nullable|exists:tipo_propiedads,id',
            'barrio' => 'nullable|string',
            'moneda' => 'nullable|string',
            'ubicacion' => 'nullable|string',
            'fotos' => 'nullable|string',
            'orientacion' => 'nullable|string',
            'descripcion' => 'nullable|string',
            'precio' => 'nullable|numeric',
            'm2' => 'nullable|numeric',
            'm2_cubiertos' => 'nullable|numeric',
            'ambientes' => 'nullable|numeric',
            'baños' => 'nullable|numeric',
            'antiguedad' => 'nullable|numeric',
            'dormitorios' => 'nullable|numeric',
            'pisos' => 'nullable|numeric',
            'cochera' => 'nullable|numeric',
            'terrazas' => 'nullable|numeric',
            'balcones' => 'nullable|numeric',
            'comedor' => 'nullable|numeric',
            'admite' => 'nullable|boolean',
            'amoblado' => 'nullable|boolean',
            'apto_profesional' => 'nullable|boolean',
            'apto_credito' => 'nullable|boolean',
            'ofrece_financiamiento' => 'nullable|boolean',
            'admite_mascotas' => 'nullable|boolean',
            'admite_niños' => 'nullable|boolean',
        ];
    }
}
