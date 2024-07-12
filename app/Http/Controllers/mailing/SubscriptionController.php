<?php

namespace App\Http\Controllers\mailing;

use App\Token;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
   public function unsubscribe(Token $token)
   {
        dd($token->user->name);
   }
}
