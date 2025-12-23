# Custom Components Guide

## How to Add New Components

### 1. Create Component File
Create your component in `assets/js/components/your-component.js`:

```javascript
class YourComponent extends HTMLElement {
    constructor() {
        super();
        // Initialize properties
    }

    connectedCallback() {
        console.log('YourComponent connected');
        
        // Wait for DOM to be ready before initializing
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.init());
        } else {
            setTimeout(() => this.init(), 0);
        }
    }

    init() {
        // Your component initialization logic
    }

    disconnectedCallback() {
        // Cleanup when component is removed
    }
}

// Register the custom element
customElements.define('your-component', YourComponent);
```

### 2. Add Component Script to HTML
Add the script right before the section where it's used:

```html
<!-- Your Component -->
<script src="../assets/js/components/your-component.js"></script>

<section class="your-section">
    <your-component data-attribute="value">
        <!-- Your content -->
    </your-component>
</section>
```

### 3. Benefits of This Approach

- **Lazy Loading**: Components only load when their sections are present
- **Better Organization**: Scripts are located near their usage
- **Easy Maintenance**: Clear separation of concerns
- **Performance**: No unnecessary script loading
- **Modular**: Each component is self-contained

### 4. Current Components

#### Header Sticky Component
- **Location**: `assets/js/components/header-sticky.js`
- **Usage**: `<header-sticky data-sticky-start="350" data-sticky-offset="0">`
- **Loaded**: Before header section

#### Marquee Slider Component
- **Location**: `assets/js/components/marquee-slider.js`
- **Usage**: `<marquee-slider data-direction="left" data-speed="100">`
- **Loaded**: Before testimonial section

### 5. Best Practices

- Always use `connectedCallback` for initialization
- Add DOM ready checks for reliable timing
- Include console logging for debugging
- Clean up in `disconnectedCallback`
- Use descriptive component names with hyphens
- Pass configuration via data attributes
