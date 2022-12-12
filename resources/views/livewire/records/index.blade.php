<div>
    <div class="card">
        <div class="card-header bg-info d-flex">
            <h3 class="text-center fw-bold mt-3" style="font-family: Fantasy;">Patient Records</h3>
            <div class="d-flex ms-auto input-group w-50">
                <input type="search" wire:model="search" class="form-control float-end mt-1" placeholder="Search..." />
                <span class="input-group-text bg-light mt-1" wire:model="search">
                    <i class="bi bi-search"></i></span>
                <a href="{{ url('admin/patients/create')}}" class="ms-3 mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    </i>
                </a>
            </div>

        </div>
        {{-- <div class="ms-auto me-5 mt-3">
            <a href="{{ URL::to('/patients/generate') }}" class="ms-3"><i class="bi bi-download"></i></a>
            <a wire:click="export" class="ms-3"><i class="bi bi-printer-fill"></i></a>
        </div> --}}
        <div class="card-body table-responsive">
            <table class="table table-striped">
                <div class="row">
                <tr class="table-dark">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Treatment Records</th>
                    <th>Consent</th>
                    <th>Action</th>
                </tr>
                <tbody>
                    @foreach($patients as $pat)
                    <tr>
                        <td>{{$pat->id}}</td>
                        <td>{{$pat->name}}</td>
                        <td>{{$pat->contact}}</td>

                        <td><a class="btn btn-primary" href="/admin/patients/{{$pat->id}}/treatmentRecords">View/Add</a></td>
                        @foreach ($consents as $consent )
                            @if ($consent->patient_id == $pat->id)
                                <td>Signed</td>

                            @endif
                        @endforeach

                        {{-- <td><a class="btn btn-primary" href="/admin/patients/{{$pat->id}}/consentView">View</a></td> --}}
                        <td> <a type="button" href="patients/edit/{{$pat->id}}">
                            <i class="bi bi-pencil-square" style="color:rgb(0, 247, 255);"></i>
                        </a>
                        <a type="button" href="patients/{{$pat->id}}">
                            <i class="bi bi-eye" style="color:rgb(0, 64, 66);"></i>
                        </a>
                        <a type="button" wire:click='deletePatientRecord({{$pat->id}})' onclick="return confirm('Are you sure you want to delete this?')">
                            <i class="bi bi-trash3" style="color:red;"></i>
                        </a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div>
                {{$patients->links()}}
            </div>
    </div>
