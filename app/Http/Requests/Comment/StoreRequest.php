<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
            'comment' => ['required', "string"],
            'publication_id' => ['required', 'exists:publications,id'],
            'user_id' => ['required', "integer", 'exists:users,id'],
            'starts' => ['required', 'integer']
        ];
    }
}
