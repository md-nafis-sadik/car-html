class HeaderSticky extends HTMLElement {
    constructor() {
        super();
        this.spacer = null;
        this.isSticky = false;
        this.stickyStart = 250;
        this.stickyOffset = 0;
    }

    connectedCallback() {
        console.log('HeaderSticky connected');
        
        // Get configuration from data attributes
        this.stickyStart = parseInt(this.getAttribute('data-sticky-start')) || 250;
        this.stickyOffset = parseInt(this.getAttribute('data-sticky-offset')) || 0;
        
        console.log(`HeaderSticky config: stickyStart=${this.stickyStart}, stickyOffset=${this.stickyOffset}`);
        
        // Wait for DOM to be ready before initializing
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.init());
        } else {
            // DOM is already ready
            setTimeout(() => this.init(), 0);
        }
    }

    init() {
        console.log('HeaderSticky initializing');
        
        // Create spacer to maintain layout when header becomes fixed
        this.createSpacer();
        
        // Initialize sticky behavior
        this.initStickyBehavior();
    }

    createSpacer() {
        console.log('HeaderSticky: Creating spacer');
        
        this.spacer = document.createElement('div');
        this.spacer.className = 'sticky-spacer';
        this.spacer.style.height = this.offsetHeight + 'px';
        this.spacer.style.overflow = 'hidden';
        this.spacer.style.display = 'block';
        this.spacer.style.visibility = 'visible';
        
        // Insert spacer after the header-sticky element
        this.parentNode.insertBefore(this.spacer, this.nextSibling);
        
        console.log(`HeaderSticky: Created spacer with height ${this.offsetHeight}px`);
        console.log('HeaderSticky: Spacer element:', this.spacer);
    }

    initStickyBehavior() {
        console.log('HeaderSticky: Initializing sticky behavior with JavaScript');
        
        // Use simple scroll event listener - CSS handles animations
        this.initScrollListener();
    }

    initScrollListener() {
        console.log('HeaderSticky: Using scroll listener');
        
        // Calculate the trigger point once
        const headerRect = this.getBoundingClientRect();
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const headerTop = headerRect.top + scrollTop;
        this.triggerPoint = headerTop + this.stickyStart;
        
        console.log(`HeaderSticky: Trigger point at ${this.triggerPoint}px (headerTop: ${headerTop}px + stickyStart: ${this.stickyStart}px)`);
        
        // Initial check
        this.checkScrollPosition();
        
        // Add scroll listener
        const handleScroll = () => {
            this.checkScrollPosition();
        };
        
        window.addEventListener('scroll', handleScroll, { passive: true });
        
        // Store for cleanup
        this.scrollHandler = handleScroll;
    }

    checkScrollPosition() {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        const shouldBeSticky = currentScroll >= this.triggerPoint;
        
        // Only update if state needs to change
        if (shouldBeSticky !== this.isSticky) {
            if (shouldBeSticky) {
                console.log(`HeaderSticky: Adding sticky (scroll: ${currentScroll}px >= trigger: ${this.triggerPoint}px)`);
                this.setSticky(true);
            } else {
                console.log(`HeaderSticky: Removing sticky (scroll: ${currentScroll}px < trigger: ${this.triggerPoint}px)`);
                this.setSticky(false);
            }
        }
    }

    setSticky(sticky) {
        this.isSticky = sticky;
        if (sticky) {
            this.classList.add('is-sticky');
            console.log('HeaderSticky: Added is-sticky class');
        } else {
            this.classList.remove('is-sticky');
            console.log('HeaderSticky: Removed is-sticky class');
        }
    }

    initScrollFallback() {
        const handleScroll = () => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const headerTop = this.getBoundingClientRect().top + scrollTop;
            const triggerPoint = headerTop - this.stickyStart;
            
            if (scrollTop >= triggerPoint && !this.isSticky) {
                this.setSticky(true);
            } else if (scrollTop < triggerPoint && this.isSticky) {
                this.setSticky(false);
            }
        };
        
        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll(); // Initial check
    }

    disconnectedCallback() {
        // Cleanup scroll listener
        if (this.scrollHandler) {
            window.removeEventListener('scroll', this.scrollHandler);
        }
        
        // Remove spacer if it exists
        if (this.spacer && this.spacer.parentNode) {
            this.spacer.parentNode.removeChild(this.spacer);
        }
    }
}

// Register the custom element
customElements.define('header-sticky', HeaderSticky);
