<?php
$table = "<table border='1px'>
	<tr> 
		<td>姓名</td>
		<td>年龄</td>
		<td>性别</td>
	</tr>
	<tr>
		<td>Kuohsin</td>
		<td>22</td>
		<td>男</td>
	</tr>

</table>";
echo $table;
echo '<hr/>';
$tab = <<<EOF
<table border="1">
	<tr>
		<td>编号</td>
		<td>日期</td>
		<td>姓名</td>
		<td>年龄</td>
	</tr>
	<tr>
		<td>1</td>
		<td>17.2.26</td>
		<td>kuohsin</td>
		<td>22</td>
	</tr>
	<tr>
		<td>2</td>
		<td>17.2.26</td>
		<td>guoxin</td>
		<td>22</td>
	</tr>

</table>
EOF;
echo $tab;
echo '<hr/>';
$table2 = <<<'EFO'
<table border="1">
	<tr>
		<td>编号</td>
		<td>日期</td>
		<td>姓名</td>
		<td>年龄</td>
	</tr>
	<tr>
		<td>1</td>
		<td>17.2.26</td>
		<td>kuohsin</td>
		<td>22</td>
	</tr>
	<tr>
		<td>2</td>
		<td>17.2.26</td>
		<td>guoxin</td>
		<td>22</td>
	</tr>

</table>
EFO;
echo $table2;
