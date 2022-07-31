<x-app-layout title="Add Members">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Add Members
        </h2>
        <x-validation-errors class="mb-4"/>
        <form method="POST" action="{{ route('members.store') }}">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-3 sm:grid-cols-2 gap-5 pt-8 bg-white rounded-xl p-4 shadow-sm">
                <!-- FirstName-->
                <x-input.group label="Firstname" for="firstname" :error="$errors->first('firstname')">
                    <x-input.text  id="firstname" name="firstname" value="{{ old('firstname', isset($user) ? $user->firstname : '' ) }}" placeholder="Muhammad">
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </x-input.text>
                </x-input.group>

                <!-- Middle-name-->
                <x-input.group label="Middlename" for="middlename" :error="$errors->first('middlename')">
                    <x-input.text  id="middlename" name="middlename" value="{{ old('middlename', isset($user) ? $user->middlename : '' ) }}" placeholder="Ahmad">
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </x-input.text>
                </x-input.group>
                <!-- Lastname-->
                <x-input.group label="Lastname" for="lastname" :error="$errors->first('lastname')">
                    <x-input.text  id="lastname" name="lastname" value="{{ old('lastname', isset($user) ? $user->lastname : '' ) }}" placeholder="Ali">
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </x-input.text>
                </x-input.group>

                <!-- Email-->
                <x-input.group label="Email" for="email" :error="$errors->first('email')">
                    <x-input.text  id="email" name="email" placeholder="name@mail.com">
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                    </x-input.text>
                    <x-input-error for="email" class="mt-1 text-xs text-red-600 dark:text-red-400" />
                </x-input.group>

                <!-- DOB-->
                <x-input.group label="DOB" for="date_of_birth" :error="$errors->first('date_of_birth')">
                    <x-input.date>
                    <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    </x-input.date>
                </x-input.group>
                <!-- Gender-->
                <x-input.group label="Gender" for="gender" :error="$errors->first('gender')">
                    <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option>Select Gender</option>
                        @foreach(App\Models\User::GENDER  as $key => $value)
                            <option value="{{$key}}"
                                    @if (old('gender') == $key) selected="selected"
                                    @elseif(isset($user) && $errors->isEmpty())
                                        @if($key == $user->gender)
                                            selected
                                @endif
                                @endif
                            >{{$value}}</option>

                        @endforeach
                    </select>
                    <x-input-error for="email" class="mt-1 text-xs text-red-600 dark:text-red-400" />
                </x-input.group>
                <!-- CNIC-->
                <x-input.group label="CNIC" for="cnic_number" :error="$errors->first('cnic')">
                    <x-input.text type="text"  id="cnic_number" name="cnic" placeholder="XXXXX-XXXXXXX-X" value="{{old('cnic')}}"  pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" title="XXXXX-XXXXXXX-X" >
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                            </svg>
                        </div>
                    </x-input.text>
                    <x-input-error for="cnic" class="mt-1 text-xs text-red-600 dark:text-red-400" />
                </x-input.group>
                <!-- Phone Number-->
                <x-input.group label="Phone Number" for="phone_number" :error="$errors->first('phone_number')">
                    <x-input.text type="tel"  id="phone_number" name="phone_number" placeholder="+92********">
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                    </x-input.text>
                    <x-input-error for="phone_number" class="mt-1 text-xs text-red-600 dark:text-red-400" />
                </x-input.group>
                <!-- Mobile Number-->
                <x-input.group label="Mobile Number" for="mobile_number" :error="$errors->first('mobile_number')">
                    <x-input.text type="tel"  id="mobile_number" name="mobile_number" placeholder="+92********">
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </x-input.text>
                    <x-input-error for="mobile_number" class="mt-1 text-xs text-red-600 dark:text-red-400" />
                </x-input.group>
            </div>
            <hr>
            <div class="bg-white rounded-xl p-4 shadow-sm">
                <x-input.group label="Address" for="address" :error="$errors->first('address')">
                    <x-input.rich-text id="address" />
                </x-input.group>
            </div>
                <x-button>
                    {{ __('Save') }}
                </x-button>
        </form>
    </div>
    @push('style')
        <!-- Pikaday CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
        <!-- Trix CSS-->
        <link rel="stylesheet" href="https://unpkg.com/trix@2.0.0-beta.0/dist/trix.css">
    @endpush
    @push('scripts')
        <!-- Pikaday JS-->
        <script src="https://unpkg.com/moment"></script>
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js" defer></script>
        <!-- Trix JS-->
        <script src="https://unpkg.com/trix@2.0.0-beta.0/dist/trix.umd.js" defer></script>
    @endpush

</x-app-layout>