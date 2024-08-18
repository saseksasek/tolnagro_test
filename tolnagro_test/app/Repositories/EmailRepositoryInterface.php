<?php

namespace App\Repositories;

use App\Models\Email;

interface EmailRepositoryInterface
{
    /**
     * @return Collection<int, Email>
     */
    public function getAllEmails();

    /**
     * @param array $data
     * @return Email
     */
    public function createEmail(array $data);

    /**
     * @param int $id The ID of the email to delete.
     * @return bool True if deletion was successful, false otherwise, or null if the email was not found.
     */
    public function deleteEmail(int $id);
}
