<div>
    {{-- Be like water. --}}
    <h1 class="mb-1 font-medium"> {{ $greeting }}</h1>

    <input type="text" class="mt-2 mb-1 block w-full p-4 border rounded-md bg-gray-700 text-white" id="newName" wire:model.live="newName">

    <button class="mt-2 mb-2 inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal"
        wire:click="toggleGreeting">
        Toggle the languages.
    </button>
    
    <button class="mt-2 mb-2 inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal"
        wire:click="showHiddenMessage">
        Show a hidden message.
    </button>

    <h1 class="mb-2 mt-2 font-medium"> {{ $hiddenMessage }} </h1>

</div>
