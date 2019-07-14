@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Add Item
                </div>

                <div class="card-body">
                    <div class="form-container">
                        <form action="/create-item" method="POST">
                            @csrf
                            <input value="{{Auth::user()->id}}" name="user_id" type="hidden" required/>
                            <div class="form-item">
                                <input placeholder="Task" name="task" type="text" required/>
                            </div>
                            <div class="form-item">
                                <input placeholder="description" name="description" type="text" required/>
                            </div>
                            <div class="form-item">
                                <select name="type" type="text" required>
                                    <option value="" selected disabled>-- Select Item --</option>
                                    <option value="school">School Work</option>
                                    <option value="house">House Work</option>
                                    <option value="personal">Personal Work</option>
                                </select>
                            </div>
                            <div class="form-item">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
