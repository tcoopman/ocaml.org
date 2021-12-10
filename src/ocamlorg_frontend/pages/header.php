<!DOCTYPE html>

<html>

<head>
    <title>OCaml Frontend</title>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/menlo" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

    <script>
        function videoFullWidth() {
            return {
                isPlaying: false,
                embed_url: "https://www.youtube.com/embed/NcZEyv3sdBM",
                iframe_param: "?autoplay=1&mute=1",
                iframe_url() {
                    return this.embed_url + this.iframe_param;
                }
            };
        }
    </script>



</head>

<body x-data="{ open: false, sidebar:false, showOnMobile:false,sidebar:window.innerWidth > 480}" class="bg-global-default" @resize.window="sidebar = window.innerWidth > 767">

    <header class="h-20 flex items-center text-white">

        <div class="container-fluid header flex justify-between items-center">
            <div class="space-x-8 flex items-center">
                <a href="/">
                    <img src="img/logo.svg" width="42px" alt="OCaml logo">
                </a>
                <ul class="space space-x-8 hidden lg:flex text-body-400 font-medium">
                    <li><a href="learn.php" class="hover:text-primary-600">Learn</a></li>
                    <li><a href="packages.php" class="hover:text-primary-600">Packages</a></li>
                    <li><a href="community.php" class="hover:text-primary-600">Community</a></li>
                    <li><a href="blog.php" class="hover:text-primary-600">Blog</a></li>
                </ul>
            </div>
            <div class="flex items-center space-x-8">
                <div class="relative hidden lg:flex">
                    <div class="left-0 h-full flex items-center absolute pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 -mt-1 mr-2 w-5 relative top-0.5 text-body-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input type="search" class="w-60 outline-none pl-7 bg-transparent border-b-2 border-transparent focus:border-primary-600 text-body-600 h-12 placeholder-body-400" placeholder="Quick search for anything">
                </div>
                <div class="hidden lg:flex">
                    <a href="getting-started.php"><button class="btn btn-sm">Get started</button></a>
                </div>

                <div class="hamburger lg:hidden flex h-12 w-12 hover:bg-primary-100 flex items-center justify-center rounded-full" x-on:click="open = ! open">
                    <dib class="text-body-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                </div>
            </div>

        </div>

        <div class="bg-black fixed w-full h-full left-0 top-0 opacity-60 z-40" x-show='open'></div>

        <div class="z-50 h-full absolute right-0 top-0 max-w-full w-96 bg-white shadow-lg" x-show="open" @click.away="open = false" x-transition:enter="transition duration-200 transform ease-out" x-transition:enter-start="translate-x-full" x-transition:leave="transition duration-100 transform ease-in" x-transition:leave-end="translate-x-full">
            <ul class="text-body-400 p-6 space-y-6 font-semibold">
                <li class="flex justify-between items-center">
                    <a href="/"><img width="132" src="img/logo-footer.svg" alt=""></a>

                    <div class="close lg:hidden h-12 w-12 hover:bg-primary-100 flex items-center justify-center rounded-full" x-on:click="open = false">
                        <div class="text-body-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            </i>
                        </div>
                </li>
                <li>
                    <div class="form-input form-input-sm">
                        <div class="form-input__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-body-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input type="search" placeholder="Search for an opportunity">
                    </div>
                </li>
                <li><a href="learn.php" class="block">Learn</a></li>
                <li><a class="block" href="packages.php">Packages</a></li>
                <li>
                    <a class="block" href="community.php">Community</a>
                </li>
                <li>
                <li>
                    <a class="block" href="blog.php">Blog</a>
                </li>
                <li>
                    <a href="getting-started.php"><button class="btn w-full">Get started</button></a>
                </li>

                <li>

                    <div class="space-x-6 text-2xl flex items-center">
                        <a href="#" class="opacity-60 hover:opacity-100">
                            <svg width="24" height="auto" viewBox="0 0 71 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path d="M60.1045 4.8978C55.5792 2.8214 50.7265 1.2916 45.6527 0.41542C45.5603 0.39851 45.468 0.440769 45.4204 0.525289C44.7963 1.6353 44.105 3.0834 43.6209 4.2216C38.1637 3.4046 32.7345 3.4046 27.3892 4.2216C26.905 3.0581 26.1886 1.6353 25.5617 0.525289C25.5141 0.443589 25.4218 0.40133 25.3294 0.41542C20.2584 1.2888 15.4057 2.8186 10.8776 4.8978C10.8384 4.9147 10.8048 4.9429 10.7825 4.9795C1.57795 18.7309 -0.943561 32.1443 0.293408 45.3914C0.299005 45.4562 0.335386 45.5182 0.385761 45.5576C6.45866 50.0174 12.3413 52.7249 18.1147 54.5195C18.2071 54.5477 18.305 54.5139 18.3638 54.4378C19.7295 52.5728 20.9469 50.6063 21.9907 48.5383C22.0523 48.4172 21.9935 48.2735 21.8676 48.2256C19.9366 47.4931 18.0979 46.6 16.3292 45.5858C16.1893 45.5041 16.1781 45.304 16.3068 45.2082C16.679 44.9293 17.0513 44.6391 17.4067 44.3461C17.471 44.2926 17.5606 44.2813 17.6362 44.3151C29.2558 49.6202 41.8354 49.6202 53.3179 44.3151C53.3935 44.2785 53.4831 44.2898 53.5502 44.3433C53.9057 44.6363 54.2779 44.9293 54.6529 45.2082C54.7816 45.304 54.7732 45.5041 54.6333 45.5858C52.8646 46.6197 51.0259 47.4931 49.0921 48.2228C48.9662 48.2707 48.9102 48.4172 48.9718 48.5383C50.038 50.6034 51.2554 52.5699 52.5959 54.435C52.6519 54.5139 52.7526 54.5477 52.845 54.5195C58.6464 52.7249 64.529 50.0174 70.6019 45.5576C70.6551 45.5182 70.6887 45.459 70.6943 45.3942C72.1747 30.0791 68.2147 16.7757 60.1968 4.9823C60.1772 4.9429 60.1437 4.9147 60.1045 4.8978ZM23.7259 37.3253C20.2276 37.3253 17.3451 34.1136 17.3451 30.1693C17.3451 26.225 20.1717 23.0133 23.7259 23.0133C27.308 23.0133 30.1626 26.2532 30.1066 30.1693C30.1066 34.1136 27.28 37.3253 23.7259 37.3253ZM47.3178 37.3253C43.8196 37.3253 40.9371 34.1136 40.9371 30.1693C40.9371 26.225 43.7636 23.0133 47.3178 23.0133C50.9 23.0133 53.7545 26.2532 53.6986 30.1693C53.6986 34.1136 50.9 37.3253 47.3178 37.3253Z" fill="#23272A" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="71" height="55" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </a>
                        <a href="#" class="opacity-60 hover:opacity-100">
                            <svg width="20" height="auto" viewBox="0 0 1024 1024" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C13.71 14.53 16 11.53 16 8C16 3.58 12.42 0 8 0Z" transform="scale(64)" fill="#1B1F23" />
                            </svg>
                        </a>
                        <a href="#" class="opacity-60 hover:opacity-100">
                            <svg width="20" height="auto" viewBox="0 0 172 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_964_8840)">
                                    <path d="M171.505 16.4988C165.196 19.2978 158.414 21.1887 151.297 22.0393C158.561 17.6848 164.141 10.7894 166.768 2.5726C159.968 6.60555 152.438 9.53313 144.423 11.111C138.005 4.2722 128.861 0 118.74 0C99.3084 0 83.553 15.7536 83.553 35.1852C83.553 37.9431 83.8643 40.6288 84.4646 43.204C55.2211 41.7368 29.2946 27.7282 11.9399 6.44003C8.91115 11.6367 7.17551 17.6805 7.17551 24.1292C7.17551 36.3369 13.3874 47.1066 22.8288 53.4163C17.0611 53.2336 11.6355 51.6507 6.89166 49.0155C6.88766 49.1621 6.88766 49.3096 6.88766 49.4579C6.88766 66.5056 19.0166 80.726 35.1132 83.9606C32.1608 84.765 29.0522 85.1946 25.8433 85.1946C23.576 85.1946 21.3722 84.9733 19.2232 84.5634C23.7012 98.542 36.6954 108.715 52.0931 108.998C40.0509 118.436 24.8795 124.061 8.39349 124.061C5.55335 124.061 2.75267 123.894 0 123.569C15.5719 133.553 34.067 139.378 53.9377 139.378C118.658 139.378 154.051 85.7631 154.051 39.2645C154.051 37.739 154.016 36.222 153.949 34.7119C160.823 29.7519 166.788 23.5554 171.505 16.4988H171.505Z" fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_964_8840">
                                        <rect width="171.505" height="139.378" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        </div>
    </header>
