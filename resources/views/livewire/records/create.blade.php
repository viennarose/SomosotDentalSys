<div>
    @if ($currentStep == 1)
    <div class="container">
        <i class="bi bi-arrow-left" wire:click="back()"></i>
        <h2 class="text-center">DENTAL CHART</h2>

    <h4 class="fw-light">PATIENT INFORMATION RECORD</h4>
    <form action="" wire:submit.prevent='addPatientRecord'>
    <div class="container row">
        <div class="col d-flex">
            <div class="form-floating col-sm-8 me-4">
                <input type="text" class="form-control" wire:model='name'>
                <label class="form-label">Full Name</label>
                @error('name')<span class="error text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-floating col-sm-4">
                <input type="text" class="form-control" wire:model='nickname'>
                <label class="form-label">Nickname</label>
                @error('nickame')<span class="error text-danger">{{$message}}</span>@enderror
            </div>

        </div>
        <div class="d-flex mt-2">
            <div class="form-floating col-sm-4 me-2">
                <input type="date" class="form-control" wire:model='birthdate'>
                <label class="form-label">Birthdate</label>
                @error('birthdate')<span class="error text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-floating col-sm-4 me-3">
                <input type="number" class="form-control" wire:model='age'>
                <label class="form-label">Age</label>
                @error('age')<span class="error text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-floating col-sm-4 me-2">
                <select class="form-select" wire:model='sex'>
                    <option hidden="true" selected>Select Gender</option>
                    <option value="Female" selected>Female</option>
                    <option value="Male">Male</option>
                </select>
                <label class="form-label">Sex</label>
                @error('sex')<span class="error text-danger">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="mt-2 d-flex">
            <div class="form-floating col-sm-4 me-2" >
                <input type="text" class="form-control" wire:model='religion'>
                <label class="form-label">Religion</label>
            </div>
            <div class="form-floating col-sm-4 me-3" >
                <input type="text" class="form-control" wire:model='nationality'>
                <label class="form-label">Nationality</label>
                @error('nationality')<span class="error text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-floating col-sm-4 me-2" >
                <input type="text" class="form-control" wire:model='occupation'>
                <label class="form-label">Occupation</label>
                @error('occupation')<span class="error text-danger">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="mt-2 col-sm-12 d-flex">
            <div class="form-floating col-sm-3 me-2" >
                <input type="number" class="form-control" wire:model='homeNum'>
                <label class="form-label">Home Number</label>
                @error('homeNum')<span class="error text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-floating col-sm-3 me-2" >
                <input type="number" class="form-control" wire:model='officeNum'>
                <label class="form-label">Office Number</label>
                @error('officeNum')<span class="error text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-floating col-sm-3 me-2" >
                <input type="number" class="form-control" wire:model='faxNum'>
                <label class="form-label">Fax Number</label>
                @error('faxNum')<span class="error text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-floating col-sm-3 col-sm-2" >
                <input type="number" class="form-control" wire:model='contact'>
                <label class="form-label">Cel/Mobile Number</label>
                @error('contact')<span class="error text-danger">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="mt-2 d-flex">
            <div class="form-floating col-sm-6 me-3" >
                <input type="text" class="form-control" wire:model='address'>
                <label class="form-label">Home Address</label>
                @error('address')<span class="error text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-floating col-sm-6" >
                <input type="text" class="form-control" wire:model='email'>
                <label class="form-label">Email Address</label>
                @error('email')<span class="error text-danger">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="mt-2 d-flex mb-3">
            <div class="form-floating col-sm-6 me-3" >
                <input type="text" class="form-control" wire:model='insurance'>
                <label class="form-label">Insurance</label>
                @error('insurance')<span class="error text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-floating col-sm-4" >
                <input type="date" class="form-control" wire:model='effectDate'>
                <label class="form-label">Effective Date</label>
                @error('effectDate')<span class="error text-danger">{{$message}}</span>@enderror
            </div>
        </div>
        <p class="fw-light fst-italic">For minors</p>
        <div class="mt-2 d-flex mb-2">
            <div class="form-floating col-sm-6 me-3" >
                <input type="text" class="form-control" wire:model='parentName'>
                <label class="form-label">Parent/Guardian's Name </label>
                @error('parentName')<span class="error text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-floating col-sm-6" wire:model='parentJob'>
                <input type="text" class="form-control">
                <label class="form-label">Occupation</label>
                @error('parentJob')<span class="error text-danger">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="mt-2 d-flex mb-2">
        <div class="form-floating col-sm-6 me-3">
            <input type="text" class="form-control" wire:model='referral'>
            <label class="form-label">Whom may we thank for referring you?</label>
            @error('referral')<span class="error text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-floating col-sm-6 mb-2">
            <textarea class="form-control" wire:model='visitReason'></textarea>
            <label class="form-label">What is your reason for dental consultation</label>
            @error('visitReason')<span class="error text-danger">{{$message}}</span>@enderror
        </div>
        </div>
        {{-- <div class="col-sm-4 ms-auto">
            <button class="btn btn-primary me-2" type="submit">
                Create
            </button>
            <a class="btn btn-secondary" href="{{url('/admin/patients/')}}">
                Back
            </a>
        </div> --}}

    </div>
    </form>
    </div>
    @endif

    @if ($currentStep == 2)
    <script>
        $(document).ready(function() {
        $('.js-example-basic-multiple1').select2({
            placeholder: "Select any of the following"
        });
        });</script>
    <div class="container">
        <i class="bi bi-arrow-left" wire:click="back()"></i>
            <form action="" wire:submit.prevent='createHistory'>
                <h4 class="fw-light">DENTAL HISTORY</h4>
                <div class="col">
                    <div class="form-floating col-sm-8 mb-3">
                        <input type="text" class="form-control" wire:model='prevDentist'>
                        <label class="form-label">Previous Dentist</label>
                        @error('prevDentist')<span class="error text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-floating col-sm-8 mb-3">
                        <input type="date" class="form-control" wire:model='lastDental'>
                        <label class="form-label">Last Dental Visit</label>
                        @error('lastDental')<span class="error text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <h4 class="fw-light">MEDICAL HISTORY</h4>
                <div class="col d-flex">
                    <div class="form-floating col-sm-6 mb-3 me-3">
                        <input type="text" class="form-control" wire:model='physician'>
                        <label class="form-label">Name of Physician</label>
                        @error('physician')<span class="error text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-floating col-sm-6 mb-3">
                        <input type="text" class="form-control" wire:model='specialty'>
                        <label class="form-label">Specialty, if applicable</label>
                        @error('specialty')<span class="error text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="form-floating col-sm-6 mb-3 me-3">
                        <input type="text" class="form-control" wire:model='physicianAdd'>
                        <label class="form-label">Office Address</label>
                        @error('physicianAdd')<span class="error text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-floating col-sm-6 mb-3">
                        <input type="text" class="form-control" wire:model='officeNum'>
                        <label class="form-label">Office Number</label>
                        @error('officeNum')<span class="error text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="col-sm-12 mb-3 me-3">
                        <label class="form-radio-label">1. Are you in good health?</label>
                        <input type="radio" class="form-radio-input ms-4" value="Yes" wire:model='goodHealth'>Yes
                        <input type="radio" class="form-radio-input ms-4" value="No" wire:model='goodHealth'>No
                        @error('goodHealth')<span class="error text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label>2. Are you under medical treatment now?</label>
                        <div class="form-floating" >
                            <input type="form-input" class="form-control" wire:model='medTreatment'>
                            <label class="form-label">If so, what is the condition being treated?</label>
                            @error('medTreatment')<span class="error text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-sm-8 mb-3">
                        <label>3. Have you ever had serious illness or surgical operation?</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" wire:model='surgicalOp' >
                            <label class="form-label">If so, what is the condition being treated?</label>
                            @error('surgicalOp')<span class="error text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label>4. Have you ever been hospitalized?</label>
                        {{-- <input type="radio" class="form-radio-input ms-4" value="Yes" name="hospitalized">Yes
                        <input type="radio" class="form-radio-input ms-4" value="No" name="hospitalized">No --}}
                        <div class="form-floating">
                            <input type="text" class="form-control" wire:model='hospitalized'>
                            <label class="form-label">If so, when and why?</label>
                            @error('hospitalized')<span class="error text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-sm-8 mb-3">
                        <label>5. Are you taking any prescription/non-prescription medication?</label>
                        {{-- <input type="radio" class="form-radio-input ms-4" value="Yes" name="medications">Yes
                        <input type="radio" class="form-radio-input ms-4" value="No" name="medications">No --}}
                        <div class="form-floating">
                            <input type="text" class="form-control" wire:model='medications'>
                            <label class="form-label">If so, please specify</label>
                            @error('medications')<span class="error text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-sm-8 mb-3">
                        <label>6. Do you use tobacco products?</label>
                        <input type="radio" class="form-radio-input ms-4" value="Yes" wire:model='tobacco'>Yes
                        <input type="radio" class="form-radio-input ms-4" value="No" wire:model='tobacco'>No
                    </div>
                    <div class="col-sm-8 mb-3">
                        <label>7. Do you use alcohol, cocaine or other dangerous drugs?</label>
                        <input type="radio" class="form-radio-input ms-4" value="Yes" wire:model='dangerousDrug'>Yes
                        <input type="radio" class="form-radio-input ms-4" value="No" wire:model='dangerousDrug'>No
                    </div>
                    <div class="col-sm-8 mb-3">
                        <label>8. Are you allergic to any of the following?</label>
                        <select class="js-example-basic-multiple1 form-select" wire:model='allergies' multiple>
                            <option value="None">None</option>
                            <option value="Local Anesthetic">Local Anesthetic (ex. Lidocaine)</option>
                            <option value="Penicilin, Antibiotics">Penicilin, Antibiotics</option>
                            <option value="Sulfa Drugs">Sulfa Drugs</option>
                            <option value="Aspirin">Aspirin</option>
                            <option value="Latex">Latex</option>
                            <option value="Others">Others</option>
                        </select>
                        {{-- {{-- <select class="js-example-basic-multiple form-select" wire:model='allergies' multiple>
                            <option value="None">None</option>
                            <option value="Local Anesthetic">Local Anesthetic (ex. Lidocaine)</option>
                            <option value="Penicilin, Antibiotics">Penicilin, Antibiotics</option>
                            <option value="Sulfa Drugs">Sulfa Drugs</option>
                            <option value="Aspirin">Aspirin</option>
                            <option value="Latex">Latex</option>
                            <option value="Others">Others</option>
                        </select> --}}
                        {{-- <input type="radio" class="form-radio-input ms-4" value="Yes" name="allergies">Yes
                        <input type="radio" class="form-radio-input ms-4" value="No" name="allergies">No
                        <br>
                        <p class="fw-light">&nbsp;&nbsp;&nbsp; If yes, check any of the following</p>
                            <div>
                                <div class="form-floating mt-2" >
                                    <input type="checkbox" class="form-check-input ms-4" value="Local Anesthetic" wire:model='allergies'>Local Anesthetic (ex. Lidocaine)
                                    <input type="checkbox" class="form-check-input ms-4" value="Penicilin, Antibiotics" wire:model='allergies'>Penicilin, Antibiotics
                                </div>
                                <div class="form-floating mt-2">
                                    <input type="checkbox" class="form-check-input ms-4" value="Sulfa Drugs" wire:model='allergies'>Sulfa Drugs
                                    <input type="checkbox" class="form-check-input ms-4" value="Aspirin" wire:model='allergies'>Aspirin
                                    <input type="checkbox" class="form-check-input ms-4" value="Latex" wire:model='allergies'>Latex
                                </div>
                                <div class="form-floating mt-2">
                                    <input type="text" class="form-control" wire:model='allergies'>
                                    <label for="" class="form-label">Others</label>
                                </div>
                            </div> --}}


                    </div>
                    <div class="mt-2 col-sm-4">
                        <label class="form-label">9. Bleeding Time</label>
                        <input type="time" class="form-control" wire:model='bleeding'>

                    </div>

                    <div class="col-sm-8 mb-3">
                        <label>10. For women only:</label>
                        <div class="col-sm-8 mb-2 ms-5 mt-2">
                            <label>Are you pregnant?</label>
                            <input type="radio" class="form-radio-input ms-4" value="Yes" wire:model='pregnant'>Yes
                            <input type="radio" class="form-radio-input ms-4" value="No" wire:model='pregnant'>No
                        </div>
                        <div class="col-sm-8 mb-2 ms-5">
                            <label>Are you nursing?</label>
                            <input type="radio" class="form-radio-input ms-4" value="Yes" wire:model='nursing'>Yes
                            <input type="radio" class="form-radio-input ms-4" value="No" wire:model='nursing'>No
                        </div>
                        <div class="col-sm-8 mb-2 ms-5">
                            <label>Are you taking birth controls?</label>
                            <input type="radio" class="form-radio-input ms-4" value="Yes" wire:model='birthControl'>Yes
                            <input type="radio" class="form-radio-input ms-4" value="No" wire:model='birthControl'>No
                        </div>
                    </div>
                    <div class="mt-2 col-sm-4">
                        <label class="form-label">11. Blood Type</label>
                        <input type="text" class="form-control" wire:model='bloodType'>
                    </div>
                    <div class="mt-2 col-sm-4 ">
                        <label class="form-label">12. Blood Pressure</label>
                        <input type="text" class="form-control" wire:model='bloodPressure'>
                    </div>

                    <div class="col-sm-12 mt-3">
                        <label>13.Do you have or have you had any of the following? Select which apply</label>
                        <select class="js-example-basic-multiple1 form-select" wire:model='conditions' multiple>
                            <option value="None">None</option>
                            <option value="High Blood Pressure">High Blood Pressure</option>
                            <option value="Low Blood Pressure">Low Blood Pressure</option>
                            <option value="Epilepsy/Convulsions">Epilepsy/Convulsions</option>
                            <option value="AIDS or HIV Infection">AIDS or HIV Infection</option>
                            <option value="Sexually Transmitted Disease">Sexually Transmitted Disease</option>
                            <option value="Stomach Troubles/Ulcers">Stomach Troubles/Ulcers</option>
                            <option value="Fainting Seizure">Fainting Seizure</option>
                            <option value="Rapid weight Loss">Rapid weight Loss</option>
                            <option value="Radiation Therapy">Radiation Therapy</option>
                            <option value="Joint Replacement/Implant">Joint Replacement/Implant</option>
                            <option value="Heart Surgery">Heart Surgery</option>
                            <option value="Heart Attack">Heart Attack</option>
                            <option value="Thyroid Problem">Thyroid Problem</option>
                            <option value="Heart Disease">Heart Disease</option>
                            <option value="Heart Murmur">Heart Murmur</option>
                            <option value="Hepatitis/Liver Disease">Hepatitis/Liver Disease</option>
                            <option value="Tuberculosis">Tuberculosis</option>
                            <option value="Swollen Ankles">Swollen Ankles</option>
                            <option value="Kidney disease">Kidney disease</option>
                            <option value="Diabetes">Diabetes</option>
                            <option value="Chest Pain">Chest Pain</option>
                            <option value="Stroke">Stroke</option>
                            <option value="Cancer/Tumor">Cancer/Tumor</option>
                            <option value="Anemia">Anemia</option>
                            <option value="Angina">Angina</option>
                            <option value="Asthma">Asthma</option>
                            <option value="Emphysema">Emphysema</option>
                            <option value="Bleeding Problems">Bleeding Problems</option>
                            <option value="Blood Diseases">Blood Diseases</option>
                            <option value="Head Injuries">Head Injuries</option>
                            <option value="Arthritis/Rheumatism">Arthritis/Rheumatism</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
            </form>
       </div>
       @endif


       @if ($currentStep == 1)
            <div></div>
        @endif

        @if ($currentStep == 2)
            <button type="button" class="btn btn-secondary ms-2" wire:click="decreaseStep()">Back</button>
        @endif

        @if ($currentStep == 1)
            <button type="button" class="btn btn-primary float-end" wire:click="increaseStep()">Next</button>
        @endif

        @if ($currentStep == 2)
        <button type="button" class="btn btn-info float-end" wire:click="addPatientRecord()">Add Patient Record</button>
        @endif

</div>
