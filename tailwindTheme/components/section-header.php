<nav class="flex flex-col sm:flex-row justify-between px-5 py-3 drop-shadow-md ">
        <div class="text-[2rem]">
            <div class="flex ">
                <div class="" id="nav_toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-apple" width="44"
                        height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff4500" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 14m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                        <path d="M12 11v-6a2 2 0 0 1 2 -2h2v1a2 2 0 0 1 -2 2h-2" />
                        <path d="M10 10.5c1.333 .667 2.667 .667 4 0" />
                    </svg>
                </div>
                <div class="w-[80vw] md:w-0 ">BairesDev</div>
                <!-- berger  -->
                <button class=" md:hidden" onclick="toggle_menu()">
                    <div id="menu" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="44"
                            height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 6l16 0" />
                            <path d="M4 12l16 0" />
                            <path d="M4 18l16 0" />
                        </svg>
                    </div>
                    <!-- == -->
                    <div id="crus" class="hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x nav_toggle"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    </div>
                </button>
            </div>
        </div>

        <!-- <div class="hidden md:block"> -->
        <div class="hidden md:block" id="nav">
            <ul class="gap-[.7rem] sm:gap-[.5rem] flex flex-col text-left sm:flex-row sm:items-center">
                <li
                    class="pl-[2.5rem] mt-[2rem] sm:mt-0 sm:px-[.5rem] sm:text-[1rem] lg:text-[1.2rem] lg:px-[1.5rem] font-bold">
                    Services</li>
                <li class="pl-[2.5rem] sm:px-[.5rem] sm:text-[1rem] lg:text-[1.2rem] lg:px-[1.5rem] font-bold">Our
                    Clients</li>
                <li class="pl-[2.5rem] sm:px-[.5rem] sm:text-[1rem] lg:text-[1.2rem] lg:px-[1.5rem] font-bold">About
                </li>
                <li class="pl-[2.5rem] sm:px-[.5rem] sm:text-[1rem] lg:text-[1.2rem] lg:px-[1.5rem] font-bold">Blog</li>
                <li class="pl-[2.5rem] sm:px-[.5rem] sm:text-[1rem] lg:text-[1.2rem] lg:px-[1.5rem] font-bold">Careers
                </li>
                <li
                    class="ml-[2.4rem] w-[8rem] text-center sm:px-[.5rem] sm:text-[1rem] lg:text-[1.2rem] lg:px-[1.5rem] font-bold text-white bg-black rounded-lg py-3 ">
                    <button class="">Schedule</button></li>
            </ul>
        </div>

    </nav>