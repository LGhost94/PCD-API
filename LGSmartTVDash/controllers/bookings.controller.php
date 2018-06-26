<?php

class ControllerBookings{

/*===================================
	=            Create Booking            =
	===================================*/
	
	static public function ctrBook(){
		if(isset($_POST["newBook"])){
			$table="bookings";
			//$newCheckIn=$_POST["newCheckIn"];
			$newCheckOut="";$data=array("name"=>$_POST["newName"],
				"surname"=>$_POST["newSurname"],
				//"checkin"=>$newCheckIn,
				//"checkout"=>$newCheckOut,
				"createdby"=>"admin",
				"status"=>"Waiting");
			$response=ModelBookings::mdlBook($table, $data);
			if($response=="ok"){
				echo '<script>
				swal({
					icon: "success",
					title: "Utilizador Guardado!",
					button: "Fechar",
					}).then((result)=>{
						if(result.value){
							window.location="users";
						}
						});
						</script>';
					}
				}
			}

	/*====================================
=            XML Creation            =
====================================*/
static public function ctrGenerateXML(){
	$dom = new DOMDocument();
	$dom->encoding = 'utf-8';
	$dom->xmlVersion = '1.0';
	$dom->formatOutput = true;
	$xml_file_name = 'PMS.xml';
	$PMSData = $dom->createElement('PMSData');
	$attr_PMSData = new DOMAttr('lastUpdate', '2014-01-23T01:23:24-05:00');
	$PMSData->setAttributeNode($attr_PMSData);
	$room = $dom->createElement('room');
	$attr_room = new DOMAttr('lastUpdate', '2014-01-23T01:23:24-05:01');
	$room->setAttributeNode($attr_room);
	$roomID = $dom->createElement('roomID', 'N204');
	$room->appendChild($roomID);
	$guest = $dom->createElement('guest');
	$firstName = $dom->createElement('firstName', 'Richard');
	$guest->appendChild($firstName);
	$lastName = $dom->createElement('lastName', 'Smith');
	$guest->appendChild($lastName);
	$salutation = $dom->createElement('salutation', 'Mr.');
	$guest->appendChild($salutation);
	$langcode = $dom->createElement('langcode', 'en_GB');
	$guest->appendChild($langcode);
	$checkIn = $dom->createElement('checkIn', '2014-01-23T00:00:00-05:00');
	$guest->appendChild($checkIn);
	$scheduledCheckOut = $dom->createElement('scheduledCheckOut', '2014-01-23T00:00:00-05:00');
	$guest->appendChild($scheduledCheckOut);
	$checkInStatus = $dom->createElement('checkInStatus', 'true');
	$guest->appendChild($checkInStatus);
	$room->appendChild($guest);
	$PMSData->appendChild($room);
	$dom->appendChild($PMSData);
	$dom->save($xml_file_name);
}
}