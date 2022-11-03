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
        $members = Member::orderBy('position')->paginate(10);

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
            'photo' => 'required|image|max:5120',
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
                'position' => Member::max('position') + 1,
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            if (file_exists(public_path($photo_path))) {
                unlink(public_path($photo_path));
            }
            return redirect()->back()->withInput()->with('error', 'Something Went wrong please Try again.');
        }

        return redirect()->back()->with('success', 'New member has been added successfully');
    }

    public function edit(Member $member)
    {
        return view('backend.members.edit', compact('member'));
    }

    public function update(Member $member, Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'education' => 'nullable|string',
            'deals_with' => 'required|string',
            'photo' => 'nullable|image|max:5120',
            'position' => 'required|numeric'
        ]);
        $old_photo = $member->photo;
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('members', ['disk' => 'my_files']);
            $photo_path = 'my_files/' . $path;
        }
        DB::beginTransaction();
        try {
            $member->update([
                'name' => $request->name,
                'education' => $request->education,
                'deals_with' => $request->deals_with,
                'photo' => $photo_path ?? $old_photo,
            ]);
            DB::commit();
            if ($request->hasFile('photo')) {
                if (file_exists(public_path($old_photo))) {
                    unlink(public_path($old_photo));
                }
            }
            $this->fixPositionOnUpdatingMember($request->position, $member->position);
            $member->update([
                'position' => $request->position
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', 'Something Went wrong please Try again.');
        }

        return redirect()->back()->with('success', 'Record updated Successfully.');
    }

    public function destroy(Member $member)
    {
        if (file_exists(public_path($member->photo))) {
            unlink(public_path($member->photo));
        }
        $this->fixPositionOnDeletingMember($member->position);
        $member->delete();
        return redirect()->back()->with('success', 'Member Deleted Successfully');
    }

    private function fixPositionOnUpdatingMember($position, $memberPosition)
    {
        if ($memberPosition > $position) {
            $members = Member::whereBetween('position', [$position, $memberPosition])->get();
            foreach ($members as $member) {
                $member->increment('position');
            }
        } else {
            $members = Member::whereBetween('position', [$memberPosition, $position])->get();
            foreach ($members as $member) {
                $member->decrement('position');
            }
        }
    }

    private function fixPositionOnDeletingMember($position)
    {
        $members = Member::where('position', '>', $position)->get();
        foreach($members as $member){
            $member->decrement('position');
        }
    }
}
