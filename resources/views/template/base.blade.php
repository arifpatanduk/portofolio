<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/logo.png') }}">

    {{-- template styles --}}
    <link href="{{ asset('css/libs/fonts/feather/feather.min.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css"
        integrity="sha256-xI9svxPNgINGMuNc6T4pgY5QN385llAJtoyzuf3rcbI=" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.6.6/dragula.min.css"
        integrity="sha512-49xW99xceMN8dDoWaoCaXvuVMjnUctHv/jOlZxzFSMJYhqDZmSF/UnM6pLJjQu0YEBLSdO1DP0er6rUdm8/VqA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdi@2.2.43/css/materialdesignicons.min.css"
        integrity="sha256-CrUiUaTZ7ceP1olaUeE6SJ84gk98g+koKi7xfDHmPSM=" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.25.0/themes/prism.css"
        integrity="sha256-h/qtq9bUnXbOOwP4EcbLtYM9Mk3iQQcHZAZ+Jz5y0WQ=" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.3/dist/min/dropzone.min.css"
        integrity="sha256-n/Cuyrm+v15Nim0mJ2ZrElHlCk8raJs/57WeCsIzDr4=" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.css"
        integrity="sha256-RdH19s+RN0bEXdaXsajztxnALYs/Z43H/Cdm1U4ar24=" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/css/bootstrap-select.min.css"
        integrity="sha256-wiMI7buOV5UBzdWN4s4kXqE/LZ794hx5oJOOIQlDBaM=" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify@4.8.1/dist/tagify.css"
        integrity="sha256-vTKdiclUn7qvjU8F6YnG1tyVU8IDSbIVvX4YF04cUqY=" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.3/dist/tiny-slider.css"
        integrity="sha256-6biQaot1QLisz9KkkcCCHWvW2My9SrU6VtqJBv8ChCM=" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tippy.js@6.3.2/dist/tippy.css"
        integrity="sha256-WWn0l9kVjXaC+CGcbxP6Zyac31v1Cjkx2VMnFR3uVng=" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/datatables.net-bs5@1.11.3/css/dataTables.bootstrap5.min.css"
        integrity="sha256-SxTlnl1jQKmz2OB85bUMP9as/yhlJn8QnIeU6euiIOk=" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- livewire --}}
    @livewireStyles
    @stack('head')

    {{-- video js --}}
    <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet" />

    <script src="https://vjs.zencdn.net/7.15.4/video.min.js"></script>

    {{-- alpine js --}}
    <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


    {{-- title field --}}
    <title>@yield('title', 'Arif Patanduk')</title>
</head>

