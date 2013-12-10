
<?php
$date = "30.09.2009";
$user_name = "link";
$time = "3:00";

function startBlockWriting()
{
echo"
	<table class = 'main_table', border = '1'>
		<tr>
			<td class = 'empty_space', rowspan = '3'>
			</td>
			<td height = '1%'>
";
}

function endOfCap()
{
echo"
			</td>
			</td>
				<td class = 'empty_space', rowspan = '3'>
			</td >
		</tr>
		<tr>
			<td>
";			
};

function stopBlockWriting()
{
echo"
			</td>
		</tr>
		<tr>
			<td class = 'footer'>				
				<NOBR> ©Exsul 2013</NOBR>
			</td>
		</tr>
	</table>
";
}

function addBlock($author, $name, $tags, $date, $time, $text)
{
echo"
	<div class = 'block_div'>
		<table class = 'block_table', border = '1'>
			<tr>			
				<td>
					<NOBR class = 'block_name'>$name</NOBR>
				</td>
				<td>
					!todo! tags
				</td>
				<td align = 'right'>
					<NOBR class = 'block_date'>$time $date</NOBR>
				</td>			
			</tr>		
			<tr>			
				<td colspan='3'>
					<p class = 'block_text'>$text</p>
				</td>			
			</tr>
			<tr>	
				<td colspan='3', align = 'right'>
					<NOBR class = 'block_author'>$author</NOBR>
				</td>
			</tr>
			<tr>			
				<td colspan='2'>
					<NOBR>процитировать</NOBR>
				</td>			
				<td>
					<NOBR>плюнуть в душу</NOBR>
				</td>			
			</tr>
		</table>
	</div>
";
}