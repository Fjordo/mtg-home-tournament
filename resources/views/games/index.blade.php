<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('games.store') }}">
            @csrf

            <div class="form-group">
                <label for="position">Position:</label>
                @foreach($users as $user)
                <div style="text-align:right">
                    <label>{{$loop->index}}:</label>
                    <select id="position_{{$loop->index}}" name="position_{{$loop->index}}" class="form-control" required>
                        <option value="">Select one</option>
                        @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                @endforeach
                <x-input-error :messages="$errors->get('position')" class="mt-2" />
            </div>

            <br>

            <div class="form-group flex mb-2">
                <label for="first_blood" class="mr-2">First Blood:</label>
                <select id="first_blood" name="first_blood" class="form-control ml-auto" required>
                    <option value="">Select one</option>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('first_blood')" class="mt-2" />
            </div>

            <div class="form-group flex mb-2">
                <label for="commander_kill" class="mr-2">Commander Kill:</label>
                <select id="commander_kill" name="commander_kill" class="form-control ml-auto" required>
                    <option value="">Select one</option>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('commander_kill')" class="mt-2" />
            </div>

            <div class="form-group flex mb-2">
                <label for="multi_kill" class="mr-2">Multi Kill:</label>
                <select id="multi_kill" name="multi_kill" class="form-control ml-auto" required>
                    <option value="">Select one</option>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('multi_kill')" class="mt-2" />
            </div>

            <div class="form-group flex mb-2">
                <label for="rescue" class="mr-2">Rescue:</label>
                <select id="rescue" name="rescue" class="form-control ml-auto" required>
                    <option value="">Select one</option>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('rescue')" class="mt-2" />
            </div>

            <div class="form-group flex mb-2">
                <label for="aesthetics" class="mr-2">Aesthetics/Theme:</label>
                <select id="aesthetics" name="aesthetics" class="form-control ml-auto" required>
                    <option value="">Select one</option>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('aesthetics')" class="mt-2" />
            </div>

            <div class="form-group flex mb-2">
                <label for="best_play" class="mr-2">Best Play:</label>
                <select id="best_play" name="best_play" class="form-control ml-auto" required>
                    <option value="">Select one</option>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('best_play')" class="mt-2" />
            </div>

            <br>

            <!-- <textarea name="message" placeholder="{{ __('What\'s on your mind?') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('message') }}</textarea> -->
            <!-- <x-input-error :messages="$errors->get('message')" class="mt-2" /> -->

            <div class="text-center">
                <x-primary-button class="mt-4">{{ __('Submit') }}</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>