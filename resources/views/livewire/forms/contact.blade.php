<x-modal id="contact" class="bg-foreground ">
    <img class="mb-[45px]  mx-auto max-w-[180px] lg:max-w-[220px]" src="{{ asset('images/logo-therien.svg') }}"
        alt="" width="220">
    <div class="mb-[50px] col-span-2 text-base flex justify-between leading-6" id="modal-title">
        <p class="text-[16px] text-primary leading-[1.2]">
            <b>Thérien Inc.</b><br>
            Paysagement&nbsp;/&nbsp;Déneigement
        </p>
        <p class="text-[16px] text-primary leading-[1.2]">
            <a href="tel:514-838-8063">514 . 838 . 8063</a><br>
            <a href="mailto:paysagistestephanetherien@hotmail.ca">paysagistestephanetherien@hotmail.ca</a>
        </p>
    </div>
    <x-form wire:submit.prevent="submit" class="grid grid-cols-2 gap-y-[30px] gap-x-[20px]">
        <x-form.field>
            <x-form.label class="text-primary" for="firstName">Prénom</x-form.label>
            <x-form.input wire:model="firstName" class="text-primary" name="firstName"
                placeholder="Entrer votre prénom"></x-form.input>
            <x-form.error for="firstName"></x-form.error>
        </x-form.field>
        <x-form.field class="border border-primary">
            <x-form.label class="text-primary" for="lastName">Nom</x-form.label>
            <x-form.input wire:model="lastName" class="text-primary" name="lastName"
                placeholder="Entrer votre nom"></x-form.input>
            <x-form.error for="lastName"></x-form.error>
        </x-form.field>

        <x-form.field class="col-span-2">
            <x-form.label class="text-primary" for="email">Courriel</x-form.label>
            <x-form.input class="text-primary" wire:model="email" type="email" name="email"
                placeholder="bernard@gmail.com"></x-form.input>
            <x-form.error for="email"></x-form.error>
        </x-form.field>
        <x-form.field class="col-span-2">
            <x-form.label class="text-primary" for="tel">Téléphone</x-form.label>
            <x-form.input class="text-primary" wire:model="tel" type="tel" name="tel"
                placeholder="400-512-3255"></x-form.input>
            <x-form.error for="tel"></x-form.error>
        </x-form.field>
        <x-form.field class="col-span-2 items-start">
            <x-form.label for="message" class="mb-auto">Message</x-form.label>
            <x-form.textarea rows="5" name="message" wire:model="message"
                placeholder="Nous vous contactons pour..."></x-form.input>
                <x-form.error for="message"></x-form.error>
        </x-form.field>
        <div class="col-span-2">
            <x-button class="w-full " @click="open=false">Envoyer</x-button>
        </div>
    </x-form>
</x-modal>
