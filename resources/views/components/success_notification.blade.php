<div class="container mx-auto">
    <div class="text-center mt-64">
        <h2 id="confirmed" class="text-6xl font-bold mb-8" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);">Afspraak is gemaakt!</h2>
        <h6 id="seconds" class="text-2xl font-light mb-8 text-gray-500" style="opacity: 0;">U wordt over <span id="countdown">5</span> seconden automatisch teruggestuurd!</h6>
        <script>
            // Trigger animations and countdown when the page is fully loaded

                let confirmed = new SplitType('#confirmed');
                let characters = document.querySelectorAll('.char');

                for (let i = 0; i < characters.length; i++) {
                    characters[i].classList.add('translate-y-full');
                }

                gsap.to('.char', {
                    y: 0,
                    delay: 0.2,
                    duration: 1.5
                });

                animateCountdownText();
                countdownTimer();
        

            // Function to animate the countdown text
            function animateCountdownText() {
                const countdownText = document.getElementById('seconds');
                gsap.to(countdownText, {
                    opacity: 1,
                    delay: 0.3, // Delay the animation
                    duration: 1.5
                });
            }

            // // Countdown timer function
            function countdownTimer() {
                let seconds = 5;
                const countdownElement = document.getElementById('countdown');

                const timer = setInterval(() => {
                    seconds--;
                    countdownElement.textContent = seconds;

                    if (seconds <= 0) {
                        clearInterval(timer);
                        // Redirect to homepage after countdown
                        window.location = "{{ url('/') }}";
                    }
                }, 1000);
            }
        </script>
    </div>
</div>