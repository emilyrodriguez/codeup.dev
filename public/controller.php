<?php  
function viewContacts($contacts)
{
    $contactsTable = formatContacts($contacts);
}

function newContact(&$contacts, $name, $number)
{
    addContact($contacts, $name, $number);
    saveContacts($contacts);
}

function findContact($contacts)
{
    $matches = searchContact($contacts, $name);
    alert(formatContacts($matches));
}

function deleteContact(&$contacts, $name)
{
    if ($name !== "") {
		deleteContacts($contacts, $name);
    }
    
}

?>