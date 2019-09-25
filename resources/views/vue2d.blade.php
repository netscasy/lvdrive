@extends('layouts.app-novue')
@section('header')
     <title>Accordion | Coder's Tape</title>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id ="app" class="col-md-8">
        	@{{message}}
			    Something here!
        </div>
    </div>
</div>   
@endsection
<script>
	new Vue({
		el: '#app',
		    data: {
		       message: 'Some message'
		    },
  	created: function () {
    // `this` points to the vm instance
    console.log('a is: ' + this.a)
  }
});
</script>
