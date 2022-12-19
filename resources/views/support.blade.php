@extends('layouts.app')

@section('content')

<div class="container support py-4">
    <h1>Welcome To Our Support Page</h1>
    <p>If you have any trouble, please fill the form and send us a message</p>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="John" aria-describedby="nameHelper">
        <small id="nameHelper" class="text-muted">Type Your Name Here</small>
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label pt_20">Lastname</label>
        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Doe" aria-describedby="lastnameHelper">
        <small id="lastnameHelper" class="text-muted">Type Your Lastname Here</small>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label pt_20">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="johndoe@example.com" aria-describedby="emailHelper">
        <small id="emailHelper" class="text-muted">Type Your Email Here</small>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label pt_20">Message</label>
        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
    </div>
</div>
@endsection