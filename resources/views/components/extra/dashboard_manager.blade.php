<div class='flex items-center justify-center mt-5'>
    <div class="rounded-xl border p-5 shadow-md w-9/12 bg-white">
        <div class="flex w-full items-center justify-between border-b pb-3">
            <div class="flex items-center space-x-3">
                <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
                <div class="text-lg font-bold text-slate-700">{{$name}} </div>
            </div>
            <div class="flex items-center space-x-8">
                <button class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">id:{{$id}}</button>
                <div class="text-xs text-neutral-500">{{$date}}</div>
            </div>
        </div>
        <div class="flex justify-between ">
            <div class="mt-4 mb-6">
                <div class="mb-3 text-xl font-bold">{{$subject}}</div>
                <div class="text-sm text-neutral-600">{{$message}}</div>
            </div>
            <div class="mt-12 border-2 p-5 ml-12 hover:bg-gray-50 flex flex-col items-center">
                @if(is_null($fileUrl) || $fileUrl=='null'||$fileUrl=='')
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                    <p>not file</p>
                @else
                    <a href="storage/{{$fileUrl}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                        </svg>
                    </a>
                @endif
            </div>
        </div>
        <div class="flex justify-between mt-2 ">
            <div class="flex items-center justify-between text-slate-500">
                {{$email}}
            </div>
            @if((is_null($answer)||$answer==''))
                <a href="{{ route('answer.get-form',['application'=>$app_id]) }}">
                    <button
                        class="py-2 px-4 shadow-md no-underline rounded-full bg-green-400 text-black font-sans font-semibold text-sm border-blue btn-primary hover:text-white hover:bg-black focus:outline-none active:shadow-none mr-2">
                        Javob berish
                    </button>
                </a>
            @elseif(!(is_null($answer)||$answer==''))
                <a href="{{ route('answer.get-form',['application'=>$app_id]) }}">
                    <button
                        class="py-2 px-4 shadow-md no-underline rounded-full bg-green-400 text-black font-sans font-semibold text-sm border-blue btn-primary hover:text-white hover:bg-black focus:outline-none active:shadow-none mr-2">
                        edit
                    </button>
                </a>
        </div>
        <div>

            <h6 class="text-blue-500">answer:</h6>
            <p>{{$answer}}</p>
            @endif
        </div>

    </div>
</div>
