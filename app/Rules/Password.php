<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Contracts\Validation\Rule;

class Password implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^[a-z0-9]+$/', $value);
    }

    public function message()
    {
        return 'Password must be in a-z and 0-9 format.';
    }
}
