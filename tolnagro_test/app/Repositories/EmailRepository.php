<?php

namespace App\Repositories;

use App\Models\Email;
use Illuminate\Database\Eloquent\Collection;

class EmailRepository implements EmailRepositoryInterface
{
    /**
     * @return Collection<int, Email>
     */
    public function getAllEmails()
    {
        return Email::all();
    }

    /**
     * @param array $data
     * @return Email
     */
    public function createEmail(array $data)
    {
        return Email::create($data);
    }

    /**
     * @param int $id The ID of the email to delete.
     * @return bool True if deletion was successful, false otherwise.
     */
    public function deleteEmail(int $id)
    {
        $email = Email::find($id);

        if ($email === null) {
            return false;
        }

        return $email->delete();
    }
}
