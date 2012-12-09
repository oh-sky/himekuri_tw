<?php
App::import('Vendor','twitteroauth');

class CalendarShell extends AppShell {
  public $uses = array('Calendar','Author');

  public function post_tweet($date = null){
    
    if(!preg_match('/[0-9]{4}-[01][0-9]-[0-3][0-9]/',$date)){
      //引数がYYYY-MM-DD形式でなかったら、今日の日付をセットする
      $date = date('Y-m-d');
    }

    Configure::load('twapp.php');
    $twapp_consumer_key = Configure::read('twapp_consumer_key');
    $twapp_consumer_secret = Configure::read('twapp_consumer_secret');
    $twapp_access_token = Configure::read('twapp_access_token');
    $twapp_access_secret = Configure::read('twapp_access_secret');

    //指定した日付の日めくりカレンダーを取得
    $options = array('conditions'=>array('Calendar.date'=>$date));
    $data = $this->Calendar->find('first',$options);

    if($data){
      //twitteroauthオブジェクトを生成
      $to = new TwitterOAuth($twapp_consumer_key,$twapp_consumer_secret,$twapp_access_token,$twapp_access_secret);

      //画像とメッセージをtwitterに投稿
      $status = array('status'=>"{$data['Calendar']['message']} by {$data['Author']['name']}".rand(),
                      'media[]'=>$data['Calendar']['image']
      );
      $res = $to->postImg('https://api.twitter.com/1.1/statuses/update_with_media.json',$status);

      //コメントを投稿
      $status = array('status'=>"{$data['Calendar']['comment']} https://twitter.com/{$res->user->screen_name}/status/{$res->id} ".rand());
      $res2 = $to->OAuthRequest('https://api.twitter.com/1.1/statuses/update.json','POST',$status);

    }

  }
}