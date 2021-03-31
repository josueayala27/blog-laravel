<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
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
        $id = $this->route('user')->id;

        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', "unique:users,email,$id"],
            'username' => ['required', 'string', "unique:users,username,$id"],
            'description' => ['nullable', 'string']
        ];
    }
}
