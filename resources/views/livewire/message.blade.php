<div>
    <form wire:submit.prevent="submitForm">
        <div>
            <label>Name:</label>
            <input wire:model="name" type="text">
        </div>

        <div>
            <label>Email:</label>
            <input wire:model="email" type="email">
        </div>

        <div>
            <label>Message:</label>
            <textarea wire:model="message"></textarea>
        </div>

        <button type="submit">Send</button>
    </form>
</div>
