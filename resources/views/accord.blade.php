@extends('layouts.app')
@section('header')
     <title>Accordion | Coder's Tape</title>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id ="app" class="col-md-8">
            <accordion  v-for="item in items" :key=item.id :item="item"></accordion>
            {{-- <my-button type="submit" ftext="SubmitVjyu" /> --}}
            {{-- <my-button type="submit" ftext="SubmitV2" /> --}}
            <my-button type="reset" ftext="ResetV" />
            {{-- <accordion  v-for="item in items" :key=item.id :item="item"></accordion> --}}
        </div>
    </div>
</div>   
@endsection
