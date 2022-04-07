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
</head>

<body>
    <div class="app">
        <div class="row app-one">
            <div class="col-sm-3 side">
                <div class="side-one">
                    <div class="row heading">
                        <div class="col-sm-3 col-xs-3 heading-avatar">
                            <div class="heading-avatar-icon">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" id="my-info">
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-1  heading-dot  pull-right">
                            <div class="dropdown-container">
                                <button class="dropdown-toggle dropdown-button" type="button" id="my-setting"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v fa-2x pull-righ" aria-hidden="true"></i>
                                </button>
                                <ul role="menu" class="dropdown-menu" aria-labelledby="my-setting">
                                    <li><a href="#">New Group</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-2 heading-compose pull-right">
                            <button class="dropdown-button" id="archive">
                                <i class="fa fa-archive fa-2x  pull-right" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>

                    <div class="row searchBox">
                        <div class="col-sm-12 searchBox-inner">
                            <div class="form-group has-feedback">
                                <input id="searchText" type="text" class="form-control" name="searchText"
                                    placeholder="Search">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row sideBar">
                        <div class="row sideBar-body" onclick="chat(1)">
                            <div class="col-sm-3 col-xs-1 sideBar-avatar">
                                <div class="avatar-icon">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                </div>
                            </div>
                            <div class="col-sm-9 col-xs-11 sideBar-main">
                                <div class="row">
                                    <div class="col-sm-8 col-xs-8 sideBar-name">
                                        <span class="name-meta">John Doe
                                        </span>
                                    </div>
                                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                                        <span class="time-meta pull-right">18:18
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="side-two" id="chat-archive">
                    <div class="row newMessage-heading">
                        <div class="row newMessage-main">
                            <div class="col-sm-2 col-xs-2 newMessage-back" onclick="back()">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            </div>
                            <div class="col-sm-10 col-xs-10 newMessage-title">
                                New Chat
                            </div>
                        </div>
                    </div>

                    <div class="row composeBox">
                        <div class="col-sm-12 composeBox-inner">
                            <div class="form-group has-feedback">
                                <input id="composeText" type="text" class="form-control" name="searchText"
                                    placeholder="Search People">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row compose-sideBar">
                        <div class="row sideBar-body">
                            <div class="col-sm-3 col-xs-3 sideBar-avatar">
                                <div class="avatar-icon">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                </div>
                            </div>
                            <div class="col-sm-9 col-xs-9 sideBar-main">
                                <div class="row">
                                    <div class="col-sm-8 col-xs-8 sideBar-name">
                                        <span class="name-meta">John Doe
                                        </span>
                                    </div>
                                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                                        <span class="time-meta pull-right">18:18
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="side-two" id="my-profile">
                    <div class="row newMessage-heading">
                        <div class="row newMessage-main">
                            <div class="col-sm-2 col-xs-2 newMessage-back" onclick="back()">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            </div>
                            <div class="col-sm-10 col-xs-10 newMessage-title">
                                My Profile
                            </div>
                        </div>
                    </div>

                    <div class="row composeBox">
                        <div class="col-sm-12 composeBox-inner">
                            <div class="form-group has-feedback">
                                <input id="composeText" type="text" class="form-control" name="searchText"
                                    placeholder="Search People">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row compose-sideBar">
                        <div class="row sideBar-body">
                            <div class="col-sm-3 col-xs-3 sideBar-avatar">
                                <div class="avatar-icon">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                </div>
                            </div>
                            <div class="col-sm-9 col-xs-9 sideBar-main">
                                <div class="row">
                                    <div class="col-sm-8 col-xs-8 sideBar-name">
                                        <span class="name-meta">John Doe
                                        </span>
                                    </div>
                                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                                        <span class="time-meta pull-right">18:18
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 conversation">
                <div class="row heading">
                    <div class="col-sm-1 col-xs-1 heading-dot" id="backward">
                        <button class="dropdown-button" onclick="chat(0)">
                            <i class="fa fa-arrow-left fa-2x"></i>
                        </button>
                    </div>
                    <div class="col-sm-1 col-xs-1 heading-avatar">
                        <div class="heading-avatar-icon">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
                        </div>
                    </div>
                    <div class="col-sm-8 col-xs-7 heading-name text-left">
                        <a class="heading-name-meta">John Doe
                        </a>
                        <span class="heading-online">Online</span>
                    </div>
                    <div class="col-sm-1 col-xs-1 heading-dot pull-right">
                        <div class="dropdown-container">
                            <button class="dropdown-toggle dropdown-button" type="button" id="my-setting"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v fa-2x pull-righ" aria-hidden="true"></i>
                            </button>
                            <ul role="menu" class="dropdown-menu" aria-labelledby="my-setting">
                                <li><a href="#">New Group</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row message" id="conversation"
                    style='background: url("{{ asset('assets') }}/bg-message-2.png") no-repeat fixed 66% 50%;background-size: 200px;background-color: #232423;'>
                    <div class="row message-previous">
                        <div class="col-sm-12 previous">
                            <a onclick="previous(this)" name="20">
                                Show Previous Message!
                            </a>
                        </div>
                    </div>

                    <div class="row message-body">
                        <div class="col-sm-12 message-main-receiver">
                            <div class="receiver">
                                <div class="message-text">
                                    Hi, what are you doing?!
                                </div>
                                <span class="message-time pull-right">
                                    2020-12-12
                                    <!-- <i class="fas fa-check-double"></i> -->
                                    <i class="fas fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-12 message-main-sender">
                            <div class="sender">
                                <div class="message-text">
                                    I am doing nothing man!
                                </div>
                                <span class="message-time pull-right">
                                    2020-12-12 10:10
                                    <!-- <i class="fas fa-check-double"></i> -->
                                    <i class="fas fa-check"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row reply text-center">
                    <div class="col-sm-1 col-xs-1 reply-emojis">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <label for="file" class="btn btn-custom"><i class="fa fa-file"></i></label>
                            </div>
                            <input type="file" name="file" style="display: none" id="file" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-1 col-xs-1 reply-emojis">
                        <button class="btn btn-custom btn-sm" id="btn-emoji">
                            <i class="far fa-smile fa-2x"></i>
                        </button>
                    </div>
                    <div class="col-sm-9 col-xs-9 reply-main">
                        <textarea class="form-control" rows="1" id="comment"></textarea>
                    </div>
                    <!-- <div class="col-sm-1 col-xs-1 reply-recording"> -->
                    <!-- <i class="fa fa-microphone fa-2x" aria-hidden="true"></i> -->
                    <!-- </div> -->
                    <div class="col-sm-1 col-xs-1 reply-send">
                        <button type="submit" class="btn btn-custom btn-sm" id="btn-submit">
                            <i class="far fa-paper-plane fa-2x" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
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

            $('.message').scrollTop($('.message')[0].scrollHeight)
        })
    </script>
</body>

</html>
