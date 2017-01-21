<?php
$valor_estado=$_POST['valor_estado'];
switch ($valor_estado) {
	case 1:
		exec('sudo python /var/www/html/final/py/avanza.py');
		break;
	case 2:
		exec('sudo python /var/www/html/final/py/izquierda.py');
		break;
	case 3:
		exec('sudo python /var/www/html/final/py/derecha.py');
		break;
	case 4:
		exec('sudo python /var/www/html/final/py/retrocede.py');
		break;
	case 5:
		exec('sudo python /var/www/html/final/py/para.py');
		break;
	default:
		exec('sudo python /var/www/html/final/py/para.py');
		break;
}
?>