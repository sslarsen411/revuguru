<x-app-layout :seo="[
  'title' => 'About Rave Review Guru — Results-Focused Review Strategy',
  'description' => 'We help small businesses turn reviews into durable marketing assets. Meet the team and our philosophy.',
  'canonical' => 'https://www.ravereview.guru/' . $page,
  'image' => asset('og/about.jpg'),
]">
    <section class="mx-auto grid grid-cols-1 md:grid-cols-12 max-w-screen-xl px-4 pb-8 mt-16">
        <div class="md:col-span-5 md:mt-0 md:flex">
            <img src="{{URL::asset("/images/review-guru-love.webp")}}" class="h-60 w-auto mx-auto" alt="chick">
        </div>
        <div class="md:col-span-7 md:mt-0 md:flex flex-col">
            <h1 class="text-3xl my-8 text-center">
                <span class="text-orange-700 font-semibold">The Rave Review Guru</span> is
                about&hellip;
                <ins><strong>you</strong></ins>
            </h1>
            <h2 class="text-2xl text-slate-800">
                Don’t chase stars. Build trust instead.
            </h2>
            <p class="mt-2 text-xl mx-auto max-w-5xl text-pretty text-slate-800">
                We free your business from chasing platforms and ratings. We show you how to own your praise, amplify
                your customer's stories, and turn feedback into fuel for long-term success.
            </p>
            <p class="mt-2 text-xl mx-auto max-w-5xl text-pretty text-slate-800">
                Because our mission is to turn authentic customer voices into business assets of immense value
                and to offer prescriptive systems that let businesses like yours generate and utilize them,
                consistently and ethically now and in the future.
            </p>
        </div>
        <div class="md:col-span-7 md:mt-0 md:flex flex-col">
            <h2 class="text-2xl font-semibold text-slate-900">Partnering for Review Success</h2>
            <p class="mt-4 text-slate-700">
                Great reviews begin with great experiences. There is no magic fairy dust that can turn a poor customer experience into glowing praise. Our work only succeeds when it’s done <span class="font-semibold">with</span> you, not <span class="font-semibold">for</span> you.
            </p>
            <p class="mt-4 text-slate-700">
                We team up with businesses ready to listen, learn, and lead with integrity. Together we build a cohesive review strategy grounded in real customer feedback—amplifying what works and fixing what doesn’t. Five-star reviews are earned, not manufactured.
            </p>


