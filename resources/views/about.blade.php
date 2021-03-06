@extends('layouts.app')

@section('content')

@include('partials.bulma-header')

@include('partials.secondary-nav')

<section class="section">
    <div class="container">
        <div class="column is-6 content">
            <h2>What are Dynamic QR Codes?</h2>
            <p>
                Dynamic QR codes are QR codes which you generate once, and then modify as you please. They only work as links to websites (see below) and never change in appearance, while allowing you edit the web address they point to, after they have been generated.
            </p>
            <h2>The story behind this app</h2>
            <p>
                It's early 2017 and my soon-to-be CEO is complaining how he can't find an app that offers dynamic QR code services. I didn't even know what those were but I soon read up on the matter. I've never bothered to check how expensive it would be to create one of those premium accounts on those QR code generators which offer dynamic QR code services for a fee but I got so hooked on the challenge that I just decided to create an app that'll offer those for free.
            </p>
            <p>
                It wasn't obvious to me how dynamic QR codes work exactly but here's why they're special: Everyone knows how QR codes work - they're 2D barcodes, which means they store data in form of a graphical code. So you can store a string in a QR code which can then be read by a smartphone. Cool, right? The dude I mentioned earlier wanted to store the link to our website in one and then use that for marketing purposes. Makes sense so far. Here's the catch: we're a startup going through massive changes on a weekly basis, which means we could be changing our name tomorrow. And if we're going to change our name, we're obviously going to move our website to a new domain so the QR codes printed on the old marketing material would be obsolete which would mean that that material would turn into a waste of money. But what if you could change the location a QR code points to without changing the code? Sounds tricky since if you change the data the code stores, you completely change what the code looks like so you can't do that. The solution is very simple: the code has to point to a URL which will redirect you to some location. You then just need to change the location to which <b>that url</b> points to.
            </p>
            <p>
                So I figured I'll make an app as an excercise. The name is just a silly thing I came up with.
            </p>
            <p>
                It is worth noting, however, that this app is still very much in early development which means that I'll probably be changing the domain name and possibly the name of the app itself. Therefore, expecting stable redirects 12 months from now isn't advised.
            </p>
            <p>
                This app's source code is available on <a href="https://github.com/Musmula/qr" target="_blank">Github</a>. Feel free to contribute to the repo, there's still a lot that needs to be done and this is the best time to jump on board if you're interested.
            </p>
        </div>
    </div>
</section>

@endsection
