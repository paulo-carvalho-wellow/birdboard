@extends('layouts.app')

@section('content')
    <form method="POST" action="/projects">
        @csrf
        <h1>Create a Project</h1>
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title">
            </div>
        </div>
        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea class="textarea" name="description"></textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="btn btn-outline-primary">Create Project</button>
                <a href="/projects" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </form>
@endsection
