<!-- Nothing worth having comes easy. - Theodore Roosevelt -->
<!-- Cards section start -->
<section id="tutorials" class="pt-24 pb-16 dark:bg-slate-800">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] max-w-[510px]">
                    <h2 class="mb-4 text-3xl font-bold text-dark dark:text-gray-300">
                        Video Tutorials
                    </h2>
                    <p class="text-base text-body-color">
                        You learn most by building projects. Go ahead and build something right now.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            @foreach ($videoTutorials as $video)
                <x-video-tutorial-item :video-id="$video['videoId']" :title="$video['title']" :description="$video['description']">*
                </x-video-tutorial-item>
            @endforeach
        </div>
        <div class="flex justify-center">
            <x-button-link
                href="https://www.youtube.com/channel/UC2TJu-b6OCHIxW-TvoF5NSQ"
                target="_blank"
                class="rounded-lg">
                View All Tutorials
            </x-button-link>
        </div>
    </div>
</section>
<!-- Cards section end -->
