<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Whatsapp web chat template - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/emoji-picker-master/css/emoji.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/main.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/custom.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/emoji-picker-master/js/config.js"></script>
    <script src="{{ asset('assets') }}/emoji-picker-master/js/util.js"></script>
    <script src="{{ asset('assets') }}/emoji-picker-master/js/jquery.emojiarea.js"></script>
    <script src="{{ asset('assets') }}/emoji-picker-master/js/emoji-picker.js"></script>
    @stack('css')
</head>

<body>
    <div class="app">
        <div class="row app-one">
            <div class="col-sm-3 side">
                @include('partials.side')
            </div>

            <div class="col-sm-9 conversation">
                @yield('content')
            </div>
        </div>
    </div>

    <script type="text/javascript">
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

        // Scool down message
        function scooldown(div) {
            $(div).scrollTop($('.message')[0].scrollHeight)
        }

        $(function() {
            $('#archive').click(function() {
                $('#chat-archive').css({
                    'left': '0',
                    'top': '0',
                })
            })

            $('#my-info').click(function() {
                $('#my-profile').css({
                    'left': '0',
                    'top': '0',
                })
            })

            scooldown('.message')
        })
    </script>
    @stack('script')
</body>

</html>
