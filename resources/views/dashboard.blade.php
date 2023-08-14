<x-app-layout>
    <div class="mt-6 ml-6">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form>

                        <div class="mb-6">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" required autofocus  />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>

                        <div class="mb-6">
                            <x-textarea-label for="message" :value="__('Your Message')" />
                            <x-textarea-input id="message" name="message" :value="old('message')" required autofocus  />
                            <x-textarea-error class="mt-2" :messages="$errors->get('message')" />
                        </div>



                        <label class=" text-sm font-medium text-gray-900 dark:text-gray-300">Labels</label>
                        <div class="flex items-center mb-4">

                            <input checked id="checkbox" type="checkbox" name="labels[]" value="bug" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" >
                            <label for="checkbox" class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">bug</label>
                            &nbsp;  &nbsp;
                            <input id="checkbox" type="checkbox" name="labels[]" value="question" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-1" class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">question</label>
                            &nbsp;  &nbsp;
                            <input id="checkbox" type="checkbox" name="labels[]" value="enhancement" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-1" class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">enhancement</label>
                        </div>

                        <label class=" text-sm font-medium text-gray-900 dark:text-gray-300">Categories</label>
                        <div class="flex items-center mb-4">

                            <input id="checkbox" type="checkbox" name="Categories[]" value="Uncategorized" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" >
                            <label for="checkbox" class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">Uncategorized</label>
                            &nbsp;  &nbsp;
                            <input id="checkbox" type="checkbox" name="Categories[]" value="Billing/Payments" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-1" class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">Billing/Payments</label>
                            &nbsp;  &nbsp;
                            <input id="checkbox" type="checkbox" name="Categories[]" value="Technical Question" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-1" class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">Technical Question</label>
                        </div>


                        <div class="mb-6">
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Priority</label>
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option disabled selected >Select Priority</option>
                                <option>Low</option>
                                <option>Middle</option>
                                <option>High</option>
                            </select>
                        </div>



                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                </div>

                                <input id="dropzone-file" type="file" class="hidden" multiple />
                            </label>
                        </div>

                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
