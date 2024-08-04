<?php

namespace App\Http\Controllers;


use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member::all();
        return view('member.index', compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'member_id' => 'required|unique:member,member_id',
            'no_identitas' => 'required|unique:member,no_identitas|max:16',
            'nama_member' => 'required|max:150',
            'password' => 'required|min:6',
            'alamat' => 'required',
            'no_hp' => 'required|max:15',
            'tgl_join' => 'required|date',
        ]);

        Member::create([
            'member_id' => $request-> member_id,
            'no_identitas' => $request-> no_identitas,
            'nama_member' => $request-> nama_member,
            'password' => bcrypt($request-> password),
            'alamat' => $request-> alamat,
            'no_hp' => $request-> no_hp,
            'tgl_join' => $request-> tgl_join, 
            ]);
        return redirect()->route('member.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('member.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('member.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'no_identitas' => 'required|max:16|unique:member,no_identitas,'.$member->id.',member_id',
            'nama_member' => 'required|max:150',
            'password' => 'sometimes|min:6',
            'alamat' => 'required',
            'no_hp' => 'required|max:15',
            'tgl_join' => 'required|date',
        ]);

        $member->update($request->all());

        return redirect()->route('member.index')->with('success', 'Member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->route('member.index')->with('success', 'Member deleted successfully.');
    }
}