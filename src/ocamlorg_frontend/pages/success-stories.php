<?php
include 'header.php';
?>

<div class="lg:py-24 py-2">
    <div class="container-fluid">
        <div class="flex flex-col lg:flex-row  justify-between space-x-0 lg:space-x-10">
            <div class="lg:flex-1 lg:mt-16 my-12">
                <h1 class="font-bold">What some of our users say about <span class="text-primary-600">OCaml</span></h1>
                <div class="text-body-400 mt-6 mb-8">Read our success stories to learn how OCaml helped our users achieve their goals.</div>
                <div class="space-x-6">
                    <a href="industrial-users.php"><button class="btn btn-lg btn-secondary">Industrial users</button></a>
                    <a href="academic-users.php"><button class="btn btn-lg btn-secondary">Academic users</button></a>
                </div>
            </div>
            <div class="lg:flex-1 cursor-pointer relative rounded-2xl overflow-hidden border-4 border-primary-100 video-shadow" x-data="videoFullWidth()">
                <div class="bg-white text-center relative aspect-w-16 aspect-h-9 h-full" @click="
                        isPlaying = !isPlaying;
                        $nextTick(() => { $refs.iframeElement.setAttribute('src', iframe_url()) });">
                    <div x-show.transition.in.opacity.duration.500ms="isPlaying">
                        <iframe class="absolute top-0 rounded-lg" x-ref="iframeElement" width="100%" height="100%" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                    </div>
                    <div class="flex items-center h-full justify-center" x-show="!isPlaying">
                        <div class="z-10 lg:space-y-16 space-y-5 mb-10 lg:mb-0">
                            <img class="m-auto" src="img/janestreet-blue.svg" alt="">
                            <h3 class="font-bold">Why OCaml</h3>
                            <div>Presented by Yaron Minsky</div>
                        </div>
                    </div>
                </div>
                <div class="rounded-full bg-primary-600 text-white w-16 h-16 right-10 bottom-10 absolute flex items-center z-10 justify-center" x-show="!isPlaying">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="text-center mt-24 mt-8">
            <h4 class="font-bold text-body-600">Trusted by Industry Leaders</h4>
            <div class="text-body-400 text-base mt-3">These awesome companies and organizations trust our software—along with thousands of other developers</div>
            <div class="flex flex-row justify-center m-auto flex-wrap py-8 items-center">
                <div class="mx-8 my-4"><img src="img/Facebook.svg" alt=""></div>
                <div class="mx-8 my-4"><img src="img/janestreet-black.svg" width="104" alt=""></div>
                <div class="mx-8 my-4"><img src="img/Bloomberg.svg" alt=""></div>
                <div class="mx-8 my-4"><img src="img/tezos.svg" alt=""></div>
                <div class="mx-8 my-4"><img src="img/aHrefs.svg" alt=""></div>
            </div>
        </div>
    </div>
