<div class="text-center">
    <h1>Cek bulan ini</h1>
    <p>Masukan id anda</p>    
    <form wire:submit.prevent="submit" class="max-w-md mx-auto">
        {{ $this->form }}
    
        <button type="submit">
            Submit
        </button>
    </form>
</div>
