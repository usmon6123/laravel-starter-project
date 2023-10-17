<div class='flex items-center justify-center mt-5'>  <div class="rounded-xl border p-5 shadow-md w-9/12 bg-white">
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

        <div class="mt-4 mb-6">
            <div class="mb-3 text-xl font-bold">{{$subject}}</div>
            <div class="text-sm text-neutral-600">{{$message}}</div>
        </div>

        <div>
            <div class="flex items-center justify-between text-slate-500">
                {{$email}}
            </div>
        </div>
    </div>
</div>
