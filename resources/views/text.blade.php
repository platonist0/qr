@extends('layouts.app')

@section('content')

@include('partials.bulma-header')

@include('partials.secondary-nav')

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="field">
                    <label for="input" class="label">Link:</label>
                    <p class="control">
                        <textarea id="input" v-model="QrContent" class="textarea"></textarea>
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">Live preview</label>
                    <qr :content="QrContent" :is-website="false"></qr>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection