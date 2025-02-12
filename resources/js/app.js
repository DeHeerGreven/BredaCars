import './bootstrap';

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