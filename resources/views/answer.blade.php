<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('answer') }}
        </h2>
    </x-slot>

    <div class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto">
            <div class="max-w-md mx-auto my-10 bg-white dark:bg-gray-800 p-5 rounded-md shadow-sm">
                <div class="text-center">
                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Answer
                        to {{$application->user->name??'client'}}</h1>
                    <p class="text-gray-400 dark:text-gray-400">{{$application->message}}</p>
                </div>
                <div class="m-7">
                    <form action="{{route('answer.store',['application'=>$application])}}" method="POST" id="form">
                        @csrf
                        <div class="mb-6">
                            <label for="message" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Your
                                answer</label>

                            <textarea rows="5" name="body" id="message" placeholder="Your Message"
                                      class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                                      required>{!!\Illuminate\Support\Facades\DB::table('answers')->where('application_id',$application->id)->first()->body??''!!}</textarea>
                        </div>
                        <div class="mb-6">
                            <button type="submit"
                                    class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">
                                Send answer
                            </button>
                        </div>
                        <p class="text-base text-center text-gray-400" id="result">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
