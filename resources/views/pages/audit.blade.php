<x-app-layout>


    <main class="mx-auto max-w-5xl px-4 py-8" x-data="auditForm()" x-init="init()">
        <!-- Top Intro -->
        <section class="mb-8">
            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-950/5">
                <h2 class="text-2xl font-semibold">Turn Reviews into Revenue</h2>
                <p class="mt-2 text-gray-600">In 3–5 minutes, share a few details and we'll send a personalized audit with quick wins, a free QR code to your Google Business Profile, and practical next steps. No sales pitch—just value.</p>
                <ul class="mt-4 grid gap-2 sm:grid-cols-3 text-sm text-gray-700">
                    <li class="flex items-center gap-2"><span class="h-6 w-6 rounded-full bg-orange-600 text-white grid place-items-center text-xs">1</span> Contact & Basics</li>
                    <li class="flex items-center gap-2"><span class="h-6 w-6 rounded-full bg-orange-600 text-white grid place-items-center text-xs">2</span> Profiles & Visibility</li>
                    <li class="flex items-center gap-2"><span class="h-6 w-6 rounded-full bg-orange-600 text-white grid place-items-center text-xs">3</span> Reviews & Strategy</li>
                </ul>
            </div>
        </section>

        <!-- Stepper -->
        <section class="mb-6">
            <ol class="flex items-center justify-between">
                <template x-for="(s, i) in steps" :key="i">
                    <li class="flex-1">
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <div class="h-9 w-9 flex items-center justify-center rounded-full font-semibold"
                                     :class="current===i ? 'bg-orange-600 text-white' : (i<current ? 'bg-green-600 text-white' : 'bg-gray-200 text-gray-600')">
                                    <span x-text="i+1"></span>
                                </div>
                                <div class="ml-3 text-sm font-medium" :class="i<=current ? 'text-gray-900' : 'text-gray-400'" x-text="s"></div>
                            </div>
                            <div class="mx-3 hidden flex-1 border-t sm:block" :class="i < steps.length-1 ? 'border-gray-200' : 'border-transparent'"></div>
                        </div>
                    </li>
                </template>
            </ol>
        </section>

        <!-- Form -->
        <form @submit.prevent="submit" novalidate class="space-y-8">
            <!-- STEP 1: Contact Basics -->
            <div x-show="current===0" x-transition.opacity>
                <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-950/5">
                    <h3 class="text-lg font-semibold">Contact Basics</h3>
                    <p class="mt-1 text-sm text-gray-600">We’ll only use this to deliver your audit and (optionally) schedule a strategy session.</p>
                    <div class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium">Business Name<span class="text-orange-600"> *</span></label>
                            <input type="text" x-model="form.business_name" required class="mt-2 w-full rounded-xl border-gray-300 focus:border-orange-600 focus:ring-orange-600" placeholder="Acme Plumbing & Rooter" />
                            <p class="mt-1 text-xs text-gray-500">Exact name as shown on Google if possible.</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Your Name<span class="text-orange-600"> *</span></label>
                            <input type="text" x-model="form.contact_name" required class="mt-2 w-full rounded-xl border-gray-300 focus:border-orange-600 focus:ring-orange-600" placeholder="Jordan Lee" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Role/Title</label>
                            <input type="text" x-model="form.contact_role" class="mt-2 w-full rounded-xl border-gray-300 focus:border-orange-600 focus:ring-orange-600" placeholder="Owner / Manager" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Email<span class="text-orange-600"> *</span></label>
                            <input type="email" x-model="form.email" required class="mt-2 w-full rounded-xl border-gray-300 focus:border-orange-600 focus:ring-orange-600" placeholder="you@business.com" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Phone (optional)</label>
                            <input type="tel" x-model="form.phone" class="mt-2 w-full rounded-xl border-gray-300 focus:border-orange-600 focus:ring-orange-600" placeholder="(555) 555-1234" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Best Time to Contact</label>
                            <select x-model="form.contact_window" class="mt-2 w-full rounded-xl border-gray-300 focus:border-orange-600 focus:ring-orange-600">
                                <option value="">Select…</option>
                                <option>Weekday mornings</option>
                                <option>Weekday afternoons</option>
                                <option>Evenings</option>
                                <option>Fridays</option>
                                <option>Anytime</option>
                            </select>
                        </div>
                    </div>
                    <!-- Honeypot -->
                    <div class="sr-only" aria-hidden="true">
                        <label>Leave this field blank</label>
                        <input type="text" x-model="form._hp" tabindex="-1" autocomplete="off" />
                    </div>
                </div>
            </div>

            <!-- STEP 2: Profiles & Visibility -->
            <div x-show="current===1" x-transition.opacity>
                <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-950/5">
                    <h3 class="text-lg font-semibold">Profiles & Visibility</h3>
                    <p class="mt-1 text-sm text-gray-600">Tell us where you’re listed. Not sure? Choose “Not sure” and we’ll check.</p>

                    <div class="mt-6 grid grid-cols-1 gap-6">
                        <!-- Claimed status -->
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                            <div>
                                <label class="block text-sm font-medium">Google Business Profile</label>
                                <div class="mt-2 flex gap-3 text-sm">
                                    <label class="inline-flex items-center gap-2"><input type="radio" x-model="form.claimed_gbp" value="Yes"/> <span>Yes</span></label>
                                    <label class="inline-flex items-center gap-2"><input type="radio" x-model="form.claimed_gbp" value="No"/> <span>No</span></label>
                                    <label class="inline-flex items-center gap-2"><input type="radio" x-model="form.claimed_gbp" value="Not sure"/> <span>Not sure</span></label>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Yelp</label>
                                <div class="mt-2 flex gap-3 text-sm">
                                    <label class="inline-flex items-center gap-2"><input type="radio" x-model="form.claimed_yelp" value="Yes"/> <span>Yes</span></label>
                                    <label class="inline-flex items-center gap-2"><input type="radio" x-model="form.claimed_yelp" value="No"/> <span>No</span></label>
                                    <label class="inline-flex items-center gap-2"><input type="radio" x-model="form.claimed_yelp" value="Not sure"/> <span>Not sure</span></label>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Bing Places</label>
                                <div class="mt-2 flex gap-3 text-sm">
                                    <label class="inline-flex items-center gap-2"><input type="radio" x-model="form.claimed_bing" value="Yes"/> <span>Yes</span></label>
                                    <label class="inline-flex items-center gap-2"><input type="radio" x-model="form.claimed_bing" value="No"/> <span>No</span></label>
                                    <label class="inline-flex items-center gap-2"><input type="radio" x-model="form.claimed_bing" value="Not sure"/> <span>Not sure</span></label>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium">Google CID (optional)</label>
                                <input type="text" x-model="form.cid" class="mt-2 w-full rounded-xl border-gray-300 focus:border-orange-600 focus:ring-orange-600" placeholder="e.g., 1728095042612345678" />
                                <p class="mt-1 text-xs text-gray-500">Don’t know it? Leave blank—we’ll include it in your audit.</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium">Google Place ID (optional)</label>
                                <input type="text" x-model="form.pid" class="mt-2 w-full rounded-xl border-gray-300 focus:border-orange-600 focus:ring-orange-600" placeholder="e.g., ChIJN1t_tDeuEmsRUsoyG83frY4" />
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Website URL (optional)</label>
                            <input type="url" x-model="form.website" class="mt-2 w-full rounded-xl border-gray-300 focus:border-orange-600 focus:ring-orange-600" placeholder="https://example.com" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- STEP 3: Reviews & Strategy -->
            <div x-show="current===2" x-transition.opacity>
                <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-950/5">
                    <h3 class="text-lg font-semibold">Reviews & Strategy</h3>
                    <p class="mt-1 text-sm text-gray-600">A quick snapshot helps us tailor recommendations and quick wins.</p>

                    <div class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium">Your one-liner / value proposition</label>
                            <textarea x-model="form.oneliner" rows="3" class="mt-2 w-full rounded-xl border-gray-300 focus:border-orange-600 focus:ring-orange-600" placeholder="We help [who] get [result] without [pain]."></textarea>
                            <p class="mt-1 text-xs text-gray-500">No one-liner yet? Try free resources at <a href="https://www.mystorybrand.com/brandscript" target="_blank" class="text-orange-700 underline">StoryBrand</a>.</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium">How many Google reviews do you have?</label>
                            <select x-model="form.review_count" class="mt-2 w-full rounded-xl border-gray-300 focus:border-orange-600 focus:ring-orange-600">
                                <option value="">Select…</option>
                                <option>0–5</option>
                                <option>6–20</option>
                                <option>21–50</option>
                                <option>51–100</option>
                                <option>100+</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Average Google star rating</label>
                            <select x-model="form.avg_rating" class="mt-2 w-full rounded-xl border-gray-300 focus:border-orange-600 focus:ring-orange-600">
                                <option value="">Select…</option>
                                <option>Below 3.5</option>
                                <option>3.5–4.0</option>
                                <option>4.1–4.4</option>
                                <option>4.5–4.7</option>
                                <option>4.8–5.0</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Customer frequency</label>
                            <div class="mt-2 flex gap-4 text-sm">
                                <label class="inline-flex items-center gap-2"><input type="radio" x-model="form.customer_frequency" value="one_time"> <span>Mostly one-time jobs</span></label>
                                <label class="inline-flex items-center gap-2"><input type="radio" x-model="form.customer_frequency" value="on_going"> <span>Ongoing / repeat clients</span></label>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="block text-sm font-medium">Biggest review challenge (choose up to 3)</label>
                            <div class="mt-3 grid grid-cols-1 gap-2 sm:grid-cols-2">
                                <template x-for="opt in challengeOptions" :key="opt.val">
                                    <label class="inline-flex items-center gap-3 rounded-xl border border-gray-200 bg-gray-50 px-4 py-2 text-sm hover:bg-gray-100">
                                        <input type="checkbox" :value="opt.val" @change="toggleChallenge($event)" :checked="form.challenges.includes(opt.val)" />
                                        <span x-text="opt.label"></span>
                                    </label>
                                </template>
                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-medium mt-3">Other (optional)</label>
                                    <input type="text" x-model="form.challenge_other" class="mt-2 w-full rounded-xl border-gray-300 focus:border-orange-600 focus:ring-orange-600" placeholder="Describe your challenge" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Do competitors win more customers online?</label>
                            <div class="mt-2 flex gap-4 text-sm">
                                <label class="inline-flex items-center gap-2"><input type="radio" x-model="form.competitor_pressure" value="Yes"> <span>Yes</span></label>
                                <label class="inline-flex items-center gap-2"><input type="radio" x-model="form.competitor_pressure" value="No"> <span>No</span></label>
                                <label class="inline-flex items-center gap-2"><input type="radio" x-model="form.competitor_pressure" value="Not sure"> <span>Not sure</span></label>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Do you showcase reviews on your site/marketing?</label>
                            <div class="mt-2 flex gap-4 text-sm">
                                <label class="inline-flex items-center gap-2"><input type="radio" x-model="form.social_proof_usage" value="Yes"> <span>Yes</span></label>
                                <label class="inline-flex items-center gap-2"><input type="radio" x-model="form.social_proof_usage" value="No"> <span>No</span></label>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="block text-sm font-medium">How's business overall?</label>
                            <div class="mt-2">
                                <input type="range" min="0" max="10" step="1" x-model.number="form.business_health" class="w-full" />
                                <div class="mt-1 flex justify-between text-xs text-gray-600">
                                    <span>0 = struggling</span>
                                    <span x-text="form.business_health + '/10'"></span>
                                    <span>10 = booming</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 border-t pt-6">
                        <label class="inline-flex items-start gap-3 text-sm">
                            <input type="checkbox" x-model="form.consent" />
                            <span>By submitting, you agree to our <a href="#" class="text-orange-700 underline">Terms</a> and <a href="#" class="text-orange-700 underline">Privacy Policy</a>. We’ll email your audit and one follow-up invite for a free strategy session.</span>
                        </label>
                    </div>

                    <!-- reCAPTCHA placeholder -->
                    <div class="mt-4 rounded-lg border border-dashed border-gray-300 p-3 text-center text-xs text-gray-500">reCAPTCHA placeholder</div>
                </div>
            </div>

            <!-- Navigation -->
            <div class="flex items-center justify-between">
                <button type="button" @click="prev" :disabled="current===0" class="inline-flex items-center gap-2 rounded-xl border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 disabled:opacity-40">
                    ← Back
                </button>
                <div class="flex gap-3">
                    <button type="button" x-show="current<steps.length-1" @click="next" class="inline-flex items-center gap-2 rounded-xl bg-orange-600 px-4 py-2 text-sm font-semibold text-white hover:bg-orange-700">
                        Continue →
                    </button>
                    <button type="submit" x-show="current===steps.length-1" class="inline-flex items-center gap-2 rounded-xl bg-green-600 px-4 py-2 text-sm font-semibold text-white hover:bg-green-700">
                        Get My Free Audit
                    </button>
                </div>
            </div>
        </form>

        <!-- Success Modal -->
        <div x-show="submitted" x-transition.opacity class="fixed inset-0 z-50 grid place-items-center bg-black/50 p-4">
            <div class="w-full max-w-lg rounded-2xl bg-white p-6 shadow-xl">
                <h3 class="text-xl font-semibold">Thanks — your audit is on the way!</h3>
                <p class="mt-2 text-sm text-gray-600">We’ll email your personalized audit within 24 hours. Meanwhile, here’s a free QR code you can use to send customers directly to your Google reviews page.</p>
                <div class="mt-4 grid gap-3">
                    <label class="text-sm font-medium">GBP Link (editable)</label>
                    <input type="url" x-model="qrUrl" class="w-full rounded-xl border-gray-300 focus:border-orange-600 focus:ring-orange-600" placeholder="https://g.page/r/your-unique-link" />
                    <div class="rounded-xl border bg-white p-4 text-center">
                        <canvas id="qrCanvas" class="mx-auto"></canvas>
                        <a id="qrDownload" download="rrg-gbp-qr.png" class="mt-3 inline-block rounded-lg bg-gray-900 px-3 py-1.5 text-xs font-semibold text-white">Download QR</a>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-between">
                    <a href="#" class="text-sm text-orange-700 underline">Book your free strategy session</a>
                    <button @click="submitted=false" class="rounded-xl border border-gray-300 bg-white px-4 py-2 text-sm font-medium hover:bg-gray-50">Close</button>
                </div>
            </div>
        </div>
    </main>


    <!-- Lightweight QR generator (no external network calls) -->
    <script>
        // Tiny QR library (qrcode-generator) – inlined minified for offline demo
        // Source: https://github.com/kazuhikoarase/qrcode-generator (MIT) – trimmed build
        /*! qrcode-generator (minimal build) */
        (function(){function l(a){this.mode=p;this.data=a}function q(a,e){this.typeNumber=a;this.errorCorrectLevel=e;this.modules=null;this.moduleCount=0;this.dataCache=null;this.dataList=[]}function r(a,e){if(void 0==a.length)throw Error(a.length+" / "+e);for(var c=0;c<a.length&&0==a[c];)c++;this.num=Array(a.length-c+e);for(var b=0;b<a.length-c;b++)this.num[b]=a[b+c];for(b=0;b<e;b++)this.num[b+a.length-c]=0}function t(a,e){for(var c=0;c<a.num.length&&0==a.num[c];)c++;for(var b=Array(a.num.length-c),d=0;d<b.length;d++)b[d]=a.num[d+c];for(;b.length<=e-1;)b.unshift(0);return b}function u(a,e){for(var c=0;c<e;c++)a.push(0)}function v(a,e){for(;0<a.length&&0==a[0];)a.shift();for(;0<e&&0==a[0];)a.shift(),e--}var p=4,w={L:1,M:0,Q:3,H:2};q.prototype={addData:function(a){this.dataList.push(new l(a));this.dataCache=null},isDark:function(a,e){if(null==this.modules)throw Error("QR not built");return this.modules[a][e]},getModuleCount:function(){return this.moduleCount},make:function(){if(this.typeNumber<1){for(var a=1;40>a;a++){for(var e=m(s[a],w[this.errorCorrectLevel]).totalDataCount,c=0,b=0;b<this.dataList.length;b++)c+=this.dataList[b].data.length+1;if(c<=e){this.typeNumber=a;break}}}this.makeImpl()},makeImpl:function(){this.moduleCount=4*this.typeNumber+17;this.modules=Array(this.moduleCount);for(var a=0;a<this.moduleCount;a++){this.modules[a]=Array(this.moduleCount);for(var e=0;e<this.moduleCount;e++)this.modules[a][e]=null}x(this,0,0);x(this,this.moduleCount-7,0);x(this,0,this.moduleCount-7);y(this);z(this);A(this,w[this.errorCorrectLevel],B(this.typeNumber,w[this.errorCorrectLevel]));for(var a=C(this.typeNumber,w[this.errorCorrectLevel]),e=Array(0),c=0;c<this.dataList.length;c++){var b=this.dataList[c];e=e.concat(D(b.data))}E(this,e,a)},createDataURL:function(a){a=a||4;var e=this.getModuleCount();var c=document.createElement('canvas');c.width=c.height=e*a;var b=c.getContext('2d');b.fillStyle='#fff';b.fillRect(0,0,c.width,c.height);b.fillStyle='#000';for(var d=0;d<e;d++)for(var f=0;f<e;f++)this.isDark(d,f)&&b.fillRect(d*a,f*a,a,a);return c.toDataURL('image/png')}};function m(a,e){for(var c=0;c<a.length;c++)if(a[c].ec==e)return a[c];return null}function D(a){for(var e=[4],c=0;c<a.length;c++)e.push(a.charCodeAt(c));return e}function E(a,e,c){for(var b=0,d=0,f=0;f<c.length;f++){for(var g=c[f].dataCount,h=c[f].totalCount-g,k=Array(g),n=0;n<g;n++)k[n]=8<=b?0:(e[b]||0),b++;var I=new r(k,h),J=t(I,h);for(n=0;n<h;n++)J[n]^=0;for(n=0;n<g;n++)k[n]=k[n]^J[n%J.length];c[f].dataCodewords=k;c[f].ecCodewords=J;d=Math.max(d,c[f].totalCount)}for(f=0;f<d;f++)for(g=0;g<c.length;g++){k=c[g];n=f<k.dataCodewords.length?k.dataCodewords[f]:void 0;void 0!==n&&F(a,n);n=f<k.ecCodewords.length?k.ecCodewords[f]:void 0;void 0!==n&&F(a,n)}}function F(a,e){for(var c=7;0<=c;c--)G(a,(e>>>c&1)==1)}function G(a,e){for(var c=a.moduleCount-1;0<=c;c--)for(var b=a.moduleCount-1;0<=b;b--)if(null==a.modules[b][c]){a.modules[b][c]=e;return}}function x(a,e,c){for(var b=-1;7>=b;b++)for(var d=-1;7>=d;d++){var f=0<=e+d&&e+d<a.moduleCount&&0<=c+b&&c+b<a.moduleCount;f&&(a.modules[e+d][c+b]=0<=d&&d<=6&&(0==b||6==b)||0<=b&&b<=6&&(0==d||6==d)||2<=d&&d<=4&&2<=b&&b<=4)}}function y(a){for(var e=8,c=0;c<a.moduleCount-8;c++)null==a.modules[c][e]&&(a.modules[c][e]=0==c%2)}function z(a){for(var e=8,c=0;c<a.moduleCount-8;c++)null==a.modules[e][c]&&(a.modules[e][c]=0==c%2)}function A(a,e,c){for(var b=0;15>b;b++){var d=!1;switch(b){case 0:d=1==e;break;case 1:d=0==e;break;case 2:d=3==e;break;case 3:d=2==e;break;case 4:d=1==c;break;case 5:d=0==c;break;case 6:d=3==c;break;case 7:d=2==c}a.modules[a.moduleCount-1-b][8]=d;a.modules[8][a.moduleCount-1-b]=d}a.modules[8][8]=!0}function B(a,e){return(0==e?1:1==e?0:3==e?3:2)<<3|(a-1)%8}function C(a,e){var c=s[a],b=[];for(var d=0;d<c.rsBlocks.length;d++){var f=c.rsBlocks[d];b.push({dataCount:f.dataCount,totalCount:f.totalCount})}return b}var s={1:{ec:w.L,rsBlocks:[{dataCount:19,totalCount:26}]},2:{ec:w.L,rsBlocks:[{dataCount:34,totalCount:44}]},3:{ec:w.L,rsBlocks:[{dataCount:55,totalCount:70}]},4:{ec:w.L,rsBlocks:[{dataCount:80,totalCount:100}]},5:{ec:w.L,rsBlocks:[{dataCount:108,totalCount:134}]},6:{ec:w.L,rsBlocks:[{dataCount:136,totalCount:172}]},7:{ec:w.L,rsBlocks:[{dataCount:156,totalCount:196}]},8:{ec:w.L,rsBlocks:[{dataCount:194,totalCount:242}]},9:{ec:w.L,rsBlocks:[{dataCount:232,totalCount:292}]},10:{ec:w.L,rsBlocks:[{dataCount:274,totalCount:346}]},11:{ec:w.L,rsBlocks:[{dataCount:324,totalCount:422}]},12:{ec:w.L,rsBlocks:[{dataCount:370,totalCount:518}]},13:{ec:w.L,rsBlocks:[{dataCount:428,totalCount:646}]},14:{ec:w.L,rsBlocks:[{dataCount:461,totalCount:700}]},15:{ec:w.L,rsBlocks:[{dataCount:523,totalCount:812}]},16:{ec:w.L,rsBlocks:[{dataCount:589,totalCount:898}]},17:{ec:w.L,rsBlocks:[{dataCount:647,totalCount:1054}]},18:{ec:w.L,rsBlocks:[{dataCount:721,totalCount:1204}]},19:{ec:w.L,rsBlocks:[{dataCount:795,totalCount:1346}]},20:{ec:w.L,rsBlocks:[{dataCount:861,totalCount:1510}]},21:{ec:w.L,rsBlocks:[{dataCount:932,totalCount:1676}]},22:{ec:w.L,rsBlocks:[{dataCount:1006,totalCount:1868}]},23:{ec:w.L,rsBlocks:[{dataCount:1094,totalCount:2054}]},24:{ec:w.L,rsBlocks:[{dataCount:1174,totalCount:2240}]},25:{ec:w.L,rsBlocks:[{dataCount:1276,totalCount:2420}]},26:{ec:w.L,rsBlocks:[{dataCount:1370,totalCount:2586}]},27:{ec:w.L,rsBlocks:[{dataCount:1468,totalCount:2796}]},28:{ec:w.L,rsBlocks:[{dataCount:1531,totalCount:2976}]},29:{ec:w.L,rsBlocks:[{dataCount:1631,totalCount:3230}]},30:{ec:w.L,rsBlocks:[{dataCount:1735,totalCount:3412}]},31:{ec:w.L,rsBlocks:[{dataCount:1843,totalCount:3692}]},32:{ec:w.L,rsBlocks:[{dataCount:1955,totalCount:3976}]},33:{ec:w.L,rsBlocks:[{dataCount:2071,totalCount:4260}]},34:{ec:w.L,rsBlocks:[{dataCount:2191,totalCount:4590}]},35:{ec:w.L,rsBlocks:[{dataCount:2306,totalCount:4854}]},36:{ec:w.L,rsBlocks:[{dataCount:2434,totalCount:5230}]},37:{ec:w.L,rsBlocks:[{dataCount:2566,totalCount:5576}]},38:{ec:w.L,rsBlocks:[{dataCount:2702,totalCount:5960}]},39:{ec:w.L,rsBlocks:[{dataCount:2812,totalCount:6348}]},40:{ec:w.L,rsBlocks:[{dataCount:2956,totalCount:6768}]}};
            window.QR = function(text, scale){ const q = new qrcode(0, 'L'); q.addData(text); q.make(); const url = q.createDataURL(scale||6); return url; }
            function qrcode(typeNumber, errorCorrectLevel){ return new q(typeNumber, errorCorrectLevel); }
    </script>

    <script>
        function auditForm(){
            return {
                steps: ['Contact', 'Profiles', 'Reviews'],
                current: 0,
                submitted: false,
                qrUrl: '',
                form: {
                    business_name: '',
                    contact_name: '',
                    contact_role: '',
                    email: '',
                    phone: '',
                    contact_window: '',
                    _hp: '',
                    claimed_gbp: '',
                    claimed_yelp: '',
                    claimed_bing: '',
                    cid: '',
                    pid: '',
                    website: '',
                    oneliner: '',
                    review_count: '',
                    avg_rating: '',
                    customer_frequency: '',
                    challenges: [],
                    challenge_other: '',
                    competitor_pressure: '',
                    social_proof_usage: '',
                    business_health: 5,
                    consent: false,
                },
                challengeOptions: [
                    { val: 'get_reviews', label: 'Getting customers to leave reviews' },
                    { val: 'negative_reviews', label: 'Handling negative reviews' },
                    { val: 'outranked', label: 'Competitors outranking us' },
                    { val: 'no_process', label: 'No process / too time-consuming' },
                    { val: 'low_keywords', label: 'Reviews don\'t mention our services/keywords' },
                    { val: 'few_recent', label: 'Not enough recent reviews' },
                ],
                init(){
                    this.qrUrl = '';
                },
                next(){ if(this.validateStep(this.current)){ this.current++; } },
                prev(){ this.current = Math.max(0, this.current-1); },
                toggleChallenge(e){
                    const v = e.target.value;
                    const idx = this.form.challenges.indexOf(v);
                    if(e.target.checked){
                        if(this.form.challenges.length < 3 && idx===-1) this.form.challenges.push(v);
                        else e.target.checked = false;
                    } else {
                        if(idx>-1) this.form.challenges.splice(idx,1);
                    }
                },
                validateStep(i){
                    if(i===0){
                        if(!this.form.business_name || !this.form.contact_name || !this.form.email) { alert('Please complete business name, your name, and email.'); return false; }
                        if(this.form._hp){ return false; } // honeypot
                    }
                    if(i===2){
                        if(!this.form.consent){ alert('Please agree to the terms so we can deliver your audit.'); return false; }
                    }
                    return true;
                },
                submit(){
                    if(!this.validateStep(2)) return;
                    // Demo: simulate submission
                    // In Laravel, POST this.form as JSON to a controller that writes to the separate DB.
                    this.submitted = true;
                    // Build default GBP review link from business + city as a fallback if no PID.
                    const name = encodeURIComponent(this.form.business_name || '');
                    const city = '';
                    const fallback = `https://www.google.com/search?q=${name}+reviews`;
                    const gbpLink = this.form.pid ? `https://www.google.com/maps/place/?q=place_id:${this.form.pid}` : fallback;
                    this.qrUrl = gbpLink;
                    this.$nextTick(() => this.renderQR());
                },
                renderQR(){
                    const dataUrl = QR(this.qrUrl, 6);
                    const img = new Image();
                    img.onload = () => {
                        const canvas = document.getElementById('qrCanvas');
                        const ctx = canvas.getContext('2d');
                        canvas.width = img.width; canvas.height = img.height;
                        ctx.fillStyle = '#ffffff'; ctx.fillRect(0,0,canvas.width,canvas.height);
                        ctx.drawImage(img,0,0);
                        document.getElementById('qrDownload').href = canvas.toDataURL('image/png');
                    };
                    img.src = dataUrl;
                }
            }
        }
    </script>


</x-app-layout>
