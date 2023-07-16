
<div>
    <form wire:submit.prevent="register">
        <!-- First Name -->
        <div>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" wire:model="firstName">
            @error('firstName')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <!-- Last Name -->
        <div>
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" wire:model="lastName">
            @error('lastName')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" wire:model="email">
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" wire:model="password">
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <!-- Password Confirmation -->
        <div>
            <label for="passwordConfirmation">Confirm Password:</label>
            <input type="password" id="passwordConfirmation" wire:model="passwordConfirmation">
            @error('passwordConfirmation')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Register</button>
    </form>
</div>
