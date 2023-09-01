import './bootstrap';
import './slider';


const setupAnimations = () => {
    const animationContext = gsap.context(() => {
        // Initialize Lenis (Locomotive Scroll)
        const lenisInstance = new Lenis({
            duration: 1.2,
            easing: t => Math.min(1, 1.001 - Math.pow(2, -10 * t))
        });

        // Update Lenis and ScrollTrigger on every frame
        const animationFrame = (time) => {
            lenisInstance.raf(time);
            ScrollTrigger.update();
            requestAnimationFrame(animationFrame);
        };
        requestAnimationFrame(animationFrame);

        // Horizontal translation of the entire section (or "zone") based on scroll
        const zone = document.getElementById('servicesBanner'); // Replace '.your-zone-selector' with the selector for your section or zone
        gsap.to(zone, {
            x: "-100%",  // Adjust based on how much you want the section to move horizontally
            scrollTrigger: {
                trigger: zone,
                start: "top bottom",
                end: "bottom top",
                scrub: 2
            }
        });

        // ... [rest of the code, like card and column animations, remains unchanged]

        return () => animationContext.revert();
    });

    return animationContext;
};

//
// setupAnimations();

// (function () {
//
//
//     const initAnimations = () => {
//         const ctx = gsap.context(() => {
//             const lenis = new Lenis({
//                 duration: 1.2,
//                 easing: t => Math.min(1, 1.001 - Math.pow(2, -10 * t))
//             });
//
//             // Ensure ScrollTrigger is aware of Locomotive Scroll's scroll position
//             ScrollTrigger.scrollerProxy(".container", {
//                 scrollTop(value) {
//                     return arguments.length ? lenis.scrollTo(value, 0, 0) : lenis.scroll.instance.scroll.y;
//                 },
//                 getBoundingClientRect() {
//                     return { top: 0, left: 0, width: window.innerWidth, height: window.innerHeight };
//                 },
//             });
//
//             // Create the GSAP animation with ScrollTrigger
//             gsap.to(".child", {
//                 x: "100%",
//                 scrollTrigger: {
//                     trigger: ".container",
//                     scroller: ".container",
//                     start: "top top",
//                     end: "bottom bottom",
//                     scrub: true,
//                     horizontal: true,
//                 }
//             });
//
//             const raf = (time) => {
//                 lenis.raf(time);
//                 ScrollTrigger.update();
//                 requestAnimationFrame(raf);
//             };
//
//             requestAnimationFrame(raf);
//
//             return () => ctx.revert();
//         });
//
//         return ctx;
//     };
//
//     return initAnimations();
//
// })();


