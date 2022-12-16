<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div x-data="{ open: false }">
        <button wire:click="increment">+</button>
        <h1>{{ $count }}</h1>

        <button @click="open = true">Show More...</button>

        <ul x-show="open" @click.outside="open = false">
            <li><button wire:click="archive">Archive</button></li>
            <li><button wire:click="delete">Delete</button></li>
        </ul>
    </div>

</div>
