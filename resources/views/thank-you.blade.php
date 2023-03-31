@extends('layout/layout-common')

@section('space-work')
<div class="container">
<div class="text-center">

<h2>Thank You for submitting Exam , {{ Auth::user()->name }}</h2>
<p> We Wiill review your Exam and will update you by Email </p>
<a href="/dashboard" class="btn btn-info"> Go Back  </a>
</div>
</div>
@endsection