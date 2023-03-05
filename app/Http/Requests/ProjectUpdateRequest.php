<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectUpdateRequest extends FormRequest
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
   * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
   */
  public function rules(): array
  {
    return [
      'name' => 'required|min:5',

      'description' => 'required|min:15',

      'budget' => 'bail|required|numeric|integer',
    ];
  }

  public function messages(): array
  {
    return [
      'name.required' => 'Please provide a name for the project',
      'name.min' => 'Probably expand on the name a little bit',

      'description.required' => 'Provide a description for your project',
      'description.min' => 'It\'s hard to learn anything from such a less than :min characters description',

      'budget.required' => 'In order to calculate properly, please provide a budget for the project',
      'budget.numeric' => 'Tell me if you have ever calculated text before',
      'budget.integer' => 'Multiply the number you entered by 100 then try again',
    ];
  }
}
