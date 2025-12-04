<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll('.counter');
    const speed = 150;

    counters.forEach(counter => {
        const animate = () => {
            const value = +counter.getAttribute('data-target');
            const data = +counter.innerText;

            const time = value / speed;

            if (data < value) {
                counter.innerText = Math.ceil(data + time);
                setTimeout(animate, 20);
            } else {
                counter.innerText = value;
            }
        };

        animate();
    });
});


    new Swiper(".mySwiperGuru", {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: true,
        autoplay: { delay: 2500 },
        breakpoints: {
            320: { slidesPerView: 1 },
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 4 },
        },
    });

    new Swiper(".mySwiperStaf", {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: true,
        autoplay: { delay: 2500 },
        breakpoints: {
            320: { slidesPerView: 1 },
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 4 },
        },
    });
</script>



<body class="bg-gray-100">

    {{-- NAVBAR --}}
    @include('layouts.navbar')

    <main class="max-w-6xl mx-auto px-6 py-8">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('layouts.footer')

</body>
</html>
