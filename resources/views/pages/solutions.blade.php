<x-app-layout>

    <!-- Hero -->
    <header class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-800 via-slate-700 to-stone-800"></div>
        <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
            <p class="inline-flex items-center gap-2 text-xs tracking-widest uppercase text-zinc-200/70">
                <span class="inline-block h-1.5 w-1.5 rounded-full bg-zinc-900"></span>
                Rave Review Guru Suite
            </p>
            <h1 class="mt-3 text-3xl sm:text-5xl font-extrabold leading-tight text-zinc-50">
                Every review problem — finally <span class="underline decoration-amber-400 decoration-4 underline-offset-4">solved</span>.
            </h1>
            <p class="mt-5 text-lg sm:text-xl text-zinc-50 max-w-3xl">
                If reviews drive your reputation, why do they drive you crazy?
                turn pain points into products: ask without awkwardness, capture in seconds, reply at scale,
                defuse negatives, repurpose wins, and win visibility in AI search.
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="/audit" class="inline-flex items-center justify-center rounded-xl bg-zinc-950 px-5 py-3 text-white font-semibold shadow-sm hover:bg-zinc-900 focus:outline-none focus:ring-2 focus:ring-zinc-900 focus:ring-offset-2">Take the Review Health Audit</a>
                <a href="#solutions" class="inline-flex items-center justify-center rounded-xl border border-zinc-900 px-5 py-3 font-semibold hover:bg-zinc-900 hover:text-white focus:outline-none focus:ring-2 focus:ring-zinc-900 focus:ring-offset-2">Explore Solutions</a>
            </div>
        </div>
    </header>

    <!-- Intro blurb -->
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
        <div class="bg-white/80 backdrop-blur rounded-2xl border border-zinc-200 p-6 sm:p-8 shadow-sm">
            <h2 class="text-xl sm:text-2xl font-bold">How this page works</h2>
            <p class="mt-2 text-zinc-700">Each section opens with the honest pain. Click to reveal the PEACE
                breakdown: <strong>P</strong>roblem & <strong>E</strong>mpathy, then our <strong>A</strong>uthority & solution with a clear <strong>C</strong>all to action — plus <strong>E</strong>mpathy to keep it human.</p>
        </div>
    </section>

    <!-- Solutions Accordion -->
    <main id="solutions" class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
        <div class="space-y-4">
            <!-- Favor Flow (Asking) -->
            <section x-data="{ open: false }" class="border border-zinc-200 rounded-2xl bg-white shadow-sm">
                <h3>
                    <button type="button" @click="open = !open" :aria-expanded="open.toString()" :class="open ? 'rounded-t-2xl' : 'rounded-2xl'" class="w-full text-left p-5 sm:p-6 flex items-start gap-4">
            <span class="mt-1 inline-flex h-6 w-6 flex-none items-center justify-center rounded-full border border-zinc-300">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 transition-transform" :class="open ? 'rotate-180' : ''"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.06 0L5.25 8.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd"/></svg>
            </span>
                        <span class="flex-1">
              <span class="block text-base font-semibold tracking-wide text-rose-600">Favor Flow — Asking for Reviews</span>
              <span class="block mt-1 text-xl sm:text-2xl font-bold">Ask without the awkward.</span>
              <span class="mt-2 block text-zinc-700">Consistency collapses when it’s uncomfortable. Staff avoid it; customers feel put on the spot.</span>
            </span>
                    </button>
                </h3>
                <div x-show="open" x-collapse id="panel-favor-flow" class="px-5 sm:px-6 pb-6">
                    <div class="prose prose-zinc max-w-none">
                        <h4>P + E: Problem & Empathy</h4>
                        <p>Everyone knows they should ask, but nobody wants the cringe. Asking happens only when someone remembers — often at the wrong moment.</p>
                        <h4>A + C + E: Solution, Benefits & Next Step</h4>
                        <p><strong>Favor Flow</strong> flips the dynamic from request to appreciation. Simple micro-scripts, timing prompts, and a casual QR/short-link handoff that customers welcome.</p>
                        <ul>
                            <li>Staff-friendly script (zero cringe)</li>
                            <li>Ask at peak enthusiasm</li>
                            <li>Cards/QR that keep it effortless</li>
                        </ul>
                    </div>
                    <div class="mt-5">
                        <a href="/solutions/favor-flow" class="inline-flex items-center gap-2 rounded-xl bg-zinc-950 px-4 py-2.5 text-white font-semibold hover:bg-zinc-900">Learn Favor Flow
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4"><path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.19l-3.22-3.22a.75.75 0 111.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 11-1.06-1.06l3.22-3.22H3.75A.75.75 0 013 10z" clip-rule="evenodd"/></svg>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Two Shakes (Capturing & Posting) -->
            <section x-data="{ open: false }" class="border border-zinc-200 rounded-2xl bg-white shadow-sm">
                <h3>
                    <button type="button" @click="open = !open" :aria-expanded="open.toString()" class="w-full text-left p-5 sm:p-6 flex items-start gap-4 rounded-2xl">
            <span class="mt-1 inline-flex h-6 w-6 flex-none items-center justify-center rounded-full border border-zinc-300">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 transition-transform" :class="open ? 'rotate-180' : ''"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.06 0L5.25 8.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd"/></svg>
            </span>
                        <span class="flex-1">
              <span class="block text-base font-semibold tracking-wide text-rose-600">Two Shakes — Capture & Post</span>
              <span class="block mt-1 text-xl sm:text-2xl font-bold">From good vibes to a posted review — fast.</span>
              <span class="mt-2 block text-zinc-700">The moment passes quickly. If it’s not easy right now, it won’t happen later.</span>
            </span>
                    </button>
                </h3>
                <div x-show="open" x-collapse class="px-5 sm:px-6 pb-6">
                    <div class="prose prose-zinc max-w-none">
                        <h4>P + E</h4>
                        <p>Customers mean well but get busy. Promises turn into “later,” and later never comes.</p>
                        <h4>A + C + E</h4>
                        <p><strong>Two Shakes</strong> is a 60‑second, mobile‑first path that captures goodwill while it’s fresh — with smart, non‑spammy reminders.</p>
                        <ul>
                            <li>Friction‑free, 60‑second flow</li>
                            <li>QR + short links for in‑person asks</li>
                            <li>Auto‑handoff to Maps (Google/Apple)</li>
                        </ul>
                    </div>
                    <div class="mt-5">
                        <a href="/solutions/two-shakes" class="inline-flex items-center gap-2 rounded-xl bg-zinc-950 px-4 py-2.5 text-white font-semibold hover:bg-zinc-900">Explore Two Shakes
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4"><path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.19l-3.22-3.22a.75.75 0 111.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 11-1.06-1.06l3.22-3.22H3.75A.75.75 0 013 10z" clip-rule="evenodd"/></svg>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Rapid Reply (Replying) -->
            <section x-data="{ open: false }" class="border border-zinc-200 rounded-2xl bg-white shadow-sm">
                <h3>
                    <button type="button" @click="open = !open" :aria-expanded="open.toString()" class="w-full text-left p-5 sm:p-6 flex items-start gap-4 rounded-2xl">
            <span class="mt-1 inline-flex h-6 w-6 flex-none items-center justify-center rounded-full border border-zinc-300">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 transition-transform" :class="open ? 'rotate-180' : ''"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.06 0L5.25 8.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd"/></svg>
            </span>
                        <span class="flex-1">
              <span class="block text-base font-semibold tracking-wide text-rose-600">Rapid Reply — Review Replies</span>
              <span class="block mt-1 text-xl sm:text-2xl font-bold">Thoughtful replies in your voice, at scale.</span>
              <span class="mt-2 block text-zinc-700">“Thanks!” is easy — handling criticism publicly is not. The clock is ticking and your tone matters.</span>
            </span>
                    </button>
                </h3>
                <div x-show="open" x-collapse class="px-5 sm:px-6 pb-6">
                    <div class="prose prose-zinc max-w-none">
                        <h4>P + E</h4>
                        <p>Platforms expect timely, thoughtful replies. You’re busy, the stakes are high, and writer’s block is real.</p>
                        <h4>A + C + E</h4>
                        <p><strong>Rapid Reply</strong> drafts human‑sounding responses — praise, mixed, or negative — ready to post or tweak in a click.</p>
                        <ul>
                            <li>On‑brand tone matching</li>
                            <li>De‑escalation patterns for tough reviews</li>
                            <li>Template library + quick edit</li>
                        </ul>
                    </div>
                    <div class="mt-5">
                        <a href="/solutions/rapid-reply" class="inline-flex items-center gap-2 rounded-xl bg-zinc-950 px-4 py-2.5 text-white font-semibold hover:bg-zinc-900">See Rapid Reply
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4"><path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.19l-3.22-3.22a.75.75 0 111.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 11-1.06-1.06l3.22-3.22H3.75A.75.75 0 013 10z" clip-rule="evenodd"/></svg>
                        </a>
                    </div>
                </div>
            </section>

            <!-- QuietCare (Negative & Fake Reviews) -->
            <section x-data="{ open: false }" class="border border-zinc-200 rounded-2xl bg-white shadow-sm">
                <h3>
                    <button type="button" @click="open = !open" :aria-expanded="open.toString()" class="w-full text-left p-5 sm:p-6 flex items-start gap-4 rounded-2xl">
            <span class="mt-1 inline-flex h-6 w-6 flex-none items-center justify-center rounded-full border border-zinc-300">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 transition-transform" :class="open ? 'rotate-180' : ''"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.06 0L5.25 8.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd"/></svg>
            </span>
                        <span class="flex-1">
              <span class="block text-base font-semibold tracking-wide text-rose-600">QuietCare — Negative & Fake Reviews</span>
              <span class="block mt-1 text-xl sm:text-2xl font-bold">Fix it privately. Protect it publicly.</span>
              <span class="mt-2 block text-zinc-700">Some complaints are legit; some are lies. Panic doesn’t help — a plan does.</span>
            </span>
                    </button>
                </h3>
                <div x-show="open" x-collapse class="px-5 sm:px-6 pb-6">
                    <div class="prose prose-zinc max-w-none">
                        <h4>P + E</h4>
                        <p>Sabotage and mischief happen. Appeals can feel like shouting into the void while the review hurts morale and conversions.</p>
                        <h4>A + C + E</h4>
                        <p><strong>QuietCare</strong> routes legit complaints to a private channel, surfaces trolls, and equips you with calm, policy‑safe public responses.</p>
                        <ul>
                            <li>Private feedback gates</li>
                            <li>Platform‑ready documentation for removals</li>
                            <li>Clear scripts for calling out fakes</li>
                        </ul>
                    </div>
                    <div class="mt-5">
                        <a href="/solutions/quietcare" class="inline-flex items-center gap-2 rounded-xl bg-zinc-950 px-4 py-2.5 text-white font-semibold hover:bg-zinc-900">Discover QuietCare
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4"><path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.19l-3.22-3.22a.75.75 0 111.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 11-1.06-1.06l3.22-3.22H3.75A.75.75 0 013 10z" clip-rule="evenodd"/></svg>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Momentum Maximizer (Repurposing) -->
            <section x-data="{ open: false }" class="border border-zinc-200 rounded-2xl bg-white shadow-sm">
                <h3>
                    <button type="button" @click="open = !open" :aria-expanded="open.toString()" class="w-full text-left p-5 sm:p-6 flex items-start gap-4 rounded-2xl">
            <span class="mt-1 inline-flex h-6 w-6 flex-none items-center justify-center rounded-full border border-zinc-300">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 transition-transform" :class="open ? 'rotate-180' : ''"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.06 0L5.25 8.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd"/></svg>
            </span>
                        <span class="flex-1">
              <span class="block text-base font-semibold tracking-wide text-rose-600">Momentum Maximizer — Repurpose Reviews</span>
              <span class="block mt-1 text-xl sm:text-2xl font-bold">Turn praise into proof, everywhere.</span>
              <span class="mt-2 block text-zinc-700">Great reviews get buried. Surface, showcase, and syndicate them where they convert.</span>
            </span>
                    </button>
                </h3>
                <div x-show="open" x-collapse class="px-5 sm:px-6 pb-6">
                    <div class="prose prose-zinc max-w-none">
                        <h4>P + E</h4>
                        <p>Most businesses never fully leverage their social proof. It sits on one platform, forgotten.</p>
                        <h4>A + C + E</h4>
                        <p><strong>Momentum Maximizer</strong> auto‑generates website widgets, social posts, and sales‑page snippets from real customer language.</p>
                        <ul>
                            <li>Fresh social proof blocks for your site</li>
                            <li>Auto‑sized images for socials</li>
                            <li>Campaign‑ready snippets and UTM links</li>
                        </ul>
                    </div>
                    <div class="mt-5">
                        <a href="/solutions/momentum-maximizer" class="inline-flex items-center gap-2 rounded-xl bg-zinc-950 px-4 py-2.5 text-white font-semibold hover:bg-zinc-900">See Momentum Maximizer
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4"><path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.19l-3.22-3.22a.75.75 0 111.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 11-1.06-1.06l3.22-3.22H3.75A.75.75 0 013 10z" clip-rule="evenodd"/></svg>
                        </a>
                    </div>
                </div>
            </section>

            <!-- AI Visibility Engine (Future of Search) -->
            <section x-data="{ open: false }" class="border border-zinc-200 rounded-2xl bg-white shadow-sm">
                <h3>
                    <button type="button" @click="open = !open" :aria-expanded="open.toString()" class="w-full text-left p-5 sm:p-6 flex items-start gap-4 rounded-2xl">
            <span class="mt-1 inline-flex h-6 w-6 flex-none items-center justify-center rounded-full border border-zinc-300">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 transition-transform" :class="open ? 'rotate-180' : ''"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.06 0L5.25 8.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd"/></svg>
            </span>
                        <span class="flex-1">
              <span class="block text-base font-semibold tracking-wide text-rose-600">AI Visibility Engine — Future of Search</span>
              <span class="block mt-1 text-xl sm:text-2xl font-bold">Make reviews show up in answers, not just lists.</span>
              <span class="mt-2 block text-zinc-700">Customers ask LLMs for “best near me.” Visibility follows credible, structured, human language.</span>
            </span>
                    </button>
                </h3>
                <div x-show="open" x-collapse class="px-5 sm:px-6 pb-6">
                    <div class="prose prose-zinc max-w-none">
                        <h4>P + E</h4>
                        <p>Old SEO listicles are giving way to answer engines. If your reviews aren’t machine‑readable and useful, you’ll be skipped.</p>
                        <h4>A + C + E</h4>
                        <p><strong>AI Visibility Engine</strong> reformats reviews into micro‑answers and JSON‑LD, aligning content to how AI recommends local businesses.</p>
                        <ul>
                            <li>Answer‑ready review summaries</li>
                            <li>FAQ & Review schema exports</li>
                            <li>Location & service keyword weaving (no stuffing)</li>
                        </ul>
                    </div>
                    <div class="mt-5">
                        <a href="/solutions/ai-visibility" class="inline-flex items-center gap-2 rounded-xl bg-zinc-950 px-4 py-2.5 text-white font-semibold hover:bg-zinc-900">Explore AI Visibility
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4"><path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.19l-3.22-3.22a.75.75 0 111.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 11-1.06-1.06l3.22-3.22H3.75A.75.75 0 013 10z" clip-rule="evenodd"/></svg>
                        </a>
                    </div>
                </div>
            </section>

            <!-- RRG Dashboard (Control & Platforms) -->
            <section x-data="{ open: false }" class="border border-zinc-200 rounded-2xl bg-white shadow-sm">
                <h3>
                    <button type="button" @click="open = !open" :aria-expanded="open.toString()" class="w-full text-left p-5 sm:p-6 flex items-start gap-4 rounded-2xl">
            <span class="mt-1 inline-flex h-6 w-6 flex-none items-center justify-center rounded-full border border-zinc-300">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 transition-transform" :class="open ? 'rotate-180' : ''"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.06 0L5.25 8.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd"/></svg>
            </span>
                        <span class="flex-1">
              <span class="block text-base font-semibold tracking-wide text-rose-600">RRG Dashboard — Control & Platforms</span>
              <span class="block mt-1 text-xl sm:text-2xl font-bold">It’s your business — make the rules.</span>
              <span class="mt-2 block text-zinc-700">Centralize monitoring, routing, and replies across platforms — with real leverage.</span>
            </span>
                    </button>
                </h3>
                <div x-show="open" x-collapse class="px-5 sm:px-6 pb-6">
                    <div class="prose prose-zinc max-w-none">
                        <h4>P + E</h4>
                        <p>Opaque policies and inconsistent enforcement erode trust. Appeals are slow, support is thin, and you’re left guessing.</p>
                        <h4>A + C + E</h4>
                        <p>The <strong>RRG Dashboard</strong> centralizes your review operations so you set the process, not the platform.</p>
                        <ul>
                            <li>Unified inbox for all reviews</li>
                            <li>Status tracking for disputes/appeals</li>
                            <li>Role‑based workflows for your team</li>
                        </ul>
                    </div>
                    <div class="mt-5">
                        <a href="/solutions/control" class="inline-flex items-center gap-2 rounded-xl bg-zinc-950 px-4 py-2.5 text-white font-semibold hover:bg-zinc-900">See the Dashboard
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4"><path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.19l-3.22-3.22a.75.75 0 111.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 11-1.06-1.06l3.22-3.22H3.75A.75.75 0 013 10z" clip-rule="evenodd"/></svg>
                        </a>
                    </div>
                </div>
            </section>

        </div>

        <!-- Sticky CTA -->
        <div class="mt-10 sm:mt-12">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 bg-amber-50 border border-amber-200 rounded-2xl p-5 sm:p-6">
                <div>
                    <h4 class="text-lg sm:text-xl font-bold text-zinc-950">Not sure where to start?</h4>
                    <p class="text-zinc-700">Get your Review Health score in minutes. Prioritize what moves the needle first.</p>
                </div>
                <a href="/audit" class="inline-flex items-center gap-2 rounded-xl bg-zinc-950 px-5 py-3 text-white font-semibold hover:bg-zinc-900">Take the Review Health Audit
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4"><path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.19l-3.22-3.22a.75.75 0 111.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 11-1.06-1.06l3.22-3.22H3.75A.75.75 0 013 10z" clip-rule="evenodd"/></svg>
                </a>
            </div>
        </div>
    </main>
</x-app-layout>
