<!-- The only way to do great work is to love what you do. - Steve Jobs -->
<section>
    <div class="bg-primary relative z-10 overflow-hidden rounded py-12 px-8 md:p-[70px]">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4 lg:w-1/2">
                    {{ $title }}
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="flex flex-wrap lg:justify-end">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="absolute top-0 left-0 z-[-1]">
                <svg
                    width="189"
                    height="162"
                    viewBox="0 0 189 162"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <ellipse
                    cx="16"
                    cy="-16.5"
                    rx="173"
                    ry="178.5"
                    transform="rotate(180 16 -16.5)"
                    fill="url(#paint0_linear)"
                    />
                    <defs>
                    <linearGradient
                        id="paint0_linear"
                        x1="-157"
                        y1="-107.754"
                        x2="98.5011"
                        y2="-106.425"
                        gradientUnits="userSpaceOnUse"
                    >
                        <stop stop-color="white" stop-opacity="0.07" />
                        <stop offset="1" stop-color="white" stop-opacity="0" />
                    </linearGradient>
                    </defs>
                </svg>
            </span>
            <span class="absolute bottom-0 right-0 z-[-1]">
                <svg
                  width="191"
                  height="208"
                  viewBox="0 0 191 208"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <ellipse
                    cx="173"
                    cy="178.5"
                    rx="173"
                    ry="178.5"
                    fill="url(#paint0_linear)"
                  />
                  <defs>
                    <linearGradient
                      id="paint0_linear"
                      x1="-3.27832e-05"
                      y1="87.2457"
                      x2="255.501"
                      y2="88.5747"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="white" stop-opacity="0.07" />
                      <stop offset="1" stop-color="white" stop-opacity="0" />
                    </linearGradient>
                  </defs>
                </svg>
            </span>
        </div>
    </div>
</section>
