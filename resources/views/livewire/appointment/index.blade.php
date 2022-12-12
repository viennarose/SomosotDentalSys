<div>
    <div class="row">

        @include('livewire.appointment.create')

        @include('livewire.appointment.edit')
        @include('livewire.appointment.delete')
        @include('livewire.appointment.past')
        <div class="col-md-12">
            @if (session()->has('message'))
                <h5 class="alert alert-sucess text-success">{{ session('message') }}</h5>
            @endif
        </div>
    </div>

</div>
