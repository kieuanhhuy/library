<?php

namespace App\Rules\EmailVerification;

use Illuminate\Contracts\Validation\Rule;

class EmailVerificationRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (strpos($value, '@gmail.com')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        // return 'The validation error message.';
        return trans('Unijeta email adresa nije registrovana kao školski email!');
    }
}
