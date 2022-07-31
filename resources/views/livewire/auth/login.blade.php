<form wire:submit.prevent="login">
    <div>
        @if (session('error'))
            <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                 role="alert">
                <svg aria-hidden="true" class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor"
                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                          clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-bold">Login Failed! </span> {{ session('error') }}

                </div>
            </div>

        @endif
    </div>
    <label class="block text-sm">
        <span class="text-gray-700 dark:text-gray-400">Email</span>
        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
            <input wire:model.lazy="email"
                   class="@error('email')border-red-500 @enderror  block w-full mt-1 text-sm text-black dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                   placeholder="Jane Doe" name="email" value="{{ old('email') }}" autofocus autocomplete="off"/>
            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
            </div>
        </div>
        @error('email') <span class="text-xs text-red-600 dark:text-red-400"> {{$message }} </span>@enderror
    </label>
    <label class="block mt-4 text-sm">
        <div class="py-2" x-data="{ show: true }">
            <span class="text-gray-700 dark:text-gray-400">Password</span>
            <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                <input wire:model.lazy="password" placeholder="" :type="show ? 'password' : 'text'"
                       class="@error('email')border-red-500 @enderror block w-full mt-1 text-sm text-black dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5 ">
                    <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         viewBox="0 0 24 24" stroke="currentColor" @click="show = !show"
                         :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.9998 12C14.9998 13.6569 13.6566 15 11.9998 15C10.3429 15 8.99976 13.6569 8.99976 12C8.99976 10.3431 10.3429 9 11.9998 9C13.6566 9 14.9998 10.3431 14.9998 12Z"
                            stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path
                            d="M2.45801 12C3.73228 7.94288 7.52257 5 12.0002 5C16.4778 5 20.2681 7.94291 21.5424 12C20.2681 16.0571 16.4778 19 12.0002 19C7.52256 19 3.73226 16.0571 2.45801 12Z"
                            stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         viewBox="0 0 24 24" stroke="currentColor" @click="show = !show"
                         :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.8749 18.8246C13.2677 18.9398 12.6411 19 12.0005 19C7.52281 19 3.73251 16.0571 2.45825 12C2.80515 10.8955 3.33851 9.87361 4.02143 8.97118M9.87868 9.87868C10.4216 9.33579 11.1716 9 12 9C13.6569 9 15 10.3431 15 12C15 12.8284 14.6642 13.5784 14.1213 14.1213M9.87868 9.87868L14.1213 14.1213M9.87868 9.87868L6.58916 6.58916M14.1213 14.1213L17.4112 17.4112M3 3L6.58916 6.58916M6.58916 6.58916C8.14898 5.58354 10.0066 5 12.0004 5C16.4781 5 20.2684 7.94291 21.5426 12C20.8357 14.2507 19.3545 16.1585 17.4112 17.4112M17.4112 17.4112L21 21"
                            stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                </div>
            </div>
        </div>
        @error('password') <span class="text-xs text-red-600 dark:text-red-400"> {{$message}} </span> @enderror
    </label>
    <span class="text-xs text-gray-600 dark:text-gray-400">Your password must be at least 8 characters long.</span>
    <label class="block mt-4 text-sm">
        <input type="checkbox" class="form-checkbox" name="remember"> <span
            class="ml-1 text-gray-700 dark:text-gray-400">{{ __('Remember me') }}</span>
    </label>
    <!-- You should use a button here, as the anchor is only used for the example  -->
    <button
        class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
        type="submit">
        {{ __('Login') }}
    </button>
</form>

