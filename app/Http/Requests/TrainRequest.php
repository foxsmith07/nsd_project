<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainRequest extends FormRequest
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
            'number' => 'required|max:3',
            'trip' => 'required|min:4|max:7',
            'location' => 'required|min:3',
            'next_trip' => 'required|min:4|max:7',
            'speed' => 'required|max:3',
            'users' => 'required|max:3',
        ];
    }

    public function messages()
    {
        return [
            'number.required' => 'Train number is required',
            'number.max' => 'Train number must to be max 3 number',
            'trip.required' => 'Trip is required',
            'trip.min' => 'Trip number is a number with 4 to 7 numbers',
            'trip.max' => 'Trip number is a number with 4 to 7 numbers',
            'location.required' => 'Location is required',
            'location.max' => 'Location must to be min 3 characters',
            'next_trip.required' => 'next_Trip is required',
            'next_trip.min' => 'Next trip number is a number with 4 to 7 numbers',
            'next_trip.max' => 'Next trip number is a number with 4 to 7 numbers',
            'speed.required' => 'Train speed is required',
            'speed.max' => 'Train speed must to be max 3 number in km/h',
            'users.required' => 'Users is required',
            'users.max' => 'Train users must to be max 3 number',
            
        ];
    }
}
