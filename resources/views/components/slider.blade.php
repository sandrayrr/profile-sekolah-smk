<div class="relative w-full h-64 md:h-80 overflow-hidden rounded-lg shadow-lg">
    <div id="slides" class="flex w-full h-full transition-all duration-700">
        <img src="https://picsum.photos/1200/400?1" class="w-full object-cover"/>
        <img src="https://picsum.photos/1200/400?2" class="w-full object-cover"/>
        <img src="https://picsum.photos/1200/400?3" class="w-full object-cover"/>
    </div>

    <button id="prev" class="absolute left-2 top-1/2 -translate-y-1/2 bg-black/40 text-white px-3 py-1 rounded">‹</button>
    <button id="next" class="absolute right-2 top-1/2 -translate-y-1/2 bg-black/40 text-white px-3 py-1 rounded">›</button>
</div>

<script>
    let slide = 0;
    const slides = document.getElementById('slides');
    const next = document.getElementById('next');
    const prev = document.getElementById('prev');

    const showSlide = () => slides.style.transform = `translateX(-${slide * 100}%)`;

    next.onclick = () => { slide = (slide + 1) % 3; showSlide(); };
    prev.onclick = () => { slide = (slide - 1 + 3) % 3; showSlide(); };

    setInterval(() => {
        slide = (slide + 1) % 3;
        showSlide();
    }, 5000);
</script>
