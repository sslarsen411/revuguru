<x-app-layout>
    <!--
  Rave Review Guru — Solutions (Services) Page
  Built with TailwindCSS utility classes
  Notes:
  • Drop this <section> (or the whole <main>) into your existing layout.
  • Replace hrefs on CTAs as needed.
  • Color accent uses Tailwind's orange palette.
-->

    <main class="bg-white text-slate-900">
        <!-- Hero / Our Solutions -->
        <section id="our-solutions" class="relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-orange-50 via-white to-white pointer-events-none"></div>

            <div class="relative mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
                <div class="flex flex-col gap-8 lg:grid lg:grid-cols-12 lg:gap-12 items-start">
                    <header class="lg:col-span-7">
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900">
                            Our Solutions
                        </h1>
                        <p class="mt-4 text-lg sm:text-xl text-slate-600 max-w-2xl">
                            You don’t need more “stars.” You need a system that turns everyday customer experiences into durable reputation assets—and puts them to work across Google, Yelp, and the AI‑driven web.
                        </p>
                    </header>

                    <aside class="lg:col-span-5">
                        <div class="rounded-2xl border border-orange-200 bg-white shadow-sm p-6">
                            <div class="flex items-start gap-4">
                                <div class="shrink-0 mt-1">
                                    <!-- crossed-star icon -->
                                    <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6 text-slate-500">
                                        <path fill="currentColor" d="M9.7 9.6 3.4 3.3 2 4.7l6.3 6.3-3.7.6c-.9.1-1.3 1.2-.7 1.9l2.9 2.8-.7 4c-.2.9.8 1.6 1.6 1.1l3.6-1.9 3.6 1.9c.8.5 1.8-.2 1.6-1.1l-.7-4 2.9-2.8c.6-.6.2-1.8-.7-1.9l-4-.6-.7-.7-1.4 1.4.3.3-3.5.6c-.1 0-.1.2 0 .3l2.5 2.4-.6 3.5c0 .2.2.3.4.2l3.1-1.6 3.1 1.6c.2.1.4 0 .4-.2l-.6-3.5 2.5-2.4c.1-.1.1-.3 0-.3l-3.5-.5-.6-.1-2.1-2.1-1.4 1.4Z"/>
                                        <path stroke="currentColor" stroke-width="1.5" d="M20 4 4 20"/>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="font-semibold text-slate-900">Stop chasing stars</h2>
                                    <p class="mt-1 text-slate-600 text-sm leading-relaxed">
                                        Most businesses beg for 5‑star ratings, hoping they’ll magically boost rank. That game is stressful, awkward, and leaves your reputation to chance.
                                    </p>
                                </div>
                            </div>

                            <div class="mt-5 flex items-start gap-4">
                                <div class="shrink-0 mt-1">
                                    <!-- process-check icon -->
                                    <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6 text-orange-600">
                                        <path fill="currentColor" d="M19 3H5a2 2 0 0 0-2 2v3h2V5h14v14H5v-3H3v3a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2Z"/>
                                        <path fill="currentColor" d="M10.1 13.9 7.2 11l-1.4 1.4L10.1 17l8-8-1.4-1.4-6.6 6.3Z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="font-semibold text-slate-900">We have a better way</h2>
                                    <p class="mt-1 text-slate-600 text-sm leading-relaxed">
                                        A proven process to <span class="font-medium text-slate-900">Simplify</span>, <span class="font-medium text-slate-900">Automate</span>, <span class="font-medium text-slate-900">Enhance</span>, and <span class="font-medium text-slate-900">Educate</span> so you collect authentic stories, turn them into assets, and put them to work—on Google and across AI‑powered search.
                                    </p>
                                </div>
                            </div>

                            <div class="mt-6">
                                <div class="flex flex-wrap gap-3">
                                    <a href="#simplify" class="inline-flex items-center gap-2 rounded-full bg-orange-600 px-4 py-2 text-white text-sm font-semibold shadow hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">Simplify</a>
                                    <a href="#automate" class="inline-flex items-center gap-2 rounded-full bg-orange-50 px-4 py-2 text-orange-700 text-sm font-semibold ring-1 ring-inset ring-orange-200 hover:bg-orange-100">Automate</a>
                                    <a href="#enhance" class="inline-flex items-center gap-2 rounded-full bg-orange-50 px-4 py-2 text-orange-700 text-sm font-semibold ring-1 ring-inset ring-orange-200 hover:bg-orange-100">Enhance</a>
                                    <a href="#educate" class="inline-flex items-center gap-2 rounded-full bg-orange-50 px-4 py-2 text-orange-700 text-sm font-semibold ring-1 ring-inset ring-orange-200 hover:bg-orange-100">Educate</a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <!-- Simplify -->
        <section id="simplify" class="py-16 lg:py-24 bg-slate-50">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                    <div class="lg:col-span-5">
                        <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-900">
                            Simplify
                        </h2>
                        <p class="mt-4 text-slate-600">
                            We’ve flipped the script on awkward review requests by inviting customers to leave feedback
                            as a favor for a friend so the ask feels natural, not salesy.
                        </p>
                    </div>
                    <div class="lg:col-span-7">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 h-full">
                                <h3 class="font-semibold text-slate-900">
                                    Rave Review Guru Easy Ask
                                </h3>
                                <p class="mt-2 text-sm text-slate-600">
                                    We&apos;ve flipped the script on customer review requests. Instead of an awkward request,
                                    we spark their desire leave feedback as a favor for a friend.
                                </p>
                            </div>
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 h-full">
                                <h3 class="font-semibold text-slate-900">
                                    Two Shakes Review App
                                </h3>
                                <p class="mt-2 text-sm text-slate-600">In just “two shakes,” customers answer a few
                                    questions and our AI crafts their words into a polished, SEO‑smart review.
                                </p>
                            </div>
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 h-full">
                                <h3 class="font-semibold text-slate-900">
                                    Private problem handling
                                </h3>
                                <p class="mt-2 text-sm text-slate-600">
                                    Praise goes public. Concerns route to you privately—so issues are resolved without
                                    tanking your good name.
                                    .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Automate -->
        <section id="automate" class="py-16 lg:py-24 bg-slate-50">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                    <div class="lg:col-span-5">
                        <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-900">Automate</h2>
                        <p class="mt-4 text-slate-600">Skip the manual juggling of requests, replies, and tracking—our automations handle the heavy lifting so you can focus on running the business.</p>
                    </div>
                    <div class="lg:col-span-7">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 h-full">
                                <h3 class="font-semibold text-slate-900">
                                    Rave Review Guru Requests
                                </h3>
                                <p class="mt-2 text-sm text-slate-600">
                                    Thoughtful, reminders to guide customers to leave feedback.
                                </p>
                            </div>
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 h-full">
                                <h3 class="font-semibold text-slate-900">
                                    Rave Review Guru Replies
                                </h3>
                                <p class="mt-2 text-sm text-slate-600">
                                    To be findable your need to reply to <strong><em>every</em></strong> review! Skip
                                    the time-consuming hassle and the the Rave Review Guru handle it.
                                    Bundled with the Two Shakes Review App, every new Google review gets a personal,
                                    on‑brand AI reply.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Enhance -->
        <section id="enhance" class="py-16 lg:py-24">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                    <div class="lg:col-span-5">
                        <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-900">Enhance</h2>
                        <p class="mt-4 text-slate-600">Reviews are an overlooked beacon—shine them brighter to highlight what makes you different in a crowded market.</p>
                    </div>
                    <div class="lg:col-span-7">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div class="rounded-2xl border border-slate-200 p-6 h-full">
                                <h3 class="font-semibold text-slate-900">Beyond the listings</h3>
                                <p class="mt-2 text-sm text-slate-600">Yes, Google/Yelp/Facebook help you get found—right alongside competitors. We push further with AI search optimization so your best proof gets recommended more often.</p>
                            </div>
                            <div class="rounded-2xl border border-slate-200 p-6 h-full">
                                <h3 class="font-semibold text-slate-900">Repurpose & amplify</h3>
                                <p class="mt-2 text-sm text-slate-600">Turn authentic customer stories into website proof, social snippets, sales enablement, email spotlights, and local PR—without adding work for your team.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Educate -->
        <section id="educate" class="py-16 lg:py-24 bg-slate-50">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                    <div class="lg:col-span-5">
                        <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-900">Educate</h2>
                        <p class="mt-4 text-slate-600">Tools are great; training makes them unstoppable. We equip your team with short, practical sessions and step‑by‑step playbooks so the system keeps running—no matter who’s on shift.</p>
                    </div>
                    <div class="lg:col-span-7">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 h-full">
                                <h3 class="font-semibold text-slate-900">Team training</h3>
                                <p class="mt-2 text-sm text-slate-600">How to ask comfortably, handle objections, and “coach” better reviews—ethically.</p>
                            </div>
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 h-full">
                                <h3 class="font-semibold text-slate-900">Owner workshops</h3>
                                <p class="mt-2 text-sm text-slate-600">Reputation strategy, KPI dashboards, and “review velocity” planning.</p>
                            </div>
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 h-full">
                                <h3 class="font-semibold text-slate-900">Playbooks & templates</h3>
                                <p class="mt-2 text-sm text-slate-600">Scripts, follow‑up cadences, response frameworks, and easy SOPs.</p>
                            </div>
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 h-full">
                                <h3 class="font-semibold text-slate-900">Ongoing guidance</h3>
                                <p class="mt-2 text-sm text-slate-600">Office hours and tune‑ups to keep momentum (and reviews) flowing.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- What you get (at a glance) -->
        <section id="at-a-glance" class="py-16 lg:py-24">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl">
                    <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-900">What you get (at a glance)</h2>
                    <ul class="mt-6 space-y-4">
                        <li class="flex gap-3">
            <span class="mt-1.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-orange-600 text-white">
              <svg viewBox="0 0 20 20" aria-hidden="true" class="h-3.5 w-3.5"><path fill="currentColor" d="M8.6 13.2 5.4 10l-1.3 1.3 4.5 4.4L16 8.4l-1.3-1.3-6.1 6.1Z"/></svg>
            </span>
                            <p class="text-slate-700"><span class="font-semibold">Simplify:</span> Two Shakes Review App + friendly “favor‑for‑a‑friend” request approach + private issue routing.</p>
                        </li>
                        <li class="flex gap-3">
            <span class="mt-1.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-orange-600 text-white">
              <svg viewBox="0 0 20 20" aria-hidden="true" class="h-3.5 w-3.5"><path fill="currentColor" d="M8.6 13.2 5.4 10l-1.3 1.3 4.5 4.4L16 8.4l-1.3-1.3-6.1 6.1Z"/></svg>
            </span>
                            <p class="text-slate-700"><span class="font-semibold">Automate:</span> Request System follow‑ups + AI‑powered Reply System for Google reviews.</p>
                        </li>
                        <li class="flex gap-3">
            <span class="mt-1.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-orange-600 text-white">
              <svg viewBox="0 0 20 20" aria-hidden="true" class="h-3.5 w-3.5"><path fill="currentColor" d="M8.6 13.2 5.4 10l-1.3 1.3 4.5 4.4L16 8.4l-1.3-1.3-6.1 6.1Z"/></svg>
            </span>
                            <p class="text-slate-700"><span class="font-semibold">Enhance:</span> AI search optimization + multi‑channel repurposing to outshine competitors.</p>
                        </li>
                        <li class="flex gap-3">
            <span class="mt-1.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-orange-600 text-white">
              <svg viewBox="0 0 20 20" aria-hidden="true" class="h-3.5 w-3.5"><path fill="currentColor" d="M8.6 13.2 5.4 10l-1.3 1.3 4.5 4.4L16 8.4l-1.3-1.3-6.1 6.1Z"/></svg>
            </span>
                            <p class="text-slate-700"><span class="font-semibold">Educate:</span> Training, playbooks, and support to keep results compounding.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section id="cta" class="py-16 lg:py-24 bg-gradient-to-tr from-slate-900 via-slate-800 to-slate-900">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="rounded-3xl bg-white/5 ring-1 ring-white/10 p-8 sm:p-10 lg:p-14 text-center">
                    <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-white">Ready to turn praise into profit?</h2>
                    <p class="mt-3 text-slate-200 max-w-2xl mx-auto">Book a no‑pitch, no‑obligation consult. We’ll map your fastest path to a steady flow of authentic reviews—and show you how to put them to work everywhere that matters.</p>
                    <div class="mt-6 flex flex-wrap items-center justify-center gap-4">
                        <a href="#" class="inline-flex items-center justify-center rounded-2xl bg-orange-500 px-6 py-3 text-white font-semibold shadow hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:ring-offset-2 focus:ring-offset-slate-900">Book a free consult</a>
                        <a href="#our-solutions" class="inline-flex items-center justify-center rounded-2xl bg-white/10 px-6 py-3 text-white font-semibold ring-1 ring-inset ring-white/20 hover:bg-white/20">Explore solutions</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
