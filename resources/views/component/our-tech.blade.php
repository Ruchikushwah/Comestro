<section class="relative min-h-3xl bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 overflow-hidden py-5">
    <h2 class="flex text-3xl font-semibold mt-8 text-center items-center justify-center text-gray-100">
        Our Tech Stack
    </h2>
    <div class="relative container mx-auto px-10 sm:px-10 py-6">
        <div class="overflow-hidden">
            <div id="tech-slider" class="flex space-x-6 w-max animate-scroll hover:pause">
                <div class="tech-card"><img src="Techstack 1.png" alt="NodeJS"></div>
                <div class="tech-card"><img src="Techstack 2.png" alt="PHP"></div>
                <div class="tech-card"><img src="Techstack 3.png" alt="Java"></div>
                <div class="tech-card"><img src="Techstack 4.png" alt=".NET Core"></div>
                <div class="tech-card"><img src="Techstack 5.png" alt="Python"></div>
                <div class="tech-card"><img src="Techstack 6.png" alt="Python"></div>
                <div class="tech-card"><img src="Techstack 7.png" alt="Python"></div>

                <!-- Duplicated for infinite scroll effect -->
                <div class="tech-card"><img src="Techstack 1.png" alt="NodeJS"></div>
                <div class="tech-card"><img src="Techstack 2.png" alt="PHP"></div>
                <div class="tech-card"><img src="Techstack 3.png" alt="Java"></div>
                <div class="tech-card"><img src="Techstack 4.png" alt=".NET Core"></div>
                <div class="tech-card"><img src="Techstack 5.png" alt="Python"></div>
                <div class="tech-card"><img src="Techstack 6.png" alt=".NET Core"></div>
                <div class="tech-card"><img src="Techstack 7.png" alt="Python"></div>
            </div>
        </div>
    </div>
</section>
<!-- Styles -->
<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    .tech-card {
        flex: none;
        background-color: white;
        width: 160px;
        height: 80px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
    .tech-card img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    /* Infinite Scroll Animation */
    @keyframes scroll {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-50%);
        }
    }
    .animate-scroll {
        display: flex;
        animation: scroll 15s linear infinite;
    }

    .animate-scroll:hover {
        animation-play-state: paused;
    }
</style>
