@foreach($phoneNumbers as $phoneNumber)
    <div class="phone-number">
        <h4> {{$phoneNumber->user->name}}</h4>
        <h5> {{$phoneNumber->phone_number}}</h5>
        <p> {{$phoneNumber->user->email}}</p><br>
    </div>
@endforeach