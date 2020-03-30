@extends('layouts.app')


@section('content')
    <div id="waitlist-page">
      <div class="content-box">
        <div class="row">
      <div class="col-md-6">
    <h1>Get On The List</h1>
    <form>
  <div class="form-group">
    <label for="emailinput">Email address</label>
    <input type="email" class="form-control" name="email" id="emailinput" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="phoneinput">Phone #</label>
    <input name="phone"type="text" class="form-control" id="phoneinput" placeholder="715-685-9823">
  </div>
  <div class="form-group">
    <label for="guestsinput">How Many Guest</label>
    <select name="guests" class="form-control" id="guestsinput">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="timeinput">What Time</label>
    <select name="time" class="form-control" id="timeinput">
      <option value="6">6:00 PM</option>
      <option value="7">7:00 PM</option>
      <option value="8">8:00 PM</option>
      <option value="9">9:00 PM</option>
      <option value="10">10:00 PM</option>
    </select>
  </div>
  <div class="form-group">
     <button type="submit" class="btn btn-primary mb-2">Confirm</button>
  </div>
</form>
    </div>
    <div class="col-md-6">
      <p>We're committed to providing superior quality services to our customers and restaurants. To assist us in maintaining a consistently high level of service with our member restaurants and patrons, customers are encouraged to cancel any reservations that they will be unable to honor at least 30 minutes in advance on the day of the reservation. </p>
    </div>
        </div>
      </div>
  </div>
@endsection
