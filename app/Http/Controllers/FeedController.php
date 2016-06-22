<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Feeds;
use View;
use Illuminate\Http\Request;

class FeedController extends Controller
{
  public function demo() {
    $feed = Feeds::make([
      'http://www.lemonde.fr/rss/une.xml',
      'http://feeds.bbci.co.uk/news/world/rss.xml',
      'http://newsrss.bbc.co.uk/rss/russian/news/rss.xml',
      'http://www.flickr.com/services/feeds/photos_public.gne?format=rss2'
    ]);
    $data = array(
      'title'     => $feed->get_title(),
      'permalink' => $feed->get_permalink(),
      'items'     => $feed->get_items(),
    );


    return View::make('feed', $data);
  }

}
