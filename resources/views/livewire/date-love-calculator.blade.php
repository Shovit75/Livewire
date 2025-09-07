<div>
    
    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 p-6 rounded-2xl space-y-5 relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
    <form wire:submit="submitForm()">
        <!-- Your DOB -->
        <div>
            <label for="dob1" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                Your Date of Birth
            </label>
            <input type="date" name="dob1" wire:model="dob1"
                class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:border-blue-500 focus:ring focus:ring-blue-200 p-2.5">
            @error('dob1')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <!-- Partner DOB -->
        <div>
            <label for="dob2" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                Your partner's Date of Birth
            </label>
            <input type="date" name="dob2" wire:model="dob2"
                class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:border-blue-500 focus:ring focus:ring-blue-200 p-2.5">
            @error('dob2')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <!-- Buttons -->
        <div class="flex items-center justify-between">
            @if($status == '1')
            <a wire:click="clearAll"
            class="cursor-pointer py-3">
                Clear
            </a>
            @else
            <button type="submit"
                class="cursor-pointer py-3">
                Submit
            </button>
            @endif
        </div>
    </form>
    @if($status == '1')
        <div class="flex items-center justify-between text-center">
            {{$this->compatibility}} %
        </div>
    @endif
    </div>
    
    <div id="displayOver"
        style="display: none; position: absolute; inset: 0; justify-content: center; align-items: center; background: rgba(0,0,0,0.4);">
        <img src="{{ asset('images/handsHeart.jpg') }}" alt="image" style="width: 100%; height: 100%; object-fit: cover;" />
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Livewire.on('showHeart', function () {
                var heart = document.getElementById('displayOver');
                heart.style.transition = "none";
                heart.style.opacity = 0;
                heart.style.display = "flex";
                requestAnimationFrame(() => {
                    heart.style.transition = "opacity 0.3s ease-in";
                    heart.style.opacity = 1;
                });
                setTimeout(function () {
                    heart.style.transition = "opacity 1s ease-out";
                    heart.style.opacity = 0;
                    setTimeout(function () {
                        heart.style.display = "none";
                    }, 1000);
                }, 3000);
            });
        });
    </script>

</div>
