<div>
    <div>
    @if ($currentStep == 1)
   <div class="card">
        <div class="card-header bg-info">
            <h3 class="text-center text-white" style="font-family: Garamond">Cancel Appointment</h3>
            <h6 class="text-center" style="font-family: Brush Script MT; font-style:italic">Make sure to enter the correct details</h6>
        </div>
    <div class="card-body">
        @csrf
        <label class="fw-light">Name</label>
        <input class="form-control" type="text" wire:model="firstName">
        @error('firstName')
            <p class="text-danger">Your name is required</p>
        @enderror
        <label class="fw-light">Email</label>
        <input class="form-control" type="text" wire:model="email">
        @error('email')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <label class="fw-light">Enter Reference Code</label>
        <input class="form-control" maxlength="14" type="text" wire:model="refNum">
        @error('refNum')
            <p class="text-danger">Please input the code correctly</p>
        @enderror

        <label class="fw-light">Select your scheduled appointment</label>
        <div class="input-group" id="cancelSched">
            <div class="input-group-prepend">
                <button type="button" id="toggle" class="input-group-text">
                <i class="bi bi-calendar2-week"></i>
                </button>
                </div>
                <input wire:model="schedule" class="form-control" data-canceldate="@this" id="picker" onchange='Livewire.emit("cancelDate", this.value)'>
            </div>
            @error('schedule') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
   </div>
   @endif


   @if ($currentStep == 2)
   <div class="card border-0">
       <div class="card-header bg-info">
           <h3 class="text-center text-white" style="font-family: Garamond">Cancel Information</h3>
           <h6 class="text-center" style="font-family: Brush Script MT; font-style:italic">If the information your entered is correct, proceed to cancelling your appointment.</h6>
       </div>

       <div class="card-body p-3">
       <div class="row mx-auto border">
           <div class="col-md-6 form-control border-0">
               <div class="mb-2 d-flex text-center">
                   <h6 class="fw-light">Name: </h6>
                    <p class="fw-light">&nbsp; {{$firstName}}</p>
               </div>

               <div class="text-center">
                   <h6 class="fw-bold">Reference Number: </h6>
                   <p>{{ $refNum}}</p>
               </div>
               <div wire:loading wire:target='cancel'>
                   <div style="display:flex; justify-content:center;
                   align-items:center; background-color:rgb(255, 255, 255); width:100%;
                   position:fixed; top: 10px; left:0px; z-index:9999; height:100%; opacity: .15;">
                       <div style="color: #00eeff" class="la-ball-spin-clockwise la-2x">
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                       </div>
                       <p class="align-center mt-2">Cancelling Appointment</p>
                   </div>
               </div>
           </div>
       </div>
       </div>
   </div>
   @endif


   <div class="modal-footer d-flex justify-content-between m-auto p-4">

    @if ($currentStep == 1)
        <div></div>
    @endif

    @if ($currentStep == 2)
        <button type="button" class="btn btn-secondary ms-2" wire:click="decreaseStep()">Back</button>
    @endif

    @if ($currentStep == 1)
        <button type="button" class="btn btn-info ms-auto" wire:click="increaseStep()">Next</button>
    @endif

    @if ($currentStep == 2)
    <button type="button" class="btn btn-info ms-auto" wire:click="cancel()">Cancel Appointment</button>
    @endif
    </div>
</div>
</div>
