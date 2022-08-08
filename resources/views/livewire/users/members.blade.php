<div class=" overflow-x-auto space-y-4">
  <div class="flex justify-between">
    <div class="w-1/4">
      <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
        <x-input wire:model.debounce.500ms="search" class="block w-full pl-10 mt-1 text-sm text-black"
                 placeholder="Search Members..."/>
        <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
               stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
          </svg>
        </div>
      </div>
    </div>
    <a href="{{ route('members.create')  }}">
      <x-button class="px-4 py-2 text-sm font-medium">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
        </svg>
      </x-button>
    </a>
  </div>
  <div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full">
      <x-table>
        <x-slot name="head">
          <x-table.heading sortable wire:click="sortBy('firstname')"
                           :direction="$sortField === 'firstname' ? $sorDirection : null ">Name
          </x-table.heading>
          <x-table.heading sortable wire:click="sortBy('email')"
                           :direction="$sortField === 'email' ? $sorDirection : null ">Email
          </x-table.heading>
          <x-table.heading sortable wire:click="sortBy('phone')"
                           :direction="$sortField === 'phone' ? $sorDirection : null ">Phone
          </x-table.heading>
          @if(request()->routeIs('members.*'))
            <x-table.heading sortable wire:click="sortBy('created_at')"
                             :direction="$sortField === 'created_at' ? $sorDirection : null ">Admission Date
            </x-table.heading>
            <x-table.heading>Actions</x-table.heading>
          @else
            <x-table.heading>Fee Date</x-table.heading>
            <x-table.heading>Due Fee</x-table.heading>
          @endif
        </x-slot>
        <x-slot name="body">
          @forelse($users as $user)
            <x-table.row wire:loading.class.delay="opacity-50">
              <x-table.cell>
                <div class="flex items-center text-sm">
                  <!-- Avatar with inset shadow -->
                  <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    <img class="object-cover w-full h-full rounded-full"
                         src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                         alt="" loading="lazy"/>
                    <div class="absolute inset-0 rounded-full shadow-inner"
                         aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold mb-1">{{ $user->full_name  }}</p>
                    <span

                      class="px-2 py-1 text-xs font-semibold leading-tight  rounded-full
                    text-{{ ($user->feeStructure->status = 'Paid' &&  feeDueDateStatus($user)) ? 'green' : 'red' }}-700
                    bg-{{ ($user->feeStructure->status = 'Paid' &&  feeDueDateStatus($user)) ? 'green' : 'red' }}-100
                    dark:text-white dark:bg-{{ ($user->feeStructure->status = 'Paid' &&  feeDueDateStatus($user))  ? 'green' : 'red' }}-600">
                    @if( feeDueDateStatus($user) > 0 && $user->feeStructure->status = 'Paid')
                        Paid
                      @else
                        Unpaid
                      @endif
                </span>
                  </div>
                </div>
              </x-table.cell>
              <x-table.cell>{{ $user->email }}</x-table.cell>
              <x-table.cell>
                <div class="flex items-center">
                  <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400"><span
                        class="font-semibold">Phone: </span>{{ $user->phone ?? 'N/A' }}
                    </p>
                    <p class="text-sm text-gray-600 dark:text-gray-400"><span
                        class="font-semibold">Mobile: </span>{{ $user->mobile ?? 'N/A'  }}
                    </p>
                  </div>
                </div>
              </x-table.cell>
              @if(request()->routeIs('members.*'))
                <x-table.cell>
                  {{--                        <span class="px-2 py-1 font-semibold leading-tight text-{{$user->status_color}}-700 bg-{{$user->status_color}}-100 rounded-full dark:text-white dark:bg-{{$user->status_color}}-600"></span>--}}
                  {{$user->created_at->format('M d, Y')}}
                </x-table.cell>
                <x-table.cell>
                  <div class="flex items-center space-x-4 text-sm">
                    <a href="{{ route('members.edit', $user->gym_id) }}">
                      <button
                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Edit">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                             viewBox="0 0 20 20">
                          <path
                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                          </path>
                        </svg>
                      </button>
                    </a>
                    <button
                      wire:click="confirmUserDeletion({{ $user->id }})"
                      wire:loading.attr="disabled"
                      class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Delete">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                           viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                              clip-rule="evenodd"></path>
                      </svg>
                    </button>
                  </div>
                </x-table.cell>
              @else
                <x-table.cell>{{$user->feeStructure->issue_fee_date ?? 'N/A'}}</x-table.cell>
                <x-table.cell>
                  @if( feeDueDateStatus($user) > 0)
                    {{  feeDueDateStatus($user) ?? 'N/A' }}
                    Days Remaining
                  @elseif(is_null(feeDueDateStatus($user)))
                    N/A
                  @else
                    <x-button>Unpaid</x-button>
                  @endif

                </x-table.cell>
              @endif
            </x-table.row>
          @empty
            <x-table.row>
              <x-table.cell colspan="5">
                <div class="flex justify-center items-center space-x-2">

                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-cool-gray-400"
                       fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                  <span
                    class="font-medium py-8 text-cool-gray-500 text-xl">Sorry! There are no result for “{{$search}}”</span>

                </div>
              </x-table.cell>
            </x-table.row>
          @endforelse
        </x-slot>
      </x-table>
      {{ $users->links('pagination::custom') }}
    </div>
  </div>

  {{-- Modal Start --}}
  @if($confirmingUserDeletion)
    <x-modal wire:model="confirmingUserDeletion">
      <div class="p-6">
        <div class="grid place-content-center">
          <div
            class="h-16 w-16 inline-grid place-content-center m-auto p-3 text-red-600 bg-red-200 rounded-full ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
            </svg>
          </div>
          <h2 class="text-black text-xl font-semibold	mt-3">Are You Sure?</h2>
        </div>

        <div class="my-3">
          <p class="text-sm text-gray-500 text-center ">Do you really want to delete <span
              class="font-semibold"> {{ $full_name ?? 'User' }}</span> ?
          </p>
          <p class="text-sm text-gray-500 text-center">This process cannot be undone</p>
        </div>


        <div
          class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
          <button
            class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gra"
            wire:click="$set('confirmingUserDeletion', false)"
            wire:loading.attr="disabled">
            {{ __('Cancel') }}
          </button>
          <button wire:click="deleteUser({{ $confirmingUserDeletion  }})"
                  class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red"
                  wire:loading.attr="disabled">
            {{ __('Delete') }}
          </button>
        </div>
      </div>
    </x-modal>
  @endif
  {{-- Modal Ends   --}}
</div>
