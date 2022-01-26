<?php
include_once("header.php");
?>

<section>

    <div class="container" id="destaque-produtos-container">

        <div id="destaque-produtos">

            <div class="item">

                <div class="col-sm-6 col-imagem">
                    <img src="img/produtos/moto-x.png" alt="Nome do produto">
                </div>
                <div class="col-sm-6 col-descricao">
                    <h2>
                        Smartphone Motorola X Play Dual chip Desbloqueado Android 5.1
                    </h2>
                    <div class="box-valor">
                        <div class="text-noboleto .text-arial-cinza ">no boleto</div>
                        <div class="text-por .text-arial-cinza ">por</div>
                        <div class="text-reais text-roxo">R$</div>
                        <div class="text-valor text-roxo">1.259</div>
                        <div class="text-valor-centavos text-roxo">,10</div>
                        <div class="text-parcelas .text-arial-cinza ">ou em até 8x de R$ 174,88</div>
                        <div class="text-total .text-arial-cinza ">total a prazo R$ 1.399,00</div>


                    </div>
                    <a href="#" class="btn btn-comprar text-roxo"><i class="fas fa-cart-plus"></i> compre agora</a>
                </div>

            </div>

            <div class="item">

                <div class="col-sm-6 col-imagem">
                    <img src="img/produtos/moto-x.png" alt="Nome do produto">
                </div>
                <div class="col-sm-6 col-descricao">
                    <h2>
                        Smartphone Motorola X Play Dual chip Desbloqueado Android 5.1
                    </h2>
                    <div class="box-valor">
                        <div class="text-noboleto .text-arial-cinza ">no boleto</div>
                        <div class="text-por .text-arial-cinza ">por</div>
                        <div class="text-reais text-roxo">R$</div>
                        <div class="text-valor text-roxo">1.259</div>
                        <div class="text-valor-centavos text-roxo">,10</div>
                        <div class="text-parcelas .text-arial-cinza ">ou em até 8x de R$ 174,88</div>
                        <div class="text-total .text-arial-cinza ">total a prazo R$ 1.399,00</div>


                    </div>
                    <a href="#" class="btn btn-comprar text-roxo"><i class="fas fa-cart-plus"></i> compre agora</a>
                </div>

            </div>

        </div>
        <button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
        <button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>

    </div>

	<div id="promocoes" class="container">
		<div class="row">
			<div class="col-md-2">
				<div class="box-promocao box-1">
					<p>escolha por desconto</p>
				</div>
			</div>
			<div class="col-md-10">
				<div class="row-fluid">
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">40</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">60</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
						
					</div>
					<div class="col-md-3">
						
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">80</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
						
					</div>
					<div class="col-md-3">
						
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">85</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>


</section>

<script src="https://kit.fontawesome.com/9ffce81729.js" crossorigin="anonymous"></script>

<?php
include_once("footer.php");
?>

<script>
$(function() {
    $("#destaque-produtos").owlCarousel({
        // autoPlay: 5000,
        items: 1,
        singleItem: true
    });

    var owlDestaque = $("#destaque-produtos").data('owlCarousel');

    $('#btn-destaque-prev').on("click", function() {

        owlDestaque.prev();

    });

    $('#btn-destaque-next').on("click", function() {

        owlDestaque.next();

    });
});
</script>