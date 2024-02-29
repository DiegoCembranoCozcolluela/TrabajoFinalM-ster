<article>
	<header>
		<div id=""><h1>Solicitud de presupuesto</h1></div>
	</header>
		<span><p>Estart está preparada para proporcionarle un amplio rango de servicios. Rellene este formulario para recibir un presupuesto especializado para sus necesidades. No olvide rellenar todos los campos.</p></span>
</article>
<span>
	<form name="formulario_presupuesto" action="" method="" id="Formulario_presupuesto" class="formulario_presupuesto" onsubmit="return validar_formulario_presupuesto(this)">
		<h3>DATOS: </h3><br/></br>
		Nombre: <input type="text" name="nombre" class="caja_gris" maxlength="50" size="91" id="Nombre" value="" placeholder="" required /><br/>
		Apellidos: <input type="text" name="apellidos" class="caja_gris" maxlength="50" size="90" id="Apellidos" value="" placeholder="" required /><br/>
		Telefono de contacto: <input type="tel" name="telefono" class="caja_gris" maxlength="50" size="80" id="Telefono" value="" placeholder="" required /><br/>
		Email: <input type="email" name="email" class="caja_gris" maxlength="50" size="93" id="Email" value="" placeholder="" required /><br/><br/>

		<h3>LA WEB: </h3><br/><br/>
		Tipo de página web: 	<select id="select1" onChange="calcularPresupuesto();">
						<option value="0">Selecciona una opcion</option>
						<option value="500">Pequeña (precio base 500€)</option>
						<option value="1000">Mediana (precio base 1000€)</option>
						<option value="1500">Grande (precio base 1500€)</option>
					</select><br/><br/>
		Plazo en meses: <input type="number" name="plazo" class="caja_gris" minlength="1" size="40" id="Plazo" value="" placeholder="" onChange="calcularPresupuesto();" required /><br/>
		Marque las secciones deseadas:<br/>
		<input type="checkbox" name="check" id="check1" onChange="calcularPresupuesto();" /> Quienes somos <input type="checkbox" name="check" id="check2" onChange="calcularPresupuesto();" /> Donde estamos <input type="checkbox" name="check" id="check3" onChange="calcularPresupuesto();" /> Galería de fotos <input type="checkbox" name="check" id="check4" onChange="calcularPresupuesto();" /> eComerce <input type="checkbox" name="check" id="check5" onChange="calcularPresupuesto();" /> Gestión interna <br/>
		<input type="checkbox" name="check" id="check6" onChange="calcularPresupuesto();" /> Noticias <input type="checkbox" name="check" id="check7" onChange="calcularPresupuesto();" /> Facebook <input type="checkbox" name="check" id="check8" onChange="calcularPresupuesto();" /> Twitter <br/><br/>

		<h3>Presupuesto estimado:</h3>
		(recuerde que este presupuesto es estimado, dependiendo de la web podría aumentar o disminuir).<br/><br/>
		<textarea cols="30" rows="1" overflow:auto name="resultado" class="caja_gris" id="Resultado" value="" placeholder="" disabled></textarea><br/><br/>
		<input type="submit" name="Boton de enviar" value="ENVIAR FORMULARIO" class="boton_form morado" />
		<input type="reset" name="Boton de borrado" value="BORRAR FORMULARIO" class="boton_form morado" />
	</form>
</span>