<div>
    <div class="hatama d-flex justify-content-center">

        <form wire:submit.prevent="check" class="row row-cols-lg-auto g-3 align-items-center">
            @csrf
            <div class="col-12">
                <label class="visually-hidden" for="inlineFormInputGroupUsername">Input Numeru</label>
                <div class="input-group">
                    <div class="input-group-text">Input Numeru</div>
                    <input type="number" class="form-control" name="numeru" placeholder="123" wire:model="numeru" />
                </div>
            </div>

            <div class="col-12">
                <button data-mdb-ripple-init type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <div class="rezultadu d-flex justify-content-center mt-4">
        @isset($mensajen)
            <h1>{{ $mensajen }}</h1>
        @endisset
    </div>
</div>