{{--                <p class="text-sm font-medium uppercase tracking-wide text-slate-600">The 0th Law of Reviews</p>--}}
                <blockquote class="mt-2 border-l-4 border-amber-500 pl-4 text-lg font-semibold text-slate-900">
                    Five-star reviews are the result of a five-star customer experience.
                </blockquote>
{{--                <ul class="mt-4 list-disc space-y-2 pl-6 text-slate-700">--}}
{{--                    <li>Solicit and actively listen to customer feedback.</li>--}}
{{--                    <li>Use feedback to enhance what works and correct what doesn’t.</li>--}}
{{--                    <li>Avoid manipulation. Authenticity protects customers and the marketplace.</li>--}}
{{--                </ul>--}}
            </div>
        <div class="md:col-span-5 md:mt-0 md:flex">
            <img src="{{URL::asset("/images/review-guru-love.webp")}}" class="h-60 w-auto mx-auto" alt="chick">
        </div>
    </section>
{{--    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">--}}
{{--        <div class="mx-auto grid max-w-screen-xl px-4 pb-8 md:grid-cols-12 lg:gap-12 lg:pb-16 xl:gap-0">--}}
{{--            <div class="content-center justify-self-start md:col-span-7 md:text-start">--}}

{{--                <p>--}}
{{--                    We&apos;re focus on results that make your business stand-out in your--}}
{{--                    niche, so you can focus on the activities that grow your business.--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    We believe that our strategies should be tailored to fit your company--}}
{{--                    needs and goals, not ours. That&apos;s why we as your <strong>trusted business growth advisor</strong>--}}
{{--                    work within your existing business practices to make our solutions work best for you.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="hidden md:col-span-5 md:mt-0 md:flex">--}}
{{--                <img class="h-48" src="{{URL::asset("https://cdn.mojoimpact.com/rrg/guru-with-mirror.webp")}}" alt="guru">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- About Us / Core Values — Rave Review Guru (Tailwind CSS) -->
    <section class="max-w-5xl mx-auto px-6 py-12">
        <!-- Header / Hero -->
        <header class="mb-10">
{{--            <div class="inline-flex items-center gap-2 rounded-full bg-slate-100 px-3 py-1 text-sm font-medium text-slate-700">--}}
{{--                <span class="h-2 w-2 rounded-full bg-amber-600"></span>--}}
{{--                About Rave Review Guru--}}
{{--            </div>--}}
            <h2 class="mt-4 text-3xl md:text-4xl font-extrabold tracking-tight text-slate-900">
                We don’t chase stars. We future-proof your business.
            </h2>
            <p class="mt-4 text-lg text-slate-700">
                Our tools are vehicles, not the destination. The real business is helping you turn customer reviews
                into a durable marketing asset that powers growth across search, social, and sales.
            </p>
        </header>

        <!-- Core Values -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-slate-900">Our Core Values</h2>
            <div class="mt-6 grid gap-4 md:grid-cols-2">
                <!-- Value 1 -->
                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <h3 class="text-lg font-semibold text-slate-900">1) A Tool Is Not a Solution</h3>
                    <p class="mt-2 text-slate-700">
                        Software is a means, not the end. We don’t sell shiny objects. Instead, we offer the means to
                        unlock the full power of your customer reviews as lasting assets.
                    </p>
                </article>
                <!-- Value 2 -->
                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <h3 class="text-lg font-semibold text-slate-900">2) Take Ownership of Your Praise</h3>
                    <p class="mt-2 text-slate-700">
                        Platforms rent you visibility on their terms. Your customer stories should live with you,
                        ready to deploy wherever you want.
                    </p>
                </article>
                <!-- Value 3 -->
                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <h3 class="text-lg font-semibold text-slate-900">3) Simplicity Wins</h3>
                    <p class="mt-2 text-slate-700">
                        Review collection should be natural, fast, and even fun for customers, staff, and owners.
                        We remove friction at every step.
                    </p>
                </article>
                <!-- Value 4 -->
                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <h3 class="text-lg font-semibold text-slate-900">4) Authenticity Over Perfection</h3>
                    <p class="mt-2 text-slate-700">
                        Real, specific feedback beats a flawless average every time. Credibility comes from authenticity,
                        not digits.
                    </p>
                </article>
                <!-- Value 5 -->
                <article class="rounded-xl border border-slate-200 bg-white p-6 md:col-span-2">
                    <h3 class="text-lg font-semibold text-slate-900">5) Turn Feedback Into Fuel</h3>
                    <p class="mt-2 text-slate-700">
                        Reviews are the instigators of incredible marketing momentum. That&apos;s why we show you how
                        to stand out across the web, social media, ads, and AI search.
                    </p>
                </article>
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

        <!-- Signature Pull Quote -->
        <figure class="my-10 rounded-xl border border-slate-200 bg-white p-6">
            <blockquote class="text-xl font-semibold text-slate-900">
                “Don’t build your reputation on rented land. Own the stories, then decide where they travel.”
            </blockquote>
            <figcaption class="mt-2 text-slate-600">— Rave Review Guru</figcaption>
        </figure>
    </section>
    <section id="mystory" class="max-w-screen-xl mx-auto my-8 flex flex-col md:flex-row justify-center">
        <div class="sm:w-full md:w-1/2">
            <div>
                <h2 class="m-4 text-2xl">
                    More About Scott Larsen
                    </h2>
            </div>
            <p>
                My entrepreneurial career began when I was a kid; no, not with a lemonade
                stand or anything like that, my parents were small business owners for as
                far back as I can remember.
            </p>
            <p>
                They had a corner grocery store (my Mom and Pop&apos;s Mom-n-Pop), called
                Stan&apos;s Market in Lomita California. That&apos;s where I got my start.
                I&apos;d earn pocket money by restocking items, straightening up the
                shelves, and dusting with one of those old-fashioned feather dusters with
                real ostrich feathers.
            </p>
            <p>
                Later we moved to Northern California where my parents bought the Foster
                Freeze in Sonoma. Yes, I&apos;ve flipped a lot of burgers and mixed up a
                ton of milkshakes. I&apos;ve also shopped for produce in the early morning
                and stayed long after closing fixing broken equipment. And when my dad got
                sick, I took over, two shifts a day, seven days a week until he got
                better. Because that&apos;s what you do as a business owner.
            </p>
            <p>
                A lot has changed since then; newspaper display advertising has given way
                to Facebook ads. The power of a Yellow Pages listing is now found in
                a Google Business Profile or AI chatbot. But the core values for success
                remain the same.
            </p>
            <p>
                I know that we as small business owners must wear many hats and at times
                it can all seem overwhelming, but remember, struggle is merely an option.
                There is a better way. If you&apos;d like to learn more, contact me.
            </p>
        </div>
        <div>
            <div class="items-center justify-center montage">
                <div class="image object-center max-w-72 montage__img montage__img--1">
                    <img src="https://cdn.mojoimpact.com/sslc/StansMarket.webp" alt="Stans Market, Lomita CA" />
                </div>
                <div class="image object-center max-w-72 montage__img montage__img--3">
                    <img src="https://cdn.mojoimpact.com/sslc/fosters-freeze.webp" alt="Fosters Freeze, Sonoma CA" />
                </div>
                <div class="image object-center max-w-72 montage__img montage__img--2">
                    <img src="https://cdn.mojoimpact.com/sslc/fosters-freeze-painting.webp" alt="A painting of Fosters Freeze" />
                </div>
            </div>

        </div>
    </section>
    <section class="max-w-screen-xl mx-auto my-8">
        <h2 class="text-2xl text-slate-800 mb-4">Why Reviews?</h2>
        <p>
            My focus has become helping business owners like you maximize the inherent value of your customer
            reviews.
        </p>
        <p>
        I know what it’s like to struggle to stand out from a multitude of competitors, all saying the same thing.
        When everyone is “special” no one is.
        </p>
        <p>
        Authentic customer stories shine a spotlight on your business like nothing else. They truly are marketing gold.
        </p>
        <p>
        I also discovered that in order to full take advantage of the power of your reviews, you… not Google,
            not Yelp, nor any other platform… must have full control over where and when your reviews are seen.
            Especially as consumers turn to AI chatbots to search for local business recommendations.
        </p>
        <p>
        I’m the Rave Review Guru. I’m not an advertising advisor or SEO specialist… My focus, my passion is
            customer reviews.
        </p>

    </section>
    {{--    <div class="tidycal-embed" data-path="sslarsen411/30-minute-meeting-197lq0v"></div><script src="https://asset-tidycal.b-cdn.net/js/embed.js" async></script>--}}
</x-app-layout>
