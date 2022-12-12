<div>
    <div class="container">
        <i class="bi bi-arrow-left" wire:click="back()"></i>
        <h2 class="text-center">DENTAL CHART</h2>
        {{-- <a href="{{route('export')}}" class="btn btn-primary float-end me-2">Download</a>
        <a wire:click="generate" class="btn btn-primary float-end me-2">Print</a> --}}

        <div class="col-sm-12 mt-3 ms-4">
            <h4 class="fw-light">PATIENT INFORMATION RECORD</h4>

            <div class="container">
                <div class="row">
                    <div class="col-sm-8 mt-2">
                        <p><span class="fw-bold">Name:</span> &nbsp; &nbsp; {{$this->patientRecord->name}}</p>
                        <p><span class="fw-bold">Birthdate(mm/dd/yy): </span> &nbsp; &nbsp; {{$this->patientRecord->birthdate}}</p>
                        <p><span class="fw-bold">Religion: </span> &nbsp; &nbsp;{{$this->patientRecord->religion}}</p>
                        <p><span class="fw-bold">Nationality: </span> &nbsp; &nbsp;{{$this->patientRecord->nationality}}</p>
                        <p><span class="fw-bold">Home Address:</span> &nbsp; &nbsp;{{$this->patientRecord->address}}</p>
                        <p><span class="fw-bold">Occupation:</span> &nbsp; &nbsp;{{$this->patientRecord->occupation}}</p>
                        <p><span class="fw-bold">Dental Insurance:</span> &nbsp; &nbsp;{{$this->patientRecord->insurance}}</p>
                        <p><span class="fw-bold">Effective Date:</span> &nbsp; &nbsp;{{$this->patientRecord->effectDate}}</p>
                        <p><span class="fw-bold">For Minors:</p>
                        <p><span class="fw-bold">Parent/Guardian's Name:</span> &nbsp; &nbsp;{{$this->patientRecord->parentName}}</p>
                        <p><span class="fw-bold">Occupation:</span> &nbsp; &nbsp;{{$this->patientRecord->parentJob}}</p>
                        <p><span class="fw-bold">Whom we me think for referring you?:</span> &nbsp; &nbsp;{{$this->patientRecord->referral}}</p>
                        <p><span class="fw-bold">What is your reason for dental consultation?:</span> &nbsp; &nbsp;{{$this->patientRecord->visitReason}}</p>
                        <br>
                        <br>

                    </div>
                    <div class="col-sm-4 mt-2">
                        <p><span class="fw-bold">Sex:</span> {{$this->patientRecord->sex}}</p>
                        <p><span class="fw-bold">Age:</span> {{$this->patientRecord->age}}</p>
                        <p><span class="fw-bold">Nickname:</span> {{$this->patientRecord->nickname}}</p>
                        <p><span class="fw-bold">Home No:</span> {{$this->patientRecord->homeNum}}</p>
                        <p><span class="fw-bold">Office No:</span> {{$this->patientRecord->officeNum}}</p>
                        <p><span class="fw-bold">Fax No:</span> {{$this->patientRecord->faxNum}}</p>
                        <p><span class="fw-bold">Cel/Mobile No:</span> {{$this->patientRecord->contact}}</p>
                        <p><span class="fw-bold">Email Add:</span> {{$this->patientRecord->email}}</p>
                    </div>
                    <div class="col-sm-8 mt-2">
                        <p><span class="fw-bold">DENTAL HISTORY:</p>
                            <p><span class="fw-bold">Previous Dental:</span> &nbsp; &nbsp; Dr. {{$this->patientRecord->history->prevDentist}} </p>
                            <p><span class="fw-bold">Last Dental Visit:</span> &nbsp; &nbsp;{{$this->patientRecord->history->lastDental}}</p>
                            <br><br>
                            <p><span class="fw-bold">MEDICAL HISTORY:</p>
                            <p><span class="fw-bold">Name of Physician:</span> &nbsp; &nbsp;Dr. {{$this->patientRecord->history->physician}} </p>
                            <p><span class="fw-bold">Specialty, if Applicable: </span> &nbsp; &nbsp;{{$this->patientRecord->history->specialty}}</p>
                            <p><span class="fw-bold">Office Address: </span> &nbsp; &nbsp; {{$this->patientRecord->history->physicianAdd}}</p>
                            <p><span class="fw-bold">Office Number: </span> &nbsp; &nbsp; {{$this->patientRecord->history->officeNum}}</p>
                            <br>
                            <p><span class="fw-bold">1. Are you in good health? </span> &nbsp; &nbsp;{{$this->patientRecord->history->goodHealth}}</p>
                            <p><span class="fw-bold">2. Are you under medical treatment now? </span> &nbsp; &nbsp;{{$this->patientRecord->history->medTreatment}}</p>
                            <p><span class="fw-bold">3. Heve you ever had serious illness or surgical operation? </span> &nbsp; &nbsp;{{$this->patientRecord->history->surgicalOp}}</p>
                            <p><span class="fw-bold">4. Have you ever been hospitalized? </span> &nbsp; &nbsp;{{$this->patientRecord->history->hospitalized}}</p>
                            <p><span class="fw-bold">5. Are you taking any prescription/non-prrscription medication?</span> &nbsp; &nbsp;{{$this->patientRecord->history->medications}}</p>
                            <p><span class="fw-bold">6. Do you use tabacco products?</span> &nbsp; &nbsp; {{$this->patientRecord->history->tobacco}}</p>
                            <p><span class="fw-bold">7. Do you use alcohol, cocaine or other dangerous drugs? </span> &nbsp; &nbsp;{{$this->patientRecord->history->dangerousDrug}}</p>
                            <p><span class="fw-bold">8. Are you allergic to any of the following: {{$this->patientRecord->history->allergies}}</p>
                            <p><span class="fw-bold">9. Bleeding Time: </span> &nbsp; &nbsp;{{$this->patientRecord->history->bleeding}}</p>
                            <p><span class="fw-bold">10. For women only:</p>
                            <p class="ms-5"><span class="fw-bold">Are you pregnant?</span> &nbsp; &nbsp;{{$this->patientRecord->history->pregnant}}</p>
                            <p class="ms-5"><span class="fw-bold">Are you nursing?</span> &nbsp; &nbsp;{{$this->patientRecord->history->nursing}}</p>
                            <p class="ms-5"><span class="fw-bold">Are you taking birth control pills?</span> &nbsp; &nbsp;{{$this->patientRecord->history->birthControl}}</p>
                            <p><span class="fw-bold">11. Blood Type: </span> &nbsp; &nbsp;{{$this->patientRecord->history->bloodType}}</p>
                            <p><span class="fw-bold">12. Blood Pressure: </span> &nbsp; &nbsp;{{$this->patientRecord->history->bloodPressure}}</p>
                            <p><span class="fw-bold">13. Do you have or have you had any of the following? Check which apply: </span> <br>&nbsp; &nbsp;{{$this->patientRecord->history->conditions}}</p>
                    </div>
                    {{-- <div class="col-sm-3 mt-2">
                        <p>{{$this->patientRecord->name}}<br></p>
                        <p>{{$this->patientRecord->birthdate}}<br></p>
                        <p>{{$this->patientRecord->religion}}<br></p>
                        <p>{{$this->patientRecord->nationality}}<br></p>
                        <p>{{$this->patientRecord->address}}<br></p>
                        <p>{{$this->patientRecord->occupation}}<br></p>
                        <p>{{$this->patientRecord->insurance}}<br></p>
                        <p>{{$this->patientRecord->effectDate}}<br></p>
                        <p><br></p>
                        <p>{{$this->patientRecord->parentName}}<br></p>
                        <p>{{$this->patientRecord->parentJob}}<br></p>
                        <p>{{$this->patientRecord->referral}}<br></p>
                        <p>{{$this->patientRecord->visitReason}}<br></p>
                        <p><br></p>
                        <p>{{$this->patientRecord->history->prevDentist}}<br></p>
                        <p>{{$this->patientRecord->history->lastDental}}<br></p>
                        <p><br></p>
                        <p>{{$this->patientRecord->history->physician}}<br></p>
                        <p>{{$this->patientRecord->history->specialty}}<br></p>
                        <p>{{$this->patientRecord->history->physicianAdd}}<br></p>
                        <p>{{$this->patientRecord->history->officeNum}}<br></p>
                        <p>{{$this->patientRecord->history->goodHealth}}<br></p>
                        <p>{{$this->patientRecord->history->medTreatment}}<br></p>
                        <p>{{$this->patientRecord->history->surgicalOp}}<br></p>
                        <p>{{$this->patientRecord->history->hospitalized}}<br></p>
                        <p>{{$this->patientRecord->history->medications}}<br></p>
                        <p>{{$this->patientRecord->history->tobacco}}<br></p>
                        <p>{{$this->patientRecord->history->dangerousDrug}}<br></p>
                        <p>{{$this->patientRecord->history->allergies}}<br></p>

                        <p>{{$this->patientRecord->history->bleeding}}<br></p>
                        <p><br></p>
                        <p>{{$this->patientRecord->history->pregnant}}<br></p>
                        <p>{{$this->patientRecord->history->nursing}}<br></p>
                        <p>{{$this->patientRecord->history->birthControl}}<br></p>
                        <p>{{$this->patientRecord->history->bloodType}}<br></p>
                        <p>{{$this->patientRecord->history->bloodPressure}}<br></p>
                        <p>{{$this->patientRecord->history->conditions}}<br></p>

                    </div> --}}

                    {{-- <div class="col-sm-1 mt-2">
                        <p>{{$this->patientRecord->sex}}<br></p>
                        <p>{{$this->patientRecord->age}}<br></p>
                        <p>{{$this->patientRecord->nickname}}<br></p>
                        <p>{{$this->patientRecord->homeNum}}<br></p>
                        <p>{{$this->patientRecord->officeNum}}<br></p>
                        <p>{{$this->patientRecord->faxNum}}<br></p>
                        <p>{{$this->patientRecord->contact}}<br></p>
                        <p>{{$this->patientRecord->email}}<br></p>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</div>
