</div>
<footer class="page-footer text-center font-small wow fadeIn">
    <hr class="my-4">
    <div class="pb-4">
        <a href="https://www.instagram.com/netotattosilva/" target="">
            <i class="fab fa-instagram fa-2x"></i>
        </a>
    </div>
    <div class="footer-copyright py-3">
        © 2018 Copyright:
        <a href="#" target="">Neto Tattoo</a>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src= "<?= base_url('assets/mdb/js/jquery-3.3.1.min.js')?>"></script>
<script type="text/javascript" src= "<?= base_url('assets/mdb/js/popper.min.js')?>"></script>
<script type="text/javascript" src= "<?= base_url('assets/mdb/js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src= "<?= base_url('assets/mdb/js/mdb.min.js')?>"></script>
<script type="text/javascript" src= "<?= base_url('assets/mdb/js/jquery.mask.min.js')?>"></script>
<script type="text/javascript" src= "<?= base_url('assets/mdb/js/datatables.min.js')?>"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
    new WOW().init();
    AOS.init();
</script>
<script src="<?= base_url('assets/mdb/css/packages/core/main.js')?>"></script>
<script src="<?= base_url('assets/mdb/css/packages/interaction/main.js')?>"></script>
<script src="<?= base_url('assets/mdb/css/packages/bootstrap/main.js')?>"></script>
<script src="<?= base_url('assets/mdb/css/packages/daygrid/main.js')?>"></script>
<script src="<?= base_url('assets/mdb/css/packages/timegrid/main.js')?>"></script>
<script src="<?= base_url('assets/mdb/css/packages/list/main.js')?>"></script>
<script src="<?= base_url('assets/mdb/js/theme-chooser.js')?>"></script>
<script src="<?= base_url('assets/mdb/css/packages/core/locales/pt-br.js')?>"></script>
<script src="<?= base_url('assets/mdb/js/myscript.js')?>"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable( {
            "language": {
                "lengthMenu": "Mostrando MENU registros por página",
                "zeroRecords": "Nenhum Registro Encontrado",
                "info": "Mostrando Página PAGE de _PAGES_",
                "infoEmpty": "Nenhum registro Disponível",
                "infoFiltered": "(filtrado de MAX registro no total)"
            }
        } );
    } );
</script>
</main> 
</body>
</html>
