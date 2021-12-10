<?php
include 'header.php';
?>

<div class="intro-section-simple">
    <div class="container-fluid">
        <div class="text-center w-full lg:w-2/3 m-auto">
            <h1 class="font-bold mb-6">Opportunities</h1>
            <p>This is a space where groups, companies, and organisations can advertise their projects directly to the OCaml community.</p>
            <div class="flex justify-center flex-col lg:flex-row lg:space-x-6 space-y-5 lg:space-y-0 md:space-y-5 w-full lg:w-auto mt-16">
                <div class="form-input">
                    <div class="form-input__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="-mt-1 h-5 w-5 text-body-400" fill="none" viewBox="0 0 24 24" stroke="rgba(26, 32, 44, 1)">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input type="search" placeholder="Search for an opportunity">
                </div>
                <button class="btn btn-lg btn-secondary">Search</button>
            </div>
        </div>
    </div>
</div>

<div class="py-24 bg-white">
    <div class="container-fluid">
        <div class="flex justify-between items-center">
            <h5 class="font-bold">12 Jobs</h5>
            <div class="relative h-14 w-64">
                <select class="w-full w-full appearance-none text-body-600 border rounded-md py-3 pl-6 border-gray-200 pr-20 h-full" name="All Regions" id="">
                    <option value="USA">Location</option>
                    <option value="USA">USA</option>
                    <option value="UAE">UAE</option>
                </select>
                <div class="absolute h-full flex items-center pr-6 opacity-60 right-0 top-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 pb-10 lg:grid-cols-3 gap-8 mt-16">
            <a href="opportunities-inner.php" class="text-left p-8 border border-gray-200 rounded-xl card-hover">
                <img class="mb-6" src="/img/opportunities/opportunities-tarides.png" alt="">
                <div class="text-lg mb-3 text-body-600">Tarides</div>
                <div class="text-lg mb-3 font-semibold text-body-600">Multicore Application Engineer</div>
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div>Cambridge, United Kingdom</div>
                </div>
            </a>
            <a href="opportunities-inner.php" class="text-left p-8 border border-gray-200 rounded-xl card-hover">
                <img class="mb-6" src="/img/opportunities/opportunities-bloomberg.png" alt="">
                <div class="text-lg mb-3 text-body-600">Bloomberg</div>
                <div class="text-lg mb-3 font-semibold text-body-600">Quant Developer, Enterprise Products</div>
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div>New York, NY</div>
                </div>
            </a>
            <a href="opportunities-inner.php" class="text-left p-8 border border-gray-200 rounded-xl card-hover">
                <img class="mb-6" src="/img/opportunities/opportunities-facebook.png" alt="">
                <div class="text-lg mb-3 text-body-600">Facebook</div>
                <div class="text-lg mb-3 font-semibold text-body-600">Facebook OCaml Expert Long term</div>
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div>Remote</div>
                </div>
            </a>
            <a href="opportunities-inner.php" class="text-left p-8 border border-gray-200 rounded-xl card-hover">
                <img class="mb-6" src="/img/opportunities/opportunities-tarides.png" alt="">
                <div class="text-lg mb-3 text-body-600">Tarides</div>
                <div class="text-lg mb-3 font-semibold text-body-600">Multicore Application Engineer</div>
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div>Cambridge, United Kingdom</div>
                </div>
            </a>
            <a href="opportunities-inner.php" class="text-left p-8 border border-gray-200 rounded-xl card-hover">
                <img class="mb-6" src="/img/opportunities/opportunities-bloomberg.png" alt="">
                <div class="text-lg mb-3 text-body-600">Bloomberg</div>
                <div class="text-lg mb-3 font-semibold text-body-600">Quant Developer, Enterprise Products</div>
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div>New York, NY</div>
                </div>
            </a>
            <a href="opportunities-inner.php" class="text-left p-8 border border-gray-200 rounded-xl card-hover">
                <img class="mb-6" src="/img/opportunities/opportunities-facebook.png" alt="">
                <div class="text-lg mb-3 text-body-600">Facebook</div>
                <div class="text-lg mb-3 font-semibold text-body-600">Facebook OCaml Expert Long term</div>
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div>Remote</div>
                </div>
            </a>
            <a href="opportunities-inner.php" class="text-left p-8 border border-gray-200 rounded-xl card-hover">
                <img class="mb-6" src="/img/opportunities/opportunities-tarides.png" alt="">
                <div class="text-lg mb-3 text-body-600">Tarides</div>
                <div class="text-lg mb-3 font-semibold text-body-600">Multicore Application Engineer</div>
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div>Cambridge, United Kingdom</div>
                </div>
            </a>
            <a href="opportunities-inner.php" class="text-left p-8 border border-gray-200 rounded-xl card-hover">
                <img class="mb-6" src="/img/opportunities/opportunities-bloomberg.png" alt="">
                <div class="text-lg mb-3 text-body-600">Bloomberg</div>
                <div class="text-lg mb-3 font-semibold text-body-600">Quant Developer, Enterprise Products</div>
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div>New York, NY</div>
                </div>
            </a>
            <a href="opportunities-inner.php" class="text-left p-8 border border-gray-200 rounded-xl card-hover">
                <img class="mb-6" src="/img/opportunities/opportunities-facebook.png" alt="">
                <div class="text-lg mb-3 text-body-600">Facebook</div>
                <div class="text-lg mb-3 font-semibold text-body-600">Facebook OCaml Expert Long term</div>
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div>Remote</div>
                </div>
            </a>
            <a href="opportunities-inner.php" class="text-left p-8 border border-gray-200 rounded-xl card-hover">
                <img class="mb-6" src="/img/opportunities/opportunities-tarides.png" alt="">
                <div class="text-lg mb-3 text-body-600">Tarides</div>
                <div class="text-lg mb-3 font-semibold text-body-600">Multicore Application Engineer</div>
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div>Cambridge, United Kingdom</div>
                </div>
            </a>
            <a href="opportunities-inner.php" class="text-left p-8 border border-gray-200 rounded-xl card-hover">
                <img class="mb-6" src="/img/opportunities/opportunities-bloomberg.png" alt="">
                <div class="text-lg mb-3 text-body-600">Bloomberg</div>
                <div class="text-lg mb-3 font-semibold text-body-600">Quant Developer, Enterprise Products</div>
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div>New York, NY</div>
                </div>
            </a>
            <a href="opportunities-inner.php" class="text-left p-8 border border-gray-200 rounded-xl card-hover">
                <img class="mb-6" src="/img/opportunities/opportunities-facebook.png" alt="">
                <div class="text-lg mb-3 text-body-600">Facebook</div>
                <div class="text-lg mb-3 font-semibold text-body-600">Facebook OCaml Expert Long term</div>
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div>Remote</div>
                </div>
            </a>
        </div>

        <div class="mt-16 flex items-center justify-center space-x-2.5">
            <a href="#" class="w-10 h-10 lg:w-14 lg:h-14  border border-body-100 rounded-lg flex items-center justify-center text-body-400 hover:bg-gray-50 hover:no-underline">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <a href="#" class="w-10 h-10 lg:w-14 lg:h-14  border-2 border-current rounded-lg flex items-center justify-center text-primary-600">
                1
            </a>
            <a href="#" class="w-10 h-10 lg:w-14 lg:h-14  border border-body-100 rounded-lg flex items-center justify-center text-body-400 hover:bg-gray-50 hover:no-underline">
                2
            </a>
            <a href="#" class="w-10 h-10 lg:w-14 lg:h-14  border border-body-100 rounded-lg flex items-center justify-center text-body-400 hover:bg-gray-50 hover:no-underline">
                3
            </a>
            <a href="#" class="w-10 h-10 lg:w-14 lg:h-14  border border-body-100 rounded-lg flex items-center justify-center text-body-400 hover:bg-gray-50 hover:no-underline">
                4
            </a>
            <a href="#" class="w-10 h-10 lg:w-14 lg:h-14  border border-body-100 rounded-lg flex items-center justify-center text-body-400 hover:bg-gray-50 hover:no-underline">
                5
            </a>
            <a href="#" class="w-10 h-10 lg:w-14 lg:h-14  border border-body-100 rounded-lg flex items-center justify-center text-body-400 hover:bg-gray-50 hover:no-underline">
                6
            </a>
            <a href="#" class="w-10 h-10 lg:w-14 lg:h-14  border border-body-100 rounded-lg flex items-center justify-center text-body-400 hover:bg-gray-50 hover:no-underline">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

    </div>
</div>
<?php
include 'footer.php';
?>
