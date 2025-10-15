{{--@props(['step' => ''])--}}
<header class="flex flex-row justify-between gap-3 py-4 w-full bg-slate-900">
    <div class=" flex flex-row ml-4">
        <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/review-guru-bust.webp")}}"
             class="h-16 px-2 w-auto inline bg-amber-400 rounded-full" alt="guru">
        <div class="flex flex-col justify-center">
        <h1 class="inline self-center text-2xl md:text-3xl lg:text-4xl ml-4 text-amber-600">
            Rave Review Guru
        </h1>
        <h2 class="text-sm italic self-center text-amber-500">Review Reverberation</h2>
        </div>
    </div>
    <div class=" justify-start self-center">
        <a href="/negative-reviews-dont-panic" class=" text-zinc-50 text-2xl hover:underline hover:text-orange-300" title="home">
            <span>Negative Reviews?  Don&apos;t Panic!</span>
        </a>
    </div>
    <div class=" justify-end self-end">

        <nav>
            <ul id="nav_menu" class="hidden">
                <li>
                    <a href="/" class="menu_item" title="home">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="/solutions" class="menu_item" title="solutions">
                        <span>Solutions</span>
                    </a>
                </li>
                <li>
                    <a href="/blog" class="menu_item" title="blog">
                        <span>Blog</span>
                    </a>
                </li>
                <li>
                    <a href="/about" class="menu_item" title="about">
                        <span>About</span>
                    </a>
                </li>
                <li>
                    <a href="/contact" class="menu_item" title="contact">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
            {{--        <div id="nap" class="">SSLarsen Consulting<br>Sonoma, CA<br>(707) 347-4884</div>--}}
            <div id="burger_wrapper">
                <!-- BURGER BUTTON -->
                <div id="btnBurger" data-collapse-toggle="navbar-top" class="group">
                    <div
                        class="burger_line transition-all group-open:top-2 group-open:rotate-45">
                    </div>
                    <div
                        class="burger_line mt-1 opacity-100 transition-all group-open:opacity-0">
                    </div>
                    <div
                        class="burger_line group-open mt-1 transition-all group-open:-top-2 group-open:-rotate-45">
                    </div>
                </div> <!-- END BURGER BUTTON -->
            </div>
        </nav>
    </div>
</header>
