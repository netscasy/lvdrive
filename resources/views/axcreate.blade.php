@extends('layouts.app')

@section('content')


<div class="container">
        <h3 class="jumbotron">Laravel Ajax Validation</h3>
        <div class="alert alert-danger" style="display:none"></div>
    <form>
        <div class="form-group">
            <label>Footballer Name</label>
            <input type="text" name="footballername" class="form-control" placeholder="Enter Footballer Name" id="footballername">
        </div>


        <div class="form-group">
            <label>Club</label>
            <input type="text" name="club" class="form-control" placeholder="Enter Club" id="club">
        </div>


        <div class="form-group">
            <strong>Country</strong>
            <input type="text" name="country" class="form-control" placeholder="Enter Country" id="country">
        </div>      
        {{-- <input type="submit" name="submit" id="submit"> --}}
        <my-button text="test" type="submit"></button> />

        {{-- <div class="form-group">
            <button class="btn btn-success" id="submit">Submit</button>
        </div> --}}
    </form>
@endsection