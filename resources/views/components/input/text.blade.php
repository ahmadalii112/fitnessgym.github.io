<div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
    <input
        {{ $attributes }} type="text"
        class="@error($attributes->first()) border-red-600 @enderror block w-full pr-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" autocomplete="off" />
        {{ $slot }}
</div>

