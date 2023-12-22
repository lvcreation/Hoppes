const { innerHeight } = window;

gsap.from("#card-one-content", {
 
    scale: 5, stager: 0.15, duration: 3,
    scrollTrigger: {
        trigger: '#card-one',
        pin: true,
        end: `+=${innerHeight * 1.3}`,
        scrub: 3,
    }

});