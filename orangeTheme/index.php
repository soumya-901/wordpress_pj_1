<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/src/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .home {
            background-image: url(/src/img/home.jpg);
            background-size: cover;
            background-position: center;
            position: relative;
            height: 100vh;
        }

        .home-in {
            height: 100%;
            /* padding-top: 4%; */
            background-image: linear-gradient(to right,
                    rgb(255, 255, 255, 1),
                    rgb(255, 255, 255, 1),
                    rgb(255, 255, 255, 1),
                    rgb(255, 255, 255, .8),
                    rgba(0, 0, 0, 0));
        }

        @media only screen and (max-width: 1400px) {
            .home {
                background-image: none;
                background-color: rgb(233, 233, 233);
            }

            .home-in {
                background-image: none;
            }
        }
    </style>
</head>

<body class="">
    <!-- nav-bar====================================== -->
    <nav class="flex flex-col sm:flex-row justify-between px-5 py-3 drop-shadow-md ">
        <div class="text-[2.4rem] font-bold">
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
    <!-- home=================================================== -->
    <div class=" home h-[80vh] xl:h-[100vh] ">
        <div class="lg:pl-[5rem] home-in p-5 pt-16 ">
            <h1
                class=" text-[2.7rem] font-bold md:text-[4rem] w-[80%] md-[2rem] lg:text-[5rem] xl:w-[80%] xl:pt-[3rem] xl:text-[5rem] 2xl:w-[50%]">
                Scale your software development
                efforts. <span class="text-orange-600"> Effortlessly.</span></h1>
            <p class="text-[1.5rem] text-gray-500 py-4 lg:font-bold xl:w-[40%] xl:my-6">Access 4,000+ timezone aligned
                software engineers with experience in 100+ technologies.</p>
            <button
                class="bg-orange-600 text-white py-3 px-7 rounded-lg text-[1.2rem] mb-3 lg:mb-10 xl:py-5 xl:px-9 xl:text-[1.5rem] xl:my-[1rem]">Schedule
                a Call</button>

            <!-- home....=================================================== -->
            <div
                class="min-h-72 bg-white p-5 mt-8 rounded-lg shadow-lg m-auto sm:w-[30rem] md:w-[50rem] px-10 xl:w-[70rem] xl:flex">
                <div class="xl:h-[100%] xl:m-auto">
                <p class="text-gray-700 text-[1.3rem] sm:p-4 md:text-[1.6rem] xl:text-[2.2rem] xl:font-bold xl:text-gray-600 xl:w-[90%]">500+ companies rely on our <span
                        class="underline decoration-orange-600 ">top 1% talent</span> to scale their dev teams.</p>
                <hr class="xl:hidden">
            </div>
                <div class="flex flex-wrap">
                    <span class="text-gray-900 text-[1.5rem] m-1 md:m-6">Google</span>
                    <span class="text-gray-900 text-[1.5rem] m-1 md:m-6">NextRoll</span>
                    <span class="text-gray-900 text-[1.5rem] m-1 md:m-6">Pinterest</span>
                    <span class="text-gray-900 text-[1.5rem] m-1 md:m-6">Sclesforce</span>
                    <span class="text-gray-900 text-[1.5rem] m-1 md:m-6">Adobe</span>
                    <span class="text-gray-900 text-[1.5rem] m-1 md:m-6">gag</span>
                    <span class="text-gray-900 text-[1.5rem] m-1 md:m-6">motorola</span>
                    <span class="text-gray-900 text-[1.5rem] m-1 md:m-6">hp</span>
                </div>
            </div>
        </div>
    </div>
    <!-- stack=================================================== -->
    <div class="xl:mt-[15rem] pl-[2rem] lg:mt-[15rem] ">
        <div class="xl:flex xl:justify-between">
        <h2 class="text-[2rem] my-[3rem] mx-2 font-bold md:text-[2.5rem] md:w-[50%] lg:mt-6">From Concept to Completion: Our Full-Stack Expertise.</h2>
        <button class="m-4 text-[1.5rem] underline underline-offset-8 hover:ml-8 xl:mr-[6rem]">Everything we do &rarr;</button>
    </div>
        <div class="flex flex-wrap">
            <!-- 1 -->
            <div class="my-[2rem] ml-[1rem] mr-8 sm:w-[20rem] md:w-[25rem] lg:w-[30rem] xl:w-[35rem]">
                <p class="my-[1rem]"><svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-api-app" width="44" height="44" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#ff4500" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 15h-6.5a2.5 2.5 0 1 1 0 -5h.5" />
                        <path d="M15 12v6.5a2.5 2.5 0 1 1 -5 0v-.5" />
                        <path d="M12 9h6.5a2.5 2.5 0 1 1 0 5h-.5" />
                        <path d="M9 12v-6.5a2.5 2.5 0 0 1 5 0v.5" />
                    </svg></p>
                <p class="text-[1.8rem] w-[60%] font-bold">Custom Software
                    Development</p>
                <p class="text-[1.2rem]">Create custom software tailored for your unique needs, including front-end, and core back-end
                    technology.</p>
            </div>
            <!-- 2 -->
            <div class="my-[2rem] ml-[1rem] mr-8 sm:w-[20rem] md:w-[25rem] lg:w-[30rem] xl:w-[35rem] ">
                <p class="my-[1rem]"><svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-arrow-elbow-left" width="44" height="44" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#ffec00" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 14v-6h6" />
                        <path d="M3 8l9 9l9 -9" />
                    </svg></p>
                <p class="text-[1.8rem] w-[60%] font-bold">QA and Testing</p>
                <p class="text-[1.2rem]">Make your technology bulletproof, with manual and automated testing.</p>
            </div>
            <!-- 3 -->
            <div class="my-[2rem] ml-[1rem] mr-8 sm:w-[20rem]  md:w-[25rem] lg:w-[30rem] xl:w-[35rem] ">
                <p class="my-[1rem]"><svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-balloon" width="44" height="44" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 8a2 2 0 0 0 -2 -2" />
                        <path d="M6 8a6 6 0 1 1 12 0c0 4.97 -2.686 9 -6 9s-6 -4.03 -6 -9" />
                        <path d="M12 17v1a2 2 0 0 1 -2 2h-3a2 2 0 0 0 -2 2" />
                    </svg></p>
                <p class="text-[1.8rem] w-[60%] font-bold">AI and
                    Data Science</p>
                <p class="text-[1.2rem]">Use leading AI, machine learning, and data engineering technologies to unlock business value.</p>
            </div>
            <!-- 4 -->
            <div class="my-[2rem] ml-[1rem] mr-8 sm:w-[20rem]  md:w-[25rem] lg:w-[30rem] xl:w-[35rem] ">
                <p class="my-[1rem]"><svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-battery-charging" width="44" height="44" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 7h1a2 2 0 0 1 2 2v.5a.5 .5 0 0 0 .5 .5a.5 .5 0 0 1 .5 .5v3a.5 .5 0 0 1 -.5 .5a.5 .5 0 0 0 -.5 .5v.5a2 2 0 0 1 -2 2h-2" />
                        <path d="M8 7h-2a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h1" />
                        <path d="M12 8l-2 4h3l-2 4" />
                    </svg></p>
                <p class="text-[1.8rem] w-[60%] font-bold">Mobile App
                    Development</p>
                <p class="text-[1.2rem]">Build performant, scalable, and secure mobile applications for iOS and Android devices.</p>
            </div>
            <!-- 5 -->
            <div class="my-[2rem] ml-[1rem] mr-8 sm:w-[20rem]  md:w-[25rem] lg:w-[30rem] xl:w-[35rem] ">
                <p class="my-[1rem]"><svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-book-upload" width="44" height="44" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 20h-8a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12v5" />
                        <path d="M11 16h-5a2 2 0 0 0 -2 2" />
                        <path d="M15 16l3 -3l3 3" />
                        <path d="M18 13v9" />
                    </svg></p>
                <p class="text-[1.8rem] w-[60%] font-bold">UX/UI
                    Design
                </p>
                <p class="text-[1.2rem]">Create beautiful, pixel-perfect, and easy-to-use designs that delight your end users.</p>
            </div>
            <!-- 6 -->
            <div class="my-[2rem] ml-[1rem] mr-8 sm:w-[20rem]  md:w-[25rem] lg:w-[30rem] xl:w-[35rem] ">
                <p class="my-[1rem]"><svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-brand-ansible" width="44" height="44" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#ffbf00" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M9.647 12.294l6.353 3.706l-4 -9l-4 9" />
                    </svg></p>
                <p class="text-[1.8rem] w-[60%] font-bold">Platform and
                    Infrastructure</p>
                <p class="text-[1.2rem]">Ensure applications are secure, fault tolerant and highly available with our DevOps and Security
                    engineers.

                </p>
            </div>
        </div>
    </div>


    <!-- <svg viewBox="0 0 100 110">
        <circle cx="50" cy="51" r="50" />
      </svg> -->


    <!-- Excellence.=================================================== -->

    <div class="bg-black text-white px-[2rem] py-[6rem] ">
        <h2 class="text-[2rem] text-orange-600">Excellence.</h2>
        <h2 class="text-[2rem]">Our minimum bar for client delivery.</h2>
        <p class="text-[1.2rem]">Over 30 awards, accolades, and achievements showcase our quality and commitment to
            client success.</p>
        <button class="text-orange-600 mt-10 text-[1.2rem]">Our trophy cabinet</button>
    </div>

    <!-- footer=================================================== -->

    <footer class="xl:flex">
        <!-- left  -->
        <div class="pl-[2rem] py-[4rem] xl:w-[60%]">
            <div class="sm:flex gap-7">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-apple" width="44"
                    height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff4500" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 14m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                    <path d="M12 11v-6a2 2 0 0 1 2 -2h2v1a2 2 0 0 1 -2 2h-2" />
                    <path d="M10 10.5c1.333 .667 2.667 .667 4 0" />
                </svg>
            </div>
            <ul class="">
                <li class="mt-[3rem] text-[1.7rem] font-bold">Discover BairesDev.</li>
                <li class="my-[1rem] text-[1.2rem]">About Us</li>
                <li class="my-[1rem] text-[1.2rem]">Methodologies</li>
                <li class="my-[1rem] text-[1.2rem]">Technologies</li>
                <li class="my-[1rem] text-[1.2rem]">Certifications</li>
                <li class="my-[1rem] text-[1.2rem]">Our Services</li>
                <li class="my-[1rem] text-[1.2rem]">Dedicated Teams</li>
                <li class="my-[1rem] text-[1.2rem]">Staff Augmentation</li>
                <li class="my-[1rem] text-[1.2rem]">Software Outsourcing</li>
                <li class="my-[1rem] text-[1.2rem]">Expertise</li>
                <li class="my-[1rem] text-[1.2rem]">Diversity</li>
                <li class="my-[1rem] text-[1.2rem]">Social Responsibility</li>
                <li class="my-[1rem] text-[1.2rem]">Senior Advisor Program</li>
            </ul>
            <ul>
                <li class="mt-[3rem] text-[1.7rem] font-bold">Resources.</li>
                <li class="my-[1rem] text-[1.2rem]">Case Studies</li>
                <li class="my-[1rem] text-[1.2rem]">Blog</li>
                <li class="my-[1rem] text-[1.2rem]">Press</li>
                <li class="my-[1rem] text-[1.2rem]">Software Development Insights</li>
                <li class="my-[1rem] text-[1.2rem]">Technologies Insights</li>
                <li class="my-[1rem] text-[1.2rem]">Industries Insights</li>
                <li class="my-[1rem] text-[1.2rem]">Technology Resource Center</li>
                <li class="my-[1rem] text-[1.2rem]">Client Referral Program</li>
            </ul>
            <ul>
                <li class="mt-[3rem] text-[1.7rem] font-bold">Careers.</li>
                <li class="my-[1rem] text-[1.2rem]">Job Opportunities</li>
                <li class="my-[1rem] text-[1.2rem]">Talent Referrals</li>
            </ul>
        </div>
        <div class="mt-7 ml-[0] md:ml-[4rem]">
            <ul class="flex flex-wrap gap-2">
                <li class="text-[.7rem] md:text-[1rem]">Privacy Policy</li>
                <li class="text-[.7rem] md:text-[1rem]">|</li>
                <li class="text-[.7rem] md:text-[1rem]">Terms of Service</li>
                <li class="text-[.7rem] md:text-[1rem]">|</li>
                <li class="text-[.7rem] md:text-[1rem]">Do Not Sell My Personal Information</li>
                <li class="text-[.7rem] md:text-[1rem]">|</li>
                <li class="text-[.7rem] md:text-[1rem]">Privacy Shield Policy</li>
            </ul>
            <p class="text-[.7rem] md:text-[1rem]"">BairesDev 2009 - 2024. All rights reserved.</p>
        </div>
        </div>
        <!-- right  -->
        <div class="bg-slate-400 pl-[2rem] py-[4rem] xl:w-[40%]">
            <h2 class="text-[1.4rem] font-bold">Get insights from the experts on building and scaling technology teams.
            </h2>
            <form action="" class="mt-[2rem]">
                <label for="">Your e-mail address</label>
                <input type="text" placeholder="name@email.com">
                <button>Subscribe
                    <span></span>
                </button>
                <input type="checkbox">
                <p>By subscribing I accept the Privacy Policy.</p>
            </form>
            <h2 class="text-[1.5rem] font-bold mt-[2rem]">Get in touch.</h2>
            <div class="mt-[2rem]">
                <button class="mt-[2rem]">Contact Us</button>
                <button class="mt-[2rem]">Schedule a Call</button>
            </div>
            <p>+1 (408) 478-2739</p>
            <h2 class="text-[1.5rem] font-bold mt-[2rem]">Follow us.</h2>
            <ul class="flex mt-[2rem]">
                <li><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-linkedin"
                        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                        <path d="M8 11l0 5" />
                        <path d="M8 8l0 .01" />
                        <path d="M12 16l0 -5" />
                        <path d="M16 16v-3a2 2 0 0 0 -4 0" />
                    </svg></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook"
                        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                    </svg></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter"
                        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" />
                    </svg></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram"
                        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                        <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        <path d="M16.5 7.5l0 .01" />
                    </svg></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube"
                        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" />
                        <path d="M10 9l5 3l-5 3z" />
                    </svg></li>
            </ul>
        </div>
    </footer>

    <script>
        const menu = document.getElementById("menu");
        const crus = document.getElementById("crus");
        const nav = document.getElementById("nav");
        const toggle_menu = (e) => {
            nav.classList.toggle("hidden");
            menu.classList.toggle("hidden");
            crus.classList.toggle("hidden");
            console.log("program", menu, crus);
        }
    </script>
</body>

</html>