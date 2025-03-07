<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME', 'Laravel')  }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="">
<section class="py-10 mx-2 sm:mx-auto sm:w-full max-w-7xl">
    <h1
        class="mt-10 text-4xl font-bold text-center capitalize sm:text-7xl dark:text-white"
    >
        Full-Stack Web developer
    </h1>
    <div
        class="flex flex-wrap items-center justify-around gap-8 pt-16 group"
    >
        <image src="https://bhaviktrambadiya.netlify.app/images/profileimg/profile.webp" width="256" height="256"
               alt="profile"
               quality="100"
               class="object-contain h-48 rounded-full w-auto sm:h-64 animate-shadow-ping"
               loading="lazy"/>
        <div class="max-w-3xl px-2">
            <h2
                class="h-full py-8 text-4xl font-bold text-center text-transparent sm:text-6xl lg:text-left bg-clip-text tfcolor-transparent bg-img-text animate-gradient-text"
            >
                Bhavik Trambadiya
            </h2>
            <p class="text-justify text-lg text-slate-600 dark:text-slate-300">
                As a full stack web developer, I have expertise in both front-end
                and back-end development, enabling me to create seamless,
                end-to-end web applications that meet user needs and exceed
                expectations.I have a passion for creating engaging and dynamic
                web experiences that leverage the latest technologies and best
                practices to deliver exceptional results.
            </p>
            <div
                class="flex flex-wrap items-center justify-center gap-8 mt-4 lg:justify-start"
            >
                <a
                    href="https://wa.me/7285060756?text=Hi"
                    class="inline-flex items-center gap-2 px-6 py-4 capitalize rounded-full shadow-sm text-emerald-700 bg-emerald-100/50 shadow-green-100 hover:shadow-lg hover:shadow-green-100 dark:bg-emerald-800/50 dark:text-emerald-200 dark:shadow-green-800"
                    target="_blank"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                        class="size-7"
                        fill="currentColor"
                    >
                        <path
                            d="M414.73 97.1A222.14 222.14 0 00256.94 32C134 32 33.92 131.58 33.87 254a220.61 220.61 0 0029.78 111L32 480l118.25-30.87a223.63 223.63 0 00106.6 27h.09c122.93 0 223-99.59 223.06-222A220.18 220.18 0 00414.73 97.1zM256.94 438.66h-.08a185.75 185.75 0 01-94.36-25.72l-6.77-4-70.17 18.32 18.73-68.09-4.41-7A183.46 183.46 0 0171.53 254c0-101.73 83.21-184.5 185.48-184.5a185 185 0 01185.33 184.64c-.04 101.74-83.21 184.52-185.4 184.52zm101.69-138.19c-5.57-2.78-33-16.2-38.08-18.05s-8.83-2.78-12.54 2.78-14.4 18-17.65 21.75-6.5 4.16-12.07 1.38-23.54-8.63-44.83-27.53c-16.57-14.71-27.75-32.87-31-38.42s-.35-8.56 2.44-11.32c2.51-2.49 5.57-6.48 8.36-9.72s3.72-5.56 5.57-9.26.93-6.94-.46-9.71-12.54-30.08-17.18-41.19c-4.53-10.82-9.12-9.35-12.54-9.52-3.25-.16-7-.2-10.69-.2a20.53 20.53 0 00-14.86 6.94c-5.11 5.56-19.51 19-19.51 46.28s20 53.68 22.76 57.38 39.3 59.73 95.21 83.76a323.11 323.11 0 0031.78 11.68c13.35 4.22 25.5 3.63 35.1 2.2 10.71-1.59 33-13.42 37.63-26.38s4.64-24.06 3.25-26.37-5.11-3.71-10.69-6.48z"
                            fill-rule="evenodd"
                        />
                    </svg>
                    <span class="text-lg font-semibold">Whatsapp</span>
                </a>
                <a
                    href="https://www.linkedin.com/in/bhaviktrambadiya/"
                    target="_blank"
                    class="inline-flex items-center gap-2 px-6 py-4 text-blue-700 capitalize rounded-full shadow-sm bg-blue-100/50 shadow-blue-100 hover:shadow-lg hover:shadow-blue-100 dark:bg-blue-800/50 dark:text-blue-200 dark:shadow-blue-800"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                        fill="currentColor"
                        class="size-7"
                    >
                        <path
                            d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32zm-273.3 373.43h-64.18V205.88h64.18zM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43 0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44-17.74 0-28.24 12-32.91 23.69-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44 42.13 0 74 27.77 74 87.64z"
                        />
                    </svg>
                    <span class="text-lg font-semibold">Linkedin</span>
                </a>
                <a
                    target="_blank"
                    href="mailto:bhaviktrambadiya@gmail.com"
                    type="button"
                    class="inline-flex items-center gap-2 px-6 py-4  text-orange-700 dark:text-orange-200 rounded-full shadow-sm  hover:shadow-lg bg-orange-100 dark:bg-orange-800 shadow-orange-200 dark:shadow-orange-800 hover:shadow-orange-200"
                >
                    <x-heroicon-c-envelope class="size-7"/>
                    <span class="text-lg font-semibold">bhaviktrambadiya@gmail.com</span>
                </a>
            </div>
        </div>
    </div>
    <h3
        class="mt-24 text-2xl font-bold text-center capitalize sm:text-4xl dark:text-white"
    >
        <a href="https://filamentphp.com/" target="_blank" class="text-[#fdae4b]">Filement</a> multi-Panel with <a
            href="https://tenancyforlaravel.com/" target="_blank" class="text-[#5850EC]">Multi-Tenancy</a> in <a
            href="https://laravel.com/" target="_blank" class="text-[#f53003]">Laravel</a>
    </h3>
    <div class="text-center mt-12">
        <a class="text-3xl font-semibold bg-yellow-300 py-4 px-8 rounded-full" href="/admin/login">Check-out Demo</a>
    </div>
</section>
</body>
</html>
