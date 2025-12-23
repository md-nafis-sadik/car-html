$(() => {
    $('#sidebarToggler').on('click', function() {
        let target = $(this).data('target')
        $(target).toggleClass('!left-0')
        $('#sidebarBackdrop').toggleClass('opacity-0')
        $('#sidebarBackdrop').toggleClass('hidden')
    })

    function closeSidebar() {
        $('#autofusionSidebar').removeClass('!left-0')
        $('#sidebarBackdrop').toggleClass('opacity-0')
        $('#sidebarBackdrop').toggleClass('hidden')
    }

    $('#sidebarBackdrop').on('click', closeSidebar)
    $('#autofusionSidebarClose').on('click', closeSidebar)
})
