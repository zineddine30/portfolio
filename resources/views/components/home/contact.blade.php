<!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
<!-- Contact Section Start -->
<section class="bg-white dark:bg-brimary py-20 lg:py-[120px] overflow-hidden relative z-10">
    <div class="container">
        <div class="flex flex-wrap -mx-4 lg:justify-between">
            <div class="w-full px-4 lg:w-1/2 xl:w-6/12">
                <div class="max-w-[570px] mb-12 lg:mb-0">
                    <h2 class="text-dark dark:text-gray-700 mb-6 uppercase font-bold text-[32px] sm:text-[40px] lg:text-[36px] xl:text-[40px]">
                        FOR BUSINESS ENQUIRIES
                    </h2>
                    <p class="text-base leading-relaxed text-body-color dark:text-gray-400 mb-9">
                        If you feel my experience and skills fits your needs, feel to contact me.
                    </p>
                    <div class="flex mb-8 max-w-[370px] w-full">
                        <div class="
                            max-w-[60px]
                            sm:max-w-[70px]
                            w-full
                            h-[60px]
                            sm:h-[70px]
                            flex
                            items-center
                            justify-between
                            mr-6
                            overflow-hidden
                            bg-primary bg-opacity-5
                            text-primary
                            dark:text-gray-300
                            rounded
                            ">
                            <svg
                                width="28"
                                height="19"
                                viewBox="0 0 28 19"
                                class="fill-current"
                            >
                                <path
                                d="M25.3636 0H2.63636C1.18182 0 0 1.16785 0 2.6052V16.3948C0 17.8322 1.18182 19 2.63636 19H25.3636C26.8182 19 28 17.8322 28 16.3948V2.6052C28 1.16785 26.8182 0 25.3636 0ZM25.3636 1.5721C25.5909 1.5721 25.7727 1.61702 25.9545 1.75177L14.6364 8.53428C14.2273 8.75886 13.7727 8.75886 13.3636 8.53428L2.04545 1.75177C2.22727 1.66194 2.40909 1.5721 2.63636 1.5721H25.3636ZM25.3636 17.383H2.63636C2.09091 17.383 1.59091 16.9338 1.59091 16.3499V3.32388L12.5 9.8818C12.9545 10.1513 13.4545 10.2861 13.9545 10.2861C14.4545 10.2861 14.9545 10.1513 15.4091 9.8818L26.3182 3.32388V16.3499C26.4091 16.9338 25.9091 17.383 25.3636 17.383Z"
                                />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-dark">Email Address</h4>
                            <p class="text-base text-body-color dark:text-gray-400">zineddine.de@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                <div class="relative p-8 bg-white rounded-lg shadow-lg dark:bg-slate-900 sm:p-12">
                    <form action="/contact/submit" method="post" x-data="
                    {
                        formData: {
                            name: '',
                            email: '',
                            message: '',
                        },
                    }">
                        @csrf
                        <div class="mb-6">
                            <x-forms.input placeholder="Your Name" name="name" x-model="formData.name"></x-forms.input>
                        </div>
                        <div class="mb-6">
                            <x-forms.input type="email" placeholder="Your E-Mail" name="name" x-model="formData.email"></x-forms.input>
                        </div>
                        <div class="mb-6">
                            <x-forms.textarea placeholder="Your Message" name="message" rows="6" x-model="formData.message"></x-forms.textarea>
                        </div>
                        <div>
                            <x-button class="w-full">
                                Send Message
                            </x-button>
                        </div>

                    </form>
                    <div>
                        <span class="absolute -top-10 -right-9 z-[-1]">
                            <svg
                              width="100"
                              height="100"
                              viewBox="0 0 100 100"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                                fill="#3056D3"
                              />
                            </svg>
                          </span>
                          <x-contact-dots-top></x-contact-dots-top>
                          <x-contact-dots-bottom></x-contact-dots-bottom>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section end -->
