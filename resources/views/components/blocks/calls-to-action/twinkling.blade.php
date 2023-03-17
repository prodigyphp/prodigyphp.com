<div class="relative min-h-screen">
    <div class="absolute inset-0 overflow-hidden z-10" style="background-color: rgba(0, 0, 0, 0.8);">
        <div x-data="twinklingStars()" x-init="init()">
            <template x-for="(star, index) in stars" :key="index">
                <svg x-ref="star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="absolute text-white"
                     :style="`opacity: ${star.opacity};transform: translate(${star.x}px, ${star.y}px); width: ${star.size}px; height: ${star.size}px;transition: width 3s linear, height 3s linear, transform 6.5s linear, opacity 2s ease-in-out;`">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                </svg>
            </template>
        </div>
    </div>

    <script>
        function twinklingStars() {
            return {
                stars: [],
                init() {
                    this.generateStars();

                    setInterval(() => {
                        this.animateStars();
                    }, 2000);
                },
                generateStars() {
                    const numStars = 100;
                    for (let i = 0; i < numStars; i++) {
                        const size = Math.random() * 12 + 8;
                        const opacity = Math.random();
                        const x = Math.floor(Math.random() * window.innerWidth);
                        const y = Math.floor(Math.random() * window.innerHeight);

                        this.stars.push({size: size, x: x, y: y, opacity: opacity});
                    }
                },
                animateStars() {
                    this.stars = this.stars.map(star => {
                        const newSize = Math.random() * 12 + 8;
                        const newOpacity = Math.random();
                        const newX = star.x * (Math.random() / 50 + .99) ;
                        const newY = star.y * (Math.random() / 50 + .99);

                        return {size: newSize, x: newX, y: newY, opacity: newOpacity};
                    });
                }
            }
        }
    </script>
</div>