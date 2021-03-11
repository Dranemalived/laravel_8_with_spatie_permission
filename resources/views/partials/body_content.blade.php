<div class="main-panel">
    <div class="content-wrapper">
        @include('partials.alert_message')
        @yield('content')
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('partials.footer')
    <!-- partial -->
</div>