<?php

class TasksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Task::all();
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        print 'vagy create?';
//        $input = Input::all();
//        print_r($input['title']);
//        //   return Task::create(array(
//        //    'title' => $input->title
//        //));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        print 'akkor store?';
        $input = Input::all();
        print_r($input['title']);
        $task = Task::create(array('title' => $input['title'], 'completed' => $input['completed']));
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Task::find($id);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
        $task = Task::find($id);

        $task->title = $input['title'];
        $task->completed = $input['completed'];

        $task->save();


	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$task = Task::find($id)->delete();

	}


}
