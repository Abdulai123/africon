<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobs = Job::all();
        return view('Jobs.job-listing', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Jobs.job-single');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobRequest $request)
    {

        // Get the data from the request
        $job                    = new Job();
        $job->user_id           = auth()->user()->id;
        $job->title             = $request->title;
        $job->description       = $request->description;
        $job->location          = $request->location;
        $job->type              = $request->type;
        $job->encourage_type    = $request->encourage_type;
        $job->experience        = $request->experience;
        $job->education         = $request->education;
        $job->pay               = $request->pay;
        $job->skills            = $request->skills;
        $job->deadline          = $request->deadline;
        $job->language          = $request->language;
        $job->status            = $request->status;
        $job->visibility        = $request->visibility;

        // return true if everything is correct else return false
        $job->save() ? true : redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobRequest  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        // Get the data from the request
        if (auth()->user()->id  == $job->user_id) {
            $job->title             = $request->title;
            $job->description       = $request->description;
            $job->location          = $request->location;
            $job->type              = $request->type;
            $job->encourage_type    = $request->encourage_type;
            $job->experience        = $request->experience;
            $job->education         = $request->education;
            $job->pay               = $request->pay;
            $job->skills            = $request->skills;
            $job->deadline          = $request->deadline;
            $job->language          = $request->language;
            $job->status            = $request->status;
            $job->visibility        = $request->visibility;

            // return true if everything is correct else return false
            $job->save() ? true : redirect()->back();
        }
        return abort(503);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //delete this job if he/she is the owner
        return $job->user_id == auth()->user->id ? $job->delete() : abort(503);
    }
}
