/**
 * Main Application JavaScript
 * 
 * This file contains the main application logic including:
 * - GSAP animations with ScrollTrigger
 * - Smooth Scroll functionality
 * - Dynamic Magnific Popup initialization
 * - MainApp class with all component initializations
 * - jQuery compatibility wrapper
 */

/**
 * Define a class for the main application
 */
class MainApp {
    constructor() {
        this.init();
    }

    // Initialize all components
    init() {
        // Detect mobile device (Do not remove!!!)
        this.isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Nokia|Opera Mini/i.test(navigator.userAgent) ? true : false;

        // Register GSAP ScrollTrigger plugin
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);
        }

        // Core animations
        this.detectMobile();
        this.imageAnimation();
        this.fadeAnimation();
        this.splitTextAnimation();
        
        // Components
        this.initAccordion();
        this.initCounter();
        this.initSelect();
        this.initRatingSystem();
        this.initTestimonialCollapse();
        this.initTimelineAnimation();
        
        // Third-party integrations
        // this.initSmoothScroll();
        this.initMagnificPopup();
        this.initNavbarHoverDropdowns();
        this.initDashboardSidebar();
    }

    // Start all components
    start() {
        // console.log("MainApp started.");
        this.initEqualHeight();
        this.initDraggableFilters();
    }

    // Stop all components
    stop() {
        console.log("MainApp stopped.");
    }

    // Function to initialize image animation
    detectMobile() {
        if (this.isMobile) {
            document.body.classList.add("is-mobile");
        }
    }

    // Function to initialize image animation
    imageAnimation() {
        this.animateRevealContainers();
        this.animateInviewContainers();
        this.animateParallaxImages();
    }

    animateRevealContainers() {
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
            return;
        }

        document.querySelectorAll(".reveal").forEach(container => {
            const image = container.querySelector("img");
            if (!image) return;

            gsap.timeline({
                scrollTrigger: {
                    trigger: container,
                    toggleActions: "play none none none",
                },
            })
            .set(container, { autoAlpha: 1 })
            .from(container, 1.5, { xPercent: -100, ease: "Power2.out" })
            .from(image, 1.5, { xPercent: 100, scale: 1.3, delay: -1.5, ease: "Power2.out" });
        });
    }

    animateInviewContainers() {
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
            return;
        }

        document.querySelectorAll(".inview").forEach(container => {
            const element = container.querySelector(".inview-wrapper");
            const delayAttr = container.getAttribute("delay") || "0";
            if (!element) return;

            gsap.fromTo(element, { scale: 1.2 }, {
                scale: 1,
                duration: 2,
                delay: parseFloat(delayAttr),
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: container,
                    start: 'top bottom',
                },
                onStart: () => container.classList.add('animate')
            });
        });
    }

    animateParallaxImages() {
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
            return;
        }

        document.querySelectorAll(".parallax-anim, .parallax-anim-self").forEach(element => {
            // Determine the target for animation (image itself or an image within a container)
            const target = element.matches('.parallax-anim-self') ? element : element.querySelector('img');

            // Get custom values or fallback to default if not specified
            const fromYPercent = element.getAttribute('data-from-y') || -30;
            const toYPercent = element.getAttribute('data-to-y') || 30;
            const scrubValue = element.getAttribute('data-scrub') || 0.5;

            gsap.timeline({
                scrollTrigger: {
                    trigger: target,
                    scrub: parseFloat(scrubValue),
                },
            })
            .from(target, { yPercent: parseFloat(fromYPercent), ease: "none" })
            .to(target, { yPercent: parseFloat(toYPercent), ease: "none" });
        });
    }

    // Function to initialize custom animations
    fadeAnimation() {
        if (typeof gsap === 'undefined') {
            return;
        }

        document.querySelectorAll(".fade-anim").forEach(e => {
            let fadeFrom = e.getAttribute("data-fade-from") || "bottom";
            let onScroll = parseInt(e.getAttribute("data-on-scroll") || "1");
            let duration = parseFloat(e.getAttribute("data-duration") || "0.3");
            let fadeOffset = parseInt(e.getAttribute("data-fade-offset") || "20");
            let rotation = parseFloat(e.getAttribute("data-rotation") || "0");
            let delay = parseFloat(e.getAttribute("data-delay") || "0.15");
            let ease = e.getAttribute("data-ease") || "power1.out";

            let animationProps = {
                opacity: 0,
                ease: ease,
                rotation: rotation,
                duration: duration,
                delay: delay
            };

            switch (fadeFrom) {
                case "top":
                    animationProps.y = -fadeOffset;
                    break;
                case "left":
                    animationProps.x = -fadeOffset;
                    break;
                case "bottom":
                    animationProps.y = fadeOffset;
                    break;
                case "right":
                    animationProps.x = fadeOffset;
                    break;
            }

            if (onScroll === 1) {
                animationProps.scrollTrigger = {
                    trigger: e,
                    start: "top 80%"
                };
            }

            gsap.from(e, animationProps);
        });
    }

    // Function to initialize split text animations
    splitTextAnimation() {
        if (typeof gsap === 'undefined' || typeof SplitType === 'undefined') {
            return;
        }

        const splitTextContainer = document.querySelectorAll(".text-anim");
        const splitWordContainer = document.querySelectorAll(".word-anim");
        const textAnimation = gsap.utils.toArray(".textmove-anim");
        const charComeItems = document.querySelectorAll(".char-anim");

        const animateSplitText = (element, config, type = 'words') => {
            const splitText = new SplitType(element, { types: "chars,words,lines", lineClass: "line" });
            const textToAnimate = type === 'words' ? splitText.words : type === 'chars' ? splitText.chars : splitText.lines;
            gsap.from(textToAnimate, { ...config, scrollTrigger: { trigger: element, start: "top 85%" } });
        };

        const getTranslationValues = (element) => {
            const direction = element.getAttribute("data-direction") || "horizontal";
            return direction === "vertical" ? { x: 0, y: 20 } : { x: 20, y: 0 };
        };

        splitTextContainer.forEach((element) => {
            const variant = element.getAttribute("data-variant");

            const { x, y } = getTranslationValues(element);

            const config = { duration: 1, delay: 0.5, x, y, autoAlpha: 0, stagger: 0.05 };

            if (variant === '1') {
                animateSplitText(element, config);
            } else if (variant === '2') {
                animateSplitText(element, { ...config, ease: "power2.out" }, "chars");
            } else if (variant === '3') {
                element.animation?.progress(1).kill();

                element.split?.revert();

                element.split = new SplitType(element, { types: "chars,words,lines", lineClass: "line" });

                gsap.set(element, { perspective: 400 });

                gsap.set(element.split.chars, { opacity: 0, x: 50 });

                element.animation = gsap.to(element.split.chars, {
                    x: 0, y: 0, rotateX: 0, opacity: 1, duration: 1, ease: "back.out", stagger: 0.02,
                    scrollTrigger: { trigger: element, start: "top 90%" },
                });
            }
        });

        splitWordContainer.forEach((element) => {
            const staggerAmount = parseFloat(element.getAttribute("data-stagger") || "0.04");
            const delay = parseFloat(element.getAttribute("data-delay") || "0.1");
            const duration = parseFloat(element.getAttribute("data-duration") || "0.75");

            const { x, y } = getTranslationValues(element);

            const splitText = new SplitType(element, { types: "chars,words" });

            const config = {
                duration, delay, autoAlpha: 0, stagger: staggerAmount, scrollTrigger: { trigger: element, start: "top 90%" },
                x, y
            };

            gsap.from(splitText.words, config);
        });

        textAnimation.forEach((element) => {
            const delay = parseFloat(element.getAttribute("data-delay") || "0.1");

            const timeline = gsap.timeline({
                scrollTrigger: {
                    trigger: element,
                    start: "top 85%",
                    scrub: false,
                    markers: false,
                    toggleActions: "play none none none"
                }
            });

            const splitText = new SplitType(element, { types: "lines" });

            gsap.set(element, { perspective: 400 });

            timeline.from(splitText.lines, {
                duration: 1,
                delay,
                opacity: 0,
                rotationX: -80,
                force3D: true,
                transformOrigin: "top center -50",
                stagger: 0.1
            });
        });

        charComeItems.forEach((element) => {
            const staggerAmount = parseFloat(element.getAttribute("data-stagger") || "0.05");
            const delay = parseFloat(element.getAttribute("data-delay") || "0.1");
            const duration = parseFloat(element.getAttribute("data-duration") || "1");

            const ease = element.getAttribute("data-ease") || "power2.out";

            const { x, y } = getTranslationValues(element);

            const splitText = new SplitType(element, { types: "chars,words" });

            const config = {
                duration,
                delay,
                autoAlpha: 0,
                ease,
                stagger: staggerAmount,
                scrollTrigger: { trigger: element, start: "top 85%" },
                x, y
            };

            gsap.from(splitText.chars, config);
        });
    }

    initAccordion(){
        // Check if GSAP is available
        const useGSAP = typeof gsap !== 'undefined';
        
        // Accordion type 1: [data-accordion]
        let r = document.querySelectorAll("[data-accordion]");
        
        r.forEach(t => {
            // Find the button element using data attribute
            let button = t.querySelector("[data-accordion-button]");
            // Fallback to header if no button found
            let o = button || t.querySelector("[data-accordion-header]");
            // Find the body - could be [data-accordion-body] or [data-accordion-collapse] > [data-accordion-body]
            let collapse = t.querySelector("[data-accordion-collapse]");
            let body = collapse ? collapse.querySelector("[data-accordion-body]") : t.querySelector("[data-accordion-body]");
            
            if (!o || !body) return;

            // Initialize with data attribute
            const isInitiallyOpen = collapse && collapse.classList.contains("show");
            t.setAttribute("data-accordion-open", isInitiallyOpen ? "true" : "false");

            // Prevent Bootstrap from handling this
            if (button) {
                // Remove Bootstrap data attributes to prevent interference
                button.removeAttribute("data-bs-toggle");
                button.removeAttribute("data-bs-target");
            }

            o.addEventListener("click", (e) => {
                // Prevent Bootstrap from interfering
                e.preventDefault();
                e.stopPropagation();
                
                var isOpen = t.getAttribute("data-accordion-open") === "true";

                // Close all other accordions
                r.forEach(item => {
                    var itemButton = item.querySelector("[data-accordion-button]");
                    var itemHeader = itemButton || item.querySelector("[data-accordion-header]");
                    var itemCollapse = item.querySelector("[data-accordion-collapse]");
                    var accordionBody = itemCollapse ? itemCollapse.querySelector("[data-accordion-body]") : item.querySelector("[data-accordion-body]");
                    
                    if (!itemHeader || !accordionBody) return;
                    
                    if (item !== t && item.getAttribute("data-accordion-open") === "true") {
                        item.setAttribute("data-accordion-open", "false");
                        itemHeader.classList.remove("open", "active");
                        if (itemCollapse) {
                            itemCollapse.classList.remove("show");
                        }
                        if (itemButton) {
                            itemButton.classList.add("collapsed");
                            itemButton.setAttribute("aria-expanded", "false");
                        }
                        
                        if (useGSAP) {
                            gsap.to(accordionBody, {
                                height: 0,
                                duration: 0.4,
                                ease: "power2.inOut",
                                onComplete: () => {
                                    accordionBody.style.height = "";
                                }
                            });
                            gsap.to(item, {
                                borderColor: "transparent",
                                paddingBottom: 0,
                                duration: 0.4,
                                ease: "power2.inOut"
                            });
                        } else {
                            accordionBody.style.height = "0";
                            item.style.borderColor = "transparent";
                            item.style.paddingBottom = "0";
                        }
                    }
                });

                // Toggle current accordion
                if (!isOpen) {
                    t.setAttribute("data-accordion-open", "true");
                    o.classList.add("open", "active");
                    if (collapse) {
                        collapse.classList.add("show");
                    }
                    if (button) {
                        button.classList.remove("collapsed");
                        button.setAttribute("aria-expanded", "true");
                    }
                    
                    if (useGSAP) {
                        // Set initial height for animation
                        gsap.set(body, { height: "auto" });
                        const height = body.scrollHeight;
                        gsap.set(body, { height: 0 });
                        
                        // Animate open
                        gsap.to(body, {
                            height: height,
                            duration: 0.4,
                            ease: "power2.inOut",
                            onComplete: () => {
                                body.style.height = "";
                            }
                        });
                        gsap.to(t, {
                            borderColor: "#000000",
                            paddingBottom: 40,
                            duration: 0.4,
                            ease: "power2.inOut"
                        });
                    } else {
                        body.style.height = body.scrollHeight + "px";
                        t.style.border = "1px solid black";
                        t.style.paddingBottom = "40px";
                    }
                } else {
                    t.setAttribute("data-accordion-open", "false");
                    o.classList.remove("open", "active");
                    if (collapse) {
                        collapse.classList.remove("show");
                    }
                    if (button) {
                        button.classList.add("collapsed");
                        button.setAttribute("aria-expanded", "false");
                    }
                    
                    if (useGSAP) {
                        gsap.to(body, {
                            height: 0,
                            duration: 0.4,
                            ease: "power2.inOut",
                            onComplete: () => {
                                body.style.height = "";
                            }
                        });
                        gsap.to(t, {
                            borderColor: "transparent",
                            paddingBottom: 0,
                            duration: 0.4,
                            ease: "power2.inOut"
                        });
                    } else {
                        body.style.height = "0";
                        t.style.borderColor = "transparent";
                        t.style.paddingBottom = "0";
                    }
                }
            });
        });

        // Accordion type 2: [data-accordion-v4]
        let a = document.querySelectorAll("[data-accordion-v4]");
        
        a.forEach((t, index) => {
            let n = t.querySelector("[data-accordion-header-v4]");
            let i = t.querySelector("[data-accordion-body-v4]");
            
            if (!n || !i) return;

            // Initialize with data attribute
            t.setAttribute("data-accordion-open", "false");
            t.setAttribute("data-active", "false");
            
            n.addEventListener("click", (e) => {
                // Prevent Bootstrap from interfering
                e.preventDefault();
                e.stopPropagation();
                
                var isOpen = t.getAttribute("data-accordion-open") === "true";

                // Close all other accordions
                a.forEach((item, itemIndex) => {
                    var header = item.querySelector("[data-accordion-header-v4]");
                    var accordionBody = item.querySelector("[data-accordion-body-v4]");
                    
                    if (!header || !accordionBody) return;
                    
                    if (itemIndex !== index && item.getAttribute("data-accordion-open") === "true") {
                        item.setAttribute("data-accordion-open", "false");
                        item.setAttribute("data-active", "false");
                        header.classList.remove("open", "active");
                        
                        if (useGSAP) {
                            gsap.to(accordionBody, {
                                height: 0,
                                marginBottom: 0,
                                duration: 0.4,
                                ease: "power2.inOut",
                                onComplete: () => {
                                    accordionBody.style.height = "";
                                    accordionBody.style.marginBottom = "";
                                }
                            });
                        } else {
                            accordionBody.style.height = "0";
                            accordionBody.style.marginBottom = "0";
                        }
                    }
                });

                // Toggle current accordion
                if (!isOpen) {
                    t.setAttribute("data-accordion-open", "true");
                    t.setAttribute("data-active", "true");
                    n.classList.add("open", "active");
                    
                    if (useGSAP) {
                        // Set initial height for animation
                        gsap.set(i, { height: "auto" });
                        const height = i.scrollHeight;
                        gsap.set(i, { height: 0 });
                        
                        // Animate open
                        gsap.to(i, {
                            height: height,
                            marginBottom: 20,
                            duration: 0.4,
                            ease: "power2.inOut",
                            onComplete: () => {
                                i.style.height = "";
                            }
                        });
                    } else {
                        i.style.height = i.scrollHeight + "px";
                        i.style.marginBottom = "20px";
                    }
                } else {
                    t.setAttribute("data-accordion-open", "false");
                    t.setAttribute("data-active", "false");
                    n.classList.remove("open", "active");
                    
                    if (useGSAP) {
                        gsap.to(i, {
                            height: 0,
                            marginBottom: 0,
                            duration: 0.4,
                            ease: "power2.inOut",
                            onComplete: () => {
                                i.style.height = "";
                                i.style.marginBottom = "";
                            }
                        });
                    } else {
                        i.style.height = "0";
                        i.style.marginBottom = "0";
                    }
                }
            });
        });
    }

    initCounter() {
        // Select all section elements with a data-section-id attribute
        const sections = document.querySelectorAll("[data-section-id]");

        sections.forEach(section => {
            const sectionId = section.dataset.sectionId;

            // Select all counters within this section
            const counters = section.querySelectorAll(".counter");

            if (counters.length === 0) {
                console.warn(`No counters found for section with ID: ${sectionId}`);
                return;
            }

            // Intersection Observer callback
            const observerCallback = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        counters.forEach((counter, index) => {
                            // Function to animate the counter
                            const animateCounter = () => {
                                const targetValue = +counter.getAttribute("data-value");
                                const currentValue = +counter.innerText || 0;
                                const increment = Math.ceil(targetValue / 100);

                                if (currentValue < targetValue) {
                                    counter.innerText = Math.min(currentValue + increment, targetValue);
                                    setTimeout(animateCounter, 20); // Adjust speed here
                                }
                            };

                            // Reset counter and start animation
                            counter.innerText = "0";
                            animateCounter();

                            // Animate the parent element
                            const parentElement = counter.parentElement;
                            parentElement.style.opacity = "0";
                            parentElement.style.transform = "translateY(20px)";
                            setTimeout(() => {
                                parentElement.style.transition = "all 0.5s ease";
                                parentElement.style.opacity = "1";
                                parentElement.style.transform = "translateY(0)";
                            }, 200 * index); // Staggered delay
                        });

                        // Stop observing after the animation starts
                        observer.unobserve(section);
                    }
                });
            };

            // Create and configure the Intersection Observer
            const observer = new IntersectionObserver(observerCallback, {
                threshold: 0.15, // Trigger when 15% of the element is visible
            });

            // Start observing the section element
            observer.observe(section);
        });
    }

    initSelect(){
        const selects = document.querySelectorAll('.e-select, [e-select]');
        
        selects.forEach(select => {
            // Skip if already initialized
            if (select.hasAttribute('data-select-initialized')) return;
            select.setAttribute('data-select-initialized', 'true');

            const numberOfOptions = select.children.length;
            const hasSearch = select.hasAttribute('e-search');
            const customClass = select.getAttribute('e-class') || '';

            // Hide original select
            select.classList.add('select-hidden');

            // Create wrapper with custom classes
            const wrapper = document.createElement('div');
            wrapper.classList.add('e-select');
            
            // Transfer original select classes to wrapper (except e-select)
            const originalClasses = Array.from(select.classList);
            originalClasses.forEach(cls => {
                if (cls !== 'e-select' && cls !== 'select-hidden') {
                    wrapper.classList.add(cls);
                }
            });
            
            // Remove e-select class from original select if it exists
            select.classList.remove('e-select');
            
            select.parentNode.insertBefore(wrapper, select);
            wrapper.appendChild(select);

            // Create styled select button
            const styledSelect = document.createElement('div');
            styledSelect.classList.add('select-styled');
            styledSelect.innerHTML = `
                <span class="select-styled__text">${select.options[0].textContent}</span>
                <span class="select-styled__arrow"></span>
            `;
            wrapper.appendChild(styledSelect);

            // Create options list
            const list = document.createElement('ul');
            list.classList.add('select-options');
            if (customClass) {
                customClass.split(' ').forEach(cls => list.classList.add(`${cls}__options`));
            }
            wrapper.appendChild(list);

            // Add search functionality if needed
            if (hasSearch) {
                const searchItem = document.createElement('li');
                searchItem.classList.add('select-options__search');
                searchItem.innerHTML = `
                    <input type="text" class="select-search" placeholder="Search...">
                `;
                list.appendChild(searchItem);

                const noMatchItem = document.createElement('li');
                noMatchItem.textContent = 'Nothing matched';
                noMatchItem.classList.add('select-options__no-match');
                noMatchItem.style.display = 'none';
                list.appendChild(noMatchItem);

                const searchInput = searchItem.querySelector('input');
                
                searchInput.addEventListener('input', function() {
                    const filter = searchInput.value.toLowerCase();
                    let hasMatch = false;
                    
                    list.querySelectorAll('li:not(.select-options__search):not(.select-options__no-match)').forEach(item => {
                        if (item.textContent.toLowerCase().includes(filter)) {
                            gsap.to(item, { 
                                opacity: 1, 
                                y: 0, 
                                duration: 0.3, 
                                display: 'block',
                                ease: "power2.out"
                            });
                            hasMatch = true;
                        } else {
                            gsap.to(item, { 
                                opacity: 0, 
                                y: -10, 
                                duration: 0.3, 
                                display: 'none',
                                ease: "power2.out"
                            });
                        }
                    });

                    noMatchItem.style.display = hasMatch ? 'none' : 'block';
                });

                searchInput.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            }

            // Add options
            Array.from(select.options).forEach((option, index) => {
                const listItem = document.createElement('li');
                listItem.classList.add('select-options__item');
                if (customClass) {
                    listItem.classList.add(`${customClass}__option`);
                }
                listItem.textContent = option.textContent;
                listItem.setAttribute('rel', option.value);
                listItem.setAttribute('data-index', index);
                
                if (option.selected) {
                    listItem.classList.add('is-selected');
                    styledSelect.querySelector('.select-styled__text').textContent = option.textContent;
                }
                
                list.appendChild(listItem);
            });

            // Set initial state
            gsap.set(list, { 
                opacity: 0, 
                y: -10, 
                display: 'none' 
            });

            // Toggle dropdown
            styledSelect.addEventListener('click', function(e) {
                e.stopPropagation();
                
                // Close other selects
                document.querySelectorAll('.select-styled.active').forEach(activeSelect => {
                    if (activeSelect !== styledSelect) {
                        closeDropdown(activeSelect);
                    }
                });

                const isOpen = styledSelect.classList.contains('active');
                
                if (isOpen) {
                    closeDropdown(styledSelect);
                } else {
                    openDropdown(styledSelect, list, hasSearch);
                }
            });

            // Option selection
            list.addEventListener('click', function(e) {
                const item = e.target.closest('.select-options__item');
                if (item && !item.querySelector('input') && !item.classList.contains('select-options__no-match')) {
                    selectOption(item, select, styledSelect, list);
                }
            });

            // Close on outside click
            document.addEventListener('click', function() {
                if (styledSelect.classList.contains('active')) {
                    closeDropdown(styledSelect);
                }
            });
        });

        function openDropdown(styledSelect, list, hasSearch) {
            styledSelect.classList.add('active');
            list.style.display = 'block';
            
            gsap.to(list, { 
                opacity: 1, 
                y: 0, 
                duration: 0.3, 
                ease: "power2.out",
                onComplete: () => {
                    if (hasSearch) {
                        const searchInput = list.querySelector('.select-search');
                        if (searchInput) {
                            searchInput.focus();
                        }
                    }
                }
            });
        }

        function closeDropdown(styledSelect) {
            styledSelect.classList.remove('active');
            const list = styledSelect.nextElementSibling;
            
            gsap.to(list, { 
                opacity: 0, 
                y: -10, 
                duration: 0.3, 
                ease: "power2.out",
                onComplete: () => {
                    list.style.display = 'none';
                }
            });
        }

        function selectOption(item, select, styledSelect, list) {
            // Update select value
            select.value = item.getAttribute('rel');
            
            // Update styled select text
            styledSelect.querySelector('.select-styled__text').textContent = item.textContent;
            
            // Update selected state
            list.querySelectorAll('.is-selected').forEach(selectedItem => {
                selectedItem.classList.remove('is-selected');
            });
            item.classList.add('is-selected');
            
            // Add selection animation
            gsap.fromTo(item, 
                { scale: 0.95, backgroundColor: 'rgba(0,0,0,0.05)' },
                { scale: 1, backgroundColor: 'transparent', duration: 0.2, ease: "power2.out" }
            );
            
            // Close dropdown
            closeDropdown(styledSelect);
            
            // Trigger change event
            select.dispatchEvent(new Event('change', { bubbles: true }));
        }
    }

    /**
     * Initialize Lenis Smooth Scroll
     */
    initSmoothScroll() {
        if (typeof Lenis !== 'undefined') {
            const lenis = new Lenis({
                duration: 1.2,
                easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
                orientation: 'vertical',
                gestureOrientation: 'vertical',
                smoothWheel: true,
                wheelMultiplier: 1,
                smoothTouch: false,
                touchMultiplier: 2,
                infinite: false,
            });

            // RAF loop for Lenis
            function raf(time) {
                lenis.raf(time);
                requestAnimationFrame(raf);
            }
            requestAnimationFrame(raf);

            // Integrate with GSAP ScrollTrigger if available
            if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
                lenis.on('scroll', ScrollTrigger.update);
                
                gsap.ticker.add((time) => {
                    lenis.raf(time * 1000);
                });
                
                gsap.ticker.lagSmoothing(0);
            }

            // Handle anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const href = this.getAttribute('href');
                    if (href !== '#' && href.length > 1) {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            lenis.scrollTo(target, {
                                offset: 0,
                                duration: 1.2
                            });
                        }
                    }
                });
            });

            // Store lenis instance globally for access
            window.lenis = lenis;
        }
    }

    /**
     * Initialize Magnific Popup dynamically using data-attributes
     */
    initMagnificPopup() {
        if (typeof jQuery === 'undefined' || typeof jQuery.magnificPopup === 'undefined') {
            return;
        }

        // Image Gallery
        jQuery('[data-mfp="gallery"]').each(function() {
            const $this = jQuery(this);
            $this.magnificPopup({
                delegate: $this.data('mfp-delegate') || 'a',
                type: 'image',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1]
                },
                image: {
                    titleSrc: function(item) {
                        return item.el.attr('title') || item.el.find('img').attr('alt');
                    }
                }
            });
        });

        // Single Image
        jQuery('[data-mfp="image"]').each(function() {
            const $this = jQuery(this);
            $this.magnificPopup({
                items: {
                    src: $this.data('mfp-src') || $this.attr('href'),
                    title: $this.data('mfp-title') || $this.attr('title')
                },
                type: 'image'
            });
        });

        // Inline Content
        jQuery('[data-mfp="inline"]').each(function() {
            const $this = jQuery(this);
            $this.magnificPopup({
                items: {
                    src: $this.data('mfp-src') || '#' + $this.data('mfp-target'),
                    type: 'inline'
                },
                inline: {
                    enabled: true,
                    preloader: false
                }
            });
        });

        // Iframe
        jQuery('[data-mfp="iframe"]').each(function() {
            const $this = jQuery(this);
            $this.magnificPopup({
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });

        // AJAX
        jQuery('[data-mfp="ajax"]').each(function() {
            const $this = jQuery(this);
            $this.magnificPopup({
                type: 'ajax',
                ajax: {
                settings: {
                        url: $this.data('mfp-src') || $this.attr('href')
                    }
                }
            });
        });
    }

    /**
     * Initialize Dynamic Rating System
     * Converts data-rating attributes to star displays with half-star support
     */
    initRatingSystem() {
        const ratingElements = document.querySelectorAll('[data-rating]');
        
        ratingElements.forEach(function(element) {
            const rating = parseFloat(element.getAttribute('data-rating'));
            const maxRating = parseInt(element.getAttribute('data-max-rating')) || 5;
            
            // Clear existing content
            element.innerHTML = '';
            
            // Generate star HTML
            const stars = this.generateStars(rating, maxRating);
            element.innerHTML = stars;
            
            // Add rating class for styling
            element.classList.add('dynamic-rating');
        }.bind(this));
        
        console.log(`Dynamic rating system initialized: ${ratingElements.length} ratings processed`);
    }
    
    /**
     * Generate star HTML based on rating
     * @param {number} rating - The rating value (e.g., 4.5, 3.2, 5)
        
        // Clear existing content
        element.innerHTML = '';
        
        // Generate star HTML
        const stars = this.generateStars(rating, maxRating);
        element.innerHTML = stars;
        
        // Add rating class for styling
        element.classList.add('dynamic-rating');
    }.bind(this));
    
    console.log(`Dynamic rating system initialized: ${ratingElements.length} ratings processed`);
}

/**
 * Generate star HTML based on rating
 * @param {number} rating - The rating value (e.g., 4.5, 3.2, 5)
 * @param {number} maxRating - Maximum rating (default: 5)
 * @returns {string} HTML string of stars
 */
generateStars(rating, maxRating = 5) {
    let starsHTML = '';
    
    for (let i = 1; i <= maxRating; i++) {
        let starClass = '';
        let fillStyle = '';
        
        if (rating >= i) {
            // Full star
            starClass = 'star-full';
            fillStyle = '#FFC107';
        } else if (rating > i - 1) {
            // Half star or partial star - use background fill for simplicity
            const percentage = (rating - (i - 1)) * 100;
            starClass = 'star-partial';
            fillStyle = '#FFC107';
            
            starsHTML += `
                <div class="star-partial-wrapper" style="position: relative; display: inline-block; width: 22px; height: 22px;">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="star ${starClass}" style="position: absolute; top: 0; left: 0;">
                        <path d="M10.5035 0.989827C10.6582 0.62151 11.1801 0.62151 11.3347 0.989827L13.701 6.62599C13.7663 6.78144 13.9128 6.88746 14.0809 6.90081L20.2153 7.38801C20.6161 7.41985 20.7778 7.92081 20.4713 8.18097L15.8037 12.1419C15.674 12.2519 15.6173 12.4256 15.6572 12.591L17.0843 18.5179C17.178 18.9072 16.7554 19.2163 16.4127 19.009L11.1524 15.826C11.009 15.7392 10.8292 15.7392 10.6858 15.826L5.42549 19.009C5.08287 19.2163 4.66022 18.9072 4.75397 18.5179L6.18107 12.591C6.22089 12.4256 6.16421 12.2519 6.0345 12.1419L1.36696 8.18096C1.0604 7.92081 1.22209 7.41985 1.62291 7.38801L7.75734 6.90081C7.92541 6.88746 8.07197 6.78144 8.13723 6.62599L10.5035 0.989827Z" fill="#E5E9ED"/>
                    </svg>
                    <div style="position: absolute; top: 0; left: 0; width: ${percentage}%; height: 100%; overflow: hidden;">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="star ${starClass}">
                            <path d="M10.5035 0.989827C10.6582 0.62151 11.1801 0.62151 11.3347 0.989827L13.701 6.62599C13.7663 6.78144 13.9128 6.88746 14.0809 6.90081L20.2153 7.38801C20.6161 7.41985 20.7778 7.92081 20.4713 8.18097L15.8037 12.1419C15.674 12.2519 15.6173 12.4256 15.6572 12.591L17.0843 18.5179C17.178 18.9072 16.7554 19.2163 16.4127 19.009L11.1524 15.826C11.009 15.7392 10.8292 15.7392 10.6858 15.826L5.42549 19.009C5.08287 19.2163 4.66022 18.9072 4.75397 18.5179L6.18107 12.591C6.22089 12.4256 6.16421 12.2519 6.0345 12.1419L1.36696 8.18096C1.0604 7.92081 1.22209 7.41985 1.62291 7.38801L7.75734 6.90081C7.92541 6.88746 8.07197 6.78144 8.13723 6.62599L10.5035 0.989827Z" fill="${fillStyle}"/>
                        </svg>
                    </div>
                </div>
            `;
            continue;
        } else {
            // Empty star
            starClass = 'star-empty';
            fillStyle = '#E5E9ED';
        }
        
        starsHTML += `
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="star ${starClass}">
                <path d="M10.5035 0.989827C10.6582 0.62151 11.1801 0.62151 11.3347 0.989827L13.701 6.62599C13.7663 6.78144 13.9128 6.88746 14.0809 6.90081L20.2153 7.38801C20.6161 7.41985 20.7778 7.92081 20.4713 8.18097L15.8037 12.1419C15.674 12.2519 15.6173 12.4256 15.6572 12.591L17.0843 18.5179C17.178 18.9072 16.7554 19.2163 16.4127 19.009L11.1524 15.826C11.009 15.7392 10.8292 15.7392 10.6858 15.826L5.42549 19.009C5.08287 19.2163 4.66022 18.9072 4.75397 18.5179L6.18107 12.591C6.22089 12.4256 6.16421 12.2519 6.0345 12.1419L1.36696 8.18096C1.0604 7.92081 1.22209 7.41985 1.62291 7.38801L7.75734 6.90081C7.92541 6.88746 8.07197 6.78144 8.13723 6.62599L10.5035 0.989827Z" fill="${fillStyle}"/>
            </svg>
        `;
    }
    
    return `<div class="review_ratting">${starsHTML}</div>`;
}

    /**
     * Initialize Navbar Hover Dropdowns
     * Makes Bootstrap dropdowns open on hover instead of click
     */
    initNavbarHoverDropdowns() {
        // Only apply on desktop (not mobile)
        const isMobile = window.innerWidth < 992;
        if (isMobile) {
            return; // Keep default click behavior on mobile
        }

        // Get all dropdown toggles in navbar
        const dropdownToggles = document.querySelectorAll('.navbar .dropdown-toggle');
        
        dropdownToggles.forEach(function(toggle) {
        const dropdown = toggle.closest('.dropdown');
        const dropdownMenu = dropdown ? dropdown.querySelector('.dropdown-menu') : null;
        
        if (!dropdown || !dropdownMenu) return;

        let hoverTimeout = null;
        let isHovered = false;

        // Show dropdown on hover
        function showDropdown() {
            isHovered = true;
            if (hoverTimeout) {
                clearTimeout(hoverTimeout);
                hoverTimeout = null;
            }
            
            // Use Bootstrap's show method
            if (typeof bootstrap !== 'undefined' && bootstrap.Dropdown) {
                const bsDropdown = bootstrap.Dropdown.getInstance(toggle) || new bootstrap.Dropdown(toggle);
                if (!dropdown.classList.contains('show')) {
                    bsDropdown.show();
                }
            } else {
                // Fallback if Bootstrap JS not loaded
                dropdown.classList.add('show');
                dropdownMenu.classList.add('show');
            }
        }

        // Hide dropdown after delay
        function hideDropdown() {
            isHovered = false;
            hoverTimeout = setTimeout(function() {
                if (!isHovered) {
                    if (typeof bootstrap !== 'undefined' && bootstrap.Dropdown) {
                        const bsDropdown = bootstrap.Dropdown.getInstance(toggle);
                        if (bsDropdown) {
                            bsDropdown.hide();
                        }
                    } else {
                        // Fallback
                        dropdown.classList.remove('show');
                        dropdownMenu.classList.remove('show');
                    }
                }
            }, 200); // 200ms delay before hiding
        }

        // Add hover events to toggle
        toggle.addEventListener('mouseenter', showDropdown);
        toggle.addEventListener('mouseleave', hideDropdown);

        // Add hover events to dropdown menu (to keep it open when hovering over menu)
        dropdownMenu.addEventListener('mouseenter', showDropdown);
        dropdownMenu.addEventListener('mouseleave', hideDropdown);

        // Prevent click from closing on desktop (optional - you can remove this if you want click to still work)
        // toggle.addEventListener('click', function(e) {
        //     e.preventDefault();
        // });
    });

    // Handle window resize - disable hover on mobile
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Reinitialize if needed
            const isMobileNow = window.innerWidth < 992;
            if (isMobileNow) {
                // Remove hover handlers on mobile
                dropdownToggles.forEach(function(toggle) {
                    // Bootstrap will handle click behavior on mobile
                });
            }
        }, 250);
    });
}

    /**
     * Initialize GSAP Marquee Animations
     * Supports vertical and horizontal marquees with responsive breakpoints
     * 
     * Data attributes:
     * - data-marquee: "vertical" | "horizontal" (required)
     * - data-marquee-speed: number (default: 20) - duration in seconds
     * - data-marquee-direction: "normal" | "reverse" (default: "normal")
     * - data-marquee-destroy-mobile: "true" | "false" (default: "false")
     * - data-marquee-destroy-desktop: "true" | "false" (default: "false")
     * - data-marquee-breakpoint: number (default: 992) - breakpoint for destroy options
     * - data-inview-start: string (optional) - ScrollTrigger start position (e.g., "top bottom", "center center")
     *   When present, marquee will be controlled by scroll (forward on scroll down, reverse on scroll up)
     */
    initMarquee() {
        if (typeof gsap === 'undefined') {
            console.warn('GSAP is not loaded. Marquee animations require GSAP.');
            return;
        }

        const marqueeElements = document.querySelectorAll('[data-marquee]');
        
        if (marqueeElements.length === 0) {
            return;
        }

        marqueeElements.forEach(function(container) {
        const direction = container.getAttribute('data-marquee') || 'horizontal';
        const speed = parseFloat(container.getAttribute('data-marquee-speed')) || 20;
        const marqueeDirection = container.getAttribute('data-marquee-direction') || 'normal';
        const destroyMobile = container.getAttribute('data-marquee-destroy-mobile') === 'true';
        const destroyDesktop = container.getAttribute('data-marquee-destroy-desktop') === 'true';
        const breakpoint = parseInt(container.getAttribute('data-marquee-breakpoint')) || 992;
        const inviewStart = container.getAttribute('data-inview-start'); // Optional ScrollTrigger control

        // Check if should destroy on current device
        const isMobile = window.innerWidth < breakpoint;
        if ((destroyMobile && isMobile) || (destroyDesktop && !isMobile)) {
            return; // Skip initialization
        }

        // Find track element (should have class 'marquee-track' or be direct child)
        let track = container.querySelector('.marquee-track') || container.querySelector('[data-marquee-track]');
        
        if (!track) {
            // If no track found, use the container itself
            track = container;
        }

        // Duplicate content for seamless loop
        const content = track.innerHTML;
        track.innerHTML = content + content;

        // Get all items to animate
        const items = track.children;
        if (items.length === 0) {
            return;
        }

        // Calculate total width/height for seamless loop
        let totalSize = 0;
        const isVertical = direction === 'vertical';

        // Measure total size
        Array.from(items).forEach(item => {
            if (isVertical) {
                totalSize += item.offsetHeight;
            } else {
                totalSize += item.offsetWidth;
            }
        });

        // Since we duplicated, we only need half the size
        totalSize = totalSize / 2;

        // Set up animation properties
        const fromProps = {};
        const toProps = {};

        if (isVertical) {
            fromProps.y = marqueeDirection === 'reverse' ? -totalSize : 0;
            toProps.y = marqueeDirection === 'reverse' ? 0 : -totalSize;
        } else {
            fromProps.x = marqueeDirection === 'reverse' ? -totalSize : 0;
            toProps.x = marqueeDirection === 'reverse' ? 0 : -totalSize;
        }

        // Check if ScrollTrigger control is enabled
        if (inviewStart && typeof ScrollTrigger !== 'undefined') {
            // Set initial position
            gsap.set(track, fromProps);

            // Create continuous animation that plays forward by default
            const animation = gsap.fromTo(track, fromProps, {
                ...toProps,
                duration: speed,
                ease: 'none',
                repeat: -1
            });

            // Start animation immediately
            animation.play();

            // Track scroll direction and control animation
            let lastScrollY = window.scrollY || window.pageYOffset;
            let scrollDirection = 'down'; // Default to forward
            let scrollTimeout;

            // Create ScrollTrigger to detect when element is in view
            const scrollTrigger = ScrollTrigger.create({
                trigger: container,
                start: inviewStart || 'top bottom',
                end: 'bottom top',
                onEnter: () => {
                    // Start animation when entering viewport (forward by default)
                    animation.play();
                    animation.timeScale(1);
                    scrollDirection = 'down';
                },
                onLeave: () => {
                    // Keep playing when leaving viewport (continue in last direction)
                    // Animation continues, don't pause
                },
                onEnterBack: () => {
                    // Resume when re-entering from bottom (continue in last direction)
                    animation.play();
                },
                onLeaveBack: () => {
                    // Keep playing when leaving from top (continue in last direction)
                    // Animation continues, don't pause
                }
            });

            // Track scroll direction and adjust animation
            // Animation should always be playing, we just change direction
            const handleScroll = () => {
                const currentScrollY = window.scrollY || window.pageYOffset;
                
                // Only process if scroll position actually changed
                if (currentScrollY !== lastScrollY) {
                    const newDirection = currentScrollY > lastScrollY ? 'down' : 'up';
                    
                    // Update direction if it changed (always update, not just when in view)
                    if (newDirection !== scrollDirection) {
                        scrollDirection = newDirection;
                        
                        // Ensure animation is playing
                        if (animation.paused()) {
                            animation.play();
                        }
                        
                        if (scrollDirection === 'down') {
                            // Scroll down = play forward
                            animation.timeScale(1);
                        } else {
                            // Scroll up = play reverse
                            animation.timeScale(-1);
                        }
                    }
                    
                    lastScrollY = currentScrollY;
                }
                
                // When scroll stops, animation continues in last direction
                // No action needed - animation keeps playing with current timeScale
            };

            // Listen to scroll events
            window.addEventListener('scroll', handleScroll, { passive: true });

            // Store references for cleanup
            container.marqueeAnimation = animation;
            container.marqueeScrollTrigger = scrollTrigger;
            container.marqueeScrollHandler = handleScroll;
        } else {
            // Create normal continuous GSAP animation
            const animation = gsap.fromTo(track, fromProps, {
                ...toProps,
                duration: speed,
                ease: 'none',
                repeat: -1
            });

            // Store animation instance for cleanup
            container.marqueeAnimation = animation;
        }

        // Handle window resize
        let resizeTimer;
        const handleResize = () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                const isMobileNow = window.innerWidth < breakpoint;
                
                // Destroy if conditions changed
                if ((destroyMobile && isMobileNow) || (destroyDesktop && !isMobileNow)) {
                    if (container.marqueeAnimation) {
                        container.marqueeAnimation.kill();
                        container.marqueeAnimation = null;
                    }
                    if (container.marqueeScrollTrigger) {
                        container.marqueeScrollTrigger.kill();
                        container.marqueeScrollTrigger = null;
                    }
                } else if (!container.marqueeAnimation && !container.marqueeScrollTrigger) {
                    // Reinitialize if conditions allow
                    initMarquee();
                }
            }, 250);
        };

        window.addEventListener('resize', handleResize);
        container.marqueeResizeHandler = handleResize;
    });

    }

    // Initialize testimonial collapse functionality
    initTestimonialCollapse() {
        const testimonialContents = document.querySelectorAll('[data-testimonial-content]');
        
        testimonialContents.forEach(content => {
            const textElement = content.querySelector('.testimonial-text');
            const readMoreBtn = content.querySelector('[data-read-more]');
            
            if (!textElement || !readMoreBtn) return;
            
            // Check if content needs truncation
            const checkContentHeight = () => {
                const lineHeight = parseFloat(getComputedStyle(textElement).lineHeight);
                const maxHeight = lineHeight * 5; // 5 lines
                
                if (textElement.scrollHeight > maxHeight) {
                    readMoreBtn.style.display = 'inline';
                    textElement.style.display = '-webkit-box';
                    textElement.style.webkitLineClamp = '5';
                    textElement.style.webkitBoxOrient = 'vertical';
                    textElement.style.overflow = 'hidden';
                    textElement.classList.remove('expanded');
                    readMoreBtn.classList.remove('expanded');
                } else {
                    readMoreBtn.style.display = 'none';
                }
            };
            
            // Initial check
            checkContentHeight();
            
            // Handle read more/less click
            readMoreBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                
                const isExpanded = textElement.classList.contains('expanded');
                
                if (isExpanded) {
                    // Collapse with GSAP animation
                    gsap.to(textElement, {
                        height: textElement.scrollHeight,
                        duration: 0.3,
                        ease: "power2.inOut",
                        onComplete: () => {
                            textElement.classList.remove('expanded');
                            readMoreBtn.classList.remove('expanded');
                            textElement.style.display = '-webkit-box';
                            textElement.style.webkitLineClamp = '5';
                            textElement.style.webkitBoxOrient = 'vertical';
                            textElement.style.overflow = 'hidden';
                            textElement.style.height = 'auto';
                        }
                    });
                } else {
                    // Expand with GSAP animation
                    const currentHeight = textElement.offsetHeight;
                    textElement.classList.add('expanded');
                    textElement.style.display = 'block';
                    textElement.style.webkitLineClamp = 'unset';
                    textElement.style.webkitBoxOrient = 'unset';
                    textElement.style.overflow = 'auto';
                    
                    gsap.fromTo(textElement, 
                        {
                            height: currentHeight,
                            opacity: 0.8
                        },
                        {
                            height: Math.min(textElement.scrollHeight, 140), // Max 140px as updated in CSS
                            opacity: 1,
                            duration: 0.4,
                            ease: "power2.inOut",
                            onComplete: () => {
                                textElement.style.height = 'auto';
                                // Smooth scroll quality improvement
                                if (typeof ScrollSmoother !== 'undefined' && window.smoother) {
                                    window.smoother.refresh();
                                }
                            }
                        }
                    );
                    
                    readMoreBtn.classList.add('expanded');
                }
            });
            
            // Re-check on window resize
            let resizeTimer;
            window.addEventListener('resize', () => {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(checkContentHeight, 250);
            });
        });
    }

    /**
     * Initialize Equal Height System
     * Equalizes heights of elements within containers
     */
    initEqualHeight() {
        var containers = document.querySelectorAll('[data-equalize="min-height"]');
        Array.prototype.forEach.call(containers, this.equalizeContainer.bind(this));
        
        // Re-equalize on window resize
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                Array.prototype.forEach.call(containers, this.equalizeContainer.bind(this));
            }, 250);
        });
    }

    /**
     * @param {Element} container
     */
    equalizeContainer(container) {
        var mode = container.getAttribute('data-equalize');
        if (mode !== 'min-height') return;

        var selector = container.getAttribute('data-equalize-target') || '[data-equalize-item]';
        var cssVar = container.getAttribute('data-equalize-var') || '--equal-heading-min-height';
        /** @type {HTMLElement[]} */
        var nodes = Array.prototype.slice.call(container.querySelectorAll(selector));
        if (!nodes.length) return;

        /** @type {HTMLElement} */
        var containerEl = /** @type {HTMLElement} */ (container);

        // Reset CSS variable before measuring
        containerEl.style.setProperty(cssVar, 'auto');

        // Measure tallest
        var max = 0;
        nodes.forEach(function (/** @type {HTMLElement} */ node) {
            var h = node.getBoundingClientRect().height;
            if (h > max) max = h;
        });

        // Apply via CSS variable
        if (max > 0) {
            var px = String(Math.ceil(max)) + 'px';
            containerEl.style.setProperty(cssVar, px);
            container.setAttribute('data-equalize-applied', px);
        } else {
            containerEl.style.setProperty(cssVar, 'auto');
            container.removeAttribute('data-equalize-applied');
        }
    }

    /**
     * Initialize Draggable Filters
     * Makes filter container horizontally draggable on mobile (smooth transform version)
     */
    initDraggableFilters() {
        const filterContainer = document.getElementById('filter-container');
        if (!filterContainer) {
            console.log('Filter container not found');
            return;
        }

        // Only enable on mobile devices
        if (!this.isMobile) {
            console.log('Not mobile, skipping draggable');
            return; // Skip on desktop - RESTORED
        } else {
            console.log('Mobile detected, enabling drag');
        }

        console.log('Initializing mobile drag functionality');

        let isDragging = false;
        let startX = 0;
        let currentTranslateX = 0;
        let initialTranslateX = 0;
        let hasMoved = false;
        let touchStartTime = 0;

        // Touch events for mobile
        filterContainer.addEventListener('touchstart', (e) => {
            console.log('Touch start detected');
            hasMoved = false;
            touchStartTime = Date.now();
            
            // Don't start drag immediately - wait for movement
            startX = e.touches[0].pageX;
            initialTranslateX = currentTranslateX;
            
            // Don't prevent default here - allow normal click behavior
        }, { passive: false });

        filterContainer.addEventListener('touchmove', (e) => {
            const currentX = e.touches[0].pageX;
            const deltaX = Math.abs(currentX - startX);
            const deltaTime = Date.now() - touchStartTime;
            
            // Only start drag if moved significantly (more than 5px) or moving fast
            if (!isDragging && (deltaX > 5 || (deltaX > 2 && deltaTime < 200))) {
                console.log('Drag threshold reached, starting drag');
                isDragging = true;
                hasMoved = true;
                filterContainer.style.transition = 'none';
                e.preventDefault(); // Only prevent default when actually dragging
            }
            
            if (!isDragging) return;
            
            let newTranslateX = initialTranslateX + (currentX - startX);
            
            // Calculate boundaries (15px padding on both sides)
            const containerWidth = filterContainer.parentElement.offsetWidth;
            const contentWidth = filterContainer.scrollWidth;
            const maxTranslateX = 0; // Can't go more than 0px to the right (left edge)
            const minTranslateX = -(contentWidth - containerWidth + 15); // Can't go more than 15px past left edge
            
            // Apply boundaries
            newTranslateX = Math.max(minTranslateX, Math.min(maxTranslateX, newTranslateX));
            currentTranslateX = newTranslateX;
            
            // Apply transform
            filterContainer.style.transform = `translateX(${currentTranslateX}px)`;
            console.log('Moving to:', currentTranslateX, 'bounds:', minTranslateX, 'to', maxTranslateX);
            e.preventDefault();
        }, { passive: false });

        filterContainer.addEventListener('touchend', (e) => {
            console.log('Touch end, hasMoved:', hasMoved);
            
            if (!hasMoved) {
                // This was a click, let the normal click handler work
                console.log('This was a click, allowing normal behavior');
                // Don't prevent default - let dropdowns open
            } else {
                // This was a drag
                console.log('This was a drag');
                e.preventDefault(); // Prevent click after drag
            }
            
            isDragging = false;
            filterContainer.style.transition = 'transform 0.3s ease-out';
        });

        // Mouse events for desktop testing
        filterContainer.addEventListener('mousedown', (e) => {
            console.log('Mouse down detected');
            // Allow drag everywhere - no skipping
            
            isDragging = true;
            startX = e.pageX;
            initialTranslateX = currentTranslateX;
            filterContainer.style.transition = 'none';
            filterContainer.style.cursor = 'grabbing';
            console.log('Mouse drag started at:', startX, 'currentTranslateX:', currentTranslateX);
            e.preventDefault();
        });

        filterContainer.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            
            const currentX = e.pageX;
            const deltaX = currentX - startX;
            let newTranslateX = initialTranslateX + deltaX;
            
            // Calculate boundaries (15px padding on both sides)
            const containerWidth = filterContainer.parentElement.offsetWidth;
            const contentWidth = filterContainer.scrollWidth;
            const maxTranslateX = 0; // Can't go more than 0px to the right (left edge)
            const minTranslateX = -(contentWidth - containerWidth + 15); // Can't go more than 15px past left edge
            
            // Apply boundaries
            newTranslateX = Math.max(minTranslateX, Math.min(maxTranslateX, newTranslateX));
            currentTranslateX = newTranslateX;
            
            // Apply transform
            filterContainer.style.transform = `translateX(${currentTranslateX}px)`;
            e.preventDefault();
        });

        filterContainer.addEventListener('mouseup', () => {
            console.log('Mouse up');
            isDragging = false;
            filterContainer.style.cursor = 'grab';
            filterContainer.style.transition = 'transform 0.3s ease-out';
        });

        filterContainer.addEventListener('mouseleave', () => {
            console.log('Mouse leave');
            isDragging = false;
            filterContainer.style.cursor = 'grab';
            filterContainer.style.transition = 'transform 0.3s ease-out';
        });

        // Set initial styles - NO overflow manipulation
        filterContainer.style.position = 'relative';
        filterContainer.style.cursor = 'grab';
        filterContainer.style.userSelect = 'none'; // Prevent text selection during drag

        console.log('Mobile drag initialized successfully');
    }

    // Initialize dashboard sidebar toggle functionality
    initDashboardSidebar() {
        const toggler = document.querySelector('.oy-dashboard__toggler');
        const sidebar = document.querySelector('.oy-dashboard__sidebar');
        const grid = document.querySelector('.oy-dashboard__grid');
        
        if (!toggler || !sidebar || !grid) return;

        let isOpen = false;

        // Function to open sidebar
        const openSidebar = () => {
            if (isOpen) return;
            isOpen = true;
            
            // Add active class for styling
            sidebar.classList.add('sidebar-open');
            document.body.classList.add('dashboard-sidebar-open');
            
            // Animate with GSAP if available, otherwise use CSS transitions
            if (typeof gsap !== 'undefined') {
                // Set initial state
                gsap.set(sidebar, { x: "-100%", opacity: 0, force3D: true });
                
                gsap.to(sidebar, {
                    x: "0%",
                    opacity: 1,
                    duration: 0.4,
                    ease: "power3.out",
                    force3D: true,
                    clearProps: "transform"
                });
                
                // Add overlay
                const overlay = document.createElement('div');
                overlay.className = 'dashboard-sidebar-overlay';
                overlay.style.cssText = `
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.5);
                    z-index: 999;
                    opacity: 0;
                    backdrop-filter: blur(4px);
                `;
                document.body.appendChild(overlay);
                
                gsap.to(overlay, {
                    opacity: 1,
                    duration: 0.3,
                    ease: "power2.out"
                });
                
                // Close sidebar when clicking overlay
                overlay.addEventListener('click', closeSidebar);
            } else {
                // Fallback to CSS transitions
                sidebar.style.transform = 'translateX(0)';
                sidebar.style.opacity = '1';
            }
        };

        // Function to close sidebar
        const closeSidebar = () => {
            if (!isOpen) return;
            isOpen = false;
            
            // Remove active class
            sidebar.classList.remove('sidebar-open');
            document.body.classList.remove('dashboard-sidebar-open');
            
            // Animate with GSAP if available
            if (typeof gsap !== 'undefined') {
                gsap.to(sidebar, {
                    x: "-100%",
                    opacity: 0,
                    duration: 0.35,
                    ease: "power3.in",
                    force3D: true,
                    onComplete: () => {
                        sidebar.style.transform = '';
                        sidebar.style.opacity = '';
                    }
                });
                
                // Remove overlay
                const overlay = document.querySelector('.dashboard-sidebar-overlay');
                if (overlay) {
                    gsap.to(overlay, {
                        opacity: 0,
                        duration: 0.3,
                        ease: "power2.in",
                        onComplete: () => {
                            overlay.remove();
                        }
                    });
                }
            } else {
                // Fallback to CSS transitions
                sidebar.style.transform = 'translateX(-100%)';
                sidebar.style.opacity = '0';
            }
        };

        // Toggle sidebar on click
        toggler.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            
            if (isOpen) {
                closeSidebar();
            } else {
                openSidebar();
            }
        });

        // Handle window resize
        const handleResize = () => {
            const isMobile = window.innerWidth < 768; // Bootstrap md breakpoint
            if (!isMobile && isOpen) {
                closeSidebar();
            }
        };

        window.addEventListener('resize', handleResize);
        
        // Initial check
        handleResize();
    }

    // Timeline sticky animation with GSAP ScrollTrigger
    initTimelineAnimation() {
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
            return;
        }

        const timelineItems = Array.from(document.querySelectorAll('.oy-timeline__item'));
        if (!timelineItems.length) return;

        const getNumberEl = (item) => item.querySelector('.oy-timeline__number');

        const clearState = () => {
            timelineItems.forEach((el) => {
                el.classList.remove('active');
                el.classList.remove('is-complete');
                el.style.removeProperty('--oy-timeline-top');
                const numberEl = getNumberEl(el);
                if (numberEl) {
                    numberEl.style.removeProperty('--oy-bar2-height');
                    numberEl.style.setProperty('--oy-line-progress', '0%');
                }
            });
        };

        const applyState = (activeIndex, activeProgressPercent = 0) => {
            timelineItems.forEach((el, idx) => {
                const numberEl = getNumberEl(el);

                if (idx < activeIndex) {
                    el.classList.add('is-complete');
                    el.classList.remove('active');
                    if (numberEl) numberEl.style.setProperty('--oy-line-progress', '100%');
                } else if (idx === activeIndex) {
                    el.classList.add('active');
                    el.classList.remove('is-complete');
                    if (numberEl) numberEl.style.setProperty('--oy-line-progress', `${activeProgressPercent}%`);
                } else {
                    el.classList.remove('active');
                    el.classList.remove('is-complete');
                    if (numberEl) numberEl.style.setProperty('--oy-line-progress', '0%');
                }
            });
        };

        const setConnectorHeights = () => {
            // Compute distance from bottom of current circle to top of next circle.
            // This solves “position not same” when cards have different heights.
            for (let i = 0; i < timelineItems.length - 1; i++) {
                const currentNumber = getNumberEl(timelineItems[i]);
                const nextNumber = getNumberEl(timelineItems[i + 1]);
                if (!currentNumber || !nextNumber) continue;

                const curRect = currentNumber.getBoundingClientRect();
                const nextRect = nextNumber.getBoundingClientRect();
                const distance = Math.max(0, (nextRect.top + window.scrollY) - (curRect.bottom + window.scrollY));
                currentNumber.style.setProperty('--oy-bar2-height', `${distance}px`);
            }
        };

        const mm = gsap.matchMedia();

        mm.add(
            {
                isDesktop: '(min-width: 992px)',
                isMobile: '(max-width: 991.98px)'
            },
            (context) => {
                const { isDesktop } = context.conditions;

                clearState();
                applyState(0, 0);

                // Compute once on init and on refresh
                setConnectorHeights();
                ScrollTrigger.addEventListener('refreshInit', setConnectorHeights);

                const cleanupRefreshListener = () => {
                    ScrollTrigger.removeEventListener('refreshInit', setConnectorHeights);
                };

                // Desktop: sticky stack + smooth step activation
                if (isDesktop) {
                    const baseTop = 110;

                    timelineItems.forEach((item, index) => {
                        item.style.setProperty('--oy-timeline-top', `${baseTop}px`);
                    });

                    timelineItems.forEach((item, index) => {
                        ScrollTrigger.create({
                            trigger: item,
                            start: 'top center',
                            end: 'bottom center',
                            scrub: true,
                            onUpdate: (self) => {
                                const progress = Math.round(self.progress * 100);
                                applyState(index, progress);
                            },
                            invalidateOnRefresh: true
                        });
                    });

                    return cleanupRefreshListener;
                }

                // Mobile: no sticky; just update active state as you scroll
                timelineItems.forEach((item, index) => {
                    ScrollTrigger.create({
                        trigger: item,
                        start: 'top 65%',
                        end: 'bottom 35%',
                        scrub: true,
                        onUpdate: (self) => {
                            const progress = Math.round(self.progress * 100);
                            applyState(index, progress);
                        },
                        invalidateOnRefresh: true
                    });
                });

                return cleanupRefreshListener;
            }
        );
    }
}

// Wait for DOM to be ready (works with defer attribute)
(function() {
    // Use DOMContentLoaded for immediate execution, or wait if scripts are deferred
    const init = function() {
        // Create and start MainApp instance (all initialization happens inside MainApp.init())
        const app = new MainApp();
        app.start();
    };

    // If DOM is already loaded (scripts with defer), run immediately
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        // DOM already loaded, run immediately
        init();
    }
})();