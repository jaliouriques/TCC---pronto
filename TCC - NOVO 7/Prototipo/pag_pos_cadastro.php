<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>O Construtor</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="css/theme.css" rel="stylesheet">
	<!-- Custom Fonts -->

    <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $('.calcular').click(function () {
                var tijolos     = $('#tijolo').val();
                var azulejo     = $('#azulejo').val();
                var areia       = $('#areia1').val();
                var cal         = $('#cal1').val();
                var cimento     = $('#cimento1').val();
                var largura     = $('#metrosLarg').val();
                var comprimento = $('#metrosCompr').val();
                // alert(tijolos+'/'+areia+'/'+azulejo+'/'+cal+'/'+cimento+'/'+largura+'/'+comprimento);
                $.ajax({
                    url:'apc.php',
                    method:'POST',
                    data:{tijolos1:tijolos,azulejo1:azulejo,areia1:areia,cal1:cal,cimento1:cimento,largura:largura,comprimento:comprimento},
                    success: function (data) {
                        $('.resultado').html(data);
                        $('#salvar-hist').click(function () {
                            var qtdtijolo   = $('#qtd_tijolo').text();
                            var qtdazulejo  = $('#qtd_azulejo').text();
                            var qtdareia    = $('#qtd_areia').text();
                            var qtdcal      = $('#qtd_cal').text();
                            var qtdcimento  = $('#qtd_cimento').text();

                            // alert(qtdtijolo+'/'+qtdazulejo+'/'+qtdareia+'/'+qtdcal+'/'+qtdcimento);
                            $.ajax({
                                url:'salvar.php',
                                type: 'POST',
                                data:{qtd_tijolo:qtdtijolo,qtd_azulejo:qtdazulejo,qtd_areia:qtdareia,qtd_cal:qtdcal,qtd_cimento:qtdcimento},
                                success: function (slv) {
                                    $('.resultado').html(slv);
                                }
                            });
                        });
                    }
                });
               // $.post("apc.php", {tijolo1:tijolos,azulejo1:azulejo,areia1:areia,cal1:cal,cimento1:cimento,largura:largura,comprimento:comprimento}, function(data){
               //     $('.resultado').html(data);
               // });
            });

            var clicado1 = 0;
            $(".material-areia").on("click", function(){
                if(clicado1 == 0){
                    $('.material-areia').val('option2');
                    clicado1 = 1;
                }
                else{
                    $('.material-areia').val('');
                    clicado1 = 0;
                }
            });

            var clicado2 = 0;
            $(".material-cal").on("click", function(){
                if(clicado2 == 0){
                    $('.material-cal').val('option4');
                    clicado2 = 1;
                }
                else{
                    $('.material-cal').val('');
                    clicado2 = 0;
                }
            });

            var clicado3 = 0;
            $(".material-cimento").on("click", function(){
                if(clicado3 == 0){
                    $('.material-cimento').val('option5');
                    clicado3 = 1;
                }
                else{
                    $('.material-cimento').val('');
                    clicado3 = 0;
                }
            });


        });


    </script>

	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="css/ajuste_calculo.css" rel="stylesheet">
	<link href="css/ajuste_calculo2.css" rel="stylesheet">

	<nav class="navbar navbar-expand-md navbar-custom fixed-top">
		<div class="container">
			<a class="navbar-brand nome col-lg-9" id="logo" href="index.html">O Construtor</a>

			<div class="collapse navbar-collapse links col-lg-3" id="navbarsDefault">
				<ul class="navbar-custom navbar-nav ml-auto">

					<li class="nav-item active">
						<a class="nav-link" id="historico" href="historico.html">Histórico</a>
					</li>

				</ul>

			</div>
		</div>
	</nav>




</head>
<section id="single-project">
	<div class="container content-section text-center">
		<div class="row">
<!--            <form class="form">-->
			<div class="col-lg-4">

				<h2>Selecione o que você deseja:</h2>
<!--				<form class="form-horizontal form-calcular-precos-materiais">-->
					<!-- action="index.html"-->


					<!-- conjunto tijolos -->
					<div class="seletor-materiais" id="tijolos" name="tijolos">
						<label class="checkbox-inline">
							<input type="checkbox" class="material" value="option1" name="tijolos1"> Tijolos
						</label>

						<select id="tijolo" class="nao-selecionado seletor form-control">
                            <option>Selecione...</option>
							<option value="1">Tijolo de vedação: 0,09m X 0,19m X 0,19m</option>
							<option value="2">Tijolo de vedação: 0,09m X 0,19m X 0,29m</option>
							<option value="3">Tijolo de vedação: 0,115m X 0,19m X 0,19m</option>
							<option value="4">Tijolo de vedação: 0,115m X 0,19m X 0,29m</option>
							<option value="5">Tijolo de vedação: 0,14m X 0,19m X 0,19m</option>
							<option value="6">Tijolo de vedação: 0,14m X 0,19m X 0,29m</option>
							<option value="7">Tijolo 10 furos: 0,05m X 0,09m X 0,19m</option>
							<option value="8">Tijolo 18 furos: 0,055m X 0,11m X 0,23</option>
						</select>
					</div>

					<!-- conjunto areia -->
					<div class="seletor-materiais" id="areia" name="areia">
						<label class="checkbox-inline">
							<input id="areia1" type="checkbox" class="material-areia" value="" name="areia1"> Areia
						</label>

					</div>


					<!-- conjunto azulejos -->
					<div class="seletor-materiais" id="azulejos" name="azulejos">
						<label class="checkbox-inline">
							<input type="checkbox" class="material" value="option3" name="azulejo1" > Azulejos
						</label>

						<select id="azulejo" class="nao-selecionado seletor form-control">
                            <option>Selecione...</option>
							<option value="1">0,30m X 0,30m</option>
							<option value="2">0,30m X 0,50m</option>
							<option value="3">0,42m X 0,42m</option>
						</select>
					</div>

					<!-- conjunto cal -->
					<div class="seletor-materiais" id="cal" name="cal">
						<label class="checkbox-inline">
							<input id="cal1" type="checkbox" class="material-cal" value="" name="cal1"> Cal
						</label>

						</select>
					</div>

					<!--conjunto cimento-->
					<div class="seletor-materiais" id="cimento" name="cimento">
						<label class="checkbox-inline">
							<input id="cimento1" type="checkbox" class="material-cimento" value="" name="cimento1"> Cimento
						</label>

						</select>
					</div>

				</div>

				<div class="col-lg-4 col-lg-offset-2">
					<div class="receptor-metragem" id="metragem">


						<h2>Nos informe a metragem da área que deseja:</h2>
						<input type="number" step="0.1" class="form-control" id="metrosLarg" name="largura" placeholder="altura">
                        <br>
						<input type="number" step="0.1" class="form-control" id="metrosCompr" name="comprimento" placeholder="comprimento">

					</div>



					<div class="calcular">
						<!-- <div class="col-sm-offset-2 col-sm-10"> -->
						<br>
						<button id="print-result" class="btn btn-default">Calcular</button>
						<!-- </div> -->
					</div>

				</div>
<!--            </form>-->
			</div>
        <div class="resultado text-center">

        </div>
	</div>
</section>


<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>

<script src="js/theme.js"></script>

<script>
	$('.material').click(function(){
		var seletor = $(this).parent().parent();
		seletor.find('.seletor').toggleClass( "nao-selecionado");
	});
</script>

</body>
</html>