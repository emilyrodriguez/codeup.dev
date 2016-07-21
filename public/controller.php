<?php  
function viewContacts($contacts)
{
    $contactsTable = formatContacts($contacts);
    alert($contactsTable);
}

function newContact(&$contacts, $name, $number)
{
    addContact($contacts, $name, $number);
    saveContacts($contacts);
}

function findContact($contacts)
{
    $name = inputName('Enter the name to search:');
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