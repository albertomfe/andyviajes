<?php


?>
<html lang="es">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Andy Viajes</title>
		<meta name="Description" content="Agencia de Viajes">
	  <meta name="keywords" content="Puerto Vallarta,Cancún , Los Cabos, Riu,Hoteles,Viajes,Paseos">
		<meta name="author" content="Manuel Alberto Flores Esparza">
		<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>

		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/animated.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

	</head>

	<body>
		<!-- Load Facebook SDK for JavaScript -->
		<div id="fb-root"></div>
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      xfbml            : true,
		      version          : 'v3.3'
		    });
		  };

		  (function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<!-- Your customer chat code -->
		<div class="fb-customerchat"
		  attribution=setup_tool
		  page_id="1670977893222837"
		  theme_color="#5BAEDB">
		</div>


		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.3&appId=810733245979449&autoLogAppEvents=1"></script>



		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
					<a class="navbar-brand" href="#">
		        <img class='logo_nav' alt="Brand" src="img/logo.jpg">
		      </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a class='title_nav'>Viajes AnDy </a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Acerca</a></li>
		        <li><a href="#">Servicios</a></li>
		        <li><a href="#">Contacto</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>



	<div class="container-fluid">


		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner carousel-zoom" role="listbox">
		    <div class="item active">
		      <img src="img/banner_puerto_vallarta.jpg" alt="...">
		      <div class="carousel-caption">
		       Puerto Vallarta
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/banner_huatulco.jpg" alt="...">
		      <div class="carousel-caption">
		        Huatulco
		      </div>
		    </div>
		  </div><!-- contendor de imagenes carrusel -->

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Anterior</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Siguiente</span>
		  </a>
		</div>





		<div class='row'>
			<div class='col-md-12 text-center margenes_abajo_arriba'>
				<h1 class='titulo'>Viajes AnDy</h1>
					<p>
						  El lugar ideal para vivir unas espléndidas vacaciones!
					</p>
					<div class="fb-like" data-href="https://www.facebook.com/Viajes-AnDy-GDL-1670977893222837/" data-width="" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

			</div>
		</div>


		<div class="row margenes_laterales">
	    <div class="col-md-12">
	      <!-- Nav tabs -->
	      <div class="card">
	        <ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#agenciaEspecializada" aria-controls="agenciaEspecializada" role="tab" data-toggle="tab">
								<i class="fa fa-certificate fa-2x"></i> 
								<span>AGENCIA<br /> ESPECIALIZADA</span>
							</a>
						</li>
	          <li role="presentation" >
							<a href="#atencion_personalizada" aria-controls="atencion_personalizada" role="tab" data-toggle="tab">
								<i class="fa fa-handshake-o fa-2x"></i>
								<span>ATENCIÓN <br />PERSONALIZADA</span>
							</a>
						</li>
	          <li role="presentation">
							<a href="#actividades" aria-controls="actividades" role="tab" data-toggle="tab">
							<i class="fa fa-futbol-o fa-2x"></i>
							  <span>ACTIVIDADES /<br />EVENTOS</span>
							<br />
							</a>
						</li>
	          <li role="presentation">
							<a href="#datosImportantes" aria-controls="datosImportantes" role="tab" data-toggle="tab">
								<i class="fa fa-laptop fa-2x"></i> 
								<span>DATOS <br />IMPORTANTES</span>
							</a>
							</li>
	          <li role="presentation">
							<a href="#referencias" aria-controls="referencias" role="tab" data-toggle="tab">
								<i class="fa fa-id-card-o fa-2x"></i>
								  <span>REFERENCIAS <BR />DE CLIENTES</span>
							</a>
						</li>
	        </ul>

	        <!-- Tab panes -->
	        <div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="agenciaEspecializada">
							  Nos enfocamos al tipo de vacaciones que tienes en mente, ya sea para familias, grupos de estudiantes, parejas, voluntariados,Bodas entre otros.
						</div>

	          <div role="tabpanel" class="tab-pane" id="atencion_personalizada">
							Te ayudamos a  escoger la mejor Opción para ti deacuerdo a tus gustos y preferencias,para crear unas vacaciones especialmente para ti ,Resolvemos todas tus dudas  , con atención 100% personalizada.
						</div>
	          <div role="tabpanel" class="tab-pane" id="actividades">
							Recomendamos que para tus vacaciones, además de descansar optes por realizar alguna actividad al aire libre.<br />
							Te Mostraremos las opciones de actividades , tours y eventos que ofrece cada lugar que visitarás.
						</div>


	          <div role="tabpanel" class="tab-pane" id="datosImportantes">
							  Antes de un viaje siempre es bueno saber un poco acerca del destino que se visitará por lo que te daremos toda la Información Importante que necesitas
								saber como: moneda, clima, idiomas, qué empacar, comidas típicas, medios de transporte, entre otros.
						</div>
	          <div role="tabpanel" class="tab-pane" id="referencias">
							  Tenemos las mejores referencias de todos nuestros clientes,nos aseguramos qeu pasen momentos inolvidables.
						</div>
	        </div>
	      </div>
	    </div>
	  </div>





			<div class="container">
			  <div class="row">
					<div class="main_portfolio_content">
		        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
		            <img src="img/lasvegas.jpg" alt="" />
		            <div class="portfolio_images_overlay text-center">
		                <h6>Las Vegas</h6>
		                <a data-toggle="modal" data-target="#lasvegas_modal" class="btn btn-primary">Click Aqui</a>
		            </div>
		        </div>
		        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
		            <img src="img/puertovallarta.jpg" alt="" />
		            <div class="portfolio_images_overlay text-center">
									<h6>Puerto Vallarta </h6>
									<a data-toggle="modal" data-target="#puertoVallartaModal" class="btn btn-primary">Click Aqui</a>
		            </div>
		        </div>
		        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
		            <img src="img/cancun.jpg" alt="" />
		            <div class="portfolio_images_overlay text-center">
									<h6>Cancún</h6>
									<a data-toggle="modal" data-target="#cancunModal" class="btn btn-primary">Click Aqui</a>
		            </div>
		        </div>
		        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
		            <img src="img/playadelcarmen.jpg" alt="" />
		            <div class="portfolio_images_overlay text-center">
									<h6>Playa del Carmen</h6>
									<a data-toggle="modal" data-target="#playaModal" class="btn btn-primary">Click Aqui</a>
		            </div>
		        </div>
						<div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
		            <img src="img/disney.jpg" alt="" />
		            <div class="portfolio_images_overlay text-center">
									<h6>Disneyland</h6>
									<a data-toggle="modal" data-target="#disneyModal" class="btn btn-primary">Click Aqui</a>
		            </div>
		        </div>
						<div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
		            <img src="img/cabos.jpg" alt="" />
		            <div class="portfolio_images_overlay text-center">
									<h6>Los Cabos San Lucas</h6>
									<a data-toggle="modal" data-target="#cabosModal" class="btn btn-primary">Click Aqui</a>
		            </div>
		        </div>
						<div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
		            <img src="img/huasteca.jpg" alt="" />
		            <div class="portfolio_images_overlay text-center">
									<h6>Huasteca Potosina</h6>
									<a data-toggle="modal" data-target="#huastecaModal" class="btn btn-primary">Click Aqui</a>
		            </div>
		        </div>
						<div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
		            <img src="img/puertoescondido.jpg" alt="" />
		            <div class="portfolio_images_overlay text-center">
									<h6>Puerto Escondido<h6>
									<a data-toggle="modal" data-target="#puertoescondidoModal" class="btn btn-primary">Click Aqui</a>
		            </div>
		        </div>
						<div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
		            <img src="img/tolantongo.jpg" alt="" />
		            <div class="portfolio_images_overlay text-center">
									<h6>Grutas de Tolantongo, Hidalgo<h6>
									<a data-toggle="modal" data-target="#tolantongoModal" class="btn btn-primary">Click Aqui</a>
		            </div>
		        </div>
						<div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
		            <img src="img/tuxtla.jpg" alt="" />
		            <div class="portfolio_images_overlay text-center">
									<h6>Tuxtla Gutiérrez<h6>
									<a data-toggle="modal" data-target="#tuxtlaModal" class="btn btn-primary">Click Aqui</a>
		            </div>
		        </div>
						<div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
		            <img src="img/villahermosa.jpg" alt="" />
		            <div class="portfolio_images_overlay text-center">
									<h6>Villahermosa<h6>
									<a data-toggle="modal" data-target="#villahermosaModal" class="btn btn-primary">Click Aqui</a>
		            </div>
		        </div>
						<div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
		            <img src="img/santamaria.jpg" alt="" />
		            <div class="portfolio_images_overlay text-center">
									<h6>Santa María Huatulco<h6>
									<a data-toggle="modal" data-target="#santamariaModal" class="btn btn-primary">Click Aqui</a>
		            </div>
		        </div>

		    </div>
			</div>
		</div>




		<!--MODALS DE DESTINOS TURISTICOS --->
		<div class="modal fade" id="lasvegas_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Las Vegas</h4>
					</div>
					<div class="modal-body">

						<P>
							Las Vegas, en el desierto de Mojave de Nevada, es una ciudad turística famosa por su activa vida nocturna,
							que se centra en casinos abiertos las 24 horas del día y otras opciones de entretenimiento.
							Su calle principal y su núcleo es "The Strip", con un poco más de cuatro millas de extensión.
							Este bulevar alberga hoteles temáticos con elaboradas exhibiciones, como fuentes sincronizadas con la música o
						  réplicas de una pirámide egipcia, el Gran Canal de Venecia y la Torre Eiffel.
						</P>
						<ul>
							<li>Tiempo: 37 °C, viento del S a 13 km/h, humedad del 11 %</li>
							<li>Zona: Tiempo del Pacífico</li>
							<li>Clima: Desértico</li>

						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<!--PUERTO VALLARTA -->
		<div class="modal fade" id="puertoVallartaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Puerto Vallarta</h4>
					</div>
					<div class="modal-body">

						<P>
							Puerto Vallarta es un balneario en la costa del Pacífico de México,
							en el estado de Jalisco. Es famoso por sus playas, los deportes acuáticos y la vida nocturna.
							 En el centro con adoquines, se encuentra la adornada iglesia de Nuestra Señora de Guadalupe,
							 además de tiendas de moda y una variedad de restaurantes y bares.
							 El Malecón es un paseo costero con esculturas contemporáneas, bares, salones y clubes nocturnos.
						</P>
						<ul>
							<li>Tiempo: 27 °C, viento del SO a 8 km/h, humedad del 76 %</li>
							<li>Población: 203,342 (2010)</li>
							<li>Clima: 27°</li>

						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<!--CANCUN -->
		<div class="modal fade" id="cancunModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Cancún</h4>
					</div>
					<div class="modal-body">

						<P>
							Cancún es una ciudad de México ubicada en la península de Yucatán que limita con el mar Caribe y
							 que es conocida por sus playas, los numerosos centros turísticos y la vida nocturna.
							 Se compone de 2 áreas distintas: el área del centro más tradicional y la Zona Hotelera,
							 la franja costera con hoteles altos, clubes nocturnos, tiendas y restaurantes.
							Cancún también es un destino popular entre estudiantes durante el período de
							vacaciones universitarias en la primavera.
						</P>
						<ul>
							<li>Tiempo: 28 °C, viento del E a 11 km/h, humedad del 81 %</li>
							<li>Población: 628,306 (2010) Organización de las Naciones </li>
							<li>Clima: 28°</li>

						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<!--PLAYA DEL CARMEN -->
		<div class="modal fade" id="playaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Cancún</h4>
					</div>
					<div class="modal-body">

						<P>
							Playa del Carmen es un balneario costero de México que se ubica a lo largo de la costa caribeña
							de la Riviera Maya, en la Península de Yucatán.
							Pertenece al estado de Quintana Roo y es famosa por sus playas bordeadas de palmeras
							y los arrecifes de coral.
							La Quinta Avenida peatonal se extiende en paralelo a la playa,
							con cuadras de tiendas, restaurantes y clubes nocturnos que van
							desde bares relajados hasta clubes de baile.
						</P>
						<ul>
							<li>Tiempo: 28 °C, viento del E a 13 km/h, humedad del 80 %</li>
							<li>Población: 149,923 (2010) </li>
							<li>Clima: 28°</li>
						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<!--DISNEYLAND -->
		<div class="modal fade" id="disneyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Cancún</h4>
					</div>
					<div class="modal-body">

						<P>
							Disneyland, oficialmente Disneyland Park desde los años 1990,
							es un parque temático situado en Anaheim. Fue el primer parque de este tipo construido
						  por The Walt Disney Company, y el único que fue diseñado y
							construido bajo la supervisión del productor y cineasta estadounidense Walt Disney.​
						</P>
						<ul>
							<li>Ubicacion:California</li>
							<li>Clima: 18°</li>
						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<!--LOS CABOS -->
		<div class="modal fade" id="cabosModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Los Cabos San Lucas</h4>
					</div>
					<div class="modal-body">

						<P>
						Cabo San Lucas es un balneario en el extremo sur de la península de Baja California en México,
						conocido por sus playas, actividades acuáticas y vida nocturna.
						La Playa El Médano es la principal del Cabo, con restaurantes al aire libre
						y numerosos bares. Después de la marina, se encuentra el promontorio del Fin
						de la Tierra, donde está la Playa del Amor y El Arco, una arcada natural en los riscos marinos.
						</P>
						<ul>
							<li>Tiempo: 27 °C, viento del O a 14 km/h, humedad del 48 %</li>
							<li>Elevación: 10 m.</li>
							<li>Clima: 27°.</li>
						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<!--huasteca potosina -->
		<div class="modal fade" id="huastecaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Huesteca Potosina</h4>
					</div>
					<div class="modal-body">

						<P>
						La gran diversidad cultural de la Huasteca Potosina se conserva hasta la actualidad,
						conformada por importantes grupos de más de 250,000 habitantes que hablan náhuatl,
						tenek y pame. Estos grupos tienen sus orígenes en la cultura maya de su pasado
						y los mexicas del Altiplano que intentaron dominarlos.
						</P>
						<ul>
							<li>Clima: 29.5°.</li>
						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<!--puerto escondido -->
		<div class="modal fade" id="puertoescondidoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Puerto Escondido</h4>
					</div>
					<div class="modal-body">

						<P>
						Puerto Escondido es una ciudad portuaria y un balneario en la costa del Pacífico,
						en el estado mexicano de Oaxaca. Es conocida por sus numerosas playas
						y su animada vida nocturna. La playa Principal está rodeada de palmeras
						y bares con techos de paja. La ajetreada playa Zicatela es reconocida por
						la rompiente para el surf conocida como el "Pipeline mexicano". Cerca está la
						playa La Punta con olas más pequeñas. La playa Carrizalillo se ubica en una
						caleta resguardada por empinados acantilados.
						</P>
						<ul>
							<li>Tiempo: 28 °C, viento del E a 2 km/h, humedad del 81 %</li>
							<li>Población: 45,000 </li>
						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<!--tolantongo -->
		<div class="modal fade" id="tolantongoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Grutas Tolantongo</h4>
					</div>
					<div class="modal-body">

						<P>
								Tolantongo es un cañón y conjunto de cuevas que se ubican en el municipio del Cardonal,
								estado de Hidalgo, México. Está formado por la gruta principal en la que fluye un río de
								aguas termales y un túnel más pequeño, de aproximadamente 15 metros, ambos en la misma
								pared del cañón del mismo nombre.
						</P>
						<ul>
							<li>Clima 23° </li>
						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<!--tuxtla -->
		<div class="modal fade" id="tuxtlaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Tuxtla Gutiérrez</h4>
					</div>
					<div class="modal-body">

						<p>
							Tuxtla Gutiérrez es una ciudad del sur de México.
							Es la capital del estado de Chiapas y un núcleo de transporte regional.
							En su plaza central, la Plaza Cívica, se ubica la Catedral de San Marcos del siglo XVI.
							En las cercanías, está el Museo del Café, con exhibiciones sobre el cultivo del café en Chiapas.
							A menudo, el Parque de la Marimba es sede de conciertos de marimba.
							El Museo de la Marimba recorre la historia del instrumento.
						</p>
						<ul>
							<li>Elevación: 522 m</li>
							<li>Superficie: 96 km²</li>
							<li>Tiempo: 24 °C, viento del S a 0 km/h, humedad del 86 %</li>
						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<!--villa hermosa -->
		<div class="modal fade" id="villahermosaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Villahermosa</h4>
					</div>
					<div class="modal-body">
						<p>
							Villahermosa es la ciudad capital del estado de Tabasco en el sureste de México.
							Es sede del Parque-Museo La Venta, un museo al aire libre a un costado del lago con artefactos de la civilización olmeca,
							entre ellos altares y cabezas de piedra. Exhibiciones que recorren la historia de México
							y Tabasco llenan la Casa de los Azulejos, un edificio elegante con azulejos azules.
							El Parque Tomás Garrido Canabal tiene características inspiradas en la arquitectura prehispánica y colonial.
						</p>
						<ul>
							<li>Tiempo: 31 °C, viento del SE a 3 km/h, humedad del 72 %</li>
						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
		<!--Santa Maria Huatulco -->
		<div class="modal fade" id="santamariaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Santa Maria Huatulco</h4>
					</div>
					<div class="modal-body">
						<p>
							Santa María Huatulco, conocido simplemente como Huatulco,
							es uno de los 570 municipios que conforman al estado mexicano de Oaxaca.
							 Pertenece al distrito de Pochutla, dentro de la región costa. Fue fundado
							 aproximadamente hace 480 años y cuenta con una población de 38 629 habitantes.
						</p>
						<ul>
							<li>Elevación: 220 m</li>
							<li>Superficie: 496.7 km²</li>
							<li>Tiempo: 28 °C, viento del NO a 3 km/h, humedad del 79 %</li>
						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>















		<div class="container text-center margenes_abajo_arriba">
			<h1>Información de Contacto</h1><br>
			<div class="row text-center">
				<div class="col-sm-3 col-xs-6 first-box">
		        <h1><span class="glyphicon glyphicon-earphone"></span></h1>
		        <h3>Whats aapp</h3>
		        <p>
							Anabel Estrella<br />
							<a class='texto_blanco' target='_blank' href='https://api.whatsapp.com/send?phone=523312378344' onClick="window.open(this.href, this.target, 'width=300,height=400'); return false;">+52-33-12-37-83-44</a>
						</p>
						<br>
		    </div>
				<div class="col-sm-3 col-xs-6 fourth-box">
		        <h1><span class="glyphicon glyphicon-earphone"></span></h1>
		        <h3>Whats aapp</h3>
		        <p>
							Diego Chavez<br />
							<a class='texto_blanco' target='_blank' href='https://api.whatsapp.com/send?phone=523314030501' onClick="window.open(this.href, this.target, 'width=300,height=400'); return false;">+52-33-14-03-05-01</a>
						</p>
						<br>
		    </div>
		    <div class="col-sm-3 col-xs-6 second-box">
		        <h1><span class="glyphicon glyphicon-home"></span></h1>
		        <h3>Telefonos Oficina</h3>
		        <p class='texto_blanco'>
							33-12-37-83-44 <br /> 33-14-03-05-01
						</p>
						<br>
		    </div>
		    <div class="col-sm-3 col-xs-6 third-box">
		        <h1><span class="glyphicon glyphicon-send"></span></h1>
		        <h3>E-mail</h3>
		        <p>
								Atención al Cliente<br />
							 <a class='texto_blanco' href="mailto:name@email.com">
								 <small>Viajesandy1301<br>@gmail.com</small>
							 </a>
						</p>
						<br>
		    </div>
			</div>
		</div>



		<div class='col-md-12'>
			<div class="fb-comments" data-href="https://www.facebook.com/Viajes-AnDy-GDL-1670977893222837/" data-width="100%" data-numposts="10"></div>
		</div>




	<!--FOOTER -->

	<footer id="footer" class="clearfix">
      <div id="footer-widgets">
        <div class="container">
        <div id="footer-wrapper">
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <div id="meta-3" class="widget widgetFooter widget_meta">
	              <h4 class="widgettitle">Contacto :</h4>
	              <ul>
				    		  <li><a href="#"><i class="fa fa-home fa-fw"></i> Viajes Andy</a></li>
							  	<li><i class="fa fa-envelope fa-fw"></i><a href="mailto:name@email.com">enviar Correo</a></li>
	             	</ul>
					 		</div>
					 </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-4">
              <div id="recent-posts-3" class="widget widgetFooter widget_recent_entries">
                    <h4 class="widgettitle">Redes sociales</h4>
                    <ul>
										<li>
									     <a href="https://m.facebook.com/Viajes-Andy-GDL-1670977893222837" target="_blank"><i class="fa fa-facebook"></i> Fam Page</a>
										</li>
										<li>
									      <a href="https://www.facebook.com/groups/1637592039846181/" target="_blank"><i class="fa fa-twitter"></i> Grupo de Viajes</a>
										</li>
									</ul>
							</div>
					</div> <!-- end widget1 -->

          <div class="col-sm-6 col-md-4">
            <div id="meta-4" class="widget widgetFooter widget_meta">
							<h4 class="widgettitle">Viajes Andy</h4>
							<p >
								<ul style='color:#fff;'>
									<li>Boletos de Avión,Paquetes todo incluído</li>
									<li>Viajes nacionales e internacionales </li>
									<li>Viajes a Disney y Mas..</li>
								</ul>
							</p>
            </div>
           </div> <!-- end widget1 -->
          </div> <!-- end .row -->
        </div> <!-- end #footer-wrapper -->
        </div> <!-- end .container -->
      </div> <!-- end #footer-widgets -->

      <div id="sub-floor">
        <div class="container">
          <div class="row">
            <div class="col-md-4 copyright">
             Copy right ViajesAndy © <?php echo date("Y"); ?>
            </div>
            <div class="col-md-4 col-md-offset-4 attribution">
             Desarollado por:   <a style='color:#fff;' target="_blank" href="https://baulprogram.com.mx/">https://baulprogram.com.mx/</a> .
            </div>
          </div> <!-- end .row -->
        </div>
      </div>

    </footer>






	</div><!--contenedor -->


    <!--libreria ajax -->
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/awesome.js"></script>





	</body>

</html>