<body>

    @yield('content')

    {{-- <script src="https://kit.fontawesome.com/d920525538.js" crossorigin="anonymous"></script> --}}


    {{-- template --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha256-9SEPo+fwJFpMUet/KACSwO+Z/dKMReF9q4zFhU/fT9M=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/odometer@0.4.8/odometer.min.js"
        integrity="sha256-65R1G5irU1VT+k8L4coqgd3saSvO/Wufson/w+v2Idw=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-slimscroll@1.3.8/jquery.slimscroll.min.js"
        integrity="sha256-qE/6vdSYzQu9lgosKxhFplETvWvqAAlmAuR+yPh/0SI=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js"
        integrity="sha256-P93G0oq6PBPWTP1IR8Mz/0jHHUpaWL0aBJTKauisG7Q=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/bootstrap-select.min.js"
        integrity="sha256-qo0Cam4XJ0QQ06XnCiCFYBh3GDXU45j3lpUp+em2yBU=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"
        integrity="sha256-AkQap91tDcS4YyQaZY2VV34UhSCxu2bDEIgXXXuf5Hg=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.6/dist/jquery.inputmask.min.js"
        integrity="sha256-jPWX+QuN6pA/i9LKoy56jKmyIMKi0ooacNFKRuLc4Ro=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.29.0/dist/apexcharts.min.js"
        integrity="sha256-9XZDpRRiyB7Z5niIMKncavnqeWQW8BBzk5MsAIWUj0w=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.min.js"
        integrity="sha256-xnX1c4jTWYY3xOD5/hVL1h37HCCGJx+USguyubBZsHQ=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/file-upload-with-preview@4.2.0/dist/file-upload-with-preview.min.js"
        integrity="sha256-9Azx//mtgaYn5mLhHyo2E64PpUvjp85kMwMM406ovG0=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.6.6/dragula.min.js"
        integrity="sha512-MrA7WH8h42LMq8GWxQGmWjrtalBjrfIzCQ+i2EZA26cZ7OBiBd/Uct5S3NP9IBqKx5b+MMNH1PhzTsk6J9nPQQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bs-stepper@1.7.0/dist/js/bs-stepper.min.js"
        integrity="sha256-INfYp5owpb0btFquNHGlhSxgGYrFlGYRU2oN/3jWGeM=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/dropzone@5.9.3/dist/min/dropzone.min.js"
        integrity="sha256-uCdT6FLkY6+68Xzm4f9O0usHnJPdKv0Q0rsoXvLchP4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/jQuery.print@1.5.1/jQuery.print.js"
        integrity="sha256-V0sJLBiNdosiIn1bS9gztn1dBsQCr4UART9ys5NiOtI=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.25.0/prism.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.25.0/components/prism-scss.min.js"
        integrity="sha256-nIgnMbF7HR78MfrGXFiQLejc20KBhm+aeYidYaJMMhc=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify@4.8.1/dist/tagify.min.js"
        integrity="sha256-0E7psCqN6ArkvlwAdrG3VQTuluftUixKMP+1231mrsY=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.3/dist/min/tiny-slider.js"
        integrity="sha256-1riA5aRAgBsOhK+MV2xS8bHhFC+wOvurZyCvB2TLHrA=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha256-85WHXrXVjFEoxDSBLNClPUOLEVNvf9FXcHfYpcYS4f0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/tippy.js@6.3.2/dist/tippy-bundle.umd.min.js"
        integrity="sha256-WHi83J81HHifYrlrzDXBuOrjH1gRGsbx4BOpQ7L5IPQ=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12/lib/typed.min.js"
        integrity="sha256-UVQ5HtHTmtqBT3KY5cd4AvI47pp0gJwIM+q45HD9oLk=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.3.3/dist/js/jsvectormap.min.js"
        integrity="sha256-LqWOpMN4S/VutNMcCOi7X0+SnLAL8PGH/xtu9wHzp9Y=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.3.3/dist/maps/world.js"
        integrity="sha256-jC9x1ooLcocN+C3lLngMvcGLioCCj+OwbwcmvnWBxa8=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/datatables.net@1.11.3/js/jquery.dataTables.min.js"
        integrity="sha256-gOJ/T3VMQ0Brwz7VYrLoVAQ+NE0a5vHoj1vXI1HUIzY=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/datatables.net-bs5@1.11.3/js/dataTables.bootstrap5.min.js"
        integrity="sha256-2iYlCYmJTHCqEILUjOjrGFWPHIy4n6+CvHzOYZT2Sto=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/datatables.net-responsive@2.2.9/js/dataTables.responsive.min.js"
        integrity="sha256-f+r2TX3KkC6avpv7F8bRhVZZO8nW7xJhmCKd6k7PqGE=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/datatables.net-responsive-bs5@2.2.9/js/responsive.bootstrap5.min.js"
        integrity="sha256-Ha5rmkNHWjuITROB+fwJOyk60mzkrw1xprV6RdUKy7I=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/resumablejs@1.1.0/resumable.min.js"></script>


    <script src="{{ asset('js/theme.min.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>

    {{-- livewire --}}
    @livewireScripts

    @stack('scripts')

</body>

</html>