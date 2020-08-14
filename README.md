#Samo/YoutubeIframe
## get youtube players iframes from URL or Video ID easily

#install 
`composer require samo/youtubeiframe`

#Usage 

## in controller 
```php
use Samo\YoutubeIframe\Iframe;
public function index() 
{
    $iframe = Iframe::css('border-radius:50px;')
            ->width(100,'%')
            ->height(400,'px')
            ->noFullScreen()
            ->get('https://www.youtube.com/watch?v=iZqh10RKcVE');
    return $iframe
}
```

## in view 
```php
{{!! \App\Samo\YoutubeIframe\Iframe::css('border-radius:50px;')
            ->width(100,'%')
            ->height(400,'px')
            ->noFullScreen()
            ->get('https://www.youtube.com/watch?v=iZqh10RKcVE')!!}
```
