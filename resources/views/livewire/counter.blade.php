<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
    <div class="mb-8"></div>
    こんにちは {{ $name }} さん<br>
    <input wire:model="name" type="text"><br>
    {{-- <input wire:model.lazy="name" type="text"><br>
    <input wire:model.debouce.2000ms="name" type="text"><br> --}}
    {{-- <input wire:model.defer="name" type="text"><br> --}}
    <br>
    <button wire:mouseover="mouseOver">MOUSE</button>
</div>