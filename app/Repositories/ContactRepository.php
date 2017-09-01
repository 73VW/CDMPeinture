<?php
namespace App\Repositories;
use App\Contact;
use App\Repositories\ContactRepositoryInterface;

class ContactRepository
{
    protected $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function getPaginate($n)
    {
        return $this->contact->paginate($n);
    }

    public function store(Array $inputs)
    {
        return $this->contact->create($inputs);
    }

    public function update(Contact $contact, Array $inputs)
    {
        $contact->update($inputs);
    }
    public function destroy(Contact $contact)
    {
        $contact->delete();
    }
}
 ?>
