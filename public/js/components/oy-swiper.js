// Prevent multiple script loads and allow multiple instances
(function() {
    // Check if OySwiper is already defined
    if (window.OySwiperLoaded) {
        return;
    }
    
    // Mark as loaded
    window.OySwiperLoaded = true;

class OySwiper extends HTMLElement {
    constructor() {
        super();
        this.swiper = null;
        this.thumbsSwiper = null;
    }

    connectedCallback() {
        console.log('OySwiper connected');
        
        // Add initial loading state
        this.classList.add('swiper-loading');
        
        // Initialize immediately if DOM is ready, otherwise wait
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.init());
        } else {
            // DOM is already ready, initialize with minimal delay
            requestAnimationFrame(() => this.init());
        }
    }

    init() {
        console.log('OySwiper initializing');
        
        // Check if Swiper is available
        if (typeof Swiper === 'undefined') {
            console.error('OySwiper: Swiper library is not loaded');
            // Retry after a short delay
            setTimeout(() => this.init(), 100);
            return;
        }

        // Check if jQuery is available
        if (typeof jQuery === 'undefined') {
            console.error('OySwiper: jQuery is not loaded');
            // Retry after a short delay
            setTimeout(() => this.init(), 100);
            return;
        }

        // Wait a bit more to ensure Swiper modules are loaded
        // Modules might not be immediately available, so we'll handle it gracefully
        if (typeof window.SwiperModules === 'undefined') {
            console.warn('OySwiper: Swiper modules not found, will try to initialize anyway...');
            // Continue anyway - Swiper might work without explicit modules in some cases
        }

        // Initialize the slider using the provided logic
        this.initRegularSlider();
    }

    initRegularSlider() {
        console.log('OySwiper: initRegularSlider called');
        
        const SwiperCarousel = jQuery(this);
        console.log('OySwiper: jQuery wrapper created', SwiperCarousel.length);
        
        // Ensure the element has swiper class for proper styling
        if (!this.classList.contains('swiper')) {
            this.classList.add('swiper');
        }
        
        // Get Swiper modules
        const SwiperModules = window.SwiperModules || {};
        const { Navigation, Pagination, Scrollbar, Autoplay, EffectFade } = SwiperModules;
        
        // Prepare modules array
        const modules = [];
        if (Navigation) modules.push(Navigation);
        if (Pagination) modules.push(Pagination);
        if (Scrollbar) modules.push(Scrollbar);
        if (Autoplay) modules.push(Autoplay);
        if (EffectFade) modules.push(EffectFade);
        
        console.log('OySwiper: Available modules:', { Navigation: !!Navigation, Pagination: !!Pagination, Scrollbar: !!Scrollbar, Autoplay: !!Autoplay });
        
        // Get data attributes
        const itemsPerView = parseInt(SwiperCarousel.data('items')) || 1;
        const loopEnabled = SwiperCarousel.data('loop') === true || SwiperCarousel.data('loop') === 'true';
        const autoplayEnabled = SwiperCarousel.data('autoplay') === true || SwiperCarousel.data('autoplay') === 'true';
        const autoplayDelay = parseInt(SwiperCarousel.data('autoplay-delay')) || 3000;
        const nextEl = SwiperCarousel.data('next');
        const prevEl = SwiperCarousel.data('prev');
        const paginationEl = SwiperCarousel.data('pagination');
        const scrollbarEl = SwiperCarousel.data('scrollbar');
        const thumbsSelector = SwiperCarousel.data('thumbs');
        const thumbControlSelector = SwiperCarousel.data('thumb-control');
        const effectValue = SwiperCarousel.data('effect');
        const centeredSlidesEnabled = SwiperCarousel.data('center-mode') === true || SwiperCarousel.data('center-mode') === 'true';
        
        // Build breakpoints configuration
        const breakpoints = {};
        
        // Only add breakpoints if they have values
        const smItems = SwiperCarousel.data('sm-items');
        const mdItems = SwiperCarousel.data('md-items');
        const lgItems = SwiperCarousel.data('lg-items');
        const xlItems = SwiperCarousel.data('xl-items');
        
        if (smItems) {
            breakpoints[480] = {
                slidesPerView: parseInt(smItems) || 1,
                spaceBetween: parseInt(SwiperCarousel.data('sm-space')) || 30
            };
        }
        if (mdItems) {
            breakpoints[640] = {
                slidesPerView: parseInt(mdItems) || 1,
                spaceBetween: parseInt(SwiperCarousel.data('md-space')) || 30
            };
        }
        if (lgItems) {
            breakpoints[991] = {
                slidesPerView: parseInt(lgItems) || 1,
                spaceBetween: parseInt(SwiperCarousel.data('lg-space')) || 30
            };
        }
        if (xlItems) {
            breakpoints[1199] = {
                slidesPerView: parseInt(xlItems) || 1,
                spaceBetween: parseInt(SwiperCarousel.data('xl-space')) || 30
            };
        }

        // Build swiper configuration
        const swiperConfig = {
            slidesPerView: itemsPerView,
            loop: loopEnabled,
            speed: parseInt(SwiperCarousel.data('speed')) || 600,
            spaceBetween: parseInt(SwiperCarousel.data('space')) || 30,
            grabCursor: true,
            allowTouchMove: true,
            touchEventsTarget: 'container',
            watchSlidesProgress: true,
            watchSlidesVisibility: true,
            resistance: true,
            resistanceRatio: 0.85,
            centeredSlides: centeredSlidesEnabled
        };

        // Optional effect support
        if (effectValue && typeof effectValue === 'string') {
            swiperConfig.effect = effectValue;
            if (effectValue === 'fade') {
                swiperConfig.fadeEffect = { crossFade: true };
            }
        }

        // Add modules if available
        if (modules.length > 0) {
            swiperConfig.modules = modules;
        }

        // Add lazy loading if enabled
        if (SwiperCarousel.data('lazy') === true || SwiperCarousel.data('lazy') === 'true') {
            swiperConfig.lazy = {
                loadPrevNext: true,
                loadPrevNextAmount: 1
            };
        }

        // Add navigation only if selectors are provided
        if ((nextEl || prevEl) && Navigation) {
            swiperConfig.navigation = {};
            if (nextEl) {
                const nextElement = document.querySelector(nextEl);
                if (nextElement) swiperConfig.navigation.nextEl = nextElement;
            }
            if (prevEl) {
                const prevElement = document.querySelector(prevEl);
                if (prevElement) swiperConfig.navigation.prevEl = prevElement;
            }
        }

        // Add pagination only if selector is provided
        if (paginationEl && Pagination) {
            const paginationElement = document.querySelector(paginationEl);
            if (paginationElement) {
                swiperConfig.pagination = {
                    el: paginationElement,
                    clickable: true
                };
            }
        }

        // Add scrollbar only if selector is provided
        if (scrollbarEl && Scrollbar) {
            const scrollbarElement = document.querySelector(scrollbarEl);
            if (scrollbarElement) {
                swiperConfig.scrollbar = {
                    el: scrollbarElement,
                    hide: false,
                    draggable: true
                };
            }
        }

        // Add autoplay if enabled
        if (autoplayEnabled && Autoplay) {
            swiperConfig.autoplay = {
                delay: autoplayDelay,
                disableOnInteraction: false,
                pauseOnMouseEnter: false,
                stopOnLastSlide: false
            };
        }

        // Add breakpoints if any are defined
        if (Object.keys(breakpoints).length > 0) {
            swiperConfig.breakpoints = breakpoints;
        }
        
        console.log('OySwiper: Swiper config:', swiperConfig);

        // Initialize Swiper
        try {
            var swiper = new Swiper(this, swiperConfig);

            // Store swiper instance
            this.swiper = swiper;
            console.log('OySwiper: Swiper initialized successfully', swiper);
            
            // Mark as initialized and remove loading state
            this.classList.remove('swiper-loading');
            this.classList.add('swiper-initialized');

            // Link main <-> thumbs (custom lightweight linking)
            this.initThumbLinking({ swiper, thumbsSelector, thumbControlSelector });
            
            // Ensure autoplay starts if enabled
            if (autoplayEnabled && swiper.autoplay) {
                requestAnimationFrame(() => {
                    try {
                        if (swiper.autoplay && typeof swiper.autoplay.start === 'function') {
                            swiper.autoplay.start();
                            console.log('OySwiper: Autoplay started');
                        } else {
                            console.warn('OySwiper: Autoplay module not available');
                        }
                    } catch (e) {
                        console.error('OySwiper: Error starting autoplay:', e);
                    }
                });
            }
        } catch (error) {
            console.error('OySwiper: Error initializing Swiper:', error);
            // Remove loading state even on error
            this.classList.remove('swiper-loading');
        }
    }

    initThumbLinking({ swiper, thumbsSelector, thumbControlSelector }) {
        const getIndex = (s) => {
            if (!s) return 0;
            if (typeof s.realIndex === 'number') return s.realIndex;
            if (typeof s.activeIndex === 'number') return s.activeIndex;
            return 0;
        };

        const setThumbActive = (thumbSwiper, index) => {
            if (!thumbSwiper || !thumbSwiper.slides) return;
            thumbSwiper.slides.forEach((slideEl) => {
                if (slideEl && slideEl.classList) slideEl.classList.remove('is-active');
            });
            const slideEl = thumbSwiper.slides[index];
            if (slideEl && slideEl.classList) slideEl.classList.add('is-active');
        };

        // MAIN slider: data-thumbs="#thumbs"
        if (thumbsSelector && typeof thumbsSelector === 'string') {
            const thumbsEl = document.querySelector(thumbsSelector);
            if (thumbsEl) {
                const tryBind = () => {
                    const thumbsSwiper = thumbsEl.swiper;
                    if (!thumbsSwiper) return false;

                    // init active state
                    const idx = getIndex(swiper);
                    setThumbActive(thumbsSwiper, idx);

                    // main -> thumbs active
                    swiper.on('slideChange', () => {
                        const nextIndex = getIndex(swiper);
                        setThumbActive(thumbsSwiper, nextIndex);
                        if (typeof thumbsSwiper.slideTo === 'function') {
                            thumbsSwiper.slideTo(nextIndex);
                        }
                    });

                    // thumbs -> main click
                    thumbsSwiper.on('click', () => {
                        const clicked = typeof thumbsSwiper.clickedIndex === 'number' ? thumbsSwiper.clickedIndex : null;
                        if (clicked === null) return;
                        if (swiper && typeof swiper.slideToLoop === 'function' && swiper.params && swiper.params.loop) {
                            swiper.slideToLoop(clicked);
                        } else if (swiper && typeof swiper.slideTo === 'function') {
                            swiper.slideTo(clicked);
                        }
                    });

                    return true;
                };

                if (!tryBind()) {
                    const interval = setInterval(() => {
                        if (tryBind()) clearInterval(interval);
                    }, 50);
                    setTimeout(() => clearInterval(interval), 3000);
                }
            }
        }

        // THUMBS slider: data-thumb-control="#main"
        if (thumbControlSelector && typeof thumbControlSelector === 'string') {
            const mainEl = document.querySelector(thumbControlSelector);
            if (mainEl) {
                const tryBind = () => {
                    const mainSwiper = mainEl.swiper;
                    if (!mainSwiper) return false;

                    // init active state
                    const idx = getIndex(mainSwiper);
                    setThumbActive(swiper, idx);

                    // main -> thumbs active
                    mainSwiper.on('slideChange', () => {
                        const nextIndex = getIndex(mainSwiper);
                        setThumbActive(swiper, nextIndex);
                        if (typeof swiper.slideTo === 'function') {
                            swiper.slideTo(nextIndex);
                        }
                    });

                    // thumbs -> main click
                    swiper.on('click', () => {
                        const clicked = typeof swiper.clickedIndex === 'number' ? swiper.clickedIndex : null;
                        if (clicked === null) return;
                        if (mainSwiper && typeof mainSwiper.slideToLoop === 'function' && mainSwiper.params && mainSwiper.params.loop) {
                            mainSwiper.slideToLoop(clicked);
                        } else if (mainSwiper && typeof mainSwiper.slideTo === 'function') {
                            mainSwiper.slideTo(clicked);
                        }
                    });

                    return true;
                };

                if (!tryBind()) {
                    const interval = setInterval(() => {
                        if (tryBind()) clearInterval(interval);
                    }, 50);
                    setTimeout(() => clearInterval(interval), 3000);
                }
            }
        }
    }

    // Public methods
    slideTo(index, speed) {
        if (this.swiper) {
            this.swiper.slideTo(index, speed);
        }
    }

    slideNext(speed) {
        if (this.swiper) {
            this.swiper.slideNext(speed);
        }
    }

    slidePrev(speed) {
        if (this.swiper) {
            this.swiper.slidePrev(speed);
        }
    }

    startAutoplay() {
        if (this.swiper) {
            this.swiper.autoplay.start();
        }
    }

    stopAutoplay() {
        if (this.swiper) {
            this.swiper.autoplay.stop();
        }
    }

    update() {
        if (this.swiper) {
            this.swiper.update();
        }
    }

    destroy() {
        if (this.swiper) {
            this.swiper.destroy();
            this.swiper = null;
        }
    }

    disconnectedCallback() {
        console.log('OySwiper disconnected');
        this.destroy();
    }
}

// Register the custom element
customElements.define('oy-swiper', OySwiper);

})(); // End of IIFE
