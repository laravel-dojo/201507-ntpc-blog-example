<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (strtolower($this->input('_method')) == 'patch') {
            return \App\Post::where('id', $this->route('id'))
                            ->where('user_id', \Auth::id())
                            ->exists();
        } else {
            return true;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'sub_title' => 'required',
            'content' => 'required',
            'is_feature' => 'boolean',
        ];
    }
}
