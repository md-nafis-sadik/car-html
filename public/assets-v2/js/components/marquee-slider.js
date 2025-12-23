// Prevent multiple script loads and allow multiple instances
(function() {
    // Check if OySwiper is already defined
    if (window.OyMarqueeSliderLoaded) {
        return;
    }
    
    // Mark as loaded
    window.OyMarqueeSliderLoaded = true;

class MarqueeSlider extends HTMLElement {
    constructor() {
        super();
        this.timeline = null;
        this.isPaused = false;
    }

    connectedCallback() {
        console.log('MarqueeSlider connected');
        
        // Get configuration
        this.direction = this.getAttribute('data-direction') || 'left';
        this.speed = parseFloat(this.getAttribute('data-marquee-speed')) || 10;
        this.gap = parseFloat(this.getAttribute('data-marquee-gap')) || 20;
        
        console.log(`MarqueeSlider config: direction=${this.direction}, speed=${this.speed}, gap=${this.gap}`);
        
        // Wait for DOM to be ready before initializing
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.initMarquee());
        } else {
            // DOM is already ready
            setTimeout(() => this.initMarquee(), 0);
        }
    }

    initMarquee() {
        const track = this.querySelector('.marquee-track');
        if (!track) {
            console.error('MarqueeSlider: .marquee-track not found');
            return;
        }
        
        // Get all testimonial items
        const items = Array.from(track.querySelectorAll('.marquee-item'));
        if (items.length === 0) {
            console.error('MarqueeSlider: No .marquee-item found');
            return;
        }
        
        console.log(`MarqueeSlider: Found ${items.length} items`);
        
        // Calculate total width of all items
        const totalWidth = items.reduce((width, item) => {
            return width + item.offsetWidth + this.gap;
        }, 0);
        
        // Calculate how many duplicates we need to fill the viewport
        const viewportWidth = window.innerWidth;
        const duplicatesNeeded = Math.ceil(viewportWidth / totalWidth) + 1;
        
        console.log(`MarqueeSlider: totalWidth=${totalWidth}px, duplicatesNeeded=${duplicatesNeeded}`);
        
        // Duplicate items to fill the space
        for (let i = 0; i < duplicatesNeeded; i++) {
            items.forEach(item => {
                const clone = item.cloneNode(true);
                track.appendChild(clone);
            });
        }
        
        // Set initial position based on direction
        const startX = this.direction === 'right' ? -totalWidth : 0;
        const endX = this.direction === 'right' ? 0 : -totalWidth;
        
        // Set initial position
        if (typeof gsap !== 'undefined') {
            gsap.set(track, { x: startX });
            
            // Create GSAP timeline for infinite marquee
            this.timeline = gsap.timeline({ repeat: -1 });
            
            // Animate track
            this.timeline.to(track, {
                x: endX,
                duration: this.speed,
                ease: "none"
            });
            
            // Add hover pause functionality
            this.addEventListener('mouseenter', () => {
                this.pause();
            });
            
            this.addEventListener('mouseleave', () => {
                this.play();
            });
            
            // Add pause/play methods for external control
            this.pause = () => {
                if (this.timeline) {
                    this.timeline.pause();
                    this.isPaused = true;
                }
            };
            
            this.play = () => {
                if (this.timeline) {
                    this.timeline.play();
                    this.isPaused = false;
                }
            };
            
            // Store timeline reference for potential cleanup
            this.marqueeTimeline = this.timeline;
            
            console.log(`GSAP Marquee initialized: direction=${this.direction}, speed=${this.speed}s`);
        } else {
            console.error('MarqueeSlider: GSAP not available');
        }
    }

    disconnectedCallback() {
        // Cleanup timeline when element is removed
        if (this.timeline) {
            this.timeline.kill();
        }
    }
}

// Register the custom element
customElements.define('marquee-slider', MarqueeSlider);

})(); // End of IIFE
