<?php

namespace Abdazz\PostsManager\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
            "title"=>"required|min:5|max:255|unique:posts",
            "category_id"=>"required|numeric",
            "content"=>"required|min:5|max:5000",
            "slug"=>"nullable|min:5|max:255",
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20048',
            ];
    }
}
