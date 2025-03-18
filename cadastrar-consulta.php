<h1>Cadastrar Consulta</h1>
<form action="?page=salvar-consulta" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Paciente</label>
		<select name="paciente_id_paciente" class="form-control">
			<option>-= Escolha o paciente =-</option>
			<?php
				$sql_1 = "SELECT * FROM paciente";

				$res_1 = $conn->query($sql_1);

				if($res_1->num_rows > 0){
					while($row_1 = $res_1->fetch_object()){
						print "<option value='".$row_1->id_paciente."'>".$row_1->nome_paciente."</option>";
					}
				} else{
					print "<option>Não há pacientes</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Médico</label>
		<select name="medico_id_medico" class="form-control">
			<option>-= Escolha o medico =-</option>
			<?php
				$sql_2 = "SELECT * FROM medico";

				$res_2 = $conn->query($sql_2);

				if($res_2->num_rows > 0){
					while($row_2 = $res_2->fetch_object()){
						print "<option value='".$row_2->id_medico."'>".$row_2->nome_medico."</option>";
					}
				} else{
					print "<option>Não há medicos</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Data</label>
		<input type="date" name="data_consulta" class="form-control">
	</div>
	<div class="mb-3">
		<label>Hora</label>
		<input type="time" name="hora_consulta" class="form-control">
	</div>
	<div class="mb-3">
		<label>Descrição</label>
		<textarea name="descricao_consulta" class="form-control"></textarea>
	</div>
	<div class="mb-3">
		<button class="btn btn-success" type="submit">Salvar</button>
	</div>
</form>