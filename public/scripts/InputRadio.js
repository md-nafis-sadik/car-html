$(() => {
    let radioButton = $('input[type="radio"]')
    radioButton.on('click', function () {
        radioButton.parent().parent().removeClass('!border-primary') //Reset border

        if($(this).is(':checked')) {
            $(this).parent().parent().addClass('!border-primary')
        }
    })
})
