<?php foreach ($municipios as $key): ?>
	<option value="<?= $key->id_municipio ?>"><?= $key->nombre ?></option>
<?php endforeach ?>