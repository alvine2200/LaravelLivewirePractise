    <div class="align-items-center d-flex py-5 justify-content-center">
        <button class="btn btn-primary py-2 px-4" wire:click="increment">+</button>
        <span class="px-4">{{ $count }}</span>
        <button class="btn btn-primary py-2 px-4" wire:click="decrement">-</button>
    </div>
