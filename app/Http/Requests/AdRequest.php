<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdRequest extends Request {

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
            'published_at' => 'required|date',
            'title' => 'required|min:2|max:50|string|regex:/^[\pL\s\d]+$/u',
            'body' => 'required|min:5|max:300|regex:/^[\pL\s\d]+$/u',
            'image'=>'image|mimes:jpeg,jpg,bmp,png,gif',
            'location' => 'required|min:2|regex:/^[\pL\s\d]+$/u',
            'phone' => 'required|digits_between:7,10',
            'price' => 'regex:/^\d*(\.\d{2})?$/'
		];
	}

}

