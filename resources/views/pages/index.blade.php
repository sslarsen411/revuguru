<x-app-layout :seo="[
  'title' => 'Rave Review Guru | Turn Customer Reviews into Marketing Gold',
  'description' => 'Simplify how you collect reviews, automate on-brand replies, and turn praise into AI-search-friendly proof.',
  'canonical' => route('home'),
  'image' => asset('og/home.jpg'),
]">
<x-seo-schema :json="[
  '@context' => 'https://schema.org',
  '@type' => 'Organization',
  'name' => 'Rave Review Guru',
  'url' => url('/'),
]" />
    <section class="grid grid-cols-1 md:grid-cols-12 h-auto md:h-[70dvh] place-items-center bg-none md:bg-hero bg-cover bg-no-repeat bg-center"  >
        <div class="col-span-12 hidden md:block md:col-span-2">
            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/guru-rounded-l.webp")}}" alt="Rave Review Guru"
                 class="h-full w-auto mx-auto" />
        </div>
        <div class="col-span-12 md:col-span-5 bg-zinc-100/90 p-8 md:shadow-lg self-center justify-self-start">
            <h1 class="tracking-tight font-semibold text-slate-600 text-balance ">
                <span class="block text-lg md:text-xl lg:text-2xl mt-12">The Rave Review Guru says &ldquo;Let&apos;s face it&hellip; </span>

                <span class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl leading-snug block mt-6 text-red-800 break-words">
                        Customer reviews are a giant pain in the @$$!
                    </span>
            </h1>
            <h2 class="text-base md:text-xl lg:text-2xl my-6 text-slate-600">
               I&apos;ll show you a <strong><em>better</em></strong> way&hellip;
                Because I've flipped the script on the entire review process!
            </h2>
            <div class="flex place-items-center  ">
                <button type="button" id="goToVsl"
                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-white focus:outline-none
                        bg-rust rounded-lg border border-gray-200 hover:bg-red-400 hover:text-gray-600
                        focus:z-10 focus:ring-4 focus:ring-gray-100  mx-auto">
                    Discover It Now!
                </button>
            </div>
            <h4 class="text-sm md:text-base italic mt-12 text-center  text-slate-600">
                Your Business Has a Unique Voice. Let It Reverberate.
            </h4>
        </div>
        <div class="hidden md:block col-span-12 md:col-span-5">
            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/pia-512.webp")}}" alt="reviews are a pain"
                 class="h-full w-auto mx-auto" />
        </div>
    </section>
    <section class="flex flex-row place-content-between text-center gap-12  bg-slate-900 text-amber-600 text-pretty w-full p-4">
        <div class="flex flex-row gap-24 mx-auto ">
            <div class="p-4 hidden md:block self-center">
                <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/stop-chasing-stars.gif")}}" alt="An animation of a man chasing a star."
                     class="h-24 mx-auto rounded-xl"/>
            </div>
            <div>
                <h2 class="text-xl md:text-4xl lg:text-6xl font-bold mb-5">Stop Chasing Stars!</h2>
                <h3 class="text-base md:text-2xl lg:text-3xl font-normal text-zinc-50">
                    Stars fade. Your reviews are worth so much more!
                </h3>
                <a href="/audit"
                   class="inline-block bg-amber-500 hover:bg-amber-300 text-slate-900 font-bold text-lg my-5
                   md:text-xl px-6 py-3 rounded-full transition">
                    Find Out How Much →
                </a>
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
                            The <strong>real</strong> problem isn’t lack of stars, <strong>it’s lack of <ins>consistent
                                    reviews</ins></strong>. An ongoing flow of fresh
                            reviews <strong><ins>wins</ins></strong> every time.
                        </p>
                    </div>
                    <h3 class="mb-4 mt-8 text-xl tracking-tight text-center font-semibold text-stone-700 italic">
                        What if the secret to <span class="text-red-700 font-bold">more</span> reviews&hellip;<br> was to <span class="text-red-700 font-bold">stop</span>
                        chasing after them?
                    </h3>
                    <p>
                        Watch this short  1&half; minute video to learn more. →
                    </p>
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
                                        Discover your way to review nirvana
                                    </p>
                                </div>
                                <div class="absolute right-0 top-0 h-auto w-1/2">
                                    <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/gesture.webp")}}" alt="image"
                                         class="h-full w-full object-cover object-center" />
                                </div>
                                <div class="absolute left-0 top-0 z-10 flex h-full w-full items-center justify-center bg-primary/90">
                                    <a href="javascript:void(0)"
                                       @click="videoOpen = true; videoSrc = '{{URL::asset("https://cdn.mojoimpact.com/rrg/video/RaveReviewGuru_audit_sm.mp4")}}' "
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
{{--  CTA 1 --}}
    <section  class="bg-slate-900 text-zinc-50 shadow-lg">
        <div class="two__col two__col-pic-l p-8 md:p-0">
            <div class="flex flex-col flex-wrap items-between w-full md:w-2/3">
                <div class="w-full md:w-3/4 p-4 ml-16">
                    <h2 class="text-xl md:text-3xl text-amber-600 text-center font-bold">
                        Reviews Make the Register Ring!
                    </h2>
                    <p class="py-6 text-base md:text-lg lg:text-2xl">
                        Find out how <span class="uppercase text-amber-600">now</span> with a fast, no-obligation
                        <span class="text-amber-600 font-bold">Review Mastery Audit</span>. Discover
                        your exact steps to spark a steady flow of authentic, customer attracting reviews.
                        <a  href="/audit" class="text-amber-500 hover:text-red-400" target="_blank" title="link to audit">
                            Start Free Audit
                        </a>
                    </p>
                </div>
            </div>
            <div class="flex flex-col w-full md:w-1/3 py-2">
                <div class="w-full bg-zinc-100 rounded-3xl p-2 ">
                    <div class="form-control mt-6 text-center">
                        <p class="mt-3 text-xl text-slate-900">
                            Kickstart momentum with a free <strong>Review Mastery Audit</strong>—no sales call required.
                        </p>
                        <div class="px-4 pt-3 pb-4">
                            <a type="button" href="/audit" wire:navigate target="_blank"
                               class="bg-red-500 hover:bg-red-400 px-4 py-2 rounded-3xl hover:animate-pulse">
                                Start Free Audit
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
                <h2 class="text-3xl font-bold tracking-tight text-orange-700">
                    Review Challenges and Guru Answers
                </h2>
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
                                    Getting Reviews is a giant hassle
                                </h3>
                            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/time-consuming-hassle.webp")}}" alt="time consuming hassle"
                            class="object-cover object-center"/>
                            <p>
                                Collecting reviews is a complicated, time-wasting nightmare&hellip; and for what?.
                            </p>
                            <p>
                                No one knows how to write a polished review, and I already have enough to do — so
                                why add more work?
                            </p>
                        </div>
                        <!-- Back -->
                        <div class="card__body-div card__back">
                            <h3>
                               We make it smooth sailing
                            </h3>
                            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/smooth-sailing.webp")}}" alt="time consuming hassle"
                                 class="bg-sky-300 px-4 py-2 object-cover object-center"/>
                            <p>Rave Review Guru makes the process <em>fast</em> and
                                <strong>easy</strong>. Our system cuts through the hassle, to give you fresh reviews
                                flowing in like clockwork.</p>
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
                               Customers say they're overwhelmed by the number review requests they get. They just delete them.
                            </p>
                        </div>
                        <!-- Back -->
                        <div class="card__body-div card__back">
                            <h3 >
                                Eliminate the Hassle
                            </h3>
                            <img src="{{URL::asset("https://cdn.mojoimpact.com/sslc/grinding-friction.webp")}}"
                                 alt="grinding gears">
                            <p class="mt-2 text-base/5 text-white/90">

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
                                flow of reviews will also tank your business.
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
                            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/growth.webp")}}" alt="a reluctant customer"
                                 class="object-cover object-center"/>
                            <p>
                                Keep negative feedback private and request removal for troll reviews.
                            </p>
                            <p>Rave Review Guru makes the process <em>fast</em> and
                                <strong>easy</strong>. Our system cuts through the hassle, to give you fresh
                                reviews flowing in like clockwork.
                            </p>
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
                            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/confused-man.webp")}}"
                                 alt="Guru">
                            <p>
                                Most owners, staff, and customers are all equally clueless about how to write
                                a polished review. It&apos;s the blind leading the blind.
                            </p>
                            <p>
                                How can you <strong>expect</strong> your customers to write a review if
                                <span class="text-red-600"><ins>you</ins></span> don&apos;t know how?
                            </p>
                        </div>
                        <!-- Back -->
                        <div class="card__body-div card__back">
                            <h3>
                                Teach in 60 Seconds
                            </h3>
                                <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/ah-ha-man.webp")}}"
                                     alt="Guru">

                            <p>
                                We give your team a one-minute “Ask Script,” simple prompts customers can follow, and
                                real review examples—so everyone knows how to ask, and customers know exactly what to
                                write (without sounding fake).
                            </p>

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
                                Ask at the Right Moment
                            </h3>
                            <img src="{{URL::asset("https://cdn.mojoimpact.com/rrg/review-guru-bust.webp")}}"
                                 alt="Guru">
                            <p>
                                We time the ask for the “peak-happy” moment, deliver a two-tap review link, and
                                automate a friendly nudge 48–72 hours later. Right timing + low friction = more
                                reviews, fast.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA -->
    <section class="w-full bg-slate-900 text-amber-600 px-4 py-12">
        <h2 class="text-center text-xl md:text-2xl lg:text-3xl my-4 text-amber-500">
            Take control of your reviews&hellip; It's easy!
        </h2>
        <!-- How it works + CTA (quick trust primer) -->
        <div class="max-w-5xl mx-auto mb-10 grid md:grid-cols-3 gap-6 text-slate-100">
            <div class="bg-slate-800 rounded-xl p-5">
                <h4 class="text-lg font-semibold">1) Take the Audit</h4>
                <p class="text-sm opacity-80">Get a no-fluff snapshot of review gaps and untapped value.</p>
            </div>
            <div class="bg-slate-800 rounded-xl p-5">
                <h4 class="text-lg font-semibold">2) Get a Plan</h4>
                <p class="text-sm opacity-80">A tailored system for steady review velocity and trust signals.</p>
            </div>
            <div class="bg-slate-800 rounded-xl p-5">
                <h4 class="text-lg font-semibold">3) Execute</h4>
                <p class="text-sm opacity-80">Light tooling + simple habits. Results measured weekly.</p>
            </div>
        </div>

        <div class="text-center mb-2">
            <a href="/audit"
               class="inline-block bg-amber-600 hover:bg-amber-500 text-slate-900 font-bold text-lg px-6 py-3 rounded-full transition">
                Start the Free Audit
            </a>
        </div>


    </section>
    <!-- FAQ -->
    <section class="max-w-5xl mx-auto">
        <h2 class="text-xl md:text-2xl lg:text-3xl my-4 text-slate-800">
            Frequently Asked Questions
        </h2>
        <div x-data="{ open: null }" class="max-w-4xl mx-auto divide-y divide-slate-700">
            <!-- Item -->
            <div class="py-4">
                <button @click="open === 1 ? open = null : open = 1"
                        :aria-expanded="open === 1"
                        class="w-full flex justify-between items-center text-left">
                    <span class="font-semibold text-amber-500">Who is the Rave Review Guru?</span>
                    <span class="ml-4" x-text="open === 1 ? '–' : '+'"></span>
                </button>
                <div x-show="open === 1" x-collapse class="mt-3 ">
                    I’m Scott Larsen. I build simple review systems for local service businesses. No hype. Clear process. See the <a href="/about" class="underline text-amber-400">About</a> page for background.
                </div>
            </div>

            <div class="py-4">
                <button @click="open === 2 ? open = null : open = 2" :aria-expanded="open === 2" class="w-full flex justify-between items-center text-left">
                    <span class="font-semibold text-amber-500">What’s your game?</span>
                    <span class="ml-4" x-text="open === 2 ? '–' : '+'"></span>
                </button>
                <div x-show="open === 2" x-collapse class="mt-3 ">
                    Education first. Then a practical system to earn steady, authentic reviews and use them to build trust across Google and AI search. The audit shows your upside, then you decide.
                </div>
            </div>

            <div class="py-4">
                <button @click="open === 3 ? open = null : open = 3" :aria-expanded="open === 3" class="w-full flex justify-between items-center text-left">
                    <span class="font-semibold text-amber-500">Does this actually work?</span>
                    <span class="ml-4" x-text="open === 3 ? '–' : '+'"></span>
                </button>
                <div x-show="open === 3" x-collapse class="mt-3 ">
                    Yes, when applied. Results come from consistent asks, zero friction, and timely follow-ups. We focus on weekly review velocity, response quality, and conversion impact. The audit benchmarks these.
                </div>
            </div>

            <div class="py-4">
                <button @click="open === 4 ? open = null : open = 4" :aria-expanded="open === 4" class="w-full flex justify-between items-center text-left">
                    <span class="font-semibold text-amber-500">Is this for my kind of business?</span>
                    <span class="ml-4" x-text="open === 4 ? '–' : '+'"></span>
                </button>
                <div x-show="open === 4" x-collapse class="mt-3 ">
                    Best fit: local home, personal, and professional services in competitive markets. Not a fit: businesses seeking fake reviews or “set-and-forget” shortcuts.
                </div>
            </div>

            <div class="py-4">
                <button @click="open === 5 ? open = null : open = 5" :aria-expanded="open === 5" class="w-full flex justify-between items-center text-left">
                    <span class="font-semibold text-amber-500">How is this different from ‘get more reviews’ tools?</span>
                    <span class="ml-4" x-text="open === 5 ? '–' : '+'"></span>
                </button>
                <div x-show="open === 5" x-collapse class="mt-3 ">
                    Tools blast links. We design a repeatable ask, remove friction, time the request, and optimize responses. Then we turn reviews into trust assets for search and conversions.
                </div>
            </div>

            <div class="py-4">
                <button @click="open === 6 ? open = null : open = 6" :aria-expanded="open === 6" class="w-full flex justify-between items-center text-left">
                    <span class="font-semibold text-amber-500">What about cost?</span>
                    <span class="ml-4" x-text="open === 6 ? '–' : '+'"></span>
                </button>
                <div x-show="open === 6" x-collapse class="mt-3 ">
                    Start with the free audit. If you move forward, pricing is simple and month-to-month. No lock-ins. You should see value within the first review cycles.
                </div>
            </div>

            <div class="py-4">
                <button @click="open === 7 ? open = null : open = 7" :aria-expanded="open === 7" class="w-full flex justify-between items-center text-left">
                    <span class="font-semibold text-amber-500">Do you do anything sketchy?</span>
                    <span class="ml-4" x-text="open === 7 ? '–' : '+'"></span>
                </button>
                <div x-show="open === 7" x-collapse class="mt-3 ">
                    No. No fake reviews. No incentives tied to star ratings. We follow platform policies and focus on genuine feedback and public responses that build trust.
                </div>
            </div>

            <div class="py-4">
                <button @click="open === 8 ? open = null : open = 8" :aria-expanded="open === 8" class="w-full flex justify-between items-center text-left">
                    <span class="font-semibold text-amber-500">How fast will I see results?</span>
                    <span class="ml-4" x-text="open === 8 ? '–' : '+'"></span>
                </button>
                <div x-show="open === 8" x-collapse class="mt-3 ">
                    Typical pattern: first wins in 1–3 weeks as the ask cadence lands. Compounding impact over 60–90 days as review velocity normalizes and responses improve conversions.
                </div>
            </div>

            <div class="py-4">
                <button @click="open === 9 ? open = null : open = 9" :aria-expanded="open === 9" class="w-full flex justify-between items-center text-left">
                    <span class="font-semibold text-amber-500">Can I DIY this without RRG?</span>
                    <span class="ml-4" x-text="open === 9 ? '–' : '+'"></span>
                </button>
                <div x-show="open === 9" x-collapse class="mt-3 ">
                    Yes. Use a clear ask, send the link right after service, remove steps, and respond to every review. Our system just reduces friction and keeps you consistent.
                </div>
            </div>

            <div class="py-4">
                <button @click="open === 10 ? open = null : open = 10" :aria-expanded="open === 10" class="w-full flex justify-between items-center text-left">
                    <span class="font-semibold text-amber-500">What’s the next step?</span>
                    <span class="ml-4" x-text="open === 10 ? '–' : '+'"></span>
                </button>
                <div x-show="open === 10" x-collapse class="mt-3 ">
                    Take the <a href="/audit" class="underline text-amber-400">Rave Review Guru Audit</a>. You’ll see how much more your reviews are worth and exactly where to start.
                </div>
            </div>
        </div>
    </section>


    <!-- CTA 2 -->
    <section class="bg-zinc-950 text-zinc-50 shadow-lg">
        <div class="two__col two__col-pic-l p-4 gap-16 justify-between">
            <div class="two__col two__col-pic-l p-8 md:p-0">
                <div class="flex flex-col w-full md:w-1/3 py-2 ml-16">
                    <div class="w-full bg-zinc-100 rounded-3xl p-2 ">
                        <div class="form-control mt-6 text-center">
                            <p class="mt-3 text-xl text-slate-900">
                                Kickstart momentum with a free <strong>Review Mastery Audit</strong>—no sales call required.
                            </p>
                            <div class="px-4 pt-3 pb-4">
                                <div class="justify-self-center">
                                    <a type="button" href="/audit"
                                       class="bg-orange-300 hover:bg-orange-100 text-gray-800 font-semibold py-2
                                              px-4 border border-orange-600 rounded shadow">
                                        Start Free Audit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col flex-wrap items-between w-full md:w-2/3">
                    <div class="w-full px-16">
                        <h2 class="text-xl md:text-3xl text-orange-600 text-center font-bold">
                            Get Praise That Pays!
                        </h2>
                        <p class="py-6 text-base md:text-lg lg:text-2xl">
                            Find out how <span class="uppercase text-amber-600">now</span> with a fast, no-obligation
                            <span class="text-amber-600 font-bold">Review Mastery Audit</span>. Discover
                            your exact steps to spark a steady flow of authentic, customer attracting reviews.
                            <a  href="/audit" class="text-amber-500 hover:text-red-400" target="_blank" title="link to audit">
                                Start Free Audit
                            </a>
                        </p>
                    </div>
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
        <!-- FAQPage JSON-LD -->
        @verbatim
        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Who is the Rave Review Guru?","acceptedAnswer":{"@type":"Answer","text":"Scott Larsen builds simple review systems for local service businesses focused on steady review velocity and trust. See the About page for background."}},
    {"@type":"Question","name":"What’s your game?","acceptedAnswer":{"@type":"Answer","text":"Education first, then a practical system to earn authentic reviews and use them to build trust across Google and AI search. The audit reveals your upside."}},
    {"@type":"Question","name":"Does this actually work?","acceptedAnswer":{"@type":"Answer","text":"Yes when applied. Results come from consistent asks, low friction, good timing, and quality responses measured weekly."}},
    {"@type":"Question","name":"Is this for my kind of business?","acceptedAnswer":{"@type":"Answer","text":"Best for local home, personal, and professional services in competitive markets. Not for anyone seeking fake reviews or shortcuts."}},
    {"@type":"Question","name":"How is this different from ‘get more reviews’ tools?","acceptedAnswer":{"@type":"Answer","text":"We design behavior and process, not blasts. Then we turn reviews into trust assets that lift search and conversions."}},
    {"@type":"Question","name":"What about cost?","acceptedAnswer":{"@type":"Answer","text":"Start with the free audit. If you proceed, pricing is simple and month-to-month. You should see early value in the first cycles."}},
    {"@type":"Question","name":"Do you do anything sketchy?","acceptedAnswer":{"@type":"Answer","text":"No fake reviews. No incentives tied to ratings. We follow platform policies and focus on genuine feedback."}},
    {"@type":"Question","name":"How fast will I see results?","acceptedAnswer":{"@type":"Answer","text":"Often 1–3 weeks for first wins and compounding impact over 60–90 days as cadence normalizes."}},
    {"@type":"Question","name":"Can I DIY this without RRG?","acceptedAnswer":{"@type":"Answer","text":"Yes. Use a clear ask post-service, remove steps, and respond to every review. Our system reduces friction and keeps you consistent."}},
    {"@type":"Question","name":"What’s the next step?","acceptedAnswer":{"@type":"Answer","text":"Take the Rave Review Guru Audit to see how much more your reviews are worth and where to start."}}
  ]
}
        </script>
        @endverbatim
    @endpush
</x-app-layout>
