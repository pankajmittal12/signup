<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Contracts\Validation\Rule;

class Matching implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function passes($attribute, $value)
    {
        if ($value['Password'] !== $value['RePassword']) {
            return false;
        }
        return true;
    }

    public function message()
    {
        return 'Password and Retype Password are not matching.';
    }
}
