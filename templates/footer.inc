</div>
<!-- <footer>
	
	<p class="text-center">
		&copy; Todos los derechos reservados <?=date('Y');?>
	</p>

</footer> -->
<script src="<?=$assets_js?>jquery-3.1.1.min.js"></script>
<script src="<?=$assets_js?>bootstrap.min.js"></script>
<script src="<?=$assets_js?>jquery.form-validator.min.js"></script>
<script src="<?=$assets_js?>jquery.form-validator.es.js"></script>
<script src="<?=$assets_js?>custom.js"></script>
<script src="<?=$assets_js?>jquery.dataTables.min.js"></script>
<script src="<?=$assets_js?>material.min.js"></script>
<script src="<?=$assets_js?>material-kit.js"></script>
<script>
        $(document).ready(function() {
            $(".eliminar-usuario").click(function(event) {
                $id = $(this).attr("data-id");
                $confirm = confirm("en verdad desea eliminar el aprendiz?");

                if ($confirm) {
                    window.location.replace("../administrador/eliminar.php?id="+$id);
                }
            });
            $('#regionales').change(function(event) {
                $marca = parseInt($(this).val());

                if($marca != 0) {
                    $.get('centros.php',{ marca: $marca}, function(data) {
                        console.log(data);

                        $('#referencias').hide();
                        setTimeout(function() {

                            $('#referencias').removeAttr('disabled');
                            $('#referencias').show().html(data);
                        }, 1000);
                        
                    });
                } else {
                    alert('Debe seleccionar un centro de formacion');
                }
                
            });
        });
    </script>
</body>
</html>