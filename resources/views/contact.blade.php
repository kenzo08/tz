@extends('layouts.app')
<p>About company</p>
<p>Contact</p>
<form class="" action="/contact/submit" method="post">
    <div class="form-group row">
        <label for="name" class="col-2 col-form-label">Text</label>
        <div class="col-10">
            <input class="form-control" type="text" placeholder="Enter your name" id="name">
        </div>
        </div>
        <div class="form-group row">
            <label for="tel" class="col-2 col-form-label">Enter your telephone number</label>
            <div class="col-10">
                <input class="form-control" type="tel" id="tel">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-2 col-form-label">Email</label>
            <div class="col-10">
                <input class="form-control" type="email" value="bootstrap@example.com" id="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-url-input" class="col-2 col-form-label">URL</label>
            <div class="col-10">
                <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
            <div class="col-10">
                <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-time-input" class="col-2 col-form-label">Time</label>
            <div class="col-10">
                <input class="form-control" type="time" value="13:45:00" id="example-time-input">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Send</button>
</form>
