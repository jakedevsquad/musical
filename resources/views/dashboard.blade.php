<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Source+Sans+Pro" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="font-open">
    <div class="dashboard-background
                lg:pt-4 lg:pb-20 lg:h-full
                md:pt-4 md:pb-20 md:h-full
                sm:pt-4 sm:pb-20 sm:h-full
                xs:pt-4 xs:pb-20 xs:h-full">
        <div class="lg:h-12 lg:w-full lg:flex lg:flex-row lg:justify-around lg:text-white lg:text-lg
                    md:h-12 md:w-full md:flex md:flex-row md:justify-around md:text-white md:text-lg
                    sm:h-12 sm:w-full sm:flex sm:flex-row sm:justify-around sm:text-white sm:text-lg
                    xs:h-12 xs:w-full xs:flex xs:flex-row xs:justify-around xs:text-white xs:text-lg">
            <div class="w-1/2
                        lg:flex lg:flex-row lg:justify-center
                        md:hidden
                        sm:hidden
                        xs:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="99.502" height="17.969" viewBox="0 0 99.502 17.969">
                    <path id="Union_28" data-name="Union 28" d="M18191.756-2360.956v-5.432c0-4.022,2.3-6.269,6.424-6.269a5.972,5.972,0,0,1,5.432,2.819.652.652,0,0,1-.207.993l-1.8,1.281a.659.659,0,0,1-1.02-.21,2.843,2.843,0,0,0-2.4-1.332c-1.543,0-2.348,1.043-2.348,3.029v4.809c0,1.981.8,3.029,2.348,3.029a2.909,2.909,0,0,0,2.4-1.332.656.656,0,0,1,1.02-.211l1.8,1.281a.652.652,0,0,1,.207.993,5.981,5.981,0,0,1-5.432,2.819C18194.053-2354.687,18191.756-2356.934,18191.756-2360.956Zm-21.658,3.995a.67.67,0,0,1,.027-1.016l1.543-1.592a.657.657,0,0,1,1.043,0,5.112,5.112,0,0,0,3.449,1.332c1.277,0,1.986-.627,1.986-1.753,0-.965-.709-1.409-2.795-1.775-3.84-.654-5.332-2.247-5.332-5.459,0-3.29,2.3-5.431,5.826-5.431a7.5,7.5,0,0,1,5.486,1.853.681.681,0,0,1,0,1.043l-1.543,1.569a.7.7,0,0,1-1.043.023,3.9,3.9,0,0,0-2.664-.938c-1.281,0-1.984.627-1.984,1.748,0,.97.73,1.437,2.795,1.78,3.84.627,5.326,2.247,5.326,5.459,0,3.29-2.3,5.431-5.824,5.431A8.322,8.322,0,0,1,18170.1-2356.961Zm-14.99-3.812v-10.84a.659.659,0,0,1,.727-.732h2.613a.662.662,0,0,1,.732.732v10.63c0,1.881.705,2.746,2.17,2.746s2.168-.865,2.168-2.746v-10.63a.662.662,0,0,1,.732-.732h2.508a.657.657,0,0,1,.727.732v10.84c0,3.917-2.219,6.086-6.186,6.086S18155.107-2356.856,18155.107-2360.773Zm67.471,5.775a.663.663,0,0,1-.732-.732v-15.883a.663.663,0,0,1,.732-.732h2.613a.662.662,0,0,1,.732.732v13.059h6.189a.661.661,0,0,1,.732.732v2.091a.661.661,0,0,1-.732.732Zm-6.557,0a.752.752,0,0,1-.811-.627l-.572-2.119h-5.121l-.576,2.119a.752.752,0,0,1-.809.627h-2.664c-.521,0-.76-.316-.6-.837l4.859-15.91a.794.794,0,0,1,.814-.6h3.186a.792.792,0,0,1,.809.6l4.859,15.91c.156.521-.078.837-.6.837Zm-5.588-6.141h3.318l-1.648-6.452h-.055Zm-25.107,6.141a.661.661,0,0,1-.729-.732v-15.883a.66.66,0,0,1,.729-.732h2.617a.66.66,0,0,1,.729.732v15.883a.661.661,0,0,1-.729.732Zm-36.908,0a.661.661,0,0,1-.732-.732v-11h-.051l-3.395,11.129a.794.794,0,0,1-.811.6h-1.83a.794.794,0,0,1-.811-.6l-3.422-11.206h-.051v11.078a.662.662,0,0,1-.732.732h-2.508a.662.662,0,0,1-.732-.732v-15.883a.662.662,0,0,1,.732-.732h4.521a.774.774,0,0,1,.811.6l3.156,10.529h.055l3.158-10.529a.777.777,0,0,1,.814-.6h4.438a.661.661,0,0,1,.732.732v15.883a.661.661,0,0,1-.732.732Z" transform="translate(-18133.344 2372.656)" fill="#fff"/>
                </svg>
            </div>
            <div class="lg:flex lg:flex-row lg:justify-center lg:px-0 lg:w-1/2
                        md:flex md:flex-row md:justify-around md:px-20 md:w-full
                        sm:flex sm:flex-row sm:justify-around sm:px-20 sm:w-full
                        xs:flex xs:flex-row xs:justify-around xs:px-4 xs:w-full">
                <a href="#" class="uppercase text-base tracking-wide text-white
                            lg:mr-12">
                    Courses
                </a>
                <a href="{{ route('register') }}" class="uppercase text-base tracking-wide text-white
                            lg:mr-12">
                    Sign Up
                </a>
                <a href="{{ route('login') }}" class="uppercase text-base tracking-wide text-white
                            lg:mr-12">
                    Sign In
                </a>
            </div>
        </div>

        <div class="lg:flex lg:justify-center
                    md:flex md:justify-center
                    sm:flex sm:justify-center
                    xs:flex xs:justify-center">
            <div class="lg:text-white lg:text-lg lg:mt-64 lg:w-1/3
                        md:text-white md:text-lg md:mt-12 md:w-full
                        sm:text-white sm:text-lg sm:mt-12 sm:w-full
                        xs:text-white xs:text-lg xs:mt-12 xs:w-full">
                <div class="font-bold font-source
                            lg:text-3xl lg:text-left
                            md:text-3xl md:text-center
                            sm:text-3xl sm:text-center
                            xs:text-2xl xs:text-center xs:px-4">
                    Take the fast track to learning a new instrument
                </div>
                <div class="text-base
                            lg:my-4 lg:px-0 lg:text-left lg:mr-32
                            md:my-4 md:px-20 md:text-center
                            sm:my-4 sm:px-20 sm:text-center
                            xs:my-4 xs:px-12 xs:text-center">
                    Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod.
                </div>
                <div class="lg:flex lg:flex-row lg:justify-start
                            md:flex md:flex-row md:justify-center
                            sm:flex sm:flex-row sm:justify-center
                            xs:flex xs:flex-row xs:justify-center">
                    <div class="bg-pink rounded uppercase font-bold
                                lg:w-2/3 lg:p-2 lg:text-center
                                md:w-1/3 md:p-2 md:text-center
                                sm:w-1/3 sm:p-2 sm:text-center
                                xs:w-1/2 xs:p-2 xs:text-center xs:text-sm">
                        Subscribe
                    </div>
                </div>
            </div>
            <div class="lg:mt-16 lg:ml-24 lg:flex
                        md:hidden
                        sm:hidden
                        xs:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="440" height="518.486" viewBox="0 0 440 518.486">
                    <defs>
                        <radialGradient id="radial-gradient" cx="0.608" cy="0.146" r="0.781" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#ff99af"/>
                            <stop offset="0.488" stop-color="#db9dbf"/>
                            <stop offset="1" stop-color="#5eacf6"/>
                        </radialGradient>
                        <radialGradient id="radial-gradient-2" cx="0.246" cy="0.309" r="0.439" gradientTransform="translate(0 -0.022) scale(1 1.07)" xlink:href="#radial-gradient"/>
                        <radialGradient id="radial-gradient-3" cx="0.662" cy="0.11" r="0.781" xlink:href="#radial-gradient"/>
                        <radialGradient id="radial-gradient-4" cx="0.347" cy="0.162" r="0.781" xlink:href="#radial-gradient"/>
                        <radialGradient id="radial-gradient-5" cx="0.716" cy="0.199" r="0.781" xlink:href="#radial-gradient"/>
                        <radialGradient id="radial-gradient-6" cx="0.302" cy="0.133" r="0.781" xlink:href="#radial-gradient"/>
                        <clipPath id="clip-path">
                            <path id="Path_954" data-name="Path 954" d="M202.378,513.686c18.233.9,38.471-1.98,38.471-1.98,24.342-4.838,30.292-17.615,30.292-17.615,13.691-22.893,2.634-49.623,2.634-49.623-2.971-8.983-11.815-32.509-11.815-32.509-4.888-13.287,3.08-27.933,3.08-27.933,7.8-11.9,8.969-28.182,8.969-28.182.743-19.431-10.338-20.622-10.338-20.622-7.85.346-8.139,10.723-8.139,10.723-.877,8.515-8.054,12.683-8.054,12.683-16.006,12.519-24.537-6.9-24.537-6.9l11.218-197.4a23.269,23.269,0,0,1,1.6-7.007l6.088-16C235.1,127.9,239,117.31,239,117.31l11.384-50.668c-3.382,4.341-11.617,8.386-15.776,10.334a8.761,8.761,0,0,0-3.248,2.842l-23.741,58.164c-1.525,4.523.134,7.336,1.786,8.9,0,0,2.3,2.5,2.109,5.014L197.977,329.761c-9.617,12.174-19.809,6.262-19.809,6.262-9.8-3.642-8.962-22.574-8.962-22.574,1.306-12.041-4.348-13.706-4.348-13.706-7.482-4-13.44,6.169-13.44,6.169-9.876,12.949-5.857,44.031,2.55,66.733,4.075,11.007,1.075,21.452-2.006,29.536l-6.416,13.709c-2.926,5.037-6.235,12.234-8.738,17.627-1.479,3.185-2.768,6.75-3.969,9.738-3.505,8.713-3.47,13.543-3.47,13.543-5,46.092,41.247,51.877,41.247,51.877S193.136,513.233,202.378,513.686Z" fill="none"/>
                        </clipPath>
                        <clipPath id="clip-path-2">
                            <rect id="Rectangle_2" data-name="Rectangle 2" width="445.408" height="650.009" transform="translate(0 217.314) rotate(-29.203)" fill="none"/>
                        </clipPath>
                        <clipPath id="clip-path-4">
                            <path id="Path_1506" data-name="Path 1506" d="M312.624,152.516c.993-4.833,4.723,1.287,6.082,2.138a5.682,5.682,0,0,0,3.786,1.1c2.3-.3,3.667-2.139,5.47-2.465,1.861-.472,2.373.394,2.494,2.289.181,1.748-.463,1.672.36,3.494a59.024,59.024,0,0,1,3.407,9.194l8.842,38.937a15.76,15.76,0,0,1,.643,5.971s-.953,2.343.679,7.764L389.1,369.309s1.5,6.7,5.5,9.79c5.5,4.241,10.228,7.972,18.243,5.505,8.356-2.787,16.9-7.395,25.711-2.387,16.932,9.894,4.1,32.868,8.1,48.009,3.107,12.128,13.4,17.271,22.592,24.919,0,0,22.636,15.9,24.4,43.5,0,0,4.893,26.866-27.418,49.348-15.506,10.785-44.932,16.08-44.932,16.08-27.629,5.012-48.624,5.479-64.126-10.8s-19.7-35.88-15.128-57.769c2.612-12.168,12.86-27.481,8.4-39.631-4.084-11.871-14.253-17.686-18.9-28.8-4.741-11.775-5.887-26.193,2.009-36.774,7.617-10.2,14.428-15.837,28.28-20.205l-40.41-145.708s-.41-1.287-2.8-3.861c0,0-3.4-1.752-5.038-10.329l-10.686-32.979a58.882,58.882,0,0,1-2.065-9.582c-.288-1.979-.79-1.569-1.578-3.14-.917-1.663-.95-2.669.871-3.271,1.7-.7,3.837.118,5.942-.862a5.691,5.691,0,0,0,2.6-2.961c.685-1.447.545-8.613,3.977-5.069" fill="none"/>
                        </clipPath>
                        <clipPath id="clip-path-5">
                            <rect id="Rectangle_4" data-name="Rectangle 4" width="340.844" height="497.419" transform="matrix(0.967, -0.255, 0.255, 0.967, 0, 86.859)" fill="none"/>
                        </clipPath>
                    </defs>
                    <g id="hero-img-1" transform="translate(-812 -131.425)">
                        <circle id="Ellipse_54" data-name="Ellipse 54" cx="194" cy="194" r="194" transform="translate(812 240)" opacity="0.45" fill="url(#radial-gradient)"/>
                        <circle id="Ellipse_55" data-name="Ellipse 55" cx="59.5" cy="59.5" r="59.5" transform="translate(812 240)" opacity="0.45" fill="url(#radial-gradient-2)"/>
                        <circle id="Ellipse_56" data-name="Ellipse 56" cx="40" cy="40" r="40" transform="translate(839 181)" opacity="0.45" fill="url(#radial-gradient-3)"/>
                        <circle id="Ellipse_57" data-name="Ellipse 57" cx="17" cy="17" r="17" transform="translate(921 204)" opacity="0.45" fill="url(#radial-gradient-4)"/>
                        <circle id="Ellipse_58" data-name="Ellipse 58" cx="17" cy="17" r="17" transform="translate(1218 530)" opacity="0.45" fill="url(#radial-gradient-5)"/>
                        <circle id="Ellipse_59" data-name="Ellipse 59" cx="44.5" cy="44.5" r="44.5" transform="translate(1146 539)" opacity="0.45" fill="url(#radial-gradient-6)"/>
                        <g id="Group_32" data-name="Group 32" transform="translate(791.189 41.395) rotate(11)">
                            <g id="Group_17" data-name="Group 17">
                                <g id="Group_15" data-name="Group 15">
                                    <path id="Path_426" data-name="Path 426" d="M209.093,135.9c-2.662-1.178-2.627,1.72-5,1.187-2.509-.428-1.794-2.293-1.078-4.158.792-1.489,1.477-3.114,3.026-2.8,3.231.515.778,3.421,3.1,4.436" fill="#85c7a8" stroke="#85c7a8" stroke-miterlimit="10" stroke-width="0.75"/>
                                    <path id="Path_427" data-name="Path 427" d="M213.167,125.56c-2.663-1.178-2.626,1.721-5,1.187-2.51-.427-1.794-2.293-1.079-4.158.792-1.489,1.477-3.113,3.026-2.8,3.231.516.78,3.423,3.1,4.437" fill="#85c7a8" stroke="#85c7a8" stroke-miterlimit="10" stroke-width="0.75"/>
                                    <path id="Path_428" data-name="Path 428" d="M216.749,115.992c-2.663-1.179-2.626,1.721-5,1.187-2.51-.428-1.793-2.292-1.079-4.158.792-1.489,1.478-3.114,3.026-2.8,3.232.517,1.632,3.249,3.948,4.264" fill="#85c7a8" stroke="#85c7a8" stroke-miterlimit="10" stroke-width="0.75"/>
                                    <path id="Path_429" data-name="Path 429" d="M220.834,106.448c-2.663-1.179-2.321,1.481-4.7.948-2.51-.428-1.795-2.294-1.078-4.158.79-1.49,1.477-3.115,3.025-2.8,3.231.515,1.086,3.182,3.4,4.2" fill="#85c7a8" stroke="#85c7a8" stroke-miterlimit="10" stroke-width="0.75"/>
                                    <path id="Path_430" data-name="Path 430" d="M225.053,96.932c-2.663-1.18-3.106,1.108-5.482.575-2.51-.428-1.795-2.293-1.079-4.158.791-1.489,1.477-3.114,3.026-2.8,3.231.516,1.564,3.795,3.881,4.81" fill="#85c7a8" stroke="#85c7a8" stroke-miterlimit="10" stroke-width="0.75"/>
                                    <path id="Path_431" data-name="Path 431" d="M228.862,87.158c-2.663-1.18-2.866,1.414-5.241.881-2.51-.429-1.795-2.293-1.079-4.159.791-1.489,1.477-3.113,3.025-2.8,3.232.516,1.392,2.942,3.708,3.957" fill="#85c7a8" stroke="#85c7a8" stroke-miterlimit="10" stroke-width="0.75"/>
                                </g>
                                <g id="Group_16" data-name="Group 16">
                                    <path id="Path_432" data-name="Path 432" d="M202.371,513.354c2.265,8.93-10.7,7.428-4.1-1.826Z" fill="#e15553" stroke="#e15553" stroke-miterlimit="10" stroke-width="0.75"/>
                                    <path id="Path_433" data-name="Path 433" d="M167.3,300.732c1.676-1.748,2.843-3.314.211-4.733-3.086-1.718-3.823.323-3.77,2.891Z" fill="#6bc19b" stroke="#6bc19b" stroke-miterlimit="10" stroke-width="1"/>
                                </g>
                            </g>
                            <g id="Group_24" data-name="Group 24">
                                <g id="Group_23" data-name="Group 23" clip-path="url(#clip-path)">
                                    <g id="Group_22" data-name="Group 22" transform="translate(-127.267 463.782) rotate(-85)">
                                        <path id="Path_434" data-name="Path 434" d="M161.815,594.567,196,692.894l-45.534-39.289Z" transform="translate(8.986 17.963)" fill="#da614e" fill-rule="evenodd"/>
                                        <path id="Path_435" data-name="Path 435" d="M109.752,674.377l87.683,16.664-45.527-39.287-45.84,16.033Z" transform="translate(7.551 19.812)" fill="#d26232"/>
                                        <path id="Path_436" data-name="Path 436" d="M442.766,381.8l-13.688-24.485-13-11.227-56.749,19.86Z" transform="translate(15.737 9.931)" fill="#a1cfa6"/>
                                        <path id="Path_437" data-name="Path 437" d="M155.177,91.681l-5.253,27.333,45.527,39.3L169.505,83.674Z" transform="translate(8.969 1.449)" fill="#9d9b66"/>
                                        <path id="Path_438" data-name="Path 438" d="M94.961,137.764l102.271,19.443-45.532-39.3Z" transform="translate(7.192 2.556)" fill="#b6924a" fill-rule="evenodd"/>
                                        <path id="Path_439" data-name="Path 439" d="M293.727,441.729l34.179,98.331L282.38,500.767Z" transform="translate(13.25 13.023)" fill="#e87958" fill-rule="evenodd"/>
                                        <path id="Path_440" data-name="Path 440" d="M227.417,518.773l102.265,19.439-45.526-39.293Z" transform="translate(11.474 14.872)" fill="#e56657" fill-rule="evenodd"/>
                                        <path id="Path_441" data-name="Path 441" d="M29.359,213.558l34.189,98.333-45.53-39.3Z" transform="translate(4.705 5.647)" fill="#566faa" fill-rule="evenodd"/>
                                        <path id="Path_442" data-name="Path 442" d="M-36.945,290.6l102.27,19.444-45.53-39.3Z" transform="translate(2.928 7.496)" fill="#5878af" fill-rule="evenodd"/>
                                        <path id="Path_443" data-name="Path 443" d="M491.86,479.4l34.184,98.333-45.529-39.3Z" transform="translate(19.655 14.241)" fill="#f7bb58" fill-rule="evenodd"/>
                                        <path id="Path_444" data-name="Path 444" d="M425.549,556.437l102.273,19.439-45.531-39.291Z" transform="translate(17.878 16.089)" fill="#f8bf61" fill-rule="evenodd"/>
                                        <path id="Path_445" data-name="Path 445" d="M227.5,251.226l34.185,98.343L216.15,310.26Z" transform="translate(11.109 6.865)" fill="#5fb798" fill-rule="evenodd"/>
                                        <path id="Path_446" data-name="Path 446" d="M161.188,328.268l102.269,19.45-45.529-39.305Z" transform="translate(9.333 8.714)" fill="#81caa6" fill-rule="evenodd"/>
                                        <path id="Path_447" data-name="Path 447" d="M348.611,691.269l10.99,9.485,20.237-11.313-19.883-57.209Z" transform="translate(15.391 19.181)" fill="#eb824d"/>
                                        <path id="Path_448" data-name="Path 448" d="M330.35,716.251l31.028-17.346-10.99-9.484-56.747,19.846Z" transform="translate(13.614 21.029)" fill="#e4644c"/>
                                        <path id="Path_449" data-name="Path 449" d="M95.584,404.061,129.777,502.4,84.246,463.1Z" transform="translate(6.846 11.805)" fill="#d28a71" fill-rule="evenodd"/>
                                        <path id="Path_450" data-name="Path 450" d="M29.275,481.105l102.278,19.443-45.531-39.3Z" transform="translate(5.069 13.654)" fill="#da8055" fill-rule="evenodd"/>
                                        <path id="Path_451" data-name="Path 451" d="M330.046,182.136l-9.329-16.69-27.623,9.668Z" transform="translate(13.596 4.092)" fill="#6cc3a0"/>
                                        <path id="Path_452" data-name="Path 452" d="M491.86,479.4l34.184,98.333-45.529-39.3Z" transform="translate(19.655 14.241)" fill="#f7bb58" fill-rule="evenodd"/>
                                        <path id="Path_453" data-name="Path 453" d="M425.549,556.437l102.273,19.439-45.531-39.291Z" transform="translate(17.878 16.089)" fill="#f8bf61" fill-rule="evenodd"/>
                                        <path id="Path_454" data-name="Path 454" d="M227.5,251.226l34.185,98.343L216.15,310.26Z" transform="translate(11.109 6.865)" fill="#5fb798" fill-rule="evenodd"/>
                                        <path id="Path_455" data-name="Path 455" d="M161.188,328.268l102.269,19.45-45.529-39.305Z" transform="translate(9.333 8.714)" fill="#81caa6" fill-rule="evenodd"/>
                                        <path id="Path_456" data-name="Path 456" d="M348.611,691.269l10.99,9.485,20.237-11.313-19.883-57.209Z" transform="translate(15.391 19.181)" fill="#eb824d"/>
                                        <path id="Path_457" data-name="Path 457" d="M330.35,716.251l31.028-17.346-10.99-9.484-56.747,19.846Z" transform="translate(13.614 21.029)" fill="#e4644c"/>
                                        <path id="Path_458" data-name="Path 458" d="M95.584,404.061,129.777,502.4,84.246,463.1Z" transform="translate(6.846 11.805)" fill="#d28a71" fill-rule="evenodd"/>
                                        <path id="Path_459" data-name="Path 459" d="M29.275,481.105l102.278,19.443-45.531-39.3Z" transform="translate(5.069 13.654)" fill="#da8055" fill-rule="evenodd"/>
                                        <path id="Path_460" data-name="Path 460" d="M330.046,182.136l-9.329-16.69-27.623,9.668Z" transform="translate(13.596 4.092)" fill="#6cc3a0"/>
                                        <path id="Path_461" data-name="Path 461" d="M120.279,692.714l20.2,17.461,56.838-19.842-87.683-16.664Z" transform="translate(7.666 20.52)" fill="#cb592f"/>
                                        <path id="Path_462" data-name="Path 462" d="M136.943,723.584l11.932,21.344,47.561-55.117L139.6,709.654Z" transform="translate(8.549 21.042)" fill="#d06624"/>
                                        <path id="Path_463" data-name="Path 463" d="M404.757,404.588l42.755-14.923-4.746-8.493-83.442-15.848Z" transform="translate(15.737 10.553)" fill="#87d2ac"/>
                                        <path id="Path_464" data-name="Path 464" d="M392.438,462.882l57.875-67.056-3.869-6.922-42.759,14.921Z" transform="translate(16.808 11.315)" fill="#dcc781"/>
                                        <path id="Path_465" data-name="Path 465" d="M94.961,137.143l102.271,19.443-56.838,19.834Z" transform="translate(7.192 3.177)" fill="#c18c3e" fill-rule="evenodd"/>
                                        <path id="Path_466" data-name="Path 466" d="M128.077,234.86l68.085-78.883-56.836,19.834Z" transform="translate(8.262 3.786)" fill="#65997b" fill-rule="evenodd"/>
                                        <path id="Path_467" data-name="Path 467" d="M227.415,518.147,329.683,537.59l-56.839,19.834Z" transform="translate(11.473 15.493)" fill="#e1585a" fill-rule="evenodd"/>
                                        <path id="Path_468" data-name="Path 468" d="M260.527,615.874l68.085-78.892-56.835,19.83Z" transform="translate(12.544 16.102)" fill="#e36955" fill-rule="evenodd"/>
                                        <path id="Path_469" data-name="Path 469" d="M-36.945,289.977l102.27,19.444L8.482,329.256Z" transform="translate(2.928 8.118)" fill="#49619e" fill-rule="evenodd"/>
                                        <path id="Path_470" data-name="Path 470" d="M-3.836,387.7,64.254,308.81,7.407,328.641Z" transform="translate(3.998 8.726)" fill="#5686bb" fill-rule="evenodd"/>
                                        <path id="Path_471" data-name="Path 471" d="M425.549,555.815l102.273,19.439-56.84,19.838Z" transform="translate(17.878 16.711)" fill="#f8bf61" fill-rule="evenodd"/>
                                        <path id="Path_472" data-name="Path 472" d="M460.373,644.269l12.041-6.73L526.7,574.646l-56.842,19.836Z" transform="translate(19.004 17.319)" fill="#f5bc5f"/>
                                        <path id="Path_473" data-name="Path 473" d="M161.188,327.646,263.457,347.1l-56.838,19.828Z" transform="translate(9.333 9.335)" fill="#85c7a8" fill-rule="evenodd"/>
                                        <path id="Path_474" data-name="Path 474" d="M194.3,425.365l68.091-78.876-56.84,19.825Z" transform="translate(10.403 9.944)" fill="#b5c5a6" fill-rule="evenodd"/>
                                        <path id="Path_475" data-name="Path 475" d="M312.957,725.348l17.393-9.718-36.709-6.984Z" transform="translate(13.614 21.651)" fill="#e05751"/>
                                        <path id="Path_476" data-name="Path 476" d="M29.275,480.483l102.273,19.435L74.709,519.76Z" transform="translate(5.069 14.276)" fill="#d88750" fill-rule="evenodd"/>
                                        <path id="Path_477" data-name="Path 477" d="M62.391,578.2l68.087-78.892L73.636,519.15Z" transform="translate(6.139 14.884)" fill="#d9734d" fill-rule="evenodd"/>
                                        <path id="Path_478" data-name="Path 478" d="M338.53,214.087l7.985-2.787-16.469-29.467L293.1,174.81Z" transform="translate(13.597 4.395)" fill="#6cc6a4"/>
                                        <path id="Path_479" data-name="Path 479" d="M326.212,271.994l32.652-37.83-13.421-24.011-7.986,2.786Z" transform="translate(14.667 5.537)" fill="#69c1a0"/>
                                        <path id="Path_480" data-name="Path 480" d="M425.549,555.815l102.273,19.439-56.84,19.838Z" transform="translate(17.878 16.711)" fill="#f8bf61" fill-rule="evenodd"/>
                                        <path id="Path_481" data-name="Path 481" d="M460.373,644.269l12.041-6.73L526.7,574.646l-56.842,19.836Z" transform="translate(19.004 17.319)" fill="#f5bc5f"/>
                                        <path id="Path_482" data-name="Path 482" d="M161.188,327.646,263.457,347.1l-56.838,19.828Z" transform="translate(9.333 9.335)" fill="#85c7a8" fill-rule="evenodd"/>
                                        <path id="Path_483" data-name="Path 483" d="M194.3,425.365l68.091-78.876-56.84,19.825Z" transform="translate(10.403 9.944)" fill="#b5c5a6" fill-rule="evenodd"/>
                                        <path id="Path_484" data-name="Path 484" d="M312.957,725.348l17.393-9.718-36.709-6.984Z" transform="translate(13.614 21.651)" fill="#e05751"/>
                                        <path id="Path_485" data-name="Path 485" d="M29.275,480.483l102.273,19.435L74.709,519.76Z" transform="translate(5.069 14.276)" fill="#d88750" fill-rule="evenodd"/>
                                        <path id="Path_486" data-name="Path 486" d="M62.391,578.2l68.087-78.892L73.636,519.15Z" transform="translate(6.139 14.884)" fill="#d9734d" fill-rule="evenodd"/>
                                        <path id="Path_487" data-name="Path 487" d="M338.53,214.087l7.985-2.787-16.469-29.467L293.1,174.81Z" transform="translate(13.597 4.395)" fill="#6cc6a4"/>
                                        <path id="Path_488" data-name="Path 488" d="M326.212,271.994l32.652-37.83-13.421-24.011-7.986,2.786Z" transform="translate(14.667 5.537)" fill="#69c1a0"/>
                                        <path id="Path_489" data-name="Path 489" d="M148.5,744.928l7.782,13.924,28.466-9.908,11.315-59.129Z" transform="translate(8.923 21.042)" fill="#cf6325"/>
                                        <path id="Path_490" data-name="Path 490" d="M183.615,748.944l36.11,31.113,5.5-3.075-30.3-87.167Z" transform="translate(10.058 21.042)" fill="#bf4329"/>
                                        <path id="Path_491" data-name="Path 491" d="M392.438,462.665l56.774-19.757,7.023-36.7-5.922-10.6Z" transform="translate(16.808 11.532)" fill="#e0c77f"/>
                                        <path id="Path_492" data-name="Path 492" d="M447.434,442.576l45.495,39.2-6.5-18.7-31.972-57.2Z" transform="translate(18.585 11.864)" fill="#f2c26c"/>
                                        <path id="Path_493" data-name="Path 493" d="M128.071,234.863l68.091-78.886L184.851,215.1Z" transform="translate(8.262 3.786)" fill="#5f9980" fill-rule="evenodd"/>
                                        <path id="Path_494" data-name="Path 494" d="M228.568,254.3l-34.184-98.328L183.075,215.1Z" transform="translate(10.04 3.786)" fill="#388d8f" fill-rule="evenodd"/>
                                        <path id="Path_495" data-name="Path 495" d="M260.527,615.874l68.085-78.892L317.3,596.106Z" transform="translate(12.544 16.102)" fill="#e56f54" fill-rule="evenodd"/>
                                        <path id="Path_496" data-name="Path 496" d="M361.026,635.31l-34.191-98.329-11.314,59.127Z" transform="translate(14.321 16.102)" fill="#ee914f" fill-rule="evenodd"/>
                                        <path id="Path_497" data-name="Path 497" d="M-3.836,387.7,64.254,308.81,52.937,367.948Z" transform="translate(3.998 8.726)" fill="#5788bd" fill-rule="evenodd"/>
                                        <path id="Path_498" data-name="Path 498" d="M96.653,407.14,62.476,308.812,51.161,367.948Z" transform="translate(5.776 8.726)" fill="#668ebc" fill-rule="evenodd"/>
                                        <path id="Path_499" data-name="Path 499" d="M472.038,637.539l47.309-26.445,6.978-36.448Z" transform="translate(19.381 17.319)" fill="#f3ba5e"/>
                                        <path id="Path_500" data-name="Path 500" d="M517.866,611.093l16.445-9.19-9.47-27.258Z" transform="translate(20.862 17.319)" fill="#edb357"/>
                                        <path id="Path_501" data-name="Path 501" d="M194.3,425.365l68.088-78.883L251.08,405.61Z" transform="translate(10.403 9.944)" fill="#abcaa8" fill-rule="evenodd"/>
                                        <path id="Path_502" data-name="Path 502" d="M294.8,444.808l-34.188-98.324L249.3,405.61Z" transform="translate(12.181 9.944)" fill="#9bc0a0" fill-rule="evenodd"/>
                                        <path id="Path_503" data-name="Path 503" d="M-7.388,182.59l37.565,32.368-15.53-44.683Z" transform="translate(3.884 4.248)" fill="#494990"/>
                                        <path id="Path_504" data-name="Path 504" d="M62.391,578.2l68.087-78.892-11.315,59.135Z" transform="translate(6.139 14.884)" fill="#da724f" fill-rule="evenodd"/>
                                        <path id="Path_505" data-name="Path 505" d="M162.884,597.646,128.7,499.313l-11.314,59.135Z" transform="translate(7.917 14.884)" fill="#df6555" fill-rule="evenodd"/>
                                        <path id="Path_506" data-name="Path 506" d="M326.212,271.243l45.037-15.671-12.384-22.159Z" transform="translate(14.667 6.289)" fill="#66bc9c"/>
                                        <path id="Path_507" data-name="Path 507" d="M224.875,776.98l6.751-3.774,8.479-44.091-45.531-39.3Z" transform="translate(10.412 21.042)" fill="#cb463a"/>
                                        <path id="Path_508" data-name="Path 508" d="M296.844,709.254,194.567,689.815l45.538,39.3Z" transform="translate(10.412 21.042)" fill="#db504f" fill-rule="evenodd"/>
                                        <path id="Path_509" data-name="Path 509" d="M6.423,489.017l23.851-8.347L-1.632,474.6Z" transform="translate(4.07 14.086)" fill="#c58445"/>
                                        <path id="Path_510" data-name="Path 510" d="M228.213,254.3l-34.184-98.328,45.525,39.293Z" transform="translate(10.394 3.786)" fill="#378c8e" fill-rule="evenodd"/>
                                        <path id="Path_511" data-name="Path 511" d="M296.3,175.419,194.027,155.977l45.529,39.292Z" transform="translate(10.394 3.786)" fill="#40a3a4" fill-rule="evenodd"/>
                                        <path id="Path_512" data-name="Path 512" d="M360.665,635.312,326.48,536.981l45.531,39.295Z" transform="translate(14.676 16.102)" fill="#f19a4c" fill-rule="evenodd"/>
                                        <path id="Path_513" data-name="Path 513" d="M428.752,556.424,326.48,536.981l45.531,39.295Z" transform="translate(14.676 16.102)" fill="#f19e4c" fill-rule="evenodd"/>
                                        <path id="Path_514" data-name="Path 514" d="M96.3,407.14,62.122,308.812l45.527,39.3Z" transform="translate(6.13 8.726)" fill="#7090b8" fill-rule="evenodd"/>
                                        <path id="Path_515" data-name="Path 515" d="M164.39,328.255,62.122,308.81l45.527,39.3Z" transform="translate(6.13 8.726)" fill="#7697b8" fill-rule="evenodd"/>
                                        <path id="Path_516" data-name="Path 516" d="M534.092,601.9l13.414-7.5-22.889-19.751Z" transform="translate(21.08 17.32)" fill="#e7aa4c"/>
                                        <path id="Path_517" data-name="Path 517" d="M294.442,444.808l-34.186-98.319,45.527,39.284Z" transform="translate(12.535 9.944)" fill="#81c7a1" fill-rule="evenodd"/>
                                        <path id="Path_518" data-name="Path 518" d="M362.523,365.924,260.255,346.483l45.528,39.29Z" transform="translate(12.535 9.944)" fill="#73c9a1" fill-rule="evenodd"/>
                                        <path id="Path_519" data-name="Path 519" d="M13.956,170.738l15.536,44.68,11.344-59.032-.472-.41Z" transform="translate(4.574 3.786)" fill="#565482"/>
                                        <path id="Path_520" data-name="Path 520" d="M39.537,156.685l.472.41,56.743-19.852L80.015,134.06Z" transform="translate(5.4 3.078)" fill="#796864"/>
                                        <path id="Path_521" data-name="Path 521" d="M162.53,597.646l-34.181-98.333,45.528,39.3Z" transform="translate(8.271 14.884)" fill="#df5e56" fill-rule="evenodd"/>
                                        <path id="Path_522" data-name="Path 522" d="M230.618,518.756,128.346,499.31l45.532,39.3Z" transform="translate(8.271 14.884)" fill="#e15f5c" fill-rule="evenodd"/>
                                        <path id="Path_523" data-name="Path 523" d="M-92.353,312.3l.572-2.97-4.312-3.72Z" transform="translate(1.016 8.623)" fill="#28155e"/>
                                        <path id="Path_524" data-name="Path 524" d="M-95.55,306.577l4.312,3.72L-34.5,290.446l-78.4-14.905Z" transform="translate(0.473 7.651)" fill="#28145f"/>
                                        <path id="Path_525" data-name="Path 525" d="M296.844,709.875,194.572,690.436l56.84-19.832Z" transform="translate(10.412 20.421)" fill="#dc4f50" fill-rule="evenodd"/>
                                        <path id="Path_526" data-name="Path 526" d="M262.659,613.4l-68.092,78.882,56.845-19.83Z" transform="translate(10.412 18.572)" fill="#e05655" fill-rule="evenodd"/>
                                        <path id="Path_527" data-name="Path 527" d="M-1.072,475.648l31.9,6.067L-14.6,442.435l-4.217,1.476Z" transform="translate(3.514 13.046)" fill="#d08439"/>
                                        <path id="Path_528" data-name="Path 528" d="M-32.818,419.893l14.457,25.867,4.217-1.474L-2.9,385.229Z" transform="translate(3.062 11.197)" fill="#748693"/>
                                        <path id="Path_529" data-name="Path 529" d="M296.3,176.04,194.027,156.6l56.843-19.837Z" transform="translate(10.394 3.165)" fill="#44a7a5" fill-rule="evenodd"/>
                                        <path id="Path_530" data-name="Path 530" d="M262.116,79.556l-68.086,78.891,56.839-19.833Z" transform="translate(10.394 1.316)" fill="#4eb7b2" fill-rule="evenodd"/>
                                        <path id="Path_531" data-name="Path 531" d="M428.752,557.045,326.48,537.6l56.842-19.84Z" transform="translate(14.676 15.481)" fill="#f3a450" fill-rule="evenodd"/>
                                        <path id="Path_532" data-name="Path 532" d="M394.57,460.565l-68.09,78.886,56.846-19.834Z" transform="translate(14.676 13.632)" fill="#f09f4e" fill-rule="evenodd"/>
                                        <path id="Path_533" data-name="Path 533" d="M164.39,328.876,62.122,309.431,118.957,289.6Z" transform="translate(6.13 8.105)" fill="#7798b5" fill-rule="evenodd"/>
                                        <path id="Path_534" data-name="Path 534" d="M130.2,232.393l-68.08,78.89,56.836-19.833Z" transform="translate(6.13 6.256)" fill="#6ea1bd" fill-rule="evenodd"/>
                                        <path id="Path_535" data-name="Path 535" d="M296.844,709.875,194.572,690.436l56.84-19.832Z" transform="translate(10.412 20.421)" fill="#dc4f50" fill-rule="evenodd"/>
                                        <path id="Path_536" data-name="Path 536" d="M262.659,613.4l-68.092,78.882,56.845-19.83Z" transform="translate(10.412 18.572)" fill="#e05655" fill-rule="evenodd"/>
                                        <path id="Path_537" data-name="Path 537" d="M-1.072,475.648l31.9,6.067L-14.6,442.435l-4.217,1.476Z" transform="translate(3.514 13.046)" fill="#d08439"/>
                                        <path id="Path_538" data-name="Path 538" d="M-32.818,419.893l14.457,25.867,4.217-1.474L-2.9,385.229Z" transform="translate(3.062 11.197)" fill="#748693"/>
                                        <path id="Path_539" data-name="Path 539" d="M296.3,176.04,194.027,156.6l56.843-19.837Z" transform="translate(10.394 3.165)" fill="#44a7a5" fill-rule="evenodd"/>
                                        <path id="Path_540" data-name="Path 540" d="M262.116,79.556l-68.086,78.891,56.839-19.833Z" transform="translate(10.394 1.316)" fill="#4eb7b2" fill-rule="evenodd"/>
                                        <path id="Path_541" data-name="Path 541" d="M428.752,557.045,326.48,537.6l56.842-19.84Z" transform="translate(14.676 15.481)" fill="#f3a450" fill-rule="evenodd"/>
                                        <path id="Path_542" data-name="Path 542" d="M394.57,460.565l-68.09,78.886,56.846-19.834Z" transform="translate(14.676 13.632)" fill="#f09f4e" fill-rule="evenodd"/>
                                        <path id="Path_543" data-name="Path 543" d="M164.39,328.876,62.122,309.431,118.957,289.6Z" transform="translate(6.13 8.105)" fill="#7798b5" fill-rule="evenodd"/>
                                        <path id="Path_544" data-name="Path 544" d="M130.2,232.393l-68.08,78.89,56.836-19.833Z" transform="translate(6.13 6.256)" fill="#6ea1bd" fill-rule="evenodd"/>
                                        <path id="Path_545" data-name="Path 545" d="M57.842,581.179l2.729,4.881,1.965-10.329Z" transform="translate(5.992 17.354)" fill="#b23624"/>
                                        <path id="Path_546" data-name="Path 546" d="M362.526,366.553,260.258,347.11l56.84-19.844Z" transform="translate(12.535 9.323)" fill="#73c8a0" fill-rule="evenodd"/>
                                        <path id="Path_547" data-name="Path 547" d="M328.344,270.059l-68.086,78.9,56.84-19.843Z" transform="translate(12.535 7.474)" fill="#6bc19b" fill-rule="evenodd"/>
                                        <path id="Path_548" data-name="Path 548" d="M78.748,134.2l16.736,3.183-8.8-7.615Z" transform="translate(6.668 2.939)" fill="#a67b48"/>
                                        <path id="Path_549" data-name="Path 549" d="M230.618,519.377,128.346,499.93l56.842-19.824Z" transform="translate(8.271 14.263)" fill="#e15e5d" fill-rule="evenodd"/>
                                        <path id="Path_550" data-name="Path 550" d="M196.431,422.9l-68.08,78.892,56.835-19.832Z" transform="translate(8.271 12.414)" fill="#e27069" fill-rule="evenodd"/>
                                        <path id="Path_551" data-name="Path 551" d="M-112.709,276.3l78.4,14.905-45.428-39.278-38.991,13.607Z" transform="translate(0.285 6.888)" fill="#2d1c69"/>
                                        <path id="Path_552" data-name="Path 552" d="M-107.091,238.812-123.478,257.8l4.9,8.773,38.991-13.607,6.293-33.047Z" transform="translate(0.131 5.853)" fill="#28145f"/>
                                        <path id="Path_553" data-name="Path 553" d="M262.659,613.4l-68.085,78.88,11.311-59.129Z" transform="translate(10.412 18.572)" fill="#e05655" fill-rule="evenodd"/>
                                        <path id="Path_554" data-name="Path 554" d="M161.46,594.567l34.186,98.327,11.31-59.131Z" transform="translate(9.341 17.963)" fill="#de5d53" fill-rule="evenodd"/>
                                        <path id="Path_555" data-name="Path 555" d="M-32.463,419.893l29.918-34.664-41.268,14.361Z" transform="translate(2.706 11.197)" fill="#707f8f"/>
                                        <path id="Path_556" data-name="Path 556" d="M262.116,79.556l-68.086,78.891,11.315-59.129Z" transform="translate(10.394 1.316)" fill="#53b5ad" fill-rule="evenodd"/>
                                        <path id="Path_557" data-name="Path 557" d="M168.892,83.878l25.946,74.642,11.318-59.131L180.577,77.347Z" transform="translate(9.582 1.244)" fill="#78a889"/>
                                        <path id="Path_558" data-name="Path 558" d="M262.659,613.4l-68.085,78.88,11.311-59.129Z" transform="translate(10.412 18.572)" fill="#e05655" fill-rule="evenodd"/>
                                        <path id="Path_559" data-name="Path 559" d="M161.46,594.567l34.186,98.327,11.31-59.131Z" transform="translate(9.341 17.963)" fill="#de5d53" fill-rule="evenodd"/>
                                        <path id="Path_560" data-name="Path 560" d="M-32.463,419.893l29.918-34.664-41.268,14.361Z" transform="translate(2.706 11.197)" fill="#707f8f"/>
                                        <path id="Path_561" data-name="Path 561" d="M262.116,79.556l-68.086,78.891,11.315-59.129Z" transform="translate(10.394 1.316)" fill="#53b5ad" fill-rule="evenodd"/>
                                        <path id="Path_562" data-name="Path 562" d="M168.892,83.878l25.946,74.642,11.318-59.131L180.577,77.347Z" transform="translate(9.582 1.244)" fill="#78a889"/>
                                        <path id="Path_563" data-name="Path 563" d="M394.57,460.565l-68.09,78.886L337.8,480.321Z" transform="translate(14.676 13.632)" fill="#f09c4e" fill-rule="evenodd"/>
                                        <path id="Path_564" data-name="Path 564" d="M293.372,441.729l34.182,98.337,11.312-59.137Z" transform="translate(13.605 13.023)" fill="#e78857" fill-rule="evenodd"/>
                                        <path id="Path_565" data-name="Path 565" d="M130.209,232.39,62.122,311.282l11.309-59.127Z" transform="translate(6.13 6.256)" fill="#6e9ebe" fill-rule="evenodd"/>
                                        <path id="Path_566" data-name="Path 566" d="M29,213.558l34.189,98.333L74.5,252.763Z" transform="translate(5.06 5.647)" fill="#647fb1" fill-rule="evenodd"/>
                                        <path id="Path_567" data-name="Path 567" d="M57.9,581.179l4.695-5.448-6.477,2.256Z" transform="translate(5.936 17.354)" fill="#b13524"/>
                                        <path id="Path_568" data-name="Path 568" d="M328.344,270.059l-68.086,78.9,11.311-59.142Z" transform="translate(12.535 7.474)" fill="#6ac19b" fill-rule="evenodd"/>
                                        <path id="Path_569" data-name="Path 569" d="M227.143,251.226l34.185,98.343,11.311-59.145Z" transform="translate(11.465 6.865)" fill="#5cb193" fill-rule="evenodd"/>
                                        <path id="Path_570" data-name="Path 570" d="M379.482,689.443,404.3,675.569l.79-4.137-45.493-39.2Z" transform="translate(15.746 19.181)" fill="#ef954e"/>
                                        <path id="Path_571" data-name="Path 571" d="M196.431,422.9l-68.08,78.892,11.3-59.135Z" transform="translate(8.271 12.414)" fill="#e27169" fill-rule="evenodd"/>
                                        <path id="Path_572" data-name="Path 572" d="M95.229,404.061,129.422,502.4l11.306-59.133Z" transform="translate(7.201 11.805)" fill="#d1897b" fill-rule="evenodd"/>
                                        <path id="Path_573" data-name="Path 573" d="M-127.532,249.718l4.185,7.489,16.387-18.987Z" transform="translate(0 6.445)" fill="#251059"/>
                                        <path id="Path_574" data-name="Path 574" d="M57.9,581.179l4.695-5.448-6.477,2.256Z" transform="translate(5.936 17.354)" fill="#b13524"/>
                                        <path id="Path_575" data-name="Path 575" d="M328.344,270.059l-68.086,78.9,11.311-59.142Z" transform="translate(12.535 7.474)" fill="#6ac19b" fill-rule="evenodd"/>
                                        <path id="Path_576" data-name="Path 576" d="M227.143,251.226l34.185,98.343,11.311-59.145Z" transform="translate(11.465 6.865)" fill="#5cb193" fill-rule="evenodd"/>
                                        <path id="Path_577" data-name="Path 577" d="M379.482,689.443,404.3,675.569l.79-4.137-45.493-39.2Z" transform="translate(15.746 19.181)" fill="#ef954e"/>
                                        <path id="Path_578" data-name="Path 578" d="M196.431,422.9l-68.08,78.892,11.3-59.135Z" transform="translate(8.271 12.414)" fill="#e27169" fill-rule="evenodd"/>
                                        <path id="Path_579" data-name="Path 579" d="M95.229,404.061,129.422,502.4l11.306-59.133Z" transform="translate(7.201 11.805)" fill="#d1897b" fill-rule="evenodd"/>
                                        <path id="Path_580" data-name="Path 580" d="M-127.532,249.718l4.185,7.489,16.387-18.987Z" transform="translate(0 6.445)" fill="#251059"/>
                                        <path id="Path_581" data-name="Path 581" d="M304.313,385.172l45.43,39.22,11.37-59.1Z" transform="translate(13.959 10.552)" fill="#83c198" fill-rule="evenodd"/>
                                        <path id="Path_582" data-name="Path 582" d="M304.7,384.534l45.445,39.2-56.81,19.892Z" transform="translate(13.604 11.174)" fill="#8ab794" fill-rule="evenodd"/>
                                        <path id="Path_583" data-name="Path 583" d="M39.949,157l45.426,39.225L96.74,137.112Z" transform="translate(5.414 3.176)" fill="#917844" fill-rule="evenodd"/>
                                        <path id="Path_584" data-name="Path 584" d="M40.331,156.361l45.443,39.207L28.959,215.454Z" transform="translate(5.058 3.799)" fill="#635c73" fill-rule="evenodd"/>
                                        <path id="Path_585" data-name="Path 585" d="M172.407,538.006l45.426,39.226L229.2,518.122Z" transform="translate(9.695 15.492)" fill="#de5658" fill-rule="evenodd"/>
                                        <path id="Path_586" data-name="Path 586" d="M172.785,537.364l45.442,39.21-56.81,19.888Z" transform="translate(9.34 16.114)" fill="#df5a56" fill-rule="evenodd"/>
                                        <path id="Path_587" data-name="Path 587" d="M-91.959,309.833l45.427,39.232,11.367-59.117Z" transform="translate(1.15 8.117)" fill="#3c3984" fill-rule="evenodd"/>
                                        <path id="Path_588" data-name="Path 588" d="M-92.487,312.149l24.477,43.8,21.538-7.54L-91.92,309.2Z" transform="translate(1.133 8.739)" fill="#30226d"/>
                                        <path id="Path_589" data-name="Path 589" d="M266.315,752.413,289.5,739.459l5.932-30.833-56.8,19.878Z" transform="translate(11.836 21.65)" fill="#da4b4e"/>
                                        <path id="Path_590" data-name="Path 590" d="M230.429,772l36.193-20.229-27.7-23.9Z" transform="translate(11.571 22.272)" fill="#cb413e"/>
                                        <path id="Path_591" data-name="Path 591" d="M22.726,518.442l7.306-37.99L6.162,488.81Z" transform="translate(4.322 14.275)" fill="#d7772c"/>
                                        <path id="Path_592" data-name="Path 592" d="M238.086,194.667l45.43,39.222,11.368-59.111Z" transform="translate(11.818 4.394)" fill="#4ea799" fill-rule="evenodd"/>
                                        <path id="Path_593" data-name="Path 593" d="M238.467,194.031l45.451,39.2L227.1,253.119Z" transform="translate(11.463 5.016)" fill="#3a8d8c" fill-rule="evenodd"/>
                                        <path id="Path_594" data-name="Path 594" d="M370.539,575.672,415.966,614.9l11.368-59.111Z" transform="translate(16.1 16.71)" fill="#f4ad55" fill-rule="evenodd"/>
                                        <path id="Path_595" data-name="Path 595" d="M370.921,575.032l45.451,39.208-56.819,19.888Z" transform="translate(15.745 17.332)" fill="#f2a14e" fill-rule="evenodd"/>
                                        <path id="Path_596" data-name="Path 596" d="M106.178,347.509,151.6,386.727l11.371-59.113Z" transform="translate(7.555 9.334)" fill="#939ca9" fill-rule="evenodd"/>
                                        <path id="Path_597" data-name="Path 597" d="M106.56,346.872,152,386.069,95.188,405.956Z" transform="translate(7.199 9.957)" fill="#8294b2" fill-rule="evenodd"/>
                                        <path id="Path_598" data-name="Path 598" d="M175.83,792.4l8.718-45.37-28.5,9.976Z" transform="translate(9.166 22.892)" fill="#912717"/>
                                        <path id="Path_599" data-name="Path 599" d="M392.461,461.25l45.428,39.228,11.368-59.111Z" transform="translate(16.809 13.011)" fill="#f5b95f" fill-rule="evenodd"/>
                                        <path id="Path_600" data-name="Path 600" d="M392.842,460.608l45.449,39.206L381.477,519.7Z" transform="translate(16.453 13.633)" fill="#f1ae58" fill-rule="evenodd"/>
                                        <path id="Path_601" data-name="Path 601" d="M128.1,233.081l45.425,39.225,11.37-59.111Z" transform="translate(8.263 5.636)" fill="#46aaa6" fill-rule="evenodd"/>
                                        <path id="Path_602" data-name="Path 602" d="M128.48,232.438l45.442,39.208-56.812,19.89Z" transform="translate(7.908 6.258)" fill="#5db1b1" fill-rule="evenodd"/>
                                        <path id="Path_603" data-name="Path 603" d="M260.552,614.083l45.431,39.232L317.346,594.2Z" transform="translate(12.545 17.951)" fill="#e3645a" fill-rule="evenodd"/>
                                        <path id="Path_604" data-name="Path 604" d="M260.934,613.446l45.443,39.206-56.811,19.884Z" transform="translate(12.189 18.574)" fill="#e15659" fill-rule="evenodd"/>
                                        <path id="Path_605" data-name="Path 605" d="M-3.812,385.917l45.429,39.224,11.368-59.105Z" transform="translate(3.999 10.576)" fill="#6694b5" fill-rule="evenodd"/>
                                        <path id="Path_606" data-name="Path 606" d="M-3.435,385.276l45.451,39.2L-14.8,444.371Z" transform="translate(3.644 11.198)" fill="#6f91a4" fill-rule="evenodd"/>
                                        <path id="Path_607" data-name="Path 607" d="M249.023,138.7l47.352-16.578L283.989,99.965l-23.6-20.355Z" transform="translate(12.172 1.318)" fill="#4aa9a8"/>
                                        <path id="Path_608" data-name="Path 608" d="M62.414,576.419l45.431,39.224,11.37-59.107Z" transform="translate(6.14 16.734)" fill="#d16745" fill-rule="evenodd"/>
                                        <path id="Path_609" data-name="Path 609" d="M60.514,586.109l21.26,38.037,26.177-9.162-45.45-39.2Z" transform="translate(6.078 17.356)" fill="#be4a31"/>
                                        <path id="Path_610" data-name="Path 610" d="M371.667,309.842l7.754-40.343-8.183-14.638-45,15.758Z" transform="translate(14.668 6.982)" fill="#69bf9e"/>
                                        <path id="Path_611" data-name="Path 611" d="M326.616,270.106l45.448,39.2L315.249,329.2Z" transform="translate(14.313 7.475)" fill="#70c8a2" fill-rule="evenodd"/>
                                        <path id="Path_612" data-name="Path 612" d="M194.325,423.58l45.427,39.232L251.123,403.7Z" transform="translate(10.404 11.794)" fill="#e07f7d" fill-rule="evenodd"/>
                                        <path id="Path_613" data-name="Path 613" d="M194.708,422.944l45.441,39.206-56.809,19.89Z" transform="translate(10.049 12.416)" fill="#e47672" fill-rule="evenodd"/>
                                        <path id="Path_614" data-name="Path 614" d="M-54.264,209.073l29.143,25.167,8.931-46.45Z" transform="translate(2.368 4.814)" fill="#3a337f"/>
                                        <path id="Path_615" data-name="Path 615" d="M-74.649,220.285l-6.375,33.142,56.812-19.891-29.153-25.148Z" transform="translate(1.503 5.48)" fill="#322571"/>
                                        <path id="Path_616" data-name="Path 616" d="M338.89,481.433l11.255-58.955L293.273,442.19Z" transform="translate(13.602 12.401)" fill="#d79560" fill-rule="evenodd"/>
                                        <path id="Path_617" data-name="Path 617" d="M74.526,253.262l11.253-58.955L28.907,214.018Z" transform="translate(5.057 5.025)" fill="#758289" fill-rule="evenodd"/>
                                        <path id="Path_618" data-name="Path 618" d="M206.981,634.269l11.255-58.955-56.88,19.709Z" transform="translate(9.338 17.341)" fill="#df5a56" fill-rule="evenodd"/>
                                        <path id="Path_619" data-name="Path 619" d="M-53.8,381.512l6.56-34.363-21.588,7.482Z" transform="translate(1.898 9.966)" fill="#404586"/>
                                        <path id="Path_620" data-name="Path 620" d="M180.276,77.893,205.8,99.849,213.548,59.3Z" transform="translate(9.95 0.661)" fill="#55a9a3"/>
                                        <path id="Path_621" data-name="Path 621" d="M272.659,290.931l11.259-58.958-56.874,19.713Z" transform="translate(11.461 6.243)" fill="#56a991" fill-rule="evenodd"/>
                                        <path id="Path_622" data-name="Path 622" d="M405.114,671.933l11.261-58.951L359.5,632.69Z" transform="translate(15.743 18.559)" fill="#f2a151" fill-rule="evenodd"/>
                                        <path id="Path_623" data-name="Path 623" d="M140.753,443.769l11.252-58.958L95.139,404.521Z" transform="translate(7.198 11.183)" fill="#c5928b" fill-rule="evenodd"/>
                                        <path id="Path_624" data-name="Path 624" d="M427.034,557.513,438.3,498.56l-56.88,19.709Z" transform="translate(16.452 14.86)" fill="#f6b55b" fill-rule="evenodd"/>
                                        <path id="Path_625" data-name="Path 625" d="M162.676,329.343l11.252-58.955L117.058,290.1Z" transform="translate(7.906 7.484)" fill="#6bacaf" fill-rule="evenodd"/>
                                        <path id="Path_626" data-name="Path 626" d="M295.126,710.351,306.382,651.4,249.507,671.1Z" transform="translate(12.188 19.8)" fill="#e15553" fill-rule="evenodd"/>
                                        <path id="Path_627" data-name="Path 627" d="M30.764,482.183l11.259-58.959-56.88,19.711Z" transform="translate(3.642 12.425)" fill="#ce8b41" fill-rule="evenodd"/>
                                        <path id="Path_628" data-name="Path 628" d="M294.584,176.405l8.372-43.841-6.611-11.825-47.38,16.423Z" transform="translate(12.17 2.647)" fill="#5ac2b1"/>
                                        <path id="Path_629" data-name="Path 629" d="M99.314,655.488l7.977-41.759-26.237,9.089Z" transform="translate(6.742 18.583)" fill="#b63c28"/>
                                        <path id="Path_630" data-name="Path 630" d="M360.812,367.018l11.259-58.963-56.879,19.71Z" transform="translate(14.311 8.702)" fill="#74d0aa" fill-rule="evenodd"/>
                                        <path id="Path_631" data-name="Path 631" d="M86.544,129.9,95.3,137.43l2.653-13.9Z" transform="translate(6.92 2.737)" fill="#ba8240"/>
                                        <path id="Path_632" data-name="Path 632" d="M228.9,519.847,240.155,460.9,183.277,480.6Z" transform="translate(10.047 13.642)" fill="#e15a60" fill-rule="evenodd"/>
                                        <path id="Path_633" data-name="Path 633" d="M-35.464,291.678l11.258-58.957-56.875,19.713Z" transform="translate(1.502 6.267)" fill="#382f7d" fill-rule="evenodd"/>
                                        <path id="Path_634" data-name="Path 634" d="M337.438,481.413l11.229-58.953,45.567,39.351Z" transform="translate(15.03 12.4)" fill="#cca76a" fill-rule="evenodd"/>
                                        <path id="Path_635" data-name="Path 635" d="M73.071,253.249,84.3,194.288l45.578,39.357Z" transform="translate(6.484 5.025)" fill="#87885b" fill-rule="evenodd"/>
                                        <path id="Path_636" data-name="Path 636" d="M205.523,634.251l11.23-58.958,45.57,39.359Z" transform="translate(10.766 17.34)" fill="#df5757" fill-rule="evenodd"/>
                                        <path id="Path_637" data-name="Path 637" d="M-54.3,381.46l10.78,19.287,41.332-14.262-45.574-39.355Z" transform="translate(2.367 9.965)" fill="#4b5f9d"/>
                                        <path id="Path_638" data-name="Path 638" d="M212.7,59.587,204.983,100.1l56.8-19.6L227.8,51.147Z" transform="translate(10.748 0.398)" fill="#499ca2"/>
                                        <path id="Path_639" data-name="Path 639" d="M56.383,578.4l6.494-2.24L47.9,563.22Z" transform="translate(5.671 16.95)" fill="#b9452a"/>
                                        <path id="Path_640" data-name="Path 640" d="M271.211,290.916l11.225-58.961,45.574,39.359Z" transform="translate(12.889 6.242)" fill="#5fb599" fill-rule="evenodd"/>
                                        <path id="Path_641" data-name="Path 641" d="M403.659,671.923l17.925-6.188,33.032-18.465-39.722-34.307Z" transform="translate(17.17 18.558)" fill="#f4ae57"/>
                                        <path id="Path_642" data-name="Path 642" d="M139.3,443.755l11.229-58.965,45.567,39.359Z" transform="translate(8.625 11.182)" fill="#c9948b" fill-rule="evenodd"/>
                                        <path id="Path_643" data-name="Path 643" d="M425.579,557.5l11.237-58.959,45.57,39.355Z" transform="translate(17.879 14.859)" fill="#f7bb5f" fill-rule="evenodd"/>
                                        <path id="Path_644" data-name="Path 644" d="M161.216,329.325l11.234-58.957,45.568,39.356Z" transform="translate(9.334 7.484)" fill="#5db7a8" fill-rule="evenodd"/>
                                        <path id="Path_645" data-name="Path 645" d="M293.676,710.335,304.9,651.376l45.568,39.355Z" transform="translate(13.615 19.8)" fill="#e46151" fill-rule="evenodd"/>
                                        <path id="Path_646" data-name="Path 646" d="M29.312,482.161,40.54,423.206l45.57,39.353Z" transform="translate(5.07 12.424)" fill="#b79367" fill-rule="evenodd"/>
                                        <path id="Path_647" data-name="Path 647" d="M293.133,176.024l27.572-9.519L301.491,132.13Z" transform="translate(13.598 3.015)" fill="#5fbaa4"/>
                                        <path id="Path_648" data-name="Path 648" d="M98.715,655.438l7.542,13.493,45.978-15.866-45.568-39.357Z" transform="translate(7.313 18.582)" fill="#c65338"/>
                                        <path id="Path_649" data-name="Path 649" d="M359.353,367l11.237-58.966L416.158,347.4Z" transform="translate(15.738 8.701)" fill="#70cdaa" fill-rule="evenodd"/>
                                        <path id="Path_650" data-name="Path 650" d="M97.631,124.2,95,138.062l56.8-19.605-17.252-14.894Z" transform="translate(7.193 2.092)" fill="#c08943"/>
                                        <path id="Path_651" data-name="Path 651" d="M227.447,519.831l11.229-58.955,45.572,39.353Z" transform="translate(11.474 13.642)" fill="#e25b64" fill-rule="evenodd"/>
                                        <path id="Path_652" data-name="Path 652" d="M-36.914,291.662l11.227-58.96,45.57,39.353Z" transform="translate(2.929 6.266)" fill="#3d3987" fill-rule="evenodd"/>
                                        <path id="Path_653" data-name="Path 653" d="M137.154,723l2.662-13.989-8.777,3.048Z" transform="translate(8.358 21.663)" fill="#c35d1f"/>
                                        <path id="Path_654" data-name="Path 654" d="M405.142,403.333l-56.858,19.761L393.9,462.458Z" transform="translate(15.381 11.782)" fill="#d6bb73" fill-rule="evenodd"/>
                                        <path id="Path_655" data-name="Path 655" d="M140.776,175.171,83.92,194.922l45.609,39.366Z" transform="translate(6.835 4.407)" fill="#82925c" fill-rule="evenodd"/>
                                        <path id="Path_656" data-name="Path 656" d="M273.228,556.169l-56.855,19.757,45.611,39.363Z" transform="translate(11.117 16.722)" fill="#dd5659" fill-rule="evenodd"/>
                                        <path id="Path_657" data-name="Path 657" d="M8.865,328l-56.851,19.764,45.609,39.359Z" transform="translate(2.571 9.347)" fill="#537db2" fill-rule="evenodd"/>
                                        <path id="Path_658" data-name="Path 658" d="M227.063,51.559l34.015,29.358,3.108-16.334L249.8,38.848Z" transform="translate(11.462 0)" fill="#407b8b"/>
                                        <path id="Path_659" data-name="Path 659" d="M48.465,564.705l14.97,12.922L74.676,518.5,31.1,533.641Z" transform="translate(5.128 15.505)" fill="#c9603c"/>
                                        <path id="Path_660" data-name="Path 660" d="M338.911,212.83l-56.85,19.757,45.608,39.366Z" transform="translate(13.24 5.624)" fill="#6ecaa6" fill-rule="evenodd"/>
                                        <path id="Path_661" data-name="Path 661" d="M454.253,647.9l7.648-4.274,9.468-49.79L414.51,613.6Z" transform="translate(17.521 17.94)" fill="#f7b95e"/>
                                        <path id="Path_662" data-name="Path 662" d="M207,365.673l-56.85,19.75,45.608,39.368Z" transform="translate(8.976 10.564)" fill="#d5a08d" fill-rule="evenodd"/>
                                        <g id="Group_19" data-name="Group 19" transform="translate(-127.531 38.848)">
                                            <g id="Mask_Group_3" data-name="Mask Group 3" transform="translate(0)" clip-path="url(#clip-path-2)">
                                                <path id="Path_663" data-name="Path 663" d="M186.569,799.524l-13.955,4.853,2.074,1.788Z" transform="translate(137.233 -14.259)" fill="#730a13" fill-rule="evenodd"/>
                                            </g>
                                        </g>
                                        <path id="Path_664" data-name="Path 664" d="M493.291,479.417,436.43,499.172l45.614,39.361Z" transform="translate(18.23 14.241)" fill="#f8be60" fill-rule="evenodd"/>
                                        <path id="Path_665" data-name="Path 665" d="M228.923,251.245,172.067,271,217.68,310.37Z" transform="translate(9.684 6.866)" fill="#57b29a" fill-rule="evenodd"/>
                                        <path id="Path_666" data-name="Path 666" d="M361.379,632.255,304.527,652.01l45.608,39.363Z" transform="translate(13.966 19.182)" fill="#e9784b" fill-rule="evenodd"/>
                                        <path id="Path_667" data-name="Path 667" d="M97.016,404.081,40.162,423.834,85.77,463.2Z" transform="translate(5.421 11.806)" fill="#bb9e87" fill-rule="evenodd"/>
                                        <path id="Path_668" data-name="Path 668" d="M163.244,594.589l-56.861,19.749L152,653.706Z" transform="translate(7.561 17.964)" fill="#d7654a" fill-rule="evenodd"/>
                                        <path id="Path_669" data-name="Path 669" d="M415.817,347.693l1.7-8.931L395.58,299.506,370.2,308.322Z" transform="translate(16.089 8.426)" fill="#6aaf91"/>
                                        <path id="Path_670" data-name="Path 670" d="M133.294,103.965l17.272,14.909,5.229-27.484Z" transform="translate(8.431 1.698)" fill="#bc904b"/>
                                        <path id="Path_671" data-name="Path 671" d="M295.151,441.751,238.3,461.5l45.609,39.365Z" transform="translate(11.825 13.024)" fill="#e26663" fill-rule="evenodd"/>
                                        <path id="Path_672" data-name="Path 672" d="M30.787,213.577l-56.851,19.757L19.544,272.7Z" transform="translate(3.28 5.648)" fill="#464d95" fill-rule="evenodd"/>
                                        <path id="Path_673" data-name="Path 673" d="M131.414,712.633l8.779-3.057-20.231-17.427Z" transform="translate(8 21.118)" fill="#b84120"/>
                                        <path id="Path_674" data-name="Path 674" d="M405.16,404.59l-56.869,19.787,11.188-59.136Z" transform="translate(15.381 10.55)" fill="#81d2aa" fill-rule="evenodd"/>
                                        <path id="Path_675" data-name="Path 675" d="M140.79,176.42,83.931,196.208l11.186-59.147Z" transform="translate(6.835 3.175)" fill="#b38337" fill-rule="evenodd"/>
                                        <path id="Path_676" data-name="Path 676" d="M273.248,557.429l-56.865,19.786,11.188-59.149Z" transform="translate(11.117 15.49)" fill="#dd5259" fill-rule="evenodd"/>
                                        <path id="Path_677" data-name="Path 677" d="M8.885,329.254-47.98,349.045-36.8,289.9Z" transform="translate(2.571 8.115)" fill="#41488f" fill-rule="evenodd"/>
                                        <path id="Path_678" data-name="Path 678" d="M287.773,739.535l25.349-14.168-19.5-16.8Z" transform="translate(13.425 21.648)" fill="#de5153"/>
                                        <path id="Path_679" data-name="Path 679" d="M22.135,518.313l9.283,16.6,43.569-15.156L29.308,480.405Z" transform="translate(4.838 14.273)" fill="#db8134"/>
                                        <path id="Path_680" data-name="Path 680" d="M338.933,214.084,282.064,233.87l11.188-59.139Z" transform="translate(13.24 4.392)" fill="#60bfa7" fill-rule="evenodd"/>
                                        <path id="Path_681" data-name="Path 681" d="M471.389,595.095,414.52,614.882l11.186-59.149Z" transform="translate(17.522 16.708)" fill="#f7b85d" fill-rule="evenodd"/>
                                        <path id="Path_682" data-name="Path 682" d="M207.02,366.927l-56.864,19.781,11.189-59.143Z" transform="translate(8.976 9.333)" fill="#94aaa6" fill-rule="evenodd"/>
                                        <path id="Path_683" data-name="Path 683" d="M175.153,792.3l4.671,8.357,40.152-22.443-36.251-31.238Z" transform="translate(9.784 22.89)" fill="#a6331b"/>
                                        <path id="Path_684" data-name="Path 684" d="M493.308,480.673,436.444,500.46l11.182-59.149Z" transform="translate(18.23 13.009)" fill="#f6be62" fill-rule="evenodd"/>
                                        <path id="Path_685" data-name="Path 685" d="M228.943,252.5,172.08,272.285l11.188-59.142Z" transform="translate(9.685 5.634)" fill="#3b9797" fill-rule="evenodd"/>
                                        <path id="Path_686" data-name="Path 686" d="M361.395,633.5,304.537,653.3l11.178-59.147Z" transform="translate(13.966 17.95)" fill="#e97c56" fill-rule="evenodd"/>
                                        <path id="Path_687" data-name="Path 687" d="M97.035,405.338,40.166,425.124l11.186-59.14Z" transform="translate(5.421 10.574)" fill="#6895be" fill-rule="evenodd"/>
                                        <path id="Path_688" data-name="Path 688" d="M361.395,633.5,304.537,653.3l11.178-59.147Z" transform="translate(13.966 17.95)" fill="#e97c56" fill-rule="evenodd"/>
                                        <path id="Path_689" data-name="Path 689" d="M97.035,405.338,40.166,425.124l11.186-59.14Z" transform="translate(5.421 10.574)" fill="#6895be" fill-rule="evenodd"/>
                                        <path id="Path_690" data-name="Path 690" d="M163.262,595.839,106.395,615.63l11.187-59.147Z" transform="translate(7.562 16.732)" fill="#db6d4f" fill-rule="evenodd"/>
                                        <path id="Path_691" data-name="Path 691" d="M370.214,309.373l25.388-8.834-17.721-31.7Z" transform="translate(16.089 7.434)" fill="#59a28a"/>
                                        <path id="Path_692" data-name="Path 692" d="M295.171,443.007l-56.864,19.784,11.187-59.151Z" transform="translate(11.826 11.792)" fill="#cb9a8d" fill-rule="evenodd"/>
                                        <path id="Path_693" data-name="Path 693" d="M-17.3,188.084l-8.76,46.319,56.87-19.79L-6.8,182.212Z" transform="translate(3.28 4.634)" fill="#413e88"/>
                                        <path id="Path_694" data-name="Path 694" d="M161.815,594.567,196,692.894l-45.534-39.289Z" transform="translate(8.986 17.963)" fill="#da614e" fill-rule="evenodd"/>
                                        <path id="Path_695" data-name="Path 695" d="M109.752,674.377l87.683,16.664-45.527-39.287-45.84,16.033Z" transform="translate(7.551 19.812)" fill="#d26232"/>
                                        <path id="Path_696" data-name="Path 696" d="M442.766,381.8l-13.688-24.485-13-11.227-56.749,19.86Z" transform="translate(15.737 9.931)" fill="#a1cfa6"/>
                                        <path id="Path_697" data-name="Path 697" d="M155.177,91.681l-5.253,27.333,45.527,39.3L169.505,83.674Z" transform="translate(8.969 1.449)" fill="#9d9b66"/>
                                        <path id="Path_698" data-name="Path 698" d="M94.961,137.764l102.271,19.443-45.532-39.3Z" transform="translate(7.192 2.556)" fill="#b6924a" fill-rule="evenodd"/>
                                        <path id="Path_699" data-name="Path 699" d="M293.727,441.729l34.179,98.331L282.38,500.767Z" transform="translate(13.25 13.023)" fill="#e87958" fill-rule="evenodd"/>
                                        <path id="Path_700" data-name="Path 700" d="M227.417,518.773l102.265,19.439-45.526-39.293Z" transform="translate(11.474 14.872)" fill="#e56657" fill-rule="evenodd"/>
                                        <path id="Path_701" data-name="Path 701" d="M29.359,213.558l34.189,98.333-45.53-39.3Z" transform="translate(4.705 5.647)" fill="#566faa" fill-rule="evenodd"/>
                                        <path id="Path_702" data-name="Path 702" d="M-36.945,290.6l102.27,19.444-45.53-39.3Z" transform="translate(2.928 7.496)" fill="#5878af" fill-rule="evenodd"/>
                                        <path id="Path_703" data-name="Path 703" d="M491.86,479.4l34.184,98.333-45.529-39.3Z" transform="translate(19.655 14.241)" fill="#f7bb58" fill-rule="evenodd"/>
                                        <path id="Path_704" data-name="Path 704" d="M425.549,556.437l102.273,19.439-45.531-39.291Z" transform="translate(17.878 16.089)" fill="#f8bf61" fill-rule="evenodd"/>
                                        <path id="Path_705" data-name="Path 705" d="M227.5,251.226l34.185,98.343L216.15,310.26Z" transform="translate(11.109 6.865)" fill="#5fb798" fill-rule="evenodd"/>
                                        <path id="Path_706" data-name="Path 706" d="M161.188,328.268l102.269,19.45-45.529-39.305Z" transform="translate(9.333 8.714)" fill="#81caa6" fill-rule="evenodd"/>
                                        <path id="Path_707" data-name="Path 707" d="M348.611,691.269l10.99,9.485,20.237-11.313-19.883-57.209Z" transform="translate(15.391 19.181)" fill="#eb824d"/>
                                        <path id="Path_708" data-name="Path 708" d="M330.35,716.251l31.028-17.346-10.99-9.484-56.747,19.846Z" transform="translate(13.614 21.029)" fill="#e4644c"/>
                                        <path id="Path_709" data-name="Path 709" d="M95.584,404.061,129.777,502.4,84.246,463.1Z" transform="translate(6.846 11.805)" fill="#d28a71" fill-rule="evenodd"/>
                                        <path id="Path_710" data-name="Path 710" d="M29.275,481.105l102.278,19.443-45.531-39.3Z" transform="translate(5.069 13.654)" fill="#da8055" fill-rule="evenodd"/>
                                        <path id="Path_711" data-name="Path 711" d="M330.046,182.136l-9.329-16.69-27.623,9.668Z" transform="translate(13.596 4.092)" fill="#6cc3a0"/>
                                        <path id="Path_712" data-name="Path 712" d="M491.86,479.4l34.184,98.333-45.529-39.3Z" transform="translate(19.655 14.241)" fill="#f7bb58" fill-rule="evenodd"/>
                                        <path id="Path_713" data-name="Path 713" d="M425.549,556.437l102.273,19.439-45.531-39.291Z" transform="translate(17.878 16.089)" fill="#f8bf61" fill-rule="evenodd"/>
                                        <path id="Path_714" data-name="Path 714" d="M227.5,251.226l34.185,98.343L216.15,310.26Z" transform="translate(11.109 6.865)" fill="#5fb798" fill-rule="evenodd"/>
                                        <path id="Path_715" data-name="Path 715" d="M161.188,328.268l102.269,19.45-45.529-39.305Z" transform="translate(9.333 8.714)" fill="#81caa6" fill-rule="evenodd"/>
                                        <path id="Path_716" data-name="Path 716" d="M348.611,691.269l10.99,9.485,20.237-11.313-19.883-57.209Z" transform="translate(15.391 19.181)" fill="#eb824d"/>
                                        <path id="Path_717" data-name="Path 717" d="M330.35,716.251l31.028-17.346-10.99-9.484-56.747,19.846Z" transform="translate(13.614 21.029)" fill="#e4644c"/>
                                        <path id="Path_718" data-name="Path 718" d="M95.584,404.061,129.777,502.4,84.246,463.1Z" transform="translate(6.846 11.805)" fill="#d28a71" fill-rule="evenodd"/>
                                        <path id="Path_719" data-name="Path 719" d="M29.275,481.105l102.278,19.443-45.531-39.3Z" transform="translate(5.069 13.654)" fill="#da8055" fill-rule="evenodd"/>
                                        <path id="Path_720" data-name="Path 720" d="M330.046,182.136l-9.329-16.69-27.623,9.668Z" transform="translate(13.596 4.092)" fill="#6cc3a0"/>
                                        <path id="Path_721" data-name="Path 721" d="M120.279,692.714l20.2,17.461,56.838-19.842-87.683-16.664Z" transform="translate(7.666 20.52)" fill="#cb592f"/>
                                        <path id="Path_722" data-name="Path 722" d="M136.943,723.584l11.932,21.344,47.561-55.117L139.6,709.654Z" transform="translate(8.549 21.042)" fill="#d06624"/>
                                        <path id="Path_723" data-name="Path 723" d="M404.757,404.588l42.755-14.923-4.746-8.493-83.442-15.848Z" transform="translate(15.737 10.553)" fill="#87d2ac"/>
                                        <path id="Path_724" data-name="Path 724" d="M392.438,462.882l57.875-67.056-3.869-6.922-42.759,14.921Z" transform="translate(16.808 11.315)" fill="#dcc781"/>
                                        <path id="Path_725" data-name="Path 725" d="M94.961,137.143l102.271,19.443-56.838,19.834Z" transform="translate(7.192 3.177)" fill="#c18c3e" fill-rule="evenodd"/>
                                        <path id="Path_726" data-name="Path 726" d="M128.077,234.86l68.085-78.883-56.836,19.834Z" transform="translate(8.262 3.786)" fill="#65997b" fill-rule="evenodd"/>
                                        <path id="Path_727" data-name="Path 727" d="M227.415,518.147,329.683,537.59l-56.839,19.834Z" transform="translate(11.473 15.493)" fill="#e1585a" fill-rule="evenodd"/>
                                        <path id="Path_728" data-name="Path 728" d="M260.527,615.874l68.085-78.892-56.835,19.83Z" transform="translate(12.544 16.102)" fill="#e36955" fill-rule="evenodd"/>
                                        <path id="Path_729" data-name="Path 729" d="M-36.945,289.977l102.27,19.444L8.482,329.256Z" transform="translate(2.928 8.118)" fill="#49619e" fill-rule="evenodd"/>
                                        <path id="Path_730" data-name="Path 730" d="M-3.836,387.7,64.254,308.81,7.407,328.641Z" transform="translate(3.998 8.726)" fill="#5686bb" fill-rule="evenodd"/>
                                        <path id="Path_731" data-name="Path 731" d="M425.549,555.815l102.273,19.439-56.84,19.838Z" transform="translate(17.878 16.711)" fill="#f8bf61" fill-rule="evenodd"/>
                                        <path id="Path_732" data-name="Path 732" d="M460.373,644.269l12.041-6.73L526.7,574.646l-56.842,19.836Z" transform="translate(19.004 17.319)" fill="#f5bc5f"/>
                                        <path id="Path_733" data-name="Path 733" d="M161.188,327.646,263.457,347.1l-56.838,19.828Z" transform="translate(9.333 9.335)" fill="#85c7a8" fill-rule="evenodd"/>
                                        <path id="Path_734" data-name="Path 734" d="M194.3,425.365l68.091-78.876-56.84,19.825Z" transform="translate(10.403 9.944)" fill="#b5c5a6" fill-rule="evenodd"/>
                                        <path id="Path_735" data-name="Path 735" d="M312.957,725.348l17.393-9.718-36.709-6.984Z" transform="translate(13.614 21.651)" fill="#e05751"/>
                                        <path id="Path_736" data-name="Path 736" d="M29.275,480.483l102.273,19.435L74.709,519.76Z" transform="translate(5.069 14.276)" fill="#d88750" fill-rule="evenodd"/>
                                        <path id="Path_737" data-name="Path 737" d="M62.391,578.2l68.087-78.892L73.636,519.15Z" transform="translate(6.139 14.884)" fill="#d9734d" fill-rule="evenodd"/>
                                        <path id="Path_738" data-name="Path 738" d="M338.53,214.087l7.985-2.787-16.469-29.467L293.1,174.81Z" transform="translate(13.597 4.395)" fill="#6cc6a4"/>
                                        <path id="Path_739" data-name="Path 739" d="M326.212,271.994l32.652-37.83-13.421-24.011-7.986,2.786Z" transform="translate(14.667 5.537)" fill="#69c1a0"/>
                                        <path id="Path_740" data-name="Path 740" d="M425.549,555.815l102.273,19.439-56.84,19.838Z" transform="translate(17.878 16.711)" fill="#f8bf61" fill-rule="evenodd"/>
                                        <path id="Path_741" data-name="Path 741" d="M460.373,644.269l12.041-6.73L526.7,574.646l-56.842,19.836Z" transform="translate(19.004 17.319)" fill="#f5bc5f"/>
                                        <path id="Path_742" data-name="Path 742" d="M161.188,327.646,263.457,347.1l-56.838,19.828Z" transform="translate(9.333 9.335)" fill="#85c7a8" fill-rule="evenodd"/>
                                        <path id="Path_743" data-name="Path 743" d="M194.3,425.365l68.091-78.876-56.84,19.825Z" transform="translate(10.403 9.944)" fill="#b5c5a6" fill-rule="evenodd"/>
                                        <path id="Path_744" data-name="Path 744" d="M312.957,725.348l17.393-9.718-36.709-6.984Z" transform="translate(13.614 21.651)" fill="#e05751"/>
                                        <path id="Path_745" data-name="Path 745" d="M29.275,480.483l102.273,19.435L74.709,519.76Z" transform="translate(5.069 14.276)" fill="#d88750" fill-rule="evenodd"/>
                                        <path id="Path_746" data-name="Path 746" d="M62.391,578.2l68.087-78.892L73.636,519.15Z" transform="translate(6.139 14.884)" fill="#d9734d" fill-rule="evenodd"/>
                                        <path id="Path_747" data-name="Path 747" d="M338.53,214.087l7.985-2.787-16.469-29.467L293.1,174.81Z" transform="translate(13.597 4.395)" fill="#6cc6a4"/>
                                        <path id="Path_748" data-name="Path 748" d="M326.212,271.994l32.652-37.83-13.421-24.011-7.986,2.786Z" transform="translate(14.667 5.537)" fill="#69c1a0"/>
                                        <path id="Path_749" data-name="Path 749" d="M148.5,744.928l7.782,13.924,28.466-9.908,11.315-59.129Z" transform="translate(8.923 21.042)" fill="#cf6325"/>
                                        <path id="Path_750" data-name="Path 750" d="M183.615,748.944l36.11,31.113,5.5-3.075-30.3-87.167Z" transform="translate(10.058 21.042)" fill="#bf4329"/>
                                        <path id="Path_751" data-name="Path 751" d="M392.438,462.665l56.774-19.757,7.023-36.7-5.922-10.6Z" transform="translate(16.808 11.532)" fill="#e0c77f"/>
                                        <path id="Path_752" data-name="Path 752" d="M447.434,442.576l45.495,39.2-6.5-18.7-31.972-57.2Z" transform="translate(18.585 11.864)" fill="#f2c26c"/>
                                        <path id="Path_753" data-name="Path 753" d="M128.071,234.863l68.091-78.886L184.851,215.1Z" transform="translate(8.262 3.786)" fill="#5f9980" fill-rule="evenodd"/>
                                        <path id="Path_754" data-name="Path 754" d="M228.568,254.3l-34.184-98.328L183.075,215.1Z" transform="translate(10.04 3.786)" fill="#388d8f" fill-rule="evenodd"/>
                                        <path id="Path_755" data-name="Path 755" d="M260.527,615.874l68.085-78.892L317.3,596.106Z" transform="translate(12.544 16.102)" fill="#e56f54" fill-rule="evenodd"/>
                                        <path id="Path_756" data-name="Path 756" d="M361.026,635.31l-34.191-98.329-11.314,59.127Z" transform="translate(14.321 16.102)" fill="#ee914f" fill-rule="evenodd"/>
                                        <path id="Path_757" data-name="Path 757" d="M-3.836,387.7,64.254,308.81,52.937,367.948Z" transform="translate(3.998 8.726)" fill="#5788bd" fill-rule="evenodd"/>
                                        <path id="Path_758" data-name="Path 758" d="M96.653,407.14,62.476,308.812,51.161,367.948Z" transform="translate(5.776 8.726)" fill="#668ebc" fill-rule="evenodd"/>
                                        <path id="Path_759" data-name="Path 759" d="M472.038,637.539l47.309-26.445,6.978-36.448Z" transform="translate(19.381 17.319)" fill="#f3ba5e"/>
                                        <path id="Path_760" data-name="Path 760" d="M517.866,611.093l16.445-9.19-9.47-27.258Z" transform="translate(20.862 17.319)" fill="#edb357"/>
                                        <path id="Path_761" data-name="Path 761" d="M194.3,425.365l68.088-78.883L251.08,405.61Z" transform="translate(10.403 9.944)" fill="#abcaa8" fill-rule="evenodd"/>
                                        <path id="Path_762" data-name="Path 762" d="M294.8,444.808l-34.188-98.324L249.3,405.61Z" transform="translate(12.181 9.944)" fill="#9bc0a0" fill-rule="evenodd"/>
                                        <path id="Path_763" data-name="Path 763" d="M-7.388,182.59l37.565,32.368-15.53-44.683Z" transform="translate(3.884 4.248)" fill="#494990"/>
                                        <path id="Path_764" data-name="Path 764" d="M62.391,578.2l68.087-78.892-11.315,59.135Z" transform="translate(6.139 14.884)" fill="#da724f" fill-rule="evenodd"/>
                                        <path id="Path_765" data-name="Path 765" d="M162.884,597.646,128.7,499.313l-11.314,59.135Z" transform="translate(7.917 14.884)" fill="#df6555" fill-rule="evenodd"/>
                                        <path id="Path_766" data-name="Path 766" d="M326.212,271.243l45.037-15.671-12.384-22.159Z" transform="translate(14.667 6.289)" fill="#66bc9c"/>
                                        <path id="Path_767" data-name="Path 767" d="M224.875,776.98l6.751-3.774,8.479-44.091-45.531-39.3Z" transform="translate(10.412 21.042)" fill="#cb463a"/>
                                        <path id="Path_768" data-name="Path 768" d="M296.844,709.254,194.567,689.815l45.538,39.3Z" transform="translate(10.412 21.042)" fill="#db504f" fill-rule="evenodd"/>
                                        <path id="Path_769" data-name="Path 769" d="M6.423,489.017l23.851-8.347L-1.632,474.6Z" transform="translate(4.07 14.086)" fill="#c58445"/>
                                        <path id="Path_770" data-name="Path 770" d="M228.213,254.3l-34.184-98.328,45.525,39.293Z" transform="translate(10.394 3.786)" fill="#378c8e" fill-rule="evenodd"/>
                                        <path id="Path_771" data-name="Path 771" d="M296.3,175.419,194.027,155.977l45.529,39.292Z" transform="translate(10.394 3.786)" fill="#40a3a4" fill-rule="evenodd"/>
                                        <path id="Path_772" data-name="Path 772" d="M360.665,635.312,326.48,536.981l45.531,39.295Z" transform="translate(14.676 16.102)" fill="#f19a4c" fill-rule="evenodd"/>
                                        <path id="Path_773" data-name="Path 773" d="M428.752,556.424,326.48,536.981l45.531,39.295Z" transform="translate(14.676 16.102)" fill="#f19e4c" fill-rule="evenodd"/>
                                        <path id="Path_774" data-name="Path 774" d="M96.3,407.14,62.122,308.812l45.527,39.3Z" transform="translate(6.13 8.726)" fill="#7090b8" fill-rule="evenodd"/>
                                        <path id="Path_775" data-name="Path 775" d="M164.39,328.255,62.122,308.81l45.527,39.3Z" transform="translate(6.13 8.726)" fill="#7697b8" fill-rule="evenodd"/>
                                        <path id="Path_776" data-name="Path 776" d="M534.092,601.9l13.414-7.5-22.889-19.751Z" transform="translate(21.08 17.32)" fill="#e7aa4c"/>
                                        <path id="Path_777" data-name="Path 777" d="M294.442,444.808l-34.186-98.319,45.527,39.284Z" transform="translate(12.535 9.944)" fill="#81c7a1" fill-rule="evenodd"/>
                                        <path id="Path_778" data-name="Path 778" d="M362.523,365.924,260.255,346.483l45.528,39.29Z" transform="translate(12.535 9.944)" fill="#73c9a1" fill-rule="evenodd"/>
                                        <path id="Path_779" data-name="Path 779" d="M13.956,170.738l15.536,44.68,11.344-59.032-.472-.41Z" transform="translate(4.574 3.786)" fill="#565482"/>
                                        <path id="Path_780" data-name="Path 780" d="M39.537,156.685l.472.41,56.743-19.852L80.015,134.06Z" transform="translate(5.4 3.078)" fill="#796864"/>
                                        <path id="Path_781" data-name="Path 781" d="M162.53,597.646l-34.181-98.333,45.528,39.3Z" transform="translate(8.271 14.884)" fill="#df5e56" fill-rule="evenodd"/>
                                        <path id="Path_782" data-name="Path 782" d="M230.618,518.756,128.346,499.31l45.532,39.3Z" transform="translate(8.271 14.884)" fill="#e15f5c" fill-rule="evenodd"/>
                                        <path id="Path_783" data-name="Path 783" d="M-92.353,312.3l.572-2.97-4.312-3.72Z" transform="translate(1.016 8.623)" fill="#28155e"/>
                                        <path id="Path_784" data-name="Path 784" d="M-95.55,306.577l4.312,3.72L-34.5,290.446l-78.4-14.905Z" transform="translate(0.473 7.651)" fill="#28145f"/>
                                        <path id="Path_785" data-name="Path 785" d="M296.844,709.875,194.572,690.436l56.84-19.832Z" transform="translate(10.412 20.421)" fill="#dc4f50" fill-rule="evenodd"/>
                                        <path id="Path_786" data-name="Path 786" d="M262.659,613.4l-68.092,78.882,56.845-19.83Z" transform="translate(10.412 18.572)" fill="#e05655" fill-rule="evenodd"/>
                                        <path id="Path_787" data-name="Path 787" d="M-1.072,475.648l31.9,6.067L-14.6,442.435l-4.217,1.476Z" transform="translate(3.514 13.046)" fill="#d08439"/>
                                        <path id="Path_788" data-name="Path 788" d="M-32.818,419.893l14.457,25.867,4.217-1.474L-2.9,385.229Z" transform="translate(3.062 11.197)" fill="#748693"/>
                                        <path id="Path_789" data-name="Path 789" d="M296.3,176.04,194.027,156.6l56.843-19.837Z" transform="translate(10.394 3.165)" fill="#44a7a5" fill-rule="evenodd"/>
                                        <path id="Path_790" data-name="Path 790" d="M262.116,79.556l-68.086,78.891,56.839-19.833Z" transform="translate(10.394 1.316)" fill="#4eb7b2" fill-rule="evenodd"/>
                                        <path id="Path_791" data-name="Path 791" d="M428.752,557.045,326.48,537.6l56.842-19.84Z" transform="translate(14.676 15.481)" fill="#f3a450" fill-rule="evenodd"/>
                                        <path id="Path_792" data-name="Path 792" d="M394.57,460.565l-68.09,78.886,56.846-19.834Z" transform="translate(14.676 13.632)" fill="#f09f4e" fill-rule="evenodd"/>
                                        <path id="Path_793" data-name="Path 793" d="M164.39,328.876,62.122,309.431,118.957,289.6Z" transform="translate(6.13 8.105)" fill="#7798b5" fill-rule="evenodd"/>
                                        <path id="Path_794" data-name="Path 794" d="M130.2,232.393l-68.08,78.89,56.836-19.833Z" transform="translate(6.13 6.256)" fill="#6ea1bd" fill-rule="evenodd"/>
                                        <path id="Path_795" data-name="Path 795" d="M296.844,709.875,194.572,690.436l56.84-19.832Z" transform="translate(10.412 20.421)" fill="#dc4f50" fill-rule="evenodd"/>
                                        <path id="Path_796" data-name="Path 796" d="M262.659,613.4l-68.092,78.882,56.845-19.83Z" transform="translate(10.412 18.572)" fill="#e05655" fill-rule="evenodd"/>
                                        <path id="Path_797" data-name="Path 797" d="M-1.072,475.648l31.9,6.067L-14.6,442.435l-4.217,1.476Z" transform="translate(3.514 13.046)" fill="#d08439"/>
                                        <path id="Path_798" data-name="Path 798" d="M-32.818,419.893l14.457,25.867,4.217-1.474L-2.9,385.229Z" transform="translate(3.062 11.197)" fill="#748693"/>
                                        <path id="Path_799" data-name="Path 799" d="M296.3,176.04,194.027,156.6l56.843-19.837Z" transform="translate(10.394 3.165)" fill="#44a7a5" fill-rule="evenodd"/>
                                        <path id="Path_800" data-name="Path 800" d="M262.116,79.556l-68.086,78.891,56.839-19.833Z" transform="translate(10.394 1.316)" fill="#4eb7b2" fill-rule="evenodd"/>
                                        <path id="Path_801" data-name="Path 801" d="M428.752,557.045,326.48,537.6l56.842-19.84Z" transform="translate(14.676 15.481)" fill="#f3a450" fill-rule="evenodd"/>
                                        <path id="Path_802" data-name="Path 802" d="M394.57,460.565l-68.09,78.886,56.846-19.834Z" transform="translate(14.676 13.632)" fill="#f09f4e" fill-rule="evenodd"/>
                                        <path id="Path_803" data-name="Path 803" d="M164.39,328.876,62.122,309.431,118.957,289.6Z" transform="translate(6.13 8.105)" fill="#7798b5" fill-rule="evenodd"/>
                                        <path id="Path_804" data-name="Path 804" d="M130.2,232.393l-68.08,78.89,56.836-19.833Z" transform="translate(6.13 6.256)" fill="#6ea1bd" fill-rule="evenodd"/>
                                        <path id="Path_805" data-name="Path 805" d="M57.842,581.179l2.729,4.881,1.965-10.329Z" transform="translate(5.992 17.354)" fill="#b23624"/>
                                        <path id="Path_806" data-name="Path 806" d="M362.526,366.553,260.258,347.11l56.84-19.844Z" transform="translate(12.535 9.323)" fill="#73c8a0" fill-rule="evenodd"/>
                                        <path id="Path_807" data-name="Path 807" d="M328.344,270.059l-68.086,78.9,56.84-19.843Z" transform="translate(12.535 7.474)" fill="#6bc19b" fill-rule="evenodd"/>
                                        <path id="Path_808" data-name="Path 808" d="M78.748,134.2l16.736,3.183-8.8-7.615Z" transform="translate(6.668 2.939)" fill="#a67b48"/>
                                        <path id="Path_809" data-name="Path 809" d="M230.618,519.377,128.346,499.93l56.842-19.824Z" transform="translate(8.271 14.263)" fill="#e15e5d" fill-rule="evenodd"/>
                                        <path id="Path_810" data-name="Path 810" d="M196.431,422.9l-68.08,78.892,56.835-19.832Z" transform="translate(8.271 12.414)" fill="#e27069" fill-rule="evenodd"/>
                                        <path id="Path_811" data-name="Path 811" d="M-112.709,276.3l78.4,14.905-45.428-39.278-38.991,13.607Z" transform="translate(0.285 6.888)" fill="#2d1c69"/>
                                        <path id="Path_812" data-name="Path 812" d="M-107.091,238.812-123.478,257.8l4.9,8.773,38.991-13.607,6.293-33.047Z" transform="translate(0.131 5.853)" fill="#28145f"/>
                                        <path id="Path_813" data-name="Path 813" d="M262.659,613.4l-68.085,78.88,11.311-59.129Z" transform="translate(10.412 18.572)" fill="#e05655" fill-rule="evenodd"/>
                                        <path id="Path_814" data-name="Path 814" d="M161.46,594.567l34.186,98.327,11.31-59.131Z" transform="translate(9.341 17.963)" fill="#de5d53" fill-rule="evenodd"/>
                                        <path id="Path_815" data-name="Path 815" d="M-32.463,419.893l29.918-34.664-41.268,14.361Z" transform="translate(2.706 11.197)" fill="#707f8f"/>
                                        <path id="Path_816" data-name="Path 816" d="M262.116,79.556l-68.086,78.891,11.315-59.129Z" transform="translate(10.394 1.316)" fill="#53b5ad" fill-rule="evenodd"/>
                                        <path id="Path_817" data-name="Path 817" d="M168.892,83.878l25.946,74.642,11.318-59.131L180.577,77.347Z" transform="translate(9.582 1.244)" fill="#78a889"/>
                                        <path id="Path_818" data-name="Path 818" d="M262.659,613.4l-68.085,78.88,11.311-59.129Z" transform="translate(10.412 18.572)" fill="#e05655" fill-rule="evenodd"/>
                                        <path id="Path_819" data-name="Path 819" d="M161.46,594.567l34.186,98.327,11.31-59.131Z" transform="translate(9.341 17.963)" fill="#de5d53" fill-rule="evenodd"/>
                                        <path id="Path_820" data-name="Path 820" d="M-32.463,419.893l29.918-34.664-41.268,14.361Z" transform="translate(2.706 11.197)" fill="#707f8f"/>
                                        <path id="Path_821" data-name="Path 821" d="M262.116,79.556l-68.086,78.891,11.315-59.129Z" transform="translate(10.394 1.316)" fill="#53b5ad" fill-rule="evenodd"/>
                                        <path id="Path_822" data-name="Path 822" d="M168.892,83.878l25.946,74.642,11.318-59.131L180.577,77.347Z" transform="translate(9.582 1.244)" fill="#78a889"/>
                                        <path id="Path_823" data-name="Path 823" d="M394.57,460.565l-68.09,78.886L337.8,480.321Z" transform="translate(14.676 13.632)" fill="#f09c4e" fill-rule="evenodd"/>
                                        <path id="Path_824" data-name="Path 824" d="M293.372,441.729l34.182,98.337,11.312-59.137Z" transform="translate(13.605 13.023)" fill="#e78857" fill-rule="evenodd"/>
                                        <path id="Path_825" data-name="Path 825" d="M130.209,232.39,62.122,311.282l11.309-59.127Z" transform="translate(6.13 6.256)" fill="#6e9ebe" fill-rule="evenodd"/>
                                        <path id="Path_826" data-name="Path 826" d="M29,213.558l34.189,98.333L74.5,252.763Z" transform="translate(5.06 5.647)" fill="#647fb1" fill-rule="evenodd"/>
                                        <path id="Path_827" data-name="Path 827" d="M57.9,581.179l4.695-5.448-6.477,2.256Z" transform="translate(5.936 17.354)" fill="#b13524"/>
                                        <path id="Path_828" data-name="Path 828" d="M328.344,270.059l-68.086,78.9,11.311-59.142Z" transform="translate(12.535 7.474)" fill="#6ac19b" fill-rule="evenodd"/>
                                        <path id="Path_829" data-name="Path 829" d="M227.143,251.226l34.185,98.343,11.311-59.145Z" transform="translate(11.465 6.865)" fill="#5cb193" fill-rule="evenodd"/>
                                        <path id="Path_830" data-name="Path 830" d="M379.482,689.443,404.3,675.569l.79-4.137-45.493-39.2Z" transform="translate(15.746 19.181)" fill="#ef954e"/>
                                        <path id="Path_831" data-name="Path 831" d="M196.431,422.9l-68.08,78.892,11.3-59.135Z" transform="translate(8.271 12.414)" fill="#e27169" fill-rule="evenodd"/>
                                        <path id="Path_832" data-name="Path 832" d="M95.229,404.061,129.422,502.4l11.306-59.133Z" transform="translate(7.201 11.805)" fill="#d1897b" fill-rule="evenodd"/>
                                        <path id="Path_833" data-name="Path 833" d="M-127.532,249.718l4.185,7.489,16.387-18.987Z" transform="translate(0 6.445)" fill="#251059"/>
                                        <path id="Path_834" data-name="Path 834" d="M57.9,581.179l4.695-5.448-6.477,2.256Z" transform="translate(5.936 17.354)" fill="#b13524"/>
                                        <path id="Path_835" data-name="Path 835" d="M328.344,270.059l-68.086,78.9,11.311-59.142Z" transform="translate(12.535 7.474)" fill="#6ac19b" fill-rule="evenodd"/>
                                        <path id="Path_836" data-name="Path 836" d="M227.143,251.226l34.185,98.343,11.311-59.145Z" transform="translate(11.465 6.865)" fill="#5cb193" fill-rule="evenodd"/>
                                        <path id="Path_837" data-name="Path 837" d="M379.482,689.443,404.3,675.569l.79-4.137-45.493-39.2Z" transform="translate(15.746 19.181)" fill="#ef954e"/>
                                        <path id="Path_838" data-name="Path 838" d="M196.431,422.9l-68.08,78.892,11.3-59.135Z" transform="translate(8.271 12.414)" fill="#e27169" fill-rule="evenodd"/>
                                        <path id="Path_839" data-name="Path 839" d="M95.229,404.061,129.422,502.4l11.306-59.133Z" transform="translate(7.201 11.805)" fill="#d1897b" fill-rule="evenodd"/>
                                        <path id="Path_840" data-name="Path 840" d="M-127.532,249.718l4.185,7.489,16.387-18.987Z" transform="translate(0 6.445)" fill="#251059"/>
                                        <path id="Path_841" data-name="Path 841" d="M304.313,385.172l45.43,39.22,11.37-59.1Z" transform="translate(13.959 10.552)" fill="#83c198" fill-rule="evenodd"/>
                                        <path id="Path_842" data-name="Path 842" d="M304.7,384.534l45.445,39.2-56.81,19.892Z" transform="translate(13.604 11.174)" fill="#8ab794" fill-rule="evenodd"/>
                                        <path id="Path_843" data-name="Path 843" d="M39.949,157l45.426,39.225L96.74,137.112Z" transform="translate(5.414 3.176)" fill="#917844" fill-rule="evenodd"/>
                                        <path id="Path_844" data-name="Path 844" d="M40.331,156.361l45.443,39.207L28.959,215.454Z" transform="translate(5.058 3.799)" fill="#635c73" fill-rule="evenodd"/>
                                        <path id="Path_845" data-name="Path 845" d="M172.407,538.006l45.426,39.226L229.2,518.122Z" transform="translate(9.695 15.492)" fill="#de5658" fill-rule="evenodd"/>
                                        <path id="Path_846" data-name="Path 846" d="M172.785,537.364l45.442,39.21-56.81,19.888Z" transform="translate(9.34 16.114)" fill="#df5a56" fill-rule="evenodd"/>
                                        <path id="Path_847" data-name="Path 847" d="M-91.959,309.833l45.427,39.232,11.367-59.117Z" transform="translate(1.15 8.117)" fill="#3c3984" fill-rule="evenodd"/>
                                        <path id="Path_848" data-name="Path 848" d="M-92.487,312.149l24.477,43.8,21.538-7.54L-91.92,309.2Z" transform="translate(1.133 8.739)" fill="#30226d"/>
                                        <path id="Path_849" data-name="Path 849" d="M266.315,752.413,289.5,739.459l5.932-30.833-56.8,19.878Z" transform="translate(11.836 21.65)" fill="#da4b4e"/>
                                        <path id="Path_850" data-name="Path 850" d="M230.429,772l36.193-20.229-27.7-23.9Z" transform="translate(11.571 22.272)" fill="#cb413e"/>
                                        <path id="Path_851" data-name="Path 851" d="M22.726,518.442l7.306-37.99L6.162,488.81Z" transform="translate(4.322 14.275)" fill="#d7772c"/>
                                        <path id="Path_852" data-name="Path 852" d="M238.086,194.667l45.43,39.222,11.368-59.111Z" transform="translate(11.818 4.394)" fill="#4ea799" fill-rule="evenodd"/>
                                        <path id="Path_853" data-name="Path 853" d="M238.467,194.031l45.451,39.2L227.1,253.119Z" transform="translate(11.463 5.016)" fill="#3a8d8c" fill-rule="evenodd"/>
                                        <path id="Path_854" data-name="Path 854" d="M370.539,575.672,415.966,614.9l11.368-59.111Z" transform="translate(16.1 16.71)" fill="#f4ad55" fill-rule="evenodd"/>
                                        <path id="Path_855" data-name="Path 855" d="M370.921,575.032l45.451,39.208-56.819,19.888Z" transform="translate(15.745 17.332)" fill="#f2a14e" fill-rule="evenodd"/>
                                        <path id="Path_856" data-name="Path 856" d="M106.178,347.509,151.6,386.727l11.371-59.113Z" transform="translate(7.555 9.334)" fill="#939ca9" fill-rule="evenodd"/>
                                        <path id="Path_857" data-name="Path 857" d="M106.56,346.872,152,386.069,95.188,405.956Z" transform="translate(7.199 9.957)" fill="#8294b2" fill-rule="evenodd"/>
                                        <path id="Path_858" data-name="Path 858" d="M175.83,792.4l8.718-45.37-28.5,9.976Z" transform="translate(9.166 22.892)" fill="#912717"/>
                                        <path id="Path_859" data-name="Path 859" d="M392.461,461.25l45.428,39.228,11.368-59.111Z" transform="translate(16.809 13.011)" fill="#f5b95f" fill-rule="evenodd"/>
                                        <path id="Path_860" data-name="Path 860" d="M392.842,460.608l45.449,39.206L381.477,519.7Z" transform="translate(16.453 13.633)" fill="#f1ae58" fill-rule="evenodd"/>
                                        <path id="Path_861" data-name="Path 861" d="M128.1,233.081l45.425,39.225,11.37-59.111Z" transform="translate(8.263 5.636)" fill="#46aaa6" fill-rule="evenodd"/>
                                        <path id="Path_862" data-name="Path 862" d="M128.48,232.438l45.442,39.208-56.812,19.89Z" transform="translate(7.908 6.258)" fill="#5db1b1" fill-rule="evenodd"/>
                                        <path id="Path_863" data-name="Path 863" d="M260.552,614.083l45.431,39.232L317.346,594.2Z" transform="translate(12.545 17.951)" fill="#e3645a" fill-rule="evenodd"/>
                                        <path id="Path_864" data-name="Path 864" d="M260.934,613.446l45.443,39.206-56.811,19.884Z" transform="translate(12.189 18.574)" fill="#e15659" fill-rule="evenodd"/>
                                        <path id="Path_865" data-name="Path 865" d="M-3.812,385.917l45.429,39.224,11.368-59.105Z" transform="translate(3.999 10.576)" fill="#6694b5" fill-rule="evenodd"/>
                                        <path id="Path_866" data-name="Path 866" d="M-3.435,385.276l45.451,39.2L-14.8,444.371Z" transform="translate(3.644 11.198)" fill="#6f91a4" fill-rule="evenodd"/>
                                        <path id="Path_867" data-name="Path 867" d="M249.023,138.7l47.352-16.578L283.989,99.965l-23.6-20.355Z" transform="translate(12.172 1.318)" fill="#4aa9a8"/>
                                        <path id="Path_868" data-name="Path 868" d="M62.414,576.419l45.431,39.224,11.37-59.107Z" transform="translate(6.14 16.734)" fill="#d16745" fill-rule="evenodd"/>
                                        <path id="Path_869" data-name="Path 869" d="M60.514,586.109l21.26,38.037,26.177-9.162-45.45-39.2Z" transform="translate(6.078 17.356)" fill="#be4a31"/>
                                        <path id="Path_870" data-name="Path 870" d="M371.667,309.842l7.754-40.343-8.183-14.638-45,15.758Z" transform="translate(14.668 6.982)" fill="#69bf9e"/>
                                        <path id="Path_871" data-name="Path 871" d="M326.616,270.106l45.448,39.2L315.249,329.2Z" transform="translate(14.313 7.475)" fill="#70c8a2" fill-rule="evenodd"/>
                                        <path id="Path_872" data-name="Path 872" d="M194.325,423.58l45.427,39.232L251.123,403.7Z" transform="translate(10.404 11.794)" fill="#e07f7d" fill-rule="evenodd"/>
                                        <path id="Path_873" data-name="Path 873" d="M194.708,422.944l45.441,39.206-56.809,19.89Z" transform="translate(10.049 12.416)" fill="#e47672" fill-rule="evenodd"/>
                                        <path id="Path_874" data-name="Path 874" d="M-54.264,209.073l29.143,25.167,8.931-46.45Z" transform="translate(2.368 4.814)" fill="#3a337f"/>
                                        <path id="Path_875" data-name="Path 875" d="M-74.649,220.285l-6.375,33.142,56.812-19.891-29.153-25.148Z" transform="translate(1.503 5.48)" fill="#322571"/>
                                        <path id="Path_876" data-name="Path 876" d="M338.89,481.433l11.255-58.955L293.273,442.19Z" transform="translate(13.602 12.401)" fill="#d79560" fill-rule="evenodd"/>
                                        <path id="Path_877" data-name="Path 877" d="M74.526,253.262l11.253-58.955L28.907,214.018Z" transform="translate(5.057 5.025)" fill="#758289" fill-rule="evenodd"/>
                                        <path id="Path_878" data-name="Path 878" d="M206.981,634.269l11.255-58.955-56.88,19.709Z" transform="translate(9.338 17.341)" fill="#df5a56" fill-rule="evenodd"/>
                                        <path id="Path_879" data-name="Path 879" d="M-53.8,381.512l6.56-34.363-21.588,7.482Z" transform="translate(1.898 9.966)" fill="#404586"/>
                                        <path id="Path_880" data-name="Path 880" d="M180.276,77.893,205.8,99.849,213.548,59.3Z" transform="translate(9.95 0.661)" fill="#55a9a3"/>
                                        <path id="Path_881" data-name="Path 881" d="M272.659,290.931l11.259-58.958-56.874,19.713Z" transform="translate(11.461 6.243)" fill="#56a991" fill-rule="evenodd"/>
                                        <path id="Path_882" data-name="Path 882" d="M405.114,671.933l11.261-58.951L359.5,632.69Z" transform="translate(15.743 18.559)" fill="#f2a151" fill-rule="evenodd"/>
                                        <path id="Path_883" data-name="Path 883" d="M140.753,443.769l11.252-58.958L95.139,404.521Z" transform="translate(7.198 11.183)" fill="#c5928b" fill-rule="evenodd"/>
                                        <path id="Path_884" data-name="Path 884" d="M427.034,557.513,438.3,498.56l-56.88,19.709Z" transform="translate(16.452 14.86)" fill="#f6b55b" fill-rule="evenodd"/>
                                        <path id="Path_885" data-name="Path 885" d="M162.676,329.343l11.252-58.955L117.058,290.1Z" transform="translate(7.906 7.484)" fill="#6bacaf" fill-rule="evenodd"/>
                                        <path id="Path_886" data-name="Path 886" d="M295.126,710.351,306.382,651.4,249.507,671.1Z" transform="translate(12.188 19.8)" fill="#e15553" fill-rule="evenodd"/>
                                        <path id="Path_887" data-name="Path 887" d="M30.764,482.183l11.259-58.959-56.88,19.711Z" transform="translate(3.642 12.425)" fill="#ce8b41" fill-rule="evenodd"/>
                                        <path id="Path_888" data-name="Path 888" d="M294.584,176.405l8.372-43.841-6.611-11.825-47.38,16.423Z" transform="translate(12.17 2.647)" fill="#5ac2b1"/>
                                        <path id="Path_889" data-name="Path 889" d="M99.314,655.488l7.977-41.759-26.237,9.089Z" transform="translate(6.742 18.583)" fill="#b63c28"/>
                                        <path id="Path_890" data-name="Path 890" d="M360.812,367.018l11.259-58.963-56.879,19.71Z" transform="translate(14.311 8.702)" fill="#74d0aa" fill-rule="evenodd"/>
                                        <path id="Path_891" data-name="Path 891" d="M86.544,129.9,95.3,137.43l2.653-13.9Z" transform="translate(6.92 2.737)" fill="#ba8240"/>
                                        <path id="Path_892" data-name="Path 892" d="M228.9,519.847,240.155,460.9,183.277,480.6Z" transform="translate(10.047 13.642)" fill="#e15a60" fill-rule="evenodd"/>
                                        <path id="Path_893" data-name="Path 893" d="M-35.464,291.678l11.258-58.957-56.875,19.713Z" transform="translate(1.502 6.267)" fill="#382f7d" fill-rule="evenodd"/>
                                        <path id="Path_894" data-name="Path 894" d="M337.438,481.413l11.229-58.953,45.567,39.351Z" transform="translate(15.03 12.4)" fill="#cca76a" fill-rule="evenodd"/>
                                        <path id="Path_895" data-name="Path 895" d="M73.071,253.249,84.3,194.288l45.578,39.357Z" transform="translate(6.484 5.025)" fill="#87885b" fill-rule="evenodd"/>
                                        <path id="Path_896" data-name="Path 896" d="M205.523,634.251l11.23-58.958,45.57,39.359Z" transform="translate(10.766 17.34)" fill="#df5757" fill-rule="evenodd"/>
                                        <path id="Path_897" data-name="Path 897" d="M-54.3,381.46l10.78,19.287,41.332-14.262-45.574-39.355Z" transform="translate(2.367 9.965)" fill="#4b5f9d"/>
                                        <path id="Path_898" data-name="Path 898" d="M212.7,59.587,204.983,100.1l56.8-19.6L227.8,51.147Z" transform="translate(10.748 0.398)" fill="#499ca2"/>
                                        <path id="Path_899" data-name="Path 899" d="M56.383,578.4l6.494-2.24L47.9,563.22Z" transform="translate(5.671 16.95)" fill="#b9452a"/>
                                        <path id="Path_900" data-name="Path 900" d="M271.211,290.916l11.225-58.961,45.574,39.359Z" transform="translate(12.889 6.242)" fill="#5fb599" fill-rule="evenodd"/>
                                        <path id="Path_901" data-name="Path 901" d="M403.659,671.923l17.925-6.188,33.032-18.465-39.722-34.307Z" transform="translate(17.17 18.558)" fill="#f4ae57"/>
                                        <path id="Path_902" data-name="Path 902" d="M139.3,443.755l11.229-58.965,45.567,39.359Z" transform="translate(8.625 11.182)" fill="#c9948b" fill-rule="evenodd"/>
                                        <path id="Path_903" data-name="Path 903" d="M425.579,557.5l11.237-58.959,45.57,39.355Z" transform="translate(17.879 14.859)" fill="#f7bb5f" fill-rule="evenodd"/>
                                        <path id="Path_904" data-name="Path 904" d="M161.216,329.325l11.234-58.957,45.568,39.356Z" transform="translate(9.334 7.484)" fill="#5db7a8" fill-rule="evenodd"/>
                                        <path id="Path_905" data-name="Path 905" d="M293.676,710.335,304.9,651.376l45.568,39.355Z" transform="translate(13.615 19.8)" fill="#e46151" fill-rule="evenodd"/>
                                        <path id="Path_906" data-name="Path 906" d="M29.312,482.161,40.54,423.206l45.57,39.353Z" transform="translate(5.07 12.424)" fill="#b79367" fill-rule="evenodd"/>
                                        <path id="Path_907" data-name="Path 907" d="M293.133,176.024l27.572-9.519L301.491,132.13Z" transform="translate(13.598 3.015)" fill="#5fbaa4"/>
                                        <path id="Path_908" data-name="Path 908" d="M98.715,655.438l7.542,13.493,45.978-15.866-45.568-39.357Z" transform="translate(7.313 18.582)" fill="#c65338"/>
                                        <path id="Path_909" data-name="Path 909" d="M359.353,367l11.237-58.966L416.158,347.4Z" transform="translate(15.738 8.701)" fill="#70cdaa" fill-rule="evenodd"/>
                                        <path id="Path_910" data-name="Path 910" d="M97.631,124.2,95,138.062l56.8-19.605-17.252-14.894Z" transform="translate(7.193 2.092)" fill="#c08943"/>
                                        <path id="Path_911" data-name="Path 911" d="M227.447,519.831l11.229-58.955,45.572,39.353Z" transform="translate(11.474 13.642)" fill="#e25b64" fill-rule="evenodd"/>
                                        <path id="Path_912" data-name="Path 912" d="M-36.914,291.662l11.227-58.96,45.57,39.353Z" transform="translate(2.929 6.266)" fill="#3d3987" fill-rule="evenodd"/>
                                        <path id="Path_913" data-name="Path 913" d="M137.154,723l2.662-13.989-8.777,3.048Z" transform="translate(8.358 21.663)" fill="#c35d1f"/>
                                        <path id="Path_914" data-name="Path 914" d="M405.142,403.333l-56.858,19.761L393.9,462.458Z" transform="translate(15.381 11.782)" fill="#d6bb73" fill-rule="evenodd"/>
                                        <path id="Path_915" data-name="Path 915" d="M140.776,175.171,83.92,194.922l45.609,39.366Z" transform="translate(6.835 4.407)" fill="#82925c" fill-rule="evenodd"/>
                                        <path id="Path_916" data-name="Path 916" d="M273.228,556.169l-56.855,19.757,45.611,39.363Z" transform="translate(11.117 16.722)" fill="#dd5659" fill-rule="evenodd"/>
                                        <path id="Path_917" data-name="Path 917" d="M8.865,328l-56.851,19.764,45.609,39.359Z" transform="translate(2.571 9.347)" fill="#537db2" fill-rule="evenodd"/>
                                        <path id="Path_918" data-name="Path 918" d="M227.063,51.559l34.015,29.358,3.108-16.334L249.8,38.848Z" transform="translate(11.462 0)" fill="#407b8b"/>
                                        <path id="Path_919" data-name="Path 919" d="M48.465,564.705l14.97,12.922L74.676,518.5,31.1,533.641Z" transform="translate(5.128 15.505)" fill="#c9603c"/>
                                        <path id="Path_920" data-name="Path 920" d="M338.911,212.83l-56.85,19.757,45.608,39.366Z" transform="translate(13.24 5.624)" fill="#6ecaa6" fill-rule="evenodd"/>
                                        <path id="Path_921" data-name="Path 921" d="M454.253,647.9l7.648-4.274,9.468-49.79L414.51,613.6Z" transform="translate(17.521 17.94)" fill="#f7b95e"/>
                                        <path id="Path_922" data-name="Path 922" d="M207,365.673l-56.85,19.75,45.608,39.368Z" transform="translate(8.976 10.564)" fill="#d5a08d" fill-rule="evenodd"/>
                                        <g id="Group_21" data-name="Group 21" transform="translate(-127.531 38.848)">
                                            <g id="Mask_Group_4" data-name="Mask Group 4" transform="translate(0)" clip-path="url(#clip-path-2)">
                                                <path id="Path_923" data-name="Path 923" d="M186.569,799.524l-13.955,4.853,2.074,1.788Z" transform="translate(137.233 -14.259)" fill="#730a13" fill-rule="evenodd"/>
                                            </g>
                                        </g>
                                        <path id="Path_924" data-name="Path 924" d="M493.291,479.417,436.43,499.172l45.614,39.361Z" transform="translate(18.23 14.241)" fill="#f8be60" fill-rule="evenodd"/>
                                        <path id="Path_925" data-name="Path 925" d="M228.923,251.245,172.067,271,217.68,310.37Z" transform="translate(9.684 6.866)" fill="#57b29a" fill-rule="evenodd"/>
                                        <path id="Path_926" data-name="Path 926" d="M361.379,632.255,304.527,652.01l45.608,39.363Z" transform="translate(13.966 19.182)" fill="#e9784b" fill-rule="evenodd"/>
                                        <path id="Path_927" data-name="Path 927" d="M97.016,404.081,40.162,423.834,85.77,463.2Z" transform="translate(5.421 11.806)" fill="#bb9e87" fill-rule="evenodd"/>
                                        <path id="Path_928" data-name="Path 928" d="M163.244,594.589l-56.861,19.749L152,653.706Z" transform="translate(7.561 17.964)" fill="#d7654a" fill-rule="evenodd"/>
                                        <path id="Path_929" data-name="Path 929" d="M415.817,347.693l1.7-8.931L395.58,299.506,370.2,308.322Z" transform="translate(16.089 8.426)" fill="#6aaf91"/>
                                        <path id="Path_930" data-name="Path 930" d="M133.294,103.965l17.272,14.909,5.229-27.484Z" transform="translate(8.431 1.698)" fill="#bc904b"/>
                                        <path id="Path_931" data-name="Path 931" d="M295.151,441.751,238.3,461.5l45.609,39.365Z" transform="translate(11.825 13.024)" fill="#e26663" fill-rule="evenodd"/>
                                        <path id="Path_932" data-name="Path 932" d="M30.787,213.577l-56.851,19.757L19.544,272.7Z" transform="translate(3.28 5.648)" fill="#464d95" fill-rule="evenodd"/>
                                        <path id="Path_933" data-name="Path 933" d="M131.414,712.633l8.779-3.057-20.231-17.427Z" transform="translate(8 21.118)" fill="#b84120"/>
                                        <path id="Path_934" data-name="Path 934" d="M405.16,404.59l-56.869,19.787,11.188-59.136Z" transform="translate(15.381 10.55)" fill="#81d2aa" fill-rule="evenodd"/>
                                        <path id="Path_935" data-name="Path 935" d="M140.79,176.42,83.931,196.208l11.186-59.147Z" transform="translate(6.835 3.175)" fill="#b38337" fill-rule="evenodd"/>
                                        <path id="Path_936" data-name="Path 936" d="M273.248,557.429l-56.865,19.786,11.188-59.149Z" transform="translate(11.117 15.49)" fill="#dd5259" fill-rule="evenodd"/>
                                        <path id="Path_937" data-name="Path 937" d="M8.885,329.254-47.98,349.045-36.8,289.9Z" transform="translate(2.571 8.115)" fill="#41488f" fill-rule="evenodd"/>
                                        <path id="Path_938" data-name="Path 938" d="M287.773,739.535l25.349-14.168-19.5-16.8Z" transform="translate(13.425 21.648)" fill="#de5153"/>
                                        <path id="Path_939" data-name="Path 939" d="M22.135,518.313l9.283,16.6,43.569-15.156L29.308,480.405Z" transform="translate(4.838 14.273)" fill="#db8134"/>
                                        <path id="Path_940" data-name="Path 940" d="M338.933,214.084,282.064,233.87l11.188-59.139Z" transform="translate(13.24 4.392)" fill="#60bfa7" fill-rule="evenodd"/>
                                        <path id="Path_941" data-name="Path 941" d="M471.389,595.095,414.52,614.882l11.186-59.149Z" transform="translate(17.522 16.708)" fill="#f7b85d" fill-rule="evenodd"/>
                                        <path id="Path_942" data-name="Path 942" d="M207.02,366.927l-56.864,19.781,11.189-59.143Z" transform="translate(8.976 9.333)" fill="#94aaa6" fill-rule="evenodd"/>
                                        <path id="Path_943" data-name="Path 943" d="M175.153,792.3l4.671,8.357,40.152-22.443-36.251-31.238Z" transform="translate(9.784 22.89)" fill="#a6331b"/>
                                        <path id="Path_944" data-name="Path 944" d="M493.308,480.673,436.444,500.46l11.182-59.149Z" transform="translate(18.23 13.009)" fill="#f6be62" fill-rule="evenodd"/>
                                        <path id="Path_945" data-name="Path 945" d="M228.943,252.5,172.08,272.285l11.188-59.142Z" transform="translate(9.685 5.634)" fill="#3b9797" fill-rule="evenodd"/>
                                        <path id="Path_946" data-name="Path 946" d="M361.395,633.5,304.537,653.3l11.178-59.147Z" transform="translate(13.966 17.95)" fill="#e97c56" fill-rule="evenodd"/>
                                        <path id="Path_947" data-name="Path 947" d="M97.035,405.338,40.166,425.124l11.186-59.14Z" transform="translate(5.421 10.574)" fill="#6895be" fill-rule="evenodd"/>
                                        <path id="Path_948" data-name="Path 948" d="M361.395,633.5,304.537,653.3l11.178-59.147Z" transform="translate(13.966 17.95)" fill="#e97c56" fill-rule="evenodd"/>
                                        <path id="Path_949" data-name="Path 949" d="M97.035,405.338,40.166,425.124l11.186-59.14Z" transform="translate(5.421 10.574)" fill="#6895be" fill-rule="evenodd"/>
                                        <path id="Path_950" data-name="Path 950" d="M163.262,595.839,106.395,615.63l11.187-59.147Z" transform="translate(7.562 16.732)" fill="#db6d4f" fill-rule="evenodd"/>
                                        <path id="Path_951" data-name="Path 951" d="M370.214,309.373l25.388-8.834-17.721-31.7Z" transform="translate(16.089 7.434)" fill="#59a28a"/>
                                        <path id="Path_952" data-name="Path 952" d="M295.171,443.007l-56.864,19.784,11.187-59.151Z" transform="translate(11.826 11.792)" fill="#cb9a8d" fill-rule="evenodd"/>
                                        <path id="Path_953" data-name="Path 953" d="M-17.3,188.084l-8.76,46.319,56.87-19.79L-6.8,182.212Z" transform="translate(3.28 4.634)" fill="#413e88"/>
                                    </g>
                                </g>
                            </g>
                            <g id="Group_25" data-name="Group 25">
                                <path id="Path_955" data-name="Path 955" d="M195.843,349.4c-5.1-3.548-9.8-5.908-10.333,3.788-.033,2.924,1.125,8.108,1.736,11.111a69.083,69.083,0,0,1,.657,11.95c.048,8.954-1.375,15.288-5.739,23.049-3.964,7.164-10.121,19.445-10.356,28.039-.3,11.838,6.511,19.055,16.752,20.9" fill="#f4f4f4"/>
                                <path id="Path_956" data-name="Path 956" d="M222.339,364.671c6.521,3.887,10.978,7.354,19.345,5.445a27.722,27.722,0,0,0,15.967-12.2c1.454-2.587,3.057-9.062,5.536-10.711,3.518-2.175,4.714,2.69,5,5.653,1.267,8.287-2.392,16.947-5.575,24.366-2.487,5.718-5.754,11.174-7.639,17.29-2.142,6.9-1.242,12.863.321,20.048,0,0,10.43,25.184,13.506,41.342,0,0,3.236,10.8-2.44,14.668,0,0-4.255,4.2-10.214-5.636,0,0-12.768-16.69-33.732-14.2l-.064-5.17s-.177-1.921-3.656-2.2-1.867-.15-1.867-.15Z" fill="#f4f4f4"/>
                                <path id="Path_957" data-name="Path 957" d="M236.476,432.573a5.6,5.6,0,1,1-7.854-.959A5.594,5.594,0,0,1,236.476,432.573Z" fill="#e15553"/>
                                <path id="Path_958" data-name="Path 958" d="M250.891,440.222a5.6,5.6,0,1,1-7.855-.959A5.6,5.6,0,0,1,250.891,440.222Z" fill="#e15553"/>
                                <path id="Path_959" data-name="Path 959" d="M263.772,452.151a5.595,5.595,0,1,1-7.855-.959A5.6,5.6,0,0,1,263.772,452.151Z" fill="#e15553"/>
                                <path id="Path_960" data-name="Path 960" d="M217.366,463.983c-.107,0-.215,0-.324-.011l-25.572-2.053a4,4,0,0,1-3.662-4.3l1.056-13.15a4.009,4.009,0,0,1,4.3-3.664l25.574,2.054a4,4,0,0,1,3.661,4.3l-1.056,13.151A4.011,4.011,0,0,1,217.366,463.983ZM192.842,441.8a3,3,0,0,0-2.973,2.748l-1.056,13.15a2.985,2.985,0,0,0,2.737,3.217l25.573,2.051a3.017,3.017,0,0,0,3.216-2.737l1.056-13.152a2.986,2.986,0,0,0-2.737-3.213l-25.574-2.056C193,441.8,192.923,441.8,192.842,441.8Z" fill="#f4f4f4"/>
                                <path id="Path_961" data-name="Path 961" d="M193.125,441.81h-.038a.506.506,0,0,1-.465-.542L214.743,139.43a.494.494,0,0,1,.54-.466.5.5,0,0,1,.465.539l-22.121,301.84A.5.5,0,0,1,193.125,441.81Z" fill="#f4f4f4"/>
                                <path id="Path_962" data-name="Path 962" d="M196.806,442.259h-.037a.5.5,0,0,1-.466-.539L219,130.126a.51.51,0,0,1,.539-.466.5.5,0,0,1,.466.539l-22.7,311.593A.5.5,0,0,1,196.806,442.259Z" fill="#f4f4f4"/>
                                <path id="Path_963" data-name="Path 963" d="M201.055,441.737a.216.216,0,0,1-.036,0,.5.5,0,0,1-.468-.537L223.13,119.873a.5.5,0,1,1,1,.071L201.557,441.268A.5.5,0,0,1,201.055,441.737Z" fill="#f4f4f4"/>
                                <path id="Path_964" data-name="Path 964" d="M204.831,442.751H204.8a.508.508,0,0,1-.468-.539l22.706-331.539a.513.513,0,0,1,.537-.469.5.5,0,0,1,.469.538l-22.707,331.54A.5.5,0,0,1,204.831,442.751Z" fill="#f4f4f4"/>
                                <path id="Path_965" data-name="Path 965" d="M209.206,442.177h-.034a.507.507,0,0,1-.47-.537L231.5,99.233a.521.521,0,0,1,.537-.469.5.5,0,0,1,.469.536l-22.8,342.406A.5.5,0,0,1,209.206,442.177Z" fill="#f4f4f4"/>
                                <path id="Path_966" data-name="Path 966" d="M213.316,442.425a.184.184,0,0,1-.033,0,.508.508,0,0,1-.471-.537L235.229,90.177a.5.5,0,1,1,1.006.064L213.819,441.952A.505.505,0,0,1,213.316,442.425Z" fill="#f4f4f4"/>
                                <path id="Path_967" data-name="Path 967" d="M217.1,135.611a2.282,2.282,0,1,1-3.2-.39A2.281,2.281,0,0,1,217.1,135.611Z" fill="#fff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75"/>
                                <path id="Path_968" data-name="Path 968" d="M220.779,126.528a2.281,2.281,0,1,1-3.2-.39A2.282,2.282,0,0,1,220.779,126.528Z" fill="#fff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75"/>
                                <path id="Path_969" data-name="Path 969" d="M224.838,115.956a2.281,2.281,0,1,1-3.2-.391A2.282,2.282,0,0,1,224.838,115.956Z" fill="#fff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75"/>
                                <path id="Path_970" data-name="Path 970" d="M229.05,106.4a2.282,2.282,0,1,1-3.2-.391A2.28,2.28,0,0,1,229.05,106.4Z" fill="#fff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75"/>
                                <path id="Path_971" data-name="Path 971" d="M232.867,95.529a2.282,2.282,0,1,1-3.2-.39A2.281,2.281,0,0,1,232.867,95.529Z" fill="#fff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75"/>
                                <path id="Path_972" data-name="Path 972" d="M236.164,86.652a2.281,2.281,0,1,1-3.2-.389A2.283,2.283,0,0,1,236.164,86.652Z" fill="#fff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75"/>
                                <path id="Path_973" data-name="Path 973" d="M190.331,351.01a1.2,1.2,0,1,1-1.683-.207A1.2,1.2,0,0,1,190.331,351.01Z" fill="#dfa04f"/>
                                <path id="Path_974" data-name="Path 974" d="M192.963,376.346a1.2,1.2,0,1,1-1.682-.2A1.2,1.2,0,0,1,192.963,376.346Z" fill="#dfa04f"/>
                                <path id="Path_975" data-name="Path 975" d="M188.389,395.616a1.2,1.2,0,1,1-1.683-.2A1.2,1.2,0,0,1,188.389,395.616Z" fill="#dfa04f"/>
                                <path id="Path_976" data-name="Path 976" d="M177.37,421.177a1.2,1.2,0,1,1-1.683-.205A1.2,1.2,0,0,1,177.37,421.177Z" fill="#dfa04f"/>
                                <path id="Path_977" data-name="Path 977" d="M185.047,442.63a1.2,1.2,0,1,1-1.683-.205A1.2,1.2,0,0,1,185.047,442.63Z" fill="#dfa04f"/>
                                <path id="Path_978" data-name="Path 978" d="M226.778,446.888a1.2,1.2,0,1,1-1.684-.2A1.2,1.2,0,0,1,226.778,446.888Z" fill="#dfa04f"/>
                                <path id="Path_979" data-name="Path 979" d="M266.042,467.147a1.2,1.2,0,1,1-1.683-.209A1.2,1.2,0,0,1,266.042,467.147Z" fill="#dfa04f"/>
                                <path id="Path_980" data-name="Path 980" d="M262.868,440.423a1.2,1.2,0,1,1-1.684-.207A1.2,1.2,0,0,1,262.868,440.423Z" fill="#dfa04f"/>
                                <path id="Path_981" data-name="Path 981" d="M252.644,412.278a1.2,1.2,0,1,1-1.683-.205A1.2,1.2,0,0,1,252.644,412.278Z" fill="#dfa04f"/>
                                <path id="Path_982" data-name="Path 982" d="M258.5,380.144a1.2,1.2,0,1,1-1.683-.2A1.2,1.2,0,0,1,258.5,380.144Z" fill="#dfa04f"/>
                                <path id="Path_983" data-name="Path 983" d="M265.645,349.543a1.2,1.2,0,1,1-1.682-.207A1.2,1.2,0,0,1,265.645,349.543Z" fill="#dfa04f"/>
                                <path id="Path_984" data-name="Path 984" d="M226.216,369.747a1.2,1.2,0,1,1-1.593.581A1.2,1.2,0,0,1,226.216,369.747Z" fill="#dfa04f"/>
                            </g>
                            <path id="Path_985" data-name="Path 985" d="M199.248,352.583" fill="#f93b15"/>
                        </g>
                        <g id="Group_33" data-name="Group 33" transform="translate(728.119 26.795) rotate(7)">
                            <g id="Group_33-2" data-name="Group 33">
                                <g id="Group_32-2" data-name="Group 32" clip-path="url(#clip-path-4)">
                                    <g id="Group_31" data-name="Group 31" transform="translate(-142.642 279.31) rotate(-37)">
                                        <path id="Path_986" data-name="Path 986" d="M416.666,258.952,410.1,179.56l26.245,37.806Z" transform="translate(29.976 8.142)" fill="#da614e" fill-rule="evenodd"/>
                                        <path id="Path_987" data-name="Path 987" d="M471.895,208.643l-61.8-29.081,26.243,37.806,37.026-3.141Z" transform="translate(29.976 8.142)" fill="#d26232"/>
                                        <path id="Path_988" data-name="Path 988" d="M186.458,348.684l5.473,20.764,7.494,10.79,45.844-3.883Z" transform="translate(4.842 27.149)" fill="#a1cfa6"/>
                                        <path id="Path_989" data-name="Path 989" d="M333.074,603.864l9.108-19.254-26.24-37.81,4.986,60.265Z" transform="translate(19.394 49.415)" fill="#9d9b66"/>
                                        <path id="Path_990" data-name="Path 990" d="M388.018,580.721,315.94,546.8l26.243,37.808Z" transform="translate(19.394 49.416)" fill="#b6924a" fill-rule="evenodd"/>
                                        <path id="Path_991" data-name="Path 991" d="M298.881,340.7l-6.567-79.39,26.24,37.806Z" transform="translate(16.739 17.33)" fill="#e87958" fill-rule="evenodd"/>
                                        <path id="Path_992" data-name="Path 992" d="M364.394,295.23l-72.08-33.918,26.24,37.806Z" transform="translate(16.739 17.33)" fill="#e56657" fill-rule="evenodd"/>
                                        <path id="Path_993" data-name="Path 993" d="M440.3,544.441l-6.574-79.4,26.241,37.813Z" transform="translate(32.632 40.227)" fill="#566faa" fill-rule="evenodd"/>
                                        <path id="Path_994" data-name="Path 994" d="M505.8,498.972l-72.079-33.928,26.241,37.813Z" transform="translate(32.632 40.227)" fill="#5878af" fill-rule="evenodd"/>
                                        <path id="Path_995" data-name="Path 995" d="M169.289,279.714l-6.571-79.394,26.241,37.807Z" transform="translate(2.174 10.475)" fill="#f7bb58" fill-rule="evenodd"/>
                                        <path id="Path_996" data-name="Path 996" d="M234.8,234.243l-72.085-33.922,26.245,37.807Z" transform="translate(2.173 10.475)" fill="#f8bf61" fill-rule="evenodd"/>
                                        <path id="Path_997" data-name="Path 997" d="M310.695,483.448l-6.569-79.395,26.243,37.813Z" transform="translate(18.066 33.372)" fill="#5fb798" fill-rule="evenodd"/>
                                        <path id="Path_998" data-name="Path 998" d="M376.205,437.979l-72.078-33.926,26.241,37.81Z" transform="translate(18.067 33.372)" fill="#81caa6" fill-rule="evenodd"/>
                                        <path id="Path_999" data-name="Path 999" d="M306.463,153.475l-6.334-9.123-17.158,4.52,3.819,46.191Z" transform="translate(15.689 4.185)" fill="#eb824d"/>
                                        <path id="Path_1000" data-name="Path 1000" d="M324.7,138.118l-26.3,6.935,6.334,9.123,45.841-3.881Z" transform="translate(17.422 3.484)" fill="#e4644c"/>
                                        <path id="Path_1001" data-name="Path 1001" d="M428.481,401.7,421.907,322.3l26.243,37.816Z" transform="translate(31.304 24.184)" fill="#d28a71" fill-rule="evenodd"/>
                                        <path id="Path_1002" data-name="Path 1002" d="M493.99,356.23,421.907,322.3l26.243,37.819Z" transform="translate(31.304 24.184)" fill="#da8055" fill-rule="evenodd"/>
                                        <path id="Path_1003" data-name="Path 1003" d="M227.73,505.284l3.729,14.152,22.316-1.9Z" transform="translate(9.48 44.749)" fill="#6cc3a0"/>
                                        <path id="Path_1004" data-name="Path 1004" d="M169.289,279.714l-6.571-79.394,26.241,37.807Z" transform="translate(2.174 10.475)" fill="#f7bb58" fill-rule="evenodd"/>
                                        <path id="Path_1005" data-name="Path 1005" d="M234.8,234.243l-72.085-33.922,26.245,37.807Z" transform="translate(2.173 10.475)" fill="#f8bf61" fill-rule="evenodd"/>
                                        <path id="Path_1006" data-name="Path 1006" d="M310.695,483.448l-6.569-79.395,26.243,37.813Z" transform="translate(18.066 33.372)" fill="#5fb798" fill-rule="evenodd"/>
                                        <path id="Path_1007" data-name="Path 1007" d="M376.205,437.979l-72.078-33.926,26.241,37.81Z" transform="translate(18.067 33.372)" fill="#81caa6" fill-rule="evenodd"/>
                                        <path id="Path_1008" data-name="Path 1008" d="M306.463,153.475l-6.334-9.123-17.158,4.52,3.819,46.191Z" transform="translate(15.689 4.185)" fill="#eb824d"/>
                                        <path id="Path_1009" data-name="Path 1009" d="M324.7,138.118l-26.3,6.935,6.334,9.123,45.841-3.881Z" transform="translate(17.422 3.484)" fill="#e4644c"/>
                                        <path id="Path_1010" data-name="Path 1010" d="M428.481,401.7,421.907,322.3l26.243,37.816Z" transform="translate(31.304 24.184)" fill="#d28a71" fill-rule="evenodd"/>
                                        <path id="Path_1011" data-name="Path 1011" d="M493.99,356.23,421.907,322.3l26.243,37.819Z" transform="translate(31.304 24.184)" fill="#da8055" fill-rule="evenodd"/>
                                        <path id="Path_1012" data-name="Path 1012" d="M227.73,505.284l3.729,14.152,22.316-1.9Z" transform="translate(9.48 44.749)" fill="#6cc3a0"/>
                                        <path id="Path_1013" data-name="Path 1013" d="M467.643,192.889,456,176.1,410.1,179.952l61.8,29.081Z" transform="translate(29.976 7.752)" fill="#cb592f"/>
                                        <path id="Path_1014" data-name="Path 1014" d="M460.625,169.1,455.861,151,410.1,182.772,456,178.915Z" transform="translate(29.976 4.932)" fill="#d06624"/>
                                        <path id="Path_1015" data-name="Path 1015" d="M219.288,339.607l-34.536,2.9,1.9,7.2,58.812,27.667Z" transform="translate(4.65 26.129)" fill="#87d2ac"/>
                                        <path id="Path_1016" data-name="Path 1016" d="M239.047,302.188l-55.684,38.657,1.546,5.868,34.536-2.9Z" transform="translate(4.494 21.924)" fill="#dcc781"/>
                                        <path id="Path_1017" data-name="Path 1017" d="M388.018,581.11,315.94,547.191l45.906-3.856Z" transform="translate(19.394 49.026)" fill="#c18c3e" fill-rule="evenodd"/>
                                        <path id="Path_1018" data-name="Path 1018" d="M381.447,505.923,315.94,551.4l45.9-3.859Z" transform="translate(19.394 44.821)" fill="#65997b" fill-rule="evenodd"/>
                                        <path id="Path_1019" data-name="Path 1019" d="M364.394,295.624,292.314,261.7l45.91-3.855Z" transform="translate(16.739 16.94)" fill="#e1585a" fill-rule="evenodd"/>
                                        <path id="Path_1020" data-name="Path 1020" d="M357.824,220.435l-65.51,45.472,45.9-3.852Z" transform="translate(16.739 12.735)" fill="#e36955" fill-rule="evenodd"/>
                                        <path id="Path_1021" data-name="Path 1021" d="M505.8,499.361l-72.079-33.928,45.908-3.85Z" transform="translate(32.632 39.838)" fill="#49619e" fill-rule="evenodd"/>
                                        <path id="Path_1022" data-name="Path 1022" d="M499.233,424.169l-65.512,45.473,45.908-3.85Z" transform="translate(32.632 35.633)" fill="#5686bb" fill-rule="evenodd"/>
                                        <path id="Path_1023" data-name="Path 1023" d="M234.8,234.633,162.715,200.71l45.909-3.854Z" transform="translate(2.173 10.085)" fill="#f8bf61" fill-rule="evenodd"/>
                                        <path id="Path_1024" data-name="Path 1024" d="M225.15,165.316l-10.206,2.69-52.231,36.251,45.91-3.855Z" transform="translate(2.173 6.541)" fill="#f5bc5f"/>
                                        <path id="Path_1025" data-name="Path 1025" d="M376.205,438.368l-72.078-33.926,45.9-3.848Z" transform="translate(18.067 32.983)" fill="#85c7a8" fill-rule="evenodd"/>
                                        <path id="Path_1026" data-name="Path 1026" d="M369.636,363.185l-65.51,45.462,45.905-3.848Z" transform="translate(18.066 28.779)" fill="#b5c5a6" fill-rule="evenodd"/>
                                        <path id="Path_1027" data-name="Path 1027" d="M336.784,134.625l-14.743,3.885,25.872,12.177Z" transform="translate(20.08 3.091)" fill="#e05751"/>
                                        <path id="Path_1028" data-name="Path 1028" d="M493.99,356.619l-72.079-33.926,45.9-3.853Z" transform="translate(31.304 23.795)" fill="#d88750" fill-rule="evenodd"/>
                                        <path id="Path_1029" data-name="Path 1029" d="M487.418,281.426,421.911,326.9l45.906-3.855Z" transform="translate(31.304 19.59)" fill="#d9734d" fill-rule="evenodd"/>
                                        <path id="Path_1030" data-name="Path 1030" d="M228.262,482.343l-6.45.543,6.583,24.977,26.042,12.256Z" transform="translate(8.815 42.171)" fill="#6cc6a4"/>
                                        <path id="Path_1031" data-name="Path 1031" d="M248.407,444.931,216.99,466.74l5.365,20.353,6.45-.539Z" transform="translate(8.273 37.966)" fill="#69c1a0"/>
                                        <path id="Path_1032" data-name="Path 1032" d="M234.8,234.633,162.715,200.71l45.909-3.854Z" transform="translate(2.173 10.085)" fill="#f8bf61" fill-rule="evenodd"/>
                                        <path id="Path_1033" data-name="Path 1033" d="M225.15,165.316l-10.206,2.69-52.231,36.251,45.91-3.855Z" transform="translate(2.173 6.541)" fill="#f5bc5f"/>
                                        <path id="Path_1034" data-name="Path 1034" d="M376.205,438.368l-72.078-33.926,45.9-3.848Z" transform="translate(18.067 32.983)" fill="#85c7a8" fill-rule="evenodd"/>
                                        <path id="Path_1035" data-name="Path 1035" d="M369.636,363.185l-65.51,45.462,45.905-3.848Z" transform="translate(18.066 28.779)" fill="#b5c5a6" fill-rule="evenodd"/>
                                        <path id="Path_1036" data-name="Path 1036" d="M336.784,134.625l-14.743,3.885,25.872,12.177Z" transform="translate(20.08 3.091)" fill="#e05751"/>
                                        <path id="Path_1037" data-name="Path 1037" d="M493.99,356.619l-72.079-33.926,45.9-3.853Z" transform="translate(31.304 23.795)" fill="#d88750" fill-rule="evenodd"/>
                                        <path id="Path_1038" data-name="Path 1038" d="M487.418,281.426,421.911,326.9l45.906-3.855Z" transform="translate(31.304 19.59)" fill="#d9734d" fill-rule="evenodd"/>
                                        <path id="Path_1039" data-name="Path 1039" d="M228.262,482.343l-6.45.543,6.583,24.977,26.042,12.256Z" transform="translate(8.815 42.171)" fill="#6cc6a4"/>
                                        <path id="Path_1040" data-name="Path 1040" d="M248.407,444.931,216.99,466.74l5.365,20.353,6.45-.539Z" transform="translate(8.273 37.966)" fill="#69c1a0"/>
                                        <path id="Path_1041" data-name="Path 1041" d="M455.861,152.195l-3.109-11.8L429.763,142.3,410.1,183.963Z" transform="translate(29.976 3.74)" fill="#cf6325"/>
                                        <path id="Path_1042" data-name="Path 1042" d="M430.351,145.133l-20.825-29.947-4.665,1.229,5.82,70.379Z" transform="translate(29.388 0.907)" fill="#bf4329"/>
                                        <path id="Path_1043" data-name="Path 1043" d="M239.286,302.188,193.442,306l-12.207,25.858,2.368,8.992Z" transform="translate(4.255 21.924)" fill="#e0c77f"/>
                                        <path id="Path_1044" data-name="Path 1044" d="M194.859,309.423l-26.234-37.73,1.247,15.1,12.78,48.491Z" transform="translate(2.838 18.496)" fill="#f2c26c"/>
                                        <path id="Path_1045" data-name="Path 1045" d="M381.452,505.923,315.94,551.4,335.6,509.734Z" transform="translate(19.394 44.821)" fill="#5f9980" fill-rule="evenodd"/>
                                        <path id="Path_1046" data-name="Path 1046" d="M310.031,475.427l6.573,79.4,19.661-41.662Z" transform="translate(18.73 41.394)" fill="#388d8f" fill-rule="evenodd"/>
                                        <path id="Path_1047" data-name="Path 1047" d="M357.824,220.435l-65.51,45.472,19.663-41.66Z" transform="translate(16.739 12.735)" fill="#e56f54" fill-rule="evenodd"/>
                                        <path id="Path_1048" data-name="Path 1048" d="M286.4,189.939l6.574,79.4,19.667-41.66Z" transform="translate(16.075 9.308)" fill="#ee914f" fill-rule="evenodd"/>
                                        <path id="Path_1049" data-name="Path 1049" d="M499.233,424.169l-65.512,45.473,19.669-41.665Z" transform="translate(32.632 35.633)" fill="#5788bd" fill-rule="evenodd"/>
                                        <path id="Path_1050" data-name="Path 1050" d="M427.817,393.675l6.568,79.39,19.667-41.658Z" transform="translate(31.968 32.206)" fill="#668ebc" fill-rule="evenodd"/>
                                        <path id="Path_1051" data-name="Path 1051" d="M214.944,167.734,174.838,178.3l-12.125,25.681Z" transform="translate(2.173 6.812)" fill="#f3ba5e"/>
                                        <path id="Path_1052" data-name="Path 1052" d="M175.021,177.235l-13.941,3.673,1.816,22.009Z" transform="translate(1.99 7.88)" fill="#edb357"/>
                                        <path id="Path_1053" data-name="Path 1053" d="M369.636,363.185l-65.511,45.465,19.663-41.656Z" transform="translate(18.066 28.779)" fill="#abcaa8" fill-rule="evenodd"/>
                                        <path id="Path_1054" data-name="Path 1054" d="M298.218,332.682l6.574,79.4,19.66-41.656Z" transform="translate(17.402 25.351)" fill="#9bc0a0" fill-rule="evenodd"/>
                                        <path id="Path_1055" data-name="Path 1055" d="M461.3,567.577l-21.665-31.158,2.985,36.079Z" transform="translate(33.296 48.249)" fill="#494990"/>
                                        <path id="Path_1056" data-name="Path 1056" d="M487.418,281.426,421.911,326.9l19.667-41.663Z" transform="translate(31.304 19.59)" fill="#da724f" fill-rule="evenodd"/>
                                        <path id="Path_1057" data-name="Path 1057" d="M416,250.931l6.568,79.393,19.669-41.665Z" transform="translate(30.64 16.163)" fill="#df6555" fill-rule="evenodd"/>
                                        <path id="Path_1058" data-name="Path 1058" d="M248.907,444.931l-36.366,3.022,4.949,18.787Z" transform="translate(7.773 37.966)" fill="#66bc9c"/>
                                        <path id="Path_1059" data-name="Path 1059" d="M406.925,116.292,401.2,117.8,386.5,148.86l26.244,37.811Z" transform="translate(27.325 1.031)" fill="#cb463a"/>
                                        <path id="Path_1060" data-name="Path 1060" d="M345.3,149.457l72.084,33.924L391.134,145.57Z" transform="translate(22.694 4.321)" fill="#db504f" fill-rule="evenodd"/>
                                        <path id="Path_1061" data-name="Path 1061" d="M505.974,351.339l-19.267,1.632L509.2,363.552Z" transform="translate(38.587 27.448)" fill="#c58445"/>
                                        <path id="Path_1062" data-name="Path 1062" d="M312.018,475.427l6.573,79.4-26.242-37.81Z" transform="translate(16.743 41.394)" fill="#378c8e" fill-rule="evenodd"/>
                                        <path id="Path_1063" data-name="Path 1063" d="M251.142,516.7l72.081,33.924-26.242-37.808Z" transform="translate(12.112 45.595)" fill="#40a3a4" fill-rule="evenodd"/>
                                        <path id="Path_1064" data-name="Path 1064" d="M288.4,189.937l6.57,79.4-26.242-37.811Z" transform="translate(14.088 9.308)" fill="#f19a4c" fill-rule="evenodd"/>
                                        <path id="Path_1065" data-name="Path 1065" d="M227.517,231.209l72.08,33.925-26.242-37.811Z" transform="translate(9.456 13.51)" fill="#f19e4c" fill-rule="evenodd"/>
                                        <path id="Path_1066" data-name="Path 1066" d="M429.8,393.675l6.568,79.39-26.241-37.806Z" transform="translate(29.98 32.206)" fill="#7090b8" fill-rule="evenodd"/>
                                        <path id="Path_1067" data-name="Path 1067" d="M368.923,434.944,441,468.868l-26.241-37.81Z" transform="translate(25.349 36.407)" fill="#7697b8" fill-rule="evenodd"/>
                                        <path id="Path_1068" data-name="Path 1068" d="M162.23,180.538l-11.373,3,13.2,19.007Z" transform="translate(0.841 8.251)" fill="#e7aa4c"/>
                                        <path id="Path_1069" data-name="Path 1069" d="M300.205,332.682l6.572,79.394-26.241-37.807Z" transform="translate(15.415 25.351)" fill="#81c7a1" fill-rule="evenodd"/>
                                        <path id="Path_1070" data-name="Path 1070" d="M239.33,373.958l72.078,33.918-26.241-37.809Z" transform="translate(10.784 29.552)" fill="#73c9a1" fill-rule="evenodd"/>
                                        <path id="Path_1071" data-name="Path 1071" d="M444.6,572.5l-2.987-36.079L421.948,578l.269.393Z" transform="translate(31.308 48.249)" fill="#565482"/>
                                        <path id="Path_1072" data-name="Path 1072" d="M426.849,574.2l-.269-.393-45.841,3.887,11.794,5.549Z" transform="translate(26.677 52.45)" fill="#796864"/>
                                        <path id="Path_1073" data-name="Path 1073" d="M417.99,250.931l6.568,79.393-26.243-37.809Z" transform="translate(28.652 16.163)" fill="#df5e56" fill-rule="evenodd"/>
                                        <path id="Path_1074" data-name="Path 1074" d="M357.112,292.2l72.081,33.924-26.247-37.81Z" transform="translate(24.021 20.364)" fill="#e15f5c" fill-rule="evenodd"/>
                                        <path id="Path_1075" data-name="Path 1075" d="M540.718,490.167l-.989,2.094,2.485,3.583Z" transform="translate(44.546 43.05)" fill="#28155e"/>
                                        <path id="Path_1076" data-name="Path 1076" d="M546.846,495.632l-2.485-3.583-45.84,3.887,55.259,26Z" transform="translate(39.914 43.262)" fill="#28145f"/>
                                        <path id="Path_1077" data-name="Path 1077" d="M345.3,149.064l72.082,33.924-45.91,3.853Z" transform="translate(22.694 4.714)" fill="#dc4f50" fill-rule="evenodd"/>
                                        <path id="Path_1078" data-name="Path 1078" d="M351.205,225.029l65.514-45.468-45.911,3.85Z" transform="translate(23.358 8.142)" fill="#e05655" fill-rule="evenodd"/>
                                        <path id="Path_1079" data-name="Path 1079" d="M509.2,363.383,486.707,352.8l26.174,37.77,3.4-.286Z" transform="translate(38.587 27.612)" fill="#d08439"/>
                                        <path id="Path_1080" data-name="Path 1080" d="M521.4,408.423,515.622,386.5l-3.4.286-19.6,41.618Z" transform="translate(39.25 31.399)" fill="#748693"/>
                                        <path id="Path_1081" data-name="Path 1081" d="M251.142,516.3l72.081,33.924-45.912,3.854Z" transform="translate(12.112 45.988)" fill="#44a7a5" fill-rule="evenodd"/>
                                        <path id="Path_1082" data-name="Path 1082" d="M257.047,592.271,322.559,546.8l-45.91,3.85Z" transform="translate(12.775 49.416)" fill="#4eb7b2" fill-rule="evenodd"/>
                                        <path id="Path_1083" data-name="Path 1083" d="M227.517,230.816l72.08,33.925-45.909,3.853Z" transform="translate(9.456 13.902)" fill="#f3a450" fill-rule="evenodd"/>
                                        <path id="Path_1084" data-name="Path 1084" d="M233.421,306.782l65.512-45.469-45.911,3.849Z" transform="translate(10.12 17.33)" fill="#f09f4e" fill-rule="evenodd"/>
                                        <path id="Path_1085" data-name="Path 1085" d="M368.923,434.552,441,468.475l-45.907,3.85Z" transform="translate(25.349 36.8)" fill="#7798b5" fill-rule="evenodd"/>
                                        <path id="Path_1086" data-name="Path 1086" d="M374.833,510.517l65.507-45.473L394.433,468.9Z" transform="translate(26.013 40.227)" fill="#6ea1bd" fill-rule="evenodd"/>
                                        <path id="Path_1087" data-name="Path 1087" d="M345.3,149.064l72.082,33.924-45.91,3.853Z" transform="translate(22.694 4.714)" fill="#dc4f50" fill-rule="evenodd"/>
                                        <path id="Path_1088" data-name="Path 1088" d="M351.205,225.029l65.514-45.468-45.911,3.85Z" transform="translate(23.358 8.142)" fill="#e05655" fill-rule="evenodd"/>
                                        <path id="Path_1089" data-name="Path 1089" d="M509.2,363.383,486.707,352.8l26.174,37.77,3.4-.286Z" transform="translate(38.587 27.612)" fill="#d08439"/>
                                        <path id="Path_1090" data-name="Path 1090" d="M521.4,408.423,515.622,386.5l-3.4.286-19.6,41.618Z" transform="translate(39.25 31.399)" fill="#748693"/>
                                        <path id="Path_1091" data-name="Path 1091" d="M251.142,516.3l72.081,33.924-45.912,3.854Z" transform="translate(12.112 45.988)" fill="#44a7a5" fill-rule="evenodd"/>
                                        <path id="Path_1092" data-name="Path 1092" d="M257.047,592.271,322.559,546.8l-45.91,3.85Z" transform="translate(12.775 49.416)" fill="#4eb7b2" fill-rule="evenodd"/>
                                        <path id="Path_1093" data-name="Path 1093" d="M227.517,230.816l72.08,33.925-45.909,3.853Z" transform="translate(9.456 13.902)" fill="#f3a450" fill-rule="evenodd"/>
                                        <path id="Path_1094" data-name="Path 1094" d="M233.421,306.782l65.512-45.469-45.911,3.849Z" transform="translate(10.12 17.33)" fill="#f09f4e" fill-rule="evenodd"/>
                                        <path id="Path_1095" data-name="Path 1095" d="M368.923,434.552,441,468.475l-45.907,3.85Z" transform="translate(25.349 36.8)" fill="#7798b5" fill-rule="evenodd"/>
                                        <path id="Path_1096" data-name="Path 1096" d="M374.833,510.517l65.507-45.473L394.433,468.9Z" transform="translate(26.013 40.227)" fill="#6ea1bd" fill-rule="evenodd"/>
                                        <path id="Path_1097" data-name="Path 1097" d="M485.322,279.022l-1.093-4.14-3.426,7.277Z" transform="translate(37.923 18.855)" fill="#b23624"/>
                                        <path id="Path_1098" data-name="Path 1098" d="M239.327,373.559l72.082,33.922L265.5,411.335Z" transform="translate(10.784 29.945)" fill="#73c8a0" fill-rule="evenodd"/>
                                        <path id="Path_1099" data-name="Path 1099" d="M245.232,449.525l65.511-45.473-45.907,3.856Z" transform="translate(11.447 33.372)" fill="#6bc19b" fill-rule="evenodd"/>
                                        <path id="Path_1100" data-name="Path 1100" d="M392.532,582.845,380.738,577.3l5.07,7.322Z" transform="translate(26.677 52.843)" fill="#a67b48"/>
                                        <path id="Path_1101" data-name="Path 1101" d="M357.112,291.807l72.081,33.924-45.909,3.849Z" transform="translate(24.021 20.757)" fill="#e15e5d" fill-rule="evenodd"/>
                                        <path id="Path_1102" data-name="Path 1102" d="M363.018,367.78l65.508-45.48-45.9,3.852Z" transform="translate(24.685 24.184)" fill="#e27069" fill-rule="evenodd"/>
                                        <path id="Path_1103" data-name="Path 1103" d="M553.779,521.548l-55.259-26,26.169,37.776,31.5-2.644Z" transform="translate(39.914 43.655)" fill="#2d1c69"/>
                                        <path id="Path_1104" data-name="Path 1104" d="M540.843,545.507l15.769-10.946-1.964-7.437-31.495,2.646-10.965,23.288Z" transform="translate(41.45 47.204)" fill="#28145f"/>
                                        <path id="Path_1105" data-name="Path 1105" d="M351.205,225.029l65.51-45.468-19.663,41.661Z" transform="translate(23.358 8.142)" fill="#e05655" fill-rule="evenodd"/>
                                        <path id="Path_1106" data-name="Path 1106" d="M418.653,258.952l-6.57-79.392-19.663,41.66Z" transform="translate(27.99 8.142)" fill="#de5d53" fill-rule="evenodd"/>
                                        <path id="Path_1107" data-name="Path 1107" d="M521.4,406.208l-28.785,19.98,33.32-2.763Z" transform="translate(39.25 33.614)" fill="#707f8f"/>
                                        <path id="Path_1108" data-name="Path 1108" d="M257.047,592.271,322.559,546.8l-19.67,41.656Z" transform="translate(12.775 49.416)" fill="#53b5ad" fill-rule="evenodd"/>
                                        <path id="Path_1109" data-name="Path 1109" d="M322.916,607.064,317.93,546.8l-19.673,41.658,14.752,21.218Z" transform="translate(17.407 49.415)" fill="#78a889"/>
                                        <path id="Path_1110" data-name="Path 1110" d="M351.205,225.029l65.51-45.468-19.663,41.661Z" transform="translate(23.358 8.142)" fill="#e05655" fill-rule="evenodd"/>
                                        <path id="Path_1111" data-name="Path 1111" d="M418.653,258.952l-6.57-79.392-19.663,41.66Z" transform="translate(27.99 8.142)" fill="#de5d53" fill-rule="evenodd"/>
                                        <path id="Path_1112" data-name="Path 1112" d="M521.4,406.208l-28.785,19.98,33.32-2.763Z" transform="translate(39.25 33.614)" fill="#707f8f"/>
                                        <path id="Path_1113" data-name="Path 1113" d="M257.047,592.271,322.559,546.8l-19.67,41.656Z" transform="translate(12.775 49.416)" fill="#53b5ad" fill-rule="evenodd"/>
                                        <path id="Path_1114" data-name="Path 1114" d="M322.916,607.064,317.93,546.8l-19.673,41.658,14.752,21.218Z" transform="translate(17.407 49.415)" fill="#78a889"/>
                                        <path id="Path_1115" data-name="Path 1115" d="M233.421,306.782l65.512-45.469-19.667,41.66Z" transform="translate(10.12 17.33)" fill="#f09c4e" fill-rule="evenodd"/>
                                        <path id="Path_1116" data-name="Path 1116" d="M300.868,340.7,294.3,261.309l-19.667,41.665Z" transform="translate(14.752 17.329)" fill="#e78857" fill-rule="evenodd"/>
                                        <path id="Path_1117" data-name="Path 1117" d="M374.829,510.517l65.512-45.473L420.676,506.7Z" transform="translate(26.013 40.227)" fill="#6e9ebe" fill-rule="evenodd"/>
                                        <path id="Path_1118" data-name="Path 1118" d="M442.282,544.441l-6.574-79.4L416.043,506.7Z" transform="translate(30.645 40.227)" fill="#647fb1" fill-rule="evenodd"/>
                                        <path id="Path_1119" data-name="Path 1119" d="M485.322,278.6l-4.519,3.137,5.23-.431Z" transform="translate(37.923 19.273)" fill="#b13524"/>
                                        <path id="Path_1120" data-name="Path 1120" d="M245.232,449.525l65.511-45.473-19.665,41.669Z" transform="translate(11.447 33.372)" fill="#6ac19b" fill-rule="evenodd"/>
                                        <path id="Path_1121" data-name="Path 1121" d="M312.682,483.448l-6.569-79.395L286.446,445.72Z" transform="translate(16.079 33.372)" fill="#5cb193" fill-rule="evenodd"/>
                                        <path id="Path_1122" data-name="Path 1122" d="M285.237,148.415l-21.04,5.546-1.376,2.915,26.235,37.73Z" transform="translate(13.424 4.641)" fill="#ef954e"/>
                                        <path id="Path_1123" data-name="Path 1123" d="M363.018,367.78l65.508-45.48-19.662,41.673Z" transform="translate(24.685 24.184)" fill="#e27169" fill-rule="evenodd"/>
                                        <path id="Path_1124" data-name="Path 1124" d="M430.468,401.7,423.893,322.3l-19.662,41.671Z" transform="translate(29.317 24.184)" fill="#d1897b" fill-rule="evenodd"/>
                                        <path id="Path_1125" data-name="Path 1125" d="M555.383,540.16l-1.666-6.351-15.769,10.946Z" transform="translate(44.345 47.955)" fill="#251059"/>
                                        <path id="Path_1126" data-name="Path 1126" d="M485.322,278.6l-4.519,3.137,5.23-.431Z" transform="translate(37.923 19.273)" fill="#b13524"/>
                                        <path id="Path_1127" data-name="Path 1127" d="M245.232,449.525l65.511-45.473-19.665,41.669Z" transform="translate(11.447 33.372)" fill="#6ac19b" fill-rule="evenodd"/>
                                        <path id="Path_1128" data-name="Path 1128" d="M312.682,483.448l-6.569-79.395L286.446,445.72Z" transform="translate(16.079 33.372)" fill="#5cb193" fill-rule="evenodd"/>
                                        <path id="Path_1129" data-name="Path 1129" d="M285.237,148.415l-21.04,5.546-1.376,2.915,26.235,37.73Z" transform="translate(13.424 4.641)" fill="#ef954e"/>
                                        <path id="Path_1130" data-name="Path 1130" d="M363.018,367.78l65.508-45.48-19.662,41.673Z" transform="translate(24.685 24.184)" fill="#e27169" fill-rule="evenodd"/>
                                        <path id="Path_1131" data-name="Path 1131" d="M430.468,401.7,423.893,322.3l-19.662,41.671Z" transform="translate(29.317 24.184)" fill="#d1897b" fill-rule="evenodd"/>
                                        <path id="Path_1132" data-name="Path 1132" d="M555.383,540.16l-1.666-6.351-15.769,10.946Z" transform="translate(44.345 47.955)" fill="#251059"/>
                                        <path id="Path_1133" data-name="Path 1133" d="M285.2,373.883,259.02,336.156l-19.705,41.625Z" transform="translate(10.782 25.741)" fill="#83c198" fill-rule="evenodd"/>
                                        <path id="Path_1134" data-name="Path 1134" d="M283.192,374.282,257,336.568l45.894-3.908Z" transform="translate(12.769 25.348)" fill="#8ab794" fill-rule="evenodd"/>
                                        <path id="Path_1135" data-name="Path 1135" d="M426.608,577.625l-26.178-37.741-19.7,41.636Z" transform="translate(26.676 48.638)" fill="#917844" fill-rule="evenodd"/>
                                        <path id="Path_1136" data-name="Path 1136" d="M424.6,578.021l-26.195-37.728,45.9-3.893Z" transform="translate(28.662 48.246)" fill="#635c73" fill-rule="evenodd"/>
                                        <path id="Path_1137" data-name="Path 1137" d="M402.984,292.131l-26.178-37.737-19.7,41.635Z" transform="translate(24.021 16.552)" fill="#de5658" fill-rule="evenodd"/>
                                        <path id="Path_1138" data-name="Path 1138" d="M400.978,292.531,374.78,254.8l45.9-3.9Z" transform="translate(26.007 16.16)" fill="#df5a56" fill-rule="evenodd"/>
                                        <path id="Path_1139" data-name="Path 1139" d="M544.392,495.873l-26.178-37.741-19.7,41.636Z" transform="translate(39.913 39.45)" fill="#3c3984" fill-rule="evenodd"/>
                                        <path id="Path_1140" data-name="Path 1140" d="M543.37,493.943l-9.783-37.124-17.4,1.475,26.2,37.726Z" transform="translate(41.9 39.303)" fill="#30226d"/>
                                        <path id="Path_1141" data-name="Path 1141" d="M375.219,124.9l-19.652,5.179L345.29,151.8l45.882-3.893Z" transform="translate(22.693 1.998)" fill="#da4b4e"/>
                                        <path id="Path_1142" data-name="Path 1142" d="M402.845,117.641l-30.682,8.087,15.966,23Z" transform="translate(25.713 1.182)" fill="#cb413e"/>
                                        <path id="Path_1143" data-name="Path 1143" d="M499.36,328.76,486.7,355.528l19.284-1.64Z" transform="translate(38.585 24.91)" fill="#d7772c"/>
                                        <path id="Path_1144" data-name="Path 1144" d="M297.015,516.63l-26.182-37.737-19.7,41.639Z" transform="translate(12.11 41.783)" fill="#4ea799" fill-rule="evenodd"/>
                                        <path id="Path_1145" data-name="Path 1145" d="M295.007,517.028l-26.2-37.723,45.9-3.9Z" transform="translate(14.097 41.392)" fill="#3a8d8c" fill-rule="evenodd"/>
                                        <path id="Path_1146" data-name="Path 1146" d="M273.391,231.143,247.211,193.4l-19.7,41.637Z" transform="translate(9.455 9.697)" fill="#f4ad55" fill-rule="evenodd"/>
                                        <path id="Path_1147" data-name="Path 1147" d="M271.38,231.543l-26.2-37.728,45.9-3.9Z" transform="translate(11.442 9.305)" fill="#f2a14e" fill-rule="evenodd"/>
                                        <path id="Path_1148" data-name="Path 1148" d="M414.8,434.878,388.62,397.14,368.914,438.78Z" transform="translate(25.348 32.595)" fill="#939ca9" fill-rule="evenodd"/>
                                        <path id="Path_1149" data-name="Path 1149" d="M412.787,435.277,386.6,397.552l45.893-3.9Z" transform="translate(27.335 32.203)" fill="#8294b2" fill-rule="evenodd"/>
                                        <path id="Path_1150" data-name="Path 1150" d="M442.856,113.411,427.735,145.37l23.03-1.956Z" transform="translate(31.959 0.707)" fill="#912717"/>
                                        <path id="Path_1151" data-name="Path 1151" d="M238.052,305.955l-26.181-37.742-19.7,41.636Z" transform="translate(5.484 18.105)" fill="#f5b95f" fill-rule="evenodd"/>
                                        <path id="Path_1152" data-name="Path 1152" d="M236.041,306.352l-26.2-37.725,45.9-3.9Z" transform="translate(7.47 17.714)" fill="#f1ae58" fill-rule="evenodd"/>
                                        <path id="Path_1153" data-name="Path 1153" d="M379.461,509.687,353.28,471.95l-19.705,41.636Z" transform="translate(21.376 41.003)" fill="#46aaa6" fill-rule="evenodd"/>
                                        <path id="Path_1154" data-name="Path 1154" d="M377.45,510.09l-26.194-37.726,45.9-3.9Z" transform="translate(23.363 40.611)" fill="#5db1b1" fill-rule="evenodd"/>
                                        <path id="Path_1155" data-name="Path 1155" d="M355.834,224.2l-26.181-37.742-19.7,41.64Z" transform="translate(18.721 8.917)" fill="#e3645a" fill-rule="evenodd"/>
                                        <path id="Path_1156" data-name="Path 1156" d="M353.824,224.6l-26.2-37.727,45.9-3.9Z" transform="translate(20.708 8.526)" fill="#e15659" fill-rule="evenodd"/>
                                        <path id="Path_1157" data-name="Path 1157" d="M497.248,427.93,471.061,390.2l-19.7,41.636Z" transform="translate(34.614 31.815)" fill="#6694b5" fill-rule="evenodd"/>
                                        <path id="Path_1158" data-name="Path 1158" d="M495.237,428.338l-26.2-37.729,45.895-3.9Z" transform="translate(36.601 31.423)" fill="#6f91a4" fill-rule="evenodd"/>
                                        <path id="Path_1159" data-name="Path 1159" d="M278.593,550.216l-38.253,3.25,4.949,18.782L258.9,591.835Z" transform="translate(10.898 49.799)" fill="#4aa9a8"/>
                                        <path id="Path_1160" data-name="Path 1160" d="M485.431,285.191l-26.182-37.736-19.7,41.635Z" transform="translate(33.286 15.772)" fill="#d16745" fill-rule="evenodd"/>
                                        <path id="Path_1161" data-name="Path 1161" d="M486.867,278.1l-8.495-32.246-21.151,1.793,26.2,37.727Z" transform="translate(35.273 15.593)" fill="#be4a31"/>
                                        <path id="Path_1162" data-name="Path 1162" d="M223.049,410.961,209.6,439.376l3.271,12.408,36.359-3.087Z" transform="translate(7.443 34.149)" fill="#69bf9e"/>
                                        <path id="Path_1163" data-name="Path 1163" d="M247.855,449.1l-26.2-37.726,45.9-3.9Z" transform="translate(8.798 33.756)" fill="#70c8a2" fill-rule="evenodd"/>
                                        <path id="Path_1164" data-name="Path 1164" d="M367.649,366.951,341.467,329.2l-19.705,41.642Z" transform="translate(20.049 24.96)" fill="#e07f7d" fill-rule="evenodd"/>
                                        <path id="Path_1165" data-name="Path 1165" d="M365.637,367.349l-26.2-37.731,45.9-3.9Z" transform="translate(22.035 24.568)" fill="#e47672" fill-rule="evenodd"/>
                                        <path id="Path_1166" data-name="Path 1166" d="M499.242,557.154l-16.792-24.212L466.967,565.66Z" transform="translate(36.368 47.858)" fill="#3a337f"/>
                                        <path id="Path_1167" data-name="Path 1167" d="M515.7,552.8l11.052-23.345-45.9,3.9,16.805,24.2Z" transform="translate(37.928 47.466)" fill="#322571"/>
                                        <path id="Path_1168" data-name="Path 1168" d="M276.577,298.839,256.989,340.39l45.908-3.764Z" transform="translate(12.769 21.547)" fill="#d79560" fill-rule="evenodd"/>
                                        <path id="Path_1169" data-name="Path 1169" d="M417.987,502.573,398.4,544.123l45.905-3.759Z" transform="translate(28.662 44.445)" fill="#758289" fill-rule="evenodd"/>
                                        <path id="Path_1170" data-name="Path 1170" d="M394.361,217.087l-19.589,41.54,45.913-3.751Z" transform="translate(26.006 12.359)" fill="#df5a56" fill-rule="evenodd"/>
                                        <path id="Path_1171" data-name="Path 1171" d="M527.6,436.4,516.18,460.614l17.427-1.423Z" transform="translate(41.899 37.007)" fill="#404586"/>
                                        <path id="Path_1172" data-name="Path 1172" d="M314.315,605.473l-14.728-21.146L286.111,612.9Z" transform="translate(16.042 53.633)" fill="#55a9a3"/>
                                        <path id="Path_1173" data-name="Path 1173" d="M288.4,441.585l-19.6,41.541,45.911-3.756Z" transform="translate(14.096 37.59)" fill="#56a991" fill-rule="evenodd"/>
                                        <path id="Path_1174" data-name="Path 1174" d="M264.768,156.1l-19.6,41.537,45.913-3.751Z" transform="translate(11.441 5.505)" fill="#f2a151" fill-rule="evenodd"/>
                                        <path id="Path_1175" data-name="Path 1175" d="M406.177,359.837l-19.591,41.535,45.9-3.755Z" transform="translate(27.334 28.403)" fill="#c5928b" fill-rule="evenodd"/>
                                        <path id="Path_1176" data-name="Path 1176" d="M229.429,230.909l-19.593,41.541,45.913-3.754Z" transform="translate(7.469 13.913)" fill="#f6b55b" fill-rule="evenodd"/>
                                        <path id="Path_1177" data-name="Path 1177" d="M370.835,434.642l-19.587,41.543,45.907-3.752Z" transform="translate(23.362 36.81)" fill="#6bacaf" fill-rule="evenodd"/>
                                        <path id="Path_1178" data-name="Path 1178" d="M347.215,149.155l-19.594,41.54,45.912-3.753Z" transform="translate(20.707 4.724)" fill="#e15553" fill-rule="evenodd"/>
                                        <path id="Path_1179" data-name="Path 1179" d="M488.623,352.894l-19.6,41.536,45.916-3.75Z" transform="translate(36.599 27.623)" fill="#ce8b41" fill-rule="evenodd"/>
                                        <path id="Path_1180" data-name="Path 1180" d="M252.546,516.393l-14.569,30.891,2.642,10.029,38.246-3.131Z" transform="translate(10.632 45.998)" fill="#5ac2b1"/>
                                        <path id="Path_1181" data-name="Path 1181" d="M471.094,221.038l-13.877,29.424,21.177-1.73Z" transform="translate(35.272 12.803)" fill="#b63c28"/>
                                        <path id="Path_1182" data-name="Path 1182" d="M241.239,373.648l-19.592,41.544,45.913-3.75Z" transform="translate(8.797 29.955)" fill="#74d0aa" fill-rule="evenodd"/>
                                        <path id="Path_1183" data-name="Path 1183" d="M386.185,584.636l-5.049-7.25-4.618,9.8Z" transform="translate(26.202 52.853)" fill="#ba8240"/>
                                        <path id="Path_1184" data-name="Path 1184" d="M359.029,291.9l-19.594,41.539,45.909-3.752Z" transform="translate(22.035 20.767)" fill="#e15a60" fill-rule="evenodd"/>
                                        <path id="Path_1185" data-name="Path 1185" d="M500.435,495.632l-19.593,41.543,45.906-3.754Z" transform="translate(37.927 43.665)" fill="#382f7d" fill-rule="evenodd"/>
                                        <path id="Path_1186" data-name="Path 1186" d="M279.244,298.855l-19.572,41.556-26.259-37.866Z" transform="translate(10.119 21.549)" fill="#cca76a" fill-rule="evenodd"/>
                                        <path id="Path_1187" data-name="Path 1187" d="M420.653,502.591,401.086,544.14l-26.265-37.86Z" transform="translate(26.012 44.447)" fill="#87885b" fill-rule="evenodd"/>
                                        <path id="Path_1188" data-name="Path 1188" d="M397.031,217.1,377.46,258.652,351.2,220.79Z" transform="translate(23.357 12.361)" fill="#df5757" fill-rule="evenodd"/>
                                        <path id="Path_1189" data-name="Path 1189" d="M530.262,438.091l-4.308-16.356-33.35,2.688,26.265,37.865Z" transform="translate(39.249 35.359)" fill="#4b5f9d"/>
                                        <path id="Path_1190" data-name="Path 1190" d="M289.424,612.892l13.446-28.553-45.832,3.693,19.582,28.233Z" transform="translate(12.774 53.634)" fill="#499ca2"/>
                                        <path id="Path_1191" data-name="Path 1191" d="M486.031,281.031l-5.236.423,8.628,12.444Z" transform="translate(37.922 19.546)" fill="#b9452a"/>
                                        <path id="Path_1192" data-name="Path 1192" d="M291.058,441.6l-19.571,41.55-26.263-37.863Z" transform="translate(11.446 37.592)" fill="#5fb599" fill-rule="evenodd"/>
                                        <path id="Path_1193" data-name="Path 1193" d="M267.095,156.109l-14.464,1.163-28,7.382,22.889,33.007Z" transform="translate(9.132 5.506)" fill="#f4ae57"/>
                                        <path id="Path_1194" data-name="Path 1194" d="M408.842,359.849,389.27,401.4l-26.26-37.854Z" transform="translate(24.684 28.404)" fill="#c9948b" fill-rule="evenodd"/>
                                        <path id="Path_1195" data-name="Path 1195" d="M232.1,230.924,212.519,272.47l-26.26-37.86Z" transform="translate(4.819 13.914)" fill="#f7bb5f" fill-rule="evenodd"/>
                                        <path id="Path_1196" data-name="Path 1196" d="M373.506,434.659l-19.574,41.552L327.67,438.342Z" transform="translate(20.713 36.812)" fill="#5db7a8" fill-rule="evenodd"/>
                                        <path id="Path_1197" data-name="Path 1197" d="M349.875,149.168l-19.569,41.549-26.26-37.86Z" transform="translate(18.057 4.726)" fill="#e46151" fill-rule="evenodd"/>
                                        <path id="Path_1198" data-name="Path 1198" d="M491.287,352.912l-19.575,41.54L445.456,356.6Z" transform="translate(33.95 27.624)" fill="#b79367" fill-rule="evenodd"/>
                                        <path id="Path_1199" data-name="Path 1199" d="M253.337,516.407,231.084,518.2l7.681,29.139Z" transform="translate(9.857 46)" fill="#5fbaa4"/>
                                        <path id="Path_1200" data-name="Path 1200" d="M473.757,222.232l-3.013-11.439-37.1,2.986L459.9,251.639Z" transform="translate(32.623 11.652)" fill="#c65338"/>
                                        <path id="Path_1201" data-name="Path 1201" d="M243.911,373.668l-19.578,41.545-26.261-37.856Z" transform="translate(6.147 29.957)" fill="#70cdaa" fill-rule="evenodd"/>
                                        <path id="Path_1202" data-name="Path 1202" d="M380.714,587.172l4.6-9.773-45.835,3.689,9.938,14.329Z" transform="translate(22.04 52.854)" fill="#c08943"/>
                                        <path id="Path_1203" data-name="Path 1203" d="M361.69,291.913,342.12,333.461,315.857,295.6Z" transform="translate(19.385 20.769)" fill="#e25b64" fill-rule="evenodd"/>
                                        <path id="Path_1204" data-name="Path 1204" d="M503.1,495.647,483.527,537.2l-26.263-37.862Z" transform="translate(35.278 43.666)" fill="#3d3987" fill-rule="evenodd"/>
                                        <path id="Path_1205" data-name="Path 1205" d="M455.985,167.244l-4.641,9.858,7.083-.585Z" transform="translate(34.612 6.757)" fill="#c35d1f"/>
                                        <path id="Path_1206" data-name="Path 1206" d="M215.774,343.832l45.907-3.8-26.294-37.884Z" transform="translate(8.137 21.92)" fill="#d6bb73" fill-rule="evenodd"/>
                                        <path id="Path_1207" data-name="Path 1207" d="M357.186,547.554l45.9-3.791L376.8,505.89Z" transform="translate(24.03 44.818)" fill="#82925c" fill-rule="evenodd"/>
                                        <path id="Path_1208" data-name="Path 1208" d="M333.561,262.069l45.9-3.79L353.173,220.4Z" transform="translate(21.375 12.732)" fill="#dd5659" fill-rule="evenodd"/>
                                        <path id="Path_1209" data-name="Path 1209" d="M474.967,465.809l45.9-3.8-26.289-37.878Z" transform="translate(37.267 35.629)" fill="#537db2" fill-rule="evenodd"/>
                                        <path id="Path_1210" data-name="Path 1210" d="M277.187,615.892l-19.606-28.251-5.417,11.513,5.748,21.815Z" transform="translate(12.226 54.006)" fill="#407b8b"/>
                                        <path id="Path_1211" data-name="Path 1211" d="M491.4,293.823l-8.63-12.431-19.612,41.67,35.182-2.906Z" transform="translate(35.94 19.586)" fill="#c9603c"/>
                                        <path id="Path_1212" data-name="Path 1212" d="M227.589,486.564l45.9-3.789L247.2,444.9Z" transform="translate(9.464 37.962)" fill="#6ecaa6" fill-rule="evenodd"/>
                                        <path id="Path_1213" data-name="Path 1213" d="M226.961,163.789l-6.483,1.708-16.52,35.091,45.911-3.794Z" transform="translate(6.809 6.369)" fill="#f7b95e"/>
                                        <path id="Path_1214" data-name="Path 1214" d="M345.373,404.814l45.9-3.791-26.29-37.871Z" transform="translate(22.702 28.775)" fill="#d5a08d" fill-rule="evenodd"/>
                                        <g id="Group_28" data-name="Group 28" transform="translate(143.378 107.119)">
                                            <g id="Group_27" data-name="Group 27" clip-path="url(#clip-path-5)">
                                                <path id="Path_1215" data-name="Path 1215" d="M435.329,105.871l11.265-.931-1.193-1.723Z" transform="translate(-110.566 -107.558)" fill="#730a13" fill-rule="evenodd"/>
                                            </g>
                                        </g>
                                        <path id="Path_1216" data-name="Path 1216" d="M168.623,275.887l45.909-3.79-26.294-37.875Z" transform="translate(2.837 14.285)" fill="#f8be60" fill-rule="evenodd"/>
                                        <path id="Path_1217" data-name="Path 1217" d="M310.034,479.625l45.9-3.789-26.29-37.88Z" transform="translate(18.73 37.183)" fill="#57b29a" fill-rule="evenodd"/>
                                        <path id="Path_1218" data-name="Path 1218" d="M286.408,194.135l45.9-3.79-26.289-37.877Z" transform="translate(16.075 5.097)" fill="#e9784b" fill-rule="evenodd"/>
                                        <path id="Path_1219" data-name="Path 1219" d="M427.815,397.873l45.906-3.792L447.43,356.21Z" transform="translate(31.968 27.995)" fill="#bb9e87" fill-rule="evenodd"/>
                                        <path id="Path_1220" data-name="Path 1220" d="M416,255.125l45.908-3.788-26.3-37.877Z" transform="translate(30.64 11.952)" fill="#d7654a" fill-rule="evenodd"/>
                                        <path id="Path_1221" data-name="Path 1221" d="M198.37,376.966l-2.965,6.3,8.768,33.272,20.489-1.688Z" transform="translate(5.847 30.328)" fill="#6aaf91"/>
                                        <path id="Path_1222" data-name="Path 1222" d="M350.357,595.044,340.4,580.7l-9.12,19.369Z" transform="translate(21.118 53.225)" fill="#bc904b"/>
                                        <path id="Path_1223" data-name="Path 1223" d="M298.222,336.882l45.9-3.792-26.288-37.877Z" transform="translate(17.403 21.14)" fill="#e26663" fill-rule="evenodd"/>
                                        <path id="Path_1224" data-name="Path 1224" d="M439.627,540.617l45.9-3.8-26.287-37.875Z" transform="translate(33.295 44.037)" fill="#464d95" fill-rule="evenodd"/>
                                        <path id="Path_1225" data-name="Path 1225" d="M458.424,175.556l-7.089.591L463,192.923Z" transform="translate(34.611 7.692)" fill="#b84120"/>
                                        <path id="Path_1226" data-name="Path 1226" d="M215.767,339.983l45.92-3.81L242.111,377.86Z" transform="translate(8.136 25.743)" fill="#81d2aa" fill-rule="evenodd"/>
                                        <path id="Path_1227" data-name="Path 1227" d="M357.18,543.712l45.913-3.813-19.577,41.7Z" transform="translate(24.029 48.64)" fill="#b38337" fill-rule="evenodd"/>
                                        <path id="Path_1228" data-name="Path 1228" d="M333.551,258.225l45.919-3.812-19.577,41.7Z" transform="translate(21.373 16.554)" fill="#dd5259" fill-rule="evenodd"/>
                                        <path id="Path_1229" data-name="Path 1229" d="M474.961,461.962l45.914-3.813L501.3,499.842Z" transform="translate(37.266 39.452)" fill="#41488f" fill-rule="evenodd"/>
                                        <path id="Path_1230" data-name="Path 1230" d="M356.8,129.53l-21.49,5.663,11.242,16.165Z" transform="translate(21.572 2.519)" fill="#de5153"/>
                                        <path id="Path_1231" data-name="Path 1231" d="M502.037,330.283l-3.711-14.078-35.179,2.919,26.341,37.891Z" transform="translate(35.939 23.499)" fill="#db8134"/>
                                        <path id="Path_1232" data-name="Path 1232" d="M227.579,482.722l45.922-3.809L253.923,520.6Z" transform="translate(9.463 41.786)" fill="#60bfa7" fill-rule="evenodd"/>
                                        <path id="Path_1233" data-name="Path 1233" d="M203.951,197.233l45.922-3.815-19.578,41.7Z" transform="translate(6.808 9.699)" fill="#f7b85d" fill-rule="evenodd"/>
                                        <path id="Path_1234" data-name="Path 1234" d="M345.364,400.969l45.915-3.811L371.7,438.852Z" transform="translate(22.701 32.597)" fill="#94aaa6" fill-rule="evenodd"/>
                                        <path id="Path_1235" data-name="Path 1235" d="M444.975,114.2l-1.864-7.083-34.039,8.972,20.9,30.064Z" transform="translate(29.861 0)" fill="#a6331b"/>
                                        <path id="Path_1236" data-name="Path 1236" d="M168.614,272.044l45.919-3.815-19.575,41.7Z" transform="translate(2.836 18.107)" fill="#f6be62" fill-rule="evenodd"/>
                                        <path id="Path_1237" data-name="Path 1237" d="M310.027,475.78l45.915-3.811-19.577,41.7Z" transform="translate(18.73 41.005)" fill="#3b9797" fill-rule="evenodd"/>
                                        <path id="Path_1238" data-name="Path 1238" d="M286.4,190.3l45.912-3.82-19.568,41.7Z" transform="translate(16.074 8.919)" fill="#e97c56" fill-rule="evenodd"/>
                                        <path id="Path_1239" data-name="Path 1239" d="M427.811,394.028l45.919-3.813-19.578,41.7Z" transform="translate(31.967 31.817)" fill="#6895be" fill-rule="evenodd"/>
                                        <path id="Path_1240" data-name="Path 1240" d="M286.4,190.3l45.912-3.82-19.568,41.7Z" transform="translate(16.074 8.919)" fill="#e97c56" fill-rule="evenodd"/>
                                        <path id="Path_1241" data-name="Path 1241" d="M427.811,394.028l45.919-3.813-19.578,41.7Z" transform="translate(31.967 31.817)" fill="#6895be" fill-rule="evenodd"/>
                                        <path id="Path_1242" data-name="Path 1242" d="M415.995,251.283l45.921-3.813-19.58,41.7Z" transform="translate(30.639 15.774)" fill="#db6d4f" fill-rule="evenodd"/>
                                        <path id="Path_1243" data-name="Path 1243" d="M223.78,410.977l-20.5,1.7,7.083,26.879Z" transform="translate(6.732 34.15)" fill="#59a28a"/>
                                        <path id="Path_1244" data-name="Path 1244" d="M298.212,333.037l45.917-3.813-19.578,41.7Z" transform="translate(17.402 24.962)" fill="#cb9a8d" fill-rule="evenodd"/>
                                        <path id="Path_1245" data-name="Path 1245" d="M470.21,565.615l15.33-32.655-45.919,3.811,21.685,31.19Z" transform="translate(33.295 47.86)" fill="#413e88"/>
                                        <path id="Path_1246" data-name="Path 1246" d="M416.666,258.952,410.1,179.56l26.245,37.806Z" transform="translate(29.976 8.142)" fill="#da614e" fill-rule="evenodd"/>
                                        <path id="Path_1247" data-name="Path 1247" d="M471.895,208.643l-61.8-29.081,26.243,37.806,37.026-3.141Z" transform="translate(29.976 8.142)" fill="#d26232"/>
                                        <path id="Path_1248" data-name="Path 1248" d="M186.458,348.684l5.473,20.764,7.494,10.79,45.844-3.883Z" transform="translate(4.842 27.149)" fill="#a1cfa6"/>
                                        <path id="Path_1249" data-name="Path 1249" d="M333.074,603.864l9.108-19.254-26.24-37.81,4.986,60.265Z" transform="translate(19.394 49.415)" fill="#9d9b66"/>
                                        <path id="Path_1250" data-name="Path 1250" d="M388.018,580.721,315.94,546.8l26.243,37.808Z" transform="translate(19.394 49.416)" fill="#b6924a" fill-rule="evenodd"/>
                                        <path id="Path_1251" data-name="Path 1251" d="M298.881,340.7l-6.567-79.39,26.24,37.806Z" transform="translate(16.739 17.33)" fill="#e87958" fill-rule="evenodd"/>
                                        <path id="Path_1252" data-name="Path 1252" d="M364.394,295.23l-72.08-33.918,26.24,37.806Z" transform="translate(16.739 17.33)" fill="#e56657" fill-rule="evenodd"/>
                                        <path id="Path_1253" data-name="Path 1253" d="M440.3,544.441l-6.574-79.4,26.241,37.813Z" transform="translate(32.632 40.227)" fill="#566faa" fill-rule="evenodd"/>
                                        <path id="Path_1254" data-name="Path 1254" d="M505.8,498.972l-72.079-33.928,26.241,37.813Z" transform="translate(32.632 40.227)" fill="#5878af" fill-rule="evenodd"/>
                                        <path id="Path_1255" data-name="Path 1255" d="M169.289,279.714l-6.571-79.394,26.241,37.807Z" transform="translate(2.174 10.475)" fill="#f7bb58" fill-rule="evenodd"/>
                                        <path id="Path_1256" data-name="Path 1256" d="M234.8,234.243l-72.085-33.922,26.245,37.807Z" transform="translate(2.173 10.475)" fill="#f8bf61" fill-rule="evenodd"/>
                                        <path id="Path_1257" data-name="Path 1257" d="M310.695,483.448l-6.569-79.395,26.243,37.813Z" transform="translate(18.066 33.372)" fill="#5fb798" fill-rule="evenodd"/>
                                        <path id="Path_1258" data-name="Path 1258" d="M376.205,437.979l-72.078-33.926,26.241,37.81Z" transform="translate(18.067 33.372)" fill="#81caa6" fill-rule="evenodd"/>
                                        <path id="Path_1259" data-name="Path 1259" d="M306.463,153.475l-6.334-9.123-17.158,4.52,3.819,46.191Z" transform="translate(15.689 4.185)" fill="#eb824d"/>
                                        <path id="Path_1260" data-name="Path 1260" d="M324.7,138.118l-26.3,6.935,6.334,9.123,45.841-3.881Z" transform="translate(17.422 3.484)" fill="#e4644c"/>
                                        <path id="Path_1261" data-name="Path 1261" d="M428.481,401.7,421.907,322.3l26.243,37.816Z" transform="translate(31.304 24.184)" fill="#d28a71" fill-rule="evenodd"/>
                                        <path id="Path_1262" data-name="Path 1262" d="M493.99,356.23,421.907,322.3l26.243,37.819Z" transform="translate(31.304 24.184)" fill="#da8055" fill-rule="evenodd"/>
                                        <path id="Path_1263" data-name="Path 1263" d="M227.73,505.284l3.729,14.152,22.316-1.9Z" transform="translate(9.48 44.749)" fill="#6cc3a0"/>
                                        <path id="Path_1264" data-name="Path 1264" d="M169.289,279.714l-6.571-79.394,26.241,37.807Z" transform="translate(2.174 10.475)" fill="#f7bb58" fill-rule="evenodd"/>
                                        <path id="Path_1265" data-name="Path 1265" d="M234.8,234.243l-72.085-33.922,26.245,37.807Z" transform="translate(2.173 10.475)" fill="#f8bf61" fill-rule="evenodd"/>
                                        <path id="Path_1266" data-name="Path 1266" d="M310.695,483.448l-6.569-79.395,26.243,37.813Z" transform="translate(18.066 33.372)" fill="#5fb798" fill-rule="evenodd"/>
                                        <path id="Path_1267" data-name="Path 1267" d="M376.205,437.979l-72.078-33.926,26.241,37.81Z" transform="translate(18.067 33.372)" fill="#81caa6" fill-rule="evenodd"/>
                                        <path id="Path_1268" data-name="Path 1268" d="M306.463,153.475l-6.334-9.123-17.158,4.52,3.819,46.191Z" transform="translate(15.689 4.185)" fill="#eb824d"/>
                                        <path id="Path_1269" data-name="Path 1269" d="M324.7,138.118l-26.3,6.935,6.334,9.123,45.841-3.881Z" transform="translate(17.422 3.484)" fill="#e4644c"/>
                                        <path id="Path_1270" data-name="Path 1270" d="M428.481,401.7,421.907,322.3l26.243,37.816Z" transform="translate(31.304 24.184)" fill="#d28a71" fill-rule="evenodd"/>
                                        <path id="Path_1271" data-name="Path 1271" d="M493.99,356.23,421.907,322.3l26.243,37.819Z" transform="translate(31.304 24.184)" fill="#da8055" fill-rule="evenodd"/>
                                        <path id="Path_1272" data-name="Path 1272" d="M227.73,505.284l3.729,14.152,22.316-1.9Z" transform="translate(9.48 44.749)" fill="#6cc3a0"/>
                                        <path id="Path_1273" data-name="Path 1273" d="M467.643,192.889,456,176.1,410.1,179.952l61.8,29.081Z" transform="translate(29.976 7.752)" fill="#cb592f"/>
                                        <path id="Path_1274" data-name="Path 1274" d="M460.625,169.1,455.861,151,410.1,182.772,456,178.915Z" transform="translate(29.976 4.932)" fill="#d06624"/>
                                        <path id="Path_1275" data-name="Path 1275" d="M219.288,339.607l-34.536,2.9,1.9,7.2,58.812,27.667Z" transform="translate(4.65 26.129)" fill="#87d2ac"/>
                                        <path id="Path_1276" data-name="Path 1276" d="M239.047,302.188l-55.684,38.657,1.546,5.868,34.536-2.9Z" transform="translate(4.494 21.924)" fill="#dcc781"/>
                                        <path id="Path_1277" data-name="Path 1277" d="M388.018,581.11,315.94,547.191l45.906-3.856Z" transform="translate(19.394 49.026)" fill="#c18c3e" fill-rule="evenodd"/>
                                        <path id="Path_1278" data-name="Path 1278" d="M381.447,505.923,315.94,551.4l45.9-3.859Z" transform="translate(19.394 44.821)" fill="#65997b" fill-rule="evenodd"/>
                                        <path id="Path_1279" data-name="Path 1279" d="M364.394,295.624,292.314,261.7l45.91-3.855Z" transform="translate(16.739 16.94)" fill="#e1585a" fill-rule="evenodd"/>
                                        <path id="Path_1280" data-name="Path 1280" d="M357.824,220.435l-65.51,45.472,45.9-3.852Z" transform="translate(16.739 12.735)" fill="#e36955" fill-rule="evenodd"/>
                                        <path id="Path_1281" data-name="Path 1281" d="M505.8,499.361l-72.079-33.928,45.908-3.85Z" transform="translate(32.632 39.838)" fill="#49619e" fill-rule="evenodd"/>
                                        <path id="Path_1282" data-name="Path 1282" d="M499.233,424.169l-65.512,45.473,45.908-3.85Z" transform="translate(32.632 35.633)" fill="#5686bb" fill-rule="evenodd"/>
                                        <path id="Path_1283" data-name="Path 1283" d="M234.8,234.633,162.715,200.71l45.909-3.854Z" transform="translate(2.173 10.085)" fill="#f8bf61" fill-rule="evenodd"/>
                                        <path id="Path_1284" data-name="Path 1284" d="M225.15,165.316l-10.206,2.69-52.231,36.251,45.91-3.855Z" transform="translate(2.173 6.541)" fill="#f5bc5f"/>
                                        <path id="Path_1285" data-name="Path 1285" d="M376.205,438.368l-72.078-33.926,45.9-3.848Z" transform="translate(18.067 32.983)" fill="#85c7a8" fill-rule="evenodd"/>
                                        <path id="Path_1286" data-name="Path 1286" d="M369.636,363.185l-65.51,45.462,45.905-3.848Z" transform="translate(18.066 28.779)" fill="#b5c5a6" fill-rule="evenodd"/>
                                        <path id="Path_1287" data-name="Path 1287" d="M336.784,134.625l-14.743,3.885,25.872,12.177Z" transform="translate(20.08 3.091)" fill="#e05751"/>
                                        <path id="Path_1288" data-name="Path 1288" d="M493.99,356.619l-72.079-33.926,45.9-3.853Z" transform="translate(31.304 23.795)" fill="#d88750" fill-rule="evenodd"/>
                                        <path id="Path_1289" data-name="Path 1289" d="M487.418,281.426,421.911,326.9l45.906-3.855Z" transform="translate(31.304 19.59)" fill="#d9734d" fill-rule="evenodd"/>
                                        <path id="Path_1290" data-name="Path 1290" d="M228.262,482.343l-6.45.543,6.583,24.977,26.042,12.256Z" transform="translate(8.815 42.171)" fill="#6cc6a4"/>
                                        <path id="Path_1291" data-name="Path 1291" d="M248.407,444.931,216.99,466.74l5.365,20.353,6.45-.539Z" transform="translate(8.273 37.966)" fill="#69c1a0"/>
                                        <path id="Path_1292" data-name="Path 1292" d="M234.8,234.633,162.715,200.71l45.909-3.854Z" transform="translate(2.173 10.085)" fill="#f8bf61" fill-rule="evenodd"/>
                                        <path id="Path_1293" data-name="Path 1293" d="M225.15,165.316l-10.206,2.69-52.231,36.251,45.91-3.855Z" transform="translate(2.173 6.541)" fill="#f5bc5f"/>
                                        <path id="Path_1294" data-name="Path 1294" d="M376.205,438.368l-72.078-33.926,45.9-3.848Z" transform="translate(18.067 32.983)" fill="#85c7a8" fill-rule="evenodd"/>
                                        <path id="Path_1295" data-name="Path 1295" d="M369.636,363.185l-65.51,45.462,45.905-3.848Z" transform="translate(18.066 28.779)" fill="#b5c5a6" fill-rule="evenodd"/>
                                        <path id="Path_1296" data-name="Path 1296" d="M336.784,134.625l-14.743,3.885,25.872,12.177Z" transform="translate(20.08 3.091)" fill="#e05751"/>
                                        <path id="Path_1297" data-name="Path 1297" d="M493.99,356.619l-72.079-33.926,45.9-3.853Z" transform="translate(31.304 23.795)" fill="#d88750" fill-rule="evenodd"/>
                                        <path id="Path_1298" data-name="Path 1298" d="M487.418,281.426,421.911,326.9l45.906-3.855Z" transform="translate(31.304 19.59)" fill="#d9734d" fill-rule="evenodd"/>
                                        <path id="Path_1299" data-name="Path 1299" d="M228.262,482.343l-6.45.543,6.583,24.977,26.042,12.256Z" transform="translate(8.815 42.171)" fill="#6cc6a4"/>
                                        <path id="Path_1300" data-name="Path 1300" d="M248.407,444.931,216.99,466.74l5.365,20.353,6.45-.539Z" transform="translate(8.273 37.966)" fill="#69c1a0"/>
                                        <path id="Path_1301" data-name="Path 1301" d="M455.861,152.195l-3.109-11.8L429.763,142.3,410.1,183.963Z" transform="translate(29.976 3.74)" fill="#cf6325"/>
                                        <path id="Path_1302" data-name="Path 1302" d="M430.351,145.133l-20.825-29.947-4.665,1.229,5.82,70.379Z" transform="translate(29.388 0.907)" fill="#bf4329"/>
                                        <path id="Path_1303" data-name="Path 1303" d="M239.286,302.188,193.442,306l-12.207,25.858,2.368,8.992Z" transform="translate(4.255 21.924)" fill="#e0c77f"/>
                                        <path id="Path_1304" data-name="Path 1304" d="M194.859,309.423l-26.234-37.73,1.247,15.1,12.78,48.491Z" transform="translate(2.838 18.496)" fill="#f2c26c"/>
                                        <path id="Path_1305" data-name="Path 1305" d="M381.452,505.923,315.94,551.4,335.6,509.734Z" transform="translate(19.394 44.821)" fill="#5f9980" fill-rule="evenodd"/>
                                        <path id="Path_1306" data-name="Path 1306" d="M310.031,475.427l6.573,79.4,19.661-41.662Z" transform="translate(18.73 41.394)" fill="#388d8f" fill-rule="evenodd"/>
                                        <path id="Path_1307" data-name="Path 1307" d="M357.824,220.435l-65.51,45.472,19.663-41.66Z" transform="translate(16.739 12.735)" fill="#e56f54" fill-rule="evenodd"/>
                                        <path id="Path_1308" data-name="Path 1308" d="M286.4,189.939l6.574,79.4,19.667-41.66Z" transform="translate(16.075 9.308)" fill="#ee914f" fill-rule="evenodd"/>
                                        <path id="Path_1309" data-name="Path 1309" d="M499.233,424.169l-65.512,45.473,19.669-41.665Z" transform="translate(32.632 35.633)" fill="#5788bd" fill-rule="evenodd"/>
                                        <path id="Path_1310" data-name="Path 1310" d="M427.817,393.675l6.568,79.39,19.667-41.658Z" transform="translate(31.968 32.206)" fill="#668ebc" fill-rule="evenodd"/>
                                        <path id="Path_1311" data-name="Path 1311" d="M214.944,167.734,174.838,178.3l-12.125,25.681Z" transform="translate(2.173 6.812)" fill="#f3ba5e"/>
                                        <path id="Path_1312" data-name="Path 1312" d="M175.021,177.235l-13.941,3.673,1.816,22.009Z" transform="translate(1.99 7.88)" fill="#edb357"/>
                                        <path id="Path_1313" data-name="Path 1313" d="M369.636,363.185l-65.511,45.465,19.663-41.656Z" transform="translate(18.066 28.779)" fill="#abcaa8" fill-rule="evenodd"/>
                                        <path id="Path_1314" data-name="Path 1314" d="M298.218,332.682l6.574,79.4,19.66-41.656Z" transform="translate(17.402 25.351)" fill="#9bc0a0" fill-rule="evenodd"/>
                                        <path id="Path_1315" data-name="Path 1315" d="M461.3,567.577l-21.665-31.158,2.985,36.079Z" transform="translate(33.296 48.249)" fill="#494990"/>
                                        <path id="Path_1316" data-name="Path 1316" d="M487.418,281.426,421.911,326.9l19.667-41.663Z" transform="translate(31.304 19.59)" fill="#da724f" fill-rule="evenodd"/>
                                        <path id="Path_1317" data-name="Path 1317" d="M416,250.931l6.568,79.393,19.669-41.665Z" transform="translate(30.64 16.163)" fill="#df6555" fill-rule="evenodd"/>
                                        <path id="Path_1318" data-name="Path 1318" d="M248.907,444.931l-36.366,3.022,4.949,18.787Z" transform="translate(7.773 37.966)" fill="#66bc9c"/>
                                        <path id="Path_1319" data-name="Path 1319" d="M406.925,116.292,401.2,117.8,386.5,148.86l26.244,37.811Z" transform="translate(27.325 1.031)" fill="#cb463a"/>
                                        <path id="Path_1320" data-name="Path 1320" d="M345.3,149.457l72.084,33.924L391.134,145.57Z" transform="translate(22.694 4.321)" fill="#db504f" fill-rule="evenodd"/>
                                        <path id="Path_1321" data-name="Path 1321" d="M505.974,351.339l-19.267,1.632L509.2,363.552Z" transform="translate(38.587 27.448)" fill="#c58445"/>
                                        <path id="Path_1322" data-name="Path 1322" d="M312.018,475.427l6.573,79.4-26.242-37.81Z" transform="translate(16.743 41.394)" fill="#378c8e" fill-rule="evenodd"/>
                                        <path id="Path_1323" data-name="Path 1323" d="M251.142,516.7l72.081,33.924-26.242-37.808Z" transform="translate(12.112 45.595)" fill="#40a3a4" fill-rule="evenodd"/>
                                        <path id="Path_1324" data-name="Path 1324" d="M288.4,189.937l6.57,79.4-26.242-37.811Z" transform="translate(14.088 9.308)" fill="#f19a4c" fill-rule="evenodd"/>
                                        <path id="Path_1325" data-name="Path 1325" d="M227.517,231.209l72.08,33.925-26.242-37.811Z" transform="translate(9.456 13.51)" fill="#f19e4c" fill-rule="evenodd"/>
                                        <path id="Path_1326" data-name="Path 1326" d="M429.8,393.675l6.568,79.39-26.241-37.806Z" transform="translate(29.98 32.206)" fill="#7090b8" fill-rule="evenodd"/>
                                        <path id="Path_1327" data-name="Path 1327" d="M368.923,434.944,441,468.868l-26.241-37.81Z" transform="translate(25.349 36.407)" fill="#7697b8" fill-rule="evenodd"/>
                                        <path id="Path_1328" data-name="Path 1328" d="M162.23,180.538l-11.373,3,13.2,19.007Z" transform="translate(0.841 8.251)" fill="#e7aa4c"/>
                                        <path id="Path_1329" data-name="Path 1329" d="M300.205,332.682l6.572,79.394-26.241-37.807Z" transform="translate(15.415 25.351)" fill="#81c7a1" fill-rule="evenodd"/>
                                        <path id="Path_1330" data-name="Path 1330" d="M239.33,373.958l72.078,33.918-26.241-37.809Z" transform="translate(10.784 29.552)" fill="#73c9a1" fill-rule="evenodd"/>
                                        <path id="Path_1331" data-name="Path 1331" d="M444.6,572.5l-2.987-36.079L421.948,578l.269.393Z" transform="translate(31.308 48.249)" fill="#565482"/>
                                        <path id="Path_1332" data-name="Path 1332" d="M426.849,574.2l-.269-.393-45.841,3.887,11.794,5.549Z" transform="translate(26.677 52.45)" fill="#796864"/>
                                        <path id="Path_1333" data-name="Path 1333" d="M417.99,250.931l6.568,79.393-26.243-37.809Z" transform="translate(28.652 16.163)" fill="#df5e56" fill-rule="evenodd"/>
                                        <path id="Path_1334" data-name="Path 1334" d="M357.112,292.2l72.081,33.924-26.247-37.81Z" transform="translate(24.021 20.364)" fill="#e15f5c" fill-rule="evenodd"/>
                                        <path id="Path_1335" data-name="Path 1335" d="M540.718,490.167l-.989,2.094,2.485,3.583Z" transform="translate(44.546 43.05)" fill="#28155e"/>
                                        <path id="Path_1336" data-name="Path 1336" d="M546.846,495.632l-2.485-3.583-45.84,3.887,55.259,26Z" transform="translate(39.914 43.262)" fill="#28145f"/>
                                        <path id="Path_1337" data-name="Path 1337" d="M345.3,149.064l72.082,33.924-45.91,3.853Z" transform="translate(22.694 4.714)" fill="#dc4f50" fill-rule="evenodd"/>
                                        <path id="Path_1338" data-name="Path 1338" d="M351.205,225.029l65.514-45.468-45.911,3.85Z" transform="translate(23.358 8.142)" fill="#e05655" fill-rule="evenodd"/>
                                        <path id="Path_1339" data-name="Path 1339" d="M509.2,363.383,486.707,352.8l26.174,37.77,3.4-.286Z" transform="translate(38.587 27.612)" fill="#d08439"/>
                                        <path id="Path_1340" data-name="Path 1340" d="M521.4,408.423,515.622,386.5l-3.4.286-19.6,41.618Z" transform="translate(39.25 31.399)" fill="#748693"/>
                                        <path id="Path_1341" data-name="Path 1341" d="M251.142,516.3l72.081,33.924-45.912,3.854Z" transform="translate(12.112 45.988)" fill="#44a7a5" fill-rule="evenodd"/>
                                        <path id="Path_1342" data-name="Path 1342" d="M257.047,592.271,322.559,546.8l-45.91,3.85Z" transform="translate(12.775 49.416)" fill="#4eb7b2" fill-rule="evenodd"/>
                                        <path id="Path_1343" data-name="Path 1343" d="M227.517,230.816l72.08,33.925-45.909,3.853Z" transform="translate(9.456 13.902)" fill="#f3a450" fill-rule="evenodd"/>
                                        <path id="Path_1344" data-name="Path 1344" d="M233.421,306.782l65.512-45.469-45.911,3.849Z" transform="translate(10.12 17.33)" fill="#f09f4e" fill-rule="evenodd"/>
                                        <path id="Path_1345" data-name="Path 1345" d="M368.923,434.552,441,468.475l-45.907,3.85Z" transform="translate(25.349 36.8)" fill="#7798b5" fill-rule="evenodd"/>
                                        <path id="Path_1346" data-name="Path 1346" d="M374.833,510.517l65.507-45.473L394.433,468.9Z" transform="translate(26.013 40.227)" fill="#6ea1bd" fill-rule="evenodd"/>
                                        <path id="Path_1347" data-name="Path 1347" d="M345.3,149.064l72.082,33.924-45.91,3.853Z" transform="translate(22.694 4.714)" fill="#dc4f50" fill-rule="evenodd"/>
                                        <path id="Path_1348" data-name="Path 1348" d="M351.205,225.029l65.514-45.468-45.911,3.85Z" transform="translate(23.358 8.142)" fill="#e05655" fill-rule="evenodd"/>
                                        <path id="Path_1349" data-name="Path 1349" d="M509.2,363.383,486.707,352.8l26.174,37.77,3.4-.286Z" transform="translate(38.587 27.612)" fill="#d08439"/>
                                        <path id="Path_1350" data-name="Path 1350" d="M521.4,408.423,515.622,386.5l-3.4.286-19.6,41.618Z" transform="translate(39.25 31.399)" fill="#748693"/>
                                        <path id="Path_1351" data-name="Path 1351" d="M251.142,516.3l72.081,33.924-45.912,3.854Z" transform="translate(12.112 45.988)" fill="#44a7a5" fill-rule="evenodd"/>
                                        <path id="Path_1352" data-name="Path 1352" d="M257.047,592.271,322.559,546.8l-45.91,3.85Z" transform="translate(12.775 49.416)" fill="#4eb7b2" fill-rule="evenodd"/>
                                        <path id="Path_1353" data-name="Path 1353" d="M227.517,230.816l72.08,33.925-45.909,3.853Z" transform="translate(9.456 13.902)" fill="#f3a450" fill-rule="evenodd"/>
                                        <path id="Path_1354" data-name="Path 1354" d="M233.421,306.782l65.512-45.469-45.911,3.849Z" transform="translate(10.12 17.33)" fill="#f09f4e" fill-rule="evenodd"/>
                                        <path id="Path_1355" data-name="Path 1355" d="M368.923,434.552,441,468.475l-45.907,3.85Z" transform="translate(25.349 36.8)" fill="#7798b5" fill-rule="evenodd"/>
                                        <path id="Path_1356" data-name="Path 1356" d="M374.833,510.517l65.507-45.473L394.433,468.9Z" transform="translate(26.013 40.227)" fill="#6ea1bd" fill-rule="evenodd"/>
                                        <path id="Path_1357" data-name="Path 1357" d="M485.322,279.022l-1.093-4.14-3.426,7.277Z" transform="translate(37.923 18.855)" fill="#b23624"/>
                                        <path id="Path_1358" data-name="Path 1358" d="M239.327,373.559l72.082,33.922L265.5,411.335Z" transform="translate(10.784 29.945)" fill="#73c8a0" fill-rule="evenodd"/>
                                        <path id="Path_1359" data-name="Path 1359" d="M245.232,449.525l65.511-45.473-45.907,3.856Z" transform="translate(11.447 33.372)" fill="#6bc19b" fill-rule="evenodd"/>
                                        <path id="Path_1360" data-name="Path 1360" d="M392.532,582.845,380.738,577.3l5.07,7.322Z" transform="translate(26.677 52.843)" fill="#a67b48"/>
                                        <path id="Path_1361" data-name="Path 1361" d="M357.112,291.807l72.081,33.924-45.909,3.849Z" transform="translate(24.021 20.757)" fill="#e15e5d" fill-rule="evenodd"/>
                                        <path id="Path_1362" data-name="Path 1362" d="M363.018,367.78l65.508-45.48-45.9,3.852Z" transform="translate(24.685 24.184)" fill="#e27069" fill-rule="evenodd"/>
                                        <path id="Path_1363" data-name="Path 1363" d="M553.779,521.548l-55.259-26,26.169,37.776,31.5-2.644Z" transform="translate(39.914 43.655)" fill="#2d1c69"/>
                                        <path id="Path_1364" data-name="Path 1364" d="M540.843,545.507l15.769-10.946-1.964-7.437-31.495,2.646-10.965,23.288Z" transform="translate(41.45 47.204)" fill="#28145f"/>
                                        <path id="Path_1365" data-name="Path 1365" d="M351.205,225.029l65.51-45.468-19.663,41.661Z" transform="translate(23.358 8.142)" fill="#e05655" fill-rule="evenodd"/>
                                        <path id="Path_1366" data-name="Path 1366" d="M418.653,258.952l-6.57-79.392-19.663,41.66Z" transform="translate(27.99 8.142)" fill="#de5d53" fill-rule="evenodd"/>
                                        <path id="Path_1367" data-name="Path 1367" d="M521.4,406.208l-28.785,19.98,33.32-2.763Z" transform="translate(39.25 33.614)" fill="#707f8f"/>
                                        <path id="Path_1368" data-name="Path 1368" d="M257.047,592.271,322.559,546.8l-19.67,41.656Z" transform="translate(12.775 49.416)" fill="#53b5ad" fill-rule="evenodd"/>
                                        <path id="Path_1369" data-name="Path 1369" d="M322.916,607.064,317.93,546.8l-19.673,41.658,14.752,21.218Z" transform="translate(17.407 49.415)" fill="#78a889"/>
                                        <path id="Path_1370" data-name="Path 1370" d="M351.205,225.029l65.51-45.468-19.663,41.661Z" transform="translate(23.358 8.142)" fill="#e05655" fill-rule="evenodd"/>
                                        <path id="Path_1371" data-name="Path 1371" d="M418.653,258.952l-6.57-79.392-19.663,41.66Z" transform="translate(27.99 8.142)" fill="#de5d53" fill-rule="evenodd"/>
                                        <path id="Path_1372" data-name="Path 1372" d="M521.4,406.208l-28.785,19.98,33.32-2.763Z" transform="translate(39.25 33.614)" fill="#707f8f"/>
                                        <path id="Path_1373" data-name="Path 1373" d="M257.047,592.271,322.559,546.8l-19.67,41.656Z" transform="translate(12.775 49.416)" fill="#53b5ad" fill-rule="evenodd"/>
                                        <path id="Path_1374" data-name="Path 1374" d="M322.916,607.064,317.93,546.8l-19.673,41.658,14.752,21.218Z" transform="translate(17.407 49.415)" fill="#78a889"/>
                                        <path id="Path_1375" data-name="Path 1375" d="M233.421,306.782l65.512-45.469-19.667,41.66Z" transform="translate(10.12 17.33)" fill="#f09c4e" fill-rule="evenodd"/>
                                        <path id="Path_1376" data-name="Path 1376" d="M300.868,340.7,294.3,261.309l-19.667,41.665Z" transform="translate(14.752 17.329)" fill="#e78857" fill-rule="evenodd"/>
                                        <path id="Path_1377" data-name="Path 1377" d="M374.829,510.517l65.512-45.473L420.676,506.7Z" transform="translate(26.013 40.227)" fill="#6e9ebe" fill-rule="evenodd"/>
                                        <path id="Path_1378" data-name="Path 1378" d="M442.282,544.441l-6.574-79.4L416.043,506.7Z" transform="translate(30.645 40.227)" fill="#647fb1" fill-rule="evenodd"/>
                                        <path id="Path_1379" data-name="Path 1379" d="M485.322,278.6l-4.519,3.137,5.23-.431Z" transform="translate(37.923 19.273)" fill="#b13524"/>
                                        <path id="Path_1380" data-name="Path 1380" d="M245.232,449.525l65.511-45.473-19.665,41.669Z" transform="translate(11.447 33.372)" fill="#6ac19b" fill-rule="evenodd"/>
                                        <path id="Path_1381" data-name="Path 1381" d="M312.682,483.448l-6.569-79.395L286.446,445.72Z" transform="translate(16.079 33.372)" fill="#5cb193" fill-rule="evenodd"/>
                                        <path id="Path_1382" data-name="Path 1382" d="M285.237,148.415l-21.04,5.546-1.376,2.915,26.235,37.73Z" transform="translate(13.424 4.641)" fill="#ef954e"/>
                                        <path id="Path_1383" data-name="Path 1383" d="M363.018,367.78l65.508-45.48-19.662,41.673Z" transform="translate(24.685 24.184)" fill="#e27169" fill-rule="evenodd"/>
                                        <path id="Path_1384" data-name="Path 1384" d="M430.468,401.7,423.893,322.3l-19.662,41.671Z" transform="translate(29.317 24.184)" fill="#d1897b" fill-rule="evenodd"/>
                                        <path id="Path_1385" data-name="Path 1385" d="M555.383,540.16l-1.666-6.351-15.769,10.946Z" transform="translate(44.345 47.955)" fill="#251059"/>
                                        <path id="Path_1386" data-name="Path 1386" d="M485.322,278.6l-4.519,3.137,5.23-.431Z" transform="translate(37.923 19.273)" fill="#b13524"/>
                                        <path id="Path_1387" data-name="Path 1387" d="M245.232,449.525l65.511-45.473-19.665,41.669Z" transform="translate(11.447 33.372)" fill="#6ac19b" fill-rule="evenodd"/>
                                        <path id="Path_1388" data-name="Path 1388" d="M312.682,483.448l-6.569-79.395L286.446,445.72Z" transform="translate(16.079 33.372)" fill="#5cb193" fill-rule="evenodd"/>
                                        <path id="Path_1389" data-name="Path 1389" d="M285.237,148.415l-21.04,5.546-1.376,2.915,26.235,37.73Z" transform="translate(13.424 4.641)" fill="#ef954e"/>
                                        <path id="Path_1390" data-name="Path 1390" d="M363.018,367.78l65.508-45.48-19.662,41.673Z" transform="translate(24.685 24.184)" fill="#e27169" fill-rule="evenodd"/>
                                        <path id="Path_1391" data-name="Path 1391" d="M430.468,401.7,423.893,322.3l-19.662,41.671Z" transform="translate(29.317 24.184)" fill="#d1897b" fill-rule="evenodd"/>
                                        <path id="Path_1392" data-name="Path 1392" d="M555.383,540.16l-1.666-6.351-15.769,10.946Z" transform="translate(44.345 47.955)" fill="#251059"/>
                                        <path id="Path_1393" data-name="Path 1393" d="M285.2,373.883,259.02,336.156l-19.705,41.625Z" transform="translate(10.782 25.741)" fill="#83c198" fill-rule="evenodd"/>
                                        <path id="Path_1394" data-name="Path 1394" d="M283.192,374.282,257,336.568l45.894-3.908Z" transform="translate(12.769 25.348)" fill="#8ab794" fill-rule="evenodd"/>
                                        <path id="Path_1395" data-name="Path 1395" d="M426.608,577.625l-26.178-37.741-19.7,41.636Z" transform="translate(26.676 48.638)" fill="#917844" fill-rule="evenodd"/>
                                        <path id="Path_1396" data-name="Path 1396" d="M424.6,578.021l-26.195-37.728,45.9-3.893Z" transform="translate(28.662 48.246)" fill="#635c73" fill-rule="evenodd"/>
                                        <path id="Path_1397" data-name="Path 1397" d="M402.984,292.131l-26.178-37.737-19.7,41.635Z" transform="translate(24.021 16.552)" fill="#de5658" fill-rule="evenodd"/>
                                        <path id="Path_1398" data-name="Path 1398" d="M400.978,292.531,374.78,254.8l45.9-3.9Z" transform="translate(26.007 16.16)" fill="#df5a56" fill-rule="evenodd"/>
                                        <path id="Path_1399" data-name="Path 1399" d="M544.392,495.873l-26.178-37.741-19.7,41.636Z" transform="translate(39.913 39.45)" fill="#3c3984" fill-rule="evenodd"/>
                                        <path id="Path_1400" data-name="Path 1400" d="M543.37,493.943l-9.783-37.124-17.4,1.475,26.2,37.726Z" transform="translate(41.9 39.303)" fill="#30226d"/>
                                        <path id="Path_1401" data-name="Path 1401" d="M375.219,124.9l-19.652,5.179L345.29,151.8l45.882-3.893Z" transform="translate(22.693 1.998)" fill="#da4b4e"/>
                                        <path id="Path_1402" data-name="Path 1402" d="M402.845,117.641l-30.682,8.087,15.966,23Z" transform="translate(25.713 1.182)" fill="#cb413e"/>
                                        <path id="Path_1403" data-name="Path 1403" d="M499.36,328.76,486.7,355.528l19.284-1.64Z" transform="translate(38.585 24.91)" fill="#d7772c"/>
                                        <path id="Path_1404" data-name="Path 1404" d="M297.015,516.63l-26.182-37.737-19.7,41.639Z" transform="translate(12.11 41.783)" fill="#4ea799" fill-rule="evenodd"/>
                                        <path id="Path_1405" data-name="Path 1405" d="M295.007,517.028l-26.2-37.723,45.9-3.9Z" transform="translate(14.097 41.392)" fill="#3a8d8c" fill-rule="evenodd"/>
                                        <path id="Path_1406" data-name="Path 1406" d="M273.391,231.143,247.211,193.4l-19.7,41.637Z" transform="translate(9.455 9.697)" fill="#f4ad55" fill-rule="evenodd"/>
                                        <path id="Path_1407" data-name="Path 1407" d="M271.38,231.543l-26.2-37.728,45.9-3.9Z" transform="translate(11.442 9.305)" fill="#f2a14e" fill-rule="evenodd"/>
                                        <path id="Path_1408" data-name="Path 1408" d="M414.8,434.878,388.62,397.14,368.914,438.78Z" transform="translate(25.348 32.595)" fill="#939ca9" fill-rule="evenodd"/>
                                        <path id="Path_1409" data-name="Path 1409" d="M412.787,435.277,386.6,397.552l45.893-3.9Z" transform="translate(27.335 32.203)" fill="#8294b2" fill-rule="evenodd"/>
                                        <path id="Path_1410" data-name="Path 1410" d="M442.856,113.411,427.735,145.37l23.03-1.956Z" transform="translate(31.959 0.707)" fill="#912717"/>
                                        <path id="Path_1411" data-name="Path 1411" d="M238.052,305.955l-26.181-37.742-19.7,41.636Z" transform="translate(5.484 18.105)" fill="#f5b95f" fill-rule="evenodd"/>
                                        <path id="Path_1412" data-name="Path 1412" d="M236.041,306.352l-26.2-37.725,45.9-3.9Z" transform="translate(7.47 17.714)" fill="#f1ae58" fill-rule="evenodd"/>
                                        <path id="Path_1413" data-name="Path 1413" d="M379.461,509.687,353.28,471.95l-19.705,41.636Z" transform="translate(21.376 41.003)" fill="#46aaa6" fill-rule="evenodd"/>
                                        <path id="Path_1414" data-name="Path 1414" d="M377.45,510.09l-26.194-37.726,45.9-3.9Z" transform="translate(23.363 40.611)" fill="#5db1b1" fill-rule="evenodd"/>
                                        <path id="Path_1415" data-name="Path 1415" d="M355.834,224.2l-26.181-37.742-19.7,41.64Z" transform="translate(18.721 8.917)" fill="#e3645a" fill-rule="evenodd"/>
                                        <path id="Path_1416" data-name="Path 1416" d="M353.824,224.6l-26.2-37.727,45.9-3.9Z" transform="translate(20.708 8.526)" fill="#e15659" fill-rule="evenodd"/>
                                        <path id="Path_1417" data-name="Path 1417" d="M497.248,427.93,471.061,390.2l-19.7,41.636Z" transform="translate(34.614 31.815)" fill="#6694b5" fill-rule="evenodd"/>
                                        <path id="Path_1418" data-name="Path 1418" d="M495.237,428.338l-26.2-37.729,45.895-3.9Z" transform="translate(36.601 31.423)" fill="#6f91a4" fill-rule="evenodd"/>
                                        <path id="Path_1419" data-name="Path 1419" d="M278.593,550.216l-38.253,3.25,4.949,18.782L258.9,591.835Z" transform="translate(10.898 49.799)" fill="#4aa9a8"/>
                                        <path id="Path_1420" data-name="Path 1420" d="M485.431,285.191l-26.182-37.736-19.7,41.635Z" transform="translate(33.286 15.772)" fill="#d16745" fill-rule="evenodd"/>
                                        <path id="Path_1421" data-name="Path 1421" d="M486.867,278.1l-8.495-32.246-21.151,1.793,26.2,37.727Z" transform="translate(35.273 15.593)" fill="#be4a31"/>
                                        <path id="Path_1422" data-name="Path 1422" d="M223.049,410.961,209.6,439.376l3.271,12.408,36.359-3.087Z" transform="translate(7.443 34.149)" fill="#69bf9e"/>
                                        <path id="Path_1423" data-name="Path 1423" d="M247.855,449.1l-26.2-37.726,45.9-3.9Z" transform="translate(8.798 33.756)" fill="#70c8a2" fill-rule="evenodd"/>
                                        <path id="Path_1424" data-name="Path 1424" d="M367.649,366.951,341.467,329.2l-19.705,41.642Z" transform="translate(20.049 24.96)" fill="#e07f7d" fill-rule="evenodd"/>
                                        <path id="Path_1425" data-name="Path 1425" d="M365.637,367.349l-26.2-37.731,45.9-3.9Z" transform="translate(22.035 24.568)" fill="#e47672" fill-rule="evenodd"/>
                                        <path id="Path_1426" data-name="Path 1426" d="M499.242,557.154l-16.792-24.212L466.967,565.66Z" transform="translate(36.368 47.858)" fill="#3a337f"/>
                                        <path id="Path_1427" data-name="Path 1427" d="M515.7,552.8l11.052-23.345-45.9,3.9,16.805,24.2Z" transform="translate(37.928 47.466)" fill="#322571"/>
                                        <path id="Path_1428" data-name="Path 1428" d="M276.577,298.839,256.989,340.39l45.908-3.764Z" transform="translate(12.769 21.547)" fill="#d79560" fill-rule="evenodd"/>
                                        <path id="Path_1429" data-name="Path 1429" d="M417.987,502.573,398.4,544.123l45.905-3.759Z" transform="translate(28.662 44.445)" fill="#758289" fill-rule="evenodd"/>
                                        <path id="Path_1430" data-name="Path 1430" d="M394.361,217.087l-19.589,41.54,45.913-3.751Z" transform="translate(26.006 12.359)" fill="#df5a56" fill-rule="evenodd"/>
                                        <path id="Path_1431" data-name="Path 1431" d="M527.6,436.4,516.18,460.614l17.427-1.423Z" transform="translate(41.899 37.007)" fill="#404586"/>
                                        <path id="Path_1432" data-name="Path 1432" d="M314.315,605.473l-14.728-21.146L286.111,612.9Z" transform="translate(16.042 53.633)" fill="#55a9a3"/>
                                        <path id="Path_1433" data-name="Path 1433" d="M288.4,441.585l-19.6,41.541,45.911-3.756Z" transform="translate(14.096 37.59)" fill="#56a991" fill-rule="evenodd"/>
                                        <path id="Path_1434" data-name="Path 1434" d="M264.768,156.1l-19.6,41.537,45.913-3.751Z" transform="translate(11.441 5.505)" fill="#f2a151" fill-rule="evenodd"/>
                                        <path id="Path_1435" data-name="Path 1435" d="M406.177,359.837l-19.591,41.535,45.9-3.755Z" transform="translate(27.334 28.403)" fill="#c5928b" fill-rule="evenodd"/>
                                        <path id="Path_1436" data-name="Path 1436" d="M229.429,230.909l-19.593,41.541,45.913-3.754Z" transform="translate(7.469 13.913)" fill="#f6b55b" fill-rule="evenodd"/>
                                        <path id="Path_1437" data-name="Path 1437" d="M370.835,434.642l-19.587,41.543,45.907-3.752Z" transform="translate(23.362 36.81)" fill="#6bacaf" fill-rule="evenodd"/>
                                        <path id="Path_1438" data-name="Path 1438" d="M347.215,149.155l-19.594,41.54,45.912-3.753Z" transform="translate(20.707 4.724)" fill="#e15553" fill-rule="evenodd"/>
                                        <path id="Path_1439" data-name="Path 1439" d="M488.623,352.894l-19.6,41.536,45.916-3.75Z" transform="translate(36.599 27.623)" fill="#ce8b41" fill-rule="evenodd"/>
                                        <path id="Path_1440" data-name="Path 1440" d="M252.546,516.393l-14.569,30.891,2.642,10.029,38.246-3.131Z" transform="translate(10.632 45.998)" fill="#5ac2b1"/>
                                        <path id="Path_1441" data-name="Path 1441" d="M471.094,221.038l-13.877,29.424,21.177-1.73Z" transform="translate(35.272 12.803)" fill="#b63c28"/>
                                        <path id="Path_1442" data-name="Path 1442" d="M241.239,373.648l-19.592,41.544,45.913-3.75Z" transform="translate(8.797 29.955)" fill="#74d0aa" fill-rule="evenodd"/>
                                        <path id="Path_1443" data-name="Path 1443" d="M386.185,584.636l-5.049-7.25-4.618,9.8Z" transform="translate(26.202 52.853)" fill="#ba8240"/>
                                        <path id="Path_1444" data-name="Path 1444" d="M359.029,291.9l-19.594,41.539,45.909-3.752Z" transform="translate(22.035 20.767)" fill="#e15a60" fill-rule="evenodd"/>
                                        <path id="Path_1445" data-name="Path 1445" d="M500.435,495.632l-19.593,41.543,45.906-3.754Z" transform="translate(37.927 43.665)" fill="#382f7d" fill-rule="evenodd"/>
                                        <path id="Path_1446" data-name="Path 1446" d="M279.244,298.855l-19.572,41.556-26.259-37.866Z" transform="translate(10.119 21.549)" fill="#cca76a" fill-rule="evenodd"/>
                                        <path id="Path_1447" data-name="Path 1447" d="M420.653,502.591,401.086,544.14l-26.265-37.86Z" transform="translate(26.012 44.447)" fill="#87885b" fill-rule="evenodd"/>
                                        <path id="Path_1448" data-name="Path 1448" d="M397.031,217.1,377.46,258.652,351.2,220.79Z" transform="translate(23.357 12.361)" fill="#df5757" fill-rule="evenodd"/>
                                        <path id="Path_1449" data-name="Path 1449" d="M530.262,438.091l-4.308-16.356-33.35,2.688,26.265,37.865Z" transform="translate(39.249 35.359)" fill="#4b5f9d"/>
                                        <path id="Path_1450" data-name="Path 1450" d="M289.424,612.892l13.446-28.553-45.832,3.693,19.582,28.233Z" transform="translate(12.774 53.634)" fill="#499ca2"/>
                                        <path id="Path_1451" data-name="Path 1451" d="M486.031,281.031l-5.236.423,8.628,12.444Z" transform="translate(37.922 19.546)" fill="#b9452a"/>
                                        <path id="Path_1452" data-name="Path 1452" d="M291.058,441.6l-19.571,41.55-26.263-37.863Z" transform="translate(11.446 37.592)" fill="#5fb599" fill-rule="evenodd"/>
                                        <path id="Path_1453" data-name="Path 1453" d="M267.095,156.109l-14.464,1.163-28,7.382,22.889,33.007Z" transform="translate(9.132 5.506)" fill="#f4ae57"/>
                                        <path id="Path_1454" data-name="Path 1454" d="M408.842,359.849,389.27,401.4l-26.26-37.854Z" transform="translate(24.684 28.404)" fill="#c9948b" fill-rule="evenodd"/>
                                        <path id="Path_1455" data-name="Path 1455" d="M232.1,230.924,212.519,272.47l-26.26-37.86Z" transform="translate(4.819 13.914)" fill="#f7bb5f" fill-rule="evenodd"/>
                                        <path id="Path_1456" data-name="Path 1456" d="M373.506,434.659l-19.574,41.552L327.67,438.342Z" transform="translate(20.713 36.812)" fill="#5db7a8" fill-rule="evenodd"/>
                                        <path id="Path_1457" data-name="Path 1457" d="M349.875,149.168l-19.569,41.549-26.26-37.86Z" transform="translate(18.057 4.726)" fill="#e46151" fill-rule="evenodd"/>
                                        <path id="Path_1458" data-name="Path 1458" d="M491.287,352.912l-19.575,41.54L445.456,356.6Z" transform="translate(33.95 27.624)" fill="#b79367" fill-rule="evenodd"/>
                                        <path id="Path_1459" data-name="Path 1459" d="M253.337,516.407,231.084,518.2l7.681,29.139Z" transform="translate(9.857 46)" fill="#5fbaa4"/>
                                        <path id="Path_1460" data-name="Path 1460" d="M473.757,222.232l-3.013-11.439-37.1,2.986L459.9,251.639Z" transform="translate(32.623 11.652)" fill="#c65338"/>
                                        <path id="Path_1461" data-name="Path 1461" d="M243.911,373.668l-19.578,41.545-26.261-37.856Z" transform="translate(6.147 29.957)" fill="#70cdaa" fill-rule="evenodd"/>
                                        <path id="Path_1462" data-name="Path 1462" d="M380.714,587.172l4.6-9.773-45.835,3.689,9.938,14.329Z" transform="translate(22.04 52.854)" fill="#c08943"/>
                                        <path id="Path_1463" data-name="Path 1463" d="M361.69,291.913,342.12,333.461,315.857,295.6Z" transform="translate(19.385 20.769)" fill="#e25b64" fill-rule="evenodd"/>
                                        <path id="Path_1464" data-name="Path 1464" d="M503.1,495.647,483.527,537.2l-26.263-37.862Z" transform="translate(35.278 43.666)" fill="#3d3987" fill-rule="evenodd"/>
                                        <path id="Path_1465" data-name="Path 1465" d="M455.985,167.244l-4.641,9.858,7.083-.585Z" transform="translate(34.612 6.757)" fill="#c35d1f"/>
                                        <path id="Path_1466" data-name="Path 1466" d="M215.774,343.832l45.907-3.8-26.294-37.884Z" transform="translate(8.137 21.92)" fill="#d6bb73" fill-rule="evenodd"/>
                                        <path id="Path_1467" data-name="Path 1467" d="M357.186,547.554l45.9-3.791L376.8,505.89Z" transform="translate(24.03 44.818)" fill="#82925c" fill-rule="evenodd"/>
                                        <path id="Path_1468" data-name="Path 1468" d="M333.561,262.069l45.9-3.79L353.173,220.4Z" transform="translate(21.375 12.732)" fill="#dd5659" fill-rule="evenodd"/>
                                        <path id="Path_1469" data-name="Path 1469" d="M474.967,465.809l45.9-3.8-26.289-37.878Z" transform="translate(37.267 35.629)" fill="#537db2" fill-rule="evenodd"/>
                                        <path id="Path_1470" data-name="Path 1470" d="M277.187,615.892l-19.606-28.251-5.417,11.513,5.748,21.815Z" transform="translate(12.226 54.006)" fill="#407b8b"/>
                                        <path id="Path_1471" data-name="Path 1471" d="M491.4,293.823l-8.63-12.431-19.612,41.67,35.182-2.906Z" transform="translate(35.94 19.586)" fill="#c9603c"/>
                                        <path id="Path_1472" data-name="Path 1472" d="M227.589,486.564l45.9-3.789L247.2,444.9Z" transform="translate(9.464 37.962)" fill="#6ecaa6" fill-rule="evenodd"/>
                                        <path id="Path_1473" data-name="Path 1473" d="M226.961,163.789l-6.483,1.708-16.52,35.091,45.911-3.794Z" transform="translate(6.809 6.369)" fill="#f7b95e"/>
                                        <path id="Path_1474" data-name="Path 1474" d="M345.373,404.814l45.9-3.791-26.29-37.871Z" transform="translate(22.702 28.775)" fill="#d5a08d" fill-rule="evenodd"/>
                                        <g id="Group_30" data-name="Group 30" transform="translate(143.378 107.119)">
                                            <g id="Group_29" data-name="Group 29" clip-path="url(#clip-path-5)">
                                                <path id="Path_1475" data-name="Path 1475" d="M435.329,105.871l11.265-.931-1.193-1.723Z" transform="translate(-110.566 -107.558)" fill="#730a13" fill-rule="evenodd"/>
                                            </g>
                                        </g>
                                        <path id="Path_1476" data-name="Path 1476" d="M168.623,275.887l45.909-3.79-26.294-37.875Z" transform="translate(2.837 14.285)" fill="#f8be60" fill-rule="evenodd"/>
                                        <path id="Path_1477" data-name="Path 1477" d="M310.034,479.625l45.9-3.789-26.29-37.88Z" transform="translate(18.73 37.183)" fill="#57b29a" fill-rule="evenodd"/>
                                        <path id="Path_1478" data-name="Path 1478" d="M286.408,194.135l45.9-3.79-26.289-37.877Z" transform="translate(16.075 5.097)" fill="#e9784b" fill-rule="evenodd"/>
                                        <path id="Path_1479" data-name="Path 1479" d="M427.815,397.873l45.906-3.792L447.43,356.21Z" transform="translate(31.968 27.995)" fill="#bb9e87" fill-rule="evenodd"/>
                                        <path id="Path_1480" data-name="Path 1480" d="M416,255.125l45.908-3.788-26.3-37.877Z" transform="translate(30.64 11.952)" fill="#d7654a" fill-rule="evenodd"/>
                                        <path id="Path_1481" data-name="Path 1481" d="M198.37,376.966l-2.965,6.3,8.768,33.272,20.489-1.688Z" transform="translate(5.847 30.328)" fill="#6aaf91"/>
                                        <path id="Path_1482" data-name="Path 1482" d="M350.357,595.044,340.4,580.7l-9.12,19.369Z" transform="translate(21.118 53.225)" fill="#bc904b"/>
                                        <path id="Path_1483" data-name="Path 1483" d="M298.222,336.882l45.9-3.792-26.288-37.877Z" transform="translate(17.403 21.14)" fill="#e26663" fill-rule="evenodd"/>
                                        <path id="Path_1484" data-name="Path 1484" d="M439.627,540.617l45.9-3.8-26.287-37.875Z" transform="translate(33.295 44.037)" fill="#464d95" fill-rule="evenodd"/>
                                        <path id="Path_1485" data-name="Path 1485" d="M458.424,175.556l-7.089.591L463,192.923Z" transform="translate(34.611 7.692)" fill="#b84120"/>
                                        <path id="Path_1486" data-name="Path 1486" d="M215.767,339.983l45.92-3.81L242.111,377.86Z" transform="translate(8.136 25.743)" fill="#81d2aa" fill-rule="evenodd"/>
                                        <path id="Path_1487" data-name="Path 1487" d="M357.18,543.712l45.913-3.813-19.577,41.7Z" transform="translate(24.029 48.64)" fill="#b38337" fill-rule="evenodd"/>
                                        <path id="Path_1488" data-name="Path 1488" d="M333.551,258.225l45.919-3.812-19.577,41.7Z" transform="translate(21.373 16.554)" fill="#dd5259" fill-rule="evenodd"/>
                                        <path id="Path_1489" data-name="Path 1489" d="M474.961,461.962l45.914-3.813L501.3,499.842Z" transform="translate(37.266 39.452)" fill="#41488f" fill-rule="evenodd"/>
                                        <path id="Path_1490" data-name="Path 1490" d="M356.8,129.53l-21.49,5.663,11.242,16.165Z" transform="translate(21.572 2.519)" fill="#de5153"/>
                                        <path id="Path_1491" data-name="Path 1491" d="M502.037,330.283l-3.711-14.078-35.179,2.919,26.341,37.891Z" transform="translate(35.939 23.499)" fill="#db8134"/>
                                        <path id="Path_1492" data-name="Path 1492" d="M227.579,482.722l45.922-3.809L253.923,520.6Z" transform="translate(9.463 41.786)" fill="#60bfa7" fill-rule="evenodd"/>
                                        <path id="Path_1493" data-name="Path 1493" d="M203.951,197.233l45.922-3.815-19.578,41.7Z" transform="translate(6.808 9.699)" fill="#f7b85d" fill-rule="evenodd"/>
                                        <path id="Path_1494" data-name="Path 1494" d="M345.364,400.969l45.915-3.811L371.7,438.852Z" transform="translate(22.701 32.597)" fill="#94aaa6" fill-rule="evenodd"/>
                                        <path id="Path_1495" data-name="Path 1495" d="M444.975,114.2l-1.864-7.083-34.039,8.972,20.9,30.064Z" transform="translate(29.861 0)" fill="#a6331b"/>
                                        <path id="Path_1496" data-name="Path 1496" d="M168.614,272.044l45.919-3.815-19.575,41.7Z" transform="translate(2.836 18.107)" fill="#f6be62" fill-rule="evenodd"/>
                                        <path id="Path_1497" data-name="Path 1497" d="M310.027,475.78l45.915-3.811-19.577,41.7Z" transform="translate(18.73 41.005)" fill="#3b9797" fill-rule="evenodd"/>
                                        <path id="Path_1498" data-name="Path 1498" d="M286.4,190.3l45.912-3.82-19.568,41.7Z" transform="translate(16.074 8.919)" fill="#e97c56" fill-rule="evenodd"/>
                                        <path id="Path_1499" data-name="Path 1499" d="M427.811,394.028l45.919-3.813-19.578,41.7Z" transform="translate(31.967 31.817)" fill="#6895be" fill-rule="evenodd"/>
                                        <path id="Path_1500" data-name="Path 1500" d="M286.4,190.3l45.912-3.82-19.568,41.7Z" transform="translate(16.074 8.919)" fill="#e97c56" fill-rule="evenodd"/>
                                        <path id="Path_1501" data-name="Path 1501" d="M427.811,394.028l45.919-3.813-19.578,41.7Z" transform="translate(31.967 31.817)" fill="#6895be" fill-rule="evenodd"/>
                                        <path id="Path_1502" data-name="Path 1502" d="M415.995,251.283l45.921-3.813-19.58,41.7Z" transform="translate(30.639 15.774)" fill="#db6d4f" fill-rule="evenodd"/>
                                        <path id="Path_1503" data-name="Path 1503" d="M223.78,410.977l-20.5,1.7,7.083,26.879Z" transform="translate(6.732 34.15)" fill="#59a28a"/>
                                        <path id="Path_1504" data-name="Path 1504" d="M298.212,333.037l45.917-3.813-19.578,41.7Z" transform="translate(17.402 24.962)" fill="#cb9a8d" fill-rule="evenodd"/>
                                        <path id="Path_1505" data-name="Path 1505" d="M470.21,565.615l15.33-32.655-45.919,3.811,21.685,31.19Z" transform="translate(33.295 47.86)" fill="#413e88"/>
                                    </g>
                                </g>
                            </g>
                            <path id="Path_1507" data-name="Path 1507" d="M327.363,214.01a2.95,2.95,0,0,1-1.6,3.82l-1.946.614a2.949,2.949,0,0,1-3.5-2.209L308.342,178.31a2.947,2.947,0,0,1,1.6-3.818l1.945-.616a2.95,2.95,0,0,1,3.5,2.209Z" fill="#464d95"/>
                            <path id="Path_1508" data-name="Path 1508" d="M339.2,210.163a2.952,2.952,0,0,1-1.824,3.718l-1.98.5a2.947,2.947,0,0,1-3.361-2.415l-9.692-38.571a2.948,2.948,0,0,1,1.821-3.717l1.978-.5a2.95,2.95,0,0,1,3.365,2.413Z" fill="#464d95"/>
                            <rect id="Rectangle_6" data-name="Rectangle 6" width="21.982" height="5.658" transform="translate(308.64 179.336) rotate(-18.04)" fill="#e9784b" stroke="#e9784b" stroke-miterlimit="10" stroke-width="1"/>
                            <rect id="Rectangle_7" data-name="Rectangle 7" width="21.095" height="5.659" transform="matrix(0.95, -0.313, 0.313, 0.95, 313.132, 193.601)" fill="#e9784b" stroke="#e9784b" stroke-miterlimit="10" stroke-width="1"/>
                            <rect id="Rectangle_8" data-name="Rectangle 8" width="20.2" height="5.658" transform="translate(317.627 207.821) rotate(-18.176)" fill="#e9784b" stroke="#e9784b" stroke-miterlimit="10" stroke-width="1"/>
                            <g id="Group_34" data-name="Group 34">
                                <path id="Path_1509" data-name="Path 1509" d="M308.06,193.505c-1.269.61-3.086.393-3.7,1.705-.3,1.158.806,2.809,1.262,3.759s.986,3.348,1.607,3.828c1.3,1.4,1.918.093,3.9-.161" fill="#5788bd"/>
                                <path id="Path_1510" data-name="Path 1510" d="M312.912,207.844c-1.192.573-3.277.422-3.857,1.656-.283,1.089.757,2.642,1.187,3.536s.927,3.147,1.512,3.6c1.222,1.32,1.8.086,3.667-.15" fill="#5788bd"/>
                                <path id="Path_1511" data-name="Path 1511" d="M303.513,179.137c-1.265.608-3.084.392-3.7,1.7-.3,1.159.807,2.81,1.265,3.76s.985,3.349,1.607,3.828c1.3,1.4,1.917.092,3.9-.159" fill="#5788bd"/>
                            </g>
                            <g id="Group_35" data-name="Group 35">
                                <path id="Path_1512" data-name="Path 1512" d="M337.759,184.716c1.4-.128,2.852-1.249,4.051-.441.856.839.755,2.824.852,3.874s.875,3.377.588,4.109c-.393,1.872-1.6,1.066-3.427,1.867" fill="#5788bd"/>
                                <path id="Path_1513" data-name="Path 1513" d="M341.316,199.363c1.316-.12,2.68-1.175,3.813-.416.8.789.706,2.656.8,3.642s.824,3.178.555,3.865c-.371,1.759-1.5,1-3.226,1.757" fill="#5788bd"/>
                                <path id="Path_1514" data-name="Path 1514" d="M334.27,170.055c1.4-.13,2.85-1.251,4.053-.442.854.838.752,2.822.848,3.873s.877,3.379.591,4.111c-.392,1.87-1.6,1.064-3.43,1.868" fill="#5788bd"/>
                            </g>
                            <path id="Path_1515" data-name="Path 1515" d="M447.918,486.757a2.667,2.667,0,0,1,3.288,1.859l1.761,6.361a2.672,2.672,0,0,1-1.863,3.286L380.823,517.71a2.67,2.67,0,0,1-3.287-1.858l-1.759-6.361a2.671,2.671,0,0,1,1.862-3.291Z" fill="#f4f4f4"/>
                            <path id="Path_1516" data-name="Path 1516" d="M392.381,457.173a30.162,30.162,0,1,1,24.2-12.121A29.927,29.927,0,0,1,392.381,457.173Zm.046-56.293a26.13,26.13,0,1,0,15.607,5.189A25.928,25.928,0,0,0,392.427,400.88Z" fill="#f4f4f4"/>
                            <path id="Path_1517" data-name="Path 1517" d="M392.389,449.866a22.852,22.852,0,1,1,18.33-9.183A22.682,22.682,0,0,1,392.389,449.866Zm.032-43.694a20.836,20.836,0,1,0,12.447,4.139A20.678,20.678,0,0,0,392.421,406.172Z" fill="#f4f4f4"/>
                            <path id="Path_1518" data-name="Path 1518" d="M402.346,413.686a16.625,16.625,0,1,1-23.263,3.379A16.629,16.629,0,0,1,402.346,413.686Z" fill="#464d95"/>
                            <g id="Group_36" data-name="Group 36">
                                <rect id="Rectangle_9" data-name="Rectangle 9" width="1.008" height="46.181" transform="translate(309.734 178.65) rotate(-17.354)" fill="#f4f4f4"/>
                                <path id="Path_1519" data-name="Path 1519" d="M412.807,508.866,330.472,225.58l-2.892-4.421L322.649,206.5l.956-.321,4.91,14.6,2.9,4.45,82.357,283.36Z" fill="#f4f4f4"/>
                                <rect id="Rectangle_10" data-name="Rectangle 10" width="1.008" height="299.601" transform="translate(323.504 222.712) rotate(-15.4)" fill="#fff"/>
                                <path id="Path_1520" data-name="Path 1520" d="M407.69,509.821,327.735,226.31l-2.321-4.5-9.1-29.267.963-.3,9.068,29.185,2.348,4.557,79.969,283.559Z" fill="#f4f4f4"/>
                            </g>
                            <g id="Group_37" data-name="Group 37">
                                <rect id="Rectangle_11" data-name="Rectangle 11" width="1.009" height="46.18" transform="translate(327.61 172.775) rotate(-13.941)" fill="#f4f4f4"/>
                                <path id="Path_1521" data-name="Path 1521" d="M417.77,507.5,334.115,223.452l.308-5.174-3.387-15.019.983-.222,3.419,15.158-.306,5.141,83.6,283.876Z" fill="#f4f4f4"/>
                                <rect id="Rectangle_12" data-name="Rectangle 12" width="1.007" height="300.581" transform="translate(338.743 217.622) rotate(-17.103)" fill="#fff"/>
                                <path id="Path_1522" data-name="Path 1522" d="M422,506.329,337.056,223.1l-.448-5.469-7.4-29.566.978-.245L337.6,217.47l.453,5.445,84.91,283.125Z" fill="#f4f4f4"/>
                            </g>
                            <path id="Path_1523" data-name="Path 1523" d="M343.489,217.387l-22.125,6.934.47,3.227,22.7-6.935Z" fill="#f4f4f4"/>
                            <g id="Group_40" data-name="Group 40">
                                <path id="Path_1524" data-name="Path 1524" d="M428.206,496.145a1.514,1.514,0,0,1-1.04,1.872l-27.587,7.894a1.511,1.511,0,0,1-1.873-1.035h0A1.514,1.514,0,0,1,398.749,503l27.585-7.9a1.516,1.516,0,0,1,1.872,1.041Z" fill="#464d95"/>
                                <g id="Group_38" data-name="Group 38">
                                    <path id="Path_1525" data-name="Path 1525" d="M378.847,507.936a.787.787,0,0,1,.157,1.1h0a.784.784,0,0,1-1.1.16h0a.786.786,0,0,1-.16-1.1h0a.786.786,0,0,1,1.1-.157Z" fill="#464d95"/>
                                    <path id="Path_1526" data-name="Path 1526" d="M380.592,514.712a.782.782,0,0,1,.16,1.1h0a.783.783,0,0,1-1.1.162h0a.788.788,0,0,1-.16-1.1h0a.779.779,0,0,1,1.1-.158Z" fill="#464d95"/>
                                </g>
                                <g id="Group_39" data-name="Group 39">
                                    <path id="Path_1527" data-name="Path 1527" d="M448.969,488.38a.783.783,0,0,1,.156,1.1h0a.787.787,0,0,1-1.1.163h0a.788.788,0,0,1-.16-1.1h0a.79.79,0,0,1,1.1-.16Z" fill="#464d95"/>
                                    <path id="Path_1528" data-name="Path 1528" d="M450.715,495.155a.781.781,0,0,1,.16,1.1h0a.788.788,0,0,1-1.1.162h0a.793.793,0,0,1-.156-1.1h0a.787.787,0,0,1,1.1-.158Z" fill="#464d95"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>

        <div class="lg:flex lg:flex-row lg:justify-center lg:mt-24
                    md:flex md:flex-row md:justify-center md:mt-24
                    sm:flex sm:flex-row sm:justify-center sm:mt-24
                    xs:flex xs:flex-row xs:justify-center xs:mt-24">
            <img src="../../images/chevron-down-wide@3x.png">
        </div>

        <div class="lg:flex lg:flex-row lg:justify-around lg:mt-24 lg:mx-32
                    md:flex md:flex-col md:text-center md:mt-24
                    sm:flex sm:flex-col sm:text-center sm:mt-24
                    xs:flex xs:flex-col xs:text-center xs:mt-24">
            <div class="lg:flex lg:flex-col lg:items-center lg:w-1/3 lg:px-5">
                <svg id="guitar-outline" xmlns="http://www.w3.org/2000/svg" width="134" height="134" viewBox="0 0 134 134">
                        <rect id="Rectangle_3" data-name="Rectangle 3" width="134" height="134" fill="none"/>
                        <g id="Group_13" data-name="Group 13" transform="translate(2.467 2.67)">
                            <path id="Union_5" data-name="Union 5" d="M14.428,116.1l-1.675-1.647c-5.807-5.813-18.387-21.017-9.905-36.7a32.781,32.781,0,0,1,25.891-16.9,20.894,20.894,0,0,0,7.382-2.273A15.556,15.556,0,0,0,41.5,50.616,18.839,18.839,0,0,1,50.956,39.2a21.218,21.218,0,0,1,23.105,3.629l22.407-21.57,3.11-6.226-.9-.9a2.1,2.1,0,1,1,2.965-2.965l.491.491,2.233-2.233-.491-.491a2.083,2.083,0,1,1,2.943-2.943l.491.491,2.233-2.233-.553-.441A2.083,2.083,0,1,1,111.935.866l.491.491.8-.8a2.077,2.077,0,0,1,1-.558c.262-.056,9.755,4.875,9.755,4.875s4.93,9.531,4.874,9.771a2.077,2.077,0,0,1-.558,1l-.8.8.491.491a2.083,2.083,0,0,1-2.943,2.943l-.491-.491L122.32,21.62l.542.475a2.083,2.083,0,0,1-2.943,2.943l-.5-.469L117.183,26.8l.491.491a2.083,2.083,0,0,1-2.943,2.943l-.9-.9-6.215,3.049L86.049,54.815A21.246,21.246,0,0,1,89.678,77.92a18.839,18.839,0,0,1-11.424,9.453,15.556,15.556,0,0,0-7.973,5.383,20.894,20.894,0,0,0-2.273,7.382,32.776,32.776,0,0,1-16.9,25.858,22.937,22.937,0,0,1-11.061,2.859A39.644,39.644,0,0,1,14.428,116.1ZM52.916,42.866a14.774,14.774,0,0,0-7.538,9.269,19.666,19.666,0,0,1-6.779,9.8,22.949,22.949,0,0,1-9.045,3.01A28.873,28.873,0,0,0,6.532,79.74c-7.153,13.222,4.037,26.623,9.179,31.771l1.675,1.675c5.143,5.143,18.532,16.332,31.76,9.174a28.867,28.867,0,0,0,14.8-23.016,22.949,22.949,0,0,1,3.01-9.045,19.66,19.66,0,0,1,9.8-6.784,14.774,14.774,0,0,0,9.258-7.577A17.008,17.008,0,0,0,83.129,57.83L70.152,71.337v.625A13.239,13.239,0,1,1,56.93,58.718h.592l13.49-12.982a20.7,20.7,0,0,0-11.787-4.467,13.217,13.217,0,0,0-6.309,1.6ZM50.5,65.535A9.073,9.073,0,1,0,66,71.957a9.278,9.278,0,0,0-.067-1.117v-.061a9.023,9.023,0,0,0-7.817-7.817h-.061a9.24,9.24,0,0,0-1.083-.067,9.034,9.034,0,0,0-6.46,2.641Zm11.848-5.673a13.2,13.2,0,0,1,6.656,6.656L103.453,30.71l-5.316-5.321Zm41.47-44.016L100.7,22.089l6.081,6.086,6.242-3.121L124.688,13.4l-3.238-5.963-5.969-3.25ZM40.431,108.138l-19.7-19.7A2.083,2.083,0,0,1,23.674,85.5l19.7,19.7a2.083,2.083,0,0,1-2.943,2.943Z" transform="translate(0.005 0)" fill="#ff99af"/>
                        </g>
                    </svg>
                <div class="lg:mt-8
                            md:mt-3
                            sm:mt-3
                            xs:mt-3">
                    <div class="text-pink
                                lg:text-lg lg:text-center
                                md:text-lg
                                sm:text-lg
                                xs:text-lg">
                        Sequential Music Lessons
                    </div>
                    <div class="font-lato text-grey-darker
                                lg:mt-2 lg:text-center lg:px-0
                                md:mt-2 md:px-32
                                sm:mt-2 sm:px-32
                                xs:mt-2 xs:px-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
            </div>
            <div class="lg:flex lg:flex-col lg:items-center lg:w-1/3 lg:px-5 lg:mt-0
                        md:mt-12
                        sm:mt-12
                        xs:mt-12">
                <svg id="brain-outline" xmlns="http://www.w3.org/2000/svg" width="134" height="134" viewBox="0 0 134 134">
                        <rect id="Rectangle_4" data-name="Rectangle 4" width="134" height="134" transform="translate(0 0)" fill="none"/>
                        <g id="Group_12" data-name="Group 12" transform="translate(4.938 21.406)">
                            <path id="Union_13" data-name="Union 13" d="M74.2,88.278a20.9,20.9,0,0,1-7.5-7.706q-1.206.245-2.44.374a25.888,25.888,0,0,1-2.736.145c-.43,0-.854,0-1.284-.033a26.607,26.607,0,0,1-8.476-1.673,21.406,21.406,0,0,1-7.544-4.862q-.251-.251-.5-.519a25.811,25.811,0,0,1-2.5-2.71A28.91,28.91,0,1,1,23.69,16.709a20.851,20.851,0,0,1,3.021-5.5,21.083,21.083,0,0,1,4.467-4.321A20.852,20.852,0,0,1,54.6,6.41,20.84,20.84,0,0,1,86.883,9.148a25.885,25.885,0,0,1,24.569,21.959,25.5,25.5,0,0,1,2.63,1.829l.145.112.05.039a26,26,0,0,1,4.316,4.416l.061.084.073.1a25.382,25.382,0,0,1,2.423,3.9l.073.145v.045a25.633,25.633,0,0,1,1.273,2.81v.078l.034.1a25.617,25.617,0,0,1,1.39,7.556s0,0,0,.039v.82h0v1.823a2.242,2.242,0,0,1-.028.39v.875a25.651,25.651,0,0,1-.558,3.19v.078l-.039.162-.039.151-.028.112-.061.223a.212.212,0,0,1,0,.05q-.235.836-.525,1.673a25.9,25.9,0,0,1-1.3,3.017l-.067.128-.034.067a25.9,25.9,0,0,1-16.936,13.243A20.829,20.829,0,0,1,74.37,88.295Zm.592-3.234a17.785,17.785,0,0,0,25.68-6.1c-.793.072-1.591.112-2.4.112a26.241,26.241,0,0,1-5.26-.558c-.871-.257-1.753-.931-1.631-1.823.084-.558.637-1.115,1.954-1.115a4.936,4.936,0,0,1,.514.028,23.228,23.228,0,0,0,8.2.117h0a22.858,22.858,0,0,0,11.067-5.163l.073-.061.045-.039q.614-.558,1.189-1.115a22.711,22.711,0,0,0,1.8-2.024l.039-.045.045-.061a22.73,22.73,0,0,0,3.35-5.961q.168-.441.313-.887l.045-.123V60.18a23.026,23.026,0,0,0,.743-10.951v-.206a22.693,22.693,0,0,0-3.015-7.807,23.024,23.024,0,0,0-1.843-2.565q-.681-.82-1.452-1.584a22.781,22.781,0,0,0-2.323-2.03h0l-.162-.123a22.775,22.775,0,0,0-3.077-1.929h0l-.2-.106h-.028c-.318-.162-.648-.323-.977-.468l.039-.162a3.394,3.394,0,0,0-3.535,0,23.65,23.65,0,0,0-4.841,5.76,9.681,9.681,0,0,1-5.718,4.221,9.641,9.641,0,0,1-16,5.983,1.961,1.961,0,0,1-.279-1.952,1.151,1.151,0,0,1,1.067-.558,3.2,3.2,0,0,1,1.424.407,6.6,6.6,0,0,0,10.609-3.58,9.658,9.658,0,0,1-8.968-9.613c0-.229,0-.457,0-.708.2-1.21.96-1.645,1.552-1.645a1.607,1.607,0,0,1,1.508,1.595,6.68,6.68,0,0,0-.045.758,6.6,6.6,0,0,0,12.4,3.156,13.973,13.973,0,0,1,5.388-6.323,8.151,8.151,0,0,1,5.779-.82,22.839,22.839,0,0,0-22.04-16.8h-.7A17.776,17.776,0,0,0,55.1,10.575a17.777,17.777,0,0,0-29.07,8.838,25.862,25.862,0,1,0,14,49.07q-.346-.736-.642-1.506a27.06,27.06,0,0,1-1.714-9.747,15.246,15.246,0,0,1,2.513-8.793,16.557,16.557,0,0,1,6.589-5.431,25.186,25.186,0,0,1,2.92-1.2,30.85,30.85,0,0,1-.279-3.708,18.287,18.287,0,0,1,.385-3.574c.48-1.89,1.424-2.554,2.161-2.554a1.117,1.117,0,0,1,.882.4,1.593,1.593,0,0,1,.313,1.31h0a33.805,33.805,0,0,0-.29,3.937,21.255,21.255,0,0,0,.262,3.217,56.719,56.719,0,0,1,10.76-1.266c1.178.045,2.021.636,2.06,1.427.039.652-.519,1.394-1.854,1.606a65.042,65.042,0,0,0-6.863.491,31.384,31.384,0,0,0-8.309,2.1,13.958,13.958,0,0,0-5.936,4.461A12.562,12.562,0,0,0,40.71,57.27a21.015,21.015,0,0,0,5.182,14.565A22.917,22.917,0,0,0,68.389,77h0q1.039-.323,2.055-.753A22.917,22.917,0,0,0,82.578,64.106c.1-.245.207-.513.318-.8a10.641,10.641,0,0,1,2.351-2.994l.045-.045a15.08,15.08,0,0,1,4.322-2.66,8.539,8.539,0,0,1,2.362-4.422,8.727,8.727,0,0,1,2.044-1.517,5.456,5.456,0,0,1,2.133-.558c.731,0,1.24.268,1.368.719s-.19,1.383-1.586,2.275a5.573,5.573,0,0,0-.151,10.232c1.117.73,1.714,1.673,1.513,2.336-.134.446-.592.7-1.256.7a5.081,5.081,0,0,1-2.01-.485h0a8.65,8.65,0,0,1-4.305-5.632,6.213,6.213,0,0,0-1.189.647,10.375,10.375,0,0,0-2,1.818A18.7,18.7,0,0,0,85.42,65.3h0A25.9,25.9,0,0,1,71.65,79.061q-.921.385-1.859.7A17.759,17.759,0,0,0,74.789,85.044ZM69.981,64.557H69.9a11.154,11.154,0,0,1-5.584-7.438,8.133,8.133,0,0,0-9.8,4.723,1.843,1.843,0,0,1-1.413.8,1.274,1.274,0,0,1-1.044-.558,2.189,2.189,0,0,1-.084-2.024A11.146,11.146,0,0,1,62.04,53.74a11.435,11.435,0,0,1,2.06.19,11,11,0,0,1,2.351-6.056,1.732,1.732,0,0,1,1.189-.558,1.335,1.335,0,0,1,1.173.708,1.882,1.882,0,0,1-.134,1.918c-.073.095-.14.19-.207.29l-.039.056a2.486,2.486,0,0,0-.369.636,8.087,8.087,0,0,0,.7,8.688,8.186,8.186,0,0,0,4.171,2.883c1.044.558,1.558,1.182,1.413,1.779s-.888.954-1.859.954A5.59,5.59,0,0,1,69.981,64.557Zm-44.308-3.6h0a15.669,15.669,0,0,1-7.438-8.671,33.788,33.788,0,0,1-3.462-1.617,21.481,21.481,0,0,1-3.161-2.141h-.034a3.127,3.127,0,0,1-.866-1.511,2.111,2.111,0,0,1,.039-1.31,1.156,1.156,0,0,1,1.022-.814,1.168,1.168,0,0,1,.726.284l.056.039a35.843,35.843,0,0,0,3.412,2.23c.48.257.949.491,1.429.719,0-.385-.034-.725-.034-1.037a15.723,15.723,0,0,1,8.985-14.213,29.718,29.718,0,0,1-.3-3.742,17.558,17.558,0,0,1,.352-3.463h0a3.29,3.29,0,0,1,1.117-1.494,2.392,2.392,0,0,1,1.357-.53.894.894,0,0,1,.7.29,1.114,1.114,0,0,1,.179.926h0a31.183,31.183,0,0,0-.3,3.786,19.6,19.6,0,0,0,.262,3.072,16,16,0,0,1,3.35-.357,15.733,15.733,0,0,1,5.584,1.009c1.256.675,1.893,1.528,1.675,2.264a1.424,1.424,0,0,1-1.485.92,2.717,2.717,0,0,1-.7-.095A12.683,12.683,0,0,0,27.213,58.362a2.263,2.263,0,0,1,1.117,2.331,1.117,1.117,0,0,1-1.15.73,3.354,3.354,0,0,1-1.508-.463Zm43.61-25.9a1.865,1.865,0,0,1-.095-.5.223.223,0,0,0,0-.072h0a13.208,13.208,0,0,0-23.034-9.412.726.726,0,0,0-.251.234c-.056.095-.123.184-.19.29s-.145.178-.207.262a2.592,2.592,0,0,1-2.234,1.115.754.754,0,0,1-.609-.5,1.671,1.671,0,0,1,.235-1.243,15.5,15.5,0,0,1,2.234-2.654c-.089-.887-.145-1.734-.162-2.448a20.926,20.926,0,0,1,.29-3.825h0a2.528,2.528,0,0,1,2.178-2.141,1.067,1.067,0,0,1,1.117.691,1.325,1.325,0,0,1,.039.558v.067a35.081,35.081,0,0,0-.207,4.071v.658a16.055,16.055,0,0,1,2.669-1.115A15.734,15.734,0,0,1,67.3,23.172a25.985,25.985,0,0,1,2.368-1.232,18.126,18.126,0,0,1,3.306-1.087h0a3.354,3.354,0,0,1,1.9.446,2.17,2.17,0,0,1,1.005,1.115.835.835,0,0,1-.034.664,1.117,1.117,0,0,1-.759.513h0A30.387,30.387,0,0,0,71.5,24.872a17.715,17.715,0,0,0-2.06,1.087h0a15.919,15.919,0,0,1,2.234,8.849c-.168.9-.7,1.243-1.15,1.271h-.061A1.267,1.267,0,0,1,69.283,35.054Z" transform="translate(0.023 -0.004)" fill="#ff99af"/>
                        </g>
                    </svg>
                <div class="lg:mt-8">
                    <div class="text-pink
                                lg:text-lg lg:text-center
                                md:text-lg
                                sm:text-lg
                                xs:text-lg xs:px-4">
                        Developmentally Appropriate Content
                    </div>
                    <div class="font-lato text-grey-darker
                                lg:mt-2 lg:text-center lg:px-0
                                md:mt-2 md:px-32
                                sm:mt-2 sm:px-32
                                xs:mt-2 xs:px-4">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
            <div class="lg:flex lg:flex-col lg:items-center lg:w-1/3 lg:px-5 lg:mt-0
                        md:mt-12
                        sm:mt-12
                        xs:mt-12">
                <svg xmlns="http://www.w3.org/2000/svg" width="134" height="134" viewBox="0 0 134 134">
                        <g id="download" transform="translate(12 12)">
                            <rect id="Rectangle_16" data-name="Rectangle 16" width="134" height="134" transform="translate(-12 -12)" fill="none"/>
                            <g id="Group_14" data-name="Group 14" transform="translate(13.644 3.411)">
                                <path id="Union_14" data-name="Union 14" d="M81.864,102.33H0V0H57.073L81.864,23.117v3.029h0ZM3.416,98.914H78.457V26.146H53.443V3.406H3.416ZM56.85,22.74H76.738L57.245,4.548h-.4Zm-41.5,62.535a3.979,3.979,0,1,1,0-7.959h52.3a3.979,3.979,0,0,1,0,7.959Zm23.081-13.6-.136-.132L20.607,53.848a3.411,3.411,0,1,1,4.826-4.821L37.521,61.12V26.151a3.411,3.411,0,0,1,6.822,0V61.17L56.486,49.027a3.411,3.411,0,1,1,4.826,4.821L43.624,71.54a3.8,3.8,0,0,1-5.194.132Z" fill="#ff99af"/>
                            </g>
                        </g>
                    </svg>
                <div class="lg:mt-8">
                    <div class="text-pink
                                lg:text-lg lg:text-center
                                md:text-lg
                                sm:text-lg
                                xs:text-lg">
                        Downloadable Lessons
                    </div>
                    <div class="font-lato text-grey-darker
                                lg:mt-2 lg:text-center lg:px-0
                                md:mt-2 md:px-32
                                sm:mt-2 sm:px-32
                                xs:mt-2 xs:px-4">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white
                lg:flex lg:flex-col lg:pb-20
                md:flex md:flex-col md:pb-20
                sm:flex sm:flex-col sm:pb-20
                xs:flex xs:flex-col xs:pb-20">
        <div class="text-grey-darker
                    lg:font-bold lg:mb-8 lg:mt-16 lg:text-3xl lg:text-center
                    md:font-bold md:mb-8 md:text-3xl md:text-center
                    sm:font-bold sm:mb-8 sm:text-3xl sm:text-center
                    xs:font-bold xs:mb-8 xs:text-2xl xs:text-center">
            Categories
        </div>

        <div class="lg:flex lg:justify-center lg:mb-8">
            <div class="lg:flex lg:flex-col
                        md:text-center md:mb-6
                        sm:text-center sm:mb-6
                        xs:text-center xs:mb-6 xs:px-4">
                <div class="lg:mb-3
                            md:mb-1
                            sm:mb-1
                            xs:mb-1">
                    <img src="../../images/Mask Group 28@2x.png">
                </div>
                <div class="text-grey-darker
                            lg:font-bold lg:text-center lg:text-xl
                            md:font-bold md:text-center md:text-xl
                            sm:font-bold sm:text-center sm:text-xl
                            xs:font-bold xs:text-center xs:text-lg">
                    Where To Start
                </div>
            </div>
            <div class="lg:flex lg:flex-col lg:mx-8
                        md:text-center md:mb-6
                        sm:text-center sm:mb-6
                        xs:text-center xs:mb-6 xs:px-4">
                <div class="lg:mb-3
                            md:mb-1
                            sm:mb-1
                            xs:mb-1">
                    <img src="../../images/Mask Group 29@2x.png">
                </div>
                <div class="text-grey-darker
                            lg:font-bold lg:text-center lg:text-xl
                            md:font-bold md:text-center md:text-xl
                            sm:font-bold sm:text-center sm:text-xl
                            xs:font-bold xs:text-center xs:text-lg">
                    Instrument Introduction
                </div>
            </div>
            <div class="lg:flex lg:flex-col
                        md:text-center md:mb-6
                        sm:text-center sm:mb-6
                        xs:text-center xs:mb-6 xs:px-4">
                <div class="lg:mb-3
                            md:mb-1
                            sm:mb-1
                            xs:mb-1">
                    <img src="../../images/Mask Group 25@2x.png">
                </div>
                <div class="text-grey-darker
                            lg:font-bold lg:text-center lg:text-xl
                            md:font-bold md:text-center md:text-xl
                            sm:font-bold sm:text-center sm:text-xl
                            xs:font-bold xs:text-center xs:text-lg">
                    Learn To Play
                </div>
            </div>
        </div>

        <div class="lg:flex lg:justify-center lg:mb-8">
            <div class="lg:flex lg:flex-col
                        md:text-center md:mb-6
                        sm:text-center sm:mb-6
                        xs:text-center xs:mb-6 xs:px-4">
                <div class="lg:mb-3
                            md:mb-1
                            sm:mb-1
                            xs:mb-1">
                    <img src="../../images/Mask Group 24@2x.png">
                </div>
                <div class="text-grey-darker
                            lg:font-bold lg:text-center lg:text-xl
                            md:font-bold md:text-center md:text-xl
                            sm:font-bold sm:text-center sm:text-xl
                            xs:font-bold xs:text-center xs:text-lg">
                    Instrument Care
                </div>
            </div>
            <div class="lg:flex lg:flex-col lg:mx-8
                        md:text-center md:mb-6
                        sm:text-center sm:mb-6
                        xs:text-center xs:mb-6 xs:px-4">
                <div class="lg:mb-3
                            md:mb-1
                            sm:mb-1
                            xs:mb-1">
                    <img src="../../images/Mask Group 26@2x.png">
                </div>
                <div class="text-grey-darker
                            lg:font-bold lg:text-center lg:text-xl
                            md:font-bold md:text-center md:text-xl
                            sm:font-bold sm:text-center sm:text-xl
                            xs:font-bold xs:text-center xs:text-lg">
                    Songs That Teach
                </div>
            </div>
            <div class="lg:flex lg:flex-col
                        md:text-center md:mb-6
                        sm:text-center sm:mb-6
                        xs:text-center xs:mb-6 xs:px-4">
                <div class="lg:mb-3
                            md:mb-1
                            sm:mb-1
                            xs:mb-1">
                    <img src="../../images/Mask Group 27@2x.png">
                </div>
                <div class="text-grey-darker
                            lg:font-bold lg:text-center lg:text-xl
                            md:font-bold md:text-center md:text-xl
                            sm:font-bold sm:text-center sm:text-xl
                            xs:font-bold xs:text-center xs:text-lg">
                    Performances
                </div>
            </div>
        </div>
        <div class="lg:flex lg:justify-center lg:mt-0
                    md:flex md:justify-center md:mt-4
                    sm:flex sm:justify-center sm:mt-4
                    xs:flex xs:justify-center xs:mt-4">
            <div class="bg-pink rounded uppercase text-white
                        lg:w-1/6 lg:p-2 lg:text-center lg:font-bold
                        md:w-1/3 md:p-2 md:text-center md:font-bold
                        sm:w-1/3 sm:p-2 sm:text-center sm:font-bold
                        xs:p-2 xs:text-center xs:font-bold xs:text-small">
                Explore Courses
            </div>
        </div>
    </div>

    <div class="bg-grey-lighter
                lg:flex lg:flex-row lg:justify-center lg:py-32
                md:flex md:flex-row md:justify-center md:py-12
                sm:flex sm:flex-row sm:justify-center sm:py-12
                xs:flex xs:flex-row xs:justify-center xs:py-12">
        <div class="lg:flex lg:flex-col lg:items-center
                    md:flex md:flex-col md:items-center
                    sm:flex sm:flex-col sm:items-center
                    xs:flex xs:flex-col xs:items-center">
            <div class="text-grey-darkest font-bold
                        lg:mb-10 lg:text-3xl
                        md:mb-4 md:text-2xl
                        sm:mb-4 sm:text-2xl
                        xs:mb-4 xs:text-base">
                Ready to unlock your musical potential?
            </div>
            <div class="bg-pink text-white font-bold rounded uppercase
                        lg:w-3/5 lg:p-2 lg:text-center
                        md:w-1/3 md:p-2 md:text-center
                        sm:w-1/3 sm:p-2 sm:text-center
                        xs:w-1/2 xs:p-2 xs:text-center xs:text-sm">
                Subscribe
            </div>
        </div>
    </div>

    @include('layouts.footer')
</div>
</body>
</html>
