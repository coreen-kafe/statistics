<?php
$this->data['header'] = 'SimpleSAMLphp Statistics Consent Log';
$this->includeAtTemplateBase('includes/header.php');

?>


<?php

echo('<table style="width: 100%">');
echo('<tr><th bgcolor="#EEEEEE">Date</th><th bgcolor="#EEEEEE">Type</th><th bgcolor="#EEEEEE">User</th>
	<th bgcolor="#EEEEEE">IP address</th><th bgcolor="#EEEEEE">Service accessed</th> </tr>');

if (isset($this->data['consent'])) {
	foreach($this->data['consent'] as $consentData) {
	    if($consentData['type'] = 'authen'){
		echo "<tr><td>".$consentData['date']. "</td><td>". $consentData['type'] . "</td><td>"
		 .$consentData['user']."</td><td>".$consentData['addr']."</td><td></td></tr>";	
	    }
	    if($consentData['type'] = 'consent'){
                echo "<tr><td>".$consentData['date']. "</td><td>". $consentData['type'] . "</td><td>"
                 .$consentData['user']."</td><td>".$consentData['addr']."</td><td>".$consentData['service'] ."</td></tr>";
	    }
	}

} else {
	echo('<tr><td>No consent log found</td></tr>');
}

echo('</table>');

//echo('<p>[ <a href="showstats.php">Show statistics</a> ] </p>');

$this->includeAtTemplateBase('includes/footer.php');
