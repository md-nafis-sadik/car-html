function injectCss(el) {
    if ($(window).width() < 1024) {
        el.css({
            position: 'relative',
            inset: 'unset',
            transform: 'none',
            display: 'block',
        })
    } else {
        el.css({
            position: 'absolute',
            top: '200%',
            display: 'block',
            right: '50%',
            transform: 'translateX(50%)',
        })
    }
}

$(() => {
    $dropdownItems = $('[data-dropdown-list]')
    $('[data-dropdown-autofusion]').on('click', function() {
        $target = $(`#${$(this).data('dropdown-autofusion')}`)

        if ($target.attr('style') !== undefined) {
            $target.removeAttr('style')
        } else {
            $dropdownItems.removeAttr('style')
            injectCss($target)
        }
    })

    // Reset the dropdown when window resized
    $(window).resize(function() {
        $dropdownItems.removeAttr('style')
    });
})
