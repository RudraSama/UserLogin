<x-layout title="Edit">
    <?php
        $authUser = \Illuminate\Support\Facades\Auth::user();
    ?>
    <div class="dashboard-wrapper">
        <div class="topBar">
            <div class="notification">
                <i class="fa-solid fa-bars fa-2x"></i>
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
        </div>
        <div class="main">
            <div class="card">
                <span><a href="/dashboard"><i class="fa-solid fa-arrow-left-long"></i>Back</a></span>
                <form action="/{{$user->id}}/update" method="POST" class="signup">
                    @csrf
                    @method('PATCH')
                    <input type="text" name ="name" placeholder="Full Name" value="{{$user->name}}">
                    <input type="email" name ="email" placeholder="Email" value="{{$user->email}}">
                    <input type="text" name ="location" placeholder="Location" value="{{$user->location}}">
                    <input type="text" name ="phone" placeholder="Phone" value="{{$user->phone}}">
                    <div><Label>Make Admin</Label><input type="checkbox" name="isAdmin" {{$user->isAdmin?'checked':''}}></div>
                    <button>Save</button>
                </form>
                @if($errors->any())
                    {{$errors->first()}}
                @endif
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
