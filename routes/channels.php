<?php

use Illuminate\Support\Facades\Broadcast;
use Spatie\Permission\Models\Role;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('pengajuan', function () {
    return true;
});

Broadcast::channel('admin', function () {
 #  return true;
    // $admin = Role::where('name','admin')->get()->pluck('id')->toAray();
    #$admin = Role::where('name','admin')->get()->pluck('id')->toArray();
    return auth()->user()->hasRole('admin');
    return  in_array($id,$admin);
});
