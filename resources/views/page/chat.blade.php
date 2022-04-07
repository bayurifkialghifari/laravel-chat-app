@extends('layouts.app')
@section('content')
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
                <button class="dropdown-toggle dropdown-button" type="button" id="my-setting" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
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
@endsection
