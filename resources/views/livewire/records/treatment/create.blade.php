<div>
    <div>
        <div wire:ignore.self class="modal fade" id="treatmentModal" tabindex="-1" aria-labelledby="treatmentModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="treatmentModalLabel">Set New treatment</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <div class="mb-2">
                            <label>Date</label>
                            <input type="date" class="form-control" wire:model="dateToday">
                            @error('dateToday') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tooth No./s</label>
                            <input type="number" class="form-control" wire:model="toothNum">
                            @error('toothNum') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-floating mb-4">

                            <select class="form-select" name="procedure" wire:model.defer="procedure">

                                <option selected>Select Procedure</option>
                                @foreach($services as $service)
                                    <option value="{{$service->id}}">{{$service->service_type}}</option>
                                @endforeach
                            </select>

                            <label for="procedure">Procedure</label>
                            @error('procedure')
                                <p class="text-danger">{{$message}}</p>
                            @enderror

                        <div class="mb-3">
                            <label>Dentist/s</label>
                            <input type="text" class="form-control"  wire:model="dentist">
                            @error('dentist') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Amount Charged</label>
                            <input type="number" class="form-control" wire:model="amountCharged">
                            @error('amountCharged') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Amount Paid</label>
                            <input type="number" class="form-control" wire:model="amountPaid">
                            @error('amountPaid') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Balance</label>
                            <input type="number" class="form-control" value="{{(int) $amountCharged - (int)$amountPaid}}">
                            {{-- @error('balance') <span class="error text-danger">{{ $message }}</span> @enderror --}}
                        </div>
                        <div class="mb-3">
                            <label>Next Appointment</label>
                            <input type="date" class="form-control" wire:model="nextAppt">
                            @error('nextAppt') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary ms-2" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" wire:click="addTreatment()">Save changes</button>
                    </div>
                    <div wire:loading wire:target='addTreatment'>
                        <div style="display:flex; justify-content:center;
                        align-items:center; background-color:rgb(223, 207, 207); width:100%;
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
                            <p class="align-center mt-2">Adding treatment</p>
                        </div>
                    </div>
              </div>
            </div>
          </div>
        </div>

    </div>

</div>
