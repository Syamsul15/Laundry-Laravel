<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
    	$member = \App\Member::paginate(7);
	    return view('admin.member.daftar_member', compact('member'));
    }

    public function create()
    {
        return view('admin.member.tambah_member');
    }

    public function store(Request $request)
    {
    	\App\Member::create($request->all());
    	return redirect('/registrasi-member');
    }

    public function edit($id)
    {
    	$member = \App\Member::find($id);
    	return view('admin.member.edit_member', compact('member'));
    }

    public function update(Request $request, $id)
    {
    	$member = \App\Member::find($id);
    	$member->update($request->all());
    	return redirect('/registrasi-member');
    }

    public function delete($id)
    {
    	$member = \App\Member::find($id);
    	$member->delete();
    	return redirect('/registrasi-member');
    }
}


