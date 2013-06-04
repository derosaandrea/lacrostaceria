<section id='prenotazioni' class="section_<?php echo $data->uid() ?>" data-type="background" data-speed="20">
	<article>
		<h1><?php echo html($data->title_ita()) ?> / <em><?php echo html($data->title_en()) ?></em></h1>
		<div><?php echo kirbytext($data->text()) ?></div>
		<div class='tomos'>&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;&#126;</div>
		<h1>Prenotazioni / <em>Reservation</em></h1>
		<form name='form-prenotazione' id='form_prenotazione'>
			<table>
				<tr>
					<td><label>Data / Date</label><input type='text' id='data' name='data' placeholder="gg/mm/aa" class="required" /></td>
					<td><label>Nome / Name</label><input type='text' id='nome' name='nome' placeholder="Your name" class="required" /></td>
				</tr>
				<tr>
					<td><label>Ora / H</label><input type='text' id='ora' name='ora' placeholder="hh:mm" class="required" /></td>
					<td><label>Cognome / Surname</label><input type='text' id='cognome' name='cognome' placeholder="Your surname" class="required" /></td>
				</tr>
				<tr>
					<td><label>Numero persone / People</label><input type='text' id='persone' name='persone' placeholder="" class="required" /></td>
					<td><label>Email</label><input type='email' id='email' name='email' placeholder="Your email" class="required" /></td>
				</tr>
				<tr>
					<td><label>Richieste particolari / Special requests</label>
						<textarea cols='20' id='richieste' name='richieste' placeholder="" class="required"></textarea></td>
						<td><label>Telefono / Telephone</label><input type='text' id='telefono' name='telefono' placeholder="" class="required" /><br/>
							<button type="button" id='invia_form_btn'>Conferma / Confirm</button>
							<br class="clear"></td>
						</tr>
					</table>
				</form>
				<div id="mail_non_valida">Mail non valida / Email address not valid</div>
				<div id="mail-error" class="error"></div>
			</article>

</section>