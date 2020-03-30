@extends('layouts.dashboardlogin')

@section('viewlogin')

<body>
    <h1>Clear login Form </h1>
    <div class="w3ls-login box box--big">
        <!-- form starts here -->
        <form action="{{ route('login') }}" method="post">
            {{ csrf_field() }}
            <div class="agile-field-txt">
                <label>
                    <i class="fa fa-user" aria-hidden="true"></i> Email </label>
                <input type="text" name="email" placeholder="Enter your imil " required="" />
            </div>
            <div class="agile-field-txt">
                <label>
                    <i class="fa fa-envelope" aria-hidden="true"></i> password </label>
                <input type="password" name="password" placeholder="Enter your password " required="" id="myInput" />
                <div class="agile_label">
                    <input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
                    <label class="check" for="check3">Show password</label>
                </div>
            </div>
            <!-- script for show password -->
            <script>
                function myFunction() {
                    var x = document.getElementById("myInput");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }
            </script>
            <!-- //script ends here -->
            <div class="w3ls-bot">
                <div class="switch-agileits">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                        keep me signed in
                    </label>
                </div>
                <div class="form-end">
                    <input type="submit" value="LOGIN">
                </div>
                <div class="clearfix"></div>
            </div>
        </form>
    </div>
    <!-- //form ends here -->
    <!--copyright-->
    <div class="copy-wthree">
        <p>© 2018 Clear Login Form. All Rights Reserved | Design by
            <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
        </p>
    </div>
    <!--//copyright-->
</body>


@endsection
