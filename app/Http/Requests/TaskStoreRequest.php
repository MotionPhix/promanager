<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TaskStoreRequest extends FormRequest
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
      'name' => [
        'required',
        'min:5'
        // Rule::unique('tasks')->where('id', '<>', $id),
      ],

      'description' => 'required|min:10',

      'assigned_to' => 'required',

      'status' => [
        'required',
        Rule::in(['new', 'not_started', 'in_progress', 'cancelled', 'completed'])
      ]
    ];
  }

  public function messages()
  {
    return [
      'name.required' => 'Please provide a name for the task',
      'name.min' => 'The task name may not be less than :min characters',
      'description.required' => 'Briefly describe what the task is about',
      'description.min' => 'You can\'t describe something in less than :min characters',
      'assigned_to.required' => 'Please pick a user to assign this task to',
      'assigned_to.integer' => 'The assigned user ID must be an integer',
      'status.required' => 'Choose at least one status',
      'status.in' => 'The task status must be one of :values',
    ];
  }
}
