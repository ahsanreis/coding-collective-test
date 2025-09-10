@extends('layout.app')

@section('content')
    <div class="h-screen w-screen bg-black text-white">
        @include('components.front-page.banner')
    </div>
    <div class="container mx-auto px-4 mt-8" id="about">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <img src="{{ asset('img/bg-image.jpg') }}" alt="Front page banner" class="w-full h-auto rounded-lg object-cover">
            </div>
            <div class="text-center md:text-left">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight">About Me</h2>
                <h6 class="text-2xl">My name is Ahsani Afif Muhammad Zaen</h6>
                <p class="text-1xl">I was Graduated from Amikom University Yogyakarta in 2022 with GPA <b>3.44</b></p>

            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="text-center md:text-left">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight">Experience</h2>
                <p class="mt-4 text-lg leading-relaxed text-gray-600">A brief overview of my roles and achievements.</p>
                <div class="mt-6 flex items-start gap-6">
                    <div class="relative h-64 w-2 rounded-full bg-gray-200 dark:bg-[#3E3E3A]">
                        <div class="absolute bottom-0 left-0 w-full rounded-full bg-[#f53003] dark:bg-[#FF4433]" style="height: 80%"></div>
                        <progress value="80" max="100" class="sr-only">80%</progress>
                    </div>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-block h-2 w-2 rounded-full bg-[#f53003] dark:bg-[#FF4433]"></span>
                            <div>
                                <p class="font-semibold text-gray-900">Bootcamp PHP Xsis Academy - Xsis Mitra Utama</p>
                                <p class="text-sm text-gray-500">March 2022 - July 2022</p>
                            </div>
                        </li>
                        <li class="ml-5 my-2 flex flex-wrap gap-2" aria-label="Stacks">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200 dark:bg-[#3E3E3A] dark:border-[#3E3E3A] dark:text-[#EDEDEC]">PHP</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200 dark:bg-[#3E3E3A] dark:border-[#3E3E3A] dark:text-[#EDEDEC]">OOP</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200 dark:bg-[#3E3E3A] dark:border-[#3E3E3A] dark:text-[#EDEDEC]">Git</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-block h-2 w-2 rounded-full bg-[#f53003] dark:bg-[#FF4433]"></span>
                            <div>
                                <p class="font-semibold text-gray-900">Berijalan Technocenter — Laravel Developer</p>
                                <p class="text-sm text-gray-500">July 2022 - July 2025</p>
                            </div>
                        </li>
                        <li class="ml-5 my-2 flex flex-wrap gap-2" aria-label="Stacks">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200 dark:bg-[#3E3E3A] dark:border-[#3E3E3A] dark:text-[#EDEDEC]">Laravel</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200 dark:bg-[#3E3E3A] dark:border-[#3E3E3A] dark:text-[#EDEDEC]">Bootstrap</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200 dark:bg-[#3E3E3A] dark:border-[#3E3E3A] dark:text-[#EDEDEC]">MySQL</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200 dark:bg-[#3E3E3A] dark:border-[#3E3E3A] dark:text-[#EDEDEC]">React.js</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200 dark:bg-[#3E3E3A] dark:border-[#3E3E3A] dark:text-[#EDEDEC]">Git</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-block h-2 w-2 rounded-full bg-[#f53003] dark:bg-[#FF4433]"></span>
                            <div>
                                <p class="font-semibold text-gray-900">Meta Solusi Digital - Full stack developer (Freelance)</p>
                                <p class="text-sm text-gray-500">July 2025 - Present</p>
                            </div>
                        </li>
                        <li class="ml-5 my-2 flex flex-wrap gap-2" aria-label="Stacks">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200 dark:bg-[#3E3E3A] dark:border-[#3E3E3A] dark:text-[#EDEDEC]">Laravel</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200 dark:bg-[#3E3E3A] dark:border-[#3E3E3A] dark:text-[#EDEDEC]">React.js</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200 dark:bg-[#3E3E3A] dark:border-[#3E3E3A] dark:text-[#EDEDEC]">Next.js</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200 dark:bg-[#3E3E3A] dark:border-[#3E3E3A] dark:text-[#EDEDEC]">Tailwind CSS</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200 dark:bg-[#3E3E3A] dark:border-[#3E3E3A] dark:text-[#EDEDEC]">Git</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <img src="{{ asset('img/img-office.jpg') }}" alt="Berijalan Techno Center office" class="w-full h-auto rounded-lg object-cover">
            </div>
        </div>
    </div>
    <div class="bg-black text-white mt-16" id="contact">
        <div class="container mx-auto px-4 pt-16 pb-16">
        <div class="max-w-5xl mx-auto flex">
            <div class="space-y-4">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight text-center md:text-left">Contact Us</h2>
                <p class="mt-4 text-lg leading-relaxed text-gray-300 text-center md:text-left">Have a question or want to work together? Send a message.</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6 items-start">
                    <form action="#" method="post" class="space-y-4" novalidate>
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-300">Name</label>
                                <input id="name" name="name" type="text" required class="mt-1 block w-full rounded-md border border-gray-300 bg-white text-gray-900 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#f53003] focus:border-transparent" />
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                                <input id="email" name="email" type="email" required class="mt-1 block w-full rounded-md border border-gray-300 bg-white text-gray-900 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#f53003] focus:border-transparent" />
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-300">Message</label>
                            <textarea id="message" name="message" rows="5" required class="mt-1 block w-full rounded-md border border-gray-300 bg-white text-gray-900 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#f53003] focus:border-transparent"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="inline-flex items-center bg-white text-black px-4 py-2 rounded-md hover:bg-gray-200 transition-colors">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="space-y-4 md:pl-4">
                <h3 class="text-xl font-semibold">Other Contacts</h3>
                <ul class="space-y-3 text-gray-300">
                    <li>
                        <span class="block text-sm text-gray-400">Phone</span>
                        <a href="tel:+628999752638" class="underline underline-offset-4">+62 899-975-263-8</a>
                    </li>
                    <li>
                        <span class="block text-sm text-gray-400">Email</span>
                        <a href="mailto:example@email.com" class="underline underline-offset-4">ahsaniafifmz@email.com</a>
                    </li>
                    <li>
                        <span class="block text-sm text-gray-400">LinkedIn</span>
                        <a href="#" target="_blank" rel="noopener" class="underline underline-offset-4">linkedin.com/in/your-profile</a>
                    </li>
                    <li>
                        <span class="block text-sm text-gray-400">GitHub</span>
                        <a href="https://github.com/ahsanreis" target="_blank" rel="noopener" class="underline underline-offset-4">https://github.com/ahsanreis</a>
                    </li>
                    <li>
                        <span class="block text-sm text-gray-400">GitLab</span>
                        <a href="https://gitlab.com/ahsaniafif" target="_blank" rel="noopener" class="underline underline-offset-4">https://gitlab.com/ahsaniafif</a>
                    </li>
                    <li>
                        <span class="block text-sm text-gray-400">Instagram</span>
                        <a href="#" target="_blank" rel="noopener" class="underline underline-offset-4">instagram.com/your-handle</a>
                    </li>
                    <li>
                        <span class="block text-sm text-gray-400">Admin Login</span>
                        <a href="#" target="_blank" rel="noopener" class="underline underline-offset-4">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </div>
@endsection
