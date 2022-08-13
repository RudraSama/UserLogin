<x-layout title="Dashboard">
    <?php
        $authUser = \Illuminate\Support\Facades\Auth::user();
    ?>
    <div class="dashboard-wrapper">
        <div class="topBar">
            <div class="notification">
                <i class="fa-solid fa-bars fa-2x" show="0"></i>
                <i class="fa-solid fa-bell fa-2x" show="0"></i>
                <div class="box">
                    <div class="heading">NOTIFICATIONS <span>0</span></div>
                    <div class="notes">
                        <span>No Notifications</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sideBar">
            <div class="user">
                <div class="userIcon">{{$authUser->name[0]}}</div>
                <div class="userName">{{$authUser->name}}</div>
                <div class="role">{{$authUser->isAdmin?'Admin':'Normal'}}</div>
            </div>
            <div class="nav">
                <div class="navItem"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;My Account<i class="fa-solid fa-angle-right"></i></div>
                <div class="navItem"><i class="fa-solid fa-key"></i>&nbsp;&nbsp;Privacy<i class="fa-solid fa-angle-right"></i></div>
                <div class="navItem"><i class="fa-solid fa-circle-info"></i>&nbsp;&nbsp;About<i class="fa-solid fa-angle-right"></i></div>
                <div class="navItem" onclick="window.location.href='/logout'"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;Logout<i></i></div>
            </div>
        </div>
        <div class="main">
            <div class="users">
                <span>Users List</span>
                <div class="table">
                    <div class="head row">
                        <div class="col">
                            User
                        </div>
                        <div class="col">
                            Email
                        </div>
                        <div class="col">
                            Location
                        </div>
                        <div class="col">
                            Phone
                        </div>
                        <div class="col">
                            Role
                        </div>
                        @if($authUser->isAdmin)
                        <div class="col">
                            Action
                        </div>
                        @endif
                    </div>
                    @foreach($users as $user)
                    <div class="row">
                        <div class="col">
                            {{$user->name}}
                        </div>
                        <div class="col">
                            {{$user->email}}
                        </div>
                        <div class="col">
                            {{$user->location}}
                        </div>
                        <div class="col">
                            +91{{$user->phone}}
                        </div>
                        <div class="col">
                            {{$user->isAdmin?'Admin':'Normal'}}
                        </div>
                        @if($authUser->isAdmin)
                        <div class="col">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                            <div class="menu-box" show="0">
                                <a href="/{{$user->id}}/edit">Edit</a>
                                <a href="/{{$user->id}}/delete">Remove</a>
                            </div>
                        </div>
                        @endif
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</x-layout>
<script>
    const main_center = document.querySelector(".main");
    const sideBar = document.querySelector(".sideBar");
    main_center.style.marginLeft = sideBar.offsetWidth+"px"

    const notification = document.querySelector(".notification i:nth-child(2)");
    const notificationBox = document.querySelector(".notification .box");
    notification.addEventListener('click', function(){
        console.log("hello");
        if (notification.getAttribute('show') == '0') {
            notificationBox.style.display = "block";
            notification.setAttribute('show', '1');
        }
        else{
            notificationBox.style.display = "none";
            notification.setAttribute('show', '0');
        }
    });

    const action_button = document.querySelectorAll(".main .table .row .col:last-child i");
    action_button.forEach(element => {
        element.addEventListener('click', function(){
            if (element.nextElementSibling.getAttribute('show') == '0') {
                element.nextElementSibling.style.display = "block";
                element.nextElementSibling.setAttribute('show', '1');

            }
            else{
                element.nextElementSibling.style.display = "none";
                element.nextElementSibling.setAttribute('show', '0');
            }
        })
    })

    const menu = document.querySelector(".notification i:nth-child(1)");
    menu.addEventListener('click', function (){
        if (menu.getAttribute('show') == '0') {
            sideBar.style.left = 0;
            menu.setAttribute('show', '1');
        }
        else{
            sideBar.style.left = "-100%";
            menu.setAttribute('show', '0');
        }
    })
    menu.addEventListener('touchstart', function (){
        if (menu.getAttribute('show') == '0') {
            sideBar.style.left = 0;
            menu.setAttribute('show', '1');
        }
        else{
            sideBar.style.left = "-100%";
            menu.setAttribute('show', '0');
        }
    })
</script>
