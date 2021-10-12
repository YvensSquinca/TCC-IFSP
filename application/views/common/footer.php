    <footer class="page-footer text-center font-small mt-5 wow fadeIn elegant-color-dark">
    <hr class="my-4">
    <div class="pb-4">
        <a href="#" target="">
            <i class="fa fa-facebook mr-3"></i>
        </a>
        <a href="#" target="">
            <i class="fa fa-twitter mr-3"></i>
        </a>
        <a href="#" target="">
            <i class="fa fa-youtube mr-3"></i>
        </a>
    </div>
    <div class="footer-copyright py-3">
        © 2018 Copyright:
        <a href="#" target="">Neto Tattoo</a>
    </div>
    </footer>
    <script type="text/javascript" src="assets/mdb/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/mdb/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/mdb/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/mdb/js/mdb.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript">
        new WOW().init();
        AOS.init();
    </script>
    <!-- Meu Script Personalizado -->
    <script type="text/javascript">
        
        // Abre e Fecha Sidenav
        $(document).ready(function() {
            function toggleSidebar() {
                $(".button").toggleClass("active");
                $("main").toggleClass("move-to-left");
                $(".sidebar-item").toggleClass("active");
            }
            $(".button").on("click tap", function() {
                toggleSidebar();
            });
            $(document).keyup(function(e) {
                if (e.keyCode === 27) {
                    toggleSidebar();
                }
            });
        });
    </script>
</main>
</body>
</html>
