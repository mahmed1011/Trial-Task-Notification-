<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\CustomNotification;
use App\Notifications\CustomEmailNotification;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $total_users = User::where('role', 'user')->get()->count();
        return view('admin.index', compact('total_users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function users()
    {
        $users = User::all();
        return view('admin.users.show-users', compact('users'));
    }

    public function user_destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Alert::success('User Delete Successfully');
        return redirect()->route('users');
    }

    public function showSendNotificationForm()
    {
        $users = User::all(); // Fetch all users for the dropdown
        return view('admin.notification.form', compact('users'));
    }

    public function sendNotification(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ]);

        $user = User::findOrFail($request->user_id);

        // Send the custom notification to the selected user
        $user->notify(new CustomNotification($request->message));
        Alert::success('Notification sent successfully.');
        return redirect()->route('admin.send-notification')->with('success', 'Notification sent successfully.');
    }

    public function showEmailForm()
    {
        $users = User::all();
        return view('admin.email-content.edit', compact('users'));
    }

    public function sendCustomEmail(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'email_subject' => 'required',
            'email_message' => 'required',
        ]);

        $user = User::find($request->input('user_id'));
        $emailSubject = $request->input('email_subject');
        $emailMessage = $request->input('email_message');

        // Send the custom email notification with subject and message
        $user->notify(new CustomEmailNotification($emailSubject, $emailMessage));
        Alert::success('Custom email sent successfully');
        return redirect()->route('admin.email.form')->with('success', 'Custom email sent successfully.');
    }
}
