<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    public function index()
    {
        $members = Member::paginate(10);

        return view('backend.members.index', compact('members'));
    }

    public function create()
    {
        return view('backend.members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'education' => 'nullable|string',
            'deals_with' => 'required|string',
            'photo' => 'required|image',
        ]);
        $path = $request->file('photo')->store('members', ['disk' => 'my_files']);
        $photo_path = 'my_files/' . $path;
        DB::beginTransaction();
        try {
            Member::create([
                'name' => $request->name,
                'education' => $request->education,
                'deals_with' => $request->deals_with,
                'photo' => $photo_path,
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            if (file_exists(public_path($photo_path))){
                unlink(public_path($photo_path));
            }
            return redirect()->back()->withInput()->with('error', 'Something Went wrong please Try again.');
        }

        return redirect()->back()->with('success', 'New member has been added successfully');
    }

    public function destroy(Member $member)
    {
        if (file_exists(public_path($member->photo))){
            unlink(public_path($member->photo));
        }
        $member->delete();
        return redirect()->back()->with('success', 'Member Deleted Successfully');
    }
}
