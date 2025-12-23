# SASS Structure

This directory contains all SASS source files organized by category.

## Directory Structure

```
scss/
├── style.scss                 # Main stylesheet (imports everything)
├── _bootstrap-custom.scss     # Bootstrap variable overrides (at root)
│
├── base/                      # Base styles and variables
│   ├── _variables.scss        # Custom variables (colors, fonts, etc.)
│   ├── _root.scss             # Root element styles
│   └── _predefine.scss        # Predefined utility classes
│
├── layout/                    # Layout components
│   ├── _header.scss           # Header styles
│   └── _footer.scss           # Footer styles
│
├── components/                # Reusable components
│   └── _button.scss           # Button styles
│
├── sections/                  # Page sections
│   ├── _banner.scss           # Banner/hero section
│   ├── _about.scss            # About section
│   ├── _service.scss          # Service section
│   ├── _faq.scss              # FAQ section
│   └── _testimonial.scss      # Testimonial section
│
└── pages/                     # Page-specific styles
    ├── _blog.scss             # Blog page styles
    ├── _contact.scss          # Contact page styles
    ├── _portfolio.scss        # Portfolio page styles
    ├── _team.scss             # Team page styles
    └── _search.scss           # Search page styles
```

## Import Order

The `style.scss` file imports files in this order:

1. **Bootstrap Custom** - Variable overrides (before Bootstrap)
2. **Bootstrap** - Full Bootstrap framework
3. **Base** - Variables, root, predefine
4. **Layout** - Header, footer
5. **Components** - Reusable components
6. **Sections** - Page sections
7. **Pages** - Page-specific styles

## Adding New Files

### New Component
Create in `components/` and import in `style.scss`:
```scss
@import "components/your-component";
```

### New Section
Create in `sections/` and import in `style.scss`:
```scss
@import "sections/your-section";
```

### New Page Style
Create in `pages/` and import in `style.scss`:
```scss
@import "pages/your-page";
```

## Naming Convention

- All partial files start with underscore: `_filename.scss`
- Import without underscore: `@import "filename";`
- Use kebab-case for file names

