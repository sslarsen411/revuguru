<x-app-layout  :seo="[
'title' => 'Contact the Rave Review Guru',
'description' => 'Email, call, book a free consultation us or schedule a free Review Health Audit.',
'canonical' => 'https://www.ravereview.guru/' . $page,
'image' => asset('og/contact.jpg'),
]">
    <section id="educate" class="py-16 lg:py-24 bg-slate-50 ">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-10">
                <h1 class="text-3xl font-bold tracking-tight">Get in Touch</h1>
                <p class="mt-3 text-xl opacity-80">
                    Have a question about Rave Review Guru or want help choosing your next step?
                    Contact us or start with a free Review Health Audit.
                </p>
            </div>
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-start">

                <div class="lg:col-span-7">
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="rounded-2xl border border-slate-200 bg-white  min-w-full  p-6 h-full text-center">
                            <img src="https://cdn.mojoimpact.com/sslc/email.svg" class="max-h-28 mx-auto" alt="email icon">
                            <h2 class="mt-4 text-base font-medium text-gray-800 ">Email</h2>
                            <p class="mt-2 text-sm text-orange-700">
                                theguru&#64;ravereview.guru
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white min-w-full p-6 h-full text-center">
                            <img src="https://cdn.mojoimpact.com/sslc/call-or-text.svg" class="max-h-28 mx-auto" alt="phone icon">
                            <h2 class="mt-4 text-base font-medium text-gray-800 ">Call or Text</h2>
                            <p class="mt-2 text-sm text-orange-700">
                                +1 (707) 347-4884
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white min-w-full p-6 h-full text-center">
                            <img src="{{URL::asset("/images/agenda.png")}}" class="max-h-28 mx-auto" alt="phone icon">
                            <h2 class="mt-4 text-base font-medium text-gray-800 mb-2">Free &half; Hour Consultation</h2>
                            <p class="text-7xl text-center text-orange-700">
                                &darr;
                            </p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white min-w-full p-6 h-full text-center">
                            <img src="{{URL::asset("/images/clock.png")}}" class="max-h-28 mx-auto" alt="phone icon">
                            <h2 class="mt-4 text-base font-medium text-gray-800 ">Business Hours</h2>
                            <p class="mt-2 text-sm text-orange-700">
                                By Appointment
                            </p>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 self-center">
                    <h3 class="text-3xl text-orange-700 font-semibold text-center">Get Your Free Review Health Audit</h3>
                    <p class="mt-2 text-lg opacity-80">
                        Learn the exact steps you need to take to spark a steady flow of authentic reviews.
                    </p>

                    <div class="justify-self-center">
                        <a type="button" href="/audit"
                          class="bg-transparent hover:bg-gray-200 text-gray-800 font-semibold py-2 px-4 border border-orange-600 rounded shadow">
                            Start Free Audit
                        </a>
                    </div>
                    <p class="mt-2 text-xs opacity-60">No sales call required.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="tidycal-embed" data-path="sslarsen411/30-minute-meeting-197lq0v"></div>
    </section>
    @push('scripts')
        <script>
            const currentPageName = "{{$page}}";
            //  console.log("The current page name is: " + currentPageName);
        </script>
        <script src="https://asset-tidycal.b-cdn.net/js/embed.js" async></script>
    @endpush
</x-app-layout>
