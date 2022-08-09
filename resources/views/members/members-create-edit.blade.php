<x-app-layout title="Add Members">
    <div class="container grid px-6 mx-auto">
            <form method="POST" action="{{ isset($user) ? route('members.update', $user->id) : route('members.store') }}" class="">
                <div class="flex justify-between">

                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Add Members
                    </h2>
                    @csrf
                    @isset($user)
                        @method('PUT')
                    @endisset
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Gym ID</span>
                        <!-- focus-within sets the color for the icon when input is focused -->
                        <div
                            class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input
                                name="gym_id"
                                type="number"
                                {{ isset($user) ? 'disabled' : 'type="number"' }}
                                value="{{ old('gym_id', isset($user) ? $user->gym_id : '' ) }}"
                                class="block w-full pr-10 mt-1 text-sm text-black @isset($user) bg-gray-100 @endisset dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                                placeholder="Enter Gym ID Number"/>
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                            </div>
                        </div>
                    <x-input-error for="gym_id" class="mt-1 text-xs text-red-600 dark:text-red-400"/>
                    </label>



                </div>
                <!-- Fee -->
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                    Fee
                </h4>

                <div class="grid grid-cols-1 mb-8 lg:grid-cols-2 sm:grid-cols-2 gap-5 pt-8 bg-white rounded-xl p-4 shadow-sm dark:bg-gray-800 dark:text-red-600">
            <!-- Admission Fee-->
            <x-input.group label="Admission Fee" for="admission_fee" :error="$errors->first('admission_fee')">
                <x-input.text id="admission_fee" name="admission_fee" type="number"
                              value="{{ old('admission_fee', isset($user->feeStructure) ? $user->feeStructure->admission_fee : '' ) }}"
                              placeholder="Enter Admission fee">
                    <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </x-input.text>
                <x-input-error for="admission_fee" class="mt-1 text-xs text-red-600 dark:text-red-400"/>

            </x-input.group>

            <x-input.group label="Monthly Fee" for="monthly_fee" :error="$errors->first('monthly_fee')">
                <x-input.text id="monthly_fee" name="monthly_fee" type="number"
                              value="{{ old('monthly_fee', isset($user->feeStructure) ? $user->feeStructure->monthly_fee : '' ) }}"
                              placeholder="Enter Monthly fee">
                    <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </x-input.text>
                <x-input-error for="monthly_fee" class="mt-1 text-xs text-red-600 dark:text-red-400"/>

            </x-input.group>
        </div>
        <!-- Basic Information -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">Basic Information</h4>
{{--        <x-validation-errors class="mb-4" />--}}

            <div class="grid grid-cols-1 lg:grid-cols-4 sm:grid-cols-2 gap-5 pt-8 bg-white rounded-xl p-4 shadow-sm dark:bg-gray-800 dark:text-red-600">
                <!-- FirstName-->
                <x-input.group label="Firstname" for="firstname" :error="$errors->first('firstname')">
                    <x-input.text id="firstname" name="firstname"
                                  value="{{ old('firstname', isset($user) ? $user->firstname : '' ) }}"
                                  placeholder="Enter firstname">
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                    </x-input.text>
                    <x-input-error for="firstname" class="mt-1 text-xs text-red-600 dark:text-red-400"/>

                </x-input.group>

                <!-- Middle-name-->
                <x-input.group label="Middlename" for="middlename" :error="$errors->first('middlename')">
                    <x-input.text id="middlename" name="middlename"
                                  value="{{ old('middlename', isset($user) ? $user->middlename : '' ) }}"
                                  placeholder="Enter middlename">
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                    </x-input.text>
                </x-input.group>
                <!-- Lastname-->
                <x-input.group label="Lastname" for="lastname" :error="$errors->first('lastname')">
                    <x-input.text id="lastname" name="lastname"
                                  value="{{ old('lastname', isset($user) ? $user->lastname : '' ) }}" placeholder="Enter lastname">
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                    </x-input.text>
                    <x-input-error for="lastname" class="mt-1 text-xs text-red-600 dark:text-red-400"/>

                </x-input.group>

                <!-- Email-->
                <x-input.group label="Email" for="email" :error="$errors->first('email')">
                    <x-input.text id="email" name="email" value="{{ old('email', isset($user) ? $user->email : '' ) }}"
                                  placeholder="Enter email">
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                    </x-input.text>
                    <x-input-error for="email" class="mt-1 text-xs text-red-600 dark:text-red-400"/>
                </x-input.group>

                <!-- DOB-->
                <x-input.group label="DOB" for="date_of_birth" :error="$errors->first('date_of_birth')">
                    <x-input.date name="date_of_birth"
                                  value="{{ old('date_of_birth', isset($user) ? $user->date_of_birth_format : '' ) }}">
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </x-input.date>
                    <span class="text-xs text-gray-600 dark:text-gray-400">Date format : DD-MM-YYYY.</span>
                    <x-input-error for="date_of_birth" class="mt-1 text-xs text-red-600 dark:text-red-400"/>
                </x-input.group>
                <!-- Gender-->
                <x-input.group label="Gender" for="gender" :error="$errors->first('gender')">
                    <select name="gender"
                            class="@error('gender') border-red-600 @enderror block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="0">Select Gender</option>
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
                    <x-input-error for="gender" class="mt-1 text-xs text-red-600 dark:text-red-400"/>
                </x-input.group>
                <!-- CNIC-->
                <x-input.group label="CNIC" for="cnic" :error="$errors->first('cnic')">
                    <x-input.text id="cnic" type="text" name="cnic" placeholder="XXXXX-XXXXXXX-X"
                                  value="{{old('cnic', isset($user) ? $user->cnic : '' )}}"
                                  {{--pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}"--}}
                                  title="Please Enter CNIC in this format XXXXX-XXXXXXX-X" >
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                            </svg>
                        </div>
                    </x-input.text>
                    <x-input-error for="cnic" class="mt-1 text-xs text-red-600 dark:text-red-400"/>
                </x-input.group>
                <!-- Phone Number-->
                <x-input.group label="Phone Number" for="phone" :error="$errors->first('phone')">
                    <x-input.text id="phone" type="tel" name="phone"
                                  value="{{ old('phone', isset($user) ? $user->phone : '' ) }}"
                                  placeholder="Enter phone number">
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                    </x-input.text>
                    <span class="text-xs text-gray-600 dark:text-gray-400">Phone format : +92346XXXXX.</span>
                    <x-input-error for="phone" class="mt-1 text-xs text-red-600 dark:text-red-400"/>
                </x-input.group>
                <!-- Mobile Number-->
                <x-input.group label="Mobile Number" for="mobile" :error="$errors->first('mobile')">
                    <x-input.text id="mobile" type="tel" name="mobile"
                                  value="{{ old('mobile', isset($user) ? $user->mobile : '' ) }}"
                                  placeholder="Enter mobile number">
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </x-input.text>
                    <x-input-error for="mobile" class="mt-1 text-xs text-red-600 dark:text-red-400"/>
                </x-input.group>

                <!-- Kg-->
                <x-input.group label="Weight (KG)" for="weight" :error="$errors->first('weight')">
                    <x-input.text name="weight" type="number"
                                  value="{{ old('weight', isset($user) ? $user->weight : '' ) }}" id="inputKilograms"
                                  placeholder="77"
                                  oninput="weightConverter(this.value)" onchange="weightConverter(this.value)">
                        <button type="button"
                                class="absolute inset-y-0 right-0 px-4 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-r-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            LB : <span id="outputPounds"></span>
                        </button>
                    </x-input.text>
                    <x-input-error for="weight" class="mt-1 text-xs text-red-600 dark:text-red-400"/>
                </x-input.group>
                <!-- Height-->
                <x-input.group label="Height (Feet)" for="height" :error="$errors->first('height')">
                            <x-input.text name="feet" type="number" id="feet"
                                          value="{{ old('feet', isset($height[0]) ? $height[0] : '' ) }}"
                                          placeholder="5">
                                <button type="button"
                                        class="absolute inset-y-0 right-0 px-4 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-r-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                    Feet
                                </button>
                            </x-input.text>
                </x-input.group>
                <x-input.group label="Height (Inches)" for="height" :error="$errors->first('height')">
                            <x-input.text name="inches" type="number" id="inches"
                                             value="{{ old('inches', isset($height[1]) ? $height[1] : ''  ) }} "
                                             placeholder="5">
                        <button type="button"
                                class="absolute inset-y-0 right-0 px-4 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-r-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Inches
                        </button>
                    </x-input.text>
                </x-input.group>
            </div>
            <div class="bg-white rounded-xl p-4 shadow-sm dark:bg-gray-800 mb-8">
                <x-input.group label="Address" for="address" :error="$errors->first('address')">
                        <textarea name="address" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter address">@isset($user) {{ $user->address }} @endisset</textarea>
                </x-input.group>
               <div class="mt-4">
                   <button  class='px-10 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green'>
                       Save
                   </button>
               </div>
            </div>


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
        <script>
            function weightConverter(valNum) {
                document.getElementById("outputPounds").innerHTML = valNum * 2.2046;
            }
        </script>
    @endpush

</x-app-layout>
