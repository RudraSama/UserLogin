<x-layout title="Login">
    <div class="wrapper">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" id="wave1" width="100%"viewBox="0 0 1440 440" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 106, 62, 1)" offset="0%"/><stop stop-color="rgba(255, 179, 11, 1)" offset="100%"/></linearGradient></defs><path d="M0,0L30,66C60,132,120,264,180,293.3C240,323,300,249,360,220C420,191,480,205,540,220C600,235,660,249,720,212.7C780,176,840,88,900,44C960,0,1020,0,1080,14.7C1140,29,1200,59,1260,73.3C1320,88,1380,88,1440,102.7C1500,117,1560,147,1620,161.3C1680,176,1740,176,1800,176C1860,176,1920,176,1980,205.3C2040,235,2100,293,2160,315.3C2220,337,2280,323,2340,286C2400,249,2460,191,2520,168.7C2580,147,2640,161,2700,176C2760,191,2820,205,2880,234.7C2940,264,3000,308,3060,286C3120,264,3180,176,3240,117.3C3300,59,3360,29,3420,80.7C3480,132,3540,264,3600,300.7C3660,337,3720,279,3780,271.3C3840,264,3900,308,3960,293.3C4020,279,4080,205,4140,168.7C4200,132,4260,132,4290,132L4320,132L4320,440L4290,440C4260,440,4200,440,4140,440C4080,440,4020,440,3960,440C3900,440,3840,440,3780,440C3720,440,3660,440,3600,440C3540,440,3480,440,3420,440C3360,440,3300,440,3240,440C3180,440,3120,440,3060,440C3000,440,2940,440,2880,440C2820,440,2760,440,2700,440C2640,440,2580,440,2520,440C2460,440,2400,440,2340,440C2280,440,2220,440,2160,440C2100,440,2040,440,1980,440C1920,440,1860,440,1800,440C1740,440,1680,440,1620,440C1560,440,1500,440,1440,440C1380,440,1320,440,1260,440C1200,440,1140,440,1080,440C1020,440,960,440,900,440C840,440,780,440,720,440C660,440,600,440,540,440C480,440,420,440,360,440C300,440,240,440,180,440C120,440,60,440,30,440L0,440Z"/></svg>
        <div class="card">
            <i class="fa fa-user-circle fa-6x" aria-hidden="true"></i>
            <div class="switch">
                <span id="login">Login</span>
                <span id="signup">Sign Up</span>
            </div>
            <form action="/signup" method="POST" class="signup">
                @csrf
                <input type="text" placeholder="Full Name" name="name">
                <input type="email" placeholder="Email" name="email">
                <input type="text" placeholder="Location" name="location">
                <input type="text" placeholder="Phone" name="phone">
                <input type="password" name="password" placeholder="Password">
                <button>Sign Up</button>
            </form>
            <form action="/login" method="POST" class="login">
                @csrf
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button>LOGIN</button>
            </form>
            @if($errors->any())
                <li>{{$errors->first()}}</li>
            @endif

        </div>
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" id="wave2" viewBox="300 -300 1240 450" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 106, 62, 1)" offset="0%"/><stop stop-color="rgba(255, 179, 11, 1)" offset="100%"/></linearGradient></defs><path  d="M0,132L30,132C60,132,120,132,180,139.3C240,147,300,161,360,190.7C420,220,480,264,540,242C600,220,660,132,720,80.7C780,29,840,15,900,44C960,73,1020,147,1080,154C1140,161,1200,103,1260,80.7C1320,59,1380,73,1440,110C1500,147,1560,205,1620,220C1680,235,1740,205,1800,212.7C1860,220,1920,264,1980,264C2040,264,2100,220,2160,198C2220,176,2280,176,2340,190.7C2400,205,2460,235,2520,234.7C2580,235,2640,205,2700,168.7C2760,132,2820,88,2880,73.3C2940,59,3000,73,3060,132C3120,191,3180,293,3240,293.3C3300,293,3360,191,3420,183.3C3480,176,3540,264,3600,256.7C3660,249,3720,147,3780,110C3840,73,3900,103,3960,117.3C4020,132,4080,132,4140,139.3C4200,147,4260,161,4290,168.7L4320,176L4320,440L4290,440C4260,440,4200,440,4140,440C4080,440,4020,440,3960,440C3900,440,3840,440,3780,440C3720,440,3660,440,3600,440C3540,440,3480,440,3420,440C3360,440,3300,440,3240,440C3180,440,3120,440,3060,440C3000,440,2940,440,2880,440C2820,440,2760,440,2700,440C2640,440,2580,440,2520,440C2460,440,2400,440,2340,440C2280,440,2220,440,2160,440C2100,440,2040,440,1980,440C1920,440,1860,440,1800,440C1740,440,1680,440,1620,440C1560,440,1500,440,1440,440C1380,440,1320,440,1260,440C1200,440,1140,440,1080,440C1020,440,960,440,900,440C840,440,780,440,720,440C660,440,600,440,540,440C480,440,420,440,360,440C300,440,240,440,180,440C120,440,60,440,30,440L0,440Z"/></svg>
    </div>
</x-layout>
<script>
    const loginBlock = document.querySelector(".login");
    const signupBlock = document.querySelector(".signup");
    const loginButton = document.getElementById("login");
    const signupButton = document.getElementById("signup");
    signupBlock.style.display = "none";
    loginButton.style.color = "white";

    function switchBlock(element){
        if (element == switchClass[1]) {
            signupBlock.style.display = "flex";
            loginBlock.style.display = "none";
            loginButton.style.backgroundColor = "white";
            loginButton.style.color = "black";
            signupButton.style.backgroundColor = "#00afb9";
            signupButton.style.color = "white";

            flag = false;
        }
        else if(element == switchClass[0]){
            signupBlock.style.display = "none";
            loginBlock.style.display = "flex";
            loginButton.style.backgroundColor = "#00afb9";
            loginButton.style.color = "white";
            signupButton.style.backgroundColor = "white";
            signupButton.style.color = "black";

            flag = true;
        }

    }

    let switchClass = document.querySelector(".switch").getElementsByTagName("span");
    switchClass = Array.from(switchClass);
    switchClass.forEach(element => {
        element.addEventListener('click', function(){
            switchBlock(element);
        });
    });


</script>
