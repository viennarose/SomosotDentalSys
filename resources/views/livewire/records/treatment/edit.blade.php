<div>
    <div wire:ignore.self class="modal fade" id="updatetreatmentModal" tabindex="-1" aria-labelledby="updatetreatmentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updatetreatmentModalLabel">Edit Treatment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateTreatment">
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
                        <input type="number" class="form-control">
                        @error('balance') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <button class="btn btn-primary" type="submit">Save changes</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
