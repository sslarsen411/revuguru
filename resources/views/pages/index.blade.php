<x-app-layout>
    <section class="grid grid-cols-1 md:grid-cols-12 h-auto md:h-[70dvh] place-items-center bg-none md:bg-hero bg-cover bg-no-repeat bg-center"  >
        <div class="col-span-12 hidden md:block md:col-span-2">
            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/guru-rounded-l.webp")}}" alt="Rave Review Guru"
                 class="h-full w-auto mx-auto" />
        </div>
        <div class="col-span-12 md:col-span-5 bg-zinc-100/90 p-8 md:shadow-lg self-center justify-self-start">
            <h1 class="tracking-tight font-semibold text-slate-600 text-balance ">
                <span class="block text-lg md:text-xl lg:text-2xl mt-12">The Rave Review Guru says &ldquo;Let&apos;s face it&hellip; </span>

                <span class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl leading-snug block mt-6 text-red-800 break-words">
                        Customer reviews are  giant pain in the @$$!
                    </span>
            </h1>
            <h2 class="text-base md:text-xl lg:text-2xl my-6 text-slate-600">
               I&apos;ll show you a <strong><em>better</em></strong> way&hellip;
                Because I've flipped the script on the entire review process!
            </h2>
            <div class="flex place-items-center w-1/2 ">
                <button type="button" id="goToVsl"
                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-white focus:outline-none
                        bg-rust rounded-lg border border-gray-200 hover:bg-red-400 hover:text-gray-600
                        focus:z-10 focus:ring-4 focus:ring-gray-100  mx-auto">
                    Discover It Now!
                </button>
            </div>
        </div>
        <div class="hidden md:block col-span-12 md:col-span-5">
            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/pia-512.webp")}}" alt="reviews are a pain"
                 class="h-full w-auto mx-auto" />
        </div>
    </section>
    <section id="vsl" class="flex flex-row place-content-between text-center gap-12  bg-slate-900 text-amber-500 text-pretty w-full p-4">
        <div class="flex flex-row gap-24 mx-auto">
            <div class="p-4 hidden md:block ">
                <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/stop-chasing-stars.gif")}}" alt="An animation of a man chasing a star."
                     class="h-24 mx-auto rounded-xl"/>
            </div>
            <div>
                <h2 class="text-xl md:text-4xl lg:text-6xl font-bold mb-5">Stop Chasing Stars!</h2>
                <h3 class="text-base md:text-2xl lg:text-4xl font-normal"> Your reviews are too valuable to waste</h3>
            </div>
        </div>
    </section>
    <!-- VSL block -->
    <section class="grid grid-col-1 md:grid-cols-12 gap-4 place-items-center p-4">
        <div class="col-span-12 w-full">
            <div class="mx-auto px-6 md:flex flex-row md:items-between md:space-x-8">
                <!-- Image -->
                <div class="md:w-1/4 mb-6 md:mb-0 text-center">
                    <img
                        src="{{URL::asset("https://cdn.mojoimpact.com/rrg/Joan-Rivers-1967.jpg")}}"
                        alt="Joan Rivers publicity photo, 1967"
                        class="mx-auto rounded-lg shadow-md mb-2 w-auto h-32"
                    />
                    <p class="text-[8px] text-gray-500">
                        Joan Rivers, 1967. Public Domain via
                        <a href="https://commons.wikimedia.org/wiki/File:Joan_Rivers_-_1967.jpg"
                           class="underline hover:text-orange-600" target="_blank">
                            Wikimedia Commons
                        </a>.
                    </p>
                </div>
                <!-- Text Content -->
                <div class="md:w-3/4 self-center">
                    <h2 class="text-3xl font-extrabold text-red-600 mb-4">
                        “Can we talk&hellip; about reviews?”
                    </h2>
                    <p class="text-lg text-gray-700 mb-6">
                        {{--                        <span class="font-bold text-red-600">No BS.</span>--}}
                        Joan Rivers famously cut through pretense with humor and honesty.
                        I’m doing the same for <strong>reviews</strong>.
                    </p>
                </div>
            </div>
        </div>
        <div class="p-4 col-span-12 md:col-span-5 py-24">
            <div class="max-w-4xl mx-auto px-6 md:items-start md:space-x-8">
                    <!-- Truth Bomb -->
                    <h3 class="text-xl font-bold text-red-600 mb-4">
                        Review Truth Bombs
                    </h3>
                    <div class="bg-white border-l-4 border-red-900 p-4 shadow-sm rounded-md text-lg">
                        <p class="text-gray-800 italic">
                            Trying to collect a bunch of 5-star reviews isn&apos;t going to <strong>magically fix</strong> your business.
                        </p>
                        <p>
                            Your efforts to &ldquo;get more 5-star reviews&rdquo; can actually <strong><em>damage</em></strong>
                             your credibility and <strong><em>drive</em></strong> customers away.
                        </p>
                        <p>
                            The <strong>real</strong> problem isn’t lack of stars, <strong>it’s lack of <ins>consistency</ins></strong>. An ongoing flow of fresh
                            reviews <strong><ins>wins</ins></strong> every time.
                        </p>
                    </div>
                    <h3 class="mb-4 mt-8 text-xl tracking-tight text-center font-semibold text-stone-700 italic">
                        What if the secret to <span class="text-red-700 font-bold">more</span> reviews&hellip;<br> was to <span class="text-red-700 font-bold">stop</span>
                        chasing after them?
                    </h3>
                    <p> Watch this short  2&half; minute video to learn more. →</p>
{{--                </div>--}}
            </div>
        </div>
        <div class="bg-white w-full col-span-12 md:col-span-7">
            <video class="hidden" ></video>
            <!-- ====== Video Control Start https://tailgrids.com/components/videos -->
            <div x-data="{ videoOpen: false, videoSrc: ''}" >
                <div class="mx-auto">
                    <div class="-mx-4 flex flex-wrap justify-center">
                        <div class="w-full px-4 lg:w-10/12 border-2 border-zinc-200 rounded-lg shadow-lg bg-gray-800">
                            <div class="relative z-20 h-[300px] overflow-hidden rounded-lg md:h-[450px] p-2">
                                <div class="flex flex-col items-center justify-center h-full w-1/2 ">
                                    <p class="text-amber-500 text-5xl tracking-tight leading-12 w-[10ch]">
                                        A better way to review nirvana
                                    </p>
                                </div>
                                <div class="absolute right-0 top-0 h-auto w-1/2">
                                    <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/gesture.webp")}}" alt="image"
                                         class="h-full w-full object-cover object-center" />
                                </div>
                                <div class="absolute left-0 top-0 z-10 flex h-full w-full items-center justify-center bg-primary/90">
                                    <a href="javascript:void(0)"
                                       @click="videoOpen = true; videoSrc = '{{URL::asset("/assets/WS-video.mp4")}}' "
                                       class="absolute z-20 flex h-20 w-20 items-center justify-center rounded-full bg-teal-700/80 text-primary md:h-[100px] md:w-[100px] dark:bg-dark-2 dark:text-white">
                                        <span class="absolute right-0 top-0 z-[-1] h-full w-full animate-ping rounded-full bg-white/20 delay-300 duration-1000">     </span>
                                        <svg width="23" height="27" viewBox="0 0 23 27"  xmlns="http://www.w3.org/2000/svg"
                                             class="ml-1 fill-current">
                                            <path
                                                d="M22.5 12.634C23.1667 13.0189 23.1667 13.9811 22.5 14.366L2.25 26.0574C1.58333 26.4423 0.750001 25.9611 0.750001 25.1913L0.750002 1.80866C0.750002 1.03886 1.58334 0.557731 2.25 0.942631L22.5 12.634Z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="videoOpen" x-transition
                     class="fixed left-0 top-0 z-50 flex h-screen w-full items-center justify-center bg-black/70">
                    <div @click.outside="videoOpen = false; videoSrc=''" class="mx-auto w-full max-w-[550px] bg-white">
                        <iframe id="video" class="h-[320px] w-full" x-bind:src="videoSrc">
                        </iframe>
                    </div>
                    <button @click="videoOpen = false; videoSrc='' "
                            class="absolute right-0 top-0 flex h-20 w-20 cursor-pointer items-center justify-center text-body-color hover:bg-black">
                        <svg viewBox="0 0 16 15" class="h-8 w-8 fill-current">
                            <path
                                d="M3.37258 1.27L8.23258 6.13L13.0726 1.29C13.1574 1.19972 13.2596 1.12749 13.373 1.07766C13.4864 1.02783 13.6087 1.00141 13.7326 1C13.9978 1 14.2522 1.10536 14.4397 1.29289C14.6272 1.48043 14.7326 1.73478 14.7326 2C14.7349 2.1226 14.7122 2.24439 14.6657 2.35788C14.6193 2.47138 14.5502 2.57419 14.4626 2.66L9.57258 7.5L14.4626 12.39C14.6274 12.5512 14.724 12.7696 14.7326 13C14.7326 13.2652 14.6272 13.5196 14.4397 13.7071C14.2522 13.8946 13.9978 14 13.7326 14C13.6051 14.0053 13.478 13.984 13.3592 13.9375C13.2404 13.8911 13.1326 13.8204 13.0426 13.73L8.23258 8.87L3.38258 13.72C3.29809 13.8073 3.19715 13.8769 3.08559 13.925C2.97402 13.9731 2.85405 13.9986 2.73258 14C2.46737 14 2.21301 13.8946 2.02548 13.7071C1.83794 13.5196 1.73258 13.2652 1.73258 13C1.73025 12.8774 1.753 12.7556 1.79943 12.6421C1.84586 12.5286 1.91499 12.4258 2.00258 12.34L6.89258 7.5L2.00258 2.61C1.83777 2.44876 1.74112 2.23041 1.73258 2C1.73258 1.73478 1.83794 1.48043 2.02548 1.29289C2.21301 1.10536 2.46737 1 2.73258 1C2.97258 1.003 3.20258 1.1 3.37258 1.27Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- ====== Video Section End -->
        </div>
    </section>
    <section id="book_appt" class="bg-slate-900 text-zinc-50 shadow-lg">
        <div class="two__col two__col-pic-l p-8 md:p-0">
            <div class="flex flex-col flex-wrap items-between w-full md:w-1/2">
                <div class="w-full md:w-3/4 p-4">
                    <h2 class="text-xl md:text-5xl max-w-[24ch] font-bold">
                        Turn praise into <span class="text-amber-500 font-extrabold">profit</span>
                    </h2>
                    <p class="py-6 text-base md:text-lg lg:text-2xl">
                        Book a
                        <span class="font-semibold text-amber-500">
                            free
                        </span>
                        no-pitch, no-obligation &frac12; hour consultation to discover a better way to turn your customer&apos;s praise
                        into your best marketing asset.
                        <a  href="/calendar" class="text-amber-500 hover:text-red-400" target="_blank" title="Link to calendar">
                            Book now.
                        </a>
                    </p>
                </div>
            </div>
            <div class="flex flex-col w-full md:w-1/2 py-2">
                <div class="w-full bg-zinc-100 rounded-3xl p-2 ">
                    <div class="form-control mt-6 text-center">
                        <h3 class="text-xl md:text-2xl lg:text-4xl text-slate-700 font-bold ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 inline  w-auto" viewBox="0 0 24 24">
                                <path fill="text-slate-800" d="M4 21V5h3.385V2.77h1.077V5h7.154V2.77h1V5H20v6.616h-1v-1H5V20h6.846v1zM5 9.615h14V6H5zm0 0V6zM14.23 21v-2.21l5.96-5.934l2.19 2.204L16.44 21zm6.886-5.94l-.925-.945zm-6 5.056h.95l3.467-3.474l-.47-.475l-.455-.488l-3.492 3.486zm3.948-3.949l-.456-.488l.925.963z" />
                            </svg>
                            Book a
                            <span class="font-semibold text-amber-500">
                                free
                            </span> &frac12; hour consultation now.</h3>
                        <div class="px-4 pt-3 pb-4">
                            <a type="button" href="/calendar" wire:navigate target="_blank"
                               class="bg-red-500 hover:bg-red-400 px-4 py-2 rounded-3xl hover:animate-pulse">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trust block --> <!-- Trust block END -->

    <!-- Pain/Solution block -->
    <section class="mx-auto px-4 py-16 bg-gray-200 mb-8">
        <div class="max-w-7xl mx-auto">
            <header class="mb-8 text-center">
                <h2 class="text-3xl font-bold tracking-tight text-red-600">Review Challenges and Answers</h2>
                <p class="mt-2 text-sm block md:hidden text-gray-600">Tap a card to flip.</p>
            </header>
            <!-- Card Grid -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 ">
                <!-- Card 1 -->
                <div class="group card_group">
                    <div class="card__body">
                        <!-- Front -->
                        <div class="card__body-div card__front">
                                <h3 >
                                    Getting Reviews are a giant hassle
                                </h3>
                            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/time-consuming-hassle.webp")}}" alt="time consuming hassle"
                            class="object-cover object-center"/>
{{--                            <figure>--}}
{{--                                <img src="{{URL::asset("/images/time-consuming-hassle.webp")}}"--}}
{{--                                     alt="Pain">--}}
{{--                                <figcaption>&ldquo;Is it even worth it?&rdquo;</figcaption>--}}
{{--                            </figure>--}}
                            <p>
                                Collecting reviews is a complicated, time-wasting nightmare&hellip; and for what?.
                            </p>
                            <p>
                                No one know how to write a polished one and I have enough to do, so why add more work?.
                            </p>
                        </div>
                        <!-- Back -->
                        <div class="card__body-div card__back">
                            <h3>
                               We make it smooth sailing
                            </h3>
                            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/smooth-sailing.webp")}}" alt="time consuming hassle"
                                 class="bg-sky-300 px-4 py-2 object-cover object-center"/>
{{--                            <figure>--}}
{{--                                <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/review-guru-bust.webp")}}"--}}
{{--                                     alt="Guru">--}}
{{--                                <figcaption>&ldquo;Easy Peezy&rdquo;</figcaption>--}}
{{--                            </figure>--}}

                            <p>Rave Review Guru makes the process <em>fast</em> and
                                <strong>easy</strong>. Our system cuts through the hassle, to give you fresh reviews flowing in like clockwork.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="group card_group">
                    <div class="card__body">
                        <!-- Front -->
                        <div class="card__body-div card__front">
                            <h3 >
                                Customers ghost your requests
                            </h3>
                            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/reluctant.webp")}}" alt="a reluctant customer"
                                 class="object-cover object-center"/>
                            <p>
                                Reviews feel like a homework assignment. They&apos;re seen as
                                an <strong>unwanted chore</strong>.
                            </p>
                            <p>
                                People find reviews to be
                                <strong>too</strong> much work with <strong>no</strong> real reward, so they
                                ignore your requests.
                            </p>
                        </div>
                        <!-- Back -->
                        <div class="card__body-div card__back">
                            <h3>
                               Inspire the desire
                            </h3>
                            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/enthusiastic.webp")}}" alt="an inspired customer"
                                 class="object-cover object-center"/>
                            <p>
                                With the Rave Review Guru you easily inspire your customers and spark their desire to
                                write a review for you.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="group card_group">
                    <div class="card__body">
                        <!-- Front -->
                        <div class="card__body-div card__front">
                            <h3>
                                Asking feels awkward
                            </h3>
                            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/awkward-ask.webp")}}" alt="feeling awkward"
                                 class="object-cover object-center"/>
                            <p>
                            <p>
                                My staff and I are uncomfortable asking customers to write reviews.
                            </p>

                            <p>
                               Customers say they're overwhelmed by number review requests they get. They just delete them.
                            </p>

                        </div>
                        <!-- Back -->
                        <div class="card__body-div card__back">
                            <h3 class="text-2xl md:text-2xl text-center">
                                Eliminate the Hassle
                            </h3>
                            <figure>
                                <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/review-guru-bust.webp")}}"
                                     alt="Guru">
                                <figcaption>&ldquo;Easy Peezy&rdquo;</figcaption>
                            </figure>
                            <p>
                                You need reviews because they&apos;re word-of-mouth promoting your business to 1000s 24/7
                            </p>
                            <p class="mt-2 text-base/5 text-white/90">Rave Review Guru makes the process <em>fast</em> and
                                <strong>easy</strong>. Our system cuts through the hassle, to give you fresh reviews flowing in like clockwork.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="group card_group">
                    <div class="card__body">
                        <!-- Front -->
                        <div class="card__body-div card__front">
                            <h3 >
                               Negative Reviews Suck
                            </h3>
                            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/tank.webp")}}" alt="sales are tanking"
                                 class="object-cover object-center"/>
                            <p>
                                One negative review could tank your reputation overnight. But a lack of a consistent
                                flow of reviews will also tank your business
                            </p><p>
                               Worse, trolls, unhappy customers and disgruntled ex-employees can use
                                the process for revenge.
                            </p>
                        </div>
                        <!-- Back -->
                        <div class="card__body-div card__back">
                            <h3>
                                Accentuate the Positive
                            </h3>
                            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/tank.webp")}}" alt="a reluctant customer"
                                 class="object-cover object-center"/>
                            <p>
                                Keep negative feedback private and request removal for troll reviews.
                            </p>
                            <p>Rave Review Guru makes the process <em>fast</em> and
                                <strong>easy</strong>. Our system cuts through the hassle, to give you fresh reviews flowing in like clockwork.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="group card_group">
                    <div class="card__body">
                        <!-- Front -->
                        <div class="card__body-div card__front">
                            <h3 >
                                Ignorance
                            </h3>
                            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/review-guru-bust.webp")}}"
                                 alt="Guru">
                            <p>
                                Most owners, staff, and customers are all equally clueless about how to write
                                a polished review. It&apos;s the blind leading the blind.
                            </p>
                            <p>
                                How can you <strong>expect</strong> your customers to write a review if
                                <span class="text-red-600"><ins>you</ins></span> don&apos;t know?
                            </p>
                        </div>
                        <!-- Back -->
                        <div class="card__body-div card__back">
                            <h3>
                                Eliminate the Hassle
                            </h3>
                            <figure>
                                <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/review-guru-bust.webp")}}"
                                     alt="Guru">
                                <figcaption>&ldquo;Easy Peezy&rdquo;</figcaption>
                            </figure>
                            <p>
                                You need reviews because they&apos;re word-of-mouth promoting your business to 1000s 24/7
                            </p>
                            <p>Rave Review Guru makes the process <em>fast</em> and
                                <strong>easy</strong>. Our system cuts through the hassle, to give you fresh reviews flowing in like clockwork.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="group card_group">
                    <div class="card__body">
                        <!-- Front -->
                        <div class="card__body-div card__front">
                            <h3 >
                                Screwing up the request
                            </h3>
                            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/review-guru-bust.webp")}}"
                                 alt="Guru">
                            <p>
                                Businesses often wait too long before asking and their email or text
                                messages are easily ignored.
                            </p>
                            <p>
                                Or they don&apos;t bother  to ask at all and just wait for their customers
                                to spontaneously write a review.
                            </p>
                        </div>
                        <!-- Back -->
                        <div class="card__body-div card__back">
                            <h3>
                                Eliminate the Hassle
                            </h3>
                            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/review-guru-bust.webp")}}"
                                 alt="Guru">
                            <p>
                                You need reviews because they&apos;re word-of-mouth promoting your business to 1000s 24/7
                            </p>
                            <p>Rave Review Guru makes the process <em>fast</em> and
                                <strong>easy</strong>. Our system cuts through the hassle, to give you fresh reviews flowing in like clockwork.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA 2 -->
    <section class="bg-zinc-950 text-zinc-50 shadow-lg">
        <div class="two__col two__col-pic-l p-8 md:p-0">
            <div class="flex flex-col w-full md:w-1/2 py-2">
                <div class="w-3/4 bg-zinc-100 rounded-3xl p-2 ">
                    <div class="form-control mt-6 text-center">
                        <h3 class="text-xl md:text-2xl lg:text-4xl text-slate-700 font-bold ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 inline  w-auto" viewBox="0 0 24 24">
                                <path fill="text-slate-800" d="M4 21V5h3.385V2.77h1.077V5h7.154V2.77h1V5H20v6.616h-1v-1H5V20h6.846v1zM5 9.615h14V6H5zm0 0V6zM14.23 21v-2.21l5.96-5.934l2.19 2.204L16.44 21zm6.886-5.94l-.925-.945zm-6 5.056h.95l3.467-3.474l-.47-.475l-.455-.488l-3.492 3.486zm3.948-3.949l-.456-.488l.925.963z" />
                            </svg>
                            Book a
                            <span class="font-semibold text-amber-500">
                                free
                            </span> &frac12; hour consultation now.</h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-wrap items-between w-full md:w-1/2">
                <div class="w-full md:w-3/4 p-4">
                    <h2 class="text-xl md:text-4xl font-semibold">
                       Make your business shine
                    </h2>
                    <p class="py-6 text-base md:text-lg lg:text-2xl">
                        Book a
                        <span class="font-semibold text-amber-500">
                            free
                        </span>
                        no-pitch, no-obligation &frac12; hour consultation to spark a steady flow of reviews
                        <a  href="https://www.sslarsenconsulting.com/calendar" class="text-red-700 hover:text-red-400" target="_blank" title="Main site">
                            Book now.
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
    <script>
        const targetEl = document.getElementById('vsl');
        const clickTrigger = document.getElementById('goToVsl');
        clickTrigger.addEventListener('click', () => {
            targetEl.scrollIntoView({
                behavior: 'smooth', // Optional: for smooth scrolling animation
                block: 'start'      // Optional: aligns the top of the element to the top of the viewport
            });
        });
    </script>
    @endpush
</x-app-layout>
