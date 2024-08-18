<?php

namespace App\Http\Controllers;

use App\Repositories\EmailRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class EmailController extends Controller
{
    /**
     * @var EmailRepositoryInterface
     */
    protected $emailRepository;

    public function __construct(EmailRepositoryInterface $emailRepository)
    {
        $this->emailRepository = $emailRepository;
    }


    public function index()
    {
        $emails = $this->emailRepository->getAllEmails();
        return view('emails.index', compact('emails'));
    }

    public function create()
    {
        return view('emails.create');
    }

    /**
     * save a new email to the database
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $this->emailRepository->createEmail($request->all());

        return redirect()->route('emails.index')->with('success', 'Email created successfully.');
    }

    /**
     * Delete an email by id
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        $this->emailRepository->deleteEmail($id);

        return redirect()->route('emails.index')->with('success', 'Email deleted successfully.');
    }
}
