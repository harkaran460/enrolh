@extends('layouts.agent_app')
@section('content')
    <div class="page-content h-100 p-15 mx-1">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-end">
                         
                        <a href="add-template.php"><button type="button" class="btn btn-primary my-2">Add Template</button></a>
                    </div>
                </div>
                <div class="col-md-12 mt-md-2">
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th>#</th>
                            <th>TEMPLATE</th>
                            <th>CONTENT</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                    </table> 
                </div>
            </div>

        </div>
    </div>

@endsection