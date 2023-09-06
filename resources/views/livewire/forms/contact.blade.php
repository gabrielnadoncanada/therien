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





        {{-- <div
            class="flex gap-x-2 text-white rounded-md px-3 pb-1.5 pt-2.5 shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">
            <div class="flex lg:justify-between flex-col">
                <label for="email" class="block text-sm font-medium leading-6 ">Email</label>
                <span class="text-sm leading-6 " id="email-optional"><small>Optional</small></span>
            </div>


            <div>
                <div class="relative mt-2 rounded-md shadow-sm">
                    <input type="email" name="email" id="email"
                        class="block w-full rounded-md border-0 py-1.5 pr-10 text-red-900 ring-1 ring-inset ring-red-300 placeholder:text-red-300 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:text-sm sm:leading-6"
                        placeholder="you@example.com" value="adamwathan" aria-invalid="true"
                        aria-describedby="email-error">
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                        <svg class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>

                <p class="mt-2 text-sm " id="email-description">We'll only use this for spam.</p>
                <p class="mt-2 text-sm text-red-600" id="email-error">Not a valid email address.</p>
            </div>
        </div> --}}



        <x-form.field>
            <x-form.label class="text-primary" for="firstName">Prénom</x-form.label>
            <div class="flex-1 relative mt-1 ">
                <div class="rounded-md shadow-sm">
                    <x-form.input wire:model="firstName" class="text-primary " name="firstName"
                        placeholder="Entrer votre prénom"></x-form.input>
                </div>
                <x-form.error for="firstName"></x-form.error>
            </div>
        </x-form.field>

        <x-form.field>
            <x-form.label class="text-primary" for="lastName">Nom</x-form.label>
            <div class="flex-1 relative mt-1  ">
                <div class="rounded-md shadow-sm">
                    <x-form.input wire:model="lastName" class="text-primary " name="lastName"
                        placeholder="Entrer votre nom"></x-form.input>
                </div>
                <x-form.error for="lastName"></x-form.error>
            </div>
        </x-form.field>


        <x-form.field class="col-span-2">
            <x-form.label class="text-primary" for="email">Courriel</x-form.label>
            <div class="flex-1 relative mt-1 ">
                <div class="rounded-md shadow-sm">
                    <x-form.input class="text-primary" wire:model="email" type="email" name="email"
                        placeholder="bernard@gmail.com"></x-form.input>
                </div>
                <x-form.error for="email"></x-form.error>
            </div>
        </x-form.field>

        <x-form.field class="col-span-2">
            <x-form.label class="text-primary" for="tel">Téléphone</x-form.label>
            <div class="flex-1 relative  mt-1  ">
                <div class="rounded-md shadow-sm">
                    <x-form.input class="text-primary" wire:model="tel" type="tel" name="tel"
                        placeholder="400-512-3255"></x-form.input>
                </div>
                <x-form.error for="tel"></x-form.error>
            </div>
        </x-form.field>

        <x-form.field class="col-span-2">
            <x-form.label for="message" class="mb-auto">Message</x-form.label>
            <div class="flex-1 relative  mt-1  ">
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
