<x-app-layout>


    <div class='flex-col content-center mt-5 '>
        @foreach($applications as $application)
            <div class="rounded-xl border mb-4 p-5 ml-10 mr-10 shadow-md w-8/8 bg-white items-center">
                <div class="flex justify-between ">
                    <div class="mt-4 mb-6">
                        <div class="mb-3 text-xl font-bold">{{$application->subject}}</div>
                        <div class="text-sm text-neutral-600">{{$application->message}}</div>
                    </div>
                    <div class=" mr-5 border-2 p-5 ml-12 hover:bg-gray-50 flex flex-col items-center">
                        @if(is_null($application->file_url) || $application->file_url=='null'||$application->file_url=='')
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            <p>not file</p>
                        @else
                            <a href="storage/{{$application->file_url}}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5"
                                     stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                                </svg>
                            </a>

                        @endif
                    </div>
                </div>
                @php
                    $answer =  \Illuminate\Support\Facades\DB::table('answers')->where('application_id',$application->id)->first()->body??''
                @endphp
                @if($answer != '')
                    <div class="">
                        <h6 class="text-blue-500">answer:</h6>
                        <p>{!!\Illuminate\Support\Facades\DB::table('answers')->where('application_id',$application->id)->first()->body??''!!}</p>
                    </div>
                @endif
            </div>
        @endforeach

            <div class="mt-12 col-md-auto align-content-center">
                {{$applications->links()}}
            </div>
    </div>


</x-app-layout>
