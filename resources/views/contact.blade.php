@extends('layouts.apps')
    @section('contents')
    <header>
	<h1>Contact us</h1>
</header>

<div id="form">

<div class="fish" id="fish"></div>
<div class="fish" id="fish2"></div>

<form id="waterform1" name="contact_form" action="{{ route('sendMessage') }}" method="POST" >
{{ csrf_field() }}
<div id="form_output" style="margin-top:5px;text-align:center;"></div>
 <div class="error-container"></div>
<div class="formgroup" id="name-form">
    <label for="name">Your name*</label>
    <input type="text" id="name" name="name" placeholder="Type Your Name" required/>
</div>

<div class="formgroup" id="email-form">
    <label for="email">Your e-mail*</label>
    <input type="email" id="email" name="email"placeholder="Type Your Email-Adress" required/>
</div>

<div class="formgroup" id="message-form">
    <label for="message">Your message</label>
    <textarea id="message" name="message" placeholder="Type Your Message " required></textarea>
</div>

	<input type="submit" value="Send your message!" />
</form>
</div>
    
@endsection