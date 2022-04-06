<div>
    <form wire:submit.prevent="register">
        <label for="name">name1</label>
        <input id="name" type="text" wire:model="name"><br>
        @error('name') <div class="text-red-400">{{ $message }} </div> @enderror

        <label for="email">emal1</label>
        <input id="email" type="text" wire:model.lazy="email"><br>
        @error('email') <div class="text-red-400">{{ $message }} </div> @enderror

        <label for="password">pw1</label>
        <input id="password" type="text" wire:model="password"><br>
        @error('password') <div class="text-red-400">{{ $message }} </div> @enderror

        <button>登録</button>
    </form>
</div>
