<div class="hero" style="background-image: url(images/car-repair-garage.jpg); height:500px;">
    <div class="hero-overlay bg-black bg-opacity-65"></div>
    <div class="hero-content flex-col lg:flex-row-reverse">
        <div>
          <h1 class="text-6xl text-white font-semibold" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);" id="welcomeText">Welkom bij Breda<span class="text-red-500">Cars</span></h1>
          <p class="py-6 w-2/4 text-white">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
          <a href="{{route('appointments.create')}}" class="border-2 border-red-500 py-3 px-8 rounded text-white text-lg font-light hover:bg-red-500 duration-150">Maak afspraak</a>
        </div>
      </div>
</div>

<script>
    let welcomeText = new SplitType('#welcomeText');
    let characters = document.querySelectorAll('.char');

    for(i=0; i<characters.length; i++)
    {
        characters[i].classList.add('translate-y-full');
    }

    gsap.to('.char', {
        y: 0,
        delay: 0.5,
        duration: 0.5
    });
</script>