<x-app-layout :seo="[
  'title' => 'About Rave Review Guru — Results-Focused Review Strategy',
  'description' => 'We help small businesses turn reviews into durable marketing assets. Meet the team and our philosophy.',
  'canonical' => route('about'),
  'image' => asset('og/about.jpg'),
]">
    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
        <div class="mx-auto grid max-w-screen-xl px-4 pb-8 md:grid-cols-12 lg:gap-12 lg:pb-16 xl:gap-0">
            <div class="content-center justify-self-start md:col-span-7 md:text-start">
                <h2 class="text-3xl mb-6">
                    <span class="text-amber-400 font-semibold">The Rave Review Guru</span> is
                    about&hellip; <ins><strong>you</strong></ins>
                </h2>
                <p>
                    We&apos;re focus on results that make your business stand-out in your
                    niche, so you can focus on the activities that grow your business.
                </p>
                <p>
                    We believe that our strategies should be tailored to fit your company
                    needs and goals, not ours. That&apos;s why we as your <strong>trusted business growth advisor</strong>
                    work within your existing business practices to make our solutions work best for you.
                </p>
            </div>
            <div class="hidden md:col-span-5 md:mt-0 md:flex">
                <img class="h-48" src="{{URL::asset("https://cdn.mojoimpact.com/rrg/guru-with-mirror.webp")}}" alt="guru">
            </div>
        </div>
    </section>
    <section class="max-w-screen-xl mx-auto " >
        <div>
            <h2 class="text-2xl mb-8">Meet the Team</h2>
        </div>
        <div class="multi__col ">
            <div class="multi__col-div">
                <h3 class="text-xl">Scott Larsen</h3>
                <h4>The Rave Review Guru</h4>
                <img src="{{URL::asset("https://cdn.mojoimpact.com/sslc/scott-larsen.webp")}}"  alt="Scott Larsen"
                     class="max-h-72 rounded-lg shadow-2xl pt-8" />
                <p class="max-w-[50ch] pt-8 mb-5">
                    For over 30 years, Scott Larsen has helped small business owners with software solutions to
                    boost revenue and grow their business.
                </p>
                <p class="max-w-[50ch] pb-8">
                    Scott has lived in Sonoma, California since the Johnson administration (Lyndon, not Andrew).
                </p>
            </div>
            <div class="multi__col-div">
                <h3 class="text-xl">Bucky</h3>
                <h4>The Dog</h4>
                <img src="https://cdn.mojoimpact.com/sslc/bucky-debugging-code-256.webp" alt="Buck debugging some code"
                     class="max-h-72 rounded-lg shadow-2xl pt-8" />
                <p class="py-8">Bucky is the company mascot and chief programmer. He works for treats.</p>
            </div>
        </div>
    </section>
    <!-- About Us / Core Values — Rave Review Guru (Tailwind CSS) -->
    <section class="max-w-5xl mx-auto px-6 py-12">
        <!-- Header / Hero -->
        <header class="mb-10">
            <div class="inline-flex items-center gap-2 rounded-full bg-slate-100 px-3 py-1 text-sm font-medium text-slate-700">
                <span class="h-2 w-2 rounded-full bg-amber-600"></span>
                About Rave Review Guru
            </div>
            <h1 class="mt-4 text-3xl md:text-4xl font-extrabold tracking-tight text-slate-900">
                We don’t chase stars. We build trust.
            </h1>
            <p class="mt-4 text-lg text-slate-700">
                Our tools are vehicles, not the destination. The real business is helping you turn customer reviews into a durable, owned marketing asset that powers growth across search, social, and sales.
            </p>
        </header>

        <!-- Core Values -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-slate-900">Core Values</h2>
            <div class="mt-6 grid gap-4 md:grid-cols-2">
                <!-- Value 1 -->
                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <h3 class="text-lg font-semibold text-slate-900">1) A Tool Is Not a Business</h3>
                    <p class="mt-2 text-slate-700">
                        Software is a means, not the end. We don’t sell shiny gadgets—we help you unlock the full power of customer reviews as lasting assets.
                    </p>
                </article>
                <!-- Value 2 -->
                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <h3 class="text-lg font-semibold text-slate-900">2) Own Your Praise</h3>
                    <p class="mt-2 text-slate-700">
                        Platforms rent you visibility on their terms. Your customer stories should live with you, ready to deploy wherever they convert best.
                    </p>
                </article>
                <!-- Value 3 -->
                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <h3 class="text-lg font-semibold text-slate-900">3) Simplicity Wins</h3>
                    <p class="mt-2 text-slate-700">
                        Review collection should be natural, fast, and even fun—for customers, staff, and owners. We remove friction at every step.
                    </p>
                </article>
                <!-- Value 4 -->
                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <h3 class="text-lg font-semibold text-slate-900">4) Authenticity Over Perfection</h3>
                    <p class="mt-2 text-slate-700">
                        Real, specific feedback beats a flawless average. Credibility comes from details, not just digits.
                    </p>
                </article>
                <!-- Value 5 -->
                <article class="rounded-xl border border-slate-200 bg-white p-6 md:col-span-2">
                    <h3 class="text-lg font-semibold text-slate-900">5) Turn Feedback Into Fuel</h3>
                    <p class="mt-2 text-slate-700">
                        A review isn’t the end of the journey—it’s the start of marketing momentum. We help you repurpose stories across web, social, ads, and sales.
                    </p>
                </article>
            </div>
        </section>

        <!-- Value Statements (Options) -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-slate-900">Value Statements</h2>
            <p class="mt-2 text-slate-600">Choose the tone that fits your page. (You can rotate these or A/B test.)</p>

            <div class="mt-6 grid gap-4 md:grid-cols-2">
                <!-- Option A -->
                <article class="rounded-xl border border-slate-200 bg-gradient-to-br from-amber-50 to-slate-50 p-6">
                    <h3 class="text-base font-semibold text-slate-900">Option A — Direct &amp; Businesslike</h3>
                    <p class="mt-2 text-slate-800">
                        We help small businesses transform customer reviews into their most valuable marketing asset—owned, authentic, and working 24/7 to drive growth.
                    </p>
                </article>
                <!-- Option B -->
                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <h3 class="text-base font-semibold text-slate-900">Option B — Punchy &amp; Memorable</h3>
                    <p class="mt-2 text-slate-800">
                        We don’t chase stars. We build trust. Our tools make reviews easy to collect, authentic to share, and powerful enough to future-proof your business.
                    </p>
                </article>
                <!-- Option C -->
                <article class="rounded-xl border border-slate-200 bg-white p-6 md:col-span-2">
                    <h3 class="text-base font-semibold text-slate-900">Option C — Inspirational &amp; Guide-like</h3>
                    <p class="mt-2 text-slate-800">
                        We free small businesses from chasing platforms and ratings. We help them own their praise, amplify their stories, and turn feedback into fuel for long-term success.
                    </p>
                </article>
            </div>
        </section>

        <!-- Mission Statements (Variations) -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-slate-900">Mission Statements</h2>
            <div class="mt-6 grid gap-4 md:grid-cols-3">
                <!-- Short & Simple -->
                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <h3 class="text-base font-semibold text-slate-900">Short &amp; Simple</h3>
                    <p class="mt-2 text-slate-800">
                        To help businesses maximize the value of their customer reviews.
                    </p>
                </article>
                <!-- Expanded -->
                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <h3 class="text-base font-semibold text-slate-900">Expanded</h3>
                    <p class="mt-2 text-slate-800">
                        We empower small and medium businesses to take full control of reviews—making them simple to collect, authentic to share, and powerful to use—so they stand out, earn trust, and grow sustainably.
                    </p>
                </article>
                <!-- Vision-Driven -->
                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <h3 class="text-base font-semibold text-slate-900">Vision-Driven</h3>
                    <p class="mt-2 text-slate-800">
                        We envision a world where reviews aren’t just platform ratings but lasting assets every business owns and leverages to thrive in social search and AI-driven discovery.
                    </p>
                </article>
            </div>
        </section>

        <!-- Signature Pull Quote -->
        <figure class="my-10 rounded-xl border border-slate-200 bg-white p-6">
            <blockquote class="text-xl font-semibold text-slate-900">
                “Don’t build your reputation on rented land. Own the stories, then decide where they travel.”
            </blockquote>
            <figcaption class="mt-2 text-slate-600">— Rave Review Guru</figcaption>
        </figure>
    </section>

    {{--    <div class="tidycal-embed" data-path="sslarsen411/30-minute-meeting-197lq0v"></div><script src="https://asset-tidycal.b-cdn.net/js/embed.js" async></script>--}}
</x-app-layout>
