@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    To-Do List
                    <a href="/create-item" 
                        style="
                            float:right; 
                            text-decoration: none;
                            color: white;
                            font-weight: bold;
                            background: green;
                            padding: 10px;
                        "
                    >Add Item</a>
                </div>

                <div class="card-body">
                    @if(count($lists) > 0)
                        <table class="list-table">
                            <thead>
                                <tr>
                                    <td>
                                        <strong>
                                            #
                                        </strong>
                                    </td>
                                    <td>
                                        <strong>
                                            Task
                                        </strong>
                                    </td>
                                    <td>
                                        <strong>
                                            Type
                                        </strong>
                                    </td>
                                    <td >
                                        <strong>
                                            Description
                                        </strong>
                                    </td>
                                    <td >
                                        <strong>
                                            Options
                                        </strong>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lists as $key => $list )
                                    <tr>
                                        <td>
                                            {{$key + 1}}
                                        </td>
                                        <td>
                                            {{$list->task}}
                                        </td>
                                        <td>
                                            {{$list->type}}
                                        </td>
                                        <td>
                                            {{$list->description}}
                                        </td>
                                        <td>
                                            <a href="/create-item/{{$list->id}}"
                                                style="
                                                    text-decoration: none;
                                                    color: white;
                                                    font-weight: bold;
                                                    background: red;
                                                    padding: 10px;
                                                "
                                            >
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <strong>
                            No Data...
                        </strong>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
