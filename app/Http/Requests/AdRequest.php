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
            'title' => 'required|min:5|max:20',
            'body' => 'required|min:10|max:200',
            'image'=>'image|mimes:jpeg,jpg,bmp,png,gif',
            'location' => 'required|min:3',
            'phone' => 'required'
		];
	}

}
