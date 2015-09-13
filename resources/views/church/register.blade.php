@extends('layouts.master')
@section('title', 'Church Registration')

@section('content')

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script>
    Stripe.setPublishableKey({{env('STRIPE_KEY')}});
    jQuery(function($) {
        $('#subscription-form').submit(function(event) {
            var $form = $(this);
            $form.find('button').prop('disabled', true);
            Stripe.card.createToken($form, stripeResponseHandler);

            return false;
        });
    });

    var stripeResponseHandler = function(status, response) {
        var $form = $('#subscription-form');

        if (response.error) {
            $form.find('.payment-errors').text(response.error.message);
            $form.find('button').prop('disabled', false);
        } else {
            var token = response.id;
            $form.append($('<input type="hidden" name="stripeToken" />').val(token));
            $form.get(0).submit();
        }
    };
</script>

<form id="subscription-form" method="POST" action="register">
    {!! csrf_field() !!}
    <input type="hidden" name="type" value="church" />



    <div class="form-group">
        
        <input placeholder="Name" class="form-control" type="text" name="name" value="{{ old('name') }}">
   
        
        <input placeholder="Email" class="form-control" type="email" name="email" value="{{ old('email') }}">
   
        <input placeholder="Address" class="form-control" type="address" name="address" value="{{ old('address') }}">
   
        <input placeholder="Password" class="form-control" type="password" name="password">
    
        
        <input placeholder="Confirm Password" class="form-control" type="password" name="password_confirmation">
     <div class="form-row">
                <label>Card Number</label>
                <input type="text" size="20" autocomplete="off" class="card-number" />
            </div>
            <div class="form-row">
                <label>CVC</label>
                <input type="text" size="4" autocomplete="off" class="card-cvc" />
            </div>
            <div class="form-row">
                <label>Expiration (MM/YYYY)</label>
                <input type="text" size="2" class="card-expiry-month"/>
                <span> / </span>
                <input type="text" size="4" class="card-expiry-year"/>
            </div>
 <div>
        <button class="btn btn-info btn-lg" type="submit">Register</button>
    </div>
    </div>

   
</form>

@endsection
