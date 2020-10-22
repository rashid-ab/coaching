<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }
    public function coach()
    {
        return view('pages.coach');
    }
    public function referral()
    {
        return view('pages.referrals');
    }
    public function transactions()
    {
        return view('pages/transactions');
    }
    public function subscription()
    {
        return view('pages.subscription');
    }
    public function feedback()
    {
        return view('pages.feedback');
    }
    public function report()
    {
        return view('pages.report');
    }
    public function privacy_policy()
    {
        return view('pages.privacy_policy');
    }
    public function account_settings()
    {
        return view('pages.account_settings');
    }
    public function inbox()
    {
        return view('pages.inbox');
    }
    public function notifications()
    {
        return view('pages.notifications');
    }
    public function create_notifications()
    {
        return view('pages.create_notifications');
    }
    public function user_detail()
    {
        return view('pages.user_detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
