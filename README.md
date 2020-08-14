# Samo/YoutubeIframe
## get youtube players iframes from URL or Video ID easily

# install 
`composer require samo/youtubeiframe`

# Usage 

## in controller 
```php
use Samo\YoutubeIframe\Iframe;
public function index() 
{
    $iframe = Iframe::css('border-radius:50px;')
            ->width(100,'%')
            ->height(400,'px')
            ->noFullScreen()
            ->get('https://www.youtube.com/watch?v=35JzR2ymxJE');
    return $iframe
}
```
### Result:
 ![image of mr bing](https://i.ibb.co/vVkNjJh/1.jpg)
## in view 
```php html
<div class="video_container">
{{!! \App\Samo\YoutubeIframe\Iframe::css('border-radius:50px;')
            ->width(100,'%')
            ->height(400,'px')
            ->noFullScreen()
            ->get('https://www.youtube.com/watch?v=35JzR2ymxJE')!!}
</div>

```
# available methods:

## css($str)
defines additional CSS properities sperated by ';'
Example : 
`Iframe::css('border:1px solid #000;opacity:0.7')->get('35JzR2ymxJE');`

## height($val=300,$unit='px')
sets the player height (Default is 300px)
Example : 
`Iframe::height(500,'px')->get('35JzR2ymxJE');`
## width($val=500,$unit='px')
sets the player width (default is 500px)
Example : 
`Iframe::width(500,'px')->get('35JzR2ymxJE');`

## get($urlOrID)
returns the Iframe markup you can pass URL or Video ID
Accepted url format :
youtube.com/watch?v=xxxxxx
youtu.be.com/xxxxxxx
youtube.com/?v=xxxxxx

## noFullScreen()
disable full screen feature

## addAttribute($att)
adding HTML attributes 
Example : 
`Iframe::attribute('class="pt-5"')->get('35JzR2ymxJE');`



