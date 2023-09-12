<x-modal id="contact" class="bg-foreground " >
{{--    <img class="hidden lg:block mb-[45px]  mx-auto max-w-[180px] lg:max-w-[220px]"--}}
{{--        src="{{ asset('images/logo-therien.svg') }}" alt="" width="220">--}}
    <div class="mb-[25px] pt-[50px] lg:mb-[40px] col-span-2 text-base flex flex-wrap justify-between leading-6 gap-8"
        id="modal-title">
        <p class="text-[16px] lg:text-[24px] text-primary leading-[1.2]">
            <b>Thérien Inc.</b><br>
            Paysagement&nbsp;/&nbsp;Déneigement
        </p>
        <p class="text-[16px] lg:text-[24px] text-primary leading-[1.2]">
            <a href="tel:514-838-8063">514 . 838 . 8063</a><br>
            <a href="mailto:paysagistestephanetherien@hotmail.ca">paysagistestephanetherien@hotmail.ca</a>
        </p>
    </div>
    <x-form wire:submit.prevent="submit" class="grid grid-cols-2 gap-y-[15px] lg:gap-y-[30px] gap-x-[20px]">

        <x-form.field class="col-span-2 lg:col-span-1">
            <x-form.label class="text-primary" for="firstName">Prénom</x-form.label>
            <div class="flex-1 relative">
                <div class="rounded-md shadow-sm">
                    <x-form.input wire:model="firstName" class="text-primary " name="firstName"
                        placeholder="Entrer votre prénom"></x-form.input>
                </div>
                <x-form.error for="firstName"></x-form.error>
            </div>
        </x-form.field>

        <x-form.field class="col-span-2 lg:col-span-1">
            <x-form.label class="text-primary" for="lastName">Nom</x-form.label>
            <div class="flex-1 relative ">
                <div class="rounded-md shadow-sm">
                    <x-form.input wire:model="lastName" class="text-primary " name="lastName"
                        placeholder="Entrer votre nom"></x-form.input>
                </div>
                <x-form.error for="lastName"></x-form.error>
            </div>
        </x-form.field>


        <x-form.field class="col-span-2">
            <x-form.label class="text-primary" for="email">Courriel</x-form.label>
            <div class="flex-1 relative">
                <div class="rounded-md shadow-sm">
                    <x-form.input class="text-primary" wire:model="email" type="email" name="email"
                        placeholder="bernard@gmail.com"></x-form.input>
                </div>
                <x-form.error for="email"></x-form.error>
            </div>
        </x-form.field>

        <x-form.field class="col-span-2">
            <x-form.label class="text-primary" for="tel">Téléphone</x-form.label>
            <div class="flex-1 relative ">
                <div class="rounded-md shadow-sm">
                    <x-form.input class="text-primary" wire:model="tel" type="tel" name="tel"
                        placeholder="400-512-3255"></x-form.input>
                </div>
                <x-form.error for="tel"></x-form.error>
            </div>
        </x-form.field>

        <x-form.field class="col-span-2">
            <x-form.label for="message" class="mb-auto">Message</x-form.label>
            <div class="flex-1 relative ">
                <div class="rounded-md shadow-sm">
                    <x-form.textarea rows="5" name="message" wire:model="message"
                        placeholder="Nous vous contactons pour..."></x-form.textarea>
                </div>
                <x-form.error for="message"></x-form.error>
            </div>
        </x-form.field>


        <div class="col-span-2">
            <x-button class="w-full " @click="open=false">Envoyer</x-button>
        </div>
    </x-form>
</x-modal>
