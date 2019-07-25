
    <div class="top-right links">
            <a style="color:{{Request::route()->getName()=='welcome'?'red':''}};" href="{{route('welcome')}}">Welcome</a>
            <a style="color:{{Request::route()->getName()=='about'?'red':''}};" href="{{route('about')}}">About</a>
            <a style="color:{{Request::route()->getName()=='contact'?'red':''}};" href="{{route('contact')}}">Contact</a>
    </div>
