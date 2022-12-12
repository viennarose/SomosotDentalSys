<div>
    <div class="container">
        <i class="bi bi-arrow-left" wire:click="back()"></i>
        <h2 class="text-center">DENTAL CHART</h2>

    <h4 class="fw-light">PATIENT INFORMATION RECORD</h4>
    <form action="" wire:submit.prevent='addPatient'>
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
                    <option value="Female">Female</option>
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
    </div>
    </form>
    </div>
    <div class="container">
            <form action="" wire:submit.prevent='createHistory'>
                <h4 class="fw-light">DENTAL HISTORY</h4>
                <div class="col">
                    <div class="form-floating col-sm-8 mb-3">
                        <input type="text" class="form-control" wire:model='prevDentist'>
                        <label class="form-label">Previous Dentist</label>
                        @error('prevDentist')<span class="error text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-floating col-sm-8 mb-3">
                        <input type="text" class="form-control" wire:model='lastDental'>
                        <label class="form-label">Last Dental Visit</label>
                        @error('lastDental')<span class="error text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <h4 class="fw-light">MEDICAL HISTORY</h4>
                <div class="col d-flex">
                    <div class="form-floating col-sm-6 mb-3 me-3">
                        <input type="text" class="form-control" value="{{$specialty}}">
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
                            <input type="form-input" class="form-control" value="{{$medTreatment}}">
                            <label class="form-label">If so, what is the condition being treated?</label>
                            @error('medTreatment')<span class="error text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-sm-8 mb-3">
                        <label>3. Have you ever had serious illness or surgical operation?</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" wire:model='surgicalOp'>
                            <label class="form-label">If so, what is the condition being treated?</label>
                            @error('surgicalOp')<span class="error text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label>4. Have you ever been hospitalized?</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" wire:model='hospitalized'>
                            <label class="form-label">If so, when and why?</label>
                            @error('hospitalized')<span class="error text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-sm-8 mb-3">
                        <label>5. Are you taking any prescription/non-prescription medication?</label>
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
                        <p></p>
                        <select class="js-example-basic-multiple form-select" wire:model='allergies' multiple>
                            <option value="{{$allergies}}">{{$allergies}}</option>
                            <option value="None">None</option>
                            <option value="Local Anesthetic">Local Anesthetic (ex. Lidocaine)</option>
                            <option value="Penicilin, Antibiotics">Penicilin, Antibiotics</option>
                            <option value="Sulfa Drugs">Sulfa Drugs</option>
                            <option value="Aspirin">Aspirin</option>
                            <option value="Latex">Latex</option>
                            <option value="Others">Others</option>
                        </select>
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
                        <select class="js-example-basic-multiple form-select" wire:model='conditions' multiple>
                            <option value="{{$conditions}}">{{$conditions}}</option>
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
                        {{-- <div class="container">
                            <div class="row">
                            <div class="col mt-2">
                                <input type="checkbox" class="form-check-input ms-4" value="Local Anesthetic" wire:model='conditions' name="High Blood Pressure">High Blood Pressure <br>
                                <input type="checkbox" class="form-check-input ms-4" value="Low Blood Pressure" wire:model='conditions' name="Low Blood Pressure">Low Blood Pressure<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Epilepsy/Convulsions" wire:model='conditions' name="conditions">Epilepsy/Convulsions<br>
                                <input type="checkbox" class="form-check-input ms-4" value="AIDS or HIV Infection" wire:model='conditions' name="conditions">AIDS or HIV Infection <br>
                                <input type="checkbox" class="form-check-input ms-4" value="Sexually Transmitted Disease" wire:model='conditions' name="conditions">Sexually Transmitted Disease<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Stomach Troubles/Ulcers" wire:model='conditions' name="conditions">Stomach Troubles/Ulcers<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Fainting Seizure" wire:model='conditions' name="conditions">Fainting Seizure<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Rapid weight Loss" wire:model='conditions' name="conditions">Rapid weight Loss<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Radiation Therapy" wire:model='conditions' name="conditions">Radiation Therapy<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Joint Replacement/Implant" wire:model='conditions' name="conditions">Joint Replacement/Implant<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Heart Surgery" wire:model='conditions' name="conditions">Heart Surgery<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Heart Attack" wire:model='conditions' name="conditions">Heart Attack<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Thyroid Problem" wire:model='conditions' name="conditions">Thyroid Problem<br>

                            </div>
                            <div class="col mt-2">
                                <input type="checkbox" class="form-check-input ms-4" value="Heart Disease" wire:model='conditions' name="conditions">Heart Disease <br>
                                <input type="checkbox" class="form-check-input ms-4" value="Aspirin" wire:model='conditions' name="conditions">Heart Murmur<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Hepatitis/Liver Disease" wire:model='conditions' name="conditions">Hepatitis/Liver Disease<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Rheumatic Fever" wire:model='conditions' name="conditions">Rheumatic Fever<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Hay Fever/Allergies" wire:model='conditions' name="conditions">Hay Fever/Allergies<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Respiratory Problems" wire:model='conditions' name="conditions">Respiratory Problems<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Hepatitis/Jaundice" wire:model='conditions' name="conditions">Hepatitis/Jaundice<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Tuberculosis" wire:model='conditions' name="conditions">Tuberculosis<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Swollen Ankles" wire:model='conditions' name="conditions">Swollen Ankles<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Kidney disease" wire:model='conditions' name="conditions">Kidney Disease<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Diabetes" wire:model='conditions' name="conditions">Diabetes<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Chest Pain" wire:model='conditions' name="conditions">Chest Pain<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Stroke" wire:model='conditions' name="conditions">Stroke<br>
                            </div>
                            <div class="col mt-2">
                                <input type="checkbox" class="form-check-input ms-4" value="Cancer/Tumor" wire:model='conditions' name="conditions">Cancer/Tumor <br>
                                <input type="checkbox" class="form-check-input ms-4" value="Anemia" wire:model='conditions' name="conditions">Anemia<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Angina" wire:model='conditions' name="conditions">Angina<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Asthma" wire:model='conditions' name="conditions">Asthma<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Emphysema" wire:model='conditions' name="conditions">Emphysema<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Bleeding Problems" wire:model='conditions' name="conditions">Bleeding Problems<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Blood Diseases" wire:model='conditions' name="conditions">Blood Diseases<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Head Injuries" wire:model='conditions' name="conditions">Head Injuries<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Arthritis/Rheumatism" wire:model='conditions' name="conditions">Arthritis/Rheumatism<br>
                                <input type="checkbox" class="form-check-input ms-4" value="Other" wire:model='conditions' name="conditions">Other<br>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </form>
       </div>
    <button type="button" class="btn btn-info ms-auto" wire:click="updatePatientRecord()">Update Patient Record</button>

</div>
