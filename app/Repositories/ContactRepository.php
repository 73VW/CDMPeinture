<?php

namespace App\Repositories;

use App\Contact;

class ContactRepository
{
    protected $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function getPaginate($n)
    {
        return $this->contact->orderBy('client', 'desc')->paginate($n);
    }

    public function client($bool, $n)
    {
        return $this->contact->where('client', $bool)->paginate($n);
    }

    public function store(array $inputs)
    {
        return $this->contact->create($inputs);
    }

    public function update(Contact $contact, array $inputs)
    {
        $contact->update($inputs);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
    }
}
