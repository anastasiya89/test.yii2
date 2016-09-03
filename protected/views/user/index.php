
<table>
	<tr><td><b>id</b></td><td><b>email</b></td><td><b>name</b></td><td><b>patronymic</b></td><td><b>surname</b></td><td><b>money</b></td><td><b>token</b></td></tr>
	<?php
	foreach ($result as $value) {
		?>
		<tr><td><?=$value['id']?></td>
		<td><?=$value['email']?></td>
		<td><?=$value['name']?></td>
		<td><?=$value['patronymic']?></td>
		<td><?=$value['surname']?></td>
		<td><?=$value['money']?></td>
		<td><?=$value['token']?></td>
		</tr>
	<?php
	}
	?>
</table>