<!DOCTYPE html>
<html lang="en">

@include('app-layout.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('app-layout.sidebar')

        @include('dashboard')
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('app-layout.logout')

    @include('app-layout.script')
</body>

</html>
