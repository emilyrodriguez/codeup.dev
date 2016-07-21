<?php
function addContact(&$contacts, $name, $number)
{
    $contacts[] = [
        'name' => $name,
        'number' => $number,
    ];
}

function searchContact($contacts, $name)
{
    $matches = [];
  	if ($name !== '') {
	    foreach ($contacts as $contact) {
	        if (strpos($contact['name'], $name) !== false) {
	            $matches[] = $contact;
	        } 
	    }
	} else {
		$matches = $contacts;
    }
    return $matches;
}

function deleteContacts(&$contacts, $name)
{
    if ($name !== '') {
        foreach ($contacts as $key => $contact) {
            if (strpos($contact['name'], $name) !== false) {
                unset($contacts[$key]);
                }
        } 
        saveContacts($contacts);
    } 
}
?>