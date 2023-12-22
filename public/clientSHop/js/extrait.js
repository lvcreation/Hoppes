gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

let timeLn = gsap.timeline();

ScrollTrigger.create({
    trigger: ".cards",
    pin: true,
    pinSpacing: true,
    // start: "left-=120px left",
    end: "+=1000",
    scrub: 0.5,
    animation: timeLn,
});

timeLn.addLabel({ label: 'card1' });
timeLn.to('.card-4', {
    xPercent: 0,
    opacity: 0,
    x:2000,
    scale: 1.5,
    duration:1,
    // rotation:90,
    // transformOrigin:'right top'
});

timeLn.to('.card-3', {
    xPercent: 0,
    opacity: 0,
    x:-2000,
    duration:1,
    scale: 1.5,
    // rotation: -90,
    // transformOrigin:'left top'
});

timeLn.to('.card-2', {
    xPercent: 0,
    opacity: 0,
    x:2000,
    scale:1.5,
    duration:1,
    // rotation:90
});
timeLn.to('.card-1', {
    xPercent: 0,
    opacity: 0,
    x:-2000,
    scale:1.5,
    duration:1,
    // rotation:-90
});






