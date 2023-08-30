<div x-show="modals['{{ $id }}']" class="h-screen w-screen fixed flex justify-center items-center p-4 ">
  <div aria-hidden="true" class="z-[-1] absolute h-full w-full bg-primary-darker opacity-[0.65]"
	   @click="toggle('{{ $id }}')"></div>
  <div class="p-6 xs:p-8 sm:px-20 sm:pt-14 sm:pb-20 bg-white w-[530px] max-w-[100%] rounded-lg relative  md:h-auto overflow-auto">
    <p class="text-3xl text-primary mb-12">{{ $title }}</p>
     <div>{{$slot}}</div>
    <x-button theme="ghost" class="absolute right-0 top-0 p-4" @click="toggle('{{ $id }}')">
            <svg class="h-[20px] w-[20px] text-primary-dark cursor-pointer hover:text-secondary"
				 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
        </x-button>
  </div>
</div>