</div>
<div class="bg-white">
    <div class="py-10 lg:py-24">
        <div class="container-fluid">
            <div class="text-center mt-6 lg:mt-0">
                <h2 class="font-bold mb-6">Case Studies</h2>
                <p class="text-body-400">Ridiculus faucibus orci eleifend nunc et adipiscing. Mi dolor nulla fusce porttitor risus diam. </p>
            </div>

            <!-- Success Stories Grid -->
            <div class="grid lg:grid-cols-2 gap-16 mt-14 lg:mt-28">

                <!-- Success Story Card -->
                <a href="successinner.php" class="success-card">
                    <div class="flex flex-col justify-between h-full relative z-10 text-white">
                        <div><img height="61" src="img/success-stories/haze-logo.png" alt=""></div>
                        <div class="space-y-6 success-card__content">
                            <h4 class="font-bold">
                                Haxe is an open source toolkit based on a modern, high level, strictly typed programming language
                            </h4>
                            <div class="success-card__link">
                                <span>Read full case study</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="bg-cyan-600 success-card__overlay"></div>
                    <div class="success-card__image" style="background-image: url('../img/success-stories/haze.jpg');"></div>
                </a>

                <!-- Success Story Card -->
                <a href="successinner.php" class="success-card">
                    <div class="flex flex-col justify-between h-full relative z-10 text-white">
                        <div><img height="61" src="img/success-stories/haze-logo.png" alt=""></div>
                        <div class="space-y-6 success-card__content">
                            <h4 class="font-bold">
                                Haxe is an open source toolkit based on a modern, high level, strictly typed programming language
                            </h4>
                            <div class="success-card__link">
                                <span>Read full case study</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="bg-cyan-600 success-card__overlay"></div>
                    <div class="success-card__image" style="background-image: url('../img/success-stories/haze.jpg');"></div>
                </a>

                <!-- Success Story Card -->
                <a href="successinner.php" class="success-card">
                    <div class="flex flex-col justify-between h-full relative z-10 text-white">
                        <div><img height="61" src="img/success-stories/haze-logo.png" alt=""></div>
                        <div class="space-y-6 success-card__content">
                            <h4 class="font-bold">
                                Haxe is an open source toolkit based on a modern, high level, strictly typed programming language
                            </h4>
                            <div class="success-card__link">
                                <span>Read full case study</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="bg-cyan-600 success-card__overlay"></div>
                    <div class="success-card__image" style="background-image: url('../img/success-stories/haze.jpg');"></div>
                </a>

                <!-- Success Story Card -->
                <a href="successinner.php" class="success-card">
                    <div class="flex flex-col justify-between h-full relative z-10 text-white">
                        <div><img height="61" src="img/success-stories/haze-logo.png" alt=""></div>
                        <div class="space-y-6 success-card__content">
                            <h4 class="font-bold">
                                Haxe is an open source toolkit based on a modern, high level, strictly typed programming language
                            </h4>
                            <div class="success-card__link">
                                <span>Read full case study</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="bg-cyan-600 success-card__overlay"></div>
                    <div class="success-card__image" style="background-image: url('../img/success-stories/haze.jpg');"></div>
                </a>

                <!-- Success Story Card -->
                <a href="successinner.php" class="success-card">
                    <div class="flex flex-col justify-between h-full relative z-10 text-white">
                        <div><img height="61" src="img/success-stories/haze-logo.png" alt=""></div>
                        <div class="space-y-6 success-card__content">
                            <h4 class="font-bold">
                                Haxe is an open source toolkit based on a modern, high level, strictly typed programming language
                            </h4>
                            <div class="success-card__link">
                                <span>Read full case study</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="bg-cyan-600 success-card__overlay"></div>
                    <div class="success-card__image" style="background-image: url('../img/success-stories/haze.jpg');"></div>
                </a>

            </div>
        </div>
    </div>

    <div class="container-fluid overflow-hidden border-t border-gray-200 py-28 testimonials">
        <div class="flex justify-between items-end lg:space-x-80 mb-0 md:mb-20 md:flex-row flex-col">
            <div class="text-left">
                <h2 class="font-bold mb-6">Testimonials</h2>
                <div>Adipiscing aenean nunc tincidunt mauris. Nullam donec viverra faucibus et erat sem nulla. Habitasse mattis consequat, ut adipiscing faucibus justo enim risus, dolor. Commodo in nunc, vitae platea lectus augue vitae, egestas.</div>
            </div>
            <div class="flex justify-between items-center space-x-4 m-auto mt-10 mb-5 md:mb-0">
                <button class=" text-primary-600 rounded-full py-4 px-6 hover:bg-primary-100 transition duration-300" @click="swiper.slidePrev()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="rounded-full py-4 px-6 hover:bg-primary-100 transition duration-300 text-primary-600" @click="swiper.slideNext()"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg></button>
            </div>
        </div>
        <div class="overflow-hidden">
            <div class="swiper-container testimonials-swiper">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <a href="" class="swiper-slide">
                        <div class="overflow-hidden p-8">
                            <img src="img/rescript.png" class="mb-12" alt="" width="152" height="auto">
                            <div class="mb-12">Thanks to the OCaml team, obviously, without such a beautiful yet practical language, this project would not exist. The original type system was inherited from it with lots of modifications to fit with JS ecosystem better.</div>
                            <div class="font-bold">Bob Zhang</div>
                            <div>Maintainer, ReScript.</div>
                        </div>
                    </a>

                    <a href="" class="swiper-slide">
                        <div class="overflow-hidden p-8">
                            <img src="img/janestreet-black.svg" class="mb-12" alt="" width="99" height="auto">
                            <div class="mb-12">OCaml doesn’t automate the work of refactoring, but it does greatly reduce the number of bugs that your refactoring introduces. And in the end, that’s far more valuable.</div>
                            <div class="font-bold">Yaron Minsky</div>
                            <div>CTO, JaneStreet.</div>
                        </div>
                    </a>

                    <a class="swiper-slide">
                        <div class="overflow-hidden p-8">
                            <img src="img/cornell.png" class="mb-12" alt="" width="47" height="auto">
                            <div class="mb-12">OCaml is elegant, simple, and graceful. The code you write can be stylish and tasteful.</div>
                            <div class="font-bold">Authors of Cornell CS3110 textbook</div>
                            <div>Cornell University.</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
include 'footer.php';
?>
