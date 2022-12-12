<?php

namespace App\Rules;

use App\Mail\notifyMail;
use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Validation\Rule;

class Verification implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $appointments = Appointment::get();
        foreach($appointments as $appt){
            if($appt->email != $value){
                return Mail::to($value)->send(new notifyMail);
            }
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
