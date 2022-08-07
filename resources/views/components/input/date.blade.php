<div
    x-data
    x-init="new Pikaday({ field: $refs.input, format:'YYYY/MM/DD', yearRange:100 })"
    @change="$dispatch('input', $event.target.value)"
    class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400"
>

    <input
        x-ref="input"
        {{ $attributes }} type="text"
        class="@error($attributes->first()) border-red-600 @enderror block w-full pr-10 mt-1 text-sm text-black dark:text-gray-300  dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="1997/10/01" autocomplete="off" />
    {{ $slot }}
</div>
