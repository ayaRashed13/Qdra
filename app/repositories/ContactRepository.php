<?php
namespace App\repositories;

use App\Models\Contact;

class ContactRepository
{
public function all(){
    return Contact::all();
}
public function toggleReadStatus($id)
{
    $contact = Contact::findOrFail($id);

    if ($contact->status === 'read') {
        $contact->update([
            'status' => 'unread',
            'read_at' => null,
        ]);
    } else {
        $contact->update([
            'status' => 'read',
            'read_at' => now(),
        ]);
    }
}
}