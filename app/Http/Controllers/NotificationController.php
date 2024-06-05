<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Http\Requests\StoreNotificationRequest;
use App\Http\Requests\UpdateNotificationRequest;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifications = Notification::all();
        return view('notification.list', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notification.add');
//        $data['header_title'] = "Admin Add";
//        return view('business.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

//        dd($request->notification);

        $validated = $request->validate([
            'notification' => 'required|string',
            'status' => 'required|string',
        ]);


        Notification::create($validated);


        return redirect()->route('nlist')->with('success', 'Notification created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $notification = Notification::find($id);
        return view('notification.edit', compact('notification'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'notification' => 'required|string',
            'status' => 'required|boolean',
        ]);

        $notification = Notification::find($id);

        $notification->update([
            'notification' => $request->notification,
            'status' => $request->status,
        ]);

        return redirect()->route('nlist')->with('success', 'Notification updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $notification = Notification::find($id);

//        dd($notification);

        $notification->delete();

        return redirect()->route('nlist')->with('success', 'Notification deleted successfully.');
    }

    public function toggleStatus(Request $request, $id)
    {
        $notification = Notification::find($id);

        // If activating the current notification, deactivate all others
        if ($request->status == 1) {
            Notification::where('id', '!=', $id)->update(['status' => 0]);
        }

        $notification->status = $request->status;
        $notification->save();

        return response()->json(['success' => true]);
    }
}
