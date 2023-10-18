<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if(auth()->user()->role->name == 'manager')
                        <div class="text-blue-500 font-bold text-2xl">Received Applications</div>
                        @foreach($applications as $application)
{{--                            @dd($application);--}}

                            <x-extra.dashboard_manager>
                                <x-slot:name>{{$application->user->name}}</x-slot:name>
                                <x-slot:id>{{$application->user->id}}</x-slot:id>
                                <x-slot:date>{{$application->updated_at}}</x-slot:date>
                                <x-slot:subject>{{$application->subject}}</x-slot:subject>
                                <x-slot:message>{{$application->message}}</x-slot:message>
                                <x-slot:email>{{$application->user->email}}</x-slot:email>
                                <x-slot:fileUrl>{{$application->file_url}}</x-slot:fileUrl>
                            </x-extra.dashboard_manager>
                        @endforeach

                        <div class="mt-12 col-md-auto align-content-center">
                            {{$applications->links()}}
                        </div>

                    @else
                        <div class='flex items-center justify-center '>
                            <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
                                <div class='max-w-md mx-auto space-y-6'>

                                    <form action="{{route('applications.store')}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <h2 class="text-2xl font-bold ">Submit your application</h2>
                                        <hr class="my-6">
                                        <label class="uppercase text-sm font-bold opacity-70">Subject</label>
                                        <input type="text" name="subject"
                                               class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                        <label class="uppercase text-sm font-bold opacity-70">Message</label>
                                        <textarea rows="5" name="message"
                                                  class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"></textarea>
                                        <label class="uppercase text-sm font-bold opacity-70">File</label>
                                        <input type="file" name="file"
                                               class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                        <input type="submit"
                                               class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300"
                                               value="Send">
                                    </form>

                                </div>
                            </div>
                        </div>

                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
