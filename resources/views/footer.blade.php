@section('footer')
    <footer class="footer">
        <!-- Copyright -->
        <div class="text-center">
            © <?php echo date("Y"); ?>
            <a class="text-dark" href="/contact">Basile&Code</a>
        </div>
        <!-- Copyright -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-185794040-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-185794040-2');
        </script>

    </footer>
@endsection