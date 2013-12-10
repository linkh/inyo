<?php	
function cap($user_name, $user_dick_length)
{
echo"
	<table class = 'cap_table' width = 100%>
		<tr>			
			<td colspan = '3'>
				<img class = 'cap_logo' src='/img/inyo.bmp'>
			</td>
			<td>
				<form class='cap_search' method='get' action='/search' target='_blank'>
				<input type='text' name='' placeholder='поиск' value=''>
				</form> 
			</td>
			<td rowspan = '2'>
				<div class = 'cap_user_in'>
					<table class = 'cap_table_user_in'>
						<tr>
							<td>
								<NOBR class = 'cap_profile_link'>Автор: $user_name </NOBR>
							</td>
						</tr>
						<tr>
							<td>
								<NOBR class = 'cap_profile_link'>цитируемость:$user_dick_length</NOBR>
							</td>
						</tr>
						<tr>
							<td>
								<NOBR class = 'cap_profile_link'>Мои цитаты</NOBR>
							</td>
						</tr>
						<tr>
							<td>
								<NOBR class = 'cap_profile_link'>Оцененное</NOBR>
							</td>
						</tr>
						<tr>
							<td>
								<NOBR class = 'cap_profile_link'>Позвать музу</NOBR>
							</td>
						</tr>
					</table>
				</div>
			</td>			
		</tr>
		<tr>
			<th class = 'cap_down_cell'>
				<NOBR class = 'cap_down_link'>Вечное</NOBR>
			</th>
			<th class = 'cap_down_cell'>
				<NOBR class = 'cap_down_link'>Занимательное</NOBR>
			</th>
			<th class = 'cap_down_cell'>
				<NOBR class = 'cap_down_link'>бумага все стерпит</NOBR>
			</th>
			<th class = 'cap_down_cell'>
				<NOBR class = 'cap_down_link'>что я имел ввиду?</NOBR>
			</th>
		</tr>
	</table>
";
}