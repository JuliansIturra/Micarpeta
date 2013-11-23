<html>
	<head>
		<title>clase array</title>
	</head>
	<body>
		<script type="text/javascript">
			function cargar(sueldos){
				var f;
				for(f=0;f<sueldos.length;f++){
					 var v;
					 v = prompt('ingrese su sueldo','');
					 sueldos[f] = parseInt(v);
				}
			}

			function carcularGastos(sueldos){
				var total=0;
				var f;
				for(f=0;f<sueldos.length;f++){
					total = total + sueldos[f];
				}	
				document.write('Listado de sueldos<br>');
				for(f=0;f<sueldos.length;f++){
					document.write(sueldos[f]+'<br>');
				}
				document.write('total de gastos de sueldos: '+total);
			}

			var sueldos;
			sueldos = new Array(5);
			cargar(sueldos);
			carcularGastos(sueldos);
		</script>
	</body>
</html>