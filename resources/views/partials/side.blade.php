<div class="side-one">
    <div class="row heading">
        <div class="col-sm-3 col-xs-3 heading-avatar">
            <div class="heading-avatar-icon">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" id="my-info">
            </div>
        </div>
        <div class="col-sm-1 col-xs-1  heading-dot  pull-right">
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
        <div class="col-sm-2 col-xs-2 heading-compose pull-right">
            <button class="dropdown-button" id="archive">
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
            <div class="col-sm-3 col-xs-2 sideBar-avatar">
                <div class="avatar-icon">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
                </div>
            </div>
            <div class="col-sm-9 col-xs-10 sideBar-main">
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

    <div class="row compose-sideBar">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="avatar-icon-profile text-center">
                    <br>
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile foto" type="button"
                        data-toggle="modal" data-target="#modal-profile-foto">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-profile-foto" tabindex="-1" role="dialog" aria-labelledby="profile-label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <button type="button" class="close btn-close-profile-foto" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="text-center">
            <br><br>
            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile foto"
                class="profile-foto-detail">
        </div>
    </div>
</div>
