<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-white-800 leading-tight">
                Scholarship Application / Create
            </h2>
            <a href="{{ route('applications.index') }}" class="bg-slate-700 text-sm rounded-md text-white px-3 py-3">Back</a>
        </div>
    </x-slot>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route( 'applications.store' ) }}" method="post">
                        @csrf
                        <div>

                        @if($step === 1)
                            <label for="" class="text-lg font-medium">User Name</label>
                            <div class="my-3">
                                <input value="{{ old('name' ) }}" name="name" placeholder="Enter full name" type="text" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('name')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <label for="" class="text-lg font-medium">Email</label>
                            <div class="my-3">
                                <input value="{{ old('email' ) }}" name="email" placeholder="Enter Email"type="text" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('email')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <label for="" class="text-lg font-medium">Date of Birth</label>
                            <div class="my-3">
                                <input wire:model="dob"  type="date" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('dob')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <label for="" class="text-lg font-medium">Phone Number</label>
                            <div class="my-3">
                                <input wire:model="phone" type="text" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('phone')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>
                        @endif

                        @if($step === 2)
                            <label for="" class="text-lg font-medium">Address</label>
                            <div class="my-3">
                                <input wire:model="address" placeholder="Street Address" type="text" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('address')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <label for="" class="text-lg font-medium">City</label>
                            <div class="my-3">
                                <input wire:model="city" placeholder="city" type="text" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('city')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <label for="" class="text-lg font-medium">State</label>
                            <div class="my-3">
                                <input wire:model="state"  type="text" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('state')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <label for="" class="text-lg font-medium">Zip Code</label>
                            <div class="my-3">
                                <input wire:model="zip" type="text" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('zip')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>
                        @endif

                        @if($step === 3)
                            <label for="" class="text-lg font-medium">Are you Currently a high school senior or an undergraduate college student?</label>
                            <div class="my-3">
                                <input wire:model="graduate_status" type="text" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('graduate_status')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <label for="" class="text-lg font-medium">High School seniors: What High School will you be graduating from?</label>
                            <div class="my-3">
                                <input wire:model="high_school"  type="text" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('high_school')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <label for="" class="text-lg font-medium">Current or intended post-secondary school(s)</label>
                            <div class="my-3">
                                <input wire:model="post_secondary"  type="text" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('post_secondary')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <label for="" class="text-lg font-medium">Current or intended focus of Study/Major</label>
                            <div class="my-3">
                                <input wire:model="study_focus" type="text" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('study_focus')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                             <label for="" class="text-lg font-medium">Are you a first generation college student?</label>
                            <div class="my-3">
                                <input wire:model="first_gen"  type="boolean" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('first_gen')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <label for="" class="text-lg font-medium">Are you currently a member of CU Hawaii FCU?</label>
                            <div class="my-3">
                                <input wire:model="member_status" type="boolean" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('member_status')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <label for="" class="text-lg font-medium">Have you ever been awarded a scholarship from CU Hawaii?</label>
                            <div class="my-3">
                                <input wire:model="previous_scholarship"  type="boolean" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('previous_scholarship')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <label for="" class="text-lg font-medium">What is your current GPA?</label>
                            <div class="my-3">
                                <input wire:model="gpa" type="decimal" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('gpa')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>
                        @endif

                        @if($step === 4)
                            <label for="" class="text-lg font-medium">Your Essay</label>
                            <div class="my-3">
                                <input wire:model="essay" placeholder="Your essay" type="textarea" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('essay')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <label for="" class="text-lg font-medium">Short Answers</label>
                            <div class="my-3">
                                <input wire:model="short_answer" placeholder="Your essay" type="textarea" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                                @error ('short_answer')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>
                        @endif

                             
                            <button type="button" class="bg-slate-700 hover:bg-slate-600 text-sm rounded-md text-white px-5 py-3" wire:click="previousStep">Previous</button>
                            <button type="button" class="bg-slate-700 hover:bg-slate-600 text-sm rounded-md text-white px-5 py-3" wire:click="nextStep">Next</button>
                            <div class="my-3">
                                <button type="button" class="bg-slate-700 hover:bg-slate-600 text-sm rounded-md text-white px-5 py-3" wire:click="submit">Submit</button>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
