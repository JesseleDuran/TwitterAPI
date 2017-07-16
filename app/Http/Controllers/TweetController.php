<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Tweet;
use App\User;

class TweetController extends Controller
{
    public function indexTimeline()
    {
        /*Consulta en SQL:
        SELECT tweets.tweet FROM user_user
        JOIN tweets ON user_user.seguir_id = tweets.id_user
        WHERE user_user.user_id = user_autenticado;*/
        $userAuth = User::where('id' ,Auth::id())->first();
        $tweetsTimeline = DB::table('user_user')
                          ->join('tweets', 'user_user.seguir_id', '=', 'tweets.id_user')
                          ->where('user_user.user_id', 1)->simplePaginate(15);

        return json_encode(['success' => true, 'tweets' => $tweetsTimeline]);
      }

      public function indexProfile()
      {
          $userTweets = Tweet::where('id_user' ,1)->simplePaginate(15);
          return json_encode(['success' => true, 'userTweets' => $userTweets]);
        }

      public function store(Request $request)
      {
        //seteo el usuario que está en su sesión
        $request->merge(['id_user' => Auth::id()]);
        $tweetNuevo = Tweet::create($request->all());
        $tweetNuevo->save();

        return json_encode(['success' => true]);
      }

      public function destroy($id)
      {
        Tweet::find($id)->delete();
        return Redirect::back()->with('message','Operation Successful !');
      }

      public function aumentarFav($tweet)
      {
        $twitter = Tweet::findOrFail($tweet);
        $twitter->fav += 1;
        $twitter->save();
        return json_encode(['success' => true]);
      }

      public function aumentarRt($tweet)
      {
        $twitter = Tweet::findOrFail($tweet);
        $twitter->rt += 1;
        $twitter->save();
        return json_encode(['success' => true]);
      }
}
