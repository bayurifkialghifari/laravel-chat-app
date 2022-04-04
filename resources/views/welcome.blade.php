<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
      <!--  All snippets are MIT license http://bootdey.com/license -->
      <title>Whatsapp web chat template - Bootdey.com</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
      <link href="{{asset('assets')}}/emoji-picker-master/css/emoji.css" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="{{asset('assets')}}/emoji-picker-master/js/config.js"></script>
      <script src="{{asset('assets')}}/emoji-picker-master/js/util.js"></script>
      <script src="{{asset('assets')}}/emoji-picker-master/js/jquery.emojiarea.js"></script>
      <script src="{{asset('assets')}}/emoji-picker-master/js/emoji-picker.js"></script>
  </head>
  <body>
    <div class="app">
      <div class="row app-one">
        <div class="col-sm-3 side">
          <div class="side-one">
            <div class="row heading">
              <div class="col-sm-3 col-xs-3 heading-avatar">
                <div class="heading-avatar-icon">
                  <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
                </div>
              </div>
              <div class="col-sm-1 col-xs-1  heading-dot  pull-right">
                <div class="dropdown-container">
                    <button class="dropdown-toggle dropdown-button" type="button" id="my-setting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v fa-2x pull-righ" aria-hidden="true"></i>    
                    </button>
                    <ul role="menu" class="dropdown-menu" aria-labelledby="my-setting">
                        <li><a href="#">New Group</a></li>
                    </ul>
                </div>
              </div>
              <div class="col-sm-2 col-xs-2 heading-compose  pull-right">
                <button class="dropdown-button">
                  <i class="fa fa-archive fa-2x  pull-right" aria-hidden="true"></i>
                </button>
              </div>
            </div>

            <div class="row searchBox">
              <div class="col-sm-12 searchBox-inner">
                <div class="form-group has-feedback">
                  <input id="searchText" type="text" class="form-control" name="searchText" placeholder="Search">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
            </div>

            <div class="row sideBar">
              <div class="row sideBar-body" onclick="chat(1)">
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

          <div class="side-two">
            <div class="row newMessage-heading">
              <div class="row newMessage-main">
                <div class="col-sm-2 col-xs-2 newMessage-back">
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
                  <input id="composeText" type="text" class="form-control" name="searchText" placeholder="Search People">
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
            <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
              <div class="heading-avatar-icon">
                <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
              </div>
            </div>
            <div class="col-sm-8 col-xs-7 heading-name">
              <a class="heading-name-meta">John Doe
              </a>
              <span class="heading-online">Online</span>
            </div>
            <div class="col-sm-1 col-xs-1  heading-dot pull-right">
              <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
            </div>
          </div>

          <div class="row message" id="conversation">
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


    <style type="text/css">
      * {
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
      }

      html,
      body,
      div,
      span {
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      html {
        overflow: hidden;
      }

      body {
        background: url("https://www.bootdey.com/img/bgy.png") no-repeat fixed center;
        background-size: cover;
      }

      .fa-2x {
        font-size: 1.5em;
      }

      .app {
        position: relative;
        overflow: hidden;
        top: 0px;
        height: 100%;
        margin: auto;
        padding: 0;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .06), 0 2px 5px 0 rgba(0, 0, 0, .2);
      }

      .app-one {
        background-color: #f7f7f7;
        height: 100%;
        overflow: hidden;
        margin: 0;
        padding: 0;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .06), 0 2px 5px 0 rgba(0, 0, 0, .2);
      }

      .side {
        padding: 0;
        margin: 0;
        height: 100%;
        display: block;
        -webkit-transition: left 0.3s ease !important;
        transition: left 0.3s ease !important;
      }
      .side-one {
        padding: 0;
        margin: 0;
        height: 100%;
        width: 100%;
        z-index: 1;
        position: relative;
        display: block;
        top: 0;
      }

      .side-two {
        padding: 0;
        margin: 0;
        height: 100%;
        width: 100%;
        z-index: 2;
        position: relative;
        top: -100%;
        left: -100%;
        -webkit-transition: left 0.3s ease;
        transition: left 0.3s ease;

      }


      .heading {
        padding: 10px 16px 10px 15px;
        margin: 0;
        height: 60px;
        width: 100%;
        background-color: #39403b;
        z-index: 1000;
      }

      .heading-avatar {
        padding: 0;
        cursor: pointer;

      }

      .heading-avatar-icon img {
        border-radius: 50%;
        height: 40px;
        width: 40px;
      }

      .heading-name {
        padding: 0 !important;
        cursor: pointer;
      }

      .heading-name-meta {
        font-weight: 700;
        font-size: 100%;
        padding: 5px;
        padding-bottom: 0;
        text-align: left;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: white;
        display: block;
      }
      .heading-online {
        display: none;
        padding: 0 5px;
        font-size: 12px;
        color: #93918f;
      }
      .heading-compose {
        padding: 5px;
        text-align: center;
      }

      .heading-dot {
        padding: 5px;
        text-align: center;
        margin-left: 10px;
      }

      .searchBox {
        padding: 0 !important;
        margin: 0 !important;
        height: 60px;
        width: 100%;
      }

      .searchBox-inner {
        height: 100%;
        width: 100%;
        padding: 10px !important;
        border-bottom: 1px solid #626965 !important;
        background-color: #29302d;
      }


      .searchBox-inner input {
        background-color: #626965;
        color: white;        
        border: none;
        box-shadow: none;
      }

      .searchBox-inner input:focus {
        outline: none;
        border: none;
        box-shadow: none;
      }

      .sideBar {
        padding: 0 !important;
        margin: 0 !important;
        background-color: #29302d;
        overflow-y: auto;
        border: 1px solid #29302d;
        height: calc(100% - 120px);
      }

      .sideBar-body {
        position: relative;
        padding: 10px !important;
        border-bottom: 1px solid #626965;
        height: 72px;
        margin: 0 !important;
        cursor: pointer;
      }

      .sideBar-body:hover {
        background-color: #626965;
      }

      .sideBar-avatar {
        text-align: center;
        padding: 0 !important;
      }

      .avatar-icon img {
        border-radius: 50%;
        height: 49px;
        width: 49px;
      }

      .sideBar-main {
        padding: 0 !important;
      }

      .sideBar-main .row {
        padding: 0 !important;
        margin: 0 !important;
      }

      .sideBar-name {
        padding: 10px !important;
      }

      .name-meta {
        font-size: 100%;
        padding: 1% !important;
        text-align: left;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: white;
      }

      .sideBar-time {
        padding: 10px !important;
      }

      .time-meta {
        text-align: right;
        font-size: 12px;
        padding: 1% !important;
        color: #e0ddd5;
        vertical-align: baseline;
      }

      /*New Message*/

      .newMessage {
        padding: 0 !important;
        margin: 0 !important;
        height: 100%;
        position: relative;
        left: -100%;
      }
      .newMessage-heading {
        padding: 10px 16px 10px 15px !important;
        margin: 0 !important;
        height: 100px;
        width: 100%;
        background-color: #39403b;
        z-index: 1001;
      }

      .newMessage-main {
        padding: 10px 16px 0 15px !important;
        margin: 0 !important;
        height: 60px;
        margin-top: 30px !important;
        width: 100%;
        z-index: 1001;
        color: #fff;
      }

      .newMessage-title {
        font-size: 18px;
        font-weight: 700;
        padding: 10px 5px !important;
      }
      .newMessage-back {
        text-align: center;
        vertical-align: baseline;
        padding: 12px 5px !important;
        display: block;
        cursor: pointer;
      }
      .newMessage-back i {
        margin: auto !important;
      }

      .composeBox {
        padding: 0 !important;
        margin: 0 !important;
        height: 60px;
        width: 100%;
      }

      .composeBox-inner {
        height: 100%;
        width: 100%;
        padding: 10px !important;
        background-color: #29302d;
        border-bottom: 1px solid #626965;
      }

      .composeBox-inner input {
        background-color: #626965;
        color: white;
      }

      .composeBox-inner input:focus {
        outline: none;
        border: none;
        box-shadow: none;

      }

      .compose-sideBar {
        padding: 0 !important;
        margin: 0 !important;
        background-color: #29302d;
        overflow-y: auto;
        border: 1px solid #626965;
        height: calc(100% - 160px);
      }

      /*Conversation*/

      .conversation {
        padding: 0 !important;
        margin: 0 !important;
        height: 100%;
        /*width: 100%;*/
        border-left: 1px solid #232423;
        /*overflow-y: auto;*/
      }

      .message {
        padding: 0 !important;
        margin: 0 !important;
        background: url("{{ asset('assets') }}/bg-message-2.png") no-repeat fixed 66% 50%;
        background-size: 200px;
        background-color: #232423;
        overflow-y: auto;
        border: 1px solid #232423;
        height: calc(100% - 120px);
      }
      .message-previous {
        margin : 0 !important;
        padding: 0 !important;
        height: auto;
        width: 100%;
      }
      .previous {
        font-size: 15px;
        text-align: center;
        padding: 10px !important;
        cursor: pointer;
      }

      .previous a {
        text-decoration: none;
        font-weight: 700;
      }

      .message-body {
        margin: 0 !important;
        padding: 0 !important;
        width: auto;
        height: auto;
      }

      .message-main-receiver {
        /*padding: 10px 20px;*/
        max-width: 60%;
      }

      .message-main-sender {
        padding: 3px 20px !important;
        margin-left: 40% !important;
        max-width: 60%;
      }

      .message-text {
        margin: 0 !important;
        padding: 5px !important;
        word-wrap:break-word;
        font-weight: 200;
        font-size: 14px;
        padding-bottom: 0 !important;
      }

      .message-time {
        margin: 0 !important;
        margin-left: 50px !important;
        font-size: 12px;
        text-align: right;
        color: #e0ddd5;

      }

      .receiver {
        width: auto !important;
        padding: 4px 10px 7px !important;
        border-radius: 10px 10px 10px 0;
        background: #626965;
        color: white;
        font-size: 12px;
        text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
        word-wrap: break-word;
        display: inline-block;
      }

      .sender {
        float: right;
        width: auto !important;
        background: #659c68;
        color: white;
        border-radius: 10px 10px 0 10px;
        padding: 4px 10px 7px !important;
        font-size: 12px;
        text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
        display: inline-block;
        word-wrap: break-word;
      }


      /*Reply*/

      .reply {
        height: 60px;
        width: 100%;
        background-color: #39403b;
        padding: 10px 5px 10px 5px !important;
        margin: 0 !important;
        color: white;
        z-index: 1000;
      }

      .reply-emojis {
        text-align: center;
        padding: 5px !important;
      }

      .reply-recording {
        padding: 5px !important;
      }

      .reply-send {
        text-align: center;
        padding: 5px !important;
      }

      .reply-main {
        padding: 2px 5px !important;
      }

      .reply-main textarea {
        width: 100%;
        resize: none;
        overflow: hidden;
        padding: 5px !important;
        outline: none;
        border: none;
        text-indent: 5px;
        box-shadow: none;
        height: 100%;
        background-color: #626965;
        color: white;
        font-size: 16px;
      }

      .reply-main textarea:focus {
        outline: none;
        border: none;
        text-indent: 5px;
        box-shadow: none;
      }

      @media screen and (max-width: 700px) {
        .app {
          top: 0;
          height: 100%;
        }
        .heading {
          height: 70px;
          background-color: #39403b;
        }
        .fa-2x {
          font-size: 2.3em !important;
        }
        .heading-avatar {
          padding: 0 !important;
        }
        .heading-avatar-icon img {
          height: 50px;
          width: 50px;
        }
        .heading-compose {
          padding: 5px !important;
        }
        .heading-compose i {
          color: #fff;
          cursor: pointer;
        }
        .heading-dot {
          padding: 5px !important;
          margin-left: 10px !important;
        }
        .heading-dot i {
          color: #fff;
          cursor: pointer;
        }
        .sideBar {
          height: calc(100% - 130px);
        }
        .sideBar-body {
          height: 80px;
        }
        .sideBar-avatar {
          text-align: left;
          padding: 0 8px !important;
        }
        .avatar-icon img {
          height: 55px;
          width: 55px;
        }
        .sideBar-main {
          padding: 0 !important;
        }
        .sideBar-main .row {
          padding: 0 !important;
          margin: 0 !important;
        }
        .sideBar-name {
          padding: 10px 5px !important;
          color: white;
        }
        .name-meta {
          font-size: 16px;
          color: white;
          padding: 5% !important;
        }
        .sideBar-time {
          padding: 10px !important;
        }
        .time-meta {
          text-align: right;
          font-size: 14px;
          padding: 4% !important;
          color: rgba(0, 0, 0, .4);
          vertical-align: baseline;
        }
        /*Conversation*/
        .conversation {
          padding: 0 !important;
          margin: 0 !important;
          height: 100%;
          /*width: 100%;*/
          border-left: 1px solid rgba(0, 0, 0, .08);
          /*overflow-y: auto;*/
        }
        .message {
          height: calc(100% - 140px);
        }
        .reply {
          height: 70px;
        }
        .reply-emojis {
          padding: 5px 0 !important;
          font-size: 1.8em !important;
        }
        .reply-main {
          padding: 2px 8px !important;
          font-size: 18px;
        }
        .reply-main textarea {
          padding: 8px !important;
          font-size: 18px;
        }
        .reply-recording {
          padding: 5px 0 !important;
        }
        .reply-send {
          padding: 5px 0 !important;
          font-size: 1.8em !important;
        }
      }
    </style>

    <style type="text/css">
      .dropdown-button {
        border: none;
        background-color: transparent;
        color: white;
      }

      .dropdown-menu {
        background-color: #39403b;
        left: auto;
        right: 0 !important;
        box-shadow: 1px 1px #232423, -0.1em 0 .1em #232423;
      }

      .dropdown-menu > li > a {
        color: white;
      }

      .dropdown-menu > li > a:hover {
        color: white;
        background-color: #232423;
      }

      .btn-custom {
        background-color: transparent;
        color: white;
      }

      .btn-custom:hover, .btn-custom:focus, .btn-custom:active {
        color: white;
        outline: none !important;
      }

      @media screen and (max-width: 700px) {
        .dropdown-button {
          background-color: transparent;
        }
      }
    </style>
    <script type="text/javascript">
    // Screen width
    let width = screen.width
    // Chat is open or not
    let isOpen = false

    // Detect screen width change
    window.addEventListener('resize', () => {
      width = screen.width

      if(width > 700) {
        $('.side').show()
      }
    })

    // Open and close chat function
    function chat(id)
    {
      isOpen = !isOpen

      if(width <= 700) {
        if(isOpen) {
          $('.side').hide()
        }
        else {
          $('.side').show()
        }
      }
    }

    $(function(){
      $('.heading-compose').click(function() {
        $('.side-two').css({
          'left': '0'
        });
      });

      $('.newMessage-back').click(function() {
        $('.side-two').css({
          'left': '-100%'
        });
      });

      $('.message').scrollTop($('.message')[0].scrollHeight)
    })
    </script>
  </body>
</html>