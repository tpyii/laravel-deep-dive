<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Requests\UsersRequest;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', [
            'item' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UsersRequest $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UsersRequest $request, User $user)
    {
        $validated = $request->validated();

        return $user->update($validated)
            ? redirect()->route('admin.users.index')->with('success', 'Success')
            : back()->withInput()->withErrors('Unexpected error');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return $user->delete()
            ? redirect()->route('admin.users.index')->with('success', 'Success')
            : back()->withInput()->withErrors('Unexpected error');
    }
}
