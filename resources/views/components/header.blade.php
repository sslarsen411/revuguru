@props(['step' => ''])
<header class="flex flex-row gap-3 py-4 w-full bg-slate-900 text-amber-500">
    <div class="bg-amber-300 rounded-full ml-4">
        <img src="{{URL::asset("/images/review-guru-bust.png")}}" class="h-16 px-2 w-auto inline" alt="guru">
    </div>
    <div>
        <h1 class="self-start text-2xl md:text-3xl lg:text-4xl m-4">
            Rave Review Guru {{$step}}
        </h1>
    </div>

</header>
