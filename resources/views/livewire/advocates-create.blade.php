<div>
    <section class="bg-gray-50 dark:bg-gray-200">

        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">New Advocate</h2>
            <form wire:submit="save">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full
                            Name</label>
                        <input type="text" wire:model="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder=" example Advocates">
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" wire:model="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Your Email">
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="phone"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                        <input type="text" wire:model="phone" id="phone"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="07....">
                        @error('phone')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="url"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website
                            (optional))</label>
                        <input type="text" wire:model="website" id="url"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="https://sitename.com/co.ke..../">
                        @error('website')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="address"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">address</label>
                        <input type="text" wire:model="address" id="address"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="box,9898,Nairobi">
                        @error('address')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="Location"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                        <input type="text" wire:model="location" id="location"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Nairobi">
                        @error('location')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                                {{ $message }}</p>
                        @enderror
                    </div>


                    <div class="sm:col-span-2">
                        <label for="bio"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bio</label>
                        <textarea id="bio" wire:model="bio" rows="8"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Your bio here">

                  </textarea>
                        @error('bio')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                                {{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-800 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-green-500">
                    Save
                </button>
            </form>
        </div>

    </section>
    @include('errors.messages')
</div>
