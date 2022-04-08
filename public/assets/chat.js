// Screen width
let width = screen.width
// Chat is open or not
let isOpen = false

// Initial screen width check
screenCheck(width)

// Detect screen width change
window.addEventListener('resize', () => {
    width = screen.width

    screenCheck(width)
})

// Screen check function
function screenCheck(width) {
    if (width > 700) {
        $('#backward').hide()
        $('.side').show()
    } else {
        $('#backward').show()
    }
}

// Open and close chat function
function chat(id) {
    isOpen = !isOpen

    if (width <= 700) {
        if (isOpen && id > 0) {
            $('.side').hide()
        } else {
            $('.side').show()
        }
    }
}

// Back to main menu function
function back() {
    $('#chat-archive').css({
        'left': '-100%',
        'top': '-100%',
    })

    $('#my-profile').css({
        'left': '-100%',
        'top': '-100%',
    })
}

// Show detail foto profile
function detailfotoprofile(img) {
    $('#modal-profile-foto').modal('show')
    $('#profile-foto-detail').prop('src', img)
}

// Scool down message
function scooldown(div) {
    $(div).scrollTop($('.message')[0].scrollHeight)
}

$(function () {
    $('#archive').click(function () {
        $('#chat-archive').css({
            'left': '0',
            'top': '0',
        })
    })

    $('#my-info').click(function () {
        $('#my-profile').css({
            'left': '0',
            'top': '0',
        })
    })

    scooldown('.message')
})
