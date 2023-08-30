

<x-form>
    <h2 class="font-display text-base font-semibold text-neutral-950">Work inquiries</h2>
    <div class="isolate mt-6 -space-y-px rounded-2xl bg-white/50">
		<x-form.field>
			<x-form.input id="name" autocomplete="name" type="text" name="name" placeholder=""></x-form.input>
			<x-form.label for="name" value="Name"></x-form.label>
		</x-form.field>

		<x-form.field>
			<x-form.input id="email" autocomplete="email" type="email" name="email" placeholder=""></x-form.input>
			<x-form.label for="email" value="Email"></x-form.label>
		</x-form.field>

		<x-form.field>
			<x-form.input id="phone" autocomplete="phone" type="tel" name="phone" placeholder=""></x-form.input>
			<x-form.label for="phone" value="Phone"></x-form.label>
		</x-form.field>

		<x-form.field>
			<x-form.input id="address" autocomplete="address" type="text" name="address" placeholder=""></x-form.input>
			<x-form.label for="address" value="Address"></x-form.label>
		</x-form.field>

		<x-form.field>
			<x-form.input id="message" autocomplete="message" type="text" name="message" placeholder=""></x-form.input>
			<x-form.label for="message" value="Message"></x-form.label>
		</x-form.field>
    </div>

	<x-button class="mt-10">
		<span class="relative top-px">Let’s work together</span>
	</x-button>
</x-form>
