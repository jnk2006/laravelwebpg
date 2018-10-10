<!doctype html>
<html lang="en">
<head>
    @include('includes.head');
</head>
<body>

<header>
    @include('includes.header');
</header>

<main role="main">

    @yield('content');
    <footer class="row">
        @include('includes.footer');
    </footer>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIKvYIK3UENzM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudfare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha-384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfv/JQGiRRSQQxSfFWpilMquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>