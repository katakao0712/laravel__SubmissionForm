<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\PostRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function create()
    {
        return view('form.input');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'tel' => 'required|max:255',
            'email' => 'required|email',
            'gender' => 'required|in:1,2',
            'content' => 'max:1000'
        ]);
    }
}
